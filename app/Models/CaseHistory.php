<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseHistory extends Model
{
    use HasFactory;

    protected function hasAdjustmentCapability(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => $val ? 1 : 0,
            set: fn ($val) => $val ? 1 : 0,
        );
    }
}
