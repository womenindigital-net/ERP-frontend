<?php

namespace App\Observers;

use App\Models\MaterialCollectionProduct;

class MaterialCollectionProductObserver
{
    /**
     * Handle the MaterialCollectionProduct "created" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function created(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Handle the MaterialCollectionProduct "updated" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function updated(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Handle the MaterialCollectionProduct "deleted" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function deleted(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Handle the MaterialCollectionProduct "restored" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function restored(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Handle the MaterialCollectionProduct "force deleted" event.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return void
     */
    public function forceDeleted(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }
}
