<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    protected string $model = Project::class;

    public function getData()
    {
        return $this->model::get('title');
    }
}
