@extends('frontoffice.layouts.app')

@section('title', 'Why Choose Ausbildung? Earn €1,300/Month + 98% Job Placement | GoAusbildung')

@section('meta')
    <meta
    name="description"
    content="Ausbildung benefits: earn €850-1,300 monthly while training, no tuition fees, 98% job placement rate, path to German PR. Compare vs university and other options."
    />
    <meta
    name="keywords"
    content="why ausbildung,ausbildung benefits,ausbildung vs university,earn while learning germany,ausbildung advantages,vocational training benefits"
    />
    <meta name="pinterest:pinnable" content="true" />
    <meta
    name="pinterest:image"
    content="https://images.goausbildung.com/og-images/default-og.png"
    />
    <meta
    name="linkedin:image"
    content="https://images.goausbildung.com/og-images/default-og.png"
    />
    <link rel="canonical" href="why-ausbildung.html" />
    <meta
    property="og:title"
    content="Why Choose Ausbildung? Earn €1,300/Month + 98% Job Placement"
    />
    <meta
    property="og:description"
    content="Ausbildung benefits: earn €850-1,300 monthly while training, no tuition fees, 98% job placement rate, path to German PR. Compare vs university and other options."
    />
    <meta property="og:url" content="https://goausbildung.com/why-ausbildung" />
    <meta property="og:site_name" content="GoAusbildung" />
    <meta property="og:locale" content="en_US" />
    <meta
    property="og:image"
    content="https://images.goausbildung.com/og-images/why-ausbildung.png"
    />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta
    property="og:image:alt"
    content="Why Choose Ausbildung? Earn €1,300/Month + 98% Job Placement"
    />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@goausbildung" />
    <meta name="twitter:creator" content="@goausbildung" />
    <meta
    name="twitter:title"
    content="Why Choose Ausbildung? Earn €1,300/Month + 98% Job Placement"
    />
    <meta
    name="twitter:description"
    content="Ausbildung benefits: earn €850-1,300 monthly while training, no tuition fees, 98% job placement rate, path to German PR. Compare vs university and other options."
    />
    <meta
    name="twitter:image"
    content="https://images.goausbildung.com/og-images/default-og.png"
    />
@endsection

