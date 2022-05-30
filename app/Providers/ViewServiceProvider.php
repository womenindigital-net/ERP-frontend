<?php

namespace App\Providers;

use App\Utility\physiotherapy;
use App\Utility\BreadcrumbsMappingConstants;
use App\Utility\CareNeedsFormConstants;
use App\Utility\CaseHistoryConstants;
use App\Utility\ProjectConstants;
use Illuminate\Support\Facades\View;
use App\Utility\CaseHistoryConstants;
use App\Utility\executiveFunctionTest;
use App\Utility\CareNeedsFormConstants;
use Illuminate\Support\ServiceProvider;
use App\Utility\IndividualRiskAssessmentForm;
use App\Utility\OccupationalTherapyConstants;
use App\Utility\FunctionalMovement;
use App\Utility\SensoryYoungAdult;



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
        View::composer('case-history', function($view)
        {
            $view->with('caseConstants', CaseHistoryConstants::class);
        });
        View::composer('careNeedConstants', function($view)
        {
            $view->with('care-needs-form', CareNeedsFormConstants::class);
        });
        /*View::share('caseConstants', CaseHistoryConstants::class);
        View::share('careConstants', CareNeedsFormConstants::class);
        View::share('therapyConstants', OccupationalTherapyConstants::class);
        View::share('physiotherapyConstants', physiotherapy::class);
        View::share('executiveConstants', executiveFunctionTest::class);
        View::share('IRAConstants', IndividualRiskAssessmentForm::class);
        View::share('functionalConstants', FunctionalMovement::class);
        View::share('sensoryChecklistConstant', SensoryYoungAdult::class);*/


    }
}
