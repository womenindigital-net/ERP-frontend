<?php

namespace App\Repositories;
use App\Models\BankReconcilation;

class BankReconcilationRepository extends BaseRepository
{
    protected string $model = BankReconcilation::class;


    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                                //  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }

}
