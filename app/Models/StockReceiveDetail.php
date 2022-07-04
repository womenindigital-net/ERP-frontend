<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockReceiveDetail extends Model
{
    use HasFactory;

//    protected $fillable = ['product_id', 'exp_date', 'qty', 'received', 'return', 'receivable', 'stock_receive_qty'];
    protected $guarded = [];

    public function StockReceive(): BelongsTo
    {
        return $this->belongsTo(StockReceive::class);
    }
}
