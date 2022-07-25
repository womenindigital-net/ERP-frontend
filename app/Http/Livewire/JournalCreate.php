<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\JournalService;
use App\Repositories\JournalRepository;
use App\Repositories\ProjectRepository;

class JournalCreate extends Component
{

    private JournalService $service;
    private JournalRepository $repo;
    private ProjectRepository $projectRepo;

    public function boot(
        JournalService $service,
        JournalRepository $journalRepository,
        ProjectRepository $projectRepository
    ) {
        $this->service = $service;
        $this->repo = $journalRepository;
        $this->projectRepo = $projectRepository;
    }
    

    public function render()
    {
        return view('livewire.journal-create');
    }
}
