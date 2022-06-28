<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Services\StockReceiveService;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\StockReceiveRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StockReceiveCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'stock-receive.destroy';

    private StockReceiveService $service;
    private StockReceiveRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;

    public function boot(
        StockReceiveService $service,
        StockReceiveRepository $repository,
        ProductService $productService,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        StockRepository $stockRepository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;
    }

    protected array $rules = [
        'project_id' => 'required',
        'type' => 'required',
        'purchase' => 'nullable',
        'return' => 'nullable',
        'date' => 'required',
        'warehouse_id' => 'required',
        'product_id.*' => 'required',
        'exp_date.*' => 'required',
        'received.*' => 'nullable',
        'return.*' => 'nullable',
        'receivable.*' => 'nullable',
        'stock_receive_qty.*' => 'required',
        'serial.*' => 'required',
    ];

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
        ];

        return view('livewire.stock-receive-create', $data);
    }
}
