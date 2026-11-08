@extends('frontend.layouts.master')

@section('title', 'Photo & Video Gallery | Asia Technical Training Center')
@section('meta_description', 'Visual gallery of practical workshop sessions, student training, client trade test delegations, and certificate award ceremonies at ATTC.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Campus & Workshop Gallery',
    'subtitle' => 'Visual highlights of our practical laboratories, foreign client delegations, and overseas departures.',
    'crumbs' => ['Gallery' => '']
])

<section class="py-16 bg-white" x-data="{ lightbox: false, imgSrc: '', imgTitle: '' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-2">
            <a href="{{ route('home.gallery', ['type' => 'all']) }}" 
               class="px-5 py-2 rounded-xl text-xs font-bold transition {{ ($category == 'all' || empty($category)) ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-50 border border-slate-200 text-slate-700 hover:bg-slate-100' }}">
                All Photos
            </a>
            <a href="{{ route('home.gallery', ['type' => 'general']) }}" 
               class="px-5 py-2 rounded-xl text-xs font-bold transition {{ $category == 'general' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-50 border border-slate-200 text-slate-700 hover:bg-slate-100' }}">
                Workshop Practical
            </a>
            <a href="{{ route('home.gallery', ['type' => 'placement']) }}" 
               class="px-5 py-2 rounded-xl text-xs font-bold transition {{ $category == 'placement' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-50 border border-slate-200 text-slate-700 hover:bg-slate-100' }}">
                Client Interviews & Testing
            </a>
            <a href="{{ route('home.gallery', ['type' => 'overseas']) }}" 
               class="px-5 py-2 rounded-xl text-xs font-bold transition {{ $category == 'overseas' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-50 border border-slate-200 text-slate-700 hover:bg-slate-100' }}">
                Overseas Flights & Departure
            </a>
        </div>

        <!-- Photos Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($galleries as $item)
                <div class="pro-card overflow-hidden group cursor-pointer"
                     @click="lightbox = true; imgSrc = '{{ $item->image ? asset($item->image) : '' }}'; imgTitle = '{{ addslashes($item->title ?? 'Campus Photo') }}'">
                    <div class="relative h-56 overflow-hidden bg-slate-100">
                        <img src="{{ $item->image ? asset($item->image) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80' }}" 
                             alt="{{ $item->title ?? 'Gallery Photo' }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80';">
                        <div class="absolute inset-0 bg-[#07172c]/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <span class="w-10 h-10 rounded-full bg-white/90 text-[#0284c7] flex items-center justify-center shadow-lg">
                                <i class="fa-solid fa-expand text-sm"></i>
                            </span>
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h4 class="text-xs font-bold text-slate-800 line-clamp-1">{{ $item->title ?? 'Practical Session' }}</h4>
                    </div>
                </div>
            @empty
                <div class="col-span-4 text-center py-16 text-slate-500">
                    <p class="text-sm font-semibold">No photos available in this category.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $galleries->links() }}
        </div>

    </div>

    <!-- Lightbox Modal -->
    <div x-show="lightbox" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4" 
         @keydown.escape.window="lightbox = false"
         style="display: none;">
        <button @click="lightbox = false" class="absolute top-6 right-6 text-white text-3xl hover:text-cyan-400">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="max-w-4xl max-h-[85vh] p-2 text-center" @click.outside="lightbox = false">
            <img :src="imgSrc" class="max-h-[75vh] max-w-full rounded-xl mx-auto shadow-2xl object-contain">
            <p class="text-white text-sm font-semibold mt-3" x-text="imgTitle"></p>
        </div>
    </div>
</section>

@endsection
