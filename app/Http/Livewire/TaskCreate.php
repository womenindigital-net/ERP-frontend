<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\TaskService;
use App\Repositories\TaskRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;

class TaskCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'finished-goods.destroy';
    private TaskService $service;
    private TaskRepository $repo;
    protected array $addMoreItems = ['task_name', 'type'];

    public $activity;
    public $domain_weight;
    public $task_name;
    public $type;

    public function boot(
        TaskService $service,
        TaskRepository $repository,
    ) {
        
        $this->service = $service;
        $this->repo = $repository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    protected array $rules = [
        'activity' => 'nullable',
        'domain_weight' => 'nullable',
        'task_name' => 'nullable',
        'type' => 'nullable',
    ];

    public function render()
    {
        return view('livewire.task-create');
    }
}
