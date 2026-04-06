<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\AuthController;
use App\Http\Controllers\Backoffice\DashboardController;

/*
|--------------------------------------------------------------------------
| Backoffice Routes
|--------------------------------------------------------------------------
|
| Routes for authentication and the user dashboard panel.
|
*/

// Auth routes (guest only for login/register page)
Route::middleware('guest')->group(function () {
    Route::get('/auth', [AuthController::class, 'index'])->name('front.auth');
    Route::post('/auth/login', [AuthController::class, 'login'])->name('front.auth.login');
    Route::post('/auth/register', [AuthController::class, 'register'])->name('front.auth.register');
});
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('front.auth.logout');

// Authenticated user dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('front.dashboard');
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('front.dashboard.profile');
    Route::post('/dashboard/profile', [DashboardController::class, 'updateProfile'])->name('front.dashboard.profile.update');
    Route::post('/dashboard/profile/contact', [DashboardController::class, 'updateContactInfo'])->name('front.dashboard.profile.contact');
    Route::post('/dashboard/profile/photo', [DashboardController::class, 'updateProfilePhoto'])->name('front.dashboard.profile.photo');
});
