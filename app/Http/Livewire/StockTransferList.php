<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\StockTransferRepository;

class StockTransferList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'stock-receive.destroy';
    private StockTransferRepository $repo;

    public function boot(StockTransferRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];

        return view('livewire.stock-transfer-list', $data);
    }
}
