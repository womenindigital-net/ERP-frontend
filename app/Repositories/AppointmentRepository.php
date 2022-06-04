<?php

namespace App\Repositories;

use App\Models\Student;
use Illuminate\Support\Facades\DB;

class AppointmentRepository
{
    protected string $model = Student::class;

    public function getListData(mixed $perPage, mixed $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('nid', 'like', "%$search%");
        })->latest()->paginate($perPage);

        /*return DB::table((new Student())->getTable())
                 ->when($search, function($query) use ($search)
                 {
                     $query->where('name', 'like', "%$search%")
                           ->orWhere('nid', 'like', "%$search%");
                 })
                 ->latest()
                 ->paginate($perPage);*/
    }
}
