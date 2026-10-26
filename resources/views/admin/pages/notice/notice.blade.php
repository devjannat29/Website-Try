@extends('admin.admin_dashboard')

@section('title', 'Manage Official Notices | ATTC')

@section('admin')
<div class="space-y-8">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Notice Board & Official Circulars</h1>
        <p class="text-slate-400 text-xs mt-1">Publish BTEB examination routines, admission schedules, and administrative memos.</p>
    </div>

    <!-- Create Notice Form Card -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <h2 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
            Publish New Official Notice
        </h2>

        <form action="{{ route('admin.upload_notice') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Notice Headline *</label>
                    <input type="text" name="title" required placeholder="e.g. Schedule for NTVQF Level-3 Final Practical Trade Assessment" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Category</label>
                    <input type="text" name="category" placeholder="e.g. Exam / Admission" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Publish Date</label>
                    <input type="text" name="date" value="{{ date('F d, Y') }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Notice Badge</label>
                    <input type="text" name="badge" placeholder="e.g. Urgent / New / BTEB" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Attach Official PDF / File</label>
                    <input type="file" name="file" accept=".pdf,.doc,.docx,.jpg,.png" class="w-full text-xs text-slate-400 file:mr-3 file:py-2 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Notice Summary / Notes</label>
                <textarea name="summary" rows="3" placeholder="Brief explanation or advisory notes for trainees..." class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all"></textarea>
            </div>

            <div class="flex justify-end pt-2">
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Post Notice to Bulletin
                </button>
            </div>
        </form>
    </div>

    <!-- Notices Listing Table -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        <h2 class="text-lg font-bold text-white mb-4">Published Notices ({{ $notices->total() }})</h2>

        @if($notices->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Headline</th>
                            <th scope="col" class="px-4 py-3.5">Category</th>
                            <th scope="col" class="px-4 py-3.5">Date</th>
                            <th scope="col" class="px-4 py-3.5">Attachment</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($notices as $item)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4 font-bold text-white max-w-md">
                                    {{ $item->title }}
                                    @if($item->badge)
                                        <span class="ml-2 px-2 py-0.5 rounded text-[10px] font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">{{ $item->badge }}</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-xs font-semibold text-blue-400">
                                    {{ $item->category ?? 'General' }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-300">
                                    {{ $item->date ?? $item->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-4 py-4">
                                    @if($item->file)
                                        <a href="{{ route('admin.download', $item->id) }}" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-emerald-500/10 text-emerald-400 hover:bg-emerald-500 hover:text-white border border-emerald-500/20 text-xs transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                            PDF
                                        </a>
                                    @else
                                        <span class="text-xs text-slate-600">None</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <a href="{{ route('admin.delete_notice', $item->id) }}" 
                                       onclick="return confirm('Are you sure you want to remove this notice?')" 
                                       class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors inline-block"
                                       title="Delete Notice">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $notices->links() }}
            </div>
        @else
            <div class="text-center py-12 text-slate-500 text-xs">
                No notices published yet. Use the form above to post announcements.
            </div>
        @endif
    </div>

</div>
@endsection
