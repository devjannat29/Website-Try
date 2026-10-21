<?php

namespace App\Http\Controllers;

use App\Models\AdmissionApplication;
use App\Models\Category;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\Interview;
use App\Models\JobCircular;
use App\Models\Member;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Show Admin Login Page
     */
    public function AdminLogin()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        $setting = Setting::first();
        return view('admin.pages.admin_login', compact('setting'));
    }

    /**
     * Handle Admin Login Submission
     */
    public function AdminLoginSubmit(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $login = $request->input('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $field => $login,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                $request->session()->regenerate();
                return redirect()->intended(route('admin.dashboard'))->with('success', 'Welcome back, ' . $user->name . '!');
            }

            Auth::logout();
            return back()->with('error', 'Access restricted to administrators only.');
        }

        return back()->with('error', 'Invalid login credentials. Please check your email/username and password.')->withInput($request->only('login'));
    }

    /**
     * Admin Dashboard Overview
     */
    public function AdminDashboard()
    {
        $admin = Auth::user();
        $totalCourses = Course::count();
        $totalCategories = Category::count();
        $totalServices = Service::count();
        $totalNotices = Notice::count();
        $totalApplications = AdmissionApplication::count();
        $pendingApplications = AdmissionApplication::where('status', 'pending')->count();
        $totalMembers = Member::count();
        $totalCirculars = JobCircular::count();
        $totalGalleries = Gallery::count();
        $totalTestimonials = Testimonial::count();

        $recentApplications = AdmissionApplication::latest()->take(6)->get();
        $recentNotices = Notice::latest()->take(4)->get();
        $recentCourses = Course::latest()->take(4)->get();

        return view('admin.pages.index', compact(
            'admin',
            'totalCourses',
            'totalCategories',
            'totalServices',
            'totalNotices',
            'totalApplications',
            'pendingApplications',
            'totalMembers',
            'totalCirculars',
            'totalGalleries',
            'totalTestimonials',
            'recentApplications',
            'recentNotices',
            'recentCourses'
        ));
    }

    /**
     * Logout
     */
    public function AdminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Admin Profile View
     */
    public function AdminProfile()
    {
        $profileData = Auth::user();
        return view('admin.pages.admin_profile_view', compact('profileData'));
    }

    /**
     * Admin Profile Store / Update
     */
    public function AdminProfileStore(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:50',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = 'admin_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/admin_images'), $filename);
            $user->photo = 'upload/admin_images/' . $filename;
        }

        $user->save();

        return back()->with('success', 'Admin profile updated successfully!');
    }

    /**
     * Change Password View
     */
    public function AdminChangePassword()
    {
        $profileData = Auth::user();
        return view('admin.pages.admin_change_password', compact('profileData'));
    }

    /**
     * Update Password
     */
    public function AdminUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'Old password does not match our records!');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully!');
    }

    /**
     * View Online Admission Applications
     */
    public function view_applications()
    {
        $applications = AdmissionApplication::latest()->paginate(15);
        return view('admin.pages.applications', compact('applications'));
    }

    /**
     * Update Application Status
     */
    public function update_application_status(Request $request, $id)
    {
        $app = AdmissionApplication::findOrFail($id);
        $app->status = $request->status;
        $app->save();

        return back()->with('success', 'Application status updated to ' . $request->status . '!');
    }

    /**
     * Delete Application
     */
    public function delete_application($id)
    {
        $app = AdmissionApplication::findOrFail($id);
        $app->delete();

        return back()->with('success', 'Application deleted successfully.');
    }
}
