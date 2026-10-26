@extends('frontend.layouts.master')

@section('title', 'Photo & Video Gallery | ' . ($setting->site_name ?? 'ATTC'))

@section('content')
<!-- Page Header -->
<div class="relative bg-slate-900 py-16 sm:py-20 overflow-hidden border-b border-slate-800">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-blue-950/80"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20 mb-4 tracking-wide uppercase">
            Visual Highlights
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Campus & Technical Gallery</h1>
        <p class="mt-4 text-base sm:text-lg text-slate-300 max-w-2xl mx-auto">
            Take a visual tour through our advanced workshop machinery, live practical sessions, employer trade testing delegations, and global deployment departures.
        </p>

        <!-- Filter Tabs -->
        <div class="mt-8 flex flex-wrap justify-center gap-2">
            <a href="{{ route('home.gallery', ['type' => 'all']) }}" 
               class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all {{ ($category == 'all' || empty($category)) ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-700/60' }}">
                All Photos ({{ \App\Models\Gallery::count() }})
            </a>
            <a href="{{ route('home.gallery', ['type' => 'general']) }}" 
               class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all {{ $category == 'general' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-700/60' }}">
                General Workshops
            </a>
            <a href="{{ route('home.gallery', ['type' => 'placement']) }}" 
               class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all {{ $category == 'placement' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-700/60' }}">
                Client Interviews & Testing
            </a>
            <a href="{{ route('home.gallery', ['type' => 'overseas']) }}" 
               class="px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all {{ $category == 'overseas' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 hover:text-white border border-slate-700/60' }}">
                Overseas Flights & Deployment
            </a>
        </div>
    </div>
</div>

<!-- Gallery Grid -->
<section class="py-16 bg-slate-950 min-h-[500px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($galleries->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($galleries as $item)
                    <div class="group relative rounded-2xl overflow-hidden bg-slate-900 border border-slate-800/80 hover:border-slate-700 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 flex flex-col">
                        <div class="relative h-56 w-full overflow-hidden bg-slate-950">
                            @if($item->image && file_exists(public_path($item->image)))
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title ?? 'Gallery Photo' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-900 to-slate-800 text-slate-600">
                                    <svg class="w-12 h-12 stroke-[1.2]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                                <span class="text-xs font-semibold text-emerald-400 bg-emerald-500/20 px-2.5 py-1 rounded-md border border-emerald-500/30">
                                    {{ ucfirst($item->category ?? 'General') }}
                                </span>
                            </div>
                        </div>

                        <div class="p-4 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between text-xs text-slate-500 mb-1.5">
                                    <span class="capitalize">{{ $item->category ?? 'Campus Life' }}</span>
                                    <span>{{ $item->created_at ? $item->created_at->format('M Y') : 'Recent' }}</span>
                                </div>
                                <h3 class="text-sm font-semibold text-white group-hover:text-blue-400 transition-colors line-clamp-2">
                                    {{ $item->title ?? 'Technical Practical Training Demonstration' }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $galleries->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-slate-900/50 rounded-3xl border border-dashed border-slate-800">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-slate-800 flex items-center justify-center text-slate-500 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">No photos in this category yet</h3>
                <p class="text-slate-400 text-sm mt-1">Check back soon or explore our general workshop albums.</p>
                <a href="{{ route('home.gallery', ['type' => 'all']) }}" class="mt-4 inline-block px-5 py-2 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-semibold transition-colors">
                    View All Gallery
                </a>
            </div>
        @endif

    </div>
</section>
@endsection
