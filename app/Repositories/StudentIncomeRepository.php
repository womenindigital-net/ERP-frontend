<?php

namespace App\Repositories;

use App\Models\Income;

class StudentIncomeRepository extends BaseRepository
{
    protected string $model = Income::class;

    public function getListData(mixed $perPage, mixed $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('nid', 'like', "%$search%");
        })->latest()->paginate($perPage);
    }
}
