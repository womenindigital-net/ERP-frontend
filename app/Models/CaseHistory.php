<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CaseHistory extends Model
{
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    /*protected function hasAdjustmentCapability(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => $val ? 1 : 0,
            set: fn ($val) => $val ? 1 : 0,
        );
    }*/
}
