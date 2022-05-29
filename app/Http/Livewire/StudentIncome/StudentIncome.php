<?php

namespace App\Http\Livewire\StudentIncome;

use App\Repositories\ProjectRepository;
use Livewire\Component;

class StudentIncome extends Component
{

    private ProjectRepository $projectRepo;

    // public function __construct(ProjectRepository $projectRepository)
    // {
    //     $this->projectRepo = $projectRepository;
    // }

    // public function boot(ProjectRepository $projectRepo)
    // {
    //     $data = [
    //         'project' => $this->projectRepo->getdata(),
    //     ];
    // }


    public function render()
    {
        return view('livewire.student-income.student-income');
    }
}
