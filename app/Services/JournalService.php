<?php

namespace App\Services;

use App\Models\Journal;
use Illuminate\Support\Facades\DB;
use App\Repositories\JournalRepository;

class JournalService
{
    private JournalRepository $repo;

    public function __construct(JournalRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {
        dd($validated);
        try {
            DB::beginTransaction();
            [$journalData, $data
            ] = $this->collectJournal($validated);
            $journal = $this->repo->store($journalData);

            $journalDetailsInfos = $this->collectJournalDataDetailsInfos($data);
            $journal->details()->createMany($journalDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(),
                $e->getLine()
            );
        }
    }
    private function collectJournal(array $validated)
    {
        [$journal, $data] = extractNecessaryFieldsFromData($validated, ['project_id', 'transaction_amount', 'voucher_date', 
        'particulars', 'account_no', 'reference']);

        $journal['created_by'] = auth()->id();

        return [$journal, $data];
    }

    private function collectJournalDataDetailsInfos(mixed $data): array
    {
        [$journalDetailsInfos, $data] = extractNecessaryFieldsFromData($data, [
            'project_id', 'transaction_amount', 'voucher_date', 'particulars', 'account_no',
            'reference', 'cost_price',
        ]);
        for ($i = 0; $i < count($journalDetailsInfos['project_id']); $i++) {
            $custom[$i] = [
                'project_id' => $journalDetailsInfos['project_id'][$i],
                'transaction_amount' => $journalDetailsInfos['transaction_amount'][$i],
                'voucher_date' => $journalDetailsInfos['voucher_date'][$i],
                'particulars' => $journalDetailsInfos['particulars'][$i],
                'account_no' => $journalDetailsInfos['account_no'][$i],
                'reference' => $journalDetailsInfos['reference'][$i],
                'cost_price' => $journalDetailsInfos['cost_price'][$i],
            ];
        }

        return $custom ?? [];
    }



    // public function update(Journal $journal, array $validated): void
    // {
    //     [$info, $detailInfo] = $this->segregateInfo($validated);
    //     try {
    //         DB::beginTransaction();
    //         /** @var Journal $obj */
    //         $obj = $this->repo->update($journal, $info);

    //         $obj->details()->delete();
    //         $obj->details()->createMany($detailInfo);
    //         DB::commit();
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         dd($e->getMessage(), $e->getLine());
    //     }
    // }

    // private function segregateInfo(mixed $validated): array
    // {
    //     foreach ($validated['journal'] as $key => $journal) {
    //         if (!$this->isValidJournalEntry($journal))
    //             unset($validated['journal'][$key]);
    //     }

    //     $detailInfos = $validated['journal'];
    //     unset($validated['journal']);

    //     return [$validated, $detailInfos];
    // }

    // private function isValidJournalEntry(array $journal): bool
    // {
    //     if (
    //         !empty($journal['account_no']) and
    //         !empty($journal['account_particulars']) and
    //         (empty($journal['debit']) or empty($journal['credit'])) and
    //         ($journal['debit'] or $journal['credit'])
    //     ) {
    //         return true;
    //     }

    //     return false;
    // }
}
