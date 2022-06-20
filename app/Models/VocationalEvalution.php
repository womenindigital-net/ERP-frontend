<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\VocationalEvalutionDetail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VocationalEvalution extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(VocationalEvalutionDetail::class);
    }
}
