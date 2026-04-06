@extends('frontoffice.layouts.app')

@section('title', 'Cultural Integration Germany: Workplace Etiquette & Social Tips | Azubi')

@section('meta')
    <meta name="description"
        content="Adapt to German culture during Ausbildung: workplace etiquette (punctuality, directness), social norms, making friends, and practical tips from successful trainees.">
    <meta name="keywords"
        content="german culture,workplace etiquette germany,german social norms,cultural adaptation germany,ausbildung culture,living in germany tips">
    <meta property="og:title" content="Cultural Integration Germany: Workplace Etiquette & Social Tips">
    <meta property="og:description"
        content="Adapt to German culture during Ausbildung: workplace etiquette (punctuality, directness), social norms, making friends, and practical tips from successful trainees.">
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Rothenburg ob der Tauber in autumn - historic German medieval town representing cultural heritage"
                loading="eager" decoding="async" data-nimg="fill" class="object-cover object-center"
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
                sizes="100vw" src="{{ asset('assets/_next/rothenburg-hero-autumna965.jpeg') }}" />
            <div class="absolute inset-0 bg-black/30 z-0"></div>
            <div class="absolute inset-0 z-0"
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
                class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10 flex flex-col gap-4 sm:gap-5 items-center text-center max-w-4xl">
                <div class="flex flex-col gap-4 sm:gap-5">
                    <div class="animate-fade-in-up animation-delay-100">
                        <div class="inline-flex items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-2 border-white/80 text-white backdrop-blur-sm bg-white/10 hover:bg-white/20 px-3 py-1.5 text-sm font-semibold"
                            aria-label="Cultural Integration">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-globe h-4 w-4 mr-2" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg>Cultural Integration
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Integrating into German Culture During Ausbildung
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        Essential guide to understanding and adapting to German
                        workplace culture, social norms, and daily life to ensure a
                        successful vocational training experience.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#F4991A] hover:bg-[#E5890F] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Start Video Course" href="#"><span
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-graduation-cap w-5 h-5 mr-2">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                </svg></span><span>Start Video Course</span></a><a
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="Learn Workplace Culture" href="#workplace-culture"><span aria-hidden="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-briefcase w-5 h-5 mr-2">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg></span><span>Learn Workplace Culture</span></a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    Rothenburg ob der Tauber, Bavaria
                </p>
            </div>
        </section>
        <section class="py-8">
            <div class="container px-4 md:px-6">
                <div class="max-w-2xl mx-auto">
                    <div class="bg-card border border-primary/10 rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="p-2 rounded-lg bg-beige">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-globe h-5 w-5 text-primary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                    <path d="M2 12h20"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="tracking-tight font-semibold sm:text-lg text-secondary text-base mb-1">
                                    Video-Based Cultural Course
                                </h3>
                                <p class="text-sm text-muted-foreground mb-3">
                                    Watch 13 comprehensive videos on German culture,
                                    complete section quizzes, and earn achievement badges
                                </p>
                                <div
                                    class="text-sm font-medium text-primary hover:underline inline-flex items-center gap-1 opacity-50 pointer-events-none">
                                    Start Video Course<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-3 w-3">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="workplace-culture" class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-primary/20">
                        <span class="text-primary">Workplace Essentials</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        German Workplace Culture
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Understanding German workplace norms and expectations is
                        crucial for your success during Ausbildung and beyond. German
                        work culture has distinctive characteristics that might differ
                        from what you&#x27;re used to.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Communication Styles
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            Germans typically value direct, clear communication in the
                            workplace. Understanding these communication patterns will
                            help you navigate professional relationships effectively.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-message-circle w-3 h-3 text-primary">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Direct Communication</span>
                                    <p class="text-sm text-muted-foreground">
                                        Germans tend to be straightforward and prefer clear,
                                        factual statements over ambiguity. What might seem
                                        blunt is usually meant to be efficient and precise.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-message-circle w-3 h-3 text-primary">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Formal Address</span>
                                    <p class="text-sm text-muted-foreground">
                                        Use &quot;Sie&quot; (formal you) and last names with
                                        titles (Herr/Frau) until invited to switch to
                                        &quot;Du&quot; and first names. This formality is a
                                        sign of respect.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-message-circle w-3 h-3 text-primary">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium">Written Communication</span>
                                    <p class="text-sm text-muted-foreground">
                                        Emails and written correspondence are often more
                                        formal than you might expect. Include proper greetings
                                        and closings in your messages.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="German workplace culture and communication" loading="lazy" decoding="async"
                            data-nimg="fill" class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/_next/workplace-culture4a92.jpeg') }}" />
                        <div class="absolute inset-x-0 bottom-0 bg-black/80 p-4">
                            <p class="text-white text-sm">
                                Understanding German workplace communication styles helps
                                foster better relationships with colleagues and
                                supervisors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div class="order-2 md:order-1 relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Hierarchy and respect in German workplaces" loading="lazy" decoding="async"
                            data-nimg="fill" class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/_next/herobc74.jpeg') }}" />
                        <div class="absolute inset-x-0 bottom-0 bg-black/80 p-4">
                            <p class="text-white text-sm">
                                Respecting workplace hierarchy and professional boundaries
                                is an important aspect of German business culture.
                            </p>
                        </div>
                    </div>
                    <div class="order-1 md:order-2">
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Hierarchy and Respect
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            German workplace structures tend to have clear hierarchies
                            with well-defined roles and responsibilities.
                        </p>
                        <div class="p-4 bg-primary/5 border border-primary/20 rounded-lg">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-base mb-3 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-building h-4 w-4 text-primary">
                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2">
                                    </rect>
                                    <path d="M9 22v-4h6v4"></path>
                                    <path d="M8 6h.01"></path>
                                    <path d="M16 6h.01"></path>
                                    <path d="M12 6h.01"></path>
                                    <path d="M12 10h.01"></path>
                                    <path d="M12 14h.01"></path>
                                    <path d="M16 10h.01"></path>
                                    <path d="M16 14h.01"></path>
                                    <path d="M8 10h.01"></path>
                                    <path d="M8 14h.01"></path>
                                </svg><span>Organizational Structure</span>
                            </h4>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Clear Responsibilities</span>
                                        <p class="text-xs text-muted-foreground">
                                            Job roles are typically well-defined with specific
                                            responsibilities. Ask for clarification if
                                            you&#x27;re unsure about yours.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Formal Decision-Making</span>
                                        <p class="text-xs text-muted-foreground">
                                            Decisions often follow formal processes and
                                            typically come from management rather than
                                            collaborative consensus.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Respect for Authority</span>
                                        <p class="text-xs text-muted-foreground">
                                            Show respect for superiors through appropriate
                                            formal language and by following established
                                            protocols.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Professional Titles</span>
                                        <p class="text-xs text-muted-foreground">
                                            Use professional titles like &quot;Doktor&quot; or
                                            &quot;Ingenieur&quot; when addressing people who
                                            have them; titles are valued and used in Germany.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="grid gap-8 md:grid-cols-2 max-w-5xl mx-auto">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-clock text-white h-6 w-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Punctuality and Reliability
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                In Germany, punctuality is more than politeness—it&#x27;s
                                a core value that reflects reliability and respect.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2">
                                        Key Expectations:
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Arrive 5-10 minutes early</span>
                                                <p class="text-xs text-muted-foreground">
                                                    For work, class, and meetings, arriving early
                                                    shows commitment and reliability
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Notify about delays</span>
                                                <p class="text-xs text-muted-foreground">
                                                    If unavoidably late, inform relevant people as
                                                    soon as possible
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Meet deadlines reliably</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Submit assignments, reports, and projects on
                                                    time or early
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Plan for contingencies</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Consider transportation delays and leave extra
                                                    time when planning
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 bg-background rounded-md border border-border text-sm">
                                    <p class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg><span><strong>Cultural Note:</strong> &quot;Akademisches
                                            Viertel&quot; (academic quarter) is an exception in
                                            some educational settings, where classes might start
                                            15 minutes after the scheduled time. However, this
                                            doesn&#x27;t apply to most workplaces or vocational
                                            training.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-primary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-briefcase text-white h-6 w-6">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Work-Life Boundaries
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Germans typically maintain clear separation between
                                professional and personal life, with strong boundaries
                                around working hours.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2">
                                        Common Practices:
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Structured working hours</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Work typically starts and ends at fixed times
                                                    with punctuality valued
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Limited after-hours contact</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Many Germans expect work communication to cease
                                                    outside office hours
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Email culture</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Sending emails late at night or on weekends
                                                    might be seen as intrusive
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Focus on productivity</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Work time is for work—social chats are typically
                                                    limited during working hours
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 bg-background rounded-md border border-border text-sm">
                                    <p class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg><span><strong>Work-Life Balance:</strong> Germans value
                                            their personal time highly, and the legal framework
                                            protects work-free time, including evenings,
                                            weekends, and generous vacation allotments.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-16 p-6 bg-primary/5 border border-primary/20 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5 text-primary">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                        </svg><span>Feedback and Criticism</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Germans often provide direct feedback that focuses on
                        improvement rather than praise:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Constructive criticism
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    German supervisors and colleagues may focus more on what
                                    needs improvement than what you did well. Don&#x27;t
                                    take this personally—it&#x27;s meant to help you develop
                                    professionally.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Direct feedback
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Feedback may be given without softening language or
                                    compliment sandwiches. This directness is seen as
                                    respectful and efficient, not rude.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Formal evaluation processes
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Expect structured feedback sessions rather than constant
                                    praise. Many workplaces have formal evaluation periods
                                    where performance is discussed comprehensively.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Value of improvement
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Consistent improvement is highly valued. Demonstrating
                                    that you&#x27;ve acted on feedback will be noticed and
                                    appreciated by German colleagues and supervisors.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                        <p class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg><span><strong>Adapting Tip:</strong> When receiving feedback,
                                focus on listening and understanding before responding.
                                Ask clarifying questions rather than becoming defensive,
                                and thank the person for their input.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative py-12 overflow-hidden bg-[#F9F5F0]">
            <div class="container relative z-10 mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="relative" style="opacity: 0; transform: translateY(20px)">
                        <div
                            class="text-card-foreground shadow relative bg-[#F4991A] border-2 border-[#F4991A] overflow-hidden rounded-[24px]">
                            <div class="relative p-4 sm:p-6 lg:p-8">
                                <div class="block lg:hidden space-y-6">
                                    <div class="text-center">
                                        <div
                                            class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold mb-3 rounded-full backdrop-blur-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-gift w-3 h-3 mr-1">
                                                <rect x="3" y="8" width="18" height="4" rx="1"></rect>
                                                <path d="M12 8v13"></path>
                                                <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                                                <path
                                                    d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                </path>
                                            </svg>TRANSFORMATION
                                        </div>
                                        <h3 class="text-lg sm:text-xl font-bold text-white leading-tight mb-2">
                                            <span class="text-white">REVEALED:</span>
                                            <!-- -->From Village Cleaner to €4,200/Month
                                        </h3>
                                        <p class="text-sm text-white/90 mb-4 font-medium">
                                            Miguel&#x27;s incredible transformation story with
                                            zero connections or diploma!
                                        </p>
                                        <div class="flex items-center justify-center gap-4 text-xs mb-4">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-download w-3 h-3 text-white">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" x2="12" y1="15" y2="3">
                                                    </line>
                                                </svg><span class="font-bold text-white">4,247</span><span
                                                    class="text-white/80">downloaded</span>
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><span class="text-white/80">(4.9)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4">
                                            <div class="space-y-2 mb-4">
                                                <h4 class="text-base font-bold text-[#344F1F]">
                                                    Get Your Exclusive Analysis
                                                </h4>
                                                <div
                                                    class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-circle-check-big w-3 h-3 mr-1">
                                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg>Free limited time offer
                                                </div>
                                            </div>
                                            <form class="space-y-3">
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                                    <input
                                                        class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                        placeholder="First Name *" required="" value="" /><input
                                                        class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                        placeholder="Last Name *" required="" value="" />
                                                </div>
                                                <input type="email"
                                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                    placeholder="Your Email Address *" required="" value="" />
                                                <div class="grid grid-cols-1 gap-3">
                                                    <button type="button" role="combobox"
                                                        aria-controls="radix-«R5qckuslb»" aria-expanded="false"
                                                        aria-required="true" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-placeholder=""
                                                        class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]">
                                                        <span style="pointer-events: none">German Level *</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg></button><select aria-hidden="true" required=""
                                                        tabindex="-1"
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
                                                    </select><button type="button" role="combobox"
                                                        aria-controls="radix-«R9qckuslb»" aria-expanded="false"
                                                        aria-required="true" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-placeholder=""
                                                        class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]">
                                                        <span style="pointer-events: none">Field of Interest *</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg></button><select aria-hidden="true" required=""
                                                        tabindex="-1"
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
                                                    </select><button type="button" role="combobox"
                                                        aria-controls="radix-«Rdqckuslb»" aria-expanded="false"
                                                        aria-required="true" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-placeholder=""
                                                        class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]">
                                                        <span style="pointer-events: none">Current Country *</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg></button><select aria-hidden="true" required=""
                                                        tabindex="-1"
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
                                                <button
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-12 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
                                                    type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-download w-4 h-4 mr-2">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15"
                                                            y2="3"></line>
                                                    </svg>GET EXCLUSIVE INSIGHTS NOW<svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </button>
                                                <div
                                                    class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1">
                                                    <div class="flex items-center gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-shield w-3 h-3 text-[#344F1F]">
                                                            <path
                                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                            </path>
                                                        </svg><span>Secure</span>
                                                    </div>
                                                    <div class="flex items-center gap-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-zap w-3 h-3 text-[#F4991A]">
                                                            <path
                                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                            </path>
                                                        </svg><span>Instant</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden lg:block">
                                    <div class="grid lg:grid-cols-12 gap-6 items-center">
                                        <div class="lg:col-span-3 flex justify-center lg:justify-start items-center">
                                            <div class="relative">
                                                <img src="{{ asset('assets/_next/mascot_pointing_malee75a.jpeg') }}"
                                                    alt="Azubi Mascot" class="w-56 h-auto object-contain" />
                                            </div>
                                        </div>
                                        <div class="lg:col-span-4 space-y-3">
                                            <div
                                                class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold rounded-full backdrop-blur-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-gift w-3 h-3 mr-1">
                                                    <rect x="3" y="8" width="18" height="4" rx="1">
                                                    </rect>
                                                    <path d="M12 8v13"></path>
                                                    <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                                                    <path
                                                        d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                    </path>
                                                </svg>TRANSFORMATION
                                            </div>
                                            <h3 class="text-xl lg:text-2xl font-bold text-white leading-tight">
                                                <span class="text-white">REVEALED:</span>
                                                <!-- -->From Village Cleaner to €4,200/Month
                                            </h3>
                                            <p class="text-sm text-white/90 font-medium">
                                                Miguel&#x27;s incredible transformation story with
                                                zero connections or diploma!
                                            </p>
                                            <div class="flex items-center gap-4 text-xs">
                                                <div class="flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-download w-3 h-3 text-white">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" x2="12" y1="15"
                                                            y2="3"></line>
                                                    </svg><span class="font-bold text-white">4,247</span><span
                                                        class="text-white/80">professionals downloaded</span>
                                                </div>
                                                <div class="flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-star w-3 h-3 fill-white text-white">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><span class="text-white/80">(4.9)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:col-span-5">
                                            <div class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4">
                                                <div class="space-y-3 mb-4">
                                                    <h4 class="text-lg font-bold text-[#344F1F]">
                                                        Get Your Exclusive Analysis
                                                    </h4>
                                                    <div
                                                        class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-circle-check-big w-3 h-3 mr-1">
                                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                            <path d="m9 11 3 3L22 4"></path>
                                                        </svg>Free limited time offer
                                                    </div>
                                                </div>
                                                <form class="space-y-3">
                                                    <div class="grid grid-cols-2 gap-2">
                                                        <input
                                                            class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                            placeholder="First Name *" required=""
                                                            value="" /><input
                                                            class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                            placeholder="Last Name *" required="" value="" />
                                                    </div>
                                                    <input type="email"
                                                        class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                                        placeholder="Your Email Address *" required=""
                                                        value="" />
                                                    <div class="grid grid-cols-3 gap-2">
                                                        <button type="button" role="combobox"
                                                            aria-controls="radix-«R5rkkuslb»" aria-expanded="false"
                                                            aria-required="true" aria-autocomplete="none" dir="ltr"
                                                            data-state="closed" data-placeholder=""
                                                            class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]">
                                                            <span style="pointer-events: none">German Level *</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                aria-hidden="true">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg></button><select aria-hidden="true" required=""
                                                            tabindex="-1"
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
                                                        </select><button type="button" role="combobox"
                                                            aria-controls="radix-«R9rkkuslb»" aria-expanded="false"
                                                            aria-required="true" aria-autocomplete="none" dir="ltr"
                                                            data-state="closed" data-placeholder=""
                                                            class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]">
                                                            <span style="pointer-events: none">Field *</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                aria-hidden="true">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg></button><select aria-hidden="true" required=""
                                                            tabindex="-1"
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
                                                        </select><button type="button" role="combobox"
                                                            aria-controls="radix-«Rdrkkuslb»" aria-expanded="false"
                                                            aria-required="true" aria-autocomplete="none" dir="ltr"
                                                            data-state="closed" data-placeholder=""
                                                            class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]">
                                                            <span style="pointer-events: none">Country *</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                                                aria-hidden="true">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg></button><select aria-hidden="true" required=""
                                                            tabindex="-1"
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
                                                    <button
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-10 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
                                                        type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <polyline points="7 10 12 15 17 10"></polyline>
                                                            <line x1="12" x2="12" y1="15"
                                                                y2="3"></line>
                                                        </svg>GET EXCLUSIVE INSIGHTS NOW<svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                            <path d="M5 12h14"></path>
                                                            <path d="m12 5 7 7-7 7"></path>
                                                        </svg>
                                                    </button>
                                                    <div
                                                        class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1">
                                                        <div class="flex items-center gap-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-shield w-3 h-3 text-[#344F1F]">
                                                                <path
                                                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                                </path>
                                                            </svg><span>Secure</span>
                                                        </div>
                                                        <div class="flex items-center gap-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-zap w-3 h-3 text-[#F4991A]">
                                                                <path
                                                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                                </path>
                                                            </svg><span>Instant</span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-green-500/20">
                        <span class="text-green-500">Social Integration</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Social Norms and Etiquette
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Understanding German social customs and etiquette will help
                        you navigate daily interactions and build positive
                        relationships both in and outside the workplace.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Social norms and etiquette in Germany" loading="lazy" decoding="async"
                            data-nimg="fill" class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/_next/building-network1e85.jpeg') }}" />
                        <div class="absolute inset-x-0 bottom-0 bg-black/80 p-4">
                            <p class="text-white text-sm">
                                Understanding German social customs helps build positive
                                relationships and avoid unintentional misunderstandings.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Greeting Customs
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            German greeting customs combine formality with warmth, and
                            knowing the appropriate way to greet others is an important
                            part of social integration.
                        </p>
                        <div class="space-y-4">
                            <div class="p-4 bg-green-500/5 border border-green-500/20 rounded-lg">
                                <h4
                                    class="tracking-tight font-semibold sm:text-base text-secondary text-base mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-users h-4 w-4 text-green-500">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg><span>First Impressions Matter</span>
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Handshakes</span>
                                            <p class="text-xs text-muted-foreground">
                                                A firm handshake with eye contact is standard for
                                                both business and social settings
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Formal address</span>
                                            <p class="text-xs text-muted-foreground">
                                                Use &quot;Herr&quot; (Mr.) or &quot;Frau&quot;
                                                (Ms.) with last names until invited to use first
                                                names
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Personal space</span>
                                            <p class="text-xs text-muted-foreground">
                                                Germans typically maintain more physical distance
                                                than in some cultures
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Greetings by time of day</span>
                                            <p class="text-xs text-muted-foreground">
                                                &quot;Guten Morgen,&quot; &quot;Guten Tag,&quot;
                                                and &quot;Guten Abend&quot; used according to time
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-2 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-green-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-users text-white h-6 w-6">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Social Expectations
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Germans tend to value privacy, directness, and clearly
                                defined social behaviors.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1">
                                        Key Social Norms:
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Privacy boundaries</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Personal questions about income, relationships,
                                                    or politics may be considered intrusive
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Noise sensitivity</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Be mindful of noise levels, especially during
                                                    &quot;Ruhezeiten&quot; (quiet times)
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Recycling and environmental
                                                    awareness</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Following recycling rules is taken seriously and
                                                    expected of everyone
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Public transportation etiquette</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Quiet conversations, no eating, and yielding
                                                    seats to those who need them
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-green-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-heart text-white h-6 w-6">
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Gift-Giving &amp; Socializing
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Building social connections often involves invitations and
                                appropriate gift exchanges.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1">
                                        Social Customs:
                                    </h4>
                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Home visit gifts</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Bring a small gift when invited to
                                                    someone&#x27;s home (flowers, wine, or
                                                    chocolates are appropriate)
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Punctuality for social gatherings</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Arrive on time for dinner invitations; being
                                                    10-15 minutes late for informal parties is
                                                    acceptable
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">RSVP expectations</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Respond to invitations promptly and clearly, and
                                                    follow through on commitments
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Restaurant bill customs</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Germans often prefer to split bills precisely
                                                    rather than equally sharing costs
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-green-500/5 border border-green-500/20 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-green-500">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg><span>Building Relationships</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Germans often take time to develop friendships, but these
                        relationships tend to be deep and long-lasting:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-green-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Friendship develops gradually
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Germans typically make friends slowly and carefully, but
                                    form deeper bonds over time. Don&#x27;t be discouraged
                                    if close friendships take months to develop.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-green-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Compartmentalized friendships
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Germans often maintain separate circles of friends for
                                    different activities or contexts, rather than
                                    introducing all their friends to each other.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-green-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Reliability matters
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Being reliable and trustworthy is fundamental to German
                                    friendships. Following through on commitments and being
                                    punctual helps build trust.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-green-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Honesty is valued
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Honest communication, even when difficult, is considered
                                    a sign of respect in German culture. White lies to spare
                                    feelings are less common than in some cultures.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                        <p class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-lightbulb h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg><span><strong>Social Integration Tip:</strong> Join a Verein
                                (club or association) related to your interests. These
                                structured social groups are central to German social life
                                and provide regular opportunities to connect with Germans
                                who share your hobbies.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-primary/20">
                        <span class="text-primary">Adaptation Process</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Cultural Adjustment Strategies
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Adapting to a new culture is a process that takes time and
                        conscious effort. Understanding the typical phases of cultural
                        adjustment can help you navigate the challenges and develop
                        effective coping strategies.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Culture Shock Phases
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            Most international students and trainees experience
                            predictable phases of cultural adjustment. Recognizing these
                            phases can help you understand your emotions and reactions.
                        </p>
                        <div class="p-4 bg-beige/5 border border-primary/20 rounded-lg">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-base mb-3 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar-check h-4 w-4 text-primary">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                    <path d="m9 16 2 2 4-4"></path>
                                </svg><span>The Adjustment Cycle</span>
                            </h4>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-2">
                                    <div
                                        class="bg-beige w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="text-white font-bold text-xs">1</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-medium">Honeymoon Phase</span>
                                        <p class="text-xs text-muted-foreground">
                                            Initial excitement and fascination with the new
                                            culture. Everything seems interesting and positive.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <div
                                        class="bg-beige w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="text-white font-bold text-xs">2</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-medium">Crisis/Culture Shock Phase</span>
                                        <p class="text-xs text-muted-foreground">
                                            Frustration and confusion as cultural differences
                                            become apparent. Homesickness and difficulties with
                                            language may increase.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <div
                                        class="bg-beige w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="text-white font-bold text-xs">3</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-medium">Adjustment Phase</span>
                                        <p class="text-xs text-muted-foreground">
                                            Gradual understanding and acceptance of the new
                                            culture. Development of coping strategies and
                                            increasing comfort with daily life.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <div
                                        class="bg-beige w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="text-white font-bold text-xs">4</span>
                                    </div>
                                    <div>
                                        <span class="text-sm font-medium">Adaptation Phase</span>
                                        <p class="text-xs text-muted-foreground">
                                            Integration of aspects of both cultures. Ability to
                                            function effectively in the German context while
                                            maintaining your own cultural identity.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Cultural adjustment process for international students in Germany" loading="lazy"
                            decoding="async" data-nimg="fill" class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/_next/culture-shock-phasescfef.jpeg') }}" />
                        <div class="absolute inset-x-0 bottom-0 bg-black/80 p-4">
                            <p class="text-white text-sm">
                                Understanding the culture shock process helps you
                                recognize that adjustment challenges are normal and
                                temporary.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-2 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-beige w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-heart text-white h-6 w-6">
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Coping Mechanisms
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Effective strategies to manage cultural adjustment
                                challenges:
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Maintain self-care routines</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Regular exercise, healthy eating, and sufficient
                                                    sleep help manage stress
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Stay connected to home</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Regular communication with family and friends
                                                    provides emotional support
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Seek cultural mentors</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Find German friends or colleagues who can
                                                    explain cultural nuances
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Practice mindfulness</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Observe cultural differences with curiosity
                                                    rather than judgment
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Connect with other internationals</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Share experiences with others going through
                                                    similar adjustments
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-beige w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-globe text-white h-6 w-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                    <path d="M2 12h20"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Language Immersion Techniques
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Accelerate your German language proficiency with these
                                practical approaches:
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">German-only days</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Designate specific days where you only use
                                                    German, even for digital content
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Language tandems</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Partner with a German who wants to learn your
                                                    language for mutual exchange
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Active workplace listening</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Pay special attention to workplace vocabulary
                                                    and common phrases
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">Context-based vocabulary</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Learn vocabulary related to your specific
                                                    vocational field
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">German media consumption</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Watch German TV shows, listen to podcasts, and
                                                    read news in German
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-beige/5 border border-primary/20 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users h-5 w-5 text-primary">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg><span>Identity Maintenance While Adapting</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Balancing cultural adaptation with maintaining your own
                        cultural identity:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="bg-beige w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Cultural traditions
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Continue celebrating important holidays and traditions
                                    from your home culture. Share these with German friends
                                    to foster cross-cultural understanding.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-beige w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Bicultural competence
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Aim to become competent in both cultures rather than
                                    replacing your native culture with German culture. Think
                                    of cultural adaptation as adding skills rather than
                                    losing identity.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-beige w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Community connections
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Connect with people from your home country or region for
                                    cultural familiarity while still pursuing integration
                                    into German society.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-beige w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Share your culture
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Confidently share aspects of your culture with Germans.
                                    Many will appreciate learning about different
                                    traditions, foods, and perspectives.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                        <p class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-lightbulb h-4 w-4 text-primary shrink-0 mt-0.5">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg><span><strong>Integration Insight:</strong> Successful cultural
                                integration doesn&#x27;t mean complete assimilation. The
                                most well-adjusted international students and
                                professionals develop a bicultural identity that draws on
                                the strengths of both their home culture and German
                                culture.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 px-3 py-1 rounded-md mb-4 bg-background border-orange-500/20">
                        <span class="text-orange-500">Community Connections</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Building Your Social Network
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Creating a supportive social network is critical for your
                        personal well-being and professional success during your
                        Ausbildung in Germany.
                    </p>
                </div>
                <div class="grid gap-8 md:grid-cols-3 mb-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-orange-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-briefcase text-white h-6 w-6">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Workplace Connections
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Your training company offers valuable networking
                                opportunities:
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Fellow trainees</span>
                                        <p class="text-xs text-muted-foreground">
                                            Connect with other Azubis who understand your
                                            experience
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Company events</span>
                                        <p class="text-xs text-muted-foreground">
                                            Attend social gatherings, team events, and company
                                            celebrations
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Mentorship opportunities</span>
                                        <p class="text-xs text-muted-foreground">
                                            Seek out mentors among experienced colleagues
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Lunch breaks</span>
                                        <p class="text-xs text-muted-foreground">
                                            Join colleagues for meals to build relationships
                                            outside work tasks
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-orange-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-book-open text-white h-6 w-6">
                                    <path d="M12 7v14"></path>
                                    <path
                                        d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Educational Networks
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Your vocational school provides opportunities to build a
                                diverse network:
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Study groups</span>
                                        <p class="text-xs text-muted-foreground">
                                            Form or join groups to prepare for exams together
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Class representatives</span>
                                        <p class="text-xs text-muted-foreground">
                                            Consider volunteering for leadership roles
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">School events</span>
                                        <p class="text-xs text-muted-foreground">
                                            Participate in competitions, field trips, and social
                                            activities
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Alumni networks</span>
                                        <p class="text-xs text-muted-foreground">
                                            Connect with graduates from your vocational program
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-orange-500 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-users text-white h-6 w-6">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Community Engagement
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Participating in local community activities expands your
                                network:
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Volunteer opportunities</span>
                                        <p class="text-xs text-muted-foreground">
                                            Contribute to local causes that align with your
                                            interests
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Sports clubs</span>
                                        <p class="text-xs text-muted-foreground">
                                            Join a Sportverein to connect through physical
                                            activities
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Cultural associations</span>
                                        <p class="text-xs text-muted-foreground">
                                            Participate in music, art, or theater groups
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Language exchange meetups</span>
                                        <p class="text-xs text-muted-foreground">
                                            Attend events where you can practice German while
                                            others learn your language
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-orange-500/5 border border-orange-500/20 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-globe h-5 w-5 text-orange-500">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg><span>Practical Community Resources</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Several organizations and resources can help you connect with
                        others and navigate life in Germany:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-orange-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    International student organizations
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Many cities have associations specifically for
                                    international students and trainees. These offer events,
                                    advice, and a supportive community of people with
                                    similar experiences.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-orange-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Integration courses
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Beyond language learning, integration courses provide
                                    cultural knowledge and the opportunity to meet others
                                    who are also adapting to life in Germany.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-orange-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Digital platforms
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Websites and apps like Meetup, InterNations, and
                                    Facebook groups for expats or specific interests can
                                    help you find local events and connect with people who
                                    share your interests.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-orange-500 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-base">
                                    Municipal welcome services
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Many German cities offer orientation programs, city
                                    tours, and cultural events specifically designed to
                                    welcome newcomers and help them integrate into the
                                    community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-background rounded-md border border-border text-sm">
                        <p class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-lightbulb h-4 w-4 text-orange-500 shrink-0 mt-0.5">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg><span><strong>Networking Tip:</strong> Don&#x27;t limit
                                yourself to only connecting with people from your home
                                country. While these connections provide comfort and
                                cultural familiarity, building relationships with Germans
                                and people from other countries will enrich your
                                experience and accelerate your cultural and language
                                learning.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="mb-12 text-center">
                        <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                            Your Cultural Integration Journey
                        </h2>
                        <p class="text-lg text-muted-foreground">
                            Cultural integration is an ongoing process that requires
                            patience, openness, and a willingness to learn. Remember
                            that feeling comfortable in a new culture takes time, and
                            it&#x27;s normal to experience challenges along the way.
                        </p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-6 mb-10">
                        <a class="group block p-5 bg-card border border-primary/10 rounded-xl hover:border-primary/20 hover:shadow-md transition-all"
                            href="#">
                            <div class="flex items-center mb-3">
                                <div
                                    class="bg-primary/10 w-10 h-10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-scale text-primary h-5 w-5">
                                        <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                        <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                        <path d="M7 21h10"></path>
                                        <path d="M12 3v18"></path>
                                        <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-1">
                                Trainee Rights
                            </h3>
                            <p class="text-sm text-muted-foreground">
                                Understanding your legal rights and protections in Germany
                            </p>
                        </a><a
                            class="group block p-5 bg-card border border-primary/10 rounded-xl hover:border-primary/20 hover:shadow-md transition-all"
                            href="#">
                            <div class="flex items-center mb-3">
                                <div
                                    class="bg-green-500/10 w-10 h-10 rounded-lg flex items-center justify-center group-hover:bg-green-500/20 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-clock text-green-500 h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-1">
                                Daily Life
                            </h3>
                            <p class="text-sm text-muted-foreground">
                                Practical aspects of day-to-day living during your
                                Ausbildung
                            </p>
                        </a><a
                            class="group block p-5 bg-card border border-primary/10 rounded-xl hover:border-primary/20 hover:shadow-md transition-all"
                            href="#">
                            <div class="flex items-center mb-3">
                                <div
                                    class="bg-beige/10 w-10 h-10 rounded-lg flex items-center justify-center group-hover:bg-beige/20 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-globe text-primary h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                        <path d="M2 12h20"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-1">
                                Language Guide
                            </h3>
                            <p class="text-sm text-muted-foreground">
                                Resources and strategies for improving your German skills
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-10">
                <a class="group block p-5 bg-card border border-primary/10 rounded-xl hover:border-primary/20 hover:shadow-md transition-all max-w-sm"
                    href="#">
                    <div class="flex items-center mb-3">
                        <div
                            class="bg-orange-500/10 w-10 h-10 rounded-lg flex items-center justify-center group-hover:bg-orange-500/20 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-refresh-ccw text-orange-500 h-5 w-5">
                                <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                <path d="M3 3v5h5"></path>
                                <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"></path>
                                <path d="M16 16h5v5"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-1">
                        Switch Your Ausbildung
                    </h3>
                    <p class="text-sm text-muted-foreground">
                        Guide to changing your training program if needed
                    </p>
                </a>
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
                    src="{{ asset('assets/_next/arbeitgeber-hero-backgroundaa3f.jpeg') }}" />
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
                            Start Your German Career Journey
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            Find Ausbildung positions at companies committed to
                            supporting international trainees&#x27; cultural
                            integration.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                                Training Jobs</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
