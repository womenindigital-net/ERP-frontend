<?php

namespace App\Repositories;

use App\Models\Payment;

class DirectPaymentRepository extends BaseRepository
{
    protected string $model = Payment::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('payment.supplierPayment')
            ->when($search, function ($query) use ($search) {

            })->latest()->paginate($perPage);
    }
}
