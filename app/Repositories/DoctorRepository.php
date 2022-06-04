<?php

namespace App\Repositories;

use App\Models\Doctor;

class DoctorRepository
{
    protected string $model = Doctor::class;

    public function getData()
    {
        return $this->model::get();
    }
}
