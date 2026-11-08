@extends('frontend.layouts.master')

@section('title', 'Institutional Services | Asia Technical Training Center')
@section('meta_description', 'Discover Career Counseling, Hostel facilities, and Overseas Job Placement services at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Our Institutional Services',
    'subtitle' => 'Comprehensive technical career counseling, hostel accommodations, and overseas placement.',
    'crumbs' => ['Services' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $s)
                <div class="pro-card p-7 flex flex-col justify-between group">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-sky-50 text-[#0284c7] flex items-center justify-center text-2xl mb-6 border border-sky-100 group-hover:bg-[#0284c7] group-hover:text-white transition duration-300">
                            <i class="{{ $s->icon ?? 'fa-solid fa-toolbox' }}"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#07172c] font-heading mb-3 group-hover:text-[#0284c7] transition">
                            {{ $s->name }}
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            {{ $s->description }}
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between">
                        <a href="{{ route('home.service_details', $s->id) }}" class="text-xs font-bold text-[#0284c7] hover:text-[#0369a1] inline-flex items-center gap-1.5 transition">
                            <span>Learn Details</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                        <a href="{{ route('home.contact') }}" class="btn-primary-action px-3.5 py-1.5 rounded-lg text-xs font-semibold">
                            Inquire Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Service Highlights Grid -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-8 sm:p-10">
            <div class="max-w-3xl mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7]">Why Choose ATTC Services</span>
                <h3 class="text-2xl font-bold text-[#07172c] mt-1 font-heading">
                    Structured Support for Trainees from Day One to Departure
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="space-y-2">
                    <div class="text-[#0284c7] text-xl font-black font-heading">01.</div>
                    <h4 class="font-bold text-sm text-[#07172c]">Aptitude Assessment</h4>
                    <p class="text-xs text-slate-500">Free evaluation of candidate technical background to guide them to the right trade.</p>
                </div>
                <div class="space-y-2">
                    <div class="text-[#0284c7] text-xl font-black font-heading">02.</div>
                    <h4 class="font-bold text-sm text-[#07172c]">Secure Accommodation</h4>
                    <p class="text-xs text-slate-500">Modern hostel on-premises in Mirpur-1 with nutritious meals and 24/7 security.</p>
                </div>
                <div class="space-y-2">
                    <div class="text-[#0284c7] text-xl font-black font-heading">03.</div>
                    <h4 class="font-bold text-sm text-[#07172c]">Language & Culture</h4>
                    <p class="text-xs text-slate-500">Basic Arabic, English, and Japanese communication coaching for smooth workplace integration.</p>
                </div>
                <div class="space-y-2">
                    <div class="text-[#0284c7] text-xl font-black font-heading">04.</div>
                    <h4 class="font-bold text-sm text-[#07172c]">Employer Trade Tests</h4>
                    <p class="text-xs text-slate-500">Regular visits from Saudi, UAE, and GCC delegates for direct trade test hiring.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
