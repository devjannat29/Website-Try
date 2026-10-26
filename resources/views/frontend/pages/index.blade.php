@extends('frontend.layouts.master')

@section('title', 'ATTC - Asia Technical Training Center | BTEB & BMET Accredited Vocational Institute')

@section('content')

<!-- =========================================================================
     HERO SECTION
     ========================================================================= -->
<section class="relative hero-pattern overflow-hidden pt-12 pb-24 border-b border-slate-800">
    <!-- Ambient glowing backdrop blobs -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-gradient-to-tr from-cyan-600/20 via-blue-600/20 to-indigo-600/10 blur-[130px] pointer-events-none rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Badges -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900 border border-slate-800 shadow-inner">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                    <span class="text-xs font-semibold text-slate-300">Govt BTEB & BMET Approved Academy</span>
                    <span class="text-slate-600">•</span>
                    <span class="text-xs text-amber-400 font-bold">100% Practical Training</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.15]">
                    Empowering Youth with <span class="text-gradient">Global Technical</span> Skills & Careers
                </h1>

                <p class="text-base sm:text-lg text-slate-300 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Master internationally certified craftsmanship in 6G Pipe Welding, Industrial Substation, PLC Automation, and HVAC. Get certified under ASME, AWS & BTEB standards with guaranteed placement interviews in GCC countries and Japan.
                </p>

                <!-- Action CTAs -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="#admissionForm" class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-sm shadow-xl shadow-cyan-500/25 hover:shadow-cyan-500/40 transition transform active:scale-95 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-file-signature"></i> Apply for Winter Admission
                    </a>
                    <a href="{{ route('home.all_course') }}" class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-slate-900/90 hover:bg-slate-800 text-slate-200 hover:text-white font-semibold text-sm border border-slate-700/80 transition flex items-center justify-center gap-2">
                        <i class="fa-solid fa-shapes text-cyan-400"></i> Browse All Trades
                    </a>
                    <a href="{{ route('home.students') }}" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-amber-500/10 hover:bg-amber-500/20 text-amber-400 font-semibold text-sm border border-amber-500/30 transition flex items-center justify-center gap-2">
                        <i class="fa-solid fa-certificate"></i> Verify Certificate
                    </a>
                </div>

                <!-- Trust Micro-Bar -->
                <div class="pt-6 border-t border-slate-800/80 grid grid-cols-3 gap-4 text-left max-w-lg mx-auto lg:mx-0">
                    <div>
                        <p class="text-2xl font-extrabold text-white font-heading">18,500+</p>
                        <p class="text-xs text-slate-400 font-medium">Overseas Placed</p>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-cyan-400 font-heading">45+ Trades</p>
                        <p class="text-xs text-slate-400 font-medium">BTEB Accredited</p>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-amber-400 font-heading">98.4%</p>
                        <p class="text-xs text-slate-400 font-medium">Client Trade Pass Rate</p>
                    </div>
                </div>
            </div>

            <!-- Right Hero Card / Visual -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden border border-slate-800 bg-slate-900/80 shadow-2xl p-3">
                    <img src="https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=900&q=80" 
                         alt="ATTC 6G Pipe Welding Workshop" 
                         class="w-full h-[420px] object-cover rounded-2xl">
                    
                    <!-- Floating Overlay Card 1: Live Interview Alert -->
                    <div class="absolute top-8 left-8 bg-slate-950/90 backdrop-blur-md border border-slate-800 p-3.5 rounded-2xl shadow-xl flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-lg">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-wider text-emerald-400">Next Client Interview</p>
                            <p class="text-xs font-bold text-white">Saudi Aramco Project (120 Welders)</p>
                        </div>
                    </div>

                    <!-- Floating Overlay Card 2: Visa Dispatch -->
                    <div class="absolute bottom-8 right-8 bg-slate-950/90 backdrop-blur-md border border-slate-800 p-3.5 rounded-2xl shadow-xl flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-lg">
                            <i class="fa-solid fa-plane-departure"></i>
                        </div>
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-wider text-cyan-400">Weekly Departure</p>
                            <p class="text-xs font-bold text-white">35 Technicians to Dubai & Qatar</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     LIVE TICKER / NOTICE BAR
     ========================================================================= -->
