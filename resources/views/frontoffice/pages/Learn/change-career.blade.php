@extends('frontoffice.layouts.app')

@section('title', 'Change Your Ausbildung Path | Switch Career Training in Germany | Azubi | Azubi')

@section('meta')
    <meta name="description"
        content="Need to switch your Ausbildung in Germany? Get expert guidance on legal procedures, visa protection, financial continuity, and fast employer matching. Free IHK/HWK coordination included." />
    <meta property="og:title" content="Change Your Ausbildung Path | Switch Career Training in Germany | Azubi" />
    <meta property="og:description"
        content="Need to switch your Ausbildung in Germany? Get expert guidance on legal procedures, visa protection, financial continuity, and fast employer matching. Free IHK/HWK coordination included." />
    <meta property="og:image" content="https://images.azubi.ma/og-images/change-career.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Change Your Ausbildung Path | Switch Career Training in Germany | Azubi" />
    <meta name="twitter:description"
        content="Need to switch your Ausbildung in Germany? Get expert guidance on legal procedures, visa protection, financial continuity, and fast employer matching. Free IHK/HWK coordination included." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/ausbildung/change-career') }}" />
@endsection

@section('content')
    <script type="application/ld+json">
          {&#34;@context&#34;:&#34;https://schema.org&#34;,&#34;@graph&#34;:[{&#34;@type&#34;:&#34;FAQPage&#34;,&#34;mainEntity&#34;:[{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;Can I change my Ausbildung after the probation period?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;Yes, absolutely. Under Berufsbildungsgesetz (BBiG) §22, you can terminate your training contract after the probation period with proper notice and an important reason. Our team ensures you follow the correct legal procedure, coordinates with IHK/HWK mediators if needed, and helps you secure a new contract before termination to avoid any gaps.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;Will I lose the months I already completed in my current Ausbildung?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;No, your completed training months are not lost. Keep your Ausbildungsnachweis (training record) and Berufsschule reports updated. New employers typically credit your completed modules, allowing you to continue from where you left off. We help document and transfer your credits to ensure you stay with your original exam cohort.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;What happens to my residence permit when switching Ausbildung companies?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;Your residence permit remains valid if you handle the transition correctly. You must notify the Ausländerbehörde within 2 weeks, present your new contract, and provide confirmation from your Berufsschule. We prepare all necessary paperwork, guide you through the process, and can accompany you to appointments if needed.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;Do I need to repay financial aid (BAB/BAföG) if I switch?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;No repayment is required if you continue in an eligible Ausbildung and submit change notifications within 14 days. Our team coordinates directly with Agentur für Arbeit to ensure your financial support continues uninterrupted. Only unplanned dropouts without follow-up plans trigger repayment obligations.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;How quickly can I find a new Ausbildung position?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;With our support, most trainees secure a new contract within 4-8 weeks. We maintain a network of 320+ verified partner companies across various sectors. Our fast-track process includes immediate job matching, interview preparation, and aligned start dates to prevent any gaps in your training.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;What if my current company refuses to let me go?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;If your employer refuses termination, we activate mediation through IHK/HWK chambers. These official bodies provide free mediation services for trainees. In cases of serious issues (missing training plan, safety concerns, discrimination), we help document everything for extraordinary termination under BBiG §22.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;Can I switch to a completely different field (e.g., from retail to IT)?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;Yes, career pivots are possible and often successful. We assess which of your completed modules can transfer, arrange bridging courses if needed, and match you with employers who value your existing skills and language abilities. Many of our success stories involve complete field changes.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;What documents do I need to prepare for switching?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;Essential documents include: current training contract, Ausbildungsnachweis (training log), Berufsschule transcripts, residence permit, financial aid documentation, and employment references. We provide a complete checklist and help you compile everything during our initial consultation.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;Is there a best time to switch my Ausbildung?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;The easiest time is during the 4-month probation period when termination is simplified. However, switches are possible at any stage. We recommend avoiding exam periods and considering semester breaks at Berufsschule for smoother transitions. Our advisors help you time your switch optimally.&#34;}},{&#34;@type&#34;:&#34;Question&#34;,&#34;name&#34;:&#34;What support do you provide after I start my new Ausbildung?&#34;,&#34;acceptedAnswer&#34;:{&#34;@type&#34;:&#34;Answer&#34;,&#34;text&#34;:&#34;Our support continues for 90 days after you start your new position. This includes: probation period guidance, conflict resolution support, Berufsschule integration assistance, and regular check-ins. We ensure your transition is successful and sustainable.&#34;}}]},{&#34;@type&#34;:&#34;HowTo&#34;,&#34;name&#34;:&#34;How to Switch Your Ausbildung in Germany&#34;,&#34;description&#34;:&#34;Complete guide for changing your Ausbildung training program in Germany while protecting your visa and financial aid.&#34;,&#34;step&#34;:[{&#34;@type&#34;:&#34;HowToStep&#34;,&#34;position&#34;:1,&#34;name&#34;:&#34;Assess &amp; Document&#34;,&#34;text&#34;:&#34;Comprehensive evaluation of your current situation and documentation preparation.&#34;,&#34;itemListElement&#34;:[{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Free consultation with our advisors&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Review of training log and contracts&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Chamber advisory session booking&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Risk assessment and timeline planning&#34;}]},{&#34;@type&#34;:&#34;HowToStep&#34;,&#34;position&#34;:2,&#34;name&#34;:&#34;Notify &amp; Negotiate&#34;,&#34;text&#34;:&#34;Formal termination process and negotiations with all stakeholders.&#34;,&#34;itemListElement&#34;:[{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Draft resignation or release agreement&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Notify Berufsschule and chambers&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Secure employer signatures&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Coordinate with Ausländerbehörde&#34;}]},{&#34;@type&#34;:&#34;HowToStep&#34;,&#34;position&#34;:3,&#34;name&#34;:&#34;Secure New Contract&#34;,&#34;text&#34;:&#34;Fast-track placement with verified employers and smooth onboarding.&#34;,&#34;itemListElement&#34;:[{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Interview preparation and coaching&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Employer matching from our network&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Contract review and negotiation&#34;},{&#34;@type&#34;:&#34;HowToDirection&#34;,&#34;text&#34;:&#34;Berufsschule registration&#34;}]}]},{&#34;@type&#34;:&#34;Service&#34;,&#34;serviceType&#34;:&#34;Ausbildung Career Switching Consultation&#34;,&#34;provider&#34;:{&#34;@type&#34;:&#34;Organization&#34;,&#34;name&#34;:&#34;Azubi&#34;,&#34;url&#34;:&#34;https://azubi.ma&#34;},&#34;areaServed&#34;:&#34;Germany&#34;,&#34;availableLanguage&#34;:[&#34;en&#34;,&#34;de&#34;],&#34;hasOfferCatalog&#34;:{&#34;@type&#34;:&#34;OfferCatalog&#34;,&#34;name&#34;:&#34;Ausbildung Switching Services&#34;,&#34;itemListElement&#34;:[{&#34;@type&#34;:&#34;Offer&#34;,&#34;itemOffered&#34;:{&#34;@type&#34;:&#34;Service&#34;,&#34;name&#34;:&#34;Legal Guidance&#34;,&#34;description&#34;:&#34;BBiG §22 compliance and chamber coordination&#34;}},{&#34;@type&#34;:&#34;Offer&#34;,&#34;itemOffered&#34;:{&#34;@type&#34;:&#34;Service&#34;,&#34;name&#34;:&#34;Visa Protection&#34;,&#34;description&#34;:&#34;Maintain residence permit throughout transition&#34;}},{&#34;@type&#34;:&#34;Offer&#34;,&#34;itemOffered&#34;:{&#34;@type&#34;:&#34;Service&#34;,&#34;name&#34;:&#34;Employer Matching&#34;,&#34;description&#34;:&#34;Access to 320+ verified partner companies&#34;}}]}},{&#34;@type&#34;:&#34;BreadcrumbList&#34;,&#34;itemListElement&#34;:[{&#34;@type&#34;:&#34;ListItem&#34;,&#34;position&#34;:1,&#34;item&#34;:{&#34;@id&#34;:&#34;https://azubi.ma&#34;,&#34;name&#34;:&#34;Home&#34;}},{&#34;@type&#34;:&#34;ListItem&#34;,&#34;position&#34;:2,&#34;item&#34;:{&#34;@id&#34;:&#34;https://azubi.ma/ausbildung-in-germany&#34;,&#34;name&#34;:&#34;Ausbildung in Germany&#34;}},{&#34;@type&#34;:&#34;ListItem&#34;,&#34;position&#34;:3,&#34;item&#34;:{&#34;@id&#34;:&#34;https://azubi.ma/ausbildung/change-career&#34;,&#34;name&#34;:&#34;Change Career&#34;}}]}]}
        </script>
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Bavarian Alps in autumn - representing new heights and career changes" loading="eager"
                decoding="async" class="object-cover object-center"
                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                src="{{ asset('assets/_next/bavarian-alps-hero-autumn9804.jpeg') }}" />
            <div class="absolute inset-0 bg-black/30 z-0">
            </div>
            <div class="absolute inset-0 z-0"
                style="background:radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),
            linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),
            linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),
            linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)">
            </div>
            <div
                class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5 items-center text-center max-w-4xl">
                <div class="flex flex-col gap-4 sm:gap-5">
                    <div class="animate-fade-in-up animation-delay-100">
                        <div class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold"
                            aria-label="Career Change">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-refresh-ccw h-4 w-4 mr-2" aria-hidden="true">
                                <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8">
                                </path>
                                <path d="M3 3v5h5">
                                </path>
                                <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16">
                                </path>
                                <path d="M16 16h5v5">
                                </path>
                            </svg>
                            Career Change
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Switch Your Ausbildung Without Losing Momentum
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Already in Germany and need to change your Ausbildung? Get expert legal guidance, visa protection,
                        and fast employer matching – all while keeping your financial aid intact.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Explore Options" href="#why-change"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-compass w-5 h-5 mr-2">
                                    <path
                                        d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z">
                                    </path>
                                    <circle cx="12" cy="12" r="10">
                                    </circle>
                                </svg>
                            </span>
                            <span> Explore Options
                            </span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Get Guidance" href="{{ route('front.contact') }}"> <span aria-hidden="true"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users w-5 h-5 mr-2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                    </path>
                                    <circle cx="9" cy="7" r="4">
                                    </circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87">
                                    </path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                    </path>
                                </svg>
                            </span>
                            <span> Get Guidance
                            </span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    Bavarian Alps, Bavaria
                </p>
            </div>
        </section>
        <section id="why-change" class="py-16">
            <div class="container px-4 md:px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                        Quick Diagnostic
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">
                        What&#39;s Your Current Situation?
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                        Your timing and circumstances determine the best approach. Select your scenario below to understand
                        your options and timeline.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow border-muted/40">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-lg bg-primary/10 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clock h-6 w-6">
                                    <circle cx="12" cy="12" r="10">
                                    </circle>
                                    <polyline points="12 6 12 12 16 14">
                                    </polyline>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h3 class="font-semibold text-lg">
                                        Still in Probation (First 4 Months)
                                    </h3>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Fast Track
                                    </div>
                                </div>
                                <p class="text-sm text-muted-foreground leading-relaxed">
                                    Simplified termination process with minimal notice period. We can expedite your switch
                                    within 2-3 weeks.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow border-muted/40">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-lg bg-primary/10 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-6 w-6">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h3 class="font-semibold text-lg">
                                        After Probation Period
                                    </h3>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Mediated
                                    </div>
                                </div>
                                <p class="text-sm text-muted-foreground leading-relaxed">
                                    Requires mutual agreement or important reason. We handle IHK/HWK mediation and ensure
                                    legal compliance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow border-muted/40">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-lg bg-primary/10 text-orange-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-alert h-6 w-6">
                                    <circle cx="12" cy="12" r="10">
                                    </circle>
                                    <line x1="12" x2="12" y1="8" y2="12">
                                    </line>
                                    <line x1="12" x2="12.01" y1="16" y2="16">
                                    </line>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h3 class="font-semibold text-lg">
                                        Company Conflicts or Issues
                                    </h3>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Protected
                                    </div>
                                </div>
                                <p class="text-sm text-muted-foreground leading-relaxed">
                                    Document incidents, request chamber inspection, and activate trainee protection rights
                                    under BBiG.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow border-muted/40">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-lg bg-primary/10 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-6 w-6">
                                    <circle cx="12" cy="12" r="10">
                                    </circle>
                                    <circle cx="12" cy="12" r="6">
                                    </circle>
                                    <circle cx="12" cy="12" r="2">
                                    </circle>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h3 class="font-semibold text-lg">
                                        Switching to New Field
                                    </h3>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Career Pivot
                                    </div>
                                </div>
                                <p class="text-sm text-muted-foreground leading-relaxed">
                                    Credit your completed modules, plan bridging courses, and match with employers seeking
                                    your profile.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 p-6 bg-muted/30 rounded-xl max-w-3xl mx-auto">
                    <div class="flex items-center gap-3 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-alert h-5 w-5 text-primary">
                            <circle cx="12" cy="12" r="10">
                            </circle>
                            <line x1="12" x2="12" y1="8" y2="12">
                            </line>
                            <line x1="12" x2="12.01" y1="16" y2="16">
                            </line>
                        </svg>
                        <h4 class="font-semibold">
                            Not Sure Which Applies to You?
                        </h4>
                    </div>
                    <p class="text-sm text-muted-foreground mb-4">
                        Our advisors provide free consultation to assess your specific situation and recommend the best path
                        forward.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a class="inline-flex items-center justify-center whitespace-nowrap rounded-full text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 gap-2"
                            href="#switch-form"> Get Free Assessment
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                <path d="M5 12h14">
                                </path>
                                <path d="m12 5 7 7-7 7">
                                </path>
                            </svg>
                        </a>
                        <a class="inline-flex items-center justify-center whitespace-nowrap rounded-full text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 gap-2"
                            href="#"> Explore All Options
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-target h-4 w-4">
                                <circle cx="12" cy="12" r="10">
                                </circle>
                                <circle cx="12" cy="12" r="6">
                                </circle>
                                <circle cx="12" cy="12" r="2">
                                </circle>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                        The Process
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">
                        Your 3-Stage Switching Journey
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                        A proven, systematic approach that protects your visa, finances, and career progression while
                        ensuring a smooth transition.
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow relative overflow-hidden hover:shadow-xl transition-all duration-300">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-primary/60">
                        </div>
                        <div class="flex flex-col space-y-1.5 p-6 pb-4">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <div class="p-3 rounded-lg bg-primary/10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text h-6 w-6 text-primary">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                            </path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4">
                                            </path>
                                            <path d="M10 9H8">
                                            </path>
                                            <path d="M16 13H8">
                                            </path>
                                            <path d="M16 17H8">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground mb-1">
                                            Stage 1
                                        </div>
                                        <h3 class="font-bold text-xl">
                                            Assess &amp; Document
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-primary font-medium">
                                Week 1-2
                            </p>
                        </div>
                        <div class="p-6 pt-0 space-y-4">
                            <p class="text-sm text-muted-foreground">
                                Comprehensive evaluation of your current situation and documentation preparation.
                            </p>
                            <div>
                                <h4 class="font-semibold text-sm mb-2">
                                    Key Activities:
                                </h4>
                                <ul class="space-y-1.5">
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Free consultation with our advisors
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Review of training log and contracts
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Chamber advisory session booking
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Risk assessment and timeline planning
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-4 border-t">
                                <h4 class="font-semibold text-sm mb-2">
                                    Deliverables:
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Personal checklist
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Document package
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Chamber contact
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:block absolute -right-4 top-1/2 transform -translate-y-1/2 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-8 w-8 text-muted-foreground">
                                <path d="M5 12h14">
                                </path>
                                <path d="m12 5 7 7-7 7">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow relative overflow-hidden hover:shadow-xl transition-all duration-300">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-primary/60">
                        </div>
                        <div class="flex flex-col space-y-1.5 p-6 pb-4">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <div class="p-3 rounded-lg bg-primary/10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-circle h-6 w-6 text-primary">
                                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground mb-1">
                                            Stage 2
                                        </div>
                                        <h3 class="font-bold text-xl">
                                            Notify &amp; Negotiate
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-primary font-medium">
                                Week 2-4
                            </p>
                        </div>
                        <div class="p-6 pt-0 space-y-4">
                            <p class="text-sm text-muted-foreground">
                                Formal termination process and negotiations with all stakeholders.
                            </p>
                            <div>
                                <h4 class="font-semibold text-sm mb-2">
                                    Key Activities:
                                </h4>
                                <ul class="space-y-1.5">
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Draft resignation or release agreement
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Notify Berufsschule and chambers
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Secure employer signatures
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Coordinate with Ausländerbehörde
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-4 border-t">
                                <h4 class="font-semibold text-sm mb-2">
                                    Deliverables:
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Termination letters
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Visa checklist
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Financial aid forms
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:block absolute -right-4 top-1/2 transform -translate-y-1/2 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-8 w-8 text-muted-foreground">
                                <path d="M5 12h14">
                                </path>
                                <path d="m12 5 7 7-7 7">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow relative overflow-hidden hover:shadow-xl transition-all duration-300">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-primary/60">
                        </div>
                        <div class="flex flex-col space-y-1.5 p-6 pb-4">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <div class="p-3 rounded-lg bg-primary/10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-briefcase h-6 w-6 text-primary">
                                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                            </path>
                                            <rect width="20" height="14" x="2" y="6" rx="2">
                                            </rect>
                                        </svg>
                                    </div>
                                    <div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground mb-1">
                                            Stage 3
                                        </div>
                                        <h3 class="font-bold text-xl">
                                            Secure New Contract
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-primary font-medium">
                                Week 4-8
                            </p>
                        </div>
                        <div class="p-6 pt-0 space-y-4">
                            <p class="text-sm text-muted-foreground">
                                Fast-track placement with verified employers and smooth onboarding.
                            </p>
                            <div>
                                <h4 class="font-semibold text-sm mb-2">
                                    Key Activities:
                                </h4>
                                <ul class="space-y-1.5">
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Interview preparation and coaching
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Employer matching from our network
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Contract review and negotiation
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-3 w-3 text-primary mt-0.5 flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                            </path>
                                            <path d="m9 11 3 3L22 4">
                                            </path>
                                        </svg>
                                        <span> Berufsschule registration
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-4 border-t">
                                <h4 class="font-semibold text-sm mb-2">
                                    Deliverables:
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Interview deck
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        Job shortlist
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                                        New contract
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a class="inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base gap-2"
                            href="#"> View Detailed Process Guide
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-book-open h-4 w-4">
                                <path d="M12 7v14">
                                </path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg>
                        </a>
                        <a class="inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base gap-2"
                            href="#"> Compare Alternative Pathways
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trending-up h-4 w-4">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17">
                                </polyline>
                                <polyline points="16 7 22 7 22 13">
                                </polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                        Protection
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">
                        Your Financial &amp; Legal Safety Net
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                        We ensure your visa, financial aid, and health insurance remain intact throughout your transition.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-hand-coins h-6 w-6 text-primary">
                                    <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17">
                                    </path>
                                    <path
                                        d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9">
                                    </path>
                                    <path d="m2 16 6 6">
                                    </path>
                                    <circle cx="16" cy="9" r="2.9">
                                    </circle>
                                    <circle cx="6" cy="5" r="3">
                                    </circle>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg">
                                BAB/BAföG Continuity
                            </h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Submit change request within 14 days to avoid repayment
                                </span>
                            </li>
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Maintain continuous Ausbildung status for uninterrupted support (BAB up to €822/month
                                    as of July 2026)
                                </span>
                            </li>
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Get assistance with Insolvenzgeld if company stops payments
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-house h-6 w-6 text-primary">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8">
                                    </path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg">
                                Visa &amp; Residence Protection
                            </h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Notify Ausländerbehörde within 2 weeks with new contract
                                </span>
                            </li>
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Maintain Ausbildung residence permit throughout transition (min. €1,048 gross or €822
                                    net/month from Sept 2026)
                                </span>
                            </li>
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Support for visa conversion if switching to Umschulung
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-shield h-6 w-6 text-primary">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg">
                                Health Insurance Coverage
                            </h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Seamless transition between employers
                                </span>
                            </li>
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> No gaps in coverage during switch period
                                </span>
                            </li>
                            <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-4 w-4 text-primary mt-0.5 flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Assistance with contribution documentation
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 p-8 bg-primary/5 rounded-xl max-w-4xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-6 items-center">
                        <div>
                            <h3 class="font-bold text-xl mb-3 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-scale h-5 w-5 text-primary">
                                    <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z">
                                    </path>
                                    <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z">
                                    </path>
                                    <path d="M7 21h10">
                                    </path>
                                    <path d="M12 3v18">
                                    </path>
                                    <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2">
                                    </path>
                                </svg>
                                Legal Framework
                            </h3>
                            <p class="text-sm text-muted-foreground mb-4">
                                All transitions follow Berufsbildungsgesetz (BBiG) §22 guidelines with full chamber support.
                            </p>
                            <ul class="space-y-2 text-sm text-muted-foreground">
                                <li class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-badge-check h-4 w-4 text-primary">
                                        <path
                                            d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                        </path>
                                        <path d="m9 12 2 2 4-4">
                                        </path>
                                    </svg>
                                    IHK/HWK mediation services
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-badge-check h-4 w-4 text-primary">
                                        <path
                                            d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                        </path>
                                        <path d="m9 12 2 2 4-4">
                                        </path>
                                    </svg>
                                    Ausbildungsnachweis credit transfer
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-badge-check h-4 w-4 text-primary">
                                        <path
                                            d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                        </path>
                                        <path d="m9 12 2 2 4-4">
                                        </path>
                                    </svg>
                                    Written documentation support
                                </li>
                            </ul>
                        </div>
                        <div class="bg-background p-6 rounded-lg">
                            <h4 class="font-semibold mb-3">
                                Critical Timelines
                            </h4>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between py-2 border-b">
                                    <span class="text-muted-foreground"> BAB/BAföG notification
                                    </span>
                                    <span class="font-medium"> Within 14 days
                                    </span>
                                </div>
                                <div class="flex justify-between py-2 border-b">
                                    <span class="text-muted-foreground"> Ausländerbehörde update
                                    </span>
                                    <span class="font-medium"> Within 2 weeks
                                    </span>
                                </div>
                                <div class="flex justify-between py-2 border-b">
                                    <span class="text-muted-foreground"> Chamber notification
                                    </span>
                                    <span class="font-medium"> Immediately
                                    </span>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-muted-foreground"> Health insurance
                                    </span>
                                    <span class="font-medium"> Continuous
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                        Success Stories
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">
                        Real Switches, Real Success
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                        Join hundreds of trainees who successfully switched their Ausbildung and found their true career
                        path.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="p-6">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-3 bg-primary/10 text-primary">
                                Tech Career
                            </div>
                            <h3 class="font-bold text-lg mb-2">
                                From Retail to IT Specialist
                            </h3>
                            <p class="text-sm text-muted-foreground italic mb-4">
                                “
                                <!-- -->
                                I was stuck in retail but dreamed of IT. Azubi helped me switch to Fachinformatiker
                                in just 8 weeks!
                                <!-- -->
                                ”
                            </p>
                            <p class="text-sm font-medium mb-3">
                                —
                                <!-- -->
                                Nadia M., Morocco
                            </p>
                            <div class="space-y-2 py-3 border-t">
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> timeline
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> 8 weeks
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> salary Increase
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> +€400/month
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> credits
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> 14 months credited
                                    </span>
                                </div>
                            </div>
                            <div class="mt-3 p-2 bg-primary/5 rounded text-xs text-center font-medium text-primary">
                                Now working as cloud support specialist
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="p-6">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-3 bg-primary/10 text-primary">
                                Healthcare
                            </div>
                            <h3 class="font-bold text-lg mb-2">
                                Hotel to Healthcare
                            </h3>
                            <p class="text-sm text-muted-foreground italic mb-4">
                                “
                                <!-- -->
                                The team handled everything - from IHK mediation to visa paperwork. I didn&#39;t lose a
                                single day of BAB support.
                                <!-- -->
                                ”
                            </p>
                            <p class="text-sm font-medium mb-3">
                                —
                                <!-- -->
                                Karim B., Morocco
                            </p>
                            <div class="space-y-2 py-3 border-t">
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> timeline
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> 6 weeks
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> support
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> BAB continued
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> visa
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> 3-year extension
                                    </span>
                                </div>
                            </div>
                            <div class="mt-3 p-2 bg-primary/5 rounded text-xs text-center font-medium text-primary">
                                Successfully switched to nursing
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="p-6">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-3 bg-primary/10 text-primary">
                                Engineering
                            </div>
                            <h3 class="font-bold text-lg mb-2">
                                Metal Work to Mechatronics
                            </h3>
                            <p class="text-sm text-muted-foreground italic mb-4">
                                “
                                <!-- -->
                                Safety issues at my old company were resolved through HWK mediation. Now I&#39;m in a modern
                                automation plant.
                                <!-- -->
                                ”
                            </p>
                            <p class="text-sm font-medium mb-3">
                                —
                                <!-- -->
                                Mehdi B., Morocco
                            </p>
                            <div class="space-y-2 py-3 border-t">
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> timeline
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> 10 weeks
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> salary Increase
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> +€280/month
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> environment
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> Modern facility
                                    </span>
                                </div>
                            </div>
                            <div class="mt-3 p-2 bg-primary/5 rounded text-xs text-center font-medium text-primary">
                                Previous modules counted toward finals
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="p-6">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-3 bg-primary/10 text-primary">
                                Sustainability
                            </div>
                            <h3 class="font-bold text-lg mb-2">
                                Logistics to Green Energy
                            </h3>
                            <p class="text-sm text-muted-foreground italic mb-4">
                                “
                                <!-- -->
                                I wanted a future in sustainability. They found me a position in wind energy technology
                                within weeks.
                                <!-- -->
                                ”
                            </p>
                            <p class="text-sm font-medium mb-3">
                                —
                                <!-- -->
                                Fatima H., Morocco
                            </p>
                            <div class="space-y-2 py-3 border-t">
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> timeline
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> 7 weeks
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> sector
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> Green tech
                                    </span>
                                </div>
                                <div class="flex justify-between text-xs">
                                    <span class="text-muted-foreground capitalize"> growth
                                        <!-- -->
                                        :
                                    </span>
                                    <span class="font-medium"> Future-proof career
                                    </span>
                                </div>
                            </div>
                            <div class="mt-3 p-2 bg-primary/5 rounded text-xs text-center font-medium text-primary">
                                Working in renewable energy sector
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <p class="text-muted-foreground mb-4">
                        Ready to write your success story?
                    </p>
                    <a class="inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base gap-2"
                        href="#switch-form"> Start Your Switch Journey
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-star h-4 w-4">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                        Compare Options
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">
                        Stay, Switch, or Retrain?
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                        Compare your options to make an informed decision about your career path in Germany.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-house h-6 w-6 text-primary">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8">
                                    </path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-lg">
                                Stay in Current Ausbildung
                            </h3>
                        </div>
                        <div class="space-y-3">
                            <div class="pb-3 border-b">
                                <p class="text-xs text-muted-foreground mb-1">
                                    Best For
                                </p>
                                <p class="text-sm font-medium">
                                    Minor issues solvable internally
                                </p>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Timeline:
                                    </span>
                                    <span class="font-medium"> Continue as planned
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Financial:
                                    </span>
                                    <span class="font-medium"> Current stipend maintained
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Visa:
                                    </span>
                                    <span class="font-medium"> No changes needed
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Effort:
                                    </span>
                                    <span class="font-medium"> Minimal
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow border-primary ring-2 ring-primary/20">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-trending-up h-6 w-6 text-primary">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17">
                                    </polyline>
                                    <polyline points="16 7 22 7 22 13">
                                    </polyline>
                                </svg>
                            </div>
                            <h3 class="font-bold text-lg">
                                Switch Ausbildung (Our Service)
                            </h3>
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-3 bg-primary text-primary-foreground">
                            Recommended
                        </div>
                        <div class="space-y-3">
                            <div class="pb-3 border-b">
                                <p class="text-xs text-muted-foreground mb-1">
                                    Best For
                                </p>
                                <p class="text-sm font-medium">
                                    New employer in same/related field
                                </p>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Timeline:
                                    </span>
                                    <span class="font-medium"> 4-8 weeks transition
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Financial:
                                    </span>
                                    <span class="font-medium"> Potential salary increase
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Visa:
                                    </span>
                                    <span class="font-medium"> Protected with proper process
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Effort:
                                    </span>
                                    <span class="font-medium"> Moderate with full support
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full mt-4"
                            href="#switch-form"> Choose This Option
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4 ml-2">
                                <path d="M5 12h14">
                                </path>
                                <path d="m12 5 7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-graduation-cap h-6 w-6 text-primary">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6">
                                    </path>
                                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-lg">
                                Umschulung (Retraining)
                            </h3>
                        </div>
                        <div class="space-y-3">
                            <div class="pb-3 border-b">
                                <p class="text-xs text-muted-foreground mb-1">
                                    Best For
                                </p>
                                <p class="text-sm font-medium">
                                    Complete career change
                                </p>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Timeline:
                                    </span>
                                    <span class="font-medium"> 12-24 months
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Financial:
                                    </span>
                                    <span class="font-medium"> Funded by Agentur für Arbeit
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Visa:
                                    </span>
                                    <span class="font-medium"> May need conversion
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted-foreground"> Effort:
                                    </span>
                                    <span class="font-medium"> Significant commitment
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 text-center">
                    <a class="inline-flex items-center justify-center whitespace-nowrap rounded-full text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 gap-2"
                        href="#"> Explore All Alternative Pathways
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                            <path d="M5 12h14">
                            </path>
                            <path d="m12 5 7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                        Support Network
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">
                        Your Complete Support Ecosystem
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                        We coordinate with all stakeholders to ensure your switch is seamless and stress-free.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-building2 h-6 w-6 text-primary">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z">
                                    </path>
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2">
                                    </path>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2">
                                    </path>
                                    <path d="M10 6h4">
                                    </path>
                                    <path d="M10 10h4">
                                    </path>
                                    <path d="M10 14h4">
                                    </path>
                                    <path d="M10 18h4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-lg mb-2">
                            IHK &amp; HWK Advisors
                        </h3>
                        <p class="text-sm text-muted-foreground mb-4">
                            Free mediation services, training plan validation, and credit transfer authorization.
                        </p>
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Conflict mediation
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Document verification
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Module credit assessment
                                </span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-briefcase h-6 w-6 text-primary">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                    </path>
                                    <rect width="20" height="14" x="2" y="6" rx="2">
                                    </rect>
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-lg mb-2">
                            Agentur für Arbeit
                        </h3>
                        <p class="text-sm text-muted-foreground mb-4">
                            Financial aid continuity, job listings, and emergency support services.
                        </p>
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> BAB/BAföG processing
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Insolvenzgeld support
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Job matching
                                </span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-heart-handshake h-6 w-6 text-primary">
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                    </path>
                                    <path
                                        d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66">
                                    </path>
                                    <path d="m18 15-2-2">
                                    </path>
                                    <path d="m15 18-2-2">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-lg mb-2">
                            Azubi Specialists
                        </h3>
                        <p class="text-sm text-muted-foreground mb-4">
                            End-to-end support from initial consultation to 90-day onboarding assistance.
                        </p>
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Interview coaching
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Contract review
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Visa coordination
                                </span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 rounded-lg bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-globe h-6 w-6 text-primary">
                                    <circle cx="12" cy="12" r="10">
                                    </circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20">
                                    </path>
                                    <path d="M2 12h20">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-lg mb-2">
                            Migration Advisory Centers
                        </h3>
                        <p class="text-sm text-muted-foreground mb-4">
                            Specialized support for international trainees navigating the German system.
                        </p>
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Language support
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Cultural integration
                                </span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335">
                                    </path>
                                    <path d="m9 11 3 3L22 4">
                                    </path>
                                </svg>
                                <span> Legal guidance
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-8 bg-primary/5 rounded-xl max-w-4xl mx-auto">
                    <div class="text-center">
                        <h3 class="font-bold text-xl mb-3">
                            Trusted Resources
                        </h3>
                        <p class="text-muted-foreground mb-6">
                            We work directly with official German institutions to ensure your success.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <div
                                class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                                IHK Lehrstellenbörse
                            </div>
                            <div
                                class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                                Handwerkskammer
                            </div>
                            <div
                                class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                                Agentur für Arbeit
                            </div>
                            <div
                                class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                                Youth Migration Services
                            </div>
                            <div
                                class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2">
                                Migration Advisory Centres
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                            FAQs</div>
                        <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Frequently Asked Questions</h2>
                        <p class="text-lg text-muted-foreground">Everything you need to know about switching your
                            Ausbildung in Germany.</p>
                    </div>
                    <div class="w-full space-y-4" id="changeCareerFaq">

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">Can I change my Ausbildung after the probation
                                        period?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">Yes, absolutely. Under Berufsbildungsgesetz (BBiG) &sect;22, you
                                    can terminate your training contract after the probation period with proper notice and
                                    an important reason. Our team ensures you follow the correct legal procedure,
                                    coordinates with IHK/HWK mediators if needed, and helps you secure a new contract before
                                    termination to avoid any gaps.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">Will I lose the months I already completed in my
                                        current Ausbildung?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">No, your completed training months are not lost. Keep your
                                    Ausbildungsnachweis (training record) and Berufsschule reports updated. New employers
                                    typically credit your completed modules, allowing you to continue from where you left
                                    off. We help document and transfer your credits to ensure you stay with your original
                                    exam cohort.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">What happens to my residence permit when switching
                                        Ausbildung companies?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">Your residence permit remains valid if you handle the transition
                                    correctly. You must notify the Ausl&auml;nderbeh&ouml;rde within 2 weeks, present your
                                    new contract, and provide confirmation from your Berufsschule. We prepare all necessary
                                    paperwork, guide you through the process, and can accompany you to appointments if
                                    needed.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">Do I need to repay financial aid (BAB/BAf&ouml;G) if I
                                        switch?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">No repayment is required if you continue in an eligible Ausbildung
                                    and submit change notifications within 14 days. Our team coordinates directly with
                                    Agentur f&uuml;r Arbeit to ensure your financial support continues uninterrupted. Only
                                    unplanned dropouts without follow-up plans trigger repayment obligations.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">How quickly can I find a new Ausbildung
                                        position?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">With our support, most trainees secure a new contract within 4-8
                                    weeks. We maintain a network of 320+ verified partner companies across various sectors.
                                    Our fast-track process includes immediate job matching, interview preparation, and
                                    aligned start dates to prevent any gaps in your training.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">What if my current company refuses to let me go?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">If your employer refuses termination, we activate mediation through
                                    IHK/HWK chambers. These official bodies provide free mediation services for trainees. In
                                    cases of serious issues (missing training plan, safety concerns, discrimination), we
                                    help document everything for extraordinary termination under BBiG &sect;22.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">Can I switch to a completely different field (e.g.,
                                        from retail to IT)?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">Yes, career pivots are possible and often successful. We assess
                                    which of your completed modules can transfer, arrange bridging courses if needed, and
                                    match you with employers who value your existing skills and language abilities. Many of
                                    our success stories involve complete field changes.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">What documents do I need to prepare for
                                        switching?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">Essential documents include: current training contract,
                                    Ausbildungsnachweis (training log), Berufsschule transcripts, residence permit,
                                    financial aid documentation, and employment references. We provide a complete checklist
                                    and help you compile everything during our initial consultation.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">Is there a best time to switch my Ausbildung?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">The easiest time is during the 4-month probation period when
                                    termination is simplified. However, switches are possible at any stage. We recommend
                                    avoiding exam periods and considering semester breaks at Berufsschule for smoother
                                    transitions. Our advisors help you time your switch optimally.</div>
                            </div>
                        </div>

                        <div class="faq-item border-beige border rounded-lg px-6">
                            <h3 class="flex">
                                <button type="button"
                                    class="faq-trigger flex flex-1 items-center justify-between text-sm font-semibold text-foreground transition-all duration-200 hover:text-primary text-left py-4"
                                    aria-expanded="false">
                                    <span class="font-medium pr-4">What support do you provide after I start my new
                                        Ausbildung?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-5 w-5 shrink-0 text-muted-foreground transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="faq-content overflow-hidden text-sm text-muted-foreground"
                                style="max-height: 0; transition: max-height 0.3s ease-out, padding 0.3s ease-out; padding-bottom: 0;">
                                <div class="pb-4 pt-2">Our support continues for 90 days after you start your new
                                    position. This includes: probation period guidance, conflict resolution support,
                                    Berufsschule integration assistance, and regular check-ins. We ensure your transition is
                                    successful and sustainable.</div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-10 p-6 bg-primary/5 rounded-xl text-center">
                        <h3 class="font-semibold mb-2">Still have questions?</h3>
                        <p class="text-sm text-muted-foreground mb-4">Our advisors are ready to answer your specific
                            concerns.</p>
                        <a class="inline-flex items-center justify-center whitespace-nowrap rounded-full text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 gap-2"
                            href="#switch-form">
                            Get Personal Consultation
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-message-circle h-4 w-4">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <script src="{{ asset('assets/js/change-career.js') }}"></script>
        </section>
        <section id="switch-form" class="py-24 bg-gradient-to-b from-background via-primary/5 to-background">
            <div class="container px-4 md:px-6">
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 mb-4 px-3 py-1 text-primary bg-primary/10">
                        Start Your Switch
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-6">
                        Request Your Personalized Switch Plan
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        Our Ausbildungswechsel specialists will review your situation and create a customized action plan
                        within 24 hours.
                    </p>
                </div>
                <div class="max-w-5xl mx-auto">
                    <div class="max-w-3xl mx-auto">
                        <!-- Wizard Steps Indicator -->
                        <div class="mb-8 overflow-x-auto">
                            <div
                                class="flex items-center justify-start sm:justify-center gap-2 sm:gap-4 min-w-max sm:min-w-0 px-4 sm:px-0">
                                <!-- Step 1 -->
                                <div class="flex flex-col items-center flex-shrink-0 w-20 sm:flex-1"
                                    data-wizard-indicator="0">
                                    <div class="relative">
                                        <div
                                            class="wizard-step-circle w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors bg-primary text-primary-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-5 h-5">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <div
                                            class="wizard-step-line absolute h-0.5 top-5 left-[calc(100%+0.25rem)] w-8 sm:w-12 bg-beige">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="wizard-step-label font-medium text-xs sm:text-sm whitespace-nowrap text-primary">
                                            Personal Info</div>
                                        <div class="text-xs text-muted-foreground hidden lg:block">Contact details</div>
                                    </div>
                                </div>
                                <!-- Step 2 -->
                                <div class="flex flex-col items-center flex-shrink-0 w-20 sm:flex-1"
                                    data-wizard-indicator="1">
                                    <div class="relative">
                                        <div
                                            class="wizard-step-circle w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors bg-beige text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-briefcase w-5 h-5">
                                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                            </svg>
                                        </div>
                                        <div
                                            class="wizard-step-line absolute h-0.5 top-5 left-[calc(100%+0.25rem)] w-8 sm:w-12 bg-beige">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="wizard-step-label font-medium text-xs sm:text-sm whitespace-nowrap text-muted-foreground">
                                            Current Situation</div>
                                        <div class="text-xs text-muted-foreground hidden lg:block">Your Ausbildung</div>
                                    </div>
                                </div>
                                <!-- Step 3 -->
                                <div class="flex flex-col items-center flex-shrink-0 w-20 sm:flex-1"
                                    data-wizard-indicator="2">
                                    <div class="relative">
                                        <div
                                            class="wizard-step-circle w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors bg-beige text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-target w-5 h-5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <circle cx="12" cy="12" r="6"></circle>
                                                <circle cx="12" cy="12" r="2"></circle>
                                            </svg>
                                        </div>
                                        <div
                                            class="wizard-step-line absolute h-0.5 top-5 left-[calc(100%+0.25rem)] w-8 sm:w-12 bg-beige">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="wizard-step-label font-medium text-xs sm:text-sm whitespace-nowrap text-muted-foreground">
                                            Target Goals</div>
                                        <div class="text-xs text-muted-foreground hidden lg:block">Where you want to go
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 4 -->
                                <div class="flex flex-col items-center flex-shrink-0 w-20 sm:flex-1"
                                    data-wizard-indicator="3">
                                    <div class="relative">
                                        <div
                                            class="wizard-step-circle w-10 h-10 rounded-full flex items-center justify-center text-sm font-medium mb-2 transition-colors bg-beige text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-message-square w-5 h-5">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="wizard-step-label font-medium text-xs sm:text-sm whitespace-nowrap text-muted-foreground">
                                            Additional Info</div>
                                        <div class="text-xs text-muted-foreground hidden lg:block">Tell us more</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Card -->
                        <div
                            class="rounded-xl text-card-foreground overflow-hidden bg-gradient-to-br from-card via-card to-primary/5 shadow-2xl border border-border/50 backdrop-blur-xl relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-primary/5 opacity-30">
                            </div>
                            <div class="relative p-8 sm:p-10">
                                <form id="switchWizardForm" class="space-y-8">
                                    <input type="hidden" name="form_type" value="change-career" />
                                    <div class="min-h-[450px]">

                                        <!-- Step 1: Personal Info -->
                                        <div class="wizard-step h-full" data-wizard-step="0"
                                            style="opacity: 1; transform: none;">
                                            <div class="space-y-6">
                                                <div class="text-center mb-6">
                                                    <div
                                                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-user w-6 h-6 text-primary">
                                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>
                                                    </div>
                                                    <h3
                                                        class="text-xl font-bold mb-2 bg-gradient-to-r from-primary to-primary/70 bg-clip-text text-transparent">
                                                        Personal Information</h3>
                                                    <p class="text-sm text-muted-foreground">How can we reach you?</p>
                                                </div>
                                                <div class="grid gap-6 sm:grid-cols-2">
                                                    <div class="group">
                                                        <label class="text-sm font-medium transition-colors"
                                                            for="firstName">First Name <span
                                                                class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <input
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm transition-all hover:border-primary/30"
                                                                id="firstName" placeholder="Enter your first name"
                                                                name="firstName" required />
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium" for="lastName">Last
                                                            Name</label>
                                                        <div class="relative mt-2">
                                                            <input
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all"
                                                                id="lastName" placeholder="Enter your last name"
                                                                name="lastName" />
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium transition-colors"
                                                            for="email">Email <span
                                                                class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <input type="email"
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm transition-all hover:border-primary/30"
                                                                id="email" placeholder="your.email@example.com"
                                                                name="email" required />
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium transition-colors"
                                                            for="phone">Phone/WhatsApp <span
                                                                class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <div
                                                                class="flex h-12 w-full rounded-lg border border-input bg-background/50 text-sm ring-offset-background transition-all duration-200 focus-within:ring-2 focus-within:ring-primary focus-within:border-primary hover:border-primary/30">
                                                                <select name="phoneCountry"
                                                                    class="h-full rounded-l-lg border-0 bg-transparent pl-3 pr-1 text-sm font-medium focus:outline-none focus:ring-0 cursor-pointer appearance-none"
                                                                    style="min-width: 90px;">
                                                                    <option value="+212">MA +212</option>
                                                                    <option value="+34">ES +34</option>
                                                                    <option value="+39">IT +39</option>
                                                                    <option value="+49">DE +49</option>
                                                                    <option value="+33">FR +33</option>
                                                                    <option value="+20">EG +20</option>
                                                                    <option value="+213">DZ +213</option>
                                                                </select>
                                                                <div class="h-full w-px bg-border"></div>
                                                                <input type="tel" id="phone" name="phone"
                                                                    placeholder="Phone number" autocomplete="tel"
                                                                    class="flex-1 border-0 bg-transparent px-3 py-2 text-sm outline-none focus:ring-0 focus-visible:ring-0 focus-visible:ring-offset-0 placeholder:text-muted-foreground"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Step 2: Current Situation -->
                                        <div class="wizard-step h-full hidden" data-wizard-step="1"
                                            style="opacity: 0; transform: translateX(20px);">
                                            <div class="space-y-6">
                                                <div class="text-center mb-6">
                                                    <div
                                                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-briefcase w-6 h-6 text-primary">
                                                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                            <rect width="20" height="14" x="2" y="6"
                                                                rx="2"></rect>
                                                        </svg>
                                                    </div>
                                                    <h3
                                                        class="text-xl font-bold mb-2 bg-gradient-to-r from-primary to-primary/70 bg-clip-text text-transparent">
                                                        Current Situation</h3>
                                                    <p class="text-sm text-muted-foreground">Tell us about your current
                                                        Ausbildung</p>
                                                </div>
                                                <div class="grid gap-6 sm:grid-cols-2">
                                                    <div class="group">
                                                        <label class="text-sm font-medium transition-colors"
                                                            for="currentAusbildung">Current Ausbildung <span
                                                                class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <input
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm transition-all hover:border-primary/30"
                                                                id="currentAusbildung"
                                                                placeholder="e.g., Kaufmann im Einzelhandel"
                                                                name="currentAusbildung" />
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium" for="currentCompany">Current
                                                            Company</label>
                                                        <div class="relative mt-2">
                                                            <input
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all"
                                                                id="currentCompany" placeholder="Company name"
                                                                name="currentCompany" />
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium transition-colors"
                                                            for="currentCity">City <span
                                                                class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <input
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm transition-all hover:border-primary/30"
                                                                id="currentCity" placeholder="e.g., Berlin, Munich"
                                                                name="currentCity" />
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium" for="trainingYear">Training
                                                            Year <span class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <select id="trainingYear" name="trainingYear"
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all cursor-pointer">
                                                                <option value="" disabled selected>Select year...
                                                                </option>
                                                                <option value="probation">Probation Period</option>
                                                                <option value="1">1st Year</option>
                                                                <option value="2">2nd Year</option>
                                                                <option value="3">3rd Year</option>
                                                                <option value="3.5">3.5th Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="group">
                                                    <label class="text-sm font-medium" for="germanLevel">German
                                                        Level</label>
                                                    <div class="relative mt-2">
                                                        <select id="germanLevel" name="germanLevel"
                                                            class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all cursor-pointer">
                                                            <option value="" disabled selected>Select level...
                                                            </option>
                                                            <option value="A1">A1 - Beginner</option>
                                                            <option value="A2">A2 - Elementary</option>
                                                            <option value="B1">B1 - Intermediate</option>
                                                            <option value="B2">B2 - Upper Intermediate</option>
                                                            <option value="C1">C1 - Advanced</option>
                                                            <option value="C2">C2 - Proficient</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Step 3: Target Goals -->
                                        <div class="wizard-step h-full hidden" data-wizard-step="2"
                                            style="opacity: 0; transform: translateX(20px);">
                                            <div class="space-y-6">
                                                <div class="text-center mb-6">
                                                    <div
                                                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-target w-6 h-6 text-primary">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <circle cx="12" cy="12" r="6"></circle>
                                                            <circle cx="12" cy="12" r="2"></circle>
                                                        </svg>
                                                    </div>
                                                    <h3
                                                        class="text-xl font-bold mb-2 bg-gradient-to-r from-primary to-primary/70 bg-clip-text text-transparent">
                                                        Target Goals</h3>
                                                    <p class="text-sm text-muted-foreground">Where do you want to go?</p>
                                                </div>
                                                <div class="grid gap-6 sm:grid-cols-2">
                                                    <div class="group">
                                                        <label class="text-sm font-medium transition-colors"
                                                            for="desiredAusbildung">Desired Ausbildung <span
                                                                class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <input
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm transition-all hover:border-primary/30"
                                                                id="desiredAusbildung"
                                                                placeholder="e.g., Fachinformatiker, Mechatroniker"
                                                                name="desiredAusbildung" />
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium" for="preferredCity">Preferred
                                                            City</label>
                                                        <div class="relative mt-2">
                                                            <input
                                                                class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all"
                                                                id="preferredCity" placeholder="Open to relocation?"
                                                                name="preferredCity" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="group">
                                                    <label class="text-sm font-medium" for="switchType">Type of Switch
                                                        <span class="text-destructive">*</span></label>
                                                    <div class="relative mt-2">
                                                        <select id="switchType" name="switchType"
                                                            class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all cursor-pointer">
                                                            <option value="" disabled selected>Select type...
                                                            </option>
                                                            <option value="same-field">Same field, different company
                                                            </option>
                                                            <option value="different-field">Different field entirely
                                                            </option>
                                                            <option value="unsure">Not sure yet</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="group">
                                                    <label class="text-sm font-medium" for="startPreference">Preferred
                                                        Start Date</label>
                                                    <div class="relative mt-2">
                                                        <select id="startPreference" name="startPreference"
                                                            class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all cursor-pointer">
                                                            <option value="" disabled selected>Select preference...
                                                            </option>
                                                            <option value="asap">As soon as possible</option>
                                                            <option value="next-semester">Next semester</option>
                                                            <option value="specific-date">Specific date</option>
                                                            <option value="flexible">Flexible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Step 4: Additional Info -->
                                        <div class="wizard-step h-full hidden" data-wizard-step="3"
                                            style="opacity: 0; transform: translateX(20px);">
                                            <div class="space-y-6">
                                                <div class="text-center mb-6">
                                                    <div
                                                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-message-square w-6 h-6 text-primary">
                                                            <path
                                                                d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <h3
                                                        class="text-xl font-bold mb-2 bg-gradient-to-r from-primary to-primary/70 bg-clip-text text-transparent">
                                                        Additional Information</h3>
                                                    <p class="text-sm text-muted-foreground">Help us understand your
                                                        situation better</p>
                                                </div>
                                                <div class="space-y-6">
                                                    <div class="group">
                                                        <label class="text-sm font-medium transition-colors"
                                                            for="reasonForSwitch">Reason for Switching <span
                                                                class="text-destructive">*</span></label>
                                                        <div class="relative mt-2">
                                                            <textarea
                                                                class="flex min-h-[80px] w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm resize-none transition-all hover:border-primary/30"
                                                                id="reasonForSwitch" placeholder="Please briefly explain why you want to switch your Ausbildung..."
                                                                rows="3" name="reasonForSwitch"></textarea>
                                                        </div>
                                                        <div class="flex flex-wrap gap-2 mt-3">
                                                            <p class="text-xs text-muted-foreground w-full">Quick
                                                                suggestions:</p>
                                                            <button type="button"
                                                                class="wizard-suggestion inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-foreground text-xs cursor-pointer hover:bg-primary/10 hover:border-primary/50 transition-colors">Company
                                                                Issues</button>
                                                            <button type="button"
                                                                class="wizard-suggestion inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-foreground text-xs cursor-pointer hover:bg-primary/10 hover:border-primary/50 transition-colors">Career
                                                                Change</button>
                                                            <button type="button"
                                                                class="wizard-suggestion inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-foreground text-xs cursor-pointer hover:bg-primary/10 hover:border-primary/50 transition-colors">Financial
                                                                Reasons</button>
                                                            <button type="button"
                                                                class="wizard-suggestion inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-foreground text-xs cursor-pointer hover:bg-primary/10 hover:border-primary/50 transition-colors">Location
                                                                Change</button>
                                                        </div>
                                                    </div>
                                                    <div class="grid gap-6 sm:grid-cols-2">
                                                        <div class="group">
                                                            <label class="text-sm font-medium transition-colors">Urgency
                                                                Level <span class="text-destructive">*</span></label>
                                                            <div class="relative mt-2">
                                                                <select name="urgencyLevel"
                                                                    class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all cursor-pointer">
                                                                    <option value="" disabled selected>How urgent?
                                                                    </option>
                                                                    <option value="immediate">Immediate (Critical
                                                                        Situation)</option>
                                                                    <option value="within-month">Within 1 Month</option>
                                                                    <option value="within-3months">Within 3 Months
                                                                    </option>
                                                                    <option value="flexible">Flexible Timing</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="group">
                                                            <label class="text-sm font-medium" for="visaStatus">Visa
                                                                Status</label>
                                                            <div class="relative mt-2">
                                                                <input
                                                                    class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 transition-all"
                                                                    id="visaStatus"
                                                                    placeholder="e.g., Ausbildung visa valid until..."
                                                                    name="visaStatus" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="group">
                                                        <label class="text-sm font-medium"
                                                            for="additionalContext">Additional Context</label>
                                                        <div class="relative mt-2">
                                                            <textarea
                                                                class="flex min-h-[80px] w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 backdrop-blur-sm hover:border-primary/30 resize-none transition-all"
                                                                id="additionalContext" placeholder="Any other information that might help us assist you better..."
                                                                rows="2" name="additionalContext"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Success Step -->
                                        <div class="wizard-step h-full hidden" data-wizard-step="success"
                                            style="opacity: 0; transform: translateX(20px);">
                                            <div
                                                class="flex flex-col items-center justify-center py-12 text-center space-y-6">
                                                <div
                                                    class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                        height="40" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="text-green-600">
                                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg>
                                                </div>
                                                <h3
                                                    class="text-2xl font-bold bg-gradient-to-r from-primary to-primary/70 bg-clip-text text-transparent">
                                                    Application Submitted!</h3>
                                                <p class="text-muted-foreground max-w-md">Thank you! Our
                                                    Ausbildungswechsel specialists will review your situation and contact
                                                    you within 24 hours with a personalized switch plan.</p>
                                                <a href="#"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold h-12 px-8 py-3 bg-primary text-primary-foreground hover:bg-orange-hover transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 shadow-lg">
                                                    Browse Available Jobs
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="w-5 h-5">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Honeypot -->
                                    <div class="hidden" aria-hidden="true">
                                        <label class="text-sm font-medium leading-none" for="website">Website</label>
                                        <input type="text"
                                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                                            id="website" tabindex="-1" autocomplete="off" name="website" />
                                    </div>

                                    <!-- Navigation Buttons -->
                                    <div class="flex flex-col sm:flex-row justify-between gap-4 pt-6 border-t"
                                        id="wizardNav">
                                        <div class="order-2 sm:order-1">
                                            <button
                                                class="wizard-back-btn hidden whitespace-nowrap rounded-full text-sm font-semibold duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 items-center justify-center gap-2 transition-all"
                                                type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="w-5 h-5">
                                                    <path d="m15 18-6-6 6-6"></path>
                                                </svg>
                                                Back
                                            </button>
                                        </div>
                                        <button
                                            class="wizard-next-btn whitespace-nowrap rounded-full text-sm font-semibold duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground hover:bg-orange-hover hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex items-center justify-center gap-2 bg-gradient-to-r from-primary to-primary/80 hover:from-primary/90 hover:to-primary/70 shadow-lg shadow-primary/20 transition-all hover:shadow-xl hover:shadow-primary/30 order-1 sm:order-2"
                                            type="button">
                                            <span class="wizard-next-text">Continue</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-5 h-5">
                                                <path d="m9 18 6-6-6-6"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="container mx-auto px-4 lg:px-6 my-16">
            <section
                class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg bg-gradient-to-b from-primary/5 to-background">
                <img alt="Background" loading="lazy" decoding="async" class="object-cover object-center rounded-2xl"
                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                    src="{{ asset('assets/_next/arbeitgeber-hero-backgroundaa3f.jpeg') }}" />
                <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl">
                </div>
                <div class="absolute inset-0 z-[1] rounded-2xl"
                    style="background:radial-gradient(ellipse at center, transparent 0%, transparent 40%, rgba(0,0,0,0.4) 100%),
              linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 30%),
              linear-gradient(to right, rgba(0,0,0,0.3) 0%, transparent 15%),
              linear-gradient(to left, rgba(0,0,0,0.3) 0%, transparent 15%)">
                </div>
                <div
                    class="relative z-10 mx-auto flex max-w-container gap-8 px-6 sm:gap-10 md:px-12 flex-col items-center text-center">
                    <div class="flex flex-col gap-8 items-center text-center">
                        <div
                            class="inline-flex items-center rounded-full border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground border-white/80 bg-white/10 backdrop-blur-sm px-4 py-1.5 text-base w-fit">
                            <span class="text-white font-medium"> Ready for a Fresh Start?
                            </span>
                        </div>
                        <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center">
                            Browse New Ausbildung Opportunities
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            Explore hundreds of verified Ausbildung positions from employers actively hiring. Find the
                            perfect match for your skills and career goals while we handle the transition process.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">
                                Browse Available Jobs
                            </a>
                            <a href="#switch-form"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">
                                Get Switch Consultation
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
