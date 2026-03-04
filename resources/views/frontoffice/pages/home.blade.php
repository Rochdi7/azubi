@extends('frontoffice.layouts.app')

@section('title', 'AZUBI Frontoffice')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    {{-- Hero Section --}}
    <div class="text-center">
        <h1 class="text-5xl font-extrabold text-gray-900">
            AZUBI <span class="text-indigo-600">Frontoffice</span>
        </h1>
        <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">
            Bienvenue sur la plateforme AZUBI. Trouvez les meilleures opportunit&eacute;s professionnelles.
        </p>
        <div class="mt-8">
            <a href="#" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Commencer
            </a>
        </div>
    </div>

    {{-- Features Grid --}}
    <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-sm p-8 text-center">
            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mx-auto">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900">Offres d'emploi</h3>
            <p class="mt-2 text-gray-500">D&eacute;couvrez des centaines d'offres adapt&eacute;es &agrave; votre profil.</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-8 text-center">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900">Entreprises</h3>
            <p class="mt-2 text-gray-500">Connectez-vous avec les meilleures entreprises du march&eacute;.</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-8 text-center">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900">Statistiques</h3>
            <p class="mt-2 text-gray-500">Suivez vos candidatures et performances en temps r&eacute;el.</p>
        </div>
    </div>

</div>
@endsection
