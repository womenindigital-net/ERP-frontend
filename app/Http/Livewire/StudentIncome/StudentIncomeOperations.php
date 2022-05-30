<?php

namespace App\Http\Livewire\StudentIncome;

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
    public string $paymetn_amount = "";
    public string $receive_amount = "";

    protected $listeners = ['student-operations' => 'studentOperations'];


    protected array $rules = [
        'project_id' => 'requeued|min:1',
        'paymetn_amount' => 'requeued|min:1',
        'receive_amount' => 'requeued|min:1',
    ];
    public function add()
    {
        dd('09989');
        $this->emit('student-operations');
    }

    public function studentOperations()
    {
        dd(434);
    }

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
        ];

        return view('livewire.student-income.student-income-operations', $data);
    }
}
