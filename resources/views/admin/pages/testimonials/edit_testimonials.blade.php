@extends('admin.admin_dashboard')

@section('title', 'Edit Testimonial | ATTC')

@section('admin')
<div class="max-w-2xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Edit Success Story</h1>
            <p class="text-slate-400 text-xs mt-1">Update quote and placement details for {{ $testimonial->name }}.</p>
        </div>
        <a href="{{ route('admin.testimonials') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Testimonials
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.update_testimonials', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Graduate Name *</label>
                    <input type="text" name="name" value="{{ old('name', $testimonial->name) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Technical Trade</label>
                    <input type="text" name="trade" value="{{ old('trade', $testimonial->trade) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Placement Country</label>
                    <input type="text" name="country" value="{{ old('country', $testimonial->country) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Monthly Remittance / Salary</label>
                    <input type="text" name="salary" value="{{ old('salary', $testimonial->salary) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Batch / Year</label>
                    <input type="text" name="batch" value="{{ old('batch', $testimonial->batch) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Photo</label>
                    @if($testimonial->image && file_exists(public_path($testimonial->image)))
                        <div class="w-12 h-12 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 mb-2">
                            <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                        </div>
                    @endif
                    <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Graduate Testimonial Quote *</label>
                <textarea name="quote" rows="4" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('quote', $testimonial->quote) }}</textarea>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.testimonials') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Save Changes
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
