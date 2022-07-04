<?php

namespace App\Models;

use App\Models\Project;
use App\Models\PaymentHistory;
use App\Models\SupplierPayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function paymentType(): HasOne
    {
        return $this->hasOne(paymentType::class);
    }

    public function bankAccount(): HasOne
    {
        return $this->hasOne(BankAccount::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
