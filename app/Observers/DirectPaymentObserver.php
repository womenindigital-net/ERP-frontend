<?php

namespace App\Observers;

use App\Models\Payment;

class DirectPaymentObserver
{
    /**
     * Handle the Payment "created" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function created(Payment $Payment)
    {
        dd($Payment);
    }

    /**
     * Handle the Payment "updated" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function updated(Payment $Payment)
    {
        //
    }

    /**
     * Handle the Payment "deleted" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function deleted(Payment $Payment)
    {
        //
    }

    /**
     * Handle the Payment "restored" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function restored(Payment $Payment)
    {
        //
    }

    /**
     * Handle the Payment "force deleted" event.
     *
     * @param  \App\Models\Payment  $Payment
     * @return void
     */
    public function forceDeleted(Payment $Payment)
    {
        //
    }
}
