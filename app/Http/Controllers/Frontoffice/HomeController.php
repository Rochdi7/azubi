<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontoffice.pages.index');
    }

    public function faq()
    {
        return view('frontoffice.pages.faq');
    }

    public function contact()
    {
        return view('frontoffice.pages.contact');
    }

    public function ausbildungBasics()
    {
        return view('frontoffice.pages.ausbildung-basics');
    }

    public function language()
    {
        return view('frontoffice.pages.language');
    }

    public function costs()
    {
        return view('frontoffice.pages.costs');
    }

    public function visa()
    {
        return view('frontoffice.pages.visa');
    }

    public function whyAusbildung()
    {
        return view('frontoffice.pages.why-ausbildung');
    }

    public function afterAusbildung()
    {
        return view('frontoffice.pages.after-ausbildung');
    }

    public function application()
    {
        return view('frontoffice.pages.application');
    }

    public function ausbildungTimeline()
    {
        return view('frontoffice.pages.ausbildung-timeline');
    }

    public function culturalIntegration()
    {
        return view('frontoffice.pages.cultural-integration');
    }

    public function dailyLife()
    {
        return view('frontoffice.pages.daily-life');
    }

    public function housing()
    {
        return view('frontoffice.pages.housing');
    }

    public function requirements()
    {
        return view('frontoffice.pages.requirements');
    }

    public function ausbildungGermany()
    {
        return view('frontoffice.pages.ausbildung-germany');
    }

    public function programs()
    {
        return view('frontoffice.pages.programs');
    }

    public function traineeRights()
    {
        return view('frontoffice.pages.trainee-rights');
    }

    public function partnerWithUs()
    {
        return view('frontoffice.pages.partner-with-us');
    }

    public function consultation()
    {
        return view('frontoffice.pages.consultation');
    }

    public function sectors()
    {
        return view('frontoffice.pages.sectors.index');
    }

    public function sector(string $slug)
    {
        $view = "frontoffice.pages.sectors.{$slug}";

        if (view()->exists($view)) {
            return view($view);
        }

        abort(404);
    }

    public function about()
    {
        return view('frontoffice.pages.about');
    }

    public function jobs()
    {
        return view('frontoffice.pages.jobs');
    }

    public function tools()
    {
        return view('frontoffice.pages.tools');
    }

    public function privacy()
    {
        return view('frontoffice.pages.privacy');
    }

    public function imprint()
    {
        return view('frontoffice.pages.imprint');
    }

    public function cookies()
    {
        return view('frontoffice.pages.cookies');
    }

    public function refundPolicy()
    {
        return view('frontoffice.pages.refund-policy');
    }

    public function successStories()
    {
        return view('frontoffice.pages.success-stories');
    }
}
