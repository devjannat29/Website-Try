@extends('admin.admin_dashboard')

@section('title', 'Manage Events & Seminars | ATTC')

@section('admin')
<div class="space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-white">Technical Workshops & Events</h1>
            <p class="text-slate-400 text-xs mt-1">Schedule industrial safety seminars, trade testing summits, and foreign recruitment delegations.</p>
        </div>
        <a href="{{ route('admin.add_event') }}" class="px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs transition-all shadow-lg shadow-blue-500/20 flex items-center gap-1.5 self-start sm:self-auto">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Schedule New Event
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        @if($events->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Event Title</th>
                            <th scope="col" class="px-4 py-3.5">Date & Time</th>
                            <th scope="col" class="px-4 py-3.5">Venue Location</th>
                            <th scope="col" class="px-4 py-3.5">Status</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($events as $event)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 shrink-0">
                                            @if($event->image && file_exists(public_path($event->image)))
                                                <img src="{{ asset($event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-xs font-bold text-slate-600 bg-slate-900">
                                                    N/A
                                                </div>
                                            @endif
                                        </div>
                                        <span class="font-bold text-white block">{{ $event->title }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-xs font-medium text-slate-200">
                                    {{ $event->date ?? 'TBA' }} <br>
                                    <span class="text-slate-500">{{ $event->time ?? '10:00 AM' }}</span>
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-300">
                                    {{ $event->venue ?? 'Campus Auditorium' }}
                                </td>
                                <td class="px-4 py-4">
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                        {{ ucfirst($event->status ?? 'Upcoming') }}
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <div class="inline-flex items-center gap-2">
                                        <a href="{{ route('admin.edit_event', $event->id) }}" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-blue-400 hover:bg-slate-800 transition-colors"
                                           title="Edit Event">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        </a>
                                        <a href="{{ route('admin.delete_event', $event->id) }}" 
                                           onclick="return confirm('Are you sure you want to delete this event?')" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors"
                                           title="Delete Event">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $events->links() }}
            </div>
        @else
            <div class="text-center py-16 text-slate-500 text-xs">
                No events currently scheduled.
            </div>
        @endif
    </div>

</div>
@endsection
