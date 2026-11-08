@extends('frontend.layouts.master')

@section('title', 'Foreign Client Interview Schedules | Asia Technical Training Center')
@section('meta_description', 'Upcoming client trade test schedules and foreign delegation visits at Asia Technical Training Center campus.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Client Interview Schedules',
    'subtitle' => 'Live recruitment and practical trade testing dates conducted by foreign employer delegations.',
    'crumbs' => ['Placement' => route('home.placement_cell'), 'Interview Schedules' => '']
])

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <div class="space-y-6">
            @forelse($interviews as $item)
                <div class="pro-card p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-3">
                            <span class="px-2.5 py-0.5 rounded text-xs font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                Trade Testing
                            </span>
                            <span class="text-xs text-[#0284c7] font-semibold">
                                <i class="fa-regular fa-calendar-check mr-1"></i> {{ $item->date }}
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-[#07172c] font-heading">{{ $item->title }}</h3>
                        <p class="text-xs text-slate-600"><strong>Target Trades:</strong> {{ $item->trades }}</p>
                        <p class="text-xs text-slate-500"><i class="fa-solid fa-location-dot text-rose-500 mr-1"></i> <strong>Testing Venue:</strong> {{ $item->venue }}</p>
                        @if($item->delegates)
                            <p class="text-xs text-slate-500"><i class="fa-solid fa-user-tie text-[#0284c7] mr-1"></i> <strong>Visiting Delegates:</strong> {{ $item->delegates }}</p>
                        @endif
                    </div>

                    <div class="flex items-center gap-3 shrink-0">
                        @if($item->file)
                            <a href="{{ asset($item->file) }}" target="_blank" class="px-4 py-2.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition flex items-center gap-1.5">
                                <i class="fa-solid fa-download text-[#0284c7]"></i> Download Schedule
                            </a>
                        @endif
                        <a href="{{ route('home.contact') }}" class="btn-primary-action px-5 py-2.5 rounded-lg text-xs font-bold">
                            Register for Trade Test
                        </a>
                    </div>
                </div>
            @empty
                <div class="text-center py-16 text-slate-500">
                    <i class="fa-solid fa-clipboard-user text-4xl mb-3 text-slate-300"></i>
                    <p class="text-sm font-semibold">No interviews scheduled for this week. Contact our hotline for upcoming batches.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $interviews->links() }}
        </div>

    </div>
</section>

@endsection
