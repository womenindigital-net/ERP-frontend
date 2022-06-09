<?php

namespace App\Repositories;

use App\Models\Journal;

class JournalRepository extends BaseRepository
{
    protected string $model = Journal::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('project', 'details')->when($search, function ($query) use ($search) {
            $query->where('particulars', "like", "%$search%")
                ->orWhere('transaction_amount', 'like', "%$search%");
        })->latest()->paginate($perPage);
    }
}
