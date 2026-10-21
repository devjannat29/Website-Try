<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Event;
use App\Models\Member;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /* =========================================================================
       ABOUT US CMS
       ========================================================================= */

    public function view_about()
    {
        $about = About::first() ?? new About();
        return view('admin.pages.about.view_about', compact('about'));
    }

    public function saveAbout(Request $request)
    {
        $about = About::first() ?? new About();
        $about->about_desc = $request->about_desc;
        $about->mission = $request->mission;
        $about->vission = $request->vission;
        $about->job_placement = $request->job_placement;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'about_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/about'), $filename);
            $about->image = 'upload/about/' . $filename;
        }

        $about->save();

        return back()->with('success', 'About Us & Mission contents updated successfully!');
    }

    /* =========================================================================
       FACULTY / MEMBERS MANAGEMENT
       ========================================================================= */

    public function view_member()
    {
        $members = Member::latest()->paginate(10);
        return view('admin.pages.member.view_member', compact('members'));
    }

    public function add_member()
    {
        return view('admin.pages.member.add_member');
    }

    public function upload_member(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'member_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/member'), $filename);
            $imagePath = 'upload/member/' . $filename;
        }

        Member::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'department' => $request->department,
            'education' => $request->education,
            'experience' => $request->experience,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.view_member')->with('success', 'Faculty member added successfully!');
    }

    public function edit_member($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.pages.member.edit_member', compact('member'));
    }

    public function update_member(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $member = Member::findOrFail($id);
        $member->name = $request->name;
        $member->designation = $request->designation;
        $member->department = $request->department;
        $member->education = $request->education;
        $member->experience = $request->experience;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'member_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/member'), $filename);
            $member->image = 'upload/member/' . $filename;
        }

        $member->save();

        return redirect()->route('admin.view_member')->with('success', 'Faculty details updated successfully!');
    }

    public function delete_member($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('admin.view_member')->with('success', 'Member record removed.');
    }

    /* =========================================================================
       EVENTS MANAGEMENT
       ========================================================================= */

    public function view_event()
    {
        $events = Event::latest()->paginate(10);
        return view('admin.pages.event.view_event', compact('events'));
    }

    public function add_event()
    {
        return view('admin.pages.event.add_event');
    }

    public function upload_event(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'nullable|string|max:100',
            'time' => 'nullable|string|max:100',
            'venue' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'event_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/event'), $filename);
            $imagePath = 'upload/event/' . $filename;
        }

        Event::create([
            'title' => $request->title,
            'date' => $request->date,
            'time' => $request->time,
            'venue' => $request->venue,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => 'upcoming',
        ]);

        return redirect()->route('admin.view_event')->with('success', 'Event published successfully!');
    }

    public function edit_event($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.pages.event.edit_event', compact('event'));
    }

    public function update_event(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $event = Event::findOrFail($id);
        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->venue = $request->venue;
        $event->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'event_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/event'), $filename);
            $event->image = 'upload/event/' . $filename;
        }

        $event->save();

        return redirect()->route('admin.view_event')->with('success', 'Event updated successfully!');
    }

    public function delete_event($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.view_event')->with('success', 'Event deleted.');
    }
}
