@extends('frontend.layouts.master')

@section('title', 'Asia Technical Training Center')
@section('meta_description', 'Asia Technical Training Center (ATTC) is a premier BTEB registered vocational training institute in Mirpur-1, Dhaka offering certified short courses, RPL assessments, free govt training, and overseas job placement.')

@section('content')

<!-- =========================================================================
     1. HERO SECTION (Full Screen Size with Centered Title & Content)
     ========================================================================= -->
<section class="relative min-h-screen flex items-center justify-center text-white overflow-hidden bg-[#07172c]">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('upload/hero_bg.jpg') }}" 
             alt="Asia Technical Training Center Campus and Trainees" 
             class="w-full h-full object-cover object-center filter brightness-90">
        <div class="absolute inset-0 bg-gradient-to-b from-[#07172c]/95 via-[#07172c]/85 to-[#0b2545]/90"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 w-full text-center">
        <div class="max-w-4xl mx-auto space-y-6">
            
            <!-- Accreditation Badges -->
            <div class="flex flex-wrap items-center justify-center gap-2.5">
                <!-- <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                    <i class="fa-solid fa-certificate text-amber-400"></i> BTEB RTO Code: 50821
                </span> -->
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-sky-500/20 text-cyan-300 border border-sky-500/30">
                    <i class="fa-solid fa-shield-halved text-cyan-400"></i> Govt. Recognized & BMET Partner
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                    <i class="fa-solid fa-clock-rotate-left text-emerald-400"></i> Est. 1985 (40+ Years)
                </span>
            </div>

            <!-- Main Heading (Centered Middle) -->
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.15] font-heading">
                Asia Technical Training Center
            </h1>

            <!-- Subtitle -->
            <!-- <p class="text-base sm:text-2xl font-bold text-amber-400 font-heading">
                Registered Training Organization - Bangladesh Technical Education Board (BTEB)
            </p> -->

            <p class="text-sm sm:text-base text-slate-200 leading-relaxed max-w-3xl mx-auto font-normal">
                A Government-Registered Training Organization (RTO) and Competency-Based Training & Assessment (CBT&A) Centre under the National Skills Development Authority (NSDA), Prime Minister’s Office, Government of Bangladesh.
            </p>

            <!-- Centered Action Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-4 pt-3">
                <a href="{{ route('home.contact') }}" 
                   class="btn-primary-action px-7 py-3.5 rounded-xl font-bold text-sm flex items-center gap-2 shadow-lg">
                    <i class="fa-solid fa-envelope"></i> Contact Us
                </a>
                <a href="{{ route('home.all_course') }}" 
                   class="px-7 py-3.5 rounded-xl font-bold text-sm bg-white/10 hover:bg-white/20 text-white border border-white/30 backdrop-blur-xs transition flex items-center gap-2">
                    <i class="fa-solid fa-shapes text-cyan-300"></i> Explore Courses
                </a>
                <!-- <a href="{{ route('home.students') }}" 
                   class="px-6 py-3.5 rounded-xl font-bold text-sm bg-amber-500/20 hover:bg-amber-500/30 text-amber-300 border border-amber-500/40 backdrop-blur-xs transition flex items-center gap-2">
                    <i class="fa-solid fa-award"></i> Verify Certificate
                </a> -->
            </div>

            <!-- Key Figures: Equal Space Between -->
            <!-- <div class="pt-8 border-t border-slate-700/60 flex justify-between items-center gap-4 max-w-3xl mx-auto">
                <div class="flex-1 text-center">
                    <p class="text-2xl sm:text-3xl font-black text-white font-heading">39+</p>
                    <p class="text-xs sm:text-sm text-slate-300 font-medium">Years of Legacy</p>
                </div>
                <div class="flex-1 text-center">
                    <p class="text-2xl sm:text-3xl font-black text-cyan-400 font-heading">18,500+</p>
                    <p class="text-xs sm:text-sm text-slate-300 font-medium">Overseas Placed</p>
                </div>
                <div class="flex-1 text-center">
                    <p class="text-2xl sm:text-3xl font-black text-amber-400 font-heading">100%</p>
                    <p class="text-xs sm:text-sm text-slate-300 font-medium">Practical Training</p>
                </div>
            </div> -->

        </div>
    </div>
</section>

<!-- =========================================================================
     2. LATEST NEWS & NOTICE TICKER (Direct PDF Download on Click)
     ========================================================================= -->
@include('frontend.partials.ticker')

