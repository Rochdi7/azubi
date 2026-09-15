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
        return view('frontoffice.pages.Learn.faq');
    }

    public function contact()
    {
        return view('frontoffice.pages.contact');
    }

    public function ausbildungBasics()
    {
        return view('frontoffice.pages.Learn.ausbildung-basics');
    }

    public function language()
    {
        return view('frontoffice.pages.Learn.language');
    }

    public function costs()
    {
        return view('frontoffice.pages.Learn.costs');
    }

    public function visa()
    {
        return view('frontoffice.pages.Learn.visa');
    }

    public function whyAusbildung()
    {
        return view('frontoffice.pages.Learn.why-ausbildung');
    }

    public function afterAusbildung()
    {
        return view('frontoffice.pages.Learn.after-ausbildung');
    }

    public function application()
    {
        return view('frontoffice.pages.Learn.application');
    }

    public function ausbildungTimeline()
    {
        return view('frontoffice.pages.Learn.ausbildung-timeline');
    }

    public function culturalIntegration()
    {
        return view('frontoffice.pages.Learn.cultural-integration');
    }

    public function changeCareer()
    {
        return view('frontoffice.pages.Learn.change-career');
    }

    public function dailyLife()
    {
        return view('frontoffice.pages.Learn.daily-life');
    }

    public function housing()
    {
        return view('frontoffice.pages.Learn.housing');
    }

    public function requirements()
    {
        return view('frontoffice.pages.Learn.requirements');
    }

    public function ausbildungGermany()
    {
        return view('frontoffice.pages.Learn.ausbildung-germany');
    }

    public function programs()
    {
        return view('frontoffice.pages.Learn.programs');
    }

    public function traineeRights()
    {
        return view('frontoffice.pages.Learn.trainee-rights');
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

    public function toolEligibilityChecker()
    {
        return view('frontoffice.pages.tools.eligibility-checker');
    }

    public function toolCoverLetter()
    {
        return view('frontoffice.pages.tools.cover-letter');
    }

    public function toolLivingCostCalculator()
    {
        return view('frontoffice.pages.tools.living-cost-calculator');
    }

    public function toolRoiCalculator()
    {
        return view('frontoffice.pages.tools.roi-calculator');
    }

    public function toolDocumentChecklist()
    {
        return view('frontoffice.pages.tools.document-checklist');
    }

    public function toolCareerPathwayDecision()
    {
        return view('frontoffice.pages.tools.career-pathway-decision');
    }

    public function toolApplicationTimeline()
    {
        return view('frontoffice.pages.tools.application-timeline');
    }

    public function toolAusbildungSectorComparison()
    {
        return view('frontoffice.pages.tools.ausbildung-sector-comparison');
    }

    public function toolAusbildungVsUniversity()
    {
        return view('frontoffice.pages.tools.ausbildung-vs-university-comparison');
    }

    public function toolBlockedAccountCalculator()
    {
        return view('frontoffice.pages.tools.blocked-account-calculator');
    }

    public function toolCvComparison()
    {
        return view('frontoffice.pages.tools.cv-comparison');
    }

    public function toolLanguageProficiencyCalculator()
    {
        return view('frontoffice.pages.tools.language-proficiency-calculator');
    }

    public function toolPreDepartureChecklist()
    {
        return view('frontoffice.pages.tools.pre-departure-checklist');
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
