<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialCollectionProduct extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function materialCollect()
    {
        return $this->belongsTo(MaterialCollection::class);
    }
}
