<?php

namespace App\Models;

use App\Models\PaymentHistory;
use App\Models\SupplierPayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    public function supplierPayment(): HasOne
    {
        return $this->hasOne(SupplierPayment::class);
    }

    public function history(): HasOne
    {
        return $this->hasOne(PaymentHistory::class);
    }
}
