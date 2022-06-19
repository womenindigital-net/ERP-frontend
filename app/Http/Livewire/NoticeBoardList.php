<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\NoticeBoardRepository;
use App\Http\Livewire\Traits\CommonListElements;

class NoticeBoardList extends Component
{

    use WithPagination, CommonListElements;

    private NoticeBoardRepository $noticeBoardRepo;

     public function boot(NoticeBoardRepository $noticeBoardRepo)
    {
        $this->noticeBoardRepo = $noticeBoardRepo;
    }

    public function show($date = [], $mode = 'create', $recordId = 0)
    {

        $this->recordId = $recordId;
        $this->emit('show-referral', $date, $mode, $recordId);
    }

    public function render()
    {
         $data = [
            'records' => $this->noticeBoardRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.notice-board-list',$data)->extends('layouts.master')->section('content');
    }
}
