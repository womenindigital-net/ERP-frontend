<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\OccupationalTherapyRepository;

class OccupationalTherapyList extends Component
{
    use WithPagination, CommonListElements;

    private OccupationalTherapyRepository $otAssessmentRepo;
    public $reportList;

    public function boot(OccupationalTherapyRepository $otAssessmentRepo)
    {
        $this->otAssessmentRepo = $otAssessmentRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->otAssessmentRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->otAssessmentRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.occupational-therapy-list',$data );
    }
}
