@extends('admin.admin_dashboard')

@section('title', 'Manage Faculty Members | ATTC')

@section('admin')
<div class="space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-white">Faculty & Chief Instructors</h1>
            <p class="text-slate-400 text-xs mt-1">Manage vocational trainers, BTEB certified instructors, and workshop master craftsmen.</p>
        </div>
        <a href="{{ route('admin.add_member') }}" class="px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs transition-all shadow-lg shadow-blue-500/20 flex items-center gap-1.5 self-start sm:self-auto">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Faculty Member
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        @if($members->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Instructor Name</th>
                            <th scope="col" class="px-4 py-3.5">Designation</th>
                            <th scope="col" class="px-4 py-3.5">Department</th>
                            <th scope="col" class="px-4 py-3.5">Credentials & Exp</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($members as $member)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-11 h-11 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 shrink-0">
                                            @if($member->image && file_exists(public_path($member->image)))
                                                <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-xs font-bold text-white bg-blue-600">
                                                    {{ strtoupper(substr($member->name, 0, 1)) }}
                                                </div>
                                            @endif
                                        </div>
                                        <span class="font-bold text-white block">{{ $member->name }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-xs font-semibold text-blue-400">
                                    {{ $member->designation }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-300">
                                    {{ $member->department ?? 'General Engineering' }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-400">
                                    <span class="text-slate-300 block">{{ $member->education ?? 'B.Sc / Diploma' }}</span>
                                    <span class="text-slate-500">{{ $member->experience ?? '5+ Years' }}</span>
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <div class="inline-flex items-center gap-2">
                                        <a href="{{ route('admin.edit_member', $member->id) }}" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-blue-400 hover:bg-slate-800 transition-colors"
                                           title="Edit Member">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        </a>
                                        <a href="{{ route('admin.delete_member', $member->id) }}" 
                                           onclick="return confirm('Are you sure you want to remove this faculty record?')" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors"
                                           title="Delete Member">
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
                {{ $members->links() }}
            </div>
        @else
            <div class="text-center py-16 text-slate-500 text-xs">
                No faculty members registered yet.
            </div>
        @endif
    </div>

</div>
@endsection
