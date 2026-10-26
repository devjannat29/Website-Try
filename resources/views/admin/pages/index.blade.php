@extends('admin.admin_dashboard')

@section('title', 'Administrative Dashboard Overview | ATTC')

@section('admin')
<div class="space-y-8">
    
    <!-- Top Greeting Banner -->
    <div class="relative rounded-3xl bg-gradient-to-r from-blue-900/40 via-indigo-900/30 to-slate-900 border border-slate-800 p-6 sm:p-8 overflow-hidden">
        <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
            <div>
                <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-500/20 text-blue-400 border border-blue-500/30">
                    Control Center Active
                </span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-white mt-2">
                    Welcome back, {{ Auth::user()->name ?? 'Administrator' }}!
                </h1>
                <p class="text-slate-300 text-sm mt-1 max-w-2xl">
                    Manage vocational courses, BTEB training syllabus, faculty members, overseas employer interviews, and admission applications in one unified interface.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3">
                <a href="{{ route('admin.add_course') }}" class="px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs transition-all shadow-lg shadow-blue-500/20 flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    New Course
                </a>
                <a href="{{ route('admin.view_applications') }}" class="px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold text-xs transition-all border border-slate-700 flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012 2h2a2 2 0 012 2"/></svg>
                    Admissions ({{ $pendingApplications ?? 0 }})
                </a>
            </div>
        </div>
    </div>

    <!-- Metric Stat Cards (4 Columns) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Stat 1: Total Courses -->
        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-5 hover:border-slate-700 transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Active Trades & Courses</p>
                    <h3 class="text-2xl font-extrabold text-white mt-1">{{ $totalCourses ?? 0 }}</h3>
                    <span class="text-xs text-blue-400 font-medium mt-1 inline-block">{{ $totalCategories ?? 0 }} Skill Departments</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
            </div>
        </div>

        <!-- Stat 2: Admission Inquiries -->
        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-5 hover:border-slate-700 transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Student Admissions</p>
                    <h3 class="text-2xl font-extrabold text-white mt-1">{{ $totalApplications ?? 0 }}</h3>
                    <span class="text-xs text-amber-400 font-medium mt-1 inline-block">{{ $pendingApplications ?? 0 }} Awaiting Review</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
            </div>
        </div>

        <!-- Stat 3: Faculty Members -->
        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-5 hover:border-slate-700 transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Faculty & Instructors</p>
                    <h3 class="text-2xl font-extrabold text-white mt-1">{{ $totalMembers ?? 0 }}</h3>
                    <span class="text-xs text-emerald-400 font-medium mt-1 inline-block">BTEB Certified Trainers</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
            </div>
        </div>

        <!-- Stat 4: Job Circulars & Placement -->
        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-5 hover:border-slate-700 transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Overseas Jobs</p>
                    <h3 class="text-2xl font-extrabold text-white mt-1">{{ $totalCirculars ?? 0 }}</h3>
                    <span class="text-xs text-purple-400 font-medium mt-1 inline-block">Active Gulf & Asian Roles</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>
        </div>

    </div>

    <!-- Recent Admission Applications Table -->
    <div class="bg-slate-900/90 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <div>
                <h2 class="text-xl font-bold text-white">Recent Admission Applications</h2>
                <p class="text-slate-400 text-xs mt-1">Direct enrollments submitted by students through the online admission portal.</p>
            </div>
            <a href="{{ route('admin.view_applications') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 flex items-center gap-1">
                View All Applications
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        @if(isset($recentApplications) && $recentApplications->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3 rounded-l-xl">Applicant</th>
                            <th scope="col" class="px-4 py-3">Phone</th>
                            <th scope="col" class="px-4 py-3">Course / Trade</th>
                            <th scope="col" class="px-4 py-3">Shift & Hostel</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            <th scope="col" class="px-4 py-3 text-right rounded-r-xl">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($recentApplications as $app)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-3.5 font-bold text-white">
                                    {{ $app->applicant_name }}
                                </td>
                                <td class="px-4 py-3.5 font-mono text-slate-300">
                                    {{ $app->phone }}
                                </td>
                                <td class="px-4 py-3.5 text-slate-200">
                                    {{ $app->course_name }}
                                </td>
                                <td class="px-4 py-3.5 text-xs text-slate-400">
                                    {{ $app->shift ?? 'Morning' }} | Hostel: {{ $app->hostel ?? 'No' }}
                                </td>
                                <td class="px-4 py-3.5">
                                    @if($app->status === 'approved')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Approved</span>
                                    @elseif($app->status === 'enrolled')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-blue-500/10 text-blue-400 border border-blue-500/20">Enrolled</span>
                                    @elseif($app->status === 'rejected')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-rose-500/10 text-rose-400 border border-rose-500/20">Rejected</span>
                                    @else
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">Pending Review</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3.5 text-right">
                                    <form action="{{ route('admin.update_application_status', $app->id) }}" method="POST" class="inline-flex items-center gap-1.5">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()" class="bg-slate-950 border border-slate-700 rounded-lg text-xs py-1 px-2 text-slate-300 focus:outline-none focus:border-blue-500">
                                            <option value="pending" {{ $app->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="approved" {{ $app->status === 'approved' ? 'selected' : '' }}>Approve</option>
                                            <option value="enrolled" {{ $app->status === 'enrolled' ? 'selected' : '' }}>Enrolled</option>
                                            <option value="rejected" {{ $app->status === 'rejected' ? 'selected' : '' }}>Reject</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-12 text-slate-500 text-xs">
                No recent admission applications submitted yet.
            </div>
        @endif
    </div>

    <!-- Quick Shortcuts Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Shortcut 1: Manage Courses -->
        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between">
            <div>
                <div class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">Course Management</h3>
                <p class="text-slate-400 text-xs mt-1">Configure trade descriptions, BTEB certifications, fees, and syllabus outlines.</p>
            </div>
            <div class="mt-6 flex items-center gap-3">
                <a href="{{ route('admin.view_course') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300">View All Courses &rarr;</a>
            </div>
        </div>

        <!-- Shortcut 2: Post Official Notice -->
        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between">
            <div>
                <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">Bulletin & Notices</h3>
                <p class="text-slate-400 text-xs mt-1">Publish PDF notices, examination schedules, and government circulars.</p>
            </div>
            <div class="mt-6 flex items-center gap-3">
                <a href="{{ route('admin.notice') }}" class="text-xs font-semibold text-amber-400 hover:text-amber-300">Manage Notices &rarr;</a>
            </div>
        </div>

        <!-- Shortcut 3: Site Information -->
        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-slate-700 transition-all flex flex-col justify-between">
            <div>
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">Center Settings</h3>
                <p class="text-slate-400 text-xs mt-1">Configure campus hotlines, BTEB code, BMET placement license, and logo.</p>
            </div>
            <div class="mt-6 flex items-center gap-3">
                <a href="{{ route('admin.setting') }}" class="text-xs font-semibold text-emerald-400 hover:text-emerald-300">Update Settings &rarr;</a>
            </div>
        </div>

    </div>

</div>
@endsection
