<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary SEO Metadata -->
    <title>@yield('title', 'Asia Technical Training Center | BTEB Registered Vocational Training Institute')</title>
    <meta name="description" content="@yield('meta_description', 'Asia Technical Training Center (ATTC) is a premier BTEB registered technical vocational institute (Code: 50821) offering certified courses in Electrical, Plumbing, and Civil Construction with guaranteed overseas job placement.')">
    <meta name="keywords" content="ATTC, Asia Technical Training Center, BTEB Training Center, Vocational Training Bangladesh, Overseas Job Placement, Electrical Course, Plumbing Course, Rod Binder, Technical Training Mirpur, Technical Institute Dhaka, এশিয়া টেকনিক্যাল ট্রেনিং সেন্টার">
    <meta name="author" content="Asia Technical Training Center">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook SEO -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Asia Technical Training Center | BTEB Registered')">
    <meta property="og:description" content="@yield('meta_description', 'BTEB registered technical training center with 39+ years of excellence in skill development and overseas job placement.')">
    <meta property="og:image" content="{{ asset('upload/hero_bg.jpg') }}">

    <!-- Twitter SEO -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Asia Technical Training Center')">
    <meta name="twitter:description" content="@yield('meta_description', 'Govt accredited technical training and overseas career placement.')">
    <meta name="twitter:image" content="{{ asset('upload/hero_bg.jpg') }}">

    <!-- Google Fonts: Plus Jakarta Sans (English Body), Outfit (English Headings), Hind Siliguri (Bengali) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Outfit:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Tailwind CSS Vite bundle -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js for dropdowns & lightweight interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <!-- Schema.org JSON-LD Structured Data for Top-Tier Educational SEO -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Asia Technical Training Center",
      "alternateName": "এশিয়া টেকনিক্যাল ট্রেনিং সেন্টার",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('upload/logo.png') }}",
      "image": "{{ asset('upload/hero_bg.jpg') }}",
      "description": "BTEB registered technical vocational education institute providing certified courses in Electrical, Plumbing, and Civil Construction with overseas employment.",
      "telephone": "{{ $setting->phone ?? '+8801681769149' }}",
      "email": "{{ $setting->gmail ?? 'asiatechnicalbd@gmail.com' }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "149/9-C, Shah Alibag, Mirpur-1",
        "addressLocality": "Dhaka",
        "postalCode": "1216",
        "addressCountry": "BD"
      },
      "identifier": "BTEB-50821"
    }
    </script>

    <style>
        :root {
            --navy-950: #07172c;
            --navy-900: #0b2545;
            --navy-850: #0f3057;
            --navy-800: #133e68;
            --primary-accent: #0284c7;
            --primary-accent-dark: #0369a1;
            --prestige-gold: #d97706;
            --gold-light: #f59e0b;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Hind Siliguri', sans-serif;
            color: #334155;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            font-weight: 700;
        }

        /* Bengali font override for smooth rendering */
        :lang(bn), .font-bangla {
            font-family: 'Hind Siliguri', sans-serif !important;
        }

        /* Professional Action Buttons */
        .btn-primary-action {
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: #ffffff;
            box-shadow: 0 4px 14px 0 rgba(2, 132, 199, 0.35);
            transition: all 0.25s ease-in-out;
        }
        .btn-primary-action:hover {
            background: linear-gradient(135deg, #0369a1 0%, #075985 100%);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px 0 rgba(2, 132, 199, 0.45);
        }

        .btn-outline-action {
            border: 2px solid #0284c7;
            color: #0284c7;
            background: transparent;
            transition: all 0.25s ease-in-out;
        }
        .btn-outline-action:hover {
            background: #0284c7;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 14px 0 rgba(2, 132, 199, 0.3);
        }

        /* Professional Section Badges */
        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            color: #0284c7;
            font-weight: 800;
            font-size: 0.82rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }
        .section-label::before,
        .section-label::after {
            content: "";
            display: inline-block;
            width: 2rem;
            height: 2px;
            background: linear-gradient(to right, #0284c7, #38bdf8);
            border-radius: 2px;
        }

        /* Card Elevations */
        .pro-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 1rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 20px -2px rgba(11, 37, 69, 0.05);
        }
        .pro-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px -4px rgba(11, 37, 69, 0.12);
            border-color: #cbd5e1;
        }

        /* Infinite Partner Logo Scroller */
        @keyframes infiniteLogoScroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        .animate-infinite-scroll {
            display: flex;
            width: max-content;
            animation: infiniteLogoScroll 30s linear infinite;
        }
        .animate-infinite-scroll:hover {
            animation-play-state: paused;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-slate-800 antialiased flex flex-col min-h-screen">

    <!-- Top Announcement Bar (Deep Corporate Navy) -->
    <div class="bg-[#081d34] text-white text-[12px] sm:text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-1.5 font-medium tracking-wide">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-cyan-400"></i>
                <span>ADDRESS: {{ $setting->address ?? '149/9-C, Shah Alibag, Mirpur-1, Dhaka- 1216' }}</span>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-cyan-400"></i>
                    <span>PHONE: {{ $setting->hotline ?? '+880 1681769149, +880 1735066260' }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    @include('frontend.partials.navbar')

    <!-- Toast Notifications -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-emerald-600 text-white px-5 py-4 rounded-xl shadow-2xl border border-emerald-500">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <div>
                <p class="font-bold text-sm">Success</p>
                <p class="text-xs text-emerald-100">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="ml-4 text-emerald-200 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    @if(session('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 6000)" class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-rose-600 text-white px-5 py-4 rounded-xl shadow-2xl border border-rose-500">
            <i class="fa-solid fa-circle-exclamation text-xl"></i>
            <div>
                <p class="font-bold text-sm">Notice</p>
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

    <!-- Floating Scroll To Top Button -->
    <div x-data="{ visible: false }" 
         @scroll.window="visible = (window.pageYOffset > 300)" 
         x-show="visible" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-4"
         class="fixed bottom-6 right-6 z-40">
        <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
                class="w-12 h-12 rounded-full bg-[#0284c7] hover:bg-[#0369a1] text-white flex items-center justify-center shadow-xl transition transform hover:-translate-y-1 focus:outline-hidden"
                title="Back to Top">
            <i class="fa-solid fa-chevron-up text-sm"></i>
        </button>
    </div>

    @stack('scripts')
</body>
</html>
