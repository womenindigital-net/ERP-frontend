<?php

namespace App\Http\Livewire\StudentIncome;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\CourseService;
use App\Repositories\UserRepository;
use App\Repositories\CourseRepository;
use App\Services\StudentIncomeService;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\CaseHistoryRepository;
use App\Repositories\StudentIncomeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StudentIncomeCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'student-income.destroy';
    private UserRepository $userRepo;
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    private CourseService $courseService;
    private CourseRepository $courseRepo;
    private StudentIncomeRepository $repo;
    private StudentIncomeService $service;
    protected array $addMoreItems = ['course_id', 'amount'];

    public function boot(
        StudentIncomeService $service,
        UserRepository $userRepository,
        ProjectRepository $projectRepository,
        StudentRepository $studentRepository,
        CaseHistoryRepository $caseHistoryRepository,
        StudentIncomeRepository $studentIncomeRepository,
        CourseService $courseService,
        CourseRepository $courseRepository,
    ) {
        $this->userRepo = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
        $this->courseService = $courseService;
        $this->repo = $studentIncomeRepository;
        $this->service = $service;
        $this->courseRepo = $courseRepository;


        $this->inputs[] = $this->numberOfItems;
        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public $project_id;
    public $student_id;
    public $date;
    public $course_id;
    public $amount;

    protected array $rules = [
        'project_id' => 'required',
        'student_id' => 'required',
        'date' => 'required',
        'course_id.*' => 'required',
        'amount.*' => 'required',
    ];



    // public function mount()
    // {
    //     if ($this->stockTransfer) {
    //         $this->stockTransfer = $this->repo->getRelatedData($this->stockTransfer, ['details']);

    //         $this->project_id = $this->stockTransfer->project_id;
    //         $this->issue_type = $this->stockTransfer->issue_type;
    //         $this->reference = $this->stockTransfer->reference;
    //         $this->date = $this->stockTransfer->date;
    //         $this->warehouse_id_from = $this->stockTransfer->warehouse_id_from;
    //         $this->warehouse_id_to = $this->stockTransfer->warehouse_id_to;

    //         $this->inputs = $this->stockTransfer->details->toArray();

    //         foreach ($this->stockTransfer->details as $key => $detail) {
    //             $this->product_id[$key] = $detail->product_id;
    //             $this->transfer_quantity[$key] = $detail->transfer_quantity;
    //             $this->available_Quantity[$key] = $detail->available_qty;
    //             $this->serial[$key] = $detail->serial;
    //         }
    //     }
    // }


    // public function update()
    // {
    //     $this->service->update($this->stockTransfer, $this->validate());
    //     $this->dispatchBrowserEvent('notify');
    //     $this->redirectRoute('stock-transfer.create');
    // }

    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
            'courses' => $this->courseService->getFormattedDataAsOptGroup(),
        ];

        return view('livewire.student-income.student-income-create', $data);
    }
}
