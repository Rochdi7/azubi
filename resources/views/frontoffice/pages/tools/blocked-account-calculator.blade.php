@extends('frontoffice.layouts.app')

@section('title', 'Blocked Account Calculator | Azubi')

@section('meta')
    <meta name="description"
        content="Calculate exact blocked account requirements for your Ausbildung visa application including monthly breakdown and total costs.">
    <meta property="og:title" content="Blocked Account Calculator | Azubi">
    <meta property="og:description"
        content="Calculate exact blocked account requirements for your Ausbildung visa application including monthly breakdown and total costs.">
@endsection

@section('content')
    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <div class="bg-beige border-2 border-border rounded-2xl p-6 mb-8">
                <div class="flex items-start gap-4">
                    <div class="p-3 bg-orange rounded-lg" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-info h-6 w-6 text-white">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-green mb-2">
                            Winter 2026 Intake Requirement
                        </h3>
                        <p class="text-sm text-green/80">
                            The official blocked account amount for Winter 2026
                            (September 2026 onwards) is<!-- -->
                            <strong class="text-orange">€11,904</strong> (€992/month ×
                            12 months). This is set by the German Federal Foreign
                            Office and updated annually.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-green mb-2">
                        Calculate Your Costs
                    </h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="provider">Blocked Account Provider</label><button type="button" role="combobox"
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
                        <p class="text-xs text-muted-foreground">
                            Compare different blocked account providers based on fees
                            and services
                        </p>
                    </div>
                    <div class="space-y-3">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="visaType">Visa Type</label><button type="button" role="combobox"
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
                        <p class="text-xs text-muted-foreground">
                            All visa types require the same minimum amount
                        </p>
                    </div>
                    <div class="space-y-3">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="duration">Duration (months)</label><input type="number"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                            id="duration" min="6" max="36" value="12" />
                        <p class="text-xs text-muted-foreground">
                            Standard is 12 months; extend for longer programs
                        </p>
                    </div>
                    <div class="space-y-3">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="intakeYear">Intake Year</label><button type="button" role="combobox"
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
                        <p class="text-xs text-muted-foreground">
                            Amount may change for future years
                        </p>
                    </div>
                </div>
                <div class="space-y-4 mt-6">
                    <div class="flex gap-4">
                        <button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex-1 bg-orange hover:bg-orange-hover rounded-full">
                            Calculate Total Costs<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet ml-2 h-4 w-4"
                                aria-hidden="true">
                                <path
                                    d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                                </path>
                                <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex justify-center"></div>
                </div>
            </div>
            <div class="mt-8 mb-8 space-y-6">
                <div class="bg-beige border-2 border-border rounded-2xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-orange rounded-xl flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-info h-6 w-6 text-white">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-2xl font-bold text-green mb-2">
                                How to Use the Blocked Account Calculator
                            </h2>
                            <p class="text-green/70">
                                Get accurate cost estimates for your German blocked
                                account (Sperrkonto) in seconds. Compare providers and
                                plan your budget effectively.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                    <h3 class="text-xl font-bold text-green mb-6">
                        How It Works
                    </h3>
                    <div class="grid gap-4">
                        <div
                            class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                    1
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-green text-lg mb-2">
                                        Select Your Provider
                                    </h4>
                                    <p class="text-green/70 leading-relaxed">
                                        Choose from popular blocked account providers like
                                        Fintiba, Deutsche Bank, Expatrio, or Coracle. Each
                                        has different fee structures and services.
                                    </p>
                                </div>
                                <div class="hidden lg:flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-5 h-5 text-orange/50">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                    2
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-green text-lg mb-2">
                                        Configure Your Details
                                    </h4>
                                    <p class="text-green/70 leading-relaxed">
                                        Enter your visa type, duration of stay, and intake
                                        year to get accurate calculations based on 2026
                                        requirements.
                                    </p>
                                </div>
                                <div class="hidden lg:flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-5 h-5 text-orange/50">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                    3
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-green text-lg mb-2">
                                        Get Instant Breakdown
                                    </h4>
                                    <p class="text-green/70 leading-relaxed">
                                        See the complete cost breakdown including setup
                                        fees, monthly charges, transfer fees, and currency
                                        conversion estimates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2 bg-orange rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-info w-5 h-5 text-white">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-green">
                                What You Provide
                            </h3>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-building2 w-5 h-5 text-orange">
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
                                        <h4 class="font-bold text-green mb-1">Provider</h4>
                                        <p class="text-sm text-green/70">
                                            Choose from Fintiba, Deutsche Bank, Expatrio, or
                                            Coracle
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text w-5 h-5 text-orange">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">Visa Type</h4>
                                        <p class="text-sm text-green/70">
                                            Ausbildung, Student Visa, or Job Seeker Visa
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-5 h-5 text-orange">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">Duration</h4>
                                        <p class="text-sm text-green/70">
                                            Number of months (6-36 months)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-5 h-5 text-orange">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">
                                            Intake Year
                                        </h4>
                                        <p class="text-sm text-green/70">
                                            2026 or 2027 (amounts may vary)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2 bg-green rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-info w-5 h-5 text-white">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-green">What You Get</h3>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-badge-euro w-5 h-5 text-green">
                                            <path
                                                d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                            </path>
                                            <path d="M7 12h5"></path>
                                            <path d="M15 9.4a4 4 0 1 0 0 5.2"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">
                                            Required Amount
                                        </h4>
                                        <p class="text-sm text-green/70">
                                            Minimum blocked account deposit (€11,904 for 2026)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-credit-card w-5 h-5 text-green">
                                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                            <line x1="2" x2="22" y1="10" y2="10"></line>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">
                                            Setup Fees
                                        </h4>
                                        <p class="text-sm text-green/70">
                                            One-time provider setup/opening fee
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar w-5 h-5 text-green">
                                            <path d="M8 2v4"></path>
                                            <path d="M16 2v4"></path>
                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                            <path d="M3 10h18"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">
                                            Monthly Fees
                                        </h4>
                                        <p class="text-sm text-green/70">
                                            Account maintenance fees over your duration
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-dollar-sign w-5 h-5 text-green">
                                            <line x1="12" x2="12" y1="2" y2="22"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">
                                            Transfer &amp; Conversion Fees
                                        </h4>
                                        <p class="text-sm text-green/70">
                                            International transfer and currency conversion
                                            costs
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-wallet w-5 h-5 text-green">
                                            <path
                                                d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                                            </path>
                                            <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">
                                            Total Cost
                                        </h4>
                                        <p class="text-sm text-green/70">
                                            Complete amount you need to prepare including all
                                            fees
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-info w-5 h-5 text-green">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green mb-1">
                                            Provider Details
                                        </h4>
                                        <p class="text-sm text-green/70">
                                            Processing time and additional services included
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-orange/10 border-2 border-orange/20 rounded-2xl p-5">
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-orange flex-shrink-0 mt-0.5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                        <p class="text-green/80 leading-relaxed">
                            All calculations are based on official 2026 blocked
                            account requirements (€992/month). The calculator helps
                            you compare total costs across different providers to make
                            an informed decision.
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
                            <span class="font-semibold text-foreground pr-4">What is a blocked account (Sperrkonto) for
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
                                A blocked account (Sperrkonto in German) is a special
                                bank account required for all international students and
                                Ausbildung trainees applying for a German visa. You must
                                deposit a specific minimum amount (€11,904 for Winter
                                2026) before applying for your visa. Once in Germany,
                                you can withdraw a limited amount each month
                                (€992/month) to cover living expenses. This proves to
                                German authorities that you have sufficient funds to
                                support yourself during your stay.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">How much money do I need in my blocked account
                                for
                                Ausbildung in 2026?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                For Winter 2026 intake (starting September 2026 or
                                later), you need exactly €11,904 in your blocked
                                account. This amount is set by the German Federal
                                Foreign Office and is updated annually based on living
                                cost estimates. For Summer 2026 (if applicable), the
                                requirement may differ. The €11,904 covers 12 months of
                                living expenses at €992 per month, which is the
                                government-mandated minimum for financial proof.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">When do I need to open my blocked
                                account?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                You should open your blocked account 3-4 months before
                                your visa appointment. The timeline: Month 1: Research
                                banks and choose provider, Month 2: Submit application
                                and wait for account confirmation (can take 2-4 weeks),
                                Month 3: Transfer funds and wait for confirmation
                                certificate (1-2 weeks), Month 4: Use confirmation
                                certificate for visa application. Starting early is
                                crucial because international bank transfers can take
                                time, and you need the certificate before your visa
                                interview.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Which banks offer blocked accounts for
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
                                Popular blocked account providers include: Fintiba (€149
                                setup, most popular, fast processing), Deutsche Bank
                                (€150 setup, traditional option), Expatrio (€49 setup,
                                includes additional services), Coracle (digital-first,
                                competitive fees), X-Patrio (student-focused). Each has
                                different fees, processing times, and additional
                                services. Our calculator helps you compare total costs
                                including setup fees, monthly charges, and transfer
                                fees.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">What are the total costs for opening a blocked
                                account?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Total costs typically include: Setup/Opening Fee:
                                €49-€150 (one-time), Monthly Account Fee:
                                €0-€5.90/month, International Transfer Fee: €10-€50
                                (varies by your bank), Currency Conversion Fee: 0.5%-3%
                                of transfer amount. Total first-year costs typically
                                range from €100 to €300 depending on the provider. Our
                                calculator shows exact costs for each option so you can
                                choose the most affordable solution.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Can I use a blocked account from my home
                                country
                                bank?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                No, you cannot use a regular savings account from your
                                home country. German visa authorities only accept
                                blocked accounts (Sperrkonto) from specific German banks
                                or authorized international providers. These accounts
                                have special legal status in Germany and are regulated
                                to ensure monthly withdrawal limits. You must use one of
                                the approved providers like Fintiba, Deutsche Bank,
                                Expatrio, or other licensed Sperrkonto services.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">How do monthly withdrawals from blocked
                                account
                                work?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Once you arrive in Germany and register your address
                                (Anmeldung), your blocked account is activated for
                                monthly withdrawals. You can withdraw €992 per month
                                automatically. The money is transferred to your regular
                                German bank account (like N26, Sparkasse, or Deutsche
                                Bank). You cannot withdraw the full amount at once - it
                                is strictly limited to 1/12 of the total each month.
                                This ensures you have funds available throughout the
                                year.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">What happens to my blocked account money if my
                                visa is
                                rejected?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                If your visa application is rejected, you can request a
                                full refund of your blocked account deposit. The
                                process: Submit visa rejection letter to your blocked
                                account provider, Request account closure and refund,
                                Money is transferred back to your original account
                                within 2-4 weeks, Setup fees are generally
                                non-refundable. Keep all documentation from your visa
                                interview. Most providers have straightforward refund
                                processes for rejected visa cases.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Do I need a blocked account if I have an
                                Ausbildung
                                contract with stipend?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Yes, you still need a blocked account even if you have
                                an Ausbildung contract with a monthly stipend. German
                                visa law requires financial proof for all visa types,
                                regardless of whether you will earn money during
                                training. However, some consulates may reduce the
                                required amount if you can prove guaranteed monthly
                                income from your training contract. Contact your local
                                German consulate to confirm specific requirements for
                                Ausbildung visa applicants.
                            </div>
                        </div>
                    </div>
                    <div class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                        <button
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                            aria-expanded="false">
                            <span class="font-semibold text-foreground pr-4">Can I top up my blocked account after opening
                                it?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div
                                class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                Yes, you can add more money to your blocked account at
                                any time. This is useful if: Living costs increase, You
                                want extra emergency funds, You extend your stay in
                                Germany beyond the initial period, Your visa is extended
                                for additional training years. Simply make another
                                international transfer to your blocked account number.
                                The monthly withdrawal limit may be adjusted based on
                                the new total balance and remaining months.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mb-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-green mb-2">
                        Related Tools You Might Need
                    </h2>
                    <p class="text-green/70">
                        Continue planning your Ausbildung journey with these helpful
                        tools
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <a class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                        href="{{ route('front.tools.living-cost-calculator') }}">
                        <div class="mb-4">
                            <div class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-house w-6 h-6 text-orange group-hover:text-white transition-colors">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors">
                            Living Cost Calculator
                        </h3>
                        <p class="text-sm text-green/70 leading-relaxed mb-4">
                            Estimate monthly living costs in different German cities
                        </p>
                        <div
                            class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                            <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize">financial</span>
                        </div>
                    </a><a
                        class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                        href="{{ route('front.tools.roi-calculator') }}">
                        <div class="mb-4">
                            <div class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-trending-up w-6 h-6 text-orange group-hover:text-white transition-colors">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors">
                            ROI Calculator
                        </h3>
                        <p class="text-sm text-green/70 leading-relaxed mb-4">
                            Calculate return on investment for Ausbildung vs your home
                            country career
                        </p>
                        <div
                            class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                            <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize">financial</span>
                        </div>
                    </a><a
                        class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                        href="{{ route('front.tools.document-checklist') }}">
                        <div class="mb-4">
                            <div class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-check w-6 h-6 text-orange group-hover:text-white transition-colors">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="m9 15 2 2 4-4"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors">
                            Document Checklist
                        </h3>
                        <p class="text-sm text-green/70 leading-relaxed mb-4">
                            Get a complete checklist of required documents for your
                            visa application
                        </p>
                        <div
                            class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                            <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize">planning</span>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <a class="inline-flex items-center gap-2 px-6 py-3 bg-orange hover:bg-orange-hover text-white rounded-full font-semibold transition-colors"
                        href="{{ route('front.tools') }}">Browse All Tools<svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right w-4 h-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></a>
                </div>
            </section>
            <section class="bg-beige rounded-2xl border-2 border-border p-8 text-center">
                <h3 class="text-2xl font-semibold text-green mb-3">
                    Need Help with Your Blocked Account?
                </h3>
                <p class="text-green/80 mb-6 max-w-2xl mx-auto">
                    Create your free account to access more tools and resources to
                    help you prepare for your German visa application.
                </p>
                <a href="{{ route('front.consultation') }}"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base bg-orange hover:bg-orange-hover rounded-full">Create
                    Free Account</a>
            </section>
        </div>
    </main>
    </div>
    </main>
@endsection
