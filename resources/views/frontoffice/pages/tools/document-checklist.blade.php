@extends('frontoffice.layouts.app')

@section('title', 'Document Checklist Generator | GoAusbildung')

@section('meta')
    <meta name="description" content="Generate personalized document checklist based on your nationality, Ausbildung sector, and current situation.">
    <meta property="og:title" content="Document Checklist Generator | GoAusbildung">
    <meta property="og:description" content="Generate personalized document checklist based on your nationality, Ausbildung sector, and current situation.">
    <meta name="keywords" content="ausbildung document checklist,german visa documents,ausbildung application documents,vocational training germany documents,ausbildung visa requirements">
@endsection

@section('content')
    <header class="bg-card border-b border-border py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <a class="inline-flex items-center mb-6 group" href="/tools">
                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-green-light/5 hover:text-foreground h-10 px-6 text-sm gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left h-4 w-4 transition-transform group-hover:-translate-x-1" aria-hidden="true">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>Back to Tools
                </button>
            </a>
            <div class="flex items-start gap-4 md:gap-6">
                <div class="p-3 md:p-4 rounded-xl bg-orange/10 flex-shrink-0" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-8 w-8 md:h-10 md:w-10 text-orange">
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">Application & Documentation</div>
                    </div>
                    <h1 class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-secondary mb-3">Document Checklist Generator</h1>
                    <p class="text-base md:text-lg text-muted-foreground max-w-3xl">Generate a personalized document checklist for your German Ausbildung application based on your nationality and sector. Get exact locations, costs, and timelines for obtaining each document.</p>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <div class="space-y-8">

                <!-- Application Profile Form -->
                <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-green mb-2">Your Application Profile</h2>
                        <p class="text-green/70">Provide your details to generate a comprehensive document checklist tailored to your specific situation.</p>
                    </div>
                    <div class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nationality -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="nationality">Nationality *</label>
                                <select id="nationality" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" required>
                                    <option value="">Select your nationality</option>
                                </select>
                            </div>
                            <!-- Sector -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="dc-sector">Ausbildung Sector *</label>
                                <select id="dc-sector" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" required>
                                    <option value="">Select a sector</option>
                                    <option value="healthcare">Healthcare (Nursing, Elderly Care, Medical Assistant)</option>
                                    <option value="it">IT & Technology (Software Development, Networking)</option>
                                    <option value="engineering">Engineering (Mechanical, Electrical, Automotive)</option>
                                    <option value="hospitality">Hospitality & Tourism (Hotel, Restaurant)</option>
                                    <option value="business">Business & Administration (Office, Accounting)</option>
                                    <option value="construction">Construction & Trades (Carpentry, Plumbing)</option>
                                    <option value="logistics">Logistics & Transportation (Warehouse, Shipping)</option>
                                    <option value="retail">Retail & Sales (Shop Assistant, Customer Service)</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <!-- Education Level -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="education">Education Level *</label>
                                <select id="education" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" required>
                                    <option value="">Select education level</option>
                                    <option value="high-school">High School</option>
                                    <option value="bachelors">Bachelor's Degree</option>
                                    <option value="masters">Master's Degree</option>
                                    <option value="phd">PhD/Doctorate</option>
                                    <option value="vocational">Vocational Training</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <!-- Visa Type -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="visaType">Visa Type *</label>
                                <select id="visaType" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" required>
                                    <option value="">Select visa type</option>
                                    <option value="ausbildung">Ausbildung Training Visa</option>
                                    <option value="work">Work Visa</option>
                                    <option value="student">Student Visa</option>
                                    <option value="jobseeker">Job Seeker Visa</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <!-- Family Status -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="familyStatus">Family Status *</label>
                                <select id="familyStatus" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" required>
                                    <option value="">Select family status</option>
                                    <option value="single">Single</option>
                                    <option value="couple">Couple (No Children)</option>
                                    <option value="children">With Children</option>
                                </select>
                            </div>
                            <!-- Current Location -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="location">Current Location *</label>
                                <input type="text" id="location" placeholder="e.g. Lagos, Nigeria" class="flex h-12 w-full rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" required />
                            </div>
                            <!-- Budget Range -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="budget">Budget Range *</label>
                                <select id="budget" class="flex h-12 w-full items-center rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" required>
                                    <option value="">Select budget range</option>
                                    <option value="tight">Tight (Minimal funds)</option>
                                    <option value="moderate">Moderate (Average budget)</option>
                                    <option value="flexible">Flexible (Good financial backing)</option>
                                </select>
                            </div>
                            <!-- Desired Start Date -->
                            <div class="space-y-2">
                                <label class="text-sm leading-none text-green font-semibold" for="startDate">Desired Start Date</label>
                                <input type="date" id="startDate" class="flex h-12 w-full rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary/50" />
                            </div>
                        </div>

                        <!-- Generate Button -->
                        <div class="flex gap-4">
                            <button onclick="generateChecklist()" id="btn-generate" class="flex-1 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-orange hover:bg-orange/90 text-white h-11 px-8" disabled>
                                Generate Checklist
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                            </button>
                            <button onclick="resetChecklist()" id="btn-dc-reset" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold transition-colors border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-4 hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Checklist Results (hidden initially) -->
                <div id="checklist-results" class="hidden space-y-6">
                    <!-- Progress Summary -->
                    <div class="text-card-foreground shadow p-6 rounded-2xl bg-cream border-2 border-beige">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-2xl font-bold text-green">Your Document Checklist</h2>
                            <span class="text-sm text-green/70" id="progress-text">0 of 0 documents completed (0%)</span>
                        </div>
                        <div class="w-full bg-beige rounded-full h-3 mb-4">
                            <div id="checklist-progress-bar" class="bg-green h-3 rounded-full transition-all duration-500" style="width: 0%"></div>
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center p-3 bg-white rounded-xl border">
                                <div class="text-2xl font-bold text-orange" id="stat-urgent">0</div>
                                <div class="text-xs text-muted-foreground">Urgent</div>
                            </div>
                            <div class="text-center p-3 bg-white rounded-xl border">
                                <div class="text-2xl font-bold text-green" id="stat-timeline">3-6 months</div>
                                <div class="text-xs text-muted-foreground">Est. Timeline</div>
                            </div>
                            <div class="text-center p-3 bg-white rounded-xl border">
                                <div class="text-2xl font-bold text-secondary" id="stat-cost">&euro;2,000-4,000</div>
                                <div class="text-xs text-muted-foreground">Est. Total Cost</div>
                            </div>
                        </div>
                    </div>

                    <!-- Document Categories -->
                    <div id="checklist-categories"></div>
                </div>

                <!-- How It Works (shown when no results) -->
                <div id="dc-how-it-works">
                    <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige">
                        <h2 class="text-2xl font-bold text-green mb-2">How to Use the Document Checklist Generator</h2>
                        <p class="text-green/70 mb-8">Get a complete, personalized checklist of all required documents for your Ausbildung visa application based on your nationality and situation.</p>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 border-beige">
                                <div class="p-3 rounded-xl bg-green/10 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-green"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <h3 class="font-bold text-green mb-2">Enter Your Profile</h3>
                                <p class="text-sm text-green/70">Provide your nationality, sector, education level, visa type, family status, and current location to get accurate requirements.</p>
                            </div>
                            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 border-beige">
                                <div class="p-3 rounded-xl bg-green/10 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-green"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                </div>
                                <h3 class="font-bold text-green mb-2">Select Document Type</h3>
                                <p class="text-sm text-green/70">Choose your Ausbildung sector and visa type to identify sector-specific and visa-specific document requirements.</p>
                            </div>
                            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-white border-2 border-beige">
                                <div class="p-3 rounded-xl bg-green/10 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-green"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                </div>
                                <h3 class="font-bold text-green mb-2">Get Your Checklist</h3>
                                <p class="text-sm text-green/70">Receive a comprehensive checklist with all required documents, organized by category with detailed descriptions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What You Provide / What You Get -->
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2 bg-orange rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-white"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-green">What You Provide</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-5 h-5 text-orange flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Nationality</h4><p class="text-xs text-green/70">Your country of citizenship</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase w-5 h-5 text-orange flex-shrink-0 mt-0.5"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect width="20" height="14" x="2" y="6" rx="2"></rect></svg>
                                <div><h4 class="font-bold text-green text-sm">Sector</h4><p class="text-xs text-green/70">Healthcare, IT, Engineering, Hospitality, etc.</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap w-5 h-5 text-orange flex-shrink-0 mt-0.5"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Education Level</h4><p class="text-xs text-green/70">High School, Bachelor's, Master's, PhD, etc.</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-5 h-5 text-orange flex-shrink-0 mt-0.5"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Visa Type</h4><p class="text-xs text-green/70">Ausbildung Training Visa, Work Visa, Student Visa, etc.</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-5 h-5 text-orange flex-shrink-0 mt-0.5"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Family Status</h4><p class="text-xs text-green/70">Single, Couple, With Children</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5 text-orange flex-shrink-0 mt-0.5"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <div><h4 class="font-bold text-green text-sm">Current Location</h4><p class="text-xs text-green/70">City and country where you currently live</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2 bg-green rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-white"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-green">What You Get</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check w-5 h-5 text-green flex-shrink-0 mt-0.5"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="m9 15 2 2 4-4"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Complete Checklist</h4><p class="text-xs text-green/70">All required documents organized by category</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-5 h-5 text-green flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Country-Specific Docs</h4><p class="text-xs text-green/70">Additional documents required based on your nationality</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-5 h-5 text-green flex-shrink-0 mt-0.5"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Timeline</h4><p class="text-xs text-green/70">Estimated time to collect each document</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins w-5 h-5 text-green flex-shrink-0 mt-0.5"><circle cx="8" cy="8" r="6"></circle><path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path><path d="M7 6h1v4"></path><path d="m16.71 13.88.7.71-2.82 2.82"></path></svg>
                                <div><h4 class="font-bold text-green text-sm">Cost Estimates</h4><p class="text-xs text-green/70">Approximate costs for obtaining documents</p></div>
                            </div>
                            <div class="flex items-start gap-3 bg-white border-2 border-beige rounded-xl p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-5 h-5 text-green flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <div><h4 class="font-bold text-green text-sm">Processing Times</h4><p class="text-xs text-green/70">Expected processing duration for each document</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info Note -->
                <div class="bg-beige/50 border border-beige rounded-xl p-4 text-center">
                    <p class="text-sm text-green/70">Checklists are tailored to your nationality and include country-specific requirements, embassy procedures, and 2026 visa regulations.</p>
                </div>

                <!-- FAQ Section -->
                <div class="text-card-foreground shadow rounded-2xl bg-cream border-2 border-beige overflow-hidden">
                    <div class="p-8 pb-4">
                        <h2 class="text-2xl font-bold text-green mb-2">Frequently Asked Questions</h2>
                    </div>
                    <div class="divide-y divide-beige">
                        <div class="faq-item">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                                <span class="font-semibold text-green pr-4">What documents are required for Ausbildung application?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">The core required documents include: valid passport, birth certificate (apostilled), high school diploma and transcripts (apostilled and translated), German language certificate (B1/B2), Ausbildung training contract from a German company, blocked account confirmation (&euro;11,208), health insurance proof, police clearance certificate, CV/resume in German format, and medical fitness certificate. Additional documents may be required based on your specific situation, nationality, and chosen sector.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                                <span class="font-semibold text-green pr-4">Do document requirements vary by nationality?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Yes, document requirements can vary significantly based on your nationality. Some countries require additional documents like TB test certificates, extra financial proof, or specific educational evaluations. Embassy requirements also differ. Our tool provides country-specific guidance to ensure you prepare the correct documents for your nationality.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                                <span class="font-semibold text-green pr-4">What is apostille and which documents need it?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">An apostille is an international certification that authenticates the origin of a public document. Documents requiring apostille typically include: birth certificate, marriage certificate, high school diploma and transcripts, university degrees, police clearance certificate, and sometimes medical certificates. The apostille must be obtained from the issuing country's designated authority before submitting to the German embassy.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                                <span class="font-semibold text-green pr-4">Do I need to translate all documents to German?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">Yes, all documents not originally in German or English must be translated to German by a certified translator (vereidigter &Uuml;bersetzer). This includes educational certificates, birth certificates, marriage certificates, work experience letters, and police clearance certificates. Translation costs typically range from &euro;30-100 per document.</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                                <span class="font-semibold text-green pr-4">What is the total cost for document preparation?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">The total cost typically ranges from &euro;2,000-4,000, excluding the blocked account (&euro;11,208). Major expenses include: blocked account setup fees (&euro;50-150), apostille services (&euro;20-50 per document), certified translations (&euro;30-100 per document), German language course and B1/B2 exam (&euro;500-1,500), health insurance (&euro;30-100/month), visa application fee (&euro;75).</div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-beige/50 transition-colors" onclick="toggleFaq(this)">
                                <span class="font-semibold text-green pr-4">How long does it take to collect all documents?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="faq-chevron text-muted-foreground flex-shrink-0 transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                            </button>
                            <div class="faq-content hidden px-6 pb-6 text-sm text-green/70 leading-relaxed">The complete document collection process typically takes 3-6 months. Timeline breakdown: Educational credential evaluation (8-12 weeks), German language certificate preparation (3-6 months for B1/B2), police clearance certificate (4-8 weeks), apostille services (2-6 weeks), blocked account setup (2-4 weeks), medical certificates (2-3 weeks). Start at least 6-9 months before your intended start date.</div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="relative rounded-2xl overflow-hidden p-8 bg-gradient-to-br from-primary/10 to-orange/10 border">
                    <div class="text-center max-w-2xl mx-auto">
                        <h3 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-3">Ready to Apply? Browse Live Positions</h3>
                        <p class="text-muted-foreground mb-6">Explore verified job openings from German employers seeking international talent. Start your Ausbildung journey today.</p>
                        <div class="flex flex-col sm:flex-row gap-3 justify-center">
                            <a href="/jobs" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors bg-primary text-primary-foreground hover:bg-primary/90 h-11 px-8">Browse Jobs</a>
                            <a href="/consultation" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-8">Book Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .faq-chevron.rotated { transform: rotate(180deg); }
        .doc-checkbox:checked + .doc-checkmark { display: flex; }
        .doc-checkbox:checked ~ .doc-label { text-decoration: line-through; opacity: 0.6; }
        .category-content { transition: max-height 0.3s ease; }
    </style>

    <script>
        // Nationalities
        const nationalities = ["India","Nigeria","Pakistan","Bangladesh","Philippines","Egypt","Vietnam","Turkey","Morocco","Tunisia","Algeria","Kenya","Ghana","Ethiopia","South Africa","Mexico","Brazil","Colombia","Argentina","Peru","China","Indonesia","Thailand","Nepal","Sri Lanka","Ukraine","Russia","Serbia","Albania","Bosnia and Herzegovina","North Macedonia","Jordan","Lebanon","Syria","Iran","Iraq","Afghanistan","Cameroon","Senegal","Ivory Coast","Uganda","Tanzania","Zimbabwe","Other"];

        // All documents
        const allDocuments = [
            {id:"passport",name:"Valid Passport",description:"Passport valid for at least 6 months beyond intended stay in Germany",category:"Personal Documents",cost:"\u20AC50-150",time:"2-6 weeks",priority:"urgent",required:true,notes:"Must have at least 2 blank pages for visa stamps"},
            {id:"birth-certificate",name:"Birth Certificate",description:"Original birth certificate with apostille and German translation",category:"Personal Documents",cost:"\u20AC20-50",time:"1-3 weeks",priority:"urgent",required:true,notes:"Must be issued within last 6 months or apostilled"},
            {id:"passport-photos",name:"Biometric Passport Photos",description:"4-6 recent biometric passport photos (35mm x 45mm)",category:"Personal Documents",cost:"\u20AC10-20",time:"1 day",priority:"high",required:true,notes:"Must meet German biometric photo requirements"},
            {id:"marriage-certificate",name:"Marriage Certificate (if applicable)",description:"Marriage certificate with apostille and German translation",category:"Personal Documents",cost:"\u20AC30-60",time:"2-4 weeks",priority:"medium",required:false,notes:"Required if married or applying with spouse"},
            {id:"children-birth-certs",name:"Children's Birth Certificates (if applicable)",description:"Birth certificates for all children with apostille and translation",category:"Personal Documents",cost:"\u20AC30-50 per child",time:"2-4 weeks",priority:"medium",required:false,notes:"Required if applying with children"},
            {id:"name-change",name:"Name Change Certificate (if applicable)",description:"Official documentation of any name changes",category:"Personal Documents",cost:"\u20AC20-40",time:"1-2 weeks",priority:"medium",required:false},
            {id:"high-school-diploma",name:"High School Diploma",description:"Original high school diploma with apostille and German translation",category:"Educational Documents",cost:"\u20AC40-80",time:"3-6 weeks",priority:"urgent",required:true,notes:"Must be evaluated for German equivalency"},
            {id:"high-school-transcripts",name:"High School Transcripts",description:"Complete transcripts showing all grades and subjects",category:"Educational Documents",cost:"\u20AC30-60",time:"2-4 weeks",priority:"urgent",required:true,notes:"Must include grading scale explanation"},
            {id:"bachelor-degree",name:"Bachelor's Degree (if applicable)",description:"University degree certificate with apostille and translation",category:"Educational Documents",cost:"\u20AC50-100",time:"4-8 weeks",priority:"high",required:false,notes:"Include if you have higher education"},
            {id:"university-transcripts",name:"University Transcripts (if applicable)",description:"Complete university transcripts with courses and grades",category:"Educational Documents",cost:"\u20AC40-80",time:"3-6 weeks",priority:"high",required:false},
            {id:"language-certificates",name:"German Language Certificate",description:"B1/B2 German language proficiency certificate (Goethe, TestDaF, telc)",category:"Educational Documents",cost:"\u20AC150-200",time:"4-12 weeks",priority:"urgent",required:true,notes:"Minimum B1 required for most Ausbildung programs"},
            {id:"english-certificate",name:"English Language Certificate (optional)",description:"TOEFL, IELTS, or Cambridge certificate if applicable",category:"Educational Documents",cost:"\u20AC200-250",time:"4-8 weeks",priority:"low",required:false},
            {id:"vocational-certs",name:"Previous Vocational Certificates",description:"Any previous vocational training or professional certificates",category:"Educational Documents",cost:"\u20AC30-60",time:"2-4 weeks",priority:"medium",required:false,notes:"Can strengthen your application"},
            {id:"recognition-assessment",name:"Educational Recognition Assessment",description:"anabin or ZAB assessment of foreign qualifications",category:"Educational Documents",cost:"\u20AC100-200",time:"8-12 weeks",priority:"high",required:true,notes:"Required for foreign educational credentials"},
            {id:"blocked-account",name:"Blocked Account (Sperrkonto)",description:"Blocked account with minimum \u20AC11,208 for first year",category:"Financial Documents",cost:"\u20AC11,208 + setup fees",time:"2-4 weeks",priority:"urgent",required:true,notes:"Required for visa - use Fintiba, Deutsche Bank, or Expatrio"},
            {id:"blocked-account-confirm",name:"Blocked Account Confirmation Letter",description:"Official confirmation letter from blocked account provider",category:"Financial Documents",cost:"Included",time:"1 week",priority:"urgent",required:true,notes:"Automatically provided by blocked account provider"},
            {id:"bank-statements",name:"Bank Statements (Last 6 Months)",description:"Personal bank statements showing financial stability",category:"Financial Documents",cost:"\u20AC10-30",time:"1-2 weeks",priority:"high",required:true,notes:"Must show regular income or savings"},
            {id:"sponsorship-letter",name:"Sponsorship Letter (if applicable)",description:"Letter from sponsor with income proof and bank statements",category:"Financial Documents",cost:"\u20AC0",time:"1 week",priority:"medium",required:false,notes:"Alternative to blocked account in some cases"},
            {id:"income-tax",name:"Income Tax Returns",description:"Last 2 years of income tax returns or proof of income",category:"Financial Documents",cost:"\u20AC20-40",time:"1-2 weeks",priority:"medium",required:false,notes:"Strengthens financial proof"},
            {id:"scholarship-letter",name:"Scholarship Award Letter (if applicable)",description:"Official scholarship confirmation from recognized institution",category:"Financial Documents",cost:"\u20AC0",time:"2-4 weeks",priority:"medium",required:false,notes:"Can reduce blocked account requirement"},
            {id:"ausbildung-contract",name:"Ausbildung Training Contract",description:"Signed training contract from German company",category:"Professional Documents",cost:"\u20AC0",time:"4-12 weeks",priority:"urgent",required:true,notes:"Most critical document - required before visa application"},
            {id:"company-registration",name:"Company Registration Certificate",description:"Official registration certificate of training company",category:"Professional Documents",cost:"\u20AC0",time:"1 week",priority:"high",required:true,notes:"Provided by employer"},
            {id:"cv-resume",name:"CV/Resume (German format)",description:"Professional CV in German format (Europass or tabular)",category:"Professional Documents",cost:"\u20AC0-50",time:"1 week",priority:"urgent",required:true,notes:"Must include photo, complete work history, and education"},
            {id:"cover-letter",name:"Cover Letter (Motivationsschreiben)",description:"Motivation letter in German explaining interest in Ausbildung",category:"Professional Documents",cost:"\u20AC0-50",time:"1 week",priority:"high",required:true,notes:"Should be tailored to specific sector and company"},
            {id:"work-experience",name:"Work Experience Certificates",description:"Letters of recommendation and work certificates from previous employers",category:"Professional Documents",cost:"\u20AC0-30",time:"2-4 weeks",priority:"medium",required:false,notes:"Include if you have relevant work experience"},
            {id:"references",name:"Professional References",description:"Contact details of 2-3 professional references",category:"Professional Documents",cost:"\u20AC0",time:"1 week",priority:"low",required:false},
            {id:"portfolio",name:"Portfolio/Work Samples (if applicable)",description:"Portfolio of work for creative or technical fields",category:"Professional Documents",cost:"\u20AC0-100",time:"2-4 weeks",priority:"medium",required:false,notes:"Important for IT, design, engineering sectors"},
            {id:"health-insurance",name:"Health Insurance Proof",description:"Travel health insurance or German health insurance confirmation",category:"Medical Documents",cost:"\u20AC30-100/month",time:"1-2 weeks",priority:"urgent",required:true,notes:"Must cover minimum \u20AC30,000 for entire visa period"},
            {id:"medical-certificate",name:"Medical Fitness Certificate",description:"Doctor's certificate confirming fitness for training",category:"Medical Documents",cost:"\u20AC50-100",time:"1-2 weeks",priority:"high",required:true,notes:"Required for most Ausbildung programs, especially healthcare"},
            {id:"vaccination-records",name:"Vaccination Records",description:"Complete vaccination history including COVID-19, measles, etc.",category:"Medical Documents",cost:"\u20AC20-40",time:"1 week",priority:"high",required:true,notes:"Measles vaccination mandatory in Germany"},
            {id:"tb-test",name:"TB Test Certificate (for certain countries)",description:"Tuberculosis test certificate if required for your nationality",category:"Medical Documents",cost:"\u20AC40-80",time:"1-2 weeks",priority:"medium",required:false,notes:"Required for applicants from high-risk countries"},
            {id:"medical-history",name:"Medical History Summary",description:"Summary of medical history and current medications",category:"Medical Documents",cost:"\u20AC30-60",time:"1 week",priority:"low",required:false},
            {id:"police-clearance",name:"Police Clearance Certificate",description:"Criminal record certificate from country of residence",category:"Legal Documents",cost:"\u20AC20-100",time:"4-8 weeks",priority:"urgent",required:true,notes:"Must be issued within last 3 months and apostilled"},
            {id:"visa-application",name:"Visa Application Form",description:"Completed German national visa application form",category:"Legal Documents",cost:"\u20AC75 visa fee",time:"1 day",priority:"urgent",required:true,notes:"Available at German embassy/consulate website"},
            {id:"declaration-authenticity",name:"Declaration of Authenticity",description:"Signed declaration that all documents are authentic",category:"Legal Documents",cost:"\u20AC0",time:"1 day",priority:"high",required:true,notes:"Usually provided by embassy"},
            {id:"residence-permit",name:"Residence Permit Application",description:"Application for residence permit (after arrival)",category:"Legal Documents",cost:"\u20AC100",time:"8-12 weeks",priority:"medium",required:true,notes:"Applied for after arrival in Germany"},
            {id:"housing-agreement",name:"Housing Contract/Confirmation",description:"Proof of accommodation in Germany (rental contract or confirmation)",category:"Legal Documents",cost:"\u20AC400-800/month",time:"2-8 weeks",priority:"high",required:true,notes:"Required for residence registration (Anmeldung)"},
            {id:"anmeldung",name:"Anmeldung (Registration Confirmation)",description:"Registration with local authorities after arrival",category:"Legal Documents",cost:"\u20AC0",time:"1-4 weeks",priority:"high",required:true,notes:"Must be done within 14 days of arrival"},
            {id:"proof-of-address",name:"Proof of Address in Home Country",description:"Utility bill or official document showing current address",category:"Legal Documents",cost:"\u20AC0-10",time:"1 week",priority:"medium",required:true,notes:"Must be recent (within 3 months)"},
            {id:"consent-minors",name:"Parental Consent Letter (if under 18)",description:"Notarized parental consent for applicants under 18",category:"Legal Documents",cost:"\u20AC30-80",time:"1-2 weeks",priority:"urgent",required:false,notes:"Required for minors traveling alone"}
        ];

        const categories = ["Personal Documents","Educational Documents","Financial Documents","Professional Documents","Medical Documents","Legal Documents"];

        let completedDocs = new Set();

        // Populate nationality dropdown
        const natSelect = document.getElementById('nationality');
        nationalities.forEach(n => {
            const opt = document.createElement('option');
            opt.value = n; opt.textContent = n;
            natSelect.appendChild(opt);
        });

        // Enable generate button when all required fields filled
        const requiredFields = ['nationality','dc-sector','education','visaType','familyStatus','location','budget'];
        requiredFields.forEach(id => {
            document.getElementById(id).addEventListener('change', checkFormValid);
            document.getElementById(id).addEventListener('input', checkFormValid);
        });

        function checkFormValid() {
            const allFilled = requiredFields.every(id => document.getElementById(id).value.trim() !== '');
            document.getElementById('btn-generate').disabled = !allFilled;
        }

        function generateChecklist() {
            const familyStatus = document.getElementById('familyStatus').value;
            const education = document.getElementById('education').value;
            const sector = document.getElementById('dc-sector').value;

            // Filter documents based on user profile
            let docs = allDocuments.filter(doc => {
                // Always include required docs
                if (doc.required) return true;
                // Family-related docs
                if (doc.id === 'marriage-certificate' && (familyStatus === 'couple' || familyStatus === 'children')) return true;
                if (doc.id === 'children-birth-certs' && familyStatus === 'children') return true;
                // Education-related
                if ((doc.id === 'bachelor-degree' || doc.id === 'university-transcripts') && (education === 'bachelors' || education === 'masters' || education === 'phd')) return true;
                if (doc.id === 'vocational-certs' && education === 'vocational') return true;
                // Sector-specific
                if (doc.id === 'portfolio' && (sector === 'it' || sector === 'engineering')) return true;
                // Generally useful optional docs
                if (doc.id === 'work-experience' || doc.id === 'income-tax' || doc.id === 'references') return true;
                if (doc.id === 'tb-test' || doc.id === 'medical-history') return true;
                if (doc.id === 'english-certificate') return true;
                if (doc.id === 'sponsorship-letter' || doc.id === 'scholarship-letter') return true;
                if (doc.id === 'name-change' || doc.id === 'consent-minors') return true;
                return false;
            });

            // Count urgent
            const urgentCount = docs.filter(d => d.priority === 'urgent').length;
            document.getElementById('stat-urgent').textContent = urgentCount;

            // Render categories
            const container = document.getElementById('checklist-categories');
            container.innerHTML = '';
            completedDocs = new Set();

            categories.forEach(cat => {
                const catDocs = docs.filter(d => d.category === cat);
                if (catDocs.length === 0) return;

                const requiredCount = catDocs.filter(d => d.required).length;
                const catHtml = `
                    <div class="text-card-foreground shadow rounded-2xl bg-cream border-2 border-beige overflow-hidden mb-4">
                        <button class="w-full flex items-center justify-between p-6 hover:bg-beige/30 transition-colors" onclick="toggleCategory(this)">
                            <div class="flex items-center gap-3">
                                <h3 class="text-lg font-bold text-green">${cat}</h3>
                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-xs bg-beige text-green">${catDocs.length} docs</span>
                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-xs bg-orange/10 text-orange">${requiredCount} required</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cat-chevron text-muted-foreground transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                        <div class="cat-content px-6 pb-4 space-y-3">
                            ${catDocs.map(doc => renderDocument(doc)).join('')}
                        </div>
                    </div>
                `;
                container.insertAdjacentHTML('beforeend', catHtml);
            });

            // Update total count
            updateProgress(docs.length);

            // Show results, hide how-it-works
            document.getElementById('checklist-results').classList.remove('hidden');
            document.getElementById('dc-how-it-works').classList.add('hidden');
            document.getElementById('btn-dc-reset').classList.remove('hidden');

            document.getElementById('checklist-results').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function renderDocument(doc) {
            const priorityClasses = {
                urgent: 'bg-orange/10 text-orange border-orange/30',
                high: 'bg-orange/10 text-orange border-orange/30',
                medium: 'bg-beige text-green border-beige',
                low: 'bg-cream text-green/70 border-green/20'
            };
            const pClass = priorityClasses[doc.priority] || priorityClasses.medium;

            return `
                <div class="bg-white rounded-xl border p-4 hover:border-orange/30 transition-colors" id="doc-${doc.id}">
                    <div class="flex items-start gap-3">
                        <label class="flex items-center justify-center w-5 h-5 mt-0.5 rounded border-2 border-primary cursor-pointer flex-shrink-0 hover:bg-primary/10 transition-colors">
                            <input type="checkbox" class="sr-only" onchange="toggleDoc('${doc.id}', this.checked)" />
                            <div class="hidden items-center justify-center w-full h-full bg-primary rounded-sm check-mark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                        </label>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-start justify-between gap-2 mb-1">
                                <span class="font-semibold text-green doc-name">${doc.name}</span>
                                <div class="flex items-center gap-2 flex-shrink-0">
                                    ${doc.required ? '<span class="inline-flex items-center rounded-full border px-2 py-0.5 text-[10px] font-semibold bg-orange/10 text-orange border-orange/30">Required</span>' : '<span class="inline-flex items-center rounded-full border px-2 py-0.5 text-[10px] font-semibold bg-beige text-green/70 border-beige">Optional</span>'}
                                    <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-[10px] font-semibold ${pClass}">${doc.priority}</span>
                                </div>
                            </div>
                            <p class="text-sm text-green/70 mb-2">${doc.description}</p>
                            <div class="flex flex-wrap gap-3 text-xs text-muted-foreground">
                                <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10h12"></path><path d="M4 14h9"></path><path d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"></path></svg>${doc.cost}</span>
                                <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>${doc.time}</span>
                            </div>
                            ${doc.notes ? `<p class="text-xs text-orange/80 mt-2 flex items-start gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>${doc.notes}</p>` : ''}
                        </div>
                    </div>
                </div>
            `;
        }

        function toggleDoc(docId, checked) {
            const el = document.getElementById('doc-' + docId);
            const checkMark = el.querySelector('.check-mark');
            const docName = el.querySelector('.doc-name');

            if (checked) {
                completedDocs.add(docId);
                checkMark.classList.remove('hidden');
                checkMark.classList.add('flex');
                docName.classList.add('line-through', 'opacity-60');
            } else {
                completedDocs.delete(docId);
                checkMark.classList.add('hidden');
                checkMark.classList.remove('flex');
                docName.classList.remove('line-through', 'opacity-60');
            }

            const totalDocs = document.querySelectorAll('[id^="doc-"]').length;
            updateProgress(totalDocs);
        }

        function updateProgress(total) {
            const completed = completedDocs.size;
            const pct = total > 0 ? Math.round((completed / total) * 100) : 0;
            document.getElementById('progress-text').textContent = `${completed} of ${total} documents completed (${pct}%)`;
            document.getElementById('checklist-progress-bar').style.width = pct + '%';
        }

        function toggleCategory(btn) {
            const content = btn.nextElementSibling;
            const chevron = btn.querySelector('.cat-chevron');
            content.classList.toggle('hidden');
            chevron.classList.toggle('rotated');
        }

        function resetChecklist() {
            requiredFields.forEach(id => {
                const el = document.getElementById(id);
                if (el.tagName === 'SELECT') el.selectedIndex = 0;
                else el.value = '';
            });
            document.getElementById('startDate').value = '';
            completedDocs = new Set();
            document.getElementById('checklist-results').classList.add('hidden');
            document.getElementById('dc-how-it-works').classList.remove('hidden');
            document.getElementById('btn-dc-reset').classList.add('hidden');
            document.getElementById('btn-generate').disabled = true;
        }

        function toggleFaq(btn) {
            const content = btn.nextElementSibling;
            const chevron = btn.querySelector('.faq-chevron');
            content.classList.toggle('hidden');
            chevron.classList.toggle('rotated');
        }
    </script>
@endsection
