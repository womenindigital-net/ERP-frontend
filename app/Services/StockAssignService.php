<?php

namespace App\Services;

use App\Repositories\StockReceiveRepository;

class StockAssignService
{
    private StockReceiveRepository $repo;

    public function __construct(StockReceiveRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        [$stockReceiveInfos, $data] = $this->segregateInfo($validated);
        // stock_receive
        # project_id, type, note, date
        $stockReceive = $this->repo->store($stockReceiveInfos);

        // stock_receive_details
        # stock_receive_id, product_id, warehouse_id, qty, depreciation_percentage
        $stockReceive->details()->create($validated['details']);
    }

    private function segregateInfo(array $validated): array
    {
        return extractNecessaryFieldsFromData($validated, ['project_id', 'type', 'note', 'date']);

//        [$stockReceiveDetailInfos] = extractNecessaryFieldsFromData($data[], ['product_id', 'qty', 'depreciation_percentage', 'warehouse_id']);
    }
}
