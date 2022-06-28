<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ProjectRepository;
use App\Repositories\RequisitionRepository;
use App\Repositories\StockRepository;
use App\Repositories\UserRepository;
use App\Repositories\WarehouseRepository;
use App\Services\ProductService;
use App\Services\RequisitionService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class RequisitionCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'requisition.destroy';

    public $requisition;
    public $requested_by;
    public $date;
    public $title;

    private RequisitionService $service;
    private RequisitionRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;

    public function boot(
        RequisitionService $service,
        RequisitionRepository $repository,
        ProductService $productService,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        StockRepository $stockRepository,
    )
    {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo =$repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;
    }

    public function mount()
    {
        if ($this->requisition) {
            $this->requisition = $this->repo->getRelatedData($this->requisition, ['details']);

            $this->project_id = $this->requisition->project_id;
            $this->requested_by = $this->requisition->requested_by;
            $this->date = $this->requisition->date;
            $this->title = $this->requisition->title;
            $this->warehouse_id = $this->requisition->warehouse_id;

            $this->inputs = $this->requisition->details->toArray();

            foreach ($this->requisition->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->qty[$key] = $detail->qty;
                $this->available_qty[$key] = $detail->available_qty;
                $this->price[$key] = $detail->price;
                $this->sub_total[$key] = $detail->sub_total;
                $this->discount[$key] = $detail->discount;
            }
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'requested_by' => 'nullable',
        'date' => 'required',
        'title' => 'required',
        'warehouse_id' => 'required',
        'product_id.*' => 'required',
        'available_qty.*' => 'required',
        'qty.*' => 'required',
        'sub_total.*' => 'nullable',
        'price.*' => 'nullable',
        'discount.*' => 'nullable',
    ];

    public function updated($name, $value)
    {
        if (str_starts_with($name, 'product_id.')) {
            if (!$value || !$this->project_id || !$this->warehouse_id)
                return;

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
            if (!$productInfo) return;

            $targetKey = $this->getTargetKey($name);

            $this->available_qty[$targetKey] = $productInfo->qty;
            $this->price[$targetKey] = $productInfo->product->selling_price;
        }

        if (str_starts_with($name, 'qty.') || str_starts_with($name, 'discount.')) {
            $targetKey = $this->getTargetKey($name);

            if (!isset($this->available_qty[$targetKey]) or !$this->available_qty[$targetKey])
                return;

            if (isset($this->price[$targetKey]) && $this->price[$targetKey] && isset($this->qty[$targetKey]) && $this->qty[$targetKey]) {
                $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - ($this->discount[$targetKey] ?? 0);
            }
        }
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
        ];

        return view('livewire.requisition-create', $data);
    }
}
