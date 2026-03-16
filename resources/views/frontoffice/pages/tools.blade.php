@extends('frontoffice.layouts.app')

@section('title', 'Free Ausbildung Tools: 12 Calculators & Generators (2026) | GoAusbildung')

@section('meta')
    <meta name="description" content="Free AI-powered application tools. Generate cover letters in 30 seconds. Eligibility checker, job matching, timeline planner &amp; more." />
    <meta name="keywords" content="ausbildung tools,eligibility checker germany,ai cover letter generator,cost calculator germany,ausbildung checklist,free ausbildung resources" />
    <meta property="og:title" content="Free Ausbildung Tools: 12 Calculators &amp; Generators (2026)" />
    <meta property="og:description" content="Free AI-powered application tools. Generate cover letters in 30 seconds. Eligibility checker, job matching, timeline planner &amp; more." />
    <meta property="og:image" content="https://images.goausbildung.com/og-images/tools.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Free Ausbildung Tools: 12 Calculators &amp; Generators (2026)" />
    <meta name="twitter:description" content="Free AI-powered application tools. Generate cover letters in 30 seconds. Eligibility checker, job matching, timeline planner &amp; more." />
    <meta name="twitter:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/tools') }}" />
@endsection

@section('content')
<div class="min-h-screen bg-cream">
          <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44"
          >
            <img
              alt="Rothenburg ob der Tauber in autumn - historic German medieval town"
              loading="eager"
              decoding="async"
              data-nimg="fill"
              class="object-cover object-center"
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
              src="{{ asset('assets/_next/rothenburg-hero-autumna965.jpeg') }}"
            />
            <div class="absolute inset-0 bg-black/30 z-0"></div>
            <div
              class="absolute inset-0 z-0"
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
              "
            ></div>
            <div
              class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5 items-center text-center max-w-4xl"
            >
              <div class="flex flex-col gap-4 sm:gap-5">
                <div class="animate-fade-in-up animation-delay-100">
                  <div
                    class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold"
                    aria-label="Free Tools"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide lucide-wrench h-4 w-4 mr-2"
                      aria-hidden="true"
                    >
                      <path
                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"
                      ></path></svg
                    >Free Tools
                  </div>
                </div>
                <h1
                  class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200"
                >
                  Apply 10x Faster
                </h1>
                <p
                  class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300"
                >
                  Smart Application Kits generate your cover letter, checklist
                  &amp; email template in 30 seconds. Plus free planning tools.
                </p>
                <nav
                  class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                  aria-label="Primary navigation"
                >
                  <a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                    aria-label="Explore All Tools"
                    href="#tools-section"
                    ><span aria-hidden="true"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-calculator w-5 h-5 mr-2"
                      >
                        <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                        <line x1="8" x2="16" y1="6" y2="6"></line>
                        <line x1="16" x2="16" y1="14" y2="18"></line>
                        <path d="M16 10h.01"></path>
                        <path d="M12 10h.01"></path>
                        <path d="M8 10h.01"></path>
                        <path d="M12 14h.01"></path>
                        <path d="M8 14h.01"></path>
                        <path d="M12 18h.01"></path>
                        <path d="M8 18h.01"></path></svg></span
                    ><span>Explore All Tools</span></a
                  ><a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                    aria-label="Get Started"
                    href="auth7d2a.html?signup"
                    ><span aria-hidden="true"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-compass w-5 h-5 mr-2"
                      >
                        <path
                          d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"
                        ></path>
                        <circle cx="12" cy="12" r="10"></circle></svg></span
                    ><span>Get Started</span></a
                  >
                </nav>
                <div class="animate-fade-in-up animation-delay-500 mt-4">
                  <div
                    class="flex flex-wrap items-center justify-center gap-6 mt-4 text-sm text-white/80"
                  >
                    <div class="flex items-center gap-2">
                      <div class="w-2 h-2 rounded-full bg-white"></div>
                      <span
                        >12<!-- -->
                        Tools Available</span
                      >
                    </div>
                    <div class="flex items-center gap-2">
                      <div class="w-2 h-2 rounded-full bg-white/60"></div>
                      <span
                        >7<!-- -->
                        Coming Soon</span
                      >
                    </div>
                    <div class="flex items-center gap-2">
                      <div class="w-2 h-2 rounded-full bg-white"></div>
                      <span>100% Free</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
              <p
                class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full"
              >
                Rothenburg ob der Tauber, Bavaria
              </p>
            </div>
          </section>
          <section id="tools-section" class="py-16 bg-beige">
            <div class="container max-w-7xl mx-auto px-6">
              <div class="mb-12">
                <h2
                  class="tracking-tight font-bold text-2xl sm:text-3xl text-green mb-3"
                >
                  Available Now
                </h2>
                <p class="text-green/70">
                  Start using these tools immediately to plan your Ausbildung
                  journey
                </p>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a
                  class="block group"
                  href="{{ route('front.tools.blocked-account-calculator') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-wallet w-6 h-6 text-white"
                          >
                            <path
                              d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"
                            ></path>
                            <path
                              d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"
                            ></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Financial Planning</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Blocked Account Calculator
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Calculate exact blocked account requirements for your
                        Ausbildung visa application including monthly breakdown
                        and total costs.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a class="block group" href="{{ route('front.tools.living-cost-calculator') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-euro w-6 h-6 text-white"
                          >
                            <path d="M4 10h12"></path>
                            <path d="M4 14h9"></path>
                            <path
                              d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"
                            ></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Financial Planning</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Living Cost Calculator
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Estimate monthly living expenses by city including rent,
                        food, transport, insurance, and entertainment costs
                        across Germany.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a class="block group" href="{{ route('front.tools.document-checklist') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-file-check w-6 h-6 text-white"
                          >
                            <path
                              d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                            ></path>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                            <path d="m9 15 2 2 4-4"></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Application Support</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Document Checklist Generator
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Generate personalized document checklist based on your
                        nationality, Ausbildung sector, and current situation.
                        Get exact locations, costs, and timelines for obtaining
                        each document.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a class="block group" href="{{ route('front.tools.application-timeline') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-calendar w-6 h-6 text-white"
                          >
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect
                              width="18"
                              height="18"
                              x="3"
                              y="4"
                              rx="2"
                            ></rect>
                            <path d="M3 10h18"></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Application Support</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Application Timeline Planner
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Calculate realistic timelines based on nationality,
                        German level, and sector. Get smart strategic guidance
                        with month-by-month action plans and critical path
                        analysis.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a class="block group" href="{{ route('front.tools.cv-comparison') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-file-text w-6 h-6 text-white"
                          >
                            <path
                              d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                            ></path>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                            <path d="M10 9H8"></path>
                            <path d="M16 13H8"></path>
                            <path d="M16 17H8"></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Application Support</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        German CV vs Home Country CV
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Compare German CV (Lebenslauf) format with your home
                        country format and get specific adaptation
                        recommendations.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a
                  class="block group"
                  href="{{ route('front.tools.pre-departure-checklist') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-luggage w-6 h-6 text-white"
                          >
                            <path
                              d="M6 20a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2"
                            ></path>
                            <path
                              d="M8 18V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v14"
                            ></path>
                            <path d="M10 20h4"></path>
                            <circle cx="16" cy="20" r="2"></circle>
                            <circle cx="8" cy="20" r="2"></circle>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Application Support</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Pre-Departure Checklist
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Complete checklist of 100 essential items before moving
                        to Germany. Track progress across legal, financial,
                        health, and personal preparation with timeline view and
                        smart survival guide.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a
                  class="block group"
                  href="{{ route('front.tools.career-pathway-decision') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-compass w-6 h-6 text-white"
                          >
                            <path
                              d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"
                            ></path>
                            <circle cx="12" cy="12" r="10"></circle>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Comparison Tools</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Career Pathway Decision Tool
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Find the best career path for you by comparing different
                        Ausbildung sectors, analyzing your skills and interests,
                        and getting personalized recommendations.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a
                  class="block group"
                  href="{{ route('front.tools.ausbildung-vs-university-comparison') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-git-compare w-6 h-6 text-white"
                          >
                            <circle cx="18" cy="18" r="3"></circle>
                            <circle cx="6" cy="6" r="3"></circle>
                            <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                            <path d="M11 18H8a2 2 0 0 1-2-2V9"></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Comparison Tools</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Ausbildung vs University Comparison
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Compare Ausbildung (vocational training) vs University
                        education in Germany with personalized analysis, salary
                        projections, financial breakdowns, and intelligent
                        action plans.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a
                  class="block group"
                  href="{{ route('front.tools.ausbildung-sector-comparison') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-building2 w-6 h-6 text-white"
                          >
                            <path
                              d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"
                            ></path>
                            <path
                              d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"
                            ></path>
                            <path
                              d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"
                            ></path>
                            <path d="M10 6h4"></path>
                            <path d="M10 10h4"></path>
                            <path d="M10 14h4"></path>
                            <path d="M10 18h4"></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Comparison Tools</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Ausbildung Sector Comparison
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Compare different Ausbildung sectors on salary, demand,
                        job availability, and career growth to find your perfect
                        match.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a class="block group" href="{{ route('front.tools.eligibility-checker') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-compass w-6 h-6 text-white"
                          >
                            <path
                              d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"
                            ></path>
                            <circle cx="12" cy="12" r="10"></circle>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Application Support</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Ausbildung Eligibility Checker
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Verify if your qualifications match German Ausbildung
                        requirements and discover suitable vocational paths with
                        personalized recommendations.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a class="block group" href="{{ route('front.tools.cover-letter') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-pen-tool w-6 h-6 text-white"
                          >
                            <path
                              d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z"
                            ></path>
                            <path
                              d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18"
                            ></path>
                            <path d="m2.3 2.3 7.286 7.286"></path>
                            <circle cx="11" cy="11" r="2"></circle>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Application Support</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Smart Cover Letter Generator
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Generate professional German cover letters in 30
                        seconds. Click &#x27;Apply with Help&#x27; on any job.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div></a
                ><a class="block group" href="{{ route('front.tools.roi-calculator') }}"
                  ><div
                    class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-lg hover:-translate-y-2"
                  >
                    <div class="flex flex-col h-full">
                      <div class="flex items-start justify-between mb-4">
                        <div
                          class="w-12 h-12 rounded-xl bg-orange flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-calculator w-6 h-6 text-white"
                          >
                            <rect
                              width="16"
                              height="20"
                              x="4"
                              y="2"
                              rx="2"
                            ></rect>
                            <line x1="8" x2="16" y1="6" y2="6"></line>
                            <line x1="16" x2="16" y1="14" y2="18"></line>
                            <path d="M16 10h.01"></path>
                            <path d="M12 10h.01"></path>
                            <path d="M8 10h.01"></path>
                            <path d="M12 14h.01"></path>
                            <path d="M8 14h.01"></path>
                            <path d="M12 18h.01"></path>
                            <path d="M8 18h.01"></path>
                          </svg>
                        </div>
                        <span
                          class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green text-xs font-medium"
                          >Financial Planning</span
                        >
                      </div>
                      <h3
                        class="text-lg font-semibold text-green mb-2 line-clamp-2 group-hover:text-orange transition-colors"
                      >
                        Ausbildung ROI Calculator
                      </h3>
                      <p
                        class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3 mb-4"
                      >
                        Calculate the financial benefits of German vocational
                        training compared to other education options with 5-year
                        projection.
                      </p>
                      <div
                        class="inline-flex items-center text-sm font-semibold text-orange group-hover:gap-2 transition-all"
                      >
                        Try Now<svg
                          class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </div>
                    </div></div
                ></a>
              </div>
            </div>
          </section>
          <section class="py-16 bg-cream">
            <div class="container max-w-7xl mx-auto px-6">
              <div class="mb-12">
                <h2
                  class="tracking-tight font-bold text-2xl sm:text-3xl text-green mb-3"
                >
                  Coming Soon
                </h2>
                <p class="text-green/70">
                  More powerful tools launching soon to support every step of
                  your journey
                </p>
              </div>
              <div class="mb-12">
                <h3 class="text-xl font-semibold text-green mb-6">
                  Financial Planning
                </h3>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                >
                  <div class="block cursor-not-allowed opacity-75">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-md"
                    >
                      <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-4">
                          <div
                            class="w-12 h-12 rounded-xl bg-beige flex items-center justify-center flex-shrink-0"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-trending-up w-6 h-6 text-orange"
                            >
                              <polyline
                                points="22 7 13.5 15.5 8.5 10.5 2 17"
                              ></polyline>
                              <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>
                          </div>
                          <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green/60 text-xs font-medium"
                            >Coming Soon</span
                          >
                        </div>
                        <h3
                          class="text-lg font-semibold text-green mb-2 line-clamp-2"
                        >
                          Salary Progression Calculator
                        </h3>
                        <p
                          class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3"
                        >
                          Project your earnings from Year 1 to Year 3 of
                          Ausbildung and beyond with sector-specific salary data
                          and growth rates.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="block cursor-not-allowed opacity-75">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-md"
                    >
                      <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-4">
                          <div
                            class="w-12 h-12 rounded-xl bg-beige flex items-center justify-center flex-shrink-0"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-dollar-sign w-6 h-6 text-orange"
                            >
                              <line x1="12" x2="12" y1="2" y2="22"></line>
                              <path
                                d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                              ></path>
                            </svg>
                          </div>
                          <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green/60 text-xs font-medium"
                            >Coming Soon</span
                          >
                        </div>
                        <h3
                          class="text-lg font-semibold text-green mb-2 line-clamp-2"
                        >
                          Total Cost Calculator
                        </h3>
                        <p
                          class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3"
                        >
                          Comprehensive cost breakdown including visa fees,
                          language courses, travel, setup costs, and monthly
                          expenses for your entire journey.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="block cursor-not-allowed opacity-75">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-md"
                    >
                      <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-4">
                          <div
                            class="w-12 h-12 rounded-xl bg-beige flex items-center justify-center flex-shrink-0"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-award w-6 h-6 text-orange"
                            >
                              <path
                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"
                              ></path>
                              <circle cx="12" cy="8" r="6"></circle>
                            </svg>
                          </div>
                          <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green/60 text-xs font-medium"
                            >Coming Soon</span
                          >
                        </div>
                        <h3
                          class="text-lg font-semibold text-green mb-2 line-clamp-2"
                        >
                          Scholarship Eligibility Checker
                        </h3>
                        <p
                          class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3"
                        >
                          Check eligibility for DAAD, company-sponsored, and
                          government scholarships based on your profile and
                          Ausbildung sector.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-12">
                <h3 class="text-xl font-semibold text-green mb-6">
                  Language Assessment
                </h3>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                >
                  <div class="block cursor-not-allowed opacity-75">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-md"
                    >
                      <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-4">
                          <div
                            class="w-12 h-12 rounded-xl bg-beige flex items-center justify-center flex-shrink-0"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-languages w-6 h-6 text-orange"
                            >
                              <path d="m5 8 6 6"></path>
                              <path d="m4 14 6-6 2-3"></path>
                              <path d="M2 5h12"></path>
                              <path d="M7 2h1"></path>
                              <path d="m22 22-5-10-5 10"></path>
                              <path d="M14 18h6"></path>
                            </svg>
                          </div>
                          <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green/60 text-xs font-medium"
                            >Coming Soon</span
                          >
                        </div>
                        <h3
                          class="text-lg font-semibold text-green mb-2 line-clamp-2"
                        >
                          German Level Assessment
                        </h3>
                        <p
                          class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3"
                        >
                          Quick interactive quiz to determine your current
                          German language level (A1-C2) with personalized
                          learning recommendations.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="block cursor-not-allowed opacity-75">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-md"
                    >
                      <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-4">
                          <div
                            class="w-12 h-12 rounded-xl bg-beige flex items-center justify-center flex-shrink-0"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-languages w-6 h-6 text-orange"
                            >
                              <path d="m5 8 6 6"></path>
                              <path d="m4 14 6-6 2-3"></path>
                              <path d="M2 5h12"></path>
                              <path d="M7 2h1"></path>
                              <path d="m22 22-5-10-5 10"></path>
                              <path d="M14 18h6"></path>
                            </svg>
                          </div>
                          <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green/60 text-xs font-medium"
                            >Coming Soon</span
                          >
                        </div>
                        <h3
                          class="text-lg font-semibold text-green mb-2 line-clamp-2"
                        >
                          Language Proficiency Calculator
                        </h3>
                        <p
                          class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3"
                        >
                          Interactive assessment to determine your current
                          German language level (A1-C2) with personalized
                          recommendations for Ausbildung preparation.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="block cursor-not-allowed opacity-75">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-md"
                    >
                      <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-4">
                          <div
                            class="w-12 h-12 rounded-xl bg-beige flex items-center justify-center flex-shrink-0"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-file-text w-6 h-6 text-orange"
                            >
                              <path
                                d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                              ></path>
                              <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                              <path d="M10 9H8"></path>
                              <path d="M16 13H8"></path>
                              <path d="M16 17H8"></path>
                            </svg>
                          </div>
                          <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green/60 text-xs font-medium"
                            >Coming Soon</span
                          >
                        </div>
                        <h3
                          class="text-lg font-semibold text-green mb-2 line-clamp-2"
                        >
                          German Exam Cost Comparison
                        </h3>
                        <p
                          class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3"
                        >
                          Compare costs and formats of Goethe, telc, TestDaF,
                          and ÖSD exams to find the best certification for your
                          Ausbildung needs.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-12">
                <h3 class="text-xl font-semibold text-green mb-6">
                  Application &amp; Documentation
                </h3>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                ></div>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-green mb-6">
                  Comparison Tools
                </h3>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                >
                  <div class="block cursor-not-allowed opacity-75">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-white border border-green/10 p-6 h-full transition-all hover:shadow-md"
                    >
                      <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-4">
                          <div
                            class="w-12 h-12 rounded-xl bg-beige flex items-center justify-center flex-shrink-0"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-map-pin w-6 h-6 text-orange"
                            >
                              <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"
                              ></path>
                              <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                          </div>
                          <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-beige text-green/60 text-xs font-medium"
                            >Coming Soon</span
                          >
                        </div>
                        <h3
                          class="text-lg font-semibold text-green mb-2 line-clamp-2"
                        >
                          German City Comparison
                        </h3>
                        <p
                          class="text-sm text-green/70 leading-relaxed flex-grow line-clamp-3"
                        >
                          Compare 15 German cities for Ausbildung based on
                          living costs, job market, international community, and
                          quality of life.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-8 bg-cream">
            <div class="container max-w-7xl mx-auto px-6 text-center">
              <a
                class="text-sm text-green/60 hover:text-green underline decoration-green/30 hover:decoration-green/60 transition-colors"
                href="{{ route('front.consultation') }}"
                >Need expert help with your applications? Learn about Apply For
                Me →</a
              >
            </div>
          </section>
          <section class="py-16 bg-orange">
            <div class="container max-w-4xl mx-auto px-6 text-center">
              <h2
                class="tracking-tight font-bold text-2xl sm:text-3xl text-white mb-4"
              >
                Need Personalized Guidance?
              </h2>
              <p class="text-white/90 text-lg mb-8 leading-relaxed">
                Our tools provide initial guidance. Create your free account to
                access all features and start your Ausbildung journey today.
              </p>
              <a
                class="inline-flex items-center justify-center px-8 py-4 rounded-full bg-green text-cream font-semibold transition-all hover:bg-green/90 hover:shadow-lg hover:-translate-y-1"
                href="auth7d2a.html?signup"
                >Create Free Account</a
              >
            </div>
          </section>
        </div>
@endsection
