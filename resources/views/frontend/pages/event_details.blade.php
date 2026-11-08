@extends('frontend.layouts.master')

@section('title', ($event->title ?? 'Event Details') . ' | Asia Technical Training Center')
@section('meta_description', Str::limit(strip_tags($event->description ?? 'Event at Asia Technical Training Center'), 150))

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Event Details',
    'subtitle' => 'Institutional milestone, delegate visit, or graduation ceremony at ATTC.',
    'crumbs' => ['Events' => route('home.event'), 'Event Details' => '']
])

<section class="py-16 bg-white min-h-[500px]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <div>
            <div class="flex items-center gap-2 text-xs font-semibold text-[#0284c7] mb-2">
                <i class="fa-regular fa-calendar-days"></i>
                <span>Date: {{ $event->date ?? 'August 26, 2024' }}</span>
            </div>
            <h1 class="text-2xl sm:text-4xl font-extrabold text-[#07172c] font-heading leading-tight font-bangla">
                {{ $event->title }}
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
            <!-- Event Image -->
            <div class="md:col-span-6">
                <div class="pro-card overflow-hidden">
                    <img src="{{ $event->image ? asset($event->image) : 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80' }}" 
                         alt="{{ $event->title }}" 
                         class="w-full h-auto object-cover"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80';">
                </div>
            </div>

            <!-- Event Description -->
            <div class="md:col-span-6 space-y-5 text-slate-700 leading-relaxed text-sm md:text-base font-bangla">
                <p>
                    {{ $event->description }}
                </p>
                <div class="pt-4">
                    <a href="{{ route('home.event') }}" class="btn-primary-action px-6 py-2.5 rounded-lg text-xs font-bold inline-flex items-center gap-2">
                        <i class="fa-solid fa-arrow-left"></i> Back to All Events
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Events -->
        @if(isset($recentEvents) && count($recentEvents) > 0)
            <div class="pt-10 border-t border-slate-200">
                <h3 class="text-xl font-bold text-[#07172c] font-heading mb-6">Other Recent Events</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($recentEvents as $re)
                        <div class="pro-card overflow-hidden flex flex-col justify-between">
                            <div class="h-40 overflow-hidden bg-slate-100">
                                <img src="{{ $re->image ? asset($re->image) : 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80' }}" 
                                     alt="{{ $re->title }}" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 space-y-2">
                                <h4 class="font-bold text-[#07172c] text-xs line-clamp-2 font-bangla">{{ $re->title }}</h4>
                                <a href="{{ route('home.event_details', $re->id) }}" class="text-[#0284c7] font-bold text-xs hover:underline inline-flex items-center gap-1">
                                    Read Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@endsection
