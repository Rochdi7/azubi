<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Azubi')</title>
    @yield('meta')
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Azubi">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/favicons/favicon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/images/favicons/favicon-512x512.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}">
    <meta name="theme-color" content="#5D5DE9">
    <link rel="stylesheet" href="{{ asset('assets/css/inter-fontface.css') }}?v={{ filemtime(public_path('assets/css/inter-fontface.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/legal-prose.css') }}?v={{ filemtime(public_path('assets/css/legal-prose.css')) }}">
    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset('assets/fonts/687613c278c4fd0d8c3d8f2a_DMSans-Regular.woff2') }}">
    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset('assets/fonts/65394e97b7805494f5736d2d_GT-Super-Display-Medium.woff2') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/brand-fonts.css') }}?v={{ filemtime(public_path('assets/css/brand-fonts.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/brand-gradients.css') }}?v={{ filemtime(public_path('assets/css/brand-gradients.css')) }}">
    @stack('styles')
    <style>
        :root {
            /* Body/UI face. The prebuilt Tailwind CSS resolves every sans stack
               through this token, so pointing it at DM Sans re-fonts the site. */
            --font-inter: 'DM Sans', ui-sans-serif, system-ui, -apple-system, sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-background font-sans antialiased overflow-x-hidden">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden max-w-full">

        @include('frontoffice.partials.header')

        <main class="flex-1 max-w-full">
            @yield('content')
        </main>

        @include('frontoffice.partials.footer')

    </div>

    @stack('scripts')

    <script src="{{ asset('assets/js/frontoffice/navigation.js') }}"></script>
    <script src="{{ asset('assets/js/frontoffice/accordion-fixes.js') }}"></script>
    <script src="{{ asset('assets/js/frontoffice/visibility-fixes.js') }}"></script>
    <script src="{{ asset('assets/js/frontoffice/form-dropdowns.js') }}"></script>

</body>

</html>
