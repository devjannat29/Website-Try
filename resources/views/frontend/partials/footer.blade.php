<footer class="bg-[#07172c] text-slate-300 text-sm mt-auto border-t-4 border-[#0284c7]">
    
    <!-- Top Highlights Banner -->
    <div class="border-b border-slate-800 bg-[#0b2545]/60 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="flex items-center gap-3.5 p-3 rounded-xl bg-slate-900/50 border border-slate-800">
                <div class="w-12 h-12 rounded-lg bg-sky-500/10 text-cyan-400 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-certificate"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-xs sm:text-sm">BTEB Registered RTO</h4>
                    <p class="text-[11px] text-slate-400">Center Code: 50821</p>
                </div>
            </div>

            <div class="flex items-center gap-3.5 p-3 rounded-xl bg-slate-900/50 border border-slate-800">
                <div class="w-12 h-12 rounded-lg bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-passport"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-xs sm:text-sm">BMET & NSDA Partner</h4>
                    <p class="text-[11px] text-slate-400">ASSET Project Assessment</p>
                </div>
            </div>

            <div class="flex items-center gap-3.5 p-3 rounded-xl bg-slate-900/50 border border-slate-800">
                <div class="w-12 h-12 rounded-lg bg-amber-500/10 text-amber-400 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-xs sm:text-sm">18,500+ Overseas Placed</h4>
                    <p class="text-[11px] text-slate-400">Saudi, UAE, Qatar, Japan</p>
                </div>
            </div>

            <div class="flex items-center gap-3.5 p-3 rounded-xl bg-slate-900/50 border border-slate-800">
                <div class="w-12 h-12 rounded-lg bg-cyan-500/10 text-cyan-300 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-xs sm:text-sm">39+ Years of Excellence</h4>
                    <p class="text-[11px] text-slate-400">Established in 1985</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Main Footer Body -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
            
            <!-- Col 1: Brand & Institutional About -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('upload/logo.png') }}" 
                         alt="ATTC Crest" 
                         class="h-12 w-auto bg-white rounded-lg p-1"
                         onerror="this.onerror=null; this.src='{{ asset('upload/attc_shield.png') }}';">
                    <div>
                        <span class="text-lg font-extrabold text-white font-heading tracking-tight">Asia Technical Training Center</span>
                        <p class="text-xs text-cyan-400 font-medium">BTEB Registered Training Organization #50821</p>
                    </div>
                </div>
                <p class="text-xs leading-relaxed text-slate-400">
                    Asia Technical Training Center (ATTC), established in 1985 by Md. Abdul Malek, is a premier government-registered technical vocational institute dedicated to training skilled manpower for domestic infrastructure and global overseas markets.
                </p>
                <div class="pt-2 flex items-center space-x-3">
                    <a href="https://www.facebook.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-[#0b2545] border border-slate-700 flex items-center justify-center text-slate-300 hover:text-white hover:bg-[#0284c7] transition">
                        <i class="fa-brands fa-facebook-f text-sm"></i>
                    </a>
                    <a href="https://www.youtube.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-[#0b2545] border border-slate-700 flex items-center justify-center text-slate-300 hover:text-white hover:bg-[#0284c7] transition">
                        <i class="fa-brands fa-youtube text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-[#0b2545] border border-slate-700 flex items-center justify-center text-slate-300 hover:text-white hover:bg-[#0284c7] transition">
                        <i class="fa-brands fa-linkedin-in text-sm"></i>
                    </a>
                    <a href="https://wa.me/8801681769149" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg bg-[#0b2545] border border-slate-700 flex items-center justify-center text-slate-300 hover:text-white hover:bg-emerald-600 transition">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Col 2: Certified Trades -->
            <div>
                <h4 class="text-white font-bold text-sm mb-4 font-heading tracking-wide uppercase">Certified Trades</h4>
                <ul class="space-y-2.5 text-xs text-slate-400">
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Rod Binder (Civil)</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Plumbing & Pipe Fitting</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Basic Electrical (House Wiring)</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Electrical & Electronics</a></li>
                    <li><a href="{{ route('home.all_course') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Motor Rewinding & Control</a></li>
                </ul>
            </div>

            <!-- Col 3: Quick Links -->
            <div>
                <h4 class="text-white font-bold text-sm mb-4 font-heading tracking-wide uppercase">Quick Links</h4>
                <ul class="space-y-2.5 text-xs text-slate-400">
                    <li><a href="{{ route('home.about_us') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> About Our Institute</a></li>
                    <li><a href="{{ route('home.teachers') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Faculties & Management</a></li>
                    <li><a href="{{ route('home.placement_cell') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Overseas Placement Cell</a></li>
                    <li><a href="{{ route('home.notice') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Notice Board</a></li>
                    <li><a href="{{ route('home.students') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Certificate Verification</a></li>
                    <li><a href="{{ route('home.contact') }}" class="hover:text-cyan-400 transition flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-cyan-500"></i> Contact & Directions</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact Information -->
            <div>
                <h4 class="text-white font-bold text-sm mb-4 font-heading tracking-wide uppercase">Contact Info</h4>
                <ul class="space-y-3 text-xs text-slate-400">
                    <li class="flex items-start gap-2.5">
                        <i class="fa-solid fa-location-dot text-cyan-400 mt-1"></i>
                        <span>149/9-C, Shah Alibag, Mirpur-1, Dhaka- 1216, Bangladesh</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fa-solid fa-phone text-cyan-400 mt-1"></i>
                        <span>+880 1681769149<br>+880 1735066260</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fa-solid fa-envelope text-cyan-400 mt-1"></i>
                        <span>asiatechnicalbd@gmail.com</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fa-solid fa-clock text-cyan-400 mt-1"></i>
                        <span>Sat - Thu: 09:00 AM - 07:00 PM</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="border-t border-slate-800 bg-[#051222] py-5 px-4 text-center text-xs text-slate-500">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2">
            <p>
                © {{ date('Y') }} <span class="text-slate-300 font-semibold">Asia Technical Training Center</span>. All Rights Reserved.
            </p>
            <p class="text-slate-400">
                Registered Training Organization - Bangladesh Technical Education Board (BTEB) | Designed & Developed by <span class="text-cyan-400 font-medium">Nur Jannat</span>
            </p>
        </div>
    </div>
</footer>
