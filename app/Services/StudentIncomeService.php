<?php

namespace App\Services;

use App\Http\Livewire\Traits\CommonListElements;
use App\Models\Income;
use App\Repositories\StudentIncomeRepository;
use App\Traits\CommonServiceElements;

class StudentIncomeService
{
    use CommonServiceElements;

    private StudentIncomeRepository $repo;

    public function __construct(StudentIncomeRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validate): void
    {
        [$incomeInfo, $studentIncomeInfo, $studentIncomeDetailInfo] = $this->segregateIncomeInfo($validate);
        $studentInfo = $this->repo->store($incomeInfo);

        $studentIncomeInfo['income_id'] = $studentInfo->id;
        $studentIncome = $studentInfo->studentIncome()->create($studentIncomeInfo);

        $studentIncomeDetailInfo['student_income_id'] = $studentIncome->id;
        $studentIncome->studentIncomeDetail()->create($studentIncomeDetailInfo);
    }

    public function segregateIncomeInfo(array $validate): array
    {
        $income = [];
        foreach ($validate as $key => $item) {
            if (preg_match(('/(project_id|date)/'), $key)) {
                $income[$key] = $item;
                unset($validate[$key]);
            }
        }
        $studentIncome = [];
        foreach ($validate as $key => $item) {
            if (preg_match(('/(student_id)/'), $key)) {
                $studentIncome[$key] = $item;
                unset($validate[$key]);
            }
        }
        return [$income, $studentIncome, $validate];
    }
}