<!-- =========================================================================
     3. LEARN ABOUT US / WELCOME TO ATTC
     ========================================================================= -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Imagery & Milestone Badge -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl border border-slate-200">
                    <img src="{{ asset('upload/hero_bg.jpg') }}" 
                         alt="Asia Technical Training Center Campus" 
                         class="w-full h-[400px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#07172c]/80 via-transparent to-transparent"></div>
                    <!-- <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="inline-block px-3 py-1 rounded-md text-xs font-bold bg-[#0284c7] mb-2">
                            149/9-C, Shah Alibag, Mirpur-1, Dhaka
                        </span>
                        <h4 class="text-lg font-bold">149/9-C, Shah Alibag, Mirpur-1, Dhaka</h4>
                    </div> -->
                </div>

                <!-- 39 Years Floating Badge -->
                <div class="absolute -bottom-6 -right-4 sm:bottom-6 sm:-right-6 bg-[#07172c] text-white p-5 rounded-2xl shadow-2xl border-2 border-amber-400 flex items-center gap-3">
                    <div class="text-3xl font-black text-amber-400 font-heading">40+</div>
                    <div class="text-xs font-bold leading-tight uppercase tracking-wider text-slate-200">
                        Years Of<br><span class="text-cyan-400">Excellence</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Institutional Profile -->
            <div class="lg:col-span-7 space-y-5">
                <div class="section-label">Welcome To ATTC</div>
                
                <h2 class="text-2xl sm:text-4xl font-extrabold text-[#07172c] tracking-tight leading-tight">
                    Empowering Futures Through <span class="text-[#0284c7]">Skills, Education & Innovation</span>
                </h2>

                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    <strong>ASIA TECHNICAL TRAINING CENTRE (ATTC)</strong> is a Registered Training Organization (RTO) under the <strong>Bangladesh Technical Education Board (BTEB)</strong>, Center Code <strong>50821</strong>. Founded in <strong>1985</strong> by founder member & owner <strong>Mr. Md. Abdul Malek</strong>, ATTC was established with a clear humanitarian vision: to transform unemployed youth into world-class certified technicians.
                </p>

                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    ATTC actively conducts vast activities in Education, Vocational Training, and overseas skill development. Partnering closely with national skills programs including the <strong>ASSET Project</strong> and <strong>NSDA</strong>, we take pride in placing over 18,500 skilled graduates across Saudi Arabia, UAE, Qatar, Kuwait, Japan, and Singapore.
                </p>

                <!-- Key Highlights List -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                    <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                        <i class="fa-solid fa-circle-check text-[#0284c7]"></i>
                        <span>BTEB Nationally Certified Syllabus</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                        <i class="fa-solid fa-circle-check text-[#0284c7]"></i>
                        <span>Short Courses & RPL Fast-Track Testing</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                        <i class="fa-solid fa-circle-check text-[#0284c7]"></i>
                        <span>Govt. Subsidized Free Courses (ASSET)</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                        <i class="fa-solid fa-circle-check text-[#0284c7]"></i>
                        <span>Direct Overseas Client Interviews</span>
                    </div>
                </div>

                <div class="pt-4 flex items-center gap-4">
                    <a href="{{ route('home.about_us') }}" class="btn-primary-action px-6 py-3 rounded-xl font-bold text-xs uppercase tracking-wider flex items-center gap-2">
                        <span>About More</span> <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('home.mission') }}" class="btn-outline-action px-6 py-3 rounded-xl font-bold text-xs uppercase tracking-wider flex items-center gap-2">
                        <span>Mission & Vision</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     4. OUR SERVICES (3 Professional Cards)
     ========================================================================= -->
