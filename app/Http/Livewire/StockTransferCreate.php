<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Services\StockTransferService;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\StockTransferRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StockTransferCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'stock-receive.destroy';

    public $stockTransfer;

    public $issue_type;
    public $reference;
    public $date;
    public $warehouse_id_from;
    public $warehouse_id_to;
    public $product_id;
    public $available_Quantity;
    public $transfer_quantity;
    public $serial;



    private StockTransferService $service;
    private StockTransferRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;

    public function boot(
        StockTransferService $service,
        StockTransferRepository $repository,
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



    public function mount()
    {
        if ($this->stockTransfer) {
            $this->stockTransfer = $this->repo->getRelatedData($this->stockTransfer, ['details']);

            $this->project_id = $this->stockTransfer->project_id;
            $this->issue_type = $this->stockTransfer->issue_type;
            $this->reference = $this->stockTransfer->reference;
            $this->date = $this->stockTransfer->date;
            $this->warehouse_id_from = $this->stockTransfer->warehouse_id_from;
            $this->warehouse_id_to = $this->stockTransfer->warehouse_id_to;

            $this->inputs = $this->stockTransfer->details->toArray();

            foreach ($this->stockTransfer->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->transfer_quantity[$key] = $detail->transfer_quantity;
                $this->serial[$key] = $detail->serial;
            }
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'issue_type' => 'required',
        'reference' => 'required',
        'date' => 'required',
        'warehouse_id_from' => 'required',
        'warehouse_id_to' => 'required',
        'product_id' => 'required',
        // 'available_Quantity' => 'required',
        'transfer_quantity' => 'required',
        'serial' => 'required',
    ];

    public function update()
    {
        $this->service->update($this->stockTransfer, $this->validate());
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
            'issueType' => [
                'warehouse_to_warehouse' => 'Warehouse to Warehouse',
                'warehouse_to_customer' => 'Warehouse to Customer',
                'warehouse_to_service_provider' => 'Warehouse to Service Provider'
            ],
        ];
        return view('livewire.stock-transfer-create', $data);
    }
}