@extends('admin.admin_dashboard')

@section('title', 'Manage Course Categories | ATTC')

@section('admin')
<div class="space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-white">Course Categories & Departments</h1>
            <p class="text-slate-400 text-xs mt-1">Organize vocational trades, diplomas, and BTEB training departments.</p>
        </div>
        <a href="{{ route('admin.add_category') }}" class="px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs transition-all shadow-lg shadow-blue-500/20 flex items-center gap-1.5 self-start sm:self-auto">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add New Category
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        @if($categories->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Department / Category</th>
                            <th scope="col" class="px-4 py-3.5">Image Thumbnail</th>
                            <th scope="col" class="px-4 py-3.5">Assigned Courses</th>
                            <th scope="col" class="px-4 py-3.5">Created Date</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($categories as $cat)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4 font-bold text-white">
                                    {{ $cat->name }}
                                </td>
                                <td class="px-4 py-4">
                                    <div class="w-12 h-12 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 shrink-0">
                                        @if($cat->image && file_exists(public_path($cat->image)))
                                            <img src="{{ asset($cat->image) }}" alt="{{ $cat->name }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-xs font-bold text-slate-600 bg-slate-900">
                                                N/A
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                        {{ $cat->courses_count ?? 0 }} Courses
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-400">
                                    {{ $cat->created_at ? $cat->created_at->format('M d, Y') : 'N/A' }}
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <div class="inline-flex items-center gap-2">
                                        <a href="{{ route('admin.update_category', $cat->id) }}" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-blue-400 hover:bg-slate-800 transition-colors"
                                           title="Edit Category">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        </a>
                                        <a href="{{ route('admin.delete_category', $cat->id) }}" 
                                           onclick="return confirm('Are you sure you want to delete this category? Associated courses may be impacted.')" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors"
                                           title="Delete Category">
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
                {{ $categories->links() }}
            </div>
        @else
            <div class="text-center py-16 text-slate-500 text-xs">
                No categories created yet. Click "Add New Category" above to create one.
            </div>
        @endif
    </div>

</div>
@endsection
