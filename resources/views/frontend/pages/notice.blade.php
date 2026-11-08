@extends('frontend.layouts.master')

@section('title', 'Notice Board & Official Circulars | Asia Technical Training Center')
@section('meta_description', 'Official notices, new batch admission routines, and BTEB certificate distributions at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Official Notice Board',
    'subtitle' => 'Latest announcements, batch enrollment schedules, and trade examination notices.',
    'crumbs' => ['Notices' => '']
])

<section class="py-16 bg-white min-h-[500px]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        
        @forelse($notices as $notice)
            <div class="pro-card p-6 flex flex-col md:flex-row md:items-center justify-between gap-6 hover:border-sky-300 transition">
                <div class="flex items-start gap-4 flex-1">
                    <!-- Date Stamp Badge -->
                    <div class="shrink-0 w-16 h-16 rounded-xl bg-slate-50 border border-slate-200 flex flex-col items-center justify-center text-center p-2">
                        <span class="text-[10px] uppercase font-bold tracking-wider text-[#0284c7]">
                            {{ \Carbon\Carbon::parse($notice->date ?? $notice->created_at)->format('M') }}
                        </span>
                        <span class="text-xl font-extrabold text-[#07172c] leading-none mt-0.5">
                            {{ \Carbon\Carbon::parse($notice->date ?? $notice->created_at)->format('d') }}
                        </span>
                        <span class="text-[9px] text-slate-400 mt-0.5">
                            {{ \Carbon\Carbon::parse($notice->date ?? $notice->created_at)->format('Y') }}
                        </span>
                    </div>

                    <!-- Notice Details -->
                    <div class="flex-1 space-y-1.5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="px-2.5 py-0.5 rounded text-[11px] font-semibold bg-sky-50 text-[#0284c7] border border-sky-200">
                                {{ $notice->category ?? 'Notice' }}
                            </span>
                            @if($notice->badge)
                                <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                    {{ $notice->badge }}
                                </span>
                            @endif
                        </div>
                        <h3 class="text-base font-bold text-[#07172c] hover:text-[#0284c7] transition font-heading">
                            {{ $notice->title }}
                        </h3>
                        @if($notice->summary)
                            <p class="text-xs text-slate-500 leading-relaxed font-bangla">
                                {{ $notice->summary }}
                            </p>
                        @endif
                    </div>
                </div>

                <!-- Action Button -->
                <div class="shrink-0 flex items-center gap-2 self-end md:self-center">
                    @if($notice->file)
                        <a href="{{ asset($notice->file) }}" target="_blank" 
                           class="btn-primary-action px-4 py-2 rounded-lg text-xs font-bold flex items-center gap-1.5">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <span>Download PDF</span>
                        </a>
                    @else
                        <span class="text-xs font-semibold text-slate-400 px-3 py-1.5 rounded-lg bg-slate-50 border border-slate-200">
                            General Notice
                        </span>
                    @endif
                </div>
            </div>
        @empty
            <div class="text-center py-16 text-slate-500">
                <i class="fa-regular fa-bell text-4xl mb-3 text-slate-300"></i>
                <p class="text-sm font-semibold">No active notices at this moment.</p>
            </div>
        @endforelse

        <div class="mt-8">
            {{ $notices->links() }}
        </div>

    </div>
</section>

@endsection
