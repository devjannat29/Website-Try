<aside id="admin-sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 border-r border-slate-800 transition-transform duration-300 transform -translate-x-full lg:translate-x-0 flex flex-col justify-between">
    <!-- Brand / Header -->
    <div>
        <div class="h-16 flex items-center justify-between px-6 border-b border-slate-800 bg-slate-950/50">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-500 flex items-center justify-center text-white font-black text-lg shadow-md shadow-blue-500/20">
                    A
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-bold text-white tracking-wide">ATTC Control</span>
                    <span class="text-[10px] text-blue-400 font-semibold uppercase tracking-wider">Management Hub</span>
                </div>
            </a>
            <!-- Mobile Close Button -->
            <button id="close-sidebar-btn" class="lg:hidden text-slate-400 hover:text-white p-1 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="px-4 py-4 space-y-1 overflow-y-auto max-h-[calc(100vh-10rem)] scrollbar-thin scrollbar-thumb-slate-800 text-sm">
            
            <!-- Dashboard -->
            <a href="{{ route('admin.dashboard') }}" 
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/20' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span>Dashboard Overview</span>
            </a>

            <!-- Applications -->
            <a href="{{ route('admin.view_applications') }}" 
               class="flex items-center justify-between px-3 py-2.5 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.view_applications') ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/20' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                    <span>Admissions</span>
                </div>
                @php $pending = \App\Models\AdmissionApplication::where('status', 'pending')->count(); @endphp
                @if($pending > 0)
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-500 text-slate-950">{{ $pending }}</span>
                @endif
            </a>

            <div class="pt-3 pb-1 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-500">Academic & Courses</div>

            <!-- Categories -->
            <a href="{{ route('admin.view_category') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.*category*') && !request()->routeIs('admin.*job_category*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                <span>Course Categories</span>
            </a>

            <!-- Courses -->
            <a href="{{ route('admin.view_course') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.*course*') && !request()->routeIs('admin.*category*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                <span>Courses & Trades</span>
            </a>

            <!-- Services -->
            <a href="{{ route('admin.view_service') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.*service*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span>Institutional Services</span>
            </a>

            <!-- Faculty Members -->
            <a href="{{ route('admin.view_member') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.*member*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                <span>Faculty & Instructors</span>
            </a>

            <!-- Events -->
            <a href="{{ route('admin.view_event') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.*event*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span>Events & Seminars</span>
            </a>

            <!-- Notices -->
            <a href="{{ route('admin.notice') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.*notice*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                <span>Official Notices</span>
            </a>

            <div class="pt-3 pb-1 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-500">Placement & Careers</div>

            <!-- Interviews -->
            <a href="{{ route('admin.interview') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.interview') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                <span>Interview Schedules</span>
            </a>

            <!-- Job Circulars -->
            <a href="{{ route('admin.job_circular') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.job_circular') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <span>Job Circulars</span>
            </a>

            <!-- Job Categories -->
            <a href="{{ route('admin.job_category') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.job_category') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                <span>Job Categories</span>
            </a>

            <!-- Testimonials -->
            <a href="{{ route('admin.testimonials') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.testimonials*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                <span>Alumni Testimonials</span>
            </a>

            <div class="pt-3 pb-1 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-500">Galleries & Media</div>

            <!-- Galleries -->
            <a href="{{ route('admin.gallery') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.gallery') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span>Workshop Gallery</span>
            </a>

            <a href="{{ route('admin.placement_gallery') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.placement_gallery') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Trade Test Gallery</span>
            </a>

            <a href="{{ route('admin.overseas_gallery') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.overseas_gallery') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Overseas Deployments</span>
            </a>

            <div class="pt-3 pb-1 px-3 text-[11px] font-bold uppercase tracking-wider text-slate-500">CMS & Configuration</div>

            <!-- About Us CMS -->
            <a href="{{ route('admin.view_about') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.view_about') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>About & Mission CMS</span>
            </a>

            <!-- Settings -->
            <a href="{{ route('admin.setting') }}" 
               class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.setting') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                <svg class="w-5 h-5 shrink-0 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
                <span>Site Settings & Info</span>
            </a>
        </nav>
    </div>

    <!-- User Profile Bar Bottom -->
    <div class="p-4 border-t border-slate-800 bg-slate-950/70">
        <div class="flex items-center gap-3">
            @php $authAdmin = Auth::user(); @endphp
            <div class="w-9 h-9 rounded-xl overflow-hidden bg-slate-800 shrink-0 border border-slate-700">
                @if($authAdmin && $authAdmin->photo && file_exists(public_path($authAdmin->photo)))
                    <img src="{{ asset($authAdmin->photo) }}" alt="Avatar" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-xs font-bold text-white bg-blue-600">
                        {{ strtoupper(substr($authAdmin->name ?? 'A', 0, 1)) }}
                    </div>
                @endif
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-xs font-bold text-white truncate">{{ $authAdmin->name ?? 'Super Admin' }}</p>
                <p class="text-[11px] text-slate-400 truncate">{{ $authAdmin->email ?? 'admin@attc.edu' }}</p>
            </div>
            <a href="{{ route('admin.logout') }}" title="Logout" class="p-1.5 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
            </a>
        </div>
    </div>
</aside>
