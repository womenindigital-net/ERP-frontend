<?php

namespace App\Services;

use App\Models\StudentIncomeDetail;
use App\Repositories\StudentIncomeDetailRepository;
use Illuminate\Support\Arr;

class StudentIncomeDetailService
{
    private StudentIncomeDetailRepository $repo;

    public function __construct(StudentIncomeDetailRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validate): void
    {
        [$incomeInfo, $incomeDetailInfo] = $this->segregateIncomeInfo($validate);
        dd($incomeDetailInfo);
        $studentInfo = $this->repo->store($incomeDetailInfo);
    }

    public function segregateIncomeInfo(array $validate): array
    {
        $incomeInfo = [];
        foreach ($validate as $key => $item) {
            if (preg_match(('/(project_id|student_id|payment_date)/'), $key)) {
                $incomeInfo[$key] = $item;
                unset($validate[$key]);
            }
        }
        return [$incomeInfo, $validate];
    }
}
