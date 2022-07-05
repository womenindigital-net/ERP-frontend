<?php

namespace App\Observers;

use App\Models\StockOutDetail;

class StockOutDetailObserver
{
    /**
     * Handle the StockOutDetail "created" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function created(StockOutDetail $stockOutDetail)
    {
        //
    }

    /**
     * Handle the StockOutDetail "updated" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function updated(StockOutDetail $stockOutDetail)
    {
        //
    }

    /**
     * Handle the StockOutDetail "deleted" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function deleted(StockOutDetail $stockOutDetail)
    {
        //
    }

    /**
     * Handle the StockOutDetail "restored" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function restored(StockOutDetail $stockOutDetail)
    {
        //
    }

    /**
     * Handle the StockOutDetail "force deleted" event.
     *
     * @param  \App\Models\StockOutDetail  $stockOutDetail
     * @return void
     */
    public function forceDeleted(StockOutDetail $stockOutDetail)
    {
        //
    }
}
