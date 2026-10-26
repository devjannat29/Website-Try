@extends('admin.admin_dashboard')

@section('title', 'Edit Course Trade | ATTC')

@section('admin')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Edit Technical Course</h1>
            <p class="text-slate-400 text-xs mt-1">Update vocational curriculum, syllabus, and trade details for {{ $course->name }}.</p>
        </div>
        <a href="{{ route('admin.view_course') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Courses
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.update_course', $course->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Course Name -->
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Course / Trade Title *</label>
                    <input type="text" name="name" value="{{ old('name', $course->name) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Department / Category *</label>
                    <select name="category" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->name }}" {{ $course->category == $cat->name ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- BTEB Level -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">BTEB Accreditation Level</label>
                    <input type="text" name="bteb_level" value="{{ old('bteb_level', $course->bteb_level) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <!-- Duration -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Duration</label>
                    <input type="text" name="duration" value="{{ old('duration', $course->duration) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <!-- Fee -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Course Fee</label>
                    <input type="text" name="Fee" value="{{ old('Fee', $course->Fee) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Comprehensive Course Overview</label>
                <textarea name="description" rows="4" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('description', $course->description) }}</textarea>
            </div>

            <!-- Syllabus Modules (One per line) -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1">Curriculum Syllabus Modules</label>
                <span class="block text-[11px] text-slate-400 mb-2">One module per line.</span>
                @php
                    $syllabusText = '';
                    if (is_array($course->syllabus)) {
                        $syllabusText = implode("\n", $course->syllabus);
                    } else {
                        $syllabusText = $course->syllabus ?? '';
                    }
                @endphp
                <textarea name="syllabus" rows="5" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white font-mono text-xs focus:outline-none focus:border-blue-500 transition-all">{{ old('syllabus', $syllabusText) }}</textarea>
            </div>

            <!-- Career Prospects -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Target Career Prospects & Overseas Roles</label>
                <input type="text" name="careers" value="{{ old('careers', $course->careers) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <!-- Image & Status -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Course Featured Image</label>
                    @if($course->image && file_exists(public_path($course->image)))
                        <div class="w-32 h-20 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 mb-2">
                            <img src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="w-full h-full object-cover">
                        </div>
                    @endif
                    <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                    <p class="text-[11px] text-slate-500 mt-1">Leave empty to keep existing image.</p>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Publication Status</label>
                    <select name="status" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                        <option value="1" {{ ($course->status == '1' || $course->status == 'active') ? 'selected' : '' }}>Active / Published</option>
                        <option value="0" {{ ($course->status == '0' || $course->status == 'inactive') ? 'selected' : '' }}>Draft / Inactive</option>
                    </select>
                </div>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.view_course') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Save Changes
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
