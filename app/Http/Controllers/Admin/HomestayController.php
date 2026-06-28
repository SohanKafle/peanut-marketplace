<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Homestay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomestayController extends Controller
{
    public function index(Request $request)
    {
        // Start a query on the Homestay model
        $query = Homestay::query();

        // Simple search by name or location
        if ($request->filled('search')) {
            $query->where('name', 'like', "%{$request->search}%")
                  ->orWhere('location', 'like', "%{$request->search}%");
        }

        $homestays = $query->latest()->paginate(10);

        return view('admin.homestays.index', compact('homestays'));
    }

    public function create()
    {
        return view('admin.homestays.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'host_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'capacity' => 'required|integer|min:1',
            'price_per_night' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'contact_url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('homestays', 'public');
        }

        Homestay::create($validated);

        return redirect()->route('admin.homestays.index')->with('success', 'Property added successfully.');
    }

    public function edit(Homestay $homestay)
    {
        return view('admin.homestays.edit', compact('homestay'));
    }

    public function update(Request $request, Homestay $homestay)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'host_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'capacity' => 'required|integer|min:1',
            'price_per_night' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'contact_url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($homestay->image_path) {
                Storage::disk('public')->delete($homestay->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('homestays', 'public');
        }

        $homestay->update($validated);

        return redirect()->route('admin.homestays.index')->with('success', 'Property updated.');
    }

    public function destroy(Homestay $homestay)
    {
        if ($homestay->image_path) {
            Storage::disk('public')->delete($homestay->image_path);
        }
        
        $homestay->delete();
        return redirect()->route('admin.homestays.index')->with('success', 'Property deleted.');
    }
}