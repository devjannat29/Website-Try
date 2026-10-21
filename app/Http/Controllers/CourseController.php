<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /* =========================================================================
       CATEGORY MANAGEMENT
       ========================================================================= */

    public function view_category()
    {
        $categories = Category::withCount('courses')->latest()->paginate(10);
        return view('admin.pages.category.view_category', compact('categories'));
    }

    public function add_category()
    {
        return view('admin.pages.category.add_category');
    }

    public function upload_category(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'cat_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/category'), $filename);
            $imagePath = 'upload/category/' . $filename;
        }

        Category::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.view_category')->with('success', 'Course category added successfully!');
    }

    public function update_category($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.pages.category.edit_category', compact('category'));
    }

    public function edit_category(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'cat_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/category'), $filename);
            $category->image = 'upload/category/' . $filename;
        }

        $category->save();

        return redirect()->route('admin.view_category')->with('success', 'Course category updated successfully!');
    }

    public function delete_category($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.view_category')->with('success', 'Category deleted successfully.');
    }

    /* =========================================================================
       COURSE MANAGEMENT
       ========================================================================= */

    public function view_course()
    {
        $courses = Course::latest()->paginate(10);
        return view('admin.pages.course.view_course', compact('courses'));
    }

    public function add_course()
    {
        $categories = Category::all();
        return view('admin.pages.course.add_course', compact('categories'));
    }

    public function upload_course(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required',
            'duration' => 'nullable|string|max:100',
            'Fee' => 'nullable|string|max:100',
            'bteb_level' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'syllabus' => 'nullable|string',
            'careers' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'course_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/course'), $filename);
            $imagePath = 'upload/course/' . $filename;
        }

        // Process syllabus lines into array
        $syllabusArray = [];
        if ($request->filled('syllabus')) {
            $lines = explode("\n", str_replace("\r", "", $request->syllabus));
            foreach ($lines as $line) {
                if (trim($line) !== '') {
                    $syllabusArray[] = trim($line);
                }
            }
        }

        Course::create([
            'name' => $request->name,
            'category' => $request->category,
            'duration' => $request->duration,
            'Fee' => $request->Fee,
            'bteb_level' => $request->bteb_level ?? 'NTVQF Level-3',
            'description' => $request->description,
            'syllabus' => $syllabusArray,
            'careers' => $request->careers,
            'link' => $request->link,
            'status' => $request->status ?? '1',
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.view_course')->with('success', 'New technical course published successfully!');
    }

    public function edit_course($id)
    {
        $course = Course::findOrFail($id);
        $categories = Category::all();
        return view('admin.pages.course.edit_course', compact('course', 'categories'));
    }

    public function update_course(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required',
            'duration' => 'nullable|string|max:100',
            'Fee' => 'nullable|string|max:100',
            'bteb_level' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'syllabus' => 'nullable|string',
            'careers' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $course = Course::findOrFail($id);
        $course->name = $request->name;
        $course->category = $request->category;
        $course->duration = $request->duration;
        $course->Fee = $request->Fee;
        $course->bteb_level = $request->bteb_level ?? $course->bteb_level;
        $course->description = $request->description;
        $course->careers = $request->careers;
        $course->link = $request->link;
        $course->status = $request->status ?? $course->status;

        if ($request->filled('syllabus')) {
            $lines = explode("\n", str_replace("\r", "", $request->syllabus));
            $syllabusArray = [];
            foreach ($lines as $line) {
                if (trim($line) !== '') {
                    $syllabusArray[] = trim($line);
                }
            }
            $course->syllabus = $syllabusArray;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'course_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/course'), $filename);
            $course->image = 'upload/course/' . $filename;
        }

        $course->save();

        return redirect()->route('admin.view_course')->with('success', 'Course details updated successfully!');
    }

    public function delete_course($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.view_course')->with('success', 'Course deleted successfully.');
    }
}
