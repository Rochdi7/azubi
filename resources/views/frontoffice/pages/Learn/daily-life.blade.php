@extends('frontoffice.layouts.app')

@section('title', 'Daily Life as Ausbildung Trainee: Schedule, School & Social Life | Azubi')

@section('meta')
    <meta name="description"
        content="What to expect during Ausbildung: typical 8am-5pm work schedule, 1-2 days/week vocational school, weekends off, and social life in Germany. Real trainee experiences." />
    <meta name="keywords"
        content="ausbildung daily life,ausbildung schedule,berufsschule,vocational school germany,ausbildung work life balance,life in germany trainee" />
    <meta property="og:title" content="Daily Life as Ausbildung Trainee: Schedule, School &amp; Social Life" />
    <meta property="og:description"
        content="What to expect during Ausbildung: typical 8am-5pm work schedule, 1-2 days/week vocational school, weekends off, and social life in Germany. Real trainee experiences." />
    <meta property="og:image" content="https://images.azubi.ma/og-images/daily-life.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Daily Life as Ausbildung Trainee: Schedule, School &amp; Social Life" />
    <meta name="twitter:description"
        content="What to expect during Ausbildung: typical 8am-5pm work schedule, 1-2 days/week vocational school, weekends off, and social life in Germany. Real trainee experiences." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/daily-life') }}" />
@endsection