<section class="py-16 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="section-label">Student Support</div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07172c] mt-2 tracking-tight">
                Our Institutional Services
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-2">
                Comprehensive academic, residential, and career pathways designed for every trainee's success.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Service 1: Career Counseling -->
            <div class="pro-card p-6 flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-xl bg-sky-50 text-[#0284c7] flex items-center justify-center text-2xl mb-5 border border-sky-100">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#07172c] mb-2 font-heading">Career Counseling</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        At Asia Technical Training Center (A.T.T.C), we provide career counseling services to ensure our students are well-prepared for their professional journeys. Career counseling plays a vital role in shaping students' careers by guiding them toward the right path based on their skills, interests, and aspirations.
                    </p>
                </div>
                <div class="pt-5 mt-5 border-t border-slate-100">
                    <a href="{{ route('home.service_details', 1) }}" class="text-xs font-bold text-[#0284c7] hover:text-[#0369a1] inline-flex items-center gap-1.5 transition">
                        <span>Learn Details</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Service 2: Hostel -->
            <div class="pro-card p-6 flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl mb-5 border border-amber-100">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#07172c] mb-2 font-heading">Hostel Facility</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Hostel Facility at Asia Technical Training Center (A.T.T.C). Asia Technical Training Center offers accommodation for students coming from distant areas. Our hostel facility is safe, clean, and provides a supportive environment with 24/7 security, disciplined study hours, and hygienic dining.
                    </p>
                </div>
                <div class="pt-5 mt-5 border-t border-slate-100">
                    <a href="{{ route('home.service_details', 2) }}" class="text-xs font-bold text-[#0284c7] hover:text-[#0369a1] inline-flex items-center gap-1.5 transition">
                        <span>Learn Details</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Service 3: Job Placement -->
            <div class="pro-card p-6 flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl mb-5 border border-emerald-100">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#07172c] mb-2 font-heading">Job Placement</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        At Asia Technical Training Center (A.T.T.C), we are dedicated to supporting our students' career aspirations through a comprehensive Job Placement program connecting students with top overseas employers and reputable multinational engineering contractors worldwide.
                    </p>
                </div>
                <div class="pt-5 mt-5 border-t border-slate-100">
                    <a href="{{ route('home.service_details', 3) }}" class="text-xs font-bold text-[#0284c7] hover:text-[#0369a1] inline-flex items-center gap-1.5 transition">
                        <span>Learn Details</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     5. COURSES WE OFFERED (Interactive JavaScript Instant Search & Type Tabs)
     ========================================================================= -->
<section class="py-16 lg:py-20 bg-white" 
         x-data="{ 
            activeTab: 'all',
            activeCategory: 'all',
            searchQuery: '',
            matches(type, pricing, category, name, desc) {
                const query = this.searchQuery.toLowerCase().trim();
                const textMatch = !query || name.toLowerCase().includes(query) || desc.toLowerCase().includes(query);
                if (!textMatch) return false;

                if (this.activeCategory !== 'all' && String(category) !== String(this.activeCategory)) return false;

                if (this.activeTab === 'all') return true;
                if (this.activeTab === 'short_course') return type === 'short_course';
                if (this.activeTab === 'rpl') return type === 'rpl';
                if (this.activeTab === 'free') return pricing === 'free';
                if (this.activeTab === 'paid') return pricing === 'paid';
                return true;
            }
         }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
            <div>
                <div class="section-label">Certified Curriculum</div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07172c] mt-2 tracking-tight">
                    Courses & Training Programs
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    BTEB recognized Short Courses, RPL Trade Testing, and Government Free Training.
                </p>
            </div>

            <!-- Instant JavaScript Search Bar -->
            <div class="relative w-full md:w-80">
                <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-3 text-slate-400 text-xs"></i>
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Instant search by trade name..." 
                       class="w-full pl-9 pr-8 py-2 text-xs rounded-xl border border-slate-300 bg-slate-50 focus:bg-white focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] outline-hidden transition">
                <button x-show="searchQuery.length > 0" @click="searchQuery = ''" class="absolute right-2.5 top-2.5 text-slate-400 hover:text-slate-600 text-xs cursor-pointer">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

        <!-- Course Type & Pricing Tabs (Short Course, RPL, Free, Paid) -->
        <div class="flex items-center gap-2 overflow-x-auto pb-2 mb-4 scrollbar-none">
            <button @click="activeTab = 'all'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap cursor-pointer"
                    :class="activeTab === 'all' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                All Courses ({{ count($featuredCourses) }})
            </button>
            <button @click="activeTab = 'short_course'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap flex items-center gap-1.5 cursor-pointer"
                    :class="activeTab === 'short_course' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                <i class="fa-solid fa-clock-rotate-left text-xs"></i> Short Courses
            </button>
            <button @click="activeTab = 'rpl'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap flex items-center gap-1.5 cursor-pointer"
                    :class="activeTab === 'rpl' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                <i class="fa-solid fa-stamp text-xs text-amber-500"></i> RPL (Prior Learning)
            </button>
            <button @click="activeTab = 'free'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap flex items-center gap-1.5 cursor-pointer"
                    :class="activeTab === 'free' ? 'bg-emerald-600 text-white shadow-xs' : 'bg-emerald-50 text-emerald-800 border border-emerald-200 hover:bg-emerald-100'">
                <i class="fa-solid fa-gift text-xs"></i> Free (Govt. Subsidized)
            </button>
            <button @click="activeTab = 'paid'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap cursor-pointer"
                    :class="activeTab === 'paid' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                Paid Professional
            </button>
        </div>

        <!-- Category Department Pills (Electrical, English, Civil, Plumbing, Safety, HVAC, etc.) -->
        

