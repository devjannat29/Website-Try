@extends('frontend.layouts.master')

@section('title', 'Seminars & Events | Asia Technical Training Center')
@section('meta_description', 'Upcoming and past events, government visits, and student farewell ceremonies at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Campus Seminars & Events',
    'subtitle' => 'Institutional ceremonies, government project inspections, and student departure milestones.',
    'crumbs' => ['Events' => '']
])

<section class="py-16 bg-white min-h-[500px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($events as $event)
                <div class="pro-card overflow-hidden flex flex-col justify-between group">
                    <div>
                        <!-- Event Image -->
                        <div class="relative h-52 overflow-hidden bg-slate-100">
                            <img src="{{ $event->image ? asset($event->image) : 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80' }}" 
                                 alt="{{ $event->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80';">
                            <div class="absolute top-3 left-3 bg-[#07172c]/90 text-white text-[11px] font-bold px-2.5 py-1 rounded-md backdrop-blur-xs flex items-center gap-1.5">
                                <i class="fa-regular fa-calendar-days text-cyan-400"></i> {{ $event->date }}
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h3 class="text-base font-bold text-[#07172c] group-hover:text-[#0284c7] transition font-heading line-clamp-2 mb-2 font-bangla">
                                <a href="{{ route('home.event_details', $event->id) }}">{{ $event->title }}</a>
                            </h3>
                            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed font-bangla">
                                {{ $event->description }}
                            </p>
                        </div>
                    </div>

                    <!-- Footer Action -->
                    <div class="p-6 pt-0">
                        <a href="{{ route('home.event_details', $event->id) }}" class="btn-primary-action w-full text-center py-2 text-xs font-bold rounded-lg block">
                            Read Full Details
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-16 text-slate-500">
                    <p class="text-base font-semibold">No events recorded currently.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $events->links() }}
        </div>

    </div>
</section>

@endsection
