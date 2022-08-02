<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;

class TaskCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'finished-goods.destroy';
    private FinishedGoodService $service;
    private FinishedGoodRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    protected array $addMoreItems = ['product_id', 'unit', 'qty'];

    public function render()
    {
        return view('livewire.task-create');
    }
}
