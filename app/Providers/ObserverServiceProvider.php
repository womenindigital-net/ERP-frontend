<?php

namespace App\Providers;

use App\Models\Income;
use App\Models\Purchase;
use App\Models\SaleIncomeDetail;
use App\Models\StockReceiveDetail;
use App\Observers\IncomeObserver;
use App\Observers\PurchaseObserver;
use App\Observers\SaleVoucherObserver;
use App\Observers\StockReceiveObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
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
        Income::observe(IncomeObserver::class);
        SaleIncomeDetail::observe(SaleVoucherObserver::class);
        StockReceiveDetail::observe(StockReceiveObserver::class);
        Purchase::observe(PurchaseObserver::class);
    }
}
