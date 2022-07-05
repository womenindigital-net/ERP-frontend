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
use App\Repositories\PurchaseRepository;

class StockReceiveCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'stock-receive.destroy';

    public $stockReceive;
    // public $purchase_type;
    // public $return_type;
    public $date;
    public $note;
    public $exp_date;
    public $available_qty;
    public $received;
    public $receivable;
    public $return;
    public $stock_receive_qty;
    public $serial;
    public $type;
    public $purchaseInput;
    public $receiveInput;

    private StockReceiveService $service;
    private StockReceiveRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private PurchaseRepository $purchaseRepo;
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
        PurchaseRepository $purchaseRepository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        // $this->receiveInput = false;
        // $this->purchaseInput = false;

        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;
        $this->purchaseRepo = $purchaseRepository;
    }

    // public function updating($name, $value)
    // {
    //     if ($name == 'type') {
    //         if ($value == 'purchase') {
    //             $this->purchaseInput = true;
    //             $this->receiveInput = false;
    //         } elseif ($value == 'return') {
    //             $this->receiveInput = true;
    //             $this->purchaseInput = false;
    //         } else {
    //             $this->receiveInput = false;
    //             $this->purchaseInput = false;
    //         }
    //     }
    // }

    public function mount()
    {
        if ($this->stockReceive) {
            // dd($this->stockReceive);
            $this->stockReceive = $this->repo->getRelatedData($this->stockReceive, ['details']);

            $this->project_id = $this->stockReceive->project_id;
            $this->type = $this->stockReceive->type;
            $this->purchase_type = $this->stockReceive->purchase_type;
            $this->purchase_type ? $this->purchaseInput = true : $this->purchaseInput = false;
            $this->return_type = $this->stockReceive->return_type;
            $this->return_type ? $this->receiveInput = true : $this->receiveInput = false;
            $this->date = $this->stockReceive->date;
            $this->warehouse_id = $this->stockReceive->warehouse_id;

            $this->inputs = $this->stockReceive->details->toArray();

            foreach ($this->stockReceive->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->available_qty[$key] = $detail->available_qty;
                $this->exp_date[$key] = $detail->exp_date;
                $this->received[$key] = $detail->received;
                $this->return[$key] = $detail->return;
                $this->receivable[$key] = $detail->receivable;
                $this->stock_receive_qty[$key] = $detail->stock_receive_qty;
                $this->serial[$key] = $detail->serial;
            }
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'warehouse_id' => 'required',
        'type' => 'required',
        'date' => 'required',
        'note' => 'nullable',
        'product_id.*' => 'required',
        'exp_date.*' => 'required',
        'available_qty.*' => 'nullable',
        'received.*' => 'nullable',
        'return.*' => 'nullable',
        'receivable.*' => 'nullable',
        'stock_receive_qty.*' => 'nullable',
        'serial.*' => 'nullable',
    ];

    public function update()
    {
        $this->service->update($this->stockReceive, $this->validate());
        $this->dispatchBrowserEvent('notify');
        // $this->redirect()->;
    }

    // public function updated($name, $value)
    // {
    //     if (str_starts_with($name, 'product_id.')) {
    //         dd($name);
    //         if (!$value || !$this->project_id || !$this->warehouse_id)
    //             return;

    //         $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
    //         if (!$productInfo) return;

    //         $targetKey = $this->getTargetKey($name);

    //         $this->available_qty[$targetKey] = $productInfo->qty;
    //         $this->price[$targetKey] = $productInfo->product->selling_price;
    //     }

    //     if (str_starts_with($name, 'qty.') || str_starts_with($name, 'discount.')) {
    //         $targetKey = $this->getTargetKey($name);

    //         if (!isset($this->available_qty[$targetKey]) or !$this->available_qty[$targetKey])
    //             return;

    //         if (isset($this->price[$targetKey]) && $this->price[$targetKey] && isset($this->qty[$targetKey]) && $this->qty[$targetKey]) {
    //             $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - ($this->discount[$targetKey] ?? 0);
    //         }
    //     }
    // }

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
            'purchases' => $this->purchaseRepo->getData(),
            'receiveTypes' => [
                'Purchase' => 'Purchase',
                'Return' => 'Return',
                'Temporary' => 'Temporary'
            ]
        ];

        return view('livewire.stock-receive-create', $data);
    }
}
