@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung vs University Comparison | Azubi')

@section('meta')
    <meta name="description"
        content="Compare Ausbildung (vocational training) vs University education in Germany with personalized analysis and salary projections.">
    <meta property="og:title" content="Ausbildung vs University Comparison | Azubi">
    <meta property="og:description"
        content="Compare Ausbildung (vocational training) vs University education in Germany with personalized analysis and salary projections.">
@endsection

@section('content')
    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <main role="main">
                <section class="azubi-bg-beige border-2 border-border rounded-2xl p-6 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-[#2C3340] rounded-xl" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-scale h-6 w-6 azubi-text-cream">
                                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="M7 21h10"></path>
                                <path d="M12 3v18"></path>
                                <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">
                                Choose Your Path Wisely
                            </h3>
                            <p class="text-sm text-gray-700">
                                This comprehensive tool analyzes 8 key factors to help
                                you choose between Ausbildung (vocational training) and
                                University education in Germany. Answer all questions
                                honestly for the most accurate recommendation.
                            </p>
                        </div>
                    </div>
                </section>
                <div class="space-y-4">
                    <div class="bg-white rounded-2xl border-2 border-gray-200 p-8">
                        <div class="mb-8">
                            <div class="flex justify-between mb-2">
                                <div class="h-2 flex-1 mx-1 rounded-full bg-primary"></div>
                                <div class="h-2 flex-1 mx-1 rounded-full bg-gray-200"></div>
                                <div class="h-2 flex-1 mx-1 rounded-full bg-gray-200"></div>
                                <div class="h-2 flex-1 mx-1 rounded-full bg-gray-200"></div>
                                <div class="h-2 flex-1 mx-1 rounded-full bg-gray-200"></div>
                            </div>
                            <p class="text-sm text-gray-600 text-center">
                                Step
                                <!-- -->1<!-- -->
                                of 5:
                                <!-- -->Personal Profile
                            </p>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Age</label><input
                                    type="number"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                                    min="18" max="40" value="24" />
                            </div>
                            <div>
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Current
                                    Education Level</label><button type="button" role="combobox"
                                    aria-controls="radix-«R94l3peslb»" aria-expanded="false" aria-autocomplete="none"
                                    dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1">
                                    <span style="pointer-events: none">Select education level</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
                          ">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Field
                                    of Interest</label><button type="button" role="combobox"
                                    aria-controls="radix-«R9kl3peslb»" aria-expanded="false" aria-autocomplete="none"
                                    dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1">
                                    <span style="pointer-events: none">Select field</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
                          ">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Career
                                    Goal</label><button type="button" role="combobox" aria-controls="radix-«Ra4l3peslb»"
                                    aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed"
                                    data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1">
                                    <span style="pointer-events: none">Select goal</span><svg
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
                          ">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="flex gap-4 mt-8">
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex-1 bg-primary hover:bg-primary/90 azubi-text-cream rounded-full"
                                disabled="">
                                Next<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right h-4 w-4 ml-2">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-center"></div>
                </div>
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
                                    How to Use the Comparison Tool
                                </h2>
                                <p class="azubi-text-green/70">
                                    Compare Ausbildung and university pathways based on
                                    your profile, priorities, and career goals. Get a
                                    personalized recommendation.
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
                                            Complete Your Profile
                                        </h4>
                                        <p class="azubi-text-green/70 leading-relaxed">
                                            Enter your age, education level, and field of
                                            interest to help us understand your background and
                                            aspirations.
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
                                            Set Your Priorities
                                        </h4>
                                        <p class="azubi-text-green/70 leading-relaxed">
                                            Tell us what matters most to you - career goals,
                                            financial situation, German language level, and
                                            work-life balance preferences.
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
                                            Get Recommendation
                                        </h4>
                                        <p class="azubi-text-green/70 leading-relaxed">
                                            Receive a detailed comparison with personalized
                                            recommendation, financial analysis, timeline
                                            breakdown, and career prospects for both pathways.
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
                                                class="lucide lucide-calendar w-5 h-5 azubi-text-orange">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">Age</h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Your current age (affects timeline and
                                                opportunities)
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
                                                class="lucide lucide-graduation-cap w-5 h-5 azubi-text-orange">
                                                <path
                                                    d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                                </path>
                                                <path d="M22 10v6"></path>
                                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Education Level
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Highest completed education qualification
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
                                                class="lucide lucide-briefcase w-5 h-5 azubi-text-orange">
                                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Field of Interest
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Your preferred career sector or field
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
                                                class="lucide lucide-target w-5 h-5 azubi-text-orange">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <circle cx="12" cy="12" r="6"></circle>
                                                <circle cx="12" cy="12" r="2"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Career Goal
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Immediate employment vs long-term research
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
                                                class="lucide lucide-euro w-5 h-5 azubi-text-orange">
                                                <path d="M4 10h12"></path>
                                                <path d="M4 14h9"></path>
                                                <path
                                                    d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Available Funds
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Financial resources for education and living
                                                costs
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
                                                Current German language proficiency (A1-C2)
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
                                                class="lucide lucide-clock w-5 h-5 azubi-text-orange">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Work-Life Balance Priority
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                How important is work-life balance to you
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
                                                class="lucide lucide-award w-5 h-5 azubi-text-green">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Recommendation
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Personalized pathway recommendation (Ausbildung,
                                                University, or Hybrid)
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
                                                class="lucide lucide-chart-no-axes-column-increasing w-5 h-5 azubi-text-green">
                                                <line x1="12" x2="12" y1="20" y2="10">
                                                </line>
                                                <line x1="18" x2="18" y1="20" y2="4">
                                                </line>
                                                <line x1="6" x2="6" y1="20" y2="16">
                                                </line>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Confidence Score
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                How confident we are in the recommendation
                                                (0-100%)
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
                                                class="lucide lucide-euro w-5 h-5 azubi-text-green">
                                                <path d="M4 10h12"></path>
                                                <path d="M4 14h9"></path>
                                                <path
                                                    d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Financial Comparison
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Complete cost breakdown, ROI timeline, and
                                                5-year net worth projection
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
                                                class="lucide lucide-clock w-5 h-5 azubi-text-green">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Time Comparison
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Duration breakdown for each pathway and age
                                                impact analysis
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
                                                class="lucide lucide-trending-up w-5 h-5 azubi-text-green">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold azubi-text-green mb-1">
                                                Career Analysis
                                            </h4>
                                            <p class="text-sm azubi-text-green/70">
                                                Salary ranges, growth projections, and job
                                                market demand comparison
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
                                Recommendations are based on your unique profile, German
                                education system requirements, and 2026 labor market
                                projections.
                            </p>
                        </div>
                    </div>
                </div>
                <section class="mt-12">
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
                                    <span class="font-semibold text-foreground pr-4">What is the fundamental difference
                                        between
                                        Ausbildung and University in Germany?</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Ausbildung (vocational training) is a dual system
                                        combining practical work at a company (70-80% of
                                        time) with theoretical classes at a vocational
                                        school (20-30% of time). You learn a specific
                                        profession through hands-on experience and earn a
                                        monthly stipend (€800-1,200) while training.
                                        University is academic education focusing on
                                        theoretical knowledge, research, and broad subject
                                        mastery. You attend lectures and seminars, complete
                                        a thesis, but earn no income during studies.
                                        Ausbildung takes 2-3 years and leads directly to
                                        employment, while University takes 3-6 years
                                        (Bachelor + Master) with job search azubi-required
                                        afterward. Ausbildung requires German B1 level;
                                        University typically requires B2-C1. Both pathways
                                        can lead to successful careers and permanent
                                        residency in Germany, but they suit different
                                        learning styles and career goals.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Which pathway is financially better
                                        for
                                        international students?</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Ausbildung is significantly better financially.
                                        During a 2-3 year Ausbildung, you EARN approximately
                                        €28,800-43,200 total (€1,000-1,200/month stipend ×
                                        24-36 months) while gaining work experience. Your
                                        living costs are 60-80% covered by the stipend,
                                        requiring minimal external support. In contrast,
                                        University costs approximately €36,000-45,000 for a
                                        3-year Bachelor (€12,000-15,000 per year in living
                                        expenses, plus blocked account requirements of
                                        €11,904/year). You have no income unless working
                                        part-time (limited to 120 full days/year). The
                                        financial difference is stark: Ausbildung = -€30,000
                                        (you gain money), University = +€40,000 (you spend
                                        money). After completing Ausbildung, you start
                                        earning €2,800-3,200/month immediately, reaching ROI
                                        instantly. University graduates earn €3,500-4,500
                                        initially but take 4-5 years post-graduation to
                                        break even on their investment.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Can I earn money during Ausbildung but
                                        not during
                                        University?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Yes. Ausbildung trainees receive a guaranteed
                                        monthly stipend (Ausbildungsvergütung) ranging from
                                        €800-1,200 depending on the sector and training
                                        year. This is a legal employment contract, and the
                                        stipend increases each year of training. For
                                        example, Year 1 might be €900, Year 2: €1,000, Year
                                        3: €1,100. You are a salaried employee with benefits
                                        including health insurance contribution, vacation
                                        days (25-30 days/year), and social security
                                        coverage. University students can only work
                                        part-time with restrictions: maximum 120 full days
                                        or 240 half days per year at minimum wage
                                        (€12.50/hour in 2026). This typically yields
                                        €400-800/month if you work the maximum allowed
                                        hours. However, this work is separate from your
                                        studies, not integrated like Ausbildung. Most
                                        students struggle to find part-time work due to
                                        limited German skills and time constraints, making
                                        the blocked account their primary funding source.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Which is faster to employment:
                                        Ausbildung or
                                        University?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Ausbildung is significantly faster. Total timeline
                                        from decision to stable employment: Ausbildung = 3-4
                                        years (6-12 months language prep + 2-3 months visa +
                                        2-3 years training = immediate job). University =
                                        5-7.5 years (6-12 months language prep + 3-4 months
                                        visa + 3-6 years study + 3-6 months job search =
                                        employment). Key difference: Ausbildung trainees
                                        have a job FROM DAY ONE of training. 75-80% of
                                        trainees are hired permanently by their training
                                        company immediately after completing Ausbildung. For
                                        those who aren&#x27;t, German employers highly value
                                        Ausbildung qualifications, making job search quick
                                        (1-2 months average). University graduates must
                                        search for jobs after graduation, competing with
                                        other graduates. In high-demand fields like IT or
                                        Healthcare, Ausbildung graduates often start earning
                                        2-3 years before their University counterparts,
                                        accumulating €70,000-100,000 in earnings and work
                                        experience while University students are still
                                        studying.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">What are the language requirements and
                                        how strict
                                        are they?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Ausbildung requires German B1 level (CEFR) for visa
                                        approval. This is intermediate conversational
                                        German: you can handle everyday workplace
                                        situations, understand instructions, and communicate
                                        with colleagues. Most students achieve B1 in 6-12
                                        months of intensive study (4-6 hours/week). Some
                                        companies may prefer B2, but B1 is the official visa
                                        requirement. University requires German B2-C1
                                        depending on the program and institution. B2 is
                                        upper-intermediate; C1 is advanced academic German.
                                        This typically takes 12-18 months of intensive study
                                        for most learners. Technical programs (Engineering,
                                        IT) may accept English-taught programs with no
                                        German requirement, but you&#x27;ll still need A2-B1
                                        for daily life. Strictness: Both pathways verify
                                        language through TestDaF, Goethe-Zertifikat, or telc
                                        exams. Consulates check certificates carefully
                                        during visa interviews. Without the azubi-required level,
                                        your visa will be rejected. Important: B1 to B2 is a
                                        significant jump requiring 200-300 additional study
                                        hours. If time is limited, Ausbildung&#x27;s B1
                                        requirement is more achievable.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Which pathway offers better permanent
                                        residency
                                        (PR) chances?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Both pathways offer excellent PR opportunities with
                                        nearly identical timelines if you meet salary
                                        thresholds. The FASTEST route is via EU Blue Card:
                                        Earn €45,300+ annually (2026 threshold) and apply
                                        for Blue Card → 21 months with B1 German OR 33
                                        months with A1 German → Permanent Residency. Both
                                        Ausbildung and University graduates can access this
                                        if their job salary meets the threshold. Ausbildung
                                        graduates in high-demand fields (IT, Healthcare,
                                        Engineering) typically earn €2,800-3,400/month
                                        (€33,600-40,800/year) initially, reaching Blue Card
                                        threshold within 1-2 years of promotions. University
                                        graduates often start above the threshold
                                        (€3,800+/month = €45,600/year). Alternative PR
                                        route: General Residence Permit → Work for 5 years →
                                        PR. Ausbildung has an advantage here: your training
                                        years COUNT toward the 5-year requirement, meaning
                                        you can apply for PR just 2-3 years after completing
                                        your 2-3 year Ausbildung (total 5 years in Germany).
                                        University students must complete 3-6 years of study
                                        first, then work 5 additional years. Important: Both
                                        pathways lead to citizenship eligibility after 6-8
                                        years total residence (after receiving PR).
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Can I switch from Ausbildung to
                                        University or vice
                                        versa later?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Yes, both directions are possible, and Germany
                                        actively supports such transitions. Ausbildung →
                                        University: After completing Ausbildung and gaining
                                        work experience, you can apply to universities. Your
                                        Ausbildung qualification may grant you direct
                                        university admission rights
                                        (Hochschulzugangsberechtigung) depending on your
                                        state and field. Many students do a &quot;dual
                                        pathway&quot;: complete Ausbildung (earn €30,000
                                        while training), work 2-3 years (earn
                                        €80,000-100,000), then use savings to fund
                                        University studies debt-free. This is increasingly
                                        popular among smart planners. Some credits may
                                        transfer, shortening your degree. University →
                                        Ausbildung: If university studies are too
                                        theoretical, financially burdensome, or you struggle
                                        to find employment, you can enter an Ausbildung
                                        program. Universities respect this decision, and
                                        many employers value the combination of theoretical
                                        education plus practical training. You may complete
                                        Ausbildung faster (1.5-2 years instead of 3) due to
                                        prior knowledge. Best hybrid option: &quot;Duales
                                        Studium&quot; (dual study program) which combines
                                        University Bachelor degree with Ausbildung-style
                                        company training over 3-3.5 years, with monthly
                                        stipend (€1,000-1,600). This gives you both
                                        qualifications simultaneously, but admission is very
                                        competitive.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Which has better long-term career
                                        prospects and
                                        salary growth?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        It depends on your field and career ceiling goals.
                                        10-year salary comparison: Ausbildung: Start €2,800
                                        → Year 5: €3,800 → Year 10: €4,800-5,500/month.
                                        Growth is steady but may plateau without additional
                                        qualifications (Meister, Techniker, or Bachelor).
                                        University: Start €3,500-4,500 → Year 5:
                                        €5,000-6,500 → Year 10: €6,500-8,000+/month.
                                        University graduates typically reach higher salary
                                        ceilings faster and have easier access to senior
                                        management and C-suite positions. However,
                                        Ausbildung graduates who pursue additional
                                        qualifications (Meister certification costs
                                        €5,000-8,000, 1-2 years) can reach equivalent or
                                        higher positions. Meister qualification =
                                        Bachelor-equivalent in Germany and allows you to
                                        open your own business, train apprentices, and
                                        command high respect. Career flexibility: University
                                        degrees offer broader career pivoting (easier to
                                        switch industries). Ausbildung is more specialized
                                        but guarantees employability in that specific field.
                                        Job security: Ausbildung graduates have superior job
                                        security during recessions due to the dual
                                        system&#x27;s government backing and employer
                                        loyalty. In fields like Healthcare, IT
                                        (Fachinformatiker), and Engineering (Mechatroniker),
                                        Ausbildung can lead to €60,000-70,000+ annual
                                        salaries by year 10-15, rivaling university paths
                                        without the debt burden.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Do employers in Germany value
                                        Ausbildung or
                                        University degrees more?</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Germany uniquely values BOTH equally, but in
                                        different contexts. This is not like other countries
                                        where university is universally preferred. German
                                        culture deeply respects Ausbildung: 50% of German
                                        youth choose Ausbildung over university, including
                                        children of doctors, lawyers, and professors.
                                        Ausbildung is NOT considered &quot;lower class&quot;
                                        – it is a professional qualification with high
                                        social standing. Employer preferences by sector: (1)
                                        Skilled Trades (Construction, Automotive,
                                        Manufacturing): Ausbildung STRONGLY preferred.
                                        Employers trust the hands-on training over
                                        theoretical degrees. (2) IT &amp; Tech: BOTH valued
                                        equally. A Fachinformatiker Ausbildung is as
                                        respected as a Computer Science degree. Employers
                                        often prefer Ausbildung graduates for practical
                                        roles due to immediate productivity. (3) Healthcare:
                                        Nursing Ausbildung is the standard pathway;
                                        University (Bachelor of Nursing) is newer and
                                        primarily for leadership roles. (4) Engineering:
                                        University degrees preferred for R&amp;D, design,
                                        and management roles. Ausbildung (Mechatroniker,
                                        Industriemechaniker) preferred for technical,
                                        hands-on positions. (5) Business: University
                                        preferred for management consulting, finance;
                                        Ausbildung (Kaufmann/-frau) preferred for
                                        operations, administration. Key insight: German
                                        employers hire for COMPETENCE demonstrated through
                                        qualifications and experience, not prestige.
                                        Ausbildung graduates with 5 years experience often
                                        outcompete fresh university graduates with no work
                                        history.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">What is the visa process difference
                                        between
                                        Ausbildung and University?</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Both pathways require German student/training visas,
                                        but requirements differ slightly. Ausbildung Visa
                                        (§17 AufenthG Residence Permit): Requirements: (1)
                                        Signed training contract (Ausbildungsvertrag) from a
                                        German company + training school confirmation, (2)
                                        German B1 certificate (TestDaF, Goethe, telc), (3)
                                        Financial proof (blocked account €11,904 OR company
                                        stipend letter showing €850+/month), (4) Health
                                        insurance, (5) Clean criminal record. Approval rate:
                                        ~75-80% for complete applications. Processing time:
                                        6-12 weeks at German consulate. Visa valid for
                                        duration of Ausbildung (2-3 years), renewable.
                                        University Visa (§16b AufenthG Residence Permit):
                                        Requirements: (1) University admission letter
                                        (Zulassungsbescheid), (2) German B2-C1 certificate
                                        (or English for English-taught programs + A2 German
                                        for daily life), (3) Blocked account (Sperrkonto)
                                        with €11,904 deposited for first year, (4) Health
                                        insurance, (5) Clean criminal record. Approval rate:
                                        ~85-90% (slightly higher due to standardized
                                        process). Processing time: 8-14 weeks. Visa valid
                                        for duration of study, renewable annually. Key
                                        differences: Ausbildung may not always require
                                        blocked account if stipend is sufficient (consulate
                                        discretion). University ALWAYS requires blocked
                                        account. Both allow part-time work (Ausbildung:
                                        within training scope; University: 120 full
                                        days/year).
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">Which option is better for specific
                                        fields like IT,
                                        Healthcare, Engineering, or Business?</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        Field-specific recommendations: **IT &amp; Software
                                        Development**: BOTH excellent, slight edge to
                                        Ausbildung. Fachinformatiker Ausbildung
                                        (specializations: Application Development, System
                                        Integration, Data/Process Analysis) provides
                                        immediate coding skills, job security, and
                                        €900-1,200/month stipend during 3 years. Starting
                                        salary: €2,800-3,200/month. University Computer
                                        Science offers deeper algorithms, theory, research
                                        skills. Starting salary: €3,800-4,500/month. German
                                        IT employers value Ausbildung highly – you can reach
                                        senior developer roles with Ausbildung + experience.
                                        Recommendation: Ausbildung if you want immediate
                                        income and hands-on skills; University if you want
                                        research, AI/ML specialization, or international
                                        mobility. **Healthcare &amp; Nursing**: Ausbildung
                                        STRONGLY recommended. Nursing Ausbildung
                                        (Pflegefachmann/-frau) is the standard pathway in
                                        Germany with €1,100-1,300/month stipend, 3 years
                                        training, starting salary €2,700-3,200/month.
                                        Guaranteed employment (severe shortage, 50,000+ open
                                        positions). University nursing is newer, primarily
                                        for management/research roles, requires German B2,
                                        offers no stipend. Recommendation: Ausbildung for
                                        clinical nursing; University only if aiming for
                                        hospital administration or academic roles.
                                        **Engineering**: University preferred for design,
                                        R&amp;D, and management; Ausbildung for
                                        technical/hands-on roles. Mechatroniker or
                                        Industriemechaniker Ausbildung provides excellent
                                        practical engineering skills, €950-1,150/month
                                        stipend, starting salary €2,900-3,400/month.
                                        University engineering (Mechanical, Electrical,
                                        Civil) offers theoretical depth, starting salary
                                        €3,800-4,500/month, access to senior engineering and
                                        management roles. Recommendation: University for
                                        design engineering; Ausbildung for manufacturing,
                                        maintenance, technical roles. **Business &amp;
                                        Administration**: University preferred for
                                        management consulting, finance, strategy roles.
                                        Kaufmann/-frau Ausbildung (various specializations:
                                        Office Management, Retail, Logistics) provides
                                        operational business skills, €800-1,000/month
                                        stipend, starting salary €2,500-3,000/month.
                                        University Business/BWL offers broader career
                                        options, starting salary €3,500-4,200/month.
                                        Recommendation: University for corporate careers;
                                        Ausbildung for SME operations, administration.
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                                <button
                                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                    aria-expanded="false">
                                    <span class="font-semibold text-foreground pr-4">What if I want to return to my home
                                        country
                                        eventually? Which pathway is better recognized
                                        internationally?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                    <div
                                        class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                        University degrees have superior international
                                        recognition and portability. Bachelor&#x27;s and
                                        Master&#x27;s degrees from German universities are
                                        recognized globally through the Bologna Process (47
                                        countries) and are understood worldwide. This makes
                                        career transitions to other countries relatively
                                        straightforward, especially in fields like
                                        Engineering, IT, Business, and Sciences. Your degree
                                        title (e.g., &quot;Master of Science in Computer
                                        Science, Technical University of Munich&quot;) is
                                        universally understood. Ausbildung (IHK vocational
                                        certificates) has LIMITED international recognition
                                        outside German-speaking countries (Germany, Austria,
                                        Switzerland, parts of Belgium/Luxembourg). The term
                                        &quot;Ausbildung&quot; doesn&#x27;t translate
                                        easily, and foreign employers often don&#x27;t
                                        understand the dual system&#x27;s value. However,
                                        within the EU, there are frameworks for recognizing
                                        vocational qualifications, though the process can be
                                        bureaucratic. Practical solutions if you want
                                        flexibility: (1) Complete Ausbildung → work 2-3
                                        years → then pursue University degree (you&#x27;ll
                                        have German work experience + international degree);
                                        (2) After Ausbildung, obtain additional
                                        international certifications (e.g., AWS
                                        certifications for IT, Project Management
                                        Professional, etc.) to supplement your IHK
                                        certificate; (3) Focus on Ausbildung in
                                        globally-recognized fields (Healthcare, IT) where
                                        practical skills matter more than degree titles.
                                        Important consideration: Many international students
                                        who complete Ausbildung find Germany&#x27;s quality
                                        of life, salary, and work-life balance so superior
                                        that they choose to stay permanently rather than
                                        return home. The permanent residency pathway is
                                        equally accessible from both Ausbildung and
                                        University, and German citizenship allows you to
                                        live anywhere in the EU (27 countries), greatly
                                        expanding your options.
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
                            href="{{ route('front.tools.ausbildung-sector-comparison') }}">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-target w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                                Sector Comparison
                            </h3>
                            <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                                Find the best Ausbildung sector based on your skills and
                                interests
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
                                    class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">comparison</span>
                            </div>
                        </a><a
                            class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="{{ route('front.tools.career-pathway-decision') }}">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-briefcase w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                                        <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                                Career Pathway Decision
                            </h3>
                            <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                                Get personalized career pathway recommendations based on
                                your goals
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
                                    class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">comparison</span>
                            </div>
                        </a><a
                            class="group relative azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6 hover:azubi-border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="{{ route('front.tools.cv-comparison') }}">
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
                                CV Comparison
                            </h3>
                            <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                                Compare your CV to German standards and get improvement
                                recommendations
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
                                    class="inline-block px-2 py-1 text-xs font-medium azubi-bg-beige azubi-text-green rounded-full capitalize">comparison</span>
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
                    <section class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg mt-12">
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
                            src="{{ asset('assets/images/heroes/arbeitgeber-hero-background.jpeg') }}" />
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
                                    Ready to Apply? Browse Live Positions
                                </h2>
                                <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                                    Make an informed decision and explore real Ausbildung
                                    opportunities from verified German employers hiring
                                    international candidates.
                                </p>
                                <div class="flex flex-col sm:flex-row items-center gap-3">
                                    <a href="{{ route('front.jobs') }}"
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                                        Jobs</a><a href="{{ route('front.contact') }}"
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Book
                                        Consultation</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </main>
    </div>
    </main>
@endsection
