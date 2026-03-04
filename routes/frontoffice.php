<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontoffice\HomeController;

/*
|--------------------------------------------------------------------------
| Frontoffice Routes
|--------------------------------------------------------------------------
|
| Routes for the public-facing website (Tailwind CSS).
|
*/

Route::get('/', [HomeController::class, 'index'])->name('front.home');
