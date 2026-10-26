@extends('admin.admin_dashboard')

@section('title', 'Edit Event | ATTC')

@section('admin')
<div class="max-w-2xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Edit Event Details</h1>
            <p class="text-slate-400 text-xs mt-1">Update schedule, venue, or details for {{ $event->title }}.</p>
        </div>
        <a href="{{ route('admin.view_event') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Events
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.update_event', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Event Title *</label>
                <input type="text" name="title" value="{{ old('title', $event->title) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Event Date</label>
                    <input type="text" name="date" value="{{ old('date', $event->date) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Time Slot</label>
                    <input type="text" name="time" value="{{ old('time', $event->time) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Venue / Workshop Station</label>
                <input type="text" name="venue" value="{{ old('venue', $event->venue) }}" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Description</label>
                <textarea name="description" rows="4" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('description', $event->description) }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Current Banner</label>
                @if($event->image && file_exists(public_path($event->image)))
                    <div class="w-32 h-20 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 mb-3">
                        <img src="{{ asset($event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                    </div>
                @endif
                <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
                <p class="text-[11px] text-slate-500 mt-1">Leave empty to keep current banner.</p>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.view_event') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Update Event
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
