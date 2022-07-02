<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ChequeRepository;
use App\Repositories\BankAccountRepository;

class BankAccountService
{
    private BankAccountRepository $repo;

    public function __construct(ChequeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        dd($validated);
        try {
            DB::beginTransaction();

            $this->repo->store($validated);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
