@extends('frontend.layouts.master')

@section('title', 'Faculty & Management Team - ATTC')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Academic Leadership</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-3 font-heading">Faculty & Senior Instructors</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-2">Meet the certified master technologists and engineers shaping the next generation of industrial craftsmen.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($members as $m)
            <div class="rounded-3xl bg-slate-900 border border-slate-800 p-6 text-center space-y-4 shadow-xl hover:border-slate-700 transition">
                <img src="{{ $m->image ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80' }}" 
                     alt="{{ $m->name }}" 
                     class="w-28 h-28 rounded-full mx-auto object-cover border-2 border-cyan-500/40 shadow-lg">
                <div>
                    <h3 class="text-base font-bold text-white font-heading">{{ $m->name }}</h3>
                    <p class="text-xs text-cyan-400 font-semibold mt-0.5">{{ $m->designation }}</p>
                    <p class="text-xs text-slate-300 mt-2 font-medium">{{ $m->department }}</p>
                    <p class="text-[11px] text-slate-400 mt-1">{{ $m->education }}</p>
                    @if($m->experience)
                    <span class="inline-block mt-3 px-3 py-1 rounded-full bg-slate-950 border border-slate-800 text-[10px] text-amber-400 font-semibold">
                        {{ $m->experience }}
                    </span>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-4 text-center py-16 text-slate-400">
                <p class="text-sm font-semibold">No faculty profiles published yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
