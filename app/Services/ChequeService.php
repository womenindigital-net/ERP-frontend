<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ChequeRepository;
use App\Repositories\StockReceiveRepository;

class ChequeService
{
    private ChequeRepository $repo;

    public function __construct(ChequeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        // dd($validated);
        try {
            DB::beginTransaction();

            for ($i = $validated['start_page']; $i <= $validated['end_page']; $i++) {

                $chequeData = $this->collectChequeData($validated, $i);

                $this->repo->store($chequeData);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectChequeData(array $validated, $chequeNum)
    {

        $chequeData['title'] = $validated['title'];
        $chequeData['page_no'] = $chequeNum;

        return $chequeData;
    }
}
