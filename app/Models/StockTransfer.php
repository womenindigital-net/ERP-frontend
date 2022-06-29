<?php

namespace App\Models;

use App\Models\StockTransferDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockTransfer extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(StockTransferDetail::class);
    }
}
