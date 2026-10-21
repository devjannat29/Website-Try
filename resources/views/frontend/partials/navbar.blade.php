<header x-data="{ mobileMenuOpen: false, courseDropdown: false }" class="sticky top-0 z-40 glass-header border-b border-slate-800 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo & Brand Identity -->
            <a href="{{ route('home.index') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center shadow-lg shadow-cyan-500/20 group-hover:shadow-cyan-500/40 transition">
                    <i class="fa-solid fa-graduation-cap text-2xl text-white"></i>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="text-xl font-extrabold tracking-tight text-white font-heading">ATTC</span>
                        <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-blue-500/20 text-cyan-300 border border-blue-500/30">Govt Approved</span>
                    </div>
                    <p class="text-xs text-slate-400 font-medium">Asia Technical Training Center</p>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home.index') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.index') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    Home
                </a>

                <!-- Courses Dropdown -->
                <div class="relative" @mouseenter="courseDropdown = true" @mouseleave="courseDropdown = false">
                    <a href="{{ route('home.all_course') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition inline-flex items-center gap-1.5 {{ request()->routeIs('home.all_course*') || request()->routeIs('home.course_*') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                        Courses <i class="fa-solid fa-chevron-down text-[10px] transition" :class="courseDropdown ? 'rotate-180' : ''"></i>
                    </a>
                    <div x-show="courseDropdown" 
                         x-transition:enter="transition ease-out duration-200" 
                         x-transition:enter-start="opacity-0 translate-y-2" 
                         x-transition:enter-end="opacity-100 translate-y-0" 
                         x-transition:leave="transition ease-in duration-150" 
                         x-transition:leave-start="opacity-100 translate-y-0" 
                         x-transition:leave-end="opacity-0 translate-y-2" 
                         class="absolute left-0 mt-1 w-64 rounded-2xl bg-slate-900 border border-slate-800 shadow-2xl p-2 z-50">
                        <a href="{{ route('home.all_course') }}" class="flex items-center gap-2.5 px-3 py-2.5 text-xs font-semibold rounded-xl text-cyan-400 hover:bg-slate-800/80 transition">
                            <i class="fa-solid fa-shapes text-sm"></i> All Trades & Curriculum
                        </a>
                        <div class="h-px bg-slate-800 my-1"></div>
                        <a href="{{ route('home.course_category_details', 1) }}" class="flex items-center gap-2.5 px-3 py-2 text-xs text-slate-300 hover:text-white hover:bg-slate-800/60 rounded-xl transition">
                            <i class="fa-solid fa-fire-burner text-amber-400"></i> Welding & Heavy Fabrication
                        </a>
                        <a href="{{ route('home.course_category_details', 2) }}" class="flex items-center gap-2.5 px-3 py-2 text-xs text-slate-300 hover:text-white hover:bg-slate-800/60 rounded-xl transition">
                            <i class="fa-solid fa-bolt text-yellow-400"></i> Electrical & Automation
                        </a>
                        <a href="{{ route('home.course_category_details', 3) }}" class="flex items-center gap-2.5 px-3 py-2 text-xs text-slate-300 hover:text-white hover:bg-slate-800/60 rounded-xl transition">
                            <i class="fa-solid fa-gears text-blue-400"></i> Mechanical & Pipe Fitting
                        </a>
                        <a href="{{ route('home.course_category_details', 4) }}" class="flex items-center gap-2.5 px-3 py-2 text-xs text-slate-300 hover:text-white hover:bg-slate-800/60 rounded-xl transition">
                            <i class="fa-solid fa-shield-halved text-emerald-400"></i> Industrial Safety & HSE
                        </a>
                    </div>
                </div>

                <a href="{{ route('home.services') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.services*') || request()->routeIs('home.service_details*') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    Services
                </a>

                <a href="{{ route('home.placement_cell') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.placement_cell') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    Placement Cell
                </a>

                <a href="{{ route('home.job') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.job') || request()->routeIs('home.interview') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    Jobs & Interviews
                </a>

                <a href="{{ route('home.gallery') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.gallery') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    Gallery
                </a>

                <a href="{{ route('home.notice') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.notice') || request()->routeIs('home.event') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    Notices
                </a>

                <a href="{{ route('home.about_us') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.about_us') || request()->routeIs('home.mission') || request()->routeIs('home.teachers') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    About Us
                </a>

                <a href="{{ route('home.contact') }}" class="px-3 py-2 text-sm font-semibold rounded-lg transition {{ request()->routeIs('home.contact') ? 'text-cyan-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                    Contact
                </a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ route('home.students') }}" class="px-3.5 py-2 text-xs font-semibold rounded-xl bg-slate-800/80 hover:bg-slate-700 text-slate-200 border border-slate-700/80 transition flex items-center gap-1.5 shadow-sm">
                    <i class="fa-solid fa-certificate text-amber-400"></i> Verify Certificate
                </a>
                <a href="#admissionModal" onclick="document.getElementById('admissionModal')?.scrollIntoView({behavior: 'smooth'})" class="px-4 py-2.5 text-xs font-bold rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 transition transform active:scale-95 flex items-center gap-2">
                    <i class="fa-solid fa-paper-plane"></i> Apply Online
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800 focus:outline-none">
                    <span class="sr-only">Open main menu</span>
                    <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200" 
         x-transition:enter-start="opacity-0 -translate-y-4" 
         x-transition:enter-end="opacity-100 translate-y-0" 
         x-transition:leave="transition ease-in duration-150" 
         x-transition:leave-start="opacity-100 translate-y-0" 
         x-transition:leave-end="opacity-0 -translate-y-4" 
         class="lg:hidden border-b border-slate-800 bg-slate-900/95 backdrop-blur-xl px-4 pt-2 pb-6 space-y-1">
        <a href="{{ route('home.index') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.index') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Home</a>
        <a href="{{ route('home.all_course') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.all_course*') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Courses & Trades</a>
        <a href="{{ route('home.services') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.services*') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Technical Services</a>
        <a href="{{ route('home.placement_cell') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.placement_cell') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Placement Cell</a>
        <a href="{{ route('home.job') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.job') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Job Circulars</a>
        <a href="{{ route('home.interview') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.interview') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Interview Schedules</a>
        <a href="{{ route('home.gallery') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.gallery') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Photo Gallery</a>
        <a href="{{ route('home.notice') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.notice') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Notice Board</a>
        <a href="{{ route('home.about_us') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.about_us') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">About ATTC</a>
        <a href="{{ route('home.contact') }}" class="block px-3 py-2.5 rounded-xl text-sm font-semibold {{ request()->routeIs('home.contact') ? 'text-cyan-400 bg-slate-800' : 'text-slate-300 hover:bg-slate-800/60' }}">Contact Us</a>
        <div class="pt-3 flex flex-col gap-2">
            <a href="{{ route('home.students') }}" class="w-full text-center py-2.5 text-xs font-semibold rounded-xl bg-slate-800 text-slate-200 border border-slate-700">
                <i class="fa-solid fa-certificate text-amber-400 mr-1.5"></i> Verify Student Certificate
            </a>
            <a href="{{ route('home.index') }}#admissionForm" class="w-full text-center py-3 text-xs font-bold rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg">
                Apply for Admission Now
            </a>
        </div>
    </div>
</header>
