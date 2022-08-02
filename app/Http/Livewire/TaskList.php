<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\TaskRepository;
use App\Http\Livewire\Traits\CommonListElements;

class TaskList extends Component
{

    use WithPagination, CommonListElements;
    private TaskRepository $repo;

    protected string $destroyRoute = 'task.destroy';

    public function boot(TaskRepository $repository)
    {
        $this->repo = $repository;
    }
    
    
    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.task-list', $data);
    }
}
