<?php

namespace App\Services;

use App\Models\Journal;
use App\Repositories\JournalRepository;
use Illuminate\Support\Facades\DB;

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
        foreach ($validated['journal'] as $key => $journal) {
            if (!$this->isValidJournalEntry($journal))
                unset($validated['journal'][$key]);
        }

        $detailInfos = $validated['journal'];
        unset($validated['journal']);
        dd([$validated, $detailInfos]);

        return [$validated, $detailInfos];
    }

    private function isValidJournalEntry(array $journal): bool
    {
        if (
            !empty($journal['account_no']) and
            !empty($journal['account_particulars']) and
            (empty($journal['debit']) or empty($journal['credit'])) and
            ($journal['debit'] or $journal['credit'])
        ) {
            return true;
        }

        return false;
    }
}
