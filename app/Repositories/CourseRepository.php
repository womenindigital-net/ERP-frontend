<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository extends BaseRepository
{
    protected string $model = Course::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
        })->latest()->paginate($perPage);
    }

    public function getCoursesWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
}