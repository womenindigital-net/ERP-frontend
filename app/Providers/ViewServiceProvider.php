<?php

namespace App\Providers;

use App\Utility\BreadcrumbsMappingConstants;
use App\Utility\CareNeedsFormConstants;
use App\Utility\CaseHistoryConstants;
use App\Utility\ProjectConstants;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Utility\IndividualRiskAssessmentForm;
use App\Utility\OccupationalTherapyConstants;
use App\Utility\FunctionalMovement;
use App\Utility\SensoryYoungAdult;
use App\Utility\TripReport;
use App\Utility\Gymouting;
use App\Utility\OtAssessment;
use App\Utility\AssigntaskConstant;
use App\Utility\IncidentRecord;
use App\Utility\individual_risk_assessment_form;
use App\Utility\DramaDiaryEvaluation;
use App\Utility\StaffAndWorkPlace;

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
        /*View::share('caseConstants', CaseHistoryConstants::class);
        View::share('careConstants', CareNeedsFormConstants::class);
        View::share('therapyConstants', OccupationalTherapyConstants::class);
        View::share('physiotherapyConstants', physiotherapy::class);
        View::share('executiveConstants', executiveFunctionTest::class);
        View::share('IRAConstants', IndividualRiskAssessmentForm::class);
        View::share('functionalConstants', FunctionalMovement::class);

        View::share('sensoryChecklistConstant', SensoryYoungAdult::class);
        View::share('tripReportConstants', TripReport::class);
        View::share('gymoutingConstants', Gymouting::class);
        View::share('otassessmentConstants', OtAssessment::class);
        View::share('assigntaskConstant', AssigntaskConstant::class);
        View::share('incidentConstant', IncidentRecord::class);
        View::share('diaryConstant', DramaDiaryEvaluation::class);
        View::share('staffAndWork', StaffAndWorkPlace::class);*/
    }
}
