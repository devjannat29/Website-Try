@extends('frontend.layouts.master')

@section('title', 'Contact Us & Campus Location | ' . ($setting->site_name ?? 'ATTC'))

@section('content')
<!-- Page Header -->
<div class="relative bg-slate-900 py-16 sm:py-20 overflow-hidden border-b border-slate-800">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-blue-950/80"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20 mb-4 tracking-wide uppercase">
            Get In Touch
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Contact & Campus Admissions</h1>
        <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto">
            Have questions regarding course admissions, BTEB certifications, or overseas placement trade tests? Our advisory counselors are here to help.
        </p>
    </div>
</div>

<!-- Main Contact Section -->
<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Contact Info Sidebar (5 Cols) -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Campus Info Card -->
                <div class="bg-slate-900/90 border border-slate-800/80 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2.5">
                        <span class="w-8 h-8 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </span>
                        Headquarters & Campus
                    </h2>

                    <div class="space-y-6">
                        <!-- Location -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center text-blue-400 shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Main Campus Address</span>
                                <p class="text-slate-200 text-sm mt-1 leading-relaxed">
                                    {{ $setting->address ?? 'Plot 14/B, Technical Training Zone, Mirpur-1, Dhaka-1216, Bangladesh' }}
                                </p>
                            </div>
                        </div>

                        <!-- Phone & Hotline -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center text-emerald-400 shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Admissions & Helpdesk</span>
                                <p class="text-slate-200 text-sm font-semibold mt-1">
                                    {{ $setting->phone ?? '+880 1712-345678' }}
                                </p>
                                @if($setting->hotline)
                                    <p class="text-amber-400 text-xs font-bold mt-0.5">
                                        Hotline: {{ $setting->hotline }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center text-amber-400 shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Official Email</span>
                                <p class="text-slate-200 text-sm mt-1">
                                    {{ $setting->gmail ?? 'info@attc.edu.bd' }}
                                </p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center text-purple-400 shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Office & Workshop Hours</span>
                                <p class="text-slate-200 text-sm mt-1">
                                    {{ $setting->hours ?? 'Saturday – Thursday: 8:00 AM – 6:00 PM' }}
                                </p>
                                <span class="text-xs text-rose-400 font-medium">Friday: Closed (Admissions Office Open 10 AM - 4 PM)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Govt Credentials -->
                    <div class="mt-8 pt-6 border-t border-slate-800 grid grid-cols-2 gap-4">
                        <div class="bg-slate-950 p-3.5 rounded-xl border border-slate-800 text-center">
                            <span class="text-[10px] uppercase font-bold text-slate-500">BTEB Code</span>
                            <p class="text-sm font-bold text-emerald-400 font-mono mt-0.5">{{ $setting->bteb_code ?? '50421' }}</p>
                        </div>
                        <div class="bg-slate-950 p-3.5 rounded-xl border border-slate-800 text-center">
                            <span class="text-[10px] uppercase font-bold text-slate-500">BMET License</span>
                            <p class="text-sm font-bold text-blue-400 font-mono mt-0.5">{{ $setting->bmet_license ?? 'RL-1452' }}</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Inquiry Form & Map (7 Cols) -->
            <div class="lg:col-span-7 space-y-8">
                
                <!-- Inquiry Form -->
                <div class="bg-slate-900/90 border border-slate-800/80 rounded-3xl p-6 sm:p-10 backdrop-blur-xl relative shadow-2xl">
                    <h2 class="text-2xl font-bold text-white mb-2">Send an Inquiry</h2>
                    <p class="text-slate-400 text-sm mb-6">Fill out the message form below and our counselor will respond promptly.</p>

                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('home.send_message') }}" method="POST" class="space-y-4">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Your Full Name *</label>
                                <input type="text" name="name" required placeholder="e.g. Mohammad Rahim" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Email Address *</label>
                                <input type="email" name="email" required placeholder="e.g. rahim@gmail.com" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Subject / Interested Trade *</label>
                            <input type="text" name="subject" required placeholder="e.g. Inquiry regarding 6G Pipe Welding Course Fee & BTEB Exam" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Your Message / Questions *</label>
                            <textarea name="message" rows="4" required placeholder="Write your questions here..." class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-sm shadow-lg shadow-blue-500/25 transition-all flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            Submit Message to Admissions Office
                        </button>
                    </form>
                </div>

                <!-- Google Maps Frame -->
                <div class="rounded-3xl overflow-hidden border border-slate-800 bg-slate-900 shadow-2xl h-80 relative">
                    <iframe 
                        title="Campus Location Map"
                        class="w-full h-full border-0 filter grayscale contrast-125 opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-500"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.700318534889!2d90.35424754751433!3d23.80260655653846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c978918239%3A0xaad613a0429ab8b!2sMirpur-1%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1710000000000!5m2!1sen!2sbd" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
