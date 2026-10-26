@extends('frontend.layouts.master')

@section('title', $category->name . ' - Courses & Trades | ATTC')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Department</span>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white mt-3 font-heading">{{ $category->name }}</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-2">All certified trade courses conducted under the {{ $category->name }} department at ATTC.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($courses as $course)
            <div class="rounded-2xl bg-slate-900 border border-slate-800 overflow-hidden hover:border-slate-700 transition duration-300 flex flex-col group shadow-xl">
                <div class="relative h-48 overflow-hidden bg-slate-800">
                    <img src="{{ $course->image ? (str_starts_with($course->image, 'http') ? $course->image : asset($course->image)) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80' }}" 
                         alt="{{ $course->name }}" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="px-2.5 py-1 rounded-lg text-[10px] font-extrabold bg-cyan-500/90 text-slate-950 uppercase tracking-wider shadow">
                            {{ $course->bteb_level ?? 'NTVQF Certified' }}
                        </span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-950/90 text-amber-400 border border-slate-800">
                            {{ $course->Fee ?? '30,000 BDT' }}
                        </span>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div>
                        <div class="flex items-center gap-2 text-xs text-slate-400 mb-2">
                            <span class="flex items-center gap-1"><i class="fa-regular fa-clock text-cyan-400"></i> {{ $course->duration }}</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-wrench text-cyan-400"></i> Workshop Practical</span>
                        </div>
                        <h3 class="text-base font-bold text-white group-hover:text-cyan-400 transition font-heading">
                            <a href="{{ route('home.course_details', $course->id) }}">{{ $course->name }}</a>
                        </h3>
                        <p class="text-xs text-slate-400 line-clamp-2 mt-2 leading-relaxed">
                            {{ $course->description }}
                        </p>
                    </div>

                    <div class="pt-3 border-t border-slate-800 flex items-center justify-between gap-3">
                        <a href="{{ route('home.course_details', $course->id) }}" class="text-xs font-bold text-slate-300 hover:text-cyan-400 transition">
                            View Syllabus <i class="fa-solid fa-arrow-right text-[10px] ml-1"></i>
                        </a>
                        <a href="{{ route('home.index') }}#admissionForm" class="px-3 py-1.5 rounded-lg bg-cyan-500/10 hover:bg-cyan-500 text-cyan-400 hover:text-slate-950 font-bold text-xs border border-cyan-500/30 transition">
                            Apply Seat
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-16 text-slate-400">
                <i class="fa-solid fa-folder-open text-4xl mb-3 text-slate-600"></i>
                <p class="text-sm font-semibold">No courses found in this category yet.</p>
                <a href="{{ route('home.all_course') }}" class="text-xs text-cyan-400 mt-2 inline-block hover:underline">View All Courses</a>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
