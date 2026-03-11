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

Route::get('/', [HomeController::class, 'index'])->name('front.index');
Route::get('/faq', [HomeController::class, 'faq'])->name('front.faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('front.contact');
Route::get('/ausbildung-basics', [HomeController::class, 'ausbildungBasics'])->name('front.ausbildung-basics');
Route::get('/language', [HomeController::class, 'language'])->name('front.language');
Route::get('/costs', [HomeController::class, 'costs'])->name('front.costs');
Route::get('/visa', [HomeController::class, 'visa'])->name('front.visa');
Route::get('/why-ausbildung', [HomeController::class, 'whyAusbildung'])->name('front.why-ausbildung');
Route::get('/after-ausbildung', [HomeController::class, 'afterAusbildung'])->name('front.after-ausbildung');
Route::get('/application', [HomeController::class, 'application'])->name('front.application');
Route::get('/ausbildung-timeline', [HomeController::class, 'ausbildungTimeline'])->name('front.ausbildung-timeline');
Route::get('/cultural-integration', [HomeController::class, 'culturalIntegration'])->name('front.cultural-integration');
Route::get('/daily-life', [HomeController::class, 'dailyLife'])->name('front.daily-life');
Route::get('/housing', [HomeController::class, 'housing'])->name('front.housing');
Route::get('/requirements', [HomeController::class, 'requirements'])->name('front.requirements');
Route::get('/ausbildung-germany', [HomeController::class, 'ausbildungGermany'])->name('front.ausbildung-germany');
Route::get('/programs', [HomeController::class, 'programs'])->name('front.programs');
Route::get('/trainee-rights', [HomeController::class, 'traineeRights'])->name('front.trainee-rights');
Route::get('/partner-with-us', [HomeController::class, 'partnerWithUs'])->name('front.partner-with-us');
Route::get('/consultation', [HomeController::class, 'consultation'])->name('front.consultation');
Route::get('/sectors', [HomeController::class, 'sectors'])->name('front.sectors');
Route::get('/sectors/{slug}', [HomeController::class, 'sector'])->name('front.sector');
Route::get('/about', [HomeController::class, 'about'])->name('front.about');
Route::get('/jobs', [HomeController::class, 'jobs'])->name('front.jobs');
Route::get('/tools', [HomeController::class, 'tools'])->name('front.tools');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('front.privacy');
Route::get('/imprint', [HomeController::class, 'imprint'])->name('front.imprint');
Route::get('/cookies', [HomeController::class, 'cookies'])->name('front.cookies');
Route::get('/refund-policy', [HomeController::class, 'refundPolicy'])->name('front.refund-policy');
Route::get('/success-stories', [HomeController::class, 'successStories'])->name('front.success-stories');
