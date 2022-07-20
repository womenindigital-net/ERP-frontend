<?php

namespace App\Repositories;

use App\Models\ChartofAccounts;

class ChartofAccountsRepository extends BaseRepository
{
    protected string $model = ChartofAccounts::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
        })->latest()->paginate($perPage);
    }
}
