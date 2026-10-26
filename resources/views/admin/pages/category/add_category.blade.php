@extends('admin.admin_dashboard')

@section('title', 'Add Course Category | ATTC')

@section('admin')
<div class="max-w-2xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Create Course Department</h1>
            <p class="text-slate-400 text-xs mt-1">Add a new technical department or training category.</p>
        </div>
        <a href="{{ route('admin.view_category') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Categories
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.upload_category') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Category / Department Title *</label>
                <input type="text" name="name" required placeholder="e.g. Electrical & Industrial Automation" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Department Banner Image</label>
                <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                <p class="text-[11px] text-slate-500 mt-1">Recommended size: 800x600px. JPG, PNG or WebP.</p>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.view_category') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Save Category
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
