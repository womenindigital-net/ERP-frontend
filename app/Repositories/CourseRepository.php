<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository extends BaseRepository
{
    protected string $model = Course::class;

    public function getCoursesWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
}
