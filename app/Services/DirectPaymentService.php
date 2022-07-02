<?php

namespace App\Services;

use App\Models\Donation;
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


    // private function collectIncomeHistoryInfo(array $data): array
    // {
    //     $custom = [
    //         'type' => 'donation',
    //         'amount' => ($data['cash'] ?? 0) + ($data['cheque_amount'] ?? 0),
    //     ];

    //     $searchString = 'cash';

    //     if (isset($data['cheque'])) {
    //         $searchString = "$searchString|cheque*";
    //     }

    //     $paymentInfo = [];
    //     foreach ($data as $key => $val) {
    //         if (preg_match("/($searchString)/", $key)) {
    //             $paymentInfo['info'][$key] = $val;
    //         }
    //     }

    //     return array_merge($custom, $paymentInfo);
    // }

    // public function update(Donation $donation, array $validated)
    // {
    //     $donation = $this->repo->getRelatedData($donation, ['income.history', 'customer', 'income.project']);

    //     try {
    //         DB::beginTransaction();

    //         [$paymentInfo, $supplierPaymentInfo] = $this->segregateInfo($validated);
    //         $income = $this->repo->update($donation->income, $paymentInfo);

    //         $this->repo->update($donation, $supplierPaymentInfo);

    //         $income->history()->delete();
    //         $income->history()->create($this->collectIncomeHistoryInfo($validated));

    //         DB::commit();
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         dd($e->getMessage(), $e->getLine());
    //     }
    // }
}
