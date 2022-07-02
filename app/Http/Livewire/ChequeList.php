<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ChequeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ChequeList extends Component
{

    use WithPagination, CommonListElements;
    private ChequeRepository $repo;

    protected string $destroyRoute = 'cheque.destroy';

    public function boot(ChequeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];

        return view('livewire.cheque-list', $data);
    }
}
