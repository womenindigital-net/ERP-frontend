<?php

namespace App\Repositories;

use App\Models\Trip;

class TripRepository extends BaseRepository
{
    protected string $model = Trip::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::latest()->paginate($perPage);
    }
}
