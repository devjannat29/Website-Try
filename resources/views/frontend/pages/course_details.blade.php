@extends('frontend.layouts.master')

@section('title', $course->name . ' | Course Syllabus | Asia Technical Training Center')
@section('meta_description', 'Official curriculum, syllabus, and enrollment details for ' . $course->name . ' at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => $course->name,
    'subtitle' => 'BTEB certified vocational trade training with guaranteed practical workshop hours and international employment.',
    'crumbs' => ['Courses' => route('home.all_course'), $course->name => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Main Column (8 cols) -->
            <div class="lg:col-span-8 space-y-10">
                
                <!-- Main Course Visual & Key Info -->
                <div class="pro-card overflow-hidden">
                    <div class="relative h-80 sm:h-96 overflow-hidden bg-slate-100">
                        <img src="{{ $course->image ? asset($course->image) : 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=1200&q=80' }}" 
                             alt="{{ $course->name }}" 
                             class="w-full h-full object-cover"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=1200&q=80';">
                        <div class="absolute top-4 left-4 bg-[#07172c]/90 text-amber-400 font-bold text-xs px-3 py-1.5 rounded-lg backdrop-blur-xs">
                            {{ $course->bteb_level ?? 'NTVQF Level-2' }}
                        </div>
                    </div>

                    <!-- Meta Strip -->
                    <div class="p-6 bg-slate-50 border-t border-slate-200 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                        <div>
                            <p class="text-[11px] text-slate-500 uppercase font-semibold">Duration</p>
                            <p class="text-sm font-bold text-[#07172c] mt-0.5">{{ $course->duration ?? '6 month' }}</p>
                        </div>
                        <div>
                            <p class="text-[11px] text-slate-500 uppercase font-semibold">Course Fee</p>
                            <p class="text-sm font-bold text-[#0284c7] mt-0.5">BDT {{ number_format((float)($course->Fee ?? 20000)) }}</p>
                        </div>
                        <div>
                            <p class="text-[11px] text-slate-500 uppercase font-semibold">Certification</p>
                            <p class="text-sm font-bold text-[#07172c] mt-0.5">BTEB Approved</p>
                        </div>
                        <div>
                            <p class="text-[11px] text-slate-500 uppercase font-semibold">Training Method</p>
                            <p class="text-sm font-bold text-emerald-600 mt-0.5">80% Practical Lab</p>
                        </div>
                    </div>

                    <!-- Course Description Body -->
                    <div class="p-8 space-y-6">
                        <div>
                            <h2 class="text-2xl font-bold text-[#07172c] font-heading mb-3">Course Overview</h2>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $course->description }}
                            </p>
                        </div>

                        <!-- Syllabus Details -->
                        <div class="space-y-4 pt-4 border-t border-slate-100">
                            <h3 class="text-lg font-bold text-[#07172c] font-heading">
                                Detailed Curriculum & Modular Syllabus
                            </h3>
                            <div class="bg-slate-50 rounded-xl p-5 border border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed whitespace-pre-line font-medium">
                                {{ $course->syllabus ?? "Module 1: Workshop Safety Protocols & Tools Introduction\nModule 2: Core Engineering Drawing & Material Specifications\nModule 3: Hands-on Practical Fabrications and Machinery Operation\nModule 4: Quality Inspection, Pressure / Load Testing & Client Interview Preparation" }}
                            </div>
                        </div>

                        <!-- Target Careers -->
                        <div class="space-y-3 pt-4 border-t border-slate-100">
                            <h3 class="text-lg font-bold text-[#07172c] font-heading">
                                Target Career Pathways & Overseas Placement
                            </h3>
                            <p class="text-xs text-slate-500">
                                Graduates of this course are directly eligible for client trade tests with contractors in UAE, Saudi Arabia, Qatar, Japan, and Singapore:
                            </p>
                            <div class="flex flex-wrap gap-2 pt-1">
                                @php
                                    $careerList = explode(',', $course->careers ?? 'Technician, Maintenance Specialist, Site Supervisor');
                                @endphp
                                @foreach($careerList as $career)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-sky-50 text-[#0284c7] border border-sky-200">
                                        <i class="fa-solid fa-check text-xs"></i> {{ trim($career) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Online Registration Form Anchored to this course -->
                <div id="applySection" class="pro-card p-8 bg-gradient-to-r from-[#07172c] to-[#0b2545] text-white space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-400">Direct Enrollment</span>
                        <h3 class="text-2xl font-extrabold font-heading mt-1">Enroll in {{ $course->name }}</h3>
                        <p class="text-xs text-slate-300 mt-1">
                            Complete your registration to secure a seat in our upcoming training batch.
                        </p>
                    </div>

                    <form action="{{ route('home.apply_admission') }}" method="POST" class="bg-white text-slate-800 p-6 rounded-xl shadow-lg">
                        @csrf
                        <input type="hidden" name="course_name" value="{{ $course->name }}">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Full Name *</label>
                                <input type="text" name="applicant_name" required placeholder="Your Name" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden">
                            </div>
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Contact Phone *</label>
                                <input type="text" name="phone" required placeholder="01XXXXXXXXX" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden">
                            </div>
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Preferred Shift</label>
                                <select name="shift" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden bg-white">
                                    <option value="Morning">Morning Shift (9:00 AM - 1:00 PM)</option>
                                    <option value="Evening">Evening Shift (2:00 PM - 6:00 PM)</option>
                                    <option value="Friday Special">Friday Special (Working Trainees)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Hostel Accommodation Needed?</label>
                                <select name="hostel" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden bg-white">
                                    <option value="No">No (I have local residence)</option>
                                    <option value="Yes">Yes (I need hostel room & meals)</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block font-bold text-slate-700 mb-1">District / Present Address</label>
                                <input type="text" name="address" placeholder="e.g., Mirpur, Dhaka" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden">
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn-primary-action w-full py-3 rounded-lg font-bold text-xs uppercase tracking-wider">
                                Confirm Course Registration
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Right Sidebar Column (4 cols) -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Quick Admission Action -->
                <div class="pro-card p-6 text-center space-y-4">
                    <div class="w-14 h-14 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center text-2xl mx-auto border border-amber-200">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-[#07172c] font-heading">Ready to Begin Training?</h4>
                        <p class="text-xs text-slate-500 mt-1">Limited seats per batch to maintain hands-on machine practice quality.</p>
                    </div>
                    <a href="#applySection" class="btn-primary-action w-full py-2.5 rounded-lg font-bold text-xs block">
                        Enroll Now
                    </a>
                </div>

                <!-- Related Courses -->
                @if(isset($relatedCourses) && $relatedCourses->count() > 0)
                    <div class="pro-card p-6 space-y-4">
                        <h4 class="text-sm font-bold text-[#07172c] font-heading border-b border-slate-100 pb-3">
                            Related Vocational Trades
                        </h4>
                        <div class="space-y-3">
                            @foreach($relatedCourses as $rc)
                                <a href="{{ route('home.course_details', $rc->id) }}" class="flex items-center gap-3 p-2.5 rounded-xl hover:bg-sky-50 transition group">
                                    <img src="{{ $rc->image ? asset($rc->image) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=150&q=80' }}" 
                                         alt="{{ $rc->name }}" 
                                         class="w-14 h-14 rounded-lg object-cover shrink-0">
                                    <div class="overflow-hidden">
                                        <h5 class="text-xs font-bold text-[#07172c] group-hover:text-[#0284c7] transition truncate">{{ $rc->name }}</h5>
                                        <p class="text-[11px] text-slate-400 mt-0.5">{{ $rc->duration }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Standard Hotline Widget -->
                @include('frontend.partials.hotline_card')

            </div>

        </div>
    </div>
</section>

@endsection
