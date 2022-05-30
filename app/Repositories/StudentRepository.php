<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository extends BaseRepository
{
    protected string $model = Student::class;

    public function getData()
    {
        return $this->model::get();
    }
}
