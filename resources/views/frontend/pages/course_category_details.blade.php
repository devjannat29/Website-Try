@extends('frontend.layouts.master')

@section('title', $category->name . ' Courses | Asia Technical Training Center')
@section('meta_description', 'Certified vocational courses under ' . $category->name . ' at Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => $category->name . ' Department',
    'subtitle' => 'Explore certified vocational trades and curriculum offered under the ' . $category->name . ' faculty.',
    'crumbs' => ['Courses' => route('home.all_course'), $category->name => '']
])

<section class="py-16 bg-white" 
         x-data="{
            searchQuery: '{{ addslashes(request('search', '')) }}',
            activeTab: '{{ request('type', request('pricing', 'all')) }}',
            activeCategory: '{{ $category->id }}',
            matches(courseType, pricingType, category, name, desc) {
                // Search query filter
                if (this.searchQuery.trim() !== '') {
                    const q = this.searchQuery.toLowerCase().trim();
                    if (!name.toLowerCase().includes(q) && !desc.toLowerCase().includes(q)) return false;
                }

                // Category filter
                if (this.activeCategory !== 'all' && String(category) !== String(this.activeCategory)) return false;

                // Program type / pricing filter
                if (this.activeTab === 'all') return true;
                if (this.activeTab === 'short_course') return courseType === 'short_course';
                if (this.activeTab === 'rpl') return courseType === 'rpl';
                if (this.activeTab === 'free') return pricingType === 'free';
                if (this.activeTab === 'paid') return pricingType === 'paid';
                return true;
            }
         }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        
        <!-- Header & Instant Search Bar (Certified Curriculum Section) -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-2 border-b border-slate-100">
            <div>
                <div class="section-label">Certified Curriculum</div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#07172c] mt-2 tracking-tight">
                    Courses & Training Programs
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    BTEB recognized Short Courses, RPL Trade Testing, and Government Free Training.
                </p>
            </div>

            <!-- Instant Search Bar -->
            <div class="relative w-full md:w-80">
                <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-3 text-slate-400 text-xs"></i>
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Instant search by trade name..." 
                       class="w-full pl-9 pr-8 py-2.5 text-xs rounded-xl border border-slate-300 bg-slate-50 focus:bg-white focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] outline-hidden transition shadow-2xs">
                <button x-show="searchQuery.length > 0" @click="searchQuery = ''" class="absolute right-2.5 top-2.5 text-slate-400 hover:text-slate-600 text-xs cursor-pointer">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

        <!-- Course Type & Pricing Tabs (Short Course, RPL, Free, Paid) -->
        <div class="flex items-center gap-2 overflow-x-auto pb-2 scrollbar-none">
            <button @click="activeTab = 'all'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap cursor-pointer"
                    :class="activeTab === 'all' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                All Courses ({{ count($courses) }})
            </button>
            <button @click="activeTab = 'short_course'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap flex items-center gap-1.5 cursor-pointer"
                    :class="activeTab === 'short_course' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                <i class="fa-solid fa-clock-rotate-left text-xs"></i> Short Courses
            </button>
            <button @click="activeTab = 'rpl'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap flex items-center gap-1.5 cursor-pointer"
                    :class="activeTab === 'rpl' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                <i class="fa-solid fa-stamp text-xs text-amber-500"></i> RPL (Prior Learning)
            </button>
            <button @click="activeTab = 'free'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap flex items-center gap-1.5 cursor-pointer"
                    :class="activeTab === 'free' ? 'bg-emerald-600 text-white shadow-xs' : 'bg-emerald-50 text-emerald-800 border border-emerald-200 hover:bg-emerald-100'">
                <i class="fa-solid fa-gift text-xs"></i> Free (Govt. Subsidized)
            </button>
            <button @click="activeTab = 'paid'" 
                    class="px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap cursor-pointer"
                    :class="activeTab === 'paid' ? 'bg-[#0284c7] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                Paid Professional
            </button>
        </div>

        <!-- Category Department Pills (Electrical, English, Civil, Plumbing, Safety, HVAC, etc.) -->
        <div class="flex items-center gap-2 overflow-x-auto pb-4 scrollbar-none">
            <span class="text-[11px] font-black text-slate-400 uppercase tracking-wider shrink-0 mr-1 flex items-center gap-1">
                <i class="fa-solid fa-layer-group text-[#0284c7]"></i> Trades:
            </span>
            <button @click="activeCategory = 'all'" 
                    class="px-3.5 py-1.5 rounded-lg text-xs font-bold transition whitespace-nowrap cursor-pointer"
                    :class="activeCategory === 'all' ? 'bg-[#07172c] text-white shadow-2xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                All Trades
            </button>
            @foreach($categories as $cat)
                <button @click="activeCategory = '{{ $cat->id }}'" 
                        class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition whitespace-nowrap cursor-pointer flex items-center gap-1.5"
                        :class="activeCategory === '{{ $cat->id }}' ? 'bg-[#07172c] text-white shadow-2xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                    {{ $cat->name }}
                </button>
            @endforeach
        </div>

        <!-- Courses Grid (Instant Client-side Filtered) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($courses as $course)
                <div x-show="matches('{{ $course->course_type ?? 'short_course' }}', '{{ $course->pricing_type ?? 'paid' }}', '{{ $course->category }}', '{{ addslashes($course->name) }}', '{{ addslashes($course->description ?? '') }}')" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="pro-card overflow-hidden flex flex-col justify-between group">
                    <div>
                        <!-- Image Container with Badges -->
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ $course->image ? (str_starts_with($course->image, 'http') ? $course->image : asset($course->image)) : 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80' }}" 
                                 alt="{{ $course->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80';">
                            
                            <!-- Duration Badge -->
                            <div class="absolute top-3 left-3 bg-[#07172c]/90 text-white text-[11px] font-bold px-2.5 py-1 rounded-md backdrop-blur-xs flex items-center gap-1 shadow-xs">
                                <i class="fa-regular fa-clock text-cyan-400"></i> {{ $course->duration ?? '6 month' }}
                            </div>

                            <!-- Course Type & Pricing Tag -->
                            <div class="absolute top-3 right-3 flex flex-col items-end gap-1">
                                @if(($course->pricing_type ?? 'paid') === 'free' || (int)($course->Fee ?? 0) === 0)
                                    <span class="bg-emerald-600 text-white text-[10px] font-black px-2.5 py-0.5 rounded shadow-xs uppercase tracking-wider">
                                        FREE (Govt)
                                    </span>
                                @elseif(($course->course_type ?? 'short_course') === 'rpl')
                                    <span class="bg-amber-500 text-slate-950 text-[10px] font-black px-2 py-0.5 rounded shadow-xs uppercase tracking-wider">
                                        RPL Trade
                                    </span>
                                @else
                                    <span class="bg-sky-600 text-white text-[10px] font-bold px-2 py-0.5 rounded shadow-xs uppercase tracking-wider">
                                        Short Course
                                    </span>
                                @endif
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
                                <span class="text-slate-500 font-medium">Training Fee:</span>
                                @if(($course->pricing_type ?? 'paid') === 'free' || (int)($course->Fee ?? 0) === 0)
                                    <span class="font-extrabold text-emerald-600 text-sm">
                                        100% Free
                                    </span>
                                @else
                                    <span class="font-extrabold text-[#0284c7] text-sm">
                                        BDT {{ number_format((float)($course->Fee ?? 20000)) }}
                                    </span>
                                @endif
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
                    <p class="text-base font-semibold">No courses listed under this department yet.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

@endsection
