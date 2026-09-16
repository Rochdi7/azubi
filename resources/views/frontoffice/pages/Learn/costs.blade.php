@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Costs 2026: €800-1,300/Month Stipend vs €700 Expenses | Azubi')

@section('meta')
    <meta name="description"
        content="Real Ausbildung costs in Germany: €2K-3K initial investment, €850-1,300 monthly stipend, €700-900 living expenses. See stipends by sector, ROI calculator, and budget tips." />
    <meta name="keywords"
        content="ausbildung cost,ausbildung salary,ausbildung stipend,living costs germany,ausbildung expenses,vocational training cost germany,blocked account germany,ausbildung monthly income" />
    <meta name="pinterest:pinnable" content="true" />
    <meta name="pinterest:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <meta name="linkedin:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="#" />
    <meta property="og:title" content="Ausbildung Costs 2026: €800-1,300/Month Stipend vs €700 Expenses" />
    <meta property="og:description"
        content="Real Ausbildung costs in Germany: €2K-3K initial investment, €850-1,300 monthly stipend, €700-900 living expenses. See stipends by sector, ROI calculator, and budget tips." />
    <meta property="og:url" content="https://azubi.ma/costs" />
    <meta property="og:site_name" content="Azubi" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="https://images.azubi.ma/og-images/costs.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Ausbildung Costs 2026: €800-1,300/Month Stipend vs €700 Expenses" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Azubi" />
    <meta name="twitter:creator" content="@Azubi" />
    <meta name="twitter:title" content="Ausbildung Costs 2026: €800-1,300/Month Stipend vs €700 Expenses" />
    <meta name="twitter:description"
        content="Real Ausbildung costs in Germany: €2K-3K initial investment, €850-1,300 monthly stipend, €700-900 living expenses. See stipends by sector, ROI calculator, and budget tips." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Black Forest in autumn - Germany&#x27;s famous forested mountain range" loading="eager"
                decoding="async" data-nimg="fill" class="object-cover object-center"
                style="
                position: absolute;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                color: transparent;
              "
                sizes="100vw"
                src="{{ asset('assets/images/heroes/black-forest-hero-autumn.jpeg?url=%2Fimages%2Fhero-backgrounds%2Fblack-forest-hero-autumn.webp&amp;w=2048&amp;q=85') }}" />
            <div class="absolute inset-0 bg-black/30 z-0 azubi-hero-veil"></div>
            <div class="absolute inset-0 z-0"
                style="
                background:
                  radial-gradient(
                    ellipse at center,
                    transparent 0%,
                    transparent 40%,
                    rgba(0, 0, 0, 0.4) 100%
                  ),
                  linear-gradient(
                    to top,
                    rgba(0, 0, 0, 0.5) 0%,
                    transparent 30%
                  ),
                  linear-gradient(
                    to right,
                    rgba(0, 0, 0, 0.3) 0%,
                    transparent 15%
                  ),
                  linear-gradient(
                    to left,
                    rgba(0, 0, 0, 0.3) 0%,
                    transparent 15%
                  );
              ">
            </div>
            <div
                class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5 items-center text-center max-w-4xl">
                <div class="flex flex-col gap-4 sm:gap-5">
                    <div class="animate-fade-in-up animation-delay-100">
                        <div class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold"
                            aria-label="Cost Guide">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-wallet h-4 w-4 mr-2" aria-hidden="true">
                                <path
                                    d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                                </path>
                                <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                            </svg>Cost Guide
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Cost of Living in Germany
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Comprehensive breakdown of monthly expenses, blocked account
                        requirements, and financial planning for your Ausbildung
                        journey in Germany.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#5D5DE9] hover:bg-[#2C3340] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Calculate Costs" href="#"><span
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calculator w-5 h-5 mr-2">
                                    <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                    <line x1="8" x2="16" y1="6" y2="6"></line>
                                    <line x1="16" x2="16" y1="14" y2="18"></line>
                                    <path d="M16 10h.01"></path>
                                    <path d="M12 10h.01"></path>
                                    <path d="M8 10h.01"></path>
                                    <path d="M12 14h.01"></path>
                                    <path d="M8 14h.01"></path>
                                    <path d="M12 18h.01"></path>
                                    <path d="M8 18h.01"></path>
                                </svg></span><span>Calculate Costs</span></a><a
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="View Breakdown" href="#cost-breakdown"><span aria-hidden="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-wallet w-5 h-5 mr-2">
                                    <path
                                        d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                                    </path>
                                    <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                                </svg></span><span>View Breakdown</span></a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    Black Forest, Baden-Württemberg
                </p>
            </div>
        </section>
        <section id="cost-breakdown" class="py-16">
            <div class="container px-4 md:px-6">
                <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary">
                    Financial Overview
                </h2>
                <div class="bg-card border border-primary/10 rounded-xl p-6 md:p-8 mt-6">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                The Ausbildung Financial Advantage
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Unlike traditional university education, Ausbildung in
                                Germany offers a unique financial model where you earn
                                while you learn. This dual training system combines
                                practical work experience with vocational schooling, all
                                while receiving a monthly stipend.
                            </p>
                            <p class="text-muted-foreground">
                                While there are initial costs to consider, Ausbildung
                                typically offers a faster return on investment compared to
                                other educational paths, with no tuition fees and income
                                starting from day one of your training.
                            </p>
                        </div>
                        <div class="bg-card border border-primary/10 rounded-xl p-5">
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Financial Snapshot
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between py-2 border-b">
                                    <span class="font-medium">Initial Investment</span><span>€2,000 - €3,000</span>
                                </div>
                                <div class="flex justify-between py-2 border-b">
                                    <span class="font-medium">Monthly Stipend</span><span>€850 - €1,300</span>
                                </div>
                                <div class="flex justify-between py-2 border-b">
                                    <span class="font-medium">Average Monthly Expenses</span><span>€700 - €900</span>
                                </div>
                                <div class="flex justify-between py-2 border-b">
                                    <span class="font-medium">Training Duration</span><span>2 - 3.5 years</span>
                                </div>
                                <div class="flex justify-between py-2 border-b">
                                    <span class="font-medium">Post-Training Salary</span><span>€2,400 - €3,800</span>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="font-medium">ROI Timeframe</span><span>2 - 3 years after completion</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 bg-card border border-primary/10 p-5 rounded-xl">
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-primary mr-2">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>Financial Benefits of Ausbildung
                        </h3>
                        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="bg-background p-3 rounded border">
                                <p class="text-sm font-medium">No Tuition Fees</p>
                            </div>
                            <div class="bg-background p-3 rounded border">
                                <p class="text-sm font-medium">
                                    Monthly Income During Training
                                </p>
                            </div>
                            <div class="bg-background p-3 rounded border">
                                <p class="text-sm font-medium">
                                    Health Insurance Coverage
                                </p>
                            </div>
                            <div class="bg-background p-3 rounded border">
                                <p class="text-sm font-medium">
                                    Potential for Part-time Work
                                </p>
                            </div>
                            <div class="bg-background p-3 rounded border">
                                <p class="text-sm font-medium">
                                    Career-Focused Investment
                                </p>
                            </div>
                            <div class="bg-background p-3 rounded border">
                                <p class="text-sm font-medium">
                                    German Social Security Benefits
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted">
            <div class="container px-4 md:px-6">
                <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary">
                    Initial Costs
                </h2>
                <div class="grid md:grid-cols-2 gap-6 mt-6">
                    <div class="rounded-xl border bg-card text-card-foreground shadow border-primary/10">
                        <div class="p-6">
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-wallet h-6 w-6 text-white">
                                    <path
                                        d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                                    </path>
                                    <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Pre-Departure Costs
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Before you arrive in Germany, you&#x27;ll need to budget
                                for several essential expenses:
                            </p>
                            <div class="space-y-3">
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">German Language Course (A1-B1)</span><span>€800 -
                                            €1,500</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Costs vary based on institute and course intensity.
                                        Online options may be more affordable.
                                    </p>
                                </div>
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Language Certification Exam</span><span>€150 -
                                            €250</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Official certification from Goethe-Institut, telc, or
                                        ÖSD.
                                    </p>
                                </div>
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Visa Application Fee</span><span>€75</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        National visa (D-visa) for vocational training
                                        purposes.
                                    </p>
                                </div>
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Document Translation &amp;
                                            Authentication</span><span>€100 - €300</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Educational certificates and other azubi-required documents.
                                    </p>
                                </div>
                                <div class="pb-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Flight Tickets</span><span>€500 - €800</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        One-way flight to Germany, varies by country, season
                                        and booking time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border bg-card text-card-foreground shadow border-primary/10">
                        <div class="p-6">
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-credit-card h-6 w-6 text-white">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Arrival &amp; Setup Costs
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Once you arrive in Germany, these are the initial expenses
                                to establish yourself:
                            </p>
                            <div class="space-y-3">
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Temporary Accommodation</span><span>€300 - €600</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        2-4 weeks in hostel or temporary housing while finding
                                        permanent accommodation.
                                    </p>
                                </div>
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Housing Deposit</span><span>€600 - €1,500</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Typically 2-3 months&#x27; rent, refundable when
                                        moving out if no damages.
                                    </p>
                                </div>
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">First Month&#x27;s Rent</span><span>€300 - €500</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Shared accommodation in a WG (shared flat) is most
                                        affordable.
                                    </p>
                                </div>
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Basic Furniture &amp; Household Items</span><span>€200 -
                                            €500</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Essential items if accommodation is unfurnished.
                                    </p>
                                </div>
                                <div class="border-b pb-3">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Health Insurance (First Month)</span><span>€110</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Public health insurance before employer contributions
                                        begin.
                                    </p>
                                </div>
                                <div class="pb-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">Public Transport Pass</span><span>€60 - €90</span>
                                    </div>
                                    <p class="text-xs text-muted-foreground">
                                        Monthly pass for local transportation (varies by
                                        city).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary">
                    Ausbildung Stipend
                </h2>
                <div class="bg-card border border-primary/10 rounded-xl p-6 md:p-8 mt-6">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Earn While You Learn
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                One of the biggest advantages of the German Ausbildung
                                system is that trainees receive a monthly stipend
                                (Ausbildungsvergütung) from their employer throughout the
                                entire training period.
                            </p>
                            <p class="text-muted-foreground mb-4">
                                Your stipend will typically increase each year as you
                                progress through your training and gain more skills and
                                responsibilities. The exact amount varies based on:
                            </p>
                            <ul class="space-y-2 mb-4">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-5 w-5 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Your training sector and profession</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-5 w-5 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>The size and location of your training company</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-5 w-5 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Whether your employer operates under a collective
                                        bargaining agreement</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-5 w-5 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Your year of training (1st, 2nd, or 3rd year)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-card border border-primary/10 rounded-xl p-5">
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Average Monthly Stipends by Sector
                            </h3>
                            <div class="space-y-4 mt-4">
                                <div>
                                    <h4 class="font-medium mb-2">
                                        Healthcare &amp; Nursing
                                    </h4>
                                    <div class="grid grid-cols-3 gap-2 text-sm">
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                1st Year
                                            </p>
                                            <p class="font-medium">€1,040</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                2nd Year
                                            </p>
                                            <p class="font-medium">€1,100</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                3rd Year
                                            </p>
                                            <p class="font-medium">€1,200</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-2">IT &amp; Software</h4>
                                    <div class="grid grid-cols-3 gap-2 text-sm">
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                1st Year
                                            </p>
                                            <p class="font-medium">€1,050</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                2nd Year
                                            </p>
                                            <p class="font-medium">€1,150</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                3rd Year
                                            </p>
                                            <p class="font-medium">€1,300</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-2">
                                        Logistics &amp; Transportation
                                    </h4>
                                    <div class="grid grid-cols-3 gap-2 text-sm">
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                1st Year
                                            </p>
                                            <p class="font-medium">€950</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                2nd Year
                                            </p>
                                            <p class="font-medium">€1,050</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                3rd Year
                                            </p>
                                            <p class="font-medium">€1,150</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-2">
                                        Hospitality &amp; Tourism
                                    </h4>
                                    <div class="grid grid-cols-3 gap-2 text-sm">
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                1st Year
                                            </p>
                                            <p class="font-medium">€850</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                2nd Year
                                            </p>
                                            <p class="font-medium">€950</p>
                                        </div>
                                        <div class="bg-card border border-primary/10 p-2 rounded">
                                            <p class="text-xs text-muted-foreground">
                                                3rd Year
                                            </p>
                                            <p class="font-medium">€1,050</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 p-4 bg-card border border-primary/10 rounded-lg">
                        <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary">
                            Taxes &amp; Deductions
                        </h4>
                        <p class="text-sm text-muted-foreground mb-3">
                            Your stipend is subject to taxes and social security
                            contributions. However, as a trainee with a relatively low
                            income, your tax burden will be minimal. From your gross
                            stipend, expect deductions for:
                        </p>
                        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 text-sm">
                            <div class="p-3 bg-background rounded border">
                                <p class="font-medium">Health Insurance</p>
                                <p class="text-xs text-muted-foreground">
                                    ~7.3% (employer pays equal share)
                                </p>
                            </div>
                            <div class="p-3 bg-background rounded border">
                                <p class="font-medium">Pension Insurance</p>
                                <p class="text-xs text-muted-foreground">
                                    ~9.3% (employer pays equal share)
                                </p>
                            </div>
                            <div class="p-3 bg-background rounded border">
                                <p class="font-medium">Unemployment Insurance</p>
                                <p class="text-xs text-muted-foreground">
                                    ~1.2% (employer pays equal share)
                                </p>
                            </div>
                            <div class="p-3 bg-background rounded border">
                                <p class="font-medium">Income Tax</p>
                                <p class="text-xs text-muted-foreground">
                                    Minimal or none for most trainees
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative py-12 overflow-hidden bg-[#F7F8FA]">
            <div class="container relative z-10 mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="relative" style="opacity: 0; transform: translateY(20px)">
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
                                                <rect x="3" y="8" width="18" height="4" rx="1"></rect>
                                                <path d="M12 8v13"></path>
                                                <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                                                <path
                                                    d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                </path>
                                            </svg>SUCCESS STORY
                                        </div>
                                        <h3 class="text-lg sm:text-xl font-bold text-white leading-tight mb-2">
                                            <span class="text-white">REVEALED:</span>
                                            <!-- -->From Mumbai to €6,247/Month
                                        </h3>
                                        <p class="text-sm text-white/90 mb-4 font-medium">
                                            Sarah&#x27;s complete Ausbildung journey from
                                            application to career success!
                                        </p>
                                        <div class="flex items-center justify-center gap-4 text-xs mb-4">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-download w-3 h-3 text-white">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" x2="12" y1="15" y2="3">
                                                    </line>
                                                </svg><span class="font-bold text-white">4,247</span><span
                                                    class="text-white/80">downloaded</span>
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><span class="text-white/80">(4.9)</span>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-circle-check-big w-3 h-3 mr-1">
                                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg>Free limited time offer
                                                </div>
                                            </div>
                                            <form class="space-y-3">
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                                    <input
                                                        class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                        placeholder="First Name *" azubi-required="" value="" /><input
                                                        class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                        placeholder="Last Name *" azubi-required="" value="" />
                                                </div>
                                                <input type="email"
                                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                    placeholder="Your Email Address *" azubi-required="" value="" />
                                                <div class="grid grid-cols-1 gap-3">
                                                    <button type="button" role="combobox"
                                                        aria-controls="radix-«R5qckuslb»" aria-expanded="false"
                                                        aria-required="true" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-placeholder=""
                                                        class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px]">
                                                        <span style="pointer-events: none">German Level *</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg></button><select aria-hidden="true" azubi-required=""
                                                        tabindex="-1"
                                                        style="
                                    position: absolute;
                                    border: 0;
                                    width: 1px;
                                    height: 1px;
                                    padding: 0;
                                    margin: -1px;
                                    overflow: hidden;
                                    clip: rect(0, 0, 0, 0);
                                    white-space: nowrap;
                                    word-wrap: normal;
                                  ">
                                                        <option value=""></option>
                                                    </select><button type="button" role="combobox"
                                                        aria-controls="radix-«R9qckuslb»" aria-expanded="false"
                                                        aria-required="true" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-placeholder=""
                                                        class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px]">
                                                        <span style="pointer-events: none">Field of Interest *</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg></button><select aria-hidden="true" azubi-required=""
                                                        tabindex="-1"
                                                        style="
                                    position: absolute;
                                    border: 0;
                                    width: 1px;
                                    height: 1px;
                                    padding: 0;
                                    margin: -1px;
                                    overflow: hidden;
                                    clip: rect(0, 0, 0, 0);
                                    white-space: nowrap;
                                    word-wrap: normal;
                                  ">
                                                        <option value=""></option>
                                                    </select><button type="button" role="combobox"
                                                        aria-controls="radix-«Rdqckuslb»" aria-expanded="false"
                                                        aria-required="true" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-placeholder=""
                                                        class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-10 text-[#2C3340] text-sm rounded-[12px]">
                                                        <span style="pointer-events: none">Current Country *</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg></button><select aria-hidden="true" azubi-required=""
                                                        tabindex="-1"
                                                        style="
                                    position: absolute;
                                    border: 0;
                                    width: 1px;
                                    height: 1px;
                                    padding: 0;
                                    margin: -1px;
                                    overflow: hidden;
                                    clip: rect(0, 0, 0, 0);
                                    white-space: nowrap;
                                    word-wrap: normal;
                                  ">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                                <button
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-12 bg-[#5D5DE9] hover:bg-[#2C3340] text-white font-bold text-sm rounded-full transition-all duration-300"
                                                    type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-download w-4 h-4 mr-2">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15"
                                                            y2="3"></line>
                                                    </svg>GET EXCLUSIVE INSIGHTS NOW<svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </button>
                                                <div
                                                    class="flex items-center justify-center gap-4 text-xs text-[#2C3340]/70 pt-1">
                                                    <div class="flex items-center gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-shield w-3 h-3 text-[#2C3340]">
                                                            <path
                                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                            </path>
                                                        </svg><span>Secure</span>
                                                    </div>
                                                    <div class="flex items-center gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-zap w-3 h-3 text-[#5D5DE9]">
                                                            <path
                                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                            </path>
                                                        </svg><span>Instant</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden lg:block">
                                    <div class="grid lg:grid-cols-12 gap-6 items-center">
                                        <div class="lg:col-span-3 flex justify-center lg:justify-start items-center">
                                            <div class="relative">
                                                <img src="{{ asset('assets/images/mascots/pointing-male-2.jpeg') }}"
                                                    alt="Azubi Mascot" class="w-56 h-auto object-contain" />
                                            </div>
                                        </div>
                                        <div class="lg:col-span-4 space-y-3">
                                            <div
                                                class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold rounded-full backdrop-blur-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-gift w-3 h-3 mr-1">
                                                    <rect x="3" y="8" width="18" height="4" rx="1">
                                                    </rect>
                                                    <path d="M12 8v13"></path>
                                                    <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                                                    <path
                                                        d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                    </path>
                                                </svg>SUCCESS STORY
                                            </div>
                                            <h3 class="text-xl lg:text-2xl font-bold text-white leading-tight">
                                                <span class="text-white">REVEALED:</span>
                                                <!-- -->From Mumbai to €6,247/Month
                                            </h3>
                                            <p class="text-sm text-white/90 font-medium">
                                                Sarah&#x27;s complete Ausbildung journey from
                                                application to career success!
                                            </p>
                                            <div class="flex items-center gap-4 text-xs">
                                                <div class="flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-download w-3 h-3 text-white">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15"
                                                            y2="3"></line>
                                                    </svg><span class="font-bold text-white">4,247</span><span
                                                        class="text-white/80">professionals downloaded</span>
                                                </div>
                                                <div class="flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><span class="text-white/80">(4.9)</span>
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
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-circle-check-big w-3 h-3 mr-1">
                                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                            <path d="m9 11 3 3L22 4"></path>
                                                        </svg>Free limited time offer
                                                    </div>
                                                </div>
                                                <form class="space-y-3">
                                                    <div class="grid grid-cols-2 gap-2">
                                                        <input
                                                            class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                            placeholder="First Name *" azubi-required=""
                                                            value="" /><input
                                                            class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                            placeholder="Last Name *" azubi-required="" value="" />
                                                    </div>
                                                    <input type="email"
                                                        class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px] focus:border-[#5D5DE9]"
                                                        placeholder="Your Email Address *" azubi-required=""
                                                        value="" />
                                                    <div class="grid grid-cols-3 gap-2">
                                                        <button type="button" role="combobox"
                                                            aria-controls="radix-«R5rkkuslb»" aria-expanded="false"
                                                            aria-required="true" aria-autocomplete="none" dir="ltr"
                                                            data-state="closed" data-placeholder=""
                                                            class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                            <span style="pointer-events: none">German Level *</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                aria-hidden="true">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg></button><select aria-hidden="true" azubi-required=""
                                                            tabindex="-1"
                                                            style="
                                      position: absolute;
                                      border: 0;
                                      width: 1px;
                                      height: 1px;
                                      padding: 0;
                                      margin: -1px;
                                      overflow: hidden;
                                      clip: rect(0, 0, 0, 0);
                                      white-space: nowrap;
                                      word-wrap: normal;
                                    ">
                                                            <option value=""></option>
                                                        </select><button type="button" role="combobox"
                                                            aria-controls="radix-«R9rkkuslb»" aria-expanded="false"
                                                            aria-required="true" aria-autocomplete="none" dir="ltr"
                                                            data-state="closed" data-placeholder=""
                                                            class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                            <span style="pointer-events: none">Field *</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                aria-hidden="true">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg></button><select aria-hidden="true" azubi-required=""
                                                            tabindex="-1"
                                                            style="
                                      position: absolute;
                                      border: 0;
                                      width: 1px;
                                      height: 1px;
                                      padding: 0;
                                      margin: -1px;
                                      overflow: hidden;
                                      clip: rect(0, 0, 0, 0);
                                      white-space: nowrap;
                                      word-wrap: normal;
                                    ">
                                                            <option value=""></option>
                                                        </select><button type="button" role="combobox"
                                                            aria-controls="radix-«Rdrkkuslb»" aria-expanded="false"
                                                            aria-required="true" aria-autocomplete="none" dir="ltr"
                                                            data-state="closed" data-placeholder=""
                                                            class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#2C3340]/20 h-9 text-[#2C3340] text-sm rounded-[12px]">
                                                            <span style="pointer-events: none">Country *</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                aria-hidden="true">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg></button><select aria-hidden="true" azubi-required=""
                                                            tabindex="-1"
                                                            style="
                                      position: absolute;
                                      border: 0;
                                      width: 1px;
                                      height: 1px;
                                      padding: 0;
                                      margin: -1px;
                                      overflow: hidden;
                                      clip: rect(0, 0, 0, 0);
                                      white-space: nowrap;
                                      word-wrap: normal;
                                    ">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                    <button
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-10 bg-[#5D5DE9] hover:bg-[#2C3340] text-white font-bold text-sm rounded-full transition-all duration-300"
                                                        type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <polyline points="7 10 12 15 17 10"></polyline>
                                                            <line x1="12" x2="12" y1="15"
                                                                y2="3"></line>
                                                        </svg>GET EXCLUSIVE INSIGHTS NOW<svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                            <path d="M5 12h14"></path>
                                                            <path d="m12 5 7 7-7 7"></path>
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
                                                            </svg><span>Secure</span>
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
                                                            </svg><span>Instant</span>
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
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary">
                    Living Expenses in Germany
                </h2>
                <div class="grid md:grid-cols-3 gap-6 mt-6">
                    <div class="rounded-xl border bg-card text-card-foreground shadow border-primary/10">
                        <div class="p-6">
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Housing
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Housing is typically your largest expense in Germany.
                                Costs vary significantly by city and neighborhood.
                            </p>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Shared Apartment (WG)</span><span class="font-medium">€250-450/month</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Student Dormitory</span><span class="font-medium">€200-350/month</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Studio Apartment</span><span class="font-medium">€400-700/month</span>
                                </div>
                            </div>
                            <div class="text-sm text-muted-foreground bg-card border border-primary/10 p-3 rounded-lg">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                        <path
                                            d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                        </path>
                                        <path d="M9 18h6"></path>
                                        <path d="M10 22h4"></path>
                                    </svg>
                                    <div>
                                        <p class="mb-1 font-medium">
                                            Tip: Shared apartments (WGs) are the most
                                            budget-friendly option.
                                        </p>
                                        <p>
                                            Smaller cities and towns offer more affordable
                                            housing than major metropolitan areas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border bg-card text-card-foreground shadow border-primary/10">
                        <div class="p-6">
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M14 22h5a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M9 18V9"></path>
                                    <path d="M11 4V2"></path>
                                    <path d="M5 9V4"></path>
                                    <path d="M3 6h8"></path>
                                    <path d="M3 22h3"></path>
                                    <circle cx="14" cy="8" r="6"></circle>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Food &amp; Groceries
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Germany offers affordable grocery options if you shop at
                                discount supermarkets like Aldi and Lidl.
                            </p>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Monthly Groceries</span><span class="font-medium">€150-250</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Canteen Meal</span><span class="font-medium">€3-5</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Restaurant Meal</span><span class="font-medium">€8-15</span>
                                </div>
                            </div>
                            <div class="text-sm text-muted-foreground bg-card border border-primary/10 p-3 rounded-lg">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                        <path
                                            d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                        </path>
                                        <path d="M9 18h6"></path>
                                        <path d="M10 22h4"></path>
                                    </svg>
                                    <div>
                                        <p class="mb-1 font-medium">
                                            Tip: Many vocational schools offer subsidized meals
                                            in their canteens.
                                        </p>
                                        <p>
                                            Cooking at home is significantly more economical
                                            than eating out regularly.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border bg-card text-card-foreground shadow border-primary/10">
                        <div class="p-6">
                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-card border border-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                    <rect x="4" y="4" width="16" height="16" rx="2" ry="2">
                                    </rect>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M12 4v1.5"></path>
                                    <path d="M12 18.5V20"></path>
                                    <path d="M20 12h-1.5"></path>
                                    <path d="M5.5 12H4"></path>
                                    <path d="M17.6 6.4 16.5 7.5"></path>
                                    <path d="M7.5 16.5 6.4 17.6"></path>
                                    <path d="M17.6 17.6 16.5 16.5"></path>
                                    <path d="M7.5 7.5 6.4 6.4"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Transportation
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Germany has excellent public transportation, and as a
                                trainee, you may be eligible for discounted passes.
                            </p>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Monthly Transport Pass</span><span class="font-medium">€60-90</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Trainee Discounted Pass</span><span class="font-medium">€30-60</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1">
                                    <span>Bicycle Purchase</span><span class="font-medium">€100-300 (one-time)</span>
                                </div>
                            </div>
                            <div class="text-sm text-muted-foreground bg-card border border-primary/10 p-3 rounded-lg">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                        <path
                                            d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                        </path>
                                        <path d="M9 18h6"></path>
                                        <path d="M10 22h4"></path>
                                    </svg>
                                    <div>
                                        <p class="mb-1 font-medium">
                                            Tip: Many trainees qualify for discounted
                                            transportation passes.
                                        </p>
                                        <p>
                                            Cycling is a cost-effective and healthy
                                            transportation option in many German cities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 grid md:grid-cols-2 gap-6">
                    <div class="rounded-xl border bg-card text-card-foreground shadow border-primary/10">
                        <div class="p-6">
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Other Regular Expenses
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between text-sm border-b pb-2">
                                    <span>Phone &amp; Internet</span><span class="font-medium">€25-40/month</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-2">
                                    <span>Health Insurance</span><span class="font-medium">Deducted from stipend</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-2">
                                    <span>Broadcasting Fee (mandatory)</span><span class="font-medium">€18.36/month per
                                        household</span>
                                </div>
                                <div class="flex justify-between text-sm pb-2">
                                    <span>Entertainment &amp; Leisure</span><span class="font-medium">€50-100/month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border bg-card text-card-foreground shadow border-primary/10">
                        <div class="p-6">
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Average Monthly Budget
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                A typical monthly budget for an Ausbildung trainee might
                                look like this:
                            </p>
                            <div class="space-y-2">
                                <div class="flex justify-between font-medium">
                                    <span>Income: Stipend</span><span class="text-green-600">+€950</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1 text-red-500">
                                    <span>Housing &amp; Utilities</span><span>-€350</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1 text-red-500">
                                    <span>Food &amp; Groceries</span><span>-€200</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1 text-red-500">
                                    <span>Transportation</span><span>-€70</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1 text-red-500">
                                    <span>Phone &amp; Internet</span><span>-€30</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1 text-red-500">
                                    <span>Broadcasting Fee</span><span>-€18</span>
                                </div>
                                <div class="flex justify-between text-sm border-b pb-1 text-red-500">
                                    <span>Entertainment &amp; Miscellaneous</span><span>-€80</span>
                                </div>
                                <div class="flex justify-between font-medium mt-2 pt-1 border-t">
                                    <span>Balance</span><span class="text-green-600">+€202</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary">
                    Calculate Your ROI
                </h2>
                <div class="bg-card border border-primary/10 rounded-xl p-6 md:p-8 mt-6">
                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="text-left">
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Ausbildung: Investment with Returns
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Unlike traditional education paths that often require
                                substantial tuition investments, Ausbildung offers a
                                faster path to financial independence with lower initial
                                costs and earlier income.
                            </p>
                            <p class="text-muted-foreground">
                                Our ROI calculator helps you understand the long-term
                                financial benefits of Ausbildung compared to other
                                educational options, showing you when your initial
                                investment will be recovered and how your earnings
                                potential grows over time.
                            </p>
                        </div>
                        <div class="bg-card border border-primary/10 rounded-xl p-5">
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Sample ROI Analysis
                            </h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between py-1 border-b">
                                    <span class="font-medium">Initial Investment</span><span>€4,000</span>
                                </div>
                                <div class="flex justify-between py-1 border-b">
                                    <span class="font-medium">Total Income During Training (3
                                        years)</span><span>€34,200</span>
                                </div>
                                <div class="flex justify-between py-1 border-b">
                                    <span class="font-medium">Net Position After Training</span><span
                                        class="text-green-600">+€20,200</span>
                                </div>
                                <div class="flex justify-between py-1 border-b">
                                    <span class="font-medium">Starting Salary After
                                        Completion</span><span>€2,800/month</span>
                                </div>
                                <div class="flex justify-between py-1 border-b">
                                    <span class="font-medium">5-Year Earning Potential</span><span>€182,000</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="font-medium">Time to ROI</span><span class="text-green-600">Immediate
                                        (during training)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="mb-6 text-muted-foreground">
                            Use our interactive calculator to analyze your specific
                            scenario based on your chosen sector, training duration, and
                            other factors.
                        </p>
                        <a href="#"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base group">Try
                            Our ROI Calculator<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform group-hover:translate-x-1">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12 md:py-16">
            <script type="application/ld+json">
              {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                  {
                    "@type": "Question",
                    "name": "How much money do I need to start Ausbildung in Germany?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Plan for €2,000-€3,000 in initial costs including: German language course (€800-1,500), language certification exam (€150-250), visa fee (€75), document translation (€100-300), flight tickets (€500-800), and first month's expenses upon arrival. Some costs like housing deposit (€600-1,500) can be covered by your first stipend."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "What is the average Ausbildung salary in Germany?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Ausbildung trainees earn €850-1,300 per month depending on the sector and year of training. Healthcare and IT sectors pay the highest (€1,040-1,300), while hospitality starts around €850. Your salary increases each year of training, typically by €100-150 per year."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Do I need a blocked account for Ausbildung visa?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Unlike student visas, Ausbildung visa applicants typically don't need a blocked account because you'll have guaranteed income from your training contract. However, some embassies may request proof of initial funds (€1,000-2,000) to cover your first few weeks before receiving your first stipend."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "What are the living costs in Germany for Ausbildung trainees?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Monthly living costs range from €700-900 including: rent in shared flat (€250-450), groceries (€150-250), transportation (€30-60 with trainee discount), phone/internet (€25-40), and broadcasting fee (€18.36). Your Ausbildung stipend of €850-1,300 typically covers these expenses with €100-300 remaining."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Is Ausbildung free in Germany?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Yes, Ausbildung has no tuition fees - you actually get paid! German companies cover your training costs and pay you a monthly stipend. The only costs are pre-arrival expenses (visa, language course, travel) and living expenses, which are mostly covered by your stipend."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "How much can I save during Ausbildung?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Most trainees can save €100-300 monthly, depending on their sector and lifestyle. Over a 3-year training period, this could total €3,600-10,800 in savings. Trainees in higher-paying sectors like IT or healthcare who live frugally can save even more."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "What is the ROI of Ausbildung compared to university?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Ausbildung offers faster ROI: you earn €34,000+ during 3 years of training instead of accumulating debt. After completion, starting salaries are €2,400-3,800/month. Unlike university graduates who start earning after 3-5 years, Ausbildung graduates are already financially positive by training completion."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Are there hidden costs in Ausbildung?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Main overlooked costs include: mandatory broadcasting fee (€18.36/month), liability insurance (€40-70/year), work clothing for some sectors (€50-200), textbooks and materials (€100-200/year). Health insurance is automatically deducted from your stipend, so factor in the net amount when budgeting."
                    }
                  }
                ]
              }
            </script>
            <div class="container px-4 md:px-6">
                <div class="text-center mb-8 md:mb-12">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-help h-4 w-4">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <path d="M12 17h.01"></path>
                        </svg><span>Common Questions</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-3">
                        Cost Questions Answered
                    </h2>
                    <p class="text-muted-foreground max-w-2xl mx-auto">
                        Common questions about Ausbildung costs, salaries, and
                        financial planning
                    </p>
                </div>
                <div class="max-w-3xl mx-auto space-y-4">
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="true">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">How much money do I need to
                                start Ausbildung in
                                Germany?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200 rotate-180">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-[1000px] opacity-100"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Plan for €2,000-€3,000 in initial costs including: German
                                language course (€800-1,500), language certification exam
                                (€150-250), visa fee (€75), document translation
                                (€100-300), flight tickets (€500-800), and first
                                month&#x27;s expenses upon arrival. Some costs like
                                housing deposit (€600-1,500) can be covered by your first
                                stipend.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">What is the average
                                Ausbildung salary in Germany?</span><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Ausbildung trainees earn €850-1,300 per month depending on
                                the sector and year of training. Healthcare and IT sectors
                                pay the highest (€1,040-1,300), while hospitality starts
                                around €850. Your salary increases each year of training,
                                typically by €100-150 per year.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">Do I need a blocked account
                                for Ausbildung visa?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Unlike student visas, Ausbildung visa applicants typically
                                don&#x27;t need a blocked account because you&#x27;ll have
                                guaranteed income from your training contract. However,
                                some embassies may request proof of initial funds
                                (€1,000-2,000) to cover your first few weeks before
                                receiving your first stipend.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">What are the living costs
                                in Germany for Ausbildung
                                trainees?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Monthly living costs range from €700-900 including: rent
                                in shared flat (€250-450), groceries (€150-250),
                                transportation (€30-60 with trainee discount),
                                phone/internet (€25-40), and broadcasting fee (€18.36).
                                Your Ausbildung stipend of €850-1,300 typically covers
                                these expenses with €100-300 remaining.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">Is Ausbildung free in
                                Germany?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Yes, Ausbildung has no tuition fees - you actually get
                                paid! German companies cover your training costs and pay
                                you a monthly stipend. The only costs are pre-arrival
                                expenses (visa, language course, travel) and living
                                expenses, which are mostly covered by your stipend.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">How much can I save during
                                Ausbildung?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Most trainees can save €100-300 monthly, depending on
                                their sector and lifestyle. Over a 3-year training period,
                                this could total €3,600-10,800 in savings. Trainees in
                                higher-paying sectors like IT or healthcare who live
                                frugally can save even more.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">What is the ROI of
                                Ausbildung compared to
                                university?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Ausbildung offers faster ROI: you earn €34,000+ during 3
                                years of training instead of accumulating debt. After
                                completion, starting salaries are €2,400-3,800/month.
                                Unlike university graduates who start earning after 3-5
                                years, Ausbildung graduates are already financially
                                positive by training completion.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                        itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4" itemProp="name">Are there hidden costs in
                                Ausbildung?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                            itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 pb-5 text-muted-foreground leading-relaxed" itemprop="text">
                                Main overlooked costs include: mandatory broadcasting fee
                                (€18.36/month), liability insurance (€40-70/year), work
                                clothing for some sectors (€50-200), textbooks and
                                materials (€100-200/year). Health insurance is
                                automatically deducted from your stipend, so factor in the
                                net amount when budgeting.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/50">
            <div class="container px-4 md:px-6">
                <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary text-center mb-4">
                    Plan Your Finances
                </h2>
                <p class="text-center text-muted-foreground mb-8 max-w-2xl mx-auto">
                    Use our tools and guides to plan your Ausbildung budget and
                    understand the full financial picture.
                </p>
                <section class="py-12 md:py-16 bg-muted/30">
                    <div class="container px-4 md:px-6">
                        <div class="text-center mb-8 md:mb-10">
                            <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-2">
                                Explore More
                            </h2>
                        </div>
                        <div class="grid gap-4 md:gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <a class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                                href="#">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calculator h-5 w-5">
                                            <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                            <line x1="8" x2="16" y1="6" y2="6">
                                            </line>
                                            <line x1="16" x2="16" y1="14" y2="18">
                                            </line>
                                            <path d="M16 10h.01"></path>
                                            <path d="M12 10h.01"></path>
                                            <path d="M8 10h.01"></path>
                                            <path d="M12 14h.01"></path>
                                            <path d="M8 14h.01"></path>
                                            <path d="M12 18h.01"></path>
                                            <path d="M8 18h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1">
                                            Living Cost Calculator
                                        </h3>
                                        <p class="text-sm text-muted-foreground line-clamp-2">
                                            Calculate your expected monthly expenses based on
                                            your chosen city and lifestyle
                                        </p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a><a
                                class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                                href="#">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-wallet h-5 w-5">
                                            <path
                                                d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                                            </path>
                                            <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1">
                                            ROI Calculator
                                        </h3>
                                        <p class="text-sm text-muted-foreground line-clamp-2">
                                            Compare Ausbildung earnings vs other education paths
                                            and see your financial future
                                        </p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a><a
                                class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                                href="{{ route('front.sectors') }}">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-briefcase h-5 w-5">
                                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1">
                                            Explore Sectors
                                        </h3>
                                        <p class="text-sm text-muted-foreground line-clamp-2">
                                            Compare stipends across 300+ occupations in
                                            different industries
                                        </p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a><a
                                class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                                href="#">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building h-5 w-5">
                                            <rect width="16" height="20" x="4" y="2" rx="2"
                                                ry="2"></rect>
                                            <path d="M9 22v-4h6v4"></path>
                                            <path d="M8 6h.01"></path>
                                            <path d="M16 6h.01"></path>
                                            <path d="M12 6h.01"></path>
                                            <path d="M12 10h.01"></path>
                                            <path d="M12 14h.01"></path>
                                            <path d="M16 10h.01"></path>
                                            <path d="M16 14h.01"></path>
                                            <path d="M8 10h.01"></path>
                                            <path d="M8 14h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1">
                                            Housing Guide
                                        </h3>
                                        <p class="text-sm text-muted-foreground line-clamp-2">
                                            Find affordable accommodation options and tips for
                                            securing housing
                                        </p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a><a
                                class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                                href="{{ route('front.visa') }}">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text h-5 w-5">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1">
                                            Visa Requirements
                                        </h3>
                                        <p class="text-sm text-muted-foreground line-clamp-2">
                                            Learn about visa costs, requirements, and financial
                                            documentation needed
                                        </p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a><a
                                class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                                href="#">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-graduation-cap h-5 w-5">
                                            <path
                                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                            </path>
                                            <path d="M22 10v6"></path>
                                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1">
                                            Browse Job Listings
                                        </h3>
                                        <p class="text-sm text-muted-foreground line-clamp-2">
                                            See real positions with salary information to plan
                                            your budget
                                        </p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <div class="container mx-auto px-4 lg:px-6 my-16">
            <section class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg">
                <img alt="Background" loading="lazy" decoding="async" data-nimg="fill"
                    class="object-cover object-center rounded-2xl"
                    style="
                  position: absolute;
                  height: 100%;
                  width: 100%;
                  left: 0;
                  top: 0;
                  right: 0;
                  bottom: 0;
                  color: transparent;
                "
                    sizes="(max-width: 768px) 100vw, (max-width: 1280px) 90vw, 1280px"
                    src="{{ asset('assets/images/heroes/arbeitgeber-hero-background.jpeg?url=%2Fimages%2Farbeitgeber-hero-background.webp&amp;w=2048&amp;q=85') }}" />
                <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl azubi-hero-veil"></div>
                <div class="absolute inset-0 z-[1] rounded-2xl"
                    style="
                  background:
                    radial-gradient(
                      ellipse at center,
                      transparent 0%,
                      transparent 40%,
                      rgba(0, 0, 0, 0.4) 100%
                    ),
                    linear-gradient(
                      to top,
                      rgba(0, 0, 0, 0.5) 0%,
                      transparent 30%
                    ),
                    linear-gradient(
                      to right,
                      rgba(0, 0, 0, 0.3) 0%,
                      transparent 15%
                    ),
                    linear-gradient(
                      to left,
                      rgba(0, 0, 0, 0.3) 0%,
                      transparent 15%
                    );
                ">
                </div>
                <div
                    class="relative z-10 mx-auto flex max-w-container gap-8 px-6 sm:gap-10 md:px-12 flex-col items-center text-center">
                    <div class="flex flex-col gap-8 items-center text-center">
                        <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center">
                            Find Ausbildung Positions That Pay Well
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            Explore real job postings with transparent salary
                            information. Compare stipends across sectors and find
                            positions that match your financial goals.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                                Live Positions</a><a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Calculate
                                Your ROI</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