@section('content')
    <div class="flex flex-col">
        <section
            class="relative text-foreground py-16 sm:py-20 md:py-24 lg:py-28 min-h-[600px] sm:min-h-[650px] lg:min-h-[700px] overflow-hidden w-full flex items-center justify-center -mt-24 pt-36 sm:pt-40 md:pt-44">
            <img alt="Rhine Valley in autumn - scenic German river landscape with vineyards representing daily life culture"
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
                sizes="100vw" src="{{ asset('assets/images/heroes/rhine-valley-hero-autumn.jpeg') }}" />
            <div class="absolute inset-0 bg-black/30 z-0 azubi-hero-veil"></div>
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
                            aria-label="Daily Life Guide">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock h-4 w-4 mr-2" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>Daily Life Guide
                        </div>
                    </div>
                    <h1
                        class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-white drop-shadow-2xl animate-fade-in-up animation-delay-200">
                        Daily Life as an Ausbildung Trainee in Germany
                    </h1>
                    <p class="text-lg leading-relaxed text-white/90 drop-shadow-lg animate-fade-in-up animation-delay-300">
                        What to expect in your day-to-day life during vocational
                        training, including work schedule, social life, cultural
                        experiences, and practical living tips.
                    </p>
                    <nav class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-up animation-delay-400 mt-2 w-full max-w-md mx-auto justify-center"
                        aria-label="Primary navigation">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 active:translate-y-0 h-14 bg-[#5D5DE9] hover:bg-[#2C3340] text-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto hover:-translate-y-1 inline-flex items-center justify-center"
                            aria-label="Explore Training Programs" href="{{ route('front.sectors') }}"><span
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-graduation-cap w-5 h-5 mr-2">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                </svg></span><span>Explore Training Programs</span></a><a
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-transparent hover:-translate-y-0.5 active:translate-y-0 h-14 border-2 border-white/80 hover:border-white text-white hover:text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 rounded-full px-6 sm:px-7 py-5 text-base font-semibold w-full sm:w-auto shadow-lg inline-flex items-center justify-center"
                            aria-label="View Schedule Details" href="#typical-schedule"><span aria-hidden="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-calendar w-5 h-5 mr-2">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg></span><span>View Schedule Details</span></a>
                    </nav>
                </div>
            </div>
            <div class="hidden md:block absolute bottom-4 right-4 z-10">
                <p class="text-xs text-white/70 bg-black/20 backdrop-blur-sm px-3 py-1.5 rounded-full">
                    Rhine Valley, Rhineland-Palatinate
                </p>
            </div>
        </section>
        <section id="typical-schedule" class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-card border-primary/10">
                        <span class="text-primary font-medium">Daily Routine</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Typical Schedule
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Ausbildung follows a structured schedule that combines
                        practical work experience with theoretical classroom learning.
                        Your weekly routine will vary depending on your field and
                        program.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Ausbildung student checking schedule" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/images/content/daily-schedule.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                Ausbildung students typically follow a structured weekly
                                schedule alternating between workplace training and
                                vocational school days.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Weekly Routine Examples
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            Ausbildung programs in Germany follow two main scheduling
                            models: the weekly model and the block model. Your schedule
                            will depend on your profession, training company, and
                            vocational school.
                        </p>
                        <div class="space-y-4 mb-6">
                            <div class="p-4 bg-card border border-primary/10 rounded-lg">
                                <h4
                                    class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar h-4 w-4 text-primary">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg><span>Weekly Model</span>
                                </h4>
                                <p class="text-sm text-muted-foreground mb-3">
                                    In this model, you attend vocational school 1-2 days per
                                    week and work at your training company for the remaining
                                    days.
                                </p>
                                <div class="grid grid-cols-7 gap-1.5 text-xs">
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Mon
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Tue
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Wed
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Thu
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Fri
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Sat
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Sun
                                    </div>
                                    <div
                                        class="p-1.5 bg-primary/10 text-primary rounded border border-primary/20 text-center">
                                        School
                                    </div>
                                    <div
                                        class="p-1.5 bg-green-500/10 text-green-600 rounded border border-green-500/20 text-center">
                                        Company
                                    </div>
                                    <div
                                        class="p-1.5 bg-green-500/10 text-green-600 rounded border border-green-500/20 text-center">
                                        Company
                                    </div>
                                    <div
                                        class="p-1.5 bg-green-500/10 text-green-600 rounded border border-green-500/20 text-center">
                                        Company
                                    </div>
                                    <div
                                        class="p-1.5 bg-primary/10 text-primary rounded border border-primary/20 text-center">
                                        School
                                    </div>
                                    <div
                                        class="p-1.5 bg-amber-500/10 text-amber-600 rounded border border-amber-500/20 text-center">
                                        Off
                                    </div>
                                    <div
                                        class="p-1.5 bg-amber-500/10 text-amber-600 rounded border border-amber-500/20 text-center">
                                        Off
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 bg-card border border-primary/10 rounded-lg">
                                <h4
                                    class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar h-4 w-4 text-primary">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg><span>Block Model</span>
                                </h4>
                                <p class="text-sm text-muted-foreground mb-3">
                                    In this model, you attend vocational school for several
                                    weeks at a time, followed by extended periods at your
                                    training company.
                                </p>
                                <div class="grid grid-cols-4 gap-1.5 text-xs">
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Week 1-3
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Week 4-11
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Week 12-14
                                    </div>
                                    <div class="p-1.5 bg-background rounded border border-border text-center font-medium">
                                        Week 15-22
                                    </div>
                                    <div
                                        class="p-1.5 bg-primary/10 text-primary rounded border border-primary/20 text-center">
                                        Vocational School
                                    </div>
                                    <div
                                        class="p-1.5 bg-green-500/10 text-green-600 rounded border border-green-500/20 text-center">
                                        Training Company
                                    </div>
                                    <div
                                        class="p-1.5 bg-primary/10 text-primary rounded border border-primary/20 text-center">
                                        Vocational School
                                    </div>
                                    <div
                                        class="p-1.5 bg-green-500/10 text-green-600 rounded border border-green-500/20 text-center">
                                        Training Company
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 md:grid-cols-2 mt-16">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-briefcase text-white h-6 w-6">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Company Training Days
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Most of your training takes place at your company, where
                                you&#x27;ll gain hands-on practical experience in your
                                profession.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1">
                                        Daily Schedule at Company
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">07:30 - 08:00</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Arrival and preparation
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">08:00 - 12:00</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Morning work session with your department
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">12:00 - 12:45</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Lunch break
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">12:45 - 16:00/16:30</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Afternoon work session
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1">
                                        What to Expect
                                    </h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Rotation through different departments (based on
                                                training plan)</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Assigned tasks under supervision of experienced
                                                colleagues</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Regular meetings with your training
                                                supervisor</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Documentation of tasks in your training report
                                                book</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Increasing responsibility as your skills
                                                develop</span>
                                        </li>
                                    </ul>
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
                                    class="lucide lucide-book-open text-white h-6 w-6">
                                    <path d="M12 7v14"></path>
                                    <path
                                        d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Vocational School Days
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                At vocational school (Berufsschule), you&#x27;ll receive
                                theoretical instruction relevant to your profession and
                                general education subjects.
                            </p>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1">
                                        Daily Schedule at School
                                    </h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">07:45 - 08:30</span>
                                                <p class="text-xs text-muted-foreground">
                                                    First period
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">08:30 - 12:00</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Morning classes with short breaks
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">12:00 - 12:45</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Lunch break
                                                </p>
                                            </div>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <div>
                                                <span class="text-sm font-medium">12:45 - 15:15</span>
                                                <p class="text-xs text-muted-foreground">
                                                    Afternoon classes
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1">
                                        Subject Areas
                                    </h4>
                                    <ul class="space-y-1">
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Profession-specific theoretical knowledge</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>German language and communication</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Economics and social studies</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Mathematics and natural sciences</span>
                                        </li>
                                        <li class="flex items-start gap-2 text-sm text-muted-foreground">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big h-4 w-4 text-primary shrink-0 mt-0.5">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg><span>Field-specific IT and digitalization</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-card border border-primary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-pen-tool h-5 w-5 text-primary">
                            <path
                                d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z">
                            </path>
                            <path
                                d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18">
                            </path>
                            <path d="m2.3 2.3 7.286 7.286"></path>
                            <circle cx="11" cy="11" r="2"></circle>
                        </svg><span>Examination Periods</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Your Ausbildung will include several examination phases to
                        assess your progress and final qualification:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary">
                                    Probation Period Assessment (First 1-4 months)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Initial evaluation of your suitability for the training
                                    program. Both you and the company can terminate the
                                    contract during this period if expectations aren&#x27;t
                                    met.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary">
                                    Interim Examination (Halfway through training)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Assesses your theoretical knowledge and practical skills
                                    at the midpoint of your training. Results don&#x27;t
                                    typically count toward your final grade but indicate
                                    areas for improvement.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary">
                                    Final Examination (Last 3-6 months)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    Comprehensive assessment including written tests,
                                    practical demonstrations, and often an oral examination
                                    or project presentation. Successfully passing grants you
                                    your vocational qualification certificate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-card border-primary/10">
                        <span class="text-primary font-medium">Time Management</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Work-Study Balance
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Successfully balancing your practical training, theoretical
                        learning, and personal life is key to thriving during your
                        Ausbildung journey.
                    </p>
                </div>
                <div class="grid gap-8 md:grid-cols-3">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-card w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-clock text-primary h-6 w-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Time Management Strategies
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Effective time management ensures you can meet both your
                                work and educational requirements while maintaining a
                                healthy personal life.
                            </p>
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
                                        <span class="text-sm font-medium">Use digital calendars</span>
                                        <p class="text-xs text-muted-foreground">
                                            Keep track of company days, school schedules, and
                                            assignment deadlines
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
                                        <span class="text-sm font-medium">Establish routines</span>
                                        <p class="text-xs text-muted-foreground">
                                            Create consistent study and revision times after
                                            work
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
                                        <span class="text-sm font-medium">Batch similar tasks</span>
                                        <p class="text-xs text-muted-foreground">
                                            Group activities like documentation, learning, and
                                            practical tasks
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
                                        <span class="text-sm font-medium">Plan for rest periods</span>
                                        <p class="text-xs text-muted-foreground">
                                            Schedule breaks to prevent burnout and maintain
                                            productivity
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-card w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-book-open text-primary h-6 w-6">
                                    <path d="M12 7v14"></path>
                                    <path
                                        d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Study Techniques
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Efficient study methods will help you master theoretical
                                knowledge while balancing practical training
                                responsibilities.
                            </p>
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
                                        <span class="text-sm font-medium">Active recall practice</span>
                                        <p class="text-xs text-muted-foreground">
                                            Test yourself on key concepts rather than passive
                                            re-reading
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
                                        <span class="text-sm font-medium">Spaced repetition</span>
                                        <p class="text-xs text-muted-foreground">
                                            Review material at increasing intervals to improve
                                            retention
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
                                        <span class="text-sm font-medium">Connect theory to practice</span>
                                        <p class="text-xs text-muted-foreground">
                                            Relate classroom learning to your workplace
                                            experiences
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
                                        <span class="text-sm font-medium">Study groups</span>
                                        <p class="text-xs text-muted-foreground">
                                            Form groups with classmates to review complex topics
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-card w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-heart text-primary h-6 w-6">
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Stress Management
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Managing stress is crucial during your Ausbildung journey
                                to maintain your wellbeing and optimize performance.
                            </p>
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
                                        <span class="text-sm font-medium">Physical activity</span>
                                        <p class="text-xs text-muted-foreground">
                                            Regular exercise relieves stress and improves focus
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
                                        <span class="text-sm font-medium">Social connections</span>
                                        <p class="text-xs text-muted-foreground">
                                            Maintain relationships with friends and family for
                                            support
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
                                        <span class="text-sm font-medium">Mindfulness practices</span>
                                        <p class="text-xs text-muted-foreground">
                                            Meditation and breathing exercises to reduce anxiety
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
                                        <span class="text-sm font-medium">Seek help when needed</span>
                                        <p class="text-xs text-muted-foreground">
                                            Don&#x27;t hesitate to talk to instructors, mentors,
                                            or counselors
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-card border border-primary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-chart-no-axes-column-increasing h-5 w-5 text-primary">
                            <line x1="12" x2="12" y1="20" y2="10"></line>
                            <line x1="18" x2="18" y1="20" y2="4"></line>
                            <line x1="6" x2="6" y1="20" y2="16"></line>
                        </svg><span>Handling Workload Throughout Your Ausbildung</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Your workload will fluctuate throughout your training period.
                        Here&#x27;s what to expect:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-card border border-primary/10 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-primary font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary">
                                    Beginning Phase (Months 1-6)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    The initial months can be overwhelming as you adjust to
                                    new routines, workplace culture, and educational
                                    requirements. Focus on basics, ask many questions, and
                                    build foundations.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-card border border-primary/10 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-primary font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary">
                                    Middle Phase (Months 7-24)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    As you gain competence, you&#x27;ll handle more complex
                                    tasks and deeper theoretical concepts. Balance becomes
                                    easier with experience, but interim exams add temporary
                                    pressure.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="bg-card border border-primary/10 w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-primary font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary">
                                    Final Phase (Last 6 months)
                                </h4>
                                <p class="text-sm text-muted-foreground">
                                    The most intensive period as you prepare for final
                                    examinations while handling increasingly independent
                                    work tasks. Time management becomes crucial during this
                                    phase.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 p-3 bg-background rounded-lg border border-border text-sm text-muted-foreground">
                        <strong>Pro Tip:</strong> Keep a reflective journal
                        documenting connections between your theoretical learning and
                        practical experiences. This helps with knowledge integration
                        and serves as an excellent study resource for examinations.
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-card border-secondary/10">
                        <span class="text-secondary font-medium">Social Aspects</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Social Life and Integration
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Building a social network and integrating into German culture
                        are important aspects of your Ausbildung experience that
                        contribute to both personal happiness and professional
                        success.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="International students socializing in Germany" loading="lazy" decoding="async"
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
                            sizes="100vw" src="{{ asset('assets/images/content/student-social.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                Building a social network during your Ausbildung helps
                                with cultural integration and provides valuable support
                                during your training.
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Building Your Network
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            Creating a strong social network during your Ausbildung
                            provides emotional support, cultural immersion, and valuable
                            professional connections. As an international trainee,
                            it&#x27;s essential to invest time in building
                            relationships.
                        </p>
                        <div class="space-y-4">
                            <div class="p-4 bg-card border border-secondary/10 rounded-lg">
                                <h4 class="tracking-tight font-semibold text-sm sm:text-base text-secondary mb-2">
                                    Key Social Circles to Develop
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Fellow Trainees</span>
                                            <p class="text-xs text-muted-foreground">
                                                Your most immediate support network facing similar
                                                challenges
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Vocational School Classmates</span>
                                            <p class="text-xs text-muted-foreground">
                                                Important for study groups and sharing industry
                                                insights
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Work Colleagues</span>
                                            <p class="text-xs text-muted-foreground">
                                                Professional mentors and workplace support
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <div>
                                            <span class="text-sm font-medium">Local Community</span>
                                            <p class="text-xs text-muted-foreground">
                                                Friends outside work/school for balanced social
                                                life
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-8 sm:grid-cols-2 mt-12">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
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
                                Making German Friends
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Forming friendships with locals enriches your experience
                                and accelerates language learning, though it may require
                                patience and cultural awareness.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Join sports clubs and hobby groups</span>
                                        <p class="text-xs text-muted-foreground">
                                            Germans often form deep friendships through shared
                                            activities and interests
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Participate in company events</span>
                                        <p class="text-xs text-muted-foreground">
                                            Social gatherings, team activities, and company
                                            celebrations are networking opportunities
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Understand cultural differences</span>
                                        <p class="text-xs text-muted-foreground">
                                            Germans may appear reserved at first but form loyal
                                            friendships over time
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Respect personal boundaries</span>
                                        <p class="text-xs text-muted-foreground">
                                            Germans typically maintain clearer separation
                                            between work and personal life
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-school text-white h-6 w-6">
                                    <path d="M14 22v-4a2 2 0 1 0-4 0v4"></path>
                                    <path
                                        d="m18 10 3.447 1.724a1 1 0 0 1 .553.894V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7.382a1 1 0 0 1 .553-.894L6 10">
                                    </path>
                                    <path d="M18 5v17"></path>
                                    <path d="m4 6 7.106-3.553a2 2 0 0 1 1.788 0L20 6"></path>
                                    <path d="M6 5v17"></path>
                                    <circle cx="12" cy="9" r="2"></circle>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Language Practice Opportunities
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Daily life during Ausbildung provides numerous
                                opportunities to improve your German language skills
                                through immersion and practice.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Workplace communication</span>
                                        <p class="text-xs text-muted-foreground">
                                            Use daily interactions with colleagues to practice
                                            professional German
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Language exchange partners</span>
                                        <p class="text-xs text-muted-foreground">
                                            Find a tandem partner to practice German while
                                            helping them with your native language
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Local events and activities</span>
                                        <p class="text-xs text-muted-foreground">
                                            Community events, workshops, and local festivities
                                            provide cultural context
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-amber-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <div>
                                        <span class="text-sm font-medium">Media immersion</span>
                                        <p class="text-xs text-muted-foreground">
                                            Watch German TV, listen to podcasts, and read news
                                            to improve comprehension
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-card border border-secondary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-map h-5 w-5 text-secondary">
                            <path
                                d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z">
                            </path>
                            <path d="M15 5.764v15"></path>
                            <path d="M9 3.236v15"></path>
                        </svg><span>Cultural Integration Activities</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Embracing German culture enriches your Ausbildung experience
                        and helps you feel more at home in your new environment:
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-secondary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Explore Local Traditions</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                Participate in seasonal festivals, regional celebrations,
                                and local customs. Germany has rich cultural traditions
                                that vary by region, from Oktoberfest in Bavaria to
                                carnival celebrations in the Rhineland.
                            </p>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-secondary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Understand Workplace Culture</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                German work culture values punctuality, direct
                                communication, and thoroughness. Adapt to local workplace
                                etiquette like formal addressing with &quot;Sie&quot;
                                until invited to use &quot;du,&quot; and respecting
                                hierarchical structures.
                            </p>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-secondary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Try Local Cuisine</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                Explore German food beyond stereotypes. Each region has
                                its specialties, from Bavarian pretzels to Berlin
                                currywurst. Joining colleagues for lunch or after-work
                                meals provides social bonding opportunities.
                            </p>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-1 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-secondary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Engage with Local History</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                Understanding German history provides context for the
                                culture. Visit museums, historical sites, and join guided
                                city tours to learn about your region&#x27;s past and how
                                it shapes present-day Germany.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-muted/30">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-card border-secondary/10">
                        <span class="text-secondary font-medium">Support Networks</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Support Systems
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        During your Ausbildung, various support networks and resources
                        are available to help you navigate challenges, enhance your
                        learning, and ensure your wellbeing.
                    </p>
                </div>
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
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
                                Mentoring Programs
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Many companies and vocational schools offer mentoring
                                support to guide trainees through their Ausbildung
                                journey.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Designated training supervisors at companies</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Peer mentoring from advanced trainees</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Regular feedback sessions and check-ins</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Professional development guidance</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-school text-white h-6 w-6">
                                    <path d="M14 22v-4a2 2 0 1 0-4 0v4"></path>
                                    <path
                                        d="m18 10 3.447 1.724a1 1 0 0 1 .553.894V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7.382a1 1 0 0 1 .553-.894L6 10">
                                    </path>
                                    <path d="M18 5v17"></path>
                                    <path d="m4 6 7.106-3.553a2 2 0 0 1 1.788 0L20 6"></path>
                                    <path d="M6 5v17"></path>
                                    <circle cx="12" cy="9" r="2"></circle>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                Student Organizations
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Vocational schools have various student groups that
                                organize activities, provide support, and represent
                                trainee interests.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Student councils (Schülervertretung)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Field-specific student associations</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Study groups and peer tutoring</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Social events and networking opportunities</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map text-white h-6 w-6">
                                    <path
                                        d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z">
                                    </path>
                                    <path d="M15 5.764v15"></path>
                                    <path d="M9 3.236v15"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-3">
                                International Groups
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Connect with other international students and trainees who
                                understand the unique challenges of relocating to Germany.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">International student associations</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Cultural exchange programs</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Regional expatriate communities</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Social media groups for internationals</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rounded-xl text-card-foreground shadow bg-card border border-primary/10">
                        <div class="p-6">
                            <div class="bg-secondary w-12 h-12 rounded-lg flex items-center justify-center mb-4">
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
                                Counseling Services
                            </h3>
                            <p class="text-muted-foreground mb-4">
                                Professional support for academic, personal, and mental
                                health concerns during your training.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Academic advisors at vocational schools</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Company HR support services</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Mental health resources and counseling</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-sm">Integration assistance for internationals</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 p-6 bg-card border border-secondary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-lightbulb h-5 w-5 text-secondary">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                            </path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg><span>When to Seek Support</span>
                    </h3>
                    <p class="text-muted-foreground mb-4">
                        Don&#x27;t hesitate to reach out for assistance when facing
                        these common challenges:
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <ul class="space-y-2 text-sm text-muted-foreground">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Difficulty understanding course material or work
                                        tasks</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Language barriers affecting your performance</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Conflicts with colleagues or classmates</span>
                                </li>
                            </ul>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <ul class="space-y-2 text-sm text-muted-foreground">
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Feeling overwhelmed or experiencing stress</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Homesickness or cultural adjustment issues</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-check-big h-4 w-4 text-green-500 shrink-0 mt-0.5">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span>Administrative or bureaucratic challenges</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-sm text-muted-foreground mt-4">
                        Remember: Seeking help is viewed as a sign of responsibility
                        and professionalism in Germany, not weakness. Your trainers
                        and supervisors want you to succeed and are there to support
                        your development.
                    </p>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container px-4 md:px-6">
                <div class="max-w-[800px] mx-auto text-center mb-12">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-primary-foreground hover:bg-primary/80 bg-card border-primary/10">
                        <span class="text-primary font-medium">Free Time</span>
                    </div>
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-secondary mb-4">
                        Leisure and Recreation
                    </h2>
                    <p class="text-lg text-muted-foreground">
                        Maintaining a healthy work-life balance is important during
                        your Ausbildung. Germany offers many opportunities for leisure
                        activities and recreation.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-4">
                            Balancing Work and Leisure
                        </h3>
                        <p class="mb-4 text-muted-foreground">
                            While Ausbildung is demanding, it&#x27;s important to make
                            time for recreation and relaxation. Germany has a strong
                            culture of work-life balance, with plenty of opportunities
                            for leisure activities.
                        </p>
                        <p class="mb-6 text-muted-foreground">
                            As an Ausbildung student, you&#x27;ll typically have
                            evenings, weekends, and vacation days to explore your
                            interests, socialize, and recharge. Making the most of this
                            time contributes to your overall well-being and success.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-indigo-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>30 working days of paid vacation per year (typical for
                                    full-time trainees)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-indigo-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Statutory holidays vary by federal state (9-13 days
                                    annually)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-indigo-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Vocational school holidays often align with regional
                                    school breaks</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-5 w-5 text-indigo-500 shrink-0 mt-0.5">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Discounted travel and cultural opportunities with
                                    trainee/student ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-[350px] shadow-xl">
                        <img alt="Leisure activities in Germany" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover"
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
                            sizes="100vw" src="{{ asset('assets/images/content/leisure-germany.jpeg') }}" />
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary/95 p-4">
                            <p class="text-white text-sm">
                                Germany offers numerous affordable leisure activities for
                                Ausbildung students, from outdoor adventures to cultural
                                experiences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-12">
                    <div class="p-5 bg-card border border-primary/10 rounded-xl">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-card p-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map h-5 w-5 text-primary">
                                    <path
                                        d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z">
                                    </path>
                                    <path d="M15 5.764v15"></path>
                                    <path d="M9 3.236v15"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Sports and Outdoor Activities
                            </h3>
                        </div>
                        <p class="text-sm text-muted-foreground mb-3">
                            Germany&#x27;s extensive parks, forests, and recreational
                            facilities make outdoor activities accessible and
                            affordable.
                        </p>
                        <ul class="space-y-1 text-sm">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Sports clubs (Vereine) for team and individual
                                    sports</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Hiking in numerous nature parks and
                                    trails</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Cycling on extensive bike path networks</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Public swimming pools and lakes</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 bg-card border border-primary/10 rounded-xl">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-card p-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-music h-5 w-5 text-primary">
                                    <path d="M9 18V5l12-2v13"></path>
                                    <circle cx="6" cy="18" r="3"></circle>
                                    <circle cx="18" cy="16" r="3"></circle>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Cultural Activities
                            </h3>
                        </div>
                        <p class="text-sm text-muted-foreground mb-3">
                            Germany&#x27;s rich cultural landscape offers many
                            opportunities for enrichment and entertainment, often with
                            student discounts.
                        </p>
                        <ul class="space-y-1 text-sm">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Museums and galleries (often free/reduced on
                                    certain
                                    days)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Concerts, theater performances, and opera</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Cinema (with student discounts and original
                                    version
                                    films)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Seasonal festivals and cultural events</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 bg-card border border-primary/10 rounded-xl">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-card p-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar h-5 w-5 text-primary">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                            </div>
                            <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary">
                                Travel Opportunities
                            </h3>
                        </div>
                        <p class="text-sm text-muted-foreground mb-3">
                            Germany&#x27;s central location and excellent transportation
                            network make travel affordable and convenient during your
                            free time.
                        </p>
                        <ul class="space-y-1 text-sm">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Discounted regional and national train tickets
                                    for
                                    students</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Weekend trips to neighboring cities and
                                    countries</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Youth hostels throughout Germany and
                                    Europe</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-indigo-500 shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span class="text-muted-foreground">Low-cost airlines for European
                                    exploration</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 p-6 bg-card border border-primary/10 rounded-xl max-w-3xl mx-auto">
                    <h3
                        class="tracking-tight font-semibold sm:text-lg text-secondary text-lg mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-lightbulb h-5 w-5 text-primary">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                            </path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg><span>Pro Tips for Affordable Recreation</span>
                    </h3>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Get Your Trainee ID Card</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                Your vocational school ID card (Berufsschulausweis) or
                                apprentice ID can qualify you for many of the same
                                discounts as university students. Always ask about trainee
                                discounts when purchasing tickets.
                            </p>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>City Cards and Regional Passes</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                Many cities offer tourist or culture cards that bundle
                                public transportation with free/discounted entry to
                                attractions. Regional transit passes (like the
                                Deutschland-Ticket) offer unlimited travel for a fixed
                                monthly fee.
                            </p>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Free or Low-Cost Activities</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                Take advantage of Germany&#x27;s many free activities:
                                public parks, outdoor concerts, city festivals, and
                                walking tours. Many museums also offer free entry on
                                specific days or evenings each month.
                            </p>
                        </div>
                        <div class="p-3 bg-background rounded-lg border border-border">
                            <h4
                                class="tracking-tight font-semibold sm:text-base text-secondary text-sm mb-2 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big h-3 w-3 text-primary">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg><span>Join Clubs and Associations</span>
                            </h4>
                            <p class="text-xs text-muted-foreground">
                                German Vereine (clubs) are affordable ways to pursue
                                hobbies and meet locals. From sports and hiking to music
                                and volunteering, these associations typically charge
                                modest membership fees for regular activities.
                            </p>
                        </div>
                    </div>
                </div>
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
                    src="{{ asset('assets/images/heroes/arbeitgeber-hero-background.jpeg') }}" />
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
                            Find Your Perfect Training Position
                        </h2>
                        <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">
                            Discover companies offering Ausbildung programs with
                            comprehensive support for international trainees.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                            <a href="{{ route('front.jobs') }}"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">View
                                Available Positions</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
