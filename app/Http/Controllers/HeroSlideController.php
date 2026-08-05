<?php

namespace App\Http\Controllers;

use App\Models\HeroSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSlideController extends Controller
{
    public function index(Request $request)
    {
        $query = HeroSlide::query();

        // Search Filter (by title)
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%{$search}%");
        }

        // Status Filter (Active / Hidden)
        if ($request->filled('status')) {
            if ($request->status === 'active') {
                $query->where('is_active', true);
            } elseif ($request->status === 'hidden') {
                $query->where('is_active', false);
            }
        }

        $slides = $query->latest()->paginate(10)->withQueryString();

        return view('admin.hero_slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.hero_slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'image'     => 'required|image|max:3072',
            'is_active' => 'required|boolean',
        ]);

        $path = $request->file('image')->store('hero_slides', 'public');

        HeroSlide::create([
            'title'      => $request->title,
            'image_path' => $path,
            'is_active'  => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.hero-slides.index')
            ->with('success', 'Slide uploaded successfully!');
    }

    public function edit(HeroSlide $heroSlide)
    {
        return view('admin.hero_slides.edit', ['slide' => $heroSlide]);
    }

    public function update(Request $request, HeroSlide $heroSlide)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'image'     => 'nullable|image|max:3072',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if present
            if ($heroSlide->image_path && Storage::disk('public')->exists($heroSlide->image_path)) {
                Storage::disk('public')->delete($heroSlide->image_path);
            }
            $heroSlide->image_path = $request->file('image')->store('hero_slides', 'public');
        }

        $heroSlide->title     = $request->title;
        $heroSlide->is_active = $request->boolean('is_active');
        $heroSlide->save();

        return redirect()->route('admin.hero-slides.index')
            ->with('success', 'Slide updated successfully!');
    }

    public function destroy(HeroSlide $heroSlide)
    {
        if ($heroSlide->image_path && Storage::disk('public')->exists($heroSlide->image_path)) {
            Storage::disk('public')->delete($heroSlide->image_path);
        }
        $heroSlide->delete();

        return redirect()->route('admin.hero-slides.index')
            ->with('success', 'Slide deleted successfully!');
    }

    public function toggle(HeroSlide $heroSlide)
    {
        $heroSlide->is_active = !$heroSlide->is_active;
        $heroSlide->save();

        return redirect()->route('admin.hero-slides.index')
            ->with('success', 'Slide visibility updated successfully!');
    }
}