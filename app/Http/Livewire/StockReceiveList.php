<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\StockReceiveRepository;

class StockReceiveList extends Component
{

    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'stock-receive.destroy';
    private StockReceiveRepository $repo;

    public function boot(StockReceiveRepository $repository)
    {
        $this->repo = $repository;
    }

    public function render()
    {

        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];

        return view('livewire.stock-receive-list', $data);
    }
}
