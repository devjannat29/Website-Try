<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ATTC - Asia Technical Training Center | BTEB & BMET Accredited')</title>
    <meta name="description" content="@yield('meta_description', 'Asia Technical Training Center (ATTC) offers certified technical courses in 6G Welding, Industrial Electrical, PLC Automation, HVAC, and Occupational Safety with guaranteed overseas placement.')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Tailwind CSS Vite bundle -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js for lightweight UI interactivity (modals, dropdowns, tabs) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Outfit', sans-serif;
        }
        .glass-header {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
        .hero-pattern {
            background-color: #0b1120;
            background-image: radial-gradient(#1e293b 1px, transparent 1px), radial-gradient(#1e293b 1px, #0b1120 1px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
        }
        .text-gradient {
            background: linear-gradient(135deg, #38bdf8 0%, #3b82f6 50%, #818cf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-gradient-amber {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-950 text-slate-100 antialiased flex flex-col min-h-screen selection:bg-cyan-500 selection:text-white">

    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
            <div class="flex items-center space-x-3 text-slate-300">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 animate-pulse">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Admissions Ongoing
                </span>
                <span class="hidden sm:inline">Winter Batch 2026-2027 Registration Open | BTEB Code: BTEB-54092</span>
            </div>
            <div class="flex items-center space-x-4 text-slate-300">
                <a href="tel:{{ $setting->phone ?? '+88028954321' }}" class="hover:text-cyan-400 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-cyan-400"></i> {{ $setting->phone ?? '+880 2-8954321' }}
                </a>
                <span class="text-slate-600">|</span>
                <a href="mailto:{{ $setting->gmail ?? 'info@attc-bd.org' }}" class="hover:text-cyan-400 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-envelope text-cyan-400"></i> {{ $setting->gmail ?? 'info@attc-bd.org' }}
                </a>
                <span class="text-slate-600">|</span>
                <a href="{{ route('admin.login') }}" class="text-slate-400 hover:text-white text-xs font-medium transition flex items-center gap-1">
                    <i class="fa-solid fa-lock text-[10px]"></i> Staff Login
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    @include('frontend.partials.navbar')

    <!-- Toast Notifications -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-emerald-500 text-white px-5 py-4 rounded-xl shadow-2xl border border-emerald-400">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <div>
                <p class="font-semibold text-sm">Success</p>
                <p class="text-xs text-emerald-100">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="ml-4 text-emerald-200 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    @if(session('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)" class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-rose-500 text-white px-5 py-4 rounded-xl shadow-2xl border border-rose-400">
            <i class="fa-solid fa-circle-exclamation text-xl"></i>
            <div>
                <p class="font-semibold text-sm">Notification</p>
                <p class="text-xs text-rose-100">{{ session('error') }}</p>
            </div>
            <button @click="show = false" class="ml-4 text-rose-200 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('frontend.partials.footer')

    @stack('scripts')
</body>
</html>
