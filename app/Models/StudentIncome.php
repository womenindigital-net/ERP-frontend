<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentIncome extends Model
{
    use HasFactory, SoftDeletes;

    public function studentIncomeDetail(): HasOne
    {
        return $this->hasOne(StudentIncomeDetail::class);
    }

    protected $guarded = [];
}
