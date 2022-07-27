<?php

namespace App\Services;

use App\Models\Journal;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Repositories\JournalRepository;

class JournalService
{
    private JournalRepository $repo;

    public function __construct(JournalRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(mixed $validated): void
    {
        [$info, $detailInfo] = $this->segregateInfo($validated);

        try {
            DB::beginTransaction();
            /** @var Journal $obj */
            $obj = $this->repo->store($info);

            $obj->details()->createMany($detailInfo);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    public function update(Journal $journal, array $validated): void
    {
        [$info, $detailInfo] = $this->segregateInfo($validated);

        try {
            DB::beginTransaction();
            /** @var Journal $obj */
            $obj = $this->repo->update($journal, $info);

            $obj->details()->delete();
            $obj->details()->createMany($detailInfo);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        $journalInfos = Arr::only($validated, ['project_id', 'transaction_amount', 'voucher_date', 'particulars', 'reference']);
        $journalDetailInfos = Arr::only($validated, ['account_no', 'account_particulars', 'debit', 'credit']);

        for ($i = 0; $i < count($journalDetailInfos['account_no']); $i++) {
            $custom[$i] = [
                'account_no' => $journalDetailInfos['account_no'][$i],
                'account_particulars' => $journalDetailInfos['account_particulars'][$i],
                'debit' => $journalDetailInfos['debit'][$i],
                'credit' => $journalDetailInfos['credit'][$i],
            ];
        }
        
        return [$journalInfos, $custom];
    }





    public function checkForValidTransaction(mixed $data): bool
    {
        if ((array_sum($data['debit']) === array_sum($data['credit'])) and (array_sum($data['credit']) == ($data['transaction_amount']))) {
            return false;
        }
        return true;
    }


    public function journalDebitCreditCheck($data)
    {
        for ($i = 0; $i < count($data['account_no']); $i++) {
            if (
                !empty($data['account_no'][$i]) and
                !empty($data['account_particulars'][$i]) and
                (empty($data['debit'][$i]) xor empty($data['credit'][$i])) and
                ($data['debit'][$i] xor $data['credit'][$i])
            ) {
                return false;
            }
        }
        return true;
    }
}
