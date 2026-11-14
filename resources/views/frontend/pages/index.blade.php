@extends('frontend.layouts.master')

@section('title', 'Asia Technical Training Center | BTEB Registered Training Organization #50821')
@section('meta_description', 'Asia Technical Training Center (ATTC) is a premier BTEB registered vocational training institute in Mirpur-1, Dhaka offering certified courses in Electrical, Plumbing, and Civil Construction with overseas employment.')

@section('content')

<!-- =========================================================================
     1. HERO SECTION (Required: hero_bg.jpg, Specific Title, Subtitle, Contact Us button)
     ========================================================================= -->

<section class="relative min-h-[580px] lg:min-h-[640px] flex items-center justify-center text-white overflow-hidden bg-[#07172c]">

    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('upload/hero_bg.jpg') }}"
             alt="Asia Technical Training Center Campus and Trainees"
             class="w-full h-full object-cover object-center filter brightness-90">

        <div class="absolute inset-0 bg-gradient-to-r from-[#07172c]/95 via-[#07172c]/85 to-[#0b2545]/75"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 w-full">

        <!-- Centered Content -->
        <div class="max-w-4xl mx-auto space-y-6 text-center">

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.15] font-heading">
                Asia Technical Training Center
            </h1>

            <p class="text-sm sm:text-base text-slate-200 leading-relaxed max-w-3xl mx-auto font-normal">
                Government-Registered Training Organization (RTO) and Competency-Based Training & Assessment (CBT&A) Centre under the National Skills Development Authority (NSDA), Prime Minister’s Office, Government of Bangladesh.
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

                <a href="{{ route('home.students') }}"
                   class="px-6 py-3.5 rounded-xl font-bold text-sm bg-amber-500/20 hover:bg-amber-500/30 text-amber-300 border border-amber-500/40 backdrop-blur-xs transition flex items-center gap-2">
                    <i class="fa-solid fa-award"></i> Verify Certificate
                </a>

            </div>

            <!-- Key Figures: Equal Space Between -->
            <div class="pt-8 border-t border-slate-700/60 flex justify-between items-center gap-4 max-w-3xl mx-auto">

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

            </div>

        </div>
    </div>
</section>


<!-- =========================================================================
     2. LATEST NEWS & NOTICE TICKER
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
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="inline-block px-3 py-1 rounded-md text-xs font-bold bg-[#0284c7] mb-2">
                            RTO Center Code: 50821
                        </span>
                        <h4 class="text-lg font-bold">149/9-C, Shah Alibag, Mirpur-1, Dhaka</h4>
                    </div>
                </div>

                <!-- 39 Years Floating Badge -->
                <div class="absolute -bottom-6 -right-4 sm:bottom-6 sm:-right-6 bg-[#07172c] text-white p-5 rounded-2xl shadow-2xl border-2 border-amber-400 flex items-center gap-3">
                    <div class="text-3xl font-black text-amber-400 font-heading">39+</div>
                    <div class="text-xs font-bold leading-tight uppercase tracking-wider text-slate-200">
                        Years Of<br><span class="text-cyan-400">Excellence</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Institutional Profile -->
            <div class="lg:col-span-7 space-y-5">
                <div class="section-label">Welcome To ATTC</div>
                
                <h2 class="text-2xl sm:text-4xl font-extrabold text-[#07172c] tracking-tight leading-tight">
                    Empowering Skilled Craftsmen with <span class="text-[#0284c7]">Global Employment</span>
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
                        <span>100% Practical Workshop Lab</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                        <i class="fa-solid fa-circle-check text-[#0284c7]"></i>
                        <span>Direct Overseas Client Interviews</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                        <i class="fa-solid fa-circle-check text-[#0284c7]"></i>
                        <span>Safe Hostel & Dining Facility</span>
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
     5. COURSES WE OFFERED (Professional Course Cards)
     ========================================================================= -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-12">
            <div>
                <div class="section-label">Certified Curriculum</div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07172c] mt-2 tracking-tight">
                    Courses We Offered
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    Government BTEB recognized trade certifications designed for immediate employment.
                </p>
            </div>
            <a href="{{ route('home.all_course') }}" class="btn-outline-action px-5 py-2.5 rounded-lg text-xs font-bold shrink-0 self-start sm:self-auto flex items-center gap-1.5">
                <span>View All Courses</span> <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($featuredCourses as $course)
                <div class="pro-card overflow-hidden flex flex-col justify-between group">
                    <div>
                        <!-- Course Image with Duration Badge -->
                        <div class="relative h-44 overflow-hidden bg-slate-100">
                            <img src="{{ $course->image ? asset($course->image) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80' }}" 
                                 alt="{{ $course->name }}" 
                                 class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80';">
                            <div class="absolute top-3 left-3 bg-[#07172c]/90 text-white text-[11px] font-bold px-2.5 py-1 rounded-md backdrop-blur-xs flex items-center gap-1">
                                <i class="fa-regular fa-clock text-cyan-400"></i> {{ $course->duration ?? '6 month' }}
                            </div>
                            <div class="absolute top-3 right-3 bg-amber-500 text-slate-950 text-[10px] font-extrabold px-2 py-0.5 rounded shadow-xs uppercase">
                                {{ $course->bteb_level ?? 'NTVQF Level-2' }}
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
                                <span class="text-slate-400">Course Fee:</span>
                                <span class="font-extrabold text-[#0284c7] text-sm">
                                    BDT {{ number_format((float)($course->Fee ?? 20000)) }}
                                </span>
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

    </div>
