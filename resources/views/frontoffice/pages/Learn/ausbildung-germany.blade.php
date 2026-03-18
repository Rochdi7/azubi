@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Germany 2026: Earn €1,300/Month While Learning | 85% Job Placement')

@section('meta')
    <meta name="description"
        content="Start your Ausbildung in Germany 2026! Earn €900-1,300/month while training. Smart application tools help you apply 10x faster with personalized cover letters &amp; job matching. 60,000+ positions from 238 verified employers.">
    <meta name="keywords"
        content="Ausbildung Germany 2026,vocational training Germany,apprenticeship Germany,German dual education,earn while learning,job application Germany,cover letter generator,international students Germany,work and study Germany">
    <meta property="og:title" content="Ausbildung Germany 2026: Earn €1,300/Month While Learning | 85% Job Placement">
    <meta property="og:description"
        content="Start your Ausbildung in Germany 2026! Earn €900-1,300/month while training. Smart application tools help you apply 10x faster with personalized cover letters &amp; job matching. 60,000+ positions from 238 verified employers.">
@endsection

@section('content')
    <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "Azubi",
            "description": "Platform connecting international students with German Ausbildung (vocational training) opportunities",
            "url": "https://azubi.ma",
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
                "name": "How is Azubi different from other job portals?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Other portals list jobs and leave you on your own. Azubi provides smart application tools that generate personalized cover letters, match scores showing your fit for each job, application tracking with follow-up reminders, and German learning + interview preparation tools."
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
            "url": "https://azubi.ma",
            "provider": {
              "@type": "Organization",
              "name": "Azubi",
              "url": "https://azubi.ma"
            },
            "serviceType": "Educational Consulting",
            "areaServed": [
              "Germany",
              "Morocco",
              "Spain",
              "Italy",
              "France"
            ],
            "offers": {
              "@type": "Offer",
              "price": "Contact for pricing",
              "priceCurrency": "MAD"
            },
            "category": "Education and Career Services"
          }
        </script>
    <main>
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-32 min-h-[600px] sm:min-h-[700px] lg:min-h-[800px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-40 sm:pt-44 md:pt-48">
            <img alt="Beautiful autumn landscape in Germany" decoding="async"
                class="absolute inset-0 w-full h-full object-cover object-center"
                src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}" />
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
                class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col items-center text-center gap-6 sm:gap-8 max-w-6xl">
                <div class="relative z-10 flex flex-col items-center text-center gap-4 sm:gap-6 lg:gap-8 w-full max-w-5xl">
                    <div class="animate-fade-in-up animation-delay-100">
                        <div
                            class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-4 py-2 text-sm font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-star h-4 w-4 mr-2">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>Earn €900-1,300/Month While Learning
                        </div>
                    </div>
                    <h1
                        class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl leading-[1.1] max-w-5xl mx-auto text-white drop-shadow-2xl w-full break-words animate-fade-in-up animation-delay-200">
                        Start Your Ausbildung in Germany
                    </h1>
                    <p
                        class="max-w-5xl mx-auto text-lg sm:text-xl lg:text-2xl text-white/90 font-medium leading-relaxed drop-shadow-lg w-full break-words animate-fade-in-up animation-delay-300">
                        Apply to 67k+ verified positions 10x faster with smart
                        application tools and personalized job matching. Join 85% of
                        trainees who get hired.
                    </p>
                    <div class="flex flex-col items-center gap-2 animate-fade-in-up animation-delay-400">
                        <div class="z-10 flex -space-x-4 rtl:space-x-reverse justify-center">
                            <div class="relative h-10 w-10">
                                <img alt="Avatar 1" loading="eager" width="40" height="40" decoding="async"
                                    class="rounded-full border-2 border-white"
                                    src="{{ asset('assets/_next/hero-avatar-1c9d9.jpeg') }}" />
                            </div>
                            <div class="relative h-10 w-10">
                                <img alt="Avatar 2" loading="eager" width="40" height="40" decoding="async"
                                    class="rounded-full border-2 border-white"
                                    src="{{ asset('assets/_next/hero-avatar-2235b.jpeg') }}" />
                            </div>
                            <div class="relative h-10 w-10">
                                <img alt="Avatar 3" loading="lazy" width="40" height="40" decoding="async"
                                    class="rounded-full border-2 border-white"
                                    src="{{ asset('assets/_next/hero-avatar-33eed.jpeg') }}" />
                            </div>
                            <div class="relative h-10 w-10">
                                <img alt="Avatar 4" loading="lazy" width="40" height="40" decoding="async"
                                    class="rounded-full border-2 border-white"
                                    src="{{ asset('assets/_next/hero-avatar-4ec14.jpeg') }}" />
                            </div>
                            <div class="relative h-10 w-10">
                                <img alt="Avatar 5" loading="lazy" width="40" height="40" decoding="async"
                                    class="rounded-full border-2 border-white"
                                    src="{{ asset('assets/_next/hero-avatar-58f5b.jpeg') }}" />
                            </div>
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-white bg-green text-center text-xs font-medium text-white z-20">
                                +<!-- -->1k
                            </div>
                        </div>
                        <p class="text-sm text-white/80 italic font-medium drop-shadow-md">
                            Join
                            <!-- -->1k+<!-- -->
                            students starting Winter
                            <!-- -->2026
                        </p>
                    </div>
                    <div
                        class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 w-full max-w-md mx-auto animate-fade-in-up animation-delay-500">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-5 sm:px-8 py-4 sm:py-6 text-sm sm:text-base font-semibold w-full sm:w-auto hover:-translate-y-1 min-h-[48px] inline-flex items-center justify-center"
                            href="{{ route('front.jobs') }}">Start Applying</a><a
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-5 sm:px-8 py-4 sm:py-6 text-sm sm:text-base font-semibold w-full sm:w-auto min-h-[48px] shadow-lg inline-flex items-center justify-center"
                            href="#how-it-works">See How It Works</a>
                    </div>
                    <div class="w-full mt-4 sm:mt-6 max-w-2xl mx-auto animate-fade-in-up animation-delay-600">
                        <div class="grid grid-cols-3 gap-3 sm:gap-4">
                            <div
                                class="flex flex-col items-center justify-center p-3 sm:p-4 rounded-xl border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 hover:shadow-lg transition-all duration-300 hover:scale-105 animate-scale-in animation-delay-700">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="flex-shrink-0 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-trending-up h-4 w-4 text-green-500">
                                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                            <polyline points="16 7 22 7 22 13"></polyline>
                                        </svg></span><span class="font-bold text-lg sm:text-xl text-white">67k+</span>
                                </div>
                                <span class="text-xs text-white/80 font-medium text-center leading-tight">Live
                                    Positions</span>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-3 sm:p-4 rounded-xl border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 hover:shadow-lg transition-all duration-300 hover:scale-105 animate-scale-in animation-delay-800">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="flex-shrink-0 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-heart h-4 w-4 text-red-500">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg></span><span class="font-bold text-lg sm:text-xl text-white">1k+</span>
                                </div>
                                <span class="text-xs text-white/80 font-medium text-center leading-tight">German
                                    Employers</span>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center p-3 sm:p-4 rounded-xl border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 hover:shadow-lg transition-all duration-300 hover:scale-105 animate-scale-in animation-delay-900">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="flex-shrink-0 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-users h-4 w-4 text-primary">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg></span><span class="font-bold text-lg sm:text-xl text-white">98%</span>
                                </div>
                                <span class="text-xs text-white/80 font-medium text-center leading-tight">Match
                                    Success</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#F2EAD3]">
            <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none">
                <div class="absolute left-1/4 top-0 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"></div>
                <div class="absolute right-1/4 bottom-0 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="animate-fade-in-up">
                    <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                        <div
                            class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                            🇩🇪 Germany&#x27;s Secret to Success
                        </div>
                        <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                            What is Ausbildung?
                        </h2>
                        <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
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
                            class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#344F1F]/15 overflow-hidden animate-fade-in-left">
                            <img alt="Traditional university education" loading="lazy" decoding="async"
                                class="absolute inset-0 w-full h-full object-cover object-center rounded-2xl"
                                src="{{ asset('assets/_next/university-card-background-winter-v2d699.jpeg') }}" />
                            <div class="absolute inset-0 bg-white/85 backdrop-blur-[0.5px] rounded-2xl"></div>
                            <div class="relative z-10">
                                <div class="absolute top-0 right-0">
                                    <div class="w-10 h-10 rounded-full bg-[#F4991A]/20 flex items-center justify-center">
                                        <span class="text-[#F4991A] text-xl font-bold">✗</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-14 h-14 rounded-xl bg-[#F4991A]/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-book-open h-7 w-7 text-[#F4991A]">
                                            <path d="M12 7v14"></path>
                                            <path
                                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-[#344F1F]">
                                        Traditional University
                                    </h3>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✗</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">Theory-focused
                                            learning only</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✗</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">No income during 4+
                                            years</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✗</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">Uncertain job
                                            prospects</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✗</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">High tuition
                                            costs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#F4991A]/30 overflow-hidden shadow-lg animate-fade-in-right animation-delay-100">
                            <img alt="German Ausbildung vocational training" loading="lazy" decoding="async"
                                class="absolute inset-0 w-full h-full object-cover object-center rounded-2xl"
                                src="{{ asset('assets/_next/ausbildung-card-background004b.jpeg') }}" />
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/90 via-white/88 to-[#F4991A]/10 backdrop-blur-[0.5px] rounded-2xl">
                            </div>
                            <div class="relative z-10">
                                <div class="absolute top-0 right-0">
                                    <div class="w-10 h-10 rounded-full bg-[#F4991A]/20 flex items-center justify-center">
                                        <span class="text-[#F4991A] text-xl font-bold">✓</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-14 h-14 rounded-xl bg-[#F4991A]/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-handshake h-7 w-7 text-[#F4991A]">
                                            <path d="m11 17 2 2a1 1 0 1 0 3-3"></path>
                                            <path
                                                d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4">
                                            </path>
                                            <path d="m21 3 1 11h-2"></path>
                                            <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path>
                                            <path d="M3 4h8"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-[#344F1F]">
                                        German Ausbildung
                                    </h3>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✓</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">Theory + hands-on
                                            practice</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✓</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">Earn €900-1,300
                                            monthly</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✓</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">85% job placement
                                            guarantee</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-5 h-5 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                            <span class="text-[#F4991A] text-xs font-bold">✓</span>
                                        </div>
                                        <span class="text-sm sm:text-base text-[#344F1F] font-semibold">Shorter 2-3.5 year
                                            programs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-16 sm:mb-20">
                    <div
                        class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-100">
                        <div
                            class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-building h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]">
                                <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
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
                        <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                            Real Company
                        </h3>
                        <p class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium">
                            Work 3-4 days per week at actual German companies like BMW,
                            Bosch, or Lufthansa
                        </p>
                    </div>
                    <div
                        class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-200">
                        <div
                            class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-graduation-cap h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]">
                                <path
                                    d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                </path>
                                <path d="M22 10v6"></path>
                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                            Learn Theory
                        </h3>
                        <p class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium">
                            Attend vocational school 1-2 days per week for theoretical
                            knowledge
                        </p>
                    </div>
                    <div
                        class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-300">
                        <div
                            class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-trending-up h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                            Earn Money
                        </h3>
                        <p class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium">
                            Receive monthly stipend that increases each year of your
                            training
                        </p>
                    </div>
                    <div
                        class="text-center p-6 rounded-2xl border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-sm hover:shadow-lg hover:border-[#F4991A]/20 transition-all duration-300 hover:-translate-y-2 hover:scale-[1.02] animate-fade-in-up animation-delay-400">
                        <div
                            class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl flex items-center justify-center mb-4 mx-auto bg-[#F4991A]/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-users h-6 w-6 sm:h-7 sm:w-7 text-[#F4991A]">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                            Get Hired
                        </h3>
                        <p class="text-xs sm:text-sm text-[#344F1F]/70 leading-relaxed font-medium">
                            85% of trainees are offered permanent positions by their
                            training company
                        </p>
                    </div>
                </div>
                <div class="animate-fade-in-up">
                    <h3 class="text-center text-2xl sm:text-3xl font-bold text-[#344F1F] mb-3">
                        Why Choose Azubi?
                    </h3>
                    <p class="text-center text-[#344F1F]/70 mb-8 sm:mb-12 max-w-2xl mx-auto">
                        Other portals show you jobs. We help you get hired with smart
                        application tools.
                    </p>
                </div>
                <div class="max-w-5xl mx-auto">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                        <div
                            class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#344F1F]/15 bg-white/60 backdrop-blur-sm animate-fade-in-left">
                            <div class="absolute top-4 right-4">
                                <div class="w-8 h-8 rounded-full bg-[#F4991A]/20 flex items-center justify-center">
                                    <span class="text-[#F4991A] text-sm font-bold">✗</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-xl bg-[#F4991A]/10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-search h-6 w-6 text-[#F4991A]">
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
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✗</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">Job listings only - you&#x27;re on
                                        your own</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✗</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">No profile matching - browse
                                        blindly</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✗</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">No application tracking</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✗</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">No German prep or interview
                                        training</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative p-6 sm:p-8 rounded-2xl border-2 border-[#F4991A]/30 bg-gradient-to-br from-white/80 to-[#F4991A]/5 shadow-lg animate-fade-in-right animation-delay-100">
                            <div class="absolute top-4 right-4">
                                <div class="w-8 h-8 rounded-full bg-[#F4991A]/20 flex items-center justify-center">
                                    <span class="text-[#F4991A] text-sm font-bold">✓</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-xl bg-[#F4991A]/10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-zap h-6 w-6 text-[#F4991A]">
                                        <path
                                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="text-lg sm:text-xl font-bold text-[#344F1F]">
                                    Azubi
                                </h4>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✓</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">Smart application kits for each
                                        job</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✓</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">Match scoring shows your fit
                                        (0-100)</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✓</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">Track applications with follow-up
                                        reminders</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-4 h-4 rounded-full bg-[#F4991A]/20 flex items-center justify-center flex-shrink-0">
                                        <span class="text-[#F4991A] text-[10px] font-bold">✓</span>
                                    </div>
                                    <span class="text-sm text-[#344F1F] font-medium">German learning + voice interview
                                        prep</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12 sm:py-16 md:py-20 relative overflow-hidden bg-[#F9F5F0]">
            <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none">
                <div class="absolute left-1/4 top-1/4 w-72 h-72 bg-[#F4991A]/5 rounded-full blur-3xl"></div>
                <div class="absolute right-1/4 bottom-1/4 w-96 h-96 bg-[#344F1F]/5 rounded-full blur-3xl"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                    <div
                        class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                        Choose Your Path
                    </div>
                    <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                        What Best Describes You?
                    </h2>
                    <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
                        Get personalized guidance based on where you are in your
                        Ausbildung journey
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 max-w-5xl mx-auto">
                    <div
                        class="relative group rounded-2xl border backdrop-blur-md p-4 sm:p-6 transition-all duration-300 hover:shadow-lg cursor-pointer bg-white/60 border-[#344F1F]/10 hover:border-[#F4991A]/30 ring-2 ring-[#F4991A]/20">
                        <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                            <span class="px-3 py-1 bg-[#F4991A] text-white text-xs font-medium rounded-full">Most
                                Popular</span>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl">
                        </div>
                        <div class="relative z-10 text-center">
                            <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">🚀</div>
                            <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">
                                I&#x27;m Ready to Apply
                            </h3>
                            <p class="text-xs sm:text-sm text-muted-foreground mb-4 sm:mb-6 leading-relaxed">
                                Apply 10x faster with AI-generated cover letters,
                                checklists, and email templates
                            </p>
                            <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full rounded-full group-hover:scale-105 transition-transform duration-200 bg-[#F4991A] hover:bg-[#E5890F] text-white flex items-center justify-center gap-2"
                                href="auth7d2a.html?signup"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user-plus h-5 w-5">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <line x1="19" x2="19" y1="8" y2="14"></line>
                                    <line x1="22" x2="16" y1="11" y2="11"></line>
                                </svg>Start Applying Free<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div
                        class="relative group rounded-2xl border backdrop-blur-md p-4 sm:p-6 transition-all duration-300 hover:shadow-lg cursor-pointer bg-white/60 border-[#344F1F]/10 hover:border-[#F4991A]/30">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl">
                        </div>
                        <div class="relative z-10 text-center">
                            <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">💼</div>
                            <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">
                                I Want to Find Jobs
                            </h3>
                            <p class="text-xs sm:text-sm text-muted-foreground mb-4 sm:mb-6 leading-relaxed">
                                60,000+ real positions with smart matching to find your
                                perfect fit
                            </p>
                            <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full rounded-full group-hover:scale-105 transition-transform duration-200 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] hover:bg-[#F4991A]/10 hover:text-[#F4991A] flex items-center justify-center gap-2"
                                href="{{ route('front.jobs') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-briefcase h-5 w-5">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg>Find Jobs<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div
                        class="relative group rounded-2xl border backdrop-blur-md p-4 sm:p-6 transition-all duration-300 hover:shadow-lg cursor-pointer bg-white/60 border-[#344F1F]/10 hover:border-[#F4991A]/30">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl">
                        </div>
                        <div class="relative z-10 text-center">
                            <div class="text-3xl sm:text-4xl mb-3 sm:mb-4">🤔</div>
                            <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">
                                I&#x27;m Just Exploring
                            </h3>
                            <p class="text-xs sm:text-sm text-muted-foreground mb-4 sm:mb-6 leading-relaxed">
                                Check if Ausbildung is right for you in 2 minutes
                            </p>
                            <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full rounded-full group-hover:scale-105 transition-transform duration-200 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] hover:bg-[#F4991A]/10 hover:text-[#F4991A] flex items-center justify-center gap-2"
                                href="{{ route('front.tools.eligibility-checker') }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-check h-5 w-5">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="m9 15 2 2 4-4"></path>
                                </svg>Check Eligibility<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                            <p class="text-[10px] text-center text-muted-foreground mt-2 opacity-70">
                                2-minute smart assessment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--$-->
        <section class="relative py-16 sm:py-20 md:py-24 bg-[#F9F5F0] overflow-hidden">
            <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none">
                <div class="absolute left-1/4 top-0 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"></div>
                <div class="absolute right-1/4 bottom-0 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                    <div
                        class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                        Apply in 30 Seconds
                    </div>
                    <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                        Apply to These Jobs Instantly
                    </h2>
                    <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
                        Generate a complete application kit for any position - cover
                        letter, checklist, and email template in seconds.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-2xl border-2 border-[#344F1F]/10 p-6 animate-pulse">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-16 h-16 bg-gray-200 rounded-xl flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="h-4 bg-gray-200 rounded w-3/4 mb-2"></div>
                                <div class="h-3 bg-gray-200 rounded w-1/2"></div>
                            </div>
                        </div>
                        <div class="h-6 bg-gray-200 rounded w-full mb-3"></div>
                        <div class="h-6 bg-gray-200 rounded w-2/3 mb-4"></div>
                        <div class="space-y-2 mb-4">
                            <div class="h-4 bg-gray-200 rounded w-full"></div>
                            <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                            <div class="h-4 bg-gray-200 rounded w-4/6"></div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <div class="h-6 bg-gray-200 rounded-full w-20"></div>
                            <div class="h-6 bg-gray-200 rounded-full w-24"></div>
                            <div class="h-6 bg-gray-200 rounded-full w-16"></div>
                        </div>
                        <div class="h-10 bg-gray-200 rounded-full w-full"></div>
                    </div>
                    <div class="bg-white rounded-2xl border-2 border-[#344F1F]/10 p-6 animate-pulse">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-16 h-16 bg-gray-200 rounded-xl flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="h-4 bg-gray-200 rounded w-3/4 mb-2"></div>
                                <div class="h-3 bg-gray-200 rounded w-1/2"></div>
                            </div>
                        </div>
                        <div class="h-6 bg-gray-200 rounded w-full mb-3"></div>
                        <div class="h-6 bg-gray-200 rounded w-2/3 mb-4"></div>
                        <div class="space-y-2 mb-4">
                            <div class="h-4 bg-gray-200 rounded w-full"></div>
                            <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                            <div class="h-4 bg-gray-200 rounded w-4/6"></div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <div class="h-6 bg-gray-200 rounded-full w-20"></div>
                            <div class="h-6 bg-gray-200 rounded-full w-24"></div>
                            <div class="h-6 bg-gray-200 rounded-full w-16"></div>
                        </div>
                        <div class="h-10 bg-gray-200 rounded-full w-full"></div>
                    </div>
                    <div class="bg-white rounded-2xl border-2 border-[#344F1F]/10 p-6 animate-pulse">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-16 h-16 bg-gray-200 rounded-xl flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="h-4 bg-gray-200 rounded w-3/4 mb-2"></div>
                                <div class="h-3 bg-gray-200 rounded w-1/2"></div>
                            </div>
                        </div>
                        <div class="h-6 bg-gray-200 rounded w-full mb-3"></div>
                        <div class="h-6 bg-gray-200 rounded w-2/3 mb-4"></div>
                        <div class="space-y-2 mb-4">
                            <div class="h-4 bg-gray-200 rounded w-full"></div>
                            <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                            <div class="h-4 bg-gray-200 rounded w-4/6"></div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <div class="h-6 bg-gray-200 rounded-full w-20"></div>
                            <div class="h-6 bg-gray-200 rounded-full w-24"></div>
                            <div class="h-6 bg-gray-200 rounded-full w-16"></div>
                        </div>
                        <div class="h-10 bg-gray-200 rounded-full w-full"></div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="h-12 bg-gray-200 rounded-full w-48 animate-pulse"></div>
                </div>
            </div>
        </section>

        <div id="how-it-works">
            <section class="py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#F2EAD3]">
                <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none">
                    <div class="absolute right-1/4 top-10 w-80 h-80 rounded-full bg-[#F4991A]/5 blur-3xl"></div>
                    <div class="absolute left-1/4 bottom-10 w-80 h-80 rounded-full bg-[#344F1F]/5 blur-3xl"></div>
                </div>
                <div class="container mx-auto px-4">
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                            <div
                                class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                                How It Works
                            </div>
                            <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                                Apply 10x Faster in Three Steps
                            </h2>
                            <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
                                AI-powered tools that turn hours of work into minutes.
                            </p>
                        </div>
                    </div>
                    <div class="relative max-w-5xl mx-auto mt-12">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6 relative">
                            <div class="relative flex flex-col items-center text-center group"
                                style="
                        opacity: 0;
                        transform: translateY(20px) scale(0.95);
                      ">
                                <div class="mb-4 sm:mb-6 relative">
                                    <div
                                        class="absolute -left-2 -top-2 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#F4991A] border-2 border-white flex items-center justify-center text-xs sm:text-sm font-bold text-white z-20 shadow-md">
                                        1
                                    </div>
                                    <div
                                        class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center relative z-10 shadow-md bg-[#F4991A]/10 border-2 border-[#F4991A]/30 text-[#F4991A] group-hover:bg-[#F4991A]/15 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-user h-6 w-6">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300 bg-[#F4991A]/50">
                                    </div>
                                </div>
                                <div
                                    class="bg-white/90 backdrop-blur-sm p-4 sm:p-6 rounded-2xl border border-[#344F1F]/10 group-hover:border-[#F4991A]/20 group-hover:shadow-lg transition-all duration-300 w-full h-full flex flex-col">
                                    <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3 text-[#344F1F]">
                                        Complete Your Profile
                                    </h3>
                                    <p class="text-[#344F1F]/70 text-xs sm:text-sm leading-relaxed flex-grow">
                                        2 minutes to set up your education, language skills,
                                        and preferences. Get your eligibility score instantly.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col items-center text-center group"
                                style="
                        opacity: 0;
                        transform: translateY(20px) scale(0.95);
                      ">
                                <div class="mb-4 sm:mb-6 relative">
                                    <div
                                        class="absolute -left-2 -top-2 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#F4991A] border-2 border-white flex items-center justify-center text-xs sm:text-sm font-bold text-white z-20 shadow-md">
                                        2
                                    </div>
                                    <div
                                        class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center relative z-10 shadow-md bg-[#F4991A]/10 border-2 border-[#F4991A]/30 text-[#F4991A] group-hover:bg-[#F4991A]/15 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chart-line h-6 w-6">
                                            <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                            <path d="m19 9-5 5-4-4-3 3"></path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300 bg-[#F4991A]/50">
                                    </div>
                                </div>
                                <div
                                    class="bg-white/90 backdrop-blur-sm p-4 sm:p-6 rounded-2xl border border-[#344F1F]/10 group-hover:border-[#F4991A]/20 group-hover:shadow-lg transition-all duration-300 w-full h-full flex flex-col">
                                    <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3 text-[#344F1F]">
                                        Get AI Application Kits
                                    </h3>
                                    <p class="text-[#344F1F]/70 text-xs sm:text-sm leading-relaxed flex-grow">
                                        Cover letter, checklist, and email template generated
                                        in 30 seconds. Tailored for each job you apply to.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col items-center text-center group"
                                style="
                        opacity: 0;
                        transform: translateY(20px) scale(0.95);
                      ">
                                <div class="mb-4 sm:mb-6 relative">
                                    <div
                                        class="absolute -left-2 -top-2 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#F4991A] border-2 border-white flex items-center justify-center text-xs sm:text-sm font-bold text-white z-20 shadow-md">
                                        3
                                    </div>
                                    <div
                                        class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center relative z-10 shadow-md bg-[#F4991A]/10 border-2 border-[#F4991A]/30 text-[#F4991A] group-hover:bg-[#F4991A]/15 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clipboard-check h-6 w-6">
                                            <rect width="8" height="4" x="8" y="2" rx="1"
                                                ry="1"></rect>
                                            <path
                                                d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                            </path>
                                            <path d="m9 14 2 2 4-4"></path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300 bg-[#F4991A]/50">
                                    </div>
                                </div>
                                <div
                                    class="bg-white/90 backdrop-blur-sm p-4 sm:p-6 rounded-2xl border border-[#344F1F]/10 group-hover:border-[#F4991A]/20 group-hover:shadow-lg transition-all duration-300 w-full h-full flex flex-col">
                                    <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3 text-[#344F1F]">
                                        Apply to More Jobs, Faster
                                    </h3>
                                    <p class="text-[#344F1F]/70 text-xs sm:text-sm leading-relaxed flex-grow">
                                        10x more applications with the same effort. Smart
                                        matching finds your perfect fit so you never miss an
                                        opportunity.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 text-center" style="opacity: 0; transform: translateY(20px)">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 text-base bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full px-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 inline-flex items-center gap-2"
                            style="min-height: 48px" href="auth7d2a.html?signup">Start Applying<svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg></a>
                    </div>
                </div>
            </section>
        </div>
        <!--$-->
        <section class="py-16 sm:py-20 md:py-24 relative overflow-hidden bg-[#F9F5F0]">
            <div class="absolute inset-0 -z-10 pointer-events-none">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#344F1F]/5 rounded-full blur-3xl"></div>
            </div>
            <div class="container mx-auto px-4 relative">
                <div style="opacity: 0; transform: translateY(20px)">
                    <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                        <div
                            class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                            <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-4 w-4">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg></span>AI-Powered Tools
                        </div>
                        <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                            Apply 10x Faster with Smart Tools
                        </h2>
                        <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
                            AI-powered application kits, interview prep, and German
                            training - everything you need to get hired
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div class="opacity-50 pointer-events-none">
                            <div
                                class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300">
                                <div
                                    class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute -top-3 right-6 text-xs px-3 py-1 font-semibold bg-[#F4991A] text-white border-0 shadow-md">
                                    Core Feature
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#F4991A]/10 text-[#F4991A]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-pen-tool w-6 h-6">
                                            <path
                                                d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z">
                                            </path>
                                            <path
                                                d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18">
                                            </path>
                                            <path d="m2.3 2.3 7.286 7.286"></path>
                                            <circle cx="11" cy="11" r="2"></circle>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                                        AI Application Kit
                                    </h3>
                                    <p
                                        class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed">
                                        Cover letters, checklists &amp; emails in 30 seconds
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-[#344F1F]/50 font-medium">Apply 10x faster</span>
                                        <div
                                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span>Try Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div class="opacity-50 pointer-events-none">
                            <div
                                class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300">
                                <div
                                    class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute -top-3 right-6 text-xs px-3 py-1 font-semibold bg-[#F4991A] text-white border-0 shadow-md">
                                    New
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#344F1F]/10 text-[#344F1F]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text w-6 h-6">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                                        CV Builder
                                    </h3>
                                    <p
                                        class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed">
                                        Professional German CVs in minutes
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-[#344F1F]/50 font-medium">ATS-optimized</span>
                                        <div
                                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span>Try Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div class="opacity-50 pointer-events-none">
                            <div
                                class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300">
                                <div
                                    class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute -top-3 right-6 text-xs px-3 py-1 font-semibold bg-[#F4991A] text-white border-0 shadow-md">
                                    Most Popular
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#F4991A]/10 text-[#F4991A]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-6 h-6">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                                        German Language Training
                                    </h3>
                                    <p
                                        class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed">
                                        Master German with conversations
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-[#344F1F]/50 font-medium">15,000+ learners</span>
                                        <div
                                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span>Try Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div class="opacity-50 pointer-events-none">
                            <div
                                class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#344F1F]/10 text-[#344F1F]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-video w-6 h-6">
                                            <path
                                                d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                            </path>
                                            <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                                        Ausbildung Interview Trainer
                                    </h3>
                                    <p
                                        class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed">
                                        Practice with voice coaching
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-[#344F1F]/50 font-medium">500+ daily sessions</span>
                                        <div
                                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span>Try Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div class="opacity-50 pointer-events-none">
                            <div
                                class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#F4991A]/10 text-[#F4991A]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-film w-6 h-6">
                                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                            <path d="M7 3v18"></path>
                                            <path d="M3 7.5h4"></path>
                                            <path d="M3 12h18"></path>
                                            <path d="M3 16.5h4"></path>
                                            <path d="M17 3v18"></path>
                                            <path d="M17 7.5h4"></path>
                                            <path d="M17 16.5h4"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                                        Video Introduction Studio
                                    </h3>
                                    <p
                                        class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed">
                                        Video profiles with coaching
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-[#344F1F]/50 font-medium">Stand out from others</span>
                                        <div
                                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span>Try Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div class="opacity-50 pointer-events-none">
                            <div
                                class="group relative h-full p-6 rounded-2xl bg-white border-2 border-[#344F1F]/10 hover:border-[#F4991A]/30 hover:shadow-xl transition-all duration-300">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center mb-3 sm:mb-4 shadow-sm bg-[#344F1F]/10 text-[#344F1F]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clipboard-check w-6 h-6">
                                            <rect width="8" height="4" x="8" y="2" rx="1"
                                                ry="1"></rect>
                                            <path
                                                d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                            </path>
                                            <path d="m9 14 2 2 4-4"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-base sm:text-lg mb-2 text-[#344F1F]">
                                        Eligibility Checker
                                    </h3>
                                    <p
                                        class="text-xs sm:text-sm text-[#344F1F]/70 mb-3 sm:mb-4 font-medium leading-relaxed">
                                        Instant eligibility score
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-[#344F1F]/50 font-medium">2-minute test</span>
                                        <div
                                            class="flex items-center text-xs font-semibold text-[#F4991A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span>Try Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-1">
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
                <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-sm text-[#344F1F]/60 mb-12"
                    style="opacity: 0">
                    <div class="flex items-center gap-2">
                        <span class="text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-users w-4 h-4">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg></span><span class="font-medium">Smart Profile Management</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-shield w-4 h-4">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                            </svg></span><span class="font-medium">Secure Document Vault</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-trending-up w-4 h-4">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg></span><span class="font-medium">Progress Tracking</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#F4991A]"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-award w-4 h-4">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                </path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg></span><span class="font-medium">Achievement Badges</span>
                    </div>
                </div>
                <div class="text-center" style="opacity: 0; transform: translateY(20px)">
                    <p class="text-sm text-[#344F1F]/60 mb-6 font-medium">
                        Join 15,000+ students already applying smarter
                    </p>
                    <a href="auth7d2a.html?signup"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white rounded-full px-8 py-6 text-base font-semibold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            Start Applying<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-5 h-5 ml-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></button></a>
                </div>
            </div>
        </section>
        <!--$-->
        <section class="py-12 sm:py-16 bg-[#F9F5F0]">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                        <div
                            class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                            <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play h-4 w-4">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg></span>Video Guide
                        </div>
                        <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                            Complete Ausbildung Guide
                        </h2>
                        <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
                            Learn everything about Germany&#x27;s vocational training
                            system in this comprehensive 6-minute video
                        </p>
                    </div>
                    <div class="relative rounded-xl overflow-hidden shadow-xl bg-black">
                        <div class="aspect-video relative">
                            <img alt="Ausbildung Video Guide Cover" loading="lazy" decoding="async"
                                class="absolute inset-0 w-full h-full object-cover"
                                src="{{ asset('assets/_next/ausbildung-video-cover-v2a712.jpeg') }}" /><button
                                class="absolute inset-0 flex items-center justify-center group cursor-pointer bg-black/20 hover:bg-black/30 transition-all duration-300"
                                aria-label="Play video">
                                <div
                                    class="w-20 h-20 rounded-full bg-[#F4991A] flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-10 w-10 text-white ml-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--$-->
        <section class="py-12 md:py-16 lg:py-20 relative bg-[#F9F5F0]">
            <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none">
                <div class="absolute left-1/4 top-1/4 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"></div>
                <div class="absolute right-1/4 bottom-1/4 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"></div>
            </div>
            <div class="container">
                <div style="opacity: 0; transform: translateY(20px)">
                    <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                        <div
                            class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                            <span class="mr-2"><svg class="h-4 w-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg></span>Popular Sectors
                        </div>
                        <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                            Find Your Perfect Sector Match
                        </h2>
                        <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
                            See job counts, salary ranges, and competition levels for
                            each industry
                        </p>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex gap-6 overflow-x-auto pb-4 scroll-smooth">
                        <div class="flex-shrink-0 w-72 md:w-80" style="opacity: 0; transform: translateY(20px)">
                            <a class="block group text-center"
                                href="{{ route('front.sector', ['slug' => 'healthcare']) }}">
                                <div
                                    class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2">
                                    <div class="relative w-56 h-56 mb-6">
                                        <img alt="Healthcare &amp; Nursing mascot" loading="lazy" width="224"
                                            height="224" decoding="async"
                                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                                            src="{{ asset('assets/_next/mascot_healthcaredcc0.jpeg') }}" />
                                    </div>
                                    <h3 class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight">
                                        Healthcare &amp; Nursing
                                    </h3>
                                    <p class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs">
                                        Train in one of Germany&#x27;s most in-demand sectors
                                        with excellent career prospects and earning potential.
                                    </p>
                                    <div
                                        class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]">
                                        <span>Explore Opportunities</span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex-shrink-0 w-72 md:w-80" style="opacity: 0; transform: translateY(20px)">
                            <a class="block group text-center" href="{{ route('front.sector', ['slug' => 'it']) }}">
                                <div
                                    class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2">
                                    <div class="relative w-56 h-56 mb-6">
                                        <img alt="IT &amp; Software mascot" loading="lazy" width="224"
                                            height="224" decoding="async"
                                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                                            src="{{ asset('assets/_next/mascot_itc3c5.jpeg') }}" />
                                    </div>
                                    <h3 class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight">
                                        IT &amp; Software
                                    </h3>
                                    <p class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs">
                                        Start your tech career in Germany with practical
                                        training in programming, systems administration, and
                                        digital solutions.
                                    </p>
                                    <div
                                        class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]">
                                        <span>Explore Opportunities</span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex-shrink-0 w-72 md:w-80" style="opacity: 0; transform: translateY(20px)">
                            <a class="block group text-center"
                                href="{{ route('front.sector', ['slug' => 'engineering']) }}">
                                <div
                                    class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2">
                                    <div class="relative w-56 h-56 mb-6">
                                        <img alt="Engineering &amp; Technical mascot" loading="lazy" width="224"
                                            height="224" decoding="async"
                                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                                            src="{{ asset('assets/_next/mascot_engineering75c1.jpeg') }}" />
                                    </div>
                                    <h3 class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight">
                                        Engineering &amp; Technical
                                    </h3>
                                    <p class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs">
                                        Build your career in Germany&#x27;s world-renowned
                                        engineering and manufacturing industries.
                                    </p>
                                    <div
                                        class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]">
                                        <span>Explore Opportunities</span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex-shrink-0 w-72 md:w-80" style="opacity: 0; transform: translateY(20px)">
                            <a class="block group text-center"
                                href="{{ route('front.sector', ['slug' => 'hospitality']) }}">
                                <div
                                    class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2">
                                    <div class="relative w-56 h-56 mb-6">
                                        <img alt="Hospitality &amp; Tourism mascot" loading="lazy" width="224"
                                            height="224" decoding="async"
                                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                                            src="{{ asset('assets/_next/mascot_hospitality08bf.jpeg') }}" />
                                    </div>
                                    <h3 class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight">
                                        Hospitality &amp; Tourism
                                    </h3>
                                    <p class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs">
                                        Launch your career in Germany&#x27;s vibrant
                                        hospitality industry with international experience.
                                    </p>
                                    <div
                                        class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]">
                                        <span>Explore Opportunities</span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex-shrink-0 w-72 md:w-80" style="opacity: 0; transform: translateY(20px)">
                            <a class="block group text-center"
                                href="{{ route('front.sector', ['slug' => 'logistics']) }}">
                                <div
                                    class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2">
                                    <div class="relative w-56 h-56 mb-6">
                                        <img alt="Logistics &amp; Transportation mascot" loading="lazy" width="224"
                                            height="224" decoding="async"
                                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                                            src="{{ asset('assets/_next/mascot_logistics757f.jpeg') }}" />
                                    </div>
                                    <h3 class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight">
                                        Logistics &amp; Transportation
                                    </h3>
                                    <p class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs">
                                        Train in Germany&#x27;s sophisticated logistics
                                        sector, managing the flow of goods in Europe&#x27;s
                                        largest economy.
                                    </p>
                                    <div
                                        class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]">
                                        <span>Explore Opportunities</span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex-shrink-0 w-72 md:w-80" style="opacity: 0; transform: translateY(20px)">
                            <a class="block group text-center" href="{{ route('front.sector', ['slug' => 'sales']) }}">
                                <div
                                    class="flex flex-col items-center py-8 px-4 transition-transform duration-300 group-hover:-translate-y-2">
                                    <div class="relative w-56 h-56 mb-6">
                                        <img alt="Sales &amp; Retail mascot" loading="lazy" width="224"
                                            height="224" decoding="async"
                                            class="w-full h-full object-contain drop-shadow-[0_8px_16px_rgba(52,79,31,0.15)] transition-transform duration-300 group-hover:scale-105"
                                            src="{{ asset('assets/_next/mascot_sales9644.jpeg') }}" />
                                    </div>
                                    <h3 class="text-xl font-semibold text-[#344F1F] mb-3 leading-tight">
                                        Sales &amp; Retail
                                    </h3>
                                    <p class="text-sm text-[#344F1F]/70 mb-6 leading-relaxed max-w-xs">
                                        Develop professional sales and customer service skills
                                        in Germany&#x27;s diverse retail landscape.
                                    </p>
                                    <div
                                        class="flex items-center justify-center text-[#F4991A] text-sm font-medium transition-colors duration-300 group-hover:text-[#E5890F]">
                                        <span>Explore Opportunities</span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-8">
                    <a href="{{ route('front.sectors') }}"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base rounded-full border-2 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] hover:text-[#F4991A] hover:bg-[#F4991A]/10 font-semibold hover:shadow-lg transition-all duration-300"
                        style="opacity: 0; transform: translateY(10px)">Explore All Sectors<svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                        </svg></a>
                </div>
            </div>
        </section>
        <!--$-->
        <section class="py-20">
            <div class="w-full">
                <div class="space-y-4 animate-pulse">
                    <div class="h-96 bg-muted rounded-lg w-full"></div>
                </div>
            </div>
        </section>

        <section class="py-12 sm:py-16 md:py-20 relative overflow-hidden bg-[#F2EAD3]">
            <div class="absolute inset-0 -z-10 overflow-hidden pointer-events-none">
                <div class="absolute left-1/4 top-1/4 w-96 h-96 bg-[#F4991A]/5 rounded-full blur-3xl"></div>
                <div class="absolute right-1/4 bottom-1/4 w-80 h-80 bg-[#344F1F]/5 rounded-full blur-3xl"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col space-y-4 max-w-4xl mx-auto mb-12 sm:mb-16 text-center items-center">
                    <div
                        class="inline-flex items-center rounded-full border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-[#F4991A]/10 border-[#F4991A]/20 text-[#F4991A] hover:bg-[#F4991A]/20 px-4 py-2 text-sm font-semibold w-fit">
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-help h-4 w-4">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <path d="M12 17h.01"></path>
                            </svg></span>Common Questions
                    </div>
                    <h2 class="font-bold tracking-tight text-[#344F1F] text-2xl sm:text-3xl md:text-4xl">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-base sm:text-lg text-[#344F1F]/70 font-medium leading-relaxed max-w-3xl">
                        Everything you need to know about Ausbildung programs in
                        Germany and how Azubi helps you apply
                    </p>
                </div>
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-4">
                        <div
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="true">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    What is Ausbildung and how is it different from
                                    university?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0 rotate-180">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-96 opacity-100">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    Can international students apply for Ausbildung
                                    programs?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    How much can I earn during Ausbildung training?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    What German language level do I need for Ausbildung?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    Which sectors offer the best Ausbildung opportunities?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    How is Azubi different from other job portals?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
                                            Other portals list jobs and leave you on your own.
                                            Azubi provides smart application tools that
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    How does the smart cover letter generator work?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    Is the platform really free?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    Are the generated cover letters professional quality?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                            class="rounded-[24px] border-2 border-[#344F1F]/10 bg-white/80 backdrop-blur-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-[#F4991A]/20">
                            <button
                                class="w-full text-left p-4 sm:p-6 flex items-center justify-between group focus:outline-none focus:ring-2 focus:ring-[#F4991A]/20 focus:ring-inset rounded-[24px]"
                                aria-expanded="false">
                                <h3
                                    class="text-base sm:text-lg font-semibold pr-4 sm:pr-8 text-[#344F1F] group-hover:text-[#F4991A] transition-colors">
                                    How do I track my applications?
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-[#344F1F]/70 transition-transform duration-300 flex-shrink-0">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                                <div class="px-4 sm:px-6 pb-4 sm:pb-6">
                                    <div class="border-t border-[#344F1F]/10 pt-3 sm:pt-4">
                                        <p class="text-xs sm:text-sm md:text-base text-[#344F1F]/80 leading-relaxed">
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
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
                        <a href="auth7d2a.html?signup"
                            class="inline-flex items-center justify-center px-4 sm:px-6 py-2.5 sm:py-3 rounded-full bg-[#F4991A] text-white text-sm sm:text-base font-semibold hover:bg-[#E5890F] hover:shadow-lg transition-all duration-300"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user-plus h-4 w-4 mr-2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <line x1="19" x2="19" y1="8" y2="14"></line>
                                <line x1="22" x2="16" y1="11" y2="11"></line>
                            </svg>Get Started Free</a><a href="{{ route('front.faq') }}"
                            class="inline-flex items-center justify-center px-4 sm:px-6 py-2.5 sm:py-3 rounded-full border-2 border-[#F4991A]/30 bg-[#F4991A]/5 text-[#F4991A] text-sm sm:text-base font-semibold hover:bg-[#F4991A]/10 transition-all duration-300">View
                            All FAQs</a>
                    </div>
                </div>
            </div>
        </section>
        <!--$-->
        <section class="relative w-full px-4 py-12 md:py-16 lg:py-20 bg-cream">
            <div class="max-w-7xl mx-auto">
                <div class="relative overflow-hidden rounded-[24px] md:rounded-[32px] px-6 py-8 md:py-12">
                    <img alt="Professional German workplace environment" loading="lazy" decoding="async"
                        class="absolute inset-0 w-full h-full object-cover object-center rounded-[24px] md:rounded-[32px]"
                        src="{{ asset('assets/_next/arbeitgeber-hero-backgroundaa3f.jpeg') }}" />
                    <div class="absolute inset-0 bg-black/30 z-0 rounded-[24px] md:rounded-[32px]"></div>
                    <div class="absolute inset-0 z-[1] rounded-[24px] md:rounded-[32px]"
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
                    <div class="relative z-10 text-center space-y-6 md:space-y-8">
                        <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight text-white px-4"
                            style="opacity: 0; transform: translateY(20px)">
                            Ready to Apply 10x Faster?
                        </h2>
                        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto px-4"
                            style="opacity: 0; transform: translateY(20px)">
                            Smart application kits. Intelligent job matching. Get hired,
                            not overlooked.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6 mt-8"
                            style="opacity: 0; transform: translateY(20px)">
                            <a class="group relative inline-flex items-center gap-3 px-8 py-4 rounded-full overflow-hidden"
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
                                href="{{ route('front.jobs') }}">
                                <div class="absolute inset-[3px] rounded-[114px] bg-white z-0"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user-plus w-5 h-5 text-[#344F1F] relative z-10">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <line x1="19" x2="19" y1="8" y2="14"></line>
                                    <line x1="22" x2="16" y1="11" y2="11"></line>
                                </svg><span class="relative z-10 text-base md:text-lg font-medium text-[#344F1F]"
                                    style="font-weight: 500; letter-spacing: -0.04em">Start Applying Now</span>
                            </a><a
                                class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full border-2 border-white/80 hover:border-white text-white hover:bg-white/10 transition-all duration-300"
                                href="{{ route('front.tools.eligibility-checker') }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-check w-5 h-5">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="m9 15 2 2 4-4"></path>
                                </svg><span class="text-base md:text-lg font-medium">Check Eligibility</span></a>
                        </div>
                        <div class="mt-6" style="opacity: 0; transform: translateY(20px)">
                            <div
                                class="inline-flex items-center gap-2 sm:gap-4 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
                                <span class="text-sm text-white/90 font-medium"><span
                                        class="text-white font-semibold">Free:</span>
                                    Unlimited AI kits</span><span class="text-white/40">|</span><span
                                    class="text-sm text-white/90 font-medium"><span
                                        class="text-[#F4991A] font-semibold">Apply For Me:</span>
                                    Expert service</span><a
                                    class="text-xs text-white/70 hover:text-white underline decoration-white/40 hover:decoration-white/80 transition-colors ml-1"
                                    href="{{ route('front.consultation') }}">Learn More</a>
                            </div>
                        </div>
                        <div class="space-y-3 mt-8" style="opacity: 0; transform: translateY(20px)">
                            <p class="text-base md:text-lg text-white/80 font-medium">
                                <span class="animate-pulse">Loading stats...</span>
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

    </main>
@endsection
