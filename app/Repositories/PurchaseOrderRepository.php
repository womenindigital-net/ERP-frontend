<?php

namespace App\Repositories;

use App\Models\Purchase;

class PurchaseOrderRepository extends BaseRepository
{
    protected string $model = Purchase::class;
}
