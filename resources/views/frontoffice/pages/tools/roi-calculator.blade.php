@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung ROI Calculator | Azubi')

@section('meta')
    <meta name="description"
        content="Calculate the financial benefits of German vocational training compared to other education options with 5-year projection.">
    <meta property="og:title" content="Ausbildung ROI Calculator | Azubi">
    <meta property="og:description"
        content="Calculate the financial benefits of German vocational training compared to other education options with 5-year projection.">
    <meta name="keywords"
        content="ausbildung roi calculator,vocational training germany cost,ausbildung investment,german apprenticeship salary,ausbildung stipend calculator,break even ausbildung">
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
                <div class="p-3 md:p-4 rounded-xl azubi-bg-orange/10 flex-shrink-0" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-euro h-8 w-8 md:h-10 md:w-10 azubi-text-orange">
                        <path d="M4 10h12"></path>
                        <path d="M4 14h9"></path>
                        <path d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                            Financial Planning</div>
                    </div>
                    <h1 class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-secondary mb-3">Ausbildung ROI
                        Calculator</h1>
                    <p class="text-base md:text-lg text-muted-foreground max-w-3xl">Calculate the financial benefits of
                        German vocational training compared to other education options with 5-year projection.</p>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">

            <!-- Info Banner -->
            <div class="text-card-foreground shadow p-6 rounded-2xl border-2 azubi-bg-cream azubi-border-beige mb-6">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl flex-shrink-0 azubi-bg-green azubi-text-cream">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-calculator h-6 w-6">
                            <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                            <line x1="8" x2="16" y1="6" y2="6"></line>
                            <line x1="16" x2="16" y1="14" y2="18"></line>
                            <path d="M16 10h.01"></path>
                            <path d="M12 10h.01"></path>
                            <path d="M8 10h.01"></path>
                            <path d="M12 14h.01"></path>
                            <path d="M8 14h.01"></path>
                            <path d="M12 18h.01"></path>
                            <path d="M8 18h.01"></path>
                        </svg>
                    </div>
                    <div class="flex-1 space-y-2">
                        <h2 class="text-xl font-semibold azubi-text-green">Calculate Your Ausbildung ROI</h2>
                        <p class="azubi-text-green/70 text-sm leading-relaxed">Discover the true financial benefits of German
                            vocational training. This calculator analyzes your total investment, monthly stipend earnings
                            (&euro;850-&euro;1,300), and post-training salary potential to show exactly when you'll break
                            even and your long-term financial gains compared to university education.</p>
                    </div>
                </div>
            </div>

            <!-- Input Form -->
            <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige mb-6">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold azubi-text-green mb-2">Enter Your Details</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Sector Select -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="sector">Ausbildung Sector
                            *</label>
                        <select id="sector"
                            class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
                            <option value="">Select a sector</option>
                            <option value="healthcare">Healthcare & Nursing</option>
                            <option value="it">IT & Software</option>
                            <option value="engineering">Engineering & Technical</option>
                            <option value="hospitality">Hospitality & Tourism</option>
                            <option value="logistics">Logistics & Transportation</option>
                            <option value="sales">Sales & Retail</option>
                            <option value="automotive">Automotive & Transportation</option>
                            <option value="construction">Construction & Trades</option>
                        </select>
                    </div>

                    <!-- Training Duration Slider -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="trainingDuration">Training
                            Duration (years)</label>
                        <p class="text-sm text-muted-foreground"><span id="duration-display">3</span> years</p>
                        <input type="range" id="trainingDuration" min="2" max="3.5" step="0.5"
                            value="3"
                            class="w-full h-2 azubi-bg-beige rounded-lg appearance-none cursor-pointer accent-primary">
                    </div>

                    <!-- Initial Investment Slider -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="initialCosts">Initial Investment
                            (&euro;)</label>
                        <p class="text-sm text-muted-foreground">Includes visa costs, flights, setup costs in Germany and
                            language preparation</p>
                        <div class="text-sm text-muted-foreground text-right"><span
                                id="initial-display">14,000</span>&euro;</div>
                        <input type="range" id="initialCosts" min="10000" max="20000" step="1000"
                            value="14000"
                            class="w-full h-2 azubi-bg-beige rounded-lg appearance-none cursor-pointer accent-primary">
                    </div>

                    <!-- Monthly Expenses Slider -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="monthlyExpenses">Monthly
                            Expenses (&euro;)</label>
                        <p class="text-sm text-muted-foreground">Includes rent, food, transportation, health insurance,
                            etc.</p>
                        <div class="text-sm text-muted-foreground text-right"><span id="expenses-display">750</span>&euro;
                        </div>
                        <input type="range" id="monthlyExpenses" min="600" max="1000" step="50"
                            value="750"
                            class="w-full h-2 azubi-bg-beige rounded-lg appearance-none cursor-pointer accent-primary">
                    </div>

                    <!-- German Level Select -->
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="germanLevel">Current German
                            Level</label>
                        <p class="text-sm text-muted-foreground">This affects language course costs in your initial
                            investment</p>
                        <select id="germanLevel"
                            class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
                            <option value="a1">A1 (Basic)</option>
                            <option value="none">No knowledge</option>
                            <option value="a2">A2 (Elementary)</option>
                            <option value="b1">B1 or higher (Intermediate)</option>
                        </select>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="space-y-4 mt-8">
                    <div class="flex gap-4">
                        <button onclick="calculateROI()" id="btn-calculate"
                            class="flex-1 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 azubi-bg-orange hover:azubi-bg-orange/90 text-white h-11 px-8"
                            disabled>
                            Calculate ROI
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="ml-2 h-4 w-4">
                                <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                <line x1="8" x2="16" y1="6" y2="6"></line>
                                <line x1="16" x2="16" y1="14" y2="18"></line>
                                <path d="M16 10h.01"></path>
                                <path d="M12 10h.01"></path>
                                <path d="M8 10h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M8 14h.01"></path>
                                <path d="M12 18h.01"></path>
                                <path d="M8 18h.01"></path>
                            </svg>
                        </button>
                        <button onclick="resetCalculator()" id="btn-reset"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-4 hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4">
                                <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                                <path d="M21 3v5h-5"></path>
                                <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                                <path d="M8 16H3v5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Results Section (hidden initially) -->
            <div id="results-section" class="hidden">
                <div class="text-card-foreground shadow p-8 rounded-2xl border-2 azubi-bg-cream azubi-border-beige mb-6">
                    <div class="mb-6">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="p-2 rounded-lg azubi-bg-green/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 azubi-text-green">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold azubi-text-green">Your ROI Analysis</h2>
                        </div>
                    </div>

                    <!-- Mascot -->
                    <div class="flex justify-center mb-8" aria-hidden="true">
                        <img src="{{ asset('assets/images/mascots/welcoming-3.jpeg') }}"
                            alt="Young Oak mascot celebrating your ROI results" width="150" height="150"
                            class="animate-float-slow" />
                    </div>

                    <!-- Row 1: 2 cards -->
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3" id="card-investment">
                            <div class="p-2 rounded-lg azubi-bg-beige flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-orange">
                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Initial Investment</p>
                                <p class="text-xl font-bold text-secondary" id="result-investment">-</p>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3 azubi-border-green/20"
                            id="card-stipend">
                            <div class="p-2 rounded-lg azubi-bg-green/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-green">
                                    <path d="M4 10h12"></path>
                                    <path d="M4 14h9"></path>
                                    <path
                                        d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Total Stipend</p>
                                <p class="text-xl font-bold azubi-text-green" id="result-stipend">-</p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: 2 cards -->
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3" id="card-monthly">
                            <div class="p-2 rounded-lg azubi-bg-green/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-green">
                                    <path
                                        d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Monthly Balance</p>
                                <p class="text-xl font-bold" id="result-monthly">-</p>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3" id="card-after">
                            <div class="p-2 rounded-lg azubi-bg-green/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-green">
                                    <path
                                        d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">After Training</p>
                                <p class="text-xl font-bold" id="result-after">-</p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: 3 cards -->
                    <div class="grid md:grid-cols-3 gap-4 mb-6">
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3 azubi-border-orange/20">
                            <div class="p-2 rounded-lg azubi-bg-orange/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-orange">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Time to ROI</p>
                                <p class="text-xl font-bold azubi-text-orange" id="result-time">-</p>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3 azubi-border-green/20">
                            <div class="p-2 rounded-lg azubi-bg-green/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-green">
                                    <path d="M4 10h12"></path>
                                    <path d="M4 14h9"></path>
                                    <path
                                        d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Starting Salary</p>
                                <p class="text-xl font-bold azubi-text-green" id="result-salary">-</p>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3 azubi-border-green/20">
                            <div class="p-2 rounded-lg azubi-bg-green/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-green">
                                    <path
                                        d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">5-Year Earnings</p>
                                <p class="text-xl font-bold azubi-text-green" id="result-5year">-</p>
                            </div>
                        </div>
                    </div>

                    <!-- Disclaimer -->
                    <div class="text-sm text-muted-foreground p-4 bg-muted rounded-lg flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-4 w-4 mt-0.5 shrink-0">
                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                            <path d="M12 9v4"></path>
                            <path d="M12 17h.01"></path>
                        </svg>
                        <p>These calculations are estimates based on average values. Actual figures may vary based on
                            location, company, and personal circumstances.</p>
                    </div>
                </div>
            </div>

            <!-- How It Works (shown when no results) -->
            <div id="how-it-works" class="mb-6">
                <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige">
                    <h2 class="text-2xl font-bold azubi-text-green mb-2">How to Use the ROI Calculator</h2>
                    <p class="azubi-text-green/70 mb-8">Calculate your return on investment for Ausbildung vs home country
                        career. Compare earnings, costs, and long-term financial benefits.</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 azubi-border-beige">
                            <div class="p-3 rounded-xl azubi-bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 azubi-text-green">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold azubi-text-green mb-2">Select Your Sector</h3>
                            <p class="text-sm azubi-text-green/70">Choose the Ausbildung sector that matches your career goals.
                                Different sectors offer different stipend ranges and post-training salaries.</p>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 azubi-border-beige">
                            <div class="p-3 rounded-xl azubi-bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 azubi-text-green">
                                    <path d="M12 20h9"></path>
                                    <path
                                        d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-bold azubi-text-green mb-2">Enter Your Details</h3>
                            <p class="text-sm azubi-text-green/70">Configure your training duration, initial costs, monthly
                                expenses, and current German level to get personalized calculations.</p>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 azubi-border-beige">
                            <div class="p-3 rounded-xl azubi-bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 azubi-text-green">
                                    <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                    <line x1="8" x2="16" y1="6" y2="6"></line>
                                    <line x1="16" x2="16" y1="14" y2="18"></line>
                                    <path d="M16 10h.01"></path>
                                    <path d="M12 10h.01"></path>
                                    <path d="M8 10h.01"></path>
                                    <path d="M12 14h.01"></path>
                                    <path d="M8 14h.01"></path>
                                    <path d="M12 18h.01"></path>
                                    <path d="M8 18h.01"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold azubi-text-green mb-2">Compare ROI Results</h3>
                            <p class="text-sm azubi-text-green/70">Review your complete financial breakdown including break-even
                                point, 5-year earnings projection, and monthly balance during training.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="text-card-foreground shadow rounded-2xl azubi-bg-cream border-2 azubi-border-beige mb-6 overflow-hidden">
                <div class="p-8 pb-4">
                    <h2 class="text-2xl font-bold azubi-text-green mb-2">Frequently Asked Questions</h2>
                </div>
                <div class="divide-y divide-beige" id="faq-container">
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">What is the Ausbildung ROI Calculator?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">The Ausbildung ROI
                            Calculator is a free financial planning tool that helps you calculate the Return on Investment
                            (ROI) for German vocational training programs. It analyzes total costs (blocked account, living
                            expenses, insurance, visa fees), training stipend earnings (typically
                            &euro;850-&euro;1,300/month), and post-training salary potential to determine how quickly your
                            investment pays back and your long-term financial gains.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">How much stipend will I earn during
                                Ausbildung?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Ausbildung stipend
                            (training salary) varies by sector and training year: Year 1: &euro;850-&euro;1,050/month, Year
                            2: &euro;950-&euro;1,150/month, Year 3: &euro;1,050-&euro;1,300/month. Healthcare and IT sectors
                            typically offer higher stipends (&euro;1,100-&euro;1,300 in Year 3), while hospitality may be
                            lower (&euro;850-&euro;1,000). Total earnings over 3 years typically range from &euro;33,000 to
                            &euro;42,000.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">What is the typical payback period for Ausbildung
                                investment?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">The payback period
                            typically ranges from 1-3 years after completing Ausbildung. For example, if you invest
                            &euro;25,000 total and earn a post-training salary of &euro;3,000/month (&euro;36,000/year),
                            with living costs of &euro;1,000/month (&euro;12,000/year), your annual savings are
                            &euro;24,000. Minus the &euro;33,000-&euro;42,000 you already earned during training, you often
                            break even within 1-2 years post-graduation.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">How does Ausbildung ROI compare to a university
                                degree?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Ausbildung
                            typically offers better short-term ROI than university: Ausbildung: 3 years, earn
                            &euro;33,000-&euro;42,000 during training, start work immediately, break even in 1-3 years.
                            University: 3-4 years, no earnings (or minimal part-time), higher total costs
                            (&euro;30,000-&euro;60,000), break even in 4-7 years. However, university may offer higher
                            long-term earnings in some fields.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">What salary can I expect after completing
                                Ausbildung?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Post-Ausbildung
                            salaries vary by sector: Healthcare (Nursing): &euro;2,800-&euro;3,500/month, IT & Technology:
                            &euro;3,000-&euro;4,000/month, Engineering: &euro;2,800-&euro;3,800/month, Business
                            Administration: &euro;2,500-&euro;3,200/month, Hospitality: &euro;2,200-&euro;2,800/month. With
                            experience (5-10 years), salaries can increase to &euro;3,500-&euro;5,500/month.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">What factors can improve my Ausbildung ROI?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">You can improve
                            your ROI by: (1) Choosing high-paying sectors (Healthcare, IT, Engineering), (2) Living in
                            affordable cities (Leipzig, Dresden vs Munich, Frankfurt), (3) Securing scholarships or company
                            sponsorships, (4) Working part-time (up to 20 hours/week) during training, (5) Minimizing
                            initial costs (shared housing, used furniture), (6) Completing language training in home country
                            (cheaper than in Germany), (7) Negotiating higher starting salary after training completion.
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="relative rounded-2xl overflow-hidden p-8 bg-gradient-to-br from-primary/10 to-orange/10 border">
                <div class="text-center max-w-2xl mx-auto">
                    <h3 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-3">Ready to Apply? Browse
                        Live Positions</h3>
                    <p class="text-muted-foreground mb-6">Explore verified job openings from German employers seeking
                        international talent. Start your Ausbildung journey today.</p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <a href="{{ route('front.jobs') }}"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">Browse
                            Jobs</a>
                        <a href="{{ route('front.consultation') }}"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">Book
                            Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="{{ asset('assets/css/global-new-styles.css') }}?v={{ filemtime(public_path('assets/css/global-new-styles.css')) }}">
    <script src="{{ asset('assets/js/roi-calculator.js') }}"></script>
@endsection
