@extends('frontoffice.layouts.app')

@section('title', 'Language Proficiency Calculator | Azubi')

@section('meta')
    <meta name="description"
        content="Interactive assessment to determine your current German language level (A1-C2) with personalized recommendations for Ausbildung preparation.">
    <meta property="og:title" content="Language Proficiency Calculator | Azubi">
    <meta property="og:description"
        content="Interactive assessment to determine your current German language level (A1-C2) with personalized recommendations for Ausbildung preparation.">
@endsection

@section('content')
    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <div class="text-card-foreground shadow p-6 rounded-2xl border-2 azubi-bg-beige azubi-border-orange">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl flex-shrink-0 azubi-bg-orange text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-info h-6 w-6">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <div class="flex-1 space-y-2">
                        <h2 class="text-xl font-semibold azubi-text-green">
                            CEFR-Based Learning Timeline
                        </h2>
                        <p class="azubi-text-green/70 text-sm leading-relaxed">
                            This calculator uses the Common European Framework of
                            Reference (CEFR) standards to estimate realistic German
                            language learning timelines. Results are based on average
                            study intensity and official Goethe Institut guidelines.
                            Actual progress may vary based on prior language
                            experience and learning dedication.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold azubi-text-green mb-2">
                        Your Language Learning Plan
                    </h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2" data-error="false">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold">Current
                            German Level<!-- --> </label><button type="button" role="combobox"
                            aria-controls="radix-«R4b53peslb»" aria-expanded="false" aria-autocomplete="none" dir="ltr"
                            data-state="closed"
                            class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1">
                            <span style="pointer-events: none"></span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
                        <p class="text-xs azubi-text-green/60">
                            Honestly assess your speaking, reading, and writing
                            abilities
                        </p>
                    </div>
                    <div class="space-y-2" data-error="false">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold">Target
                            German Level<!-- --> </label><button type="button" role="combobox"
                            aria-controls="radix-«R4j53peslb»" aria-expanded="false" aria-autocomplete="none" dir="ltr"
                            data-state="closed"
                            class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1">
                            <span style="pointer-events: none"></span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
                        <p class="text-xs azubi-text-green/60">
                            B1 is the minimum for most Ausbildung programs
                        </p>
                    </div>
                    <div class="space-y-2" data-error="false">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold">Study
                            Hours Per Week<!-- --> </label><input type="number"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                            id="studyHoursPerWeek" min="1" max="60" value="10" />
                        <p class="text-xs azubi-text-green/60">
                            Realistic weekly study time (includes classes, homework,
                            practice)
                        </p>
                    </div>
                    <div class="space-y-2" data-error="false">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold">Learning
                            Method<!-- --> </label><button type="button" role="combobox"
                            aria-controls="radix-«R5353peslb»" aria-expanded="false" aria-autocomplete="none"
                            dir="ltr" data-state="closed"
                            class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1">
                            <span style="pointer-events: none"></span><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                        <p class="text-xs azubi-text-green/60">
                            Choose based on your budget and learning style
                        </p>
                    </div>
                    <div class="md:col-span-2">
                        <div class="space-y-2" data-error="false">
                            <label
                                class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 azubi-text-green font-semibold">Target
                                Ausbildung Sector<!-- --> </label><button type="button" role="combobox"
                                aria-controls="radix-«Rlb53peslb»" aria-expanded="false" aria-autocomplete="none"
                                dir="ltr" data-state="closed"
                                class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1">
                                <span style="pointer-events: none"></span><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
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
                            <div class="flex items-center gap-2 text-xs text-gray-600 azubi-bg-cream rounded-lg p-3 mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-target h-4 w-4 azubi-text-orange" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg><span><strong>Requirement:</strong> Minimum
                                    <strong>A2</strong>, Recommended
                                    <strong class="azubi-text-orange">B1</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex-1 azubi-bg-orange hover:bg-orange-hover rounded-full">
                            Calculate Learning Timeline<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-languages ml-2 h-4 w-4" aria-hidden="true">
                                <path d="m5 8 6 6"></path>
                                <path d="m4 14 6-6 2-3"></path>
                                <path d="M2 5h12"></path>
                                <path d="M7 2h1"></path>
                                <path d="m22 22-5-10-5 10"></path>
                                <path d="M14 18h6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex justify-center"></div>
                </div>
            </div>
            <div class="mt-8 mb-8 space-y-6">
                <div class="azubi-bg-beige border-2 border-border rounded-2xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="p-3 azubi-bg-orange rounded-xl flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-info h-6 w-6 text-white">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-2xl font-bold azubi-text-green mb-2">
                                How to Use the Language Proficiency Calculator
                            </h2>
                            <p class="azubi-text-green/70">
                                Assess your German language level and get a personalized
                                learning timeline to reach your target proficiency for
                                Ausbildung.
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
                                        Enter Current Level
                                    </h4>
                                    <p class="azubi-text-green/70 leading-relaxed">
                                        Select your current German proficiency level based
                                        on the CEFR framework (A1-C2) or choose
                                        &quot;Beginner&quot; if you&#x27;re just starting.
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
                                        Set Target Level
                                    </h4>
                                    <p class="azubi-text-green/70 leading-relaxed">
                                        Choose your target German level based on your
                                        Ausbildung sector requirements (B1 minimum for most
                                        programs).
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
                                        Get Learning Timeline
                                    </h4>
                                    <p class="azubi-text-green/70 leading-relaxed">
                                        Receive a detailed timeline with study hours,
                                        milestones, costs, and a personalized learning
                                        roadmap.
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
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
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
                                            Current German Level
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Your current CEFR level (Beginner to C1)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-target w-5 h-5 azubi-text-orange">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="6"></circle>
                                            <circle cx="12" cy="12" r="2"></circle>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Target Level
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Your goal proficiency level (A2-C2)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-5 h-5 azubi-text-orange">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Study Hours per Week
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Realistic weekly study commitment
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-book-open w-5 h-5 azubi-text-orange">
                                            <path d="M12 7v14"></path>
                                            <path
                                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Learning Method
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Choose from self-study, online courses, group
                                            classes, private tutor, or intensive programs
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
                            <h3 class="text-xl font-bold azubi-text-green">What You Get</h3>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-5 h-5 azubi-text-green">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Time to Goal
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Weeks and months needed to reach your target level
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-book-open w-5 h-5 azubi-text-green">
                                            <path d="M12 7v14"></path>
                                            <path
                                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Recommended Courses
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Learning method suggestions with cost breakdown
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-award w-5 h-5 azubi-text-green">
                                            <path
                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                            </path>
                                            <circle cx="12" cy="8" r="6"></circle>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Proficiency Milestones
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Step-by-step CEFR level progression timeline
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5 azubi-text-green">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Study Plan
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Total hours azubi-required and sector fit assessment
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 azubi-border-beige rounded-xl p-4 hover:azubi-border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 azubi-bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-trending-up w-5 h-5 azubi-text-green">
                                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                            <polyline points="16 7 22 7 22 13"></polyline>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold azubi-text-green mb-1">
                                            Progress Tracking
                                        </h4>
                                        <p class="text-sm azubi-text-green/70">
                                            Cumulative hours and weeks for each milestone
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
                            stroke-linejoin="round" class="lucide lucide-info w-5 h-5 azubi-text-orange flex-shrink-0 mt-0.5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                        <p class="azubi-text-green/80 leading-relaxed">
                            Timeline estimates are based on Common European Framework
                            of Reference (CEFR) standards and average learning curves
                            for international students.
                        </p>
                    </div>
                </div>
            </div>
            <section class="bg-card border border-border rounded-lg p-6 md:p-8 mb-8">
                <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-6">
                    Frequently Asked Questions
                </h3>
                <div class="space-y-4">
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">What German language level do I need for
                                Ausbildung in
                                Germany?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Most Ausbildung programs require a minimum of B1 German
                                proficiency (intermediate level). However, requirements
                                vary by sector: Healthcare (Nursing) typically requires
                                B2, while IT and Technical fields may accept B1. Some
                                programs offer language support and may accept A2 with
                                intensive German courses during training. Use this
                                calculator to determine your current level and the time
                                needed to reach your target.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">How long does it take to learn German from A1
                                to
                                B2?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Based on the Common European Framework of Reference
                                (CEFR), it typically takes: A1 to A2 (150-200 hours), A2
                                to B1 (200-300 hours), and B1 to B2 (300-400 hours).
                                This means reaching B2 from zero German knowledge
                                requires approximately 650-900 hours of structured
                                learning. With intensive study (20 hours/week), you can
                                reach B2 in 8-12 months. With moderate study (10
                                hours/week), expect 15-18 months. The calculator
                                provides personalized timelines based on your study
                                intensity and current level.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Can I start my Ausbildung with A2 German
                                level?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                While most programs require B1 minimum, some training
                                companies accept A2 level candidates if you commit to
                                intensive German courses before or during the first
                                months of training. This is particularly common in
                                technical sectors with high demand (IT, Engineering,
                                Manufacturing). However, starting with higher
                                proficiency (B1 or B2) significantly improves your
                                success rate, work integration, and overall experience.
                                The calculator helps you plan realistic timelines to
                                reach the recommended level before your intake.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">What are the CEFR levels (A1, A2, B1, B2, C1,
                                C2)?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                The Common European Framework of Reference (CEFR)
                                defines six proficiency levels: A1 (Beginner) - basic
                                phrases and simple interactions; A2 (Elementary) -
                                everyday expressions and routine tasks; B1
                                (Intermediate) - handle most situations, explain
                                opinions; B2 (Upper Intermediate) - understand complex
                                texts, interact fluently; C1 (Advanced) - express ideas
                                fluently and spontaneously; C2 (Mastery) - near-native
                                proficiency. For Ausbildung, B1 is the typical minimum,
                                with B2 preferred for customer-facing or healthcare
                                roles.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">How much does German language learning
                                cost?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Costs vary significantly: Goethe Institut courses
                                (official provider) cost €200-400 per level, online
                                platforms like Duolingo or Babbel cost €10-15/month,
                                private tutors range €20-40/hour, and intensive
                                in-person courses in Germany cost €500-1,200 per level.
                                For budget-conscious learners, combine free resources
                                (Deutsche Welle, YouTube) with affordable apps and
                                occasional tutoring. The calculator estimates total
                                costs based on your chosen learning method and
                                intensity, helping you budget for your language journey.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Is Goethe-Zertifikat azubi-required for Ausbildung
                                visa?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                While not always mandatory, a Goethe-Zertifikat (or
                                equivalent like TELC, TestDaF, ÖSD) is highly
                                recommended and often azubi-required by employers and visa
                                authorities as proof of German proficiency. The German
                                embassy may request language certificates during visa
                                application, especially for B1 or B2 claims. Many
                                training companies require certification before contract
                                signing. Budget €150-250 for each exam attempt. The
                                calculator includes certification exam costs in the
                                total budget estimation.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Can I learn German while working during
                                Ausbildung?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Yes, many international trainees continue improving
                                their German during Ausbildung through workplace
                                immersion, company-provided language courses, and
                                evening classes. Ausbildung provides excellent language
                                practice through daily interactions with colleagues and
                                customers. However, starting with at least B1 level
                                makes the transition much smoother, as you&#x27;ll
                                understand training materials, safety instructions, and
                                communicate effectively from day one. Use the calculator
                                to plan pre-Ausbildung learning to reach B1, then
                                continue improving to B2/C1 during training.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">What is the fastest way to learn German for
                                Ausbildung?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                The fastest approach combines: (1) Intensive structured
                                courses (20+ hours/week with qualified teachers), (2)
                                Daily immersion through German media (news, podcasts, TV
                                shows), (3) Regular conversation practice with native
                                speakers (language exchange, tutors), (4) Focused
                                vocabulary building for your target sector (healthcare,
                                IT, etc.), and (5) Grammar study with practical
                                application. Intensive programs in Germany can achieve
                                A1 to B2 in 6-8 months. The calculator helps you design
                                a realistic intensive study plan based on your available
                                time and resources.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Do I need to know German before applying for
                                Ausbildung?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Yes, most Ausbildung applications require proof of at
                                least A2-B1 German proficiency before the interview
                                process begins. Training companies need to assess your
                                ability to understand safety instructions, communicate
                                with colleagues, and handle customer interactions. Some
                                recruitment agencies offer pre-selection language
                                assessments. Having B1+ German also significantly
                                improves your chances during interviews, as you can
                                express motivation, ask questions, and demonstrate
                                cultural fit. Start learning German 12-18 months before
                                your target Ausbildung start date.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">How is German proficiency tested for
                                Ausbildung
                                applications?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                German proficiency is assessed through: (1) Official
                                certificates (Goethe-Zertifikat, TELC, TestDaF, ÖSD),
                                (2) Company-conducted phone or video interviews in
                                German, (3) Written assessments (grammar tests,
                                comprehension exercises), and (4) In-person interviews
                                evaluating conversation skills. Some companies use
                                placement tests to determine your exact level. Even with
                                certificates, expect practical testing during
                                recruitment. The calculator helps you prepare adequately
                                by showing realistic timelines to reach interview-ready
                                proficiency levels (B1-B2).
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mb-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold azubi-text-green mb-2">
                        Related Tools You Might Need
                    </h2>
                    <p class="azubi-text-green/70">
                        Continue planning your Ausbildung journey with these helpful
                        tools
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <a class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                        href="{{ route('front.tools.eligibility-checker') }}">
                        <div class="mb-4">
                            <div class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                            Eligibility Checker
                        </h3>
                        <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                            Check if you qualify for German Ausbildung based on your
                            profile
                        </p>
                        <div
                            class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                            <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">eligibility</span>
                        </div>
                    </a><a
                        class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                        href="{{ route('front.tools.blocked-account-calculator') }}">
                        <div class="mb-4">
                            <div class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-wallet w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                    <path
                                        d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                                    </path>
                                    <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                            Blocked Account Calculator
                        </h3>
                        <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                            Calculate blocked account costs and compare providers for
                            your German visa
                        </p>
                        <div
                            class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                            <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">financial</span>
                        </div>
                    </a><a
                        class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                        href="{{ route('front.tools.roi-calculator') }}">
                        <div class="mb-4">
                            <div class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-trending-up w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                            ROI Calculator
                        </h3>
                        <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                            Calculate return on investment for Ausbildung vs your home
                            country career
                        </p>
                        <div
                            class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                            <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">financial</span>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <a class="inline-flex items-center gap-2 px-6 py-3 azubi-bg-orange hover:bg-orange-hover text-white rounded-full font-semibold transition-colors"
                        href="{{ route('front.tools') }}">Browse All Tools<svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right w-4 h-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></a>
                </div>
            </section>
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
                        src="{{ asset('assets/images/heroes/hero-background-germany-natural-autumn.jpeg') }}" />
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
                                Find Your Perfect Ausbildung Match
                            </h2>
                            <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                                Browse verified job postings from German employers and
                                find opportunities that align with your language skills
                                and career goals.
                            </p>
                            <div class="flex flex-col sm:flex-row items-center gap-3">
                                <a href="{{ route('front.jobs') }}"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                                    Live Positions</a><a href="{{ route('front.tools.eligibility-checker') }}"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Check
                                    Eligibility</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    </div>
    </main>
@endsection
