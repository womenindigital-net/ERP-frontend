<?php

namespace App\Observers;

use App\Models\StockTransferDetail;

class StockTransferDetailObserver
{
    /**
     * Handle the StockTransferDetail "created" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function created(StockTransferDetail $stockTransferDetail)
    {
        //
    }

    /**
     * Handle the StockTransferDetail "updated" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function updated(StockTransferDetail $stockTransferDetail)
    {
        //
    }

    /**
     * Handle the StockTransferDetail "deleted" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function deleted(StockTransferDetail $stockTransferDetail)
    {
        //
    }

    /**
     * Handle the StockTransferDetail "restored" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function restored(StockTransferDetail $stockTransferDetail)
    {
        //
    }

    /**
     * Handle the StockTransferDetail "force deleted" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function forceDeleted(StockTransferDetail $stockTransferDetail)
    {
        //
    }
}
