<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Story::query();
        if ($request->filled('search')) {
            $query->where('title', 'like', "%{$request->search}%");
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        $stories = $query->with('author')->latest()->paginate(12)->withQueryString();
        $statuses = ['Draft', 'Published'];
        return view('admin.stories.index', compact('stories', 'statuses'));
    }

    public function create()
    {
        return view('admin.stories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'status' => 'required|in:Draft,Published',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['author_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('stories', 'public');
        }

        Story::create($validated);

        return redirect()->route('admin.stories.index')->with('success', 'Story created.');
    }

    /**
     * Show the form for editing the specified resource.
     * * @param Story $story
     */
    public function edit(Story $story)
    {
        return view('admin.stories.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     * * @param Request $request
     * @param Story $story
     */
    public function update(Request $request, Story $story)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'status' => 'required|in:Draft,Published',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            if ($story->image_path) {
                Storage::disk('public')->delete($story->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('stories', 'public');
        }

        $story->update($validated);

        return redirect()->route('admin.stories.index')->with('success', 'Story updated.');
    }

    /**
     * Remove the specified resource from storage.
     * * @param Story $story
     */
    public function destroy(Story $story)
    {
        if ($story->image_path) {
            Storage::disk('public')->delete($story->image_path);
        }

        $story->delete();

        return redirect()->route('admin.stories.index')->with('success', 'Story deleted.');
    }
}
