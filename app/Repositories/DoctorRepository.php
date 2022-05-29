<?php

namespace App\Repositories;

use App\Models\Doctor;

class DoctorRepository
{
    protected string $model = Doctor::class;

    public function getDate()
    {
        return $this->model::get();
    }
}
