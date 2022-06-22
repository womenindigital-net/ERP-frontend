<?php

namespace App\Services;

use App\Models\Donation;
use App\Repositories\DonationRepository;
use App\Repositories\IncomeRepository;
use Illuminate\Support\Facades\DB;

class DonationService
{
    private DonationRepository $repo;
    private IncomeRepository $incomeRepo;

    /**
     * @param DonationRepository $repository
     * @param IncomeRepository $incomeRepository
     */
    public function __construct(DonationRepository $repository, IncomeRepository $incomeRepository)
    {
        $this->repo       = $repository;
        $this->incomeRepo = $incomeRepository;
    }

    public function store(mixed $validated)
    {
        // income
        // income_history
        // donation
        try{
            DB::beginTransaction();

            [$incomeInfo, $donationInfo] = $this->segregateInfo($validated);

            $income = $this->incomeRepo->store($incomeInfo);

            $income->donation()->create($donationInfo);

            $income->history()->create($this->collectIncomeHistoryInfo($validated));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        [$incomeInfo, $data] = $this->collectIncomeInfo($validated);

        $incomeInfo['amount'] = ($validated['cash'] ?? 0) + ($validated['cheque_amount'] ?? 0);
        $incomeInfo['type']   = 'donation';

        $donationInfo = [
            'customer_id' => $validated['customer_id'],
            'note' => $validated['note']
        ];

        return [$incomeInfo, $donationInfo];
    }

    private function collectIncomeInfo(array $data): array
    {
        return extractNecessaryFieldsFromData($data, ['project_id', 'type', 'date', 'note']);
    }

    private function collectIncomeHistoryInfo(array $data): array
    {
        $custom = [
            'type' => 'donation',
            'amount' => ($data['cash'] ?? 0) + ($data['cheque_amount'] ?? 0),
        ];

        $searchString = 'cash';

        if (isset($data['cheque'])) {
            $searchString = "$searchString|cheque*";
        }

        $paymentInfo = [];
        foreach ($data as $key => $val) {
            if (preg_match("/($searchString)/", $key)) {
                $paymentInfo['info'][$key] = $val;
            }
        }

        return array_merge($custom, $paymentInfo);
    }

    public function update(Donation $donation, array $validated)
    {
        $donation = $this->repo->getRelatedData($donation, ['income.history', 'customer', 'income.project']);

        try{
            DB::beginTransaction();

            [$incomeInfo, $donationInfo] = $this->segregateInfo($validated);
            $income = $this->repo->update($donation->income, $incomeInfo);

            $this->repo->update($donation, $donationInfo);

            $income->history()->delete();
            $income->history()->create($this->collectIncomeHistoryInfo($validated));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}