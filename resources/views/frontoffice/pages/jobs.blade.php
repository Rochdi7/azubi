@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Jobs Germany 2026: 45,000+ Verified Positions | Azubi')

@section('meta')
    <meta name="description"
        content="Browse 45,000+ real Ausbildung jobs from 170+ verified German employers. Filter by sector, city, salary (€850-1,300), and German level. Direct application links." />
    <meta name="keywords"
        content="ausbildung jobs germany,ausbildung stellenangebote,vocational training jobs,apprenticeship germany,ausbildung positions 2026" />
    <meta property="og:title" content="Ausbildung Jobs Germany 2026: 45,000+ Verified Positions" />
    <meta property="og:description"
        content="Browse 45,000+ real Ausbildung jobs from 170+ verified German employers. Filter by sector, city, salary (€850-1,300), and German level. Direct application links." />
    <meta property="og:url" content="{{ url('/jobs') }}" />
    <meta property="og:image" content="https://images.azubi.ma/og-images/jobs.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Ausbildung Jobs Germany 2026: 45,000+ Verified Positions" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Ausbildung Jobs Germany 2026: 45,000+ Verified Positions" />
    <meta name="twitter:description"
        content="Browse 45,000+ real Ausbildung jobs from 170+ verified German employers. Filter by sector, city, salary (€850-1,300), and German level. Direct application links." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/jobs') }}" />
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Hamburg harbor in autumn - Germany&#39;s business and port city" loading="eager" decoding="async"
                data-nimg="fill" class="object-cover object-center"
                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                sizes="100vw" src="{{ asset('assets/_next/hamburg-harbor-hero-autumn9127.jpeg') }}" />
            <div class="absolute inset-0 bg-black/30 z-0 azubi-hero-veil">
            </div>
            <div class="absolute inset-0 z-0"
                style="background:radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),
            linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),
            linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),
            linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)">
            </div>
            <div
                class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5 items-start text-left max-w-7xl">
                <div class="flex flex-col gap-4 sm:gap-5 max-w-2xl">
                    <div class="animate-fade-in-up animation-delay-100">
                        <div class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold"
                            aria-label="Smart Job Matching">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-briefcase h-4 w-4 mr-2" aria-hidden="true">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                </path>
                                <rect width="20" height="14" x="2" y="6" rx="2">
                                </rect>
                            </svg>
                            Smart Job Matching
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Find Your Perfect Ausbildung Match
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        67388+ real positions. Smart matching finds jobs you&#39;ll love.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 justify-start"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#5D5DE9] hover:bg-[#2C3340] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Find Your Match" href="#jobs-section"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-briefcase w-5 h-5 mr-2">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                    </path>
                                    <rect width="20" height="14" x="2" y="6" rx="2">
                                    </rect>
                                </svg>
                            </span>
                            <span> Find Your Match
                            </span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Apply 10x Faster" href="/auth?signup"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users w-5 h-5 mr-2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                    </path>
                                    <circle cx="9" cy="7" r="4">
                                    </circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                    </path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                    </path>
                                </svg>
                            </span>
                            <span> Apply 10x Faster
                            </span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    Hamburg Harbor, Germany
                </p>
            </div>
        </section>
        <section id="jobs-section" class="py-8 sm:py-12 md:py-16">
            <div class="container mx-auto px-4 md:px-6">
                <div>
                    <div class="flex justify-end mb-4">
                        <div class="inline-flex items-center">
                            <div class="inline-flex bg-[#EEF0F4] rounded-full p-1 gap-1">
                                <button
                                    class="px-3 py-1.5 text-sm font-medium rounded-full transition-all duration-200 text-[#2C3340]/70 hover:text-[#2C3340]"
                                    aria-label="Switch to German" aria-pressed="false">
                                    DE
                                </button>
                                <button
                                    class="px-3 py-1.5 text-sm font-medium rounded-full transition-all duration-200 bg-[#5D5DE9] text-white shadow-sm"
                                    aria-label="Switch to English" aria-pressed="true">
                                    EN
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full overflow-x-hidden">
                        <div
                            class="bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] p-4 md:p-6 mb-6 md:mb-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4 mb-3 md:mb-4">
                                <input type="text" placeholder="Job title or keyword"
                                    class="h-10 md:h-11 w-full rounded-full border-2 border-[rgba(44,51,64,0.12)] bg-[#F7F8FA] px-4 text-sm text-[#2C3340] focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 focus:border-[#5D5DE9]" />
                                <input type="text" placeholder="City or state"
                                    class="h-10 md:h-11 w-full rounded-full border-2 border-[rgba(44,51,64,0.12)] bg-[#F7F8FA] px-4 text-sm text-[#2C3340] focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 focus:border-[#5D5DE9]" />
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                                <div>
                                    <select
                                        class="h-10 md:h-11 w-full bg-white/90 border-2 border-[#2C3340]/20 rounded-[12px] px-4 text-sm font-medium text-[#2C3340]">
                                        <option>All sectors</option>
                                        <option>Healthcare</option>
                                        <option>IT &amp; Technology</option>
                                        <option>Engineering</option>
                                    </select>
                                </div>
                                <div>
                                    <select
                                        class="h-10 md:h-11 w-full bg-white/90 border-2 border-[#2C3340]/20 rounded-[12px] px-4 text-sm font-medium text-[#2C3340]">
                                        <option>Any language level</option>
                                        <option>A2</option>
                                        <option>B1</option>
                                        <option>B2+</option>
                                    </select>
                                </div>
                                <div>
                                    <select
                                        class="h-10 md:h-11 w-full bg-white/90 border-2 border-[#2C3340]/20 rounded-[12px] px-4 text-sm font-medium text-[#2C3340]">
                                        <option>Salary range</option>
                                        <option>€850 - €1,000</option>
                                        <option>€1,001 - €1,300</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-1.5 mb-6">
                            <span class="inline-flex items-center gap-1 text-xs text-[#2C3340]/50 mr-1"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trending-up w-3 h-3">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17">
                                    </polyline>
                                    <polyline points="16 7 22 7 22 13">
                                    </polyline>
                                </svg>
                                Popular:
                            </span>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                Healthcare
                            </button>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                IT &amp; Tech
                            </button>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                Engineering
                            </button>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                Hospitality
                            </button>
                            <span class="text-[#2C3340]/20 mx-1"> |
                            </span>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                Berlin
                            </button>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                Munich
                            </button>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                Hamburg
                            </button>
                            <button
                                class="text-xs px-2.5 py-1 rounded-full transition-all duration-150 bg-[#F7F8FA] text-[#2C3340]/70 hover:bg-[#5D5DE9]/10 hover:text-[#5D5DE9]">
                                Frankfurt
                            </button>
                        </div>
                        <div id="jobs-listing"
                            class="flex flex-col items-center gap-3 mb-6 sm:flex-row sm:items-center sm:justify-between scroll-mt-4">
                            <div class="text-center sm:text-left">
                                <p
                                    class="text-base font-medium text-[#2C3340] sm:text-sm sm:font-normal sm:text-[rgba(44,51,64,0.7)]">
                                    <span> Showing
                                        <span class="font-semibold text-[#2C3340]"> 12
                                        </span>
                                        of
                                        <span class="font-semibold text-[#2C3340]"> 67388
                                        </span>
                                        jobs
                                    </span>
                                </p>
                            </div>
                            <div class="flex items-center justify-center gap-2 sm:justify-end sm:gap-3 flex-wrap">
                                <div class="hidden sm:block">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm text-[rgba(44,51,64,0.7)] whitespace-nowrap"> Show:
                                        </span>
                                        <button type="button" role="combobox" aria-controls="radix-R2ce8uslb"
                                            aria-expanded="false" aria-autocomplete="none" dir="ltr"
                                            data-state="closed"
                                            class="flex items-center justify-between px-3 py-2 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] w-[90px]">
                                            <span style="pointer-events:none">12</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-chevron-down h-4 w-4 text-[#2C3340]/70"
                                                aria-hidden="true">
                                                <path d="m6 9 6 6 6-6">
                                                </path>
                                            </svg>
                                        </button>
                                        <select aria-hidden="true" tabindex="-1"
                                            style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                        </select>
                                    </div>
                                </div>
                                <button type="button" role="combobox" aria-controls="radix-Rke8uslb"
                                    aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed"
                                    class="flex items-center justify-between px-4 py-2 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] w-[170px]">
                                    <span style="pointer-events:none">Latest</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-[#2C3340]/70" aria-hidden="true">
                                        <path d="m6 9 6 6 6-6">
                                        </path>
                                    </svg>
                                </button>
                                <select aria-hidden="true" tabindex="-1"
                                    style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                </select>
                                <div class="inline-flex items-center">
                                    <div class="inline-flex bg-[#EEF0F4] rounded-full p-1 gap-1">
                                        <button
                                            class="p-3 md:p-2 rounded-full transition-all duration-200 bg-[#5D5DE9] text-white shadow-sm"
                                            aria-label="Grid view" aria-pressed="true" title="Grid view">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-layout-grid w-5 h-5 md:w-[18px] md:h-[18px]">
                                                <rect width="7" height="7" x="3" y="3" rx="1">
                                                </rect>
                                                <rect width="7" height="7" x="14" y="3" rx="1">
                                                </rect>
                                                <rect width="7" height="7" x="14" y="14" rx="1">
                                                </rect>
                                                <rect width="7" height="7" x="3" y="14" rx="1">
                                                </rect>
                                            </svg>
                                        </button>
                                        <button
                                            class="p-3 md:p-2 rounded-full transition-all duration-200 text-[#2C3340]/70 hover:text-[#2C3340]"
                                            aria-label="List view" aria-pressed="false" title="List view">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-list w-5 h-5 md:w-[18px] md:h-[18px]">
                                                <path d="M3 12h.01">
                                                </path>
                                                <path d="M3 18h.01">
                                                </path>
                                                <path d="M3 6h.01">
                                                </path>
                                                <path d="M8 12h13">
                                                </path>
                                                <path d="M8 18h13">
                                                </path>
                                                <path d="M8 6h13">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Sparkasse KölnBonn" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=karriere.sparkasse-koelnbonn.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            5286
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Dual Study Program Bankkaufmann/-frau (m/w/d)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/sparkasse-koelnbonn"> Sparkasse KölnBonn
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> KölnBonn
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 13 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Finance
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Dual Study
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Sparkasse KölnBonn! Diese Ausbildung als Duales Studium
                                        Bankkaufmann/-frau (m/w/d) findet in KölnBonn, No...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/sparkasse-koelnbonn/duales-studium-bankkaufmann-frau-mwd-koelnbonn-efa351e9">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Klöpferholz GmbH &amp; Co.KG" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=kloepfer.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            6125
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Apprentice (m/f/d) Specialist for Warehouse Logistics
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/kloepferholz-gmbh-cokg-4967452e"> Klöpferholz GmbH &amp; Co.KG
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> Garching
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 19 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Logistics
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Klöpferholz GmbH &amp; Co.KG! Diese Ausbildung als Azubi (m/w/d)
                                        Fachkraft für Lagerlogistik findet in Garchi...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/kloepferholz-gmbh-cokg-4967452e/azubi-mwd-fachkraft-fuer-lagerlogistik-garching-d2039995">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Deutsche Bahn AG" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=deutschebahn.com&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            7835
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Ausbildung as IT Specialist for System Integration (m/f/d)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/deutsche-bahn-23eddf32"> Deutsche Bahn AG
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> Berlin
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 15 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            IT &amp; Technology
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Deutsche Bahn AG! Diese Ausbildung als Ausbildung zum
                                        Fachinformatiker für Systemintegration (m/w/d) find...
                                    </p>
                                    <div class="flex items-center text-sm font-semibold text-[#2C3340] mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-dollar-sign w-4 h-4 mr-1 text-[#5D5DE9]">
                                            <line x1="12" x2="12" y1="2" y2="22">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                            </path>
                                        </svg>
                                        <span> €1,241-1,344/EUR
                                        </span>
                                    </div>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/deutsche-bahn-23eddf32/ausbildung-zum-fachinformatiker-fuer-systemintegration-mwd-berlin-6c8eef17">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Deutsche Bahn AG" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=deutschebahn.com&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            3393
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Ausbildung as IT specialist for system integration
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/deutsche-bahn-23eddf32"> Deutsche Bahn AG
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> Berlin
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 15 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            IT &amp; Technology
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Deutsche Bahn AG! Diese Ausbildung als Ausbildung zum
                                        Fachinformatiker für Systemintegration findet in Be...
                                    </p>
                                    <div class="flex items-center text-sm font-semibold text-[#2C3340] mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-dollar-sign w-4 h-4 mr-1 text-[#5D5DE9]">
                                            <line x1="12" x2="12" y1="2" y2="22">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                            </path>
                                        </svg>
                                        <span> €1,241-1,344/EUR
                                        </span>
                                    </div>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/deutsche-bahn-23eddf32/ausbildung-zum-fachinformatiker-fuer-systemintegration-berlin-50c18ebf">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Deutsche Bahn AG" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=deutschebahn.com&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            3866
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Ausbildung as an Electronics Technician for Industrial Engineering (m/f/d)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/deutsche-bahn-23eddf32"> Deutsche Bahn AG
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> München
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 18 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Engineering
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Deutsche Bahn AG! Diese Ausbildung als Ausbildung zum Elektroniker
                                        für Betriebstechnik (m/w/d) findet in ...
                                    </p>
                                    <div class="flex items-center text-sm font-semibold text-[#2C3340] mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-dollar-sign w-4 h-4 mr-1 text-[#5D5DE9]">
                                            <line x1="12" x2="12" y1="2" y2="22">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                            </path>
                                        </svg>
                                        <span> €1,241-1,344/EUR
                                        </span>
                                    </div>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/deutsche-bahn-23eddf32/ausbildung-zum-elektroniker-fuer-betriebstechnik-mwd-muenchen-3c3be4fa">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Stadtwerke München GmbH" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=swm.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            3446
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Ausbildung as IT Specialist for System Integration (m/f/d)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/stadtwerke-muenchen-gmbh-7b4a510b"> Stadtwerke München GmbH
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> München
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 3 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            IT &amp; Technology
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Stadtwerke München GmbH! Diese Ausbildung als Ausbildung zum
                                        Fachinformatiker für Systemintegration (m/w/...
                                    </p>
                                    <div class="flex items-center text-sm font-semibold text-[#2C3340] mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-dollar-sign w-4 h-4 mr-1 text-[#5D5DE9]">
                                            <line x1="12" x2="12" y1="2" y2="22">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                            </path>
                                        </svg>
                                        <span> €1,241-1,344/EUR
                                        </span>
                                    </div>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/stadtwerke-muenchen-gmbh-7b4a510b/ausbildung-zum-fachinformatiker-fuer-systemintegration-mwd-muenchen-fcc6048a">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Sparkasse KölnBonn" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=karriere.sparkasse-koelnbonn.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            2641
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Dual Study Program
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/sparkasse-koelnbonn"> Sparkasse KölnBonn
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> KölnBonn
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 13 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Finance
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Dual Study
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Sparkasse KölnBonn! Diese Ausbildung als Duales Studium findet in
                                        KölnBonn, Nordrhein-Westfalen statt. Di...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/sparkasse-koelnbonn/duales-studium-koelnbonn-58e3f4a5"> <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Sparkasse KölnBonn" loading="lazy" width="48"
                                                        height="48" decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=karriere.sparkasse-koelnbonn.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            2380
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Ausbildung as a Bankkauffrau / Bankkaufmann (m/f/d)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/sparkasse-koelnbonn"> Sparkasse KölnBonn
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> KölnBonn
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 18 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Finance
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Sparkasse KölnBonn! Diese Ausbildung als Ausbildung zur Bankkauffrau
                                        / zum Bankkaufmann (m/w/d) findet in...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/sparkasse-koelnbonn/ausbildung-zur-bankkauffrau-zum-bankkaufmann-mwd-koelnbonn-e28c920a">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Goldmann" loading="lazy" width="48" height="48"
                                                        decoding="async" data-nimg="1"
                                                        class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=gold-mann.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            3393
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Dual Study Program Business Management (Bachelor) and Ausbildung as Wholesale and
                                        Foreign Trade Management Clerk (m/f/d)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/goldmann"> Goldmann
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> Bielefeld
                                            </span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path d="M8 2v4">
                                                </path>
                                                <path d="M16 2v4">
                                                </path>
                                                <rect width="18" height="18" x="3" y="4" rx="2">
                                                </rect>
                                                <path d="M3 10h18">
                                                </path>
                                            </svg>
                                            <span> Aug 2026
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 14 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Manufacturing
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Dual Study
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Gold-Mann! Diese Ausbildung als Duales Studium Business Management
                                        (Bachelor) und Ausbildung zum Kaufmann...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/goldmann/duales-studium-business-management-bachelor-und-ausbildung-zum-kaufmann-fuer-gross-und-aussenhandelsmanagement-mwd-bielefeld-810e1bcd">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Klöpferholz GmbH &amp; Co.KG" loading="lazy"
                                                        width="48" height="48" decoding="async"
                                                        data-nimg="1" class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=kloepfer.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            2202
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Kauffrau/-mann Groß- und Außenhandelsmanagement
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/kloepferholz-gmbh-cokg-4967452e"> Klöpferholz GmbH &amp; Co.KG
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> Garching
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 18 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Manufacturing
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Klöpferholz GmbH &amp; Co.KG! Diese Ausbildung als Kauffrau/-mann
                                        Groß- und Außenhandelsmanagement findet in ...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/kloepferholz-gmbh-cokg-4967452e/kauffrau-mann-gross-und-aussenhandelsmanagement-garching-6dc4e376">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Erzieherakademie Heilbronn (Phorms)" loading="lazy"
                                                        width="48" height="48" decoding="async"
                                                        data-nimg="1" class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=phorms.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            2600
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Practice-integrated Ausbildung to become an educator (all genders)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/erzieherakademie-heilbronn"> Erzieherakademie Heilbronn
                                            (Phorms)
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> Dreieich
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 18 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Education
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Phorms Education! Diese Ausbildung als Praxisintegrierte Ausbildung
                                        zum Erzieher (all genders) findet in ...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/erzieherakademie-heilbronn/praxisintegrierte-ausbildung-zum-erzieher-all-genders-dreieich-3c50032e">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(44,51,64,0.1)] rounded-xl shadow-[0_2px_4px_rgba(44,51,64,0.06),0_1px_2px_rgba(44,51,64,0.04)] hover:shadow-[0_10px_20px_rgba(44,51,64,0.1),0_4px_8px_rgba(44,51,64,0.06)] hover:-translate-y-1 hover:border-[rgba(44,51,64,0.15)]">
                                <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#EEF0F4]">
                                                <div class="relative overflow-hidden w-full h-full object-cover"> <img
                                                        alt="Erzieherakademie Heilbronn (Phorms)" loading="lazy"
                                                        width="48" height="48" decoding="async"
                                                        data-nimg="1" class="w-full h-full object-cover"
                                                        style="color:transparent;object-fit:cover;width:100%;height:100%"
                                                        sizes="48px"
                                                        src="https://www.google.com/s2/favicons?domain=phorms.de&sz=128" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#2C3340] text-[#F7F8FA] border-0 hover:bg-[#2C3340] px-2 py-1 text-xs font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-3 h-3 mr-1">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3">
                                                </circle>
                                            </svg>
                                            2367
                                        </div>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold text-[#2C3340] mb-1 line-clamp-2 leading-tight group-hover:text-[#5D5DE9] transition-colors">
                                        Ausbildungsplatz zum Erzieher (all genders)
                                    </h3>
                                    <div class="flex items-center gap-2 text-sm text-[rgba(44,51,64,0.7)] mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#5D5DE9]">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                            </path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                            </path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <path d="M10 6h4">
                                            </path>
                                            <path d="M10 10h4">
                                            </path>
                                            <path d="M10 14h4">
                                            </path>
                                            <path d="M10 18h4">
                                            </path>
                                        </svg>
                                        <a class="font-medium truncate hover:text-[#5D5DE9] hover:underline transition-colors"
                                            href="/company/erzieherakademie-heilbronn"> Erzieherakademie Heilbronn
                                            (Phorms)
                                        </a>
                                        <span class="relative group/azubi-badge inline-block"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-badge-check h-3 w-3 text-blue-600">
                                                <path
                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                </path>
                                                <path d="m9 12 2 2 4-4">
                                                </path>
                                            </svg>
                                            <span
                                                class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-[#2C3340] text-white text-xs rounded-lg opacity-0 group-hover/azubi-badge:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-50">
                                                Verifiziert
                                            </span>
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-[rgba(44,51,64,0.7)] mb-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3">
                                                </circle>
                                            </svg>
                                            <span> Berlin Mitte
                                            </span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar w-3 h-3 mr-1 text-[#5D5DE9]">
                                                <path d="M8 2v4">
                                                </path>
                                                <path d="M16 2v4">
                                                </path>
                                                <rect width="18" height="18" x="3" y="4" rx="2">
                                                </rect>
                                                <path d="M3 10h18">
                                                </path>
                                            </svg>
                                            <span> Sep 2026
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#5D5DE9]/10 text-[#5D5DE9] border border-[#5D5DE9]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users h-3 w-3">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                                </path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                                </path>
                                            </svg>
                                            <span> 23 interested
                                            </span>
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[rgba(93,93,233,0.1)] text-[#5D5DE9] border-0 hover:bg-[rgba(93,93,233,0.15)] px-3 py-1 text-xs font-semibold rounded-full">
                                            Education
                                        </div>
                                        <div
                                            class="inline-flex items-center transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#EEF0F4] text-[#2C3340] border-0 hover:bg-[#EEF0F4] px-3 py-1 text-xs font-medium rounded-full">
                                            Apprenticeship
                                        </div>
                                    </div>
                                    <p class="text-sm text-[rgba(44,51,64,0.7)] line-clamp-3 leading-relaxed mb-4">
                                        Willkommen bei Phorms Education! Diese Ausbildung als Ausbildungsplatz zum Erzieher
                                        (all genders) findet in Berlin Mitte...
                                    </p>
                                </div>
                                <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                                    <div class="flex gap-2 flex-wrap">
                                        <a class="flex-1"
                                            href="/jobs/erzieherakademie-heilbronn/ausbildungsplatz-zum-erzieher-all-genders-berlin-mitte-7665059b">
                                            <button
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-10 px-6 text-sm w-full transition-all duration-200 group/azubi-btn bg-[#5D5DE9] hover:bg-[#2C3340] text-white rounded-full shadow-[0_4px_12px_rgba(93,93,233,0.2)] hover:shadow-[0_8px_20px_rgba(93,93,233,0.25)] hover:-translate-y-0.5 min-h-[44px]">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/azubi-btn:translate-x-1">
                                                    <path d="M5 12h14">
                                                    </path>
                                                    <path d="m12 5 7 7-7 7">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-4 mt-8">
                            <div class="text-sm text-[rgba(44,51,64,0.7)] font-medium">
                                Page 1 of 5616
                            </div>
                            <div class="flex flex-wrap items-center justify-center gap-2">
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:-translate-y-0.5 active:translate-y-0 h-12 transition-all duration-200 bg-white border-2 border-[rgba(44,51,64,0.15)] text-[#2C3340] hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9] rounded-full disabled:opacity-50 disabled:cursor-not-allowed px-3 md:px-4 py-2"
                                    disabled="">
                                    <span class="hidden sm:inline"> Previous
                                    </span>
                                    <span class="sm:hidden"> Prev
                                    </span>
                                </button>
                                <div class="flex items-center gap-1 md:gap-2">
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-8 py-3 transition-all duration-200 w-11 h-11 md:w-10 md:h-10 rounded-full text-sm md:text-base bg-[#5D5DE9] hover:bg-[#2C3340] text-white shadow-[0_4px_12px_rgba(93,93,233,0.2)]">
                                        1
                                    </button>
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:-translate-y-0.5 active:translate-y-0 px-8 py-3 transition-all duration-200 w-11 h-11 md:w-10 md:h-10 rounded-full text-sm md:text-base bg-white border-2 border-[rgba(44,51,64,0.15)] text-[#2C3340] hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9]">
                                        2
                                    </button>
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:-translate-y-0.5 active:translate-y-0 px-8 py-3 transition-all duration-200 w-11 h-11 md:w-10 md:h-10 rounded-full text-sm md:text-base bg-white border-2 border-[rgba(44,51,64,0.15)] text-[#2C3340] hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9]">
                                        3
                                    </button>
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:-translate-y-0.5 active:translate-y-0 px-8 py-3 transition-all duration-200 w-11 h-11 md:w-10 md:h-10 rounded-full text-sm md:text-base bg-white border-2 border-[rgba(44,51,64,0.15)] text-[#2C3340] hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9]">
                                        4
                                    </button>
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:-translate-y-0.5 active:translate-y-0 px-8 py-3 transition-all duration-200 w-11 h-11 md:w-10 md:h-10 rounded-full text-sm md:text-base bg-white border-2 border-[rgba(44,51,64,0.15)] text-[#2C3340] hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9]">
                                        5
                                    </button>
                                </div>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:-translate-y-0.5 active:translate-y-0 h-12 transition-all duration-200 bg-white border-2 border-[rgba(44,51,64,0.15)] text-[#2C3340] hover:bg-[rgba(93,93,233,0.05)] hover:border-[#5D5DE9] hover:text-[#5D5DE9] rounded-full disabled:opacity-50 disabled:cursor-not-allowed px-3 md:px-4 py-2">
                                    Next
                                </button>
                            </div>
                        </div>
                        <div class="mt-12 pt-8 border-t border-[rgba(44,51,64,0.1)]">
                            <h3 class="text-lg font-semibold text-[#2C3340] mb-6 text-center">
                                Popular Filters
                            </h3>
                            <div class="mb-6">
                                <div class="flex items-center justify-center gap-2 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-building2 w-4 h-4 text-[#2C3340]/60">
                                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                        </path>
                                        <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                        </path>
                                        <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                        </path>
                                        <path d="M10 6h4">
                                        </path>
                                        <path d="M10 10h4">
                                        </path>
                                        <path d="M10 14h4">
                                        </path>
                                        <path d="M10 18h4">
                                        </path>
                                    </svg>
                                    <span class="text-sm font-medium text-[#2C3340]/70"> By Industry
                                    </span>
                                </div>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <button
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-heart w-3.5 h-3.5">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg>
                                        <span> Healthcare
                                        </span>
                                    </button>
                                    <button
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-cpu w-3.5 h-3.5">
                                            <rect width="16" height="16" x="4" y="4" rx="2">
                                            </rect>
                                            <rect width="6" height="6" x="9" y="9" rx="1">
                                            </rect>
                                            <path d="M15 2v2">
                                            </path>
                                            <path d="M15 20v2">
                                            </path>
                                            <path d="M2 15h2">
                                            </path>
                                            <path d="M2 9h2">
                                            </path>
                                            <path d="M20 15h2">
                                            </path>
                                            <path d="M20 9h2">
                                            </path>
                                            <path d="M9 2v2">
                                            </path>
                                            <path d="M9 20v2">
                                            </path>
                                        </svg>
                                        <span> IT &amp; Tech
                                        </span>
                                    </button>
                                    <button
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-wrench w-3.5 h-3.5">
                                            <path
                                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                            </path>
                                        </svg>
                                        <span> Engineering
                                        </span>
                                    </button>
                                    <button
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-utensils-crossed w-3.5 h-3.5">
                                            <path d="m16 2-2.3 2.3a3 3 0 0 0 0 4.2l1.8 1.8a3 3 0 0 0 4.2 0L22 8">
                                            </path>
                                            <path
                                                d="M15 15 3.3 3.3a4.2 4.2 0 0 0 0 6l7.3 7.3c.7.7 2 .7 2.8 0L15 15Zm0 0 7 7">
                                            </path>
                                            <path d="m2.1 21.8 6.4-6.3">
                                            </path>
                                            <path d="m19 5-7 7">
                                            </path>
                                        </svg>
                                        <span> Hospitality
                                        </span>
                                    </button>
                                    <button
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-truck w-3.5 h-3.5">
                                            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2">
                                            </path>
                                            <path d="M15 18H9">
                                            </path>
                                            <path
                                                d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14">
                                            </path>
                                            <circle cx="17" cy="18" r="2">
                                            </circle>
                                            <circle cx="7" cy="18" r="2">
                                            </circle>
                                        </svg>
                                        <span> Logistics
                                        </span>
                                    </button>
                                    <button
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-shopping-bag w-3.5 h-3.5">
                                            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z">
                                            </path>
                                            <path d="M3 6h18">
                                            </path>
                                            <path d="M16 10a4 4 0 0 1-8 0">
                                            </path>
                                        </svg>
                                        <span> Retail
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-center gap-2 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin w-4 h-4 text-[#2C3340]/60">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3">
                                        </circle>
                                    </svg>
                                    <span class="text-sm font-medium text-[#2C3340]/70"> By City
                                    </span>
                                </div>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <button
                                        class="inline-flex items-center px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        Berlin
                                    </button>
                                    <button
                                        class="inline-flex items-center px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        Munich
                                    </button>
                                    <button
                                        class="inline-flex items-center px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        Hamburg
                                    </button>
                                    <button
                                        class="inline-flex items-center px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        Frankfurt
                                    </button>
                                    <button
                                        class="inline-flex items-center px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        Cologne
                                    </button>
                                    <button
                                        class="inline-flex items-center px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        Düsseldorf
                                    </button>
                                    <button
                                        class="inline-flex items-center px-4 py-2 rounded-full whitespace-nowrap text-sm font-medium transition-all duration-200 ease-out focus:outline-none focus:ring-2 focus:ring-[#5D5DE9]/20 bg-white border border-[rgba(44,51,64,0.12)] text-[#2C3340]/80 hover:border-[#5D5DE9] hover:text-[#5D5DE9] hover:bg-[rgba(93,93,233,0.04)]">
                                        Stuttgart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-10 sm:py-16 md:py-20 relative overflow-hidden bg-primary">
            <div class="absolute inset-0 -z-10">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-secondary/10 rounded-full blur-3xl animate-float-slow">
                </div>
                <div
                    class="absolute bottom-0 right-1/4 w-96 h-96 bg-background/10 rounded-full blur-3xl animate-float-slow-reverse">
                </div>
            </div>
            <div class="container mx-auto px-4">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl mb-3 text-white">
                        Stand Out From Other Applicants
                    </h2>
                    <p class="text-base leading-relaxed text-white/90">
                        Use our smart tools to prepare perfect applications
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <a href="/tools/cover-letter" class="group block">
                        <div
                            class="rounded-xl text-card-foreground shadow relative h-full hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-0 bg-white">
                            <div
                                class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 absolute -top-2 right-6 text-xs px-3 py-1 font-medium bg-secondary text-white border-secondary">
                                Smart
                            </div>
                            <div class="p-6">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                        </path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4">
                                        </path>
                                        <path d="M10 9H8">
                                        </path>
                                        <path d="M16 13H8">
                                        </path>
                                        <path d="M16 17H8">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                    Cover Letter Generator
                                </h3>
                                <p class="text-sm leading-relaxed text-muted-foreground mb-4">
                                    German letters in seconds
                                </p>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-muted-foreground"> 10,000+ created
                                    </span>
                                    <div
                                        class="flex items-center text-primary font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <span> Try Now
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                            <path d="M5 12h14">
                                            </path>
                                            <path d="m12 5 7 7-7 7">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="group block">
                        <div
                            class="rounded-xl text-card-foreground shadow relative h-full hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-0 bg-white">
                            <div
                                class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 absolute -top-2 right-6 text-xs px-3 py-1 font-medium bg-secondary text-white border-secondary">
                                New
                            </div>
                            <div class="p-6">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-video w-6 h-6">
                                        <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                        </path>
                                        <rect x="2" y="6" width="14" height="12" rx="2">
                                        </rect>
                                    </svg>
                                </div>
                                <h3 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                    Interview Simulator
                                </h3>
                                <p class="text-sm leading-relaxed text-muted-foreground mb-4">
                                    Practice with voice coaching
                                </p>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-muted-foreground"> 500+ daily sessions
                                    </span>
                                    <div
                                        class="flex items-center text-primary font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <span> Try Now
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                            <path d="M5 12h14">
                                            </path>
                                            <path d="m12 5 7 7-7 7">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group block">
                        <div
                            class="rounded-xl text-card-foreground shadow relative h-full hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-0 bg-white">
                            <div
                                class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 absolute -top-2 right-6 text-xs px-3 py-1 font-medium bg-secondary text-white border-secondary">
                                Most Popular
                            </div>
                            <div class="p-6">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-message-square w-6 h-6">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                    German Language Training
                                </h3>
                                <p class="text-sm leading-relaxed text-muted-foreground mb-4">
                                    Master German with conversations
                                </p>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-muted-foreground"> 15,000+ learners
                                    </span>
                                    <div
                                        class="flex items-center text-primary font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <span> Try Now
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                            <path d="M5 12h14">
                                            </path>
                                            <path d="m12 5 7 7-7 7">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-background">
            <div class="container px-4 md:px-6">

                <section class="relative py-12 overflow-hidden bg-[#F7F8FA]">
                    <div class="container relative z-10 mx-auto px-4">
                        <div class="max-w-7xl mx-auto">
                            <div class="relative" style="opacity:0;transform:translateY(20px)">
                                <div
                                    class="text-card-foreground shadow relative bg-[#5D5DE9] border-2 border-[#5D5DE9] overflow-hidden rounded-[24px]">
                                    <div class="relative p-4 sm:p-6 lg:p-8">
                                        <div class="block lg:hidden space-y-6">
                                            <div class="text-center">
                                                <div
                                                    class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold mb-3 rounded-full backdrop-blur-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-gift w-3 h-3 mr-1">
                                                        <rect x="3" y="8" width="18" height="4"
                                                            rx="1">
                                                        </rect>
                                                        <path d="M12 8v13">
                                                        </path>
                                                        <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7">
                                                        </path>
                                                        <path
                                                            d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                        </path>
                                                    </svg>
                                                    PROVEN TEMPLATES
                                                </div>
                                                <h3 class="text-lg sm:text-xl font-bold text-white leading-tight mb-2">
                                                    <span class="text-white"> REVEALED:
                                                    </span>
                                                    <!-- -->
                                                    200 Winning Ausbildung Applications
                                                </h3>
                                                <p class="text-sm text-white/90 mb-4 font-medium">
                                                    Copy-paste templates that got students hired at top German companies!
                                                </p>
                                                <div class="flex items-center justify-center gap-4 text-xs mb-4">
                                                    <div class="flex items-center gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-download w-3 h-3 text-white">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                            </path>
                                                            <polyline points="7 10 12 15 17 10">
                                                            </polyline>
                                                            <line x1="12" x2="12" y1="15"
                                                                y2="3">
                                                            </line>
                                                        </svg>
                                                        <span class="font-bold text-white"> 4,247
                                                        </span>
                                                        <span class="text-white/80"> downloaded
                                                        </span>
                                                    </div>
                                                    <div class="flex items-center gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <span class="text-white/80"> (4.9)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="bg-white rounded-[24px] border-2 border-[#5D5DE9]/30 p-4">
                                                    <div class="space-y-2 mb-4">
                                                        <h4 class="text-base font-bold text-[#2C3340]">
                                                            Get Your Exclusive Analysis
                                                        </h4>
                                                        <div
                                                            class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#5D5DE9] bg-[#5D5DE9]/10 text-[#5D5DE9] text-xs font-bold rounded-full">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-circle-check-big w-3 h-3 mr-1">
                                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                                </path>
                                                                <path d="m9 11 3 3L22 4">
                                                                </path>
                                                            </svg>
                                                            Free limited time offer
                                                        </div>
                                                    </div>
                                                    <form class="space-y-3">
                                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                                            <input
                                                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                                placeholder="First Name *" azubi-required=""
                                                                value="" />
                                                            <input
                                                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                                placeholder="Last Name *" azubi-required=""
                                                                value="" />
                                                        </div>
                                                        <input type="email"
                                                            class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                            placeholder="Your Email Address *" azubi-required=""
                                                            value="" />
                                                        <div class="grid grid-cols-1 gap-3">
                                                            <button type="button" role="combobox"
                                                                aria-controls="radix-Rbkqguslb" aria-expanded="false"
                                                                aria-required="true" aria-autocomplete="none"
                                                                dir="ltr" data-state="closed" data-placeholder=""
                                                                class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px]">
                                                                <span style="pointer-events:none"> German Level *
                                                                </span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                    aria-hidden="true">
                                                                    <path d="m6 9 6 6 6-6">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <select aria-hidden="true" azubi-required="" tabindex="-1"
                                                                style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                <option value="">
                                                                </option>
                                                            </select>
                                                            <button type="button" role="combobox"
                                                                aria-controls="radix-Rjkqguslb" aria-expanded="false"
                                                                aria-required="true" aria-autocomplete="none"
                                                                dir="ltr" data-state="closed" data-placeholder=""
                                                                class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px]">
                                                                <span style="pointer-events:none"> Field of Interest *
                                                                </span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                    aria-hidden="true">
                                                                    <path d="m6 9 6 6 6-6">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <select aria-hidden="true" azubi-required="" tabindex="-1"
                                                                style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                <option value="">
                                                                </option>
                                                            </select>
                                                            <button type="button" role="combobox"
                                                                aria-controls="radix-Rrkqguslb" aria-expanded="false"
                                                                aria-required="true" aria-autocomplete="none"
                                                                dir="ltr" data-state="closed" data-placeholder=""
                                                                class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px]">
                                                                <span style="pointer-events:none"> Current Country *
                                                                </span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                    aria-hidden="true">
                                                                    <path d="m6 9 6 6 6-6">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <select aria-hidden="true" azubi-required="" tabindex="-1"
                                                                style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                <option value="">
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <button
                                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-12 bg-[#5D5DE9] hover:bg-[#2C3340] text-white font-bold text-sm rounded-full transition-all duration-300"
                                                            type="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-download w-4 h-4 mr-2">
                                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                </path>
                                                                <polyline points="7 10 12 15 17 10">
                                                                </polyline>
                                                                <line x1="12" x2="12" y1="15"
                                                                    y2="3">
                                                                </line>
                                                            </svg>
                                                            GET EXCLUSIVE INSIGHTS NOW
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                                <path d="M5 12h14">
                                                                </path>
                                                                <path d="m12 5 7 7-7 7">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <div
                                                            class="flex items-center justify-center gap-4 text-xs text-[#2C3340]/70 pt-1">
                                                            <div class="flex items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-shield w-3 h-3 text-[#2C3340]">
                                                                    <path
                                                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                                    </path>
                                                                </svg>
                                                                <span> Secure
                                                                </span>
                                                            </div>
                                                            <div class="flex items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-zap w-3 h-3 text-[#5D5DE9]">
                                                                    <path
                                                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                                    </path>
                                                                </svg>
                                                                <span> Instant
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden lg:block">
                                            <div class="grid lg:grid-cols-12 gap-6 items-center">
                                                <div
                                                    class="lg:col-span-3 flex justify-center lg:justify-start items-center">
                                                    <div class="relative">
                                                        <img src="{{ asset('assets/_next/mascot_pointing_male8bc3.jpeg') }}"
                                                            alt="Azubi Mascot" class="w-56 h-auto object-contain" />
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 space-y-3">
                                                    <div
                                                        class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold rounded-full backdrop-blur-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-gift w-3 h-3 mr-1">
                                                            <rect x="3" y="8" width="18" height="4"
                                                                rx="1">
                                                            </rect>
                                                            <path d="M12 8v13">
                                                            </path>
                                                            <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                            </path>
                                                        </svg>
                                                        PROVEN TEMPLATES
                                                    </div>
                                                    <h3 class="text-xl lg:text-2xl font-bold text-white leading-tight">
                                                        <span class="text-white"> REVEALED:
                                                        </span>
                                                        <!-- -->
                                                        200 Winning Ausbildung Applications
                                                    </h3>
                                                    <p class="text-sm text-white/90 font-medium">
                                                        Copy-paste templates that got students hired at top German
                                                        companies!
                                                    </p>
                                                    <div class="flex items-center gap-4 text-xs">
                                                        <div class="flex items-center gap-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-download w-3 h-3 text-white">
                                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                </path>
                                                                <polyline points="7 10 12 15 17 10">
                                                                </polyline>
                                                                <line x1="12" x2="12" y1="15"
                                                                    y2="3">
                                                                </line>
                                                            </svg>
                                                            <span class="font-bold text-white"> 4,247
                                                            </span>
                                                            <span class="text-white/80"> professionals downloaded
                                                            </span>
                                                        </div>
                                                        <div class="flex items-center gap-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg>
                                                            <span class="text-white/80"> (4.9)
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-5">
                                                    <div class="bg-white rounded-[24px] border-2 border-[#5D5DE9]/30 p-4">
                                                        <div class="space-y-3 mb-4">
                                                            <h4 class="text-lg font-bold text-[#2C3340]">
                                                                Get Your Exclusive Analysis
                                                            </h4>
                                                            <div
                                                                class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#5D5DE9] bg-[#5D5DE9]/10 text-[#5D5DE9] text-xs font-bold rounded-full">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-circle-check-big w-3 h-3 mr-1">
                                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                                    </path>
                                                                    <path d="m9 11 3 3L22 4">
                                                                    </path>
                                                                </svg>
                                                                Free limited time offer
                                                            </div>
                                                        </div>
                                                        <form class="space-y-3">
                                                            <div class="grid grid-cols-2 gap-2">
                                                                <input
                                                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                                    placeholder="First Name *" azubi-required=""
                                                                    value="" />
                                                                <input
                                                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                                    placeholder="Last Name *" azubi-required=""
                                                                    value="" />
                                                            </div>
                                                            <input type="email"
                                                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                                placeholder="Your Email Address *" azubi-required=""
                                                                value="" />
                                                            <div class="grid grid-cols-3 gap-2">
                                                                <button type="button" role="combobox"
                                                                    aria-controls="radix-Rbnaguslb"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                                    <span style="pointer-events:none"> German Level *
                                                                    </span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                        aria-hidden="true">
                                                                        <path d="m6 9 6 6 6-6">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                                <select aria-hidden="true" azubi-required=""
                                                                    tabindex="-1"
                                                                    style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                    <option value="">
                                                                    </option>
                                                                </select>
                                                                <button type="button" role="combobox"
                                                                    aria-controls="radix-Rjnaguslb"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                                    <span style="pointer-events:none"> Field *
                                                                    </span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                        aria-hidden="true">
                                                                        <path d="m6 9 6 6 6-6">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                                <select aria-hidden="true" azubi-required=""
                                                                    tabindex="-1"
                                                                    style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                    <option value="">
                                                                    </option>
                                                                </select>
                                                                <button type="button" role="combobox"
                                                                    aria-controls="radix-Rrnaguslb"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                                    <span style="pointer-events:none"> Country *
                                                                    </span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                        aria-hidden="true">
                                                                        <path d="m6 9 6 6 6-6">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                                <select aria-hidden="true" azubi-required=""
                                                                    tabindex="-1"
                                                                    style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                    <option value="">
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <button
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-10 bg-[#5D5DE9] hover:bg-[#2C3340] text-white font-bold text-sm rounded-full transition-all duration-300"
                                                                type="submit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-download w-4 h-4 mr-2">
                                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                    </path>
                                                                    <polyline points="7 10 12 15 17 10">
                                                                    </polyline>
                                                                    <line x1="12" x2="12" y1="15"
                                                                        y2="3">
                                                                    </line>
                                                                </svg>
                                                                GET EXCLUSIVE INSIGHTS NOW
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                                    <path d="M5 12h14">
                                                                    </path>
                                                                    <path d="m12 5 7 7-7 7">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <div
                                                                class="flex items-center justify-center gap-4 text-xs text-[#2C3340]/70 pt-1">
                                                                <div class="flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-shield w-3 h-3 text-[#2C3340]">
                                                                        <path
                                                                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                                        </path>
                                                                    </svg>
                                                                    <span> Secure
                                                                    </span>
                                                                </div>
                                                                <div class="flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-zap w-3 h-3 text-[#5D5DE9]">
                                                                        <path
                                                                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                                        </path>
                                                                    </svg>
                                                                    <span> Instant
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>
    </div>
@endsection
