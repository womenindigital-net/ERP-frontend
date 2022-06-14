<?php

namespace App\Http\Livewire;

use App\Repositories\CareNeedRepository;
use Livewire\Component;

class CareNeedList extends Component
{

    private CareNeedRepository $careRepo;
    public $reportList;

    public function boot(CareNeedRepository $careRepo)
    {
        $this->careRepo = $careRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->careRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }


    public function render()
    {
        return view('livewire.care-need-list');
    }
}
