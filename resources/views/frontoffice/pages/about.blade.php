@extends('frontoffice.layouts.app')

@section('title', 'About Us | Azubi | Azubi')

@section('meta')
    <meta name="description"
        content="Learn about Azubi&#039;s mission to connect international students with German Ausbildung opportunities." />
    <meta name="keywords" content="about Azubi,company mission,our story,Morocco" />
    <meta property="og:title" content="About Us | Azubi" />
    <meta property="og:description"
        content="Learn about Azubi&#039;s mission to connect international students with German Ausbildung opportunities." />
    <meta property="og:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Us | Azubi" />
    <meta name="twitter:description"
        content="Learn about Azubi&#039;s mission to connect international students with German Ausbildung opportunities." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/about') }}" />
@endsection

@section('content')
    <div style="background-color: #f9f5f0">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Heidelberg Castle in autumn - historic German landmark" loading="eager" decoding="async"
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
                sizes="100vw" src="{{ asset('assets/_next/heidelberg-castle-hero-autumn35bd.jpeg') }}" />
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
                class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5 items-start text-left max-w-7xl">
                <div class="flex flex-col gap-4 sm:gap-5 max-w-2xl">
                    <div class="animate-fade-in-up animation-delay-100">
                        <div class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold"
                            aria-label="About Us">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-users h-4 w-4 mr-2" aria-hidden="true">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>About Us
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Helping You Apply Faster &amp; Smarter
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Smart application tools, real job data, and intelligent
                        matching help international students land their dream
                        Ausbildung in Germany.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 justify-start"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Start Your Journey" href="{{ route('front.consultation') }}"><span
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-5 h-5 mr-2">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></span><span>Start Your Journey</span></a><a
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Contact Us" href="{{ route('front.contact') }}"><span aria-hidden="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users w-5 h-5 mr-2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg></span><span>Contact Us</span></a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    Heidelberg Castle, Baden-Württemberg
                </p>
            </div>
        </section>
        <section class="py-16">
            <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="text-center max-w-3xl mx-auto space-y-5 mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-secondary tracking-tight">
                        Our Mission
                    </h2>
                    <p class="text-xl leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                        To help you apply faster and smarter. We democratize access to
                        German vocational training through intelligent tools, real job
                        data, and smart matching that turns hours of work into
                        seconds.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="p-8 rounded-2xl text-center"
                        style="
                    background-color: white;
                    box-shadow: 0 8px 16px rgba(52, 79, 31, 0.06);
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6"
                            style="background-color: rgba(244, 153, 26, 0.1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-heart w-8 h-8" style="color: #f4991a">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-secondary mb-3">
                            Student-First
                        </h3>
                        <p class="leading-relaxed text-sm" style="color: rgba(52, 79, 31, 0.7)">
                            Every decision we make prioritizes your success,
                            transparency, and well-being on this transformative journey.
                        </p>
                    </div>
                    <div class="p-8 rounded-2xl text-center"
                        style="
                    background-color: white;
                    box-shadow: 0 8px 16px rgba(52, 79, 31, 0.06);
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6"
                            style="background-color: rgba(244, 153, 26, 0.1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-target w-8 h-8" style="color: #f4991a">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-secondary mb-3">
                            Results-Driven
                        </h3>
                        <p class="leading-relaxed text-sm" style="color: rgba(52, 79, 31, 0.7)">
                            We measure our success by yours—from application acceptance
                            to career placement in Germany.
                        </p>
                    </div>
                    <div class="p-8 rounded-2xl text-center"
                        style="
                    background-color: white;
                    box-shadow: 0 8px 16px rgba(52, 79, 31, 0.06);
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6"
                            style="background-color: rgba(244, 153, 26, 0.1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap w-8 h-8" style="color: #f4991a">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-secondary mb-3">
                            Innovation
                        </h3>
                        <p class="leading-relaxed text-sm" style="color: rgba(52, 79, 31, 0.7)">
                            Leveraging technology to simplify complex processes and
                            create seamless experiences.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16" style="background-color: white">
            <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full"
                            style="
                      background-color: rgba(52, 79, 31, 0.1);
                      border: 1px solid rgba(52, 79, 31, 0.2);
                    ">
                            <span class="text-sm font-medium" style="color: #344f1f">The Challenge</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-secondary tracking-tight">
                            From Confusion to Clarity
                        </h2>
                        <p class="text-lg leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                            Navigating the German Ausbildung system from abroad can feel
                            overwhelming. Complex requirements, language barriers,
                            scattered information, and finding the right training
                            company create significant hurdles for ambitious students.
                        </p>
                        <p class="text-lg leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                            We witnessed talented students with dreams of practical,
                            global opportunities facing a maze-like process. That&#x27;s
                            why Azubi was born—to transform this complexity into
                            a clear, achievable pathway.
                        </p>
                        <div class="space-y-3 pt-4">
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5"
                                    style="background-color: rgba(244, 153, 26, 0.15)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-check w-4 h-4" style="color: #f4991a">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span style="color: rgba(52, 79, 31, 0.8)">Clear, consolidated program information</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5"
                                    style="background-color: rgba(244, 153, 26, 0.15)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-check w-4 h-4" style="color: #f4991a">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span style="color: rgba(52, 79, 31, 0.8)">Smart eligibility and matching tools</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5"
                                    style="background-color: rgba(244, 153, 26, 0.15)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-check w-4 h-4" style="color: #f4991a">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span style="color: rgba(52, 79, 31, 0.8)">Step-by-step application guidance</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5"
                                    style="background-color: rgba(244, 153, 26, 0.15)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-check w-4 h-4" style="color: #f4991a">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>
                                </div>
                                <span style="color: rgba(52, 79, 31, 0.8)">Comprehensive language and cultural
                                    preparation</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex justify-center items-center">
                        <img alt="Student navigating Ausbildung complexities" loading="lazy" width="500"
                            height="500" decoding="async" data-nimg="1" class="w-full h-auto max-w-md"
                            style="color: transparent"
                            src="{{ asset('assets/_next/mascot_thinking_femalee589.jpeg') }}" />
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="bg-card text-card-foreground shadow p-10 md:p-14 text-center rounded-3xl border-0"
                    style="
                  background-color: white;
                  box-shadow: 0 20px 40px rgba(52, 79, 31, 0.08);
                ">
                    <div class="max-w-3xl mx-auto space-y-8">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mx-auto"
                            style="
                      background-color: rgba(244, 153, 26, 0.1);
                      border: 1px solid rgba(244, 153, 26, 0.2);
                    ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-globe w-4 h-4" style="color: #f4991a">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg><span class="text-sm font-medium" style="color: #344f1f">Powered by Innovation</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-bold text-secondary tracking-tight">
                            About Azubi
                        </h2>
                        <p class="text-lg leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                            Azubi is a Moroccan company dedicated to democratizing international
                            education through
                            technology. Our mission: making world-class
                            opportunities accessible to ambitious minds everywhere.
                        </p>
                        <div class="grid md:grid-cols-2 gap-8 pt-8">
                            <div class="p-8 rounded-2xl text-left" style="background-color: #f2ead3">
                                <div class="flex items-start gap-3 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin w-5 h-5 shrink-0 mt-1" style="color: #f4991a">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-secondary">
                                        Marrakech Office
                                    </h3>
                                </div>
                                <p style="color: rgba(52, 79, 31, 0.7)">
                                    Marrakech<br />Morocco
                                </p>
                            </div>
                            <div class="p-8 rounded-2xl text-left" style="background-color: #f2ead3">
                                <div class="flex items-start gap-3 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin w-5 h-5 shrink-0 mt-1" style="color: #f4991a">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-secondary">
                                        Rabat Office
                                    </h3>
                                </div>
                                <p style="color: rgba(52, 79, 31, 0.7)">
                                    Rabat<br />Morocco
                                </p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <a target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 rounded-full px-8 text-base font-medium"
                                style="
                        border-color: #344f1f;
                        color: #344f1f;
                        min-height: 48px;
                      "
                                href="{{ route('front.contact') }}">Learn More About Azubi<svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16" style="background-color: white">
            <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="text-center max-w-3xl mx-auto space-y-5 mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-secondary tracking-tight">
                        How We Help You Succeed
                    </h2>
                    <p class="text-xl leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                        From your first question to your first day in Germany,
                        we&#x27;re with you every step of the way.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-8 rounded-2xl"
                        style="
                    background-color: white;
                    box-shadow: 0 8px 16px rgba(52, 79, 31, 0.06);
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="text-4xl font-bold mb-4" style="color: #f4991a">
                            01
                        </div>
                        <h3 class="text-lg font-semibold text-secondary mb-3">
                            Discover
                        </h3>
                        <p class="leading-relaxed text-sm" style="color: rgba(52, 79, 31, 0.7)">
                            Explore programs, check eligibility, and find your perfect
                            Ausbildung match with our smart tools.
                        </p>
                    </div>
                    <div class="p-8 rounded-2xl"
                        style="
                    background-color: white;
                    box-shadow: 0 8px 16px rgba(52, 79, 31, 0.06);
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="text-4xl font-bold mb-4" style="color: #f4991a">
                            02
                        </div>
                        <h3 class="text-lg font-semibold text-secondary mb-3">
                            Apply
                        </h3>
                        <p class="leading-relaxed text-sm" style="color: rgba(52, 79, 31, 0.7)">
                            Generate smart cover letters, get personalized checklists,
                            and apply to positions faster than ever before.
                        </p>
                    </div>
                    <div class="p-8 rounded-2xl"
                        style="
                    background-color: white;
                    box-shadow: 0 8px 16px rgba(52, 79, 31, 0.06);
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="text-4xl font-bold mb-4" style="color: #f4991a">
                            03
                        </div>
                        <h3 class="text-lg font-semibold text-secondary mb-3">
                            Prepare
                        </h3>
                        <p class="leading-relaxed text-sm" style="color: rgba(52, 79, 31, 0.7)">
                            Master German language basics and cultural insights to hit
                            the ground running.
                        </p>
                    </div>
                    <div class="p-8 rounded-2xl"
                        style="
                    background-color: white;
                    box-shadow: 0 8px 16px rgba(52, 79, 31, 0.06);
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="text-4xl font-bold mb-4" style="color: #f4991a">
                            04
                        </div>
                        <h3 class="text-lg font-semibold text-secondary mb-3">
                            Succeed
                        </h3>
                        <p class="leading-relaxed text-sm" style="color: rgba(52, 79, 31, 0.7)">
                            Start your Ausbildung journey with confidence and ongoing
                            support from our community.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="text-center max-w-3xl mx-auto space-y-5 mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-secondary tracking-tight">
                        Why Students Trust Us
                    </h2>
                    <p class="text-lg leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                        We&#x27;re more than a platform—we&#x27;re your partner in
                        building a better future.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="p-6 rounded-2xl"
                        style="
                    background-color: #f2ead3;
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0"
                                style="background-color: rgba(244, 153, 26, 0.2)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5"
                                    style="color: #f4991a">
                                    <path d="M20 6 9 17l-5-5"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-semibold text-secondary mb-1">
                                    Transparent &amp; Honest
                                </h4>
                                <p class="text-sm leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                                    No hidden fees, realistic expectations, and genuine
                                    guidance at every step.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 rounded-2xl"
                        style="
                    background-color: #f2ead3;
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0"
                                style="background-color: rgba(244, 153, 26, 0.2)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-5 h-5"
                                    style="color: #f4991a">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-semibold text-secondary mb-1">
                                    Expert Support Team
                                </h4>
                                <p class="text-sm leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                                    Experienced counselors who understand both the German
                                    system and your aspirations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 rounded-2xl"
                        style="
                    background-color: #f2ead3;
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0"
                                style="background-color: rgba(244, 153, 26, 0.2)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-5 h-5"
                                    style="color: #f4991a">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-semibold text-secondary mb-1">
                                    Proven Track Record
                                </h4>
                                <p class="text-sm leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                                    Hundreds of successful placements and countless success
                                    stories from our community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 rounded-2xl"
                        style="
                    background-color: #f2ead3;
                    transition: all 200ms ease-in-out;
                  ">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0"
                                style="background-color: rgba(244, 153, 26, 0.2)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-5 h-5"
                                    style="color: #f4991a">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-base font-semibold text-secondary mb-1">
                                    Smart Application Tools
                                </h4>
                                <p class="text-sm leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                                    Generate application kits, cover letters, and get
                                    job-specific insights in seconds.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="py-16" style="background-color: white">
            <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="bg-card text-card-foreground shadow p-10 md:p-14 text-center rounded-3xl border-0"
                    style="
                  background-color: #f9f5f0;
                  box-shadow: 0 20px 40px rgba(52, 79, 31, 0.08);
                ">
                    <div class="max-w-3xl mx-auto space-y-6">
                        <div class="flex justify-center items-center gap-3 mb-4">
                            <img alt="codesommet Studio" loading="lazy" width="48" height="48" decoding="async"
                                data-nimg="1" class="flex-shrink-0" style="color: transparent"
                                src="{{ asset('assets/_next/codesommet-logo-light-1024x1024a712.svg') }}" />
                            <h3 class="text-2xl font-semibold text-secondary tracking-tight">
                                codesommet<span style="color: #ff6500">.</span>
                            </h3>
                        </div>
                        <p class="text-lg leading-relaxed" style="color: rgba(52, 79, 31, 0.7)">
                            This platform is designed and developed by
                            <a target="_blank" rel="dofollow noopener noreferrer"
                                class="font-semibold underline decoration-2"
                                style="color: #ff6500; text-decoration-color: #ff6500"
                                href="https://codesommet.com/">codesommet Studio</a>, a creative technology studio crafting
                            beautiful,
                            high-performance digital experiences that help businesses
                            grow and connect with their audiences.
                        </p>
                        <div class="pt-4">
                            <a target="_blank" rel="dofollow noopener noreferrer"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 rounded-full px-8 text-base font-medium"
                                style="
                        border-color: #344f1f;
                        color: #344f1f;
                        min-height: 48px;
                      "
                                href="https://codesommet.com/">Visit codesommet Studio<svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
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
                    src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}" />
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
                            Ready to Find Your Dream Ausbildung?
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            Browse 60K+ real jobs from verified German employers. Apply
                            faster with Smart Application Kits.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="{{ route('front.consultation') }}"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Start
                                Applying Now</a><a href="{{ route('front.contact') }}"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
