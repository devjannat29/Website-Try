@extends('frontend.layouts.master')

@section('title', 'About Us - Asia Technical Training Center (ATTC)')

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Institutional Heritage</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-3 font-heading">About Asia Technical Training Center</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-3">Established to prepare high-performing technical craftsmen for international megaprojects.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- About Overview -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Pioneering Vocational Excellence</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white font-heading">Empowering Over 18,500 Certified Craftsmen</h2>
                <p class="text-sm text-slate-300 leading-relaxed">
                    {{ $about->about_desc ?? 'Asia Technical Training Center is an internationally accredited technical vocational education and human resource development institute.' }}
                </p>
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800">
                        <p class="text-2xl font-extrabold text-cyan-400 font-heading">BTEB</p>
                        <p class="text-xs text-slate-400 mt-1">Govt Code: {{ $setting->bteb_code ?? 'BTEB-54092' }}</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800">
                        <p class="text-2xl font-extrabold text-emerald-400 font-heading">BMET</p>
                        <p class="text-xs text-slate-400 mt-1">License: {{ $setting->bmet_license ?? 'BMET/TR-098/2021' }}</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6">
                <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80" 
                     alt="ATTC Campus Workshop" 
                     class="rounded-3xl border border-slate-800 shadow-2xl object-cover w-full h-[380px]">
            </div>
        </div>

        <!-- Faculty Members -->
        <div class="space-y-8">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20">Master Instructors</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-2 font-heading">Technical Leadership & Faculty</h2>
                <p class="text-xs text-slate-400 mt-1">Our trainers hold international credentials from TWI (UK), AWS (USA), and national engineering institutions.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($members as $m)
                <div class="rounded-2xl bg-slate-900 border border-slate-800 p-5 text-center space-y-3 shadow-xl">
                    <img src="{{ $m->image ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80' }}" 
                         alt="{{ $m->name }}" 
                         class="w-24 h-24 rounded-full mx-auto object-cover border-2 border-cyan-500/40">
                    <div>
                        <h4 class="text-sm font-bold text-white font-heading">{{ $m->name }}</h4>
                        <p class="text-xs text-cyan-400 font-semibold">{{ $m->designation }}</p>
                        <p class="text-[11px] text-slate-400 mt-1">{{ $m->department }}</p>
                        <p class="text-[10px] text-slate-500 mt-0.5">{{ $m->education }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endsection