</section>

<!-- =========================================================================
     6. OUR FACULTIES & MANAGEMENT (Must be in CARDS as requested!)
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
                <!-- Professional Member Card -->
                <div class="pro-card overflow-hidden group">
                    <div class="relative h-64 overflow-hidden bg-slate-200">
                        <img src="{{ $member->image ? asset($member->image) : 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80' }}" 
                             alt="{{ $member->name }}" 
                             class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80';">
                        
                        <!-- Top Designation Badge -->
                        <div class="absolute top-3 left-3 bg-[#07172c]/90 text-amber-400 font-bold text-[11px] px-3 py-1 rounded-md backdrop-blur-xs shadow-sm">
                            {{ $member->designation }}
                        </div>
                    </div>

                    <div class="p-6 text-center space-y-2">
                        <h3 class="text-lg font-bold text-[#07172c] font-heading group-hover:text-[#0284c7] transition">
                            {{ $member->name }}
                        </h3>
                        <p class="text-xs font-semibold text-[#0284c7]">
                            {{ $member->department ?? 'Management' }}
                        </p>
                        <p class="text-xs text-slate-500">
                            <i class="fa-solid fa-graduation-cap text-slate-400 mr-1"></i> {{ $member->education ?? 'Engineering Expert' }}
                        </p>

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
     7. TESTIMONIAL (Must be a SCROLLER / SLIDER with controls as requested!)
     ========================================================================= -->
