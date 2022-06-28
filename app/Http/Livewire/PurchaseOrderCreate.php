<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ProjectRepository;
use App\Repositories\PurchaseOrderRepository;
use App\Repositories\RequisitionRepository;
use App\Repositories\SupplierRepository;
use App\Services\ProductService;
use App\Services\PurchaseOrderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class PurchaseOrderCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    public $requisition;
    public $requisition_id;
    public $date;
    public $exp_date;
    public $vat;
    public $supplier_id;

    private PurchaseOrderRepository $repo;
    private PurchaseOrderService $service;
    private ProjectRepository $projectRepo;
    private SupplierRepository $supplierRepo;
    private ProductService $productService;
    private RequisitionRepository $requisitionRepo;

    public function boot(
        PurchaseOrderService $service,
        PurchaseOrderRepository $repository,
        ProjectRepository $projectRepository,
        SupplierRepository $supplierRepository,
        ProductService $productService,
        RequisitionRepository $requisitionRepository,
    )
    {
        $this->service = $service;
        $this->repo = $repository;
        $this->projectRepo = $projectRepository;
        $this->supplierRepo = $supplierRepository;
        $this->productService = $productService;
        $this->requisitionRepo = $requisitionRepository;
        $this->inputs[] = $this->numberOfItems;
    }

    public function mount()
    {
//        dd($this->requisition);

        if ($this->requisition->id) {
            $this->project_id = $this->requisition->project_id;
            $this->requisition_id = $this->requisition->id;
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
        'requisition_id' => 'nullable',
        'supplier_id' => 'nullable',
        'date' => 'required',

        'product_id.*' => 'required',
        'exp_date.*' => 'nullable',
        'available_qty.*' => 'required',
        'qty.*' => 'required',
        'price.*' => 'nullable',
        'vat.*' => 'nullable',
        'discount.*' => 'nullable',
        'sub_total.*' => 'nullable',

        'note' => 'nullable',
    ];

    public function updated($name, $value)
    {
        /*if (str_starts_with($name, 'product_id.')) {
            if (!$value || !$this->project_id)
                return;

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
            if (!$productInfo) return;

            $targetKey = $this->getTargetKey($name);

            $this->available_qty[$targetKey] = $productInfo->qty;
            $this->price[$targetKey] = $productInfo->product->selling_price;
        }

        if (str_starts_with($name, 'qty.')) {
            $targetKey = $this->getTargetKey($name);

            if (!isset($this->available_qty[$targetKey]) or !$this->available_qty[$targetKey])
                return;

            if ($this->price[$targetKey] && $this->qty[$targetKey]) {
                $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - ($this->discount[$targetKey] ?? 0);
            }
        }

        if (str_starts_with($name, 'discount.')) {
            $targetKey = $this->getTargetKey($name);

            if (!$this->available_qty[$targetKey])
                return;

            if ($this->price[$targetKey] && $this->qty[$targetKey]) {
                $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - ($this->discount[$targetKey] ?? 0);
            }
        }*/
    }

    public function render(): Factory|View|Application
    {
//        dd($this->requisitionRepo->getApprovedList());

        $data = [
            'projects' => $this->projectRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'requisitions' => $this->requisitionRepo->getApprovedList(),
        ];

        return view('livewire.purchase-order-create', $data);
    }
}
