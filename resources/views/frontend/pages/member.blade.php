@extends('frontend.layouts.master')

@section('title', 'Faculties & Management | Asia Technical Training Center')
@section('meta_description', 'Meet the leadership, management, and certified technical instructors of Asia Technical Training Center (ATTC).')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Our Faculties & Management',
    'subtitle' => 'Meet our certified master instructors and institutional leadership shaping technical craftsmen since 1985.',
    'crumbs' => ['About Us' => route('home.about_us'), 'Faculties & Management' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Cards Grid (User requirement: OUR FACULTIES & MANAGEMENT are in card) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($members as $m)
                <!-- Professional Member Card (Guaranteed Full Portrait Display on Large Screens) -->
                <div class="pro-card overflow-hidden group flex flex-col justify-between bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-xl hover:border-slate-300 transition-all duration-300">
                    
                    <!-- Proportional 4:5 Portrait Frame: Guarantees full head, chin, neck & shoulders with zero distortion -->
                    <div class="relative w-full overflow-hidden bg-slate-900 flex items-center justify-center" style="aspect-ratio: 4 / 5; min-height: 380px;">
                        
                        <!-- Ambient blurred background matching the photo tone for any irregular upload -->
                        <img src="{{ $m->image ? (str_starts_with($m->image, 'http') ? $m->image : asset($m->image)) : asset('upload/member/member_1.jpg') }}" 
                             alt="" 
                             class="absolute inset-0 w-full h-full object-cover blur-md opacity-35 scale-110 pointer-events-none select-none" 
                             aria-hidden="true">

                        <!-- Main Crisp Photo: object-top keeps hair, forehead, eyes, nose, mouth and chin fully visible -->
                        <img src="{{ $m->image ? (str_starts_with($m->image, 'http') ? $m->image : asset($m->image)) : asset('upload/member/member_1.jpg') }}" 
                             alt="{{ $m->name }}" 
                             class="relative z-10 w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                             onerror="this.onerror=null; this.src='{{ asset('upload/member/member_1.jpg') }}';">
                        
                        <!-- Bottom Gradient Shade -->
                        <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-[#07172c]/70 via-transparent to-transparent pointer-events-none z-10"></div>

                        <!-- Top Designation Badge -->
                        <div class="absolute top-3.5 left-3.5 z-20 bg-[#07172c]/95 text-amber-400 font-bold text-[11px] sm:text-xs px-3 py-1 rounded-md backdrop-blur-md shadow-md border border-amber-400/20 uppercase tracking-wide">
                            {{ $m->designation }}
                        </div>
                    </div>

                    <div class="p-6 text-center space-y-2 flex-grow flex flex-col justify-between bg-white">
                        <div class="space-y-1">
                            <h3 class="text-lg sm:text-xl font-bold text-[#07172c] font-heading group-hover:text-[#0284c7] transition duration-200">
                                {{ $m->name }}
                            </h3>
                            <p class="text-xs font-semibold text-[#0284c7] uppercase tracking-wider">
                                {{ $m->department ?? 'Management' }}
                            </p>
                            <p class="text-xs text-slate-500 font-medium">
                                <i class="fa-solid fa-graduation-cap text-[#0284c7]/80 mr-1.5"></i> {{ $m->education ?? 'Engineering Expert' }}
                            </p>
                        </div>

                        <!-- Contact / Social Links -->
                        <div class="pt-4 flex items-center justify-center space-x-2.5 border-t border-slate-100">
                            <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition duration-200 shadow-2xs" title="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition duration-200 shadow-2xs" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:asiatechnicalbd@gmail.com" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition duration-200 shadow-2xs" title="Email">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-16 text-slate-400">
                    <p class="text-sm font-semibold">Faculty directory will be updated soon.</p>
                </div>
            @endforelse
        </div>

        <!-- Directory Table View for Formal Accreditation Inspection -->
        <div class="pro-card p-6 sm:p-8 space-y-4">
            <div class="border-b border-slate-200 pb-3">
                <h3 class="text-lg font-bold text-[#07172c] font-heading">
                    Official Faculty & Staff Register
                </h3>
                <p class="text-xs text-slate-500">
                    BTEB RTO Center Code 50821 certified faculty appointments.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-slate-600">
                    <thead class="bg-slate-50 text-slate-700 uppercase font-bold border-b border-slate-200">
                        <tr>
                            <th class="px-4 py-3">Faculty / Officer Name</th>
                            <th class="px-4 py-3">Designation</th>
                            <th class="px-4 py-3">Department</th>
                            <th class="px-4 py-3">Educational Qualification</th>
                            <th class="px-4 py-3 text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($members as $m)
                            <tr class="hover:bg-slate-50/80 transition">
                                <td class="px-4 py-3 font-bold text-[#07172c] flex items-center gap-2">
                                    <div class="w-7 h-7 rounded-full bg-slate-200 overflow-hidden shrink-0">
                                        <img src="{{ $m->image ? asset($m->image) : 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80' }}" class="w-full h-full object-cover">
                                    </div>
                                    <span>{{ $m->name }}</span>
                                </td>
                                <td class="px-4 py-3 font-semibold text-slate-700">{{ $m->designation }}</td>
                                <td class="px-4 py-3 text-[#0284c7] font-medium">{{ $m->department }}</td>
                                <td class="px-4 py-3 text-slate-500">{{ $m->education ?? 'Engineering Diploma' }}</td>
                                <td class="px-4 py-3 text-right">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        Active
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection
