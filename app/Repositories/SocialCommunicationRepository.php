<?php

namespace App\Repositories;

use App\Models\Social;

class SocialCommunicationRepository extends BaseRepository
{
    protected string $model = Social::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::latest()->paginate($perPage);
    }
}
