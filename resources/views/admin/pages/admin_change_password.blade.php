@extends('admin.admin_dashboard')

@section('title', 'Change Admin Password | ATTC')

@section('admin')
<div class="max-w-2xl mx-auto space-y-6">
    
    <div>
        <h1 class="text-2xl font-bold text-white">Security & Password</h1>
        <p class="text-slate-400 text-xs mt-1">Update your administrative access password regularly to ensure system security.</p>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-xl">
        <form action="{{ route('admin.update.password') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Current Old Password *</label>
                <input type="password" name="old_password" required placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">New Secure Password *</label>
                <input type="password" name="new_password" required placeholder="Minimum 8 characters" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Confirm New Password *</label>
                <input type="password" name="new_password_confirmation" required placeholder="Re-type new password" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-all">
            </div>

            <div class="pt-4 flex justify-end">
                <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg shadow-blue-500/25 transition-all">
                    Update Access Password
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
