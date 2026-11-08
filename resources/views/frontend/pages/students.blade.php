@extends('frontend.layouts.master')

@section('title', 'Student Certificate Verification | Asia Technical Training Center')
@section('meta_description', 'Official online certificate verification portal for employers and embassies to verify credentials issued by Asia Technical Training Center.')

@section('content')

@include('frontend.partials.page_banner', [
    'title' => 'Certificate Verification Portal',
    'subtitle' => 'Official authentication service for employers, embassies, and overseas recruitment agencies.',
    'crumbs' => ['Student Corner' => '', 'Verify Certificate' => '']
])

<section id="verify" class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <!-- Verification Search Card -->
        <div class="pro-card p-6 sm:p-10 shadow-lg border border-slate-200">
            <div class="text-center max-w-xl mx-auto mb-8">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-amber-50 border border-amber-200 flex items-center justify-center text-amber-600 mb-4 shadow-2xs">
                    <i class="fa-solid fa-stamp text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#07172c] font-heading">Verify Student Certificate</h2>
                <p class="text-slate-500 text-xs sm:text-sm mt-1.5">
                    Enter student Registration Number or Certificate ID (e.g. <span class="font-bold text-[#0284c7]">3406</span> or <span class="font-bold text-[#0284c7]">ATTC-2018-3406</span>) to authenticate records.
                </p>
            </div>

            <!-- Search Form -->
            <form action="{{ route('home.students') }}#verify" method="GET" class="max-w-2xl mx-auto">
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="relative flex-1">
                        <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
                        <input type="text" 
                               name="reg_number" 
                               value="{{ request('reg_number') }}" 
                               placeholder="e.g. 3406 or ATTC-2018-3406" 
                               required
                               class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-10 pr-4 py-3 text-slate-800 placeholder-slate-400 focus:outline-hidden focus:border-[#0284c7] focus:ring-1 focus:ring-[#0284c7] text-xs sm:text-sm font-medium">
                    </div>
                    <button type="submit" 
                            class="btn-primary-action px-7 py-3 rounded-xl text-xs sm:text-sm font-bold flex items-center justify-center gap-2 shrink-0">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Verify Record</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Verification Results -->
        @if($searchPerformed)
            @if($verifiedStudent)
                <div class="pro-card p-6 sm:p-8 border-2 border-emerald-500 bg-emerald-50/20 shadow-xl space-y-6">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 border-b border-emerald-200 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold text-emerald-700 uppercase tracking-wider">Authentication Verified</span>
                                <h3 class="text-lg font-bold text-[#07172c] font-heading">Authentic Record Found in ATTC Database</h3>
                            </div>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-300">
                            Active & Verified
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 text-xs">
                        <div class="p-3 bg-white rounded-lg border border-slate-200">
                            <p class="text-slate-400 font-medium">Student Full Name</p>
                            <p class="text-sm font-bold text-slate-900 mt-0.5">{{ $verifiedStudent->student_name }}</p>
                        </div>
                        <div class="p-3 bg-white rounded-lg border border-slate-200">
                            <p class="text-slate-400 font-medium">Father's Name</p>
                            <p class="text-sm font-bold text-slate-900 mt-0.5">{{ $verifiedStudent->father_name ?? 'N/A' }}</p>
                        </div>
                        <div class="p-3 bg-white rounded-lg border border-slate-200">
                            <p class="text-slate-400 font-medium">Registration No</p>
                            <p class="text-sm font-bold text-[#0284c7] mt-0.5">{{ $verifiedStudent->reg_number }}</p>
                        </div>
                        <div class="p-3 bg-white rounded-lg border border-slate-200">
                            <p class="text-slate-400 font-medium">Course / Trade</p>
                            <p class="text-sm font-bold text-slate-900 mt-0.5">{{ $verifiedStudent->course }}</p>
                        </div>
                        <div class="p-3 bg-white rounded-lg border border-slate-200">
                            <p class="text-slate-400 font-medium">Session / Batch</p>
                            <p class="text-sm font-bold text-slate-900 mt-0.5">{{ $verifiedStudent->session ?? 'Batch 275' }}</p>
                        </div>
                        <div class="p-3 bg-white rounded-lg border border-slate-200">
                            <p class="text-slate-400 font-medium">Grade / Result</p>
                            <p class="text-sm font-bold text-emerald-600 mt-0.5">{{ $verifiedStudent->grade ?? 'Passed (Grade A)' }}</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-emerald-200 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-2">
                        <p><i class="fa-solid fa-stamp text-amber-600 mr-1"></i> BTEB RTO Code: <strong>50821</strong> | Issued by <strong>Asia Technical Training Center</strong></p>
                        <button onclick="window.print()" class="text-[#0284c7] font-bold hover:underline">
                            <i class="fa-solid fa-print mr-1"></i> Print Verification
                        </button>
                    </div>
                </div>
            @else
                <div class="pro-card p-8 border-2 border-rose-300 bg-rose-50/30 text-center space-y-3">
                    <div class="w-12 h-12 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center text-xl mx-auto">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3 class="text-base font-bold text-rose-900 font-heading">No Verified Record Found</h3>
                    <p class="text-xs text-rose-700 max-w-md mx-auto">
                        We could not find an authentic record matching "{{ request('reg_number') }}". Please double-check the registration number or certificate code.
                    </p>
                    <p class="text-xs text-slate-500 pt-2">
                        For manual verification assistance, contact our registry office at <strong class="text-slate-800">+880 1681769149</strong>.
                    </p>
                </div>
            @endif
        @endif

    </div>
</section>

@endsection
