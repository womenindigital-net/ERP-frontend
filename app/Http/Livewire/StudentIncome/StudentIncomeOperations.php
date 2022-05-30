<?php

namespace App\Http\Livewire\StudentIncome;

use App\Models\StudentIncomeDetail;
use App\Repositories\ProjectRepository;
use Livewire\Component;

class StudentIncomeOperations extends Component
{
    private ProjectRepository $projectRepo;

    public function boot(ProjectRepository $projectRepo)
    {
        $this->projectRepo = $projectRepo;
    }


    public string $project_id = "";
    public string $payment_amount = "";
    public string $receive_amount = "";

    // protected $listeners = ['student-operations' => 'studentOperations'];


    protected array $rules = [
        'project_id' => 'required|min:1',
        'payment_amount' => 'required|min:1',
        'receive_amount' => 'required|min:1',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        
    }

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
        ];

        return view('livewire.student-income.student-income-operations', $data);
    }
}
