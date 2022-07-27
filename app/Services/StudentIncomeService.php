<?php

namespace App\Services;

use Exception;
use App\Models\Income;
use Illuminate\Support\Arr;
use App\Models\PaymentMethod;
use App\Models\StudentIncome;
use Illuminate\Support\Facades\DB;
use App\Traits\CommonServiceElements;
use App\Repositories\IncomeRepository;
use App\Repositories\StudentIncomeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StudentIncomeService
{
    use CommonServiceElements;

    private StudentIncomeRepository $repo;
    private IncomeRepository $incomeRepo;

    public function __construct(StudentIncomeRepository $repo, IncomeRepository $incomeRepository)
    {
        $this->repo       = $repo;
        $this->incomeRepo = $incomeRepository;
    }

    /**
     * @throws Exception
     */
    public function store(array $validate): void
    {
        [$incomeInfo, $studentIncomeInfo, $studentIncomeDetails] = $this->segregateInfo($validate);

        try {
            DB::beginTransaction();
            $income = $this->incomeRepo->store($incomeInfo);


            $studentIncome = $income->studentIncome()->create($studentIncomeInfo);

            $studentIncome->studentIncomeDetail()->createMany($studentIncomeDetails);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }


    /**
     * @throws Exception
     */
    public function segregateInfo(array $validate): array
    {
        [$validate, $income] = $this->collectIncomeInfo($validate);
        $studentIncome = $this->collectStudentIncomeInfo($validate);
        $studentIncomeDetails = $this->collectStudentIncomeDetailsInfo($validate);

        return [$income, $studentIncome, $studentIncomeDetails];
    }

    /**
     * @throws Exception
     */
    private function collectIncomeInfo(array $validate): array
    {
        $income = []; // project_id , date 
        $income = Arr::only($validate, ['project_id', 'date']);

        $income['amount'] = array_sum($validate['amount']);
        $income['type'] = 'student';

        return [$validate, $income];
    }

    private function collectStudentIncomeInfo(array $validate): array
    {
        return [
            'student_id'        => $validate['student_id'],
            'payment_method_id' => PaymentMethod::whereTitle('Cash')->first()->id,
        ];
    }

    private function collectStudentIncomeDetailsInfo(array $validate): array
    {
    }

    /**
     * @throws Exception
     */
    public function update(StudentIncome $studentIncome, mixed $validate)
    {
        $studentIncome = $this->repo->getRelatedData($studentIncome, ['income.project', 'incomeDetails']);

        try {
            DB::beginTransaction();
            // send income for updating
            [$validate, $income] = $this->collectIncomeInfo($validate);
            $this->incomeRepo->update($studentIncome->income, $income);

            // check each detail for matching, if not found then delete else keep it
            foreach ($studentIncome->incomeDetails as $incomeDetail) {
                $found = false;
                foreach ($validate['details'] as $key => $requestedDetail) {
                    if ($requestedDetail['course_id'] == $incomeDetail->course_id && $requestedDetail['amount'] == $incomeDetail->amount) {
                        $found = true;
                        unset($validate['details'][$key]);
                        break;
                    }
                }
                if (!$found) {
                    $incomeDetail->delete();
                }
            }
            if (count($validate['details']))
                $studentIncome->incomeDetails()->createMany($validate['details']);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
