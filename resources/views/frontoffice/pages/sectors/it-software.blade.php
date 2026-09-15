@extends('frontoffice.layouts.app')

@section('title', 'IT & Software Sector | Azubi')

@section('meta')
    <meta name="description"
        content="Explore IT & Software Ausbildung opportunities in Germany: requirements, salary ranges, and career paths." />
    <link rel="canonical" href="{{ url('/sectors/it-software') }}" />
@endsection

@section('content')
    <section class="min-h-[70vh] flex items-center justify-center pt-24 pb-16 bg-background">
        <div class="mx-auto w-full max-w-2xl px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <div
                class="mx-auto h-20 w-20 rounded-3xl bg-primary/10 border border-primary/20 flex items-center justify-center overflow-hidden">
                <img src="{{ asset('assets/_next/mascot_itc3c5.jpeg') }}" alt="IT & Software mascot"
                    class="h-16 w-16 object-contain" width="64" height="64" loading="lazy" />
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-secondary tracking-tight">IT &amp; Software</h1>
            <p class="text-muted-foreground text-lg leading-relaxed">
                This sector page is being updated. In the meantime, explore the main IT sector overview.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="{{ route('front.sector', ['slug' => 'it']) }}"
                    class="inline-flex items-center justify-center gap-2 bg-primary text-white shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 rounded-full px-8 text-sm font-semibold transition-all duration-200">
                    View IT Sector
                </a>
                <a href="{{ route('front.sectors') }}"
                    class="inline-flex items-center justify-center gap-2 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-12 rounded-full px-8 text-sm font-semibold transition-all duration-200">
                    Back to Sectors
                </a>
            </div>
        </div>
    </section>
@endsection
