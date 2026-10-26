@extends('admin.admin_dashboard')

@section('title', 'Student Admission Inquiries | ATTC')

@section('admin')
<div class="space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-white">Online Admission Applications</h1>
            <p class="text-slate-400 text-xs mt-1">Review applicant contact details, desired trade, shift preferences, and manage admission approvals.</p>
        </div>
        <div class="flex items-center gap-2">
            <span class="px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-xs font-semibold text-slate-300">
                Total Submissions: <span class="text-blue-400 font-bold">{{ $applications->total() }}</span>
            </span>
        </div>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        @if($applications->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Applicant Name</th>
                            <th scope="col" class="px-4 py-3.5">Contact Phone</th>
                            <th scope="col" class="px-4 py-3.5">Applied Course</th>
                            <th scope="col" class="px-4 py-3.5">Shift & Hostel</th>
                            <th scope="col" class="px-4 py-3.5">Address</th>
                            <th scope="col" class="px-4 py-3.5">Status</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($applications as $app)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4 font-bold text-white">
                                    {{ $app->applicant_name }}
                                    <span class="block text-[11px] font-normal text-slate-500">Applied {{ $app->created_at ? $app->created_at->diffForHumans() : 'Recently' }}</span>
                                </td>
                                <td class="px-4 py-4 font-mono text-slate-200">
                                    <a href="tel:{{ $app->phone }}" class="text-blue-400 hover:underline">{{ $app->phone }}</a>
                                </td>
                                <td class="px-4 py-4 font-semibold text-slate-200">
                                    {{ $app->course_name }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-400">
                                    <span class="px-2 py-0.5 rounded-md bg-slate-800 text-slate-300">{{ $app->shift ?? 'Morning' }}</span>
                                    <span class="ml-1 px-2 py-0.5 rounded-md bg-slate-800 {{ $app->hostel == 'Yes' ? 'text-amber-400' : 'text-slate-400' }}">Hostel: {{ $app->hostel ?? 'No' }}</span>
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-400 max-w-xs truncate" title="{{ $app->address }}">
                                    {{ $app->address ?? 'N/A' }}
                                </td>
                                <td class="px-4 py-4">
                                    <form action="{{ route('admin.update_application_status', $app->id) }}" method="POST">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()" class="bg-slate-950 border border-slate-700 rounded-lg text-xs py-1 px-2.5 font-medium {{ $app->status === 'approved' ? 'text-emerald-400 border-emerald-500/50' : ($app->status === 'enrolled' ? 'text-blue-400 border-blue-500/50' : ($app->status === 'rejected' ? 'text-rose-400 border-rose-500/50' : 'text-amber-400 border-amber-500/50')) }} focus:outline-none">
                                            <option value="pending" {{ $app->status === 'pending' ? 'selected' : '' }}>Pending Review</option>
                                            <option value="approved" {{ $app->status === 'approved' ? 'selected' : '' }}>Approve Admission</option>
                                            <option value="enrolled" {{ $app->status === 'enrolled' ? 'selected' : '' }}>Mark Enrolled</option>
                                            <option value="rejected" {{ $app->status === 'rejected' ? 'selected' : '' }}>Reject</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <a href="{{ route('admin.delete_application', $app->id) }}" 
                                       onclick="return confirm('Are you sure you want to delete this applicant inquiry record?')" 
                                       class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors inline-block"
                                       title="Delete Record">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $applications->links() }}
            </div>
        @else
            <div class="text-center py-16 text-slate-500 text-xs">
                No admission inquiries found.
            </div>
        @endif
    </div>

</div>
@endsection
