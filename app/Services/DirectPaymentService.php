<?php

namespace App\Services;

use App\Models\Donation;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use App\Repositories\PaymentRepository;
use App\Repositories\SupplierPaymentRepository;

class DirectPaymentService
{
    private SupplierPaymentRepository $repo;
    private PaymentRepository $paymentRepo;

    /**
     * @param SupplierPaymentRepository $repository
     * @param  $incomeRepository
     */
    public function __construct(
        SupplierPaymentRepository $repository,
        PaymentRepository $paymentRepository
    ) {
        $this->repo       = $repository;
        $this->paymentRepo = $paymentRepository;
    }

    public function store(mixed $validated)
    {
        $validated['user_id'] = auth()->id();
        // dd($validated);
        try {
            $this->paymentRepo->store($validated);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }


    public function update(Payment $donation, array $validated)
    {

        try {
            DB::beginTransaction();
            
            $this->repo->update($donation, $validated);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
