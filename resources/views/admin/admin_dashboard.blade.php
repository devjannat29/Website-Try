<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-950 text-slate-100 antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Management Panel | Asian Technical Training Center')</title>

    <!-- Google Fonts: Inter & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
        h1, h2, h3, .font-heading {
            font-family: 'Space Grotesk', system-ui, sans-serif;
        }
    </style>
</head>
<body class="h-full bg-slate-950 text-slate-100 flex overflow-hidden">

    <!-- Mobile Backdrop -->
    <div id="sidebar-backdrop" class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-40 hidden lg:hidden"></div>

    <!-- Admin Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0 lg:pl-64 overflow-y-auto">
        <!-- Top Navbar -->
        @include('admin.partials.navbar')

        <!-- Flash Messages & Toasts -->
        <div class="px-4 sm:px-6 lg:px-8 pt-6">
            @if(session('success'))
                <div class="p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center justify-between mb-4 shadow-lg shadow-emerald-500/5 animate-fade-in">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-400/70 hover:text-emerald-400 p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            @endif

            @if(session('error'))
                <div class="p-4 rounded-2xl bg-rose-500/10 border border-rose-500/30 text-rose-400 text-sm flex items-center justify-between mb-4 shadow-lg shadow-rose-500/5 animate-fade-in">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                        <span class="font-medium">{{ session('error') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-rose-400/70 hover:text-rose-400 p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div class="p-4 rounded-2xl bg-rose-500/10 border border-rose-500/30 text-rose-400 text-sm mb-4">
                    <div class="font-bold mb-1">Please fix the following validation errors:</div>
                    <ul class="list-disc list-inside space-y-0.5 text-xs">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <!-- Page Body Content -->
        <main class="flex-1 px-4 sm:px-6 lg:px-8 py-6">
            @yield('admin')
            @yield('content')
        </main>

        <!-- Footer -->
        @include('admin.partials.footer')
    </div>

    <!-- Admin Interactive Script (Sidebar & Profile toggle) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('admin-sidebar');
            const openBtn = document.getElementById('open-sidebar-btn');
            const closeBtn = document.getElementById('close-sidebar-btn');
            const backdrop = document.getElementById('sidebar-backdrop');

            function toggleSidebar() {
                const isClosed = sidebar.classList.contains('-translate-x-full');
                if (isClosed) {
                    sidebar.classList.remove('-translate-x-full');
                    backdrop.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    backdrop.classList.add('hidden');
                }
            }

            if (openBtn) openBtn.addEventListener('click', toggleSidebar);
            if (closeBtn) closeBtn.addEventListener('click', toggleSidebar);
            if (backdrop) backdrop.addEventListener('click', toggleSidebar);

            // Profile Dropdown Toggle
            const profileBtn = document.getElementById('profile-dropdown-btn');
            const profileMenu = document.getElementById('profile-dropdown-menu');

            if (profileBtn && profileMenu) {
                profileBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    profileMenu.classList.toggle('hidden');
                });

                document.addEventListener('click', (e) => {
                    if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
                        profileMenu.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</body>
</html>
