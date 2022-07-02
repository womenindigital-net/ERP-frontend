<?php

namespace App\Services;

use App\Repositories\PurchaseOrderRepository;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Rfc4122\UuidV4;

class PurchaseOrderService
{
    private PurchaseOrderRepository $repo;

    public function __construct(PurchaseOrderRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try{
            DB::beginTransaction();
            [$purchaseInfo, $data] = $this->collectPurchaseInfo($validated);
            $purchase = $this->repo->store($purchaseInfo);

            $purchaseDetailInfo = $this->collectPurchaseDetailInfo($data);
            $purchase->details()->createMany($purchaseDetailInfo);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectPurchaseDetailInfo(array $data): array
    {
        [$purchaseDetailInfo, $data] = extractNecessaryFieldsFromData($data, ['qty', 'available_qty', 'supplier_id', 'product_id', 'price', 'vat', 'discount', 'sub_total']);

        for ($i = 0; $i < count($purchaseDetailInfo['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $purchaseDetailInfo['product_id'][$i],
                'supplier_id' => $purchaseDetailInfo['supplier_id'][$i],
                'qty' => $purchaseDetailInfo['qty'][$i],
                'sub_total' => $purchaseDetailInfo['sub_total'][$i],
                'price' => $purchaseDetailInfo['price'][$i],
                'available_qty' => $purchaseDetailInfo['available_qty'][$i],
            ];
        }

        return $custom ?? [];
    }

    private function collectPurchaseInfo(array $validated): array
    {
        [$purchaseInfo, $data] = extractNecessaryFieldsFromData($validated, ['requisition_id', 'date', 'note']);
        $purchaseInfo['code'] = UuidV4::uuid4();

        return [$purchaseInfo, $data];
    }
}