@if($notices->count() > 0)
<div class="bg-slate-900 border-b border-slate-800 py-3 px-4">
    <div class="max-w-7xl mx-auto flex items-center gap-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-bold bg-rose-500/20 text-rose-400 border border-rose-500/30 uppercase tracking-wider shrink-0">
            <i class="fa-solid fa-bullhorn animate-bounce"></i> Notice
        </span>
        <div class="overflow-hidden whitespace-nowrap text-xs text-slate-300">
            @foreach($notices as $n)
                <span class="inline-block mr-8">
                    <span class="text-cyan-400 font-semibold">[{{ $n->date }}]</span> 
                    <a href="{{ route('home.notice') }}" class="hover:text-white hover:underline">{{ $n->title }}</a>
                </span>
            @endforeach
        </div>
        <a href="{{ route('home.notice') }}" class="text-xs font-semibold text-cyan-400 hover:text-cyan-300 shrink-0 ml-auto hidden sm:inline">
            View All <i class="fa-solid fa-arrow-right text-[10px]"></i>
        </a>
    </div>
</div>
@endif

<!-- =========================================================================
     FEATURED CATEGORIES
     ========================================================================= -->
<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Specialized Disciplines</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">Explore Technical Training Departments</h2>
            <p class="text-slate-400 text-sm mt-3">From heavy metal fusion to automated robotics, our workshops are equipped with high-precision industrial tooling matching global standards.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $cat)
            <a href="{{ route('home.course_category_details', $cat->id) }}" class="group relative rounded-2xl bg-slate-900 border border-slate-800 hover:border-cyan-500/50 p-6 transition duration-300 hover:shadow-2xl hover:shadow-cyan-500/10 flex flex-col justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-slate-800 group-hover:bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-2xl transition duration-300">
                        @if($cat->id == 1) <i class="fa-solid fa-fire-burner"></i>
                        @elseif($cat->id == 2) <i class="fa-solid fa-bolt"></i>
                        @elseif($cat->id == 3) <i class="fa-solid fa-gears"></i>
                        @elseif($cat->id == 4) <i class="fa-solid fa-shield-halved"></i>
                        @elseif($cat->id == 5) <i class="fa-solid fa-snowflake"></i>
                        @else <i class="fa-solid fa-microchip"></i>
                        @endif
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white group-hover:text-cyan-400 transition font-heading">{{ $cat->name }}</h3>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $cat->courses_count ?? 0 }} Professional Trades</p>
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs font-semibold text-slate-400 group-hover:text-cyan-400">
                    <span>View Curriculum & Syllabus</span>
                    <i class="fa-solid fa-arrow-right-long transition transform group-hover:translate-x-1"></i>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================================
     FEATURED COURSES
     ========================================================================= -->
