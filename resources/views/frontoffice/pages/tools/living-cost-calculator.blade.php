@extends('frontoffice.layouts.app')

@section('title', 'Living Cost Calculator | GoAusbildung')

@section('meta')
    <meta name="description" content="Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.">
    <meta property="og:title" content="Living Cost Calculator | GoAusbildung">
    <meta property="og:description" content="Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.">
    <meta name="keywords" content="living costs germany,ausbildung living expenses,german city costs,rent germany trainee,monthly budget germany,ausbildung cost of living">
@endsection

@section('content')
    <header class="bg-card border-b border-border py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <a class="inline-flex items-center mb-6 group" href="{{ route('front.tools') }}">
                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-green-light/5 hover:text-foreground h-10 px-6 text-sm gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left h-4 w-4 transition-transform group-hover:-translate-x-1" aria-hidden="true">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>Back to Tools
                </button>
            </a>
            <div class="flex items-start gap-4 md:gap-6">
                <div class="p-3 md:p-4 rounded-xl bg-orange/10 flex-shrink-0" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-euro h-8 w-8 md:h-10 md:w-10 text-orange">
                        <path d="M4 10h12"></path>
                        <path d="M4 14h9"></path>
                        <path d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">Financial Planning</div>
                    </div>
                    <h1 class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-secondary mb-3">Living Cost Calculator</h1>
                    <p class="text-base md:text-lg text-muted-foreground max-w-3xl">Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.</p>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">

            <!-- Info Banner -->
            <section class="text-card-foreground shadow p-6 rounded-2xl border-2 bg-cream border-beige mb-6">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-xl flex-shrink-0 bg-orange text-cream">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-6 w-6">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <div class="flex-1 space-y-2">
                        <h2 class="text-xl font-semibold text-green">Official 2026 Cost Data</h2>
                        <p class="text-green/70 text-sm leading-relaxed">This calculator uses official data from <strong class="text-orange">DAAD and German Federal Statistical Office (Destatis)</strong> for 2026-2027. Costs are based on actual student/trainee expenses. The &euro;992/month blocked account requirement is separate from these calculations. First-month setup costs (&euro;2,500-4,500) are not included in monthly calculations.</p>
                    </div>
                </div>
            </section>

            <!-- Input Form -->
            <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige mb-6">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-green mb-2">Calculate Your Monthly Costs</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- City Select -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none text-green font-semibold" for="city">German City *</label>
                        <select id="city" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
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
                        <label class="text-sm leading-none text-green font-semibold" for="accommodation">Accommodation Type *</label>
                        <select id="accommodation" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
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
                        <label class="text-sm leading-none text-green font-semibold" for="lifestyle">Lifestyle &amp; Spending *</label>
                        <select id="lifestyle" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
                            <option value="">Select lifestyle</option>
                            <option value="budget">Budget-Conscious</option>
                            <option value="moderate">Moderate Spending</option>
                            <option value="comfortable">Comfortable Lifestyle</option>
                        </select>
                        <p class="text-xs text-muted-foreground">Budget includes home cooking, free entertainment</p>
                    </div>

                    <!-- Ausbildung Sector -->
                    <div class="space-y-2">
                        <label class="text-sm leading-none text-green font-semibold" for="sector">Ausbildung Sector</label>
                        <select id="sector" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50">
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
                            <input type="checkbox" id="includeDependent" class="w-5 h-5 rounded border-input text-primary focus:ring-primary accent-primary">
                            <span class="text-sm font-semibold text-green">Include Partner / Dependent</span>
                        </label>
                        <p class="text-xs text-muted-foreground ml-8">Adds approximately 40% to total monthly costs</p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="space-y-4 mt-8">
                    <div class="flex gap-4">
                        <button onclick="calculateCosts()" id="btn-calculate" class="flex-1 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-orange hover:bg-orange/90 text-white h-11 px-8" disabled>
                            Calculate Living Costs
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><rect width="16" height="20" x="4" y="2" rx="2"></rect><line x1="8" x2="16" y1="6" y2="6"></line><line x1="16" x2="16" y1="14" y2="18"></line><path d="M16 10h.01"></path><path d="M12 10h.01"></path><path d="M8 10h.01"></path><path d="M12 14h.01"></path><path d="M8 14h.01"></path><path d="M12 18h.01"></path><path d="M8 18h.01"></path></svg>
                        </button>
                        <button onclick="resetCalculator()" id="btn-reset" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-4 hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Results Section (hidden initially) -->
            <div id="results-section" class="hidden">

                <!-- Total Monthly Cost Card -->
                <div class="text-card-foreground shadow p-8 rounded-2xl border-2 bg-cream border-beige mb-6">
                    <div class="mb-6">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="p-2 rounded-lg bg-green/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-green"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-green">Your Monthly Cost Breakdown</h2>
                        </div>
                        <p class="text-sm text-muted-foreground" id="results-subtitle"></p>
                    </div>

                    <!-- Mascot -->
                    <div class="flex justify-center mb-8" aria-hidden="true">
                        <img src="{{ asset('assets/_next/mascot_welcomingfad6.jpeg') }}" alt="Young Oak mascot showing your cost results" width="150" height="150" class="animate-float-slow" />
                    </div>

                    <!-- Summary Cards Row -->
                    <div class="grid md:grid-cols-3 gap-4 mb-6">
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3 border-orange/20">
                            <div class="p-2 rounded-lg bg-orange/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-orange"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Total Monthly Cost</p>
                                <p class="text-2xl font-bold text-orange" id="result-total">-</p>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3 border-green/20">
                            <div class="p-2 rounded-lg bg-green/10 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green"><path d="M4 10h12"></path><path d="M4 14h9"></path><path d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Monthly Stipend</p>
                                <p class="text-2xl font-bold text-green" id="result-stipend">-</p>
                            </div>
                        </div>
                        <div class="rounded-xl border bg-white p-4 flex items-start gap-3" id="card-balance">
                            <div class="p-2 rounded-lg flex-shrink-0" id="balance-icon-bg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="balance-icon"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg>
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
                        <h3 class="text-lg font-bold text-green mb-4">Detailed Cost Breakdown</h3>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mt-0.5 shrink-0"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                        <div id="financial-alert-text"></div>
                    </div>
                </div>

                <!-- Part-Time Work Impact -->
                <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige mb-6">
                    <h3 class="text-xl font-bold text-green mb-2">Part-Time Work Impact</h3>
                    <p class="text-sm text-muted-foreground mb-6">Ausbildung trainees can work up to 20 hours/week. Here's how part-time work could improve your balance:</p>
                    <div class="grid md:grid-cols-3 gap-4" id="parttime-cards"></div>
                </div>

                <!-- Cheaper City Alternatives -->
                <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige mb-6" id="alternatives-section">
                    <h3 class="text-xl font-bold text-green mb-2">More Affordable Alternatives</h3>
                    <p class="text-sm text-muted-foreground mb-6">Consider these cities with lower living costs:</p>
                    <div class="grid md:grid-cols-3 gap-4" id="alternatives-cards"></div>
                </div>

                <!-- Disclaimer -->
                <div class="text-sm text-muted-foreground p-4 bg-muted rounded-lg flex items-start gap-2 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mt-0.5 shrink-0"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                    <p>These calculations are estimates based on average values from DAAD and Destatis for 2026-2027. Actual costs may vary based on personal lifestyle, specific neighborhood, and market conditions.</p>
                </div>
            </div>

            <!-- How It Works (shown when no results) -->
            <div id="how-it-works" class="mb-6">
                <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige">
                    <h2 class="text-2xl font-bold text-green mb-2">How to Use the Living Cost Calculator</h2>
                    <p class="text-green/70 mb-8">Get a detailed breakdown of monthly living expenses in any major German city. Compare costs and find the best city for your budget.</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 border-beige">
                            <div class="p-3 rounded-xl bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-green"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <h3 class="font-bold text-green mb-2">Select Your City</h3>
                            <p class="text-sm text-green/70">Choose from 15 German cities across 4 cost tiers, from affordable Leipzig to expensive Munich.</p>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 border-beige">
                            <div class="p-3 rounded-xl bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-green"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                            </div>
                            <h3 class="font-bold text-green mb-2">Choose Living Preferences</h3>
                            <p class="text-sm text-green/70">Select accommodation type (dormitory, shared, studio, apartment) and lifestyle preferences (budget, moderate, comfortable).</p>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 border-beige">
                            <div class="p-3 rounded-xl bg-green/10 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-green"><rect width="16" height="20" x="4" y="2" rx="2"></rect><line x1="8" x2="16" y1="6" y2="6"></line><line x1="16" x2="16" y1="14" y2="18"></line><path d="M16 10h.01"></path><path d="M12 10h.01"></path><path d="M8 10h.01"></path><path d="M12 14h.01"></path><path d="M8 14h.01"></path><path d="M12 18h.01"></path><path d="M8 18h.01"></path></svg>
                            </div>
                            <h3 class="font-bold text-green mb-2">Get Cost Breakdown</h3>
                            <p class="text-sm text-green/70">Receive detailed monthly estimates including rent, food, transport, insurance, utilities, and entertainment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="text-card-foreground shadow rounded-2xl bg-cream border-2 border-beige mb-6 overflow-hidden">
                <div class="p-8 pb-4">
                    <h2 class="text-2xl font-bold text-green mb-2">Frequently Asked Questions</h2>
                </div>
                <div class="divide-y divide-beige" id="faq-container">
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">How much does it cost to live in Germany as an Ausbildung trainee in 2026?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Monthly living costs range from &euro;800-2,200 depending on city and lifestyle. Affordable cities like Leipzig and Dresden cost &euro;900-1,300/month, while expensive cities like Munich and Frankfurt cost &euro;1,600-2,200/month. The average trainee stipend is &euro;900-1,300/month. The blocked account requirement is &euro;992/month (&euro;11,904/year).</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">Which German cities are most affordable for Ausbildung trainees?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">The most affordable cities include: Leipzig (&euro;900-1,300/month), Dresden (&euro;850-1,250/month), Bochum (&euro;800-1,200/month), Chemnitz (&euro;780-1,180/month), and Erfurt (&euro;850-1,280/month). Rent differences are significant: &euro;300-500 for shared apartments in affordable cities vs &euro;500-800 in Munich.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">Can I survive on my Ausbildung stipend alone without additional income?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">In affordable cities with &euro;1,000-1,200/month stipend, it covers all basic costs. In moderate-cost cities, it's possible with careful budgeting. In expensive cities, you may face a &euro;200-400 monthly deficit. Part-time work (up to 20 hours/week) can earn you &euro;400-600/month at &euro;12-15/hour.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">What is included in the &euro;992/month visa requirement for Germany?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">The &euro;992/month blocked account breaks down to: Accommodation (&euro;350-600), Food (&euro;200-300), Health insurance (&euro;120), Transportation (&euro;30-50), and Miscellaneous (&euro;100-200). Note that actual costs often exceed this amount in expensive cities like Munich or Frankfurt.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">How do living costs vary between Munich and Leipzig?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Munich is 50-80% more expensive overall. Shared apartments: Munich &euro;500-800 vs Leipzig &euro;330-520. Total monthly costs: Munich &euro;1,600-2,200 vs Leipzig &euro;900-1,300. Rent is &euro;300-400 higher, food costs 15-20% more, and miscellaneous expenses are 30-40% higher in Munich.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">Is student accommodation (dormitory) cheaper than private apartments?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Yes, significantly. Dormitories cost &euro;180-500/month (cheapest option). Shared apartments (WG) cost &euro;300-800/month. Studio apartments cost &euro;500-1,500/month. However, dormitory waiting lists can be 6-12 months in popular cities, so apply early.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">What are typical food costs for Ausbildung trainees in Germany?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Budget lifestyle (home cooking): &euro;125-220/month. Moderate lifestyle (mixed): &euro;175-320/month. Comfortable lifestyle (dining out): &euro;255-450/month. Save money with student Mensas (&euro;2.50-5/meal), discount supermarkets (Aldi, Lidl), and the Too Good To Go app.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">Can I work part-time during Ausbildung to cover additional living costs?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Yes, up to 20 hours/week (120 full days or 240 half days per year). Wages: &euro;12-15/hour (minimum wage &euro;12.82 in 2026). Potential earnings: &euro;400-600/month. Popular jobs include healthcare shifts (&euro;15-18/hour), retail/hospitality (&euro;12-14/hour), tutoring (&euro;15-25/hour), and delivery (&euro;13-16/hour).</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">What initial costs should I budget for my first month in Germany?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Budget &euro;2,500-4,500 total: Security deposit (&euro;900-2,400), first month rent (&euro;300-800), city registration (&euro;30-50), health insurance first month (&euro;120), residence permit (&euro;100), bedding/kitchenware (&euro;200-400), winter clothing (&euro;150-300), SIM card (&euro;10-30), transport/bike (&euro;30-100), emergency buffer (&euro;300-500).</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                            <span class="font-semibold text-green pr-4">How much should I save before arriving in Germany for Ausbildung?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Plan for &euro;14,000-17,000 total: Blocked account (&euro;11,904), first-month setup costs (&euro;2,500-4,500), emergency buffer (&euro;500-1,000), and an additional flexibility fund (&euro;2,000-3,000) for unexpected expenses during your first months.</div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="relative rounded-2xl overflow-hidden p-8 bg-gradient-to-br from-primary/10 to-orange/10 border">
                <div class="text-center max-w-2xl mx-auto">
                    <h3 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-3">Ready to Apply? Browse Live Positions</h3>
                    <p class="text-muted-foreground mb-6">Explore verified job openings from German employers seeking international talent. Start your Ausbildung journey today.</p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                        <a href="{{ route('front.jobs') }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">Browse Jobs</a>
                        <a href="{{ route('front.consultation') }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">Book Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .faq-chevron.rotated {
            transform: rotate(180deg);
        }
        .cost-bar {
            height: 12px;
            border-radius: 6px;
            transition: width 0.6s ease;
        }
    </style>

    <script>
        // ── City cost data (from DAAD / Destatis 2026-2027) ──
        const cityData = {
            munich: {
                name: 'Munich', tier: 'Most Expensive',
                description: 'Capital of Bavaria, highest living costs in Germany, strong job market, excellent quality of life',
                accommodation: { dormitory: [350,500], shared: [500,800], studio: [800,1200], apartment: [1200,1800] },
                food: { budget: [180,220], moderate: [250,320], comfortable: [350,450] },
                fixed: { transportation: 49, insurance: 120, utilities: 150, phone: 30 },
                misc: { budget: [50,80], moderate: [100,150], comfortable: [180,250] }
            },
            frankfurt: {
                name: 'Frankfurt', tier: 'Most Expensive',
                description: 'Financial hub, international atmosphere, high salaries, expensive housing',
                accommodation: { dormitory: [320,480], shared: [480,750], studio: [750,1150], apartment: [1100,1700] },
                food: { budget: [170,210], moderate: [240,310], comfortable: [330,430] },
                fixed: { transportation: 51, insurance: 120, utilities: 140, phone: 30 },
                misc: { budget: [50,75], moderate: [95,140], comfortable: [170,240] }
            },
            hamburg: {
                name: 'Hamburg', tier: 'High Cost',
                description: 'Port city, second-largest in Germany, vibrant culture, good job opportunities',
                accommodation: { dormitory: [300,450], shared: [450,700], studio: [700,1100], apartment: [1000,1500] },
                food: { budget: [160,200], moderate: [230,290], comfortable: [320,410] },
                fixed: { transportation: 39, insurance: 120, utilities: 135, phone: 30 },
                misc: { budget: [45,70], moderate: [90,130], comfortable: [160,230] }
            },
            stuttgart: {
                name: 'Stuttgart', tier: 'High Cost',
                description: 'Automotive industry hub (Mercedes, Porsche), strong economy, hilly landscape',
                accommodation: { dormitory: [290,430], shared: [440,680], studio: [680,1050], apartment: [950,1450] },
                food: { budget: [165,205], moderate: [235,295], comfortable: [325,415] },
                fixed: { transportation: 43, insurance: 120, utilities: 130, phone: 30 },
                misc: { budget: [45,70], moderate: [88,128], comfortable: [155,225] }
            },
            cologne: {
                name: 'Cologne', tier: 'High Cost',
                description: 'Cultural center, carnival city, media industry, cathedral landmark',
                accommodation: { dormitory: [280,420], shared: [420,650], studio: [650,1000], apartment: [900,1400] },
                food: { budget: [160,200], moderate: [225,285], comfortable: [315,405] },
                fixed: { transportation: 38, insurance: 120, utilities: 125, phone: 30 },
                misc: { budget: [45,68], moderate: [85,125], comfortable: [150,220] }
            },
            berlin: {
                name: 'Berlin', tier: 'Moderate Cost',
                description: 'Capital city, startup hub, diverse culture, improving but still moderate costs',
                accommodation: { dormitory: [250,400], shared: [400,650], studio: [650,950], apartment: [900,1400] },
                food: { budget: [150,190], moderate: [210,270], comfortable: [300,390] },
                fixed: { transportation: 35, insurance: 120, utilities: 120, phone: 30 },
                misc: { budget: [40,65], moderate: [80,120], comfortable: [145,210] }
            },
            dusseldorf: {
                name: 'Düsseldorf', tier: 'Moderate Cost',
                description: 'Fashion and art hub, Japanese community, Rhine river, business center',
                accommodation: { dormitory: [270,410], shared: [410,630], studio: [630,980], apartment: [880,1350] },
                food: { budget: [155,195], moderate: [220,280], comfortable: [310,400] },
                fixed: { transportation: 37, insurance: 120, utilities: 125, phone: 30 },
                misc: { budget: [42,66], moderate: [82,122], comfortable: [148,215] }
            },
            hannover: {
                name: 'Hannover', tier: 'Moderate Cost',
                description: 'Central location, trade fair city, good transport connections, affordable living',
                accommodation: { dormitory: [240,380], shared: [380,590], studio: [590,910], apartment: [820,1280] },
                food: { budget: [145,185], moderate: [205,265], comfortable: [290,380] },
                fixed: { transportation: 33, insurance: 120, utilities: 115, phone: 30 },
                misc: { budget: [38,62], moderate: [75,115], comfortable: [138,200] }
            },
            nuremberg: {
                name: 'Nuremberg', tier: 'Moderate Cost',
                description: 'Bavarian city, historic old town, technology hub, Christmas market famous',
                accommodation: { dormitory: [245,385], shared: [385,600], studio: [600,920], apartment: [830,1300] },
                food: { budget: [148,188], moderate: [208,268], comfortable: [295,385] },
                fixed: { transportation: 36, insurance: 120, utilities: 118, phone: 30 },
                misc: { budget: [40,64], moderate: [78,118], comfortable: [142,205] }
            },
            essen: {
                name: 'Essen', tier: 'Moderate Cost',
                description: 'Ruhr area, industrial history, green capital, affordable and accessible',
                accommodation: { dormitory: [230,370], shared: [370,580], studio: [580,890], apartment: [800,1250] },
                food: { budget: [142,182], moderate: [200,260], comfortable: [285,375] },
                fixed: { transportation: 32, insurance: 120, utilities: 112, phone: 30 },
                misc: { budget: [38,60], moderate: [73,113], comfortable: [135,198] }
            },
            leipzig: {
                name: 'Leipzig', tier: 'Most Affordable',
                description: 'Growing cultural scene, startup-friendly, affordable housing, student-popular',
                accommodation: { dormitory: [200,330], shared: [330,520], studio: [520,800], apartment: [720,1150] },
                food: { budget: [135,175], moderate: [190,250], comfortable: [270,360] },
                fixed: { transportation: 30, insurance: 120, utilities: 105, phone: 30 },
                misc: { budget: [35,58], moderate: [68,108], comfortable: [128,190] }
            },
            dresden: {
                name: 'Dresden', tier: 'Most Affordable',
                description: 'Baroque architecture, Elbe river, technology sector, very affordable',
                accommodation: { dormitory: [190,320], shared: [320,510], studio: [510,780], apartment: [700,1120] },
                food: { budget: [130,170], moderate: [185,245], comfortable: [265,355] },
                fixed: { transportation: 28, insurance: 120, utilities: 100, phone: 30 },
                misc: { budget: [33,56], moderate: [65,105], comfortable: [125,185] }
            },
            bochum: {
                name: 'Bochum', tier: 'Most Affordable',
                description: 'Ruhr University, industrial heritage, most affordable major city, student-friendly',
                accommodation: { dormitory: [180,310], shared: [310,490], studio: [490,760], apartment: [680,1100] },
                food: { budget: [128,168], moderate: [180,240], comfortable: [260,350] },
                fixed: { transportation: 29, insurance: 120, utilities: 98, phone: 30 },
                misc: { budget: [32,55], moderate: [63,103], comfortable: [122,182] }
            },
            chemnitz: {
                name: 'Chemnitz', tier: 'Most Affordable',
                description: 'Saxony city, technology university, extremely affordable, industrial revival',
                accommodation: { dormitory: [175,300], shared: [300,480], studio: [480,740], apartment: [660,1080] },
                food: { budget: [125,165], moderate: [175,235], comfortable: [255,345] },
                fixed: { transportation: 27, insurance: 120, utilities: 95, phone: 30 },
                misc: { budget: [30,53], moderate: [60,100], comfortable: [118,178] }
            },
            erfurt: {
                name: 'Erfurt', tier: 'Most Affordable',
                description: 'Thuringia capital, medieval architecture, affordable living, central Germany location',
                accommodation: { dormitory: [185,315], shared: [315,500], studio: [500,770], apartment: [690,1110] },
                food: { budget: [132,172], moderate: [188,248], comfortable: [268,358] },
                fixed: { transportation: 31, insurance: 120, utilities: 102, phone: 30 },
                misc: { budget: [34,57], moderate: [67,107], comfortable: [127,187] }
            }
        };

        // ── Sector stipend data ──
        const sectorStipends = {
            it: 1250, healthcare: 1225, engineering: 1150, construction: 1100,
            business: 1050, logistics: 1000, other: 1000, hospitality: 950, retail: 900
        };

        // ── Cost category colors ──
        const categoryColors = {
            accommodation: '#F4991A',
            food: '#344F1F',
            transportation: '#8B7355',
            insurance: '#D4841A',
            utilities: '#5A7A3A',
            phone: '#A69070',
            miscellaneous: '#C4B090'
        };

        // ── DOM refs ──
        const cityEl = document.getElementById('city');
        const accommodationEl = document.getElementById('accommodation');
        const lifestyleEl = document.getElementById('lifestyle');
        const sectorEl = document.getElementById('sector');
        const dependentEl = document.getElementById('includeDependent');
        const btnCalc = document.getElementById('btn-calculate');
        const btnReset = document.getElementById('btn-reset');

        // ── Update city description on change ──
        cityEl.addEventListener('change', updateButtonState);
        accommodationEl.addEventListener('change', updateButtonState);
        lifestyleEl.addEventListener('change', updateButtonState);

        cityEl.addEventListener('change', function() {
            const desc = document.getElementById('city-description');
            if (this.value && cityData[this.value]) {
                desc.textContent = cityData[this.value].description;
            } else {
                desc.textContent = '';
            }
        });

        function updateButtonState() {
            btnCalc.disabled = !(cityEl.value && accommodationEl.value && lifestyleEl.value);
        }

        // ── Helper: average of range ──
        function avg(range) {
            return Math.round((range[0] + range[1]) / 2);
        }

        // ── Calculate total cost for a city/accommodation/lifestyle combo ──
        function getCosts(cityId, accom, life) {
            const c = cityData[cityId];
            const accommodation = avg(c.accommodation[accom]);
            const food = avg(c.food[life]);
            const transportation = c.fixed.transportation;
            const insurance = c.fixed.insurance;
            const utilities = c.fixed.utilities;
            const phone = c.fixed.phone;
            const miscellaneous = avg(c.misc[life]);

            return { accommodation, food, transportation, insurance, utilities, phone, miscellaneous };
        }

        function totalOf(costs) {
            return Object.values(costs).reduce((a, b) => a + b, 0);
        }

        // ── Main calculation ──
        function calculateCosts() {
            const cityId = cityEl.value;
            const accom = accommodationEl.value;
            const life = lifestyleEl.value;
            const sectorId = sectorEl.value;
            const hasDependent = dependentEl.checked;

            if (!cityId || !accom || !life) return;

            const city = cityData[cityId];
            const costs = getCosts(cityId, accom, life);
            let total = totalOf(costs);
            const stipend = sectorStipends[sectorId];

            if (hasDependent) total = Math.round(total * 1.4);

            const balance = stipend - total;
            const annualBalance = balance * 12;
            const annualCost = total * 12;

            // Affordability level
            let affordability, affordColor;
            if (balance >= 200) { affordability = 'Comfortable'; affordColor = 'text-green'; }
            else if (balance >= 50) { affordability = 'Manageable'; affordColor = 'text-green'; }
            else if (balance >= -100) { affordability = 'Tight Budget'; affordColor = 'text-orange'; }
            else { affordability = 'Difficult'; affordColor = 'text-red-500'; }

            // Subtitle
            document.getElementById('results-subtitle').textContent =
                city.name + ' \u2022 ' + accom.charAt(0).toUpperCase() + accom.slice(1) + ' \u2022 ' + life.charAt(0).toUpperCase() + life.slice(1) + (hasDependent ? ' \u2022 With Dependent' : '');

            // Summary cards
            document.getElementById('result-total').textContent = '\u20AC' + total.toLocaleString() + '/mo';
            document.getElementById('result-stipend').textContent = '\u20AC' + stipend.toLocaleString() + '/mo';

            const balanceEl = document.getElementById('result-balance');
            balanceEl.textContent = (balance >= 0 ? '+' : '') + '\u20AC' + balance.toLocaleString() + '/mo';
            balanceEl.className = 'text-xl font-bold ' + (balance >= 0 ? 'text-green' : 'text-orange');

            const affordEl = document.getElementById('result-affordability');
            affordEl.textContent = affordability;
            affordEl.className = 'text-xs font-semibold ' + affordColor;

            const cardBalance = document.getElementById('card-balance');
            cardBalance.className = 'rounded-xl border bg-white p-4 flex items-start gap-3 ' + (balance >= 0 ? 'border-green/20' : 'border-orange/20');

            const balanceIconBg = document.getElementById('balance-icon-bg');
            balanceIconBg.className = 'p-2 rounded-lg flex-shrink-0 ' + (balance >= 0 ? 'bg-green/10' : 'bg-orange/10');

            const balanceIcon = document.getElementById('balance-icon');
            balanceIcon.className = balance >= 0 ? 'text-green' : 'text-orange';

            // Annual
            const annualEl = document.getElementById('result-annual');
            annualEl.textContent = (annualBalance >= 0 ? '+' : '') + '\u20AC' + annualBalance.toLocaleString();
            annualEl.className = 'text-xl font-bold ' + (annualBalance >= 0 ? 'text-green' : 'text-orange');
            document.getElementById('result-annual-cost').textContent = '\u20AC' + annualCost.toLocaleString();

            // Cost breakdown bars
            const breakdownEl = document.getElementById('cost-breakdown');
            const maxCost = Math.max(...Object.values(costs));
            const categories = [
                { key: 'accommodation', label: 'Accommodation', icon: '\uD83C\uDFE0' },
                { key: 'food', label: 'Food & Groceries', icon: '\uD83C\uDF5E' },
                { key: 'transportation', label: 'Transportation', icon: '\uD83D\uDE8C' },
                { key: 'insurance', label: 'Health Insurance', icon: '\uD83C\uDFE5' },
                { key: 'utilities', label: 'Utilities', icon: '\u26A1' },
                { key: 'phone', label: 'Phone & Internet', icon: '\uD83D\uDCF1' },
                { key: 'miscellaneous', label: 'Miscellaneous', icon: '\uD83C\uDFAD' }
            ];

            let breakdownHTML = '';
            const actualCosts = hasDependent ? {} : costs;
            for (const cat of categories) {
                const val = hasDependent ? Math.round(costs[cat.key] * 1.4) : costs[cat.key];
                const pct = Math.round((costs[cat.key] / maxCost) * 100);
                const color = categoryColors[cat.key];
                breakdownHTML += `
                    <div class="rounded-xl border bg-white p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-secondary">${cat.icon} ${cat.label}</span>
                            <span class="text-sm font-bold text-secondary">\u20AC${val.toLocaleString()}</span>
                        </div>
                        <div class="w-full bg-beige rounded-full h-3">
                            <div class="cost-bar" style="width: ${pct}%; background-color: ${color};"></div>
                        </div>
                    </div>`;
            }
            breakdownEl.innerHTML = breakdownHTML;

            // Financial alert
            const alertEl = document.getElementById('financial-alert');
            const alertText = document.getElementById('financial-alert-text');
            if (balance < 0) {
                alertEl.classList.remove('hidden');
                alertEl.className = 'rounded-xl p-4 mb-6 flex items-start gap-3 bg-orange/10 border border-orange/20 text-orange';
                alertText.innerHTML = '<p class="font-semibold mb-1">Your stipend doesn\'t fully cover living costs</p><p class="text-sm">You have a monthly deficit of <strong>\u20AC' + Math.abs(balance) + '</strong>. Consider part-time work, a more affordable city, or cheaper accommodation to balance your budget.</p>';
            } else {
                alertEl.classList.add('hidden');
            }

            // Part-time work impact
            const partTimeData = [
                { hours: 10, rate: 13 },
                { hours: 15, rate: 14 },
                { hours: 20, rate: 15 }
            ];
            const ptContainer = document.getElementById('parttime-cards');
            ptContainer.innerHTML = partTimeData.map(pt => {
                const earnings = Math.round(pt.hours * pt.rate * 4.33);
                const newBalance = balance + earnings;
                return `
                    <div class="rounded-xl border bg-white p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="p-1.5 rounded-lg bg-green/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <span class="text-sm font-semibold text-green">${pt.hours}h/week @ \u20AC${pt.rate}/hr</span>
                        </div>
                        <p class="text-lg font-bold text-secondary mb-1">+\u20AC${earnings.toLocaleString()}/mo</p>
                        <p class="text-xs ${newBalance >= 0 ? 'text-green' : 'text-orange'}">New balance: ${newBalance >= 0 ? '+' : ''}\u20AC${newBalance.toLocaleString()}/mo</p>
                    </div>`;
            }).join('');

            // Cheaper city alternatives
            const altSection = document.getElementById('alternatives-section');
            const altContainer = document.getElementById('alternatives-cards');
            const currentTotal = total;

            // Sort cities by total cost and find cheaper ones
            const cityOrder = Object.keys(cityData);
            const cityCosts = cityOrder.map(id => ({
                id,
                name: cityData[id].name,
                tier: cityData[id].tier,
                total: totalOf(getCosts(id, accom, life))
            })).sort((a, b) => a.total - b.total);

            const cheaper = cityCosts.filter(c => c.id !== cityId && c.total < currentTotal).slice(0, 3);

            if (cheaper.length > 0) {
                altSection.classList.remove('hidden');
                altContainer.innerHTML = cheaper.map(alt => {
                    const savings = (hasDependent ? Math.round(currentTotal - alt.total * 1.4) : currentTotal - alt.total);
                    const altTotal = hasDependent ? Math.round(alt.total * 1.4) : alt.total;
                    return `
                        <div class="rounded-xl border bg-white p-4">
                            <h4 class="font-bold text-green mb-1">${alt.name}</h4>
                            <p class="text-xs text-muted-foreground mb-3">${alt.tier}</p>
                            <p class="text-lg font-bold text-secondary mb-1">\u20AC${altTotal.toLocaleString()}/mo</p>
                            <p class="text-xs text-green font-semibold">Save \u20AC${savings.toLocaleString()}/mo vs ${city.name}</p>
                        </div>`;
                }).join('');
            } else {
                altSection.classList.add('hidden');
            }

            // Show results, hide how-it-works
            document.getElementById('results-section').classList.remove('hidden');
            document.getElementById('how-it-works').classList.add('hidden');
            btnReset.classList.remove('hidden');
            document.getElementById('results-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // ── Reset ──
        function resetCalculator() {
            cityEl.value = '';
            accommodationEl.value = '';
            lifestyleEl.value = '';
            sectorEl.value = 'it';
            dependentEl.checked = false;
            document.getElementById('city-description').textContent = '';

            document.getElementById('results-section').classList.add('hidden');
            document.getElementById('how-it-works').classList.remove('hidden');
            btnReset.classList.add('hidden');
            btnCalc.disabled = true;
        }

        // ── FAQ toggle ──
        function toggleFaq(btn) {
            const content = btn.nextElementSibling;
            const chevron = btn.querySelector('.faq-chevron');
            content.classList.toggle('hidden');
            chevron.classList.toggle('rotated');
        }
    </script>
@endsection
