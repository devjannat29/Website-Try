@extends('frontend.layouts.master')

@section('title', $service->name . ' | Services | Asia Technical Training Center')
@section('meta_description', $service->name . ' - Professional institutional support and training service at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => $service->name,
    'subtitle' => 'Institutional support and specialized vocational student services at ATTC.',
    'crumbs' => ['Services' => route('home.services'), $service->name => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Main Details (8 cols) -->
            <div class="lg:col-span-8 space-y-8">
                
                <div class="pro-card p-8 space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-sky-50 text-[#0284c7] flex items-center justify-center text-3xl border border-sky-100">
                        <i class="{{ $service->icon ?? 'fa-solid fa-toolbox' }}"></i>
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7]">Service Overview</span>
                        <h2 class="text-2xl font-bold text-[#07172c] font-heading mt-1">{{ $service->name }}</h2>
                    </div>

                    <div class="text-sm text-slate-600 leading-relaxed space-y-4">
                        <p>{{ $service->description }}</p>
                    </div>

                    <div class="p-6 rounded-xl bg-slate-50 border border-slate-200 space-y-3">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-[#0284c7]">Key Service Highlights</h4>
                        <ul class="text-xs text-slate-600 space-y-2.5">
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span>Dedicated institutional desk with certified coordinators</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span>Personalized guidance aligned with BTEB standards and overseas employer requirements</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                <span>Fast-track resolution and round-the-clock student assistance</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Inquiry Box -->
                <div class="pro-card p-8 bg-gradient-to-r from-[#07172c] to-[#0b2545] text-white space-y-4">
                    <h3 class="text-xl font-bold font-heading">Need More Information About This Service?</h3>
                    <p class="text-xs text-slate-300">
                        Speak directly with our administrative team for enrollment advice, hostel bookings, or placement consultations.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('home.contact') }}" class="btn-primary-action px-6 py-3 rounded-xl font-bold text-xs inline-flex items-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i> Contact Student Helpdesk
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar (4 cols) -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Other Services -->
                <div class="pro-card p-6 space-y-4">
                    <h3 class="text-base font-bold text-[#07172c] font-heading border-b border-slate-100 pb-3">
                        Other Services
                    </h3>
                    <div class="space-y-3">
                        @foreach($otherServices as $os)
                            <a href="{{ route('home.service_details', $os->id) }}" class="block p-3.5 rounded-xl bg-slate-50 hover:bg-sky-50 border border-slate-200 hover:border-sky-300 transition group">
                                <h4 class="text-xs font-bold text-slate-800 group-hover:text-[#0284c7] transition">{{ $os->name }}</h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-1">{{ $os->description }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Hotline Card -->
                @include('frontend.partials.hotline_card')

            </div>

        </div>
    </div>
</section>

@endsection
