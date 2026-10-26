<header class="sticky top-0 z-40 bg-slate-900/90 backdrop-blur-md border-b border-slate-800 h-16 flex items-center justify-between px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-3">
        <!-- Sidebar Toggle -->
        <button id="open-sidebar-btn" class="p-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800 focus:outline-none transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>

        <div class="hidden sm:flex items-center gap-2 text-xs font-medium text-slate-400">
            <span>Bangladesh Technical Education Board (BTEB) Accredited</span>
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
            <span class="text-emerald-400">System Online</span>
        </div>
    </div>

    <!-- Right Controls -->
    <div class="flex items-center gap-3 sm:gap-4">
        <!-- Live Website Button -->
        <a href="{{ route('home.index') }}" target="_blank" class="px-3.5 py-1.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold flex items-center gap-1.5 transition-colors border border-slate-700/80">
            <span>Live Site</span>
            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
        </a>

        <!-- Quick Profile Dropdown -->
        <div class="relative" id="profile-dropdown-container">
            @php $authAdmin = Auth::user(); @endphp
            <button id="profile-dropdown-btn" class="flex items-center gap-2 p-1 rounded-xl hover:bg-slate-800 text-left transition-colors focus:outline-none">
                <div class="w-8 h-8 rounded-lg overflow-hidden bg-blue-600 flex items-center justify-center text-white text-xs font-bold shadow-inner">
                    @if($authAdmin && $authAdmin->photo && file_exists(public_path($authAdmin->photo)))
                        <img src="{{ asset($authAdmin->photo) }}" alt="Avatar" class="w-full h-full object-cover">
                    @else
                        {{ strtoupper(substr($authAdmin->name ?? 'A', 0, 1)) }}
                    @endif
                </div>
                <span class="hidden md:inline-block text-xs font-semibold text-slate-200">{{ $authAdmin->name ?? 'Admin' }}</span>
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>

            <!-- Dropdown Menu -->
            <div id="profile-dropdown-menu" class="hidden absolute right-0 mt-2 w-48 rounded-2xl bg-slate-900 border border-slate-800 shadow-2xl py-2 z-50 animate-fade-in">
                <div class="px-4 py-2 border-b border-slate-800">
                    <p class="text-xs font-bold text-white truncate">{{ $authAdmin->name ?? 'Administrator' }}</p>
                    <p class="text-[11px] text-slate-400 truncate">{{ $authAdmin->email ?? 'admin@attc.edu' }}</p>
                </div>
                <a href="{{ route('admin.profile') }}" class="flex items-center gap-2.5 px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-800/80 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Profile Settings
                </a>
                <a href="{{ route('admin.change_password') }}" class="flex items-center gap-2.5 px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-800/80 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
                    Change Password
                </a>
                <div class="my-1 border-t border-slate-800"></div>
                <a href="{{ route('admin.logout') }}" class="flex items-center gap-2.5 px-4 py-2 text-xs font-medium text-rose-400 hover:bg-rose-500/10 transition-colors">
                    <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    Sign Out
                </a>
            </div>
        </div>
    </div>
</header>
