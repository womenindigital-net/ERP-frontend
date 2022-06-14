<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\IncidentRecordRepository;
use App\Http\Livewire\Traits\CommonListElements;

class IncidentRecordList extends Component
{
     use WithPagination, CommonListElements;

    private IncidentRecordRepository $incidentRecordRepo;
    public $reportList;

    public function boot(IncidentRecordRepository $incidentRecordRepo)
    {
        $this->incidentRecordRepo = $incidentRecordRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->incidentRecordRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->incidentRecordRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.incident-record-list',$data);
    }
}
