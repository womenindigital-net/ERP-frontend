<?php

namespace App\Models;

use App\Models\StockReceiveDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockReceive extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(StockReceiveDetail::class);
    }
}
