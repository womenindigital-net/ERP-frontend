<?php

namespace App\Providers;

use App\Utility\BreadcrumbsMappingConstants;
use App\Utility\CareNeedsFormConstants;
use App\Utility\CaseHistoryConstants;
use App\Utility\ProjectConstants;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('case-history', function ($view) {
            $view->with('caseConstants', CaseHistoryConstants::class);
        });
        View::composer('careNeedConstants', function ($view) {
            $view->with('care-needs-form', CareNeedsFormConstants::class);
        });
    }
}
