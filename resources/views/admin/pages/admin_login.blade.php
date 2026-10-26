<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-950 text-slate-100 antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Portal Sign In | Asian Technical Training Center</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', system-ui, sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Space Grotesk', system-ui, sans-serif; }
    </style>
</head>
<body class="h-full flex items-center justify-center p-4 relative overflow-hidden bg-slate-950">

    <!-- Ambient glowing backdrop blobs -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-indigo-600/20 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-slate-900/50 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="w-full max-w-md relative z-10">
        
        <!-- Center Brand Emblem -->
        <div class="text-center mb-8">
            <a href="{{ route('home.index') }}" class="inline-flex items-center gap-3">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-blue-600 to-indigo-500 flex items-center justify-center text-white font-black text-2xl shadow-xl shadow-blue-500/25">
                    A
                </div>
            </a>
            <h1 class="text-2xl font-bold text-white tracking-tight mt-4">Asian Technical Training Center</h1>
            <p class="text-xs text-slate-400 mt-1 uppercase tracking-widest font-semibold">Authorized Administrative Portal</p>
        </div>

        <!-- Glassmorphic Card -->
        <div class="bg-slate-900/80 backdrop-blur-2xl border border-slate-800 rounded-3xl p-8 shadow-2xl relative">
            
            <!-- Alert Messages -->
            @if(session('error'))
                <div class="mb-6 p-4 rounded-xl bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs flex items-center gap-2.5">
                    <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs flex items-center gap-2.5">
                    <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Username or Email -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Username or Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/></svg>
                        </div>
                        <input type="text" 
                               name="login" 
                               value="{{ old('login', 'admin@attc.edu') }}" 
                               required 
                               placeholder="e.g. admin@attc.edu or jannat@gmail.com" 
                               class="w-full bg-slate-950 border border-slate-700/80 rounded-xl pl-11 pr-4 py-3 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider">Password</label>
                        <span class="text-[11px] text-slate-400">Default: <span class="text-amber-400 font-mono">12345678</span></span>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <input type="password" 
                               name="password" 
                               value="12345678"
                               required 
                               placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" 
                               class="w-full bg-slate-950 border border-slate-700/80 rounded-xl pl-11 pr-4 py-3 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" checked class="w-4 h-4 rounded bg-slate-950 border-slate-700 text-blue-600 focus:ring-blue-500">
                        <span class="text-xs text-slate-300 font-medium">Keep me signed in</span>
                    </label>
                    <a href="{{ route('home.contact') }}" class="text-xs text-blue-400 hover:text-blue-300">Need help?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold text-sm shadow-lg shadow-blue-500/25 transition-all flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    Sign In to Administrative Panel
                </button>
            </form>

            <!-- Quick Demo Credentials Box -->
            <div class="mt-6 pt-5 border-t border-slate-800 text-center">
                <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider block mb-2">Available Demo Accounts</span>
                <div class="space-y-1 text-xs text-slate-400">
                    <p><span class="text-slate-300 font-mono">admin@attc.edu</span> / <span class="text-amber-400 font-mono">12345678</span></p>
                    <p><span class="text-slate-300 font-mono">jannat@gmail.com</span> / <span class="text-amber-400 font-mono">12345678</span></p>
                </div>
            </div>

        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('home.index') }}" class="text-xs text-slate-400 hover:text-white transition-colors inline-flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Return to Public Website Homepage
            </a>
        </div>

    </div>
</body>
</html>
