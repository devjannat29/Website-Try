@extends('admin.admin_dashboard')

@section('title', 'Manage Interview Schedules | ATTC')

@section('admin')
<div class="space-y-8">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Overseas Interview Schedules</h1>
        <p class="text-slate-400 text-xs mt-1">Organize foreign client delegations, trade test dates, and candidate interview timetables.</p>
    </div>

    <!-- Create Schedule Form -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <h2 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
            Schedule New Foreign Client Interview
        </h2>

        <form action="{{ route('admin.upload_interview') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Company / Delegation Title *</label>
                    <input type="text" name="title" required placeholder="e.g. Al-Bawani Contracting Co. (Kingdom of Saudi Arabia)" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Trade Requirements</label>
                    <input type="text" name="trades" placeholder="e.g. 6G Pipe Welders, Industrial Electricians, HVAC Techs" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Interview Date & Time</label>
                    <input type="text" name="date" placeholder="e.g. November 10-12, 2026 (9:00 AM Daily)" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Venue Station</label>
                    <input type="text" name="venue" placeholder="e.g. ATTC Main Workshop Complex & Testing Bays" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Foreign Delegates / Board</label>
                    <input type="text" name="delegates" placeholder="e.g. Technical Director & HR Hiring Panel" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Trade Test Circular Attachment (PDF)</label>
                    <input type="file" name="file" accept=".pdf,.doc,.docx,.jpg,.png" class="w-full text-xs text-slate-400 file:mr-3 file:py-2 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                </div>
            </div>

            <div class="flex justify-end pt-2">
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Publish Interview Schedule
                </button>
            </div>
        </form>
    </div>

    <!-- Interviews List -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        <h2 class="text-lg font-bold text-white mb-4">Scheduled Client Interviews ({{ $interviews->total() }})</h2>

        @if($interviews->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Delegation Title</th>
                            <th scope="col" class="px-4 py-3.5">Trades Needed</th>
                            <th scope="col" class="px-4 py-3.5">Schedule</th>
                            <th scope="col" class="px-4 py-3.5">Venue</th>
                            <th scope="col" class="px-4 py-3.5">Circular</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($interviews as $item)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4 font-bold text-white">
                                    {{ $item->title }}
                                    <span class="block text-[11px] font-normal text-slate-400">{{ $item->delegates ?? 'Hiring Board' }}</span>
                                </td>
                                <td class="px-4 py-4 text-xs font-semibold text-amber-400">
                                    {{ $item->trades }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-300">
                                    {{ $item->date }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-400">
                                    {{ $item->venue }}
                                </td>
                                <td class="px-4 py-4">
                                    @if($item->file)
                                        <a href="{{ route('admin.download_interview', $item->id) }}" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-emerald-500/10 text-emerald-400 hover:bg-emerald-500 hover:text-white border border-emerald-500/20 text-xs transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                            PDF
                                        </a>
                                    @else
                                        <span class="text-xs text-slate-600">None</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <a href="{{ route('admin.delete_interview', $item->id) }}" 
                                       onclick="return confirm('Are you sure you want to delete this interview schedule?')" 
                                       class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors inline-block"
                                       title="Delete Schedule">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $interviews->links() }}
            </div>
        @else
            <div class="text-center py-12 text-slate-500 text-xs">
                No client interviews scheduled yet.
            </div>
        @endif
    </div>

</div>
@endsection
