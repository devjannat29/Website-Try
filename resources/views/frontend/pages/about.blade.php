@extends('frontend.layouts.master')

@section('title', 'About Us | Asia Technical Training Center (ATTC)')
@section('meta_description', 'Learn about Asia Technical Training Center (ATTC), established in 1985 by Md. Abdul Malek. Registered Training Organization under BTEB (Code: 50821).')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'About Our Institute',
    'subtitle' => '39+ years of dedicated service empowering youth with certified technical skills and overseas career opportunities.',
    'crumbs' => ['About Us' => '']
])

<!-- About Overview Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-5">
                <div class="section-label">Institutional Heritage</div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-[#07172c] tracking-tight leading-tight">
                    Asia Technical Training Center <span class="text-[#0284c7]">(ATTC)</span>
                </h2>
                
                <div class="text-xs font-bold text-amber-600 bg-amber-50 px-3 py-1.5 rounded-lg border border-amber-200 inline-block font-bangla">
                    প্রতিষ্ঠিত: ১৯৮৫ ইং | প্রতিষ্ঠাতা ও মালিক: জনাব মো: আব্দুল মালেক | BTEB কোড: ৫০৮২১
                </div>

                <div class="space-y-4 text-sm text-slate-600 leading-relaxed">
                    <p>
                        {{ $about->about_desc ?? 'ASIA TECHNICAL TRAINING CENTRE (ATTC) is a training organization registered from Bangladesh Technical Education Board (BTEB) and registered address is 149/9-C Sha Alibagh, Mirpur-1, Dhaka, Bangladesh. ATTC was founded in 1985 and Mr. Md. Abdul Malek was the founder member & owner of this organization. The organization was founded with a view to provide training to unemployed peoples to get the employment.' }}
                    </p>
                    <p>
                        ATTC has continuing to conduct vast activities in the Education, Training, and Health & Social sectors and has been offering various training courses and always been associated with skills development for local and overseas job seekers. Its principal mission is to make a substantial contribution to socio-economical development of the country and helps to make skill manpower for overseas job markets. Along with the skills training program, ATTC is expanding their courses number and strengthening day by day.
                    </p>
                </div>

                <!-- Credential Badges -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-3">
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-center">
                        <p class="text-xl font-black text-[#0284c7] font-heading">39+ Years</p>
                        <p class="text-[11px] text-slate-500 font-medium">Est. 1985</p>
                    </div>
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-center">
                        <p class="text-xl font-black text-[#07172c] font-heading">50821</p>
                        <p class="text-[11px] text-slate-500 font-medium">BTEB RTO Code</p>
                    </div>
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-center col-span-2 sm:col-span-1">
                        <p class="text-xl font-black text-amber-600 font-heading">18,500+</p>
                        <p class="text-[11px] text-slate-500 font-medium">Placed Abroad</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-4">
                <div class="relative rounded-2xl overflow-hidden shadow-xl border border-slate-200">
                    <img src="{{ asset('upload/hero_bg.jpg') }}" 
                         alt="Asia Technical Training Center" 
                         class="w-full h-[400px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#07172c]/85 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <p class="text-xs uppercase font-bold tracking-wider text-cyan-300">Registered Campus</p>
                        <h4 class="text-base font-bold">149/9-C, Shah Alibag, Mirpur-1, Dhaka-1216</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Faculties & Management (in CARDS as requested!) -->
<section class="py-16 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="section-label">Faculty Directory</div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07172c] mt-2 tracking-tight">
                Our Faculties & Management
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-2">
                Dedicated leadership and certified engineering instructors guiding practical trade mastery.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($members as $m)
                <div class="pro-card overflow-hidden group">
                    <div class="relative h-64 overflow-hidden bg-slate-200">
                        <img src="{{ $m->image ? asset($m->image) : 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80' }}" 
                             alt="{{ $m->name }}" 
                             class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80';">
                        <div class="absolute top-3 left-3 bg-[#07172c]/90 text-amber-400 font-bold text-[11px] px-3 py-1 rounded-md backdrop-blur-xs shadow-sm">
                            {{ $m->designation }}
                        </div>
                    </div>

                    <div class="p-6 text-center space-y-2">
                        <h3 class="text-lg font-bold text-[#07172c] font-heading group-hover:text-[#0284c7] transition">
                            {{ $m->name }}
                        </h3>
                        <p class="text-xs font-semibold text-[#0284c7]">
                            {{ $m->department ?? 'Management' }}
                        </p>
                        <p class="text-xs text-slate-500">
                            <i class="fa-solid fa-graduation-cap text-slate-400 mr-1"></i> {{ $m->education ?? 'Engineering Expert' }}
                        </p>

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
            @endforeach
        </div>

    </div>
</section>

<!-- Infinite Logo Scroller for Overseas Partners -->
<section class="py-16 bg-[#07172c] text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8 text-center">
        <div class="section-label text-cyan-400">Global Employment</div>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-1">
            Overseas Recruiting Partners & Employers
        </h2>
    </div>

    <div class="relative w-full overflow-hidden py-4">
        <div class="animate-infinite-scroll flex items-center gap-6">
            @php
                $partners = [
                    ['name' => 'Saudi Aramco EPC', 'code' => 'ARAMCO', 'sub' => 'Saudi Arabia', 'icon' => 'fa-industry'],
                    ['name' => 'Dubai Drydocks World', 'code' => 'DRYDOCKS', 'sub' => 'Dubai, UAE', 'icon' => 'fa-ship'],
                    ['name' => 'Qatar Energy Contractors', 'code' => 'QATAR ENG', 'sub' => 'Doha, Qatar', 'icon' => 'fa-gas-pump'],
                    ['name' => 'Sobha Construction LLC', 'code' => 'SOBHA', 'sub' => 'United Arab Emirates', 'icon' => 'fa-building'],
                    ['name' => 'Habtoor Leighton Group', 'code' => 'HLG GULF', 'sub' => 'GCC Region', 'icon' => 'fa-trowel-bricks'],
                    ['name' => 'Japan Technical Intern (TITP)', 'code' => 'TITP JAPAN', 'sub' => 'Tokyo, Japan', 'icon' => 'fa-sun'],
                ];
            @endphp

            @foreach($partners as $p)
                <div class="w-48 h-24 shrink-0 bg-white rounded-xl shadow-md border border-slate-200 flex flex-col items-center justify-center p-3 text-center">
                    <div class="flex items-center justify-center gap-2 mb-1">
                        <i class="fa-solid {{ $p['icon'] }} text-[#0284c7] text-base"></i>
                        <span class="font-black text-slate-800 text-xs font-heading">{{ $p['code'] }}</span>
                    </div>
                    <span class="text-[10px] font-bold text-slate-600 line-clamp-1">{{ $p['name'] }}</span>
                    <span class="text-[9px] text-slate-400">{{ $p['sub'] }}</span>
                </div>
            @endforeach

            @foreach($partners as $p)
                <div class="w-48 h-24 shrink-0 bg-white rounded-xl shadow-md border border-slate-200 flex flex-col items-center justify-center p-3 text-center">
                    <div class="flex items-center justify-center gap-2 mb-1">
                        <i class="fa-solid {{ $p['icon'] }} text-[#0284c7] text-base"></i>
                        <span class="font-black text-slate-800 text-xs font-heading">{{ $p['code'] }}</span>
                    </div>
                    <span class="text-[10px] font-bold text-slate-600 line-clamp-1">{{ $p['name'] }}</span>
                    <span class="text-[9px] text-slate-400">{{ $p['sub'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
