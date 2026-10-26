@extends('frontend.layouts.master')

@section('title', 'Mission & Vision - Asia Technical Training Center')

@section('content')
<section class="py-14 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20">Our Purpose</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-3 font-heading">Mission & Vision</h1>
        <p class="text-slate-400 text-sm max-w-2xl mx-auto mt-2">Setting the benchmark for skill excellence, workplace safety, and international employment.</p>
    </div>
</section>

<section class="py-16 bg-slate-950">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <!-- Mission Card -->
        <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 sm:p-12 shadow-2xl space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-2xl">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <h2 class="text-2xl font-bold text-white font-heading">Our Mission</h2>
            <p class="text-sm text-slate-300 leading-relaxed">
                {{ $about->mission ?? 'To deliver world-class technical skills, occupational safety education, and international certifications that bridge the gap between global industrial workforce demand and aspiring technicians.' }}
            </p>
        </div>

        <!-- Vision Card -->
        <div class="rounded-3xl bg-slate-900 border border-slate-800 p-8 sm:p-12 shadow-2xl space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-amber-500/20 text-amber-400 flex items-center justify-center text-2xl">
                <i class="fa-solid fa-eye"></i>
            </div>
            <h2 class="text-2xl font-bold text-white font-heading">Our Vision</h2>
            <p class="text-sm text-slate-300 leading-relaxed">
                {{ $about->vission ?? 'To be the premier benchmark training and overseas skill development academy in South Asia, enabling over 50,000 certified craftsmen to secure dignified international careers.' }}
            </p>
        </div>

        <!-- Core Values -->
        <div class="rounded-3xl bg-slate-900/60 border border-slate-800 p-8 sm:p-12 shadow-xl space-y-6">
            <h3 class="text-xl font-bold text-white font-heading">Our Core Values</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800">
                    <h4 class="font-bold text-sm text-cyan-400 mb-1">Safety First</h4>
                    <p class="text-xs text-slate-400">Zero tolerance for unsafe workshop practices; uncompromising adherence to international HSE protocols.</p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800">
                    <h4 class="font-bold text-sm text-emerald-400 mb-1">Practical Mastery</h4>
                    <p class="text-xs text-slate-400">Knowledge is perfected on actual tools and metal spools, not just textbooks and slide presentations.</p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800">
                    <h4 class="font-bold text-sm text-amber-400 mb-1">Ethical Placement</h4>
                    <p class="text-xs text-slate-400">Transparent client trade tests without exploitative fees, upholding human dignity and genuine worker rights.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
