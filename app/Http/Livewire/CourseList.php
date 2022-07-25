<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\CourseRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CourseList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'customer-type.destroy';
    private CourseRepository $courseRepo;
    public $reportList;

    public function boot(CourseRepository $courseRepo)
    {
        $this->courseRepo = $courseRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->courseRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {
        $data = [
            // 'projects' => $this->projectRepo->getData(),
            // 'users' => $this->userRepo->getData(),
            'records' => $this->courseRepo->getListData($this->perPage, $this->search),
            
        ];
        return view('livewire.course-list', $data);
    }
}
