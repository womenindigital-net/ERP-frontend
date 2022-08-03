<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\CourseRepository;

class CourseService
{
    private CourseRepository $repo;

    public function __construct(CourseRepository $repository)
    {
        $this->repo = $repository;
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

    public function store(array $validated)
    {

        try {
            
            DB::beginTransaction();
            [$course, $data] = $this->collectCourse($validated);
            dd([$course, $data]);
            $courseData = $this->repo->store($course);
            $finishedGoodsDetailsInfos = $this->collectFinishedGoodsDetailsInfos($data);
            $courseData->details()->createMany($finishedGoodsDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectCourse(array $validated)
    {
        
        [$course, $data] = extractNecessaryFieldsFromData($validated, ['title', 'duration', 'description', 'cash_account_id']);
        $course['created_by'] = auth()->id();

        return [$course, $data];
    }

    private function collectFinishedGoodsDetailsInfos(mixed $data): array
    {
        [$stockReceiveDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'unit', 'qty']);
        for ($i = 0; $i < count($stockReceiveDetailInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $stockReceiveDetailInfos['product_id'][$i],
                'unit' => $stockReceiveDetailInfos['unit'][$i],
                'qty' => $stockReceiveDetailInfos['qty'][$i],
            ];
        }

        return $custom ?? [];
    }

    public function update($finishedGood, array $validated)
    {

        try {
            DB::beginTransaction();
            [$finishedGoodData, $data] = $this->collectCourse($validated);
            $finishedGoodData = $this->repo->update($finishedGood, $finishedGoodData);
            $finishedGoodData->details()->delete();
            $finishedGoodsDetailsInfos = $this->collectFinishedGoodsDetailsInfos($data);

            $finishedGoodData->details()->createMany($finishedGoodsDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
