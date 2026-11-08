@php
    $tickerNotices = $notices ?? \App\Models\Notice::latest()->take(5)->get();
@endphp

<!-- Latest News Ticker Bar (Professional Corporate Style) -->
<section class="bg-white border-y border-slate-200/90 py-2.5 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-3">
        <div class="shrink-0 flex items-center gap-2 bg-[#0b2545] text-white px-3.5 py-1 rounded-full shadow-xs">
            <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
            <span class="text-xs font-bold tracking-wider uppercase">Latest News</span>
        </div>
        <div class="overflow-hidden whitespace-nowrap flex-1 w-full">
            <marquee behavior="scroll" direction="left" scrollamount="6" class="text-sm font-semibold text-slate-800" onmouseover="this.stop();" onmouseout="this.start();">
                @if(isset($tickerNotices) && count($tickerNotices) > 0)
                    @foreach($tickerNotices as $n)
                        <span class="mx-6 text-slate-700">★ {{ $n->title }} ★</span>
                    @endforeach
                @else
                    <span class="mx-6 text-slate-700">★ ৩টি ট্রেডে বিদেশগামী সকল চাকরি-প্রার্থীদের জন্য নতুন ব্যাচ শুরু হতে যাচ্ছে। ট্রেডের নাম: ইলেকট্রিক্যাল ★</span>
                    <span class="mx-6 text-slate-700">★ প্লাম্বিং অ্যান্ড পাইপ ফিটিংস এবং রড বাইন্ডিং কোর্সে সীমিত আসনে ভর্তি চলছে ★</span>
                    <span class="mx-6 text-slate-700">★ বাংলাদেশ কারিগরি শিক্ষা বোর্ড (BTEB) নিবন্ধিত প্রতিষ্ঠান কোড: ৫০৮২১ ★</span>
                @endif
            </marquee>
        </div>
    </div>
</section>
