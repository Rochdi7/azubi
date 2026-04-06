@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Timeline 2026-2027: 18-Month Planning Guide | Azubi')

@section('meta')
    <meta name="description"
        content="Complete Ausbildung timeline: 6 months German prep, 3 months applications, 3 months visa. Plan for August 2026 or February 2027 start. Free timeline planner tool.">
    <meta name="keywords"
        content="ausbildung timeline,ausbildung planning,when to apply ausbildung,ausbildung start dates,ausbildung preparation timeline">
    <meta property="og:title" content="Ausbildung Timeline 2026-2027: 18-Month Planning Guide">
    <meta property="og:description"
        content="Complete Ausbildung timeline: 6 months German prep, 3 months applications, 3 months visa. Plan for August 2026 or February 2027 start. Free timeline planner tool.">
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="North Sea coast in autumn - representing the journey ahead" loading="eager" decoding="async"
                data-nimg="fill" class="object-cover object-center"
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
                sizes="100vw" src="{{ asset('assets/_next/north-sea-coast-hero-autumndd79.jpeg') }}" />
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
                            aria-label="Timeline Guide">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-calendar h-4 w-4 mr-2" aria-hidden="true">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                <path d="M3 10h18"></path>
                            </svg>Timeline Guide
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Complete Timeline for Starting Your Ausbildung
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Step-by-step timeline showing when to apply, what to prepare,
                        and key milestones in your journey to starting vocational
                        training in Germany.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="View Timeline" href="#timeline-overview"><span aria-hidden="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clock w-5 h-5 mr-2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg></span><span>View Timeline</span></a><a
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Plan Your Journey" href="#"><span
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-5 h-5 mr-2">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></span><span>Plan Your Journey</span></a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    North Sea Coast, Germany
                </p>
            </div>
        </section>
        <section id="timeline-overview" class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-primary/10 text-primary border-primary/20">
                        Journey Overview
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Your 18-Month Roadmap
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Planning your Ausbildung journey requires careful timing and
                        preparation. This comprehensive timeline breaks down all the
                        key milestones from initial research to your first day of
                        training.
                    </p>
                </div>
                <div class="w-full bg-card border rounded-xl p-6 mb-16 shadow-sm">
                    <div class="relative">
                        <div class="hidden md:block absolute top-24 left-0 right-0 h-1 bg-primary/20 z-10"></div>
                        <div class="md:hidden absolute top-0 bottom-0 left-[42px] w-1 bg-primary/20 z-10"></div>
                        <div class="hidden md:grid grid-cols-5 gap-4 relative z-20">
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-search w-6 h-6 text-primary">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="font-medium">Research Phase</div>
                                    <div class="text-sm text-muted-foreground">
                                        18 Months Before
                                    </div>
                                </div>
                                <div class="w-4 h-4 rounded-full bg-primary mt-4 mb-4"></div>
                                <div class="text-sm text-center text-muted-foreground">
                                    Explore options and plan your path
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6 text-primary">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="font-medium">Application Phase</div>
                                    <div class="text-sm text-muted-foreground">
                                        12-9 Months Before
                                    </div>
                                </div>
                                <div class="w-4 h-4 rounded-full bg-primary mt-4 mb-4"></div>
                                <div class="text-sm text-center text-muted-foreground">
                                    Submit applications to companies
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plane w-6 h-6 text-primary">
                                        <path
                                            d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="font-medium">Pre-Departure</div>
                                    <div class="text-sm text-muted-foreground">
                                        6-2 Months Before
                                    </div>
                                </div>
                                <div class="w-4 h-4 rounded-full bg-primary mt-4 mb-4"></div>
                                <div class="text-sm text-center text-muted-foreground">
                                    Prepare for relocation to Germany
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-house w-6 h-6 text-primary">
                                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                        <path
                                            d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="font-medium">Arrival in Germany</div>
                                    <div class="text-sm text-muted-foreground">
                                        First Month
                                    </div>
                                </div>
                                <div class="w-4 h-4 rounded-full bg-primary mt-4 mb-4"></div>
                                <div class="text-sm text-center text-muted-foreground">
                                    Settlement and initial registration
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-graduation-cap w-6 h-6 text-primary">
                                        <path
                                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                        </path>
                                        <path d="M22 10v6"></path>
                                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                    </svg>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="font-medium">Training Period</div>
                                    <div class="text-sm text-muted-foreground">
                                        2-3.5 Years
                                    </div>
                                </div>
                                <div class="w-4 h-4 rounded-full bg-primary mt-4 mb-4"></div>
                                <div class="text-sm text-center text-muted-foreground">
                                    Complete your vocational training
                                </div>
                            </div>
                        </div>
                        <div class="md:hidden space-y-8">
                            <div class="flex items-start gap-6">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center z-20 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-search w-5 h-5 text-primary">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-12 left-1/2 transform -translate-x-1/2 w-3 h-3 rounded-full bg-primary z-20">
                                    </div>
                                </div>
                                <div>
                                    <div class="font-medium">Research Phase</div>
                                    <div class="text-sm text-muted-foreground mb-1">
                                        18 Months Before
                                    </div>
                                    <div class="text-sm text-muted-foreground">
                                        Explore options and plan your path
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-6">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center z-20 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text w-5 h-5 text-primary">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-12 left-1/2 transform -translate-x-1/2 w-3 h-3 rounded-full bg-primary z-20">
                                    </div>
                                </div>
                                <div>
                                    <div class="font-medium">Application Phase</div>
                                    <div class="text-sm text-muted-foreground mb-1">
                                        12-9 Months Before
                                    </div>
                                    <div class="text-sm text-muted-foreground">
                                        Submit applications to companies
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-6">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center z-20 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-plane w-5 h-5 text-primary">
                                            <path
                                                d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-12 left-1/2 transform -translate-x-1/2 w-3 h-3 rounded-full bg-primary z-20">
                                    </div>
                                </div>
                                <div>
                                    <div class="font-medium">Pre-Departure</div>
                                    <div class="text-sm text-muted-foreground mb-1">
                                        6-2 Months Before
                                    </div>
                                    <div class="text-sm text-muted-foreground">
                                        Prepare for relocation to Germany
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-6">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center z-20 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-house w-5 h-5 text-primary">
                                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                            <path
                                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-12 left-1/2 transform -translate-x-1/2 w-3 h-3 rounded-full bg-primary z-20">
                                    </div>
                                </div>
                                <div>
                                    <div class="font-medium">Arrival in Germany</div>
                                    <div class="text-sm text-muted-foreground mb-1">
                                        First Month
                                    </div>
                                    <div class="text-sm text-muted-foreground">
                                        Settlement and initial registration
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-6">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center z-20 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-graduation-cap w-5 h-5 text-primary">
                                            <path
                                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                            </path>
                                            <path d="M22 10v6"></path>
                                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-12 left-1/2 transform -translate-x-1/2 w-3 h-3 rounded-full bg-primary z-20">
                                    </div>
                                </div>
                                <div>
                                    <div class="font-medium">Training Period</div>
                                    <div class="text-sm text-muted-foreground mb-1">
                                        2-3.5 Years
                                    </div>
                                    <div class="text-sm text-muted-foreground">
                                        Complete your vocational training
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Planning your Ausbildung journey timeline" loading="lazy" decoding="async"
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
                            sizes="100vw" src="{{ asset('assets/_next/heroc4bc.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                Careful planning and preparation over 18 months will set
                                you up for success in your Ausbildung journey.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Why Timing Matters
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            A successful Ausbildung journey requires strategic timing
                            and thorough preparation. Starting early gives you
                            significant advantages:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-clock w-3 h-3 text-primary">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Competitive Edge</span>
                                    <p class="text-sm text-muted-foreground">
                                        Starting 18 months in advance puts you ahead of most
                                        applicants, giving you access to the most desirable
                                        positions.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-clock w-3 h-3 text-primary">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Language Proficiency</span>
                                    <p class="text-sm text-muted-foreground">
                                        Ample time to achieve the required B1/B2 German level
                                        that most employers and visa applications require.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-clock w-3 h-3 text-primary">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Document Processing</span>
                                    <p class="text-sm text-muted-foreground">
                                        Buffer time for document authentication, translations,
                                        and potential delays in official processing.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-clock w-3 h-3 text-primary">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Financial Planning</span>
                                    <p class="text-sm text-muted-foreground">
                                        Time to save for initial expenses. Blocked account
                                        (€11,904) only needed if stipend is less than
                                        €992/month.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-primary/10 text-primary border-primary/20">
                        Phase 1
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Pre-Application Phase (18-12 months before)
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        This initial phase focuses on research, language preparation,
                        and getting your documents in order. Starting early gives you
                        a competitive advantage and adequate preparation time.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Research and Program Selection
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            The foundation of your Ausbildung journey begins with
                            thorough research to find the right vocational field and
                            understand the German apprenticeship system.
                        </p>
                        <div class="space-y-4">
                            <div class="p-4 bg-beige/5 border border-primary/20 rounded-lg">
                                <h4 class="font-medium mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-search h-4 w-4 text-primary">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg><span>Key Research Activities (18-15 months before)</span>
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Explore available vocational fields in
                                                Germany</span>
                                            <p class="text-xs text-muted-foreground">
                                                Research the 320+ recognized Ausbildung
                                                professions and identify those matching your
                                                interests and skills
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Understand the dual education system</span>
                                            <p class="text-xs text-muted-foreground">
                                                Learn how the combination of practical work and
                                                vocational schooling operates
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Research labor market demands</span>
                                            <p class="text-xs text-muted-foreground">
                                                Identify fields with high demand and better
                                                employment prospects after completion
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Check salary expectations and career
                                                paths</span>
                                            <p class="text-xs text-muted-foreground">
                                                Understand potential earnings during and after
                                                Ausbildung
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                                    <p class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg><span><strong>Pro Tip:</strong> Focus on 2-3 vocational
                                            fields that match both your interests and offer good
                                            job prospects in Germany.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Research and preparation for Ausbildung" loading="lazy" decoding="async"
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
                            sizes="100vw" src="{{ asset('assets/_next/preparation1771.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                Thorough research and preparation 18 months before your
                                planned start date ensures you can make informed decisions
                                about your Ausbildung path.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-2 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-globe text-white h-6 w-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                    <path d="M2 12h20"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Language Preparation
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Begin intensive German language learning to reach the
                                required B1-B2 level for most Ausbildung programs.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Timeline: 18-12 months before start
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Start with A1-A2 courses</span>
                                                <p class="text-xs text-muted-foreground">
                                                    If beginning from zero, focus on reaching A2
                                                    level within the first 6 months
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Schedule formal language exams</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Register for official exams like Goethe, TestDaF
                                                    or telc well in advance
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Learn field-specific vocabulary</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Start learning technical terms related to your
                                                    chosen vocational field
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Practice with native speakers</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Find language exchange partners or online tutors
                                                    to improve conversation skills
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-text text-white h-6 w-6">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Document Preparation
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Begin collecting and authenticating the necessary
                                documents for your applications and eventual visa process.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Timeline: 15-12 months before start
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Educational credentials</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Collect school certificates, diplomas and
                                                    transcripts
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Document authentication</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Get Apostille or legalization for your documents
                                                    from relevant authorities
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Professional translations</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Arrange for certified German translations of all
                                                    official documents
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Draft CV and motivation letter</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Create German-style CV (Lebenslauf) and begin
                                                    working on your motivation letter
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-beige/5 border border-primary/20 rounded-xl max-w-3xl mx-auto">
                    <h3 class="text-lg font-semibold mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-credit-card h-5 w-5 text-primary">
                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                            <line x1="2" x2="22" y1="10" y2="10"></line>
                        </svg><span>Financial Planning</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Start saving and planning for the financial requirements of
                        your Ausbildung journey:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="bg-beige/90 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Blocked Account Savings</h4>
                                <p class="text-sm text-muted-foreground">
                                    Only needed if your Ausbildung stipend will be less than
                                    €992/month. If required, you&#x27;ll need approximately
                                    €11,904 (€992 per month for 12 months).
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-beige/90 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Initial Expenses</h4>
                                <p class="text-sm text-muted-foreground">
                                    Save additional funds for language courses, document
                                    authentication, translations, visa fees, and flight
                                    tickets.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-beige/90 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Housing Deposit</h4>
                                <p class="text-sm text-muted-foreground">
                                    Plan for 2-3 months of rent as security deposit plus
                                    first month&#x27;s rent (€600-1,200 depending on
                                    location).
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-beige/90 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Health Insurance</h4>
                                <p class="text-sm text-muted-foreground">
                                    Research health insurance requirements and costs, which
                                    will be partially covered by your employer during
                                    Ausbildung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                        <p class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg><span><strong>Financial Tip:</strong> Your total preparation
                                budget should include approximately €14,000-16,000 to
                                cover all pre-departure and initial settlement
                                costs.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-secondary/10 text-secondary border-secondary/20">
                        Phase 2
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Application Phase (12-6 months before)
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        The application phase is when you actively search for and
                        apply to Ausbildung positions, prepare for interviews, and
                        secure your training spot with a German company.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Applying for Ausbildung positions in Germany" loading="lazy" decoding="async"
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
                            sizes="100vw" src="{{ asset('assets/_next/application49f8.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                The application phase requires careful preparation to
                                secure a position with a German company for your
                                Ausbildung.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Application Deadlines for 2027 Intake
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            Different industries and companies have varying application
                            timelines. Knowing when to apply is crucial for securing
                            your desired position.
                        </p>
                        <div class="space-y-4">
                            <div class="p-4 bg-secondary/5 border border-secondary/20 rounded-lg">
                                <h4 class="font-medium mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar-days h-4 w-4 text-secondary">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                        <path d="M8 14h.01"></path>
                                        <path d="M12 14h.01"></path>
                                        <path d="M16 14h.01"></path>
                                        <path d="M8 18h.01"></path>
                                        <path d="M12 18h.01"></path>
                                        <path d="M16 18h.01"></path>
                                    </svg><span>Typical Application Windows by Sector</span>
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Large Companies &amp; Public Sector</span>
                                            <p class="text-xs text-muted-foreground">
                                                12-15 months in advance (July-September 2026 for
                                                August 2027 start)
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Medium-Sized Companies</span>
                                            <p class="text-xs text-muted-foreground">
                                                9-12 months in advance (October-December 2026 for
                                                August 2027 start)
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Small Businesses &amp; Crafts</span>
                                            <p class="text-xs text-muted-foreground">
                                                6-9 months in advance (January-March 2027 for
                                                August 2027 start)
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Last-Minute Positions</span>
                                            <p class="text-xs text-muted-foreground">
                                                3-6 months in advance (Available year-round;
                                                higher chance in April-July 2027)
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                                    <p class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-secondary shrink-0 mt-0.5">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg><span><strong>Application Tip:</strong> Create
                                            application tracking spreadsheet to monitor
                                            deadlines, application status, and follow-ups with
                                            companies.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-2 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-search text-white h-6 w-6">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Finding Openings
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Use multiple channels to find suitable Ausbildung
                                positions matching your skills and interests.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Timeline: 12-9 months before start
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Official job portals</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Federal Employment Agency (Arbeitsagentur),
                                                    EURES, and Make-it-in-Germany
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Company websites</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Directly check career pages of companies in your
                                                    preferred location
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Chambers of Industry and Commerce</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Check IHK and HWK websites for regional listings
                                                    of apprenticeship positions
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Placement services</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Consider professional services specializing in
                                                    international applicants
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-text text-white h-6 w-6">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Application Materials
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Prepare high-quality application materials that meet
                                German standards and showcase your qualifications.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Timeline: 10-8 months before start
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">German-style CV (Lebenslauf)</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Professional photo, chronological format, clear
                                                    structure with education and experience
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Cover letter (Anschreiben)</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Customized for each company, explaining your
                                                    motivation and qualifications
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Application portfolio</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Includes certificates, diplomas, language
                                                    certificates, and references
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-secondary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Digital application versions</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Single PDF file with all documents in correct
                                                    order for online applications
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-secondary/5 border border-secondary/20 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-secondary">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg><span>Interview Preparation</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Once your applications start generating interest, you&#x27;ll
                        need to prepare for various interview formats:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="font-medium">
                                    Remote Pre-Screening (8-7 months before)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Many companies will conduct initial video or phone
                                    interviews. Prepare your setup with good lighting,
                                    stable internet, and a quiet environment. Practice
                                    answering common questions in German.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="font-medium">
                                    Assessment Center (7-6 months before)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Larger companies may invite you to participate in
                                    assessment centers with group tasks, presentations, and
                                    aptitude tests. Research the company&#x27;s values and
                                    practice collaboration skills.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="font-medium">
                                    Final Interview (7-6 months before)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    The last step often involves meeting with department
                                    heads or future supervisors. Prepare questions about
                                    your training plan, daily responsibilities, and team
                                    structure.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="font-medium">
                                    Contract Negotiation (6 months before)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Once offered a position, review your training contract
                                    carefully. Check the training duration, probation
                                    period, stipend amount, holiday entitlements, and any
                                    additional benefits before signing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                        <p class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-lightbulb h-4 w-4 text-secondary shrink-0 mt-0.5">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg><span><strong>Interview Tip:</strong> Request your training
                                contract, visa information, and accommodation assistance
                                letter as soon as you receive an offer. These documents
                                are essential for your visa application.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-primary/10 text-primary border-primary/20">
                        Phase 3
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Pre-Departure Phase (6-1 month before)
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        With your Ausbildung position secured, this phase focuses on
                        visa application, travel preparation, and ensuring a smooth
                        transition to life in Germany.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Visa Application Process
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            The visa application is a critical step that requires
                            careful preparation and timely submission.
                        </p>
                        <div class="space-y-4">
                            <div class="p-4 bg-primary/5 border border-primary/20 rounded-lg">
                                <h4 class="font-medium mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text h-4 w-4 text-primary">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg><span>Visa Timeline (6-3 months before)</span>
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Document collection (6 months before)</span>
                                            <p class="text-xs text-muted-foreground">
                                                Gather signed training contract, language
                                                certificate, and educational documents
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Blocked account setup (if needed)</span>
                                            <p class="text-xs text-muted-foreground">
                                                Only if your stipend is less than €992/month: Open
                                                and transfer required funds (€11,904)
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Application submission (4 months
                                                before)</span>
                                            <p class="text-xs text-muted-foreground">
                                                Schedule appointment at German embassy/consulate
                                                and submit application
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Visa processing (3-1 months before)</span>
                                            <p class="text-xs text-muted-foreground">
                                                Average processing time is 6-12 weeks for National
                                                Visas (D-Visa)
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                                    <p class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg><span><strong>Visa Tip:</strong> Apply for health
                                            insurance coverage beginning from your arrival date;
                                            proof of insurance is required for your visa
                                            application.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Preparing for departure to Germany" loading="lazy" decoding="async"
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
                            sizes="100vw" src="{{ asset('assets/_next/departure5381.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                Careful preparation in the months before departure ensures
                                a smooth transition to life in Germany.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-2 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
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
                                Accommodation Search
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Finding suitable housing is one of the most important
                                pre-departure tasks.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Timeline: 4-2 months before departure
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Request employer assistance</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Many companies help trainees with temporary or
                                                    permanent accommodation
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Research housing options</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Student dormitories, shared apartments (WG), or
                                                    private rentals
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Book temporary accommodation</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Secure at least 2-4 weeks of temporary housing
                                                    upon arrival
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Prepare housing application
                                                    documents</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Including training contract, financial proof,
                                                    and personal introduction
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-plane text-white h-6 w-6">
                                    <path
                                        d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Travel Planning
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Organize your journey to Germany and prepare for your
                                initial arrival period.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Timeline: 2-1 months before departure
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Book flights</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Aim to arrive 2-3 weeks before your training
                                                    begins
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Pack essentials</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Climate-appropriate clothing, basic necessities,
                                                    and important documents
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Inform your employer</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Confirm arrival date and coordinate initial
                                                    meeting
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Plan first-week itinerary</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Research transportation from airport and initial
                                                    registration steps
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-primary/5 border border-primary/20 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-bookmark h-5 w-5 text-primary">
                            <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                        </svg><span>Final Preparations Checklist</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Complete these essential tasks in the final weeks before your
                        departure:
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4 class="font-medium text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Financial Preparations</span>
                            </h4>
                            <ul class="space-y-1 text-xs text-muted-foreground list-inside list-disc pl-1">
                                <li>Notify your bank of international travel</li>
                                <li>Ensure access to funds upon arrival</li>
                                <li>Research German bank account options</li>
                                <li>Prepare cash for initial expenses (€500-1000)</li>
                            </ul>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4 class="font-medium text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Important Documents</span>
                            </h4>
                            <ul class="space-y-1 text-xs text-muted-foreground list-inside list-disc pl-1">
                                <li>Make copies of passport and visa</li>
                                <li>Print training contract and insurance proof</li>
                                <li>Bring original educational certificates</li>
                                <li>Prepare multiple passport photos</li>
                            </ul>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4 class="font-medium text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Logistics and Communications</span>
                            </h4>
                            <ul class="space-y-1 text-xs text-muted-foreground list-inside list-disc pl-1">
                                <li>
                                    Download essential German apps (transportation, banking,
                                    etc.)
                                </li>
                                <li>Set up international calling/SIM card options</li>
                                <li>Save important contact information</li>
                                <li>Research local transportation passes</li>
                            </ul>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4 class="font-medium text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Health and Insurance</span>
                            </h4>
                            <ul class="space-y-1 text-xs text-muted-foreground list-inside list-disc pl-1">
                                <li>Complete any required vaccinations</li>
                                <li>
                                    Obtain prescription medications for initial period
                                </li>
                                <li>Bring translated medical records if necessary</li>
                                <li>
                                    Keep health insurance documents readily accessible
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-secondary/10 text-secondary border-secondary/20">
                        Phase 4
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        First Steps in Germany
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Your first few weeks in Germany require completing several
                        essential administrative tasks before your Ausbildung
                        officially begins.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="First steps after arriving in Germany" loading="lazy" decoding="async"
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
                            sizes="100vw" src="{{ asset('assets/_next/training550a.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                Completing important administrative tasks within your
                                first weeks will set you up for a smooth start to your
                                Ausbildung.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            First Week Priorities
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            These tasks should be completed within your first 1-2 weeks
                            in Germany, some within specific legal deadlines.
                        </p>
                        <div class="space-y-4">
                            <div class="p-4 bg-primary/5 border border-primary/20 rounded-lg">
                                <h4 class="font-medium mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Essential Administrative Tasks</span>
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Address Registration (Anmeldung)</span>
                                            <p class="text-xs text-muted-foreground">
                                                Must be completed within 14 days of arrival at
                                                your local Residents&#x27; Registration Office
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Bank Account Opening</span>
                                            <p class="text-xs text-muted-foreground">
                                                Set up a German bank account with your address
                                                registration document and passport
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Health Insurance Confirmation</span>
                                            <p class="text-xs text-muted-foreground">
                                                Visit local health insurance office to complete
                                                your enrollment
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Residence Permit Application</span>
                                            <p class="text-xs text-muted-foreground">
                                                If you entered with a visa, schedule appointment
                                                at Foreigners Authority (Ausländerbehörde)
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                                    <p class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg><span><strong>Pro Tip:</strong> Ask your employer for
                                            assistance with these administrative processes. Many
                                            companies help international trainees with these
                                            initial steps.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-2 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big text-white h-6 w-6">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Second Week Tasks
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                After your most urgent tasks are completed, focus on these
                                additional important arrangements.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Secondary Priorities
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Tax ID
                                                    (Steueridentifikationsnummer)</span>
                                                <p class="text-xs text-muted-foreground">
                                                    You&#x27;ll receive this automatically after
                                                    registration; provide to employer
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Mobile phone contract</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Set up a local mobile plan for better rates and
                                                    connectivity
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Long-term housing search</span>
                                                <p class="text-xs text-muted-foreground">
                                                    If in temporary accommodation, begin searching
                                                    for permanent housing
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Company onboarding</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Initial meetings with employer, paperwork, and
                                                    orientation
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-plane text-white h-6 w-6">
                                    <path
                                        d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Transportation Arrangements
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Getting around efficiently in your new city is crucial for
                                both work and daily life.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-sm mb-1">
                                        Mobility Priorities
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Public transportation pass</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Monthly or annual passes often offered at
                                                    discounted trainee rates
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Transportation apps</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Download local transit apps for schedules and
                                                    route planning
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Route planning</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Map out routes between your home, workplace, and
                                                    vocational school
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Bicycle option</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Consider buying a used bicycle for local
                                                    transportation
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-secondary/5 border border-secondary/20 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-globe h-5 w-5 text-secondary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg><span>Integration Courses</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Consider these integration options to help you adapt to life
                        in Germany:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Welcome Programs</h4>
                                <p class="text-sm text-muted-foreground">
                                    Many cities offer welcome programs for newcomers. Check
                                    with your local city hall (Rathaus) for orientation
                                    events and information packages.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Language Courses</h4>
                                <p class="text-sm text-muted-foreground">
                                    Continue improving your German with additional language
                                    courses. Your employer may offer language support or you
                                    can find courses at Volkshochschulen (adult education
                                    centers).
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="font-medium">Cultural Orientation</h4>
                                <p class="text-sm text-muted-foreground">
                                    Consider attending cultural orientation courses that
                                    explain German customs, workplace culture, and social
                                    norms to help you integrate more smoothly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-primary/10 text-primary border-primary/20">
                        Phase 5
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Training Period Milestones
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Throughout your 2-3.5 year Ausbildung journey, you&#x27;ll
                        progress through several important phases and milestones that
                        mark your development.
                    </p>
                </div>
                <div class="max-w-4xl mx-auto">
                    <div class="relative">
                        <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-primary/20 transform -translate-x-1/2 z-0">
                        </div>
                        <div class="relative z-10 flex items-center justify-center mb-16">
                            <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-graduation-cap text-white h-5 w-5">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-background border border-border rounded-xl p-6 mb-12 shadow-md max-w-3xl mx-auto relative z-10">
                            <h3
                                class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2 flex items-center gap-2">
                                <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-sm">Months
                                    1-4</span><span>Probation Period</span>
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                The initial months of your Ausbildung serve as a mutual
                                evaluation period for both you and your training company.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Focus on orientation, learning company procedures,
                                            and building relationships with colleagues
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Initial performance assessments and feedback from
                                            your training supervisor
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Begin vocational school classes and establish study
                                            routines
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">
                                            Key Milestone: Successfully completing your
                                            probation period, typically after 1-4 months
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative z-10 flex items-center justify-center mb-16">
                            <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-graduation-cap text-white h-5 w-5">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-background border border-border rounded-xl p-6 mb-12 shadow-md max-w-3xl mx-auto relative z-10">
                            <h3
                                class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2 flex items-center gap-2">
                                <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-sm">Months
                                    5-12</span><span>First Year Development</span>
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                The remainder of your first year focuses on building
                                foundational skills and knowledge.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Developing foundational theoretical knowledge in
                                            vocational school
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Acquiring basic practical skills through supervised
                                            tasks at your training company
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Regular documentation in your training report book
                                            (Berichtsheft)
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">
                                            Key Milestone: First-year performance review,
                                            typically with feedback from both company trainer
                                            and vocational teacher
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative z-10 flex items-center justify-center mb-16">
                            <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-graduation-cap text-white h-5 w-5">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-background border border-border rounded-xl p-6 mb-12 shadow-md max-w-3xl mx-auto relative z-10">
                            <h3
                                class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2 flex items-center gap-2">
                                <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-sm">Around Month
                                    18</span><span>Interim Examinations</span>
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Approximately halfway through your Ausbildung, you&#x27;ll
                                take interim examinations to assess your progress.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Written exams covering theoretical knowledge from
                                            vocational school
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Practical skills assessment in some professions
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Increased responsibilities at your training company
                                            as your skill level advances
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">
                                            Key Milestone: Successfully passing interim
                                            examinations, which may count toward your final
                                            grade in some professions
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative z-10 flex items-center justify-center mb-16">
                            <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-award text-white h-5 w-5">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-background border border-border rounded-xl p-6 shadow-md max-w-3xl mx-auto relative z-10">
                            <h3
                                class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2 flex items-center gap-2">
                                <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-sm">Final 3-6
                                    Months</span><span>Final Examination &amp; Graduation</span>
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                The culmination of your Ausbildung journey involves
                                comprehensive final examinations and graduation.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Intensive preparation for written, practical, and
                                            possibly oral examinations
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Completion of training report book and any required
                                            projects or presentations
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Discussion of post-training employment opportunities
                                            with your company
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary/10 w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">
                                            Key Milestone: Receiving your vocational
                                            qualification certificate, recognized throughout
                                            Germany and the EU
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            Ready to Start Your Ausbildung Journey?
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            Browse verified training positions from companies actively
                            hiring international trainees across Germany.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Explore
                                Training Positions</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="py-10">
            <div class="container px-4 md:px-6">
                <div class="mx-auto max-w-2xl">
                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary text-center mb-6">
                        Related Services
                    </h3>
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4">
                        <a class="p-3 sm:p-4 rounded-xl bg-background/50 hover:bg-background border border-border flex flex-col items-center text-center gap-2 transition-colors"
                            href="#">
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-text h-4 w-4 sm:h-5 sm:w-5 text-primary">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-medium">Document Checklist</span>
                        </a><a
                            class="p-3 sm:p-4 rounded-xl bg-background/50 hover:bg-background border border-border flex flex-col items-center text-center gap-2 transition-colors"
                            href="#">
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-globe h-4 w-4 sm:h-5 sm:w-5 text-primary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                    <path d="M2 12h20"></path>
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-medium">Language Courses</span>
                        </a><a
                            class="p-3 sm:p-4 rounded-xl bg-background/50 hover:bg-background border border-border flex flex-col items-center text-center gap-2 transition-colors"
                            href="{{ route('front.visa') }}">
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-text h-4 w-4 sm:h-5 sm:w-5 text-primary">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-medium">Visa Guide</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
