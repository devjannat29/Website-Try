<header x-data="{ mobileMenuOpen: false, aboutDropdown: false, courseDropdown: false, placementDropdown: false, noticesDropdown: false }" class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-xs transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo & Brand Identity (Dual English & Bangla) -->
            <a href="{{ route('home.index') }}" class="flex items-center gap-3.5 group shrink-0">
                <img src="{{ asset('upload/logo.png') }}" 
                     alt="Asia Technical Training Center Logo" 
                     class="h-13 w-auto object-contain transition duration-300 group-hover:scale-105"
                     onerror="this.onerror=null; this.src='{{ asset('upload/attc_shield.png') }}';">
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden xl:flex items-center space-x-1 font-medium">
                <a href="{{ route('home.index') }}" 
                   class="px-3 py-2 text-sm rounded-lg transition {{ request()->routeIs('home.index') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                    Home
                </a>

                <!-- About Us Dropdown -->
                <div class="relative" @mouseenter="aboutDropdown = true" @mouseleave="aboutDropdown = false">
                    <button class="px-3 py-2 text-sm rounded-lg transition inline-flex items-center gap-1 {{ request()->routeIs('home.about_us') || request()->routeIs('home.mission') || request()->routeIs('home.teachers') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                        <span>About Us</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 transition" :class="aboutDropdown ? 'rotate-180 text-[#0284c7]' : ''"></i>
                    </button>
                    <div x-show="aboutDropdown" 
                         x-transition:enter="transition ease-out duration-150" 
                         x-transition:enter-start="opacity-0 translate-y-2" 
                         x-transition:enter-end="opacity-100 translate-y-0" 
                         x-transition:leave="transition ease-in duration-100" 
                         x-transition:leave-start="opacity-100 translate-y-0" 
                         x-transition:leave-end="opacity-0 translate-y-2" 
                         class="absolute left-0 mt-1 w-60 rounded-xl bg-white border border-slate-200 shadow-xl p-2 z-50">
                        <a href="{{ route('home.about_us') }}" class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition">
                            <i class="fa-solid fa-building-columns text-cyan-600 w-4"></i> Overview & History (39 Years)
                        </a>
                        <a href="{{ route('home.mission') }}" class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition">
                            <i class="fa-solid fa-bullseye text-amber-500 w-4"></i> Mission & Vision
                        </a>
                        <a href="{{ route('home.teachers') }}" class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition">
                            <i class="fa-solid fa-id-card-clip text-emerald-600 w-4"></i> Faculties & Management
                        </a>
                    </div>
                </div>

                <!-- Services Link -->
                <a href="{{ route('home.services') }}" 
                   class="px-3 py-2 text-sm rounded-lg transition {{ request()->routeIs('home.services*') || request()->routeIs('home.service_details*') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                    Services
                </a>

                <!-- Courses Dropdown (Mega Menu: Program Types + Trade Departments) -->
                <div class="relative" @mouseenter="courseDropdown = true" @mouseleave="courseDropdown = false">
                    <a href="{{ route('home.all_course') }}" 
                       class="px-3 py-2 text-sm rounded-lg transition inline-flex items-center gap-1 {{ request()->routeIs('home.all_course*') || request()->routeIs('home.course_*') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                        <span>Courses</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 transition" :class="courseDropdown ? 'rotate-180 text-[#0284c7]' : ''"></i>
                    </a>
                    <div x-show="courseDropdown" 
                         x-transition:enter="transition ease-out duration-150" 
                         x-transition:enter-start="opacity-0 translate-y-2" 
                         x-transition:enter-end="opacity-100 translate-y-0" 
                         x-transition:leave="transition ease-in duration-100" 
                         x-transition:leave-start="opacity-100 translate-y-0" 
                         x-transition:leave-end="opacity-0 translate-y-2" 
                         class="absolute -left-16 mt-1 w-[560px] rounded-2xl bg-white border border-slate-200 shadow-2xl p-5 z-50 grid grid-cols-2 gap-5 divide-x divide-slate-100">
                        
                        <!-- Left Column: Program Types (Short Courses, RPL, Free Govt, Paid) -->
                        <div>
                            <div class="flex items-center justify-between pb-2 mb-2 border-b border-slate-100">
                                <span class="text-[11px] font-black uppercase tracking-wider text-slate-400">
                                    <i class="fa-solid fa-graduation-cap text-[#0284c7] mr-1"></i> Program Types
                                </span>
                                <span class="text-[10px] bg-sky-50 text-[#0284c7] font-bold px-1.5 py-0.5 rounded">BTEB</span>
                            </div>

                            <div class="space-y-1">
                                <a href="{{ route('home.all_course') }}" 
                                   class="flex items-center justify-between px-3 py-2 text-xs font-bold text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <span class="flex items-center gap-2">
                                        <i class="fa-solid fa-shapes text-[#0284c7] w-4"></i> All Courses
                                    </span>
                                    <span class="text-[10px] bg-sky-100 text-[#0284c7] font-extrabold px-1.5 py-0.5 rounded-full">All</span>
                                </a>

                                <a href="{{ route('home.all_course', ['type' => 'short_course']) }}" 
                                   class="flex items-center justify-between px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <span class="flex items-center gap-2">
                                        <i class="fa-solid fa-clock-rotate-left text-slate-400 group-hover:text-[#0284c7] w-4"></i> Short Courses
                                    </span>
                                    <span class="text-[10px] bg-slate-100 text-slate-600 font-bold px-1.5 py-0.5 rounded">3-6 Mo</span>
                                </a>

                                <a href="{{ route('home.all_course', ['type' => 'rpl']) }}" 
                                   class="flex items-center justify-between px-3 py-2 text-xs font-semibold text-slate-700 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition group">
                                    <span class="flex items-center gap-2">
                                        <i class="fa-solid fa-stamp text-amber-500 w-4"></i> RPL (Prior Learning)
                                    </span>
                                    <span class="text-[10px] bg-amber-100 text-amber-800 font-bold px-1.5 py-0.5 rounded">Exam</span>
                                </a>

                                <a href="{{ route('home.all_course', ['pricing' => 'free']) }}" 
                                   class="flex items-center justify-between px-3 py-2 text-xs font-semibold text-slate-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition group">
                                    <span class="flex items-center gap-2">
                                        <i class="fa-solid fa-gift text-emerald-600 w-4"></i> Free (Govt. Subsidized)
                                    </span>
                                    <span class="text-[10px] bg-emerald-100 text-emerald-800 font-black px-1.5 py-0.5 rounded uppercase">Free</span>
                                </a>

                                <a href="{{ route('home.all_course', ['pricing' => 'paid']) }}" 
                                   class="flex items-center justify-between px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <span class="flex items-center gap-2">
                                        <i class="fa-solid fa-certificate text-sky-500 w-4"></i> Paid Professional
                                    </span>
                                    <span class="text-[10px] bg-slate-100 text-slate-600 font-bold px-1.5 py-0.5 rounded">Pro</span>
                                </a>
                            </div>
                        </div>

                        <!-- Right Column: Trade Departments (Electrical, English, Civil, Plumbing, Safety, etc.) -->
                        <div class="pl-5">
                            <div class="flex items-center justify-between pb-2 mb-2 border-b border-slate-100">
                                <span class="text-[11px] font-black uppercase tracking-wider text-slate-400">
                                    <i class="fa-solid fa-layer-group text-cyan-600 mr-1"></i> Trade Departments
                                </span>
                                <span class="text-[10px] text-slate-400 font-semibold">Practical Labs</span>
                            </div>

                            <div class="space-y-1">
                                <a href="{{ route('home.course_category_details', 3) }}" 
                                   class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <i class="fa-solid fa-bolt text-yellow-500 w-4"></i>
                                    <span>Electrical & Electronics</span>
                                </a>

                                <a href="{{ route('home.course_category_details', 4) }}" 
                                   class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <i class="fa-solid fa-language text-sky-500 w-4"></i>
                                    <span>English Language & Workplace</span>
                                </a>

                                <a href="{{ route('home.course_category_details', 1) }}" 
                                   class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <i class="fa-solid fa-helmet-safety text-amber-500 w-4"></i>
                                    <span>Civil Construction (Rod Binder)</span>
                                </a>

                                <a href="{{ route('home.course_category_details', 2) }}" 
                                   class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <i class="fa-solid fa-faucet-drip text-blue-500 w-4"></i>
                                    <span>Plumbing & Pipe Fitting</span>
                                </a>

                                <a href="{{ route('home.course_category_details', 5) }}" 
                                   class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <i class="fa-solid fa-shield-halved text-emerald-600 w-4"></i>
                                    <span>Industrial Safety & HSE</span>
                                </a>

                                <a href="{{ route('home.course_category_details', 6) }}" 
                                   class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition group">
                                    <i class="fa-solid fa-snowflake text-cyan-500 w-4"></i>
                                    <span>HVAC & Refrigeration</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Job Placement Dropdown -->
                <div class="relative" @mouseenter="placementDropdown = true" @mouseleave="placementDropdown = false">
                    <button class="px-3 py-2 text-sm rounded-lg transition inline-flex items-center gap-1 {{ request()->routeIs('home.placement_cell') || request()->routeIs('home.job') || request()->routeIs('home.interview') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                        <span>Overseas</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 transition" :class="placementDropdown ? 'rotate-180 text-[#0284c7]' : ''"></i>
                    </button>
                    <div x-show="placementDropdown" 
                         x-transition:enter="transition ease-out duration-150" 
                         x-transition:enter-start="opacity-0 translate-y-2" 
                         x-transition:enter-end="opacity-100 translate-y-0" 
                         x-transition:leave="transition ease-in duration-100" 
                         x-transition:leave-start="opacity-100 translate-y-0" 
                         x-transition:leave-end="opacity-0 translate-y-2" 
                         class="absolute left-0 mt-1 w-60 rounded-xl bg-white border border-slate-200 shadow-xl p-2 z-50">
                        <a href="{{ route('home.placement_cell') }}" class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition">
                            <i class="fa-solid fa-plane-departure text-cyan-600 w-4"></i> Placement Cell Overview
                        </a>
                        <a href="{{ route('home.job') }}" class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition">
                            <i class="fa-solid fa-briefcase text-emerald-600 w-4"></i> Available Job Circulars
                        </a>
                        <a href="{{ route('home.interview') }}" class="flex items-center gap-2.5 px-3 py-2 text-xs font-semibold text-slate-700 hover:text-[#0284c7] hover:bg-sky-50 rounded-lg transition">
                            <i class="fa-solid fa-clipboard-check text-purple-600 w-4"></i> Upcoming Client Interviews
                        </a>
                    </div>
                </div>

                <!-- Gallery -->
                <a href="{{ route('home.gallery') }}" 
                   class="px-3 py-2 text-sm rounded-lg transition {{ request()->routeIs('home.gallery') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                    Gallery
                </a>

                <!-- Notice  -->
                <a href="{{ route('home.notice') }}"
                    class="px-3 py-2 text-sm rounded-lg transition {{ request()->routeIs('home.notice') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                        Notice
                </a>

                <!-- Events -->
                <a href="{{ route('home.event') }}"
                    class="px-3 py-2 text-sm rounded-lg transition {{ request()->routeIs('home.event*') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                    Events
                </a>

                <!-- Contact -->
                <a href="{{ route('home.contact') }}" 
                   class="px-3 py-2 text-sm rounded-lg transition {{ request()->routeIs('home.contact') ? 'text-[#0284c7] font-bold bg-sky-50' : 'text-slate-700 hover:text-[#0284c7] hover:bg-slate-50' }}">
                    Contact Us
                </a>
            </nav>

            <!-- CTA Actions -->
            <div class="hidden lg:flex items-center gap-2.5">
                <a href="{{ route('home.students') }}" 
                   class="px-3.5 py-2 text-xs font-bold rounded-lg border border-slate-300 text-slate-700 hover:text-[#0284c7] hover:border-[#0284c7] hover:bg-sky-50 transition flex items-center gap-1.5 shadow-2xs">
                    <i class="fa-solid fa-award text-amber-600"></i>
                    <span>Admission</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex xl:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2 rounded-lg text-slate-700 hover:text-[#0284c7] hover:bg-slate-100 transition focus:outline-hidden"
                        aria-label="Toggle navigation">
                    <i class="fa-solid text-xl" :class="mobileMenuOpen ? 'fa-xmark' : 'fa-bars'"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="xl:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 space-y-2 shadow-2xl">
        
        <a href="{{ route('home.index') }}" class="block px-3 py-2 text-sm font-semibold rounded-lg text-slate-700 hover:bg-sky-50 hover:text-[#0284c7]">
            Home
        </a>
        
        <div class="py-1">
            <p class="px-3 text-[11px] font-bold text-slate-400 uppercase tracking-wider">About</p>
            <a href="{{ route('home.about_us') }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">Overview (40+ Years)</a>
            <a href="{{ route('home.mission') }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">Mission & Vision</a>
            <a href="{{ route('home.teachers') }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">Faculties & Management</a>
        </div>

        <a href="{{ route('home.services') }}" class="block px-3 py-2 text-sm font-semibold rounded-lg text-slate-700 hover:bg-sky-50 hover:text-[#0284c7]">
            Services
        </a>

        <div class="py-1">
            <p class="px-3 text-[11px] font-black text-slate-400 uppercase tracking-wider flex items-center justify-between">
                <span>Courses By Program</span>
                <span class="text-[9px] bg-sky-100 text-[#0284c7] font-extrabold px-1.5 py-0.5 rounded">BTEB</span>
            </p>
            <a href="{{ route('home.all_course') }}" class="block px-3 py-1.5 text-sm font-bold text-[#0284c7] hover:bg-sky-50">
                <i class="fa-solid fa-shapes text-[#0284c7] mr-1.5 w-4"></i> All Technical Courses
            </a>
            <a href="{{ route('home.all_course', ['type' => 'short_course']) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-clock-rotate-left text-slate-400 mr-1.5 w-4"></i> Short Courses (3-6 Months)
            </a>
            <a href="{{ route('home.all_course', ['type' => 'rpl']) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-amber-600">
                <i class="fa-solid fa-stamp text-amber-500 mr-1.5 w-4"></i> RPL (Prior Learning Assessment)
            </a>
            <a href="{{ route('home.all_course', ['pricing' => 'free']) }}" class="block px-3 py-1.5 text-sm font-semibold text-emerald-600 hover:text-emerald-700">
                <i class="fa-solid fa-gift text-emerald-600 mr-1.5 w-4"></i> Free (Govt. Subsidized Courses)
            </a>
            <a href="{{ route('home.all_course', ['pricing' => 'paid']) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-certificate text-sky-500 mr-1.5 w-4"></i> Paid Professional Certification
            </a>

            <p class="px-3 pt-3 text-[11px] font-black text-slate-400 uppercase tracking-wider">Courses By Department</p>
            <a href="{{ route('home.course_category_details', 3) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-bolt text-yellow-500 mr-1.5 w-4"></i> Electrical & Electronics
            </a>
            <a href="{{ route('home.course_category_details', 4) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-language text-sky-500 mr-1.5 w-4"></i> English Language & Workplace
            </a>
            <a href="{{ route('home.course_category_details', 1) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-helmet-safety text-amber-500 mr-1.5 w-4"></i> Civil Construction (Rod Binder)
            </a>
            <a href="{{ route('home.course_category_details', 2) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-faucet-drip text-blue-500 mr-1.5 w-4"></i> Plumbing & Pipe Fitting
            </a>
            <a href="{{ route('home.course_category_details', 5) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-shield-halved text-emerald-600 mr-1.5 w-4"></i> Industrial Safety & HSE
            </a>
            <a href="{{ route('home.course_category_details', 6) }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">
                <i class="fa-solid fa-snowflake text-cyan-500 mr-1.5 w-4"></i> HVAC & Refrigeration
            </a>
        </div>

        <div class="py-1">
            <p class="px-3 text-[11px] font-bold text-slate-400 uppercase tracking-wider">Overseas</p>
            <a href="{{ route('home.placement_cell') }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">Placement Cell</a>
            <a href="{{ route('home.job') }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">Job Circulars</a>
            <a href="{{ route('home.interview') }}" class="block px-3 py-1.5 text-sm text-slate-600 hover:text-[#0284c7]">Upcoming Interviews</a>
        </div>

        <a href="{{ route('home.gallery') }}" class="block px-3 py-2 text-sm font-semibold rounded-lg text-slate-700 hover:bg-sky-50 hover:text-[#0284c7]">
            Gallery
        </a>

        <a href="{{ route('home.notice') }}" class="block px-3 py-2 text-sm font-semibold rounded-lg text-slate-700 hover:bg-sky-50 hover:text-[#0284c7]">
            Notice
        </a>

        <a href="{{ route('home.event') }}" class="block px-3 py-2 text-sm font-semibold rounded-lg text-slate-700 hover:bg-sky-50 hover:text-[#0284c7]">
            Events 
        </a>

        <a href="{{ route('home.contact') }}" class="block px-3 py-2 text-sm font-semibold rounded-lg text-slate-700 hover:bg-sky-50 hover:text-[#0284c7]">
            Contact Us
        </a>

        <div class="pt-3 border-t border-slate-200 grid grid-cols-2 gap-2">
            <a href="{{ route('home.students') }}" class="w-full text-center py-2 text-xs font-bold rounded-lg border border-slate-300 text-slate-700 bg-slate-50">
                <i class="fa-solid fa-award text-amber-500 mr-1"></i> Admission
            </a>
        </div>
    </div>
</header>
