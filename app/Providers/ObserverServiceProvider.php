<?php

namespace App\Providers;

use App\Models\FinishedGoodDetail;
use App\Models\Income;
use App\Models\MaterialCollectionProduct;
use App\Models\Purchase;
use App\Models\PurchaseReturnDetail;
use App\Models\SaleIncomeDetail;
use App\Models\StockAssign;
use App\Models\StockAssignDetail;
use App\Models\StockOutDetail;
use App\Models\StockReceiveDetail;
use App\Models\StockTransferDetail;
use App\Observers\FinishedGoodDetailObserver;
use App\Observers\IncomeObserver;
use App\Observers\MaterialCollectionProductObserver;
use App\Observers\PurchaseObserver;
use App\Observers\PurchaseReturnDetailObserver;
use App\Observers\SaleVoucherObserver;
use App\Observers\StockAssignDetailObserver;
use App\Observers\StockAssignObserver;
use App\Observers\StockOutDetailObserver;
use App\Observers\StockReceiveDetailObserver;
use App\Observers\StockReceiveObserver;
use App\Observers\StockTransferDetailObserver;
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
        PurchaseReturnDetail::observe(PurchaseReturnDetailObserver::class);
        StockReceiveDetail::observe(StockReceiveDetailObserver::class);
        FinishedGoodDetail::observe(FinishedGoodDetailObserver::class);
        MaterialCollectionProduct::observe(MaterialCollectionProductObserver::class);
        StockTransferDetail::observe(StockTransferDetailObserver::class);
        // StockAssignDetail::observe(StockAssignObserver::class);
        StockAssignDetail::observe(StockAssignDetailObserver::class);
        StockOutDetail::observe(StockOutDetailObserver::class);
    }
}
