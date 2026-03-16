@extends('frontoffice.layouts.app')

@section('title', 'German for Ausbildung: A1 to B1 in 6 Months (2026 Guide) | GoAusbildung')

@section('meta')
    <meta name="description"
        content="B1 German is required for Ausbildung. See exact timelines (A1→B2), accepted certifications (Goethe, telc), costs, and free learning resources. Start today.">
    <meta name="keywords"
        content="german language ausbildung, B1 german requirement, german for vocational training, goethe certificate ausbildung, telc german exam, learn german for ausbildung">
    <meta property="og:title" content="German for Ausbildung: A1 to B1 in 6 Months (2026 Guide)">
    <meta property="og:description"
        content="B1 German is required for Ausbildung. See exact timelines (A1→B2), accepted certifications (Goethe, telc), costs, and free learning resources. Start today.">
@endsection

@section('content')
        <div class="flex flex-col">
          <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44"
          >
            <img
              alt="Rhine Valley in autumn - scenic German river landscape with vineyards"
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
              src="{{ asset('assets/_next/rhine-valley-hero-autumn77a4.jpeg') }}"
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
                    aria-label="Language Guide"
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
                      class="lucide lucide-languages h-4 w-4 mr-2"
                      aria-hidden="true"
                    >
                      <path d="m5 8 6 6"></path>
                      <path d="m4 14 6-6 2-3"></path>
                      <path d="M2 5h12"></path>
                      <path d="M7 2h1"></path>
                      <path d="m22 22-5-10-5 10"></path>
                      <path d="M14 18h6"></path></svg
                    >Language Guide
                  </div>
                </div>
                <h1
                  class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200"
                >
                  German Language Requirements
                </h1>
                <p
                  class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300"
                >
                  Everything you need to know about German language proficiency
                  levels, certification, and preparation for your vocational
                  training in Germany.
                </p>
                <nav
                  class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                  aria-label="Primary navigation"
                >
                  <a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                    aria-label="Start Learning"
                    href="dashboard/german.html"
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
                        class="lucide lucide-graduation-cap w-5 h-5 mr-2"
                      >
                        <path
                          d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"
                        ></path>
                        <path d="M22 10v6"></path>
                        <path
                          d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"
                        ></path></svg></span
                    ><span>Start Learning</span></a
                  ><a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                    aria-label="View Requirements"
                    href="#language-levels"
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
                        class="lucide lucide-book-open w-5 h-5 mr-2"
                      >
                        <path d="M12 7v14"></path>
                        <path
                          d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"
                        ></path></svg></span
                    ><span>View Requirements</span></a
                  >
                </nav>
              </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
              <p
                class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full"
              >
                Rhine Valley, Rhineland-Palatinate
              </p>
            </div>
          </section>
          <section id="language-levels" class="py-16">
            <div class="container px-4 md:px-6">
              <div class="grid md:grid-cols-3 gap-8 lg:gap-16 mb-16">
                <div class="md:col-span-2 space-y-8">
                  <div>
                    <h2
                      class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                    >
                      German for Ausbildung
                    </h2>
                    <p class="mb-4">
                      German language proficiency is a fundamental requirement
                      for Ausbildung programs. Since vocational training
                      combines workplace learning with vocational school
                      education, both components are conducted entirely in
                      German.
                    </p>
                    <p class="mb-4">
                      The minimum requirement for most Ausbildung programs is B1
                      level proficiency according to the Common European
                      Framework of Reference for Languages (CEFR). However, some
                      sectors like healthcare and nursing often prefer or
                      require B2 level.
                    </p>
                    <p>
                      At GoAusbildung, we&#x27;ve developed specialized German
                      language courses designed specifically for Ausbildung
                      applicants. Our curriculum focuses on vocational
                      vocabulary and practical communication relevant to your
                      chosen sector.
                    </p>
                  </div>
                  <div>
                    <h2
                      class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                    >
                      Understanding Language Levels
                    </h2>
                    <div class="space-y-4">
                      <div
                        class="p-4 rounded-lg border relative bg-red-100 text-red-600"
                      >
                        <div class="flex items-start gap-4">
                          <div
                            class="bg-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold flex-shrink-0"
                          >
                            A1
                          </div>
                          <div>
                            <h3
                              class="tracking-tight font-semibold sm:text-lg text-secondary text-lg"
                            >
                              A1<!-- -->
                              -
                              <!-- -->Beginner
                            </h3>
                            <p class="text-sm mb-1">
                              Basic introduction to German with simple phrases
                              and vocabulary.
                            </p>
                            <p class="text-xs">
                              Typical duration:
                              <!-- -->6-8 weeks
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="p-4 rounded-lg border relative bg-orange-100 text-orange-600"
                      >
                        <div class="flex items-start gap-4">
                          <div
                            class="bg-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold flex-shrink-0"
                          >
                            A2
                          </div>
                          <div>
                            <h3
                              class="tracking-tight font-semibold sm:text-lg text-secondary text-lg"
                            >
                              A2<!-- -->
                              -
                              <!-- -->Elementary
                            </h3>
                            <p class="text-sm mb-1">
                              Simple communication about familiar topics with
                              basic grammar.
                            </p>
                            <p class="text-xs">
                              Typical duration:
                              <!-- -->6-8 weeks after A1
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="p-4 rounded-lg border relative bg-green-100 text-green-600"
                      >
                        <div class="flex items-start gap-4">
                          <div
                            class="bg-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold flex-shrink-0"
                          >
                            B1
                          </div>
                          <div>
                            <h3
                              class="tracking-tight font-semibold sm:text-lg text-secondary text-lg"
                            >
                              B1<!-- -->
                              -
                              <!-- -->Intermediate
                              <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 ml-2 bg-secondary/10 border-secondary/20"
                              >
                                <span class="text-secondary font-medium text-xs"
                                  >Ausbildung Ready</span
                                >
                              </div>
                            </h3>
                            <p class="text-sm mb-1">
                              Functional German for work and training
                              environments.
                            </p>
                            <p class="text-xs">
                              Typical duration:
                              <!-- -->8-10 weeks after A2
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="p-4 rounded-lg border relative bg-beige text-secondary"
                      >
                        <div
                          class="absolute -top-3 -right-3 bg-primary px-3 py-1 text-primary-foreground text-xs rounded-full"
                        >
                          Recommended
                        </div>
                        <div class="flex items-start gap-4">
                          <div
                            class="bg-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold flex-shrink-0"
                          >
                            B2
                          </div>
                          <div>
                            <h3
                              class="tracking-tight font-semibold sm:text-lg text-secondary text-lg"
                            >
                              B2<!-- -->
                              -
                              <!-- -->Upper Intermediate
                              <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 ml-2 bg-secondary/10 border-secondary/20"
                              >
                                <span class="text-secondary font-medium text-xs"
                                  >Preferred</span
                                >
                              </div>
                            </h3>
                            <p class="text-sm mb-1">
                              More fluent communication required for healthcare
                              and specialized fields.
                            </p>
                            <p class="text-xs">
                              Typical duration:
                              <!-- -->8-10 weeks after B1
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bg-card border border-primary/10 rounded-xl p-6">
                    <div class="flex items-start gap-4">
                      <div class="bg-primary text-white p-2 rounded-lg">
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
                          class="lucide lucide-languages h-5 w-5"
                        >
                          <path d="m5 8 6 6"></path>
                          <path d="m4 14 6-6 2-3"></path>
                          <path d="M2 5h12"></path>
                          <path d="M7 2h1"></path>
                          <path d="m22 22-5-10-5 10"></path>
                          <path d="M14 18h6"></path>
                        </svg>
                      </div>
                      <div class="flex-1">
                        <h3
                          class="tracking-tight font-semibold sm:text-lg text-secondary text-base mb-1"
                        >
                          Practice German Interactively
                        </h3>
                        <p class="text-sm text-muted-foreground mb-3">
                          Complement your learning with our free interactive
                          German conversation tool. Practice real-world
                          scenarios and get instant feedback on your
                          pronunciation and grammar.
                        </p>
                        <div class="flex items-center gap-4">
                          <div
                            class="text-sm font-medium text-primary hover:underline inline-flex items-center gap-1 opacity-50 pointer-events-none"
                          >
                            Try Interactive German Training<svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-arrow-right h-3 w-3"
                            >
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                          </div>
                          <span class="text-xs text-muted-foreground"
                            >15,000+ learners</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <a
                    href="https://bookgermantest.com/?ref=goausbildung"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="block bg-gradient-to-r from-slate-800 to-slate-900 border border-slate-700/50 rounded-xl p-6 hover:shadow-lg transition-all group"
                    ><div class="flex items-start gap-4">
                      <div
                        class="bg-amber-500/20 text-amber-400 p-2 rounded-lg"
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
                          class="lucide lucide-calendar-check h-5 w-5"
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
                          <path d="m9 16 2 2 4-4"></path>
                        </svg>
                      </div>
                      <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                          <h3
                            class="tracking-tight font-semibold sm:text-lg text-base text-white"
                          >
                            Book Your German Exam
                          </h3>
                          <div
                            class="inline-flex items-center rounded-full border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[10px] px-1.5 py-0 border-amber-500/50 text-amber-400"
                          >
                            FREE TOOL
                          </div>
                        </div>
                        <p class="text-sm text-slate-400 mb-3">
                          Find available Goethe, ÖSD, TELC &amp; TestDaF exam
                          slots across India. Get instant alerts when slots
                          open.
                        </p>
                        <span
                          class="text-sm font-medium text-amber-400 group-hover:underline inline-flex items-center gap-1"
                          >Find Exam Slots<svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-external-link h-3 w-3"
                          >
                            <path d="M15 3h6v6"></path>
                            <path d="M10 14 21 3"></path>
                            <path
                              d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"
                            ></path></svg
                        ></span>
                      </div></div
                  ></a>
                  <div>
                    <h2
                      class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                    >
                      Our Language Training Approach
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                      <div
                        class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                      >
                        <div class="p-6">
                          <div class="mb-3">
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
                              class="lucide lucide-clock h-8 w-8 text-primary"
                            >
                              <circle cx="12" cy="12" r="10"></circle>
                              <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                          </div>
                          <h3
                            class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-2"
                          >
                            Fast-Track Learning
                          </h3>
                          <p class="text-sm text-muted-foreground">
                            Our intensive courses can take you from zero to B1
                            proficiency in 5-6 months with focused study. Faster
                            than traditional language schools.
                          </p>
                        </div>
                      </div>
                      <div
                        class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                      >
                        <div class="p-6">
                          <div class="mb-3">
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
                              class="lucide lucide-book-open h-8 w-8 text-primary"
                            >
                              <path d="M12 7v14"></path>
                              <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"
                              ></path>
                            </svg>
                          </div>
                          <h3
                            class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-2"
                          >
                            Sector-Specific Content
                          </h3>
                          <p class="text-sm text-muted-foreground">
                            We incorporate specialized vocabulary and scenarios
                            relevant to your chosen Ausbildung sector for more
                            practical preparation.
                          </p>
                        </div>
                      </div>
                      <div
                        class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                      >
                        <div class="p-6">
                          <div class="mb-3">
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
                              class="lucide lucide-building h-8 w-8 text-primary"
                            >
                              <rect
                                width="16"
                                height="20"
                                x="4"
                                y="2"
                                rx="2"
                                ry="2"
                              ></rect>
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
                          <h3
                            class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-2"
                          >
                            Certified Instructors
                          </h3>
                          <p class="text-sm text-muted-foreground">
                            Learn from qualified German language teachers with
                            experience preparing students for officially
                            recognized exams like Goethe and telc.
                          </p>
                        </div>
                      </div>
                      <div
                        class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                      >
                        <div class="p-6">
                          <div class="mb-3">
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
                              class="lucide lucide-users h-8 w-8 text-primary"
                            >
                              <path
                                d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                              ></path>
                              <circle cx="9" cy="7" r="4"></circle>
                              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                          </div>
                          <h3
                            class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-2"
                          >
                            Small Group Classes
                          </h3>
                          <p class="text-sm text-muted-foreground">
                            With maximum 10 students per batch, you&#x27;ll
                            receive personalized attention and more speaking
                            practice in our interactive sessions.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h2
                      class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                    >
                      Student Success Stories
                    </h2>
                    <div
                      class="bg-card border border-primary/10 rounded-lg p-6"
                    >
                      <div class="flex gap-4 items-start">
                        <div
                          class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center text-xl font-bold flex-shrink-0"
                        >
                          S
                        </div>
                        <div>
                          <h3
                            class="tracking-tight font-semibold sm:text-lg text-secondary text-base mb-1"
                          >
                            Sofia from Brazil
                          </h3>
                          <p class="text-sm text-muted-foreground italic mb-2">
                            &quot;I started with no German knowledge and reached
                            B1 in just 5 months with GoAusbildung&#x27;s
                            program. The sector-specific vocabulary for
                            healthcare helped me ace my interviews with German
                            hospitals.&quot;
                          </p>
                          <p class="text-xs">
                            <span class="font-medium">Achievement:</span>
                            Reached B1 in 5 months, now working as a nursing
                            trainee in Munich
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="space-y-6 sticky top-24">
                  <div class="bg-card rounded-xl border border-primary/10 p-6">
                    <h3
                      class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-4"
                    >
                      Language Programs
                    </h3>
                    <div class="space-y-6">
                      <div
                        class="bg-cream border-primary/20 border rounded-lg p-4"
                      >
                        <h4
                          class="tracking-tight font-semibold sm:text-base text-secondary text-base mb-2 flex items-center"
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
                            class="lucide lucide-languages h-4 w-4 mr-1.5"
                          >
                            <path d="m5 8 6 6"></path>
                            <path d="m4 14 6-6 2-3"></path>
                            <path d="M2 5h12"></path>
                            <path d="M7 2h1"></path>
                            <path d="m22 22-5-10-5 10"></path>
                            <path d="M14 18h6"></path></svg
                          >Zero to B1 Complete Package
                        </h4>
                        <ul class="space-y-2 mb-3">
                          <li class="flex items-start gap-2 text-sm">
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
                              class="lucide lucide-check h-4 w-4 text-green-600 shrink-0 mt-0.5"
                            >
                              <path d="M20 6 9 17l-5-5"></path></svg
                            ><span>5-6 month intensive program</span>
                          </li>
                          <li class="flex items-start gap-2 text-sm">
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
                              class="lucide lucide-check h-4 w-4 text-green-600 shrink-0 mt-0.5"
                            >
                              <path d="M20 6 9 17l-5-5"></path></svg
                            ><span>Online and classroom options</span>
                          </li>
                          <li class="flex items-start gap-2 text-sm">
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
                              class="lucide lucide-check h-4 w-4 text-green-600 shrink-0 mt-0.5"
                            >
                              <path d="M20 6 9 17l-5-5"></path></svg
                            ><span>Exam preparation included</span>
                          </li>
                          <li class="flex items-start gap-2 text-sm">
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
                              class="lucide lucide-check h-4 w-4 text-green-600 shrink-0 mt-0.5"
                            >
                              <path d="M20 6 9 17l-5-5"></path></svg
                            ><span>Job interview preparation</span>
                          </li>
                        </ul>
                        <a
                          href="contactcee9.html?program=zero-to-b1"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full"
                          >Learn More</a
                        >
                      </div>
                      <div
                        class="bg-card border border-primary/10 rounded-lg p-4"
                      >
                        <h4
                          class="tracking-tight font-semibold sm:text-base text-secondary text-base mb-2 flex items-center"
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
                            class="lucide lucide-award h-4 w-4 mr-1.5"
                          >
                            <path
                              d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"
                            ></path>
                            <circle cx="12" cy="8" r="6"></circle></svg
                          >B1 to B2 Advanced Program
                        </h4>
                        <ul class="space-y-2 mb-3">
                          <li class="flex items-start gap-2 text-sm">
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
                              class="lucide lucide-check h-4 w-4 text-green-600 shrink-0 mt-0.5"
                            >
                              <path d="M20 6 9 17l-5-5"></path></svg
                            ><span>3-4 month specialist course</span>
                          </li>
                          <li class="flex items-start gap-2 text-sm">
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
                              class="lucide lucide-check h-4 w-4 text-green-600 shrink-0 mt-0.5"
                            >
                              <path d="M20 6 9 17l-5-5"></path></svg
                            ><span>For healthcare and specialized sectors</span>
                          </li>
                          <li class="flex items-start gap-2 text-sm">
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
                              class="lucide lucide-check h-4 w-4 text-green-600 shrink-0 mt-0.5"
                            >
                              <path d="M20 6 9 17l-5-5"></path></svg
                            ><span>Exam preparation included</span>
                          </li>
                        </ul>
                        <a
                          href="contact4e70.html?program=b1-to-b2"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full"
                          >Learn More</a
                        >
                      </div>
                      <div class="border-t border-primary/10 pt-4">
                        <h4
                          class="tracking-tight font-semibold sm:text-base text-secondary text-base mb-2"
                        >
                          Official Exam Registration
                        </h4>
                        <p class="text-xs text-muted-foreground mb-3">
                          We help you register for Goethe-Institut or telc exams
                          and prepare you specifically for the test format.
                        </p>
                        <a
                          href="contact3849.html?inquiry=exam-registration"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full"
                          >Exam Information</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="bg-card rounded-xl border border-primary/10 p-6">
                    <h3
                      class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-4"
                    >
                      Language Resources
                    </h3>
                    <div class="space-y-4">
                      <div>
                        <h4
                          class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2"
                        >
                          Practice Materials
                        </h4>
                        <ul class="space-y-1.5 text-sm">
                          <li class="flex items-start gap-2">
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
                              class="lucide lucide-book-open h-4 w-4 text-primary shrink-0 mt-0.5"
                            >
                              <path d="M12 7v14"></path>
                              <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"
                              ></path></svg
                            ><a
                              href="https://www.goethe.de/en/spr/kup/prf/prf.html"
                              target="_blank"
                              rel="noopener noreferrer"
                              class="text-primary hover:underline"
                              >Goethe-Institut Exam Samples</a
                            >
                          </li>
                          <li class="flex items-start gap-2">
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
                              class="lucide lucide-book-open h-4 w-4 text-primary shrink-0 mt-0.5"
                            >
                              <path d="M12 7v14"></path>
                              <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"
                              ></path></svg
                            ><a
                              href="https://www.telc.net/en/candidates.html"
                              target="_blank"
                              rel="noopener noreferrer"
                              class="text-primary hover:underline"
                              >telc Practice Tests</a
                            >
                          </li>
                        </ul>
                      </div>
                      <div class="border-t border-primary/10 pt-4">
                        <h4
                          class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2"
                        >
                          Language Requirements by Sector
                        </h4>
                        <div class="space-y-2 text-sm">
                          <div class="flex justify-between">
                            <span>IT &amp; Technology:</span>
                            <div
                              class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-cream border-primary/10"
                            >
                              <span class="text-primary font-medium text-xs"
                                >B1</span
                              >
                            </div>
                          </div>
                          <div class="flex justify-between">
                            <span>Business &amp; Admin:</span>
                            <div
                              class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-cream border-primary/10"
                            >
                              <span class="text-primary font-medium text-xs"
                                >B1-B2</span
                              >
                            </div>
                          </div>
                          <div class="flex justify-between">
                            <span>Healthcare:</span>
                            <div
                              class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-cream border-primary/10"
                            >
                              <span class="text-primary font-medium text-xs"
                                >B2</span
                              >
                            </div>
                          </div>
                          <div class="flex justify-between">
                            <span>Engineering:</span>
                            <div
                              class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-cream border-primary/10"
                            >
                              <span class="text-primary font-medium text-xs"
                                >B1-B2</span
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-t border-primary/10 pt-4">
                        <h4
                          class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2"
                        >
                          Self-Study Tips
                        </h4>
                        <ul class="space-y-1.5 text-xs text-muted-foreground">
                          <li>
                            Practice with language exchange partners daily
                          </li>
                          <li>Use spaced repetition apps for vocabulary</li>
                          <li>Watch German TV shows with subtitles</li>
                          <li>Read German news at your level</li>
                        </ul>
                      </div>
                    </div>
                  </div>
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
                    "name": "What German level do I need for Ausbildung?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Most Ausbildung programs require B1 level German proficiency (intermediate). However, healthcare and nursing fields typically require B2 level. Some technical sectors may accept A2 initially but require B1 before the training starts. It's strongly recommended to reach B1 before applying to maximize your chances of acceptance."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "How long does it take to reach B1 German from zero?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "With intensive study (20-25 hours per week), you can reach B1 level in 6-8 months. A1 takes about 6-8 weeks, A2 another 6-8 weeks, and B1 requires 8-10 weeks after A2. Our fast-track programs can help you achieve B1 in as little as 5-6 months with dedicated study."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Which German certificates are accepted for Ausbildung?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "German employers and visa authorities accept certificates from Goethe-Institut, telc, and ÖSD (Austrian German Language Diploma). The Goethe-Zertifikat B1 is the most widely recognized. TestDaF is typically for university studies, not Ausbildung. Make sure your certificate is not older than 2 years when applying."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "How much does German language training cost?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Costs vary by country and learning method. In-person courses typically cost €1,500-3,000 for A1 to B1. Online courses can be cheaper at €500-1,500. Self-study with apps and resources can be nearly free but takes longer. Our platform offers free German practice tools to supplement your formal learning."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Can I learn German while already in Germany?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Yes, but it's recommended to reach at least A2-B1 before arriving. You'll need B1 for your visa application in most cases. Once in Germany, you can continue improving through immersion, evening classes, or integration courses (Integrationskurs) which may be partially funded."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "What's the difference between B1 and B2 German?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "B1 (intermediate) allows you to handle most everyday and work situations. B2 (upper-intermediate) provides fluency for complex discussions and specialized vocabulary. Healthcare, nursing, and some technical fields require B2 due to the need for precise communication. B2 typically takes 3-4 additional months after B1."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Are online German courses accepted for visa applications?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Yes, as long as you obtain a recognized certificate from Goethe-Institut, telc, or ÖSD. The course format doesn't matter - only the final certification exam matters. You can study online and then take the official exam at an authorized test center in your country."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Do I need to speak German at the workplace during Ausbildung?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Yes, Ausbildung is conducted entirely in German. You'll attend vocational school (Berufsschule) 1-2 days per week where all instruction is in German. At your training company, you'll communicate with colleagues, supervisors, and customers in German. Strong German skills directly impact your success."
                    }
                  }
                ]
              }
            </script>
            <div class="container px-4 md:px-6">
              <div class="text-center mb-8 md:mb-12">
                <div
                  class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4"
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
                    class="lucide lucide-circle-help h-4 w-4"
                  >
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <path d="M12 17h.01"></path></svg
                  ><span>Common Questions</span>
                </div>
                <h2
                  class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-3"
                >
                  German Language FAQs
                </h2>
                <p class="text-muted-foreground max-w-2xl mx-auto">
                  Common questions about German language requirements for
                  Ausbildung programs
                </p>
              </div>
              <div class="max-w-3xl mx-auto space-y-4">
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="true"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >What German level do I need for Ausbildung?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200 rotate-180"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-[1000px] opacity-100"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      Most Ausbildung programs require B1 level German
                      proficiency (intermediate). However, healthcare and
                      nursing fields typically require B2 level. Some technical
                      sectors may accept A2 initially but require B1 before the
                      training starts. It&#x27;s strongly recommended to reach
                      B1 before applying to maximize your chances of acceptance.
                    </div>
                  </div>
                </div>
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="false"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >How long does it take to reach B1 German from zero?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      With intensive study (20-25 hours per week), you can reach
                      B1 level in 6-8 months. A1 takes about 6-8 weeks, A2
                      another 6-8 weeks, and B1 requires 8-10 weeks after A2.
                      Our fast-track programs can help you achieve B1 in as
                      little as 5-6 months with dedicated study.
                    </div>
                  </div>
                </div>
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="false"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >Which German certificates are accepted for
                      Ausbildung?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      German employers and visa authorities accept certificates
                      from Goethe-Institut, telc, and ÖSD (Austrian German
                      Language Diploma). The Goethe-Zertifikat B1 is the most
                      widely recognized. TestDaF is typically for university
                      studies, not Ausbildung. Make sure your certificate is not
                      older than 2 years when applying.
                    </div>
                  </div>
                </div>
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="false"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >How much does German language training cost?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      Costs vary by country and learning method. In-person
                      courses typically cost €1,500-3,000 for A1 to B1. Online
                      courses can be cheaper at €500-1,500. Self-study with apps
                      and resources can be nearly free but takes longer. Our
                      platform offers free German practice tools to supplement
                      your formal learning.
                    </div>
                  </div>
                </div>
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="false"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >Can I learn German while already in Germany?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      Yes, but it&#x27;s recommended to reach at least A2-B1
                      before arriving. You&#x27;ll need B1 for your visa
                      application in most cases. Once in Germany, you can
                      continue improving through immersion, evening classes, or
                      integration courses (Integrationskurs) which may be
                      partially funded.
                    </div>
                  </div>
                </div>
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="false"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >What&#x27;s the difference between B1 and B2
                      German?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      B1 (intermediate) allows you to handle most everyday and
                      work situations. B2 (upper-intermediate) provides fluency
                      for complex discussions and specialized vocabulary.
                      Healthcare, nursing, and some technical fields require B2
                      due to the need for precise communication. B2 typically
                      takes 3-4 additional months after B1.
                    </div>
                  </div>
                </div>
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="false"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >Are online German courses accepted for visa
                      applications?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      Yes, as long as you obtain a recognized certificate from
                      Goethe-Institut, telc, or ÖSD. The course format
                      doesn&#x27;t matter - only the final certification exam
                      matters. You can study online and then take the official
                      exam at an authorized test center in your country.
                    </div>
                  </div>
                </div>
                <div
                  class="rounded-xl border border-border bg-card overflow-hidden transition-all duration-200 hover:border-primary/20 hover:shadow-sm"
                  itemscope=""
                  itemprop="mainEntity"
                  itemtype="https://schema.org/Question"
                >
                  <button
                    class="w-full flex items-center justify-between p-5 text-left hover:bg-muted/30 transition-colors"
                    aria-expanded="false"
                  >
                    <span
                      class="font-semibold text-foreground pr-4"
                      itemProp="name"
                      >Do I need to speak German at the workplace during
                      Ausbildung?</span
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
                      class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                    >
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
                  <div
                    class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                    itemscope=""
                    itemprop="acceptedAnswer"
                    itemtype="https://schema.org/Answer"
                  >
                    <div
                      class="px-5 pb-5 text-muted-foreground leading-relaxed"
                      itemprop="text"
                    >
                      Yes, Ausbildung is conducted entirely in German.
                      You&#x27;ll attend vocational school (Berufsschule) 1-2
                      days per week where all instruction is in German. At your
                      training company, you&#x27;ll communicate with colleagues,
                      supervisors, and customers in German. Strong German skills
                      directly impact your success.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-12 md:py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
              <div class="text-center mb-8 md:mb-10">
                <h2
                  class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-2"
                >
                  Continue Your Journey
                </h2>
                <p class="text-muted-foreground max-w-2xl mx-auto">
                  Explore related resources and next steps for your Ausbildung
                  preparation
                </p>
              </div>
              <div class="grid gap-4 md:gap-6 md:grid-cols-2 lg:grid-cols-3">
                <a
                  class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                  href="dashboard/german.html"
                  ><div class="flex items-start gap-4">
                    <div
                      class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors"
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
                        class="lucide lucide-languages h-5 w-5"
                      >
                        <path d="m5 8 6 6"></path>
                        <path d="m4 14 6-6 2-3"></path>
                        <path d="M2 5h12"></path>
                        <path d="M7 2h1"></path>
                        <path d="m22 22-5-10-5 10"></path>
                        <path d="M14 18h6"></path>
                      </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                      <h3
                        class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1"
                      >
                        Practice German Free
                      </h3>
                      <p class="text-sm text-muted-foreground line-clamp-2">
                        Interactive tutor, vocabulary flashcards, and
                        conversation practice
                      </p>
                    </div>
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
                      class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></div></a
                ><a
                  class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                  href="tools/language-proficiency-calculator.html"
                  ><div class="flex items-start gap-4">
                    <div
                      class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors"
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
                        class="lucide lucide-calculator h-5 w-5"
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
                        <path d="M8 18h.01"></path>
                      </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                      <h3
                        class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1"
                      >
                        Calculate Learning Timeline
                      </h3>
                      <p class="text-sm text-muted-foreground line-clamp-2">
                        See how long it will take to reach your target German
                        level
                      </p>
                    </div>
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
                      class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></div></a
                ><a
                  class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                  href="visa.html"
                  ><div class="flex items-start gap-4">
                    <div
                      class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors"
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
                        class="lucide lucide-file-text h-5 w-5"
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
                    <div class="flex-1 min-w-0">
                      <h3
                        class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1"
                      >
                        Visa Requirements
                      </h3>
                      <p class="text-sm text-muted-foreground line-clamp-2">
                        Language proof and other documents needed for your visa
                      </p>
                    </div>
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
                      class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></div></a
                ><a
                  class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                  href="sectors.html"
                  ><div class="flex items-start gap-4">
                    <div
                      class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors"
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
                        class="lucide lucide-briefcase h-5 w-5"
                      >
                        <path
                          d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"
                        ></path>
                        <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                      </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                      <h3
                        class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1"
                      >
                        Browse by Sector
                      </h3>
                      <p class="text-sm text-muted-foreground line-clamp-2">
                        See German requirements for IT, healthcare, engineering
                        &amp; more
                      </p>
                    </div>
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
                      class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></div></a
                ><a
                  class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                  href="nursing-germany.html"
                  ><div class="flex items-start gap-4">
                    <div
                      class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors"
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
                        class="lucide lucide-heart h-5 w-5"
                      >
                        <path
                          d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                        ></path>
                      </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                      <h3
                        class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1"
                      >
                        Nursing in Germany
                      </h3>
                      <p class="text-sm text-muted-foreground line-clamp-2">
                        B2 requirement and pathway for healthcare careers
                      </p>
                    </div>
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
                      class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></div></a
                ><a
                  class="group flex flex-col p-5 md:p-6 rounded-xl border border-border bg-card hover:border-primary/30 hover:shadow-md transition-all duration-200"
                  href="application.html"
                  ><div class="flex items-start gap-4">
                    <div
                      class="p-2.5 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors"
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
                        class="lucide lucide-map-pin h-5 w-5"
                      >
                        <path
                          d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"
                        ></path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                      <h3
                        class="font-semibold text-foreground group-hover:text-primary transition-colors mb-1"
                      >
                        Application Process
                      </h3>
                      <p class="text-sm text-muted-foreground line-clamp-2">
                        Next step: How to apply for Ausbildung positions
                      </p>
                    </div>
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
                      class="lucide lucide-arrow-right h-4 w-4 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all flex-shrink-0 mt-1"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></div
                ></a>
              </div>
            </div>
          </section>
          <div class="container mx-auto px-4 lg:px-6 my-16">
            <section
              class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg"
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
                  <h2
                    class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center"
                  >
                    Have B1 German? Start Applying Today
                  </h2>
                  <p
                    class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                  >
                    Browse 60,000+ positions and apply with smart application
                    kits. Get German cover letters generated instantly for each
                    role.
                  </p>
                  <div class="flex flex-col sm:flex-row items-center gap-3">
                    <a
                      href="jobs.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Browse 60K+ Jobs</a
                    ><a
                      href="dashboard/german.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Practice German First</a
                    >
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
@endsection
