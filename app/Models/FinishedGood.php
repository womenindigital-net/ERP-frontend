<?php

namespace App\Models;

use App\Models\FinishedGoodDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinishedGood extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(FinishedGoodDetail::class);
    }
}
