@extends('frontoffice.layouts.dashboard')

@section('title', 'Dashboard - Azubi')

@section('sidebar-active-dashboard', 'active')

@section('content')
<div class="space-y-6">

    {{-- Welcome Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center gap-3">
            <div>
                <h1 class="tracking-tight font-bold sm:text-3xl text-lg md:text-xl mb-0" style="color:#344F1F;">
                    Welcome, {{ explode(' ', $user->name)[0] }}!
                </h1>
                <p class="text-sm leading-relaxed text-muted-foreground">
                    Day {{ now()->diffInDays($user->created_at) ?: 1 }} of your Ausbildung journey
                </p>
            </div>
        </div>
        <a href="{{ route('front.dashboard.profile') }}" style="text-decoration:none;">
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-full bg-white border shadow-sm hover:shadow-md transition-all cursor-pointer hover:border-[#F4991A]/30" style="border-color:rgba(52,79,31,0.1);">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F4991A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/></svg>
                    <span class="text-sm font-medium" style="color:#344F1F;">Profile</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-20 h-2 rounded-full overflow-hidden" style="background:#F2EAD3;">
                        <div class="h-full rounded-full transition-all duration-500" style="width:0%;background:#F4991A;"></div>
                    </div>
                    <span class="text-sm font-semibold min-w-[36px]" style="color:#344F1F;">0%</span>
                </div>
            </div>
        </a>
    </div>

    {{-- Complete Your Profile CTA --}}
    <div>
        <a href="{{ route('front.dashboard.profile') }}" style="text-decoration:none;">
            <div class="relative overflow-hidden rounded-2xl p-6 md:p-8 cursor-pointer shadow-lg hover:shadow-xl transition-all duration-300 group"
                 style="background:linear-gradient(to bottom right,#344F1F,#4a6b2a);">
                {{-- Decorative circles --}}
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white rounded-full translate-y-1/2 -translate-x-1/2"></div>
                </div>
                <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div class="flex-1 max-w-2xl">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-xl" style="background-color:rgba(244,153,26,0.19);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="10" r="3"/><path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"/></svg>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-white/20 text-white text-sm font-medium">0% complete</span>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Complete Your Profile</h2>
                        <p class="text-white/90 text-lg mb-3">Get discovered by German employers</p>
                        <p class="text-white/70 text-sm md:text-base max-w-lg">You're 0% complete. Add your skills, education, and preferences to unlock personalized job recommendations.</p>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="inline-flex items-center justify-center gap-2 rounded-full px-8 py-4 text-base font-semibold bg-white hover:bg-white/90 shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105" style="color:#344F1F;">
                            Complete Profile
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 group-hover:translate-x-1 transition-transform"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- Stat Cards --}}
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 md:gap-4">
        @php
            $stats = [
                ['label' => 'Profile', 'value' => '0', 'icon' => 'trophy', 'href' => route('front.dashboard.profile')],
                ['label' => 'Eligibility', 'value' => '—', 'icon' => 'target', 'href' => route('front.tools.eligibility-checker')],
                ['label' => 'German', 'value' => '—', 'icon' => 'book', 'href' => '#'],
                ['label' => 'Applications', 'value' => '0', 'icon' => 'clipboard', 'href' => '#'],
                ['label' => 'Saved', 'value' => '0', 'icon' => 'bookmark', 'href' => '#'],
            ];
            $icons = [
                'trophy' => '<path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/>',
                'target' => '<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>',
                'book' => '<path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/>',
                'clipboard' => '<rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/>',
                'bookmark' => '<path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"/>',
            ];
        @endphp
        @foreach($stats as $stat)
        <a href="{{ $stat['href'] }}" style="text-decoration:none;">
            <div class="relative flex flex-col items-center justify-center p-3 md:p-4 rounded-xl overflow-hidden min-h-[85px] md:min-h-[95px] shadow-md transition-all duration-300 ease-out cursor-pointer hover:shadow-lg hover:scale-[1.02] hover:-translate-y-0.5"
                 style="background:linear-gradient(to bottom right,#F4991A,#F5A733,#E5890F);box-shadow:0 4px 6px rgba(244,153,26,0.2);">
                <div class="p-2 rounded-lg mb-1.5" style="background:rgba(255,255,255,0.2);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $icons[$stat['icon']] !!}</svg>
                </div>
                <p class="text-xl md:text-2xl font-bold text-white">{{ $stat['value'] }}</p>
                <p class="text-[11px] font-medium text-white/90 mt-0.5">{{ $stat['label'] }}</p>
                <div class="absolute bottom-0 left-0 right-0 h-1.5" style="background:rgba(255,255,255,0.2);">
                    <div class="h-full bg-white transition-all duration-500" style="width:0%;"></div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- Recommendations Section --}}
    <div id="recommendations">
        <div class="rounded-xl p-6 border-2 shadow-sm" style="background:#F9F5F0;border-color:rgba(52,79,31,0.1);box-shadow:0 2px 4px rgba(52,79,31,0.06);">
            <div class="text-center py-8">
                <div class="mx-auto w-16 h-16 mb-4 rounded-full flex items-center justify-center" style="background:rgba(244,153,26,0.15);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#F4991A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                </div>
                <h3 class="text-lg font-semibold mb-2" style="color:#344F1F;">Ready to Find Your Perfect Match?</h3>
                <p class="text-sm mb-6 max-w-md mx-auto" style="color:rgba(52,79,31,0.7);">Set your sector and city preferences to get personalized job recommendations from top-rated employers.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <button class="inline-flex items-center justify-center gap-2 text-sm font-semibold transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 h-12 py-3 rounded-full px-6 border-2" style="border-color:rgba(52,79,31,0.15);color:#344F1F;background:transparent;">
                        Set Preferences
                    </button>
                    <button class="inline-flex items-center justify-center gap-2 text-sm font-semibold transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 h-12 py-3 rounded-full px-6 text-white" style="background:#F4991A;box-shadow:0 4px 12px rgba(244,153,26,0.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                        Generate Recommendations
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Application Tracking --}}
    <div class="rounded-xl border bg-card text-card-foreground shadow p-6" style="border-color:rgba(52,79,31,0.08);background:linear-gradient(to bottom right,white,rgba(249,245,240,0.3));">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-xl" style="background:rgba(244,153,26,0.1);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F4991A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold mb-1" style="color:#344F1F;">Start Tracking Your Applications</h3>
                    <p class="text-sm" style="color:rgba(52,79,31,0.6);">Generate AI application kits and track all your job applications in one place.</p>
                </div>
            </div>
            <a href="{{ route('front.jobs') }}">
                <button class="inline-flex items-center justify-center gap-2 text-sm font-semibold transition-all duration-200 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 py-3 text-white rounded-full px-6" style="background:#F4991A;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                    Browse Jobs
                </button>
            </a>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div>
        <div class="mb-4">
            <h3 class="tracking-tight font-semibold text-sm sm:text-base" style="color:#344F1F;">Quick Actions</h3>
            <p class="text-sm leading-relaxed text-muted-foreground">Tools to accelerate your journey</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            {{-- Browse Jobs --}}
            <a href="{{ route('front.jobs') }}" style="text-decoration:none;">
                <div class="rounded-xl border bg-card text-card-foreground shadow p-5 transition-all group h-full min-h-[130px] flex flex-col justify-center hover:shadow-lg cursor-pointer" style="border-color:rgba(52,79,31,0.08);">
                    <div class="flex flex-col items-center text-center space-y-3">
                        <div class="p-3.5 rounded-xl transition-all duration-200 group-hover:scale-105 group-hover:shadow-md" style="background-color:rgba(244,153,26,0.08);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F4991A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold mb-0.5 text-sm" style="color:#344F1F;">Browse Jobs</p>
                            <p class="text-xs leading-tight" style="color:rgba(52,79,31,0.6);">Find your perfect Ausbildung</p>
                        </div>
                    </div>
                </div>
            </a>

            {{-- Application Kit --}}
            <a href="{{ route('front.tools.cover-letter') }}" style="text-decoration:none;">
                <div class="rounded-xl border bg-card text-card-foreground shadow p-5 transition-all group h-full min-h-[130px] flex flex-col justify-center hover:shadow-lg cursor-pointer" style="border-color:rgba(52,79,31,0.08);">
                    <div class="flex flex-col items-center text-center space-y-3">
                        <div class="p-3.5 rounded-xl transition-all duration-200 group-hover:scale-105 group-hover:shadow-md" style="background-color:rgba(52,79,31,0.08);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#344F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold mb-0.5 text-sm" style="color:#344F1F;">Application Kit</p>
                            <p class="text-xs leading-tight" style="color:rgba(52,79,31,0.6);">Cover letter, checklist & email in 30 seconds</p>
                        </div>
                    </div>
                </div>
            </a>

            {{-- Build CV (locked) --}}
            <div class="relative">
                <div class="rounded-xl border bg-card text-card-foreground shadow p-5 transition-all h-full min-h-[130px] flex flex-col justify-center cursor-not-allowed opacity-60" style="border-color:rgba(52,79,31,0.08);">
                    <div class="absolute inset-0 bg-white/70 backdrop-blur-[1px] rounded-xl z-10 flex flex-col items-center justify-center">
                        <div class="p-2.5 rounded-full mb-2" style="background:#F2EAD3;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:rgba(52,79,31,0.4);"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </div>
                        <span class="text-xs font-medium text-center px-2" style="color:rgba(52,79,31,0.5);">50% to unlock</span>
                    </div>
                    <div class="flex flex-col items-center text-center space-y-3">
                        <div class="p-3.5 rounded-xl" style="background-color:rgba(52,79,31,0.08);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#344F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold mb-0.5 text-sm" style="color:#344F1F;">Build CV</p>
                            <p class="text-xs leading-tight" style="color:rgba(52,79,31,0.6);">Create German-standard CV</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Improve German (locked) --}}
            <div class="relative">
                <div class="rounded-xl border bg-card text-card-foreground shadow p-5 transition-all h-full min-h-[130px] flex flex-col justify-center cursor-not-allowed opacity-60" style="border-color:rgba(52,79,31,0.08);">
                    <div class="absolute inset-0 bg-white/70 backdrop-blur-[1px] rounded-xl z-10 flex flex-col items-center justify-center">
                        <div class="p-2.5 rounded-full mb-2" style="background:#F2EAD3;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:rgba(52,79,31,0.4);"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </div>
                        <span class="text-xs font-medium text-center px-2" style="color:rgba(52,79,31,0.5);">30% to unlock</span>
                    </div>
                    <div class="flex flex-col items-center text-center space-y-3">
                        <div class="p-3.5 rounded-xl" style="background-color:rgba(244,153,26,0.08);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F4991A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold mb-0.5 text-sm" style="color:#344F1F;">Improve German</p>
                            <p class="text-xs leading-tight" style="color:rgba(52,79,31,0.6);">Learn German</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Helpful Resources --}}
    <div class="border-t pt-6 mt-4" style="border-color:rgba(52,79,31,0.08);">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <p class="text-xs text-muted-foreground font-medium">Helpful Resources</p>
            <div class="flex flex-wrap gap-6">
                <a href="{{ route('front.application') }}" class="text-xs transition-colors hover:text-[#F4991A]" style="color:rgba(52,79,31,0.5);">Application Guide</a>
                <a href="{{ route('front.costs') }}" class="text-xs transition-colors hover:text-[#F4991A]" style="color:rgba(52,79,31,0.5);">Financial Planning</a>
                <a href="{{ route('front.visa') }}" class="text-xs transition-colors hover:text-[#F4991A]" style="color:rgba(52,79,31,0.5);">Visa Guide</a>
                <a href="{{ route('front.housing') }}" class="text-xs transition-colors hover:text-[#F4991A]" style="color:rgba(52,79,31,0.5);">Living in Germany</a>
            </div>
        </div>
    </div>

</div>
@endsection
