<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AZUBI Admin')</title>

    {{-- Jobick Theme CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/backoffice/css/style.css') }}">
    @stack('styles')
</head>
<body>

    <div id="main-wrapper">

        {{-- Sidebar --}}
        <div class="nav-header">
            <a href="{{ route('admin.dashboard') }}" class="brand-logo">
                <span class="brand-title">AZUBI Admin</span>
            </a>
        </div>

        {{-- Content --}}
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>

    {{-- Jobick Theme JS --}}
    <script src="{{ asset('assets/backoffice/js/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/js/custom.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
