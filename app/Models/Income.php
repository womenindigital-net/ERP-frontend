<?php

namespace App\Models;

use App\Models\StudentIncome;
use App\Models\StudentIncomeDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory;

    public function studentIncome(): HasOne
    {
        return $this->hasOne(StudentIncome::class);
    }
    public function studentIncomeDetail(): HasOne
    {
        return $this->hasOne(StudentIncomeDetail::class);
    }
}
