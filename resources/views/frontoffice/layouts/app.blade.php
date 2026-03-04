<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AZUBI')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-900">

    {{-- Navbar --}}
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="{{ route('front.home') }}" class="text-2xl font-bold text-indigo-600">AZUBI</a>
                <div class="flex space-x-4">
                    <a href="{{ route('front.home') }}" class="text-gray-700 hover:text-indigo-600 transition">Accueil</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8 text-center text-sm">
            &copy; {{ date('Y') }} AZUBI. Tous droits r&eacute;serv&eacute;s.
        </div>
    </footer>

</body>
</html>