<div class="relative mb-8"
     x-data="{
        scrollLeft() {
            this.$refs.categoryList.scrollBy({ left: -250, behavior: 'smooth' });
        },
        scrollRight() {
            this.$refs.categoryList.scrollBy({ left: 250, behavior: 'smooth' });
        }
     }">

    <div class="flex items-center gap-2">

        <!-- Left Arrow -->
        <button @click="scrollLeft()"
                class="shrink-0 w-10 h-10 rounded-full bg-white border border-slate-200
                       shadow-md text-[#07172c] hover:bg-[#07172c]
                       hover:text-white transition flex items-center justify-center">
            <i class="fa-solid fa-chevron-left text-xs"></i>
        </button>

        <!-- Category List -->
        <div x-ref="categoryList"
             class="flex-1 min-w-0 flex items-center gap-2 overflow-x-auto
                    scroll-smooth pb-2 pt-2 scrollbar-none">

            <!-- Trades Label -->
            <span class="text-[11px] font-black text-slate-400 uppercase
                         tracking-wider shrink-0 mr-1 flex items-center gap-1">
                <i class="fa-solid fa-layer-group text-[#0284c7]"></i>
                Trades:
            </span>

            <!-- All Trades -->
            <button @click="activeCategory = 'all'"
                    class="px-3.5 py-1.5 rounded-lg text-xs font-bold transition
                           whitespace-nowrap cursor-pointer"
                    :class="activeCategory === 'all'
                        ? 'bg-[#07172c] text-white shadow-sm'
                        : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                All Trades
            </button>

            <!-- Dynamic Categories -->
            @foreach(\App\Models\Category::all() as $cat)
                <button @click="activeCategory = '{{ $cat->id }}'"
                        class="px-3.5 py-1.5 rounded-lg text-xs font-semibold
                               transition whitespace-nowrap cursor-pointer"
                        :class="activeCategory === '{{ $cat->id }}'
                            ? 'bg-[#07172c] text-white shadow-sm'
                            : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                    {{ $cat->name }}
                </button>
            @endforeach

        </div>

        <!-- Right Arrow -->
        <button @click="scrollRight()"
                class="shrink-0 w-10 h-10 rounded-full bg-white border border-slate-200
                       shadow-md text-[#07172c] hover:bg-[#07172c]
                       hover:text-white transition flex items-center justify-center">
            <i class="fa-solid fa-chevron-right text-xs"></i>
        </button>
    </div>
</div>



        <!-- Course Cards Grid (Instant Client-side Filtered) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($featuredCourses as $course)
                <div x-show="matches('{{ $course->course_type ?? 'short_course' }}', '{{ $course->pricing_type ?? 'paid' }}', '{{ $course->category }}', '{{ addslashes($course->name) }}', '{{ addslashes($course->description ?? '') }}')" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="pro-card overflow-hidden flex flex-col justify-between group">
                    <div>
                        <!-- Course Image with Badges -->
                        <div class="relative h-44 overflow-hidden bg-slate-100">
                            <img src="{{ $course->image ? (str_starts_with($course->image, 'http') ? $course->image : asset($course->image)) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80' }}" 
                                 alt="{{ $course->name }}" 
                                 class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80';">
                            
                            <!-- Duration Badge -->
                            <div class="absolute top-3 left-3 bg-[#07172c]/90 text-white text-[11px] font-bold px-2.5 py-1 rounded-md backdrop-blur-xs flex items-center gap-1 shadow-xs">
                                <i class="fa-regular fa-clock text-cyan-400"></i> {{ $course->duration ?? '6 month' }}
                            </div>

                            <!-- Course Type & Pricing Tag -->
                            <div class="absolute top-3 right-3 flex flex-col items-end gap-1">
                                @if(($course->pricing_type ?? 'paid') === 'free' || (int)($course->Fee ?? 0) === 0)
                                    <span class="bg-emerald-600 text-white text-[10px] font-black px-2.5 py-0.5 rounded shadow-xs uppercase tracking-wider">
                                        FREE (Govt)
                                    </span>
                                @elseif(($course->course_type ?? 'short_course') === 'rpl')
                                    <span class="bg-amber-500 text-slate-950 text-[10px] font-black px-2 py-0.5 rounded shadow-xs uppercase tracking-wider">
                                        RPL Trade
                                    </span>
                                @else
                                    <span class="bg-sky-600 text-white text-[10px] font-bold px-2 py-0.5 rounded shadow-xs uppercase tracking-wider">
                                        Short Course
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-5">
                            <h3 class="text-base font-bold text-[#07172c] group-hover:text-[#0284c7] transition line-clamp-1 font-heading mb-1.5">
                                <a href="{{ route('home.course_details', $course->id) }}">{{ $course->name }}</a>
                            </h3>
                            <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed mb-4">
                                {{ $course->description }}
                            </p>
                            
                            <div class="flex items-center justify-between text-xs py-2 border-t border-slate-100">
                                <span class="text-slate-400 font-medium">Training Fee:</span>
                                @if(($course->pricing_type ?? 'paid') === 'free' || (int)($course->Fee ?? 0) === 0)
                                    <span class="font-extrabold text-emerald-600 text-sm">
                                        100% Free
                                    </span>
                                @else
                                    <span class="font-extrabold text-[#0284c7] text-sm">
                                        BDT {{ number_format((float)($course->Fee ?? 20000)) }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer Actions -->
                    <div class="p-5 pt-0 grid grid-cols-2 gap-2">
                        <a href="{{ route('home.course_details', $course->id) }}" class="text-center py-2 text-xs font-bold rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50 transition">
                            Details
                        </a>
                        <a href="{{ route('home.contact') }}#admissionForm" class="btn-primary-action text-center py-2 text-xs font-bold rounded-lg">
                            Registration
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-4 text-center py-12 text-slate-500">
                    No courses available currently.
                </div>
            @endforelse
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('home.all_course') }}" class="btn-outline-action px-6 py-2.5 rounded-lg text-xs font-bold inline-flex items-center gap-2">
                <span>Browse All Course Details</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

    </div>
</section>

<!-- =========================================================================
     6. OUR FACULTIES & MANAGEMENT (Fixed for Large Screen Full Proportional Display)
     ========================================================================= -->
<section class="py-16 lg:py-20 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="section-label">Leadership & Mentorship</div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07172c] mt-2 tracking-tight">
                Our Faculties & Management
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-2">
                Experienced engineers, certified instructors, and leaders driving technical craftsmanship since 1985.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($members as $member)
                <!-- Professional Member Card (Proportional Portrait Container for Perfect Large Screen Display) -->
                <div class="pro-card overflow-hidden group flex flex-col justify-between bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-xl transition-all duration-300">
                    
                    <!-- Image Frame: aspect-[4/4.5] ensures full head, face, neck & shoulders show on any screen -->
                    <div class="relative w-full aspect-[4/4.5] sm:h-80 md:h-96 lg:h-[390px] overflow-hidden bg-slate-100">
                        <img src="{{ $member->image ? (str_starts_with($member->image, 'http') ? $member->image : asset($member->image)) : asset('upload/member/member_1.jpg') }}" 
                             alt="{{ $member->name }}" 
                             class="w-full h-full object-cover object-[center_18%] transition-transform duration-500 group-hover:scale-105"
                             onerror="this.onerror=null; this.src='{{ asset('upload/member/member_1.jpg') }}';">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-60 pointer-events-none"></div>

                        <!-- Top Designation Badge -->
                        <div class="absolute top-3 left-3 bg-[#07172c]/95 text-amber-400 font-bold text-[11px] px-3 py-1 rounded-md backdrop-blur-xs shadow-sm border border-amber-400/20">
                            {{ $member->designation }}
                        </div>
                    </div>

                    <div class="p-6 text-center space-y-2 flex-grow flex flex-col justify-between">
                        <div class="space-y-1">
                            <h3 class="text-lg font-bold text-[#07172c] font-heading group-hover:text-[#0284c7] transition">
                                {{ $member->name }}
                            </h3>
                            <p class="text-xs font-semibold text-[#0284c7]">
                                {{ $member->department ?? 'Management' }}
                            </p>
                            <p class="text-xs text-slate-500">
                                <i class="fa-solid fa-graduation-cap text-slate-400 mr-1"></i> {{ $member->education ?? 'Engineering Expert' }}
                            </p>
                        </div>

                        <!-- Social / Contact Links -->
                        <div class="pt-4 flex items-center justify-center space-x-2 border-t border-slate-100">
                            <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:asiatechnicalbd@gmail.com" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-slate-500">
                    Faculty details will be updated soon.
                </div>
            @endforelse
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('home.teachers') }}" class="btn-outline-action px-6 py-2.5 rounded-lg text-xs font-bold inline-flex items-center gap-2">
                <span>View All Faculties & Staff</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

    </div>
