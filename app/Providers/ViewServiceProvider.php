<?php

namespace App\Providers;

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
        View::share('caseConstants', CaseHistoryConstants::class);
    }
}
