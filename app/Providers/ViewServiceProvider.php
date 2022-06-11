<?php

namespace App\Providers;

use App\Utility\Gymouting;
use App\Utility\TripReport;
use App\Utility\OtAssessment;
use App\Utility\PhysioTherapy;
use App\Utility\IncidentRecord;
use App\Utility\ProjectConstants;
use App\Utility\SensoryYoungAdult;
use App\Utility\StaffAndWorkPlace;
use App\Utility\AssigntaskConstant;
use App\Utility\FunctionalMovement;
use Illuminate\Support\Facades\View;
use App\Utility\CaseHistoryConstants;
use App\Utility\DramaDiaryEvaluation;
use App\Utility\ExecutiveFunctionTest;
use App\Utility\CareNeedsFormConstants;
use Illuminate\Support\ServiceProvider;
use App\Utility\BreadcrumbsMappingConstants;
use App\Utility\IndividualRiskAssessmentForm;
use App\Utility\OccupationalTherapyConstants;
use App\Utility\individual_risk_assessment_form;
use App\Utility\MitpConstent;



class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::share('constants', ProjectConstants::class);
        View::composer('elements.breadcrumb', function ($view) {

            $view->with('breadcrumbConstants', BreadcrumbsMappingConstants::class);
        });

        View::composer(['livewire.case-history', 'pre_admission.care-needs-form'], function ($view) {
            $view->with('caseConstants', CaseHistoryConstants::class);
        });

        View::composer(['pre_admission.care-needs-form'], function ($view) {
            $view->with('careConstants', CareNeedsFormConstants::class);
        });
        View::share('therapyConstants', OccupationalTherapyConstants::class);
        View::share('physiotherapyConstants', PhysioTherapy::class);
        View::share('executiveConstants', ExecutiveFunctionTest::class);
        View::share('IRAConstants', IndividualRiskAssessmentForm::class);
        View::share('sensoryChecklistConstant', SensoryYoungAdult::class);
        View::share('tripReportConstants', TripReport::class);
        View::share('gymoutingConstants', Gymouting::class);
        View::share('otassessmentConstants', OtAssessment::class);
        View::share('incidentConstant', IncidentRecord::class);
        View::share('diaryConstant', DramaDiaryEvaluation::class);
        View::share('mitpConstent', MitpConstent::class);
        View::share('caseConstants', CaseHistoryConstants::class);
        View::share('staffAndWork', StaffAndWorkPlace::class);
        /*
        View::share('careConstants', CareNeedsFormConstants::class);
        View::share('functionalConstants', FunctionalMovement::class);

        View::share('assigntaskConstant', AssigntaskConstant::class);*/
    }
}
