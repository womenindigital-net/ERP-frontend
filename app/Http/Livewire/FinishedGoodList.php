<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\FinishedGoodRepository;

class FinishedGoodList extends Component
{

    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'stock-receive.destroy';
    private FinishedGoodRepository $repo;

    public function boot(FinishedGoodRepository $repository)
    {
        $this->repo = $repository;
    }


    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.finished-good-list', $data);
    }
}
