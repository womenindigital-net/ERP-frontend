<?php

namespace App\Services;

use App\Models\VocationalEvalution;
use App\Repositories\VocationalEvalutionRepository;
use Illuminate\Support\Facades\DB;

class VocationalEvaluationService
{
    private VocationalEvalutionRepository $vocRepo;

    public function __construct(VocationalEvalutionRepository $repository)
    {
        $this->vocRepo = $repository;
    }

    public function store(mixed $validated): void
    {
        [$info, $detailInfo] = $this->segregateInfo($validated);

        try {
            DB::beginTransaction();
            /** @var VocationalEvalution $obj */
            $obj = $this->vocRepo->store($info);

            $obj->details()->createMany($detailInfo);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        $data['student_id'] = $validated['student_id'];
        $data['date'] = $validated['date'];
        unset($validated['student_id']);
        unset($validated['date']);

        return [$data, $validated['vocational']];
    }
}
