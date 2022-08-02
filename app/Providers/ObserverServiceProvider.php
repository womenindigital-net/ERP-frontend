<?php

namespace App\Providers;

use App\Models\Income;
use App\Models\Payment;
use App\Models\Purchase;
use App\Models\Requisition;
use App\Models\StockAssign;
use App\Models\PaymentHistory;
use App\Models\StockOutDetail;
use App\Models\SupplierPayment;
use App\Models\SaleIncomeDetail;
use App\Models\StockAssignDetail;
use App\Observers\IncomeObserver;
use App\Models\FinishedGoodDetail;
use App\Models\StockReceiveDetail;
use App\Models\StockTransferDetail;
use App\Observers\PurchaseObserver;
use App\Models\PurchaseReturnDetail;
use App\Observers\RequisitionObserver;
use App\Observers\SaleVoucherObserver;
use App\Observers\StockAssignObserver;
use App\Observers\StockReceiveObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\DirectPaymentObserver;
use App\Models\MaterialCollectionProduct;
use App\Observers\StockOutDetailObserver;
use App\Observers\SupplierPaymentObserver;
use App\Observers\StockAssignDetailObserver;
use App\Observers\FinishedGoodDetailObserver;
use App\Observers\StockReceiveDetailObserver;
use App\Observers\StockTransferDetailObserver;
use App\Observers\PurchaseReturnDetailObserver;
use App\Observers\MaterialCollectionProductObserver;

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
        // StockReceiveDetail::observe(StockReceiveObserver::class);
        Purchase::observe(PurchaseObserver::class);
        PurchaseReturnDetail::observe(PurchaseReturnDetailObserver::class);
        StockReceiveDetail::observe(StockReceiveDetailObserver::class);
        FinishedGoodDetail::observe(FinishedGoodDetailObserver::class);
        MaterialCollectionProduct::observe(MaterialCollectionProductObserver::class);
        StockTransferDetail::observe(StockTransferDetailObserver::class);
        // StockAssignDetail::observe(StockAssignObserver::class);
        StockAssignDetail::observe(StockAssignDetailObserver::class);
        StockOutDetail::observe(StockOutDetailObserver::class);
        Requisition::observe(RequisitionObserver::class);
        PaymentHistory::observe(SupplierPaymentObserver::class);
        Payment::observe(DirectPaymentObserver::class);
    }
}
