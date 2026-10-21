<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AdmissionApplication;
use App\Models\Category;
use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Interview;
use App\Models\JobCircular;
use App\Models\Member;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Setting;
use App\Models\StudentCertificate;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Public Homepage
     */
    public function index()
    {
        $setting = Setting::first();
        $about = About::first();
        $categories = Category::withCount('courses')->get();
        $featuredCourses = Course::where('status', '1')->orWhere('status', 'active')->latest()->take(6)->get();
        $services = Service::where('status', '1')->orWhere('status', 'active')->take(4)->get();
        $notices = Notice::latest()->take(5)->get();
        $events = Event::latest()->take(2)->get();
        $testimonials = Testimonial::latest()->take(6)->get();
        $galleries = Gallery::latest()->take(8)->get();
        $circulars = JobCircular::where('status', '1')->orWhere('status', 'active')->latest()->take(3)->get();
        $interviews = Interview::latest()->take(3)->get();
        $members = Member::take(4)->get();

        return view('frontend.pages.index', compact(
            'setting',
            'about',
            'categories',
            'featuredCourses',
            'services',
            'notices',
            'events',
            'testimonials',
            'galleries',
            'circulars',
            'interviews',
            'members'
        ));
    }

    /**
     * All Courses Page with optional Category filter and Search
     */
    public function all_course(Request $request)
    {
        $setting = Setting::first();
        $categories = Category::all();
        $query = Course::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $courses = $query->latest()->paginate(9)->withQueryString();

        return view('frontend.pages.all_course', compact('setting', 'categories', 'courses'));
    }

    /**
     * Single Course Details Page
     */
    public function course_details($id)
    {
        $setting = Setting::first();
        $course = Course::findOrFail($id);
        $relatedCourses = Course::where('category', $course->category)
            ->where('id', '!=', $course->id)
            ->take(3)
            ->get();
        $categories = Category::all();

        return view('frontend.pages.course_details', compact('setting', 'course', 'relatedCourses', 'categories'));
    }

    /**
     * Category Details Page
     */
    public function course_category_details($id)
    {
        $setting = Setting::first();
        $category = Category::findOrFail($id);
        $courses = Course::where('category', $id)->latest()->paginate(9);
        $categories = Category::all();

        return view('frontend.pages.course_category_details', compact('setting', 'category', 'courses', 'categories'));
    }

    /**
     * All Services Page
     */
    public function services()
    {
        $setting = Setting::first();
        $services = Service::latest()->get();

        return view('frontend.pages.services', compact('setting', 'services'));
    }

    /**
     * Single Service Details Page
     */
    public function service_details($id)
    {
        $setting = Setting::first();
        $service = Service::findOrFail($id);
        $otherServices = Service::where('id', '!=', $id)->take(4)->get();

        return view('frontend.pages.service_details', compact('setting', 'service', 'otherServices'));
    }

    /**
     * About Us Page
     */
    public function about_us()
    {
        $setting = Setting::first();
        $about = About::first();
        $members = Member::all();
        $testimonials = Testimonial::take(3)->get();

        return view('frontend.pages.about', compact('setting', 'about', 'members', 'testimonials'));
    }

    /**
     * Mission & Vision Page
     */
    public function mission()
    {
        $setting = Setting::first();
        $about = About::first();

        return view('frontend.pages.mission', compact('setting', 'about'));
    }

    /**
     * Placement Cell & Overseas Placement Page
     */
    public function placement_cell()
    {
        $setting = Setting::first();
        $about = About::first();
        $placementGalleries = Gallery::where('category', 'placement')->orWhere('category', 'overseas')->latest()->take(12)->get();
        $testimonials = Testimonial::latest()->get();
        $circulars = JobCircular::latest()->take(4)->get();

        return view('frontend.pages.placement_cell', compact('setting', 'about', 'placementGalleries', 'testimonials', 'circulars'));
    }

    /**
     * Job Circulars Page
     */
    public function job()
    {
        $setting = Setting::first();
        $circulars = JobCircular::latest()->paginate(8);

        return view('frontend.pages.job', compact('setting', 'circulars'));
    }

    /**
     * Interview Schedule Page
     */
    public function interview()
    {
        $setting = Setting::first();
        $interviews = Interview::latest()->paginate(8);

        return view('frontend.pages.interview', compact('setting', 'interviews'));
    }

    /**
     * Teachers / Faculty Directory Page
     */
    public function teachers()
    {
        $setting = Setting::first();
        $members = Member::latest()->get();

        return view('frontend.pages.member', compact('setting', 'members'));
    }

    /**
     * Student Life & Certification Verification Page
     */
    public function students(Request $request)
    {
        $setting = Setting::first();
        $verifiedStudent = null;
        $searchPerformed = false;

        if ($request->filled('reg_number')) {
            $searchPerformed = true;
            $verifiedStudent = StudentCertificate::where('reg_number', trim($request->reg_number))
                ->orWhere('certificate_id', trim($request->reg_number))
                ->first();
        }

        return view('frontend.pages.students', compact('setting', 'verifiedStudent', 'searchPerformed'));
    }

    /**
     * Photo & Video Gallery Page
     */
    public function gallery(Request $request)
    {
        $setting = Setting::first();
        $category = $request->query('type', 'all');

        $query = Gallery::query();
        if ($category !== 'all') {
            $query->where('category', $category);
        }

        $galleries = $query->latest()->paginate(12)->withQueryString();

        return view('frontend.pages.gallery', compact('setting', 'galleries', 'category'));
    }

    /**
     * Notice Board Page
     */
    public function notice()
    {
        $setting = Setting::first();
        $notices = Notice::latest()->paginate(10);

        return view('frontend.pages.notice', compact('setting', 'notices'));
    }

    /**
     * Events Page
     */
    public function event()
    {
        $setting = Setting::first();
        $events = Event::latest()->paginate(6);

        return view('frontend.pages.event', compact('setting', 'events'));
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        $setting = Setting::first();

        return view('frontend.pages.contact', compact('setting'));
    }

    /**
     * Online Admission Application Submission
     */
    public function apply_admission(Request $request)
    {
        $request->validate([
            'applicant_name' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'course_name' => 'required|string|max:255',
            'shift' => 'nullable|string|max:100',
            'hostel' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:500',
        ]);

        AdmissionApplication::create([
            'applicant_name' => $request->applicant_name,
            'phone' => $request->phone,
            'course_name' => $request->course_name,
            'shift' => $request->shift ?? 'Morning',
            'hostel' => $request->hostel ?? 'No',
            'address' => $request->address,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Your admission application has been submitted successfully! Our admissions counselor will contact you shortly.');
    }

    /**
     * Contact message inquiry
     */
    public function send_message(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        return back()->with('success', 'Thank you for reaching out! Your message has been received and our team will get back to you within 24 hours.');
    }
}
