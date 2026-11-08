@extends('frontend.layouts.master')

@section('title', 'Overseas Job Circulars | Asia Technical Training Center')
@section('meta_description', 'Live job circulars and foreign recruitment demands for skilled electricians, plumbers, and rod binders at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Overseas Job Circulars',
    'subtitle' => 'Verified recruitment demands from licensed foreign employers and recruiting partners for certified technical trades.',
    'crumbs' => ['Placement' => route('home.placement_cell'), 'Job Circulars' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($circulars as $job)
                <div class="pro-card p-7 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between gap-2">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-700 border border-amber-200 flex items-center gap-1.5">
                                <i class="fa-solid fa-earth-americas"></i> {{ $job->country }}
                            </span>
                            <span class="text-xs font-semibold text-rose-600 bg-rose-50 px-2.5 py-0.5 rounded border border-rose-200">
                                Deadline: {{ $job->deadline ?? 'Open' }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-[#07172c] font-heading">{{ $job->job_title }}</h3>
                        
                        <div class="flex items-center gap-3 text-xs text-slate-500">
                            <span>Employer: <strong class="text-slate-800">{{ $job->company ?? 'Reputed Multinational' }}</strong></span>
                            <span>•</span>
                            <span>Vacancies: <strong class="text-[#0284c7] font-bold">{{ $job->vacancies }} Positions</strong></span>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-600 leading-relaxed">
                            <p class="font-bold text-slate-800 uppercase text-[10px] tracking-wider mb-1">Requirements & Experience:</p>
                            {{ $job->requirements }}
                        </div>
                    </div>

                    <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between gap-3">
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400">Monthly Remuneration</p>
                            <p class="text-sm font-extrabold text-[#0284c7]">{{ $job->salary ?? 'Negotiable' }}</p>
                        </div>

                        <div class="flex items-center gap-2">
                            @if($job->file)
                                <a href="{{ asset($job->file) }}" target="_blank" class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition">
                                    <i class="fa-solid fa-file-pdf text-rose-500"></i> PDF
                                </a>
                            @endif
                            <a href="{{ route('home.contact') }}" class="btn-primary-action px-4 py-2 rounded-lg text-xs font-bold">
                                Apply via ATTC
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center py-16 text-slate-500">
                    <p class="text-base font-semibold">No active job circulars currently posted.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $circulars->links() }}
        </div>

    </div>
</section>

@endsection
