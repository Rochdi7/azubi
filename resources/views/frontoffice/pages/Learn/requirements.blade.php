@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Requirements 2026: Age, Education & German Level | GoAusbildung')

@section('meta')
    <meta name="description" content="Check Ausbildung eligibility: 16-35 age range, school certificate (10th grade), B1 German (B2 for healthcare). Free eligibility checker with instant results." />
    <meta name="keywords" content="ausbildung requirements,ausbildung eligibility,ausbildung age limit,ausbildung education requirements,german level ausbildung,who can do ausbildung" />
    <meta property="og:title" content="Ausbildung Requirements 2026: Age, Education &amp; German Level" />
    <meta property="og:description" content="Check Ausbildung eligibility: 16-35 age range, school certificate (10th grade), B1 German (B2 for healthcare). Free eligibility checker with instant results." />
    <meta property="og:image" content="https://images.goausbildung.com/og-images/requirements.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Ausbildung Requirements 2026: Age, Education &amp; German Level" />
    <meta name="twitter:description" content="Check Ausbildung eligibility: 16-35 age range, school certificate (10th grade), B1 German (B2 for healthcare). Free eligibility checker with instant results." />
    <meta name="twitter:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/requirements') }}" />
@endsection

@section('content')
<div class="flex flex-col">
          <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44"
          >
            <img
              alt="Heidelberg Castle in autumn - historic German landmark"
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
                    aria-label="Requirements Guide"
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
                      class="lucide lucide-file-check h-4 w-4 mr-2"
                      aria-hidden="true"
                    >
                      <path
                        d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                      ></path>
                      <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                      <path d="m9 15 2 2 4-4"></path></svg
                    >Requirements Guide
                  </div>
                </div>
                <h1
                  class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200"
                >
                  Ausbildung Requirements Guide
                </h1>
                <p
                  class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300"
                >
                  Everything you need to know about educational, language, age,
                  and visa requirements for German vocational training.
                </p>
                <nav
                  class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                  aria-label="Primary navigation"
                >
                  <a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                    aria-label="Check Eligibility"
                    href="tools/eligibility-checker.html"
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
                        class="lucide lucide-circle-check-big w-5 h-5 mr-2"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg></span
                    ><span>Check Eligibility</span></a
                  ><a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                    aria-label="View All Requirements"
                    href="#requirements-section"
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
                    ><span>View All Requirements</span></a
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
          <section id="requirements-section" class="py-16">
            <div class="container px-4 md:px-6">
              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <div
                  class="rounded-xl text-card-foreground shadow relative overflow-hidden bg-card border border-primary/10"
                >
                  <div
                    class="absolute top-0 left-0 w-1 h-full bg-primary"
                  ></div>
                  <div class="p-6">
                    <div class="mb-4">
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
                        class="lucide lucide-school h-8 w-8 text-primary"
                      >
                        <path d="M14 22v-4a2 2 0 1 0-4 0v4"></path>
                        <path
                          d="m18 10 3.447 1.724a1 1 0 0 1 .553.894V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7.382a1 1 0 0 1 .553-.894L6 10"
                        ></path>
                        <path d="M18 5v17"></path>
                        <path
                          d="m4 6 7.106-3.553a2 2 0 0 1 1.788 0L20 6"
                        ></path>
                        <path d="M6 5v17"></path>
                        <circle cx="12" cy="9" r="2"></circle>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                    >
                      Educational Requirements
                    </h3>
                    <p class="mb-4 text-muted-foreground">
                      Minimum high school completion (12 years of education)
                      from a recognized educational board. Subject requirements
                      vary by sector.
                    </p>
                    <ul class="space-y-2 mb-4">
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Science background for healthcare, IT, and
                          engineering sectors</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Business/Commerce background for retail, logistics,
                          and hospitality</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Vocational diploma graduates are also eligible</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Bachelor&#x27;s degree holders can apply for advanced
                          standing</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="rounded-xl text-card-foreground shadow relative overflow-hidden bg-card border border-primary/10"
                >
                  <div
                    class="absolute top-0 left-0 w-1 h-full bg-secondary"
                  ></div>
                  <div class="p-6">
                    <div class="mb-4">
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
                        class="lucide lucide-languages h-8 w-8 text-secondary"
                      >
                        <path d="m5 8 6 6"></path>
                        <path d="m4 14 6-6 2-3"></path>
                        <path d="M2 5h12"></path>
                        <path d="M7 2h1"></path>
                        <path d="m22 22-5-10-5 10"></path>
                        <path d="M14 18h6"></path>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                    >
                      Language Requirements
                    </h3>
                    <p class="mb-4 text-muted-foreground">
                      German language proficiency is essential for Ausbildung,
                      as both workplace training and vocational school are
                      conducted in German.
                    </p>
                    <ul class="space-y-2 mb-4">
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Minimum B1 level German proficiency required</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Healthcare sector often requires B2 level</span>
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Certification from Goethe-Institut or telc</span>
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
                          class="lucide lucide-circle-x h-5 w-5 text-primary shrink-0 mt-0.5"
                        >
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="m15 9-6 6"></path>
                          <path d="m9 9 6 6"></path></svg
                        ><span>English-only applications are not accepted</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="rounded-xl text-card-foreground shadow relative overflow-hidden bg-card border border-primary/10"
                >
                  <div class="absolute top-0 left-0 w-1 h-full bg-accent"></div>
                  <div class="p-6">
                    <div class="mb-4">
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
                        class="lucide lucide-user h-8 w-8 text-accent"
                      >
                        <path
                          d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                    >
                      Age &amp; Other Criteria
                    </h3>
                    <p class="mb-4 text-muted-foreground">
                      While there&#x27;s no strict upper age limit, most
                      Ausbildung programs target younger applicants for
                      practical reasons.
                    </p>
                    <ul class="space-y-2 mb-4">
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Ideal age range: 18-30 years</span>
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Applicants up to 35 may be considered for high-demand
                          sectors</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Good health status (medical certificate may be
                          required)</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Clean background check</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="rounded-xl text-card-foreground shadow relative overflow-hidden bg-card border border-primary/10"
                >
                  <div
                    class="absolute top-0 left-0 w-1 h-full bg-secondary"
                  ></div>
                  <div class="p-6">
                    <div class="mb-4">
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
                        class="lucide lucide-globe h-8 w-8 text-secondary"
                      >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path
                          d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"
                        ></path>
                        <path d="M2 12h20"></path>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                    >
                      Visa Requirements
                    </h3>
                    <p class="mb-4 text-muted-foreground">
                      Once you&#x27;ve secured an Ausbildung contract,
                      you&#x27;ll need to apply for the German National Visa
                      (D-visa) for vocational training.
                    </p>
                    <ul class="space-y-2 mb-4">
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Valid passport (minimum 1 year validity)</span>
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Signed training contract from German employer</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Proof of German language skills (certificate)</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Biometric photos and completed application
                          forms</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="rounded-xl text-card-foreground shadow relative overflow-hidden bg-card border border-primary/10"
                >
                  <div
                    class="absolute top-0 left-0 w-1 h-full bg-primary"
                  ></div>
                  <div class="p-6">
                    <div class="mb-4">
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
                        class="lucide lucide-wallet h-8 w-8 text-primary"
                      >
                        <path
                          d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"
                        ></path>
                        <path
                          d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"
                        ></path>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                    >
                      Financial Requirements
                    </h3>
                    <p class="mb-4 text-muted-foreground">
                      You&#x27;ll need to demonstrate that you can support
                      yourself during the initial phase of your training in
                      Germany.
                    </p>
                    <ul class="space-y-2 mb-4">
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Blocked account (Sperrkonto) with €11,904 only if
                          your stipend is less than €992/month (not required for
                          most positions)</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Visa application fee (approximately €75)</span>
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Health insurance for visa application</span>
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Funds for travel to Germany</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="rounded-xl text-card-foreground shadow relative overflow-hidden bg-card border border-primary/10"
                >
                  <div class="absolute top-0 left-0 w-1 h-full bg-accent"></div>
                  <div class="p-6">
                    <div class="mb-4">
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
                        class="lucide lucide-clock h-8 w-8 text-accent"
                      >
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                      </svg>
                    </div>
                    <h3
                      class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-2"
                    >
                      Application Documents
                    </h3>
                    <p class="mb-4 text-muted-foreground">
                      Prepare these documents for both your Ausbildung
                      application and subsequent visa application.
                    </p>
                    <ul class="space-y-2 mb-4">
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>German-style CV (Lebenslauf)</span>
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>Motivation letter (Motivationsschreiben)</span>
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span
                          >Educational certificates with German
                          translations</span
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
                          class="lucide lucide-circle-check-big h-5 w-5 text-secondary shrink-0 mt-0.5"
                        >
                          <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                          <path d="m9 11 3 3L22 4"></path></svg
                        ><span>German language certificate</span>
                      </li>
                    </ul>
                  </div>
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
                            >TRANSFORMATION
                          </div>
                          <h3
                            class="text-lg sm:text-xl font-bold text-white leading-tight mb-2"
                          >
                            <span class="text-white">REVEALED:</span>
                            <!-- -->From Village Cleaner to €4,200/Month
                          </h3>
                          <p class="text-sm text-white/90 mb-4 font-medium">
                            Miguel&#x27;s incredible transformation story with
                            zero connections or diploma!
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
                                  aria-controls="radix-«R2t6cuslb»"
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
                                  aria-controls="radix-«R4t6cuslb»"
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
                                  aria-controls="radix-«R6t6cuslb»"
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
                              >TRANSFORMATION
                            </div>
                            <h3
                              class="text-xl lg:text-2xl font-bold text-white leading-tight"
                            >
                              <span class="text-white">REVEALED:</span>
                              <!-- -->From Village Cleaner to €4,200/Month
                            </h3>
                            <p class="text-sm text-white/90 font-medium">
                              Miguel&#x27;s incredible transformation story with
                              zero connections or diploma!
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
                                    aria-controls="radix-«R2tqcuslb»"
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
                                    aria-controls="radix-«R4tqcuslb»"
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
                                    aria-controls="radix-«R6tqcuslb»"
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
          <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
              <h2
                class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-6 text-center"
              >
                Requirements by Educational Background
              </h2>
              <div
                dir="ltr"
                data-orientation="horizontal"
                class="max-w-4xl mx-auto"
              >
                <div
                  role="tablist"
                  aria-orientation="horizontal"
                  class="min-h-[3rem] items-center justify-start rounded-xl bg-beige text-muted-foreground shadow-sm overflow-x-auto overflow-y-hidden scrollbar-none [-webkit-overflow-scrolling:touch] [&amp;::-webkit-scrollbar]:hidden flex flex-col sm:grid sm:grid-cols-3 w-full h-auto sm:h-10 p-1"
                  tabindex="-1"
                  data-orientation="horizontal"
                  style="outline: none"
                >
                  <button
                    type="button"
                    role="tab"
                    aria-selected="true"
                    aria-controls="radix-«R2guslb»-content-science"
                    data-state="active"
                    id="radix-«R2guslb»-trigger-science"
                    class="inline-flex flex-shrink-0 items-center whitespace-nowrap rounded-lg px-4 py-2.5 text-sm font-semibold ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-white data-[state=active]:text-primary data-[state=active]:shadow-md hover:bg-white/50 w-full justify-start sm:justify-center"
                    tabindex="-1"
                    data-orientation="horizontal"
                    data-radix-collection-item=""
                  >
                    Science</button
                  ><button
                    type="button"
                    role="tab"
                    aria-selected="false"
                    aria-controls="radix-«R2guslb»-content-commerce"
                    data-state="inactive"
                    id="radix-«R2guslb»-trigger-commerce"
                    class="inline-flex flex-shrink-0 items-center whitespace-nowrap rounded-lg px-4 py-2.5 text-sm font-semibold ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-white data-[state=active]:text-primary data-[state=active]:shadow-md hover:bg-white/50 w-full justify-start sm:justify-center"
                    tabindex="-1"
                    data-orientation="horizontal"
                    data-radix-collection-item=""
                  >
                    Business/Commerce</button
                  ><button
                    type="button"
                    role="tab"
                    aria-selected="false"
                    aria-controls="radix-«R2guslb»-content-arts"
                    data-state="inactive"
                    id="radix-«R2guslb»-trigger-arts"
                    class="inline-flex flex-shrink-0 items-center whitespace-nowrap rounded-lg px-4 py-2.5 text-sm font-semibold ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-white data-[state=active]:text-primary data-[state=active]:shadow-md hover:bg-white/50 w-full justify-start sm:justify-center"
                    tabindex="-1"
                    data-orientation="horizontal"
                    data-radix-collection-item=""
                  >
                    Arts/Humanities
                  </button>
                </div>
                <div
                  data-state="active"
                  data-orientation="horizontal"
                  role="tabpanel"
                  aria-labelledby="radix-«R2guslb»-trigger-science"
                  id="radix-«R2guslb»-content-science"
                  tabindex="0"
                  class="ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 p-6 bg-card border rounded-lg mt-6"
                  style="animation-duration: 0s"
                >
                  <h3
                    class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4"
                  >
                    Science Background
                  </h3>
                  <p class="mb-4">
                    Students with a science background have the widest range of
                    Ausbildung options available.
                  </p>
                  <h4
                    class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2"
                  >
                    Recommended Sectors:
                  </h4>
                  <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-6">
                    <li class="flex items-center gap-2">
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
                        class="lucide lucide-circle-check-big h-4 w-4 text-secondary"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg
                      ><span>Healthcare &amp; Nursing (biology students)</span>
                    </li>
                    <li class="flex items-center gap-2">
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
                        class="lucide lucide-circle-check-big h-4 w-4 text-secondary"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg
                      ><span>IT &amp; Software Development</span>
                    </li>
                    <li class="flex items-center gap-2">
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
                        class="lucide lucide-circle-check-big h-4 w-4 text-secondary"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg
                      ><span>Engineering &amp; Technical</span>
                    </li>
                    <li class="flex items-center gap-2">
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
                        class="lucide lucide-circle-check-big h-4 w-4 text-secondary"
                      >
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path></svg
                      ><span>Laboratory Technician</span>
                    </li>
                  </ul>
                  <p class="text-sm text-muted-foreground">
                    Note: For technical fields like mechatronics or IT, having
                    mathematics as a subject is generally required. For
                    healthcare fields, biology is preferred.
                  </p>
                </div>
                <div
                  data-state="inactive"
                  data-orientation="horizontal"
                  role="tabpanel"
                  aria-labelledby="radix-«R2guslb»-trigger-commerce"
                  hidden=""
                  id="radix-«R2guslb»-content-commerce"
                  tabindex="0"
                  class="ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 p-6 bg-card border rounded-lg mt-6"
                >
                  <h3
                    class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4"
                  >
                    Business/Commerce Background
                  </h3>
                  <p class="mb-4">
                    Students with a business or commerce background are well-suited for a variety of commercial and administrative Ausbildung programs.
                  </p>
                  <h4
                    class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2"
                  >
                    Recommended Sectors:
                  </h4>
                  <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-6">
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Banking &amp; Finance (Bankkaufmann/-frau)</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Office Management (Kaufmann/-frau f&uuml;r B&uuml;romanagement)</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Retail &amp; Wholesale (Kaufmann/-frau im Handel)</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Insurance &amp; Tax Consulting</span>
                    </li>
                  </ul>
                  <p class="text-sm text-muted-foreground">
                    Note: Strong mathematics skills are beneficial for banking and finance sectors. Accounting knowledge gives you an advantage in tax consulting roles.
                  </p>
                </div>
                <div
                  data-state="inactive"
                  data-orientation="horizontal"
                  role="tabpanel"
                  aria-labelledby="radix-«R2guslb»-trigger-arts"
                  hidden=""
                  id="radix-«R2guslb»-content-arts"
                  tabindex="0"
                  class="ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 p-6 bg-card border rounded-lg mt-6"
                >
                  <h3
                    class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4"
                  >
                    Arts/Humanities Background
                  </h3>
                  <p class="mb-4">
                    Students with an arts or humanities background can pursue creative and communication-focused Ausbildung programs.
                  </p>
                  <h4
                    class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2"
                  >
                    Recommended Sectors:
                  </h4>
                  <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-6">
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Media &amp; Design (Mediengestalter/in)</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Event Management (Veranstaltungskaufmann/-frau)</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Hotel &amp; Tourism (Hotelfachmann/-frau)</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-4 w-4 text-secondary"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>Social Work &amp; Education (Erzieher/in)</span>
                    </li>
                  </ul>
                  <p class="text-sm text-muted-foreground">
                    Note: Language skills are highly valued in tourism and hotel sectors. A creative portfolio can strengthen applications for media and design programs.
                  </p>
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
                    Meet the Requirements? Start Applying
                  </h2>
                  <p
                    class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                  >
                    Browse 60,000+ positions and apply with smart application
                    kits. Get personalized cover letters, checklists, and tips
                    for each role.
                  </p>
                  <div class="flex flex-col sm:flex-row items-center gap-3">
                    <a
                      href="jobs.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Browse 60K+ Jobs</a
                    ><a
                      href="tools/eligibility-checker.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Check Eligibility First</a
                    >
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

@push('scripts')
<script>
(function() {
  var tabs = document.querySelectorAll('[role="tab"]');
  var panels = document.querySelectorAll('[role="tabpanel"]');
  if (!tabs.length || !panels.length) return;

  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      var targetId = tab.getAttribute('aria-controls');

      // Deactivate all tabs
      tabs.forEach(function(t) {
        t.setAttribute('aria-selected', 'false');
        t.setAttribute('data-state', 'inactive');
        t.setAttribute('tabindex', '-1');
      });

      // Hide all panels
      panels.forEach(function(p) {
        p.setAttribute('data-state', 'inactive');
        p.setAttribute('hidden', '');
      });

      // Activate clicked tab
      tab.setAttribute('aria-selected', 'true');
      tab.setAttribute('data-state', 'active');
      tab.setAttribute('tabindex', '0');

      // Show target panel
      var panel = document.getElementById(targetId);
      if (panel) {
        panel.setAttribute('data-state', 'active');
        panel.removeAttribute('hidden');
      }
    });
  });
})();
</script>
@endpush
@endsection
