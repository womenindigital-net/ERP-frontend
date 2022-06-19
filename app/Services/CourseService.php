<?php

namespace App\Services;

use App\Repositories\CourseRepository;

class CourseService
{
    private CourseRepository $repo;

    public function __construct(CourseRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getFormattedDataAsOptGroup(): array
    {
        $courses = $this->repo->getCoursesWithSpecifyingRelation();
        return $this->formattedCoursesAsOptGroup($courses);
    }

    private function formattedCoursesAsOptGroup($courses): array
    {
        foreach ($courses as $key => $course) {
            if (!isset($custom[$course->parent_course_id])) {
                $custom[$course->parent_course_id] = [
                    'id'       => $course->parent_course_id,
                    'title'    => $course->parentCourse->title,
                    'children' => [],
                ];
            }

            $childrenInfo = [
                'id'    => $course->id,
                'title' => $course->title,
            ];

            $custom[$course->parent_course_id]['children'][] = $childrenInfo;
        }

        return $custom ?? [];
    }
}
