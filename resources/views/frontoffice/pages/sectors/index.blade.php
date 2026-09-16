@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Sectors 2026: 327 Occupations in 12 Industries | Azubi')

@section('meta')
    <meta name="description"
        content="Compare 327 Ausbildung occupations across IT, healthcare, engineering, hospitality &amp; more. See salary ranges (€850-1,300), job demand, and German requirements by sector." />
    <meta name="keywords"
        content="ausbildung sectors germany,vocational training industries,ausbildung IT,ausbildung healthcare,ausbildung engineering,ausbildung hospitality,best ausbildung programs" />
    <meta property="og:title" content="Ausbildung Sectors 2026: 327 Occupations in 12 Industries" />
    <meta property="og:description"
        content="Compare 327 Ausbildung occupations across IT, healthcare, engineering, hospitality &amp; more. See salary ranges (€850-1,300), job demand, and German requirements by sector." />
    <meta property="og:url" content="{{ url('/sectors') }}" />
    <meta property="og:image" content="https://images.azubi.ma/og-images/sectors.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Ausbildung Sectors 2026: 327 Occupations in 12 Industries" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Azubi" />
    <meta name="twitter:creator" content="@Azubi" />
    <meta name="twitter:title" content="Ausbildung Sectors 2026: 327 Occupations in 12 Industries" />
    <meta name="twitter:description"
        content="Compare 327 Ausbildung occupations across IT, healthcare, engineering, hospitality &amp; more. See salary ranges (€850-1,300), job demand, and German requirements by sector." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="{{ route('front.sectors') }}" />
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Hamburg harbor in autumn - Germany&#39;s business and port city" loading="eager" decoding="async"
                class="object-cover object-center"
                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                src="{{ asset('assets/images/heroes/hamburg-harbor-hero-autumn.jpeg') }}" />
            <div class="absolute inset-0 bg-black/30 z-0 azubi-hero-veil">
            </div>
            <div class="absolute inset-0 z-0"
                style="background:radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),
            linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),
            linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),
            linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)">
            </div>
            <div
                class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5 items-center text-center max-w-4xl">
                <div class="flex flex-col gap-4 sm:gap-5">
                    <div class="animate-fade-in-up animation-delay-100">
                        <div class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold"
                            aria-label="Career Sectors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-briefcase h-4 w-4 mr-2" aria-hidden="true">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                </path>
                                <rect width="20" height="14" x="2" y="6" rx="2">
                                </rect>
                            </svg>
                            Career Sectors
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Ausbildung Sectors in Germany
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Browse 60,000+ jobs across 15 career sectors. Find your sector, apply with smart tools, and start
                        earning €850-1,300/month.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#5D5DE9] hover:bg-[#2C3340] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Browse Sectors" href="#sectors-grid"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-search w-5 h-5 mr-2">
                                    <circle cx="11" cy="11" r="8">
                                    </circle>
                                    <path d="m21 21-4.3-4.3">
                                    </path>
                                </svg>
                            </span>
                            <span> Browse Sectors
                            </span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Find Jobs" href="#"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-briefcase w-5 h-5 mr-2">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                    </path>
                                    <rect width="20" height="14" x="2" y="6" rx="2">
                                    </rect>
                                </svg>
                            </span>
                            <span> Find Jobs
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
        @php
            $sectorCards = [
                [
                    'slug' => 'agriculture',
                    'title' => 'Agriculture & Environment',
                    'description' => 'Agriculture, farming, forestry, and environmental careers',
                    'image' => 'assets/images/mascots/welcoming-3.jpeg',
                ],
                [
                    'slug' => 'automotive',
                    'title' => 'Automotive & Transportation',
                    'description' => 'Automotive manufacturing, repair, and transportation careers',
                    'image' => 'assets/images/mascots/engineering.jpeg',
                ],
                [
                    'slug' => 'construction',
                    'title' => 'Construction & Trades',
                    'description' => 'Construction, skilled trades, and craftsmanship careers',
                    'image' => 'assets/images/mascots/pointing-male-2.jpeg',
                ],
                [
                    'slug' => 'education',
                    'title' => 'Education & Training',
                    'description' => 'Teaching, training, and educational services careers',
                    'image' => 'assets/images/mascots/graduate-female-3.jpeg',
                ],
                [
                    'slug' => 'energy',
                    'title' => 'Energy & Utilities',
                    'description' => 'Energy production, utilities, and renewable energy careers',
                    'image' => 'assets/images/mascots/studying-male-3.jpeg',
                ],
                [
                    'slug' => 'engineering',
                    'title' => 'Engineering & Technical',
                    'description' =>
                        "Build your career in Germany's world-renowned engineering and manufacturing industries.",
                    'image' => 'assets/images/mascots/engineering.jpeg',
                ],
                [
                    'slug' => 'finance',
                    'title' => 'Finance & Banking',
                    'description' => 'Banking, accounting, insurance, and financial services careers',
                    'image' => 'assets/images/mascots/documents-male-3.jpeg',
                ],
                [
                    'slug' => 'healthcare',
                    'title' => 'Healthcare & Nursing',
                    'description' =>
                        "Train in one of Germany's most in-demand sectors with excellent career prospects and earning potential.",
                    'image' => 'assets/images/mascots/healthcare.jpeg',
                ],
                [
                    'slug' => 'hospitality',
                    'title' => 'Hospitality & Tourism',
                    'description' =>
                        "Launch your career in Germany's vibrant hospitality industry with international experience.",
                    'image' => 'assets/images/mascots/hospitality.jpeg',
                ],
                [
                    'slug' => 'it',
                    'title' => 'IT & Software',
                    'description' =>
                        'Start your tech career in Germany with practical training in programming, systems administration, and digital solutions.',
                    'image' => 'assets/images/mascots/it.jpeg',
                ],
                [
                    'slug' => 'logistics',
                    'title' => 'Logistics & Transportation',
                    'description' =>
                        "Train in Germany's sophisticated logistics sector, managing the flow of goods in Europe's largest economy.",
                    'image' => 'assets/images/mascots/logistics.jpeg',
                ],
                [
                    'slug' => 'media',
                    'title' => 'Media & Communications',
                    'description' => 'Media, communications, marketing, and creative careers',
                    'image' => 'assets/images/mascots/excited-female-2.jpeg',
                ],
                [
                    'slug' => 'other',
                    'title' => 'Other Services',
                    'description' => 'Other professional services and miscellaneous careers',
                    'image' => 'assets/images/mascots/thinking-female-4.jpeg',
                ],
                [
                    'slug' => 'public-service',
                    'title' => 'Public Service & Administration',
                    'description' => 'Government, public administration, and civil service careers',
                    'image' => 'assets/images/mascots/documents-male-4.jpeg',
                ],
                [
                    'slug' => 'sales',
                    'title' => 'Sales & Retail',
                    'description' =>
                        "Develop professional sales and customer service skills in Germany's diverse retail landscape.",
                    'image' => 'assets/images/mascots/sales.jpeg',
                ],
            ];
        @endphp
        <section id="sectors-grid" class="py-16">
            <div class="container px-4 md:px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                    @foreach ($sectorCards as $sector)
                        <a class="block group text-center" href="{{ url('/sectors/' . $sector['slug']) }}">
                            <div
                                class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2">
                                <div class="relative w-56 h-56 mb-6">
                                    <img alt="{{ $sector['title'] }} mascot" loading="lazy" width="224"
                                        height="224" decoding="async"
                                        class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(44,51,64,0.15)] transition-transform duration-300 group-hover:scale-105"
                                        src="{{ asset($sector['image']) }}" />
                                </div>
                                <h3 class="text-xl font-semibold text-[#2C3340] mb-3 leading-tight">{{ $sector['title'] }}
                                </h3>
                                <p class="text-sm text-[#2C3340]/70 mb-6 leading-relaxed max-w-xs">
                                    {{ $sector['description'] }}</p>
                                <div
                                    class="flex items-center justify-center text-[#5D5DE9] text-sm font-medium transition-colors duration-300 group-hover:text-[#2C3340]">
                                    <span>Explore Opportunities</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="py-12 azubi-bg-beige/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                        Why Ausbildung?
                    </h3>
                    <p class="text-base leading-relaxed text-muted-foreground mb-6">
                        Germany&#39;s dual vocational training combines workplace experience with education. You earn
                        €850-1,300/month while learning, pay no tuition, and gain a direct pathway to permanent residency.
                    </p>
                    <div class="flex flex-wrap justify-center gap-3">
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                            Earn while you learn
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                            No tuition fees
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                            High job security
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                            PR pathway
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-background">
            <div class="container px-4 md:px-6">
                <section class="relative py-12 overflow-hidden">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-gift w-3 h-3 mr-1">
                                                        <rect x="3" y="8" width="18" height="4" rx="1">
                                                        </rect>
                                                        <path d="M12 8v13">
                                                        </path>
                                                        <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7">
                                                        </path>
                                                        <path
                                                            d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                        </path>
                                                    </svg>
                                                    CLASSIFIED
                                                </div>
                                                <h3 class="text-lg sm:text-xl font-bold text-white leading-tight mb-2">
                                                    <span class="text-white"> REVEALED:
                                                    </span>
                                                    <!-- -->
                                                    Germany&#39;s Secret Recruitment Strategy
                                                </h3>
                                                <p class="text-sm text-white/90 mb-4 font-medium">
                                                    EXCLUSIVE: How Germany systematically recruits international talent -
                                                    €47B crisis revealed!
                                                </p>
                                                <div class="flex items-center justify-center gap-4 text-xs mb-4">
                                                    <div class="flex items-center gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
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
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
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
                                                                aria-controls="radix-«R2t6guslb»" aria-expanded="false"
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
                                                                aria-controls="radix-«R4t6guslb»" aria-expanded="false"
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
                                                                aria-controls="radix-«R6t6guslb»" aria-expanded="false"
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
                                                        <img src="{{ asset('assets/images/mascots/pointing-male-2.jpeg') }}"
                                                            alt="Azubi Mascot" class="w-56 h-auto object-contain" />
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 space-y-3">
                                                    <div
                                                        class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold rounded-full backdrop-blur-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
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
                                                        CLASSIFIED
                                                    </div>
                                                    <h3 class="text-xl lg:text-2xl font-bold text-white leading-tight">
                                                        <span class="text-white"> REVEALED:
                                                        </span>
                                                        <!-- -->
                                                        Germany&#39;s Secret Recruitment Strategy
                                                    </h3>
                                                    <p class="text-sm text-white/90 font-medium">
                                                        EXCLUSIVE: How Germany systematically recruits international talent
                                                        - €47B crisis revealed!
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
                                                                    aria-controls="radix-«R2tqguslb»"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
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
                                                                    aria-controls="radix-«R4tqguslb»"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                                    <span style="pointer-events:none"> Field *
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
                                                                    aria-controls="radix-«R6tqguslb»"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                                    <span style="pointer-events:none"> Country *
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <div class="container mx-auto px-4 lg:px-6 my-16">
            <section class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg">
                <img alt="Background" loading="lazy" decoding="async" class="object-cover object-center rounded-2xl"
                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                    src="{{ asset('assets/images/heroes/arbeitgeber-hero-background.jpeg') }}" />
                <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl azubi-hero-veil">
                </div>
                <div class="absolute inset-0 z-[1] rounded-2xl"
                    style="background:radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),
              linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),
              linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),
              linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)">
                </div>
                <div
                    class="relative z-10 mx-auto max-w-container gap-8 px-6 sm:gap-10 md:px-12 grid lg:grid-cols-2 items-center">
                    <div class="hidden lg:flex justify-center items-center order-first">
                        <div class="relative w-full max-w-md">
                            <img src="{{ asset('assets/images/mascots/pointing-male-2.jpeg') }}"
                                alt="Young Oak mascot pointing you to start your Ausbildung journey"
                                class="relative w-full h-auto drop-shadow-xl" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <div
                            class="inline-flex items-center rounded-full border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground border-white/80 bg-white/10 backdrop-blur-sm px-4 py-1.5 text-base w-fit">
                            <span class="text-white font-medium"> Ready to apply?
                            </span>
                        </div>
                        <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-white">
                            Browse Available Ausbildung Positions
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed">
                            Explore hundreds of training opportunities from verified German employers. Create your profile
                            and start applying to positions that match your skills and career goals.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">
                                View All Positions
                            </a>
                            <a href="/consultation"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">
                                Get Expert Help
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
