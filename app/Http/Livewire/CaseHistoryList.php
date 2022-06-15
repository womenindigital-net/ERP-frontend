<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Utility\ProjectConstants;
use App\Repositories\CaseHistoryRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CaseHistoryList extends Component
{
    use WithPagination, CommonListElements;

    private CaseHistoryRepository $caseRepo;
    public $reportList;

    public function boot(CaseHistoryRepository $caseHistRepo)
    {
        $this->caseRepo = $caseHistRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->caseRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function confirmDelete($recordId)
    {
        $data = [
            'routeName' => route('case-history.destroy', $recordId),
        ];

        $data = array_merge_recursive(ProjectConstants::$swalConfirmDeleteEvents, $data);

        $this->dispatchBrowserEvent('swal', $data);
    }

    public function render()
    {
        $data = [
            'records' => $this->caseRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.case-history-list', $data);
    }
}
