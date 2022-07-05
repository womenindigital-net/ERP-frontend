<?php

namespace App\Repositories;

use App\Models\Certificatesetup;

final class CertificateSetupRepository extends BaseRepository
{
    protected string $model = Certificatesetup::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('student', 'teacher', 'creator')->when($search, function ($query) use ($search)
        {
            $query->where("address", "like", "%$search%")
                  ->orWhere("email", "like", "%$search%")
                  ->orWhere("phone", "like", "%$search%")
//                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}