@section('content')
        <div class="flex flex-col">
          <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44"
          >
            <img
              alt="Heidelberg Castle in autumn - historic German landmark representing education and career"
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
              src="{{ asset('assets/_next/heidelberg-castle-hero-autumn35bd.jpeg') }}"
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
                    aria-label="Why Ausbildung"
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
                      class="lucide lucide-award h-4 w-4 mr-2"
                      aria-hidden="true"
                    >
                      <path
                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"
                      ></path>
                      <circle cx="12" cy="8" r="6"></circle></svg
                    >Why Ausbildung
                  </div>
                </div>
                <h1
                  class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200"
                >
                  Why Choose Ausbildung Over University Education?
                </h1>
                <p
                  class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300"
                >
                  Discover why Germany&#x27;s vocational training system offers
                  a compelling alternative to traditional university education
                  with practical skills, financial stability, and excellent
                  career prospects.
                </p>
                <nav
                  class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                  aria-label="Primary navigation"
                >
                  <a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                    aria-label="Explore Benefits"
                    href="#key-benefits"
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
                        class="lucide lucide-trending-up w-5 h-5 mr-2"
                      >
                        <polyline
                          points="22 7 13.5 15.5 8.5 10.5 2 17"
                        ></polyline>
                        <polyline
                          points="16 7 22 7 22 13"
                        ></polyline></svg></span
                    ><span>Explore Benefits</span></a
                  ><a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                    aria-label="Find Programs"
                    href="{{ route('front.sectors') }}"
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
                    ><span>Find Programs</span></a
                  >
                </nav>
              </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
              <p
                class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full"
              >
                Heidelberg Castle, Baden-Württemberg
              </p>
            </div>
          </section>
          <section id="key-benefits" class="py-16">
            <div class="container px-4 md:px-6">
              <div class="flex flex-col gap-16">
                <div class="grid md:grid-cols-2 gap-10 items-center">
                  <div
                    class="relative rounded-xl overflow-hidden h-[350px] shadow-xl"
                  >
                    <img
                      alt="Apprentice earning while learning in a workshop"
                      loading="lazy"
                      decoding="async"
                      data-nimg="fill"
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
                      sizes="100vw"
                      src="{{ asset('assets/_next/earn-while-learn6466.jpeg') }}"
                    />
                    <div
                      class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4"
                    >
                      <p class="text-white text-sm">
                        Ausbildung trainees earn a monthly salary while gaining
                        valuable practical skills in their chosen profession.
                      </p>
                    </div>
                  </div>
                  <div>
                    <div
                      class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-primary/10 border-primary/20"
                    >
                      <span class="text-primary font-medium"
                        >Core Advantages</span
                      >
                    </div>
                    <h2
                      class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                    >
                      The &quot;Earn While You Learn&quot; Approach
                    </h2>
                    <p class="mb-4 text-muted-foreground">
                      Unlike traditional university education where students
                      often accumulate debt, Ausbildung trainees receive a
                      monthly salary throughout their training period while
                      gaining practical skills and theoretical knowledge.
                    </p>
                    <p class="mb-6 text-muted-foreground">
                      This unique approach provides financial independence while
                      simultaneously building career-ready expertise, making it
                      an increasingly attractive option for those seeking a
                      direct path to professional success.
                    </p>
                    <div class="grid grid-cols-2 gap-5 mb-6">
                      <div
                        class="p-4 bg-primary/5 border border-primary/10 rounded-lg"
                      >
                        <h4
                          class="tracking-tight font-semibold text-sm sm:text-base text-primary mb-1"
                        >
                          €1,100-1,500
                        </h4>
                        <p class="text-sm text-muted-foreground">
                          Monthly stipend range (2026)
                        </p>
                      </div>
                      <div
                        class="p-4 bg-primary/5 border border-primary/10 rounded-lg"
                      >
                        <h4
                          class="tracking-tight font-semibold text-sm sm:text-base text-primary mb-1"
                        >
                          €0
                        </h4>
                        <p class="text-sm text-muted-foreground">
                          Tuition costs
                        </p>
                      </div>
                    </div>
                    <p
                      class="text-sm text-muted-foreground p-3 bg-primary/5 rounded-lg"
                    >
                      <strong>Salary progression:</strong> Training compensation
                      increases each year, reflecting the trainee&#x27;s growing
                      skills and contributions to the employer. Many sectors
                      also offer performance bonuses and additional benefits.
                    </p>
                  </div>
                </div>
                <div>
                  <div class="max-w-[800px] mx-auto text-center mb-10">
                    <h2
                      class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                    >
                      Key Benefits of Choosing Ausbildung
                    </h2>
                    <p class="text-lg text-muted-foreground">
                      The German vocational training system offers numerous
                      advantages that make it an excellent alternative to
                      traditional university education.
                    </p>
                  </div>
                  <div class="grid md:grid-cols-3 gap-6">
                    <div
                      class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                    >
                      <div class="p-6">
                        <div
                          class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4"
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
                            class="lucide lucide-briefcase text-white h-6 w-6"
                          >
                            <path
                              d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"
                            ></path>
                            <rect
                              width="20"
                              height="14"
                              x="2"
                              y="6"
                              rx="2"
                            ></rect>
                          </svg>
                        </div>
                        <h3
                          class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3"
                        >
                          Practical Skill Development
                        </h3>
                        <p class="text-muted-foreground mb-4">
                          Gain real-world, hands-on experience that employers
                          value more than theoretical knowledge alone.
                        </p>
                        <ul class="space-y-2">
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Job-specific technical skills</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Professional workplace competencies</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Industry-specific knowledge</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Learning directly from experts</span
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                    >
                      <div class="p-6">
                        <div
                          class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4"
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
                            class="lucide lucide-users text-white h-6 w-6"
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
                          class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3"
                        >
                          Job Security
                        </h3>
                        <p class="text-muted-foreground mb-4">
                          Ausbildung graduates enjoy exceptional employment
                          prospects and job stability.
                        </p>
                        <ul class="space-y-2">
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >92% job placement rate after completion</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >High demand for skilled professionals</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Often hired by training company</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Lower unemployment among vocational
                              graduates</span
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                    >
                      <div class="p-6">
                        <div
                          class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4"
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
                            class="lucide lucide-dollar-sign text-white h-6 w-6"
                          >
                            <line x1="12" x2="12" y1="2" y2="22"></line>
                            <path
                              d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                            ></path>
                          </svg>
                        </div>
                        <h3
                          class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3"
                        >
                          Financial Benefits
                        </h3>
                        <p class="text-muted-foreground mb-4">
                          Graduate debt-free and start earning sooner than
                          university students.
                        </p>
                        <ul class="space-y-2">
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Early entry into the workforce</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Salary during entire training period</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >No tuition fees or student loans</span
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
                              class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                            >
                              <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                              <path d="m9 11 3 3L22 4"></path></svg
                            ><span class="text-sm"
                              >Additional financial support available</span
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
              <div class="flex flex-col gap-12">
                <div class="max-w-[800px] mx-auto text-center">
                  <div
                    class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-primary/10 border-primary/20"
                  >
                    <span class="text-primary font-medium"
                      >Educational Choices</span
                    >
                  </div>
                  <h2
                    class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                  >
                    Ausbildung vs. University Education
                  </h2>
                  <p class="text-lg text-muted-foreground">
                    Both paths offer valuable opportunities but differ
                    significantly in approach, costs, and outcomes.
                    Understanding these differences can help you make the right
                    choice for your future.
                  </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                  <div
                    class="relative rounded-xl overflow-hidden h-[300px] shadow-xl"
                  >
                    <img
                      alt="University students in a lecture hall"
                      loading="lazy"
                      decoding="async"
                      data-nimg="fill"
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
                      sizes="100vw"
                      src="{{ asset('assets/_next/university-comparisonc52a.jpeg') }}"
                    />
                    <div
                      class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4"
                    >
                      <p class="text-white text-sm">
                        Traditional university education focuses on theoretical
                        knowledge and research in classroom settings.
                      </p>
                    </div>
                  </div>
                  <div>
                    <div
                      class="border border-border rounded-xl overflow-hidden"
                    >
                      <div
                        class="grid grid-cols-3 bg-muted/50 border-b border-border text-sm font-medium"
                      >
                        <div class="p-3 border-r border-border">Aspect</div>
                        <div class="p-3 border-r border-border text-primary">
                          Ausbildung
                        </div>
                        <div class="p-3 text-primary">University</div>
                      </div>
                      <div class="grid grid-cols-3 border-b border-border">
                        <div
                          class="p-3 border-r border-border font-medium bg-muted/20"
                        >
                          Duration
                        </div>
                        <div class="p-3 border-r border-border text-sm">
                          2-3.5 years
                        </div>
                        <div class="p-3 text-sm">3-5+ years</div>
                      </div>
                      <div class="grid grid-cols-3 border-b border-border">
                        <div
                          class="p-3 border-r border-border font-medium bg-muted/20"
                        >
                          Focus
                        </div>
                        <div class="p-3 border-r border-border text-sm">
                          Practical skills &amp; applied knowledge
                        </div>
                        <div class="p-3 text-sm">
                          Theoretical knowledge &amp; research
                        </div>
                      </div>
                      <div class="grid grid-cols-3 border-b border-border">
                        <div
                          class="p-3 border-r border-border font-medium bg-muted/20"
                        >
                          Costs
                        </div>
                        <div class="p-3 border-r border-border text-sm">
                          Earn salary (€1,100-1,500/month)
                        </div>
                        <div class="p-3 text-sm">
                          €10,000+ in living costs annually
                        </div>
                      </div>
                      <div class="grid grid-cols-3 border-b border-border">
                        <div
                          class="p-3 border-r border-border font-medium bg-muted/20"
                        >
                          Entry Requirements
                        </div>
                        <div class="p-3 border-r border-border text-sm">
                          Secondary education, German B1
                        </div>
                        <div class="p-3 text-sm">
                          Higher secondary, specific subject scores
                        </div>
                      </div>
                      <div class="grid grid-cols-3">
                        <div
                          class="p-3 border-r border-border font-medium bg-muted/20"
                        >
                          Job Placement
                        </div>
                        <div class="p-3 border-r border-border text-sm">
                          92% immediately after completion
                        </div>
                        <div class="p-3 text-sm">
                          70% within one year of graduation
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                  <div
                    class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                  >
                    <div class="p-5">
                      <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                      >
                        When Ausbildung is Better
                      </h3>
                      <ul class="space-y-2">
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >You prefer hands-on, practical learning</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >You want to start earning immediately</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >You have a specific trade or profession in
                            mind</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >You want direct entry to the job market</span
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div
                    class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                  >
                    <div class="p-5">
                      <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                      >
                        When University is Better
                      </h3>
                      <ul class="space-y-2">
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >You prefer theoretical, research-based
                            learning</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >You&#x27;re interested in academic or scientific
                            careers</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Your career requires specific higher degree (e.g.,
                            medicine)</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >You prioritize broader academic exploration</span
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div
                    class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                  >
                    <div class="p-5">
                      <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                      >
                        Ausbildung Advantages
                      </h3>
                      <ul class="space-y-2">
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Financial independence from day one</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Quicker entry to professional life</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Direct application of learning</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Industry connections and networking</span
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div
                    class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                  >
                    <div class="p-5">
                      <h3
                        class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                      >
                        University Advantages
                      </h3>
                      <ul class="space-y-2">
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Deeper theoretical foundation</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Access to research opportunities</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >Traditional academic prestige</span
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
                            class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5"
                          >
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path></svg
                          ><span class="text-sm text-muted-foreground"
                            >More flexibility to change fields</span
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="p-6 bg-primary/5 border border-primary/10 rounded-xl max-w-3xl mx-auto"
                >
                  <h3
                    class="tracking-tight font-semibold text-base sm:text-lg text-primary mb-3"
                  >
                    Did You Know?
                  </h3>
                  <p class="text-muted-foreground mb-2">
                    In Germany, many people who complete Ausbildung can still
                    pursue higher education later if they choose. The German
                    education system offers several pathways for vocational
                    graduates to qualify for university entrance, including:
                  </p>
                  <ul class="space-y-1">
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
                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg
                      ><span class="text-sm text-muted-foreground"
                        >Finishing Ausbildung with excellent grades and work
                        experience</span
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
                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg
                      ><span class="text-sm text-muted-foreground"
                        >Completing Meister qualification (master
                        craftsperson)</span
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
                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg
                      ><span class="text-sm text-muted-foreground"
                        >Taking additional qualification courses at
                        Fachhochschulen</span
                      >
                    </li>
                  </ul>
                  <p class="text-sm text-muted-foreground mt-3">
                    This flexibility means choosing Ausbildung doesn&#x27;t
                    close the door to academic studies in the future—it can
                    actually provide a solid foundation of practical knowledge
                    that enhances later theoretical studies.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="relative py-12 overflow-hidden bg-[#F9F5F0]">
            <div class="container relative z-10 mx-auto px-4">
              <div class="max-w-7xl mx-auto">
                <div
                  class="relative"
                  style="opacity: 0; transform: translateY(20px)"
                >
                  <div
                    class="text-card-foreground shadow relative bg-[#F4991A] border-2 border-[#F4991A] overflow-hidden rounded-[24px]"
                  >
                    <div class="relative p-4 sm:p-6 lg:p-8">
                      <div class="block lg:hidden space-y-6">
                        <div class="text-center">
                          <div
                            class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold mb-3 rounded-full backdrop-blur-sm"
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
                              class="lucide lucide-gift w-3 h-3 mr-1"
                            >
                              <rect
                                x="3"
                                y="8"
                                width="18"
                                height="4"
                                rx="1"
                              ></rect>
                              <path d="M12 8v13"></path>
                              <path
                                d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"
                              ></path>
                              <path
                                d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"
                              ></path></svg
                            >EXCLUSIVE INSIGHTS
                          </div>
                          <h3
                            class="text-lg sm:text-xl font-bold text-white leading-tight mb-2"
                          >
                            <span class="text-white">REVEALED:</span>
                            <!-- -->How German CEOs Skipped University
                          </h3>
                          <p class="text-sm text-white/90 mb-4 font-medium">
                            847 executive backgrounds from BMW, Siemens &amp;
                            Mercedes-Benz analyzed!
                          </p>
                          <div
                            class="flex items-center justify-center gap-4 text-xs mb-4"
                          >
                            <div class="flex items-center gap-1">
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
                                class="lucide lucide-download w-3 h-3 text-white"
                              >
                                <path
                                  d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                ></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line
                                  x1="12"
                                  x2="12"
                                  y1="15"
                                  y2="3"
                                ></line></svg
                              ><span class="font-bold text-white">4,247</span
                              ><span class="text-white/80">downloaded</span>
                            </div>
                            <div class="flex items-center gap-1">
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
                              ><span class="text-white/80">(4.9)</span>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div
                            class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4"
                          >
                            <div class="space-y-2 mb-4">
                              <h4 class="text-base font-bold text-[#344F1F]">
                                Get Your Exclusive Analysis
                              </h4>
                              <div
                                class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full"
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
                                  class="lucide lucide-circle-check-big w-3 h-3 mr-1"
                                >
                                  <path
                                    d="M21.801 10A10 10 0 1 1 17 3.335"
                                  ></path>
                                  <path d="m9 11 3 3L22 4"></path></svg
                                >Free limited time offer
                              </div>
                            </div>
                            <form class="space-y-3">
                              <div
                                class="grid grid-cols-1 sm:grid-cols-2 gap-3"
                              >
                                <input
                                  class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                  placeholder="First Name *"
                                  required=""
                                  value=""
                                /><input
                                  class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                  placeholder="Last Name *"
                                  required=""
                                  value=""
                                />
                              </div>
                              <input
                                type="email"
                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                placeholder="Your Email Address *"
                                required=""
                                value=""
                              />
                              <div class="grid grid-cols-1 gap-3">
                                <button
                                  type="button"
                                  role="combobox"
                                  aria-controls="radix-«R2t6guslb»"
                                  aria-expanded="false"
                                  aria-required="true"
                                  aria-autocomplete="none"
                                  dir="ltr"
                                  data-state="closed"
                                  data-placeholder=""
                                  class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]"
                                >
                                  <span style="pointer-events: none"
                                    >German Level *</span
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
                                    class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                    aria-hidden="true"
                                  >
                                    <path d="m6 9 6 6 6-6"></path>
                                  </svg></button
                                ><select
                                  aria-hidden="true"
                                  required=""
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
                                  "
                                >
                                  <option value=""></option></select
                                ><button
                                  type="button"
                                  role="combobox"
                                  aria-controls="radix-«R4t6guslb»"
                                  aria-expanded="false"
                                  aria-required="true"
                                  aria-autocomplete="none"
                                  dir="ltr"
                                  data-state="closed"
                                  data-placeholder=""
                                  class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]"
                                >
                                  <span style="pointer-events: none"
                                    >Field of Interest *</span
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
                                    class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                    aria-hidden="true"
                                  >
                                    <path d="m6 9 6 6 6-6"></path>
                                  </svg></button
                                ><select
                                  aria-hidden="true"
                                  required=""
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
                                  "
                                >
                                  <option value=""></option></select
                                ><button
                                  type="button"
                                  role="combobox"
                                  aria-controls="radix-«R6t6guslb»"
                                  aria-expanded="false"
                                  aria-required="true"
                                  aria-autocomplete="none"
                                  dir="ltr"
                                  data-state="closed"
                                  data-placeholder=""
                                  class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]"
                                >
                                  <span style="pointer-events: none"
                                    >Current Country *</span
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
                                    class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                    aria-hidden="true"
                                  >
                                    <path d="m6 9 6 6 6-6"></path>
                                  </svg></button
                                ><select
                                  aria-hidden="true"
                                  required=""
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
                                  "
                                >
                                  <option value=""></option>
                                </select>
                              </div>
                              <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-12 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
                                type="submit"
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
                                  class="lucide lucide-download w-4 h-4 mr-2"
                                >
                                  <path
                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                  ></path>
                                  <polyline
                                    points="7 10 12 15 17 10"
                                  ></polyline>
                                  <line
                                    x1="12"
                                    x2="12"
                                    y1="15"
                                    y2="3"
                                  ></line></svg
                                >GET EXCLUSIVE INSIGHTS NOW<svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="lucide lucide-arrow-right w-4 h-4 ml-2"
                                >
                                  <path d="M5 12h14"></path>
                                  <path d="m12 5 7 7-7 7"></path>
                                </svg>
                              </button>
                              <div
                                class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1"
                              >
                                <div class="flex items-center gap-1">
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
                                    class="lucide lucide-shield w-3 h-3 text-[#344F1F]"
                                  >
                                    <path
                                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"
                                    ></path></svg
                                  ><span>Secure</span>
                                </div>
                                <div class="flex items-center gap-1">
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
                                    class="lucide lucide-zap w-3 h-3 text-[#F4991A]"
                                  >
                                    <path
                                      d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                                    ></path></svg
                                  ><span>Instant</span>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="hidden lg:block">
                        <div class="grid lg:grid-cols-12 gap-6 items-center">
                          <div
                            class="lg:col-span-3 flex justify-center lg:justify-start items-center"
                          >
                            <div class="relative">
                              <img
                                src="{{ asset('assets/_next/mascot_pointing_malee75a.jpeg') }}"
                                alt="GoAusbildung Mascot"
                                class="w-56 h-auto object-contain"
                              />
                            </div>
                          </div>
                          <div class="lg:col-span-4 space-y-3">
                            <div
                              class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold rounded-full backdrop-blur-sm"
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
                                class="lucide lucide-gift w-3 h-3 mr-1"
                              >
                                <rect
                                  x="3"
                                  y="8"
                                  width="18"
                                  height="4"
                                  rx="1"
                                ></rect>
                                <path d="M12 8v13"></path>
                                <path
                                  d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"
                                ></path>
                                <path
                                  d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"
                                ></path></svg
                              >EXCLUSIVE INSIGHTS
                            </div>
                            <h3
                              class="text-xl lg:text-2xl font-bold text-white leading-tight"
                            >
                              <span class="text-white">REVEALED:</span>
                              <!-- -->How German CEOs Skipped University
                            </h3>
                            <p class="text-sm text-white/90 font-medium">
                              847 executive backgrounds from BMW, Siemens &amp;
                              Mercedes-Benz analyzed!
                            </p>
                            <div class="flex items-center gap-4 text-xs">
                              <div class="flex items-center gap-1">
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
                                  class="lucide lucide-download w-3 h-3 text-white"
                                >
                                  <path
                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                  ></path>
                                  <polyline
                                    points="7 10 12 15 17 10"
                                  ></polyline>
                                  <line
                                    x1="12"
                                    x2="12"
                                    y1="15"
                                    y2="3"
                                  ></line></svg
                                ><span class="font-bold text-white">4,247</span
                                ><span class="text-white/80"
                                  >professionals downloaded</span
                                >
                              </div>
                              <div class="flex items-center gap-1">
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
                                ><span class="text-white/80">(4.9)</span>
                              </div>
                            </div>
                          </div>
                          <div class="lg:col-span-5">
                            <div
                              class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4"
                            >
                              <div class="space-y-3 mb-4">
                                <h4 class="text-lg font-bold text-[#344F1F]">
                                  Get Your Exclusive Analysis
                                </h4>
                                <div
                                  class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full"
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
                                    class="lucide lucide-circle-check-big w-3 h-3 mr-1"
                                  >
                                    <path
                                      d="M21.801 10A10 10 0 1 1 17 3.335"
                                    ></path>
                                    <path d="m9 11 3 3L22 4"></path></svg
                                  >Free limited time offer
                                </div>
                              </div>
                              <form class="space-y-3">
                                <div class="grid grid-cols-2 gap-2">
                                  <input
                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                    placeholder="First Name *"
                                    required=""
                                    value=""
                                  /><input
                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                    placeholder="Last Name *"
                                    required=""
                                    value=""
                                  />
                                </div>
                                <input
                                  type="email"
                                  class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                  placeholder="Your Email Address *"
                                  required=""
                                  value=""
                                />
                                <div class="grid grid-cols-3 gap-2">
                                  <button
                                    type="button"
                                    role="combobox"
                                    aria-controls="radix-«R2tqguslb»"
                                    aria-expanded="false"
                                    aria-required="true"
                                    aria-autocomplete="none"
                                    dir="ltr"
                                    data-state="closed"
                                    data-placeholder=""
                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]"
                                  >
                                    <span style="pointer-events: none"
                                      >German Level *</span
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
                                      class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                      aria-hidden="true"
                                    >
                                      <path d="m6 9 6 6 6-6"></path>
                                    </svg></button
                                  ><select
                                    aria-hidden="true"
                                    required=""
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
                                    "
                                  >
                                    <option value=""></option></select
                                  ><button
                                    type="button"
                                    role="combobox"
                                    aria-controls="radix-«R4tqguslb»"
                                    aria-expanded="false"
                                    aria-required="true"
                                    aria-autocomplete="none"
                                    dir="ltr"
                                    data-state="closed"
                                    data-placeholder=""
                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]"
                                  >
                                    <span style="pointer-events: none"
                                      >Field *</span
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
                                      class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                      aria-hidden="true"
                                    >
                                      <path d="m6 9 6 6 6-6"></path>
                                    </svg></button
                                  ><select
                                    aria-hidden="true"
                                    required=""
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
                                    "
                                  >
                                    <option value=""></option></select
                                  ><button
                                    type="button"
                                    role="combobox"
                                    aria-controls="radix-«R6tqguslb»"
                                    aria-expanded="false"
                                    aria-required="true"
                                    aria-autocomplete="none"
                                    dir="ltr"
                                    data-state="closed"
                                    data-placeholder=""
                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]"
                                  >
                                    <span style="pointer-events: none"
                                      >Country *</span
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
                                      class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                      aria-hidden="true"
                                    >
                                      <path d="m6 9 6 6 6-6"></path>
                                    </svg></button
                                  ><select
                                    aria-hidden="true"
                                    required=""
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
                                    "
                                  >
                                    <option value=""></option>
                                  </select>
                                </div>
                                <button
                                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-10 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
                                  type="submit"
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
                                    class="lucide lucide-download w-4 h-4 mr-2"
                                  >
                                    <path
                                      d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                    ></path>
                                    <polyline
                                      points="7 10 12 15 17 10"
                                    ></polyline>
                                    <line
                                      x1="12"
                                      x2="12"
                                      y1="15"
                                      y2="3"
                                    ></line></svg
                                  >GET EXCLUSIVE INSIGHTS NOW<svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 ml-2"
                                  >
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                </button>
                                <div
                                  class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1"
                                >
                                  <div class="flex items-center gap-1">
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
                                      class="lucide lucide-shield w-3 h-3 text-[#344F1F]"
                                    >
                                      <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"
                                      ></path></svg
                                    ><span>Secure</span>
                                  </div>
                                  <div class="flex items-center gap-1">
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
                                      class="lucide lucide-zap w-3 h-3 text-[#F4991A]"
                                    >
                                      <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                                      ></path></svg
                                    ><span>Instant</span>
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
              <div class="max-w-[800px] mx-auto text-center mb-12">
                <div
                  class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-primary/10 border-primary/20"
                >
                  <span class="text-primary font-medium">Future Prospects</span>
                </div>
                <h2
                  class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4"
                >
                  Long-Term Career Pathways
                </h2>
                <p class="text-lg text-muted-foreground">
                  Ausbildung is not just a training program but the starting
                  point of a lifelong career journey with multiple advancement
                  opportunities.
                </p>
              </div>
              <div class="grid gap-8 md:grid-cols-3">
                <div
                  class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                >
                  <div class="p-6">
                    <div
                      class="bg-card w-12 h-12 rounded-lg flex items-center justify-center mb-4 border border-primary/20"
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
                        class="lucide lucide-graduation-cap text-primary h-6 w-6"
                      >
                        <path
                          d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"
                        ></path>
                        <path d="M22 10v6"></path>
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3"
                    >
                      Further Education Options
                    </h3>
                    <p class="text-muted-foreground mb-4">
                      Ausbildung graduates can pursue additional qualifications
                      to advance their careers.
                    </p>
                    <ul class="space-y-3">
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-primary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">1</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >Meister Qualification</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Master craftsperson certification that qualifies you
                            to train apprentices and start your own business
                          </p>
                        </div>
                      </li>
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-primary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">2</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >Techniker/Fachwirt</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Specialized technical or business qualifications for
                            management roles
                          </p>
                        </div>
                      </li>
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-primary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">3</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >University Access</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Pathways to higher education, often with credit for
                            prior learning
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                >
                  <div class="p-6">
                    <div
                      class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4"
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
                        class="lucide lucide-chart-column-increasing text-white h-6 w-6"
                      >
                        <path d="M13 17V9"></path>
                        <path d="M18 17V5"></path>
                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                        <path d="M8 17v-3"></path>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3"
                    >
                      Promotion Possibilities
                    </h3>
                    <p class="text-muted-foreground mb-4">
                      Many Ausbildung graduates advance to leadership and
                      specialized roles within their organizations.
                    </p>
                    <ul class="space-y-3">
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-secondary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">1</span>
                        </div>
                        <div>
                          <span class="font-medium block">Team Leadership</span>
                          <p class="text-sm text-muted-foreground">
                            Supervising and guiding teams of workers in your
                            specialty area
                          </p>
                        </div>
                      </li>
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-secondary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">2</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >Specialist Positions</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Becoming an expert in a particular technology or
                            process
                          </p>
                        </div>
                      </li>
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-secondary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">3</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >Department Management</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Running entire departments with operational
                            responsibility
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="rounded-xl text-card-foreground shadow bg-card border border-primary/10"
                >
                  <div class="p-6">
                    <div
                      class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4"
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
                        class="lucide lucide-briefcase text-white h-6 w-6"
                      >
                        <path
                          d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"
                        ></path>
                        <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3"
                    >
                      Entrepreneurship Opportunities
                    </h3>
                    <p class="text-muted-foreground mb-4">
                      Many successful business owners in Germany began with
                      vocational training in their field.
                    </p>
                    <ul class="space-y-3">
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-primary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">1</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >Starting a Business</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Meister qualification holders can establish their
                            own companies
                          </p>
                        </div>
                      </li>
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-primary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">2</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >Franchise Opportunities</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Operating branded businesses with your technical
                            expertise
                          </p>
                        </div>
                      </li>
                      <li class="flex items-start gap-2">
                        <div
                          class="bg-primary w-6 h-6 rounded-md flex items-center justify-center shrink-0 mt-0.5"
                        >
                          <span class="text-white text-xs font-bold">3</span>
                        </div>
                        <div>
                          <span class="font-medium block"
                            >Consulting Services</span
                          >
                          <p class="text-sm text-muted-foreground">
                            Advising businesses on technical matters in your
                            field
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div
                class="mt-12 bg-muted/20 border border-border rounded-xl p-6 max-w-3xl mx-auto"
              >
                <div class="flex flex-col md:flex-row gap-6 items-center">
                  <div
                    class="relative h-24 w-24 rounded-full overflow-hidden border-4 border-primary/10 flex-shrink-0"
                  >
                    <img
                      alt="Success story profile"
                      loading="lazy"
                      width="200"
                      height="200"
                      decoding="async"
                      data-nimg="1"
                      class="object-cover"
                      style="color: transparent"
                      src="{{ asset('assets/_next/success-story-profile068e.jpeg') }}"
                    />
                  </div>
                  <div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-1"
                    >
                      Maximilian Weber
                    </h3>
                    <p class="text-sm text-muted-foreground mb-3">
                      Mechatronics Ausbildung Graduate, now Technical Director
                    </p>
                    <p class="text-muted-foreground italic">
                      &quot;I started with an Ausbildung in mechatronics in
                      2017. Within 8 years, I&#x27;ve progressed from trainee to
                      team leader, and now serve as Technical Director for our
                      automation division. My practical training gave me a
                      foundation that university graduates often lack – I
                      understand our systems from the inside out because
                      I&#x27;ve built them with my own hands.&quot;
                    </p>
                  </div>
                </div>
                <div class="mt-4 text-right">
                  <a
                    class="text-sm font-medium text-primary flex items-center justify-end gap-1 hover:underline"
                    href="success-stories.html"
                    >View more success stories<svg
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
                      <path d="m12 5 7 7-7 7"></path></svg
                  ></a>
                </div>
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
                  <h2
                    class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center"
                  >
                    Ready to Start Earning While Learning?
                  </h2>
                  <p
                    class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                  >
                    Browse 60,000+ positions from verified employers. Apply with
                    smart cover letters and get hired faster than traditional
                    methods.
                  </p>
                  <div class="flex flex-col sm:flex-row items-center gap-3">
                    <a
                      href="jobs.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Browse 60K+ Jobs</a
                    ><a
                      href="tools/eligibility-checker.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Check Eligibility</a
                    >
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
@endsection
