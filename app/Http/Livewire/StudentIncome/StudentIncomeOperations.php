<?php

namespace App\Http\Livewire\StudentIncome;

use Livewire\Component;
use App\Models\StudentIncomeDetail;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Services\StudentIncomeDetailService;

class StudentIncomeOperations extends Component
{

    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private StudentIncomeDetailService $service;

    public function boot(ProjectRepository $projectRepo, StudentRepository $studentRepo, StudentIncomeDetailService $service)
    {
        $this->projectRepo = $projectRepo;
        $this->studentRepo = $studentRepo;
        $this->service = $service;
    }


    public string $project_id = "";
    public string $student_id = "";
    public string $payment_date = "";
    public string $course_id = "";
    public string $receive_amount_for = "";
    public string $amount = "";
    public string $type = "";

    // protected $listeners = ['student-operations' => 'studentOperations'];


    protected array $rules = [
        'project_id' => 'required',
        'student_id' => 'required',
        'payment_date' => 'required|date',
        'course_id' => 'required',
        'receive_amount_for' => 'required',
        'amount' => 'required|min:1',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->dispatchBrowserEvent('notify');
    }

    public function add()
    {
        $this->service->store($this->validate());
    }

    public function store()
    {
    }

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
        ];

        return view('livewire.student-income.student-income-operations', $data);
    }
}
