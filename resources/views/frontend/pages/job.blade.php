@extends('frontend.layouts.master')

@section('title', 'Overseas Job Circulars & Recruitment Demands - ATTC')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Foreign Demands</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-3 font-heading">Overseas Job Circulars</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-2">Verified recruitment circulars from licensed recruiting agencies and foreign employers for skilled technicians.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($circulars as $job)
            <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 flex flex-col justify-between shadow-2xl hover:border-slate-700 transition">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 rounded-xl text-xs font-bold bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 flex items-center gap-1.5">
                            <i class="fa-solid fa-earth-americas"></i> {{ $job->country }}
                        </span>
                        <span class="text-xs font-semibold text-rose-400">
                            Deadline: {{ $job->deadline ?? 'Open' }}
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-white font-heading">{{ $job->job_title }}</h3>
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span>Company: <strong class="text-slate-200">{{ $job->company ?? 'Confidential' }}</strong></span>
                        <span>•</span>
                        <span>Vacancies: <strong class="text-cyan-400">{{ $job->vacancies }} Positions</strong></span>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 text-xs text-slate-300 leading-relaxed">
                        <p class="font-bold text-slate-400 uppercase text-[10px] tracking-wider mb-1">Requirements & Experience:</p>
                        {{ $job->requirements }}
                    </div>
                </div>

                <div class="mt-6 pt-5 border-t border-slate-800 flex items-center justify-between">
                    <div>
                        <p class="text-[10px] uppercase font-bold text-slate-400">Offered Monthly Salary</p>
                        <p class="text-sm font-extrabold text-amber-400">{{ $job->salary ?? 'Negotiable' }}</p>
                    </div>

                    <div class="flex items-center gap-2">
                        @if($job->file)
                        <a href="{{ asset($job->file) }}" target="_blank" class="px-3 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-bold border border-slate-700 transition">
                            <i class="fa-solid fa-file-pdf text-rose-400"></i> Circular PDF
                        </a>
                        @endif
                        <a href="{{ route('home.contact') }}" class="px-4 py-2 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-xs transition">
                            Apply via ATTC Desk
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-2 text-center py-16 text-slate-400">
                <i class="fa-solid fa-briefcase text-4xl mb-3 text-slate-600"></i>
                <p class="text-sm font-semibold">No active circulars at the moment. Check back soon!</p>
            </div>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $circulars->links() }}
        </div>
    </div>
</section>
@endsection
