<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\RequisitionRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class RequisitionList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'requisition.destroy';
    private RequisitionRepository $repo;

    public function boot(RequisitionRepository $repository)
    {
        $this->repo = $repository;
    }


    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];

        return view('livewire.requisition-list', $data);
    }
}