<section class="py-20 bg-slate-900/60 border-y border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Certified Qualifications</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">Popular Industrial Courses</h2>
                <p class="text-slate-400 text-sm mt-2 max-w-2xl">Rigorous practical curriculum taught by senior industrial engineers and certified AWS/ASME master inspectors.</p>
            </div>
            <a href="{{ route('home.all_course') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-bold border border-slate-700 transition flex items-center gap-2 self-start md:self-auto">
                All 45+ Courses <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredCourses as $course)
            <div class="rounded-2xl bg-slate-900 border border-slate-800 overflow-hidden hover:border-slate-700 transition duration-300 flex flex-col group shadow-xl">
                <!-- Course Image -->
                <div class="relative h-48 overflow-hidden bg-slate-800">
                    <img src="{{ $course->image ? (str_starts_with($course->image, 'http') ? $course->image : asset($course->image)) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80' }}" 
                         alt="{{ $course->name }}" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="px-2.5 py-1 rounded-lg text-[10px] font-extrabold bg-cyan-500/90 text-slate-950 uppercase tracking-wider shadow">
                            {{ $course->bteb_level ?? 'NTVQF Certified' }}
                        </span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-950/90 text-amber-400 border border-slate-800">
                            {{ $course->Fee ?? '30,000 BDT' }}
                        </span>
                    </div>
                </div>

                <!-- Course Body -->
                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div>
                        <div class="flex items-center gap-2 text-xs text-slate-400 mb-2">
                            <span class="flex items-center gap-1"><i class="fa-regular fa-clock text-cyan-400"></i> {{ $course->duration ?? '3 Months' }}</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-wrench text-cyan-400"></i> Workshop Practical</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-cyan-400 transition font-heading">
                            <a href="{{ route('home.course_details', $course->id) }}">{{ $course->name }}</a>
                        </h3>
                        <p class="text-xs text-slate-400 line-clamp-2 mt-2 leading-relaxed">
                            {{ $course->description ?? 'Industrial hands-on course with foreign trade testing preparation.' }}
                        </p>
                    </div>

                    <!-- Syllabus modules preview -->
                    @if(is_array($course->syllabus) && count($course->syllabus) > 0)
                    <div class="pt-2 border-t border-slate-800/80">
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">Core Syllabus Highlights:</p>
                        <ul class="text-[11px] text-slate-300 space-y-1">
                            @foreach(array_slice($course->syllabus, 0, 2) as $syl)
                                <li class="flex items-center gap-1.5 truncate">
                                    <i class="fa-solid fa-check text-cyan-400 text-[9px]"></i> {{ $syl }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="pt-3 border-t border-slate-800 flex items-center justify-between gap-3">
                        <a href="{{ route('home.course_details', $course->id) }}" class="text-xs font-bold text-slate-300 hover:text-cyan-400 transition">
                            Curriculum Details <i class="fa-solid fa-arrow-right text-[10px] ml-1"></i>
                        </a>
                        <a href="#admissionForm" class="px-3.5 py-1.5 rounded-lg bg-cyan-500/10 hover:bg-cyan-500 text-cyan-400 hover:text-slate-950 font-bold text-xs border border-cyan-500/30 transition">
                            Enroll Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================================
     WHY CHOOSE ATTC - INDUSTRIAL STRENGTH
     ========================================================================= -->
<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20">Institutional Benchmarks</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white font-heading leading-tight">
                    Why Global Employers & Technicians Prefer ATTC
                </h2>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Unlike standard theoretical polytechnics, ATTC simulates actual overseas industrial job environments. Our trainees work with identical consumables, welding gases, transformers, and PLC rigs used in Saudi Aramco, Qatar Gas, and Dubai Metro facilities.
                </p>

                <div class="space-y-4 pt-2">
                    <div class="flex items-start gap-3.5 p-3.5 rounded-xl bg-slate-900 border border-slate-800">
                        <div class="w-8 h-8 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0 text-sm mt-0.5">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-sm font-heading">Individual 6G Welding & PLC Workstations</h4>
                            <p class="text-xs text-slate-400 mt-0.5">Every student gets dedicated daily machine hours with Miller, Lincoln Electric, and Siemens equipment.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5 p-3.5 rounded-xl bg-slate-900 border border-slate-800">
                        <div class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 text-sm mt-0.5">
                            <i class="fa-solid fa-passport"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-sm font-heading">Direct Client Trade Testing on Campus</h4>
                            <p class="text-xs text-slate-400 mt-0.5">Foreign delegation recruitment interviews happen inside our own workshops without third-party middlemen.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5 p-3.5 rounded-xl bg-slate-900 border border-slate-800">
                        <div class="w-8 h-8 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center shrink-0 text-sm mt-0.5">
                            <i class="fa-solid fa-qrcode"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-sm font-heading">Online QR Certificate Verification System</h4>
                            <p class="text-xs text-slate-400 mt-0.5">Instant online certificate verification for foreign embassies, BMET attestation, and visa stamping.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <img src="https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=600&q=80" alt="Automation Lab" class="rounded-2xl object-cover h-56 w-full border border-slate-800 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80" alt="Safety Drills" class="rounded-2xl object-cover h-40 w-full border border-slate-800 shadow-xl">
                </div>
                <div class="space-y-4 pt-8">
                    <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=600&q=80" alt="Electrical Lab" class="rounded-2xl object-cover h-40 w-full border border-slate-800 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?auto=format&fit=crop&w=600&q=80" alt="Overseas Project" class="rounded-2xl object-cover h-56 w-full border border-slate-800 shadow-xl">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     TECHNICAL SERVICES
     ========================================================================= -->
<section class="py-20 bg-slate-900/60 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Corporate & Agency Solutions</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">Trade Testing & Industrial Services</h2>
            <p class="text-slate-400 text-sm mt-3">We partner with recruiting agencies, engineering contractors, and foreign employers to qualify high-caliber human resources.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $srv)
            <div class="rounded-2xl bg-slate-900 border border-slate-800 p-6 flex flex-col justify-between hover:border-cyan-500/40 transition duration-300">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <h3 class="text-base font-bold text-white font-heading">{{ $srv->name }}</h3>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                        {{ $srv->description }}
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800">
                    <a href="{{ route('home.service_details', $srv->id) }}" class="text-xs font-semibold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5">
                        Service Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================================
     OVERSEAS PLACEMENT & RECRUITMENT PARTNERS
     ========================================================================= -->
