<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    /**
     * General Gallery
     */
    public function gallery()
    {
        $galleries = Gallery::where('category', 'general')->latest()->paginate(12);
        return view('admin.pages.gallery.gallery', compact('galleries'));
    }

    public function upload_gallery(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
            'title' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:50',
        ]);

        $file = $request->file('image');
        $filename = 'gallery_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/gallery'), $filename);

        Gallery::create([
            'title' => $request->title ?? 'Workshop & Campus Life',
            'category' => $request->category ?? 'general',
            'image' => 'upload/gallery/' . $filename,
        ]);

        return back()->with('success', 'Photo uploaded to gallery successfully!');
    }

    public function delete_gallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return back()->with('success', 'Photo removed from gallery.');
    }

    /**
     * Placement Gallery
     */
    public function placement_gallery()
    {
        $galleries = Gallery::where('category', 'placement')->latest()->paginate(12);
        return view('admin.pages.gallery.placement_gallery', compact('galleries'));
    }

    public function upload_placement_gallery(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
            'title' => 'nullable|string|max:255',
        ]);

        $file = $request->file('image');
        $filename = 'placement_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/gallery'), $filename);

        Gallery::create([
            'title' => $request->title ?? 'Campus Trade Test & Client Selection',
            'category' => 'placement',
            'image' => 'upload/gallery/' . $filename,
        ]);

        return back()->with('success', 'Placement photo added successfully!');
    }

    public function delete_placement_gallery($id)
    {
        return $this->delete_gallery($id);
    }

    /**
     * Overseas Placement Gallery
     */
    public function overseas_gallery()
    {
        $galleries = Gallery::where('category', 'overseas')->latest()->paginate(12);
        return view('admin.pages.gallery.overseas_gallery', compact('galleries'));
    }

    public function upload_overseas_gallery(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
            'title' => 'nullable|string|max:255',
        ]);

        $file = $request->file('image');
        $filename = 'overseas_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/gallery'), $filename);

        Gallery::create([
            'title' => $request->title ?? 'Overseas Project Deployment',
            'category' => 'overseas',
            'image' => 'upload/gallery/' . $filename,
        ]);

        return back()->with('success', 'Overseas deployment photo added successfully!');
    }

    public function delete_overseas_gallery($id)
    {
        return $this->delete_gallery($id);
    }
}
