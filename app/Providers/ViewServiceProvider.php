<?php

namespace App\Providers;

use App\Utility\physiotherapy;
use App\Utility\ProjectConstants;
use Illuminate\Support\Facades\View;
use App\Utility\CaseHistoryConstants;
use App\Utility\executiveFunctionTest;
use App\Utility\CareNeedsFormConstants;
use Illuminate\Support\ServiceProvider;
use App\Utility\IndividualRiskAssessmentForm;
use App\Utility\OccupationalTherapyConstants;

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
        View::share('caseConstants', CaseHistoryConstants::class);
        View::share('careConstants', CareNeedsFormConstants::class);
        View::share('therapyConstants', OccupationalTherapyConstants::class);
        View::share('physiotherapyConstants', physiotherapy::class);
        View::share('executiveConstants', executiveFunctionTest::class);
        View::share('IRAConstants', IndividualRiskAssessmentForm::class);
    }
}
