<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockOutDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stockOut()
    {
        return $this->belongsTo(StockOut::class);
    }
}
