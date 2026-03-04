@extends('backoffice.layouts.app')

@section('title', 'AZUBI Admin Dashboard')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">Accueil</li>
    </ol>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">AZUBI Admin Dashboard</h4>
            </div>
            <div class="card-body">
                <p>Bienvenue sur le panneau d'administration AZUBI.</p>
                <p>Utilisez le menu pour naviguer entre les sections.</p>
            </div>
        </div>
    </div>
</div>
@endsection
