@extends('admin.admin_dashboard')

@section('title', 'Admin Profile Settings | ATTC')

@section('admin')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Administrator Profile</h1>
        <p class="text-slate-400 text-xs mt-1">Manage your administrative credentials, contact details, and display avatar.</p>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Current Avatar Preview & Upload -->
            <div class="flex flex-col sm:flex-row items-center gap-6 pb-6 border-b border-slate-800">
                <div class="relative w-24 h-24 rounded-2xl overflow-hidden bg-slate-950 border-2 border-slate-700 shadow-xl shrink-0">
                    @if($profileData && $profileData->photo && file_exists(public_path($profileData->photo)))
                        <img id="avatar-preview" src="{{ asset($profileData->photo) }}" alt="Avatar" class="w-full h-full object-cover">
                    @else
                        <div id="avatar-fallback" class="w-full h-full flex items-center justify-center text-3xl font-bold text-white bg-blue-600">
                            {{ strtoupper(substr($profileData->name ?? 'A', 0, 1)) }}
                        </div>
                        <img id="avatar-preview" src="" alt="Avatar" class="w-full h-full object-cover hidden">
                    @endif
                </div>

                <div class="flex-1 text-center sm:text-left">
                    <h3 class="text-sm font-semibold text-white">Profile Photo</h3>
                    <p class="text-xs text-slate-400 mt-0.5">JPG, PNG or WebP. Max file size: 2MB.</p>
                    <div class="mt-3">
                        <label class="cursor-pointer inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold border border-slate-700 transition-colors">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Choose New Image
                            <input type="file" name="photo" id="photo-input" accept="image/*" class="hidden">
                        </label>
                    </div>
                </div>
            </div>

            <!-- Form Fields -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Full Name *</label>
                    <input type="text" name="name" value="{{ old('name', $profileData->name) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Email Address *</label>
                    <input type="email" name="email" value="{{ old('email', $profileData->email) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Username</label>
                    <input type="text" value="{{ $profileData->username ?? 'admin' }}" disabled class="w-full bg-slate-950/50 border border-slate-800 rounded-xl px-4 py-3 text-slate-500 text-sm cursor-not-allowed">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Phone Number</label>
                    <input type="text" name="phone" value="{{ old('phone', $profileData->phone) }}" placeholder="+880 1712-345678" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <div class="pt-4 flex justify-end">
                <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Save Profile Changes
                </button>
            </div>
        </form>
    </div>

</div>

<script>
    document.getElementById('photo-input').addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(evt) {
                const preview = document.getElementById('avatar-preview');
                const fallback = document.getElementById('avatar-fallback');
                preview.src = evt.target.result;
                preview.classList.remove('hidden');
                if (fallback) fallback.classList.add('hidden');
            }
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>
@endsection
