<?php

namespace App\Services;

use App\Models\Donation;
use Illuminate\Support\Facades\DB;
use App\Repositories\PaymentRepository;
use App\Repositories\SupplierPaymentRepository;

class SupplierPaymentService
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
        // dd($validated);
        // supplier_payment
        // payment_history
        try {
            DB::beginTransaction();

            [$paymentInfo, $supplierPaymentInfo] = $this->segregateInfo($validated);
            // dd($paymentInfo, $supplierPaymentInfo, 'Date, invoice Num, remark Data Not Save');

            $payment = $this->paymentRepo->store($paymentInfo);

            $payment->supplierPayment()->create($supplierPaymentInfo);

            // $payment->history()->create($this->collectIncomeHistoryInfo($validated));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        [$paymentInfo, $data] = $this->collectPaymentInfo($validated);
        $paymentInfo['amount'] = ($validated['cash'] ?? 0) + ($validated['cheque_amount'] ?? 0);
        $paymentInfo['method']   = 'supplier_payment';
        $paymentInfo['user_id']   = auth()->id();
        $paymentInfo['note']   = $validated['note'];


        $supplierPaymentInfo = [
            'date' => $validated['date'],
            'invoice_num' => $validated['invoice_num'],
            'remark' => $validated['remark'],
            'note' => $validated['note']
        ];
        // dd($paymentInfo,$supplierPaymentInfo, $data);

        return [$paymentInfo, $supplierPaymentInfo];
    }

    private function collectPaymentInfo(array $data): array
    {
        return extractNecessaryFieldsFromData($data, ['project_id', 'purchase_id']);
    }

    private function collectIncomeHistoryInfo(array $data): array
    {
        $custom = [
            'type' => 'donation',
            'amount' => ($data['cash'] ?? 0) + ($data['cheque_amount'] ?? 0),
        ];

        $searchString = 'cash';

        if (isset($data['cheque'])) {
            $searchString = "$searchString|cheque*";
        }

        $paymentInfo = [];
        foreach ($data as $key => $val) {
            if (preg_match("/($searchString)/", $key)) {
                $paymentInfo['info'][$key] = $val;
            }
        }

        return array_merge($custom, $paymentInfo);
    }

    public function update(Donation $donation, array $validated)
    {
        $donation = $this->repo->getRelatedData($donation, ['income.history', 'customer', 'income.project']);

        try {
            DB::beginTransaction();

            [$paymentInfo, $supplierPaymentInfo] = $this->segregateInfo($validated);
            $income = $this->repo->update($donation->income, $paymentInfo);

            $this->repo->update($donation, $supplierPaymentInfo);

            $income->history()->delete();
            $income->history()->create($this->collectIncomeHistoryInfo($validated));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
