@extends('frontend.layouts.master')

@section('title', 'Workshops & Events | ' . ($setting->site_name ?? 'ATTC'))

@section('content')
<!-- Page Header -->
<div class="relative bg-slate-900 py-16 sm:py-20 overflow-hidden border-b border-slate-800">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-blue-950/80"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-semibold bg-purple-500/10 text-purple-400 border border-purple-500/20 mb-4 tracking-wide uppercase">
            Hands-on Experiences
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Technical Seminars & Events</h1>
        <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto">
            Participate in industry-led technical seminars, heavy machinery safety masterclasses, and international placement recruitment summits.
        </p>
    </div>
</div>

<!-- Events Grid -->
<section class="py-16 bg-slate-950 min-h-[500px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($events->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($events as $event)
                    <div class="group bg-slate-900/90 rounded-2xl overflow-hidden border border-slate-800/80 hover:border-slate-700 hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-300 flex flex-col">
                        
                        <!-- Event Image Banner -->
                        <div class="relative h-52 w-full overflow-hidden bg-slate-950">
                            @if($event->image && file_exists(public_path($event->image)))
                                <img src="{{ asset($event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-900 to-slate-800 text-slate-600">
                                    <svg class="w-12 h-12 stroke-[1.2]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            @endif

                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-purple-500/90 backdrop-blur-md text-white shadow-lg">
                                    {{ $event->status ?? 'Upcoming' }}
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <!-- Date & Venue Meta -->
                                <div class="space-y-1.5 mb-4 text-xs text-slate-400">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-purple-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        <span class="font-medium text-slate-300">{{ $event->date ?? 'TBA' }} &bull; {{ $event->time ?? '10:00 AM' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-slate-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span class="truncate">{{ $event->venue ?? 'Main Campus Auditorium' }}</span>
                                    </div>
                                </div>

                                <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors line-clamp-2">
                                    {{ $event->title }}
                                </h3>

                                <p class="text-slate-400 text-sm mt-3 line-clamp-3 leading-relaxed">
                                    {{ $event->description ?? 'Join this special workshop designed to empower engineering students and trade technicians with industry-grade skills and safety procedures.' }}
                                </p>
                            </div>

                            <div class="mt-6 pt-5 border-t border-slate-800/80 flex items-center justify-between">
                                <span class="text-xs text-emerald-400 font-semibold flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                    Open for Enrollment
                                </span>
                                <a href="{{ route('home.contact') }}" class="px-4 py-2 rounded-xl bg-purple-600/10 hover:bg-purple-600 text-purple-400 hover:text-white border border-purple-500/20 text-xs font-semibold transition-all">
                                    Register Seat
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $events->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-slate-900/50 rounded-3xl border border-dashed border-slate-800">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-slate-800 flex items-center justify-center text-slate-500 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">No upcoming events scheduled</h3>
                <p class="text-slate-400 text-sm mt-1">New technical workshops and safety training events will be published shortly.</p>
            </div>
        @endif

    </div>
</section>
@endsection
