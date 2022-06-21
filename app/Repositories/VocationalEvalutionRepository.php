<?php

namespace App\Repositories;

use App\Models\VocationalEvalution;

class VocationalEvalutionRepository extends BaseRepository
{
    protected string $model = VocationalEvalution::class;

    public function getListData($perPage, $search, $filter)
    {
        return $this->model::with('details', 'student')
            ->when($search, function ($query) use ($search) {
                $query->where('particulars', "like", "%$search%")
                    ->orWhere('transaction_amount', 'like', "%$search%");
            })->when($filter != '', function ($query) use ($filter) {
                $query->where('is_approved', $filter);
            })->latest()
            ->paginate($perPage);
    }
}
