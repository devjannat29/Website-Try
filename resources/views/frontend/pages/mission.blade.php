@extends('frontend.layouts.master')

@section('title', 'Mission & Vision | Asia Technical Training Center')
@section('meta_description', 'Mission and vision of Asia Technical Training Center (ATTC), empowering youth with technical skills for global careers.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Mission & Vision',
    'subtitle' => 'Our guiding principles, socio-economic goals, and commitment to global technical excellence.',
    'crumbs' => ['About Us' => route('home.about_us'), 'Mission & Vision' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-8">
                
                <!-- Mission Card -->
                <div class="pro-card p-8 border-l-4 border-l-[#0284c7]">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 text-[#0284c7] flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-[#0284c7] uppercase tracking-wider">Strategic Mission</span>
                            <h2 class="text-2xl font-bold text-[#07172c] font-heading">Our Mission</h2>
                        </div>
                    </div>
                    <div class="text-sm text-slate-600 leading-relaxed space-y-3">
                        <p class="font-bangla text-slate-700 bg-sky-50/60 p-4 rounded-xl border border-sky-100">
                            {{ $about->mission ?? 'ASIA TECHNICAL TRAINING CENTRE (ATTC) was founded in 1985 with a view to provide training to unemployed peoples to get employment. ATTC has continuing to conduct vast activities in the Education, Training, and Health & Social sectors and has been offering various training courses and always been associated with skills development for local and overseas job seekers.' }}
                        </p>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="pro-card p-8 border-l-4 border-l-amber-500">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Future Horizon</span>
                            <h2 class="text-2xl font-bold text-[#07172c] font-heading">Our Vision</h2>
                        </div>
                    </div>
                    <div class="text-sm text-slate-600 leading-relaxed space-y-3">
                        <p class="font-bangla text-slate-700 bg-sky-50/60 p-4 rounded-xl border border-sky-100">
                            {{ $about->vission ?? 'ASIA TECHNICAL TRAINING CENTRE (ATTC) was founded in 1985 with a view to provide training to unemployed peoples to get employment. ATTC has continuing to conduct vast activities in the Education, Training, and Health & Social sectors and has been offering various training courses and always been associated with skills development for local and overseas job seekers.' }}
                        </p>
                    </div>
                </div>

                <!-- Core Pillars -->
                <div class="pro-card p-8 space-y-6">
                    <h3 class="text-lg font-bold text-[#07172c] font-heading">Our Institutional Core Values</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <i class="fa-solid fa-shield-halved text-[#0284c7] text-lg mb-2"></i>
                            <h4 class="font-bold text-xs text-[#07172c] mb-1">Safety & Standard</h4>
                            <p class="text-[11px] text-slate-500">Strict safety protocols and BTEB-aligned curriculum.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <i class="fa-solid fa-screwdriver-wrench text-amber-600 text-lg mb-2"></i>
                            <h4 class="font-bold text-xs text-[#07172c] mb-1">Practical Mastery</h4>
                            <p class="text-[11px] text-slate-500">80% hands-on workshop training with modern machinery.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <i class="fa-solid fa-handshake text-emerald-600 text-lg mb-2"></i>
                            <h4 class="font-bold text-xs text-[#07172c] mb-1">Ethical Placement</h4>
                            <p class="text-[11px] text-slate-500">Transparent client trade tests and overseas job support.</p>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</section>

@endsection
