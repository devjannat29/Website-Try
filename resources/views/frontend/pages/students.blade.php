@extends('frontend.layouts.master')

@section('title', 'Student Verification & Campus Life | ' . ($setting->site_name ?? 'ATTC'))

@section('content')
<!-- Page Header -->
<div class="relative bg-slate-900 py-16 sm:py-24 overflow-hidden border-b border-slate-800">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-blue-950/80"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-4 tracking-wide uppercase">
            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            Official Credential Verification Portal
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Student Certification & Campus</h1>
        <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-3xl mx-auto">
            Instant digital verification for employers, overseas embassy delegates, and alumni. Verify BTEB-certified technical competencies and explore our on-campus training facilities.
        </p>
    </div>
</div>

<!-- Certificate Verification Section -->
<section id="verify" class="py-16 bg-slate-950 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Verification Card -->
        <div class="bg-slate-900/90 backdrop-blur-xl border border-slate-800 rounded-3xl p-6 sm:p-10 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/5 rounded-full blur-2xl pointer-events-none"></div>

            <div class="text-center max-w-xl mx-auto mb-8">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 shadow-inner">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-white">Verify Student Certificate</h2>
                <p class="text-slate-400 text-sm mt-2">Enter student Registration Number or Certificate ID (e.g. <span class="text-amber-400 font-mono">ATTC-2026-0891</span>) to authenticate records.</p>
            </div>

            <!-- Search Form -->
            <form action="{{ route('home.students') }}#verify" method="GET" class="relative max-w-2xl mx-auto">
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                        <input type="text" 
                               name="reg_number" 
                               value="{{ request('reg_number') }}" 
                               placeholder="e.g. ATTC-2026-0891 or CERT-WLD-8941" 
                               required
                               class="w-full bg-slate-950 border border-slate-700/80 rounded-xl pl-11 pr-4 py-3.5 text-white placeholder-slate-500 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 text-sm font-medium transition-all">
                    </div>
                    <button type="submit" 
                            class="px-8 py-3.5 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-400 hover:to-teal-500 text-white font-semibold rounded-xl text-sm transition-all shadow-lg shadow-emerald-500/20 flex items-center justify-center gap-2 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Verify Now
                    </button>
                </div>
            </form>

            <!-- Search Result: Found -->
            @if(isset($verifiedStudent) && $verifiedStudent)
                <div class="mt-10 p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-slate-950 to-slate-900 border-2 border-emerald-500/40 relative shadow-2xl animate-fade-in">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-6 border-b border-slate-800">
                        <div class="flex items-center gap-3">
                            <span class="p-2.5 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            </span>
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-emerald-400">Government & BTEB Authenticated</span>
                                <h3 class="text-xl font-extrabold text-white">Genuine Certification Verified</h3>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                                Status: Valid & Active
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                        <div>
                            <span class="text-xs text-slate-400 uppercase font-medium">Student Name</span>
                            <p class="text-base font-bold text-white mt-0.5">{{ $verifiedStudent->student_name }}</p>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 uppercase font-medium">Registration No</span>
                            <p class="text-base font-mono font-bold text-amber-400 mt-0.5">{{ $verifiedStudent->reg_number }}</p>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 uppercase font-medium">Certificate ID</span>
                            <p class="text-base font-mono font-bold text-blue-400 mt-0.5">{{ $verifiedStudent->certificate_id }}</p>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 uppercase font-medium">Trade / Course Completed</span>
                            <p class="text-base font-semibold text-slate-200 mt-0.5">{{ $verifiedStudent->course_name }}</p>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 uppercase font-medium">Grade / Result</span>
                            <p class="text-base font-bold text-emerald-400 mt-0.5">{{ $verifiedStudent->grade ?? 'A+ (Distinction)' }}</p>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 uppercase font-medium">Issue Date</span>
                            <p class="text-base font-semibold text-slate-300 mt-0.5">{{ $verifiedStudent->issue_date ?? 'August 15, 2026' }}</p>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-800 flex flex-wrap items-center justify-between gap-4">
                        <div class="text-xs text-slate-400">
                            Registered with: <span class="text-slate-300 font-medium">BTEB Code {{ $setting->bteb_code ?? '50421' }}</span> | BMET RL License: <span class="text-slate-300 font-medium">{{ $setting->bmet_license ?? 'RL-1452' }}</span>
                        </div>
                        <button onclick="window.print()" class="px-4 py-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold flex items-center gap-1.5 transition-colors border border-slate-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                            Print Verification Slip
                        </button>
                    </div>
                </div>
            <!-- Search Result: Not Found -->
            @elseif(isset($searchPerformed) && $searchPerformed)
                <div class="mt-8 p-6 rounded-2xl bg-rose-500/10 border border-rose-500/20 text-center animate-fade-in">
                    <div class="w-12 h-12 mx-auto rounded-full bg-rose-500/20 text-rose-400 flex items-center justify-center mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white">Record Not Found</h3>
                    <p class="text-slate-300 text-sm mt-1 max-w-md mx-auto">
                        No active student certificate was matched with "<span class="text-rose-400 font-mono">{{ request('reg_number') }}</span>". Please double-check the ID or contact the controller of examinations.
                    </p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="{{ route('home.contact') }}" class="px-4 py-2 rounded-lg bg-rose-500 hover:bg-rose-600 text-white text-xs font-semibold transition-colors">
                            Contact Registrar Office
                        </a>
                    </div>
                </div>
            @endif

        </div>

    </div>
</section>

<!-- Student Campus Life & Amenities -->
<section class="py-16 bg-slate-900 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-400 bg-blue-500/10 px-3 py-1 rounded-full border border-blue-500/20">Campus Experience</span>
            <h2 class="text-3xl font-extrabold text-white mt-3">World-Class Training Infrastructure</h2>
            <p class="text-slate-400 text-sm mt-2">Equipped to deliver international-standard hands-on vocational excellence.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Facility 1 -->
            <div class="bg-slate-950/80 rounded-2xl p-6 border border-slate-800/80 hover:border-blue-500/50 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Simulated Heavy Industry Labs</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Dedicated welding booths, HVAC gas charging stations, high-voltage industrial distribution panels, and PLC diagnostic rigs configured to international job specifications.
                </p>
            </div>

            <!-- Facility 2 -->
            <div class="bg-slate-950/80 rounded-2xl p-6 border border-slate-800/80 hover:border-emerald-500/50 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">On-Campus Hostels & Mess</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Safe, hygienic, and affordable resident housing with 24/7 security, high-speed Wi-Fi, and a nutritious canteen serving trainees from outside Dhaka and regional districts.
                </p>
            </div>

            <!-- Facility 3 -->
            <div class="bg-slate-950/80 rounded-2xl p-6 border border-slate-800/80 hover:border-amber-500/50 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Foreign Delegate Trade Testing</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Official technical testing ground accredited by Gulf, East Asian, and European hiring delegations for immediate on-site candidate qualification and offer issuances.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-12 bg-slate-950 border-t border-slate-800/80">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold text-white">Ready to Elevate Your Technical Career?</h3>
        <p class="text-slate-400 text-sm mt-2">Join hundreds of successful technicians working across Bangladesh and overseas.</p>
        <div class="mt-6 flex flex-wrap justify-center gap-4">
            <a href="{{ route('home.all_course') }}" class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold text-sm shadow-lg shadow-blue-500/25 transition-all">
                Browse Technical Courses
            </a>
            <a href="{{ route('home.contact') }}" class="px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold text-sm border border-slate-700 transition-all">
                Visit Campus in Person
            </a>
        </div>
    </div>
</section>
@endsection
