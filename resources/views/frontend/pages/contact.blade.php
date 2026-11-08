@extends('frontend.layouts.master')

@section('title', 'Contact Us & Campus Directions | Asia Technical Training Center')
@section('meta_description', 'Contact Asia Technical Training Center at 149/9-C, Shah Alibag, Mirpur-1, Dhaka-1216. Phone: +880 1681769149, +880 1735066260.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Contact Us & Campus Information',
    'subtitle' => 'Get in touch for course admissions, BTEB certifications, and overseas job placement trade tests.',
    'crumbs' => ['Contact Us' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Info Cards (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="pro-card p-6 sm:p-8 space-y-6">
                    <div class="border-b border-slate-100 pb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7]">Headquarters & Campus</span>
                        <h2 class="text-xl font-bold text-[#07172c] font-heading mt-1">Get in Touch with ATTC</h2>
                    </div>

                    <div class="space-y-5 text-xs sm:text-sm">
                        <!-- Address -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-[#0284c7] flex items-center justify-center shrink-0 border border-sky-100">
                                <i class="fa-solid fa-location-dot text-base"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-400 uppercase text-[10px]">Registered Campus Address</span>
                                <p class="text-slate-800 font-semibold mt-0.5">
                                    {{ $setting->address ?? '149/9-C, Shah Alibag, Mirpur-1, Dhaka- 1216, Bangladesh' }}
                                </p>
                            </div>
                        </div>

                        <!-- Phone / Hotline -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
                                <i class="fa-solid fa-phone text-base"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-400 uppercase text-[10px]">Phone & Hotline</span>
                                <p class="text-slate-800 font-bold mt-0.5">
                                    {{ $setting->hotline ?? '+880 1681769149, +880 1735066260' }}
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 border border-amber-100">
                                <i class="fa-solid fa-envelope text-base"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-400 uppercase text-[10px]">Official Email</span>
                                <p class="text-slate-800 font-semibold mt-0.5">
                                    {{ $setting->gmail ?? 'asiatechnicalbd@gmail.com' }}
                                </p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center shrink-0 border border-purple-100">
                                <i class="fa-solid fa-clock text-base"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-400 uppercase text-[10px]">Office & Workshop Hours</span>
                                <p class="text-slate-800 font-semibold mt-0.5">
                                    {{ $setting->hours ?? 'Saturday - Thursday: 09:00 AM - 07:00 PM' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BTEB RTO Credentials Box -->
                <div class="pro-card p-6 bg-slate-50 border border-slate-200 space-y-3">
                    <div class="flex items-center gap-2 text-xs font-bold text-[#07172c]">
                        <i class="fa-solid fa-stamp text-amber-600"></i>
                        <span>Government Accreditation Proof</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Asia Technical Training Center is a verified Registered Training Organization (RTO) under the Bangladesh Technical Education Board (BTEB), Center Code <strong>50821</strong>.
                    </p>
                </div>

            </div>

            <!-- Right Message & Admission Forms (7 cols) -->
            <div class="lg:col-span-7 space-y-8">
                
                <!-- Send Message Form -->
                <div class="pro-card p-6 sm:p-8 space-y-5">
                    <div class="border-b border-slate-100 pb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7]">Send an Inquiry</span>
                        <h3 class="text-xl font-bold text-[#07172c] font-heading mt-1">Leave Us a Direct Message</h3>
                        <p class="text-xs text-slate-500 mt-1">Our counseling team typically responds within 24 working hours.</p>
                    </div>

                    <form action="{{ route('home.send_message') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Your Full Name *</label>
                                <input type="text" name="name" required placeholder="John Doe" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden">
                            </div>
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Your Email Address *</label>
                                <input type="email" name="email" required placeholder="john@example.com" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block font-bold text-slate-700 mb-1">Subject *</label>
                                <input type="text" name="subject" required placeholder="Course Inquiry / Hostel / Trade Testing" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block font-bold text-slate-700 mb-1">Your Message *</label>
                                <textarea name="message" rows="4" required placeholder="Write your question or request..." 
                                          class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0284c7] outline-hidden"></textarea>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn-primary-action px-7 py-3 rounded-xl font-bold text-xs uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-paper-plane"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Online Quick Admission Form Anchor -->
                <div id="admissionForm" class="pro-card p-6 sm:p-8 bg-slate-50 border border-slate-200 space-y-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Fast-Track Enrollment</span>
                        <h3 class="text-lg font-bold text-[#07172c] font-heading mt-0.5">Apply for Winter / Spring Batch</h3>
                    </div>

                    <form action="{{ route('home.apply_admission') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Applicant Name *</label>
                                <input type="text" name="applicant_name" required placeholder="Applicant Name" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 bg-white focus:border-[#0284c7] outline-hidden">
                            </div>
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Phone Number *</label>
                                <input type="text" name="phone" required placeholder="017XXXXXXXX" 
                                       class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 bg-white focus:border-[#0284c7] outline-hidden">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block font-bold text-slate-700 mb-1">Select Desired Course *</label>
                                <select name="course_name" required class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 bg-white focus:border-[#0284c7] outline-hidden">
                                    <option value="Rod Binder (Civil Construction)">Rod Binder (Civil Construction)</option>
                                    <option value="Plumbing & Pipe Fitting">Plumbing & Pipe Fitting</option>
                                    <option value="Basic Electrical">Basic Electrical (House Wiring)</option>
                                    <option value="Electrical & Electronics">Electrical & Electronics</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn-primary-action px-6 py-2.5 rounded-lg font-bold text-xs">
                                Submit Online Application
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
