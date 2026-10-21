<footer class="bg-slate-950 border-t border-slate-800 text-slate-400 text-sm">
    <!-- Top Footer Highlights -->
    <div class="border-b border-slate-900 bg-slate-900/50 py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-cyan-400 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-stamp"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm">BTEB Accredited</h4>
                    <p class="text-xs text-slate-400">Govt Code: {{ $setting->bteb_code ?? 'BTEB-54092' }}</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-passport"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm">BMET Approved</h4>
                    <p class="text-xs text-slate-400">License: {{ $setting->bmet_license ?? 'BMET/TR-098/2021' }}</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-400 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm">18,500+ Overseas Placed</h4>
                    <p class="text-xs text-slate-400">Saudi, Qatar, UAE, Japan</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                <div class="w-12 h-12 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm">Global Trade Certification</h4>
                    <p class="text-xs text-slate-400">ASME, AWS, OSHA Standards</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer Columns -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            
            <!-- Col 1: Institute About -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white text-lg">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <span class="text-lg font-extrabold text-white font-heading">ATTC Technical Center</span>
                        <p class="text-xs text-cyan-400">Skill for Global Employment</p>
                    </div>
                </div>
                <p class="text-xs leading-relaxed text-slate-400">
                    Asia Technical Training Center (ATTC) is the benchmark vocational education center in South Asia, dedicated to training world-class technical craftsmen for mega construction, oil & gas refiners, and shipyard industries across the world.
                </p>
                <div class="pt-2 flex items-center space-x-3">
                    <a href="#" class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Col 2: Top Courses -->
            <div>
                <h4 class="text-white font-bold text-sm mb-4 font-heading tracking-wide uppercase text-xs">Featured Trades</h4>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition">6G Pipe Welding (SMAW/TIG)</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition">Industrial Electrical & Substation</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition">PLC & SCADA Automation</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition">Pipe Fabrication & Fitting</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition">Commercial HVAC & VRF</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition">Industrial Safety Officer (OSHA)</a></li>
                </ul>
            </div>

            <!-- Col 3: Navigation Quick Links -->
            <div>
                <h4 class="text-white font-bold text-sm mb-4 font-heading tracking-wide uppercase text-xs">Quick Links</h4>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="{{ route('home.placement_cell') }}" class="hover:text-cyan-400 transition">Overseas Placement Cell</a></li>
                    <li><a href="{{ route('home.job') }}" class="hover:text-cyan-400 transition">Live Job Circulars</a></li>
                    <li><a href="{{ route('home.interview') }}" class="hover:text-cyan-400 transition">Foreign Client Interviews</a></li>
                    <li><a href="{{ route('home.students') }}" class="hover:text-cyan-400 transition">Verify Certificate Online</a></li>
                    <li><a href="{{ route('home.notice') }}" class="hover:text-cyan-400 transition">Notice Board & Routine</a></li>
                    <li><a href="{{ route('admin.login') }}" class="hover:text-cyan-400 transition text-slate-500">Instructor & Admin Portal</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact & Campus -->
            <div>
                <h4 class="text-white font-bold text-sm mb-4 font-heading tracking-wide uppercase text-xs">Campus & Support</h4>
                <div class="space-y-3 text-xs text-slate-400">
                    <p class="flex items-start gap-2">
                        <i class="fa-solid fa-location-dot text-cyan-400 mt-0.5 shrink-0"></i>
                        <span>{{ $setting->address ?? 'Plot #42, Industrial Area, Sector 7, Uttara, Dhaka-1230' }}</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-phone text-cyan-400 shrink-0"></i>
                        <span>{{ $setting->phone ?? '+880 2-8954321' }}</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-headset text-amber-400 shrink-0"></i>
                        <span>{{ $setting->hotline ?? '+880 1711-234567' }}</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-clock text-slate-400 shrink-0"></i>
                        <span>{{ $setting->hours ?? 'Sat - Thu: 8:00 AM - 6:00 PM' }}</span>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="border-t border-slate-900 py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© {{ date('Y') }} {{ $setting->site_name ?? 'Asia Technical Training Center (ATTC)' }}. All rights reserved.</p>
            <div class="flex items-center space-x-6">
                <a href="{{ route('home.about_us') }}" class="hover:text-slate-400 transition">About Institute</a>
                <a href="{{ route('home.contact') }}" class="hover:text-slate-400 transition">Contact</a>
                <a href="{{ route('admin.login') }}" class="hover:text-cyan-400 transition">Admin Portal</a>
            </div>
        </div>
    </div>
</footer>
