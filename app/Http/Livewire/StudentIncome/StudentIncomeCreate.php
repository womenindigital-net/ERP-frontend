<?php

namespace App\Http\Livewire\StudentIncome;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\CourseService;
use App\Repositories\UserRepository;
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

    private string $destroyRoute = 'sale-voucher.destroy';
    private UserRepository $userRepo;
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    private CourseService $courseService;
    private StudentIncomeRepository $repo;
    private StudentIncomeService $service;
    protected array $addMoreItems = ['product_id', 'amount'];

    public function boot(
        StudentIncomeService $service,
        UserRepository $userRepository,
        ProjectRepository $projectRepository,
        StudentRepository $studentRepository,
        CaseHistoryRepository $caseHistoryRepository,
        StudentIncomeRepository $studentIncomeRepository,
        CourseService $courseService,
    ) {
        $this->userRepo = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
        $this->courseService = $courseService;
        $this->repo = $studentIncomeRepository;
        $this->service = $service;


        $this->inputs[] = $this->numberOfItems;
        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public $project_id;
    public $student_id;
    public $date;
    public $product_id;
    public $amount;

    protected array $rules = [
        'project_id' => 'required',
        'student_id' => 'required',
        'date' => 'required',
        'product_id.*' => 'required',
        'amount.*' => 'required',
    ];

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
