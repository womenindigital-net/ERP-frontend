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

    public function store(mixed $validated)
    {
        [$info, $detailInfo] = $this->segregateInfo($validated);

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

    public function update(Journal $journal, array $validated)
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
        $detailColumns = ['account_no', 'account_particulars', 'debit', 'credit'];
        $custom        = [];
        $detailInfos   = [];

        foreach ($validated as $key => $val) {
            if (in_array($key, $detailColumns)) {
                $custom[$key] = $val;
                unset($validated[$key]);
            }
        }

        foreach ($custom['account_no'] as $key => $val) {
            if (!$val || (!$custom['debit'][$key] or !$custom['credit'][$key]))
                continue;

            $detailInfos[] = [
                'account_no'          => $val,
                'account_particulars' => $custom['account_particulars'][$key],
                'debit'               => $custom['debit'][$key],
                'credit'              => $custom['credit'][$key],
            ];
        }

        return [$validated, $detailInfos];
    }
}
