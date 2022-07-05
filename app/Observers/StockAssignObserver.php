<?php

namespace App\Observers;

use App\Models\StockReceiveDetail;

class StockAssignObserver
{
    /**
     * Handle the StockReceiveDetail "created" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function created(StockReceiveDetail $stockReceiveDetail)
    {

    }

    /**
     * Handle the StockReceiveDetail "updated" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function updated(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }

    /**
     * Handle the StockReceiveDetail "deleted" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function deleted(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }

    /**
     * Handle the StockReceiveDetail "restored" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function restored(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }

    /**
     * Handle the StockReceiveDetail "force deleted" event.
     *
     * @param  \App\Models\StockReceiveDetail  $stockReceiveDetail
     * @return void
     */
    public function forceDeleted(StockReceiveDetail $stockReceiveDetail)
    {
        //
    }
}
