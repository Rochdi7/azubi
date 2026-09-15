@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Sector Comparison Tool 2026 | Compare IT, Healthcare, Engineering & More | Azubi')

@section('meta')
    <meta name="description"
        content="Compare 6 Ausbildung sectors in Germany with detailed analysis of salary, job demand, requirements, and career growth.">
    <meta property="og:title"
        content="Ausbildung Sector Comparison Tool 2026 | Compare IT, Healthcare, Engineering & More | Azubi">
    <meta property="og:description"
        content="Compare 6 Ausbildung sectors in Germany with detailed analysis of salary, job demand, requirements, and career growth.">
@endsection

@section('content')
    <div id="top" class="space-y-4">
        <div>
            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                for="age">Age</label><input type="number"
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                id="age" min="16" max="45" value="20" />
        </div>
        <div>
            <label
                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Education
                Level</label>
            <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2" tabindex="-1"
                style="outline: none">
                <div class="flex items-center space-x-2">
                    <button type="button" role="radio" aria-checked="true" data-state="checked" value="high-school"
                        class="aspect-square h-5 w-5 rounded-full border-2 border-primary text-primary ring-offset-background transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary hover:bg-orange-light/20"
                        id="high-school" tabindex="-1" data-radix-collection-item="">
                        <span data-state="checked" class="flex items-center justify-center"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle h-2.5 w-2.5 fill-primary text-primary">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg></span></button><input type="radio" aria-hidden="true"
                        style="
                              transform: translateX(-100%);
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                            "
                        tabindex="-1" checked="" value="high-school" /><label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="high-school">High School</label>
                </div>
                <div class="flex items-center space-x-2">
                    <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="diploma"
                        class="aspect-square h-5 w-5 rounded-full border-2 border-primary text-primary ring-offset-background transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary hover:bg-orange-light/20"
                        id="diploma" tabindex="-1" data-radix-collection-item=""></button><input type="radio"
                        aria-hidden="true"
                        style="
                              transform: translateX(-100%);
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                            "
                        tabindex="-1" value="diploma" /><label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="diploma">Diploma</label>
                </div>
                <div class="flex items-center space-x-2">
                    <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="bachelors"
                        class="aspect-square h-5 w-5 rounded-full border-2 border-primary text-primary ring-offset-background transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary hover:bg-orange-light/20"
                        id="bachelors" tabindex="-1" data-radix-collection-item=""></button><input type="radio"
                        aria-hidden="true"
                        style="
                              transform: translateX(-100%);
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                            "
                        tabindex="-1" value="bachelors" /><label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="bachelors">Bachelor&#x27;s Degree</label>
                </div>
                <div class="flex items-center space-x-2">
                    <button type="button" role="radio" aria-checked="false" data-state="unchecked"
                        value="working-professional"
                        class="aspect-square h-5 w-5 rounded-full border-2 border-primary text-primary ring-offset-background transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary hover:bg-orange-light/20"
                        id="working-professional" tabindex="-1" data-radix-collection-item=""></button><input
                        type="radio" aria-hidden="true"
                        style="
                              transform: translateX(-100%);
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                            "
                        tabindex="-1" value="working-professional" /><label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="working-professional">Working Professional</label>
                </div>
            </div>
        </div>
        <div>
            <label
                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">German
                Language Level</label><button type="button" role="combobox" aria-controls="radix-«Rjj33peslb»"
                aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed"
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
        </div>
        <div>
            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Work
                Experience</label><button type="button" role="combobox" aria-controls="radix-«Rkj33peslb»"
                aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed"
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
        </div>
    </div>
    <div class="mt-6 flex justify-end">
        <button
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3">
            Next
        </button>
    </div>
    </div>
    </section>
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
                        How to Use the Sector Comparison Tool
                    </h2>
                    <p class="azubi-text-green/70">
                        Find the best Ausbildung sector match based on your
                        skills, interests, and career goals. Get personalized
                        recommendations.
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
                                Answer Profile Questions
                            </h4>
                            <p class="azubi-text-green/70 leading-relaxed">
                                Provide your educational background, language level,
                                work experience, and personal preferences across
                                three simple steps.
                            </p>
                        </div>
                        <div class="hidden lg:flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5 azubi-text-orange/50">
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
                                Review Sector Matches
                            </h4>
                            <p class="azubi-text-green/70 leading-relaxed">
                                Get ranked sector recommendations with detailed
                                match scores based on your profile and German labor
                                market demand.
                            </p>
                        </div>
                        <div class="hidden lg:flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5 azubi-text-orange/50">
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
                                Get Career Insights
                            </h4>
                            <p class="azubi-text-green/70 leading-relaxed">
                                Explore salary expectations, career growth
                                potential, and personalized career guidance for your
                                top matches.
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-white">
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
                                    High School, Diploma, Bachelor&#x27;s, or Working
                                    Professional
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
                                    class="lucide lucide-briefcase w-5 h-5 azubi-text-orange">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold azubi-text-green mb-1">
                                    Work Experience
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    None to 5+ years of relevant experience
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
                                    class="lucide lucide-award w-5 h-5 azubi-text-orange">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold azubi-text-green mb-1">
                                    Technical Skills
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Low, Medium, or High technical aptitude and
                                    interest
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
                                    class="lucide lucide-users w-5 h-5 azubi-text-orange">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold azubi-text-green mb-1">
                                    People Interaction
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Preference for working independently vs. with
                                    people
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
                                    Career Goals
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Priorities for salary, job security, work-life
                                    balance, and growth
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="azubi-bg-cream border-2 azubi-border-beige rounded-2xl p-6">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-2 azubi-bg-green rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-white">
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
                                    class="lucide lucide-target w-5 h-5 azubi-text-green">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold azubi-text-green mb-1">
                                    Top Sector Matches
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Ranked list of best-fit Ausbildung sectors for
                                    your profile
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
                                    class="lucide lucide-chart-no-axes-column-increasing w-5 h-5 azubi-text-green">
                                    <line x1="12" x2="12" y1="20" y2="10"></line>
                                    <line x1="18" x2="18" y1="20" y2="4"></line>
                                    <line x1="6" x2="6" y1="20" y2="16"></line>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold azubi-text-green mb-1">
                                    Match Scores
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Detailed scoring across demand, salary, growth,
                                    and work-life balance
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
                                    Salary Expectations
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Expected salary ranges for each recommended sector
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
                                    Career Growth
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Long-term career advancement potential in each
                                    sector
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
                                    Action Steps
                                </h4>
                                <p class="text-sm azubi-text-green/70">
                                    Personalized next steps to pursue your top sector
                                    matches
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
                    Sector matching uses a weighted algorithm considering your
                    profile, German labor market demand, and sector-specific
                    requirements for 2026.
                </p>
            </div>
        </div>
    </div>
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
                        Find Your Perfect Sector Match
                    </h2>
                    <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                        Discover live Ausbildung positions in sectors that align
                        with your skills and interests. Browse opportunities
                        from verified German employers.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="#"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                            Jobs</a><a href="#top"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Compare
                            Sectors</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="bg-card border border-border rounded-lg p-6 md:p-8">
        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-6">
            Frequently Asked Questions
        </h3>
        <div class="space-y-4">
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">What is the difference between Ausbildung sectors in
                        Germany?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Ausbildung sectors in Germany represent different
                        vocational training pathways, each with unique
                        characteristics, requirements, and career outcomes. The
                        six main sectors are: **IT &amp; Software Development**
                        focuses on programming, system administration, and
                        digital innovation with 3-year training and high
                        future-proof scores (98/100). These programs offer
                        excellent starting salaries (€2,800-3,500) and
                        exceptional career growth potential. **Healthcare &amp;
                        Nursing** addresses Germany&#x27;s critical shortage of
                        medical professionals with 3-year programs offering the
                        highest stipends (€1,100-1,500) and near-perfect job
                        security (98% demand score). This sector requires B2
                        German but offers 50,000+ annual job openings.
                        **Engineering &amp; Manufacturing** represents
                        Germany&#x27;s industrial backbone with 3.5-year
                        programs in mechatronics, industrial mechanics, and
                        technical design. These roles offer strong salaries
                        (€2,900-3,400 starting) and excellent career
                        progression, particularly with companies like BMW,
                        Mercedes, and Bosch. **Business &amp; Administration**
                        provides versatile office-based careers in management,
                        banking, and corporate operations. While offering lower
                        stipends (€800-1,200), these roles provide excellent
                        work-life balance (80/100) and 100% geographic
                        flexibility. **Hospitality &amp; Gastronomy** focuses on
                        culinary arts and hotel management with creative
                        opportunities (80/100 creativity score) and strong
                        demand (88% demand score), though with lower starting
                        salaries (€2,200-2,700) and challenging work hours.
                        **Logistics &amp; Transport** addresses Germany&#x27;s
                        booming e-commerce and supply chain needs with 18,000
                        annual openings. These roles offer moderate salaries
                        (€2,400-2,900) and complete geographic flexibility
                        across Germany.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Which Ausbildung sector has the highest salary
                        potential?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        IT &amp; Software Development offers the highest
                        long-term salary potential among all Ausbildung sectors
                        in Germany. Here&#x27;s the comprehensive breakdown:
                        **Immediate Earnings (Training Phase):** Healthcare
                        leads with €1,100-1,500 monthly stipends, followed by IT
                        (€900-1,400) and Engineering (€950-1,300). **Starting
                        Salary (Post-Training):** IT tops the list at
                        €2,800-3,500/month, closely followed by Engineering at
                        €2,900-3,400/month. Healthcare starts at
                        €2,700-3,200/month. **5-Year Salary Projection:** IT
                        professionals earn €3,800-5,000/month after 5 years,
                        with Engineering close behind at €3,800-4,500/month.
                        This represents 35-43% salary growth. **10-Year Career
                        Peak:** IT professionals can reach €4,800-6,500/month
                        after 10 years, the highest across all sectors.
                        Engineering follows at €4,800-5,800/month, and
                        Healthcare at €4,200-4,800/month. **Total 5-Year
                        Earnings:** When calculating total earnings including
                        training stipends, IT sectors deliver approximately
                        €180,000-210,000 over 5 years, followed closely by
                        Engineering at €175,000-200,000. **Career Ceiling
                        Factors:** IT also offers the highest advancement
                        potential - with opportunities to specialize in cloud
                        architecture, cybersecurity, or AI/ML, salaries can
                        exceed €7,000/month with 15+ years experience. Business
                        certifications (AWS, Azure, or specialized programming)
                        can further boost earnings by 20-30%. **Important
                        Note:** While Healthcare has lower absolute salaries,
                        its job security (98% demand score, 50,000 annual
                        openings) and recession-resilience (99% future-proof
                        score) make it financially competitive when considering
                        lifetime career stability. Engineering offers the best
                        balance of immediate high earnings and job security.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Which sectors are most in-demand in Germany for
                        2026?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Based on 2026 labor market projections, demand varies
                        significantly across Ausbildung sectors: **Highest
                        Demand - Healthcare &amp; Nursing (98% demand score,
                        50,000 openings):** Germany faces an unprecedented
                        healthcare worker shortage due to an aging population
                        and retiring workforce. The government has prioritized
                        recruiting 100,000+ healthcare workers by 2030, making
                        this the most secure sector with guaranteed job
                        placement. Every qualified nurse receives multiple job
                        offers even before completing training. **Very High
                        Demand - IT &amp; Software Development (95% demand
                        score, 15,000 openings):** Digital transformation across
                        all industries creates insatiable demand for IT
                        professionals. Sectors from automotive (smart vehicles)
                        to finance (fintech) to manufacturing (Industry 4.0)
                        compete for qualified Fachinformatiker graduates. Remote
                        work opportunities add further flexibility. **High
                        Demand - Engineering &amp; Manufacturing (92% demand
                        score, 25,000 openings):** As Europe&#x27;s industrial
                        leader, Germany&#x27;s automotive, machinery, and
                        precision engineering sectors continuously seek skilled
                        mechatronics and industrial mechanics. The transition to
                        electric vehicles and sustainable manufacturing
                        intensifies this demand. **High Demand - Logistics &amp;
                        Transport (90% demand score, 18,000 openings):**
                        E-commerce growth and supply chain modernization drive
                        strong demand for logistics specialists. Amazon, DHL,
                        and Deutsche Post aggressively recruit, with particular
                        shortages in warehouse automation and freight
                        management. **Solid Demand - Hospitality &amp;
                        Gastronomy (88% demand score, 20,000 openings):**
                        Post-pandemic recovery and tourism rebound create
                        consistent opportunities, particularly in major cities.
                        However, work conditions (irregular hours, physical
                        demands) create turnover, maintaining high openings.
                        **Moderate Demand - Business &amp; Administration (75%
                        demand score, 30,000 openings):** While many positions
                        exist, competition is higher due to lower entry barriers
                        and higher automation risk (45%). Specializations in
                        digital business management or international trade offer
                        better prospects. **Recommendation:** If job security is
                        your top priority, Healthcare offers unmatched
                        stability. For long-term career growth, IT provides the
                        best combination of demand, salary potential, and
                        future-proofing.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Can I switch between Ausbildung sectors after starting
                        training?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Yes, sector switching is possible but involves
                        significant considerations and proper planning: **Within
                        First 6 Months (Probation Period):** Most Ausbildung
                        contracts include a 1-6 month probation where either
                        party can terminate with minimal notice. Switching
                        during this period is legally straightforward but may
                        complicate visa status for international students. You
                        must secure a new training contract before terminating
                        the current one to maintain legal residence. **After
                        Probation (6+ months into training):** Switching becomes
                        more complex but remains possible. You&#x27;ll need to:
                        1. Find a company willing to accept you mid-training in
                        the new sector 2. Potentially restart training from year
                        1 (though some credits may transfer for related sectors)
                        3. Obtain approval from your current employer (good
                        relations help) 4. Update your residence permit to
                        reflect the new training position **Credit Transfer
                        Possibilities:** Related sectors may recognize prior
                        training: - IT ↔ Digital Media Design: Up to 12 months
                        credit possible - Healthcare ↔ Physiotherapy: 6-12
                        months potential credit - Engineering ↔ Industrial
                        Mechanics: Significant skill overlap allows 6-18 months
                        credit - Business sectors (Banking ↔ Office Management):
                        Up to 12 months credit **Visa Implications:**
                        International students must maintain continuous legal
                        status. The gap between ending one Ausbildung and
                        starting another cannot exceed 3 months without risking
                        residence permit cancellation. Always secure the new
                        position before resigning from the current one.
                        **Financial Impact:** Switching means potentially
                        restarting salary progression. If you&#x27;re in year 2
                        earning €1,200/month and switch to a new sector,
                        you&#x27;ll restart at year 1 wages (€800-1,000/month),
                        representing €200-400/month income loss. **Strategic
                        Switching:** Some strategic combinations enhance
                        careers: - Complete IT Ausbildung → Switch to Duales
                        Studium for Bachelor&#x27;s degree - Complete Business
                        Ausbildung → Switch to specialized IT training (career
                        pivot) - Complete Healthcare MFA → Upgrade to
                        Pflegefachmann training (advancement) **Best Practice:**
                        Before switching, schedule consultation with the IHK
                        (Chamber of Commerce) or HWK (Chamber of Crafts) to
                        understand credit transfer options and ensure a smooth
                        transition. Speak with your current employer first -
                        some may accommodate internal sector transfers.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Do I need perfect German for all Ausbildung
                        sectors?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        No, German language requirements vary significantly by
                        sector, and &quot;perfect&quot; German (C2 level) is
                        never azubi-required for Ausbildung. Here&#x27;s the detailed
                        breakdown: **B1 German Required (Most Accessible):** -
                        IT &amp; Software Development - Engineering &amp;
                        Manufacturing - Logistics &amp; Transport - Hospitality
                        &amp; Gastronomy At B1 level, you can handle everyday
                        work conversations, understand technical instructions,
                        and participate in team meetings. Many IT and
                        engineering roles involve working with international
                        teams where English is common, making B1 German
                        sufficient for workplace success. You&#x27;ll continue
                        improving German naturally through daily work immersion.
                        **B2 German Required (Higher Language Demand):** -
                        Healthcare &amp; Nursing (mandatory for patient
                        communication and medical documentation) - Business
                        &amp; Administration (frequent client interaction and
                        complex correspondence) B2 represents upper-intermediate
                        proficiency where you can understand complex texts,
                        express yourself fluently, and handle professional
                        communication confidently. Healthcare particularly
                        requires B2 because patient safety depends on precise
                        communication about symptoms, medications, and treatment
                        plans. **Practical Language Expectations:** -
                        **Vocational School:** Technical vocabulary is taught
                        during training, so entering with subject-specific
                        terminology isn&#x27;t expected. However, you must
                        understand classroom instruction at your sector&#x27;s
                        azubi-required level. - **Workplace Communication:**
                        Colleagues understand you&#x27;re learning and will
                        support language development. Technical jargon in IT,
                        engineering, and logistics often uses English terms
                        anyway (e.g., &quot;server,&quot; &quot;debugging,&quot;
                        &quot;logistics chain&quot;). - **Written
                        Documentation:** Most sectors require basic written
                        German for reports, but templates and examples are
                        provided during training. **Language Learning
                        Timeline:** - A1 → B1: 6-12 months with intensive
                        courses (600-800 hours instruction) - B1 → B2: 4-8
                        months with focused study (400-600 hours) - **Cost:**
                        Intensive German courses in Germany: €300-800/month for
                        20 hours/week instruction **Acceleration Strategies:**
                        1. **Language + Ausbildung Preparation Programs:**
                        Combined courses teach German while introducing
                        vocational vocabulary (available through Goethe-Institut
                        and VHS) 2. **Company-Sponsored Language Training:**
                        Some larger employers (SAP, Siemens, Deutsche Telekom)
                        offer pre-Ausbildung language programs with guaranteed
                        training contracts upon reaching B1 3. **Sector-Specific
                        German Courses:** &quot;German for Healthcare,&quot;
                        &quot;Technical German,&quot; and &quot;Business
                        German&quot; courses accelerate sector-relevant language
                        skills **Reality Check:** Many successful Ausbildung
                        graduates started at A2 level and reached B1 within 6
                        months while working. Your German will improve
                        dramatically during training through daily immersion.
                        Don&#x27;t let current language level discourage you -
                        focus on reaching the minimum requirement and commit to
                        continuous improvement. **Recommendation:** If
                        you&#x27;re at A2, invest 6-9 months in intensive German
                        before starting Ausbildung applications. Use this time
                        to also research sectors and companies. By application
                        time, you&#x27;ll have both azubi-required language skills and
                        clear career direction.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Which Ausbildung sector is best for international
                        students?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        The &quot;best&quot; sector depends on your profile, but
                        IT &amp; Software Development and Healthcare &amp;
                        Nursing are generally most favorable for international
                        students: **IT &amp; Software Development - Best for
                        Tech-Oriented Students:** **Advantages:** - Only B1
                        German azubi-required (achievable in 6-12 months) -
                        International work culture with common English usage in
                        technical contexts - Highest salary potential
                        (€2,800-3,500 starting, €4,800-6,500 at 10 years) -
                        Excellent work-life balance (85/100) with flexible hours
                        - Remote work opportunities post-training (60% of IT
                        roles offer hybrid/remote) - Strong visa pathways: EU
                        Blue Card eligibility after training, PR in 21 months,
                        citizenship in 3 years - Low physical demands suit most
                        candidates - High future-proof score (98/100) -
                        automation-resistant skills **Considerations:** -
                        Requires genuine interest in technology and
                        problem-solving - Continuous learning expected (new
                        frameworks, languages, tools) - Medium stress during
                        project deadlines **Healthcare &amp; Nursing - Best for
                        People-Oriented Students:** **Advantages:** - Highest
                        demand (50,000 openings) = guaranteed job placement -
                        Excellent stipends during training (€1,100-1,500) =
                        minimal financial stress - Near-perfect job security
                        (98% demand score, 99% future-proof) - Critical shortage
                        = strong visa support from employers - Multiple job
                        offers before graduation - International qualifications
                        recognized - easier to relocate globally later - 100%
                        geographic flexibility across Germany - Deeply rewarding
                        work helping people (100/100 helping score)
                        **Considerations:** - B2 German azubi-required (additional 4-8
                        months language study) - High physical demands
                        (standing, lifting, night shifts) - Emotionally
                        challenging (patient suffering, death) - Lower work-life
                        balance (60/100) - irregular shifts - Moderate salary
                        ceiling compared to IT (€4,200-4,800 at 10 years)
                        **Other Viable Options:** **Engineering &amp;
                        Manufacturing:** - Best for hands-on learners who enjoy
                        building/fixing - Strong employer support (BMW, Bosch,
                        Siemens have structured international programs) -
                        Excellent salary potential (€2,900-3,400 starting) -
                        Only B1 German azubi-required - **Challenge:** Higher physical
                        demands, may require relocation to industrial cities
                        **Business &amp; Administration:** - Best for extroverts
                        with strong communication skills - Excellent work-life
                        balance (80/100) - B2 German azubi-required + cultural
                        understanding crucial - **Challenge:** Higher automation
                        risk (45%), moderate salary growth **Decision
                        Framework:** 1. **Prioritize Immediate Job Security:**
                        Healthcare 2. **Maximize Long-term Earnings:** IT 3.
                        **Balance Multiple Factors:** IT (if tech-inclined) or
                        Engineering (if hands-on) 4. **Fastest Path to PR:**
                        Healthcare or IT (both critical shortage occupations)
                        **Reality Check for International Students:** Consider
                        practical factors beyond sector choice: - **Living
                        Costs:** €1,250/month average - ensure stipend + savings
                        cover this - **Visa Confidence:** Healthcare and IT have
                        highest approval rates due to critical shortages -
                        **Cultural Integration:** IT&#x27;s international
                        culture may ease transition; Healthcare requires deeper
                        German integration - **Long-term Settlement:** Both IT
                        and Healthcare offer fastest PR pathways (21-33 months)
                        **Recommendation:** If you&#x27;re undecided, invest in
                        IT. The combination of moderate language requirements,
                        excellent earning potential, work-life balance, and
                        future-proofing makes it the most versatile choice for
                        most international students. If you&#x27;re passionate
                        about helping others and don&#x27;t mind physical work,
                        Healthcare offers unmatched security and fulfillment.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">What if I&#x27;m not sure about my skills or
                        interests?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Uncertainty about skills and interests is completely
                        normal - most applicants share this concern. Here&#x27;s
                        a structured approach to gain clarity: **Immediate
                        Action - Skills Discovery (Month 1):** **1. Online
                        Skills Assessments (Free):** - **Make-it-in-Germany
                        Skills Check:** Official German government tool that
                        assesses technical aptitude, people skills, and sector
                        preferences (30 minutes, available in English) - **O*NET
                        Interest Profiler:** Scientific career interest
                        assessment used by professional counselors (20 minutes)
                        - **CliftonStrengths Assessment:** Identifies your
                        natural talents and how they apply to different work
                        environments **2. Practical Experiments:** - **IT
                        Testing:** Complete free online coding courses
                        (Codecademy, freeCodeCamp) - if you enjoy 2-3 hours of
                        learning, IT may suit you - **Healthcare Testing:**
                        Volunteer at local hospitals or elderly care homes - if
                        patient interaction energizes rather than drains you,
                        explore healthcare - **Engineering Testing:** Take on
                        DIY repair projects or build something (Arduino kit,
                        furniture assembly) - enjoyment indicates hands-on
                        aptitude - **Business Testing:** Organize a small event
                        or manage a project - if coordination and communication
                        feel natural, consider business sectors **3.
                        Informational Interviews:** Contact 3-5 people currently
                        in Ausbildung (LinkedIn, Facebook groups like
                        &quot;Ausbildung in Germany for International
                        Students&quot;). Ask: - What&#x27;s a typical day like?
                        - What surprised you most about your sector? - What
                        skills matter most for success? - What do you wish you
                        knew before starting? **Structured Discovery -
                        Orientation Programs (Months 2-3):** **1.
                        Einstiegsqualifizierung (EQ) - Paid Sector
                        Exploration:** 6-12 month pre-Ausbildung internships
                        where companies pay €300-500/month while you explore a
                        sector hands-on. If you&#x27;re unsure, EQ in 2-3
                        different sectors (3-4 months each) clarifies
                        preferences before committing to full Ausbildung. Many
                        EQ participants receive direct Ausbildung offers from
                        host companies. **2. Berufsorientierung Programs:** Many
                        cities offer 4-8 week career orientation programs for
                        internationals, combining: - German language (B1 level)
                        - Sector workshops (try IT, healthcare, engineering
                        through short projects) - Company visits and job
                        shadowing - Application training **Cost:** Often free or
                        low-cost (€100-300) through Arbeitsagentur or
                        integration programs **3. Probearbeiten (Trial Work
                        Days):** German companies routinely offer 1-3 day trial
                        work experiences. Contact 5-10 companies across
                        different sectors requesting &quot;Schnuppertag&quot;
                        (trial day). Experience multiple environments before
                        deciding. **Skills Gap Analysis (Month 3-4):** Once you
                        identify 2-3 potential sectors, assess your readiness:
                        **For IT:** - Can you solve logical puzzles? (Try
                        Project Euler problems) - Do you enjoy learning new
                        systems? (Install Linux, set up a website) - **Gap:**
                        Weak math/logic → Complete Khan Academy computer science
                        fundamentals **For Healthcare:** - Are you comfortable
                        with bodily functions? (Blood, vomit, bathroom
                        assistance) - Can you handle emotional situations?
                        (Practice active listening with friends) - **Gap:** Weak
                        people skills → Volunteer in social services for 2-3
                        months **For Engineering:** - Do you enjoy understanding
                        how things work? (Disassemble and reassemble
                        electronics) - Are you comfortable with physical work?
                        (Can you stand/work with hands for 4-6 hours?) -
                        **Gap:** Weak technical knowledge → Take free mechanical
                        engineering MOOCs **For Business:** - Do you enjoy
                        organizing and coordinating? (Plan events, manage
                        schedules) - Are you comfortable in client-facing roles?
                        (Retail/service experience helps) - **Gap:** Weak
                        communication → Join Toastmasters or similar speaking
                        groups **Decision Framework - Apply When:** - You can
                        articulate why you&#x27;re interested in the sector
                        (beyond &quot;good salary&quot;) - You&#x27;ve spent 10+
                        hours experiencing sector activities (coursework,
                        volunteering, trial days) - Your skills assessment shows
                        60%+ match in azubi-required competencies - You feel more
                        excited than anxious about the work (some nerves are
                        normal) **What If I&#x27;m Still Unsure?**
                        **Conservative Path:** Start with versatile sectors
                        offering easier pivots: - **Business Administration** →
                        Can transition to IT, logistics, or specialized business
                        sectors - **IT** → Can pivot to digital marketing, data
                        analysis, or business technology **Exploratory Path:**
                        Begin with shorter commitments: - **6-month Language
                        Course + Internships** → Explore 2-3 sectors before
                        formal Ausbildung - **Duales Studium** → Combines
                        academic study with practical training, offering broader
                        career options **Red Flags to Address Before Starting:**
                        - &quot;I&#x27;m choosing this only for
                        visa/salary&quot; → Reconsider; 3+ years in wrong field
                        damages mental health and career - &quot;I hate the work
                        but can tolerate it&quot; → You&#x27;ll struggle to
                        complete training; find a sector you genuinely enjoy -
                        &quot;Everyone recommends it, but I&#x27;m not
                        interested&quot; → Trust your instincts over
                        others&#x27; advice **Remember:** 20-30% of Ausbildung
                        students switch sectors or careers within 5 years -
                        it&#x27;s not a permanent life sentence. Starting with
                        an imperfect choice and adjusting later is better than
                        indefinite delay waiting for perfect clarity. Take 2-3
                        months for structured exploration, then commit to a
                        choice and give it genuine effort. You can always pivot
                        later with new knowledge.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">How long does Ausbildung training take in each
                        sector?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Ausbildung duration varies by sector, with training
                        ranging from 3 to 3.5 years. Here&#x27;s the complete
                        breakdown including what happens during each phase:
                        **3-Year Programs (36 months) - Most Common:** **IT
                        &amp; Software Development:** - **Duration:** 36 months
                        (3 years) - **Structure:** Dual system - 3-4 days/week
                        at company, 1-2 days at vocational school - **Phase 1
                        (Months 1-12):** Foundation - basics of programming,
                        systems, databases, company operations - **Phase 2
                        (Months 13-24):** Specialization - focus on chosen path
                        (application development, system integration, or
                        cybersecurity) - **Phase 3 (Months 25-36):** Advanced
                        projects - independent project work, preparation for
                        final examination - **Final Exam (IHK):** Written
                        (programming, theory) + Practical (real project
                        presentation) **Healthcare &amp; Nursing:** -
                        **Duration:** 36 months - **Structure:** Block system -
                        alternating weeks/months between hospital practice and
                        nursing school - **Phase 1 (Months 1-12):** Basic care -
                        patient hygiene, mobility assistance, vital signs
                        monitoring, medical terminology - **Phase 2 (Months
                        13-24):** Specialized care - department rotations
                        (surgery, pediatrics, geriatrics, emergency), medication
                        administration, wound care - **Phase 3 (Months 25-36):**
                        Advanced practice - night shifts, complex patient cases,
                        leadership training, exam preparation - **Final Exam
                        (State Certification):** Written (theory) + Practical
                        (patient care demonstration) + Oral defense **Business
                        &amp; Administration:** - **Duration:** 36 months -
                        **Structure:** Full-time at company (4-5 days) + 1-2
                        days vocational school - **Phase 1:** Office basics -
                        correspondence, scheduling, basic accounting, customer
                        service - **Phase 2:** Specialization - project
                        management, controlling, HR tasks, or specific industry
                        focus - **Phase 3:** Advanced responsibilities -
                        independent project management, mentoring new trainees -
                        **Final Exam (IHK):** Written (business processes,
                        economics) + Practical case study **Hospitality &amp;
                        Gastronomy:** - **Duration:** 36 months - **Structure:**
                        Full-time at establishment (5-6 days including weekends)
                        + block vocational school (3-4 week intensive blocks) -
                        **Phase 1:** Kitchen basics - food preparation, hygiene,
                        basic cooking techniques, ingredient knowledge - **Phase
                        2:** Specialization - advanced cooking, menu planning,
                        cost calculation, team coordination - **Phase 3:**
                        Master level - independent station management, creative
                        menu development, exam preparation - **Final Exam
                        (IHK/HWK):** Written (theory) + Practical (3-4 hour
                        cooking examination with menu creation) **Logistics
                        &amp; Transport:** - **Duration:** 36 months -
                        **Structure:** Full-time at warehouse/company +
                        vocational school (1-2 days/week) - **Phase 1:**
                        Warehouse basics - inventory management, order picking,
                        forklift certification, shipping documents - **Phase
                        2:** Process optimization - supply chain understanding,
                        transportation planning, customs procedures - **Phase
                        3:** Management level - process improvement, team
                        coordination, technology implementation - **Final Exam
                        (IHK):** Written + Practical (warehouse processes
                        demonstration) **3.5-Year Programs (42 months) -
                        Extended Training:** **Engineering &amp;
                        Manufacturing:** - **Duration:** 42 months (3.5 years) -
                        **Why Longer:** Complex mechanical and electronic
                        systems require additional training time.
                        Safety-critical work demands thorough preparation. -
                        **Structure:** 3-4 days at workshop/factory + 1-2 days
                        vocational school - **Phase 1 (Months 1-12):**
                        Foundations - metal working, technical drawing, basic
                        electronics, workplace safety - **Phase 2 (Months
                        13-18):** Intermediate certification (Part 1 exam) -
                        **Phase 3 (Months 19-30):** Advanced systems -
                        pneumatics, hydraulics, CNC programming, PLC control -
                        **Phase 4 (Months 31-42):** Specialization - Choose
                        focus (maintenance, production, automation), complex
                        project work - **Final Exam (IHK Part 2):** Written
                        (technical theory) + Practical (8-14 hour project
                        creating/repairing complex machinery) **Time Commitment
                        Breakdown:** - **Weekly Hours During Training:** 35-40
                        hours (company + school) - **Vacation Days:** 25-30 days
                        per year - **Overtime:** Rare during training;
                        compensated with time off if occurs **Total Time to
                        Employment:** Including preparation time before
                        starting: - **German Language:** 6-12 months (A1→B1) or
                        10-18 months (A1→B2) - **Application Process:** 3-6
                        months (applications, interviews, contract) - **Visa
                        Processing:** 2-4 months - **Ausbildung Training:**
                        36-42 months - **Total:** 4-6 years from starting German
                        to completing Ausbildung **Early Completion Possible:**
                        High-performing trainees can apply to shorten Ausbildung
                        by 6-12 months. Requirements: - Excellent grades
                        (average 2.0 or better) - Company agreement - IHK
                        approval **Reality:** Only 10-15% of trainees qualify
                        and choose early completion **What If I Don&#x27;t Pass
                        Final Exams?** - **First Attempt Failure:** Repeat exam
                        after 3-6 months (no additional training cost) -
                        **Second Attempt:** Another 3-6 months study period -
                        **Success Rate:** 85-90% pass on first attempt, 95%+
                        pass by second attempt **Planning Timeline for 2026
                        Start:** - **Now - Month 3:** Intensive German + sector
                        research - **Months 4-6:** Applications + interviews -
                        **Months 7-9:** Visa processing - **September 2026:**
                        Ausbildung start - **August/September 2029 (or 2030):**
                        Ausbildung completion + certification **Pro Tip:** Some
                        students find 3-3.5 years feels long compared to shorter
                        university programs or bootcamps. However, remember
                        you&#x27;re **earning money** throughout training
                        (€900-1,500/month stipends), gaining practical
                        experience, and receiving job offers before graduation -
                        advantages that offset the longer duration
                        significantly.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Which Ausbildung sectors have the best work-life
                        balance?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Work-life balance varies dramatically across Ausbildung
                        sectors, with scores ranging from 50/100 to 85/100.
                        Here&#x27;s the comprehensive ranking with realistic
                        expectations: **Best Work-Life Balance (80-85/100):**
                        **1. IT &amp; Software Development (85/100):** -
                        **Weekly Hours:** 35-40 hours, mostly Monday-Friday
                        9am-5pm or 10am-6pm - **Flexibility:** High - many
                        companies offer flextime (start between 7-10am) and
                        occasional remote work even during training -
                        **Overtime:** Minimal during training; when projects
                        demand it post-training, compensated with time off -
                        **Weekends:** Almost always free; emergency on-call rare
                        for entry-level - **Stress Level:** Moderate - deadlines
                        create occasional pressure, but structured work
                        environment - **Time for Personal Life:** Excellent -
                        evenings and weekends consistently available for
                        hobbies, relationships, social activities - **Why It
                        Works:** Office-based, predictable schedule, rarely
                        involves emergency work, increasing flexibility
                        post-training **2. Business &amp; Administration
                        (80/100):** - **Weekly Hours:** 35-40 hours, standard
                        office hours (8am-5pm typical) - **Flexibility:**
                        Moderate-High - some flextime available, work-from-home
                        possible 1-2 days/week post-training - **Overtime:**
                        Occasional during month-end closing or project
                        deadlines, usually compensated - **Weekends:** Free
                        except rare events (trade shows, conferences) - **Stress
                        Level:** Moderate - deadline pressure but predictable
                        workflow - **Time for Personal Life:** Very good - can
                        plan personal activities reliably - **Why It Works:**
                        Office environment, traditional business hours, minimal
                        emergency situations **Moderate Work-Life Balance
                        (65-75/100):** **3. Engineering &amp; Manufacturing
                        (75/100):** - **Weekly Hours:** 35-40 hours, typically
                        7am-4pm or 6am-3pm (early start, early finish) -
                        **Flexibility:** Low-Moderate - shift-based work in
                        production; more flexibility in planning/design roles -
                        **Overtime:** Occasional for urgent repairs or
                        production deadlines - **Weekends:** Usually free, but
                        some facilities operate Saturday morning shifts -
                        **Stress Level:** Moderate - responsibility for
                        expensive machinery and safety-critical work - **Time
                        for Personal Life:** Good - early finish times mean
                        afternoons free, but less schedule flexibility - **Why
                        It Works:** Early finish compensates for fixed schedule;
                        physically tiring work means you&#x27;ll want evenings
                        to rest **4. Logistics &amp; Transport (65/100):** -
                        **Weekly Hours:** 38-42 hours, shifts vary (early
                        morning, late evening, or night shifts common) -
                        **Flexibility:** Low - warehouse operations run 24/7,
                        requiring shift coverage - **Overtime:** Frequent during
                        peak seasons (Christmas, summer sales) - **Weekends:**
                        One weekend day work is common, especially in e-commerce
                        logistics - **Stress Level:** Moderate-High -
                        time-sensitive deliveries, physical demands - **Time for
                        Personal Life:** Moderate - shift work disrupts social
                        activities; difficult to maintain consistent routines -
                        **Why It Works:** Some people prefer early/late shifts
                        to avoid traffic; premium pay for weekend/night work
                        **Challenging Work-Life Balance (50-60/100):** **5.
                        Hospitality &amp; Gastronomy (50/100):** - **Weekly
                        Hours:** 40-48 hours, including split shifts (morning
                        setup + evening service) - **Flexibility:** Very Low -
                        service hours dictated by customer demand (evenings,
                        weekends, holidays are busiest) - **Overtime:** Frequent
                        and often unpaid (cultural expectation in hospitality) -
                        **Weekends:** Required work - weekends are peak business
                        hours; days off typically Tuesday-Wednesday - **Stress
                        Level:** High - fast-paced environment, customer
                        pressure, heat, standing all day - **Time for Personal
                        Life:** Difficult - social life suffers as you work when
                        friends/family socialize; dating challenges due to
                        evening/weekend work - **Why It&#x27;s Challenging:**
                        Anti-social hours, split shifts break up the day,
                        physical exhaustion, high-pressure environments - **Who
                        Thrives:** People who don&#x27;t mind working
                        evenings/weekends, prefer Tuesday-Wednesday off, enjoy
                        fast-paced environments, have partners also in
                        hospitality **6. Healthcare &amp; Nursing (60/100):** -
                        **Weekly Hours:** 38.5-40 hours, rotating shifts (early
                        6am-2pm, late 2pm-10pm, night 10pm-6am) -
                        **Flexibility:** Very Low - patient care requires 24/7
                        coverage, schedules set monthly - **Overtime:** Very
                        frequent - shift overruns when patient situations arise,
                        obligatory emergency coverage - **Weekends:** Regular
                        weekend shifts (typically 2-3 weekends per month) -
                        **Holidays:** Must work some holidays (Christmas, New
                        Year&#x27;s) on rotation - **Stress Level:** High -
                        emotionally demanding, physical labor, life-or-death
                        responsibility - **Time for Personal Life:** Difficult
                        but manageable - irregular schedule disrupts routines;
                        night shifts particularly challenging for social life
                        and sleep quality - **Why It&#x27;s Challenging:** Shift
                        work (especially nights) damages sleep patterns and
                        health; unpredictable overruns; emotional weight of
                        patient suffering/death; holidays away from family -
                        **Who Thrives:** People who don&#x27;t mind irregular
                        schedules, can adapt sleep patterns, find fulfillment in
                        helping others outweighs schedule challenges, have
                        supportive partners/family **Factors Beyond Work
                        Hours:** **Commute Time:** Urban locations (IT,
                        Business) often mean shorter commutes; industrial sites
                        (Engineering) may require longer travel **Mental Load:**
                        IT and Business involve problem-solving but generally
                        end when you leave; Healthcare carries emotional weight
                        home **Physical Recovery:** Physical sectors
                        (Healthcare, Engineering, Hospitality, Logistics)
                        require evening recovery time, reducing
                        &quot;usable&quot; personal time **Schedule
                        Predictability:** Regular hours (IT, Business) allow
                        planning; rotating shifts (Healthcare, Hospitality)
                        disrupt routines **Career Stage Evolution:** - **During
                        Training:** Work-life balance generally better (learning
                        focus, less responsibility) - **Early Career:** Worst
                        period (proving yourself, taking extra shifts/projects)
                        - **Mid-Career:** Improves with seniority (more control
                        over schedule, higher salary allows outsourcing life
                        tasks) **Improving Work-Life Balance:** 1. **Negotiate
                        During Application:** Some companies (especially IT,
                        Business) promote work-life balance as recruiting
                        advantage 2. **Choose Company Size:** Larger
                        corporations (BMW, Siemens, SAP) tend to have better
                        enforced work-hour regulations than small businesses 3.
                        **Geographic Choice:** Berlin/Munich IT scene offers
                        better balance than smaller cities; healthcare balance
                        varies less by location 4. **Specialization Matters:**
                        Within IT, application development offers better balance
                        than system administration (fewer emergency calls)
                        **Bottom Line:** If work-life balance is a top priority,
                        choose IT or Business sectors. If you&#x27;re passionate
                        about Healthcare or Hospitality despite challenging
                        schedules, prepare mentally and build a support system.
                        Engineering and Logistics offer middle ground - some
                        schedule challenges but manageable with planning.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Are some Ausbildung sectors more future-proof than
                        others?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Yes, future-proofing varies dramatically across sectors,
                        ranging from 60/100 to 99/100. This assessment considers
                        automation risk, long-term demand trends, and adaptation
                        potential: **Highly Future-Proof (95-99/100):** **1.
                        Healthcare &amp; Nursing (99/100):** - **Automation
                        Risk:** Only 5% - human empathy, physical care, and
                        complex patient assessment cannot be automated -
                        **Long-term Demand:** Germany&#x27;s aging population
                        (25% over 65 by 2030) guarantees growing healthcare
                        demand for decades - **Technology Integration:**
                        Healthcare workers will use AI diagnostic tools and
                        robots for physical tasks, but human presence remains
                        essential - **Resilience:** Recession-proof - healthcare
                        demand continues regardless of economic conditions -
                        **20-Year Outlook:** Critical shortage will intensify;
                        every qualified nurse guaranteed employment until 2050+
                        - **Adaptation Required:** Learn to work alongside
                        medical AI, robotic assistants, telemedicine platforms
                        **2. IT &amp; Software Development (98/100):** -
                        **Automation Risk:** Only 15% - while routine coding can
                        be automated, complex system design, cybersecurity, and
                        AI development require human expertise - **Long-term
                        Demand:** Digital transformation, AI development,
                        cybersecurity threats ensure growing demand -
                        **Evolution:** Role shifts from routine programming to
                        AI/ML specialization, cloud architecture, cybersecurity
                        - **Resilience:** Slight economic sensitivity but tech
                        permeates all industries, ensuring demand - **20-Year
                        Outlook:** Skills require continuous updating but career
                        trajectory remains strong - **Adaptation Required:**
                        Embrace AI as tool (GitHub Copilot, AI code review),
                        specialize in AI-resistant areas (system architecture,
                        security, UX design) **Solid Future-Proofing
                        (85-92/100):** **3. Engineering &amp; Manufacturing
                        (85/100):** - **Automation Risk:** 25% - routine
                        assembly automated, but maintenance, optimization, and
                        complex problem-solving remain human domains -
                        **Long-term Demand:** Germany&#x27;s manufacturing
                        leadership ensures demand, but employment growth slows
                        as automation increases - **Evolution:** Shift from
                        manual work to supervising automated systems, robotics
                        maintenance, Industry 4.0 integration - **Resilience:**
                        Vulnerable to economic downturns and offshoring, but
                        Germany&#x27;s high-tech manufacturing (automotive,
                        machinery) remains domestic - **20-Year Outlook:** Good
                        careers for those adapting to smart manufacturing;
                        resistance to automation skills reduces opportunities -
                        **Adaptation Required:** Learn PLC programming,
                        robotics, IoT systems, data analysis **4. Logistics
                        &amp; Transport (60/100 - Moderate Risk):** -
                        **Automation Risk:** 50% - warehouse automation (Amazon
                        robots) and autonomous vehicles threaten routine
                        logistics roles - **Long-term Demand:** E-commerce
                        growth creates demand, but automation absorbs much of it
                        - **Evolution:** Roles shift from physical warehouse
                        work to managing automated systems, drone delivery
                        coordination, last-mile optimization - **Resilience:**
                        Vulnerable to economic downturns (people reduce
                        discretionary purchases) - **20-Year Outlook:**
                        Traditional warehouse/driving jobs decline 30-40%;
                        technology-focused logistics management roles grow -
                        **Adaptation Required:** Specialize in automation
                        systems, supply chain analytics, technology integration
                        (WMS, TMS platforms) **Moderate to High Risk
                        (65-75/100):** **5. Business &amp; Administration
                        (65/100):** - **Automation Risk:** 45% - Routine office
                        tasks (data entry, scheduling, basic accounting)
                        increasingly automated by AI - **Long-term Demand:**
                        Many admin roles consolidated or eliminated; specialized
                        roles (project management, strategic planning) remain
                        strong - **Evolution:** Generalist admin roles decline;
                        specialists in change management, process optimization,
                        digital transformation thrive - **Resilience:**
                        Vulnerable to economic downturns (first roles cut during
                        recessions) - **20-Year Outlook:** Entry-level admin
                        positions reduced 30-50%; mid-senior specialized roles
                        remain stable - **Adaptation Required:** Specialize
                        early (project management, data analysis, digital
                        marketing), embrace AI tools, develop soft skills
                        (communication, negotiation, leadership) **6.
                        Hospitality &amp; Gastronomy (70/100):** - **Automation
                        Risk:** 30% - Cooking and service automation possible
                        (robot kitchens, self-service kiosks) but high-end
                        hospitality remains human - **Long-term Demand:**
                        Budget/mid-range hospitality faces automation; luxury
                        hospitality and unique culinary experiences remain
                        human-centric - **Evolution:** Fast food/chain
                        restaurants automate; artisanal restaurants and
                        high-touch hospitality experiences grow -
                        **Resilience:** Vulnerable to economic downturns
                        (discretionary spending reduces first) - **20-Year
                        Outlook:** Bifurcation - commodity hospitality shrinks,
                        specialized/luxury hospitality thrives - **Adaptation
                        Required:** Develop unique culinary style, master
                        customer experience design, specialize in high-end or
                        niche cuisines **Future-Proofing Strategies:** **1.
                        Continuous Learning:** - **Healthcare:** Master new
                        medical technologies, telemedicine, electronic health
                        records - **IT:** Stay current with emerging
                        technologies (AI/ML, blockchain, quantum computing) -
                        **Engineering:** Embrace Industry 4.0 (IoT, robotics,
                        predictive maintenance) **2. Specialization:** -
                        **General Skills = Higher Risk:** Routine tasks
                        automated first - **Specialized Expertise = Lower
                        Risk:** Deep expertise in niche areas resists automation
                        Example: General office assistant (high risk) vs.
                        Sustainability reporting specialist (low risk) **3.
                        Human-Centric Skills:** Focus on skills AI cannot
                        replicate: - Empathy and emotional intelligence (crucial
                        in healthcare, hospitality) - Creative problem-solving
                        (IT system design, culinary innovation) - Complex
                        negotiation and persuasion (business, sales) - Ethical
                        judgment and values-based decisions **4. Technology
                        Adoption:** Don&#x27;t resist automation - embrace it as
                        tool: - IT professionals using AI coding assistants
                        remain relevant; those refusing fall behind - Healthcare
                        workers using diagnostic AI enhance capabilities;
                        resisters get replaced - Business professionals
                        leveraging automation for data analysis add value;
                        manual processors become obsolete **5. Geographic and
                        Sector Mobility:** Build transferable skills allowing
                        pivots: - IT skills transfer to any industry requiring
                        technology - Healthcare skills recognized
                        internationally (easier emigration if needed) - Business
                        skills adaptable across sectors **Red Flags - High
                        Automation Risk Roles:** - Pure data entry or routine
                        document processing - Manual warehouse sorting/packing
                        (being automated by robots) - Basic bookkeeping (AI
                        accounting software increasingly capable) - Routine
                        transport/delivery (autonomous vehicles coming) - Fast
                        food kitchen work (robot cooking systems emerging)
                        **Bottom Line:** For maximum future-proofing, choose
                        Healthcare or IT. Healthcare offers job security
                        regardless of economic conditions or technology changes.
                        IT offers highest adaptability - skills transfer across
                        all industries embracing digital transformation.
                        Engineering provides solid middle ground for hands-on
                        workers, while Business/Logistics/Hospitality require
                        proactive specialization and continuous adaptation to
                        maintain relevance. **20-Year Career Outlook:** Someone
                        starting IT or Healthcare Ausbildung in 2026 can
                        confidently expect strong career opportunities through
                        2050. Business/Logistics workers must plan for 1-2 major
                        skill upgrades or specializations over their career.
                        Hospitality workers should aim for unique expertise or
                        entrepreneurship (own restaurant/hotel) for long-term
                        security.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Can I do Ausbildung if I&#x27;m over 25 years
                        old?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        Yes, absolutely! There&#x27;s no legal age limit for
                        Ausbildung in Germany, and 25+ applicants are
                        increasingly common. However, practical considerations
                        differ from younger applicants: **Official Policy:** -
                        **No Maximum Age:** German law doesn&#x27;t restrict
                        Ausbildung by age - **Typical Range:** While most
                        trainees are 16-25, roughly 15-20% of new Ausbildung
                        starts are 25+ - **Older Trainees:** People aged 30, 35,
                        even 40+ successfully complete Ausbildung - particularly
                        common in career changers **Age-Specific Advantages:**
                        **1. Professional Maturity:** - Companies increasingly
                        value older trainees&#x27; work ethic, reliability, and
                        professionalism - Previous work experience makes you
                        more attractive to employers - Better workplace
                        communication and conflict resolution skills - Stronger
                        intrinsic motivation (you chose this path deliberately
                        vs. 18-year-olds following parents&#x27; advice) **2.
                        Faster Learning:** - Life experience helps contextualize
                        technical training - Better study habits and time
                        management from previous education/work - More focused
                        learning (know your goals, less distracted than
                        teenagers) **3. Company Benefits:** - Some employers
                        specifically seek 25+ candidates to avoid typical
                        teenage workplace issues - &quot;Experienced
                        trainee&quot; programs at large corporations (BMW,
                        Siemens, Deutsche Telekom) target career changers -
                        Higher retention - companies know you&#x27;re less
                        likely to drop out mid-training **Age-Related Challenges
                        &amp; Solutions:** **1. Lower Stipend Despite Age:** -
                        **Challenge:** You earn the same apprentice stipend
                        (€800-1,500/month) as 18-year-olds, despite potentially
                        having family obligations, previous higher salary
                        expectations - **Solution:** - Budget carefully - ensure
                        €1,250/month living costs covered by stipend + savings -
                        Some companies offer age-supplements (€100-300/month
                        extra) for 25+ trainees - Partner income or savings from
                        previous work cushion financial gap - Wohngeld (housing
                        assistance) available if you meet low-income thresholds
                        **2. Social Age Gap:** - **Challenge:** Vocational
                        school classmates may be 16-20 years old; social
                        integration can feel awkward - **Solution:** - Focus on
                        workplace relationships (colleagues span all ages) -
                        Many vocational schools offer separate classes or
                        evening programs for career changers - Connect with
                        other mature trainees through forums/Facebook groups -
                        Embrace mentoring younger classmates (teachers
                        appreciate mature students&#x27; leadership) **3. Visa
                        and Financial Proof:** - **Challenge:** For
                        international students over 30, embassies scrutinize
                        applications more carefully (why Ausbildung vs.
                        higher-level work?) - **Solution:** - Prepare compelling
                        narrative explaining career change reasoning -
                        Demonstrate clear career plan showing how Ausbildung
                        leads to specific German employment - Provide stronger
                        financial proof (€12,000-15,000 blocked account vs.
                        standard €11,208) - Consider shorter preparatory German
                        courses to show recent educational engagement **4.
                        Competing with Younger Applicants:** - **Challenge:**
                        Some employers prefer younger candidates (longer career
                        ahead with company, lower salary expectations long-term)
                        - **Solution:** - Target sectors with critical shortages
                        (Healthcare, IT, Engineering) where age matters less -
                        Emphasize transferable skills from previous career -
                        Apply to companies with explicit
                        diversity/career-changer programs - Highlight maturity
                        advantages (responsibility, commitment, professional
                        communication) **5. Family Obligations:** -
                        **Challenge:** 25+ applicants more likely to have
                        children or partners; balancing training demands with
                        family - **Solution:** - Choose sectors with better
                        work-life balance (IT, Business) over shift work
                        (Healthcare, Hospitality) - Discuss family situation
                        during application - some companies offer flexibility -
                        Germany has excellent childcare support (Kindergarten
                        from age 1, full-day schooling) - Partner support
                        crucial - ensure alignment before committing
                        **Age-Appropriate Sector Choices:** **Best Sectors for
                        25+ Applicants:** **1. IT &amp; Software Development:**
                        - **Why:** Career changers extremely common; tech
                        industry values skills over age - **Age Distribution:**
                        20-30% of IT trainees are 25+ - **Advantage:** Previous
                        work experience often transferable (project management,
                        customer service, communication) - **Company Examples:**
                        SAP, Capgemini, and startups actively recruit career
                        changers **2. Healthcare &amp; Nursing:** - **Why:**
                        Critical shortage means employers welcome candidates of
                        any age - **Age Distribution:** 25-35% of healthcare
                        trainees are 25+; many 30-40 year olds - **Advantage:**
                        Life experience and maturity highly valued in patient
                        care - **Company Examples:** Charité Berlin, university
                        hospitals specifically recruit mature candidates **3.
                        Business &amp; Administration:** - **Why:** Previous
                        work experience makes you more attractive than school
                        leavers - **Age Distribution:** 15-20% are 25+ -
                        **Advantage:** Professional workplace behavior and
                        business understanding from prior work **Less Ideal for
                        25+:** - **Hospitality/Logistics:** Physically
                        demanding; harder on older bodies; lower stipends strain
                        finances - **Engineering:** Some roles prefer younger
                        candidates due to physical demands **Age-Specific
                        Application Strategies:** **1. Address Age Proactively
                        in Cover Letter:** Don&#x27;t ignore it - frame it as
                        advantage: &quot;At 28, I bring five years of customer
                        service experience, which has strengthened my
                        communication skills and professional reliability.
                        I&#x27;m specifically drawn to IT Ausbildung because
                        [specific reason], and my maturity ensures committed
                        completion of the 3-year program.&quot; **2. Leverage
                        Previous Experience:** - Previous IT work (even
                        non-technical) → IT Ausbildung - Healthcare volunteering
                        → Nursing Ausbildung - Project coordination → Business
                        Administration Ausbildung Show clear narrative
                        connecting past experience to chosen Ausbildung **3.
                        Target Career-Changer Programs:** Many companies
                        explicitly recruit career changers: -
                        &quot;Quereinsteiger Ausbildung&quot; (career-changer
                        training) - &quot;Zweite Chance&quot; (second chance)
                        programs - Search for &quot;Ausbildung für
                        Erwachsene&quot; (training for adults) **4. Consider
                        Partial Qualification Recognition:** If you have prior
                        relevant education/experience: - IT degree from home
                        country → Potentially shorten IT Ausbildung by 6-12
                        months - Medical background → Apply for advanced entry
                        into healthcare training - Request
                        &quot;Verkürzung&quot; (shortening) evaluation from
                        IHK/HWK **5. Hybrid Pathway - Duales Studium:** If you
                        already have Bachelor&#x27;s degree, consider
                        &quot;Duales Studium&quot; instead of Ausbildung: -
                        Combines company work with university Master&#x27;s
                        degree - Higher stipend (€1,200-1,800) - Better aligns
                        with 25+ profile (higher qualification, better salary
                        potential) - Available in IT, Engineering, Business
                        **Real Success Stories:** - 32-year-old Moroccan software
                        tester → Fachinformatiker Ausbildung → Now DevOps
                        Engineer at BMW (€4,500/month) - 29-year-old Moroccan
                        teacher → Pflegefachfrau Ausbildung → Registered nurse
                        in Hamburg (€3,800/month + family reunification) -
                        27-year-old Moroccan business manager →
                        Industriekaufmann Ausbildung → Supply chain manager at
                        Bosch (€4,200/month) **Bottom Line:** Being 25+ is not a
                        barrier - it&#x27;s often an advantage if you frame it
                        correctly. Focus on sectors with shortages (Healthcare,
                        IT), emphasize your maturity and prior experience, and
                        ensure financial preparedness for lower training wages.
                        The average 25+ Ausbildung trainee has **higher**
                        completion rates and better job placement than average
                        18-year-olds, so companies should see your age as asset,
                        not liability.
                    </div>
                </div>
            </div>
            <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                <button
                    class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                    aria-expanded="false">
                    <span class="font-semibold text-foreground pr-4">Which sector has the most job openings right
                        now?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                        As of 2026, job openings vary dramatically by sector,
                        with Healthcare dominating at 50,000 annual openings -
                        more than double any other sector. Here&#x27;s the
                        comprehensive ranking and what the numbers actually
                        mean: **Rankings by Absolute Job Openings (2026 Data):**
                        **1. Healthcare &amp; Nursing - 50,000 openings (98%
                        demand score):** - **Reality:** Every single qualified
                        healthcare worker receives 3-5 job offers before
                        graduation - **Why So High:** Aging population +
                        retiring workforce + expanding healthcare services -
                        **Geographic Distribution:** Opportunities exist in
                        every German city and rural area - truly nationwide
                        demand - **Specific Shortages:** Registered nurses
                        (Pflegefachmann/frau) have 30,000+ openings alone;
                        Medical assistants 12,000+; Physiotherapists 8,000+ -
                        **Competition:** Very low - more positions than
                        qualified candidates - **Job Security:**
                        Near-guaranteed; even average performers have multiple
                        options - **Contracts:** Many offers include signing
                        bonuses (€2,000-5,000), relocation assistance, and
                        guaranteed full-time employment **2. Business &amp;
                        Administration - 30,000 openings (75% demand score):** -
                        **Reality:** While many openings exist, competition is
                        also highest here - **Why So Many:** Every company needs
                        administrative staff; broad category includes banking,
                        office management, HR, accounting - **Geographic
                        Distribution:** Concentrated in major business centers
                        (Frankfurt, Munich, Hamburg, Berlin, Cologne) -
                        **Specific Opportunities:** Industrial business managers
                        (12,000), Office administrators (10,000), Bank
                        specialists (5,000), Tax advisors (3,000) -
                        **Competition:** Moderate-High - typically 5-15
                        applicants per position - **Job Security:** Moderate -
                        economic downturns affect admin hiring first - **Reality
                        Check:** &quot;30,000 openings&quot; sounds great, but
                        with 40,000+ applications, it&#x27;s actually the most
                        competitive sector per opening **3. Engineering &amp;
                        Manufacturing - 25,000 openings (92% demand score):** -
                        **Reality:** Strong demand with manageable competition
                        (2-4 applicants per position) - **Why High:**
                        Germany&#x27;s manufacturing strength requires
                        continuous skilled labor replacement - **Geographic
                        Distribution:** Concentrated in industrial regions
                        (Stuttgart, Munich, Wolfsburg, Cologne, Ruhr Valley) -
                        **Specific Shortages:** Mechatronics (8,000), Industrial
                        mechanics (7,000), Tool makers (5,000), Electronics
                        technicians (5,000) - **Competition:** Low-Moderate -
                        employers often struggle to fill positions - **Job
                        Security:** High - manufacturing remains core German
                        economy - **Challenge:** Often requires relocation to
                        industrial cities **4. Hospitality &amp; Gastronomy -
                        20,000 openings (88% demand score):** - **Reality:**
                        High turnover creates continuous openings, but also
                        signals difficult working conditions - **Why So Many:**
                        Tourism recovery + chronic staff shortage due to
                        demanding work conditions - **Geographic Distribution:**
                        Major tourist/business cities (Munich, Berlin, Hamburg,
                        Frankfurt) + resort areas - **Specific Opportunities:**
                        Chefs/cooks (10,000), Hotel specialists (6,000),
                        Restaurant service (4,000) - **Competition:** Very Low -
                        employers desperate for candidates - **Job Security:**
                        Moderate - vulnerable to economic downturns and tourism
                        fluctuations - **Reality Check:** &quot;Easy to
                        get&quot; reflects challenging work environment
                        (evenings, weekends, physical demands, lower pay)
                        creating high turnover **5. Logistics &amp; Transport -
                        18,000 openings (90% demand score):** - **Reality:**
                        E-commerce boom creates strong steady demand, but
                        automation looming - **Why High:** Amazon, DHL, and
                        online retail expansion require warehouse and delivery
                        staff - **Geographic Distribution:** Logistics hubs
                        (Frankfurt airport, Hamburg port, Cologne, Leipzig) +
                        major cities - **Specific Opportunities:** Warehouse
                        specialists (10,000), Freight forwarding (5,000),
                        Professional drivers (3,000) - **Competition:** Low -
                        physically demanding work and shift schedules reduce
                        applicant pool - **Job Security:** Moderate - strong now
                        but automation risk in 5-10 years - **Note:** Many
                        positions offer immediate hire due to chronic shortages
                        **6. IT &amp; Software Development - 15,000 openings
                        (95% demand score):** - **Reality:** Highest demand
                        score with &quot;only&quot; 15,000 openings creates
                        perfect supply-demand balance - **Why Lower Absolute
                        Number:** Smaller sector overall; high skill
                        requirements reduce eligible applicant pool -
                        **Geographic Distribution:** Tech hubs (Berlin, Munich,
                        Frankfurt, Hamburg, Stuttgart) - **Specific
                        Opportunities:** Application developers (8,000), System
                        integrators (4,000), Digital media (2,000),
                        Cybersecurity (1,000) - **Competition:** Moderate - 3-5
                        qualified applicants per position (but many unqualified
                        applications) - **Job Security:** Excellent - every
                        industry needs IT expertise - **Salary Premium:** Lowest
                        opening count but highest salaries compensate
                        **Understanding What &quot;Job Openings&quot; Actually
                        Means:** **Openings vs. Real Opportunity:** - **High
                        Openings + High Demand = Best Opportunity:** Healthcare
                        (50,000 openings, 98% demand) = Golden opportunity -
                        **High Openings + Moderate Demand = Competitive:**
                        Business (30,000 openings, 75% demand) = Many
                        competitors for each spot - **Lower Openings + High
                        Demand = Selective:** IT (15,000 openings, 95% demand) =
                        Need qualifications but strong prospects once qualified
                        **Application Success Rates by Sector:** -
                        **Healthcare:** 60-70% of applicants receive training
                        contracts (shortage favors applicants) - **IT:** 40-50%
                        of qualified applicants successful (must demonstrate
                        genuine interest/aptitude) - **Engineering:** 45-55%
                        success rate (physical capability and technical interest
                        azubi-required) - **Logistics:** 50-60% success (physical
                        fitness and shift flexibility main requirements) -
                        **Hospitality:** 55-65% success (willingness to work
                        evenings/weekends main criterion) - **Business:** 25-35%
                        success (highest competition due to perceived
                        &quot;easy&quot; work) **Openings by Company Size:**
                        **Large Corporations (1,000+ employees):** - Offer ~30%
                        of total openings (well-structured training, better pay,
                        stronger benefits) - More competitive (3-8 applicants
                        per position) - Examples: BMW, Siemens, SAP, Deutsche
                        Bank, Charité Hospital **SMEs (Small-Medium Enterprises,
                        50-1,000 employees):** - Offer ~50% of total openings
                        (backbone of German training system) - Moderate
                        competition (2-4 applicants per position) - More
                        personal training environment, direct exposure to
                        company operations **Small Businesses (&lt;50
                        employees):** - Offer ~20% of openings (family
                        businesses, local companies) - Less competition (often
                        1-2 applicants per position) - Variable training quality
                        (some excellent hands-on, others less structured)
                        **Geographic Variations:** **Major Cities (Berlin,
                        Munich, Hamburg, Frankfurt):** - Highest absolute
                        openings but also highest competition - IT and Business
                        opportunities concentrated here - Cost of living higher
                        (€1,400-1,800/month) **Industrial Regions (Stuttgart,
                        Wolfsburg, Cologne):** - Engineering and Manufacturing
                        dominate - Lower competition, lower living costs - May
                        require relocation for optimal opportunities **Rural
                        Areas:** - Healthcare opportunities everywhere
                        (hospitals, care homes in every town) - Limited
                        IT/Business options (remote work possibilities emerging)
                        - Significantly lower living costs (€900-1,200/month)
                        **Seasonal Variations:** - **September/October:** Peak
                        hiring for following year&#x27;s Ausbildung starting
                        September - **March-May:** Second wave for remaining
                        unfilled positions - **Healthcare:** Year-round hiring
                        (positions available anytime due to chronic shortage)
                        **Bottom Line for Application Strategy:** **If Your
                        Primary Goal is Easiest Job Placement:** 1.
                        **Healthcare** - Highest openings + highest demand =
                        lowest competition 2. **Logistics** - Many openings, few
                        applicants (physical work deterrent creates
                        opportunities) 3. **Hospitality** - Always hiring (high
                        turnover means continuous opportunities) **If Your
                        Primary Goal is Best Career (Not Just Easy Placement):**
                        1. **IT** - Lower openings but best salary,
                        future-proofing, work-life balance 2. **Healthcare** -
                        Guaranteed placement + strong job security + meaningful
                        work 3. **Engineering** - Good placement chances +
                        excellent salaries + stable careers **Strategic
                        Application Approach:** Don&#x27;t just chase highest
                        openings number. Instead, consider: - **Openings ÷
                        Demand Score = True Opportunity**: Healthcare (50,000 ÷
                        98 = 510), IT (15,000 ÷ 95 = 158), Business (30,000 ÷ 75
                        = 400) - Healthcare and IT offer best ratios; Business
                        lower than it appears **Application Timeline for Maximum
                        Success:** - **Now - Month 4:** Research sectors,
                        prepare German language - **Month 4-7:** Apply to 10-15
                        companies (focus on sectors matching your profile) -
                        **Month 7-10:** Interviews and contracts - **September
                        2026:** Ausbildung start Apply to multiple sectors
                        simultaneously - having options allows choosing best fit
                        rather than accepting only available offer.
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
                href="#">
                <div class="mb-4">
                    <div class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-graduation-cap w-6 h-6 azubi-text-orange group-hover:text-white transition-colors">
                            <path
                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                            </path>
                            <path d="M22 10v6"></path>
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-bold azubi-text-green mb-2 group-hover:azubi-text-orange transition-colors">
                    Ausbildung vs University
                </h3>
                <p class="text-sm azubi-text-green/70 leading-relaxed mb-4">
                    Compare Ausbildung and university pathways to find your
                    best fit
                </p>
                <div class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
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
                href="#">
                <div class="mb-4">
                    <div class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
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
                <div class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
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
                href="#">
                <div class="mb-4">
                    <div class="inline-flex p-3 rounded-xl azubi-bg-orange/10 group-hover:azubi-bg-orange transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
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
                <div class="flex items-center gap-2 azubi-text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                    <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
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
                href="#">Browse All Tools<svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg></a>
        </div>
    </section>
    </div>
    </main>
    </div>
    </main>
@endsection
