@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung Sectors in Germany (2026) | GoAusbildung')

@section('meta')
    <meta name="description" content="Explore Ausbildung sectors in Germany: Healthcare, IT, Engineering, Hospitality, Logistics, Sales, and more. Find the training path that fits you." />
    <meta name="keywords" content="ausbildung sectors germany,vocational training sectors,healthcare ausbildung,it ausbildung,engineering ausbildung,hospitality ausbildung,logistics ausbildung,sales ausbildung" />
    <link rel="canonical" href="{{ url('/sectors') }}" />
@endsection

@section('content')
    <section class="relative overflow-hidden pt-24 pb-14 bg-background">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}" alt="Autumn landscape in Germany" class="w-full h-full object-cover" width="1920" height="1080" loading="eager" />
            <div class="absolute inset-0 bg-black/45"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white backdrop-blur-sm">
                <span class="text-sm font-medium">Explore Industries</span>
            </div>
            <h1 class="mt-5 text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight">
                Choose Your Ausbildung Sector
            </h1>
            <p class="mt-5 text-lg md:text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                Pick an industry that matches your strengths and goals. Each sector page includes requirements, salary ranges, and real-world career paths.
            </p>
        </div>
    </section>

    @php
        $sectors = [
            [
                'slug' => 'healthcare',
                'title' => 'Healthcare',
                'description' => 'Nursing, caregiving, and medical support roles with strong demand.',
                'image' => 'assets/_next/mascot_healthcaredcc0.jpeg',
            ],
            [
                'slug' => 'it',
                'title' => 'IT & Software',
                'description' => 'System integration, software, and digital roles in a fast-growing sector.',
                'image' => 'assets/_next/mascot_itc3c5.jpeg',
            ],
            [
                'slug' => 'engineering',
                'title' => 'Engineering & Technical',
                'description' => 'Mechanics, electrical, automation, and industrial technical training.',
                'image' => 'assets/_next/mascot_engineering75c1.jpeg',
            ],
            [
                'slug' => 'hospitality',
                'title' => 'Hospitality & Tourism',
                'description' => 'Hotel, restaurant, and culinary programs with international opportunities.',
                'image' => 'assets/_next/mascot_hospitality08bf.jpeg',
            ],
            [
                'slug' => 'logistics',
                'title' => 'Logistics',
                'description' => 'Warehousing, supply chain, and transport operations across Germany.',
                'image' => 'assets/_next/mascot_logistics757f.jpeg',
            ],
            [
                'slug' => 'sales',
                'title' => 'Sales & Retail',
                'description' => 'Customer-facing roles with strong business fundamentals and growth.',
                'image' => 'assets/_next/mascot_sales9644.jpeg',
            ],
        ];
    @endphp

    <section class="py-14 bg-[#F9F5F0]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($sectors as $sector)
                    <a href="{{ route('front.sector', ['slug' => $sector['slug']]) }}"
                        class="group block rounded-2xl border border-border bg-background p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex items-start gap-4">
                            <div class="h-16 w-16 rounded-2xl bg-primary/5 flex items-center justify-center shrink-0 border border-primary/10 overflow-hidden">
                                <img src="{{ asset($sector['image']) }}" alt="{{ $sector['title'] }} mascot" class="h-14 w-14 object-contain" width="56" height="56" loading="lazy" />
                            </div>
                            <div class="flex-1 text-left">
                                <h2 class="text-xl font-bold text-secondary group-hover:text-primary transition-colors">
                                    {{ $sector['title'] }}
                                </h2>
                                <p class="mt-1 text-sm text-muted-foreground leading-relaxed">
                                    {{ $sector['description'] }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary">
                            Explore sector
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="transition-transform duration-200 group-hover:translate-x-1">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

