<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Services\StockOutService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StockOutRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;

class StockOutCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;


    private StockOutService $service;
    private StockOutRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;

    public function boot(
        StockOutService $service,
        StockOutRepository $repository,
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


    public $stockOut;

    public $project_id;
    public $warehouse_id;
    public $date;
    public $product_id;
    public $total_stock;
    public $stock_out;



    protected array $rules = [
        'project_id' => 'required',
        'warehouse_id' => 'required',
        'date' => 'required',
        'product_id.*' => 'required',
        'stock_out.*' => 'nullable',
    ];




    public function mount()
    {
        if ($this->stockOut) {
            $this->stockOut = $this->repo->getRelatedData($this->stockOut, ['details']);

            $this->project_id = $this->stockOut->project_id;
            $this->date = $this->stockOut->date;
            $this->warehouse_id = $this->stockOut->warehouse_id;

            $this->inputs = $this->stockOut->details->toArray();

            foreach ($this->stockOut->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->stock_out[$key] = $detail->stock_out;
            }
        }
    }

    public function update()
    {
        $this->service->update($this->stockOut, $this->validate());
        $this->dispatchBrowserEvent('notify');
        // $this->redirect('stock-receive');
    }


    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
        ];

        return view('livewire.stock-out-create', $data);
    }
}
