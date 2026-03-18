@extends('frontoffice.layouts.app')

@section('title', 'Career Pathway Decision Tool | Azubi')

@section('meta')
    <meta name="description"
        content="AI-powered career guidance to help you choose the right vocational training path in Germany based on your interests, skills, and goals.">
    <meta property="og:title" content="Career Pathway Decision Tool | AI-Powered Ausbildung Career Guide">
    <meta property="og:description"
        content="Find your ideal Ausbildung career path in Germany. Our AI analyzes your interests, skills, and goals to recommend the best vocational training programs. Free tool - instant results.">
    <meta name="keywords"
        content="career pathway decision,ausbildung career guide,vocational training germany,which ausbildung should i choose,career aptitude test germany,ausbildung career test,german apprenticeship finder,career guidance ausbildung">
@endsection

@section('content')
    <header class="bg-card border-b border-border py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <a class="inline-flex items-center mb-6 group" href="{{ route('front.tools') }}">
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-green-light/5 hover:text-foreground h-10 px-6 text-sm gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left h-4 w-4 transition-transform group-hover:-translate-x-1"
                        aria-hidden="true">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>Back to Tools
                </button>
            </a>
            <div class="flex items-start gap-4 md:gap-6">
                <div class="p-3 md:p-4 rounded-xl bg-orange/10 flex-shrink-0" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-compass h-8 w-8 md:h-10 md:w-10 text-orange">
                        <path
                            d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z">
                        </path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                            Career Guidance</div>
                    </div>
                    <h1 class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-secondary mb-3">Career Pathway
                        Decision Tool</h1>
                    <p class="text-base md:text-lg text-muted-foreground max-w-3xl">AI-powered career guidance to help you
                        choose the right vocational training path in Germany based on your interests, skills, and goals.</p>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-4xl mx-auto">
            <article>
                <div class="rounded-xl border bg-card text-card-foreground shadow w-full max-w-3xl mx-auto bg-white">
                    <div class="p-6 md:p-8">
                        <!-- Progress Bar (visible during questions) -->
                        <div id="progress-bar" class="mb-6 hidden">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-muted-foreground">Question <span id="current-question">1</span> of
                                    7</span>
                                <span class="text-sm text-muted-foreground"><span id="progress-percent">0</span>%
                                    complete</span>
                            </div>
                            <div class="w-full bg-secondary/20 rounded-full h-2">
                                <div id="progress-fill" class="bg-primary h-2 rounded-full transition-all duration-300"
                                    style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- Step Container -->
                        <div id="wizard-container">
                            <!-- Step 0: Welcome -->
                            <div id="step-0" class="wizard-step">
                                <div class="text-center py-8">
                                    <div class="mb-6 flex justify-center">
                                        <img src="{{ asset('assets/_next/mascot_welcomingfad6.jpeg') }}"
                                            alt="Young Oak mascot welcoming you to find your career path" width="200"
                                            height="200" class="animate-float-slow" />
                                    </div>
                                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">Find Your
                                        Optimal Career Path</h2>
                                    <p class="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">Answer a few questions
                                        about your current situation, and we'll recommend the best pathway for your career
                                        transition in Germany.</p>
                                    <div class="grid md:grid-cols-3 gap-4 mb-8 max-w-2xl mx-auto">
                                        <div class="flex flex-col items-center p-4 rounded-lg bg-white border">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="h-8 w-8 text-primary mb-2">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            <h3 class="tracking-tight font-bold text-lg text-secondary mb-1">Personalized
                                            </h3>
                                            <p class="text-sm text-muted-foreground">Tailored to your unique situation</p>
                                        </div>
                                        <div class="flex flex-col items-center p-4 rounded-lg bg-white border">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="h-8 w-8 text-primary mb-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <h3 class="tracking-tight font-bold text-lg text-secondary mb-1">Quick</h3>
                                            <p class="text-sm text-muted-foreground">Takes only 3-5 minutes</p>
                                        </div>
                                        <div class="flex flex-col items-center p-4 rounded-lg bg-white border">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-8 w-8 text-primary mb-2">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <h3 class="tracking-tight font-bold text-lg text-secondary mb-1">Actionable
                                            </h3>
                                            <p class="text-sm text-muted-foreground">Clear next steps provided</p>
                                        </div>
                                    </div>
                                    <button onclick="nextStep()"
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">
                                        Start Assessment
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                            <path
                                                d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z">
                                            </path>
                                            <circle cx="12" cy="12" r="10"></circle>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 1: Reason for Change -->
                            <div id="step-1" class="wizard-step hidden">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-2">What's
                                            your main reason for considering a change?</h2>
                                        <p class="text-muted-foreground">Understanding your motivation helps us recommend
                                            the most suitable pathway.</p>
                                    </div>
                                    <div class="space-y-3" id="reason-options">
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('reasonForChange','company-issues', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Company or workplace issues</div>
                                                <div class="text-sm text-muted-foreground mt-1">Problems with current
                                                    employer, but happy with the profession</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('reasonForChange','wrong-career', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Wrong career choice</div>
                                                <div class="text-sm text-muted-foreground mt-1">The profession itself
                                                    doesn't match my interests or abilities</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('reasonForChange','higher-qualification', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Want higher qualification</div>
                                                <div class="text-sm text-muted-foreground mt-1">Seeking university degree
                                                    or advanced certification</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('reasonForChange','personal-circumstances', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Personal circumstances changed</div>
                                                <div class="text-sm text-muted-foreground mt-1">Family, health, location,
                                                    or financial situation changed</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('reasonForChange','better-opportunities', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Better opportunities available</div>
                                                <div class="text-sm text-muted-foreground mt-1">Found more promising career
                                                    path or industry</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2 p-4 bg-beige rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                        </svg>
                                        <p class="text-sm text-primary">Your reason for change significantly impacts the
                                            recommended pathway and timeline.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Training Progress -->
                            <div id="step-2" class="wizard-step hidden">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-2">How
                                            much of your current training have you completed?</h2>
                                        <p class="text-muted-foreground">This helps determine credit transfer possibilities
                                            and optimal timing.</p>
                                    </div>
                                    <div id="training-progress-display" class="p-4 rounded-lg bg-white border hidden">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-sm font-medium">Training Progress</span>
                                            <span class="text-sm text-muted-foreground"
                                                id="training-progress-value">0%</span>
                                        </div>
                                        <div class="w-full bg-secondary/20 rounded-full h-2">
                                            <div id="training-progress-bar"
                                                class="bg-primary h-2 rounded-full transition-all duration-300"
                                                style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div class="space-y-3" id="training-options">
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('trainingProgress','not-started', this, 0)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Haven't started yet</div>
                                                <div class="text-sm text-muted-foreground mt-1">Still planning to begin
                                                    Ausbildung</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('trainingProgress','probation', this, 10)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">In probation period (first 4 months)</div>
                                                <div class="text-sm text-muted-foreground mt-1">Simplified termination
                                                    possible</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('trainingProgress','less-than-25', this, 25)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Less than 25% complete</div>
                                                <div class="text-sm text-muted-foreground mt-1">6 months to 1 year
                                                    completed</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('trainingProgress','25-to-50', this, 40)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">25-50% complete</div>
                                                <div class="text-sm text-muted-foreground mt-1">1 to 1.5 years completed
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('trainingProgress','50-to-75', this, 65)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">50-75% complete</div>
                                                <div class="text-sm text-muted-foreground mt-1">1.5 to 2.5 years completed
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('trainingProgress','more-than-75', this, 85)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">More than 75% complete</div>
                                                <div class="text-sm text-muted-foreground mt-1">Final year of training
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2 p-4 bg-amber-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 text-amber-600 mt-0.5 flex-shrink-0">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <p class="text-sm text-amber-600">Completed modules can often be credited toward a
                                            new training program, especially within the same field.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Work Experience -->
                            <div id="step-3" class="wizard-step hidden">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-2">What's
                                            your work experience background?</h2>
                                        <p class="text-muted-foreground">Prior experience can qualify you for accelerated
                                            programs like Umschulung.</p>
                                    </div>
                                    <div class="space-y-3" id="experience-options">
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('workExperience','no-experience', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">No significant work experience</div>
                                                <div class="text-sm text-muted-foreground mt-1">Fresh graduate or limited
                                                    work history</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('workExperience','internships', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Internships or part-time work</div>
                                                <div class="text-sm text-muted-foreground mt-1">Some practical experience
                                                    but not full-time</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('workExperience','related-field', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Experience in related field</div>
                                                <div class="text-sm text-muted-foreground mt-1">1+ years in similar or
                                                    connected industry</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('workExperience','unrelated-field', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Experience in unrelated field</div>
                                                <div class="text-sm text-muted-foreground mt-1">1+ years but in different
                                                    industry</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('workExperience','extensive-experience', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Extensive work experience</div>
                                                <div class="text-sm text-muted-foreground mt-1">3+ years of professional
                                                    experience</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2 p-4 bg-beige rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 text-secondary mt-0.5 flex-shrink-0">
                                            <rect width="20" height="14" x="2" y="7" rx="2"
                                                ry="2"></rect>
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        </svg>
                                        <p class="text-sm text-secondary">Work experience can open doors to funded
                                            retraining programs (Umschulung) through the Agentur f&uuml;r Arbeit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4: Education Background -->
                            <div id="step-4" class="wizard-step hidden">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-2">What's
                                            your educational background?</h2>
                                        <p class="text-muted-foreground">Your qualifications determine eligibility for dual
                                            studies and certain programs.</p>
                                    </div>
                                    <div class="space-y-3" id="education-options">
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('educationBackground','hauptschule', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Hauptschulabschluss or equivalent</div>
                                                <div class="text-sm text-muted-foreground mt-1">Basic secondary education
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('educationBackground','realschule', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Mittlere Reife / Realschulabschluss</div>
                                                <div class="text-sm text-muted-foreground mt-1">Intermediate secondary
                                                    education</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('educationBackground','fachabitur', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Fachabitur / Fachhochschulreife</div>
                                                <div class="text-sm text-muted-foreground mt-1">Specialized university
                                                    entrance qualification</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('educationBackground','abitur', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Abitur / Allgemeine Hochschulreife</div>
                                                <div class="text-sm text-muted-foreground mt-1">General university entrance
                                                    qualification</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('educationBackground','foreign-qualification', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Foreign qualification</div>
                                                <div class="text-sm text-muted-foreground mt-1">International degree or
                                                    certificate</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('educationBackground','university-degree', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">University degree</div>
                                                <div class="text-sm text-muted-foreground mt-1">Bachelor's, Master's or
                                                    equivalent</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2 p-4 bg-beige rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                            <path d="M6 12v5c3 3 8 3 12 0v-5"></path>
                                        </svg>
                                        <p class="text-sm text-primary">Abitur or Fachabitur opens the door to dual study
                                            programs, combining academic degree with practical training.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 5: Financial Situation -->
                            <div id="step-5" class="wizard-step hidden">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-2">What's
                                            your financial situation?</h2>
                                        <p class="text-muted-foreground">Financial constraints affect pathway options and
                                            transition timing.</p>
                                    </div>
                                    <div class="space-y-3" id="financial-options">
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('financialSituation','need-continuous-income', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Need continuous income</div>
                                                <div class="text-sm text-muted-foreground mt-1">Cannot afford any gap in
                                                    monthly earnings</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('financialSituation','manage-with-bab', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Can manage with training allowance</div>
                                                <div class="text-sm text-muted-foreground mt-1">BAB/BAf&ouml;G
                                                    (&euro;600-822/month) is sufficient</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('financialSituation','have-savings', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Have savings buffer</div>
                                                <div class="text-sm text-muted-foreground mt-1">Can cover 3-6 months
                                                    without income</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('financialSituation','family-support', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Family support available</div>
                                                <div class="text-sm text-muted-foreground mt-1">Parents or partner can help
                                                    financially</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('financialSituation','flexible', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Financially flexible</div>
                                                <div class="text-sm text-muted-foreground mt-1">Multiple income sources or
                                                    substantial savings</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2 p-4 bg-beige rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M4 10h12"></path>
                                            <path d="M4 14h9"></path>
                                            <path
                                                d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2">
                                            </path>
                                        </svg>
                                        <p class="text-sm text-primary">Evening or part-time training allows you to
                                            maintain your current income while transitioning careers.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 6: German Language Level -->
                            <div id="step-6" class="wizard-step hidden">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-2">What's
                                            your German language level?</h2>
                                        <p class="text-muted-foreground">Language proficiency determines available sectors
                                            and program types.</p>
                                    </div>
                                    <div class="space-y-3" id="language-options">
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('germanLevel','a1-a2', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">A1-A2 (Basic)</div>
                                                <div class="text-sm text-muted-foreground mt-1">Simple communication, basic
                                                    instructions</div>
                                                <div class="text-xs text-primary mt-2">Available: Limited options - mainly
                                                    craft & logistics</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('germanLevel','b1', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">B1 (Intermediate)</div>
                                                <div class="text-sm text-muted-foreground mt-1">Workplace communication,
                                                    technical docs</div>
                                                <div class="text-xs text-primary mt-2">Available: Most technical & IT
                                                    positions</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('germanLevel','b2', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">B2 (Upper Intermediate)</div>
                                                <div class="text-sm text-muted-foreground mt-1">Complex communication,
                                                    report writing</div>
                                                <div class="text-xs text-primary mt-2">Available: Healthcare, customer
                                                    service, administration</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('germanLevel','c1', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">C1 (Advanced)</div>
                                                <div class="text-sm text-muted-foreground mt-1">Near-native proficiency,
                                                    academic writing</div>
                                                <div class="text-xs text-primary mt-2">Available: Management, legal,
                                                    university programs</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="selectRadio('germanLevel','native', this)">
                                            <div
                                                class="mt-1 w-4 h-4 rounded-full border-2 border-primary flex-shrink-0 flex items-center justify-center radio-circle">
                                            </div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Native German speaker</div>
                                                <div class="text-sm text-muted-foreground mt-1">Full professional
                                                    proficiency</div>
                                                <div class="text-xs text-primary mt-2">Available: All opportunities
                                                    available</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2 p-4 bg-beige rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                            <path d="m5 8 6 6"></path>
                                            <path d="m4 14 6-6 2-3"></path>
                                            <path d="M2 5h12"></path>
                                            <path d="M7 2h1"></path>
                                            <path d="m22 22-5-10-5 10"></path>
                                            <path d="M14 18h6"></path>
                                        </svg>
                                        <p class="text-sm text-primary">Free Berufssprachkurse (vocational language
                                            courses) can help you reach the required level for your chosen field.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 7: Priority Factors (multi-select) -->
                            <div id="step-7" class="wizard-step hidden">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-2">What
                                            are your top priorities?</h2>
                                        <p class="text-muted-foreground">Select all factors that are important for your
                                            career transition (choose at least 1).</p>
                                    </div>
                                    <div class="space-y-3" id="priority-options">
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('quick-completion', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-quick-completion"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Quick completion</div>
                                                <div class="text-sm text-muted-foreground mt-1">Minimize time to
                                                    qualification</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('financial-stability', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-financial-stability"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Financial stability</div>
                                                <div class="text-sm text-muted-foreground mt-1">Maintain steady income
                                                    throughout</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('career-growth', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-career-growth"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Career growth potential</div>
                                                <div class="text-sm text-muted-foreground mt-1">Long-term advancement
                                                    opportunities</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('visa-security', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-visa-security"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Visa security</div>
                                                <div class="text-sm text-muted-foreground mt-1">Protect residence status
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('work-life-balance', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-work-life-balance"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Work-life balance</div>
                                                <div class="text-sm text-muted-foreground mt-1">Manageable schedule and
                                                    stress</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('academic-degree', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-academic-degree"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Academic degree</div>
                                                <div class="text-sm text-muted-foreground mt-1">University qualification
                                                    desired</div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('industry-change', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-industry-change"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Industry change</div>
                                                <div class="text-sm text-muted-foreground mt-1">Switch to different sector
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3 p-4 rounded-lg border hover:bg-white transition-colors cursor-pointer"
                                            onclick="toggleCheckbox('location-flexibility', this)">
                                            <div class="mt-1 w-4 h-4 rounded border-2 border-primary flex-shrink-0 flex items-center justify-center checkbox-box"
                                                id="cb-location-flexibility"></div>
                                            <div class="flex-1 cursor-pointer">
                                                <div class="font-semibold">Location flexibility</div>
                                                <div class="text-sm text-muted-foreground mt-1">Ability to relocate or work
                                                    remotely</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="priority-count" class="p-4 bg-primary/5 rounded-lg hidden">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-4 w-4 text-primary">
                                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                            </svg>
                                            <span class="font-semibold text-sm">Selected Priorities: <span
                                                    id="priority-num">0</span></span>
                                        </div>
                                        <p class="text-sm text-muted-foreground">We'll recommend pathways that best match
                                            your selected priorities.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 8: Results -->
                            <div id="step-8" class="wizard-step hidden">
                                <div class="space-y-6" id="results-container"></div>
                            </div>
                        </div>

                        <!-- Navigation Buttons (visible during questions) -->
                        <div id="nav-buttons" class="flex items-center justify-between mt-8 hidden">
                            <button onclick="prevStep()" id="btn-prev"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                </svg>
                                Previous
                            </button>
                            <button onclick="nextStep()" id="btn-next"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"
                                disabled>
                                Next
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <link rel="stylesheet" href="{{ asset('assets/css/global-new-styles.css') }}">
    <div id="career-pathway-config" class="hidden"
        data-mascot-url="{{ asset('assets/_next/mascot_welcomingfad6.jpeg') }}" data-jobs-url="{{ route('front.jobs') }}"
        data-consultation-url="{{ route('front.consultation') }}"></div>
    <script src="{{ asset('assets/js/career-pathway-decision.js') }}"></script>
@endsection
