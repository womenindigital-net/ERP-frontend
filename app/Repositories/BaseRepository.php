<?php

namespace App\Repositories;

use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;
use Illuminate\Database\Eloquent\Model;

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

    public function toggleColumn($objOrId, string $column)
    {
        $obj = $objOrId instanceof Model ? $objOrId : $this->model::find($objOrId);

        $obj->{$column} = !$obj->{$column};
        $obj->save();
    }
}
