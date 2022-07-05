<?php

namespace App\Observers;

use App\Models\StockTransferDetail;
use App\Repositories\StockRepository;
use App\Repositories\StockTransferDetailRepository;

class StockTransferDetailObserver
{


    private StockTransferDetailRepository $repo;
    private StockRepository $stockRepo;

    public function __construct(StockTransferDetailRepository $repository, StockRepository $stockRepository)
    {
        $this->repo = $repository;
        $this->stockRepo = $stockRepository;
    }

    /**
     * Handle the StockTransferDetail "created" event.
     *
     * @param  \App\Models\StockTransferDetail  $stockTransferDetail
     * @return void
     */
    public function created(StockTransferDetail $stockTransferDetail)
    {
        $stockTransferDetail = $this->repo->getRelatedData($stockTransferDetail, ['stockTransfer']);

        $projectId = $stockTransferDetail->stockTransfer->project_id;
        $productId = $stockTransferDetail->product_id;
        $warehouseId = $stockTransferDetail->stockTransfer->warehouse_id;

        $stock = $this->stockRepo->getDetailAccordingly($projectId, $warehouseId, $productId);

        if ($stock) {
            $stock->qty -= $stockTransferDetail->transfer_quantity;
            $stock->saveQuietly();
        }
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
