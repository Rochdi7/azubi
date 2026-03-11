@extends('frontoffice.layouts.app')

@section('title', 'GoAusbildung')

@section('meta')
    <meta name="description"
        content="Your gateway to German Ausbildung opportunities - connecting international students with vocational training in Germany." />
    <meta property="og:title" content="GoAusbildung" />
    <meta property="og:description"
        content="Your gateway to German Ausbildung opportunities - connecting international students with vocational training in Germany." />
    <meta property="og:url" content="https://goausbildung.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="GoAusbildung" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@goausbildung" />
    <meta name="twitter:creator" content="@goausbildung" />
    <meta name="twitter:title" content="GoAusbildung" />
    <meta name="twitter:description"
        content="Your gateway to German Ausbildung opportunities - connecting international students with vocational training in Germany." />
    <meta name="twitter:image" content="https://images.goausbildung.com/og-images/default-og.png" />
@endsection



@section('content')
    <div class="container py-20 flex flex-col items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-loader-circle h-10 w-10 animate-spin text-primary mb-4">
            <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
        </svg>
        <p class="text-lg">Loading program information...</p>
    </div>
    <!--$--><!--/$--><!--$--><!--/$-->
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endpush
