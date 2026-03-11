@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Germany 2026: Earn €1,300/Month While Learning | 85% Job Placement')

@section('meta')
    <meta name="description" content="Start your Ausbildung in Germany 2026! Earn €900-1,300/month while training. Smart application tools help you apply 10x faster with personalized cover letters &amp; job matching. 60,000+ positions from 238 verified employers." />
    <meta name="keywords" content="Ausbildung Germany 2026,vocational training Germany,apprenticeship Germany,German dual education,earn while learning" />
    <meta property="og:title" content="Ausbildung Germany 2026: Earn €1,300/Month While Learning | 85% Job Placement" />
    <meta property="og:description" content="Start your Ausbildung in Germany 2026! Earn €900-1,300/month while training. Smart application tools help you apply 10x faster." />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('content')
<script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "GoAusbildung",
            "description": "Platform connecting international students with German Ausbildung (vocational training) opportunities",
            "url": "https://goausbildung.com",
            "offers": {
              "@type": "EducationalOccupationalProgram",
              "name": "Ausbildung Programs in Germany",
              "description": "Dual education system combining practical training with theoretical education",
              "programType": "Vocational Training",
              "salaryUponCompletion": {
                "@type": "MonetaryAmount",
                "currency": "EUR",
                "value": "900-1300",
                "unitText": "monthly during training"
              },
              "timeToComplete": "P2Y/P3.5Y",
              "occupationalCredentialAwarded": "IHK Certificate"
            }
          }
        </script>
        <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
              {
                "@type": "Question",
                "name": "What is Ausbildung and how is it different from university?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Ausbildung is Germany's dual vocational education system that combines practical workplace training (3-4 days/week) with theoretical education (1-2 days/week). Unlike university, you earn €900-1,300 monthly while learning, complete training in 2-3.5 years instead of 4+, and have guaranteed job relevance with 85% placement rates."
                }
              },
              {
                "@type": "Question",
                "name": "Can international students apply for Ausbildung programs?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Yes! Germany welcomes international students for Ausbildung programs. You need basic German skills (usually B1 level), completed secondary education (10+2 or equivalent), a valid passport, and a clean background check. Many sectors actively seek international trainees."
                }
              },
              {
                "@type": "Question",
                "name": "How much can I earn during Ausbildung training?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Ausbildung trainees earn between €900-1,300 per month during training, with amounts increasing each year. After completion, average starting salaries range from €2,500-4,000/month depending on field and location. You also receive health insurance and other benefits."
                }
              },
              {
                "@type": "Question",
                "name": "What German language level do I need for Ausbildung?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Most Ausbildung programs require B1 German level (intermediate). Some technical fields may accept A2 level initially. Healthcare and customer-facing roles typically require B2. We offer German learning tools to help you reach the required level."
                }
              },
              {
                "@type": "Question",
                "name": "Which sectors offer the best Ausbildung opportunities?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "High-demand sectors include IT & Technology, Healthcare & Nursing, Engineering & Manufacturing, Hospitality & Tourism, and Business & Finance. IT and healthcare sectors often offer the highest salaries and best job security for international candidates."
                }
              },
              {
                "@type": "Question",
                "name": "How is GoAusbildung different from other job portals?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Other portals list jobs and leave you on your own. GoAusbildung provides smart application tools that generate personalized cover letters, match scores showing your fit for each job, application tracking with follow-up reminders, and German learning + interview preparation tools."
                }
              },
              {
                "@type": "Question",
                "name": "How does the smart cover letter generator work?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Select any job, click 'Apply with Help', and get a complete German cover letter in 30 seconds. Our system reads the actual job requirements and matches them with your profile to create personalized, professional Anschreiben in DIN 5008 format - the standard German employers expect."
                }
              },
              {
                "@type": "Question",
                "name": "Is the platform really free?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Yes! All AI tools are completely free with no limits - unlimited application kits, CV exports, cover letters, and German learning tools. For students who want expert help, our 'Apply For Me' consultation service handles everything: 30+ applications submitted by our team, native German cover letters, and dedicated counselor support."
                }
              },
              {
                "@type": "Question",
                "name": "Are the generated cover letters professional quality?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Yes. The cover letters are professional German in DIN 5008 business format. They're personalized with your real experience and the job's specific requirements - not generic templates. Each letter uses proper salutation, 4-paragraph format, and formal closing."
                }
              },
              {
                "@type": "Question",
                "name": "How do I track my applications?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Every application kit you generate is automatically tracked. You'll see status updates, suggested follow-up dates based on company response patterns, and can log when you hear back. No more spreadsheets - everything in one dashboard."
                }
              }
            ]
          }
        </script>
        <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "Service",
            "name": "Ausbildung Application & Support Services",
            "description": "Complete support for international students applying to German vocational training programs, including visa assistance, document preparation, and job matching",
            "url": "https://goausbildung.com",
            "provider": {
              "@type": "Organization",
              "name": "GoAusbildung",
              "url": "https://goausbildung.com"
            },
            "serviceType": "Educational Consulting",
            "areaServed": [
              "Germany",
              "India",
              "Philippines",
              "Vietnam",
              "Indonesia"
            ],
            "offers": {
              "@type": "Offer",
              "price": "Contact for pricing",
              "priceCurrency": "EUR"
            },
            "category": "Education and Career Services"
          }
        </script>
        <main>
          <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-32 min-h-[600px] sm:min-h-[700px] lg:min-h-[800px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-40 sm:pt-44 md:pt-48"
          >
            <img
              alt="Beautiful autumn landscape in Germany"
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
              src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}"
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
              class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col items-center text-center gap-6 sm:gap-8 max-w-6xl"
            >
              <div
                class="relative z-10 flex flex-col items-center text-center gap-4 sm:gap-6 lg:gap-8 w-full max-w-5xl"
              >
                <div class="animate-fade-in-up animation-delay-100">
                  <div
                    class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-4 py-2 text-sm font-semibold"
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
                      class="lucide lucide-star h-4 w-4 mr-2"
                    >
                      <path
                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                      ></path></svg
                    >Earn €900-1,300/Month While Learning
                  </div>
                </div>
                <h1
                  class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl leading-[1.1] max-w-5xl mx-auto text-white drop-shadow-2xl w-full break-words animate-fade-in-up animation-delay-200"
                >
                  Start Your Ausbildung in Germany
                </h1>
                <p
                  class="max-w-5xl mx-auto text-lg sm:text-xl lg:text-2xl text-white/90 font-medium leading-relaxed drop-shadow-lg w-full break-words animate-fade-in-up animation-delay-300"
                >
                  Apply to 67k+ verified positions 10x faster with smart
                  application tools and personalized job matching. Join 85% of
                  trainees who get hired.
                </p>
                <div
                  class="flex flex-col items-center gap-2 animate-fade-in-up animation-delay-400"
                >
                  <div
                    class="z-10 flex -space-x-4 rtl:space-x-reverse justify-center"
                  >
                    <div class="relative h-10 w-10">
                      <picture
                        ><source
                          type="image/webp" />
                        <img
                          alt="Avatar 1"
                          loading="eager"
                          width="40"
                          height="40"
                          decoding="async"
                          data-nimg="1"
                          class="rounded-full border-2 border-white"
                          style="color: transparent"
                          src="{{ asset('assets/_next/hero-avatar-1c9d9.jpeg') }}"
                      /></picture>
                    </div>
                    <div class="relative h-10 w-10">
                      <picture
                        ><source
                          type="image/webp" />
                        <img
                          alt="Avatar 2"
                          loading="eager"
                          width="40"
                          height="40"
                          decoding="async"
                          data-nimg="1"
                          class="rounded-full border-2 border-white"
                          style="color: transparent"
                          src="{{ asset('assets/_next/hero-avatar-2235b.jpeg') }}"
                      /></picture>
                    </div>
                    <div class="relative h-10 w-10">
                      <picture
                        ><source
                          type="image/webp" />
                        <img
                          alt="Avatar 3"
                          loading="lazy"
                          width="40"
                          height="40"
                          decoding="async"
                          data-nimg="1"
                          class="rounded-full border-2 border-white"
                          style="color: transparent"
                          src="{{ asset('assets/_next/hero-avatar-33eed.jpeg') }}"
                      /></picture>
                    </div>
                    <div class="relative h-10 w-10">
                      <picture
                        ><source
                          type="image/webp" />
                        <img
                          alt="Avatar 4"
                          loading="lazy"
                          width="40"
                          height="40"
                          decoding="async"
                          data-nimg="1"
                          class="rounded-full border-2 border-white"
                          style="color: transparent"
                          src="{{ asset('assets/_next/hero-avatar-4ec14.jpeg') }}"
                      /></picture>
                    </div>
                    <div class="relative h-10 w-10">
                      <picture
                        ><source
                          type="image/webp" />
                        <img
                          alt="Avatar 5"
                          loading="lazy"
                          width="40"
                          height="40"
                          decoding="async"
                          data-nimg="1"
                          class="rounded-full border-2 border-white"
                          style="color: transparent"
                          src="{{ asset('assets/_next/hero-avatar-58f5b.jpeg') }}"
                      /></picture>
                    </div>
                    <div
                      class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-white bg-green text-center text-xs font-medium text-white z-20"
                    >
                      +<!-- -->1k
                    </div>
                  </div>
                  <p
                    class="text-sm text-white/80 italic font-medium drop-shadow-md"
                  >
                    Join
                    <!-- -->1k+<!-- -->
                    students starting Winter
                    <!-- -->2026
                  </p>
                </div>
                <div
                  class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 w-full max-w-md mx-auto animate-fade-in-up animation-delay-500"
                >
                  <a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-5 sm:px-8 py-4 sm:py-6 text-sm sm:text-base font-semibold w-full sm:w-auto hover:-translate-y-1 min-h-[48px] inline-flex items-center justify-center"
                    href="jobs.html"
                    >Start Applying</a
                  ><a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-5 sm:px-8 py-4 sm:py-6 text-sm sm:text-base font-semibold w-full sm:w-auto min-h-[48px] shadow-lg inline-flex items-center justify-center"
                    href="#how-it-works"
                    >See How It Works</a
                  >
                </div>
                <div
                  class="w-full mt-4 sm:mt-6 max-w-2xl mx-auto animate-fade-in-up animation-delay-600"
                >
                  <div class="grid grid-cols-3 gap-3 sm:gap-4">
                    <div
                      class="flex flex-col items-center justify-center p-3 sm:p-4 rounded-xl border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 hover:shadow-lg transition-all duration-300 hover:scale-105 animate-scale-in animation-delay-700"
                    >
                      <div class="flex items-center justify-center gap-2 mb-1">
                        <span class="flex-shrink-0 text-white"
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
                            class="lucide lucide-trending-up h-4 w-4 text-green-500"
                          >
                            <polyline
                              points="22 7 13.5 15.5 8.5 10.5 2 17"
                            ></polyline>
                            <polyline
                              points="16 7 22 7 22 13"
                            ></polyline></svg></span
                        ><span class="font-bold text-lg sm:text-xl text-white"
                          >67k+</span
                        >
                      </div>
                      <span
                        class="text-xs text-white/80 font-medium text-center leading-tight"
                        >Live Positions</span
                      >
                    </div>
                    <div
                      class="flex flex-col items-center justify-center p-3 sm:p-4 rounded-xl border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 hover:shadow-lg transition-all duration-300 hover:scale-105 animate-scale-in animation-delay-800"
                    >
                      <div class="flex items-center justify-center gap-2 mb-1">
                        <span class="flex-shrink-0 text-white"
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
                            class="lucide lucide-heart h-4 w-4 text-red-500"
                          >
                            <path
                              d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
                            ></path></svg></span
                        ><span class="font-bold text-lg sm:text-xl text-white"
                          >1k+</span
                        >
                      </div>
                      <span
                        class="text-xs text-white/80 font-medium text-center leading-tight"
                        >German Employers</span
                      >
                    </div>
                    <div
                      class="flex flex-col items-center justify-center p-3 sm:p-4 rounded-xl border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 hover:shadow-lg transition-all duration-300 hover:scale-105 animate-scale-in animation-delay-900"
                    >
                      <div class="flex items-center justify-center gap-2 mb-1">
                        <span class="flex-shrink-0 text-white"
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
                            class="lucide lucide-users h-4 w-4 text-primary"
                          >
                            <path
                              d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                            ></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path
                              d="M16 3.13a4 4 0 0 1 0 7.75"
                            ></path></svg></span
                        ><span class="font-bold text-lg sm:text-xl text-white"
                          >98%</span
                        >
                      </div>
                      <span
                        class="text-xs text-white/80 font-medium text-center leading-tight"
                        >Match Success</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#F2EAD3]"
          >
            <div
              class="absolute inset-0 -z-10 overflow-hidden pointer-events-none"
            >
              <div
                class="absolute left-1/4 top-0 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"
              ></div>
              <div
                class="absolute right-1/4 bottom-0 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"
              ></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
              <div class="animate-fade-in-up">
                <div
                  class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
                >
                  <div
                    class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                  >
                    🇩🇪 Germany&#x27;s Secret to Success
                  </div>
                  <h2
                    class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                  >
                    What is Ausbildung?
                  </h2>
                  <p
                    class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                  >
                    Ausbildung is Germany&#x27;s world-renowned dual education
                    system that combines practical workplace training with
                    theoretical education. It&#x27;s how 60% of Germans start
                    their careers!
                  </p>
                </div>
              </div>
              <div class="max-w-5xl mx-auto mb-16 sm:mb-20">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                  <div
                    class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#344F1F]/15 overflow-hidden animate-fade-in-left"
                  >
                    <img
                      alt="Traditional university education"
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
                      src="{{ asset('assets/_next/university-card-background-winter-v2d699.jpeg') }}"
                    />
                    <div
                      class="absolute inset-0 bg-white/85 backdrop-blur-[0.5px] rounded-2xl"
                    ></div>
                    <div class="relative z-10">
                      <div class="absolute top-0 right-0">
                        <div
                          class="w-10 h-10 rounded-full bg-[#F4991A]/20 flex items-center justify-center"
                        >
                          <span class="text-[#F4991A] text-xl font-bold"
                            >✗</span
                          >
                        </div>
                      </div>
                      <div class="flex items-center gap-4 mb-6">
                        <div
                          class="w-14 h-14 rounded-xl bg-[#F4991A]/10 flex items-center justify-center"
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
                            class="lucide lucide-book-open h-7 w-7 text-[#F4991A]"
                          >
                            <path d="M12 7v14"></path>
                            <path
                              d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"
                            ></path>
                          </svg>
                        </div>
                        <h3
                          class="text-lg sm:text-xl md:text-2xl font-bold text-[#344F1F]"
                        >
                          Traditional University
                        </h3>
                      </div>
                      <div class="space-y-4">
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✗</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >Theory-focused learning only</span
                          >
                        </div>
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✗</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >No income during 4+ years</span
                          >
                        </div>
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✗</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >Uncertain job prospects</span
                          >
                        </div>
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✗</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >High tuition costs</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#F4991A]/30 overflow-hidden shadow-lg animate-fade-in-right animation-delay-100"
                  >
                    <img
                      alt="German Ausbildung vocational training"
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
                      src="{{ asset('assets/_next/ausbildung-card-background004b.jpeg') }}"
                    />
                    <div
                      class="absolute inset-0 bg-gradient-to-br from-white/90 via-white/88 to-[#F4991A]/10 backdrop-blur-[0.5px] rounded-2xl"
                    ></div>
                    <div class="relative z-10">
                      <div class="absolute top-0 right-0">
                        <div
                          class="w-10 h-10 rounded-full bg-[#F4991A]/20 flex items-center justify-center"
                        >
                          <span class="text-[#F4991A] text-xl font-bold"
                            >✓</span
                          >
                        </div>
                      </div>
                      <div class="flex items-center gap-4 mb-6">
                        <div
                          class="w-14 h-14 rounded-xl bg-[#F4991A]/10 flex items-center justify-center"
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
                            class="lucide lucide-handshake h-7 w-7 text-[#F4991A]"
                          >
                            <path d="m11 17 2 2a1 1 0 1 0 3-3"></path>
                            <path
                              d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"
                            ></path>
                            <path d="m21 3 1 11h-2"></path>
                            <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path>
                            <path d="M3 4h8"></path>
                          </svg>
                        </div>
                        <h3
                          class="text-lg sm:text-xl md:text-2xl font-bold text-[#344F1F]"
                        >
                          German Ausbildung
                        </h3>
                      </div>
                      <div class="space-y-4">
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✓</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >Theory + hands-on practice</span
                          >
                        </div>
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✓</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >Earn €900-1,300 monthly</span
                          >
                        </div>
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✓</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >85% job placement guarantee</span
                          >
                        </div>
                        <div class="flex items-center gap-3">
                          <div
                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                          >
                            <span class="text-[#F4991A] text-xs font-bold"
                              >✓</span
                            >
                          </div>
                          <span
                            class="text-sm sm:text-base text-[#344F1F] font-semibold"
                            >Shorter 2-3.5 year programs</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-16 sm:mb-20"
              >
                <div
                  class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-100"
                >
                  <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10"
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
                      class="lucide lucide-building h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]"
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
                    class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                  >
                    Real Company
                  </h3>
                  <p
                    class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium"
                  >
                    Work 3-4 days per week at actual German companies like BMW,
                    Bosch, or Lufthansa
                  </p>
                </div>
                <div
                  class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-200"
                >
                  <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10"
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
                      class="lucide lucide-graduation-cap h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]"
                    >
                      <path
                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"
                      ></path>
                      <path d="M22 10v6"></path>
                      <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                    </svg>
                  </div>
                  <h3
                    class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                  >
                    Learn Theory
                  </h3>
                  <p
                    class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium"
                  >
                    Attend vocational school 1-2 days per week for theoretical
                    knowledge
                  </p>
                </div>
                <div
                  class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-300"
                >
                  <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10"
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
                      class="lucide lucide-trending-up h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]"
                    >
                      <polyline
                        points="22 7 13.5 15.5 8.5 10.5 2 17"
                      ></polyline>
                      <polyline points="16 7 22 7 22 13"></polyline>
                    </svg>
                  </div>
                  <h3
                    class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                  >
                    Earn Money
                  </h3>
                  <p
                    class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium"
                  >
                    Receive monthly stipend that increases each year of your
                    training
                  </p>
                </div>
                <div
                  class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-400"
                >
                  <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10"
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
                      class="lucide lucide-users h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]"
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
                    class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                  >
                    Get Hired
                  </h3>
                  <p
                    class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium"
                  >
                    85% of trainees are offered permanent positions by their
                    training company
                  </p>
                </div>
              </div>
              <div class="animate-fade-in-up">
                <h3
                  class="text-center text-2xl sm:text-3xl font-bold text-[#344F1F] mb-3"
                >
                  Why Choose GoAusbildung?
                </h3>
                <p
                  class="text-center text-[#344F1F]/70 mb-8 sm:mb-12 max-w-2xl mx-auto"
                >
                  Other portals show you jobs. We help you get hired with smart
                  application tools.
                </p>
              </div>
              <div class="max-w-5xl mx-auto">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                  <div
                    class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#344F1F]/15 bg-white/60 backdrop-blur-sm animate-fade-in-left"
                  >
                    <div class="absolute top-4 right-4">
                      <div
                        class="w-8 h-8 rounded-full bg-[#F4991A]/20 flex items-center justify-center"
                      >
                        <span class="text-[#F4991A] text-sm font-bold">✗</span>
                      </div>
                    </div>
                    <div class="flex items-center gap-4 mb-6">
                      <div
                        class="w-12 h-12 rounded-xl bg-[#F4991A]/10 flex items-center justify-center"
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
                          class="lucide lucide-search h-6 w-6 text-[#F4991A]"
                        >
                          <circle cx="11" cy="11" r="8"></circle>
                          <path d="m21 21-4.3-4.3"></path>
                        </svg>
                      </div>
                      <h4 class="text-lg sm:text-xl font-bold text-[#344F1F]">
                        Other Ausbildung Portals
                      </h4>
                    </div>
                    <div class="space-y-3">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✗</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >Job listings only - you&#x27;re on your own</span
                        >
                      </div>
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✗</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >No profile matching - browse blindly</span
                        >
                      </div>
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✗</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >No application tracking</span
                        >
                      </div>
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✗</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >No German prep or interview training</span
                        >
                      </div>
                    </div>
                  </div>
                  <div
                    class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#F4991A]/30 bg-gradient-to-br from-white/80 to-[#F4991A]/5 shadow-lg animate-fade-in-right animation-delay-100"
                  >
                    <div class="absolute top-4 right-4">
                      <div
                        class="w-8 h-8 rounded-full bg-[#F4991A]/20 flex items-center justify-center"
                      >
                        <span class="text-[#F4991A] text-sm font-bold">✓</span>
                      </div>
                    </div>
                    <div class="flex items-center gap-4 mb-6">
                      <div
                        class="w-12 h-12 rounded-xl bg-[#F4991A]/10 flex items-center justify-center"
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
                          class="lucide lucide-zap h-6 w-6 text-[#F4991A]"
                        >
                          <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                          ></path>
                        </svg>
                      </div>
                      <h4 class="text-lg sm:text-xl font-bold text-[#344F1F]">
                        GoAusbildung
                      </h4>
                    </div>
                    <div class="space-y-3">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✓</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >Smart application kits for each job</span
                        >
                      </div>
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✓</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >Match scoring shows your fit (0-100)</span
                        >
                      </div>
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✓</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >Track applications with follow-up reminders</span
                        >
                      </div>
                      <div class="flex items-center gap-3">
                        <div
                          class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0"
                        >
                          <span class="text-[#F4991A] text-[10px] font-bold"
                            >✓</span
                          >
                        </div>
                        <span class="text-sm text-[#344F1F] font-medium"
                          >German learning + voice interview prep</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="py-12 sm:py-16 md:py-20 relative overflow-hidden bg-[#F9F5F0]"
          >
            <div
              class="absolute inset-0 -z-10 overflow-hidden pointer-events-none"
            >
              <div
                class="absolute left-1/4 top-1/4 w-72 h-72 bg-[#F4991A]/5 rounded-full blur-3xl"
              ></div>
              <div
                class="absolute right-1/4 bottom-1/4 w-96 h-96 bg-[#344F1F]/5 rounded-full blur-3xl"
              ></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
              <div
                class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
              >
                <div
                  class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                >
                  Choose Your Path
                </div>
                <h2
                  class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                >
                  What Best Describes You?
                </h2>
                <p
                  class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                >
                  Get personalized guidance based on where you are in your
                  Ausbildung journey
                </p>
              </div>
              <div
                class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 max-w-5xl mx-auto"
              >
                <div
                  class="relative group rounded-2xl border backdrop-blur-md p-4 sm:p-6 transition-all duration-300 hover:shadow-lg cursor-pointer bg-white/60 border-[#344F1F]/10 hover:border-[#F4991A]/30 ring-2 ring-[#F4991A]/20"
                >
                  <div
                    class="absolute -top-3 left-1/2 transform -translate-x-1/2"
                  >
                    <span
                      class="px-3 py-1 bg-[#F4991A] text-white text-xs font-medium rounded-full"
                      >Most Popular</span
                    >
                  </div>
                  <div
                    class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl"
                  ></div>
                  <div class="relative z-10 text-center">
                    <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">🚀</div>
                    <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">
                      I&#x27;m Ready to Apply
                    </h3>
                    <p
                      class="text-xs sm:text-sm text-muted-foreground mb-4 sm:mb-6 leading-relaxed"
                    >
                      Apply 10x faster with AI-generated cover letters,
                      checklists, and email templates
                    </p>
                    <a
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full rounded-full group-hover:scale-105 transition-transform duration-200 bg-[#F4991A] hover:bg-[#E5890F] text-white flex items-center justify-center gap-2"
                      href="auth7d2a.html?signup"
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
                        class="lucide lucide-user-plus h-5 w-5"
                      >
                        <path
                          d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <line x1="19" x2="19" y1="8" y2="14"></line>
                        <line x1="22" x2="16" y1="11" y2="11"></line></svg
                      >Start Applying Free<svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-arrow-right h-4 w-4"
                      >
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path></svg
                    ></a>
                  </div>
                </div>
                <div
                  class="relative group rounded-2xl border backdrop-blur-md p-4 sm:p-6 transition-all duration-300 hover:shadow-lg cursor-pointer bg-white/60 border-[#344F1F]/10 hover:border-[#F4991A]/30"
                >
                  <div
                    class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl"
                  ></div>
                  <div class="relative z-10 text-center">
                    <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">💼</div>
                    <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">
                      I Want to Find Jobs
                    </h3>
                    <p
                      class="text-xs sm:text-sm text-muted-foreground mb-4 sm:mb-6 leading-relaxed"
                    >
                      60,000+ real positions with smart matching to find your
                      perfect fit
                    </p>
                    <a
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full rounded-full group-hover:scale-105 transition-transform duration-200 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] hover:bg-[#F4991A]/10 hover:text-[#F4991A] flex items-center justify-center gap-2"
                      href="jobs.html"
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
                        class="lucide lucide-briefcase h-5 w-5"
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
                        ></rect></svg
                      >Find Jobs<svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-arrow-right h-4 w-4"
                      >
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path></svg
                    ></a>
                  </div>
                </div>
                <div
                  class="relative group rounded-2xl border backdrop-blur-md p-4 sm:p-6 transition-all duration-300 hover:shadow-lg cursor-pointer bg-white/60 border-[#344F1F]/10 hover:border-[#F4991A]/30"
                >
                  <div
                    class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl"
                  ></div>
                  <div class="relative z-10 text-center">
                    <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">🤔</div>
                    <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">
                      I&#x27;m Just Exploring
                    </h3>
                    <p
                      class="text-xs sm:text-sm text-muted-foreground mb-4 sm:mb-6 leading-relaxed"
                    >
                      Check if Ausbildung is right for you in 2 minutes
                    </p>
                    <a
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full rounded-full group-hover:scale-105 transition-transform duration-200 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] hover:bg-[#F4991A]/10 hover:text-[#F4991A] flex items-center justify-center gap-2"
                      href="tools/eligibility-checker.html"
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
                        class="lucide lucide-file-check h-5 w-5"
                      >
                        <path
                          d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                        ></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path d="m9 15 2 2 4-4"></path></svg
                      >Check Eligibility<svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-arrow-right h-4 w-4"
                      >
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path></svg
                    ></a>
                    <p
                      class="text-[10px] text-center text-muted-foreground mt-2 opacity-70"
                    >
                      2-minute smart assessment
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--$-->
          <section
            class="relative py-16 sm:py-20 md:py-24 bg-[#F9F5F0] overflow-hidden"
          >
            <div
              class="absolute inset-0 -z-10 overflow-hidden pointer-events-none"
            >
              <div
                class="absolute left-1/4 top-0 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"
              ></div>
              <div
                class="absolute right-1/4 bottom-0 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"
              ></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
              <div
                class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
              >
                <div
                  class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                >
                  Apply in 30 Seconds
                </div>
                <h2
                  class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                >
                  Apply to These Jobs Instantly
                </h2>
                <p
                  class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                >
                  Generate a complete application kit for any position - cover
                  letter, checklist, and email template in seconds.
                </p>
              </div>
              <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8"
              >
                                <div class="animate-fade-in-up">
                  <div class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(52,79,31,0.1)] rounded-xl shadow-[0_2px_4px_rgba(52,79,31,0.06),0_1px_2px_rgba(52,79,31,0.04)] hover:shadow-[0_10px_20px_rgba(52,79,31,0.1),0_4px_8px_rgba(52,79,31,0.06)] hover:-translate-y-1 hover:border-[rgba(52,79,31,0.15)]">
                    <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                      <div class="flex items-start justify-between mb-4">
                        <div class="flex-shrink-0">
                          <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#F2EAD3] flex items-center justify-center">
                            <span class="text-xs font-bold text-[#344F1F]">SK</span>
                          </div>
                        </div>
                        <div class="inline-flex items-center rounded-full bg-[#344F1F] text-[#F9F5F0] px-2 py-1 text-xs font-medium">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-3 h-3 mr-1"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>5152
                        </div>
                      </div>
                      <h3 class="text-lg font-semibold text-[#344F1F] mb-1 line-clamp-2 leading-tight group-hover:text-[#F4991A] transition-colors">Dual Study Program Bankkaufmann/-frau (m/w/d)</h3>
                      <div class="flex items-center gap-2 text-sm text-[rgba(52,79,31,0.7)] mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#F4991A]"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        <span class="font-medium truncate">Sparkasse KölnBonn</span>
                      </div>
                      <div class="flex items-center text-xs text-[rgba(52,79,31,0.7)] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#F4991A]"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>KölnBonn</span>
                      </div>
                      <div class="flex flex-wrap gap-2 mb-4">
                        <div class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#F4991A]/10 text-[#F4991A] border border-[#F4991A]/20">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-3 w-3"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                          <span>13 interested</span>
                        </div>
                        <div class="inline-flex items-center bg-[rgba(244,153,26,0.1)] text-[#F4991A] px-3 py-1 text-xs font-semibold rounded-full">Finance</div>
                        <div class="inline-flex items-center bg-[#F2EAD3] text-[#344F1F] px-3 py-1 text-xs font-medium rounded-full">Dual Study</div>
                      </div>
                      <p class="text-sm text-[rgba(52,79,31,0.7)] line-clamp-3 leading-relaxed mb-4">Willkommen bei Sparkasse KölnBonn! Diese Ausbildung als Duales Studium Bankkaufmann/-frau (m/w/d) findet in KölnBonn, No...</p>
                    </div>
                    <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                      <a class="block" href="jobs.html">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold h-10 px-6 text-sm w-full transition-all duration-200 group/btn bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full shadow-[0_4px_12px_rgba(244,153,26,0.2)] hover:shadow-[0_8px_20px_rgba(244,153,26,0.25)] hover:-translate-y-0.5 min-h-[44px]">View Details<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/btn:translate-x-1"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="animate-fade-in-up">
                  <div class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(52,79,31,0.1)] rounded-xl shadow-[0_2px_4px_rgba(52,79,31,0.06),0_1px_2px_rgba(52,79,31,0.04)] hover:shadow-[0_10px_20px_rgba(52,79,31,0.1),0_4px_8px_rgba(52,79,31,0.06)] hover:-translate-y-1 hover:border-[rgba(52,79,31,0.15)]">
                    <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                      <div class="flex items-start justify-between mb-4">
                        <div class="flex-shrink-0">
                          <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#F2EAD3] flex items-center justify-center">
                            <span class="text-xs font-bold text-[#344F1F]">KH</span>
                          </div>
                        </div>
                        <div class="inline-flex items-center rounded-full bg-[#344F1F] text-[#F9F5F0] px-2 py-1 text-xs font-medium">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-3 h-3 mr-1"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>6007
                        </div>
                      </div>
                      <h3 class="text-lg font-semibold text-[#344F1F] mb-1 line-clamp-2 leading-tight group-hover:text-[#F4991A] transition-colors">Apprentice (m/f/d) Specialist for Warehouse Logistics</h3>
                      <div class="flex items-center gap-2 text-sm text-[rgba(52,79,31,0.7)] mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#F4991A]"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        <span class="font-medium truncate">Klöpferholz GmbH &amp; Co.KG</span>
                      </div>
                      <div class="flex items-center text-xs text-[rgba(52,79,31,0.7)] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#F4991A]"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>Garching</span>
                      </div>
                      <div class="flex flex-wrap gap-2 mb-4">
                        <div class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#F4991A]/10 text-[#F4991A] border border-[#F4991A]/20">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-3 w-3"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                          <span>19 interested</span>
                        </div>
                        <div class="inline-flex items-center bg-[rgba(244,153,26,0.1)] text-[#F4991A] px-3 py-1 text-xs font-semibold rounded-full">Logistics</div>
                        <div class="inline-flex items-center bg-[#F2EAD3] text-[#344F1F] px-3 py-1 text-xs font-medium rounded-full">Apprenticeship</div>
                      </div>
                      <p class="text-sm text-[rgba(52,79,31,0.7)] line-clamp-3 leading-relaxed mb-4">Willkommen bei Klöpferholz GmbH &amp; Co.KG! Diese Ausbildung als Azubi (m/w/d) Fachkraft für Lagerlogistik findet in Garchi...</p>
                    </div>
                    <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                      <a class="block" href="jobs.html">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold h-10 px-6 text-sm w-full transition-all duration-200 group/btn bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full shadow-[0_4px_12px_rgba(244,153,26,0.2)] hover:shadow-[0_8px_20px_rgba(244,153,26,0.25)] hover:-translate-y-0.5 min-h-[44px]">View Details<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/btn:translate-x-1"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="animate-fade-in-up">
                  <div class="text-card-foreground group relative overflow-hidden transition-all duration-200 h-full flex flex-col bg-white border-2 border-[rgba(52,79,31,0.1)] rounded-xl shadow-[0_2px_4px_rgba(52,79,31,0.06),0_1px_2px_rgba(52,79,31,0.04)] hover:shadow-[0_10px_20px_rgba(52,79,31,0.1),0_4px_8px_rgba(52,79,31,0.06)] hover:-translate-y-1 hover:border-[rgba(52,79,31,0.15)]">
                    <div class="relative p-4 pb-3 md:p-6 md:pb-4">
                      <div class="flex items-start justify-between mb-4">
                        <div class="flex-shrink-0">
                          <div class="w-12 h-12 rounded-lg overflow-hidden bg-[#F2EAD3] flex items-center justify-center">
                            <span class="text-xs font-bold text-[#344F1F]">DB</span>
                          </div>
                        </div>
                        <div class="inline-flex items-center rounded-full bg-[#344F1F] text-[#F9F5F0] px-2 py-1 text-xs font-medium">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-3 h-3 mr-1"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>7679
                        </div>
                      </div>
                      <h3 class="text-lg font-semibold text-[#344F1F] mb-1 line-clamp-2 leading-tight group-hover:text-[#F4991A] transition-colors">Ausbildung as IT Specialist for System Integration (m/f/d)</h3>
                      <div class="flex items-center gap-2 text-sm text-[rgba(52,79,31,0.7)] mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-3.5 h-3.5 flex-shrink-0 text-[#F4991A]"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                        <span class="font-medium truncate">Deutsche Bahn AG</span>
                      </div>
                      <div class="flex items-center text-xs text-[rgba(52,79,31,0.7)] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-3 h-3 mr-1 text-[#F4991A]"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>Berlin</span>
                      </div>
                      <div class="flex flex-wrap gap-2 mb-4">
                        <div class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[10px] font-semibold bg-[#F4991A]/10 text-[#F4991A] border border-[#F4991A]/20">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-3 w-3"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                          <span>15 interested</span>
                        </div>
                        <div class="inline-flex items-center bg-[rgba(244,153,26,0.1)] text-[#F4991A] px-3 py-1 text-xs font-semibold rounded-full">IT &amp; Technology</div>
                        <div class="inline-flex items-center bg-[#F2EAD3] text-[#344F1F] px-3 py-1 text-xs font-medium rounded-full">Apprenticeship</div>
                      </div>
                      <p class="text-sm text-[rgba(52,79,31,0.7)] line-clamp-3 leading-relaxed mb-4">Willkommen bei Deutsche Bahn AG! Diese Ausbildung als Ausbildung zum Fachinformatiker für Systemintegration (m/w/d) find...</p>
                      <div class="flex items-center text-sm font-semibold text-[#344F1F] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-4 h-4 mr-1 text-[#F4991A]"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        <span>€1 241-1 344/EUR</span>
                      </div>
                    </div>
                    <div class="p-4 pt-0 md:p-6 md:pt-0 mt-auto">
                      <a class="block" href="jobs.html">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold h-10 px-6 text-sm w-full transition-all duration-200 group/btn bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full shadow-[0_4px_12px_rgba(244,153,26,0.2)] hover:shadow-[0_8px_20px_rgba(244,153,26,0.25)] hover:-translate-y-0.5 min-h-[44px]">View Details<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-4 h-4 transition-transform duration-200 group-hover/btn:translate-x-1"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
                            <div class="flex justify-center animate-fade-in-up">
                <a href="jobs.html">
                  <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 group bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full shadow-[0_4px_12px_rgba(244,153,26,0.2)] hover:shadow-[0_8px_20px_rgba(244,153,26,0.25)] hover:-translate-y-1 px-8 h-12 text-base">Find Your Match<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-5 h-5 transition-transform duration-200 group-hover:translate-x-1"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                </a>
              </div>
            </div>
          </section>
          <!--/$-->
          <div id="how-it-works">
            <section
              class="py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#F2EAD3]"
            >
              <div
                class="absolute inset-0 -z-10 overflow-hidden pointer-events-none"
              >
                <div
                  class="absolute right-1/4 top-10 w-80 h-80 rounded-full bg-[#F4991A]/5 blur-3xl"
                ></div>
                <div
                  class="absolute left-1/4 bottom-10 w-80 h-80 rounded-full bg-[#344F1F]/5 blur-3xl"
                ></div>
              </div>
              <div class="container mx-auto px-4">
                <div style="opacity: 1; transform: none">
                  <div
                    class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
                  >
                    <div
                      class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                    >
                      How It Works
                    </div>
                    <h2
                      class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                    >
                      Apply 10x Faster in Three Steps
                    </h2>
                    <p
                      class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                    >
                      AI-powered tools that turn hours of work into minutes.
                    </p>
                  </div>
                </div>
                <div class="relative max-w-5xl mx-auto mt-12">
                  <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6 relative"
                  >
                    <div
                      class="relative flex flex-col items-center text-center group"
                      style="
                        opacity: 1;
                        transform: none; scale(0.95);
                      "
                    >
                      <div class="mb-4 sm:mb-6 relative">
                        <div
                          class="absolute -left-2 -top-2 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#F4991A] border-2 border-white flex items-center justify-center text-xs sm:text-sm font-bold text-white z-20 shadow-md"
                        >
                          1
                        </div>
                        <div
                          class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center relative z-10 shadow-md bg-[#F4991A]/10 border-2 border-[#F4991A]/30 text-[#F4991A] group-hover:bg-[#F4991A]/15 transition-all duration-300"
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
                            class="lucide lucide-user h-6 w-6"
                          >
                            <path
                              d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"
                            ></path>
                            <circle cx="12" cy="7" r="4"></circle>
                          </svg>
                        </div>
                        <div
                          class="absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300 bg-[#F4991A]/50"
                        ></div>
                      </div>
                      <div
                        class="bg-white/90 backdrop-blur-sm p-4 sm:p-6 rounded-2xl border border-[#344F1F]/10 group-hover:border-[#F4991A]/20 group-hover:shadow-lg transition-all duration-300 w-full h-full flex flex-col"
                      >
                        <h3
                          class="text-base sm:text-lg font-semibold mb-2 sm:mb-3 text-[#344F1F]"
                        >
                          Complete Your Profile
                        </h3>
                        <p
                          class="text-[#344F1F]/70 text-xs sm:text-sm leading-relaxed flex-grow"
                        >
                          2 minutes to set up your education, language skills,
                          and preferences. Get your eligibility score instantly.
                        </p>
                      </div>
                    </div>
                    <div
                      class="relative flex flex-col items-center text-center group"
                      style="
                        opacity: 1;
                        transform: none; scale(0.95);
                      "
                    >
                      <div class="mb-4 sm:mb-6 relative">
                        <div
                          class="absolute -left-2 -top-2 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#F4991A] border-2 border-white flex items-center justify-center text-xs sm:text-sm font-bold text-white z-20 shadow-md"
                        >
                          2
                        </div>
                        <div
                          class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center relative z-10 shadow-md bg-[#F4991A]/10 border-2 border-[#F4991A]/30 text-[#F4991A] group-hover:bg-[#F4991A]/15 transition-all duration-300"
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
                            class="lucide lucide-chart-line h-6 w-6"
                          >
                            <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                            <path d="m19 9-5 5-4-4-3 3"></path>
                          </svg>
                        </div>
                        <div
                          class="absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300 bg-[#F4991A]/50"
                        ></div>
                      </div>
                      <div
                        class="bg-white/90 backdrop-blur-sm p-4 sm:p-6 rounded-2xl border border-[#344F1F]/10 group-hover:border-[#F4991A]/20 group-hover:shadow-lg transition-all duration-300 w-full h-full flex flex-col"
                      >
                        <h3
                          class="text-base sm:text-lg font-semibold mb-2 sm:mb-3 text-[#344F1F]"
                        >
                          Get AI Application Kits
                        </h3>
                        <p
                          class="text-[#344F1F]/70 text-xs sm:text-sm leading-relaxed flex-grow"
                        >
                          Cover letter, checklist, and email template generated
                          in 30 seconds. Tailored for each job you apply to.
                        </p>
                      </div>
                    </div>
                    <div
                      class="relative flex flex-col items-center text-center group"
                      style="
                        opacity: 1;
                        transform: none; scale(0.95);
                      "
                    >
                      <div class="mb-4 sm:mb-6 relative">
                        <div
                          class="absolute -left-2 -top-2 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#F4991A] border-2 border-white flex items-center justify-center text-xs sm:text-sm font-bold text-white z-20 shadow-md"
                        >
                          3
                        </div>
                        <div
                          class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center relative z-10 shadow-md bg-[#F4991A]/10 border-2 border-[#F4991A]/30 text-[#F4991A] group-hover:bg-[#F4991A]/15 transition-all duration-300"
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
                            class="lucide lucide-clipboard-check h-6 w-6"
                          >
                            <rect
                              width="8"
                              height="4"
                              x="8"
                              y="2"
                              rx="1"
                              ry="1"
                            ></rect>
                            <path
                              d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"
                            ></path>
                            <path d="m9 14 2 2 4-4"></path>
                          </svg>
                        </div>
                        <div
                          class="absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300 bg-[#F4991A]/50"
                        ></div>
                      </div>
                      <div
                        class="bg-white/90 backdrop-blur-sm p-4 sm:p-6 rounded-2xl border border-[#344F1F]/10 group-hover:border-[#F4991A]/20 group-hover:shadow-lg transition-all duration-300 w-full h-full flex flex-col"
                      >
                        <h3
                          class="text-base sm:text-lg font-semibold mb-2 sm:mb-3 text-[#344F1F]"
                        >
                          Apply to More Jobs, Faster
                        </h3>
                        <p
                          class="text-[#344F1F]/70 text-xs sm:text-sm leading-relaxed flex-grow"
                        >
                          10x more applications with the same effort. Smart
                          matching finds your perfect fit so you never miss an
                          opportunity.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="mt-12 text-center"
                  style="opacity: 1; transform: none"
                >
                  <a
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 text-base bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full px-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 inline-flex items-center gap-2"
                    style="min-height: 48px"
                    href="auth7d2a.html?signup"
                    >Start Applying<svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide lucide-chevron-right h-5 w-5"
                    >
                      <path d="m9 18 6-6-6-6"></path></svg
                  ></a>
                </div>
              </div>
            </section>
          </div>
          <!--$-->
          <section
            class="py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#F9F5F0]"
          >
            <div class="absolute inset-0 -z-10 pointer-events-none">
              <div
                class="absolute top-0 left-1/4 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"
              ></div>
              <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#344F1F]/5 rounded-full blur-3xl"
              ></div>
            </div>
            <div class="container mx-auto px-4 relative">
              <div style="opacity: 1; transform: none">
                <div
                  class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
                >
                  <div
                    class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                  >
                    <span class="mr-2"
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
                        class="lucide lucide-zap h-4 w-4"
                      >
                        <path
                          d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                        ></path></svg></span
                    >AI-Powered Tools
                  </div>
                  <h2
                    class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                  >
                    Apply 10x Faster with Smart Tools
                  </h2>
                  <p
                    class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                  >
                    AI-powered application kits, interview prep, and German
                    training - everything you need to get hired
                  </p>
                </div>
              </div>
              <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12"
              >
                <div style="opacity: 1; transform: none">
                  <div class="">
                    <div
                      class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute -top-3 right-6 text-xs px-3 py-1 font-semibold bg-[#F4991A] text-white border-0 shadow-md"
                      >
                        Core Feature
                      </div>
                      <div class="relative">
                        <div
                          class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#F4991A]/10 text-[#F4991A]"
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
                            class="lucide lucide-pen-tool w-6 h-6"
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
                        <h3
                          class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                        >
                          AI Application Kit
                        </h3>
                        <p
                          class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed"
                        >
                          Cover letters, checklists &amp; emails in 30 seconds
                        </p>
                        <div class="flex items-center justify-between">
                          <span class="text-xs text-[#344F1F]/50 font-medium"
                            >Apply 10x faster</span
                          >
                          <div
                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                          >
                            <span>Try Now</span
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
                              class="lucide lucide-arrow-right w-4 h-4 ml-1"
                            >
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="opacity: 1; transform: none">
                  <div class="">
                    <div
                      class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute -top-3 right-6 text-xs px-3 py-1 font-semibold bg-[#F4991A] text-white border-0 shadow-md"
                      >
                        New
                      </div>
                      <div class="relative">
                        <div
                          class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#344F1F]/10 text-[#344F1F]"
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
                            class="lucide lucide-file-text w-6 h-6"
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
                        <h3
                          class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                        >
                          CV Builder
                        </h3>
                        <p
                          class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed"
                        >
                          Professional German CVs in minutes
                        </p>
                        <div class="flex items-center justify-between">
                          <span class="text-xs text-[#344F1F]/50 font-medium"
                            >ATS-optimized</span
                          >
                          <div
                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                          >
                            <span>Try Now</span
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
                              class="lucide lucide-arrow-right w-4 h-4 ml-1"
                            >
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="opacity: 1; transform: none">
                  <div class="">
                    <div
                      class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute -top-3 right-6 text-xs px-3 py-1 font-semibold bg-[#F4991A] text-white border-0 shadow-md"
                      >
                        Most Popular
                      </div>
                      <div class="relative">
                        <div
                          class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#F4991A]/10 text-[#F4991A]"
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
                            class="lucide lucide-message-square w-6 h-6"
                          >
                            <path
                              d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                            ></path>
                          </svg>
                        </div>
                        <h3
                          class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                        >
                          German Language Training
                        </h3>
                        <p
                          class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed"
                        >
                          Master German with conversations
                        </p>
                        <div class="flex items-center justify-between">
                          <span class="text-xs text-[#344F1F]/50 font-medium"
                            >15,000+ learners</span
                          >
                          <div
                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                          >
                            <span>Try Now</span
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
                              class="lucide lucide-arrow-right w-4 h-4 ml-1"
                            >
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="opacity: 1; transform: none">
                  <div class="">
                    <div
                      class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300"
                    >
                      <div class="relative">
                        <div
                          class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#344F1F]/10 text-[#344F1F]"
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
                            class="lucide lucide-video w-6 h-6"
                          >
                            <path
                              d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"
                            ></path>
                            <rect
                              x="2"
                              y="6"
                              width="14"
                              height="12"
                              rx="2"
                            ></rect>
                          </svg>
                        </div>
                        <h3
                          class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                        >
                          Ausbildung Interview Trainer
                        </h3>
                        <p
                          class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed"
                        >
                          Practice with voice coaching
                        </p>
                        <div class="flex items-center justify-between">
                          <span class="text-xs text-[#344F1F]/50 font-medium"
                            >500+ daily sessions</span
                          >
                          <div
                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                          >
                            <span>Try Now</span
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
                              class="lucide lucide-arrow-right w-4 h-4 ml-1"
                            >
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="opacity: 1; transform: none">
                  <div class="">
                    <div
                      class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300"
                    >
                      <div class="relative">
                        <div
                          class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#F4991A]/10 text-[#F4991A]"
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
                            class="lucide lucide-film w-6 h-6"
                          >
                            <rect
                              width="18"
                              height="18"
                              x="3"
                              y="3"
                              rx="2"
                            ></rect>
                            <path d="M7 3v18"></path>
                            <path d="M3 7.5h4"></path>
                            <path d="M3 12h18"></path>
                            <path d="M3 16.5h4"></path>
                            <path d="M17 3v18"></path>
                            <path d="M17 7.5h4"></path>
                            <path d="M17 16.5h4"></path>
                          </svg>
                        </div>
                        <h3
                          class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                        >
                          Video Introduction Studio
                        </h3>
                        <p
                          class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed"
                        >
                          Video profiles with coaching
                        </p>
                        <div class="flex items-center justify-between">
                          <span class="text-xs text-[#344F1F]/50 font-medium"
                            >Stand out from others</span
                          >
                          <div
                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                          >
                            <span>Try Now</span
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
                              class="lucide lucide-arrow-right w-4 h-4 ml-1"
                            >
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="opacity: 1; transform: none">
                  <div class="">
                    <div
                      class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300"
                    >
                      <div class="relative">
                        <div
                          class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#344F1F]/10 text-[#344F1F]"
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
                            class="lucide lucide-clipboard-check w-6 h-6"
                          >
                            <rect
                              width="8"
                              height="4"
                              x="8"
                              y="2"
                              rx="1"
                              ry="1"
                            ></rect>
                            <path
                              d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"
                            ></path>
                            <path d="m9 14 2 2 4-4"></path>
                          </svg>
                        </div>
                        <h3
                          class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]"
                        >
                          Eligibility Checker
                        </h3>
                        <p
                          class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed"
                        >
                          Instant eligibility score
                        </p>
                        <div class="flex items-center justify-between">
                          <span class="text-xs text-[#344F1F]/50 font-medium"
                            >2-minute test</span
                          >
                          <div
                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                          >
                            <span>Try Now</span
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
                              class="lucide lucide-arrow-right w-4 h-4 ml-1"
                            >
                              <path d="M5 12h14"></path>
                              <path d="m12 5 7 7-7 7"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-sm text-[#344F1F]/60 mb-12"
                style="opacity: 1;"
              >
                <div class="flex items-center gap-2">
                  <span class="text-[#F4991A]"
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
                      class="lucide lucide-users w-4 h-4"
                    >
                      <path
                        d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                      ></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span
                  ><span class="font-medium">Smart Profile Management</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="text-[#F4991A]"
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
                      class="lucide lucide-shield w-4 h-4"
                    >
                      <path
                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"
                      ></path></svg></span
                  ><span class="font-medium">Secure Document Vault</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="text-[#F4991A]"
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
                      class="lucide lucide-trending-up w-4 h-4"
                    >
                      <polyline
                        points="22 7 13.5 15.5 8.5 10.5 2 17"
                      ></polyline>
                      <polyline points="16 7 22 7 22 13"></polyline></svg></span
                  ><span class="font-medium">Progress Tracking</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="text-[#F4991A]"
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
                      class="lucide lucide-award w-4 h-4"
                    >
                      <path
                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"
                      ></path>
                      <circle cx="12" cy="8" r="6"></circle></svg></span
                  ><span class="font-medium">Achievement Badges</span>
                </div>
              </div>
              <div
                class="text-center"
                style="opacity: 1; transform: none"
              >
                <p class="text-sm text-[#344F1F]/60 mb-6 font-medium">
                  Join 15,000+ students already applying smarter
                </p>
                <a href="auth7d2a.html?signup"
                  ><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full px-8 py-6 text-base font-semibold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                  >
                    Start Applying<svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide lucide-arrow-right w-5 h-5 ml-2"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></button
                ></a>
              </div>
            </div>
          </section>
          <!-- <section class="py-20 overflow-hidden bg-[#F2EAD3]">
            <div class="container">
              <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                <div class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                  <span class="mr-2"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg></span>Success Stories
                </div>
                <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">1000+ Success Stories</h2>
                <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">Hear from our satisfied students and see how we have transformed their academic journey. Our track record speaks for itself!</p>
              </div>
            </div>
            <div class="relative mt-8">
              <div class="absolute inset-y-0 left-0 w-40 bg-gradient-to-r from-[#F2EAD3] to-transparent z-10 pointer-events-none"></div>
              <div class="absolute inset-y-0 right-0 w-40 bg-gradient-to-l from-[#F2EAD3] to-transparent z-10 pointer-events-none"></div>
              <div class="space-y-4">
                <div class="stories-marquee-track flex gap-[10px]" style="animation: marquee-scroll 10s linear infinite;">
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">BH</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Bhumika</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Koblenz</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Web and Data Science</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">SA</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Sai</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Otto von Guericke University (OVGU)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Electrical Engineering and Information Technology</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">NE</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Neelesh</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Brandenburg University of Technology</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Cyber Security</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">MN</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Mano</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Brandenburg University of Technology</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Hybrid Electric Propulsion Technology</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">AV</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Avtar</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Otto von Guericke University (OVGU)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Data and Knowledge Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">BG</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Bhagat</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Rostock</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Computer Science International</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stories-marquee-track flex gap-[10px]" style="animation: marquee-scroll-reverse 12s linear infinite;">
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">NV</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Nivethashree</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Technical University Dresden (TU...)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Molecular Bioengineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">SL</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Selva</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Paderborn University</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Master of Science in Physics (International)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">OM</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Om</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Applied Sciences Am...</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">International Management & Sustainability</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">AS</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Ashna</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Bonn</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Plant Sciences</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">GV</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Geevarghese</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">High Performance Computing</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">DN</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Daneshwaran</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Mechatronic and Cyber-Physical Systems</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stories-marquee-track flex gap-[10px]" style="animation: marquee-scroll 11s linear infinite;">
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">AK</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Akshay</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Anhalt University of Applied Sciences</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Architecture (DIA)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">AW</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Aswin</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">RWTH Aachen University</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Materials Engineering (International Profile)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">EK</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Ekaansh</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">RWTH Aachen University</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Computer Aided Conception and Production in ME</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">GR</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Garima</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Brandenburg University of Technology</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Artificial Intelligence</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#F4991A]">VM</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Vamshi</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">AI for Smart Sensors and Actuators</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#344F1F]/10 flex-shrink-0 flex items-center justify-center">
                        <span class="text-sm font-bold text-[#344F1F]">DP</span>
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Deepthi</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">RPTU Kaiserslautern</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Computer Science</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10">
              <a href="index.html#success-stories" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 bg-[#F4991A]/10 text-[#F4991A] hover:bg-[#F4991A]/20 rounded-full px-6 py-3 text-sm border border-[#F4991A]/20">View All Success Stories <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
            </div>
            <style>
              @keyframes marquee-scroll {
                0% { transform: translateX(0); }
                100% { transform: translateX(-50%); }
              }
              @keyframes marquee-scroll-reverse {
                0% { transform: translateX(-50%); }
                100% { transform: translateX(0); }
              }
              .stories-marquee-track:hover {
                animation-play-state: paused;
              }
            </style>
          </section> -->

          <!--/$--><!--$-->
          <section class="py-12 sm:py-16 bg-[#F9F5F0]">
            <div class="container mx-auto px-4">
              <div class="max-w-4xl mx-auto">
                <div
                  class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
                >
                  <div
                    class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                  >
                    <span class="mr-2"
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
                        class="lucide lucide-play h-4 w-4"
                      >
                        <polygon
                          points="6 3 20 12 6 21 6 3"
                        ></polygon></svg></span
                    >Video Guide
                  </div>
                  <h2
                    class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                  >
                    Complete Ausbildung Guide
                  </h2>
                  <p
                    class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                  >
                    Learn everything about Germany&#x27;s vocational training
                    system in this comprehensive 6-minute video
                  </p>
                </div>
                <div
                  class="relative rounded-xl overflow-hidden shadow-xl bg-black"
                >
                  <div class="aspect-video relative">
                    <img
                      alt="Ausbildung Video Guide Cover"
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
                      src="{{ asset('assets/_next/ausbildung-video-cover-v2a712.jpeg') }}"
                    /><button
                      class="absolute inset-0 flex items-center justify-center group cursor-pointer bg-black/20 hover:bg-black/30 transition-all duration-300"
                      aria-label="Play video"
                    >
                      <div
                        class="w-20 h-20 rounded-full bg-[#F4991A] flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-300"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-play h-10 w-10 text-white ml-1"
                        >
                          <polygon points="6 3 20 12 6 21 6 3"></polygon>
                        </svg>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/$--><!--$-->
          <section class="py-12 md:py-16 lg:py-20 relative bg-[#F9F5F0]">
            <div
              class="absolute inset-0 -z-10 overflow-hidden pointer-events-none"
            >
              <div
                class="absolute left-1/4 top-1/4 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"
              ></div>
              <div
                class="absolute right-1/4 bottom-1/4 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"
              ></div>
            </div>
            <div class="container">
              <div style="opacity: 1; transform: none">
                <div
                  class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
                >
                  <div
                    class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                  >
                    <span class="mr-2"
                      ><svg
                        class="h-4 w-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                        ></path></svg></span
                    >Popular Sectors
                  </div>
                  <h2
                    class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                  >
                    Find Your Perfect Sector Match
                  </h2>
                  <p
                    class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                  >
                    See job counts, salary ranges, and competition levels for
                    each industry
                  </p>
                </div>
              </div>
              <div class="mb-8">
                <div class="flex gap-6 overflow-x-auto pb-4 scroll-smooth">
                  <div
                    class="flex-shrink-0 w-72 md:w-80"
                    style="opacity: 1; transform: none"
                  >
                    <a
                      class="block group text-center"
                      href="sectors/healthcare.html"
                      ><div
                        class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2"
                      >
                        <div class="relative w-56 h-56 mb-6">
                          <img
                            alt="Healthcare &amp; Nursing mascot"
                            loading="lazy"
                            width="224"
                            height="224"
                            decoding="async"
                            data-nimg="1"
                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                            style="color: transparent"
                            src="{{ asset('assets/_next/mascot_healthcaredcc0.jpeg') }}"
                          />
                        </div>
                        <h3
                          class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight"
                        >
                          Healthcare &amp; Nursing
                        </h3>
                        <p
                          class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs"
                        >
                          Train in one of Germany&#x27;s most in-demand sectors
                          with excellent career prospects and earning potential.
                        </p>
                        <div
                          class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]"
                        >
                          <span>Explore Opportunities</span
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
                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div></div
                    ></a>
                  </div>
                  <div
                    class="flex-shrink-0 w-72 md:w-80"
                    style="opacity: 1; transform: none"
                  >
                    <a class="block group text-center" href="sectors/it.html"
                      ><div
                        class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2"
                      >
                        <div class="relative w-56 h-56 mb-6">
                          <img
                            alt="IT &amp; Software mascot"
                            loading="lazy"
                            width="224"
                            height="224"
                            decoding="async"
                            data-nimg="1"
                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                            style="color: transparent"
                            src="{{ asset('assets/_next/mascot_itc3c5.jpeg') }}"
                          />
                        </div>
                        <h3
                          class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight"
                        >
                          IT &amp; Software
                        </h3>
                        <p
                          class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs"
                        >
                          Start your tech career in Germany with practical
                          training in programming, systems administration, and
                          digital solutions.
                        </p>
                        <div
                          class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]"
                        >
                          <span>Explore Opportunities</span
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
                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div></div
                    ></a>
                  </div>
                  <div
                    class="flex-shrink-0 w-72 md:w-80"
                    style="opacity: 1; transform: none"
                  >
                    <a
                      class="block group text-center"
                      href="sectors/engineering.html"
                      ><div
                        class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2"
                      >
                        <div class="relative w-56 h-56 mb-6">
                          <img
                            alt="Engineering &amp; Technical mascot"
                            loading="lazy"
                            width="224"
                            height="224"
                            decoding="async"
                            data-nimg="1"
                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                            style="color: transparent"
                            src="{{ asset('assets/_next/mascot_engineering75c1.jpeg') }}"
                          />
                        </div>
                        <h3
                          class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight"
                        >
                          Engineering &amp; Technical
                        </h3>
                        <p
                          class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs"
                        >
                          Build your career in Germany&#x27;s world-renowned
                          engineering and manufacturing industries.
                        </p>
                        <div
                          class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]"
                        >
                          <span>Explore Opportunities</span
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
                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div></div
                    ></a>
                  </div>
                  <div
                    class="flex-shrink-0 w-72 md:w-80"
                    style="opacity: 1; transform: none"
                  >
                    <a
                      class="block group text-center"
                      href="sectors/hospitality.html"
                      ><div
                        class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2"
                      >
                        <div class="relative w-56 h-56 mb-6">
                          <img
                            alt="Hospitality &amp; Tourism mascot"
                            loading="lazy"
                            width="224"
                            height="224"
                            decoding="async"
                            data-nimg="1"
                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                            style="color: transparent"
                            src="{{ asset('assets/_next/mascot_hospitality08bf.jpeg') }}"
                          />
                        </div>
                        <h3
                          class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight"
                        >
                          Hospitality &amp; Tourism
                        </h3>
                        <p
                          class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs"
                        >
                          Launch your career in Germany&#x27;s vibrant
                          hospitality industry with international experience.
                        </p>
                        <div
                          class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]"
                        >
                          <span>Explore Opportunities</span
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
                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div></div
                    ></a>
                  </div>
                  <div
                    class="flex-shrink-0 w-72 md:w-80"
                    style="opacity: 1; transform: none"
                  >
                    <a
                      class="block group text-center"
                      href="sectors/logistics.html"
                      ><div
                        class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2"
                      >
                        <div class="relative w-56 h-56 mb-6">
                          <img
                            alt="Logistics &amp; Transportation mascot"
                            loading="lazy"
                            width="224"
                            height="224"
                            decoding="async"
                            data-nimg="1"
                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                            style="color: transparent"
                            src="{{ asset('assets/_next/mascot_logistics757f.jpeg') }}"
                          />
                        </div>
                        <h3
                          class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight"
                        >
                          Logistics &amp; Transportation
                        </h3>
                        <p
                          class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs"
                        >
                          Train in Germany&#x27;s sophisticated logistics
                          sector, managing the flow of goods in Europe&#x27;s
                          largest economy.
                        </p>
                        <div
                          class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]"
                        >
                          <span>Explore Opportunities</span
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
                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div></div
                    ></a>
                  </div>
                  <div
                    class="flex-shrink-0 w-72 md:w-80"
                    style="opacity: 1; transform: none"
                  >
                    <a class="block group text-center" href="sectors/sales.html"
                      ><div
                        class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2"
                      >
                        <div class="relative w-56 h-56 mb-6">
                          <img
                            alt="Sales &amp; Retail mascot"
                            loading="lazy"
                            width="224"
                            height="224"
                            decoding="async"
                            data-nimg="1"
                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                            style="color: transparent"
                            src="{{ asset('assets/_next/mascot_sales9644.jpeg') }}"
                          />
                        </div>
                        <h3
                          class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight"
                        >
                          Sales &amp; Retail
                        </h3>
                        <p
                          class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs"
                        >
                          Develop professional sales and customer service skills
                          in Germany&#x27;s diverse retail landscape.
                        </p>
                        <div
                          class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]"
                        >
                          <span>Explore Opportunities</span
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
                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div></div
                    ></a>
                  </div>
                </div>
              </div>
              <div class="flex justify-center mt-8">
                <a
                  href="{{ route('front.sectors') }}"
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base rounded-full border-2 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] hover:text-[#F4991A] hover:bg-[#F4991A]/10 font-semibold hover:shadow-lg transition-all duration-300"
                  style="opacity: 1; transform: none"
                  >Explore All Sectors<svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="w-4 h-4 ml-2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    ></path></svg
                ></a>
              </div>
            </div>
          </section>
          
          <section
            class="py-12 sm:py-16 md:py-20 relative overflow-hidden bg-[#F2EAD3]"
          >
            <div
              class="absolute inset-0 -z-10 overflow-hidden pointer-events-none"
            >
              <div
                class="absolute left-1/4 top-1/4 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"
              ></div>
              <div
                class="absolute right-1/4 bottom-1/4 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"
              ></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <section class="py-20 overflow-hidden bg-[#F2EAD3]">
            <div class="container">
              <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                <div class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                  <span class="mr-2"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg></span>Success Stories
                </div>
                <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">1000+ Success Stories</h2>
                <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">Hear from our satisfied students and see how we have transformed their academic journey. Our track record speaks for itself!</p>
              </div>
            </div>
            <div class="relative mt-8">
              <div class="absolute inset-y-0 left-0 w-40 bg-gradient-to-r from-[#F2EAD3] to-transparent z-10 pointer-events-none"></div>
              <div class="absolute inset-y-0 right-0 w-40 bg-gradient-to-l from-[#F2EAD3] to-transparent z-10 pointer-events-none"></div>
              <div class="space-y-4">
                <div class="stories-marquee-track flex gap-[10px]" style="animation: marquee-scroll 10s linear infinite;">
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DTQKotcD9WH/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Avtar" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/NV5lfKR9pwY87K85EYByWA/WkZ7SIwljgYI2E6Q92nVhqtezgCi7lmLhoHXHYNxaLq-7Xeei67bdxbmA-qdTROmQycHjwyfz2zj5ACpzUfa7ume5hL_gS0uaRIIA9ayhy2yzx3d4fJBZAoS647MkWS0ZerF65af-FJBlDX8itWCfg/2oDxDa2eXYlEvdFXathT4RqV3PBbKHyBrUTYtZimxxA">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Avtar</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Otto von Guericke University (OVGU) Magdeburg</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Data and Knowledge Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DTQKotcD9WH/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Bhagat" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/HTgZq8ZfdHygBS7oMsLQaw/A3tMmBrwMgfoh-4OrnxOzExMKnxXMKqT2zt7Gm-3RTbsW6OgW3xO9vLr1e1ylhDnYeZ5AlD0iXzz5CBs-MZd2rwD0m5yqebB6ti9qvxpbb-HAbA0SW3OZb6uqSnE-EDvYidHtoLHWxNFOZtvhkZu8g/bugEP824Rx1MKP8nlnlvSzMzKnNMndqykwwT2BqeWBo">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Bhagat</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Rostock</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Computer Science International</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DTAioS5j87b/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Geevarghese" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/Bh4jHeuNZSjZSVBMLLUBlw/ylg0x0uu9JszzpLux2ZDN7PD3KlAST_EzQFp6Jaa87e0-NIBogrRImFcyNRfYIrbDWLWrysvZJy1bSrN0FIAAE5hRodcEpnNs7cYFooybMKv2MGnI1mHsNhDezV31bScj5yCBRqyuyeISvRgnH96BQ/agnwEBtGeR4cmlV2UaIYBswd0QOHrUX7swL0bFC9Hi0">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Geevarghese</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology (TH Deggendorf)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">High Performance Computing / Quantum Computing</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DTAioS5j87b/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Daneshwaran" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/t5-mCiSM3_827IRf41gE-A/axhjIfhCMH5aRWIdIdQLORDf4qRjgS2jJ036zFJTbKLE-7Su4PRQ2MS6iBA2KowfaLizj_o52YEBKTbbw6YpMhpXoo1O76qhyuyRn3WbPdha7wF-gId6HwnB83QCgcBhqr1EYeybc_I3QSWZo4sIgg/KPZkCIXLQN4BvtlS_Z2cBtomENj6PgCo7_SwYKb9JnI">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Daneshwaran</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology (TH Deggendorf)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Mechatronic and Cyber-Physical Systems</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DTAioS5j87b/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Vamshi" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/xZ4k7Jw3CtSBUzEb3LFhJQ/Uh68HfNBMrGR0xlLQIdZs8dLxn7Jct90wxYxioWp_sLvkVdHbUUqnCJAN7NadHrmP42hD17p7Qh-VbKI9dHZiFAkmZ2AEAT6XhivfQY4Y0gCl2yLreeVvwY32EcQuLA_B72WdldiaQysQFXvgEB19w/ACBheroQBtqaafCgWzL3p7nG1gv2KNo2M2qtLr5TQSI">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Vamshi</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology (TH Deggendorf)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">AI for Smart Sensors and Actuators</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DS1lpytD1kV/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Deepthi" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/tnN41oKOH5a_FmhzeZp00w/dfqNXXMxG7ZxD0D5LtuR4vawDjOOWNuDYLSDr9s6F0Fm5XkOo9feRH8b2E4Vc1hqb0VGg-sl7wQ8qXvIUp0OH2L_NhoOaSIdbxHnRTT_Y_yhYhjCVgAJIo9U_R1cGoqpDrgq2MgR72JBlNMyQZe-uQ/NFUCRi3ItXI1mlZADd6WdPNb42kHv-doHSj3gG0j05Y">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Deepthi</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">RPTU Kaiserslautern</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Landau - Computer Science</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DS1d-LaD-5K/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Srinidhi" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/D1yRb4z-SnX81znUjd7S-Q/05nG3EioHx0wOaUjSz9aKp5GHWlfSl1CJdSRLCMjPjiQucnPUdZeFjfTdzU58pQ9wT8Zsh6L70l0jZ9KISdxCB7BAGegGSMC47uZfvmar8wzy1fSP1PQZ_G-lvMWT8dUVlYIaWWfAPy8szevlauR_A/0RmmBGXryOnRsVz5clvfByFQu-hu_yx8PSg9KQO2wzQ">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Srinidhi</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Anhalt University of Applied Sciences</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Molecular Biotechnology (MSc)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DSSMfFpj4TE/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Trishul" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/8WYhTOZjti8Rhz_cn_A2kQ/x4qAppMDZuncjEYACtipuRHOzS6mvt7y6Mvq8bdnZCQwwAufQfwdhQ-FJp7imGNPrGne9j0cyE3TVtwddB3VL4DNTZu16MHhaVRZTbM06Ic8aDCljGl9SUShTGJKU-ukAgCjKex4xx4bFeD15DII1g/QgMUjhuuIHMrcKhA2eyfwDvdMnldNSUsmbwYovFsSLk">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Trishul</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Furtwangen University (HS Furtwangen)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Business Consulting Master (BCM)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DQrWiBPj4Gv/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Thushar" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/KZcGu27b_WKRJcgyEIzGyw/hMPo8U6yaiHB8CSmu3ROSYZKEE_aSN-MyDtL6jVwvMdjNjmxz4nK797h7wpPuzGxy9sdmkKHfaSAo7aYO1lAiI7ts5tZ7RoC0xugw4G4xUllwMc1ipLAblo2LmgHa7mJ5xejq6v1O6zMXjAMtCBbgg/KrU-ZudwW4U6u3Tw4_WPlnhqG1BzXUDQqOyK_EAYrRQ">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Thushar</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Rostock</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Sustainable Maritime Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stories-marquee-track flex gap-[10px]" style="animation: marquee-scroll-reverse 12s linear infinite;">
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DQ4LPcZDxBE/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Divili" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/dvm6eB-UDESTUT_xVNGOvQ/1ayPVuKt8ZylWGoAnovnyy_R9beubvlPDhxNAXEFdj17obr9379R0TTYlak-sSMGFH4BiR0n6ULGCOsUg8EqlDm-xo0VCX_Sh3UIf8gpYANelNYXJ-H0p0iYwxJ6IUNPGhjNzMOK8U8FFN2PtDh6WA/UVlqXbQfveGqwX-L0ygCilFbQt3nOVstRhdglaj9Va8">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Divili</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Erlangen-Nuremberg (FAU)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">MSc Electromobility - ACES</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DRPSbc2D3iQ/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Nandhagopal" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/ywbS1Ci6J6cnt98al0CICw/Hhe1dpGJKWSyazm-IYlHtuKJyU--p27nYflZnycPURivp-CiUGOGu7xQlcmUSQi6beQp_gbfs7C3xGqBg0SEWtq-LPsHILRLPWX37_2T2Zfkf0S_51EnLqvP4b25kuFApAxeUs9iEFHQBrDNrgPLqA/v8rAO1vNVldrF1iJvxqCYTcWZZG3LCdOAHKb6wSQi9I">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Nandhagopal</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Rostock</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Sustainable Maritime Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DRXJG-7j9qA/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Reminiscere" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/EC8VIVCWOPr2Xp7tFUzATg/00LL0iB-C2zdaVuCB9InYeGB43sJ55yHHvOKyhbqbxKn2Rxubci_unCkiWjkHxkaoPxxv-tsmIngdxq00c2Dak-2K-uctJRrReaq6z1D-N9fbj97QvPlvtyo5OWNi-tkdBZCbfEfZfz3JFGx1CveSA/5FdeDv9DIUJzJBQXTLMFnPSj4VKuIHtvu7YnSYzOb3Y">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Reminiscere</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Osnabruck University</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Economics</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DRhoVKOjcmP/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Pavin" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/crr5YDinHZrmTyqdRUDcYw/PJCfR3srqPNBvwWDj2KlhSKVeBthX2i5-UWoNjqGRxwiwzIyrq5E0GgDw4ctfyFYQp3swZHJXOWqfh--4apO_3DPtmHC2iKI78-2DSOsW1QP-JWIp3w4JTiBNeO98b6_Hb4KEpaAVi9cq4hyDdMA1w/od6kBPi9FcCtaUIn69Cblgrn88c5pXirlHvrsJwW9rQ">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Pavin</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology (TH Deggendorf)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Automotive Software Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DRhoVKOjcmP/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Dhinesh" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/VBx_hoKZK-IUgSv0JFPc8g/JQwa6F1L-e8u9T300TD1TXHMAIEBAxiOPcoDWdi2eXRUPB88VIHqMyJfQr10echmwQYz70gs0XyXjRiA6HarGN_SaTqMy_GwsrGSzkVpFZyel9yziKuK4GOlFaX0c9mmV7IBe-3QUPw34hm7utHAdQ/xR1j_9BgKIq0zo2mC1AXnHT1dBmSQH9a5Cfw1ISXE4E">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Dhinesh</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Deggendorf Institute of Technology (TH Deggendorf)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">AI for Smart Sensors and Actuators</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DQbD7PTDxnk/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Aswin" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/w_IXoxRTYQyUFSYO4YBtqA/XFTgfrpBAb9RAZsTlJij5ZGkKqIr2_YMi6-dJnlV34rbx_ME4fAnAI_mTwru1LEUjr0pHENoRYd047iZaVlbTq2xEf_pIKD6c9LYcXSF3wuCtTb-PMdEpTOgsADNvdOsa1fLHAszbwdtnh92h3BmEg/9Ld-EKhSfSMis7Mbc3fD2xPqKcNOK2ioAADbejG_OZI">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Aswin</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">RWTH Aachen University</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Materials Engineering (International Profile)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Summer 2026</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DO6E1DdD2-j/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Sohel" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/k7WU42cRpNJmYU_WH8QJgQ/6N0wWYNmZx8M93VFEIRZCCirbzdKXH91mq3-dcdiGD5a3_HEYRSvSdNP7HDA6quuKEXlFuZ_yYtapWSSAjqQRhxGWhGyADs24TTw3yIaVyWZVj7Mc_zUXwImLPoNoFPv-GYMRJ-OjvoSJG4Vpyjv5Q/mgCGoYs_QubfumX2uTKV0aHvcV_-zZeOW7i_RgFFltg">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Sohel</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Freiburg</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Mathematics in Data and Technology</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DO6E1DdD2-j/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Aditya" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/EjdJn8aDmp8EWQ1IHvYKiQ/q0T6WzXFPZlaxzDIfug6nEBUs2PTdzmYhO5hFdskWlv14JTub2kfNmWAveyg2dJd4EUsF3t39rDQG1eTPNk_5Abu3JZB6OuDmpUWowWCcMsepgCHrgxWpEOAJsstU3lmgID2WGls1_UNJM0mym5oYA/KqwS11j4RrOaklYnOoCsszn0IUnthPFPn44pHBMBR0Q">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Aditya</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Otto von Guericke University (OVGU) Magdeburg</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Chemical and Energy Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DOxm0oID7nW/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Rithika" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/zal8g28XT_4jDWruYqr-Lw/BtbzzLdlvLIXcLrkKeJOhwhJokgwnR61JugvFq7B8nEgDMd1PWxLVDqyndMEDZXejFeeX58oun1ZqQXhLgAH4lr95vkVC3rTTy-Qn1Mau9-ORn_ShEwdAvSO08NTPlYDQjTIX93p8KIBSm1h3J2moA/wLFmWbKGeWd8Sr_8Jb-pRHhbq3RSw6Htld5Wc-Wixno">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Rithika</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Braunschweig University of Technology (TU Braunschweig)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Quantum Technologies in ECE (Master)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DOxm0oID7nW/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Kartikey" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/v9Qn7V9MlNKg8SwkRvXPQQ/aRDa7_FSvSwXvZFshO2XzeaV5vpN1SP3JA07ZvbgnEvuOx7fx420_UXEXmF5ttUfd1r1jyT2MGb6p0B7_178IdT34HxT9gSji9G6c_eEXFQslW9YcfkjlXH8fVvPUIvnEzcCubUfg1oszQMFQMG3HA/6g-Pey9k0yhL9omY1m4ZM06smPFdgVVbrQmjrDCdmdQ">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Kartikey</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Braunschweig University of Technology (TU Braunschweig)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Quantum Technologies in ECE (Master)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stories-marquee-track flex gap-[10px]" style="animation: marquee-scroll 11s linear infinite;">
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DOgT2DOD1ce/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Afras" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/W78EbQ5nluu9XwT0o95mag/qifPvnzCP8BZz5zfkIsDdO1F76V2dxzUxsKEokJVIFUGoGfZGF3uxxruFEnPSOmFmMHun4Auwu-ZjNCsdtjHiszo4PJgO54w2947pMMSVWpnh7tKVf7uAB8ckGfwicmyRLXYNRYO3ma7xTIwwUz3xg/ijTWb9fs8L_cBqk1QFa7F9JG6ZuiZV4oQ_JoW-yvkWU">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Afras</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Clausthal University of Technology (TU Clausthal)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Intelligent Manufacturing</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DOgT2DOD1ce/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Sanath" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/gtyfS8mou0xRRZYB7kayKQ/QZzoi2yfIorHWTYNclQh0Tam7M0BI9b3tkI2rBLoDhBhfvDpkl-EUmKgHn1XEMZ0bvNJASE0DVZv-IlZ6kc5omi-YP7QPzeK79PpjMG_RzYQcHLQ7zX1eDAS_LtpCTkVQkGGpVG-Y3wlBbI6DSEklw/076kDKH7Q1hGbazKK4FjhYG4e65IB2PMQZgxokQXtYI">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Sanath</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">University of Passau</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Computer Science</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DN42I7OD9LR/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Anirudh" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/r9Lu1bzlNiEaGFr9nsp5OA/2MEkqSPr3g30TYTE_CQCONvskY2Xa3jBYqq2zlxN4GRxnYmvFa9071Td0E9Axg-9jXheFUQhZVrIuJdvUCtYHmK9dlDfC7D7nCKl4eGDOE4VtYOL11BaHjIfdV93GeffjDUcFhM09d2vJj2XV21m9w/rTbVjFlI6703YMgjYBkC_gC4BjmvBFdmebA_JYIslVA">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Anirudh</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Technical University Dresden (TU Dresden)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Computational Modelling and Simulation</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DN42I7OD9LR/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Alex" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/xmv4EyEwuW-590rn6yh_mA/r75WHV-RMhpSGWam7W0VYbalV8nM9aPHsc58zBZIpcXTWQcopgYaZB5GbwiCxjLela4NKnPh4wBBREYe5RjHvhU0WlTgndJD6U9bI4Z0c6gJ9fDKKES-K0_k1maR57oArSrBzMpOuOnEQ972cawMqg/ZxH_-hqFIssp9Hz0LvS-xFTvRnSkEySLUB-Eu3iGt-U">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Alex</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">HTW Dresden University of Applied Sciences</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Environmental Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DN42I7OD9LR/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Lekshmi" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/Kus92QLaahQOOm1Td5MQ1g/aRj-0yw5GbrxVcV3ThV-UJjcEVod4zscJen3rucSHkR0RpZKzBrGDQm-hOdjjl3RcBIJsvtGIUzpDxL9WqF-s2t-XRjxYyME7wr-N6dBGH8YR24sb6pj-mPbkidXC18ZDQ96Hh6YDC9kzrm7WfZFoQ/9jV2B0reArX59FVbniuJGRWL5j1T--YEl0aG13kjvvY">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Lekshmi</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Leuphana University of Luneburg</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Management &amp; Entrepreneurship</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DNplwMiP2tF/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Shadan" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/5uOxDdKWU706LyZHOlQ4-A/gA-0RRUcCahi9SfW2JFDcGydbloC--URxF035QjQuqq6g_jpomCsY3_ZtQzSXabKG0-3r09m9H21KW82fo0E5BcyoL6jT7CmXi7l1R3lz1_V4VBw7eq52uDc70TZ_xupuisuV1G9Sdm54W7C8jLriw/HqeSyVVAAe-FACAZe_cOHcqZwUYfHG7T_IF4-y0ZBnE">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Shadan</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Europa University Viadrina</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">International Business Administration (MSc)</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DNplwMiP2tF/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Harish" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/3CQ7R5eCXzcmAM3lPYnN-g/a9ea6pvnvPW3m1d0hrvv2FnhgNuy6nr9V1M1hmChkr8KkhkNmIWfKppiu-dbzp7EZNdO6NZAcDOhZp8VJkCieuhM_07SHeMshVoSxdgAxw9Pq6T917ElFheulnHUWLN_UOTYEJvknIrbhcEZXapJ8Q/J2n8cAAk_NBwFmNAYYWSOpJYyykg4x40JZ45sXnaYL8">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Harish</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Europa University Viadrina</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Digital Entrepreneurship</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DNplwMiP2tF/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Abin" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/uj4k86BKfkBui-62E44VbA/bzt50F6DHcZXYROMgOJix_kRZiuTYQ1DyfA2hpP7UWqorPJnOA9umGPz4kZZhU5JpKIyGpeegEUr0qAXA5LY16RjzA3G_Dqmhd2RGcXvtOmYUYSc6ju82aQqkmIzc3eGU8CAMtQteBaMvE8XBvdvVA/LpZRXCQPrKCqBa0limrPobQhKgMXUkjmZt3IXiSu3Tg">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Abin</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Rhine-Waal University of Applied Sciences</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Design and Interaction</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex-shrink-0 relative group w-[320px] sm:w-[360px] h-[160px] rounded-lg p-4 sm:p-6 bg-white/50 backdrop-blur-sm border border-[#344F1F]/10 hover:bg-white/80 transition-colors duration-300">
                    <a href="https://www.instagram.com/p/DNplwMiP2tF/" target="_blank" rel="noopener noreferrer" class="absolute top-2 right-2 p-1.5 rounded-full bg-white/50 backdrop-blur-sm hover:bg-white/80 transition-colors duration-200 text-[#344F1F]/60 hover:text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                    <div class="flex items-start gap-3">
                      <div class="w-12 h-12 rounded-full overflow-hidden bg-[#F4991A]/10 flex-shrink-0">
                        <img alt="Bhagya" class="w-full h-full object-cover" src="https://v5.airtableusercontent.com/v3/u/50/50/1773093600000/27IYQCsQROVJCs2_H-wJ5Q/P5OgkWWcZtTe5GyYUKml4fVHlW2flvM3TdH1WDAt_xISKmD_BBb3pEQradNHuZmQXvIPghPBsy_CFnDhV7ZyPlATBmx1uLgHsacATrl2YNwt4ajGVHOz48X7FatJ05gmPv8oI9yBfoVBzAB6Cl2iDw/HUeNQXVUlClK4aMeLUZ0KSvFUnh2r2RzccEDZf2aIhs">
                      </div>
                      <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-base truncate mb-0.5 text-[#344F1F]">Bhagya</h3>
                        <p class="text-sm text-[#344F1F]/60 truncate mb-0.5">Ilmenau University of Technology (TU Ilmenau)</p>
                        <p class="text-sm text-[#344F1F]/60 mb-1">Research in Computer &amp; Systems Engineering</p>
                        <p class="text-sm text-[#F4991A] font-medium">Winter 2025</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-10">
              <a href="index.html#success-stories" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 bg-[#F4991A]/10 text-[#F4991A] hover:bg-[#F4991A]/20 rounded-full px-6 py-3 text-sm border border-[#F4991A]/20">View All Success Stories <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
            </div>
            <style>
              @keyframes marquee-scroll {
                0% { transform: translateX(0); }
                100% { transform: translateX(-50%); }
              }
              @keyframes marquee-scroll-reverse {
                0% { transform: translateX(-50%); }
                100% { transform: translateX(0); }
              }
              .stories-marquee-track:hover {
                animation-play-state: paused;
              }
            </style>
          </section>
              <div
                class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center"
              >
                <div
                  class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit"
                >
                  <span class="mr-2"
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
                      class="lucide lucide-circle-help h-4 w-4"
                    >
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                      <path d="M12 17h.01"></path></svg></span
                  >Common Questions
                </div>
                <h2
                  class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl"
                >
                  Frequently Asked Questions
                </h2>
                <p
                  class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl"
                >
                  Everything you need to know about Ausbildung programs in
                  Germany and how GoAusbildung helps you apply
                </p>
              </div>
              <div class="max-w-4xl mx-auto">
                <div class="space-y-4">
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="true"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        What is Ausbildung and how is it different from
                        university?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0 rotate-180"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-96 opacity-100"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Ausbildung is Germany&#x27;s dual education system
                            that combines practical workplace training (3-4
                            days/week) with theoretical education (1-2
                            days/week). Unlike university, you earn €900-1,300
                            monthly while learning, have guaranteed job
                            relevance, and complete training in 2-3.5 years
                            instead of 4+ years.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        Can international students apply for Ausbildung
                        programs?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Yes! Germany welcomes international students for
                            Ausbildung programs. You&#x27;ll need basic German
                            skills (usually B1 level), completed secondary
                            education, and a visa. Our platform helps you
                            through the entire application process including
                            visa guidance.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        How much can I earn during Ausbildung training?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Ausbildung trainees earn between €900-1,300 per
                            month during training, with the amount increasing
                            each year. After completion, average starting
                            salaries range from €2,500-4,000+ monthly, depending
                            on the field and location.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        What German language level do I need for Ausbildung?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Most Ausbildung programs require B1 German level
                            (intermediate). Some technical fields may accept A2
                            level initially. We offer German language courses
                            from A1 to B2 to help you reach the required level.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        Which sectors offer the best Ausbildung opportunities?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            High-demand sectors include IT &amp; Technology,
                            Healthcare &amp; Nursing, Engineering &amp;
                            Manufacturing, Hospitality &amp; Tourism, and
                            Business &amp; Finance. IT and healthcare sectors
                            often offer the highest salaries and best job
                            security.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        How is GoAusbildung different from other job portals?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Other portals list jobs and leave you on your own.
                            GoAusbildung provides smart application tools that
                            generate personalized cover letters, match scores
                            showing your fit for each job, application tracking
                            with follow-up reminders, and German learning +
                            interview preparation tools.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        How does the smart cover letter generator work?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Select any job, click &#x27;Apply with Help&#x27;,
                            and get a complete German cover letter in 30
                            seconds. Our system reads the actual job
                            requirements and matches them with your profile to
                            create personalized, professional Anschreiben in DIN
                            5008 format - the standard German employers expect.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        Is the platform really free?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Yes! All AI tools are completely free with no limits
                            - unlimited application kits, CV exports, cover
                            letters, and German learning tools. For students who
                            want expert help, our &#x27;Apply For Me&#x27;
                            consultation service handles everything: 30+
                            applications submitted by our team, native German
                            cover letters, and dedicated counselor support.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        Are the generated cover letters professional quality?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Yes. The cover letters are professional German in
                            DIN 5008 business format. They&#x27;re personalized
                            with your real experience and the job&#x27;s
                            specific requirements - not generic templates. Each
                            letter uses proper salutation, 4-paragraph format,
                            and formal closing.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20"
                  >
                    <button
                      class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                      aria-expanded="false"
                    >
                      <h3
                        class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors"
                      >
                        How do I track my applications?
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
                        class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg>
                    </button>
                    <div
                      class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden"
                    >
                      <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                          <p
                            class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed"
                          >
                            Every application kit you generate is automatically
                            tracked. You&#x27;ll see status updates, suggested
                            follow-up dates based on company response patterns,
                            and can log when you hear back. No more spreadsheets
                            - everything in one dashboard.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-12">
                <p class="text-[#344F1F]/70 mb-4 font-medium">
                  Ready to start your Ausbildung journey? Create your free
                  account today
                </p>
                <div
                  class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center"
                >
                  <a
                    href="auth7d2a.html?signup"
                    class="inline-flex items-center justify-center px-4 sm:px-6 py-2.5 sm:py-3 rounded-full bg-[#F4991A] text-white text-sm sm:text-base font-semibold hover:bg-[#E5890F] hover:shadow-lg transition-all duration-300"
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
                      class="lucide lucide-user-plus h-4 w-4 mr-2"
                    >
                      <path
                        d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                      ></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <line x1="19" x2="19" y1="8" y2="14"></line>
                      <line x1="22" x2="16" y1="11" y2="11"></line></svg
                    >Get Started Free</a
                  ><a
                    href="ausbildung-faq.html"
                    class="inline-flex items-center justify-center px-4 sm:px-6 py-2.5 sm:py-3 rounded-full border-2 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] text-sm sm:text-base font-semibold hover:bg-[#F4991A]/10 transition-all duration-300"
                    >View All FAQs</a
                  >
                </div>
              </div>
            </div>
          </section>
          <!--$-->
          <section
            class="relative w-full px-4 py-12 md:py-16 lg:py-20 bg-cream"
          >
            <div class="max-w-7xl mx-auto">
              <div
                class="relative overflow-hidden rounded-[24px] md:rounded-[32px] px-6 py-8 md:py-12"
              >
                <img
                  alt="Professional German workplace environment"
                  loading="lazy"
                  decoding="async"
                  data-nimg="fill"
                  class="object-cover object-center rounded-[24px] md:rounded-[32px]"
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
                <div
                  class="absolute inset-0 bg-black/30 z-0 rounded-[24px] md:rounded-[32px]"
                ></div>
                <div
                  class="absolute inset-0 z-[1] rounded-[24px] md:rounded-[32px]"
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
                <div class="relative z-10 text-center space-y-6 md:space-y-8">
                  <h2
                    class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight text-white px-4"
                    style="opacity: 1; transform: none"
                  >
                    Ready to Apply 10x Faster?
                  </h2>
                  <p
                    class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto px-4"
                    style="opacity: 1; transform: none"
                  >
                    Smart application kits. Intelligent job matching. Get hired,
                    not overlooked.
                  </p>
                  <div
                    class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6 mt-8"
                    style="opacity: 1; transform: none"
                  >
                    <a
                      class="group relative inline-flex items-center gap-3 px-8 py-4 rounded-full overflow-hidden"
                      style="
                        background-color: rgba(0, 0, 0, 0.11);
                        border-radius: 118px;
                        box-shadow:
                          rgba(0, 0, 0, 0.067) 0px 2.51941px
                            2.51941px -0.46875px,
                          rgba(0, 0, 0, 0.067) 0px 5.97144px 5.97144px -0.9375px,
                          rgba(0, 0, 0, 0.063) 0px 10.8925px
                            10.8925px -1.40625px,
                          rgba(0, 0, 0, 0.063) 0px 18.1088px 18.1088px -1.875px,
                          rgba(0, 0, 0, 0.06) 0px 29.2442px 29.2442px -2.34375px,
                          rgba(0, 0, 0, 0.055) 0px 47.8699px 47.8699px -2.8125px,
                          rgba(0, 0, 0, 0.043) 0px 82.4287px
                            82.4287px -3.28125px,
                          rgba(0, 0, 0, 0.024) 0px 150px 150px -3.75px;
                      "
                      href="jobs.html"
                      ><div
                        class="absolute inset-[3px] rounded-[114px] bg-white z-0"
                      ></div>
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
                        class="lucide lucide-user-plus w-5 h-5 text-[#344F1F] relative z-10"
                      >
                        <path
                          d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <line x1="19" x2="19" y1="8" y2="14"></line>
                        <line x1="22" x2="16" y1="11" y2="11"></line></svg
                      ><span
                        class="relative z-10 text-base md:text-lg font-medium text-[#344F1F]"
                        style="font-weight: 500; letter-spacing: -0.04em"
                        >Start Applying Now</span
                      ></a
                    ><a
                      class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full border-2 border-white/80 hover:border-white text-white hover:bg-white/10 transition-all duration-300"
                      href="tools/eligibility-checker.html"
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
                        class="lucide lucide-file-check w-5 h-5"
                      >
                        <path
                          d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                        ></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path d="m9 15 2 2 4-4"></path></svg
                      ><span class="text-base md:text-lg font-medium"
                        >Check Eligibility</span
                      ></a
                    >
                  </div>
                  <div
                    class="mt-6"
                    style="opacity: 1; transform: none"
                  >
                    <div
                      class="inline-flex items-center gap-2 sm:gap-4 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20"
                    >
                      <span class="text-sm text-white/90 font-medium"
                        ><span class="text-white font-semibold">Free:</span>
                        Unlimited AI kits</span
                      ><span class="text-white/40">|</span
                      ><span class="text-sm text-white/90 font-medium"
                        ><span class="text-[#F4991A] font-semibold"
                          >Apply For Me:</span
                        >
                        Expert service</span
                      ><a
                        class="text-xs text-white/70 hover:text-white underline decoration-white/40 hover:decoration-white/80 transition-colors ml-1"
                        href="consultation.html"
                        >Learn More</a
                      >
                    </div>
                  </div>
                  <div
                    class="space-y-3 mt-8"
                    style="opacity: 1; transform: none"
                  >
                    <p class="text-base md:text-lg text-white/80 font-medium">
                      <span>15,000+ applications sent this month</span>
                    </p>
                    <p class="text-sm md:text-base text-white/60">
                      Join 1,000+ international students starting Winter
                      <!-- -->2027
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/$-->
        </main>
@endsection
