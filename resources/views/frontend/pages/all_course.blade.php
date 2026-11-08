@extends('frontend.layouts.master')

@section('title', 'Certified Vocational Courses | Asia Technical Training Center')
@section('meta_description', 'Explore government BTEB certified vocational courses in Civil Construction, Plumbing, and Electrical trades at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Certified Industrial Trades & Courses',
    'subtitle' => 'BTEB recognized curriculum with 80% practical workshop lab hours and overseas trade testing certification.',
    'crumbs' => ['Courses' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <!-- Filter & Search Bar -->
        <div class="bg-slate-50 border border-slate-200 p-4 rounded-2xl shadow-xs flex flex-col md:flex-row items-center justify-between gap-4">
            
            <!-- Category Pills -->
            <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 scrollbar-none">
                <a href="{{ route('home.all_course') }}" 
                   class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap {{ !request('category') ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-white border border-slate-200 text-slate-700 hover:bg-slate-100' }}">
                    All Categories
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('home.all_course', ['category' => $cat->id]) }}" 
                       class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap {{ request('category') == $cat->id ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-white border border-slate-200 text-slate-700 hover:bg-slate-100' }}">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>

            <!-- Search Bar -->
            <form action="{{ route('home.all_course') }}" method="GET" class="w-full md:w-72 relative">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search course by trade or keyword..." 
                       class="w-full pl-9 pr-4 py-2 rounded-xl bg-white border border-slate-300 text-slate-800 placeholder-slate-400 text-xs focus:outline-hidden focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7]">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-slate-400 text-xs"></i>
            </form>

        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($courses as $course)
                <div class="pro-card overflow-hidden flex flex-col justify-between group">
                    <div>
                        <!-- Image Container with Badges -->
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ $course->image ? asset($course->image) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80' }}" 
                                 alt="{{ $course->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80';">
                            <div class="absolute top-3 left-3 bg-[#07172c]/90 text-white text-[11px] font-bold px-2.5 py-1 rounded-md backdrop-blur-xs flex items-center gap-1">
                                <i class="fa-regular fa-clock text-cyan-400"></i> {{ $course->duration ?? '6 month' }}
                            </div>
                            <div class="absolute top-3 right-3 bg-amber-500 text-slate-950 text-[10px] font-extrabold px-2 py-0.5 rounded shadow-xs uppercase">
                                {{ $course->bteb_level ?? 'NTVQF Level-2' }}
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-[#07172c] group-hover:text-[#0284c7] transition font-heading mb-2">
                                <a href="{{ route('home.course_details', $course->id) }}">{{ $course->name }}</a>
                            </h3>
                            <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed mb-4">
                                {{ $course->description }}
                            </p>
                            
                            <div class="flex items-center justify-between text-xs py-2.5 border-t border-slate-100">
                                <span class="text-slate-500 font-medium">Standard Fee:</span>
                                <span class="font-extrabold text-[#0284c7] text-sm">
                                    BDT {{ number_format((float)($course->Fee ?? 20000)) }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="p-6 pt-0 grid grid-cols-2 gap-3">
                        <a href="{{ route('home.course_details', $course->id) }}" class="text-center py-2.5 text-xs font-bold rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50 transition">
                            View Syllabus
                        </a>
                        <a href="{{ route('home.contact') }}#admissionForm" class="btn-primary-action text-center py-2.5 text-xs font-bold rounded-lg">
                            Apply Now
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-16 text-slate-500">
                    <p class="text-base font-semibold">No courses found matching your criteria.</p>
                    <a href="{{ route('home.all_course') }}" class="mt-2 inline-block text-xs font-bold text-[#0284c7] hover:underline">
                        Reset filter and view all courses
                    </a>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $courses->links() }}
        </div>

    </div>
</section>

@endsection
