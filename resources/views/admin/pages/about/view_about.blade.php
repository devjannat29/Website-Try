@extends('admin.admin_dashboard')

@section('title', 'About Us & Mission CMS | ATTC')

@section('admin')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Institutional CMS: About, Mission & Vision</h1>
        <p class="text-slate-400 text-xs mt-1">Configure narrative statements displayed on the public About Us, Mission, and Placement Cell web pages.</p>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.saveAbout') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- About Us Description -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">About The Institute (Main Narrative)</label>
                <textarea name="about_desc" rows="5" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('about_desc', $about->about_desc) }}</textarea>
            </div>

            <!-- Mission Statement -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Institutional Mission Statement</label>
                <textarea name="mission" rows="4" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('mission', $about->mission) }}</textarea>
            </div>

            <!-- Vision Statement -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Institutional Vision Statement</label>
                <textarea name="vission" rows="4" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('vission', $about->vission) }}</textarea>
            </div>

            <!-- Overseas Job Placement Cell Narrative -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Placement Cell & Overseas Deployment Narrative</label>
                <textarea name="job_placement" rows="4" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('job_placement', $about->job_placement) }}</textarea>
            </div>

            <!-- Image -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Campus Feature Image</label>
                @if($about->image && file_exists(public_path($about->image)))
                    <div class="w-40 h-24 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 mb-3">
                        <img src="{{ asset($about->image) }}" alt="Campus" class="w-full h-full object-cover">
                    </div>
                @endif
                <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                <p class="text-[11px] text-slate-500 mt-1">Displayed on the public About page hero. JPG, PNG or WebP.</p>
            </div>

            <div class="pt-4 flex justify-end">
                <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Save CMS Statements
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
