<?php

namespace App\Services;

use Exception;
use App\Models\Income;
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
        
        try {
            DB::beginTransaction();
            [$studentIncomeInfo, $data] = $this->collectStudentIncomeInfo($validate);
            dd($studentIncomeInfo);
            $income = $this->incomeRepo->store($studentIncomeInfo);

            $studentIncome = $income->studentIncome()->create($data);

            $studentIncome->studentIncomeDetail()->createMany($validate['details']);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }



    private function collectStudentIncomeInfo(array $validated): array
    {
        [$requisitionInfos, $data] = extractNecessaryFieldsFromData($validated, ['course_id', 'amount']);

        $requisitionInfos['created_by'] = auth()->id();

        return [$requisitionInfos, $data];
    }

    // /**
    //  * @throws Exception
    //  */
    // public function segregateInfo(array $validate): array
    // {
    //     [$validate, $income] = $this->collectIncomeInfo($validate);
    //     $studentIncome = $this->collectStudentIncomeInfo($validate);

    //     return [$income, $studentIncome];
    // }

    /**
     * @throws Exception
     */
    private function collectIncomeInfo(array $validate): array
    {
        $income = [];
        foreach ($validate as $key => $value) {
            if (preg_match(('/(project_id|date)/'), $key)) {
                $income[$key] = $value;
                unset($validate[$key]);
            }
        }

        $income['amount'] = array_sum(array_column($validate['details'], 'amount'));
        $income['type'] = 'student';

        return [$validate, $income];
    }

    // private function collectStudentIncomeInfo(array $validate): array
    // {
    //     return [
    //         'student_id'        => $validate['student_id'],
    //         'payment_method_id' => PaymentMethod::whereTitle('Cash')->first()->id,
    //     ];
    // }

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
