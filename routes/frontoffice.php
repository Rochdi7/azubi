<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontoffice\HomeController;
use App\Http\Controllers\Frontoffice\AuthController;
use App\Http\Controllers\Frontoffice\UserDashboardController;

/*
|--------------------------------------------------------------------------
| Frontoffice Routes
|--------------------------------------------------------------------------
|
| Routes for the public-facing website (Tailwind CSS).
|
*/

// Auth routes (guest only for login/register page)
Route::middleware('guest')->group(function () {
    Route::get('/auth', [AuthController::class, 'index'])->name('front.auth');
    Route::post('/auth/login', [AuthController::class, 'login'])->name('front.auth.login');
    Route::post('/auth/register', [AuthController::class, 'register'])->name('front.auth.register');
});
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('front.auth.logout');

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('front.dashboard');
    Route::get('/dashboard/profile', [UserDashboardController::class, 'profile'])->name('front.dashboard.profile');
    Route::post('/dashboard/profile', [UserDashboardController::class, 'updateProfile'])->name('front.dashboard.profile.update');
    Route::post('/dashboard/profile/contact', [UserDashboardController::class, 'updateContactInfo'])->name('front.dashboard.profile.contact');
    Route::post('/dashboard/profile/photo', [UserDashboardController::class, 'updateProfilePhoto'])->name('front.dashboard.profile.photo');
});

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
Route::get('/ausbildung/change-career', [HomeController::class, 'changeCareer'])->name('front.change-career');
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
Route::get('/tools/eligibility-checker', [HomeController::class, 'toolEligibilityChecker'])->name('front.tools.eligibility-checker');
Route::get('/tools/cover-letter', [HomeController::class, 'toolCoverLetter'])->name('front.tools.cover-letter');
Route::get('/tools/living-cost-calculator', [HomeController::class, 'toolLivingCostCalculator'])->name('front.tools.living-cost-calculator');
Route::get('/tools/roi-calculator', [HomeController::class, 'toolRoiCalculator'])->name('front.tools.roi-calculator');
Route::get('/tools/document-checklist', [HomeController::class, 'toolDocumentChecklist'])->name('front.tools.document-checklist');
Route::get('/tools/career-pathway-decision', [HomeController::class, 'toolCareerPathwayDecision'])->name('front.tools.career-pathway-decision');
Route::get('/tools/application-timeline', [HomeController::class, 'toolApplicationTimeline'])->name('front.tools.application-timeline');
Route::get('/tools/ausbildung-sector-comparison', [HomeController::class, 'toolAusbildungSectorComparison'])->name('front.tools.ausbildung-sector-comparison');
Route::get('/tools/ausbildung-vs-university-comparison', [HomeController::class, 'toolAusbildungVsUniversity'])->name('front.tools.ausbildung-vs-university-comparison');
Route::get('/tools/blocked-account-calculator', [HomeController::class, 'toolBlockedAccountCalculator'])->name('front.tools.blocked-account-calculator');
Route::get('/tools/cv-comparison', [HomeController::class, 'toolCvComparison'])->name('front.tools.cv-comparison');
Route::get('/tools/language-proficiency-calculator', [HomeController::class, 'toolLanguageProficiencyCalculator'])->name('front.tools.language-proficiency-calculator');
Route::get('/tools/pre-departure-checklist', [HomeController::class, 'toolPreDepartureChecklist'])->name('front.tools.pre-departure-checklist');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('front.privacy');
Route::get('/imprint', [HomeController::class, 'imprint'])->name('front.imprint');
Route::get('/cookies', [HomeController::class, 'cookies'])->name('front.cookies');
Route::get('/refund-policy', [HomeController::class, 'refundPolicy'])->name('front.refund-policy');
Route::get('/success-stories', [HomeController::class, 'successStories'])->name('front.success-stories');
