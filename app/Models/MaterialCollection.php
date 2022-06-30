<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MaterialCollectionDetail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialCollection extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(MaterialCollectionDetail::class);
    }
}
