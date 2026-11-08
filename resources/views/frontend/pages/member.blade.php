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
                <div class="pro-card overflow-hidden group">
                    <div class="relative h-64 sm:h-72 overflow-hidden bg-slate-200">
                        <img src="{{ $m->image ? asset($m->image) : 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80' }}" 
                             alt="{{ $m->name }}" 
                             class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105"
                             onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80';">
                        
                        <!-- Top Designation Badge -->
                        <div class="absolute top-3 left-3 bg-[#07172c]/90 text-amber-400 font-bold text-xs px-3 py-1 rounded-md backdrop-blur-xs shadow-sm">
                            {{ $m->designation }}
                        </div>
                    </div>

                    <div class="p-6 text-center space-y-2.5">
                        <h3 class="text-xl font-bold text-[#07172c] font-heading group-hover:text-[#0284c7] transition">
                            {{ $m->name }}
                        </h3>
                        <p class="text-xs font-bold text-[#0284c7]">
                            {{ $m->department ?? 'Management' }}
                        </p>
                        <p class="text-xs text-slate-500">
                            <i class="fa-solid fa-graduation-cap text-slate-400 mr-1"></i> {{ $m->education ?? 'Engineering Expert' }}
                        </p>

                        <!-- Contact / Social Links -->
                        <div class="pt-4 flex items-center justify-center space-x-2 border-t border-slate-100">
                            <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:asiatechnicalbd@gmail.com" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-[#0284c7] hover:text-white text-slate-500 flex items-center justify-center text-xs transition">
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
