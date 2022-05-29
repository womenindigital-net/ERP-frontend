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

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
        ];

        return view('livewire.student-income.student-income-operations', $data);
    }
}