</section>

<!-- =========================================================================
     7. TESTIMONIAL SCROLLER (Zero Error, Ultra-Smooth Carousel Slider)
     ========================================================================= -->
<section class="py-16 lg:py-20 bg-white" 
         x-data="{ 
            activeSlide: 0, 
            totalSlides: {{ count($testimonials) > 0 ? count($testimonials) : 1 }},
            timer: null,
            startAutoplay() {
                if (this.totalSlides <= 1) return;
                this.timer = setInterval(() => {
                    this.next();
                }, 4500);
            },
            stopAutoplay() {
                if (this.timer) {
                    clearInterval(this.timer);
                    this.timer = null;
                }
            },
            next() {
                this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
            },
            prev() {
                this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
            }
         }" 
         x-init="startAutoplay()"
         @mouseenter="stopAutoplay()" 
         @mouseleave="startAutoplay()">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-10">
            <div class="section-label">Student Success Stories</div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07172c] mt-2 tracking-tight">
                What Our Students Say
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-2">
                Real feedback from graduates now working abroad and across Bangladesh.
            </p>
        </div>

        <!-- Carousel Frame -->
        <div class="relative bg-gradient-to-br from-slate-50 to-sky-50/50 rounded-2xl border border-slate-200 p-8 sm:p-12 shadow-sm min-h-[260px] overflow-hidden">
            
            <!-- Decorative Quote Icon -->
            <div class="absolute top-6 right-8 text-sky-200 text-6xl pointer-events-none select-none font-serif opacity-60">
                “
            </div>

            <!-- Continuous Horizontal Track (Zero Layout Shift) -->
            <div class="w-full overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out" 
                     :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                    @forelse($testimonials as $idx => $t)
                        <div class="w-full shrink-0 space-y-6">
                            
                            <!-- Quote Content -->
                            <p class="text-sm sm:text-base text-slate-700 italic leading-relaxed pr-6">
                                "{{ $t->quote }}"
                            </p>

                            <!-- Student Details -->
                            <div class="flex items-center gap-4 pt-4 border-t border-slate-200">
                                <div class="w-12 h-12 rounded-full bg-[#0284c7] text-white flex items-center justify-center font-bold text-lg shadow-sm shrink-0">
                                    {{ strtoupper(substr($t->name, 0, 1)) }}
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-[#07172c] font-heading">{{ $t->name }}</h4>
                                    <p class="text-xs font-semibold text-[#0284c7]">{{ $t->trade }}</p>
                                    <p class="text-[11px] text-slate-400">{{ $t->batch }}</p>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="w-full shrink-0 text-center py-8 text-slate-500">
                            Testimonials will be added soon.
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Prev / Next Controls -->
            <button @click="prev()" 
                    class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-white border border-slate-200 shadow-md text-slate-700 hover:text-[#0284c7] hover:border-[#0284c7] flex items-center justify-center transition focus:outline-hidden z-10">
                <i class="fa-solid fa-chevron-left text-xs"></i>
            </button>
            <button @click="next()" 
                    class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-white border border-slate-200 shadow-md text-slate-700 hover:text-[#0284c7] hover:border-[#0284c7] flex items-center justify-center transition focus:outline-hidden z-10">
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>

        </div>

        <!-- Scroller Dot Indicators -->
        <div class="flex items-center justify-center gap-2 mt-6">
            @foreach($testimonials as $idx => $t)
                <button @click="activeSlide = {{ $idx }}" 
                        class="h-2 rounded-full transition-all duration-300" 
                        :class="activeSlide === {{ $idx }} ? 'w-8 bg-[#0284c7]' : 'w-2 bg-slate-300 hover:bg-slate-400'"></button>
            @endforeach
        </div>

    </div>
</section>

<!-- =========================================================================
     8. OVERSEAS PARTNERS (Only PNG Logos with Uniform Normalized Boxes)
     ========================================================================= -->
<section class="py-16 bg-[#07172c] text-white overflow-hidden border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8 text-center">
        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-bold bg-sky-500/10 text-cyan-400 border border-sky-500/20 mb-3">
            <i class="fa-solid fa-earth-americas"></i> Global Employment Network
        </div>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
            Overseas Recruiting Partners & Employers
        </h2>
        <p class="text-xs sm:text-sm text-slate-400 max-w-2xl mx-auto mt-2">
            Our certified trainees are recruited by multinational infrastructure conglomerates and government-approved recruiting agencies across the Middle East, Japan, and Southeast Asia.
        </p>
    </div>

    <!-- Infinite Scrolling Marquee with Strictly PNG Logos -->
    <div class="relative w-full overflow-hidden py-6">
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-r from-[#07172c] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-l from-[#07172c] to-transparent z-10 pointer-events-none"></div>

        @php
            $pngPartners = [
                ['name' => 'Saudi Aramco EPC', 'image' => 'upload/partners/pic3.png'],
                ['name' => 'Dubai Drydocks World', 'image' => 'upload/partners/pic4.png'],
                ['name' => 'Qatar Energy Contractors', 'image' => 'upload/partners/pic2.png'],
                ['name' => 'Sobha Construction LLC', 'image' => 'upload/partners/pic1.png'],
                ['name' => 'Saudi Aramco EPC', 'image' => 'upload/partners/pic3.png'],
                ['name' => 'Dubai Drydocks World', 'image' => 'upload/partners/pic4.png'],
                ['name' => 'Qatar Energy Contractors', 'image' => 'upload/partners/pic2.png'],
                ['name' => 'Sobha Construction LLC', 'image' => 'upload/partners/pic1.png'],
            ];
        @endphp

        <div class="animate-infinite-scroll flex items-center gap-8 w-max">
            @foreach(array_merge($pngPartners, $pngPartners) as $partner)
                <div class="shrink-0 w-48 h-24 bg-white rounded-xl shadow-md border border-slate-200 flex items-center justify-center p-3.5 transition transform hover:scale-105 group relative cursor-pointer">
                    <img src="{{ asset($partner['image']) }}" 
                         alt="{{ $partner['name'] }}" 
                         title="{{ $partner['name'] }}"
                         class="max-h-12 max-w-[130px] w-auto h-auto object-contain mx-auto"
                         loading="lazy">
                    
                    <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap px-2.5 py-1 rounded-md bg-[#07172c] text-white text-[10px] font-semibold opacity-0 invisible group-hover:opacity-100 group-hover:visible transition shadow-lg z-20 pointer-events-none">
                        {{ $partner['name'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================================
     9. EVENTS & LATEST NOTICES
     ========================================================================= -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left: Recent Events (7 cols) -->
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="section-label">Campus Activities</div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-[#07172c] mt-1 font-heading">
                            Recent Events & Delegations
                        </h2>
                    </div>
                    <a href="{{ route('home.event') }}" class="text-xs font-bold text-[#0284c7] hover:underline">
                        All Events <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                <div class="space-y-4">
                    @forelse($events as $event)
                        <div class="pro-card p-4 sm:p-5 flex flex-col sm:flex-row gap-4 items-center">
                            <div class="w-full sm:w-36 h-28 rounded-xl overflow-hidden bg-slate-100 shrink-0">
                                <img src="{{ $event->image ? (str_starts_with($event->image, 'http') ? $event->image : asset($event->image)) : 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80' }}" 
                                     alt="{{ $event->title }}" 
                                     class="w-full h-full object-cover"
                                     onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80';">
                            </div>
                            <div class="flex-grow space-y-1.5 text-center sm:text-left">
                                <span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-sky-50 text-[#0284c7]">
                                    <i class="fa-regular fa-calendar-days mr-1"></i> {{ $event->date }}
                                </span>
                                <h3 class="text-sm font-bold text-[#07172c] line-clamp-2 hover:text-[#0284c7] transition">
                                    <a href="{{ route('home.event_details', $event->id) }}">{{ $event->title }}</a>
                                </h3>
                                <p class="text-xs text-slate-500 line-clamp-2">
                                    {{ $event->description }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p class="text-xs text-slate-500">No events listed currently.</p>
                    @endforelse
                </div>
            </div>

            <!-- Right: Notice Board (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="section-label">Official Bulletins</div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-[#07172c] mt-1 font-heading">
                            Notice Board
                        </h2>
                    </div>
                    <a href="{{ route('home.notice') }}" class="text-xs font-bold text-[#0284c7] hover:underline">
                        View All <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                <div class="bg-slate-50 rounded-2xl border border-slate-200 p-4 space-y-3">
                    @forelse($notices as $notice)
                        <div class="p-3 bg-white rounded-xl border border-slate-100 shadow-2xs hover:border-sky-300 transition flex items-center justify-between gap-3">
                            <div class="flex-grow">
                                <div class="flex items-center gap-2 text-[10px] text-slate-400 mb-1">
                                    <span class="px-2 py-0.5 rounded font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                        {{ $notice->badge ?? 'Notice' }}
                                    </span>
                                    <span><i class="fa-regular fa-calendar mr-1"></i> {{ $notice->date }}</span>
                                </div>
                                <h4 class="text-xs font-bold text-slate-800 line-clamp-2 hover:text-[#0284c7] transition">
                                    <a href="{{ route('home.notice_download', $notice->id) }}" title="Click to Download PDF">{{ $notice->title }}</a>
                                </h4>
                            </div>
                            <a href="{{ route('home.notice_download', $notice->id) }}" 
                               title="Download PDF" 
                               class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white flex items-center justify-center transition shrink-0">
                                <i class="fa-solid fa-file-pdf text-xs"></i>
                            </a>
                        </div>
                    @empty
                        <p class="text-xs text-slate-500 text-center py-4">No notices published.</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     10. QUICK ADMISSION APPLICATION / INQUIRY BANNER
     ========================================================================= -->
<section id="admissionForm" class="py-16 bg-gradient-to-r from-[#07172c] to-[#0b2545] text-white border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <div class="lg:col-span-5 space-y-4">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                    <i class="fa-solid fa-user-plus"></i> Admissions Open
                </span>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
                    Apply for New Vocational Trade Batch
                </h2>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    Submit your basic contact details online. Our admissions counselor will contact you within 24 hours with class routines, fee assistance, and hostel accommodations.
                </p>
                <div class="space-y-2 pt-2 text-xs text-slate-300">
                    <p class="flex items-center gap-2"><i class="fa-solid fa-phone text-cyan-400"></i> Hotline: +880 1681769149, +880 1735066260</p>
                    <p class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-cyan-400"></i> 149/9-C, Shah Alibag, Mirpur-1, Dhaka-1216</p>
                </div>
            </div>

            <div class="lg:col-span-7">
                <form action="{{ route('home.apply_admission') }}" method="POST" class="bg-white text-slate-800 p-6 sm:p-8 rounded-2xl shadow-2xl border border-slate-200">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Applicant Name *</label>
                            <input type="text" name="applicant_name" required placeholder="Full Name" 
                                   class="w-full px-3.5 py-2.5 text-xs rounded-lg border border-slate-300 focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] outline-hidden">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
                            <input type="text" name="phone" required placeholder="017XXXXXXXX" 
                                   class="w-full px-3.5 py-2.5 text-xs rounded-lg border border-slate-300 focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] outline-hidden">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Select Desired Trade *</label>
                            <select name="course_name" required class="w-full px-3.5 py-2.5 text-xs rounded-lg border border-slate-300 focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] outline-hidden bg-white">
                                <option value="Rod Binder (Civil Construction)">Rod Binder (Civil Construction)</option>
                                <option value="Plumbing & Pipe Fitting">Plumbing & Pipe Fitting</option>
                                <option value="Basic Electrical">Basic Electrical (House Wiring)</option>
                                <option value="Electrical & Electronics">Electrical & Electronics</option>
                                <option value="RPL Electrical Installation">RPL Electrical Installation</option>
                                <option value="Free Electrical Trade (Govt. ASSET)">Free Electrical Trade (Govt. ASSET)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Preferred Shift</label>
                            <select name="shift" class="w-full px-3.5 py-2.5 text-xs rounded-lg border border-slate-300 focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] outline-hidden bg-white">
                                <option value="Morning">Morning Shift</option>
                                <option value="Evening">Evening Shift</option>
                                <option value="Friday Special">Friday Special (Working Professionals)</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold text-slate-700 mb-1">District / Present Address</label>
                            <input type="text" name="address" placeholder="e.g. Mirpur, Dhaka" 
                                   class="w-full px-3.5 py-2.5 text-xs rounded-lg border border-slate-300 focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] outline-hidden">
                        </div>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn-primary-action w-full py-3 rounded-xl font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i> Submit Application
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
