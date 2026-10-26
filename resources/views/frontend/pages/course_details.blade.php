@extends('frontend.layouts.master')

@section('title', $course->name . ' - Course Curriculum | ATTC')

@section('content')
<!-- Course Hero -->
<section class="py-14 bg-slate-900 border-b border-slate-800 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 text-xs text-slate-400 mb-4">
            <a href="{{ route('home.index') }}" class="hover:text-cyan-400">Home</a>
            <span>/</span>
            <a href="{{ route('home.all_course') }}" class="hover:text-cyan-400">Courses</a>
            <span>/</span>
            <span class="text-slate-200">{{ $course->name }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-4">
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-cyan-500/20 text-cyan-300 border border-cyan-500/30 uppercase tracking-wider">
                    {{ $course->bteb_level ?? 'NTVQF Level-3' }}
                </span>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-white font-heading">{{ $course->name }}</h1>
                <p class="text-slate-300 text-sm leading-relaxed max-w-3xl">
                    {{ $course->description }}
                </p>

                <div class="flex flex-wrap items-center gap-6 pt-2 text-xs font-semibold text-slate-300">
                    <span class="flex items-center gap-2"><i class="fa-regular fa-clock text-cyan-400 text-sm"></i> Duration: {{ $course->duration }}</span>
                    <span class="flex items-center gap-2"><i class="fa-solid fa-bangladeshi-taka-sign text-amber-400 text-sm"></i> Course Fee: {{ $course->Fee }}</span>
                    <span class="flex items-center gap-2"><i class="fa-solid fa-shield-halved text-emerald-400 text-sm"></i> 100% Practical</span>
                </div>
            </div>

            <div class="lg:col-span-4 text-center lg:text-right">
                <a href="#applySection" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-extrabold text-sm shadow-xl shadow-cyan-500/25 transition transform active:scale-95">
                    <i class="fa-solid fa-paper-plane"></i> Apply for this Course
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Course Details Content & Sidebar -->
<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Main Details -->
            <div class="lg:col-span-8 space-y-10">
                <!-- Course Image Banner -->
                <div class="rounded-3xl overflow-hidden border border-slate-800 shadow-2xl h-[380px] bg-slate-900">
                    <img src="{{ $course->image ? (str_starts_with($course->image, 'http') ? $course->image : asset($course->image)) : 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=1200&q=80' }}" 
                         alt="{{ $course->name }}" 
                         class="w-full h-full object-cover">
                </div>

                <!-- Syllabus Breakdown -->
                <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 shadow-xl space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Curriculum Breakdown</span>
                        <h2 class="text-2xl font-bold text-white mt-2 font-heading">Course Syllabus & Training Modules</h2>
                        <p class="text-xs text-slate-400 mt-1">Modules designed according to international industry benchmarks (ASME, AWS, BTEB standards).</p>
                    </div>

                    @if(is_array($course->syllabus) && count($course->syllabus) > 0)
                        <div class="space-y-3">
                            @foreach($course->syllabus as $index => $mod)
                            <div class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-950 border border-slate-800">
                                <div class="w-7 h-7 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5">
                                    {{ $index + 1 }}
                                </div>
                                <p class="text-xs font-semibold text-slate-200 leading-relaxed">{{ $mod }}</p>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-xs text-slate-400">Detailed module breakdown available upon request at our admission desk.</p>
                    @endif
                </div>

                <!-- Career Outcomes -->
                @if($course->careers)
                <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 shadow-xl space-y-4">
                    <h3 class="text-lg font-bold text-white font-heading flex items-center gap-2">
                        <i class="fa-solid fa-briefcase text-cyan-400"></i> Career Opportunities & Placement Targets
                    </h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        {{ $course->careers }}
                    </p>
                </div>
                @endif

                <!-- Application Form Section -->
                <div id="applySection" class="rounded-3xl bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 border border-cyan-500/30 p-8 shadow-2xl space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Instant Admission Enrollment</span>
                        <h3 class="text-2xl font-extrabold text-white mt-1 font-heading">Reserve Your Seat for {{ $course->name }}</h3>
                        <p class="text-xs text-slate-400 mt-1">Seats in each workshop batch are strictly limited to 15 students to guarantee individual machine access.</p>
                    </div>

                    <form action="{{ route('home.apply_admission') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="course_name" value="{{ $course->name }}">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Full Name *</label>
                                <input type="text" name="applicant_name" required placeholder="Your full name" 
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">WhatsApp / Phone Number *</label>
                                <input type="text" name="phone" required placeholder="01700-000000" 
                                       class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Preferred Shift</label>
                                <select name="shift" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500">
                                    <option value="Morning">Morning Batch (08:30 AM - 12:30 PM)</option>
                                    <option value="Afternoon">Afternoon Batch (02:00 PM - 06:00 PM)</option>
                                    <option value="Weekend">Weekend Batch (Fri & Sat)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Hostel Needed?</label>
                                <select name="hostel" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500">
                                    <option value="No">No, Local Stay</option>
                                    <option value="Yes">Yes, Campus Hostel</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">District / Present Address</label>
                            <input type="text" name="address" placeholder="e.g. Uttara, Dhaka" 
                                   class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-cyan-500">
                        </div>

                        <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-cyan-500/25 transition">
                            Submit Application for this Course
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Course Summary Card -->
                <div class="rounded-3xl bg-slate-900 border border-slate-800 p-6 space-y-4 shadow-xl">
                    <h3 class="text-base font-bold text-white font-heading border-b border-slate-800 pb-3">Course Snapshot</h3>
                    <div class="space-y-3 text-xs">
                        <div class="flex justify-between items-center text-slate-400">
                            <span>Duration:</span>
                            <span class="font-bold text-white">{{ $course->duration }}</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-400">
                            <span>Total Fee:</span>
                            <span class="font-bold text-amber-400 text-sm">{{ $course->Fee }}</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-400">
                            <span>Accreditation:</span>
                            <span class="font-bold text-cyan-400">{{ $course->bteb_level }}</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-400">
                            <span>Practical Work:</span>
                            <span class="font-bold text-emerald-400">100% Hands-on</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-400">
                            <span>Batch Capacity:</span>
                            <span class="font-bold text-white">15 Students Max</span>
                        </div>
                    </div>
                </div>

                <!-- Related Courses -->
                @if($relatedCourses->count() > 0)
                <div class="rounded-3xl bg-slate-900 border border-slate-800 p-6 space-y-4 shadow-xl">
                    <h3 class="text-base font-bold text-white font-heading border-b border-slate-800 pb-3">Related Technical Trades</h3>
                    <div class="space-y-3">
                        @foreach($relatedCourses as $rc)
                        <a href="{{ route('home.course_details', $rc->id) }}" class="flex items-center gap-3 p-2 rounded-xl hover:bg-slate-800/80 transition group">
                            <img src="{{ $rc->image ? (str_starts_with($rc->image, 'http') ? $rc->image : asset($rc->image)) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=150&q=80' }}" 
                                 class="w-14 h-14 rounded-lg object-cover shrink-0">
                            <div>
                                <h4 class="text-xs font-bold text-white group-hover:text-cyan-400 transition">{{ $rc->name }}</h4>
                                <p class="text-[10px] text-slate-400">{{ $rc->duration }} • {{ $rc->Fee }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Contact Help Box -->
                <div class="rounded-3xl bg-gradient-to-tr from-cyan-950/60 to-slate-900 border border-cyan-500/20 p-6 text-center space-y-3 shadow-xl">
                    <div class="w-12 h-12 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center mx-auto text-xl">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h4 class="text-sm font-bold text-white font-heading">Have Questions About This Course?</h4>
                    <p class="text-xs text-slate-400">Call our Chief Instructor directly for trade counseling.</p>
                    <a href="tel:{{ $setting->phone ?? '+88028954321' }}" class="inline-block px-5 py-2.5 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-extrabold text-xs transition">
                        Call {{ $setting->phone ?? '+880 2-8954321' }}
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
