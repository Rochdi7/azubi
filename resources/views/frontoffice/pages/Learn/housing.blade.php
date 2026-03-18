@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Housing Germany: €250-450/Month (2026 Guide) | Azubi')

@section('meta')
    <meta name="description"
        content="Find affordable housing in Germany: WG shared flats (€250-450), student dorms (€200-350), company housing options. City-by-city costs, deposit tips, and how to find rooms." />
    <meta name="keywords"
        content="ausbildung housing germany,student accommodation germany,wg shared flat germany,student dorm germany,rent germany ausbildung,housing costs germany" />
    <meta property="og:title" content="Ausbildung Housing Germany: €250-450/Month (2026 Guide)" />
    <meta property="og:description"
        content="Find affordable housing in Germany: WG shared flats (€250-450), student dorms (€200-350), company housing options. City-by-city costs, deposit tips, and how to find rooms." />
    <meta property="og:url" content="https://azubi.ma/housing" />
    <meta property="og:image" content="https://images.azubi.ma/og-images/housing.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Ausbildung Housing Germany: €250-450/Month (2026 Guide)" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Azubi" />
    <meta name="twitter:creator" content="@Azubi" />
    <meta name="twitter:title" content="Ausbildung Housing Germany: €250-450/Month (2026 Guide)" />
    <meta name="twitter:description"
        content="Find affordable housing in Germany: WG shared flats (€250-450), student dorms (€200-350), company housing options. City-by-city costs, deposit tips, and how to find rooms." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/housing') }}" />
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Saxon Switzerland in autumn - dramatic sandstone formations in Germany" loading="eager"
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
                sizes="100vw" src="{{ asset('assets/_next/saxon-switzerland-hero-autumndb61.jpeg') }}" />
            <div class="absolute inset-0 bg-black/30 z-0"></div>
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
                            aria-label="Housing Guide">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-house h-4 w-4 mr-2" aria-hidden="true">
                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                <path
                                    d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                </path>
                            </svg>Housing Guide
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Finding Housing in Germany
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Everything you need to know about securing accommodation for
                        your Ausbildung - from student dormitories and shared
                        apartments to rental contracts and costs.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Housing Options" href="#housing-options"><span aria-hidden="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-house w-5 h-5 mr-2">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg></span><span>Housing Options</span></a><a
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Search Tips" href="#search-tips"><span aria-hidden="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-search w-5 h-5 mr-2">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg></span><span>Search Tips</span></a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    Saxon Switzerland National Park, Saxony
                </p>
            </div>
        </section>
        <section id="housing-options" class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-primary/20">
                        <span class="text-primary">Accommodation Types</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Housing Options
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Germany offers several accommodation options for Ausbildung
                        students. Each has its advantages, costs, and application
                        processes to consider when planning your stay.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Apartment building in Germany" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/_next/housing-germany6e22.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-card/95 border-t border-primary/10 p-4">
                            <p class="text-foreground text-sm">
                                Finding suitable accommodation is one of the first
                                challenges when moving to Germany for your Ausbildung.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Finding The Right Place To Call Home
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            Securing affordable housing is one of the most important
                            aspects of your relocation to Germany. The type of
                            accommodation you choose will significantly impact your
                            budget, commute time, and overall quality of life during
                            your Ausbildung.
                        </p>
                        <p class="mb-6 text-muted-foreground">
                            It&#x27;s advisable to start your search at least 2-3 months
                            before your planned arrival, as the housing market in many
                            German cities can be competitive, especially at the
                            beginning of training periods and academic semesters.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-green-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Consider proximity to your training location</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-green-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Research the neighborhood and transportation
                                    options</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-green-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Compare prices across different accommodation
                                    types</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-green-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Check if utilities and internet are included in the
                                    rent</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-3 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-building text-primary-foreground h-6 w-6">
                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2">
                                    </rect>
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
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Student/Trainee Dormitories
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Purpose-built housing facilities for students and
                                trainees, often subsidized and offering basic furnished
                                rooms.
                            </p>
                            <div class="space-y-4 mb-6">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">Advantages</h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Affordable monthly rent (€250-350)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Usually furnished with basic amenities</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>All-inclusive pricing (utilities, internet)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Community of fellow students/trainees</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-medium text-sm mb-1">Limitations</h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>Usually small rooms (10-16 m²)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>Often shared kitchens and bathrooms</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>High demand with waiting lists</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-sm text-muted-foreground p-3 bg-primary/5 rounded-lg">
                                <strong>Apply through:</strong> Studentenwerk (student
                                services) or vocational school housing offices. Apply
                                early (6+ months before arrival).
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-green-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user text-white h-6 w-6">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Shared Apartments (WG)
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Wohngemeinschaft (WG) are private apartments shared by
                                multiple individuals, each with their own bedroom and
                                shared common areas.
                            </p>
                            <div class="space-y-4 mb-6">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">Advantages</h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Moderate costs (€300-500 depending on city)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Social interaction and language practice</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>More space than dormitories</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Cultural integration opportunities</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-medium text-sm mb-1">Limitations</h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>Compatibility with roommates varies</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>May require &quot;WG-Casting&quot;
                                                (interview)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>Shared responsibility for cleaning/bills</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-sm text-muted-foreground p-3 bg-primary/5 rounded-lg">
                                <strong>Find through:</strong> WG-Gesucht.de, Facebook
                                groups, university bulletin boards. Prepare for video
                                calls or in-person meetings with potential roommates.
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-amber-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-house text-white h-6 w-6">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Private Rentals
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Self-contained apartments or studios rented directly from
                                landlords, offering full privacy and independence.
                            </p>
                            <div class="space-y-4 mb-6">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">Advantages</h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Complete privacy and independence</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>No compromises on lifestyle</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Option to have visitors anytime</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Often better equipped kitchens/bathrooms</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-medium text-sm mb-1">Limitations</h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>Highest cost (€450-800+ depending on city)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>Requires full deposit (3 months&#x27; rent)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>May be unfurnished (additional costs)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-alert h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12">
                                                </line>
                                                <line x1="12" x2="12.01" y1="16" y2="16">
                                                </line>
                                            </svg><span>More extensive application requirements</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-sm text-muted-foreground p-3 bg-primary/5 rounded-lg">
                                <strong>Find through:</strong> ImmoScout24, ImmoWelt,
                                local newspapers, real estate agents. Be prepared for
                                competitive application processes.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 p-6 bg-card border border-primary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-calendar h-5 w-5 text-primary">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                        </svg><span>Temporary Accommodation</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        If you haven&#x27;t secured permanent housing before arrival,
                        consider temporary options while searching for long-term
                        accommodation:
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Youth Hostels</span>
                                <p class="text-sm text-muted-foreground">
                                    Affordable short-term stays with dormitory-style rooms
                                    (€20-35/night).
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Budget Hotels/Guesthouses</span>
                                <p class="text-sm text-muted-foreground">
                                    More privacy than hostels but higher cost
                                    (€40-70/night).
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Temporary Sublets</span>
                                <p class="text-sm text-muted-foreground">
                                    Short-term rentals available on WG-Gesucht and Airbnb
                                    (€400-700/month).
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Welcome Centers</span>
                                <p class="text-sm text-muted-foreground">
                                    Some companies and vocational schools offer temporary
                                    accommodation for new trainees.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-primary/20">
                        <span class="text-primary">Rental Procedures</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        The German Rental Process
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Understanding how the German rental market works is essential
                        for finding suitable accommodation. The process may differ
                        from what you&#x27;re used to in your home country.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Navigating The German Housing Market
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            The German rental market is characterized by strong tenant
                            protections but also by rigorous application processes.
                            Landlords and property managers typically require extensive
                            documentation before approving tenants.
                        </p>
                        <p class="mb-6 text-muted-foreground">
                            Most rental agreements in Germany are long-term, with
                            minimum rental periods of 1-2 years being common. Understand
                            that finding the right place may take time, especially in
                            larger cities where competition for affordable housing is
                            high.
                        </p>
                        <div class="space-y-4 mb-6">
                            <div class="p-4 bg-card border border-primary/10 rounded-lg">
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                    Understanding German Rental Terms
                                </h4>
                                <ul class="space-y-2 text-sm text-muted-foreground">
                                    <li class="flex items-start gap-2">
                                        <span class="font-medium w-28">Kaltmiete:</span><span>&quot;Cold rent&quot; - basic
                                            rent without
                                            utilities</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="font-medium w-28">Warmmiete:</span><span>&quot;Warm rent&quot; -
                                            includes heating and some
                                            utilities</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="font-medium w-28">Nebenkosten:</span><span>Additional costs/utilities
                                            (water, garbage,
                                            etc.)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="font-medium w-28">Kaution:</span><span>Security deposit (typically 2-3
                                            months&#x27;
                                            rent)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="font-medium w-28">Provision:</span><span>Real estate agent fee (if
                                            applicable)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Signing a rental contract in Germany" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/_next/housing-rentald80e.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-card/95 border-t border-primary/10 p-4">
                            <p class="text-foreground text-sm">
                                The rental process in Germany involves several steps and
                                documentation requirements that may be different from your
                                home country.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-16 space-y-8">
                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary text-center mb-6">
                        The Rental Application Process
                    </h3>
                    <div class="grid md:grid-cols-2 gap-10">
                        <div class="space-y-4">
                            <div class="flex gap-4 items-start">
                                <div
                                    class="bg-teal-500 w-10 h-10 rounded-full flex items-center justify-center shrink-0 mt-1">
                                    <span class="text-white font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                        Finding Listings
                                    </h4>
                                    <p class="text-muted-foreground mb-3">
                                        Start your search on popular platforms and local
                                        resources. Consider using multiple channels to
                                        maximize your options.
                                    </p>
                                    <div class="space-y-2">
                                        <div class="p-3 bg-background rounded-lg border border-border">
                                            <h5 class="font-medium text-sm mb-1">
                                                Online Platforms
                                            </h5>
                                            <ul class="space-y-1 text-sm text-muted-foreground">
                                                <li>• ImmoScout24.de - Largest housing portal</li>
                                                <li>• WG-Gesucht.de - Shared apartments</li>
                                                <li>• Immowelt.de - Comprehensive listings</li>
                                                <li>
                                                    • eBay-Kleinanzeigen.de - Classifieds with
                                                    rentals
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-3 bg-background rounded-lg border border-border">
                                            <h5 class="font-medium text-sm mb-1">
                                                Local Resources
                                            </h5>
                                            <ul class="space-y-1 text-sm text-muted-foreground">
                                                <li>• Local newspaper classifieds</li>
                                                <li>• University/school bulletin boards</li>
                                                <li>
                                                    • Facebook groups for housing in your city
                                                </li>
                                                <li>• Housing offices (Wohnungsamt)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div
                                    class="bg-teal-500 w-10 h-10 rounded-full flex items-center justify-center shrink-0 mt-1">
                                    <span class="text-white font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                        Application Documents
                                    </h4>
                                    <p class="text-muted-foreground mb-3">
                                        Prepare a complete application package to improve your
                                        chances. German landlords expect thorough
                                        documentation.
                                    </p>
                                    <div class="p-3 bg-background rounded-lg border border-border">
                                        <h5 class="font-medium text-sm mb-1">
                                            Required Documents
                                        </h5>
                                        <ul class="space-y-1 text-sm text-muted-foreground">
                                            <li class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                    <path d="m9 11 3 3L22 4"></path>
                                                </svg><span>Copy of ID or passport with visa</span>
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                    <path d="m9 11 3 3L22 4"></path>
                                                </svg><span>Proof of income (Ausbildung contract)</span>
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                    <path d="m9 11 3 3L22 4"></path>
                                                </svg><span>SCHUFA credit report (if available)</span>
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                    <path d="m9 11 3 3L22 4"></path>
                                                </svg><span>Letter from previous landlord (if
                                                    applicable)</span>
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                    <path d="m9 11 3 3L22 4"></path>
                                                </svg><span>Bank statements (3 months)</span>
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                    <path d="m9 11 3 3L22 4"></path>
                                                </svg><span>Application letter (Bewerbungsschreiben)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex gap-4 items-start">
                                <div
                                    class="bg-teal-500 w-10 h-10 rounded-full flex items-center justify-center shrink-0 mt-1">
                                    <span class="text-white font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                        Rental Contracts Explained
                                    </h4>
                                    <p class="text-muted-foreground mb-3">
                                        German rental contracts (Mietvertrag) are
                                        comprehensive legal documents with specific terms and
                                        conditions.
                                    </p>
                                    <div class="p-3 bg-background rounded-lg border border-border">
                                        <h5 class="font-medium text-sm mb-1">
                                            Key Contract Elements
                                        </h5>
                                        <ul class="space-y-1 text-sm text-muted-foreground">
                                            <li>• Rental duration (unlimited or fixed-term)</li>
                                            <li>• Notice periods (typically 3 months)</li>
                                            <li>• Rent amount and payment schedule</li>
                                            <li>• Utility cost arrangements</li>
                                            <li>• House rules (Hausordnung)</li>
                                            <li>
                                                • Renovation and maintenance responsibilities
                                            </li>
                                            <li>• Pet policies</li>
                                        </ul>
                                    </div>
                                    <div
                                        class="mt-3 text-sm text-muted-foreground p-3 bg-amber-500/10 border border-amber-500/20 rounded-lg">
                                        <strong>Important:</strong> Have your rental contract
                                        translated if you don&#x27;t understand German legal
                                        terminology. Don&#x27;t sign until you fully
                                        understand all terms.
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div
                                    class="bg-teal-500 w-10 h-10 rounded-full flex items-center justify-center shrink-0 mt-1">
                                    <span class="text-white font-bold">4</span>
                                </div>
                                <div>
                                    <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                        Security Deposits &amp; Advance Payments
                                    </h4>
                                    <p class="text-muted-foreground mb-3">
                                        Understand the financial aspects of renting in Germany
                                        to properly budget for initial costs.
                                    </p>
                                    <div class="space-y-3">
                                        <div class="p-3 bg-background rounded-lg border border-border">
                                            <h5 class="font-medium text-sm mb-1">
                                                Security Deposit (Kaution)
                                            </h5>
                                            <ul class="space-y-1 text-sm text-muted-foreground">
                                                <li>
                                                    • Typically 2-3 months&#x27; &quot;cold&quot;
                                                    rent
                                                </li>
                                                <li>
                                                    • Must be held in a special escrow account
                                                </li>
                                                <li>
                                                    • Returned with interest when you move out (if
                                                    no damages)
                                                </li>
                                                <li>
                                                    • Can sometimes be paid in 3 monthly
                                                    installments
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-3 bg-background rounded-lg border border-border">
                                            <h5 class="font-medium text-sm mb-1">
                                                First Payments
                                            </h5>
                                            <ul class="space-y-1 text-sm text-muted-foreground">
                                                <li>• First month&#x27;s rent in advance</li>
                                                <li>
                                                    • Security deposit (all or first installment)
                                                </li>
                                                <li>
                                                    • Possible broker fee (Provision) if applicable
                                                </li>
                                                <li>
                                                    • Possible renovation costs or furniture
                                                    purchases
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 p-6 bg-card border border-primary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-alert h-5 w-5 text-amber-500">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" x2="12" y1="8" y2="12"></line>
                            <line x1="12" x2="12.01" y1="16" y2="16"></line>
                        </svg><span>Important: Registration Requirement</span>
                    </h3>
                    <p class="text-muted-foreground mb-2">
                        Once you&#x27;ve found accommodation, don&#x27;t forget that
                        you must register your address (Anmeldung) at the local
                        residents&#x27; office (Bürgeramt or Einwohnermeldeamt) within
                        two weeks of moving in.
                    </p>
                    <p class="text-muted-foreground mb-2">
                        For this registration, you&#x27;ll need:
                    </p>
                    <ul class="space-y-1 mb-2">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg><span class="text-sm text-muted-foreground">Your passport and visa/residence
                                permit</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg><span class="text-sm text-muted-foreground">Completed registration form (available at the
                                office or
                                online)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg><span class="text-sm text-muted-foreground">Rental contract</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg><span class="text-sm text-muted-foreground">Landlord confirmation
                                (Wohnungsgeberbestätigung)</span>
                        </li>
                    </ul>
                    <p class="text-sm text-muted-foreground">
                        This registration is mandatory and necessary for opening a
                        bank account, obtaining health insurance, and other essential
                        services in Germany.
                    </p>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-primary/20">
                        <span class="text-accent">Cost Information</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Average Housing Costs by Region (2026)
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Housing costs in Germany vary significantly depending on
                        location, with major cities being considerably more expensive
                        than smaller towns or rural areas.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Housing costs comparison across German regions" loading="lazy" decoding="async"
                            data-nimg="fill" class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/_next/housing-costs-mapac7a.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-card/95 border-t border-primary/10 p-4">
                            <p class="text-foreground text-sm">
                                Housing costs can significantly impact your monthly budget
                                during your Ausbildung in Germany.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Making Your Housing Budget
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            As an Ausbildung student, housing will likely be your
                            largest monthly expense. Generally, it&#x27;s advisable to
                            spend no more than 30-40% of your monthly income on rent and
                            related costs.
                        </p>
                        <p class="mb-6 text-muted-foreground">
                            With Ausbildung stipends typically ranging from €1,100-1,500
                            per month in 2026, this means aiming for total housing costs
                            (including utilities) between €350-600 depending on your
                            specific situation.
                        </p>
                        <div class="p-4 bg-card border border-primary/10 rounded-lg">
                            <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                Total Monthly Housing Budget
                            </h4>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <span class="text-xs text-muted-foreground">Rent (warm)</span>
                                    <p class="font-medium">€350-550</p>
                                </div>
                                <div>
                                    <span class="text-xs text-muted-foreground">Electricity</span>
                                    <p class="font-medium">€30-60</p>
                                </div>
                                <div>
                                    <span class="text-xs text-muted-foreground">Internet</span>
                                    <p class="font-medium">€25-40</p>
                                </div>
                                <div>
                                    <span class="text-xs text-muted-foreground">Broadcasting Fee</span>
                                    <p class="font-medium">€17.50</p>
                                </div>
                            </div>
                            <div class="mt-3 pt-3 border-t border-border">
                                <div class="flex justify-between">
                                    <span class="font-medium">Total Monthly:</span><span
                                        class="font-medium">€420-670</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-16">
                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary text-center mb-6">
                        Regional Rental Price Comparison
                    </h3>
                    <div class="overflow-hidden rounded-xl border border-border">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse text-sm">
                                <thead>
                                    <tr class="bg-muted/50">
                                        <th class="border-b border-r border-border px-4 py-3 text-left font-medium">
                                            City/Region
                                        </th>
                                        <th class="border-b border-r border-border px-4 py-3 text-left font-medium">
                                            WG Room<br /><span
                                                class="text-xs font-normal text-muted-foreground">(€/month)</span>
                                        </th>
                                        <th class="border-b border-r border-border px-4 py-3 text-left font-medium">
                                            Student Dorm<br /><span
                                                class="text-xs font-normal text-muted-foreground">(€/month)</span>
                                        </th>
                                        <th class="border-b border-r border-border px-4 py-3 text-left font-medium">
                                            1-Room Apartment<br /><span
                                                class="text-xs font-normal text-muted-foreground">(€/month)</span>
                                        </th>
                                        <th class="border-b border-border px-4 py-3 text-left font-medium">
                                            Approximate<br />Deposit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-border bg-card">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Munich
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €550-700
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €350-450
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €800-1,100
                                        </td>
                                        <td class="px-4 py-3">€1,800-2,400</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Frankfurt
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €450-650
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €300-400
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €700-950
                                        </td>
                                        <td class="px-4 py-3">€1,500-2,100</td>
                                    </tr>
                                    <tr class="border-b border-border bg-card">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Hamburg
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €450-600
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €280-380
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €650-900
                                        </td>
                                        <td class="px-4 py-3">€1,400-2,000</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Berlin
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €400-550
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €250-350
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €600-850
                                        </td>
                                        <td class="px-4 py-3">€1,200-1,800</td>
                                    </tr>
                                    <tr class="border-b border-border bg-card">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Cologne
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €380-520
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €260-340
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €550-750
                                        </td>
                                        <td class="px-4 py-3">€1,200-1,600</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Stuttgart
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €400-550
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €280-380
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €650-850
                                        </td>
                                        <td class="px-4 py-3">€1,300-1,800</td>
                                    </tr>
                                    <tr class="border-b border-border bg-card">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Dresden
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €280-380
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €230-310
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €450-600
                                        </td>
                                        <td class="px-4 py-3">€900-1,200</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Leipzig
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €250-350
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €220-300
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €400-550
                                        </td>
                                        <td class="px-4 py-3">€800-1,100</td>
                                    </tr>
                                    <tr class="bg-card">
                                        <td class="border-r border-border px-4 py-3 font-medium">
                                            Small towns
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €200-300
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €180-280
                                        </td>
                                        <td class="border-r border-border px-4 py-3">
                                            €350-500
                                        </td>
                                        <td class="px-4 py-3">€700-1,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="text-sm text-muted-foreground mt-4 text-center">
                        Note: Prices reflect 2026 average ranges and may vary. Prices
                        include basic utilities but typically exclude electricity and
                        internet.
                    </p>
                </div>
                <div class="mt-12 max-w-3xl mx-auto">
                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-6">
                        Additional Costs to Consider
                    </h3>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="p-4 bg-card rounded-lg border border-primary/10">
                            <h4
                                class="tracking-tight font-semibold text-sm sm:text-base text-secondary flex items-center gap-2 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-credit-card h-4 w-4 text-accent">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg><span>One-time Costs</span>
                            </h4>
                            <ul class="space-y-2 text-sm text-muted-foreground">
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Security deposit:</span><span>2-3 months&#x27; rent
                                        (refundable)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Agent fee:</span><span>Up to 2 months&#x27; rent + VAT
                                        (if applicable)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Furniture:</span><span>€500-1,500 for unfurnished
                                        apartments</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Basic supplies:</span><span>€200-300 for
                                        kitchen/bathroom essentials</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Internet setup:</span><span>€30-70 activation
                                        fee</span>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 bg-card rounded-lg border border-primary/10">
                            <h4
                                class="tracking-tight font-semibold text-sm sm:text-base text-secondary flex items-center gap-2 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar h-4 w-4 text-accent">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg><span>Monthly Costs</span>
                            </h4>
                            <ul class="space-y-2 text-sm text-muted-foreground">
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Electricity:</span><span>€30-60 per month</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Internet:</span><span>€25-40 per month</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Broadcasting fee:</span><span>€17.50 per month
                                        (mandatory)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Renters insurance:</span><span>€5-10 per month
                                        (recommended)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-medium w-32">Building fees:</span><span>Variable, often included in
                                        Nebenkosten</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-10 p-6 bg-card border border-primary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-lightbulb h-5 w-5 text-accent">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                            </path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg><span>Budget Planning Guidance</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        To manage your housing budget effectively during your
                        Ausbildung:
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Apply for housing benefits if eligible</span>
                                <p class="text-sm text-muted-foreground">
                                    Some Ausbildung students qualify for Wohngeld (housing
                                    allowance) from the government.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Consider locations with good public transport but
                                    outside city centers</span>
                                <p class="text-sm text-muted-foreground">
                                    30 minutes by public transport from the city center can
                                    reduce rent by 20-30%.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Budget for initial setup costs</span>
                                <p class="text-sm text-muted-foreground">
                                    Save approximately €1,500-2,500 for your move-in period
                                    to cover deposit and initial expenses.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Check if your training company offers housing
                                    assistance</span>
                                <p class="text-sm text-muted-foreground">
                                    Some larger companies have trainee accommodation or
                                    subsidies for housing costs.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="search-tips" class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-primary/20">
                        <span class="text-green-500">Success Strategies</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Practical Tips
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Finding suitable accommodation in Germany requires
                        preparation, timing, and awareness of potential pitfalls.
                        These practical tips can help make your housing search more
                        successful.
                    </p>
                </div>
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-green-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar text-white h-6 w-6">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                When to Start Searching
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Timing is critical when looking for accommodation in
                                Germany, especially in competitive housing markets.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Begin 3-4 months before your planned arrival</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Avoid peak seasons (August-October,
                                        February-April)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Check listings daily and respond quickly</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Schedule viewing appointments immediately</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-red-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-alert text-white h-6 w-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Red Flags in Rental Offers
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Be vigilant for these warning signs to avoid scams and
                                problematic rental situations.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-alert h-4 w-4 text-red-500 shrink-0 mt-0.5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg><span class="text-sm">Rent significantly below market average</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-alert h-4 w-4 text-red-500 shrink-0 mt-0.5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg><span class="text-sm">Requests for money before viewing the property</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-alert h-4 w-4 text-red-500 shrink-0 mt-0.5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg><span class="text-sm">Refusal to provide a proper contract</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-alert h-4 w-4 text-red-500 shrink-0 mt-0.5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg><span class="text-sm">Landlord claiming to be abroad/unable to show
                                        property</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-alert h-4 w-4 text-red-500 shrink-0 mt-0.5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" x2="12" y1="8" y2="12"></line>
                                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                    </svg><span class="text-sm">Pressure to decide immediately without proper
                                        viewing</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-text text-primary-foreground h-6 w-6">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Tenant Rights
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Germany has strong tenant protection laws that you should
                                be aware of as a renter.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Protection against unfair rent increases</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Required notice periods for termination</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Rights regarding maintenance and repairs</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Regulated deposit handling procedures</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Access to tenant associations for support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-amber-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map text-white h-6 w-6">
                                    <path
                                        d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z">
                                    </path>
                                    <path d="M15 5.764v15"></path>
                                    <path d="M9 3.236v15"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Registration Requirements
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Address registration (Anmeldung) is a critical step after
                                finding housing in Germany.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Register within 2 weeks of moving in</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Book appointment at local Bürgeramt</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Bring landlord confirmation
                                        (Wohnungsgeberbestätigung)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Required for bank accounts, insurance, etc.</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Update registration when changing address</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-card rounded-xl border border-primary/10 max-w-3xl mx-auto">
                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                        Helpful Resources for Housing Search
                    </h3>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                Online Platforms
                            </h4>
                            <ul class="space-y-2 text-sm text-muted-foreground">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.wg-gesucht.de/" target="_blank"
                                        rel="noopener noreferrer" class="hover:underline">WG-Gesucht.de</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.immobilienscout24.de/" target="_blank"
                                        rel="noopener noreferrer" class="hover:underline">ImmobilienScout24.de</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.immowelt.de/" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline">Immowelt.de</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.studenten-wg.de/" target="_blank"
                                        rel="noopener noreferrer" class="hover:underline">Studenten-WG.de</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                Support Organizations
                            </h4>
                            <ul class="space-y-2 text-sm text-muted-foreground">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.studentenwerke.de/" target="_blank"
                                        rel="noopener noreferrer" class="hover:underline">Studentenwerke (Student
                                        Services)</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.mieterbund.de/" target="_blank"
                                        rel="noopener noreferrer" class="hover:underline">Deutscher Mieterbund
                                        (Tenants&#x27; Association)</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.daad.de/en/" target="_blank" rel="noopener noreferrer"
                                        class="hover:underline">DAAD (German Academic Exchange Service)</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg><a href="https://www.make-it-in-germany.com/" target="_blank"
                                        rel="noopener noreferrer" class="hover:underline">Make it in Germany (Official
                                        Portal)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-6 p-3 bg-card border border-primary/10 rounded-lg text-sm text-muted-foreground">
                        <strong>Pro Tip:</strong> Join Facebook groups specific to
                        your destination city, such as &quot;Wohnungen in [City
                        Name]&quot; or &quot;Expats in [City Name]&quot; for
                        additional leads and advice from community members.
                    </div>
                </div>
                <div class="mt-8 p-6 border border-primary/10 rounded-xl bg-card max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-lightbulb h-5 w-5 text-primary">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                            </path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg><span>Explore Related Topics</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Continue learning about life during your Ausbildung in Germany
                        with these related guides:
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <a class="p-3 bg-background hover:bg-muted rounded-lg border border-border flex items-center gap-2 transition-colors"
                            href="{{ route('front.daily-life') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4 text-primary">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg><span class="text-sm font-medium">Daily Life During Ausbildung</span></a><a
                            class="p-3 bg-background hover:bg-muted rounded-lg border border-border flex items-center gap-2 transition-colors"
                            href="{{ route('front.visa') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right h-4 w-4 text-primary">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg><span class="text-sm font-medium">Visa &amp; Residence Permits</span></a><a
                            class="p-3 bg-background hover:bg-muted rounded-lg border border-border flex items-center gap-2 transition-colors"
                            href="{{ route('front.costs') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right h-4 w-4 text-primary">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg><span class="text-sm font-medium">Costs &amp; Financing</span></a>
                    </div>
                </div>
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
                    src="{{ asset('assets/_next/arbeitgeber-hero-backgroundaa3f.jpeg') }}" />
                <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl"></div>
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
                            Secure Your Job First, Then Find Housing
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            Browse live Ausbildung positions across Germany. Know where
                            you&#x27;ll be working before you start your housing search
                            for a smoother relocation experience.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="{{ route('front.jobs') }}"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                                Live Positions</a><a href="{{ route('front.contact') }}"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Get
                                Relocation Support</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
