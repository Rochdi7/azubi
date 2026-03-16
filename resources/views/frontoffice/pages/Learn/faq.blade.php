@extends('frontoffice.layouts.app')

@section('title', '50+ Ausbildung FAQ - Complete Guide for International Students 2026 | GoAusbildung')

@section('meta')
    <meta name="description" content="Comprehensive answers to all Ausbildung questions. From applications to career success - your complete guide to German vocational training. Updated for 2026." />
    <meta name="keywords" content="ausbildung faq, german vocational training, international students, ausbildung guide 2026" />
    <meta property="og:title" content="50+ Ausbildung FAQ - Complete Guide for International Students 2026" />
    <meta property="og:description" content="Comprehensive answers to all Ausbildung questions. From applications to career success - your complete guide to German vocational training. Updated for 2026." />
    <meta property="og:url" content="https://goausbildung.com/ausbildung-faq" />
    <meta property="og:site_name" content="GoAusbildung" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="50+ Ausbildung FAQ - Complete Guide for International Students 2026" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@goausbildung" />
    <meta name="twitter:creator" content="@goausbildung" />
    <meta name="twitter:title" content="50+ Ausbildung FAQ - Complete Guide for International Students 2026" />
    <meta name="twitter:description" content="Comprehensive answers to all Ausbildung questions. From applications to career success - your complete guide to German vocational training. Updated for 2026." />
    <meta name="twitter:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/ausbildung-faq') }}" />
@endsection

