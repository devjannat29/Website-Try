@extends('admin.admin_dashboard')

@section('title', 'Edit Institutional Service | ATTC')

@section('admin')
<div class="max-w-2xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-white">Edit Service</h1>
            <p class="text-slate-400 text-xs mt-1">Update description and icon for {{ $service->name }}.</p>
        </div>
        <a href="{{ route('admin.view_service') }}" class="text-xs text-slate-400 hover:text-white transition-colors">
            &larr; Back to Services
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.update_service', $service->id) }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Service Title *</label>
                <input type="text" name="name" value="{{ old('name', $service->name) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Icon Type</label>
                <select name="icon" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                    <option value="wrench-screwdriver" {{ $service->icon == 'wrench-screwdriver' ? 'selected' : '' }}>Wrench / Technical Tools</option>
                    <option value="globe-alt" {{ $service->icon == 'globe-alt' ? 'selected' : '' }}>Globe / Overseas Placement</option>
                    <option value="academic-cap" {{ $service->icon == 'academic-cap' ? 'selected' : '' }}>Cap / Certification & BTEB</option>
                    <option value="building-office-2" {{ $service->icon == 'building-office-2' ? 'selected' : '' }}>Building / Hostel Lodging</option>
                    <option value="shield-check" {{ $service->icon == 'shield-check' ? 'selected' : '' }}>Shield / Safety & Quality</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Detailed Description *</label>
                <textarea name="description" rows="4" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('description', $service->description) }}</textarea>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.view_service') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-xs transition-colors">Cancel</a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Update Service
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
