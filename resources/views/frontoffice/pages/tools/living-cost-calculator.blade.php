@extends('frontoffice.layouts.app')

@section('title', 'Living Cost Calculator | Azubi')

@section('meta')
    <meta name="description"
        content="Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.">
    <meta property="og:title" content="Living Cost Calculator | Azubi">
    <meta property="og:description"
        content="Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.">
    <meta name="keywords"
        content="living costs germany,ausbildung living expenses,german city costs,rent germany trainee,monthly budget germany,ausbildung cost of living">
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
                    <h1 class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-secondary mb-3">Living Cost
                        Calculator</h1>
                    <p class="text-base md:text-lg text-muted-foreground max-w-3xl">Estimate monthly living expenses by city
                        including rent, food, transport, insurance, and entertainment costs across Germany.</p>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">

            <!-- Info Banner -->
            <section class="text-card-foreground shadow p-6 rounded-2xl border-2 azubi-bg-cream azubi-border-beige mb-6">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl flex-shrink-0 azubi-bg-orange azubi-text-cream">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-info h-6 w-6">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <div class="flex-1 space-y-2">
                        <h2 class="text-xl font-semibold azubi-text-green">Official 2026 Cost Data</h2>
                        <p class="azubi-text-green/70 text-sm leading-relaxed">This calculator uses official data from <strong
                                class="azubi-text-orange">DAAD and German Federal Statistical Office (Destatis)</strong> for
                            2026-2027. Costs are based on actual student/trainee expenses. The &euro;992/month blocked
                            account requirement is separate from these calculations. First-month setup costs
                            (&euro;2,500-4,500) are not included in monthly calculations.</p>
                    </div>
                </div>
            </section>

            <!-- Input Form -->
            <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige mb-6">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold azubi-text-green mb-2">Calculate Your Monthly Costs</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- City Select -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="city">German City *</label>
                        <select id="city"
                            class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
                            <option value="">Select a city</option>
                            <optgroup label="Most Expensive">
                                <option value="munich">Munich</option>
                                <option value="frankfurt">Frankfurt</option>
                            </optgroup>
                            <optgroup label="High Cost">
                                <option value="hamburg">Hamburg</option>
                                <option value="stuttgart">Stuttgart</option>
                                <option value="cologne">Cologne</option>
                            </optgroup>
                            <optgroup label="Moderate Cost">
                                <option value="berlin">Berlin</option>
                                <option value="dusseldorf">D&uuml;sseldorf</option>
                                <option value="hannover">Hannover</option>
                                <option value="nuremberg">Nuremberg</option>
                                <option value="essen">Essen</option>
                            </optgroup>
                            <optgroup label="Most Affordable">
                                <option value="leipzig">Leipzig</option>
                                <option value="dresden">Dresden</option>
                                <option value="bochum">Bochum</option>
                                <option value="chemnitz">Chemnitz</option>
                                <option value="erfurt">Erfurt</option>
                            </optgroup>
                        </select>
                        <p class="text-xs text-muted-foreground" id="city-description"></p>
                    </div>

                    <!-- Accommodation Type -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="accommodation">Accommodation Type
                            *</label>
                        <select id="accommodation"
                            class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
                            <option value="">Select accommodation</option>
                            <option value="dormitory">Dormitory (Studentenwohnheim)</option>
                            <option value="shared">Shared Apartment (WG)</option>
                            <option value="studio">Studio Apartment</option>
                            <option value="apartment">1-Bedroom Apartment</option>
                        </select>
                        <p class="text-xs text-muted-foreground">Shared apartments (WG) are most popular among trainees</p>
                    </div>

                    <!-- Lifestyle -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="lifestyle">Lifestyle &amp;
                            Spending *</label>
                        <select id="lifestyle"
                            class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
                            <option value="">Select lifestyle</option>
                            <option value="budget">Budget-Conscious</option>
                            <option value="moderate">Moderate Spending</option>
                            <option value="comfortable">Comfortable Lifestyle</option>
                        </select>
                        <p class="text-xs text-muted-foreground">Budget includes home cooking, free entertainment</p>
                    </div>

                    <!-- Ausbildung Sector -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none azubi-text-green font-semibold" for="sector">Ausbildung
                            Sector</label>
                        <select id="sector"
                            class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
                            <option value="it">IT &amp; Technology (&euro;1,250/mo)</option>
                            <option value="healthcare">Healthcare / Nursing (&euro;1,225/mo)</option>
                            <option value="engineering">Engineering &amp; Manufacturing (&euro;1,150/mo)</option>
                            <option value="construction">Construction &amp; Trades (&euro;1,100/mo)</option>
                            <option value="business">Business Administration (&euro;1,050/mo)</option>
                            <option value="logistics">Logistics &amp; Transport (&euro;1,000/mo)</option>
                            <option value="other">Other / Custom Amount (&euro;1,000/mo)</option>
                            <option value="hospitality">Hospitality &amp; Tourism (&euro;950/mo)</option>
                            <option value="retail">Retail &amp; Sales (&euro;900/mo)</option>
                        </select>
                        <p class="text-xs text-muted-foreground">Used to compare your stipend against living costs</p>
                    </div>

                    <!-- Include Dependent -->
                    <div class="space-y-2 md:col-span-2">
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" id="includeDependent"
                                class="w-5 h-5 rounded border-input text-primary focus:ring-primary accent-primary">
                            <span class="text-sm font-semibold azubi-text-green">Include Partner / Dependent</span>
                        </label>
                        <p class="text-xs text-muted-foreground ml-8">Adds approximately 40% to total monthly costs</p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="space-y-4 mt-8">
                    <div class="flex gap-4">
                        <button onclick="calculateCosts()" id="btn-calculate"
                            class="flex-1 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 azubi-bg-orange hover:azubi-bg-orange/90 text-white h-11 px-8"
                            disabled>
                            Calculate Living Costs
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

                <!-- Total Monthly Cost Card -->
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
                            <h2 class="text-2xl font-bold azubi-text-green">Your Monthly Cost Breakdown</h2>
                        </div>
                        <p class="text-sm text-muted-foreground" id="results-subtitle"></p>
                    </div>

                    <!-- Mascot -->
                    <div class="flex justify-center mb-8" aria-hidden="true">
                        <img src="{{ asset('assets/_next/mascot_welcomingfad6.jpeg') }}"
                            alt="Young Oak mascot showing your cost results" width="150" height="150"
                            class="animate-float-slow" />
                    </div>

                    <!-- Summary Cards Row -->
                    <div class="grid md:grid-cols-3 gap-4 mb-6">
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3 azubi-border-orange/20">
                            <div class="p-2 rounded-lg azubi-bg-orange/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="azubi-text-orange">
                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Total Monthly Cost</p>
                                <p class="text-2xl font-bold azubi-text-orange" id="result-total">-</p>
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
                                <p class="text-sm text-muted-foreground">Monthly Stipend</p>
                                <p class="text-2xl font-bold azubi-text-green" id="result-stipend">-</p>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3" id="card-balance">
                            <div class="p-2 rounded-lg flex-shrink-0" id="balance-icon-bg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" id="balance-icon">
                                    <path
                                        d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Monthly Balance</p>
                                <p class="text-xl font-bold" id="result-balance">-</p>
                                <p class="text-xs text-muted-foreground" id="result-affordability"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Cost Breakdown -->
                    <div class="mb-6">
                        <h3 class="text-lg font-bold azubi-text-green mb-4">Detailed Cost Breakdown</h3>
                        <div class="space-y-3" id="cost-breakdown"></div>
                    </div>

                    <!-- Annual Balance -->
                    <div class="rounded-xl border bg-white p-4 mb-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted-foreground">Annual Balance (Stipend - Costs)</p>
                                <p class="text-xl font-bold" id="result-annual">-</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-muted-foreground">Annual Cost</p>
                                <p class="text-lg font-semibold text-secondary" id="result-annual-cost">-</p>
                            </div>
                        </div>
                    </div>

                    <!-- Financial Alert -->
                    <div id="financial-alert" class="hidden rounded-xl p-4 mb-6 flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 mt-0.5 shrink-0">
                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                            <path d="M12 9v4"></path>
                            <path d="M12 17h.01"></path>
                        </svg>
                        <div id="financial-alert-text"></div>
                    </div>
                </div>

                <!-- Part-Time Work Impact -->
                <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige mb-6">
                    <h3 class="text-xl font-bold azubi-text-green mb-2">Part-Time Work Impact</h3>
                    <p class="text-sm text-muted-foreground mb-6">Ausbildung trainees can work up to 20 hours/week. Here's
                        how part-time work could improve your balance:</p>
                    <div class="grid md:grid-cols-3 gap-4" id="parttime-cards"></div>
                </div>

                <!-- Cheaper City Alternatives -->
                <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige mb-6"
                    id="alternatives-section">
                    <h3 class="text-xl font-bold azubi-text-green mb-2">More Affordable Alternatives</h3>
                    <p class="text-sm text-muted-foreground mb-6">Consider these cities with lower living costs:</p>
                    <div class="grid md:grid-cols-3 gap-4" id="alternatives-cards"></div>
                </div>

                <!-- Disclaimer -->
                <div class="text-sm text-muted-foreground p-4 bg-muted rounded-lg flex items-start gap-2 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="h-4 w-4 mt-0.5 shrink-0">
                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                        <path d="M12 9v4"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                    <p>These calculations are estimates based on average values from DAAD and Destatis for 2026-2027. Actual
                        costs may vary based on personal lifestyle, specific neighborhood, and market conditions.</p>
                </div>
            </div>

            <!-- How It Works (shown when no results) -->
            <div id="how-it-works" class="mb-6">
                <div class="text-card-foreground shadow p-8 rounded-2xl azubi-bg-cream border-2 azubi-border-beige">
                    <h2 class="text-2xl font-bold azubi-text-green mb-2">How to Use the Living Cost Calculator</h2>
                    <p class="azubi-text-green/70 mb-8">Get a detailed breakdown of monthly living expenses in any major German
                        city. Compare costs and find the best city for your budget.</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 azubi-border-beige">
                            <div class="p-3 rounded-xl azubi-bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 azubi-text-green">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <h3 class="font-bold azubi-text-green mb-2">Select Your City</h3>
                            <p class="text-sm azubi-text-green/70">Choose from 15 German cities across 4 cost tiers, from
                                affordable Leipzig to expensive Munich.</p>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 azubi-border-beige">
                            <div class="p-3 rounded-xl azubi-bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 azubi-text-green">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-bold azubi-text-green mb-2">Choose Living Preferences</h3>
                            <p class="text-sm azubi-text-green/70">Select accommodation type (dormitory, shared, studio,
                                apartment) and lifestyle preferences (budget, moderate, comfortable).</p>
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
                            <h3 class="font-bold azubi-text-green mb-2">Get Cost Breakdown</h3>
                            <p class="text-sm azubi-text-green/70">Receive detailed monthly estimates including rent, food,
                                transport, insurance, utilities, and entertainment.</p>
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
                            <span class="font-semibold azubi-text-green pr-4">How much does it cost to live in Germany as an
                                Ausbildung trainee in 2026?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Monthly living
                            costs range from &euro;800-2,200 depending on city and lifestyle. Affordable cities like Leipzig
                            and Dresden cost &euro;900-1,300/month, while expensive cities like Munich and Frankfurt cost
                            &euro;1,600-2,200/month. The average trainee stipend is &euro;900-1,300/month. The blocked
                            account requirement is &euro;992/month (&euro;11,904/year).</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">Which German cities are most affordable for
                                Ausbildung trainees?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">The most affordable
                            cities include: Leipzig (&euro;900-1,300/month), Dresden (&euro;850-1,250/month), Bochum
                            (&euro;800-1,200/month), Chemnitz (&euro;780-1,180/month), and Erfurt (&euro;850-1,280/month).
                            Rent differences are significant: &euro;300-500 for shared apartments in affordable cities vs
                            &euro;500-800 in Munich.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">Can I survive on my Ausbildung stipend alone
                                without additional income?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">In affordable
                            cities with &euro;1,000-1,200/month stipend, it covers all basic costs. In moderate-cost cities,
                            it's possible with careful budgeting. In expensive cities, you may face a &euro;200-400 monthly
                            deficit. Part-time work (up to 20 hours/week) can earn you &euro;400-600/month at
                            &euro;12-15/hour.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">What is included in the &euro;992/month visa
                                requirement for Germany?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">The &euro;992/month
                            blocked account breaks down to: Accommodation (&euro;350-600), Food (&euro;200-300), Health
                            insurance (&euro;120), Transportation (&euro;30-50), and Miscellaneous (&euro;100-200). Note
                            that actual costs often exceed this amount in expensive cities like Munich or Frankfurt.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">How do living costs vary between Munich and
                                Leipzig?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Munich is 50-80%
                            more expensive overall. Shared apartments: Munich &euro;500-800 vs Leipzig &euro;330-520. Total
                            monthly costs: Munich &euro;1,600-2,200 vs Leipzig &euro;900-1,300. Rent is &euro;300-400
                            higher, food costs 15-20% more, and miscellaneous expenses are 30-40% higher in Munich.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">Is student accommodation (dormitory) cheaper than
                                private apartments?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Yes, significantly.
                            Dormitories cost &euro;180-500/month (cheapest option). Shared apartments (WG) cost
                            &euro;300-800/month. Studio apartments cost &euro;500-1,500/month. However, dormitory waiting
                            lists can be 6-12 months in popular cities, so apply early.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">What are typical food costs for Ausbildung trainees
                                in Germany?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Budget lifestyle
                            (home cooking): &euro;125-220/month. Moderate lifestyle (mixed): &euro;175-320/month.
                            Comfortable lifestyle (dining out): &euro;255-450/month. Save money with student Mensas
                            (&euro;2.50-5/meal), discount supermarkets (Aldi, Lidl), and the Too Good To Go app.</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">Can I work part-time during Ausbildung to cover
                                additional living costs?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Yes, up to 20
                            hours/week (120 full days or 240 half days per year). Wages: &euro;12-15/hour (minimum wage
                            &euro;12.82 in 2026). Potential earnings: &euro;400-600/month. Popular jobs include healthcare
                            shifts (&euro;15-18/hour), retail/hospitality (&euro;12-14/hour), tutoring (&euro;15-25/hour),
                            and delivery (&euro;13-16/hour).</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">What initial costs should I budget for my first
                                month in Germany?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Budget
                            &euro;2,500-4,500 total: Security deposit (&euro;900-2,400), first month rent (&euro;300-800),
                            city registration (&euro;30-50), health insurance first month (&euro;120), residence permit
                            (&euro;100), bedding/kitchenware (&euro;200-400), winter clothing (&euro;150-300), SIM card
                            (&euro;10-30), transport/bike (&euro;30-100), emergency buffer (&euro;300-500).</div>
                    </div>
                    <div class="azubi-faq-item">
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:azubi-bg-beige/50 transition-colors"
                            onclick="toggleFaq(this)">
                            <span class="font-semibold azubi-text-green pr-4">How much should I save before arriving in Germany
                                for Ausbildung?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="azubi-faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content hidden px-6 pb-6 text-sm azubi-text-green/70 leading-relaxed">Plan for
                            &euro;14,000-17,000 total: Blocked account (&euro;11,904), first-month setup costs
                            (&euro;2,500-4,500), emergency buffer (&euro;500-1,000), and an additional flexibility fund
                            (&euro;2,000-3,000) for unexpected expenses during your first months.</div>
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

    <script src="{{ asset('assets/js/living-cost-calculator.js') }}"></script>
@endsection
