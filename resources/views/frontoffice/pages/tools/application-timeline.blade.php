@extends('frontoffice.layouts.app')

@section('title', 'Application Timeline Planner | Azubi')

@section('meta')
    <meta name="description"
        content="Calculate realistic timelines based on nationality, German level, and sector. Get AI-powered strategic guidance with month-by-month action plans.">
    <meta property="og:title" content="Application Timeline Planner | Azubi">
    <meta property="og:description"
        content="Calculate realistic timelines based on nationality, German level, and sector. Get AI-powered strategic guidance with month-by-month action plans.">
@endsection

@section('content')
    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <main role="main" class="space-y-8">
                <section aria-labelledby="form-heading">
                    <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige">
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold azubi-text-green mb-2">
                                Your Application Profile
                            </h2>
                            <p class="azubi-text-green/70">
                                Provide your details to calculate a personalized
                                timeline for your German Ausbildung journey.
                            </p>
                        </div>
                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="startDate">When will you start preparing?<!-- --> </label><input type="date"
                                        class="flex h-10 w-full border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 rounded-xl azubi-border-beige"
                                        id="startDate" min="2026-03-05" value="2026-03-05" />
                                </div>
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="currentGermanLevel">Current German Level<!-- -->
                                        <!-- -->*</label><button type="button" role="combobox"
                                        aria-controls="radix-«R8j33peslb»" aria-expanded="false" aria-autocomplete="none"
                                        dir="ltr" data-state="closed" data-placeholder=""
                                        class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl azubi-border-beige">
                                        <span style="pointer-events: none">Select your current level</span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                            aria-hidden="true">
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
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="targetGermanLevel">Target German Level<!-- --> </label><button type="button"
                                        role="combobox" aria-controls="radix-«R8r33peslb»" aria-expanded="false"
                                        aria-autocomplete="none" dir="ltr" data-state="closed"
                                        class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl azubi-border-beige">
                                        <span style="pointer-events: none"></span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                            aria-hidden="true">
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
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="nationality">Nationality<!-- -->
                                        <!-- -->*</label><button type="button" role="combobox"
                                        aria-controls="radix-«R9333peslb»" aria-expanded="false" aria-autocomplete="none"
                                        dir="ltr" data-state="closed" data-placeholder=""
                                        class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl azubi-border-beige">
                                        <span style="pointer-events: none">Select your country</span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                            aria-hidden="true">
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
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="sector">Target Ausbildung Sector<!-- -->
                                        <!-- -->*</label><button type="button" role="combobox"
                                        aria-controls="radix-«R9b33peslb»" aria-expanded="false" aria-autocomplete="none"
                                        dir="ltr" data-state="closed" data-placeholder=""
                                        class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl azubi-border-beige">
                                        <span style="pointer-events: none">Select sector</span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                            aria-hidden="true">
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
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="educationStatus">Education Status<!-- -->
                                        <!-- -->*</label><button type="button" role="combobox"
                                        aria-controls="radix-«R9j33peslb»" aria-expanded="false" aria-autocomplete="none"
                                        dir="ltr" data-state="closed" data-placeholder=""
                                        class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl azubi-border-beige">
                                        <span style="pointer-events: none">Select status</span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                            aria-hidden="true">
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
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="currentLocation">Current Location (City, Country)<!-- -->
                                        <!-- -->*</label><input type="text"
                                        class="flex h-10 w-full border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 rounded-xl azubi-border-beige"
                                        id="currentLocation" placeholder="e.g., Casablanca, Morocco" value="" />
                                </div>
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="urgency">Timeline Urgency<!-- --> </label><button type="button"
                                        role="combobox" aria-controls="radix-«Ra333peslb»" aria-expanded="false"
                                        aria-autocomplete="none" dir="ltr" data-state="closed"
                                        class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl azubi-border-beige">
                                        <span style="pointer-events: none"></span><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                            aria-hidden="true">
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
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="weeklyHours">Weekly Hours for Preparation<!-- --> </label><input
                                        type="number"
                                        class="flex h-10 w-full border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 rounded-xl azubi-border-beige"
                                        id="weeklyHours" min="5" max="40" value="10" />
                                    <p class="text-xs azubi-text-green/60">
                                        How many hours per week can you dedicate to German
                                        learning and preparation?
                                    </p>
                                </div>
                                <div class="space-y-2" data-error="false">
                                    <label
                                        class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold"
                                        for="financialSituation">Financial Situation<!-- -->
                                        <!-- -->*</label><button type="button" role="combobox"
                                        aria-controls="radix-«Raj33peslb»" aria-expanded="false" aria-autocomplete="none"
                                        dir="ltr" data-state="closed" data-placeholder=""
                                        class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl azubi-border-beige">
                                        <span style="pointer-events: none">Select financial situation</span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                            aria-hidden="true">
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
                            <div class="space-y-4">
                                <div class="flex justify-center pt-4">
                                    <button
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 text-base azubi-bg-orange hover:bg-orange-hover text-white rounded-full px-8">
                                        Calculate My Timeline<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right ml-2 h-5 w-5">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex justify-center"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section aria-labelledby="bottom-cta">
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
                            <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl azubi-hero-veil"></div>
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
                                        Ready to Start Your Application?
                                    </h2>
                                    <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                                        Browse live Ausbildung positions from verified
                                        German employers on our platform. Find opportunities
                                        that match your timeline and career goals.
                                    </p>
                                    <div class="flex flex-col sm:flex-row items-center gap-3">
                                        <a href="#"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                                            Live Positions</a><a href="{{ route('front.contact') }}"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Book
                                            Consultation</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
                <div class="mt-8 mb-8 space-y-6">
                    <div class="azubi-bg-beige border-2 border-border rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="p-3 azubi-bg-orange rounded-xl flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-info h-6 w-6 text-white">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h2 class="text-2xl font-bold azubi-text-green mb-2">
                                    How to Use the Application Timeline Generator
                                </h2>
                                <p class="azubi-text-green/70">
                                    Create a personalized timeline for your Ausbildung
                                    application process. Track deadlines, azubi-required
                                    documents, and key milestones.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6">
                        <h3 class="text-xl font-bold azubi-text-green mb-6">
                            How It Works
                        </h3>
                        <div class="grid gap-4">
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-5 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-10 h-10 rounded-full azubi-bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                        1
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green text-lg mb-2">
                                            Enter Your Details
                                        </h4>
                                        <p class="azubi-text-green/70 leading-relaxed">
                                            Provide information about your current German
                                            level, nationality, target sector, and education
                                            status to get accurate timeline estimates.
                                        </p>
                                    </div>
                                    <div class="hidden lg:flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-5 h-5 azubi-text-orange/50">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-5 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-10 h-10 rounded-full azubi-bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                        2
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green text-lg mb-2">
                                            Set Target Date
                                        </h4>
                                        <p class="azubi-text-green/70 leading-relaxed">
                                            Choose when you want to start preparing and your
                                            desired Ausbildung start date. The tool accounts
                                            for visa processing and language learning.
                                        </p>
                                    </div>
                                    <div class="hidden lg:flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-5 h-5 azubi-text-orange/50">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-5 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-10 h-10 rounded-full azubi-bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                        3
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green text-lg mb-2">
                                            Get Your Timeline
                                        </h4>
                                        <p class="azubi-text-green/70 leading-relaxed">
                                            Receive a complete timeline with best case,
                                            realistic, and worst case scenarios. See
                                            month-by-month milestones and critical deadlines.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="p-2 azubi-bg-orange rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-info w-5 h-5 text-white">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 16v-4"></path>
                                        <path d="M12 8h.01"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold azubi-text-green">
                                    What You Provide
                                </h3>
                            </div>
                            <div class="space-y-4">
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-5 h-5 azubi-text-orange">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Current Location
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Your city and country to calculate processing
                                                times
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar w-5 h-5 azubi-text-orange">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Target Start Date
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                When you plan to begin your Ausbildung
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-languages w-5 h-5 azubi-text-orange">
                                                <path d="m5 8 6 6"></path>
                                                <path d="m4 14 6-6 2-3"></path>
                                                <path d="M2 5h12"></path>
                                                <path d="M7 2h1"></path>
                                                <path d="m22 22-5-10-5 10"></path>
                                                <path d="M14 18h6"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                German Level
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Current language proficiency (None to C1)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-building2 w-5 h-5 azubi-text-orange">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">Sector</h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Your target Ausbildung sector (Healthcare, IT,
                                                etc.)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-text w-5 h-5 azubi-text-orange">
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                <path d="M10 9H8"></path>
                                                <path d="M16 13H8"></path>
                                                <path d="M16 17H8"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Visa Type
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Based on your nationality and circumstances
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="p-2 azubi-bg-green rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-info w-5 h-5 text-white">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 16v-4"></path>
                                        <path d="M12 8h.01"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold azubi-text-green">
                                    What You Get
                                </h3>
                            </div>
                            <div class="space-y-4">
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar w-5 h-5 azubi-text-green">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Complete Timeline
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Best case, realistic, and worst case scenarios
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-award w-5 h-5 azubi-text-green">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Critical Milestones
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Key deadlines and important dates
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-text w-5 h-5 azubi-text-green">
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                <path d="M10 9H8"></path>
                                                <path d="M16 13H8"></path>
                                                <path d="M16 17H8"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Document Deadlines
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                When to prepare each azubi-required document
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-languages w-5 h-5 azubi-text-green">
                                                <path d="m5 8 6 6"></path>
                                                <path d="m4 14 6-6 2-3"></path>
                                                <path d="M2 5h12"></path>
                                                <path d="M7 2h1"></path>
                                                <path d="m22 22-5-10-5 10"></path>
                                                <path d="M14 18h6"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Language Goals
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                German learning milestones and test dates
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check w-5 h-5 azubi-text-green">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Month-by-Month Plan
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Detailed action plan for each phase
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="azubi-bg-orange/10 border-2 azubi-border-orange/20 rounded-2xl p-5">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-info w-5 h-5 azubi-text-orange flex-shrink-0 mt-0.5">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                            </svg>
                            <p class="azubi-text-green/80 leading-relaxed">
                                Timeline calculations account for visa processing times,
                                language learning duration, document preparation, and
                                application cycles for 2026 intake.
                            </p>
                        </div>
                    </div>
                </div>
                <section aria-labelledby="faqs-section">
                    <section class="bg-card border border-border rounded-lg p-6 md:p-8">
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-6">
                            Frequently Asked Questions
                        </h3>
                        <div class="space-y-4">
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">How accurate is the Application
                                        Timeline
                                        Planner?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        The timeline planner uses real data from thousands
                                        of successful Ausbildung applicants and official
                                        processing times from German authorities. The
                                        &quot;Realistic&quot; scenario has 85% accuracy
                                        based on historical data. However, individual
                                        timelines can vary based on personal circumstances,
                                        document availability, and embassy workload. We
                                        recommend planning for the worst-case scenario to
                                        avoid missing intake deadlines.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Can I really learn German while
                                        preparing documents
                                        at the same time?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Yes! Our timeline calculator intelligently overlaps
                                        phases where possible. Language learning typically
                                        takes 6-12 months depending on your starting level,
                                        and you can absolutely start collecting documents
                                        during the final 2-3 months of your German course.
                                        In fact, this parallel approach is recommended to
                                        save time. Just ensure you dedicate separate time
                                        blocks for each task.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">What if I get my Ausbildung contract
                                        earlier than
                                        expected?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Getting a contract early is great news! You can
                                        immediately move to the visa application phase.
                                        However, you still need to meet the German language
                                        requirement (usually B1) before starting the
                                        program. If you secure a contract early but
                                        haven&#x27;t completed language training, use the
                                        extra time to reach B2 level, which significantly
                                        improves your success rate and career prospects in
                                        Germany.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Why does my nationality affect the
                                        visa processing
                                        time?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Visa processing times vary by nationality due to
                                        different bilateral agreements between Germany and
                                        your home country, embassy workload, and security
                                        verification requirements. Countries with
                                        established migration agreements and lower
                                        application volumes typically see faster processing
                                        (1-2 months). Countries with higher application
                                        volumes, like Morocco, may experience 3-4 month
                                        processing times. These are
                                        official government timelines, not estimates.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Can the AI Strategic Guidance help if
                                        I am behind
                                        schedule?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Absolutely! The AI Strategic Guidance is
                                        specifically designed to identify acceleration
                                        opportunities and backup plans. If you&#x27;re
                                        behind schedule, it will suggest fast-track options
                                        like intensive German courses, parallel application
                                        strategies, premium document services, and
                                        alternative pathways to get you back on track. It
                                        also provides month-by-month action steps to
                                        maximize efficiency.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">What happens if I miss the intake
                                        deadline I am
                                        planning for?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        German Ausbildung programs typically have two main
                                        intakes: August/September (Fall) and February/March
                                        (Spring). If you miss one intake, you can target the
                                        next one 6 months later. Our timeline planner
                                        accounts for this - if your calculated end date
                                        falls after your target intake, it will alert you.
                                        The AI guidance section provides backup strategies
                                        including interim German language improvement, skill
                                        development, and alternative program options to make
                                        productive use of the gap period.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="mb-8">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold azubi-text-green mb-2">
                            Related Tools You Might Need
                        </h2>
                        <p class="azubi-text-green/70">
                            Continue planning your Ausbildung journey with these
                            helpful tools
                        </p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-6 mb-6">
                        <a class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="#">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                                Cover Letter Generator
                            </h3>
                            <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                                Generate a professional German cover letter for your
                                Ausbildung application
                            </p>
                            <div
                                class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                                <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">planning</span>
                            </div>
                        </a><a
                            class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="#">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-check w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="m9 15 2 2 4-4"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                                Document Checklist
                            </h3>
                            <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                                Get a complete checklist of azubi-required documents for your
                                visa application
                            </p>
                            <div
                                class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                                <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">planning</span>
                            </div>
                        </a><a
                            class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="#">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plane w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                        <path
                                            d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                                Pre-Departure Checklist
                            </h3>
                            <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                                Personalized checklist of everything you need before
                                moving to Germany
                            </p>
                            <div
                                class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                                <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">planning</span>
                            </div>
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="inline-flex items-center gap-2 px-6 py-3 azubi-bg-orange hover:bg-orange-hover text-white rounded-full font-semibold transition-colors"
                            href="#">Browse All Tools<svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                </section>
            </main>
        </div>
    </main>
    </div>
    <!--$--><!--/$--><!--$--><!--/$-->
    </main>
@endsection
