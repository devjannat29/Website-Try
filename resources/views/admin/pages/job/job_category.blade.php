@extends('admin.admin_dashboard')

@section('title', 'Manage Job Categories | ATTC')

@section('admin')
<div class="space-y-8">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Job Categories & Overseas Sectors</h1>
        <p class="text-slate-400 text-xs mt-1">Classify employment circulars by technical sector (e.g. Oil & Gas, Construction, Marine, Hospitality).</p>
    </div>

    <!-- Create Category Form -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <h2 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
            Add New Job Category
        </h2>

        <form action="{{ route('admin.upload_job_category') }}" method="POST" class="flex flex-col sm:flex-row gap-3">
            @csrf
            <div class="flex-1">
                <input type="text" name="category_title" required placeholder="e.g. Oil & Gas Piping & Refinery" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>
            <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all shrink-0">
                Create Category
            </button>
        </form>
    </div>

    <!-- Job Categories List -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        <h2 class="text-lg font-bold text-white mb-4">Job Categories ({{ $categories->total() }})</h2>

        @if($categories->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Category Title</th>
                            <th scope="col" class="px-4 py-3.5">Active Circulars</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($categories as $cat)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4 font-bold text-white">
                                    {{ $cat->category_title }}
                                </td>
                                <td class="px-4 py-4">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                        {{ $cat->circulars_count ?? 0 }} Circulars
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <a href="{{ route('admin.delete_job_category', $cat->id) }}" 
                                       onclick="return confirm('Are you sure you want to delete this job category?')" 
                                       class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors inline-block"
                                       title="Delete Category">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $categories->links() }}
            </div>
        @else
            <div class="text-center py-12 text-slate-500 text-xs">
                No job categories created yet.
            </div>
        @endif
    </div>

</div>
@endsection
