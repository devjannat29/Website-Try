@extends('admin.admin_dashboard')

@section('title', 'Manage Job Circulars | ATTC')

@section('admin')
<div class="space-y-8">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Overseas Job Opportunities & Circulars</h1>
        <p class="text-slate-400 text-xs mt-1">Post international employment vacancies, technical qualifications, salary packages, and employer notices.</p>
    </div>

    <!-- Create Circular Form -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <h2 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            Publish New Job Circular
        </h2>

        <form action="{{ route('admin.upload_job_circular') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Job Title / Technical Role *</label>
                    <input type="text" name="job_title" required placeholder="e.g. Certified 6G SMAW/TIG Pipe Welder" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Industry Sector</label>
                    <select name="category" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->category_title }}">{{ $cat->category_title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Hiring Company</label>
                    <input type="text" name="company" placeholder="e.g. Petrofac / CCC Engineering" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Country Destination</label>
                    <input type="text" name="country" placeholder="e.g. Saudi Arabia / UAE / Qatar" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Salary Package</label>
                    <input type="text" name="salary" placeholder="e.g. SAR 2,800 - 3,500 + OT" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Application Deadline</label>
                    <input type="text" name="deadline" placeholder="e.g. November 30, 2026" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Vacancies Count</label>
                    <input type="number" name="vacancies" value="15" min="1" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Circular Attachment (PDF / Image)</label>
                    <input type="file" name="file" accept=".pdf,.doc,.docx,.jpg,.png" class="w-full text-xs text-slate-400 file:mr-3 file:py-2 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Candidate Qualifications & Job Requirements</label>
                <textarea name="requirements" rows="3" placeholder="Must possess BTEB trade certificate or 3G/6G qualification, valid passport, minimum 2 years experience..." class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all"></textarea>
            </div>

            <div class="flex justify-end pt-2">
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Post Job Circular
                </button>
            </div>
        </form>
    </div>

    <!-- Circulars List -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        <h2 class="text-lg font-bold text-white mb-4">Active Circulars ({{ $circulars->total() }})</h2>

        @if($circulars->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Role & Company</th>
                            <th scope="col" class="px-4 py-3.5">Country</th>
                            <th scope="col" class="px-4 py-3.5">Salary</th>
                            <th scope="col" class="px-4 py-3.5">Vacancies</th>
                            <th scope="col" class="px-4 py-3.5">Deadline</th>
                            <th scope="col" class="px-4 py-3.5">PDF</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($circulars as $item)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4">
                                    <span class="font-bold text-white block">{{ $item->job_title }}</span>
                                    <span class="text-xs text-slate-400">{{ $item->company ?? 'Overseas Client' }} &bull; {{ $item->category ?? 'Technical' }}</span>
                                </td>
                                <td class="px-4 py-4 text-xs font-semibold text-blue-400">
                                    {{ $item->country ?? 'Overseas' }}
                                </td>
                                <td class="px-4 py-4 text-xs font-semibold text-emerald-400">
                                    {{ $item->salary ?? 'Negotiable' }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-300">
                                    {{ $item->vacancies ?? 'Multiple' }}
                                </td>
                                <td class="px-4 py-4 text-xs text-amber-400">
                                    {{ $item->deadline ?? 'Open' }}
                                </td>
                                <td class="px-4 py-4">
                                    @if($item->file)
                                        <a href="{{ route('admin.download_job_circular', $item->id) }}" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-emerald-500/10 text-emerald-400 hover:bg-emerald-500 hover:text-white border border-emerald-500/20 text-xs transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                            PDF
                                        </a>
                                    @else
                                        <span class="text-xs text-slate-600">None</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <a href="{{ route('admin.delete_job_circular', $item->id) }}" 
                                       onclick="return confirm('Are you sure you want to delete this job circular?')" 
                                       class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors inline-block"
                                       title="Delete Circular">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $circulars->links() }}
            </div>
        @else
            <div class="text-center py-12 text-slate-500 text-xs">
                No job circulars published yet.
            </div>
        @endif
    </div>

</div>
@endsection
