<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\CourseService;
use App\Repositories\UserRepository;
use App\Repositories\CourseRepository;
use App\Repositories\ProjectRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;

class CourseCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'course.destroy';
    private CourseService $service;
    private CourseRepository $repo;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    protected array $addMoreItems = ['heading', 'account_id', 'amount'];

    public $course;
    public $duration;
    public $description;
    public $heading;
    public $account_id;
    public $amount;
    // public function mount()
    // {
    //     if ($this->finishedGood) {
    //         $this->finishedGood = $this->repo->getRelatedData($this->finishedGood, ['details']);

    //         $this->date = $this->finishedGood->date;
    //         $this->project_id = $this->finishedGood->project_id;
    //         $this->warehouse_id = $this->finishedGood->warehouse_id;
    //         $this->note = $this->finishedGood->note;

    //         $this->inputs = $this->finishedGood->details->toArray();
    //     }
    // }
    protected array $rules = [
        'course' => 'nullable',
        'duration' => 'nullable',
        'description' => 'nullable',
        'heading' => 'nullable',
        'account_id.*' => 'nullable',
        'amount' => 'nullable',
    ];
    // public function update()
    // {
    //     $this->service->update($this->finishedGood, $this->validate());
    //     $this->dispatchBrowserEvent('notify');
    //     $this->redirectRoute('stock-receive.create');
    // }

    public function render()
    {
        $data = [
            // 'projects' => $this->projectRepo->getData(),
            // 'users' => $this->userRepo->getData(),
            
        ];
        return view('livewire.course-create', $data);
    }
}
