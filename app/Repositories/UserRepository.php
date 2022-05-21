<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected string $model = User::class;

    public function getSpecificTypeUser(string $type)
    {
        return $this->model::whereType($type)->get();
    }
}
