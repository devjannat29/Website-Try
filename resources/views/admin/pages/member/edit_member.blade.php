@extends('admin.admin_dashboard')

@section('title', 'Edit Faculty Member | ATTC')

@section('admin')
<div class="max-w-2xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Edit Faculty Member</h1>
            <p class="text-slate-400 text-xs mt-1">Update credentials and details for {{ $member->name }}.</p>
        </div>
        <a href="{{ route('admin.view_member') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Faculty
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.update_member', $member->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Trainer Full Name *</label>
                    <input type="text" name="name" value="{{ old('name', $member->name) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Designation / Role *</label>
                    <input type="text" name="designation" value="{{ old('designation', $member->designation) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Department</label>
                    <input type="text" name="department" value="{{ old('department', $member->department) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Education / BTEB Level</label>
                    <input type="text" name="education" value="{{ old('education', $member->education) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Industry Experience</label>
                    <input type="text" name="experience" value="{{ old('experience', $member->experience) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Current Photo</label>
                @if($member->image && file_exists(public_path($member->image)))
                    <div class="w-20 h-20 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 mb-3">
                        <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                    </div>
                @endif
                <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                <p class="text-[11px] text-slate-500 mt-1">Leave empty to keep existing photo.</p>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.view_member') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Save Changes
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
