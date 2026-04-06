@extends('frontoffice.layouts.app')

@section('title', 'How to Find Ausbildung Programs: 5 Best Job Portals (2026) | Azubi')

@section('meta')
    <meta name="description"
        content="Find the right Ausbildung: search 25,000+ positions on Azubi, plus tips for IHK, Arbeitsagentur, and company websites. Match programs to your skills and interests." />
    <meta name="keywords"
        content="find ausbildung programs,ausbildung job portals,ausbildung search,how to find ausbildung,best ausbildung websites,ausbildung application" />
    <meta property="og:title" content="How to Find Ausbildung Programs: 5 Best Job Portals (2026)" />
    <meta property="og:description"
        content="Find the right Ausbildung: search 25,000+ positions on Azubi, plus tips for IHK, Arbeitsagentur, and company websites. Match programs to your skills and interests." />
    <meta property="og:url" content="{{ url('/programs') }}" />
    <meta property="og:image" content="https://images.azubi.ma/og-images/finding-programs.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="How to Find Ausbildung Programs: 5 Best Job Portals (2026)" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Azubi" />
    <meta name="twitter:creator" content="@Azubi" />
    <meta name="twitter:title" content="How to Find Ausbildung Programs: 5 Best Job Portals (2026)" />
    <meta name="twitter:description"
        content="Find the right Ausbildung: search 25,000+ positions on Azubi, plus tips for IHK, Arbeitsagentur, and company websites. Match programs to your skills and interests." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="#" />
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="North Sea Coast in autumn - Germany&#39;s northern coastal landscape" loading="eager" decoding="async"
                class="object-cover object-center"
                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                src="{{ asset('assets/_next/north-sea-coast-hero-autumndd79.jpeg') }}" />
            <div class="absolute inset-0 bg-black/30 z-0">
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
                            aria-label="Program Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-search h-4 w-4 mr-2" aria-hidden="true">
                                <circle cx="11" cy="11" r="8">
                                </circle>
                                <path d="m21 21-4.3-4.3">
                                </path>
                            </svg>
                            Program Search
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Finding Ausbildung Programs
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Skip the hassle of searching multiple platforms. Browse 60,000+ verified positions in one place and
                        apply with smart application kits.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Browse 60K+ Jobs" href="#"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-briefcase w-5 h-5 mr-2">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                    </path>
                                    <rect width="20" height="14" x="2" y="6" rx="2">
                                    </rect>
                                </svg>
                            </span>
                            <span> Browse 60K+ Jobs
                            </span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Or Search Manually" href="#search-resources"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-search w-5 h-5 mr-2">
                                    <circle cx="11" cy="11" r="8">
                                    </circle>
                                    <path d="m21 21-4.3-4.3">
                                    </path>
                                </svg>
                            </span>
                            <span> Or Search Manually
                            </span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    North Sea Coast, Lower Saxony
                </p>
            </div>
        </section>
        <section id="search-resources" class="py-16">
            <div class="container px-4 md:px-6">
                <div class="flex flex-col gap-16">
                    <div class="grid md:grid-cols-2 gap-10 items-center">
                        <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                            <img alt="Person searching for Ausbildung programs online" loading="lazy" decoding="async"
                                class="object-cover"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}" />
                            <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                                <p class="text-foreground text-sm">
                                    Finding the right Ausbildung program requires using multiple search strategies and
                                    platforms.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div
                                class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-card border-primary/10">
                                <span class="text-primary font-medium"> Search Methods
                                </span>
                            </div>
                            <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                                How to Find Ausbildung Opportunities
                            </h2>
                            <p class="mb-4 text-muted-foreground">
                                The search for the perfect Ausbildung program requires a strategic approach using multiple
                                resources. In 2026, there are several effective methods to find open positions that match
                                your skills and career goals.
                            </p>
                            <p class="mb-6 text-muted-foreground">
                                From online platforms to employment agencies and industry networks, each search method has
                                unique advantages. We recommend using a combination of these approaches to maximize your
                                chances of finding suitable opportunities.
                            </p>
                            <div class="p-4 bg-primary/5 rounded-lg border border-primary/10">
                                <h3
                                    class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-search h-5 w-5 text-primary">
                                        <circle cx="11" cy="11" r="8">
                                        </circle>
                                        <path d="m21 21-4.3-4.3">
                                        </path>
                                    </svg>
                                    <span> Search Timeline: Plan Ahead
                                    </span>
                                </h3>
                                <p class="text-sm text-muted-foreground">
                                    For the best results, begin your search
                                    <strong> 10-12 months
                                    </strong>
                                    before your desired start date. Most Ausbildung programs begin in August or September,
                                    with application deadlines 6-9 months earlier. Competitive fields may close applications
                                    even earlier.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="max-w-[800px] mx-auto text-center mb-10">
                            <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                                Top Online Platforms for Finding Ausbildung
                            </h2>
                            <p class="text-lg text-muted-foreground">
                                In 2026, these digital platforms offer the most comprehensive listings of Ausbildung
                                opportunities across Germany.
                            </p>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-globe text-white h-6 w-6">
                                            <circle cx="12" cy="12" r="10">
                                            </circle>
                                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20">
                                            </path>
                                            <path d="M2 12h20">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                        Federal Employment Agency
                                    </h3>
                                    <p class="text-muted-foreground mb-4">
                                        The official government job portal with the largest database of Ausbildung
                                        positions.
                                    </p>
                                    <ul class="space-y-2 mb-4">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Filter by location, profession, and start date
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Available in English and German
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Create profile for personalized recommendations
                                            </span>
                                        </li>
                                    </ul>
                                    <a href="https://www.arbeitsagentur.de/en/welcome" target="_blank"
                                        rel="noopener noreferrer"
                                        class="text-sm font-medium text-primary flex items-center gap-1 hover:underline">
                                        Visit platform
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right h-3 w-3">
                                            <path d="M5 12h14">
                                            </path>
                                            <path d="m12 5 7 7-7 7">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="bg-beige w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-briefcase text-white h-6 w-6">
                                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                            </path>
                                            <rect width="20" height="14" x="2" y="6" rx="2">
                                            </rect>
                                        </svg>
                                    </div>
                                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                        Azubi.de
                                    </h3>
                                    <p class="text-muted-foreground mb-4">
                                        Specialized platform focused solely on Ausbildung opportunities with additional
                                        resources.
                                    </p>
                                    <ul class="space-y-2 mb-4">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> User-friendly interface with detailed listings
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Company profiles and reviews
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Application tips and career guidance
                                            </span>
                                        </li>
                                    </ul>
                                    <a href="https://www.azubi.de/" target="_blank" rel="noopener noreferrer"
                                        class="text-sm font-medium text-primary flex items-center gap-1 hover:underline">
                                        Visit platform
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right h-3 w-3">
                                            <path d="M5 12h14">
                                            </path>
                                            <path d="m12 5 7 7-7 7">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="bg-green-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building text-white h-6 w-6">
                                            <rect width="16" height="20" x="4" y="2" rx="2"
                                                ry="2">
                                            </rect>
                                            <path d="M9 22v-4h6v4">
                                            </path>
                                            <path d="M8 6h.01">
                                            </path>
                                            <path d="M16 6h.01">
                                            </path>
                                            <path d="M12 6h.01">
                                            </path>
                                            <path d="M12 10h.01">
                                            </path>
                                            <path d="M12 14h.01">
                                            </path>
                                            <path d="M16 10h.01">
                                            </path>
                                            <path d="M16 14h.01">
                                            </path>
                                            <path d="M8 10h.01">
                                            </path>
                                            <path d="M8 14h.01">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                        IHK Lehrstellenbörse
                                    </h3>
                                    <p class="text-muted-foreground mb-4">
                                        The Chamber of Commerce&#39;s official training position database with verified
                                        listings.
                                    </p>
                                    <ul class="space-y-2 mb-4">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Verified opportunities from IHK member companies
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Detailed profession descriptions
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Regional filtering and company information
                                            </span>
                                        </li>
                                    </ul>
                                    <a href="https://www.ihk-lehrstellenboerse.de/" target="_blank"
                                        rel="noopener noreferrer"
                                        class="text-sm font-medium text-primary flex items-center gap-1 hover:underline">
                                        Visit platform
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right h-3 w-3">
                                            <path d="M5 12h14">
                                            </path>
                                            <path d="m12 5 7 7-7 7">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 mt-6">
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="bg-rose-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-link text-white h-6 w-6">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                            </path>
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                        Company Career Pages
                                    </h3>
                                    <p class="text-muted-foreground mb-4">
                                        Many large companies in Germany list their Ausbildung positions directly on their
                                        websites.
                                    </p>
                                    <p class="text-sm text-muted-foreground mb-4">
                                        Major German companies like Siemens, Volkswagen, Deutsche Bahn, and Bosch have
                                        dedicated career pages for Ausbildung positions. These often include detailed
                                        information about the training process, benefits, and application procedures
                                        specific to the company.
                                    </p>
                                    <div class="text-sm p-3 bg-primary/5 rounded-lg">
                                        <strong> Pro Tip:
                                        </strong>
                                        Create a list of companies in your desired field and region, then check their career
                                        pages regularly. Some positions may be posted on company websites before appearing
                                        on job boards.
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="bg-beige w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-users text-white h-6 w-6">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                            </path>
                                            <circle cx="9" cy="7" r="4">
                                            </circle>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                            </path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                        Social Media &amp; Networking
                                    </h3>
                                    <p class="text-muted-foreground mb-4">
                                        Leverage social platforms to discover opportunities and connect with potential
                                        employers.
                                    </p>
                                    <p class="text-sm text-muted-foreground mb-4">
                                        In 2026, social media has become an increasingly important channel for finding
                                        Ausbildung positions. Many companies post openings on platforms like LinkedIn, XING
                                        (the German professional network), and Instagram before they appear elsewhere.
                                    </p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Follow companies of interest
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Join Ausbildung and industry-specific groups
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Set up job alerts with relevant keywords
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="max-w-[800px] mx-auto text-center mb-10">
                            <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                                Placement Services &amp; Agencies
                            </h2>
                            <p class="text-lg text-muted-foreground">
                                Professional services that can help you find and secure Ausbildung positions in Germany.
                            </p>
                        </div>
                        <div class="grid gap-6 md:grid-cols-3">
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="mb-4 h-12 flex items-center">
                                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                            Employment Agency Support
                                        </h3>
                                    </div>
                                    <p class="text-muted-foreground mb-4">
                                        The Federal Employment Agency (Bundesagentur für Arbeit) offers free placement
                                        services and personalized guidance.
                                    </p>
                                    <ul class="space-y-2 mb-4">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Career counseling and aptitude testing
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Assistance with application documents
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Direct placement with partner companies
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Support for international applicants
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="p-3 bg-primary/5 rounded-lg text-sm text-muted-foreground">
                                        Contact your local Employment Agency office or visit their website to schedule an
                                        appointment with a career counselor.
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="mb-4 h-12 flex items-center">
                                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                            Chamber Services
                                        </h3>
                                    </div>
                                    <p class="text-muted-foreground mb-4">
                                        The Chambers of Industry and Commerce (IHK) and Chambers of Crafts (HWK) offer
                                        various support services.
                                    </p>
                                    <ul class="space-y-2 mb-4">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Information events on Ausbildung programs
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Vocational training fairs with employers
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Applicant-company matching services
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Guidance on recognition of foreign qualifications
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="p-3 bg-primary/5 rounded-lg text-sm text-muted-foreground">
                                        Contact the Chamber in your region of interest to learn about their specific
                                        offerings and upcoming events.
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                                <div class="p-6">
                                    <div class="mb-4 h-12 flex items-center">
                                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                            Specialized Agencies
                                        </h3>
                                    </div>
                                    <p class="text-muted-foreground mb-4">
                                        Private placement agencies and consultancies specializing in international
                                        Ausbildung placements.
                                    </p>
                                    <ul class="space-y-2 mb-4">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> End-to-end application support
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Direct relationships with German companies
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Language preparation and cultural orientation
                                            </span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                                </path>
                                                <path d="m9 11 3 3L22 4">
                                                </path>
                                            </svg>
                                            <span class="text-sm"> Visa and relocation assistance
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="p-3 bg-primary/5 rounded-lg text-sm text-muted-foreground">
                                        <a class="text-primary hover:underline" href="#"> Browse jobs
                                        </a>
                                        to find your perfect Ausbildung opportunity.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <section class="relative py-12 overflow-hidden bg-[#F9F5F0]">
                    <div class="container relative z-10 mx-auto px-4">
                        <div class="max-w-7xl mx-auto">
                            <div class="relative" style="opacity:0;transform:translateY(20px)">
                                <div
                                    class="text-card-foreground shadow relative bg-[#F4991A] border-2 border-[#F4991A] overflow-hidden rounded-[24px]">
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
                                                <div class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4">
                                                    <div class="space-y-2 mb-4">
                                                        <h4 class="text-base font-bold text-[#344F1F]">
                                                            Get Your Exclusive Analysis
                                                        </h4>
                                                        <div
                                                            class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full">
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
                                                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                                placeholder="First Name *" required=""
                                                                value="" />
                                                            <input
                                                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                                placeholder="Last Name *" required=""
                                                                value="" />
                                                        </div>
                                                        <input type="email"
                                                            class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                            placeholder="Your Email Address *" required=""
                                                            value="" />
                                                        <div class="grid grid-cols-1 gap-3">
                                                            <button type="button" role="combobox"
                                                                aria-controls="radix-«R2t6cuslb»" aria-expanded="false"
                                                                aria-required="true" aria-autocomplete="none"
                                                                dir="ltr" data-state="closed" data-placeholder=""
                                                                class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]">
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
                                                            <select aria-hidden="true" required="" tabindex="-1"
                                                                style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                <option value="">
                                                                </option>
                                                            </select>
                                                            <button type="button" role="combobox"
                                                                aria-controls="radix-«R4t6cuslb»" aria-expanded="false"
                                                                aria-required="true" aria-autocomplete="none"
                                                                dir="ltr" data-state="closed" data-placeholder=""
                                                                class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]">
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
                                                            <select aria-hidden="true" required="" tabindex="-1"
                                                                style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                <option value="">
                                                                </option>
                                                            </select>
                                                            <button type="button" role="combobox"
                                                                aria-controls="radix-«R6t6cuslb»" aria-expanded="false"
                                                                aria-required="true" aria-autocomplete="none"
                                                                dir="ltr" data-state="closed" data-placeholder=""
                                                                class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]">
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
                                                            <select aria-hidden="true" required="" tabindex="-1"
                                                                style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                <option value="">
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <button
                                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-12 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
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
                                                            class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1">
                                                            <div class="flex items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-shield w-3 h-3 text-[#344F1F]">
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
                                                                    class="lucide lucide-zap w-3 h-3 text-[#F4991A]">
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
                                                        <img src="{{ asset('assets/_next/mascot_pointing_malee75a.jpeg') }}"
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
                                                    <div class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4">
                                                        <div class="space-y-3 mb-4">
                                                            <h4 class="text-lg font-bold text-[#344F1F]">
                                                                Get Your Exclusive Analysis
                                                            </h4>
                                                            <div
                                                                class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full">
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
                                                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                                    placeholder="First Name *" required=""
                                                                    value="" />
                                                                <input
                                                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                                    placeholder="Last Name *" required=""
                                                                    value="" />
                                                            </div>
                                                            <input type="email"
                                                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                                placeholder="Your Email Address *" required=""
                                                                value="" />
                                                            <div class="grid grid-cols-3 gap-2">
                                                                <button type="button" role="combobox"
                                                                    aria-controls="radix-«R2tqcuslb»"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]">
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
                                                                <select aria-hidden="true" required="" tabindex="-1"
                                                                    style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                    <option value="">
                                                                    </option>
                                                                </select>
                                                                <button type="button" role="combobox"
                                                                    aria-controls="radix-«R4tqcuslb»"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]">
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
                                                                <select aria-hidden="true" required=""
                                                                    tabindex="-1"
                                                                    style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                    <option value="">
                                                                    </option>
                                                                </select>
                                                                <button type="button" role="combobox"
                                                                    aria-controls="radix-«R6tqcuslb»"
                                                                    aria-expanded="false" aria-required="true"
                                                                    aria-autocomplete="none" dir="ltr"
                                                                    data-state="closed" data-placeholder=""
                                                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]">
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
                                                                <select aria-hidden="true" required=""
                                                                    tabindex="-1"
                                                                    style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal">
                                                                    <option value="">
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <button
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-10 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
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
                                                                class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1">
                                                                <div class="flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-shield w-3 h-3 text-[#344F1F]">
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
                                                                        class="lucide lucide-zap w-3 h-3 text-[#F4991A]">
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
                    src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}" />
                <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl">
                </div>
                <div class="absolute inset-0 z-[1] rounded-2xl"
                    style="background:radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),
              linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),
              linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),
              linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)">
                </div>
                <div
                    class="relative z-10 mx-auto flex max-w-container gap-8 px-6 sm:gap-10 md:px-12 flex-col items-center text-center">
                    <div class="flex flex-col gap-8 items-center text-center">
                        <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center">
                            Skip the Search - Apply Smarter
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            60,000+ positions from verified employers. Get smart cover letters and personalized application
                            kits for every job you apply to.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">
                                Browse Jobs &amp; Apply
                            </a>
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">
                                See How Smart Kits Work
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
