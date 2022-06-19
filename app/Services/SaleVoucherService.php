<?php

namespace App\Services;

use App\Repositories\IncomeRepository;
use Illuminate\Support\Facades\DB;

class SaleVoucherService
{
    private IncomeRepository $repo;

    public function __construct(IncomeRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(mixed $validated)
    {
        try{
            DB::beginTransaction();
            // income
            //            -- project_id, type, amount, created_by, date, invoice_no, note, due_amount
            [$incomeInfo, $saleIncomeInfo, $data] = $this->segregateInfo($validated);
            $income = $this->repo->store($incomeInfo);

            // sale_income
            //        -- income_id, customer_id, ship_to_address, warehouse_id
            $saleIncome = $income->saleIncome()->create($saleIncomeInfo);

            // sale_income_detail
            //        -- sale_income_id, category_id, product_id, available_qty, qty, price, discount, sub_total,
            $saleIncome->details()->createMany($validated['details']);

            // income_history
            //        -- type, amount, info, due_amount, note, payable_amount
            $income->history()->create($this->collectIncomeHistoryInfo($validated));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        [$incomeInfo, $data] = $this->collectIncomeInfo($validated);

        [$saleIncomeInfo, $data] = $this->collectSaleIncomeInfo($data);

        $incomeInfo['amount'] = array_sum(array_column($validated['details'], 'sub_total'));
        $incomeInfo['type']   = 'sale';

        return [$incomeInfo, $saleIncomeInfo, $data];
    }

    private function collectIncomeInfo(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, ['project_id', 'type', 'created_by', 'date', 'invoice_no', 'note', 'due_amount']);
    }

    private function collectSaleIncomeInfo(array $data): array
    {
        return extractNecessaryFieldsFromData($data, ['customer_id', 'ship_to_address', 'warehouse_id']);
    }

    private function collectIncomeHistoryInfo(array $data): array
    {
        $custom = [
            'type' => 'sale',
            'amount' => array_sum(array_column($data['details'], 'sub_total')),
        ];

        $searchString = 'card';

        if (isset($data['cheque']) && ($data['cheque'] == 'on')) {
            $searchString = "$searchString|cheque*";
        }

        if (isset($data['card']) && ($data['card'] == 'on')) {
            $searchString = "$searchString|card*";
        }

        $paymentInfo = [];
        foreach ($data as $key => $val) {
            if (preg_match("/($searchString)/", $key)) {
                $paymentInfo['info'][$key] = $val;
            }
        }
//        dd(array_merge($custom, $paymentInfo));
        return array_merge($custom, $paymentInfo);
    }

}
