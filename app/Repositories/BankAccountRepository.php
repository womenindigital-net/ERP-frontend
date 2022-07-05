<?php

namespace App\Repositories;

use App\Models\BankAccount;

class BankAccountRepository extends BaseRepository
{
    protected string $model = BankAccount::class;


    public function getListData(int $perPage, string $search)
    {
        return $this->model::With('chequeBook')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
        //        return $this->model::approved()->all();
    }
}
