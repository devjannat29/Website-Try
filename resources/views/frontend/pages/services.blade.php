@extends('frontend.layouts.master')

@section('title', 'Trade Testing & Industrial Services - ATTC')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Industrial Support</span>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">Trade Testing & Technical Services</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-2">Comprehensive solutions for recruiting agencies, foreign client delegations, and industrial contractors requiring certified technical validation.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($services as $s)
            <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 flex flex-col justify-between hover:border-cyan-500/40 transition duration-300 shadow-xl">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white font-heading">{{ $s->name }}</h3>
                    <p class="text-sm text-slate-300 mt-3 leading-relaxed">
                        {{ $s->description }}
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-slate-800 flex items-center justify-between">
                    <a href="{{ route('home.service_details', $s->id) }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5">
                        Read Full Specification <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                    <a href="{{ route('home.contact') }}" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold border border-slate-700">
                        Inquire Service
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