@section('content')
<div class="flex flex-col min-h-screen">
          <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44"
          >
            <img
              alt="Black Forest in autumn - scenic German forest landscape"
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
              src="{{ asset('assets/_next/black-forest-hero-autumnd6b2.jpeg') }}"
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
                    aria-label="FAQ"
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
                      class="lucide lucide-circle-help h-4 w-4 mr-2"
                      aria-hidden="true"
                    >
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                      <path d="M12 17h.01"></path></svg
                    >FAQ
                  </div>
                </div>
                <h1
                  class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200"
                >
                  Frequently Asked Questions About Ausbildung
                </h1>
                <p
                  class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300"
                >
                  Get answers to the most common questions about German
                  vocational training, from application requirements to daily
                  life as a trainee.
                </p>
                <nav
                  class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                  aria-label="Primary navigation"
                >
                  <a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                    aria-label="Browse Questions"
                    href="#faq-categories"
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
                        class="lucide lucide-search w-5 h-5 mr-2"
                      >
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path></svg></span
                    ><span>Browse Questions</span></a
                  ><a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                    aria-label="Ask a Question"
                    href="{{ route('front.contact') }}"
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
                        class="lucide lucide-message-square w-5 h-5 mr-2"
                      >
                        <path
                          d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                        ></path></svg></span
                    ><span>Ask a Question</span></a
                  >
                </nav>
              </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
              <p
                class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full"
              >
                Black Forest, Baden-Württemberg
              </p>
            </div>
          </section>
          <section
            id="faq-categories"
            class="py-8 bg-background border-b border-primary/10"
          >
            <div class="container px-4 md:px-6 max-w-4xl mx-auto">
              <div class="flex justify-center mb-6">
                <div
                  class="inline-flex items-center rounded-full border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground px-4 py-2 text-sm bg-card border-primary/10"
                >
                  <span class="flex items-center gap-2"
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
                      class="lucide lucide-circle-help w-4 h-4 text-primary"
                    >
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                      <path d="M12 17h.01"></path></svg
                    ><span class="font-medium"
                      >34<!-- -->+ Questions Answered</span
                    ></span
                  >
                </div>
              </div>
              <div class="w-full">
                <div class="relative max-w-2xl mx-auto mb-6 px-4 sm:px-0">
                  <div class="relative flex items-center">
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
                      class="lucide lucide-search absolute left-3 sm:left-4 h-4 sm:h-5 w-4 sm:w-5 text-primary/60 z-10"
                    >
                      <circle cx="11" cy="11" r="8"></circle>
                      <path d="m21 21-4.3-4.3"></path></svg
                    ><input
                      id="faq-search"
                      type="text"
                      class="flex border px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 w-full pl-10 sm:pl-12 pr-14 sm:pr-20 h-12 sm:h-14 text-sm sm:text-base rounded-xl sm:rounded-2xl transition-all duration-300 border-primary/20 bg-card focus:border-primary focus:ring-2 focus:ring-primary/20 placeholder:text-muted-foreground placeholder:text-xs sm:placeholder:text-sm"
                      placeholder="Search questions, answers, or topics..."
                      value=""
                    /><button
                      id="faq-filter-btn"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:text-foreground text-sm absolute right-2 h-9 sm:h-10 px-2 sm:px-3 rounded-lg sm:rounded-xl transition-all duration-300 hover:bg-primary/10"
                      type="button"
                      aria-haspopup="menu"
                      aria-expanded="false"
                      data-state="closed"
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
                        class="lucide lucide-sliders-horizontal h-4 w-4"
                      >
                        <line x1="21" x2="14" y1="4" y2="4"></line>
                        <line x1="10" x2="3" y1="4" y2="4"></line>
                        <line x1="21" x2="12" y1="12" y2="12"></line>
                        <line x1="8" x2="3" y1="12" y2="12"></line>
                        <line x1="21" x2="16" y1="20" y2="20"></line>
                        <line x1="12" x2="3" y1="20" y2="20"></line>
                        <line x1="14" x2="14" y1="2" y2="6"></line>
                        <line x1="8" x2="8" y1="10" y2="14"></line>
                        <line x1="16" x2="16" y1="18" y2="22"></line>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-12 bg-background">
            <div class="container mx-auto px-4 max-w-4xl">
              <div class="mb-8">
                <p id="faq-count" class="text-muted-foreground">
                  34 frequently asked questions
                </p>
              </div>
              <div id="faq-items" class="space-y-4" data-faq-container>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="daily-life"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What cultural differences should I prepare for in German
                      workplace?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            German workplace culture essentials:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Communication Style:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Directness</strong>: Germans value honest,
                            straightforward communication
                          </div>
                          <div class="mb-1">
                            • <strong>Criticism</strong>: Given directly but not
                            personally meant
                          </div>
                          <div class="mb-1">
                            • <strong>Small talk</strong>: Less common, focus on
                            work-related topics
                          </div>
                          <div class="mb-1">
                            • <strong>Feedback</strong>: Regular, specific, and
                            improvement-focused
                          </div>
                          <div class="mb-1">
                            • <strong>Language</strong>: Formal &quot;Sie&quot;
                            until invited to use &quot;du&quot;
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Time and Punctuality:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Punctuality</strong>: Arriving exactly on
                            time is expected
                          </div>
                          <div class="mb-1">
                            • <strong>Early arrival</strong>: 5-10 minutes early
                            shows respect
                          </div>
                          <div class="mb-1">
                            • <strong>Meeting culture</strong>: Start and end
                            times strictly observed
                          </div>
                          <div class="mb-1">
                            • <strong>Lunch breaks</strong>: Fixed times, rarely
                            extended
                          </div>
                          <div class="mb-1">
                            • <strong>Overtime</strong>: Documented and
                            compensated
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Hierarchy and Structure:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Clear roles</strong>: Well-defined
                            responsibilities and reporting
                          </div>
                          <div class="mb-1">
                            • <strong>Decision making</strong>: Often requires
                            multiple approvals
                          </div>
                          <div class="mb-1">
                            • <strong>Respect for authority</strong>: Address
                            supervisors formally
                          </div>
                          <div class="mb-1">
                            • <strong>Chain of command</strong>: Follow proper
                            channels
                          </div>
                          <div class="mb-1">
                            • <strong>Experience valued</strong>: Seniority and
                            expertise respected
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Work-Life Balance:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Clear boundaries</strong>: Work and
                            personal life kept separate
                          </div>
                          <div class="mb-1">
                            • <strong>After-hours contact</strong>: Limited
                            unless emergency
                          </div>
                          <div class="mb-1">
                            • <strong>Vacation time</strong>: Fully used and
                            respected
                          </div>
                          <div class="mb-1">
                            • <strong>Sick leave</strong>: No guilt about taking
                            necessary time off
                          </div>
                          <div class="mb-1">
                            • <strong>Weekend work</strong>: Generally avoided
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Common Mistakes to Avoid:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Late arrival</strong>: Even 5 minutes late
                            is noticed
                          </div>
                          <div class="mb-1">
                            • <strong>Oversharing</strong>: Keep personal
                            information private
                          </div>
                          <div class="mb-1">
                            • <strong>Interrupting</strong>: Wait for others to
                            finish speaking
                          </div>
                          <div class="mb-1">
                            • <strong>Informal dress</strong>: Always err on the
                            side of formal
                          </div>
                          <div class="mb-1">
                            • <strong>Skipping procedures</strong>: Follow
                            established processes
                          </div>
                          <br />
                          <div class="mb-1">
                            Understanding and adapting to German workplace
                            culture significantly improves success chances.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="basics"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What is Ausbildung and how does Germany&#x27;s dual
                      education system work?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Ausbildung is Germany&#x27;s dual education system
                            combining:
                          </div>
                          <div class="mb-1">
                            • 60-70% practical training at companies
                          </div>
                          <div class="mb-1">
                            • 30-40% classroom learning at vocational schools
                          </div>
                          <div class="mb-1">• 2-3.5 year duration</div>
                          <div class="mb-1">
                            • Nationally recognized professional qualifications
                          </div>
                          <div class="mb-1">
                            • Monthly training salary (€900-1,300)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="career"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What are the career advancement opportunities after
                      completing Ausbildung?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Career progression after Ausbildung completion:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Immediate Employment:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Success rate</strong>: 85% get job offers
                            from training company
                          </div>
                          <div class="mb-1">
                            • <strong>Starting salary</strong>:
                            €2,500-3,500/month
                          </div>
                          <div class="mb-1">
                            • <strong>Benefits</strong>: Full health insurance,
                            vacation, pension
                          </div>
                          <div class="mb-1">
                            • <strong>Job security</strong>: High demand for
                            skilled workers
                          </div>
                          <div class="mb-1">
                            • <strong>Career progression</strong>: Team leader,
                            department head paths
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Further Professional Education:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Meister qualification</strong>: Master
                            craftsman level, 1-2 years
                          </div>
                          <div class="mb-1">
                            • <strong>Techniker</strong>: Technical specialist,
                            2 years part-time
                          </div>
                          <div class="mb-1">
                            • <strong>Fachwirt</strong>: Business specialist
                            qualification
                          </div>
                          <div class="mb-1">
                            • <strong>Betriebswirt</strong>: Advanced business
                            management
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>University Pathway:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Direct access</strong>: Some programs
                            provide university entrance
                          </div>
                          <div class="mb-1">
                            • <strong>Bachelor programs</strong>: Designed for
                            Ausbildung graduates
                          </div>
                          <div class="mb-1">
                            • <strong>Dual studies</strong>: Combine work with
                            degree
                          </div>
                          <div class="mb-1">
                            • <strong>Recognition</strong>: Ausbildung counts as
                            practical experience
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Entrepreneurship:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Own business</strong>: Many sectors allow
                            independent practice
                          </div>
                          <div class="mb-1">
                            • <strong>Franchise opportunities</strong>:
                            Established business models
                          </div>
                          <div class="mb-1">
                            • <strong>Consulting</strong>: Industry expertise
                            valuable
                          </div>
                          <div class="mb-1">
                            • <strong>Innovation</strong>: Technical skills
                            create opportunities
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>International Opportunities:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>EU recognition</strong>: Qualifications
                            valid across EU
                          </div>
                          <div class="mb-1">
                            • <strong>Global companies</strong>: German training
                            highly valued
                          </div>
                          <div class="mb-1">
                            • <strong>Transfer programs</strong>: Within
                            multinational corporations
                          </div>
                          <div class="mb-1">
                            • <strong>Teaching</strong>: Train others in your
                            field
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Salary Progression:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Years 1-3</strong>: €2,500-3,500
                          </div>
                          <div class="mb-1">
                            • <strong>Years 4-7</strong>: €3,500-4,500
                          </div>
                          <div class="mb-1">
                            • <strong>With specialization</strong>:
                            €4,500-6,000+
                          </div>
                          <div class="mb-1">
                            • <strong>Management roles</strong>: €5,000-8,000+
                          </div>
                          <div class="mb-1">
                            • <strong>Self-employed</strong>: Variable, often
                            higher
                          </div>
                          <br />
                          <div class="mb-1">
                            The German system values continuous learning and
                            provides clear advancement paths.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="basics"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Are there part-time or flexible Ausbildung options
                      available?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Flexible Ausbildung options in Germany:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Part-Time Ausbildung (Teilzeit):</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Working hours</strong>: 25-30 hours per
                            week (minimum 25)
                          </div>
                          <div class="mb-1">
                            • <strong>Duration</strong>: Extended by 6-12 months
                            compared to full-time
                          </div>
                          <div class="mb-1">
                            • <strong>Salary</strong>: Proportionally reduced
                            but still competitive
                          </div>
                          <div class="mb-1">
                            • <strong>Eligibility</strong>: Parents, caregivers,
                            those with health limitations
                          </div>
                          <div class="mb-1">
                            • <strong>Availability</strong>: Not all programs
                            offer this option
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Evening/Weekend Programs:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Schedule</strong>: Classes in evenings and
                            weekends
                          </div>
                          <div class="mb-1">
                            • <strong>Target group</strong>: Working
                            professionals, career changers
                          </div>
                          <div class="mb-1">
                            • <strong>Duration</strong>: Usually extended by 1-2
                            years
                          </div>
                          <div class="mb-1">
                            • <strong>Sectors</strong>: More common in business,
                            IT, healthcare
                          </div>
                          <div class="mb-1">
                            • <strong>Format</strong>: Blended learning with
                            online components
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Who Can Apply for Flexible Options:</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Parents with Children:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Childcare responsibilities</strong>: Under
                            18 years old
                          </div>
                          <div class="mb-1">
                            • <strong>Reduced hours</strong>: 25-35 hours per
                            week typical
                          </div>
                          <div class="mb-1">
                            • <strong>Childcare support</strong>: Some employers
                            provide assistance
                          </div>
                          <div class="mb-1">
                            • <strong>Maternity protection</strong>: Full legal
                            protection applies
                          </div>
                          <div class="mb-1">
                            • <strong>Family benefits</strong>: Kindergeld and
                            other support
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Career Changers (Over 25):</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Work experience</strong>: Can reduce
                            training duration
                          </div>
                          <div class="mb-1">
                            • <strong>Life circumstances</strong>: Family,
                            financial obligations
                          </div>
                          <div class="mb-1">
                            • <strong>Recognition of prior learning</strong>:
                            Previous experience credited
                          </div>
                          <div class="mb-1">
                            • <strong>Accelerated paths</strong>: Some programs
                            offer shortened routes
                          </div>
                          <div class="mb-1">
                            • <strong>Financial support</strong>: Special
                            funding available
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Sectors Offering Flexibility:</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Most Flexible:</strong>
                          </div>
                          <div class="mb-1">• IT and software development</div>
                          <div class="mb-1">• Business administration</div>
                          <div class="mb-1">• Digital marketing</div>
                          <div class="mb-1">• Accounting and finance</div>
                          <div class="mb-1">• Customer service</div>
                          <br />
                          <div class="mb-1">
                            <strong>Moderately Flexible:</strong>
                          </div>
                          <div class="mb-1">• Healthcare (some programs)</div>
                          <div class="mb-1">• Education and training</div>
                          <div class="mb-1">• Social services</div>
                          <div class="mb-1">• Retail management</div>
                          <div class="mb-1">• Logistics</div>
                          <br />
                          <div class="mb-1">
                            Flexible options are expanding - don&#x27;t let
                            circumstances prevent you from pursuing Ausbildung.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="finances"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      How much money do I need to save before starting
                      Ausbildung?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">Required funds for Ausbildung:</div>
                          <div class="mb-1">
                            • Blocked account: €11,904 (visa requirement)
                          </div>
                          <div class="mb-1">
                            • Initial costs: €2,000-4,000 (deposit, setup)
                          </div>
                          <div class="mb-1">• Monthly living: €780-1,350</div>
                          <div class="mb-1">
                            • Training stipend: €900-1,300/month (covers most
                            expenses)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="visa"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What happens if my Ausbildung visa gets rejected? Can I
                      appeal?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">Visa rejection options:</div>
                          <div class="mb-1">
                            • Until June 2025: 1-month appeal period (free)
                          </div>
                          <div class="mb-1">
                            • From July 2025: No appeals allowed, must reapply
                          </div>
                          <div class="mb-1">
                            • Alternative: Court lawsuit (€500-2,000 cost)
                          </div>
                          <div class="mb-1">
                            • Best strategy: Submit complete application first
                            time
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="language"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What German language level do I need for different
                      Ausbildung sectors?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            German language requirements vary by sector:
                          </div>
                          <div class="mb-1">
                            • Healthcare/Nursing: B2 level required
                          </div>
                          <div class="mb-1">
                            • Technical fields (IT, Engineering): B1 level
                            sufficient
                          </div>
                          <div class="mb-1">
                            • Customer service roles: B2 level preferred
                          </div>
                          <div class="mb-1">
                            • Manufacturing/Production: A2-B1 level acceptable
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="application"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What is the complete step-by-step application process for
                      Ausbildung?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            1. Choose your field and research companies
                          </div>
                          <div class="mb-1">
                            2. Prepare documents (CV, certificates, motivation
                            letter)
                          </div>
                          <div class="mb-1">
                            3. Apply directly to companies or through online
                            portals
                          </div>
                          <div class="mb-1">
                            4. Complete application interviews/assessments
                          </div>
                          <div class="mb-1">5. Sign training contract</div>
                          <div class="mb-1">6. Apply for visa (if needed)</div>
                          <div class="mb-1">
                            Timeline: Start applications 6-12 months before
                            desired start date.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="visa"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Do I need a blocked account for Ausbildung visa in 2025?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            For <strong>Ausbildung visa in 2025</strong>, you do
                            *not* need a blocked account if you already have a
                            signed training contract with a salary of at least
                            <strong>€990 gross per month</strong>. Your
                            livelihood is considered secure with this income.
                          </div>
                          <br />
                          <div class="mb-1">
                            However, if you are applying for a
                            <strong
                              >visa to search for training positions</strong
                            >
                            or your contract salary is below €990/month, you
                            must demonstrate financial resources by opening a
                            blocked account with
                            <strong>€11,904 for the year 2025</strong>
                            (approximately €934 per month).
                          </div>
                          <br />
                          <div class="mb-1"><strong>Key Points:</strong></div>
                          <div class="mb-1">
                            - Blocked account amount increased from €11,208 in
                            2024 to €11,904 in 2025
                          </div>
                          <div class="mb-1">
                            - Monthly withdrawal limited to 1/12th of total
                            amount
                          </div>
                          <div class="mb-1">
                            - Must be opened at recognized German banks or
                            services like Deutsche Bank, Fintiba, or X-patrio
                          </div>
                          <div class="mb-1">
                            - Required for visa application if no training
                            contract or low salary
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="requirements"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What educational qualifications do I need for Ausbildung
                      from my home country?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">International students need:</div>
                          <div class="mb-1">
                            • School leaving certificate equivalent to German
                            Realschulabschluss (12 years education)
                          </div>
                          <div class="mb-1">
                            • German language skills (B1-B2 level depending on
                            sector)
                          </div>
                          <div class="mb-1">
                            • EU passport or residence permit/work visa
                          </div>
                          <div class="mb-1">
                            • Age typically 16-25 years (no upper limit)
                          </div>
                          <div class="mb-1">• Clean criminal record</div>
                          <div class="mb-1">
                            • Grade average of 60% or above
                          </div>
                          <div class="mb-1">
                            • Strong performance in field-related subjects
                          </div>
                          <br />
                          <div class="mb-1">Recognition process:</div>
                          <div class="mb-1">
                            1. Submit documents to anabin database for
                            evaluation
                          </div>
                          <div class="mb-1">
                            2. Get certificates translated by sworn translator
                          </div>
                          <div class="mb-1">
                            3. Apostille/attestation required for non-EU
                            certificates
                          </div>
                          <div class="mb-1">4. Processing time: 4-8 weeks</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="daily-life"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What housing options are available during Ausbildung?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Housing options for Ausbildung trainees:
                          </div>
                          <br />
                          <div class="mb-1">Company-Provided Housing:</div>
                          <div class="mb-1">
                            • Available from 40% of companies
                          </div>
                          <div class="mb-1">
                            • Cost: €200-400/month (subsidized rates)
                          </div>
                          <div class="mb-1">
                            • Type: Shared apartments or dedicated trainee
                            housing
                          </div>
                          <div class="mb-1">
                            • Benefits: Close to workplace, furnished, utilities
                            included
                          </div>
                          <div class="mb-1">
                            • Application: Through HR department during
                            onboarding
                          </div>
                          <br />
                          <div class="mb-1">
                            Shared Apartments (WG - Wohngemeinschaft):
                          </div>
                          <div class="mb-1">
                            • Cost: €400-700/month including utilities
                          </div>
                          <div class="mb-1">
                            • Search platforms: WG-gesucht.de, studenten-wg.de
                          </div>
                          <div class="mb-1">
                            • Room types: Single rooms in 3-4 bedroom apartments
                          </div>
                          <div class="mb-1">
                            • Benefits: Cultural integration, cost-effective,
                            flexible
                          </div>
                          <div class="mb-1">
                            • Requirements: Deposit (2-3 months rent), German
                            language helpful
                          </div>
                          <br />
                          <div class="mb-1">Student Residences:</div>
                          <div class="mb-1">• Cost: €300-500/month</div>
                          <div class="mb-1">
                            • Eligibility: Some accept Ausbildung trainees
                          </div>
                          <div class="mb-1">
                            • Application: Through Studentenwerk or directly
                          </div>
                          <div class="mb-1">
                            • Benefits: Furnished, international community,
                            support services
                          </div>
                          <div class="mb-1">
                            • Waitlists: Apply 6-12 months in advance
                          </div>
                          <br />
                          <div class="mb-1">Private Rental Apartments:</div>
                          <div class="mb-1">
                            • Cost: €500-800+/month (varies by city)
                          </div>
                          <div class="mb-1">
                            • Requirements: Proof of income, deposit, liability
                            insurance
                          </div>
                          <div class="mb-1">
                            • Search: Immobilienscout24.de, Ebay-Kleinanzeigen
                          </div>
                          <div class="mb-1">
                            • Challenges: High competition, credit checks,
                            German language
                          </div>
                          <div class="mb-1">
                            • Benefits: Privacy, long-term stability
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="daily-life"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      How does health insurance work during Ausbildung?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">Ausbildung health insurance:</div>
                          <div class="mb-1">• Mandatory for all residents</div>
                          <div class="mb-1">
                            • Public insurance: €80-120/month (employer pays
                            half)
                          </div>
                          <div class="mb-1">
                            • Covers: doctor visits, hospital, medications,
                            dental
                          </div>
                          <div class="mb-1">
                            • Register immediately upon arrival
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="application"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What types of aptitude tests and assessments can I expect?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Aptitude tests and assessments for Ausbildung:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Mathematical and Logical Reasoning:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Duration</strong>: 30-60 minutes
                          </div>
                          <div class="mb-1">
                            • <strong>Content</strong>: Basic arithmetic,
                            percentages, fractions, geometry
                          </div>
                          <div class="mb-1">
                            • <strong>Level</strong>: 9th-10th grade mathematics
                          </div>
                          <div class="mb-1">
                            • <strong>Format</strong>: Multiple choice or
                            written calculations
                          </div>
                          <div class="mb-1">
                            • <strong>Preparation</strong>: Practice basic math,
                            word problems, logical sequences
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>German Language Assessment:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Components</strong>: Reading, writing,
                            listening, speaking
                          </div>
                          <div class="mb-1">
                            • <strong>Level tested</strong>: A2-B2 depending on
                            program
                          </div>
                          <div class="mb-1">
                            • <strong>Duration</strong>: 45-90 minutes
                          </div>
                          <div class="mb-1">
                            • <strong>Formats</strong>: Essay writing, text
                            comprehension, grammar exercises
                          </div>
                          <div class="mb-1">
                            • <strong>Topics</strong>: Work-related vocabulary,
                            formal letter writing
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Technical Skills Evaluation:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Sector-specific</strong>: Based on chosen
                            Ausbildung field
                          </div>
                          <div class="mb-1">
                            • <strong>IT programs</strong>: Basic programming,
                            computer knowledge
                          </div>
                          <div class="mb-1">
                            • <strong>Engineering</strong>: Technical drawing,
                            physics problems
                          </div>
                          <div class="mb-1">
                            • <strong>Healthcare</strong>: Biology, anatomy
                            basics
                          </div>
                          <div class="mb-1">
                            • <strong>Business</strong>: Accounting principles,
                            Excel skills
                          </div>
                          <div class="mb-1">
                            • <strong>Duration</strong>: 1-2 hours
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Common Test Topics by Sector:</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>IT/Technology:</strong>
                          </div>
                          <div class="mb-1">• Basic programming concepts</div>
                          <div class="mb-1">• Computer hardware knowledge</div>
                          <div class="mb-1">• Network fundamentals</div>
                          <div class="mb-1">• Database basics</div>
                          <div class="mb-1">• Problem-solving algorithms</div>
                          <br />
                          <div class="mb-1">
                            <strong>Healthcare/Nursing:</strong>
                          </div>
                          <div class="mb-1">• Human anatomy basics</div>
                          <div class="mb-1">• Medical terminology</div>
                          <div class="mb-1">• Hygiene principles</div>
                          <div class="mb-1">
                            • Patient communication scenarios
                          </div>
                          <div class="mb-1">
                            • Emergency response procedures
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Preparation Strategies:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Practice tests</strong>: Use online
                            resources and preparation books
                          </div>
                          <div class="mb-1">
                            • <strong>Language improvement</strong>: Focus on
                            technical vocabulary
                          </div>
                          <div class="mb-1">
                            • <strong>Time management</strong>: Practice working
                            under time pressure
                          </div>
                          <div class="mb-1">
                            • <strong>Mock interviews</strong>: Role-play with
                            friends or counselors
                          </div>
                          <div class="mb-1">
                            • <strong>Research company</strong>: Understand
                            their specific requirements
                          </div>
                          <br />
                          <div class="mb-1">
                            Success requires preparation - start practicing
                            tests 2-3 months before applications.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="language"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      How long does it take to learn German to B1 level?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Ausbildung trainees earn between €515-€1,504 per
                            month depending on:
                          </div>
                          <div class="mb-1">
                            • Industry sector (healthcare, IT, manufacturing)
                          </div>
                          <div class="mb-1">
                            • Year of training (increases annually)
                          </div>
                          <div class="mb-1">• Company size and location</div>
                          <div class="mb-1">• Regional wage standards</div>
                          <br />
                          <div class="mb-1">
                            This covers basic living expenses in most German
                            cities.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="career"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Which Ausbildung sectors have the highest demand for
                      international students in 2025?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            High-demand Ausbildung sectors in 2025:
                          </div>
                          <div class="mb-1">
                            • Healthcare &amp; Nursing (40,000+ vacancies)
                          </div>
                          <div class="mb-1">
                            • IT &amp; Software Development (25,000+ positions)
                          </div>
                          <div class="mb-1">
                            • Engineering &amp; Manufacturing (18,000+ openings)
                          </div>
                          <div class="mb-1">
                            • Hospitality &amp; Tourism (15,000+ vacancies)
                          </div>
                          <div class="mb-1">
                            • Business &amp; Finance (12,000+ positions)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="visa"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Can my spouse/family join me during Ausbildung training?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Family reunification during Ausbildung:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Eligibility Requirements:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Your status</strong>: Valid Ausbildung
                            residence permit
                          </div>
                          <div class="mb-1">
                            • <strong>Minimum income</strong>: €1,200/month for
                            two people
                          </div>
                          <div class="mb-1">
                            • <strong>Additional dependents</strong>: €300 per
                            additional person
                          </div>
                          <div class="mb-1">
                            • <strong>Accommodation</strong>: Adequate living
                            space for family
                          </div>
                          <div class="mb-1">
                            • <strong>Duration</strong>: At least 1 year
                            remaining on permit
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>For Your Spouse:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Language requirement</strong>: A1 German
                            level (usually required)
                          </div>
                          <div class="mb-1">
                            • <strong>Exemptions</strong>: EU Blue Card holders,
                            some skilled workers
                          </div>
                          <div class="mb-1">
                            • <strong>Application</strong>: Submit at German
                            consulate in home country
                          </div>
                          <div class="mb-1">
                            • <strong>Processing time</strong>: 6-12 weeks
                          </div>
                          <div class="mb-1">
                            • <strong>Immediate work rights</strong>: Upon
                            arrival in Germany
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>For Children (Under 18):</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Language requirement</strong>: Usually
                            waived for minors
                          </div>
                          <div class="mb-1">
                            • <strong>School enrollment</strong>: Mandatory
                            school attendance
                          </div>
                          <div class="mb-1">
                            • <strong>Age factor</strong>: Better chances if
                            under 16
                          </div>
                          <div class="mb-1">
                            • <strong>Best interest principle</strong>: Child
                            welfare considerations
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Financial Requirements (2025):</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Two people</strong>: Minimum €1,200/month
                            net income
                          </div>
                          <div class="mb-1">
                            • <strong>Three people</strong>: Minimum
                            €1,500/month net income
                          </div>
                          <div class="mb-1">
                            • <strong>Four people</strong>: Minimum €1,800/month
                            net income
                          </div>
                          <div class="mb-1">
                            • <strong>Proof required</strong>: Employment
                            contract, payslips, bank statements
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Timeline Process:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>Month 1-3</strong>: You start Ausbildung,
                            receive residence permit
                          </div>
                          <div class="mb-1">
                            • <strong>Month 4-6</strong>: Apply for spouse visa
                            from home country
                          </div>
                          <div class="mb-1">
                            • <strong>Month 7-9</strong>: Processing and
                            decision
                          </div>
                          <div class="mb-1">
                            • <strong>Month 10</strong>: Spouse arrival and
                            registration
                          </div>
                          <br />
                          <div class="mb-1">
                            Many Ausbildung trainees successfully bring their
                            families to Germany.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="requirements"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Do I need prior work experience to apply for Ausbildung?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Work experience requirements for Ausbildung:
                          </div>
                          <br />
                          <div class="mb-1"><strong>General Rule:</strong></div>
                          <div class="mb-1">
                            • <strong>No experience required</strong>:
                            Ausbildung is entry-level training
                          </div>
                          <div class="mb-1">
                            • <strong>Designed for beginners</strong>: Fresh
                            graduates are the target group
                          </div>
                          <div class="mb-1">
                            • <strong>Learning from scratch</strong>: Companies
                            expect to train you
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>When Experience Helps:</strong>
                          </div>
                          <div class="mb-1">
                            • Internships in related fields
                          </div>
                          <div class="mb-1">
                            • Part-time work demonstrating soft skills
                          </div>
                          <div class="mb-1">
                            • Volunteer work showing commitment
                          </div>
                          <div class="mb-1">
                            • Home country experience in the sector
                          </div>
                          <div class="mb-1">
                            • Technical projects or portfolios (IT)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>How to Showcase Limited Experience:</strong>
                          </div>
                          <div class="mb-1">
                            • Academic projects and achievements
                          </div>
                          <div class="mb-1">• Extracurricular activities</div>
                          <div class="mb-1">
                            • Leadership roles in school/college
                          </div>
                          <div class="mb-1">
                            • Personal projects and hobbies
                          </div>
                          <div class="mb-1">
                            • Online courses and certifications
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Experience Advantages:</strong>
                          </div>
                          <div class="mb-1">
                            • Higher starting stipend possible
                          </div>
                          <div class="mb-1">• Better company selection</div>
                          <div class="mb-1">• Potential training reduction</div>
                          <div class="mb-1">• Faster workplace integration</div>
                          <div class="mb-1">• Stronger application profile</div>
                          <br />
                          <div class="mb-1">
                            Remember: Enthusiasm and willingness to learn often
                            outweigh experience for Ausbildung positions.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="finances"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What is the minimum wage for Ausbildung trainees in 2025?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            The
                            <strong
                              >German federal government announced a minimum
                              wage increase to €12.82 per hour</strong
                            >
                            starting January 2025, up from €12 in 2024. This
                            affects Ausbildung salaries across all sectors.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>2025 Ausbildung Salary Ranges:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>1st Year:</strong> €800-1,200/month
                          </div>
                          <div class="mb-1">
                            - <strong>2nd Year:</strong> €900-1,350/month
                          </div>
                          <div class="mb-1">
                            - <strong>3rd Year:</strong> €1,000-1,500/month
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Industry-Specific Examples:</strong>
                          </div>
                          <div class="mb-1">
                            -
                            <strong>IT Specialists:</strong> €1,100-1,400/month
                            during training
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Healthcare/Nursing:</strong>
                            €1,200-1,500/month in later years
                          </div>
                          <div class="mb-1">
                            - <strong>Banking:</strong> €1,000-1,300/month
                          </div>
                          <div class="mb-1">
                            - <strong>Engineering:</strong> €950-1,250/month
                          </div>
                          <div class="mb-1">
                            - <strong>Hospitality:</strong> €800-1,000/month
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >After Completion (2025 projections):</strong
                            >
                          </div>
                          <div class="mb-1">- IT: €36,000-50,000 annually</div>
                          <div class="mb-1">
                            - Healthcare: €30,000-40,000 annually
                          </div>
                          <div class="mb-1">
                            - Engineering: €32,000-45,000 annually
                          </div>
                          <br />
                          <div class="mb-1">
                            The minimum wage increase ensures apprentices
                            receive fair compensation while learning valuable
                            skills for their careers.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="requirements"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Is there an age limit for Ausbildung visa applications?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Yes, there is an
                            <strong>age limit of 35 years</strong> for
                            Ausbildung visa applications in Germany, but this
                            applies specifically to visas for
                            <em>seeking</em> training positions.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Age Requirements Breakdown:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Under 35:</strong> Can apply for visa to
                            search for Ausbildung positions
                          </div>
                          <div class="mb-1">
                            - <strong>Any Age:</strong> Can apply for Ausbildung
                            visa if you already have a signed training contract
                          </div>
                          <div class="mb-1">
                            - <strong>Optimal Age:</strong> 17-25 years old for
                            best acceptance rates
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Important Considerations:</strong>
                          </div>
                          <div class="mb-1">
                            - Some companies prefer younger candidates (18-25)
                            for 3-year programs
                          </div>
                          <div class="mb-1">
                            - <strong>No upper age limit</strong> exists for the
                            Ausbildung program itself once you have a contract
                          </div>
                          <div class="mb-1">
                            - Career changers and older applicants are welcome
                            in high-demand sectors like
                            <strong>healthcare</strong> and <strong>IT</strong>
                          </div>
                          <div class="mb-1">
                            - Age flexibility increases in sectors with
                            <strong>severe skill shortages</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Tips for Older Applicants:</strong>
                          </div>
                          <div class="mb-1">
                            - Highlight relevant work experience and maturity
                          </div>
                          <div class="mb-1">
                            - Target sectors with high demand (nursing, IT,
                            engineering)
                          </div>
                          <div class="mb-1">
                            - Consider shorter programs (2-2.5 years)
                          </div>
                          <div class="mb-1">
                            - Emphasize language skills and cultural
                            adaptability
                          </div>
                          <div class="mb-1">
                            - Apply directly to companies rather than through
                            general programs
                          </div>
                          <br />
                          <div class="mb-1">
                            The age limit ensures visa resources are allocated
                            effectively while still allowing experienced
                            professionals to pursue vocational training.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="basics"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      How long do different Ausbildung programs take to
                      complete?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">Ausbildung program durations:</div>
                          <div class="mb-1">
                            • 2 years: Sales Assistant, Machine Operator
                          </div>
                          <div class="mb-1">
                            • 3 years: IT Specialist, Nurse, Bank Clerk (most
                            common)
                          </div>
                          <div class="mb-1">
                            • 3.5 years: Electronics Technician, Mechatronics
                          </div>
                          <div class="mb-1">
                            Fast-track possible with prior qualifications.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="visa"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      When can I apply for permanent residency after completing
                      Ausbildung?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            You can apply for
                            <strong
                              >permanent residency
                              (Niederlassungserlaubnis)</strong
                            >
                            after completing your Ausbildung and working for
                            <strong>2 years as a skilled worker</strong> in
                            Germany.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Timeline Breakdown:</strong>
                          </div>
                          <div class="mb-1">
                            1. <strong>Ausbildung Period:</strong> 2-3.5 years
                            (counts toward residency requirement)
                          </div>
                          <div class="mb-1">
                            2. <strong>Work Period:</strong> Minimum 2 years
                            full-time employment
                          </div>
                          <div class="mb-1">
                            3. <strong>Total Time:</strong> Approximately 4-5.5
                            years from Ausbildung start
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Requirements for Permanent Residency:</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Continuous residence</strong> in Germany
                            for at least 5 years total
                          </div>
                          <div class="mb-1">
                            - <strong>Stable employment</strong> as a qualified
                            worker for 2+ years
                          </div>
                          <div class="mb-1">
                            - <strong>German language proficiency</strong> at B1
                            level (B2 preferred)
                          </div>
                          <div class="mb-1">
                            - <strong>Financial stability</strong> - prove you
                            can support yourself
                          </div>
                          <div class="mb-1">
                            - <strong>Health insurance</strong> coverage
                            throughout the period
                          </div>
                          <div class="mb-1">
                            - <strong>Integration knowledge</strong> of German
                            legal and social systems
                          </div>
                          <div class="mb-1">
                            - <strong>No criminal record</strong> and good
                            conduct
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Alternative Faster Path:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>German citizenship</strong> possible after
                            6-8 years total residence
                          </div>
                          <div class="mb-1">
                            - <strong>EU Blue Card</strong> available for
                            university graduates with higher salaries
                          </div>
                          <div class="mb-1">
                            - <strong>Family reunification</strong> rights
                            improve with permanent residency
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Benefits of Permanent Residency:</strong>
                          </div>
                          <div class="mb-1">
                            - Unlimited work rights in any field
                          </div>
                          <div class="mb-1">- Access to social benefits</div>
                          <div class="mb-1">- Freedom to travel within EU</div>
                          <div class="mb-1">
                            - Pathway to German citizenship
                          </div>
                          <div class="mb-1">
                            - Family members can join with easier requirements
                          </div>
                          <br />
                          <div class="mb-1">
                            Over
                            <strong>65% of Ausbildung graduates</strong> receive
                            permanent job offers, making the transition to
                            permanent residency straightforward.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="basics"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What&#x27;s the difference between Ausbildung and Studium
                      (university) in Germany?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Ausbildung vs University comparison:
                          </div>
                          <br />
                          <div class="mb-1">Ausbildung:</div>
                          <div class="mb-1">• Practical, hands-on training</div>
                          <div class="mb-1">
                            • Paid monthly salary (€900-1,300) during training
                          </div>
                          <div class="mb-1">• 2-3.5 years duration</div>
                          <div class="mb-1">• Direct job market entry</div>
                          <div class="mb-1">• High employment rate (95%+)</div>
                          <div class="mb-1">• Specific job skills focus</div>
                          <br />
                          <div class="mb-1">University:</div>
                          <div class="mb-1">• Academic, theoretical focus</div>
                          <div class="mb-1">
                            • Student loans/expenses required
                          </div>
                          <div class="mb-1">• 3-4 years duration</div>
                          <div class="mb-1">
                            • Further job search needed after graduation
                          </div>
                          <div class="mb-1">• Varies by field</div>
                          <div class="mb-1">• Broad academic knowledge</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="finances"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Do I need to pay taxes during Ausbildung training?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Yes, <strong>you must pay taxes</strong> during
                            Ausbildung training if your monthly salary exceeds
                            certain thresholds in 2025.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Tax Thresholds for 2025:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>€450/month or less:</strong> No income tax
                            (Minijob status)
                          </div>
                          <div class="mb-1">
                            - <strong>€451-900/month:</strong> Reduced tax rate
                            (Midijob)
                          </div>
                          <div class="mb-1">
                            - <strong>Over €900/month:</strong> Standard income
                            tax applies
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Tax Rates for Ausbildung Students:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Income Tax:</strong> 14-25% (progressive
                            rate)
                          </div>
                          <div class="mb-1">
                            - <strong>Social Security:</strong> ~20% (split with
                            employer)
                          </div>
                          <div class="mb-1">
                            - <strong>Church Tax:</strong> 8-9% (if applicable,
                            can opt out)
                          </div>
                          <div class="mb-1">
                            - <strong>Solidarity Surcharge:</strong> 5.5% (on
                            income tax)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Monthly Salary Examples (2025):</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>€1,200 gross salary:</strong>
                          </div>
                          <div class="mb-1">- Income tax: ~€50-80</div>
                          <div class="mb-1">- Social contributions: ~€240</div>
                          <div class="mb-1">
                            - <strong>Net pay: ~€880-920</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>What You Pay For:</strong>
                          </div>
                          <div class="mb-1">
                            - Health insurance (covered by contributions)
                          </div>
                          <div class="mb-1">- Unemployment insurance</div>
                          <div class="mb-1">
                            - Pension contributions (counts toward German
                            pension)
                          </div>
                          <div class="mb-1">
                            - Income tax for public services and infrastructure
                          </div>
                          <br />
                          <div class="mb-1"><strong>Tax Benefits:</strong></div>
                          <div class="mb-1">
                            - <strong>Annual tax return</strong> often results
                            in refunds
                          </div>
                          <div class="mb-1">
                            - <strong>Training-related expenses</strong> are
                            deductible
                          </div>
                          <div class="mb-1">
                            - <strong>Travel costs</strong> to vocational school
                          </div>
                          <div class="mb-1">
                            - <strong>Learning materials</strong> and textbooks
                          </div>
                          <div class="mb-1">
                            - <strong>Professional clothing</strong> and
                            equipment
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Important:</strong> Keep all receipts and
                            consider filing an annual tax return
                            (Steuererklärung) to claim back overpaid taxes. Most
                            Ausbildung students receive refunds of €200-800
                            annually.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="language"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Can I do Ausbildung in English or must it be in German?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Language requirements for Ausbildung programs:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>German Language Reality:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>95% of programs</strong>: Require German
                            B1 minimum
                          </div>
                          <div class="mb-1">
                            • <strong>Vocational school</strong>: Instruction
                            entirely in German
                          </div>
                          <div class="mb-1">
                            • <strong>Workplace communication</strong>: German
                            is essential
                          </div>
                          <div class="mb-1">
                            • <strong>Customer interaction</strong>: German
                            proficiency required
                          </div>
                          <div class="mb-1">
                            • <strong>Legal documents</strong>: All contracts in
                            German
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Limited English Options:</strong>
                          </div>
                          <div class="mb-1">
                            • <strong>International IT companies</strong>: SAP,
                            Microsoft, Amazon occasionally offer
                            English-friendly programs
                          </div>
                          <div class="mb-1">
                            • <strong>Multinational corporations</strong>: Some
                            flexibility in daily work language
                          </div>
                          <div class="mb-1">
                            • <strong>Tourism/Aviation</strong>: English as
                            working language in specific roles
                          </div>
                          <div class="mb-1">
                            • <strong>Research institutions</strong>: Some
                            technical positions
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Why German is Essential:</strong>
                          </div>
                          <div class="mb-1">
                            • Safety instructions and regulations
                          </div>
                          <div class="mb-1">
                            • Team collaboration and meetings
                          </div>
                          <div class="mb-1">
                            • Vocational school examinations
                          </div>
                          <div class="mb-1">
                            • Professional certification tests
                          </div>
                          <div class="mb-1">
                            • Integration into company culture
                          </div>
                          <div class="mb-1">
                            • Career advancement opportunities
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Language Learning Support:</strong>
                          </div>
                          <div class="mb-1">
                            • Many employers offer German courses
                          </div>
                          <div class="mb-1">
                            • Integration courses available
                          </div>
                          <div class="mb-1">• Evening language schools</div>
                          <div class="mb-1">• Online learning platforms</div>
                          <div class="mb-1">
                            • Language tandems with colleagues
                          </div>
                          <br />
                          <div class="mb-1">
                            We strongly recommend achieving B1 level before
                            starting and B2 within the first year.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="application"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Which documents need professional German translation for
                      Ausbildung applications?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            For <strong>Ausbildung applications</strong>, the
                            following documents
                            <strong
                              >must be professionally translated into
                              German</strong
                            >
                            and notarized:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Essential Documents Requiring
                              Translation:</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Educational certificates</strong> (10th,
                            12th grade, diploma, degree)
                          </div>
                          <div class="mb-1">
                            - <strong>Academic transcripts</strong> with grades
                            and subjects
                          </div>
                          <div class="mb-1">
                            - <strong>Work experience certificates</strong> and
                            employment letters
                          </div>
                          <div class="mb-1">
                            - <strong>Professional certificates</strong> and
                            training qualifications
                          </div>
                          <div class="mb-1">
                            - <strong>Birth certificate</strong> (for visa
                            applications)
                          </div>
                          <div class="mb-1">
                            - <strong>Marriage certificate</strong> (if
                            applicable for family visa)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Translation Requirements:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Certified translation</strong> by sworn
                            translator (beeidigte Übersetzer)
                          </div>
                          <div class="mb-1">
                            - <strong>Notarization</strong> by German consulate
                            or recognized authority
                          </div>
                          <div class="mb-1">
                            - <strong>Apostille certification</strong> for
                            documents from non-EU countries
                          </div>
                          <div class="mb-1">
                            - <strong>Original + translated copy</strong> must
                            be submitted together
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Documents NOT Requiring Translation:</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Passport</strong> (accepted in original
                            language)
                          </div>
                          <div class="mb-1">
                            -
                            <strong>German language certificates</strong>
                            (Goethe, TestDaF, etc.)
                          </div>
                          <div class="mb-1">
                            - <strong>International certificates</strong> in
                            English (sometimes accepted)
                          </div>
                          <div class="mb-1">
                            - <strong>Europass CV</strong> format documents
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Where to Get Translations:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>German consulates</strong> in your home
                            country
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Certified translation services</strong>
                            recognized by German authorities
                          </div>
                          <div class="mb-1">
                            -
                            <strong>University language departments</strong>
                            with sworn translators
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Professional translation agencies</strong>
                            specializing in academic documents
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Costs (2025 estimates):</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>€25-50 per page</strong> for certified
                            translation
                          </div>
                          <div class="mb-1">
                            - <strong>€20-30</strong> for notarization
                          </div>
                          <div class="mb-1">
                            - <strong>€50-100</strong> for apostille
                            certification
                          </div>
                          <div class="mb-1">
                            - <strong>Total: €300-600</strong> for complete
                            document set
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Pro Tip:</strong> Get translations done
                            early as the process can take 2-4 weeks. Some
                            companies accept English documents initially but
                            require German translations before contract signing.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="daily-life"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Which German cities are best for international Ausbildung
                      students?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            For
                            <strong>international Ausbildung students</strong>,
                            smaller German cities often provide
                            <strong>better opportunities</strong> than major
                            metropolitan areas.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Best Cities for International Students
                              (2025):</strong
                            >
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Tier 1 - Highest Success Rate:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Chemnitz</strong> (Saxony) - Low cost,
                            high acceptance rates
                          </div>
                          <div class="mb-1">
                            - <strong>Magdeburg</strong> (Saxony-Anhalt) -
                            Strong engineering sector
                          </div>
                          <div class="mb-1">
                            - <strong>Koblenz</strong> (Rhineland-Palatinate) -
                            IT hub, moderate costs
                          </div>
                          <div class="mb-1">
                            - <strong>Erfurt</strong> (Thuringia) - Healthcare
                            opportunities
                          </div>
                          <div class="mb-1">
                            - <strong>Rostock</strong> (Mecklenburg-Vorpommern)
                            - Maritime industry
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Tier 2 - Good Balance:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Dresden</strong> - Technology and
                            healthcare
                          </div>
                          <div class="mb-1">
                            - <strong>Leipzig</strong> - Logistics and
                            automotive
                          </div>
                          <div class="mb-1">
                            - <strong>Hannover</strong> - Engineering and IT
                          </div>
                          <div class="mb-1">
                            - <strong>Bremen</strong> - Aerospace and logistics
                          </div>
                          <div class="mb-1">
                            - <strong>Würzburg</strong> - Healthcare and
                            technology
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Why Smaller Cities Are Better:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>30-40% higher acceptance rates</strong> vs
                            Berlin/Munich
                          </div>
                          <div class="mb-1">
                            -
                            <strong>€200-400 lower monthly living costs</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>More personal attention</strong> from
                            employers
                          </div>
                          <div class="mb-1">
                            - <strong>Faster integration</strong> into German
                            society
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Better German language practice</strong>
                            (less English spoken)
                          </div>
                          <div class="mb-1">
                            - <strong>Shorter commute times</strong> to work and
                            school
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Cost Comparison (Monthly):</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Berlin/Munich:</strong> €800-1,200 living
                            costs
                          </div>
                          <div class="mb-1">
                            - <strong>Smaller cities:</strong> €500-800 living
                            costs
                          </div>
                          <div class="mb-1">
                            - <strong>Accommodation:</strong> €300-500 vs
                            €600-900
                          </div>
                          <div class="mb-1">
                            - <strong>Food &amp; transport:</strong> €200-300 vs
                            €350-450
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Industry Clusters:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Healthcare:</strong> Erfurt, Rostock,
                            Magdeburg
                          </div>
                          <div class="mb-1">
                            - <strong>IT:</strong> Chemnitz, Koblenz, Dresden
                          </div>
                          <div class="mb-1">
                            - <strong>Engineering:</strong> Magdeburg, Hannover,
                            Bremen
                          </div>
                          <div class="mb-1">
                            - <strong>Automotive:</strong> Leipzig, Chemnitz
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Application Strategy:</strong> Apply to 3-5
                            smaller cities rather than focusing only on Berlin
                            or Munich for
                            <strong>significantly better chances</strong> of
                            success.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="career"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Can I switch companies during my Ausbildung training?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Yes,
                            <strong>you can switch companies</strong> during
                            Ausbildung training, but it involves several
                            important steps and considerations.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>When Company Switching is Possible:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Mutual agreement</strong> between you and
                            current employer
                          </div>
                          <div class="mb-1">
                            - <strong>Serious issues</strong> like workplace
                            harassment or unsafe conditions
                          </div>
                          <div class="mb-1">
                            - <strong>Company closure</strong> or economic
                            difficulties
                          </div>
                          <div class="mb-1">
                            - <strong>Better opportunity</strong> with improved
                            terms or location
                          </div>
                          <div class="mb-1">
                            - <strong>Personal circumstances</strong> requiring
                            relocation
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Required Steps for Switching:</strong>
                          </div>
                          <div class="mb-1">
                            1.
                            <strong>Find new training company</strong> willing
                            to take you on
                          </div>
                          <div class="mb-1">
                            2.
                            <strong>Negotiate contract termination</strong> with
                            current employer
                          </div>
                          <div class="mb-1">
                            3. <strong>Sign new training contract</strong> with
                            receiving company
                          </div>
                          <div class="mb-1">
                            4. <strong>Notify vocational school</strong> of the
                            change
                          </div>
                          <div class="mb-1">
                            5. <strong>Update residence permit</strong> if visa
                            conditions change
                          </div>
                          <div class="mb-1">
                            6.
                            <strong>Inform local authorities</strong>
                            (Ausländerbehörde)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Important Considerations:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Training continuity</strong> must be
                            maintained (no gaps allowed)
                          </div>
                          <div class="mb-1">
                            - <strong>Credit transfer</strong> of completed
                            training modules
                          </div>
                          <div class="mb-1">
                            - <strong>Visa implications</strong> - may require
                            permit modification
                          </div>
                          <div class="mb-1">
                            - <strong>Notice periods</strong> typically 4 weeks
                            minimum
                          </div>
                          <div class="mb-1">
                            - <strong>Financial obligations</strong> - may need
                            to repay training costs
                          </div>
                          <br />
                          <div class="mb-1"><strong>Success Tips:</strong></div>
                          <div class="mb-1">
                            - <strong>Document valid reasons</strong> for
                            switching
                          </div>
                          <div class="mb-1">
                            - <strong>Secure new position</strong> before
                            leaving current one
                          </div>
                          <div class="mb-1">
                            - <strong>Maintain good relationships</strong> -
                            German business community is small
                          </div>
                          <div class="mb-1">
                            - <strong>Get written agreements</strong> for all
                            changes
                          </div>
                          <div class="mb-1">
                            - <strong>Seek advice</strong> from vocational
                            counselors
                          </div>
                          <br />
                          <div class="mb-1"><strong>Statistics:</strong></div>
                          <div class="mb-1">
                            - <strong>15-20% of trainees</strong> switch
                            companies during Ausbildung
                          </div>
                          <div class="mb-1">
                            - <strong>Higher success rate</strong> in
                            high-demand sectors (IT, healthcare)
                          </div>
                          <div class="mb-1">
                            - <strong>Most switches happen</strong> in first 6
                            months or between years
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>When NOT to Switch:</strong>
                          </div>
                          <div class="mb-1">- Minor personality conflicts</div>
                          <div class="mb-1">- Temporary workplace stress</div>
                          <div class="mb-1">
                            - Better salary elsewhere (small differences)
                          </div>
                          <div class="mb-1">- Just before final exams</div>
                          <br />
                          <div class="mb-1">
                            <strong>Support Resources:</strong>
                          </div>
                          <div class="mb-1">
                            - Chamber of Commerce (IHK/HWK) mediation services
                          </div>
                          <div class="mb-1">- Vocational school counseling</div>
                          <div class="mb-1">
                            - Trade union support (if applicable)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="visa"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Can my family join me during Ausbildung training in
                      Germany?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Yes,
                            <strong>your family can join you</strong> during
                            Ausbildung training through family reunification
                            (Familiennachzug), but requirements vary by
                            relationship.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Spouse/Partner Reunification:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Eligible</strong> after you receive
                            Ausbildung residence permit
                          </div>
                          <div class="mb-1">
                            - <strong>Must prove relationship</strong> (marriage
                            certificate, partnership registration)
                          </div>
                          <div class="mb-1">
                            - <strong>German language</strong> A1 level required
                            (some exceptions)
                          </div>
                          <div class="mb-1">
                            - <strong>Adequate living space</strong> for family
                            (minimum size requirements)
                          </div>
                          <div class="mb-1">
                            - <strong>Financial stability</strong> - your
                            Ausbildung salary must support family
                          </div>
                          <div class="mb-1">
                            - <strong>Immediate work rights</strong> upon
                            arrival in Germany
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Children Reunification:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Under 16 years:</strong> Easier process,
                            language requirements waived
                          </div>
                          <div class="mb-1">
                            - <strong>16-18 years:</strong> Must demonstrate
                            German language skills or integration potential
                          </div>
                          <div class="mb-1">
                            - <strong>Over 18:</strong> Very limited options,
                            must apply independently
                          </div>
                          <div class="mb-1">
                            - <strong>Both parents</strong> must be in Germany
                            or consent required
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Parents/Relatives:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Generally not eligible</strong> during
                            Ausbildung
                          </div>
                          <div class="mb-1">
                            - <strong>Exceptions</strong> for humanitarian cases
                            or severe hardship
                          </div>
                          <div class="mb-1">
                            - <strong>Visit visas</strong> possible for
                            short-term stays (90 days)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Requirements for Family Visa:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Adequate housing</strong> (minimum 12m²
                            per person)
                          </div>
                          <div class="mb-1">
                            - <strong>Health insurance</strong> for all family
                            members
                          </div>
                          <div class="mb-1">
                            - <strong>Stable income</strong> from your
                            Ausbildung (typically €1,200+ needed for family of
                            3)
                          </div>
                          <div class="mb-1">
                            - <strong>German language certificate</strong> for
                            spouse
                          </div>
                          <div class="mb-1">
                            - <strong>Integration commitment</strong> (attending
                            integration courses)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Benefits for Joining Family:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Immediate work authorization</strong> for
                            spouse
                          </div>
                          <div class="mb-1">
                            - <strong>Access to German schools</strong> for
                            children
                          </div>
                          <div class="mb-1">
                            - <strong>Healthcare coverage</strong> through
                            family insurance
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Path to permanent residency</strong>
                            together
                          </div>
                          <div class="mb-1">
                            - <strong>German language courses</strong> available
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Timeline &amp; Process:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>3-6 months</strong> processing time for
                            family visa
                          </div>
                          <div class="mb-1">
                            - <strong>Apply after</strong> receiving your
                            residence permit
                          </div>
                          <div class="mb-1">
                            - <strong>Required documents:</strong> Relationship
                            proof, housing contract, income statements, language
                            certificates
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Important:</strong> Start family visa
                            process early as waiting times can be long,
                            especially at German consulates in high-demand
                            countries.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="requirements"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      How are foreign qualifications recognized for Ausbildung
                      applications?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Foreign qualifications require
                            <strong>official recognition</strong> (Anerkennung)
                            for Ausbildung applications, though requirements
                            vary by program and federal state.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Recognition Process Overview:</strong>
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Educational certificates</strong> evaluated
                            for German equivalency
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Professional qualifications</strong>
                            assessed by competent authorities
                          </div>
                          <div class="mb-1">
                            - <strong>Different procedures</strong> for
                            regulated vs non-regulated professions
                          </div>
                          <div class="mb-1">
                            - <strong>State-specific requirements</strong> (each
                            Bundesland has different rules)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Who Handles Recognition:</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Academic Qualifications:</strong>
                          </div>
                          <div class="mb-1">
                            -
                            <strong
                              >ZAB (Central Office for Foreign
                              Education)</strong
                            >
                            - general academic recognition
                          </div>
                          <div class="mb-1">
                            - <strong>State education authorities</strong> -
                            school certificate equivalency
                          </div>
                          <div class="mb-1">
                            - <strong>Universities</strong> - higher education
                            credential assessment
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Professional Qualifications:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>IHK (Chamber of Commerce)</strong> -
                            commercial professions
                          </div>
                          <div class="mb-1">
                            - <strong>HWK (Chamber of Crafts)</strong> - craft
                            professions
                          </div>
                          <div class="mb-1">
                            - <strong>Professional associations</strong> -
                            regulated professions (healthcare, engineering)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Documents Required:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Original certificates</strong> with
                            official translations
                          </div>
                          <div class="mb-1">
                            - <strong>Academic transcripts</strong> with grades
                            and subjects
                          </div>
                          <div class="mb-1">
                            - <strong>Curriculum details</strong> and course
                            descriptions
                          </div>
                          <div class="mb-1">
                            - <strong>Work experience certificates</strong> (if
                            applicable)
                          </div>
                          <div class="mb-1">
                            - <strong>Identity documents</strong> and photos
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Recognition Outcomes:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Full Recognition</strong> - direct
                            equivalency to German qualification
                          </div>
                          <div class="mb-1">
                            - <strong>Partial Recognition</strong> - some
                            additional training/courses required
                          </div>
                          <div class="mb-1">
                            - <strong>No Recognition</strong> - qualification
                            not equivalent
                          </div>
                          <div class="mb-1">
                            - <strong>Compensation Measures</strong> - bridging
                            courses or exams offered
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Timeline &amp; Costs:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Processing time:</strong> 3-4 months
                            typically
                          </div>
                          <div class="mb-1">
                            - <strong>Costs:</strong> €100-600 depending on
                            complexity
                          </div>
                          <div class="mb-1">
                            - <strong>Additional requirements</strong> may
                            extend timeline
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Ausbildung-Specific Considerations:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>School certificates</strong> usually
                            sufficient for most Ausbildung programs
                          </div>
                          <div class="mb-1">
                            - <strong>University degrees</strong> may grant
                            advanced placement or shortened training
                          </div>
                          <div class="mb-1">
                            - <strong>Previous work experience</strong> can
                            reduce training duration
                          </div>
                          <div class="mb-1">
                            - <strong>Language skills</strong> more important
                            than perfect academic equivalency
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Tips for Success:</strong>
                          </div>
                          <div class="mb-1">
                            - Start recognition process
                            <strong>6-12 months</strong> before applications
                          </div>
                          <div class="mb-1">
                            - <strong>Detailed documentation</strong> improves
                            recognition chances
                          </div>
                          <div class="mb-1">
                            - Consider <strong>partial recognition</strong> with
                            bridging measures
                          </div>
                          <div class="mb-1">
                            - <strong>Professional counseling</strong> available
                            through Welcome Centers
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="career"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      Which are the highest-demand Ausbildung sectors with best
                      job prospects in 2025?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            The
                            <strong>highest-demand Ausbildung sectors</strong>
                            in 2025 offer excellent job security and career
                            advancement opportunities due to Germany&#x27;s
                            skill shortages.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Top 5 High-Demand Sectors:</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >1. Healthcare &amp; Nursing (40,000+
                              openings)</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Geriatric care</strong> - aging population
                            creating massive demand
                          </div>
                          <div class="mb-1">
                            - <strong>Hospital nursing</strong> - chronic staff
                            shortages
                          </div>
                          <div class="mb-1">
                            - <strong>Dental assistance</strong> - consistent
                            demand across Germany
                          </div>
                          <div class="mb-1">
                            - <strong>Physiotherapy</strong> - growing health
                            consciousness
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Average starting salary:</strong>
                            €30,000-40,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >2. IT &amp; Technology (25,000+ openings)</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Software development</strong> - digital
                            transformation accelerating
                          </div>
                          <div class="mb-1">
                            - <strong>System administration</strong> - cloud
                            migration needs
                          </div>
                          <div class="mb-1">
                            - <strong>Cybersecurity</strong> - increasing
                            security threats
                          </div>
                          <div class="mb-1">
                            - <strong>Data analysis</strong> - business
                            intelligence demand
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Average starting salary:</strong>
                            €36,000-50,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >3. Engineering &amp; Manufacturing (18,000+
                              openings)</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Mechatronics</strong> - Industry 4.0
                            automation
                          </div>
                          <div class="mb-1">
                            - <strong>Electrical engineering</strong> -
                            renewable energy transition
                          </div>
                          <div class="mb-1">
                            - <strong>Automotive technology</strong> - electric
                            vehicle shift
                          </div>
                          <div class="mb-1">
                            - <strong>Industrial mechanics</strong> -
                            maintenance needs
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Average starting salary:</strong>
                            €32,000-45,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >4. Green Energy &amp; Environment (15,000+
                              openings)</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Solar panel installation</strong> -
                            renewable energy goals
                          </div>
                          <div class="mb-1">
                            - <strong>Wind turbine maintenance</strong> -
                            offshore expansion
                          </div>
                          <div class="mb-1">
                            - <strong>Energy efficiency consulting</strong> -
                            climate targets
                          </div>
                          <div class="mb-1">
                            - <strong>Environmental technology</strong> -
                            sustainability focus
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Average starting salary:</strong>
                            €28,000-42,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >5. Logistics &amp; Supply Chain (12,000+
                              openings)</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Warehouse management</strong> - e-commerce
                            growth
                          </div>
                          <div class="mb-1">
                            - <strong>Transportation coordination</strong> -
                            supply chain complexity
                          </div>
                          <div class="mb-1">
                            - <strong>Customs handling</strong> - international
                            trade
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Average starting salary:</strong>
                            €25,000-35,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Why These Sectors Lead:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Skills shortage</strong> across all levels
                          </div>
                          <div class="mb-1">
                            - <strong>Government support</strong> and funding
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Technological transformation</strong>
                            requiring new skills
                          </div>
                          <div class="mb-1">
                            - <strong>Demographic changes</strong> driving
                            demand
                          </div>
                          <div class="mb-1">
                            - <strong>Export economy</strong> needing skilled
                            workers
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Job Security Indicators:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Over 90% employment rate</strong> after
                            completion
                          </div>
                          <div class="mb-1">
                            - <strong>65% receive permanent offers</strong> from
                            training companies
                          </div>
                          <div class="mb-1">
                            - <strong>25% salary growth</strong> within 5 years
                            typical
                          </div>
                          <div class="mb-1">
                            - <strong>High advancement opportunities</strong> to
                            leadership roles
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="basics"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What is the difference between Ausbildung and University
                      studies in Germany?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Understanding the differences between
                            <strong>Ausbildung</strong> and
                            <strong>University studies</strong> helps you choose
                            the right educational path in Germany.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Ausbildung (Vocational Training):</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Duration:</strong> 2-3.5 years typically
                          </div>
                          <div class="mb-1">
                            - <strong>Structure:</strong> 3-4 days workplace +
                            1-2 days theory school
                          </div>
                          <div class="mb-1">
                            - <strong>Income:</strong> €900-1,300/month salary
                            during training
                          </div>
                          <div class="mb-1">
                            - <strong>Cost:</strong>
                            <strong>No tuition fees</strong> - you earn while
                            learning
                          </div>
                          <div class="mb-1">
                            - <strong>Outcome:</strong> Direct job placement
                            (65%+ hired by training company)
                          </div>
                          <div class="mb-1">
                            - <strong>Focus:</strong> Practical skills and
                            hands-on experience
                          </div>
                          <div class="mb-1">
                            - <strong>Entry:</strong> School completion (10+2),
                            German B1-B2
                          </div>
                          <div class="mb-1">
                            - <strong>Career path:</strong> Skilled worker →
                            Specialist → Management possible
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>University Studies (Studium):</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Duration:</strong> 3-5 years
                            (Bachelor/Master)
                          </div>
                          <div class="mb-1">
                            - <strong>Structure:</strong> Lectures, seminars,
                            self-study
                          </div>
                          <div class="mb-1">
                            - <strong>Income:</strong>
                            <strong>No salary</strong> - need part-time jobs or
                            funding
                          </div>
                          <div class="mb-1">
                            - <strong>Cost:</strong> €150-350/semester fees +
                            living expenses
                          </div>
                          <div class="mb-1">
                            - <strong>Outcome:</strong> Degree but job search
                            required after graduation
                          </div>
                          <div class="mb-1">
                            - <strong>Focus:</strong> Theoretical knowledge and
                            research
                          </div>
                          <div class="mb-1">
                            - <strong>Entry:</strong> Higher education entrance
                            qualification, German C1
                          </div>
                          <div class="mb-1">
                            - <strong>Career path:</strong> Academic →
                            Professional → Research/Management
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Financial Comparison:</strong>
                          </div>
                          <div class="mb-1">
                            <strong>Ausbildung 3-year program:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Earn:</strong> €32,000-45,000 total during
                            training
                          </div>
                          <div class="mb-1">
                            - <strong>Spend:</strong> Living expenses only
                          </div>
                          <div class="mb-1">- <strong>Debt:</strong> None</div>
                          <div class="mb-1">
                            - <strong>Start working:</strong> Immediately after
                            completion
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>University 3-year program:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Earn:</strong> €0-15,000 (part-time work)
                          </div>
                          <div class="mb-1">
                            - <strong>Spend:</strong> €30,000-45,000 total costs
                          </div>
                          <div class="mb-1">
                            - <strong>Debt:</strong> Potentially €20,000-30,000
                          </div>
                          <div class="mb-1">
                            - <strong>Start working:</strong> After degree
                            completion + job search
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Which to Choose:</strong>
                          </div>
                          <div class="mb-1">
                            <strong>Choose Ausbildung if:</strong>
                          </div>
                          <div class="mb-1">- Want to earn immediately</div>
                          <div class="mb-1">- Prefer hands-on learning</div>
                          <div class="mb-1">
                            - Seek guaranteed job placement
                          </div>
                          <div class="mb-1">
                            - Need faster entry to workforce
                          </div>
                          <div class="mb-1">- Interested in skilled trades</div>
                          <br />
                          <div class="mb-1">
                            <strong>Choose University if:</strong>
                          </div>
                          <div class="mb-1">- Want academic career</div>
                          <div class="mb-1">- Need theoretical foundation</div>
                          <div class="mb-1">
                            - Aim for research/leadership roles
                          </div>
                          <div class="mb-1">
                            - Have strong academic background
                          </div>
                          <div class="mb-1">
                            - Can afford longer study period
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Combined Path:</strong> Many students do
                            Ausbildung first, then study part-time later with
                            employer support!
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="finances"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What are typical monthly living costs during Ausbildung in
                      different German cities?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Monthly living costs during Ausbildung vary
                            significantly by city size and region. Here&#x27;s a
                            <strong>comprehensive breakdown for 2025</strong>:
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Major Cities (Berlin, Munich, Hamburg,
                              Frankfurt):</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Accommodation:</strong> €600-900 (shared)
                            / €800-1,200 (studio)
                          </div>
                          <div class="mb-1">
                            - <strong>Food &amp; Groceries:</strong> €250-350
                          </div>
                          <div class="mb-1">
                            - <strong>Transportation:</strong> €80-100 (student
                            discount)
                          </div>
                          <div class="mb-1">
                            - <strong>Health Insurance:</strong> €180-200
                            (mandatory)
                          </div>
                          <div class="mb-1">
                            - <strong>Personal Expenses:</strong> €150-200
                          </div>
                          <div class="mb-1">
                            - <strong>Total Monthly:</strong> €1,060-1,650
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Mid-Size Cities (Dresden, Leipzig, Hannover,
                              Bremen):</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Accommodation:</strong> €400-600 (shared)
                            / €500-800 (studio)
                          </div>
                          <div class="mb-1">
                            - <strong>Food &amp; Groceries:</strong> €220-280
                          </div>
                          <div class="mb-1">
                            - <strong>Transportation:</strong> €60-80
                          </div>
                          <div class="mb-1">
                            - <strong>Health Insurance:</strong> €180-200
                          </div>
                          <div class="mb-1">
                            - <strong>Personal Expenses:</strong> €120-150
                          </div>
                          <div class="mb-1">
                            - <strong>Total Monthly:</strong> €780-1,110
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Smaller Cities (Chemnitz, Magdeburg, Erfurt,
                              Rostock):</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Accommodation:</strong> €300-450 (shared)
                            / €400-600 (studio)
                          </div>
                          <div class="mb-1">
                            - <strong>Food &amp; Groceries:</strong> €200-250
                          </div>
                          <div class="mb-1">
                            - <strong>Transportation:</strong> €50-70
                          </div>
                          <div class="mb-1">
                            - <strong>Health Insurance:</strong> €180-200
                          </div>
                          <div class="mb-1">
                            - <strong>Personal Expenses:</strong> €100-130
                          </div>
                          <div class="mb-1">
                            - <strong>Total Monthly:</strong> €630-900
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Accommodation Options &amp; Costs:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Company housing:</strong> €200-400 (often
                            subsidized)
                          </div>
                          <div class="mb-1">
                            - <strong>Shared apartments (WG):</strong> €300-700
                            depending on city
                          </div>
                          <div class="mb-1">
                            - <strong>Student residences:</strong> €300-500
                            (limited availability)
                          </div>
                          <div class="mb-1">
                            - <strong>Private studio:</strong> €500-1,200 based
                            on location
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Money-Saving Tips:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Choose smaller cities</strong> - save
                            €200-400/month
                          </div>
                          <div class="mb-1">
                            - <strong>Company accommodation</strong> often
                            cheapest option
                          </div>
                          <div class="mb-1">
                            - <strong>Student discounts</strong> on
                            transportation, food, entertainment
                          </div>
                          <div class="mb-1">
                            - <strong>Cook at home</strong> - save
                            €100-150/month vs restaurants
                          </div>
                          <div class="mb-1">
                            - <strong>Second-hand shopping</strong> for
                            furniture and clothing
                          </div>
                          <div class="mb-1">
                            - <strong>Bike instead of car</strong> - save
                            €200+/month
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Ausbildung Salary vs Living Costs:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>1st year salary:</strong> €800-1,200 (may
                            need family support in expensive cities)
                          </div>
                          <div class="mb-1">
                            - <strong>2nd year salary:</strong> €900-1,350
                            (usually covers basic costs)
                          </div>
                          <div class="mb-1">
                            - <strong>3rd year salary:</strong> €1,000-1,500
                            (comfortable living possible)
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Regional Cost Differences:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>East Germany:</strong> Generally 20-30%
                            cheaper
                          </div>
                          <div class="mb-1">
                            -
                            <strong
                              >South Germany (Bavaria,
                              Baden-Württemberg):</strong
                            >
                            Most expensive
                          </div>
                          <div class="mb-1">
                            - <strong>North Germany:</strong> Moderate costs
                          </div>
                          <div class="mb-1">
                            -
                            <strong>West Germany (NRW, Hesse):</strong> Variable
                            by city size
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Budget Recommendation:</strong> Choose
                            cities where living costs don&#x27;t exceed 70% of
                            your Ausbildung salary for financial comfort.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="career"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      What are the salary expectations after completing
                      different Ausbildung programs?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            Post-Ausbildung salaries vary significantly by
                            sector, with
                            <strong>strong earning potential</strong> across all
                            fields in 2025.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >High-Paying Sectors (€40,000+ starting):</strong
                            >
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>IT &amp; Technology:</strong>
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Software Developer:</strong> €36,000-50,000
                            starting
                          </div>
                          <div class="mb-1">
                            -
                            <strong>System Administrator:</strong>
                            €38,000-48,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Cybersecurity Specialist:</strong>
                            €42,000-55,000
                          </div>
                          <div class="mb-1">
                            - <strong>Data Analyst:</strong> €35,000-45,000
                          </div>
                          <div class="mb-1">
                            - <strong>5-year potential:</strong> €55,000-75,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Engineering &amp; Manufacturing:</strong>
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Mechatronics Technician:</strong>
                            €35,000-48,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Industrial Mechanic:</strong> €32,000-42,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Electrical Technician:</strong>
                            €34,000-46,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Automotive Technician:</strong>
                            €30,000-40,000
                          </div>
                          <div class="mb-1">
                            - <strong>5-year potential:</strong> €45,000-65,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Mid-Range Sectors (€30,000-40,000
                              starting):</strong
                            >
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Healthcare &amp; Social Services:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Registered Nurse:</strong> €32,000-42,000
                          </div>
                          <div class="mb-1">
                            - <strong>Dental Assistant:</strong> €27,000-35,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Physiotherapy Assistant:</strong>
                            €28,000-36,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Elder Care Specialist:</strong>
                            €30,000-38,000
                          </div>
                          <div class="mb-1">
                            - <strong>5-year potential:</strong> €38,000-50,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Finance &amp; Business:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Bank Clerk:</strong> €32,000-40,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Insurance Specialist:</strong>
                            €30,000-38,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Business Administrator:</strong>
                            €28,000-36,000
                          </div>
                          <div class="mb-1">
                            - <strong>5-year potential:</strong> €40,000-55,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Solid Earning Sectors (€25,000-35,000
                              starting):</strong
                            >
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Hospitality &amp; Tourism:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Hotel Manager:</strong> €28,000-35,000
                          </div>
                          <div class="mb-1">
                            - <strong>Chef:</strong> €25,000-32,000
                          </div>
                          <div class="mb-1">
                            - <strong>Event Coordinator:</strong> €26,000-34,000
                          </div>
                          <div class="mb-1">
                            - <strong>5-year potential:</strong> €35,000-45,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Retail &amp; Logistics:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Retail Manager:</strong> €25,000-32,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Logistics Coordinator:</strong>
                            €28,000-35,000
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Warehouse Supervisor:</strong>
                            €26,000-33,000
                          </div>
                          <div class="mb-1">
                            - <strong>5-year potential:</strong> €32,000-42,000
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Salary Progression Factors:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Performance bonuses:</strong> 10-20%
                            additional income
                          </div>
                          <div class="mb-1">
                            - <strong>Overtime pay:</strong> Time-and-half rates
                            common
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Specialization certificates:</strong>
                            €2,000-5,000 salary boost
                          </div>
                          <div class="mb-1">
                            - <strong>Leadership roles:</strong> 25-40% increase
                            within 5-7 years
                          </div>
                          <div class="mb-1">
                            - <strong>Company size:</strong> Large corporations
                            pay 15-25% more
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Regional Salary Differences:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>Bavaria/Baden-Württemberg:</strong> 15-20%
                            above national average
                          </div>
                          <div class="mb-1">
                            - <strong>North Rhine-Westphalia:</strong> 10-15%
                            above average
                          </div>
                          <div class="mb-1">
                            - <strong>Eastern Germany:</strong> 10-15% below
                            average (but lower living costs)
                          </div>
                          <div class="mb-1">
                            - <strong>Berlin/Hamburg:</strong> Variable by
                            sector
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Additional Benefits (often included):</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>13th month salary</strong> (Christmas
                            bonus)
                          </div>
                          <div class="mb-1">
                            - <strong>Vacation pay</strong> (extra monthly
                            salary for holidays)
                          </div>
                          <div class="mb-1">
                            - <strong>Company pension</strong> contributions
                          </div>
                          <div class="mb-1">
                            - <strong>Health insurance</strong> premium sharing
                          </div>
                          <div class="mb-1">
                            - <strong>Professional development</strong> funding
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Company car/transportation</strong>
                            allowances
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="border border-primary/10 rounded-lg bg-card overflow-hidden"
                  data-category="application"
                >
                  <button
                    class="w-full text-left p-6 flex items-center justify-between hover:bg-muted/50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20 focus:ring-inset"
                    aria-expanded="false"
                  >
                    <h3
                      class="tracking-tight font-semibold text-secondary pr-4 text-base sm:text-lg"
                    >
                      How long does the complete Ausbildung application process
                      take from start to finish?
                    </h3>
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground transition-transform duration-200 flex-shrink-0"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="transition-all duration-200 ease-in-out max-h-0 opacity-0 overflow-hidden"
                  >
                    <div class="px-6 pb-6">
                      <div class="border-t border-border pt-4">
                        <div class="text-muted-foreground leading-relaxed">
                          <div class="mb-1">
                            The complete Ausbildung application process
                            typically takes <strong>12-18 months</strong> from
                            initial planning to starting your training program.
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Phase 1: Preparation (6-9 months)</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>German language learning:</strong> 6-9
                            months from zero to B1/B2
                          </div>
                          <div class="mb-1">
                            - <strong>Document preparation:</strong> 2-3 months
                            for translations and certifications
                          </div>
                          <div class="mb-1">
                            - <strong>Research and planning:</strong> 1-2 months
                            for sector and city selection
                          </div>
                          <div class="mb-1">
                            - <strong>Skill development:</strong> Optional
                            courses or certifications
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Phase 2: Application Period (3-6 months)</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Company research:</strong> 2-4 weeks
                            identifying potential employers
                          </div>
                          <div class="mb-1">
                            - <strong>Application submission:</strong> 4-8 weeks
                            sending applications
                          </div>
                          <div class="mb-1">
                            - <strong>Interview process:</strong> 2-6 weeks for
                            responses and interviews
                          </div>
                          <div class="mb-1">
                            - <strong>Contract negotiation:</strong> 1-3 weeks
                            finalizing terms
                          </div>
                          <div class="mb-1">
                            - <strong>Waiting for offers:</strong> Can extend
                            timeline if multiple rounds needed
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >Phase 3: Visa &amp; Travel (2-3 months)</strong
                            >
                          </div>
                          <div class="mb-1">
                            - <strong>Visa application:</strong> 6-8 weeks
                            processing time
                          </div>
                          <div class="mb-1">
                            - <strong>Medical exams:</strong> 1-2 weeks if
                            required
                          </div>
                          <div class="mb-1">
                            - <strong>Travel arrangements:</strong> 2-3 weeks
                            booking flights and accommodation
                          </div>
                          <div class="mb-1">
                            - <strong>Final preparations:</strong> 1-2 weeks
                            before departure
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Optimal Timeline Breakdown:</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong
                              >18 months before start (January for September
                              start):</strong
                            >
                          </div>
                          <div class="mb-1">
                            - Begin German language learning
                          </div>
                          <div class="mb-1">
                            - Research Ausbildung sectors and opportunities
                          </div>
                          <div class="mb-1">
                            - Start gathering and translating documents
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>12 months before:</strong>
                          </div>
                          <div class="mb-1">- Achieve A2 German level</div>
                          <div class="mb-1">
                            - Complete document translations
                          </div>
                          <div class="mb-1">
                            - Identify target companies and regions
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>9 months before:</strong>
                          </div>
                          <div class="mb-1">
                            - Reach B1 German level (minimum)
                          </div>
                          <div class="mb-1">
                            - Begin application submissions
                          </div>
                          <div class="mb-1">
                            - Attend online interviews if available
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>6 months before:</strong>
                          </div>
                          <div class="mb-1">
                            - Complete applications and interviews
                          </div>
                          <div class="mb-1">- Secure training contract</div>
                          <div class="mb-1">- Apply for visa</div>
                          <br />
                          <div class="mb-1">
                            <strong>3 months before:</strong>
                          </div>
                          <div class="mb-1">- Receive visa approval</div>
                          <div class="mb-1">- Make travel arrangements</div>
                          <div class="mb-1">- Prepare for departure</div>
                          <br />
                          <div class="mb-1">
                            <strong>Factors Affecting Timeline:</strong>
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Faster Process (12 months):</strong>
                          </div>
                          <div class="mb-1">- Previous German knowledge</div>
                          <div class="mb-1">
                            - In-demand sectors (IT, healthcare)
                          </div>
                          <div class="mb-1">
                            - Strong educational background
                          </div>
                          <div class="mb-1">- Quick document processing</div>
                          <br />
                          <div class="mb-1">
                            <strong>Slower Process (18+ months):</strong>
                          </div>
                          <div class="mb-1">- Learning German from zero</div>
                          <div class="mb-1">- Competitive sectors</div>
                          <div class="mb-1">- Multiple application rounds</div>
                          <div class="mb-1">- Visa processing delays</div>
                          <div class="mb-1">
                            - Document authentication issues
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Tips to Accelerate Process:</strong>
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Intensive German courses</strong> (full-time
                            study)
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Early document preparation</strong>
                            (don&#x27;t wait for language skills)
                          </div>
                          <div class="mb-1">
                            - <strong>Apply broadly</strong> (multiple cities
                            and companies)
                          </div>
                          <div class="mb-1">
                            - <strong>Use professional services</strong> for
                            translations and applications
                          </div>
                          <div class="mb-1">
                            -
                            <strong>Start visa process immediately</strong>
                            after contract signing
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Application Season Timing:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>September start</strong> (most common):
                            Apply October-March
                          </div>
                          <div class="mb-1">
                            - <strong>February start</strong> (limited): Apply
                            April-September
                          </div>
                          <div class="mb-1">
                            - <strong>Ongoing recruitment:</strong> Some
                            companies hire year-round
                          </div>
                          <br />
                          <div class="mb-1">
                            <strong>Success Rate by Timeline:</strong>
                          </div>
                          <div class="mb-1">
                            - <strong>12-month preparation:</strong> 85% success
                            rate
                          </div>
                          <div class="mb-1">
                            - <strong>18-month preparation:</strong> 95% success
                            rate
                          </div>
                          <div class="mb-1">
                            - <strong>6-month rushed process:</strong> 45%
                            success rate
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="container mx-auto px-4 lg:px-6 my-16">
            <section
              class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg bg-gradient-to-b from-primary/5 to-background"
            >
              <img
                alt="Background"
                loading="lazy"
                decoding="async"
                data-nimg="fill"
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
                src="{{ asset('assets/_next/arbeitgeber-hero-backgroundaa3f.jpeg') }}"
              />
              <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl"></div>
              <div
                class="absolute inset-0 z-[1] rounded-2xl"
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
                class="relative z-10 mx-auto flex max-w-container gap-8 px-6 sm:gap-10 md:px-12 flex-col items-center text-center"
              >
                <div class="flex flex-col gap-8 items-center text-center">
                  <div
                    class="inline-flex items-center rounded-full border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground border-white/80 bg-white/10 backdrop-blur-sm px-4 py-1.5 text-base w-fit"
                  >
                    <span class="text-white font-medium">Ready to Apply?</span>
                  </div>
                  <h2
                    class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center"
                  >
                    Find Your Perfect Ausbildung Match
                  </h2>
                  <p
                    class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                  >
                    Browse hundreds of verified Ausbildung positions from German
                    employers actively hiring international students. Start your
                    application journey today.
                  </p>
                  <div class="flex flex-col sm:flex-row items-center gap-3">
                    <a
                      href="{{ route('front.jobs') }}"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Browse Jobs</a
                    ><a
                      href="{{ route('front.tools.eligibility-checker') }}"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Check Eligibility</a
                    >
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!--$--><!--$-->
      </main>

@push('scripts')
<script src="{{ asset('assets/js/frontoffice/faq-interactive.js') }}"></script>
@endpush
@endsection
