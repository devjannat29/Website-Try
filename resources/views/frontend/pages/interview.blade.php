@extends('frontend.layouts.master')

@section('title', 'Foreign Client Interview Schedules - ATTC')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-amber-400 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20">Campus Trade Testing</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-3 font-heading">Foreign Client Interviews</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-2">Live recruitment testing dates conducted by visiting engineering delegations from GCC countries and Singapore.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-6">
            @forelse($interviews as $item)
            <div class="rounded-3xl bg-slate-900 border border-slate-800 p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 shadow-xl hover:border-slate-700 transition">
                <div class="space-y-2">
                    <div class="flex items-center gap-3">
                        <span class="px-2.5 py-0.5 rounded-lg text-xs font-bold bg-amber-500/20 text-amber-400 border border-amber-500/30">Live Delegation Test</span>
                        <span class="text-xs text-cyan-400 font-semibold"><i class="fa-regular fa-calendar-check mr-1"></i> {{ $item->date }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-white font-heading">{{ $item->title }}</h3>
                    <p class="text-xs text-slate-300"><strong>Target Trades:</strong> {{ $item->trades }}</p>
                    <p class="text-xs text-slate-400"><i class="fa-solid fa-location-dot text-rose-400 mr-1"></i> <strong>Testing Venue:</strong> {{ $item->venue }}</p>
                    @if($item->delegates)
                    <p class="text-xs text-slate-400"><i class="fa-solid fa-user-tie text-blue-400 mr-1"></i> <strong>Foreign Delegates:</strong> {{ $item->delegates }}</p>
                    @endif
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    @if($item->file)
                    <a href="{{ asset($item->file) }}" target="_blank" class="px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-bold border border-slate-700 transition flex items-center gap-1.5">
                        <i class="fa-solid fa-download text-cyan-400"></i> Download Notice
                    </a>
                    @endif
                    <a href="{{ route('home.contact') }}" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-xs transition">
                        Register for Test
                    </a>
                </div>
            </div>
            @empty
            <div class="text-center py-16 text-slate-400">
                <i class="fa-solid fa-clipboard-user text-4xl mb-3 text-slate-600"></i>
                <p class="text-sm font-semibold">No interviews scheduled for this week.</p>
            </div>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $interviews->links() }}
        </div>
    </div>
</section>
@endsection
