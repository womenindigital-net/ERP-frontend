<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSpecifyingRelation($query)
    {
        return $query->with('category', function($q)
        {
            $q->select('id', 'name');
        })->select('id', 'name', 'category_id')
                     ->whereNotNull('category_id');
    }
}