<section class="py-16 lg:py-20 bg-white" 
         x-data="{ 
            activeSlide: 0, 
            totalSlides: {{ count($testimonials) > 0 ? count($testimonials) : 1 }},
            timer: null,
            startAutoplay() {
                this.timer = setInterval(() => {
                    this.next();
                }, 4500);
            },
            stopAutoplay() {
                if (this.timer) clearInterval(this.timer);
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

        <!-- Scroller Container -->
        <div class="relative bg-gradient-to-br from-slate-50 to-sky-50/50 rounded-2xl border border-slate-200 p-8 sm:p-12 shadow-sm min-h-[280px] flex items-center">
            
            <!-- Big Decorative Quote Icon -->
            <div class="absolute top-6 right-8 text-sky-200 text-6xl pointer-events-none select-none font-serif opacity-60">
                “
            </div>

            <!-- Slides Wrapper -->
            <div class="w-full">
                @forelse($testimonials as $idx => $t)
                    <div x-show="activeSlide === {{ $idx }}" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-x-4"
                         x-transition:enter-end="opacity-100 translate-x-0"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-x-0"
                         x-transition:leave-end="opacity-0 -translate-x-4"
                         class="space-y-6">
                        
                        <!-- Quote Content -->
                        <p class="text-sm sm:text-base text-slate-700 italic leading-relaxed">
                            "{{ $t->quote }}"
                        </p>

                        <!-- Student Details -->
                        <div class="flex items-center gap-4 pt-4 border-t border-slate-200">
                            <div class="w-12 h-12 rounded-full bg-[#0284c7] text-white flex items-center justify-center font-bold text-lg shadow-sm">
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
                    <div class="text-center py-8 text-slate-500">
                        Testimonials will be added soon.
                    </div>
                @endforelse
            </div>

            <!-- Prev / Next Controls -->
            <button @click="prev()" 
                    class="absolute -left-4 sm:-left-5 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-slate-200 shadow-md text-slate-700 hover:text-[#0284c7] hover:border-[#0284c7] flex items-center justify-center transition focus:outline-hidden">
                <i class="fa-solid fa-chevron-left text-xs"></i>
            </button>
            <button @click="next()" 
                    class="absolute -right-4 sm:-right-5 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-slate-200 shadow-md text-slate-700 hover:text-[#0284c7] hover:border-[#0284c7] flex items-center justify-center transition focus:outline-hidden">
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
     8. OVERSEAS PARTNERS (Must scroll infinity & uniform same size logos as requested!)
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

    <!-- Infinite Scrolling Marquee with Uniform Normalized Logo Boxes -->
    
<div class="relative w-full overflow-hidden py-6">

    <!-- Edge Fade -->
    <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

    @php
        $partners = [
            ['name' => 'Saudi Aramco EPC', 'image' => 'upload/partners/pic3.png'],
            ['name' => 'Dubai Drydocks World', 'image' => 'upload/partners/pic4.png'],
            ['name' => 'Qatar Energy Contractors', 'image' => 'upload/partners/pic2.png'],
            ['name' => 'Sobha Construction LLC', 'image' => 'upload/partners/pic1.jpg'],
            ['name' => 'Saudi Aramco EPC', 'image' => 'upload/partners/pic3.png'],
            ['name' => 'Dubai Drydocks World', 'image' => 'upload/partners/pic4.png'],
            ['name' => 'Qatar Energy Contractors', 'image' => 'upload/partners/pic2.png'],
            ['name' => 'Sobha Construction LLC', 'image' => 'upload/partners/pic1.jpg'],
        ];
    @endphp

    <div class="animate-infinite-scroll flex items-center gap-12 w-max">

        @foreach(array_merge($partners, $partners) as $partner)
            <div class="group relative shrink-0 w-40 h-24 flex items-center justify-center cursor-pointer">

                <!-- Partner Logo -->
                <img
                    src="{{ asset($partner['image']) }}"
                    alt="{{ $partner['name'] }}"
                    title="{{ $partner['name'] }}"
                    class="w-full h-full object-contain transition-all duration-300 group-hover:scale-110"
                    loading="lazy"
                >

                <!-- Hover Name -->
                <div class="absolute -bottom-9 left-1/2 -translate-x-1/2
                            whitespace-nowrap px-3 py-1.5 rounded-lg
                            bg-[#07172c] text-white text-xs font-semibold
                            opacity-0 invisible group-hover:opacity-100
                            group-hover:visible transition-all duration-300
                            shadow-lg z-20 pointer-events-none">
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

<!-- ================= RECENT EVENTS SECTION ================= -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-8">
            <div>
                <div class="section-label">Campus Activities</div>
                <h2 class="text-xl sm:text-2xl font-extrabold text-[#07172c] mt-1 font-heading">
                    Recent Events & Delegations
                </h2>
            </div>

            <a href="{{ route('home.event') }}"
               class="text-xs font-bold text-[#0284c7] hover:underline">
                All Events <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @forelse($events as $event)

                <div class="pro-card overflow-hidden rounded-2xl group">

                    <div class="w-full h-48 overflow-hidden bg-slate-100">
                        <img src="{{ $event->image ? asset($event->image) : 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80' }}"
                             alt="{{ $event->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80';">
                    </div>

                    <div class="p-5 space-y-2">
                        <span class="inline-block px-2 py-1 rounded text-[10px] font-bold bg-sky-50 text-[#0284c7]">
                            <i class="fa-regular fa-calendar-days mr-1"></i>
                            {{ $event->date }}
                        </span>

                        <h3 class="text-base font-bold text-[#07172c] line-clamp-2 group-hover:text-[#0284c7] transition">
                            <a href="{{ route('home.event_details', $event->id) }}">
                                {{ $event->title }}
                            </a>
                        </h3>

                        <p class="text-sm text-slate-500 line-clamp-3">
                            {{ $event->description }}
                        </p>

                        <a href="{{ route('home.event_details', $event->id) }}"
                           class="inline-flex items-center gap-2 text-xs font-bold text-[#0284c7] pt-2">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>

            @empty
                <p class="text-sm text-slate-500">No events listed currently.</p>
            @endforelse
        </div>

    </div>
</section>


<!-- ================= NOTICE BOARD SECTION ================= -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-8">
            <div>
                <div class="section-label">Official Bulletins</div>
                <h2 class="text-xl sm:text-2xl font-extrabold text-[#07172c] mt-1 font-heading">
                    Notice Board
                </h2>
            </div>

            <a href="{{ route('home.notice') }}"
               class="text-xs font-bold text-[#0284c7] hover:underline">
                View All <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            @forelse($notices as $notice)

                <div class="p-5 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-sky-300 hover:shadow-md transition">

                    <div class="flex items-center justify-between gap-2 text-[10px] text-slate-400 mb-3">
                        <span class="px-2 py-1 rounded font-bold bg-amber-50 text-amber-700 border border-amber-200">
                            {{ $notice->badge ?? 'Notice' }}
                        </span>

                        <span>
                            <i class="fa-regular fa-calendar mr-1"></i>
                            {{ $notice->date }}
                        </span>
                    </div>

                    <h4 class="text-sm font-bold text-slate-800 line-clamp-2 hover:text-[#0284c7] transition">
                        <a href="{{ route('home.notice') }}">
                            {{ $notice->title }}
                        </a>
                    </h4>

                </div>

            @empty
                <p class="text-sm text-slate-500">No notices published.</p>
            @endforelse

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
