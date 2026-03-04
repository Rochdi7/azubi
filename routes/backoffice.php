<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\JobickAdminController;

/*
|--------------------------------------------------------------------------
| Backoffice Routes
|--------------------------------------------------------------------------
|
| Routes for the admin panel (Jobick theme).
|
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardContr