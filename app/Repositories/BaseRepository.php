<?php

namespace App\Repositories;

use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class BaseRepository
{
    use OnlyStore, OnlyUpdate;
}
