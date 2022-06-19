<?php

namespace App\Repositories;

use App\Models\Stock;

class StockRepository extends BaseRepository
{
    protected string $model = Stock::class;

    public function getDetailAccordingly()
    {
        $projectId   = request()->project_id;
        $productId   = request()->product_id;
        $warehouseId = request()->warehouse_id;

        return $this->model::with('product')->where([
            'product_id'   => $productId,
            'project_id'   => $projectId,
            'warehouse_id' => $warehouseId,
        ])->first();
    }
}
