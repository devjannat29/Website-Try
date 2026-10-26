@extends('frontend.layouts.master')

@section('title', $service->name . ' - Service Details | ATTC')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
            <a href="{{ route('home.index') }}" class="hover:text-cyan-400">Home</a>
            <span>/</span>
            <a href="{{ route('home.services') }}" class="hover:text-cyan-400">Services</a>
            <span>/</span>
            <span class="text-slate-200">{{ $service->name }}</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white font-heading">{{ $service->name }}</h1>
        <p class="text-slate-400 text-sm mt-2 max-w-2xl">Industrial trade testing & institutional support services provided by ATTC.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <div class="lg:col-span-8 space-y-8">
                <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 shadow-xl space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-3xl">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-white font-heading">Service Scope & Methodology</h2>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        {{ $service->description }}
                    </p>
                    <div class="p-5 rounded-2xl bg-slate-950 border border-slate-800 space-y-3">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-cyan-400">Why Partner with ATTC for this Service?</h4>
                        <ul class="text-xs text-slate-300 space-y-2">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-400"></i> Calibrated testing instruments verified by national metrology standards</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-400"></i> Direct video conferencing and live CCTV stream for remote foreign observers</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-400"></i> Official test report issued with embossed seal and QR security validation</li>
                        </ul>
                    </div>
                </div>

                <!-- Inquiry Box -->
                <div class="rounded-3xl bg-gradient-to-br from-slate-900 to-blue-950 border border-slate-800 p-8 shadow-xl space-y-4">
                    <h3 class="text-xl font-bold text-white font-heading">Request a Trade Testing or Service Quote</h3>
                    <p class="text-xs text-slate-400">Contact our corporate relations desk for custom batch dates, consumables pricing, and delegation hosting.</p>
                    <a href="{{ route('home.contact') }}" class="inline-block px-7 py-3 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-xs transition">
                        Contact Corporate Desk
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-4 space-y-6">
                <div class="rounded-3xl bg-slate-900 border border-slate-800 p-6 space-y-4 shadow-xl">
                    <h3 class="text-base font-bold text-white font-heading border-b border-slate-800 pb-3">Other Technical Services</h3>
                    <div class="space-y-3">
                        @foreach($otherServices as $os)
                        <a href="{{ route('home.service_details', $os->id) }}" class="block p-3 rounded-xl bg-slate-950 hover:bg-slate-800 border border-slate-800/80 transition group">
                            <h4 class="text-xs font-bold text-white group-hover:text-cyan-400 transition">{{ $os->name }}</h4>
                            <p class="text-[10px] text-slate-400 mt-1 line-clamp-1">{{ $os->description }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
