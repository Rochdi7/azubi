<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'GoAusbildung')</title>
    @yield('meta')
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="GoAusbildung">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/081a0afca5a9bd20.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/d9109d77acd75b7b.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/e2c84361ea1dce8b.css') }}">
    @stack('styles')
    <style>
        :root { --font-inter: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif; }
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
