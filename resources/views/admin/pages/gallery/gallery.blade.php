@extends('admin.admin_dashboard')

@section('title', 'Workshop Photo Gallery | ATTC')

@section('admin')
<div class="space-y-8">
    
    <div>
        <h1 class="text-2xl font-bold text-white">General Workshop Photo Gallery</h1>
        <p class="text-slate-400 text-xs mt-1">Upload and manage photographs of technical workshop equipment, laboratory practicals, and campus facilities.</p>
    </div>

    <!-- Upload Photo Card -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <h2 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            Upload Workshop Photo
        </h2>

        <form action="{{ route('admin.upload_gallery') }}" method="POST" enctype="multipart/form-data" class="flex flex-col sm:flex-row items-end gap-4">
            @csrf
            <input type="hidden" name="category" value="general">

            <div class="flex-1 w-full">
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Photo Caption / Title</label>
                <input type="text" name="title" placeholder="e.g. Students Operating Advanced CNC Milling Unit" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div class="w-full sm:w-64">
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Select Image File *</label>
                <input type="file" name="image" required accept="image/*" class="w-full text-xs text-slate-400 file:mr-3 file:py-2 file:px-3 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
            </div>

            <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all shrink-0">
                Upload Photo
            </button>
        </form>
    </div>

    <!-- Gallery Grid -->
    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl">
        <h2 class="text-lg font-bold text-white mb-6">Current Workshop Photos ({{ $galleries->total() }})</h2>

        @if($galleries->count() > 0)
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($galleries as $photo)
                    <div class="group relative rounded-2xl overflow-hidden bg-slate-950 border border-slate-800 flex flex-col justify-between">
                        <div class="h-44 w-full overflow-hidden">
                            @if($photo->image && file_exists(public_path($photo->image)))
                                <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-xs text-slate-600">No Image</div>
                            @endif
                        </div>
                        <div class="p-3 bg-slate-900 flex items-center justify-between gap-2 border-t border-slate-800">
                            <span class="text-xs text-slate-300 truncate" title="{{ $photo->title }}">{{ $photo->title ?? 'Campus Photo' }}</span>
                            <a href="{{ route('admin.delete_gallery', $photo->id) }}" 
                               onclick="return confirm('Delete this photo?')" 
                               class="text-rose-400 hover:text-rose-300 p-1 rounded-lg hover:bg-slate-800 transition-colors shrink-0"
                               title="Delete">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $galleries->links() }}
            </div>
        @else
            <div class="text-center py-12 text-slate-500 text-xs">
                No workshop photos uploaded yet.
            </div>
        @endif
    </div>

</div>
@endsection
