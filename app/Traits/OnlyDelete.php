<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait OnlyDelete
{
    public function delete($obj): void
    {
        $obj->delete();
    }
}
