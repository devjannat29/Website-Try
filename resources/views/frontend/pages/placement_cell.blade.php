@extends('frontend.layouts.master')

@section('title', 'Overseas Placement Cell - ATTC')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20">Global Employment</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-3 font-heading">Overseas Placement Cell</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-2">Connecting qualified technical craftsmen with multinational construction conglomerates, oil refineries, and shipyards.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Placement Cell Overview -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Direct Employer Linkage</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white font-heading">Our Placement Heritage & Commitment</h2>
                <p class="text-sm text-slate-300 leading-relaxed">
                    {{ $about->job_placement ?? 'Our dedicated Overseas Placement Cell maintains direct liaison with certified recruiting agents, multinational construction conglomerates, shipyards, oil & gas refiners in Saudi Arabia, UAE, Qatar, Kuwait, Japan, and Singapore. Over 18,500 ATTC graduates currently work abroad.' }}
                </p>
                <div class="grid grid-cols-3 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800 text-center">
                        <p class="text-2xl font-extrabold text-cyan-400 font-heading">18,500+</p>
                        <p class="text-[11px] text-slate-400 mt-1">Alumni Abroad</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800 text-center">
                        <p class="text-2xl font-extrabold text-emerald-400 font-heading">98.4%</p>
                        <p class="text-[11px] text-slate-400 mt-1">Trade Test Pass</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800 text-center">
                        <p class="text-2xl font-extrabold text-amber-400 font-heading">30 Days</p>
                        <p class="text-[11px] text-slate-400 mt-1">Avg Visa Processing</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=80" 
                     alt="Students Receiving Visa & Job Letters" 
                     class="rounded-3xl border border-slate-800 shadow-2xl object-cover w-full h-[340px]">
            </div>
        </div>

        <!-- Placement & Overseas Gallery -->
        @if($placementGalleries->count() > 0)
        <div class="space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Photo Proof</span>
                    <h3 class="text-2xl font-bold text-white font-heading mt-1">Recent Client Interviews & Overseas Deployments</h3>
                </div>
                <a href="{{ route('home.gallery') }}?type=placement" class="text-xs font-semibold text-cyan-400 hover:text-cyan-300">View Full Gallery <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($placementGalleries as $g)
                <div class="group relative rounded-2xl overflow-hidden border border-slate-800 aspect-video bg-slate-900">
                    <img src="{{ str_starts_with($g->image, 'http') ? $g->image : asset($g->image) }}" 
                         alt="{{ $g->title }}" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-80"></div>
                    <p class="absolute bottom-3 left-3 right-3 text-xs font-bold text-white truncate">{{ $g->title }}</p>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Active Circulars on Placement Page -->
        @if($circulars->count() > 0)
        <div class="space-y-6 pt-6 border-t border-slate-800">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400">Immediate Vacancies</span>
                    <h3 class="text-2xl font-bold text-white font-heading mt-1">Active Client Recruitment Demands</h3>
                </div>
                <a href="{{ route('home.job') }}" class="text-xs font-semibold text-cyan-400 hover:text-cyan-300">All Circulars <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($circulars as $circ)
                <div class="rounded-2xl bg-slate-900 border border-slate-800 p-6 flex flex-col justify-between shadow-xl">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-cyan-500/20 text-cyan-400 border border-cyan-500/30">
                                {{ $circ->country }}
                            </span>
                            <span class="text-xs text-rose-400 font-semibold">Deadline: {{ $circ->deadline }}</span>
                        </div>
                        <h4 class="text-base font-bold text-white font-heading">{{ $circ->job_title }}</h4>
                        <p class="text-xs text-slate-400">{{ $circ->company }}</p>
                        <p class="text-xs text-slate-300 line-clamp-2">{{ $circ->requirements }}</p>
                    </div>

                    <div class="mt-4 pt-4 border-t border-slate-800 flex items-center justify-between">
                        <span class="text-xs font-extrabold text-amber-400">{{ $circ->salary }}</span>
                        <a href="{{ route('home.contact') }}" class="px-3.5 py-1.5 rounded-lg bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-xs transition">
                            Apply via Desk
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
@endsection
