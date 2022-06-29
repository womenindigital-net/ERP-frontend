<?php

namespace App\Services;


use Illuminate\Support\Facades\DB;
use App\Repositories\MaterialCollectionRepository;

class MaterialCollectionService
{
    private MaterialCollectionRepository $repo;

    public function __construct(MaterialCollectionRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$stockRec, $data] = $this->collectStockReceive($validated);
            $stockReceive = $this->repo->store($stockRec);
            dd($data);
            $stockReceiveDetailsInfos = $this->collectStockReceiveDetailsInfos($data);
            $stockReceive->details()->createMany($stockReceiveDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectStockReceive(array $validated)
    {
        [$stockReceive, $data] = extractNecessaryFieldsFromData($validated, ['collected_for', 'date', 'warehouser_id']);

        return [$stockReceive, $data];
    }

    private function collectStockReceiveDetailsInfos(mixed $data): array
    {
        [$stockReceiveDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'exp_date', 'qty', 'received', 'return', 'receivable', 'stock_receive_qty', 'serial']);
        for ($i = 0; $i < count($stockReceiveDetailInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $stockReceiveDetailInfos['product_id'][$i],
                'exp_date' => $stockReceiveDetailInfos['exp_date'][$i],
                'qty' => $stockReceiveDetailInfos['qty'][$i],
                'received' => $stockReceiveDetailInfos['received'][$i],
                'return' => $stockReceiveDetailInfos['return'][$i],
                'receivable' => $stockReceiveDetailInfos['receivable'][$i],
                'stock_receive_qty' => $stockReceiveDetailInfos['stock_receive_qty'][$i],
                'serial' => $stockReceiveDetailInfos['serial'][$i],
            ];
        }


        return $custom ?? [];
    }

    public function update($stockReceive, array $validated)
    {

        try {
            DB::beginTransaction();
            [$stockRec, $data] = $this->collectStockReceive($validated);
            $stockReceive = $this->repo->update($stockReceive, $stockRec);
            $stockReceive->details()->delete();
            $stockReceiveDetailsInfos = $this->collectStockReceiveDetailsInfos($data);

            $stockReceive->details()->createMany($stockReceiveDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
