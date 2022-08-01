<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\TaskRepository;

class CourseService
{
    private TaskRepository $repo;

    public function __construct(TaskRepository $repository)
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
            [$finishedGoods, $data] = $this->collectFinishedGoods($validated);
            $finishedGoodsData = $this->repo->store($finishedGoods);
            $finishedGoodsDetailsInfos = $this->collectFinishedGoodsDetailsInfos($data);
            $finishedGoodsData->details()->createMany($finishedGoodsDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectFinishedGoods(array $validated)
    {
        $total_qty = 0;

        [$finishedGoods, $data] = extractNecessaryFieldsFromData($validated, ['project_id', 'warehouse_id', 'date', 'note', 'total_qty']);

        for ($i = 0; $i < count($data['qty']); $i++) {
            $total_qty = $data['qty'][$i] +  $total_qty;
        }

        $finishedGoods['total_qty'] = $total_qty;
        $finishedGoods['created_by'] = auth()->id();

        return [$finishedGoods, $data];
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
            [$finishedGoodData, $data] = $this->collectFinishedGoods($validated);
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