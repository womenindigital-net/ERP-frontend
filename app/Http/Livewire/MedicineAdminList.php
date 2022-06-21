<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\MedicineAdminRepository;
use App\Http\Livewire\Traits\CommonListElements;

class MedicineAdminList extends Component
{
    use WithPagination, CommonListElements;

    private MedicineAdminRepository $medicineAdminRepo;

    public function boot(MedicineAdminRepository $medicineAdminRepo)
    {
        $this->medicineAdminRepo = $medicineAdminRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->medicineAdminRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->medicineAdminRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->medicineAdminRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.medicine-admin-list', $data);
    }
}
