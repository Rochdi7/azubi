@extends('frontoffice.layouts.app')

@section('title', 'Consultation - Expert Ausbildung Application Service | Azubi')

@section('meta')
    <meta name="description"
        content="Our expert team applies to 30+ Ausbildung positions for you. Pay advance to start, success fee only when you get an offer.">
    <meta name="keywords"
        content="ausbildung application service,apply for me ausbildung,ausbildung consultancy india,german apprenticeship application help,ausbildung agent,ausbildung help india,someone apply for ausbildung,ausbildung cover letter service,german apprenticeship consultancy,ausbildung expert help">
    <meta property="og:title" content="Expert Ausbildung Consultation Service | Azubi">
    <meta property="og:description"
        content="Our expert team applies to 30+ Ausbildung positions for you. Pay advance to start, success fee only when you get an offer.">
@endsection

@section('content')
    <main class="min-h-screen bg-[#F9F5F0]">
        <section class="relative w-full overflow-hidden bg-[#F9F5F0] pt-4 pb-8 sm:pt-6 sm:pb-12 md:pt-8 md:pb-16"
            aria-label="Apply For Me service hero section">
            <div class="container mx-auto px-4 lg:px-6">
                <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-xl">
                    <div class="absolute inset-0">
                        <img src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}"
                            alt="Azubi Apply For Me Service" class="w-full h-full object-cover" loading="eager"
                            fetchpriority="high" width="1920" height="1080" />
                        <div class="absolute inset-0 bg-black/50"></div>
                        <div class="absolute inset-0"
                            style="
                      background:
                        radial-gradient(
                          ellipse at center,
                          transparent 0%,
                          transparent 40%,
                          rgba(0, 0, 0, 0.3) 100%
                        ),
                        linear-gradient(
                          to top,
                          rgba(0, 0, 0, 0.4) 0%,
                          transparent 30%
                        );
                    ">
                        </div>
                    </div>
                    <div class="relative z-10 px-6 py-12 sm:px-8 sm:py-16 md:px-12 md:py-24 text-center">
                        <div class="flex justify-center mb-4 sm:mb-6">
                            <div
                                class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-500/20 border border-emerald-400/30 backdrop-blur-sm text-emerald-100 text-sm font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-building2 w-4 h-4 mr-2">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                    <path d="M10 6h4"></path>
                                    <path d="M10 10h4"></path>
                                    <path d="M10 14h4"></path>
                                    <path d="M10 18h4"></path>
                                </svg>Partnered with 200+ German Employers
                            </div>
                        </div>
                        <h1
                            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight drop-shadow-2xl max-w-4xl mx-auto">
                            Get Your Ausbildung Offer.<br /><span class="text-[#F4991A]">We Handle Everything.</span>
                        </h1>
                        <p
                            class="text-base sm:text-lg md:text-xl text-white/90 mb-6 max-w-2xl mx-auto font-medium leading-relaxed drop-shadow-lg">
                            Our German HR experts write native-level applications and
                            submit directly to employers who actively hire
                            internationals. You focus on German — we get you interviews.
                        </p>
                        <div class="flex flex-wrap items-center justify-center gap-3 mb-8 text-white">
                            <div
                                class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-building2 w-4 h-4">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                    <path d="M10 6h4"></path>
                                    <path d="M10 10h4"></path>
                                    <path d="M10 14h4"></path>
                                    <path d="M10 18h4"></path>
                                </svg><span class="text-sm font-medium">Direct Employer Access</span>
                            </div>
                            <div
                                class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg><span class="text-sm font-medium">3-4 Month Timeline</span>
                            </div>
                            <div
                                class="flex items-center gap-2 bg-emerald-500/20 backdrop-blur-sm px-4 py-2 rounded-full border border-emerald-400/30">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-emerald-300">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg><span class="text-sm font-medium text-emerald-100">Pay Only on Offer</span>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-2 mb-8" role="group" aria-label="Social proof">
                            <div class="flex -space-x-3">
                                <div
                                    class="relative w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/hero-avatar-1.webp') }}" alt=""
                                        class="w-full h-full object-cover" loading="lazy" width="44" height="44" />
                                </div>
                                <div
                                    class="relative w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/hero-avatar-2.webp') }}" alt=""
                                        class="w-full h-full object-cover" loading="lazy" width="44" height="44" />
                                </div>
                                <div
                                    class="relative w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/hero-avatar-3.webp') }}" alt=""
                                        class="w-full h-full object-cover" loading="lazy" width="44"
                                        height="44" />
                                </div>
                                <div
                                    class="relative w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/hero-avatar-4.webp') }}" alt=""
                                        class="w-full h-full object-cover" loading="lazy" width="44"
                                        height="44" />
                                </div>
                                <div
                                    class="relative w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-white bg-[#344F1F] flex items-center justify-center">
                                    <span class="text-xs font-bold text-white">40+</span>
                                </div>
                            </div>
                            <p class="text-sm text-white/70">
                                Students placed at
                                <span class="text-white font-medium">Siemens, BMW, Bosch, Deutsche Bahn</span>
                                &amp; more
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center max-w-lg mx-auto">
                            <a href="#pricing" class="inline-block flex-1"><button
                                    class="w-full bg-[#F4991A] hover:bg-[#e08a15] text-white rounded-full text-base sm:text-lg px-8 sm:px-10 py-3 sm:py-4 font-semibold transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
                                    See How It Works
                                </button></a><a href="#pricing" class="inline-block flex-1"><button
                                    class="w-full border-2 border-white/60 hover:border-white text-white hover:bg-white/10 backdrop-blur-sm rounded-full text-base sm:text-lg px-8 sm:px-10 py-3 sm:py-4 font-semibold transition-all">
                                    View Pricing
                                </button></a>
                        </div>
                        <p class="mt-6 text-sm text-white/60">
                            Native German writers • Direct employer relationships • Full
                            visa support
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-white overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12 md:mb-16" style="opacity: 0; transform: translateY(20px)">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#344F1F] mb-4">
                        Stop Struggling. Start Getting Offers.
                    </h2>
                    <p class="text-lg text-[#344F1F]/70 max-w-2xl mx-auto">
                        You focus on learning German. We handle the applications.
                    </p>
                </div>
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-[1fr,auto,1fr] gap-6 lg:gap-0 items-stretch">
                        <div class="relative" style="opacity: 0; transform: translateX(-30px)">
                            <div class="h-full bg-[#1a1a1a] rounded-2xl lg:rounded-r-none p-6 md:p-8 text-white">
                                <div class="mb-8">
                                    <span
                                        class="inline-block px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-white/70 mb-4">THE
                                        OLD WAY</span>
                                    <h3 class="text-2xl md:text-3xl font-bold mb-2 text-white">
                                        Doing It Alone
                                    </h3>
                                    <p class="text-white/60 text-sm">
                                        Endless hours, zero guarantees
                                    </p>
                                </div>
                                <div class="space-y-5">
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(-10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock w-5 h-5 text-white/40">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white/90 mb-0.5">
                                                Hours writing cover letters
                                            </h4>
                                            <p class="text-sm text-white/50">
                                                Struggling to write German Anschreiben that sound
                                                native
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(-10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-question w-5 h-5 text-white/40">
                                                <path d="M12 17h.01"></path>
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z"></path>
                                                <path d="M9.1 9a3 3 0 0 1 5.82 1c0 2-3 3-3 3"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white/90 mb-0.5">
                                                Applying blindly
                                            </h4>
                                            <p class="text-sm text-white/50">
                                                No idea which companies actually hire
                                                internationals
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(-10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-eye w-5 h-5 text-white/40">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white/90 mb-0.5">
                                                Getting ghosted
                                            </h4>
                                            <p class="text-sm text-white/50">
                                                Generic applications disappear into the void
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(-10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-mail-x w-5 h-5 text-white/40">
                                                <path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h9"></path>
                                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                                <path d="m17 17 4 4"></path>
                                                <path d="m21 17-4 4"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white/90 mb-0.5">
                                                Zero responses
                                            </h4>
                                            <p class="text-sm text-white/50">
                                                Months of effort with nothing to show for it
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8 pt-6 border-t border-white/10">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="bg-white/5 rounded-xl p-4 text-center">
                                            <div class="text-2xl font-bold text-white/80">
                                                50+
                                            </div>
                                            <div class="text-xs text-white/40">Hours spent</div>
                                        </div>
                                        <div class="bg-white/5 rounded-xl p-4 text-center">
                                            <div class="text-2xl font-bold text-white/80">
                                                ~5
                                            </div>
                                            <div class="text-xs text-white/40">
                                                Apps per month
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:flex items-center justify-center z-10"
                            style="opacity: 0; transform: scale(0.8)">
                            <div
                                class="w-16 h-16 bg-[#F4991A] rounded-full flex items-center justify-center shadow-xl -mx-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-7 h-7 text-white">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex lg:hidden items-center justify-center py-2"
                            style="opacity: 0; transform: translateY(-10px)">
                            <div
                                class="w-12 h-12 bg-[#F4991A] rounded-full flex items-center justify-center shadow-lg rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-5 h-5 text-white">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative" style="opacity: 0; transform: translateX(30px)">
                            <div
                                class="h-full bg-gradient-to-br from-[#344F1F] to-[#2d4219] rounded-2xl lg:rounded-l-none p-6 md:p-8 lg:pl-12 text-white">
                                <div class="mb-8">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#F4991A]/20 rounded-full text-xs font-medium text-[#F4991A] mb-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-sparkles w-3 h-3">
                                            <path
                                                d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                            </path>
                                            <path d="M20 3v4"></path>
                                            <path d="M22 5h-4"></path>
                                            <path d="M4 17v2"></path>
                                            <path d="M5 18H3"></path>
                                        </svg>WITH APPLY FOR ME</span>
                                    <h3 class="text-2xl md:text-3xl font-bold mb-2 text-white">
                                        We Do It For You
                                    </h3>
                                    <p class="text-white/60 text-sm">
                                        Expert team, proven results
                                    </p>
                                </div>
                                <div class="space-y-5">
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/10 border border-white/20 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-text w-5 h-5 text-[#F4991A]">
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                <path d="M10 9H8"></path>
                                                <path d="M16 13H8"></path>
                                                <path d="M16 17H8"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white mb-0.5">
                                                Native German applications
                                            </h4>
                                            <p class="text-sm text-white/60">
                                                Expert-written Anschreiben that get responses
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/10 border border-white/20 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-building2 w-5 h-5 text-[#F4991A]">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white mb-0.5">
                                                Companies that actually respond
                                            </h4>
                                            <p class="text-sm text-white/60">
                                                We know who hires internationals
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/10 border border-white/20 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-target w-5 h-5 text-[#F4991A]">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <circle cx="12" cy="12" r="6"></circle>
                                                <circle cx="12" cy="12" r="2"></circle>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white mb-0.5">
                                                Targeted applications
                                            </h4>
                                            <p class="text-sm text-white/60">
                                                Strategic submissions, not random spam
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4" style="opacity: 0; transform: translateX(10px)">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-white/10 border border-white/20 rounded-xl flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shield w-5 h-5 text-[#F4991A]">
                                                <path
                                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white mb-0.5">
                                                Pay only on success
                                            </h4>
                                            <p class="text-sm text-white/60">
                                                No offer? No success fee
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8 pt-6 border-t border-white/10">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="bg-white/10 rounded-xl p-4 text-center">
                                            <div class="text-2xl font-bold text-white">
                                                &lt;5
                                            </div>
                                            <div class="text-xs text-white/60">
                                                Hours from you
                                            </div>
                                        </div>
                                        <div class="bg-white/10 rounded-xl p-4 text-center">
                                            <div class="text-2xl font-bold text-[#F4991A]">
                                                Expert
                                            </div>
                                            <div class="text-xs text-white/60">
                                                Applications for you
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 bg-[#F9F5F0] rounded-2xl p-6 md:p-8" style="opacity: 0; transform: translateY(20px)">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-[#F4991A]/10 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-headphones w-6 h-6 text-[#F4991A]">
                                        <path
                                            d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-[#344F1F]">
                                        Your dedicated counselor
                                    </h4>
                                    <p class="text-sm text-[#344F1F]/60">
                                        WhatsApp support throughout your journey
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-8">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-[#344F1F]">3-6</div>
                                    <div class="text-xs text-[#344F1F]/60">
                                        Months to Germany
                                    </div>
                                </div>
                                <div class="h-8 w-px bg-[#344F1F]/10 hidden md:block"></div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-[#F4991A]">
                                        $300
                                    </div>
                                    <div class="text-xs text-[#344F1F]/60">
                                        To get started
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="how-it-works" class="py-12 sm:py-16 md:py-24 bg-[#F9F5F0]">
            <div class="container mx-auto px-4">
                <div class="text-center mb-8 sm:mb-12 lg:mb-16" style="opacity: 0; transform: translateY(20px)">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 sm:mb-4 text-[#344F1F]">
                        How It Works
                    </h2>
                    <p class="text-base sm:text-lg text-[#344F1F]/70 max-w-2xl mx-auto px-4">
                        From enrollment to job offer in 3 simple steps
                    </p>
                </div>
                <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                    {{-- Left side: card visuals that swap per step --}}
                    <div
                        class="relative h-[500px] sm:h-[550px] lg:h-[600px] flex items-center justify-center lg:justify-start">
                        <div class="w-full" style="opacity: 0; transform: scale(0.9)">
                            <div class="relative w-full max-w-md mx-auto">
                                <div class="relative" style="height: 520px">
                                    {{-- Background shadow card --}}
                                    <div class="absolute top-1/2 left-1/2 bg-white rounded-2xl lg:rounded-3xl border-2 border-gray-200 shadow-lg"
                                        style="
                            width: 320px;
                            height: 440px;
                            padding: 32px;
                            transform: translateX(-65%) translateY(-45%) scale(0.95) rotate(-6deg);
                          ">
                                        <div class="flex items-center gap-3 mb-6">
                                            <div class="w-10 h-10 bg-gray-200 rounded-xl"></div>
                                        </div>
                                    </div>

                                    {{-- Card 1: Apply For Me (Step 1) --}}
                                    <div data-hiw-card="1"
                                        class="hiw-card absolute top-1/2 left-1/2 bg-gradient-to-br from-[#F4991A] to-[#E5890F] rounded-2xl lg:rounded-3xl shadow-2xl transition-all duration-500"
                                        style="
                            width: 320px;
                            height: 440px;
                            padding: 32px;
                            transform: translateX(-38%) translateY(-52%) rotate(4deg);
                          ">
                                        <div class="text-center mb-6">
                                            <div
                                                class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4">
                                                <svg class="w-8 h-8 text-[#F4991A]" viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <circle cx="8.5" cy="7" r="4" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    </circle>
                                                    <path d="M20 8V14" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M23 11H17" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <h3 class="font-bold text-white text-2xl mb-2">
                                                Apply For Me
                                            </h3>
                                            <div class="flex items-baseline justify-center gap-2 mb-4">
                                                <span class="font-bold text-white text-4xl">$300</span><span
                                                    class="text-white/80 text-sm">to start</span>
                                            </div>
                                        </div>
                                        <div class="space-y-2 mb-6 text-sm">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-2.5 h-2.5 text-[#F4991A]" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path d="M3 8L6 11L13 4" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <span class="text-white/90 font-medium">Expert applications</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-2.5 h-2.5 text-[#F4991A]" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path d="M3 8L6 11L13 4" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <span class="text-white/90 font-medium">Native German cover letters</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-2.5 h-2.5 text-[#F4991A]" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path d="M3 8L6 11L13 4" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <span class="text-white/90 font-medium">Interview preparation</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="w-4 h-4 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-2.5 h-2.5 text-[#F4991A]" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path d="M3 8L6 11L13 4" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <span class="text-white/90 font-medium">Visa &amp; relocation
                                                    support</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-full bg-white text-[#F4991A] rounded-full py-3 font-bold hover:bg-gray-50 transition-all">
                                            Get Started
                                        </button>
                                    </div>

                                    {{-- Card 2: Applications Sent (Step 2) --}}
                                    <div data-hiw-card="2"
                                        class="hiw-card absolute top-1/2 left-1/2 bg-white rounded-2xl lg:rounded-3xl shadow-2xl transition-all duration-500"
                                        style="
                            width: 320px;
                            height: 440px;
                            padding: 32px;
                            transform: translateX(-38%) translateY(-52%) rotate(4deg) scale(0);
                            opacity: 0;
                          ">
                                        <div class="flex items-center gap-3 mb-5">
                                            <div
                                                class="w-10 h-10 bg-[#344F1F]/10 rounded-xl flex items-center justify-center">
                                                <svg class="w-5 h-5 text-[#344F1F]" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path
                                                        d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="font-bold text-[#344F1F] text-lg">Applications Sent</h3>
                                                <p class="text-sm text-[#344F1F]/50">12 of 30 complete</p>
                                            </div>
                                        </div>
                                        <div class="space-y-3 mb-6">
                                            <div
                                                class="flex items-center justify-between bg-[#F9F5F0] rounded-xl px-4 py-3">
                                                <span class="font-medium text-[#344F1F] text-sm">Siemens AG</span>
                                                <span
                                                    class="text-xs font-semibold bg-emerald-100 text-emerald-700 px-2.5 py-1 rounded-full">Sent</span>
                                            </div>
                                            <div
                                                class="flex items-center justify-between bg-[#F9F5F0] rounded-xl px-4 py-3">
                                                <span class="font-medium text-[#344F1F] text-sm">BMW Group</span>
                                                <span
                                                    class="text-xs font-semibold bg-emerald-100 text-emerald-700 px-2.5 py-1 rounded-full">Sent</span>
                                            </div>
                                            <div
                                                class="flex items-center justify-between bg-[#F9F5F0] rounded-xl px-4 py-3">
                                                <span class="font-medium text-[#344F1F] text-sm">Bosch</span>
                                                <span
                                                    class="text-xs font-semibold bg-emerald-100 text-emerald-700 px-2.5 py-1 rounded-full">Sent</span>
                                            </div>
                                            <div
                                                class="flex items-center justify-between bg-[#F9F5F0] rounded-xl px-4 py-3">
                                                <span class="font-medium text-[#344F1F] text-sm">Deutsche Bahn</span>
                                                <span
                                                    class="text-xs font-semibold bg-amber-100 text-amber-700 px-2.5 py-1 rounded-full">Pending</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="text-xs text-[#344F1F]/50">Progress</span>
                                                <span class="text-xs font-semibold text-[#344F1F]">12/30 apps</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-[#344F1F] h-2.5 rounded-full" style="width: 40%"></div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Card 3: Offer Received (Step 3) - Dark theme --}}
                                    <div data-hiw-card="3"
                                        class="hiw-card absolute top-1/2 left-1/2 bg-[#1a1a1a] rounded-2xl lg:rounded-3xl shadow-2xl transition-all duration-500"
                                        style="
                            width: 320px;
                            height: 440px;
                            padding: 24px;
                            transform: translateX(-38%) translateY(-52%) rotate(4deg) scale(0);
                            opacity: 0;
                          ">
                                        {{-- Green header banner --}}
                                        <div class="bg-emerald-500 rounded-xl p-4 mb-4 text-center">
                                            <svg class="w-8 h-8 text-white mx-auto mb-2" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                            <h3 class="font-bold text-white text-lg">Offer Received!</h3>
                                            <p class="text-white/70 text-sm">Time to prepare for Germany</p>
                                        </div>

                                        {{-- Siemens offer --}}
                                        <div class="bg-white/10 rounded-xl px-4 py-3 mb-3">
                                            <div class="flex items-center justify-between mb-1">
                                                <span class="font-bold text-white text-sm">Siemens AG</span>
                                                <span
                                                    class="text-xs font-semibold bg-emerald-500 text-white px-2.5 py-0.5 rounded-full">Offer</span>
                                            </div>
                                            <p class="text-xs text-white/50">IT Specialist - Munich</p>
                                            <p class="text-xs text-white/40">Start: August 2026</p>
                                        </div>

                                        {{-- BMW interview --}}
                                        <div class="bg-white/10 rounded-xl px-4 py-3 mb-3">
                                            <div class="flex items-center justify-between mb-1">
                                                <span class="font-bold text-white text-sm">BMW Group</span>
                                                <span
                                                    class="text-xs font-semibold bg-[#F4991A] text-white px-2.5 py-0.5 rounded-full">Interview</span>
                                            </div>
                                            <p class="text-xs text-white/50">Mechatronics - Berlin</p>
                                            <p class="text-xs text-white/40">Dec 20, 2026 &bull; 10:00 AM</p>
                                        </div>

                                        {{-- Next steps --}}
                                        <div class="bg-white/5 rounded-xl px-4 py-3">
                                            <p class="text-xs text-white/50 mb-1">Next Steps</p>
                                            <p class="text-sm text-white/80">Accept offer &rarr; Pay success fee &rarr;
                                                Visa support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right side: step cards --}}
                    <div class="space-y-3 sm:space-y-4" id="how-it-works-steps">
                        <div data-step="1"
                            class="hiw-step hiw-step--active relative p-4 sm:p-5 lg:p-6 rounded-xl cursor-pointer transition-all duration-300"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-2 sm:space-y-2.5">
                                <div
                                    class="hiw-badge inline-block px-3 sm:px-4 py-1 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold transition-colors duration-300">
                                    Step 1
                                </div>
                                <h3 class="hiw-title text-lg sm:text-xl font-semibold transition-colors duration-300">
                                    Enroll &amp; Complete Profile
                                </h3>
                                <p class="hiw-desc text-sm sm:text-base leading-relaxed transition-colors duration-300">
                                    Pay $300 advance and complete your profile in 15
                                    minutes. Education, experience, German level, and job
                                    preferences.
                                </p>
                            </div>
                            <div
                                class="hiw-indicator absolute left-0 top-1/2 -translate-y-1/2 w-1 h-12 bg-[#F4991A] rounded-r-full transition-opacity duration-300">
                            </div>
                        </div>
                        <div data-step="2"
                            class="hiw-step relative p-4 sm:p-5 lg:p-6 rounded-xl cursor-pointer transition-all duration-300"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-2 sm:space-y-2.5">
                                <div
                                    class="hiw-badge inline-block px-3 sm:px-4 py-1 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold transition-colors duration-300">
                                    Step 2
                                </div>
                                <h3 class="hiw-title text-lg sm:text-xl font-semibold transition-colors duration-300">
                                    We Apply For You
                                </h3>
                                <p class="hiw-desc text-sm sm:text-base leading-relaxed transition-colors duration-300">
                                    Our expert team writes native German applications and
                                    submits to companies that hire internationals. Track
                                    everything in your dashboard.
                                </p>
                            </div>
                            <div
                                class="hiw-indicator absolute left-0 top-1/2 -translate-y-1/2 w-1 h-12 bg-[#F4991A] rounded-r-full transition-opacity duration-300">
                            </div>
                        </div>
                        <div data-step="3"
                            class="hiw-step relative p-4 sm:p-5 lg:p-6 rounded-xl cursor-pointer transition-all duration-300"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-2 sm:space-y-2.5">
                                <div
                                    class="hiw-badge inline-block px-3 sm:px-4 py-1 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold transition-colors duration-300">
                                    Step 3
                                </div>
                                <h3 class="hiw-title text-lg sm:text-xl font-semibold transition-colors duration-300">
                                    Get Your Offer
                                </h3>
                                <p class="hiw-desc text-sm sm:text-base leading-relaxed transition-colors duration-300">
                                    Receive interview calls, get 1-on-1 coaching, accept
                                    your offer, pay success fee. We help with visa and
                                    relocation.
                                </p>
                            </div>
                            <div
                                class="hiw-indicator absolute left-0 top-1/2 -translate-y-1/2 w-1 h-12 bg-[#F4991A] rounded-r-full transition-opacity duration-300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12" style="opacity: 0; transform: translateY(20px)">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 mb-4 bg-[#F4991A]/10 text-[#F4991A] border-[#F4991A]/20">
                        What You Get
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]">
                        Everything Included in Apply For Me
                    </h2>
                    <p class="text-lg text-[#344F1F]/70 max-w-2xl mx-auto">
                        A complete done-for-you service from application to offer.
                        Focus on learning German while we handle everything else.
                    </p>
                </div>
                <div class="max-w-7xl mx-auto">
                    <div class="hidden lg:grid lg:grid-cols-3 gap-6">
                        <div class="lg:row-span-2 rounded-2xl border-2 border-orange-300 bg-gradient-to-br from-orange-50 to-amber-50 hover:shadow-xl transition-all duration-500 min-h-[400px] p-8 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="flex-1 space-y-4">
                                <div class="w-12 h-12 bg-[#F4991A] rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-send w-6 h-6 text-white">
                                        <path
                                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                        </path>
                                        <path d="m21.854 2.147-10.94 10.939"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-bold text-[#344F1F]">
                                    Expert Applications
                                </h3>
                                <p class="text-base text-[#344F1F]/70 leading-relaxed">
                                    Our team submits personalized applications to companies
                                    that actually hire internationals. Not random spam -
                                    strategic, targeted applications based on your profile.
                                </p>
                            </div>
                            <div class="flex justify-center pt-4">
                                <div class="relative w-48 h-48 md:w-64 md:h-64">
                                    <img alt="Expert Applications" loading="lazy" width="256" height="256"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_documents_male64d7.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-2 rounded-2xl border-2 border-green-200 bg-gradient-to-br from-green-50 to-emerald-50 hover:shadow-xl transition-all duration-500 p-6"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="flex items-center justify-between gap-6 md:gap-8">
                                <div class="flex-1 space-y-3">
                                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-layout-dashboard w-6 h-6 text-[#344F1F]">
                                            <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                                            <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                                            <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                                            <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl md:text-2xl font-bold text-[#344F1F]">
                                        Real-Time Dashboard
                                    </h3>
                                    <p class="text-sm md:text-base text-[#344F1F]/70 leading-relaxed">
                                        Watch your applications in real-time. See who we
                                        applied to, track responses, get notified instantly
                                        when companies respond.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="relative w-40 h-40 md:w-56 md:h-56">
                                        <img alt="Real-Time Dashboard" loading="lazy" width="224" height="224"
                                            decoding="async" data-nimg="1"
                                            class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                            style="color: transparent"
                                            src="{{ asset('assets/_next/mascot_thinking_female7bb0.jpeg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:row-span-2 rounded-2xl border-2 border-blue-200 bg-gradient-to-br from-blue-50 to-sky-50 hover:shadow-xl transition-all duration-500 min-h-[400px] p-8 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="flex-1 space-y-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6 text-blue-600">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-bold text-[#344F1F]">
                                    Native German Cover Letters
                                </h3>
                                <p class="text-base text-[#344F1F]/70 leading-relaxed">
                                    Native-level German Anschreiben written by experts. DIN
                                    5008 format. Personalized for each company and position
                                    - the kind that get responses.
                                </p>
                            </div>
                            <div class="flex justify-center pt-4">
                                <div class="relative w-48 h-48 md:w-64 md:h-64">
                                    <img alt="Native German Cover Letters" loading="lazy" width="256" height="256"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_studying_malec6d7.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="lg:row-span-2 rounded-2xl border-2 border-purple-200 bg-gradient-to-br from-purple-50 to-violet-50 hover:shadow-xl transition-all duration-500 min-h-[400px] p-8 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="flex-1 space-y-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-video w-6 h-6 text-purple-600">
                                        <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                        </path>
                                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                    </svg>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-bold text-[#344F1F]">
                                    Interview Preparation
                                </h3>
                                <p class="text-base text-[#344F1F]/70 leading-relaxed">
                                    When you get interview calls, we prep you. Mock
                                    interviews, company research, question practice, and
                                    feedback until you&#x27;re interview-ready.
                                </p>
                            </div>
                            <div class="flex justify-center pt-4">
                                <div class="relative w-48 h-48 md:w-64 md:h-64">
                                    <img alt="Interview Preparation" loading="lazy" width="256" height="256"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_graduate_female94ff.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <a href="#pricing">
                            <div class="group bg-[#1a1a1a] text-white rounded-2xl p-6 flex items-center justify-between hover:bg-[#262626] transition-all duration-300 hover:shadow-xl border-2 border-[#262626] h-[150px]"
                                style="opacity: 0; transform: translateY(20px)">
                                <div class="flex items-center gap-3">
                                    <div class="flex -space-x-3">
                                        <div class="w-12 h-12 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 1" loading="lazy" width="48" height="48"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-1c9d9.jpeg') }}" />
                                        </div>
                                        <div class="w-12 h-12 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 2" loading="lazy" width="48" height="48"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-2235b.jpeg') }}" />
                                        </div>
                                        <div class="w-12 h-12 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 3" loading="lazy" width="48" height="48"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-33eed.jpeg') }}" />
                                        </div>
                                    </div>
                                    <span class="text-lg font-semibold">Get Started Now</span>
                                </div>
                                <div
                                    class="flex items-center justify-center w-10 h-10 rounded-full bg-white/10 group-hover:bg-white/20 transition-colors flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-1 transition-transform">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="rounded-2xl border-2 border-amber-200 bg-gradient-to-br from-amber-50 to-yellow-50 hover:shadow-xl transition-all duration-500 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plane w-6 h-6 text-[#F4991A]">
                                        <path
                                            d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Visa &amp; Relocation Support
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    After your offer, we help with blocked account setup,
                                    visa application, health insurance, and pre-departure
                                    checklist. End-to-end support.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32 md:w-40 md:h-40">
                                    <img alt="Visa &amp; Relocation Support" loading="lazy" width="160"
                                        height="160" decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_excited_female2376.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-2 rounded-2xl border-2 border-indigo-200 bg-gradient-to-br from-indigo-50 to-blue-50 hover:shadow-xl transition-all duration-500 p-6"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="flex items-center justify-between gap-6 md:gap-8">
                                <div class="flex-1 space-y-3">
                                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-headphones w-6 h-6 text-indigo-600">
                                            <path
                                                d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl md:text-2xl font-bold text-[#344F1F]">
                                        Dedicated Counselor
                                    </h3>
                                    <p class="text-sm md:text-base text-[#344F1F]/70 leading-relaxed">
                                        Your personal point of contact throughout the journey.
                                        WhatsApp support, email, and video calls whenever you
                                        need guidance.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="relative w-40 h-40 md:w-56 md:h-56">
                                        <img alt="Dedicated Counselor" loading="lazy" width="224" height="224"
                                            decoding="async" data-nimg="1"
                                            class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                            style="color: transparent"
                                            src="{{ asset('assets/_next/support-mascot210b.jpeg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:grid lg:hidden md:grid-cols-2 gap-6">
                        <div class="rounded-2xl border-2 border-orange-300 bg-gradient-to-br from-orange-50 to-amber-50 hover:shadow-xl transition-all duration-500 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-[#F4991A] rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-send w-6 h-6 text-white">
                                        <path
                                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                        </path>
                                        <path d="m21.854 2.147-10.94 10.939"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Expert Applications
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Our team submits personalized applications to companies
                                    that actually hire internationals. Not random spam -
                                    strategic, targeted applications based on your profile.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32 md:w-40 md:h-40">
                                    <img alt="Expert Applications" loading="lazy" width="160" height="160"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_documents_male3289.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-green-200 bg-gradient-to-br from-green-50 to-emerald-50 hover:shadow-xl transition-all duration-500 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-layout-dashboard w-6 h-6 text-[#344F1F]">
                                        <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                                        <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                                        <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                                        <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Real-Time Dashboard
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Watch your applications in real-time. See who we applied
                                    to, track responses, get notified instantly when
                                    companies respond.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32 md:w-40 md:h-40">
                                    <img alt="Real-Time Dashboard" loading="lazy" width="160" height="160"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_thinking_female7a6f.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-blue-200 bg-gradient-to-br from-blue-50 to-sky-50 hover:shadow-xl transition-all duration-500 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6 text-blue-600">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Native German Cover Letters
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Native-level German Anschreiben written by experts. DIN
                                    5008 format. Personalized for each company and position
                                    - the kind that get responses.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32 md:w-40 md:h-40">
                                    <img alt="Native German Cover Letters" loading="lazy" width="160" height="160"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_studying_male647e.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-purple-200 bg-gradient-to-br from-purple-50 to-violet-50 hover:shadow-xl transition-all duration-500 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-video w-6 h-6 text-purple-600">
                                        <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                        </path>
                                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Interview Preparation
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    When you get interview calls, we prep you. Mock
                                    interviews, company research, question practice, and
                                    feedback until you&#x27;re interview-ready.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32 md:w-40 md:h-40">
                                    <img alt="Interview Preparation" loading="lazy" width="160" height="160"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_graduate_female6ffb.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-amber-200 bg-gradient-to-br from-amber-50 to-yellow-50 hover:shadow-xl transition-all duration-500 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plane w-6 h-6 text-[#F4991A]">
                                        <path
                                            d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Visa &amp; Relocation Support
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    After your offer, we help with blocked account setup,
                                    visa application, health insurance, and pre-departure
                                    checklist. End-to-end support.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32 md:w-40 md:h-40">
                                    <img alt="Visa &amp; Relocation Support" loading="lazy" width="160"
                                        height="160" decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_excited_female2376.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-indigo-200 bg-gradient-to-br from-indigo-50 to-blue-50 hover:shadow-xl transition-all duration-500 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-headphones w-6 h-6 text-indigo-600">
                                        <path
                                            d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Dedicated Counselor
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Your personal point of contact throughout the journey.
                                    WhatsApp support, email, and video calls whenever you
                                    need guidance.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32 md:w-40 md:h-40">
                                    <img alt="Dedicated Counselor" loading="lazy" width="160" height="160"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/support-mascotcb8c.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <a href="#pricing">
                            <div class="group bg-[#1a1a1a] text-white rounded-2xl p-6 flex items-center justify-between hover:bg-[#262626] transition-all duration-300 hover:shadow-xl border-2 border-[#262626]"
                                style="opacity: 0; transform: translateY(20px)">
                                <div class="flex items-center gap-3">
                                    <div class="flex -space-x-2">
                                        <div class="w-10 h-10 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 1" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-1c9d9.jpeg') }}" />
                                        </div>
                                        <div class="w-10 h-10 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 2" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-2235b.jpeg') }}" />
                                        </div>
                                        <div class="w-10 h-10 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 3" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-33eed.jpeg') }}" />
                                        </div>
                                    </div>
                                    <span class="text-base font-semibold">Get Started Now</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="grid md:hidden gap-4">
                        <div class="rounded-2xl border-2 border-orange-300 bg-gradient-to-br from-orange-50 to-amber-50 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-[#F4991A] rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-send w-6 h-6 text-white">
                                        <path
                                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                        </path>
                                        <path d="m21.854 2.147-10.94 10.939"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Expert Applications
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Our team submits personalized applications to companies
                                    that actually hire internationals. Not random spam -
                                    strategic, targeted applications based on your profile.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32">
                                    <img alt="Expert Applications" loading="lazy" width="128" height="128"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_documents_maleebd2.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-green-200 bg-gradient-to-br from-green-50 to-emerald-50 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-layout-dashboard w-6 h-6 text-[#344F1F]">
                                        <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                                        <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                                        <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                                        <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Real-Time Dashboard
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Watch your applications in real-time. See who we applied
                                    to, track responses, get notified instantly when
                                    companies respond.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32">
                                    <img alt="Real-Time Dashboard" loading="lazy" width="128" height="128"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_thinking_female8891.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-blue-200 bg-gradient-to-br from-blue-50 to-sky-50 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6 text-blue-600">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Native German Cover Letters
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Native-level German Anschreiben written by experts. DIN
                                    5008 format. Personalized for each company and position
                                    - the kind that get responses.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32">
                                    <img alt="Native German Cover Letters" loading="lazy" width="128"
                                        height="128" decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_studying_malec9f9.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-purple-200 bg-gradient-to-br from-purple-50 to-violet-50 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-video w-6 h-6 text-purple-600">
                                        <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                        </path>
                                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Interview Preparation
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    When you get interview calls, we prep you. Mock
                                    interviews, company research, question practice, and
                                    feedback until you&#x27;re interview-ready.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32">
                                    <img alt="Interview Preparation" loading="lazy" width="128" height="128"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_graduate_female2fd4.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-amber-200 bg-gradient-to-br from-amber-50 to-yellow-50 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plane w-6 h-6 text-[#F4991A]">
                                        <path
                                            d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Visa &amp; Relocation Support
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    After your offer, we help with blocked account setup,
                                    visa application, health insurance, and pre-departure
                                    checklist. End-to-end support.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32">
                                    <img alt="Visa &amp; Relocation Support" loading="lazy" width="128"
                                        height="128" decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/mascot_excited_female2395.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border-2 border-indigo-200 bg-gradient-to-br from-indigo-50 to-blue-50 p-6 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="space-y-3">
                                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-headphones w-6 h-6 text-indigo-600">
                                        <path
                                            d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-[#344F1F]">
                                    Dedicated Counselor
                                </h3>
                                <p class="text-sm text-[#344F1F]/70 leading-relaxed">
                                    Your personal point of contact throughout the journey.
                                    WhatsApp support, email, and video calls whenever you
                                    need guidance.
                                </p>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div class="relative w-32 h-32">
                                    <img alt="Dedicated Counselor" loading="lazy" width="128" height="128"
                                        decoding="async" data-nimg="1"
                                        class="object-contain w-full h-full transition-transform duration-500 hover:scale-110"
                                        style="color: transparent"
                                        src="{{ asset('assets/_next/support-mascot142f.jpeg') }}" />
                                </div>
                            </div>
                        </div>
                        <a href="#pricing">
                            <div class="group bg-[#1a1a1a] text-white rounded-2xl p-6 flex items-center justify-between hover:bg-[#262626] transition-all duration-300 border-2 border-[#262626]"
                                style="opacity: 0; transform: translateY(20px)">
                                <div class="flex items-center gap-3">
                                    <div class="flex -space-x-2">
                                        <div class="w-10 h-10 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 1" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-1c9d9.jpeg') }}" />
                                        </div>
                                        <div class="w-10 h-10 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 2" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-2235b.jpeg') }}" />
                                        </div>
                                        <div class="w-10 h-10 rounded-full border-[3px] border-white overflow-hidden">
                                            <img alt="Student 3" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1" class="w-full h-full object-cover"
                                                style="color: transparent"
                                                src="{{ asset('assets/_next/hero-avatar-33eed.jpeg') }}" />
                                        </div>
                                    </div>
                                    <span class="text-base font-semibold">Get Started Now</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12 sm:py-16 md:py-24 bg-white overflow-hidden" data-dash-section>
            <div class="container mx-auto px-4">
                <div class="text-center mb-10 sm:mb-14 lg:mb-16" style="opacity: 0; transform: translateY(20px)">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#344F1F]/10 border border-[#344F1F]/20 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-briefcase w-4 h-4 text-[#344F1F]">
                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                        </svg><span class="text-sm font-medium text-[#344F1F]">Exclusive Member Dashboard</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 sm:mb-4 text-[#344F1F]">
                        Your Personal Command Center
                    </h2>
                    <p class="text-base sm:text-lg text-[#344F1F]/70 max-w-2xl mx-auto px-4">
                        Enrolled members get instant access to track applications,
                        download documents, and chat with their counselor
                    </p>
                </div>
                <div class="max-w-7xl mx-auto grid lg:grid-cols-[1fr,1.3fr] gap-8 lg:gap-12 items-center">
                    <div class="space-y-3 sm:space-y-4 order-2 lg:order-1">
                        <div data-dash="1"
                            class="dash-card dash-card--active relative p-4 sm:p-5 lg:p-6 rounded-2xl cursor-pointer transition-all duration-300"
                            style="opacity: 0; transform: translateX(-20px)">
                            <div class="flex items-start gap-4">
                                <div
                                    class="dash-icon flex-shrink-0 w-12 h-12 lg:w-14 lg:h-14 bg-[#344F1F] rounded-xl flex items-center justify-center transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chart-column w-6 h-6 lg:w-7 lg:h-7 text-white">
                                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                        <path d="M18 17V9"></path>
                                        <path d="M13 17V5"></path>
                                        <path d="M8 17v-3"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="dash-title text-lg sm:text-xl font-bold mb-2 transition-colors duration-300">
                                        Full Dashboard Overview</h3>
                                    <p
                                        class="dash-desc text-sm sm:text-base leading-relaxed transition-colors duration-300">
                                        Your personal command center with live stats, recent activity, upcoming interviews,
                                        and quick actions - all at a glance.</p>
                                </div>
                            </div>
                            <div class="dash-indicator absolute left-0 top-1/2 -translate-y-1/2 w-1.5 h-16 bg-[#F4991A] rounded-r-full"
                                style="opacity: 0"></div>
                        </div>
                        <div data-dash="2"
                            class="dash-card relative p-4 sm:p-5 lg:p-6 rounded-2xl cursor-pointer transition-all duration-300"
                            style="opacity: 0; transform: translateX(-20px)">
                            <div class="flex items-start gap-4">
                                <div
                                    class="dash-icon flex-shrink-0 w-12 h-12 lg:w-14 lg:h-14 bg-[#F4991A] rounded-xl flex items-center justify-center transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6 lg:w-7 lg:h-7 text-white">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="dash-title text-lg sm:text-xl font-bold mb-2 transition-colors duration-300">
                                        Documents &amp; Cover Letters</h3>
                                    <p
                                        class="dash-desc text-sm sm:text-base leading-relaxed transition-colors duration-300">
                                        Access every CV and cover letter we create. Download anytime, review before we send,
                                        keep for future use.</p>
                                </div>
                            </div>
                            <div class="dash-indicator absolute left-0 top-1/2 -translate-y-1/2 w-1.5 h-16 bg-[#F4991A] rounded-r-full"
                                style="opacity: 0"></div>
                        </div>
                        <div data-dash="3"
                            class="dash-card relative p-4 sm:p-5 lg:p-6 rounded-2xl cursor-pointer transition-all duration-300"
                            style="opacity: 0; transform: translateX(-20px)">
                            <div class="flex items-start gap-4">
                                <div
                                    class="dash-icon flex-shrink-0 w-12 h-12 lg:w-14 lg:h-14 bg-black rounded-xl flex items-center justify-center transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-message-circle w-6 h-6 lg:w-7 lg:h-7 text-white">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="dash-title text-lg sm:text-xl font-bold mb-2 transition-colors duration-300">
                                        Direct Counselor Chat</h3>
                                    <p
                                        class="dash-desc text-sm sm:text-base leading-relaxed transition-colors duration-300">
                                        Message your dedicated counselor anytime. Get interview tips, request changes, ask
                                        questions. Avg response: 4 hours.</p>
                                </div>
                            </div>
                            <div class="dash-indicator absolute left-0 top-1/2 -translate-y-1/2 w-1.5 h-16 bg-[#F4991A] rounded-r-full"
                                style="opacity: 0"></div>
                        </div>
                        <div class="pt-4" style="opacity: 0; transform: translateY(10px)">
                            <div class="flex items-center gap-2 text-sm text-[#344F1F]/60">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-4 h-4 text-emerald-500">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Instant access upon enrollment</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative min-h-[450px] sm:min-h-[500px] lg:min-h-[580px] flex items-center justify-center order-1 lg:order-2"
                        id="dash-visuals-container">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#F9F5F0] to-[#F2EAD3]/50 rounded-3xl -z-10">
                        </div>
                        <div data-dash-visual="1"
                            class="dash-visual dash-visual--visible w-full flex justify-center p-4 lg:p-6"
                            style="opacity: 0; transform: translateY(30px) scale(0.95)">
                            <div
                                class="bg-white rounded-2xl lg:rounded-3xl shadow-2xl border border-gray-200 overflow-hidden w-full max-w-[500px]">
                                <div class="bg-gradient-to-r from-[#344F1F] to-[#2d4219] px-4 lg:px-6 py-4 lg:py-5">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-white/70 text-xs lg:text-sm">
                                                Welcome back,
                                            </p>
                                            <h3 class="text-white font-bold text-lg lg:text-xl">
                                                Fatima Zahra
                                            </h3>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-8 h-8 lg:w-10 lg:h-10 bg-white/20 rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-bell w-4 h-4 lg:w-5 lg:h-5 text-white">
                                                    <path d="M10.268 21a2 2 0 0 0 3.464 0"></path>
                                                    <path
                                                        d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div
                                                class="w-8 h-8 lg:w-10 lg:h-10 bg-[#F4991A] rounded-full flex items-center justify-center text-white font-bold text-sm">
                                                PS
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="grid grid-cols-3 gap-2 lg:gap-4 p-3 lg:p-4 bg-[#F9F5F0] border-b border-[#F2EAD3]">
                                    <div class="bg-white rounded-xl p-2 lg:p-3 text-center shadow-sm">
                                        <p class="text-xl lg:text-2xl font-bold text-[#344F1F]">
                                            12
                                        </p>
                                        <p class="text-[10px] lg:text-xs text-[#344F1F]/60">
                                            Apps Sent
                                        </p>
                                    </div>
                                    <div class="bg-white rounded-xl p-2 lg:p-3 text-center shadow-sm">
                                        <p class="text-xl lg:text-2xl font-bold text-emerald-600">
                                            3
                                        </p>
                                        <p class="text-[10px] lg:text-xs text-[#344F1F]/60">
                                            Interviews
                                        </p>
                                    </div>
                                    <div class="bg-white rounded-xl p-2 lg:p-3 text-center shadow-sm">
                                        <p class="text-xl lg:text-2xl font-bold text-[#F4991A]">
                                            1
                                        </p>
                                        <p class="text-[10px] lg:text-xs text-[#344F1F]/60">
                                            Offer!
                                        </p>
                                    </div>
                                </div>
                                <div class="p-3 lg:p-4 space-y-3 lg:space-y-4">
                                    <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-3 lg:p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar w-4 h-4 text-emerald-600">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg><span class="text-xs font-semibold text-emerald-700">UPCOMING
                                                INTERVIEW</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="font-semibold text-[#344F1F] text-sm lg:text-base">
                                                    Siemens AG
                                                </p>
                                                <p class="text-xs text-[#344F1F]/60">
                                                    Dec 20, 2025 • 10:00 AM CET
                                                </p>
                                            </div>
                                            <button
                                                class="bg-emerald-600 text-white text-xs px-3 py-1.5 rounded-full font-medium">
                                                Prep Now
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-xs font-semibold text-[#344F1F]/70">RECENT
                                                APPLICATIONS</span><button
                                                class="text-xs text-[#F4991A] font-medium flex items-center gap-1">
                                                View All
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-chevron-right w-3 h-3">
                                                    <path d="m9 18 6-6-6-6"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="space-y-2">
                                            <div
                                                class="flex items-center justify-between p-2 lg:p-3 bg-[#F9F5F0] rounded-lg">
                                                <div class="flex items-center gap-2 lg:gap-3">
                                                    <div
                                                        class="w-8 h-8 bg-emerald-500 rounded-lg flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-circle-check-big w-4 h-4 text-white">
                                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                            <path d="m9 11 3 3L22 4"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-[#344F1F] text-xs lg:text-sm">
                                                            BMW Group
                                                        </p>
                                                        <p class="text-[10px] lg:text-xs text-[#344F1F]/60">
                                                            Mechatronics
                                                        </p>
                                                    </div>
                                                </div>
                                                <span
                                                    class="bg-emerald-100 text-emerald-700 text-[10px] lg:text-xs px-2 py-1 rounded-full font-medium">Interview</span>
                                            </div>
                                            <div
                                                class="flex items-center justify-between p-2 lg:p-3 bg-[#F9F5F0] rounded-lg">
                                                <div class="flex items-center gap-2 lg:gap-3">
                                                    <div
                                                        class="w-8 h-8 bg-[#344F1F] rounded-lg flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-send w-4 h-4 text-white">
                                                            <path
                                                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                                            </path>
                                                            <path d="m21.854 2.147-10.94 10.939"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-[#344F1F] text-xs lg:text-sm">
                                                            Bosch
                                                        </p>
                                                        <p class="text-[10px] lg:text-xs text-[#344F1F]/60">
                                                            Electronics
                                                        </p>
                                                    </div>
                                                </div>
                                                <span
                                                    class="bg-[#344F1F]/10 text-[#344F1F] text-[10px] lg:text-xs px-2 py-1 rounded-full font-medium">Sent</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#F4991A]/10 border border-[#F4991A]/20 rounded-xl p-3">
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="w-8 h-8 bg-[#F4991A] rounded-full flex items-center justify-center flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-user w-4 h-4 text-white">
                                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-[#344F1F] text-xs lg:text-sm">
                                                    Anna Schmidt
                                                </p>
                                                <p class="text-[10px] lg:text-xs text-[#344F1F]/70 mt-0.5">
                                                    Great news! I&#x27;ve prepared interview tips
                                                    for your Siemens call. Check the prep section!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Visual 2: Documents & Cover Letters --}}
                        <div data-dash-visual="2"
                            class="dash-visual dash-visual--hidden w-full flex justify-center p-4 lg:p-6">
                            <div
                                class="bg-white rounded-2xl lg:rounded-3xl shadow-2xl border border-gray-200 overflow-hidden w-full max-w-[500px]">
                                <div class="bg-[#F4991A] px-4 lg:px-6 py-4 lg:py-5 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text w-5 h-5 lg:w-6 lg:h-6 text-white">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                        </svg>
                                        <div>
                                            <h3 class="text-white font-bold text-base lg:text-lg">Your Documents</h3>
                                            <p class="text-white/70 text-xs">8 files ready</p>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-white/20 text-white text-xs px-3 py-1.5 rounded-full font-medium">Download
                                        All</button>
                                </div>
                                <div class="p-4 lg:p-5 space-y-3">
                                    <div>
                                        <p class="text-xs font-semibold text-[#344F1F]/60 mb-2">YOUR CV</p>
                                        <div
                                            class="flex items-center justify-between p-3 lg:p-4 bg-blue-50 rounded-xl border border-blue-100">
                                            <div class="flex items-center gap-3 lg:gap-4">
                                                <div
                                                    class="w-12 h-14 lg:w-14 lg:h-16 bg-blue-100 rounded-lg flex items-center justify-center border border-blue-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-file-text w-6 h-6 lg:w-7 lg:h-7 text-blue-600">
                                                        <path
                                                            d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                        </path>
                                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                        <path d="M10 9H8"></path>
                                                        <path d="M16 13H8"></path>
                                                        <path d="M16 17H8"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-semibold text-[#344F1F] text-sm lg:text-base">German CV
                                                        - Final</p>
                                                    <p class="text-xs text-[#344F1F]/60">Updated Dec 15, 2025</p>
                                                    <div class="flex items-center gap-1 mt-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 text-[#F4991A] fill-[#F4991A]">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <span class="text-[10px] text-[#344F1F]/60">Expert reviewed</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button
                                                class="w-10 h-10 lg:w-12 lg:h-12 bg-[#344F1F] rounded-full flex items-center justify-center hover:bg-[#2d4219] transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-download w-4 h-4 lg:w-5 lg:h-5 text-white">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" x2="12" y1="15"
                                                        y2="3"></line>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-[#344F1F]/60 mb-2">COVER LETTERS (5)</p>
                                        <div class="space-y-2">
                                            <div
                                                class="flex items-center justify-between p-3 bg-[#F9F5F0] rounded-xl border border-[#F2EAD3]">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-10 h-12 bg-emerald-100 rounded-lg flex items-center justify-center border border-emerald-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-file-text w-5 h-5 text-emerald-600">
                                                            <path
                                                                d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                            </path>
                                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                            <path d="M10 9H8"></path>
                                                            <path d="M16 13H8"></path>
                                                            <path d="M16 17H8"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold text-[#344F1F] text-sm">Siemens AG</p>
                                                        <p class="text-xs text-[#344F1F]/60">IT Specialist &bull; Munich
                                                        </p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="w-8 h-8 bg-[#344F1F] rounded-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-download w-4 h-4 text-white">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15"
                                                            y2="3"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div
                                                class="flex items-center justify-between p-3 bg-[#F9F5F0] rounded-xl border border-[#F2EAD3]">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-10 h-12 bg-emerald-100 rounded-lg flex items-center justify-center border border-emerald-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-file-text w-5 h-5 text-emerald-600">
                                                            <path
                                                                d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                            </path>
                                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                            <path d="M10 9H8"></path>
                                                            <path d="M16 13H8"></path>
                                                            <path d="M16 17H8"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold text-[#344F1F] text-sm">BMW Group</p>
                                                        <p class="text-xs text-[#344F1F]/60">Mechatronics &bull; Berlin
                                                        </p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="w-8 h-8 bg-[#344F1F] rounded-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-download w-4 h-4 text-white">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15"
                                                            y2="3"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div
                                                class="flex items-center justify-between p-3 bg-[#F9F5F0] rounded-xl border border-[#F2EAD3]">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-10 h-12 bg-emerald-100 rounded-lg flex items-center justify-center border border-emerald-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-file-text w-5 h-5 text-emerald-600">
                                                            <path
                                                                d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                            </path>
                                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                            <path d="M10 9H8"></path>
                                                            <path d="M16 13H8"></path>
                                                            <path d="M16 17H8"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold text-[#344F1F] text-sm">Bosch</p>
                                                        <p class="text-xs text-[#344F1F]/60">Electronics &bull; Stuttgart
                                                        </p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="w-8 h-8 bg-[#344F1F] rounded-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-download w-4 h-4 text-white">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15"
                                                            y2="3"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Visual 3: Counselor Chat --}}
                        <div data-dash-visual="3"
                            class="dash-visual dash-visual--hidden w-full flex justify-center p-4 lg:p-6">
                            <div
                                class="bg-white rounded-2xl lg:rounded-3xl shadow-2xl border border-gray-200 overflow-hidden w-full max-w-[500px]">
                                <div class="bg-black px-4 lg:px-6 py-4 lg:py-5 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 bg-[#F4991A] rounded-full flex items-center justify-center text-white font-bold text-sm">
                                            AS</div>
                                        <div>
                                            <h3 class="text-white font-bold text-base lg:text-lg">Anna Schmidt</h3>
                                            <div class="flex items-center gap-1.5">
                                                <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                                                <p class="text-white/70 text-xs">Your Counselor &bull; Online</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-white/20 text-white text-xs px-3 py-1.5 rounded-full font-medium flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-3 h-3">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        Call
                                    </button>
                                </div>
                                <div class="p-4 lg:p-5 space-y-4 bg-[#F9F5F0] min-h-[320px]">
                                    <div class="flex gap-3">
                                        <div
                                            class="w-8 h-8 bg-[#F4991A] rounded-full flex items-center justify-center text-white font-bold text-[10px] flex-shrink-0">
                                            AS</div>
                                        <div class="bg-white rounded-2xl rounded-tl-sm p-3 shadow-sm max-w-[80%]">
                                            <p class="text-sm text-[#344F1F]">Great news! Siemens confirmed your interview
                                                for Dec 20th. I've prepared some tips for you.</p>
                                            <p class="text-[10px] text-[#344F1F]/40 mt-1">10:30 AM</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-3 justify-end">
                                        <div class="bg-[#344F1F] rounded-2xl rounded-tr-sm p-3 shadow-sm max-w-[80%]">
                                            <p class="text-sm text-white">That's amazing! What should I prepare?</p>
                                            <p class="text-[10px] text-white/40 mt-1">10:32 AM</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-3">
                                        <div
                                            class="w-8 h-8 bg-[#F4991A] rounded-full flex items-center justify-center text-white font-bold text-[10px] flex-shrink-0">
                                            AS</div>
                                        <div class="bg-white rounded-2xl rounded-tl-sm p-3 shadow-sm max-w-[80%]">
                                            <p class="text-sm text-[#344F1F]">I've uploaded an interview prep guide to
                                                your Documents section. Focus on: 1) Why Siemens 2) Your technical skills 3)
                                                German work culture questions.</p>
                                            <p class="text-[10px] text-[#344F1F]/40 mt-1">10:35 AM</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-3 justify-end">
                                        <div class="bg-[#344F1F] rounded-2xl rounded-tr-sm p-3 shadow-sm max-w-[80%]">
                                            <p class="text-sm text-white">Thank you so much! I'll review it today.</p>
                                            <p class="text-[10px] text-white/40 mt-1">10:36 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-t border-gray-200 bg-white flex items-center gap-2">
                                    <input type="text" placeholder="Type a message..."
                                        class="flex-1 bg-[#F9F5F0] rounded-full px-4 py-2.5 text-sm outline-none border border-[#F2EAD3]"
                                        disabled>
                                    <button class="w-10 h-10 bg-[#344F1F] rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-send w-4 h-4 text-white">
                                            <path
                                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                            </path>
                                            <path d="m21.854 2.147-10.94 10.939"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing" aria-labelledby="pricing-heading">
            <section class="py-16 md:py-24 bg-[#F9F5F0]" id="pricing">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-12" style="opacity: 0; transform: translateY(20px)">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 mb-4 bg-emerald-100 text-emerald-700 border-emerald-200 hover:bg-emerald-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-trending-up w-3 h-3 mr-1">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>Limited Spots Each Intake
                        </div>
                        <h2 id="pricing-heading" class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]">
                            Two Ways to Get to Germany
                        </h2>
                        <p class="text-lg text-[#344F1F]/70 max-w-2xl mx-auto">
                            DIY students apply to 50+ positions and wait 6+ months. Our
                            clients get offers in 3-4 months with expert support.
                        </p>
                        <div class="mt-4 flex items-center justify-center gap-2">
                            <span class="text-sm text-[#344F1F]/60">Prices in:</span><button type="button"
                                role="combobox" aria-controls="radix-«R2ibcuslb»" aria-expanded="false"
                                aria-autocomplete="none" dir="ltr" data-state="closed"
                                class="flex items-center justify-between rounded-lg border py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 [&amp;&gt;span]:line-clamp-1 bg-white/80 border-[#344F1F]/20 hover:border-[#F4991A] focus:ring-[#F4991A]/20 h-8 px-2 text-xs min-w-[80px] w-[100px]">
                                <span style="pointer-events: none"><span class="flex items-center gap-1.5"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-globe h-3 w-3 text-[#344F1F]/60">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                            <path d="M2 12h20"></path>
                                        </svg><span class="font-medium">USD</span></span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground" aria-hidden="true">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg></button><select aria-hidden="true" tabindex="-1"
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
                      "></select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                        <div class="rounded-[32px] p-3 bg-white border border-black/10 flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div class="rounded-[20px] p-6 md:p-8 bg-[#F5F5F5] flex-1 flex flex-col">
                                <div class="mb-6">
                                    <div class="flex items-end justify-between mb-2" style="min-height: 44px">
                                        <h3 class="text-2xl font-bold text-[#344F1F]">
                                            Free (DIY)
                                        </h3>
                                    </div>
                                    <p class="text-[#344F1F]/60 mb-4">
                                        Apply yourself with AI tools
                                    </p>
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-4xl font-bold text-[#344F1F]">$<!-- -->0</span><span
                                            class="text-[#344F1F]/60">/forever</span>
                                    </div>
                                    <p class="text-sm mt-2 h-5 text-[#344F1F]/50">
                                        No credit card required
                                    </p>
                                </div>
                                <div class="space-y-3 mb-6 flex-grow">
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-[#344F1F]/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-[#344F1F]">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-[#344F1F]/80">Unlimited access to 67,000+ jobs</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-[#344F1F]/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-[#344F1F]">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-[#344F1F]/80">Unlimited AI application kits</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-[#344F1F]/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-[#344F1F]">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-[#344F1F]/80">Unlimited CV exports</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-[#344F1F]/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-[#344F1F]">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-[#344F1F]/80">Full German learning tools</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-[#344F1F]/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-[#344F1F]">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-[#344F1F]/80">AI job match recommendations</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-[#344F1F]/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-[#344F1F]">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-[#344F1F]/80">Interview prep question bank</span>
                                    </div>
                                </div>
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 w-full rounded-full border-2 border-[#344F1F] text-[#344F1F] hover:bg-[#344F1F] hover:text-white transition-all py-6">
                                    Get Started Free<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="rounded-[32px] p-3 bg-black relative flex flex-col"
                            style="opacity: 0; transform: translateY(20px)">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent absolute -top-3 left-1/2 -translate-x-1/2 bg-[#F4991A] text-white hover:bg-[#E5890F] z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-trending-up w-3 h-3 mr-1">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>DONE FOR YOU
                            </div>
                            <div class="rounded-[20px] p-6 md:p-8 bg-[#1a1a1a] flex-1 flex flex-col">
                                <div class="mb-6">
                                    <div class="flex items-end justify-between gap-4 mb-2">
                                        <h3 class="text-2xl font-bold text-white">
                                            Azubi Consultation
                                        </h3>
                                    </div>
                                    <p class="text-white/60 mb-4">
                                        Our experts apply for you
                                    </p>
                                    <div style="opacity: 0; transform: translateY(20px)">
                                        <div class="flex items-baseline gap-2">
                                            <span class="text-4xl font-bold text-white">$<!-- -->300</span><span
                                                class="text-white/60">to get started</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-4 rounded-xl bg-emerald-500/20 border border-emerald-500/30">
                                        <div class="flex items-baseline gap-2" style="opacity: 0">
                                            <span class="text-xl font-bold text-white">+<!-- -->$<!-- -->899</span><span
                                                class="text-sm text-white/60">only when you receive an offer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-3 mb-6 flex-grow">
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-white">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-white/80">30+ expert applications submitted for
                                            you</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-white">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-white/80">Native-level German cover letters</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-white">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-white/80">Real-time application tracking</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-white">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-white/80">Dedicated personal counselor</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-white">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-white/80">Mock interview preparation</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-white">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-white/80">Full visa guidance &amp; support</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5 bg-emerald-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check w-3 h-3 text-white">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-white/80">12-month validity (2 intakes)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 pb-3">
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 w-full bg-white text-black hover:bg-white/90 rounded-full font-semibold transition-all relative overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed py-6"
                                    style="
                          box-shadow:
                            rgba(0, 0, 0, 0.1) 0px 2.5px 2.5px -0.47px,
                            rgba(0, 0, 0, 0.1) 0px 6px 6px -0.94px,
                            rgba(0, 0, 0, 0.08) 0px 11px 11px -1.4px,
                            rgba(0, 0, 0, 0.06) 0px 20px 20px -2.81px,
                            rgba(0, 0, 0, 0.04) 0px 37px 37px -5.16px,
                            rgba(0, 0, 0, 0.02) 0px 68px 68px -9.37px,
                            rgba(0, 0, 0, 0.01) 0px 124px 124px -17.03px,
                            rgba(0, 0, 0, 0.01) 0px 226px 226px -30.94px;
                        ">
                                    <span class="relative z-10">Get Started</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full hover:translate-x-full transition-transform duration-700 ease-in-out">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 text-center" style="opacity: 0">
                        <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-[#344F1F]/60">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-check w-4 h-4 text-emerald-500">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg><span>Pay success fee only on confirmed offer</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-check w-4 h-4 text-emerald-500">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg><span>Non-refundable advance covers your application
                                    work</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-check w-4 h-4 text-emerald-500">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg><span>Secure payment via Stripe</span>
                            </div>
                        </div>
                        <p class="mt-4 text-xs text-[#344F1F]/50 italic">
                            Prices shown in
                            <!-- -->Moroccan Dirham<!-- -->
                            (<!-- -->MAD<!-- -->). Change currency above.
                        </p>
                        <div class="mt-6 flex items-center justify-center gap-4 opacity-40">
                            <span class="text-xs text-[#344F1F]/60 font-medium">Powered by</span><span
                                class="text-lg font-bold text-[#344F1F]/80">Stripe</span>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12" style="opacity: 0; transform: translateY(20px)">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]">
                        DIY vs Apply For Me
                    </h2>
                    <p class="text-lg text-[#344F1F]/70 max-w-2xl mx-auto">
                        See why students are choosing our expert service
                    </p>
                </div>
                <div class="hidden lg:block max-w-5xl mx-auto">
                    <div class="bg-gray-100 rounded-[32px] p-[5px]">
                        <div class="bg-white rounded-[27px] overflow-hidden">
                            <div class="grid grid-cols-[280px_1fr_1fr]">
                                <div class="bg-gray-100 p-6 font-bold text-[#344F1F]">
                                    Features
                                </div>
                                <div class="p-6 text-center">
                                    <div class="font-bold text-[#344F1F] mb-1">
                                        DIY (Free)
                                    </div>
                                    <div class="text-sm text-[#344F1F]/60">
                                        You do everything
                                    </div>
                                </div>
                                <div class="p-6 text-center bg-[#F4991A]/5">
                                    <div class="font-bold text-[#F4991A] mb-1">
                                        Apply For Me
                                    </div>
                                    <div class="text-sm text-[#F4991A]/80">
                                        $300<!-- -->
                                        advance +
                                        <!-- -->$899<!-- -->
                                        on success
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Job Discovery
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">67K+ jobs
                                            (you search)</span>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Curated
                                            matches for you</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Cover Letters
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">AI-generated
                                            (you edit)</span>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span
                                            class="text-sm text-[#344F1F]/80 font-medium text-center block">Expert-written
                                            (native German)</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Application Submission
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#EF4444"
                                                fill-opacity="0.1"></circle>
                                            <path d="M9 9L15 15M15 9L9 15" stroke="#EF4444" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">We do it for
                                            you</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Applications per Month
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">5-10
                                            (realistically)</span>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Based on
                                            your profile</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Application Tracking
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Basic
                                            dashboard</span>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Real-time
                                            team updates</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Interview Preparation
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Question
                                            bank access</span>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">1-on-1
                                            coaching sessions</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Dedicated Counselor
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#EF4444"
                                                fill-opacity="0.1"></circle>
                                            <path d="M9 9L15 15M15 9L9 15" stroke="#EF4444" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#10B981"
                                                fill-opacity="0.1"></circle>
                                            <path d="M8 12.5L10.5 15L16 9.5" stroke="#10B981" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Your Time Investment
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">50+
                                            hours</span>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">&lt;5
                                            hours</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F] border-b border-white">
                                        Visa Guidance
                                    </div>
                                    <div class="p-6 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Self-service
                                            guides</span>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Full support
                                            + booking</span>
                                    </div>
                                </div>
                                <div class="contents" style="opacity: 0; transform: translateY(10px)">
                                    <div class="bg-gray-100 p-6 text-sm text-[#344F1F]">
                                        Success-based Payment
                                    </div>
                                    <div class="p-6">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#EF4444"
                                                fill-opacity="0.1"></circle>
                                            <path d="M9 9L15 15M15 9L9 15" stroke="#EF4444" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="p-6 bg-[#F4991A]/5">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#10B981"
                                                fill-opacity="0.1"></circle>
                                            <path d="M8 12.5L10.5 15L16 9.5" stroke="#10B981" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:hidden">
                    <div class="bg-gray-100 rounded-[32px] p-[5px]">
                        <div class="bg-white rounded-[27px] overflow-hidden">
                            <div class="grid grid-cols-[140px_1fr_1fr]">
                                <div class="bg-gray-100 p-4 font-bold text-[#344F1F] text-sm">
                                    Features
                                </div>
                                <div class="p-4 text-center">
                                    <div class="font-bold text-[#344F1F] text-sm mb-1">
                                        DIY
                                    </div>
                                    <div class="text-xs text-[#344F1F]/60">Free</div>
                                </div>
                                <div class="p-4 text-center bg-[#F4991A]/5">
                                    <div class="font-bold text-[#F4991A] text-sm mb-1">
                                        Apply For Me
                                    </div>
                                    <div class="text-xs text-[#F4991A]/80">
                                        $300<!-- -->
                                        +
                                        <!-- -->$899
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Job Discovery
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">67K+ jobs
                                            (you search)</span>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Curated
                                            matches for you</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Cover Letters
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">AI-generated
                                            (you edit)</span>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span
                                            class="text-sm text-[#344F1F]/80 font-medium text-center block">Expert-written
                                            (native German)</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Application Submission
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#EF4444"
                                                fill-opacity="0.1"></circle>
                                            <path d="M9 9L15 15M15 9L9 15" stroke="#EF4444" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">We do it for
                                            you</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Applications per Month
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">5-10
                                            (realistically)</span>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Based on
                                            your profile</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Application Tracking
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Basic
                                            dashboard</span>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Real-time
                                            team updates</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Interview Preparation
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Question
                                            bank access</span>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">1-on-1
                                            coaching sessions</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Dedicated Counselor
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#EF4444"
                                                fill-opacity="0.1"></circle>
                                            <path d="M9 9L15 15M15 9L9 15" stroke="#EF4444" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#10B981"
                                                fill-opacity="0.1"></circle>
                                            <path d="M8 12.5L10.5 15L16 9.5" stroke="#10B981" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Your Time Investment
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">50+
                                            hours</span>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">&lt;5
                                            hours</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F] border-b border-white">
                                        Visa Guidance
                                    </div>
                                    <div class="p-4 border-b border-gray-100">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Self-service
                                            guides</span>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5 border-b border-[#F4991A]/10">
                                        <span class="text-sm text-[#344F1F]/80 font-medium text-center block">Full support
                                            + booking</span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div class="bg-gray-100 p-4 text-xs text-[#344F1F]">
                                        Success-based Payment
                                    </div>
                                    <div class="p-4">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#EF4444"
                                                fill-opacity="0.1"></circle>
                                            <path d="M9 9L15 15M15 9L9 15" stroke="#EF4444" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="p-4 bg-[#F4991A]/5">
                                        <svg class="w-5 h-5 mx-auto" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#10B981"
                                                fill-opacity="0.1"></circle>
                                            <path d="M8 12.5L10.5 15L16 9.5" stroke="#10B981" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-[#F9F5F0]" id="testimonials-section">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12" style="opacity: 0; transform: translateY(20px)">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 mb-4 bg-emerald-100 text-emerald-700 border-emerald-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-star w-3 h-3 mr-1">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg>Success Stories
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]">
                        Real Students, Real Results
                    </h2>
                    <p class="text-lg text-[#344F1F]/70 max-w-2xl mx-auto">
                        Hear from students who trusted us with their Ausbildung
                        journey
                    </p>
                </div>
                <div class="max-w-6xl mx-auto overflow-hidden" id="testimonials-carousel">
                    <div class="flex transition-transform duration-500 ease-in-out carousel-track"
                        style="opacity: 0; transform: translateX(0)">
                        {{-- Page 1 --}}
                        <div class="w-full flex-shrink-0 grid md:grid-cols-3 gap-6 px-1">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-[#F2EAD3] flex flex-col"
                                style="opacity: 0; transform: translateY(20px)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-quote w-8 h-8 text-[#F4991A]/30 mb-4">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                </svg>
                                <p class="text-[#344F1F]/80 text-sm leading-relaxed mb-6 flex-grow">
                                    &quot;<!-- -->I was applying for 6 months with zero
                                    responses. Azubi team got me 3 interview calls in
                                    my first month. The cover letters they wrote were
                                    incredible - I could never write German that well. Now
                                    I&#x27;m starting at Siemens!<!-- -->&quot;
                                </p>
                                <div class="flex gap-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3 mb-4">
                                    <div class="flex items-center gap-2 text-emerald-700 text-xs font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-3 h-3">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg><span>Applied: Oct 2025 → Offer: Dec 2025</span>
                                    </div>
                                    <p class="text-emerald-600 text-sm font-semibold mt-1">
                                        Offer in
                                        <!-- -->2 months
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 pt-4 border-t border-[#F2EAD3]">
                                    <div
                                        class="w-12 h-12 rounded-full bg-[#F9F5F0] flex items-center justify-center text-lg font-bold text-[#344F1F]">
                                        FZ
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-[#344F1F]">
                                            Fatima Zahra
                                        </h4>
                                        <div class="flex items-center gap-1 text-xs text-[#344F1F]/60">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg><span>Morocco</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 bg-[#F9F5F0] rounded-lg p-3">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-4 h-4 text-[#344F1F]/60">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-semibold text-[#344F1F]">Siemens AG</span><span
                                                class="text-xs text-[#344F1F]/60">
                                                •
                                                <!-- -->Munich</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-[#344F1F]/60 mt-1">
                                        IT Specialist
                                    </p>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-[#F2EAD3] flex flex-col"
                                style="opacity: 0; transform: translateY(20px)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-quote w-8 h-8 text-[#F4991A]/30 mb-4">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                </svg>
                                <p class="text-[#344F1F]/80 text-sm leading-relaxed mb-6 flex-grow">
                                    &quot;<!-- -->BMW HR told me my application stood out
                                    because of the quality. The team knew exactly which
                                    companies hire internationals and which to avoid. Best
                                    investment I&#x27;ve made for my career.<!-- -->&quot;
                                </p>
                                <div class="flex gap-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3 mb-4">
                                    <div class="flex items-center gap-2 text-emerald-700 text-xs font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-3 h-3">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg><span>Applied: Nov 2025 → Offer: Jan 2026</span>
                                    </div>
                                    <p class="text-emerald-600 text-sm font-semibold mt-1">
                                        Offer in
                                        <!-- -->2 months
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 pt-4 border-t border-[#F2EAD3]">
                                    <div
                                        class="w-12 h-12 rounded-full bg-[#F9F5F0] flex items-center justify-center text-lg font-bold text-[#344F1F]">
                                        OB
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-[#344F1F]">Omar Bennani</h4>
                                        <div class="flex items-center gap-1 text-xs text-[#344F1F]/60">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg><span>Morocco</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 bg-[#F9F5F0] rounded-lg p-3">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-4 h-4 text-[#344F1F]/60">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-semibold text-[#344F1F]">BMW Group</span><span
                                                class="text-xs text-[#344F1F]/60">
                                                •
                                                <!-- -->Berlin</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-[#344F1F]/60 mt-1">Mechatronics</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-[#F2EAD3] flex flex-col"
                                style="opacity: 0; transform: translateY(20px)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-quote w-8 h-8 text-[#F4991A]/30 mb-4">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                </svg>
                                <p class="text-[#344F1F]/80 text-sm leading-relaxed mb-6 flex-grow">
                                    &quot;<!-- -->My counselor was available on WhatsApp
                                    whenever I had questions. They prepped me so well for my
                                    interview that I felt more confident than ever. Got the
                                    offer within 3 months of enrolling!<!-- -->&quot;
                                </p>
                                <div class="flex gap-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3 mb-4">
                                    <div class="flex items-center gap-2 text-emerald-700 text-xs font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-3 h-3">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg><span>Applied: Sep 2025 → Offer: Dec 2025</span>
                                    </div>
                                    <p class="text-emerald-600 text-sm font-semibold mt-1">
                                        Offer in
                                        <!-- -->3 months
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 pt-4 border-t border-[#F2EAD3]">
                                    <div
                                        class="w-12 h-12 rounded-full bg-[#F9F5F0] flex items-center justify-center text-lg font-bold text-[#344F1F]">
                                        SA
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-[#344F1F]">
                                            Sara Amrani
                                        </h4>
                                        <div class="flex items-center gap-1 text-xs text-[#344F1F]/60">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg><span>Morocco</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 bg-[#F9F5F0] rounded-lg p-3">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-4 h-4 text-[#344F1F]/60">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-semibold text-[#344F1F]">Deutsche Bahn</span><span
                                                class="text-xs text-[#344F1F]/60">
                                                •
                                                <!-- -->Frankfurt</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-[#344F1F]/60 mt-1">Logistics</p>
                                </div>
                            </div>
                        </div>{{-- Close Page 1 --}}

                        {{-- Page 2 --}}
                        <div class="w-full flex-shrink-0 grid md:grid-cols-3 gap-6 px-1">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-[#F2EAD3] flex flex-col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-quote w-8 h-8 text-[#F4991A]/30 mb-4">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                </svg>
                                <p class="text-[#344F1F]/80 text-sm leading-relaxed mb-6 flex-grow">"I was skeptical at
                                    first, but they delivered beyond my expectations. 4 interviews in 2 months and I chose
                                    the best offer. The counselor was available on WhatsApp whenever I needed help."</p>
                                <div class="flex gap-1 mb-4">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg>
                                    @endfor
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3 mb-4">
                                    <div class="flex items-center gap-2 text-emerald-700 text-xs font-medium"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-3 h-3">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg><span>Applied: Nov 2025 &rarr; Offer: Jan 2026</span></div>
                                    <p class="text-emerald-600 text-sm font-semibold mt-1">Offer in 2 months</p>
                                </div>
                                <div class="flex items-center gap-3 pt-4 border-t border-[#F2EAD3]">
                                    <div
                                        class="w-12 h-12 rounded-full bg-[#F9F5F0] flex items-center justify-center text-lg font-bold text-[#344F1F]">
                                        KE</div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-[#344F1F]">Karim El Idrissi</h4>
                                        <div class="flex items-center gap-1 text-xs text-[#344F1F]/60"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg><span>Morocco</span></div>
                                    </div>
                                </div>
                                <div class="mt-3 bg-[#F9F5F0] rounded-lg p-3">
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-building2 w-4 h-4 text-[#344F1F]/60">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>
                                        <div><span class="text-sm font-semibold text-[#344F1F]">Mercedes-Benz</span><span
                                                class="text-xs text-[#344F1F]/60"> &bull; Stuttgart</span></div>
                                    </div>
                                    <p class="text-xs text-[#344F1F]/60 mt-1">Automotive Engineering</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-[#F2EAD3] flex flex-col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-quote w-8 h-8 text-[#F4991A]/30 mb-4">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                </svg>
                                <p class="text-[#344F1F]/80 text-sm leading-relaxed mb-6 flex-grow">"As a nurse looking to
                                    switch to healthcare administration, their team found the perfect Ausbildung program for
                                    me. They understood the German healthcare system and matched me perfectly."</p>
                                <div class="flex gap-1 mb-4">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg>
                                    @endfor
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3 mb-4">
                                    <div class="flex items-center gap-2 text-emerald-700 text-xs font-medium"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-3 h-3">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg><span>Applied: Jun 2025 &rarr; Offer: Sep 2025</span></div>
                                    <p class="text-emerald-600 text-sm font-semibold mt-1">Offer in 3 months</p>
                                </div>
                                <div class="flex items-center gap-3 pt-4 border-t border-[#F2EAD3]">
                                    <div
                                        class="w-12 h-12 rounded-full bg-[#F9F5F0] flex items-center justify-center text-lg font-bold text-[#344F1F]">
                                        HM</div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-[#344F1F]">Hajar Mourad</h4>
                                        <div class="flex items-center gap-1 text-xs text-[#344F1F]/60"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg><span>Morocco</span></div>
                                    </div>
                                </div>
                                <div class="mt-3 bg-[#F9F5F0] rounded-lg p-3">
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-building2 w-4 h-4 text-[#344F1F]/60">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>
                                        <div><span class="text-sm font-semibold text-[#344F1F]">Charit&eacute;</span><span
                                                class="text-xs text-[#344F1F]/60"> &bull; Berlin</span></div>
                                    </div>
                                    <p class="text-xs text-[#344F1F]/60 mt-1">Healthcare</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-2 border-[#F2EAD3] flex flex-col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-quote w-8 h-8 text-[#F4991A]/30 mb-4">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                    </path>
                                </svg>
                                <p class="text-[#344F1F]/80 text-sm leading-relaxed mb-6 flex-grow">"From Morocco to
                                    Munich in 4 months! The team handled everything - applications, interview prep, visa
                                    guidance. I couldn't have done it without their German language expertise in the cover
                                    letters."</p>
                                <div class="flex gap-1 mb-4">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star w-4 h-4 text-[#F4991A] fill-[#F4991A]">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg>
                                    @endfor
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3 mb-4">
                                    <div class="flex items-center gap-2 text-emerald-700 text-xs font-medium"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-3 h-3">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg><span>Applied: Aug 2025 &rarr; Offer: Dec 2025</span></div>
                                    <p class="text-emerald-600 text-sm font-semibold mt-1">Offer in 4 months</p>
                                </div>
                                <div class="flex items-center gap-3 pt-4 border-t border-[#F2EAD3]">
                                    <div
                                        class="w-12 h-12 rounded-full bg-[#F9F5F0] flex items-center justify-center text-lg font-bold text-[#344F1F]">
                                        YB</div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-[#344F1F]">Youssef Benali</h4>
                                        <div class="flex items-center gap-1 text-xs text-[#344F1F]/60"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-3 h-3">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg><span>Morocco</span></div>
                                    </div>
                                </div>
                                <div class="mt-3 bg-[#F9F5F0] rounded-lg p-3">
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-building2 w-4 h-4 text-[#344F1F]/60">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>
                                        <div><span class="text-sm font-semibold text-[#344F1F]">Siemens</span><span
                                                class="text-xs text-[#344F1F]/60"> &bull; Munich</span></div>
                                    </div>
                                    <p class="text-xs text-[#344F1F]/60 mt-1">IT Systems</p>
                                </div>
                            </div>
                        </div>{{-- Close Page 2 --}}
                    </div>
                    <div class="flex items-center justify-center gap-4 mt-8">
                        <button
                            class="w-10 h-10 rounded-full bg-white border-2 border-[#F2EAD3] flex items-center justify-center hover:bg-[#F9F5F0] transition-colors"
                            aria-label="Previous testimonials">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-left w-5 h-5 text-[#344F1F]">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </button>
                        <div class="flex gap-2">
                            <button class="carousel-dot h-2 rounded-full transition-all w-6 bg-[#F4991A]"
                                aria-label="Go to page 1"></button>
                            <button class="carousel-dot h-2 rounded-full transition-all w-2 bg-[#F2EAD3]"
                                aria-label="Go to page 2"></button>
                        </div>
                        <button
                            class="w-10 h-10 rounded-full bg-white border-2 border-[#F2EAD3] flex items-center justify-center hover:bg-[#F9F5F0] transition-colors"
                            aria-label="Next testimonials">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-right w-5 h-5 text-[#344F1F]">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-12 max-w-4xl mx-auto" style="opacity: 0; transform: translateY(20px)">
                    <div class="bg-gradient-to-r from-[#344F1F] to-[#2d4219] rounded-2xl p-6 md:p-8">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
                            <div>
                                <div class="text-3xl md:text-4xl font-bold mb-1">
                                    67K+
                                </div>
                                <div class="text-sm text-white/70">Jobs in Database</div>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold mb-1">40+</div>
                                <div class="text-sm text-white/70">Active Students</div>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold mb-1">3-6</div>
                                <div class="text-sm text-white/70">Months to Germany</div>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold mb-1">
                                    1736<!-- -->+
                                </div>
                                <div class="text-sm text-white/70">
                                    Verified Companies
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-white" id="consultation-faq">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12" style="opacity: 0; transform: translateY(20px)">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#F9F5F0] border border-[#F2EAD3] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-help w-4 h-4 text-[#F4991A]">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <path d="M12 17h.01"></path>
                        </svg><span class="text-sm font-medium text-[#344F1F]">Common Questions</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-[#344F1F]">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-lg text-[#344F1F]/70 max-w-2xl mx-auto">
                        Everything you need to know about our Consultation service
                    </p>
                </div>
                <div class="max-w-3xl mx-auto space-y-4">
                    <article
                        class="rounded-xl border-2 overflow-hidden transition-all duration-300 border-[#F4991A]/50 bg-[#F4991A]/5"
                        style="opacity: 0; transform: translateY(20px)">
                        <button class="w-full p-5 md:p-6 flex items-center justify-between gap-4 text-left"
                            aria-expanded="true">
                            <h3 class="text-base md:text-lg font-semibold text-[#344F1F] pr-4">
                                What if I don&#x27;t get any offers?
                            </h3>
                            <div
                                class="faq-chevron flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300 bg-[#F4991A] rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down w-5 h-5 transition-colors text-white">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content overflow-hidden" style="height: 0px; opacity: 0">
                            <div class="px-5 md:px-6 pb-5 md:pb-6">
                                <p class="text-[#344F1F]/70 leading-relaxed">
                                    We extend your validity by 1 intake (6 months) at no
                                    extra cost. Our success rate is high because we only
                                    accept students whose profiles match what German
                                    employers want - if we take you on, we&#x27;re confident
                                    we can place you.
                                </p>
                            </div>
                        </div>
                    </article>
                    @php
                        $faqs = [
                            [
                                'q' => 'How do you apply on my behalf?',
                                'a' =>
                                    'After you complete your profile, our German HR experts craft native-level CVs and cover letters (Anschreiben) tailored to each employer. We submit directly to companies in our network that actively hire international Ausbildung candidates.',
                            ],
                            [
                                'q' => 'What\'s the process timeline?',
                                'a' =>
                                    'Typical timeline: Week 1 - Profile setup and document creation. Weeks 2-8 - Applications submitted to 30+ companies. Weeks 6-12 - Interview invitations start arriving. Month 3-4 - Offer received. Most students get their first interview within 6 weeks.',
                            ],
                            [
                                'q' => 'Do I need to know German?',
                                'a' =>
                                    'A minimum of A2 level German is recommended, though B1 significantly increases your chances. We help you present your language skills in the best light and can recommend language courses to boost your level while we handle applications.',
                            ],
                            [
                                'q' => 'What happens after I get an offer?',
                                'a' =>
                                    'We guide you through the entire post-offer process: accepting the offer, opening a blocked bank account, gathering visa documents, booking your visa appointment, and preparing for your move to Germany. Full support until you arrive.',
                            ],
                            [
                                'q' => 'Can I choose which companies you apply to?',
                                'a' =>
                                    'Yes! You set your preferences for sector, city, and company size during onboarding. We match you with suitable positions and you can review and approve applications before we send them. You have full visibility in your dashboard.',
                            ],
                            [
                                'q' => 'What\'s included in the advance payment?',
                                'a' =>
                                    'The $300 advance covers: professional CV creation in German format, profile assessment, access to our member dashboard, initial batch of applications, and dedicated counselor assignment. The success fee is only paid when you receive and accept an offer.',
                            ],
                            [
                                'q' => 'When do I pay the success fee?',
                                'a' =>
                                    'The success fee is due only after you receive a confirmed Ausbildung offer from a German employer. No offer means no success fee - we share the risk with you. Payment plans are available for the success fee.',
                            ],
                            [
                                'q' => 'Can I cancel after enrolling?',
                                'a' =>
                                    'You can cancel within 14 days of enrollment for a full refund if no applications have been submitted yet. After applications begin, the advance is non-refundable as work has been completed on your behalf.',
                            ],
                        ];
                    @endphp
                    @foreach ($faqs as $faq)
                        <article
                            class="rounded-xl border-2 overflow-hidden transition-all duration-300 border-[#F2EAD3] bg-white hover:border-[#F4991A]/30"
                            style="opacity: 0; transform: translateY(20px)">
                            <button class="w-full p-5 md:p-6 flex items-center justify-between gap-4 text-left"
                                aria-expanded="false">
                                <h3 class="text-base md:text-lg font-semibold text-[#344F1F] pr-4">{{ $faq['q'] }}
                                </h3>
                                <div
                                    class="faq-chevron flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300 bg-[#F9F5F0]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down w-5 h-5 transition-colors text-[#344F1F]">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </button>
                            <div class="faq-content overflow-hidden" style="height: 0px; opacity: 0">
                                <div class="px-5 md:px-6 pb-5 md:pb-6">
                                    <p class="text-[#344F1F]/70 leading-relaxed">{{ $faq['a'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="mt-12 text-center" style="opacity: 0; transform: translateY(20px)">
                    <div class="inline-flex flex-col sm:flex-row items-center gap-3 bg-[#F9F5F0] rounded-xl p-6">
                        <p class="text-[#344F1F] font-medium">
                            Still have questions?
                        </p>
                        <a href="cdn-cgi/l/email-protection.html#87f4f2f7f7e8f5f3c7e0e8e6f2f4e5eeebe3f2e9e0a9e4e8ea"
                            class="px-6 py-2 bg-[#344F1F] text-white rounded-full font-medium hover:bg-[#2d4219] transition-colors">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-gradient-to-br from-[#344F1F] to-[#2d4219] relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0"
                    style="
                  background-image: url(_data_image/svg%2bxml%2c_svg%20width%3d%2760%27%20height%3d%2760%27%20viewBox%3d%270/www.w3.org/2000/svg%27__g%20fill%3d%27none%27%20fill-rule%3d%27evenodd%27__g%20fill/__/g__/g__/svg__.html);
                ">
                </div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <div style="opacity: 0; transform: translateY(20px)">
                        <div
                            class="inline-flex items-center px-4 py-2 rounded-full bg-[#F4991A]/20 border border-[#F4991A]/30 text-[#F4991A] text-sm font-medium mb-6">
                            Limited to 20 students per intake
                        </div>
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                            Your Ausbildung Is Waiting.<br /><span class="text-[#F4991A]">Let&#x27;s Get You There.</span>
                        </h2>
                        <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">
                            We&#x27;ve placed students at Siemens, BMW, Bosch, and 200+
                            other German companies. You could be next.
                        </p>
                    </div>
                    <div class="grid grid-cols-3 gap-4 md:gap-6 mb-10 max-w-xl mx-auto"
                        style="opacity: 0; transform: translateY(20px)">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-briefcase w-5 h-5 text-white/70 mx-auto mb-2">
                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                            </svg>
                            <div class="text-xl md:text-2xl font-bold text-white mb-1">
                                67K+
                            </div>
                            <div class="text-xs text-white/60">Jobs in Database</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-building2 w-5 h-5 text-white/70 mx-auto mb-2">
                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                <path d="M10 6h4"></path>
                                <path d="M10 10h4"></path>
                                <path d="M10 14h4"></path>
                                <path d="M10 18h4"></path>
                            </svg>
                            <div class="text-xl md:text-2xl font-bold text-white mb-1">
                                1736+
                            </div>
                            <div class="text-xs text-white/60">Verified Companies</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-users w-5 h-5 text-white/70 mx-auto mb-2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <div class="text-xl md:text-2xl font-bold text-white mb-1">
                                40+
                            </div>
                            <div class="text-xs text-white/60">Active Students</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-3 mb-10" style="opacity: 0; transform: translateY(20px)">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full border-2 border-[#344F1F] overflow-hidden">
                                <img src="{{ asset('assets/images/hero-avatar-1.webp') }}" alt=""
                                    class="w-full h-full object-cover" loading="lazy" />
                            </div>
                            <div class="w-10 h-10 rounded-full border-2 border-[#344F1F] overflow-hidden">
                                <img src="{{ asset('assets/images/hero-avatar-2.webp') }}" alt=""
                                    class="w-full h-full object-cover" loading="lazy" />
                            </div>
                            <div class="w-10 h-10 rounded-full border-2 border-[#344F1F] overflow-hidden">
                                <img src="{{ asset('assets/images/hero-avatar-3.webp') }}" alt=""
                                    class="w-full h-full object-cover" loading="lazy" />
                            </div>
                            <div class="w-10 h-10 rounded-full border-2 border-[#344F1F] overflow-hidden">
                                <img src="{{ asset('assets/images/hero-avatar-4.webp') }}" alt=""
                                    class="w-full h-full object-cover" loading="lazy" />
                            </div>
                            <div
                                class="w-10 h-10 rounded-full border-2 border-[#344F1F] bg-[#F4991A] flex items-center justify-center">
                                <span class="text-xs font-bold text-white">40+</span>
                            </div>
                        </div>
                        <p class="text-white/70 text-sm">
                            Students currently enrolled in our program
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8"
                        style="opacity: 0; transform: translateY(20px)">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#e08a15] text-white rounded-full px-8 py-6 text-lg font-semibold transition-all hover:shadow-xl hover:-translate-y-1"
                            href="#pricing">View Packages<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-5 h-5 ml-2">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a><a
                            href="cdn-cgi/l/email-protection.html#1a696f6a6a75686e5a7d757b6f697873767e6f747d34797577"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent shadow-sm hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/30 text-white hover:bg-white/10 hover:text-white rounded-full px-8 py-6 text-lg font-semibold transition-all">Ask
                            a Question</a>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-4 text-sm text-white/60"
                        style="opacity: 0">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-shield w-4 h-4 text-emerald-400">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                            </svg><span>Success fee only when you receive an offer</span>
                        </div>
                    </div>
                    <div class="mt-12 bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/10"
                        style="opacity: 0; transform: translateY(20px)">
                        <p class="text-white/80 text-sm mb-4">
                            What you get for your investment:
                        </p>
                        <div class="grid md:grid-cols-3 gap-6 text-center">
                            <div>
                                <div class="text-2xl font-bold text-white mb-1">
                                    Tailored
                                </div>
                                <div class="text-white/60 text-sm">
                                    Applications for your profile
                                </div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-white mb-1">
                                    Native German
                                </div>
                                <div class="text-white/60 text-sm">
                                    Cover letters written
                                </div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-white mb-1">
                                    1-on-1
                                </div>
                                <div class="text-white/60 text-sm">
                                    Interview preparation
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/global-new-styles.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/js/consultation.js') }}"></script>
    @endpush
@endsection
