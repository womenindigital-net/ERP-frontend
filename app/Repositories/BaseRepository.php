<?php

namespace App\Repositories;

use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class BaseRepository
{
    use OnlyStore, OnlyUpdate;

    public function getData($ids = false)
    {
        if ($ids) {
            return $this->model::find($ids);
        }

        return $this->model::all();
    }
}