<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-r from-blue-950 via-slate-900 to-indigo-950 border border-slate-800 p-8 sm:p-12 relative overflow-hidden shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-cyan-500/20 text-cyan-300 border border-cyan-500/30 uppercase tracking-wider">Placement Record</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white font-heading">
                        Connecting Skilled Craftsmen to Mega Projects Worldwide
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-2xl">
                        Our graduates are actively serving in critical oil refineries, shipyards, metro projects, and high-rise developments in Saudi Arabia, UAE, Qatar, Kuwait, Singapore, and Japan with lucrative remuneration.
                    </p>
                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <span class="px-3 py-1.5 rounded-xl bg-slate-900/80 border border-slate-800 text-xs font-medium text-slate-300 flex items-center gap-1.5"><i class="fa-solid fa-globe text-cyan-400"></i> Saudi Aramco</span>
                        <span class="px-3 py-1.5 rounded-xl bg-slate-900/80 border border-slate-800 text-xs font-medium text-slate-300 flex items-center gap-1.5"><i class="fa-solid fa-globe text-cyan-400"></i> Consolidated Contractors (CCC)</span>
                        <span class="px-3 py-1.5 rounded-xl bg-slate-900/80 border border-slate-800 text-xs font-medium text-slate-300 flex items-center gap-1.5"><i class="fa-solid fa-globe text-cyan-400"></i> Alfanar Projects</span>
                        <span class="px-3 py-1.5 rounded-xl bg-slate-900/80 border border-slate-800 text-xs font-medium text-slate-300 flex items-center gap-1.5"><i class="fa-solid fa-globe text-cyan-400"></i> Jurong Shipyard SG</span>
                    </div>
                </div>

                <div class="lg:col-span-4 flex flex-col gap-3">
                    <a href="{{ route('home.placement_cell') }}" class="w-full py-3.5 px-6 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-extrabold text-xs text-center shadow-lg transition">
                        Explore Overseas Placement Cell
                    </a>
                    <a href="{{ route('home.job') }}" class="w-full py-3.5 px-6 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold text-xs text-center border border-slate-700 transition">
                        View Active Job Circulars
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     ALUMNI TESTIMONIALS
     ========================================================================= -->
