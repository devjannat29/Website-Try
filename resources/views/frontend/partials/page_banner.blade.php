@props([
    'title' => 'Page Title',
    'subtitle' => null,
    'breadcrumb' => null,
    'crumbs' => []
])

<!-- Page Header Banner (Deep Corporate Navy with Cyan & Gold Accents) -->
<section class="relative bg-gradient-to-r from-[#07172c] via-[#0b2545] to-[#0f3057] py-12 md:py-16 text-center text-white border-b border-sky-900/60 shadow-inner">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <h1 class="text-2xl sm:text-4xl md:text-5xl font-black tracking-tight mb-2 text-white font-heading">
            {{ $title }}
        </h1>

        @if($subtitle)
            <p class="text-xs sm:text-sm text-slate-300 max-w-2xl mx-auto mb-4 font-normal">
                {{ $subtitle }}
            </p>
        @endif

        <nav class="flex justify-center items-center flex-wrap gap-2 text-xs sm:text-sm font-medium text-slate-300">
            <a href="{{ route('home.index') }}" class="hover:text-white transition flex items-center gap-1.5">
                <i class="fa-solid fa-house text-xs text-sky-400"></i> Home
            </a>
            
            @if(!empty($crumbs))
                @foreach($crumbs as $label => $url)
                    <span class="text-sky-500">/</span>
                    @if(!empty($url))
                        <a href="{{ $url }}" class="hover:text-white transition text-slate-300">{{ $label }}</a>
                    @else
                        <span class="text-sky-300 font-semibold">{{ $label }}</span>
                    @endif
                @endforeach
            @elseif($breadcrumb)
                <span class="text-sky-500">/</span>
                <span class="text-sky-300 font-semibold">{{ $breadcrumb }}</span>
            @endif
        </nav>

    </div>
</section>

<!-- News Ticker under Page Banner -->
@include('frontend.partials.ticker')
