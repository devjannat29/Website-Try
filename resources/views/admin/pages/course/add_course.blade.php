@extends('admin.admin_dashboard')

@section('title', 'Add New Course Trade | ATTC')

@section('admin')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Add New Technical Course</h1>
            <p class="text-slate-400 text-xs mt-1">Configure vocational program curriculum, BTEB accreditation, and careers.</p>
        </div>
        <a href="{{ route('admin.view_course') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Courses
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.upload_course') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Course Name -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Course / Trade Title *</label>
                    <input type="text" name="name" required placeholder="e.g. 6G Pipe Welding & Heavy Fabrication" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Department / Category *</label>
                    <select name="category" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                        <option value="">Select a Department</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- BTEB Level -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">BTEB Accreditation Level</label>
                    <input type="text" name="bteb_level" value="NTVQF Level-3" placeholder="e.g. NTVQF Level-3 / Level-4" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <!-- Duration -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Duration</label>
                    <input type="text" name="duration" placeholder="e.g. 3 Months (360 Hours Practical)" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <!-- Fee -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Course Fee</label>
                    <input type="text" name="Fee" placeholder="e.g. BDT 18,500 or Govt Funded (Free)" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Comprehensive Course Overview</label>
                <textarea name="description" rows="4" placeholder="Detailed introduction to this vocational trade..." class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all"></textarea>
            </div>

            <!-- Syllabus Modules (One per line) -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1">Curriculum Syllabus Modules</label>
                <span class="block text-[11px] text-slate-400 mb-2">Enter each module on a new line (they will be formatted automatically).</span>
                <textarea name="syllabus" rows="5" placeholder="Module 1: Workshop Industrial Health & Safety Regulations (OSHA)&#10;Module 2: Equipment Setup & Calibration&#10;Module 3: Hands-on Practical Trade Testing" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white font-mono text-xs focus:outline-none focus:border-blue-500 transition-all"></textarea>
            </div>

            <!-- Career Prospects -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Target Career Prospects & Overseas Roles</label>
                <input type="text" name="careers" placeholder="e.g. Pipe Welder (Saudi Arabia/UAE), Shipyard Fabricator, Maintenance Tech" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <!-- Image & Status -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Course Featured Image</label>
                    <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                    <p class="text-[11px] text-slate-500 mt-1">Recommended size: 800x500px. JPG, PNG or WebP.</p>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Publication Status</label>
                    <select name="status" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                        <option value="1">Active / Published</option>
                        <option value="0">Draft / Inactive</option>
                    </select>
                </div>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.view_course') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Publish Course Program
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
