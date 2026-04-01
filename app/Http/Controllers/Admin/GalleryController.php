<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::when($request->search, fn ($q) => $q->where('title', 'like', "%{$request->search}%"))
            ->when($request->category, fn ($q) => $q->where('category', $request->category))
            ->latest()
            ->paginate(12);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'category' => 'nullable|string|max:255',
            'status' => 'boolean',
        ]);
        $data['image'] = $request->file('image')->store('galleries', 'public');
        Gallery::create($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery image added successfully.');
    }

    public function show(Gallery $gallery)
    {
        return view('admin.galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'category' => 'nullable|string|max:255',
            'status' => 'boolean',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('galleries', 'public');
        }
        $gallery->update($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}