<section class="py-20 bg-slate-900/40 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-400 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20">Success Stories</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">What Our Placed Graduates Say</h2>
            <p class="text-slate-400 text-sm mt-3">Hear from former students who transformed their technical skills into dignified international careers.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $t)
            <div class="rounded-2xl bg-slate-900 border border-slate-800 p-6 flex flex-col justify-between shadow-xl">
                <div>
                    <div class="flex items-center gap-1 text-amber-400 text-xs mb-4">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-slate-300 italic leading-relaxed">
                        "{{ $t->quote }}"
                    </p>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-800 flex items-center gap-3">
                    <img src="{{ $t->image ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80' }}" 
                         alt="{{ $t->name }}" 
                         class="w-11 h-11 rounded-full object-cover border border-cyan-500/40">
                    <div>
                        <h4 class="text-sm font-bold text-white font-heading">{{ $t->name }}</h4>
                        <p class="text-[11px] text-cyan-400 font-semibold">{{ $t->trade }}</p>
                        <p class="text-[10px] text-slate-400">{{ $t->country }} • Salary: {{ $t->salary }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================================
     ONLINE ADMISSION APPLICATION FORM
     ========================================================================= -->
<section id="admissionForm" class="py-20 bg-slate-950 border-t border-slate-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 sm:p-12 shadow-2xl relative">
            
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Winter Batch Registration</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-3 font-heading">Apply for Admission Online</h2>
                <p class="text-slate-400 text-xs mt-2">Fill out the quick form below. Our admission counselor will call you within 24 hours to confirm your seat and batch timings.</p>
            </div>

            <form action="{{ route('home.apply_admission') }}" method="POST" class="space-y-5">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Applicant Full Name *</label>
                        <input type="text" name="applicant_name" required placeholder="e.g. Md. Tariqul Islam" 
                               class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-cyan-500 transition">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Mobile Number (WhatsApp) *</label>
                        <input type="text" name="phone" required placeholder="e.g. 01700-000000" 
                               class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-cyan-500 transition">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Desired Course / Trade *</label>
                        <select name="course_name" required class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500 transition">
                            <option value="">Select a Course</option>
                            @foreach($featuredCourses as $c)
                                <option value="{{ $c->name }}">{{ $c->name }} ({{ $c->duration }})</option>
                            @endforeach
                            <option value="6G TIG & SMAW Pipe Welding">6G TIG & SMAW Pipe Welding</option>
                            <option value="Industrial Electrical & Substation">Industrial Electrical & Substation</option>
                            <option value="PLC & SCADA Automation">PLC & SCADA Automation</option>
                            <option value="Pipe Fabrication & Fitting">Pipe Fabrication & Fitting</option>
                            <option value="Commercial HVAC & Refrigeration">Commercial HVAC & Refrigeration</option>
                            <option value="Occupational Health & Safety (OSHA)">Occupational Health & Safety (OSHA)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Preferred Class Shift</label>
                        <select name="shift" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500 transition">
                            <option value="Morning (08:30 AM - 12:30 PM)">Morning (08:30 AM - 12:30 PM)</option>
                            <option value="Afternoon (02:00 PM - 06:00 PM)">Afternoon (02:00 PM - 06:00 PM)</option>
                            <option value="Friday & Saturday Weekend Batch">Friday & Saturday Weekend Batch</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">National ID / Birth Reg Number</label>
                        <input type="text" name="nid" placeholder="Optional NID number" 
                               class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-cyan-500 transition">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Hostel Accommodation Needed?</label>
                        <select name="hostel" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500 transition">
                            <option value="No">No, I have local stay</option>
                            <option value="Yes, Hostel Required">Yes, I need ATTC Campus Hostel</option>
                        </select>
                    </div>

                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1.5">Permanent Address / District</label>
                    <textarea name="address" rows="2" placeholder="e.g. Comilla Sadar, Comilla" 
                              class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-cyan-500 transition"></textarea>
                </div>

                <div class="pt-2 text-center">
                    <button type="submit" class="w-full sm:w-auto px-10 py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-extrabold text-sm shadow-xl shadow-cyan-500/25 transition transform active:scale-95">
                        Submit Admission Application <i class="fa-solid fa-paper-plane ml-2"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>

@endsection
