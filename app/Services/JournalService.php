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
        dd($validated);
        [$info, $detailInfo] = $this->segregateInfo($validated);

        dd([$info, $detailInfo]);

        try{
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

        try{
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
        $journalInfos = Arr::only($validated, ['account_no','account_particulars','debit','credit']);
        $journalDetailInfos = Arr::only($validated, ['account_no','account_particulars','debit','credit']);
        dump($journalDetail['account_no']);
        array_sum($a);
        
        // foreach ($journalDetail as $key => $journal) {
        //     // dd($journal['account_no']);
        //     if (!$this->isValidJournalEntry($journal))
        //         unset($validated['journal'][$key]);
        // }

        // $detailInfos = $validated['journal'];
        // unset($validated['journal']);

        // return [$validated, $detailInfos];
    }

    private function isValidJournalEntry(array $journal): bool
    {
        dd($journal);
        if (!empty($journal['account_no']) and
        !empty($journal['account_particulars']) and
        (empty($journal['debit']) or empty($journal['credit'])) and
        ($journal['debit'] or $journal['credit'])
        ) {
            return true;
        }

        return false;
    }
}
