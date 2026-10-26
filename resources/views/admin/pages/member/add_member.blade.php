@extends('admin.admin_dashboard')

@section('title', 'Add Faculty Member | ATTC')

@section('admin')
<div class="max-w-2xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Add Faculty Instructor</h1>
            <p class="text-slate-400 text-xs mt-1">Enroll a certified instructor or vocational master craftsman.</p>
        </div>
        <a href="{{ route('admin.view_member') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Faculty
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.upload_member') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Trainer Full Name *</label>
                    <input type="text" name="name" required placeholder="e.g. Engr. Shafiqul Islam" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Designation / Role *</label>
                    <input type="text" name="designation" required placeholder="e.g. Chief Welding Instructor & Assessor" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Department</label>
                    <input type="text" name="department" placeholder="e.g. Welding & Fabrication Division" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Education / BTEB Level</label>
                    <input type="text" name="education" placeholder="e.g. B.Sc in Mechanical Engineering, BTEB Assessor" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Industry Experience</label>
                    <input type="text" name="experience" placeholder="e.g. 14+ Years (8 Years in Qatar/Oman)" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Instructor Photo</label>
                <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                <p class="text-[11px] text-slate-500 mt-1">Portrait orientation recommended. JPG, PNG or WebP.</p>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.view_member') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Register Instructor
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
