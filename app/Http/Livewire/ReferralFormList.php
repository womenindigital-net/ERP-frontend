<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ReferralRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ReferralFormList extends Component
{
    use WithPagination, CommonListElements;

    private ReferralRepository $referralRepo;

    public function boot(ReferralRepository $referralRepo)
    {
        $this->referralRepo = $referralRepo;
    }

    public function show($date = [], $mode = 'create', $recordId = 0)
    {

        $this->recordId = $recordId;
        $this->emit('show-referral', $date, $mode, $recordId);
    }

    public function render()
    {
        $data = [
            'records' => $this->referralRepo->getListData($this->perPage, $this->search)
        ];

        return view('livewire.referral-form-list', $data)->extends('layouts.master')->section('content');
    }
}
