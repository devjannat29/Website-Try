<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\JobCategory;
use App\Models\JobCircular;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /* =========================================================================
       SERVICES
       ========================================================================= */

    public function view_service()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.pages.service.view_service', compact('services'));
    }

    public function add_service()
    {
        return view('admin.pages.service.add_service');
    }

    public function upload_service(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:100',
        ]);

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $request->icon ?? 'wrench-screwdriver',
            'status' => $request->status ?? 'active',
        ]);

        return redirect()->route('admin.view_service')->with('success', 'Service published successfully!');
    }

    public function edit_service($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.pages.service.edit_service', compact('service'));
    }

    public function update_service(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:100',
        ]);

        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->icon = $request->icon ?? $service->icon;
        $service->status = $request->status ?? $service->status;
        $service->save();

        return redirect()->route('admin.view_service')->with('success', 'Service updated successfully!');
    }

    public function delete_service($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.view_service')->with('success', 'Service deleted successfully.');
    }

    /* =========================================================================
       NOTICES
       ========================================================================= */

    public function notice()
    {
        $notices = Notice::latest()->paginate(10);
        return view('admin.pages.notice.notice', compact('notices'));
    }

    public function upload_notice(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'date' => 'nullable|string|max:100',
            'summary' => 'nullable|string',
            'badge' => 'nullable|string|max:100',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:5120',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = 'notice_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/notices'), $filename);
            $filePath = 'upload/notices/' . $filename;
        }

        Notice::create([
            'title' => $request->title,
            'category' => $request->category ?? 'General',
            'date' => $request->date ?? date('F d, Y'),
            'summary' => $request->summary,
            'badge' => $request->badge ?? 'Notice',
            'file' => $filePath,
        ]);

        return back()->with('success', 'Official notice posted successfully!');
    }

    public function download($id)
    {
        $notice = Notice::findOrFail($id);
        if ($notice->file && file_exists(public_path($notice->file))) {
            return response()->download(public_path($notice->file));
        }
        return back()->with('error', 'Attachment file not found on server.');
    }

    public function delete_notice($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();

        return back()->with('success', 'Notice deleted successfully.');
    }

    /* =========================================================================
       INTERVIEWS
       ========================================================================= */

    public function interview()
    {
        $interviews = Interview::latest()->paginate(10);
        return view('admin.pages.interview.interview', compact('interviews'));
    }

    public function upload_interview(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'trades' => 'nullable|string|max:255',
            'date' => 'nullable|string|max:255',
            'venue' => 'nullable|string|max:255',
            'delegates' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:5120',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = 'interview_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/interviews'), $filename);
            $filePath = 'upload/interviews/' . $filename;
        }

        Interview::create([
            'title' => $request->title,
            'trades' => $request->trades,
            'date' => $request->date,
            'venue' => $request->venue,
            'delegates' => $request->delegates,
            'file' => $filePath,
        ]);

        return back()->with('success', 'Interview delegation schedule added successfully!');
    }

    public function download_interview($id)
    {
        $interview = Interview::findOrFail($id);
        if ($interview->file && file_exists(public_path($interview->file))) {
            return response()->download(public_path($interview->file));
        }
        return back()->with('error', 'Interview attachment not found.');
    }

    public function delete_interview($id)
    {
        $interview = Interview::findOrFail($id);
        $interview->delete();

        return back()->with('success', 'Interview schedule deleted.');
    }

    /* =========================================================================
       JOB CATEGORIES
       ========================================================================= */

    public function job_category()
    {
        $categories = JobCategory::withCount('circulars')->latest()->paginate(10);
        return view('admin.pages.job.job_category', compact('categories'));
    }

    public function upload_job_category(Request $request)
    {
        $request->validate([
            'category_title' => 'required|string|max:255',
        ]);

        JobCategory::create([
            'category_title' => $request->category_title,
        ]);

        return back()->with('success', 'Job category created successfully!');
    }

    public function delete_job_category($id)
    {
        $cat = JobCategory::findOrFail($id);
        $cat->delete();

        return back()->with('success', 'Job category deleted.');
    }

    /* =========================================================================
       JOB CIRCULARS
       ========================================================================= */

    public function job_circular()
    {
        $circulars = JobCircular::latest()->paginate(10);
        $categories = JobCategory::all();
        return view('admin.pages.job.job_circular', compact('circulars', 'categories'));
    }

    public function upload_job_circular(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'vacancies' => 'nullable|integer',
            'salary' => 'nullable|string|max:255',
            'deadline' => 'nullable|string|max:255',
            'requirements' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:5120',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = 'circular_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/circulars'), $filename);
            $filePath = 'upload/circulars/' . $filename;
        }

        JobCircular::create([
            'job_title' => $request->job_title,
            'category' => $request->category,
            'company' => $request->company,
            'country' => $request->country,
            'vacancies' => $request->vacancies ?? 1,
            'salary' => $request->salary,
            'deadline' => $request->deadline,
            'requirements' => $request->requirements,
            'status' => 'active',
            'file' => $filePath,
        ]);

        return back()->with('success', 'Job circular posted successfully!');
    }

    public function download_job_circular($id)
    {
        $circular = JobCircular::findOrFail($id);
        if ($circular->file && file_exists(public_path($circular->file))) {
            return response()->download(public_path($circular->file));
        }
        return back()->with('error', 'Job circular attachment not found.');
    }

    public function delete_job_circular($id)
    {
        $circular = JobCircular::findOrFail($id);
        $circular->delete();

        return back()->with('success', 'Job circular deleted successfully.');
    }

    /* =========================================================================
       TESTIMONIALS
       ========================================================================= */

    public function testimonials()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.pages.testimonials.view_testimonials', compact('testimonials'));
    }

    public function add_testimonials()
    {
        return view('admin.pages.testimonials.add_testimonials');
    }

    public function upload_testimonials(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'trade' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'salary' => 'nullable|string|max:255',
            'batch' => 'nullable|string|max:255',
            'quote' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'testi_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/testimonials'), $filename);
            $imagePath = 'upload/testimonials/' . $filename;
        }

        Testimonial::create([
            'name' => $request->name,
            'trade' => $request->trade,
            'country' => $request->country,
            'salary' => $request->salary,
            'batch' => $request->batch,
            'quote' => $request->quote,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial added successfully!');
    }

    public function edit_testimonials($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.pages.testimonials.edit_testimonials', compact('testimonial'));
    }

    public function update_testimonials(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quote' => 'required|string',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->trade = $request->trade;
        $testimonial->country = $request->country;
        $testimonial->salary = $request->salary;
        $testimonial->batch = $request->batch;
        $testimonial->quote = $request->quote;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'testi_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/testimonials'), $filename);
            $testimonial->image = 'upload/testimonials/' . $filename;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial updated successfully!');
    }

    public function delete_testimonials($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial deleted successfully.');
    }
}
