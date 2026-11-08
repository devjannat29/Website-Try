@extends('frontend.layouts.master')

@section('title', 'Overseas Placement Cell | Asia Technical Training Center')
@section('meta_description', 'Connecting trained technical workforce with premier employers and mega construction projects across the Middle East, Japan, and Singapore.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Overseas Placement Cell',
    'subtitle' => 'Bridging certified technical craftsmanship with multinational employers in UAE, Saudi Arabia, Qatar, Japan, and Singapore.',
    'crumbs' => ['Placement Cell' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Overview & Statistics -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-5">
                <div class="section-label">Global Employment Pathway</div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-[#07172c] tracking-tight leading-tight">
                    Direct Employer Linkage & <span class="text-[#0284c7]">Overseas Careers</span>
                </h2>
                
                <p class="text-sm text-slate-600 leading-relaxed">
                    {{ $about->job_placement ?? 'ATTC has continuing to conduct vast activities in the Education, Training, and Health & Social sectors and has been offering various training courses and always been associated with skills development for local and overseas job seekers. Its principal mission is to make a substantial contribution to socio-economical development of the country and helps to make skill manpower for overseas job markets. Along with the skills training program, ATTC is expanding their courses number and strengthening day by day.' }}
                </p>

                <div class="grid grid-cols-3 gap-4 pt-2">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-center">
                        <p class="text-2xl font-black text-[#0284c7] font-heading">18,500+</p>
                        <p class="text-xs text-slate-500 mt-1">Placed Abroad</p>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-center">
                        <p class="text-2xl font-black text-amber-600 font-heading">98.4%</p>
                        <p class="text-xs text-slate-500 mt-1">Trade Test Pass</p>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-center">
                        <p class="text-2xl font-black text-emerald-600 font-heading">39+ Years</p>
                        <p class="text-xs text-slate-500 mt-1">Global Reputation</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative rounded-2xl overflow-hidden shadow-xl border border-slate-200">
                    <img src="{{ asset('upload/hero_bg.jpg') }}" 
                         alt="Trainees at Asia Technical Training Center" 
                         class="w-full h-[360px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#07172c]/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="inline-block px-2.5 py-1 rounded text-xs font-bold bg-[#0284c7] mb-1">Weekly Client Interviews</span>
                        <h4 class="text-sm font-bold">Direct recruitment for Gulf infrastructure</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Live Circulars Strip -->
        <div class="space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7]">Recruitment Updates</span>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#07172c] font-heading mt-1">Latest Overseas Circulars</h3>
                </div>
                <a href="{{ route('home.job') }}" class="btn-outline-action px-4 py-2 rounded-lg text-xs font-bold">
                    All Circulars <i class="fa-solid fa-arrow-right text-[10px] ml-1"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($circulars as $c)
                    <div class="pro-card p-6 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between gap-2 text-xs">
                                <span class="px-2.5 py-0.5 rounded font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                    {{ $c->country ?? 'Overseas' }}
                                </span>
                                <span class="text-slate-400 font-medium">Deadline: {{ $c->deadline }}</span>
                            </div>
                            <h4 class="text-base font-bold text-[#07172c] font-heading">{{ $c->job_title }}</h4>
                            <p class="text-xs text-slate-500 line-clamp-2">{{ $c->requirements }}</p>
                            <div class="text-xs font-semibold text-[#0284c7]">
                                <i class="fa-solid fa-money-bill-wave mr-1"></i> Salary: {{ $c->salary }}
                            </div>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs text-slate-400"><i class="fa-solid fa-users mr-1"></i> Vacancies: {{ $c->vacancies }}</span>
                            <a href="{{ route('home.contact') }}" class="btn-primary-action px-4 py-1.5 rounded-lg text-xs font-bold">
                                Apply Details
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="col-span-2 text-xs text-slate-500 text-center py-8">No current circulars published.</p>
                @endforelse
            </div>
        </div>

    </div>
</section>

<!-- Infinite Logo Scroller for Overseas Partners -->
<section class="py-16 bg-[#07172c] text-white overflow-hidden border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8 text-center">
        <div class="section-label text-cyan-400">Employer Network</div>
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
