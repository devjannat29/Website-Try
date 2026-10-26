@extends('frontend.layouts.master')

@section('title', 'Official Notices & Circulars | ' . ($setting->site_name ?? 'ATTC'))

@section('content')
<!-- Page Header -->
<div class="relative bg-slate-900 py-16 sm:py-20 overflow-hidden border-b border-slate-800">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-blue-950/80"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-semibold bg-amber-500/10 text-amber-400 border border-amber-500/20 mb-4 tracking-wide uppercase">
            Official Bulletin
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Notice Board & Announcements</h1>
        <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto">
            Stay informed with the latest exam timetables, BTEB certifications, overseas delegation trade tests, and holiday announcements.
        </p>
    </div>
</div>

<!-- Notice Listing -->
<section class="py-16 bg-slate-950 min-h-[500px]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($notices->count() > 0)
            <div class="space-y-4">
                @foreach($notices as $notice)
                    <div class="group bg-slate-900/80 hover:bg-slate-900 border border-slate-800/80 hover:border-slate-700/80 rounded-2xl p-6 transition-all duration-200 hover:shadow-xl hover:shadow-blue-500/5 flex flex-col md:flex-row md:items-center justify-between gap-6">
                        
                        <div class="flex items-start gap-4 flex-1">
                            <!-- Date Stamp Badge -->
                            <div class="shrink-0 w-16 h-16 rounded-xl bg-slate-950 border border-slate-800 flex flex-col items-center justify-center text-center p-2 group-hover:border-blue-500/40 transition-colors">
                                <span class="text-[10px] uppercase font-bold tracking-wider text-blue-400">
                                    {{ \Carbon\Carbon::parse($notice->date ?? $notice->created_at)->format('M') }}
                                </span>
                                <span class="text-xl font-extrabold text-white leading-none mt-0.5">
                                    {{ \Carbon\Carbon::parse($notice->date ?? $notice->created_at)->format('d') }}
                                </span>
                                <span class="text-[9px] text-slate-500 mt-0.5">
                                    {{ \Carbon\Carbon::parse($notice->date ?? $notice->created_at)->format('Y') }}
                                </span>
                            </div>

                            <!-- Notice Details -->
                            <div class="flex-1">
                                <div class="flex flex-wrap items-center gap-2 mb-1.5">
                                    <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                        {{ $notice->category ?? 'General Notice' }}
                                    </span>
                                    @if($notice->badge)
                                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                            {{ $notice->badge }}
                                        </span>
                                    @endif
                                </div>
                                <h3 class="text-lg font-bold text-white group-hover:text-blue-400 transition-colors">
                                    {{ $notice->title }}
                                </h3>
                                @if($notice->summary)
                                    <p class="text-slate-400 text-sm mt-1.5 line-clamp-2">
                                        {{ $notice->summary }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Action / Download -->
                        <div class="flex items-center gap-3 shrink-0 pt-4 md:pt-0 border-t md:border-t-0 border-slate-800">
                            @if($notice->file)
                                <a href="{{ route('admin.download', $notice->id) }}" 
                                   class="px-4 py-2.5 rounded-xl bg-emerald-500/10 hover:bg-emerald-500 text-emerald-400 hover:text-white border border-emerald-500/30 text-xs font-semibold flex items-center gap-1.5 transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                    Download PDF
                                </a>
                            @else
                                <span class="px-4 py-2 rounded-xl bg-slate-800/50 text-slate-500 text-xs font-medium">
                                    Official Board Notice
                                </span>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $notices->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-slate-900/50 rounded-3xl border border-dashed border-slate-800">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-slate-800 flex items-center justify-center text-slate-500 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">No active notices found</h3>
                <p class="text-slate-400 text-sm mt-1">Check back soon for new announcements from the academic council.</p>
            </div>
        @endif

    </div>
</section>
@endsection
