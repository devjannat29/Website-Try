@extends('admin.admin_dashboard')

@section('title', 'Center Settings & Information | ATTC')

@section('admin')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Center Settings & Accreditation Info</h1>
        <p class="text-slate-400 text-xs mt-1">Configure campus hotlines, physical address, BTEB institutional affiliation code, and BMET recruitment license.</p>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.saveSetting') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Site Name -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Institution Brand Name *</label>
                <input type="text" name="site_name" value="{{ old('site_name', $setting->site_name) }}" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <!-- Accreditation Codes -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-4 rounded-2xl bg-slate-950/60 border border-slate-800">
                <div>
                    <label class="block text-xs font-semibold text-emerald-400 uppercase tracking-wider mb-2">BTEB Institution Code</label>
                    <input type="text" name="bteb_code" value="{{ old('bteb_code', $setting->bteb_code) }}" placeholder="e.g. 50421" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-2.5 text-white font-mono text-sm focus:outline-none focus:border-emerald-500 transition-all">
                    <p class="text-[11px] text-slate-500 mt-1">Affiliated with Bangladesh Technical Education Board.</p>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-blue-400 uppercase tracking-wider mb-2">BMET Recruiting License</label>
                    <input type="text" name="bmet_license" value="{{ old('bmet_license', $setting->bmet_license) }}" placeholder="e.g. RL-1452" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-2.5 text-white font-mono text-sm focus:outline-none focus:border-blue-500 transition-all">
                    <p class="text-[11px] text-slate-500 mt-1">Bureau of Manpower, Employment and Training.</p>
                </div>
            </div>

            <!-- Contact Numbers & Email -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Primary Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $setting->phone) }}" placeholder="+880 1712-345678" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Urgent Hotline</label>
                    <input type="text" name="hotline" value="{{ old('hotline', $setting->hotline) }}" placeholder="16234 or +880 1800-000000" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Official Email</label>
                    <input type="email" name="gmail" value="{{ old('gmail', $setting->gmail) }}" placeholder="info@attc.edu.bd" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
                </div>
            </div>

            <!-- Address & Hours -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Campus Physical Address</label>
                    <textarea name="address" rows="3" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('address', $setting->address) }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Office & Laboratory Hours</label>
                    <textarea name="hours" rows="3" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">{{ old('hours', $setting->hours) }}</textarea>
                </div>
            </div>

            <!-- Logo -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Institution Brand Logo</label>
                @if($setting->logo && file_exists(public_path($setting->logo)))
                    <div class="w-32 h-16 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 p-2 flex items-center justify-center mb-3">
                        <img src="{{ asset($setting->logo) }}" alt="Logo" class="max-h-full max-w-full object-contain">
                    </div>
                @endif
                <input type="file" name="logo" accept="image/*" class="w-full text-xs text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-slate-800 file:text-slate-200 hover:file:bg-slate-700 cursor-pointer">
            </div>

            <div class="pt-4 flex justify-end">
                <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Save Global Settings
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
