<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Services\MaterialCollectionService;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\MaterialCollectionRepository;

class MaterialCollectCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'material-collect.destroy';

    private MaterialCollectionService $service;
    private MaterialCollectionRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;

    public function boot(
        MaterialCollectionService $service,
        MaterialCollectionRepository $repository,
        ProductService $productService,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        StockRepository $stockRepository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->receiveInput = false;
        $this->purchaseInput = false;

        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;
    }


    public $collected_for;
    public $date;
    public $warehouser_id;

    // public function mount()
    // {
    //     if ($this->stockReceive) {
    //         // dd($this->stockReceive);
    //         $this->stockReceive = $this->repo->getRelatedData($this->stockReceive, ['details']);

    //         $this->project_id = $this->stockReceive->project_id;
    //         $this->type = $this->stockReceive->type;
    //         $this->purchase_type = $this->stockReceive->purchase_type;
    //         $this->purchase_type ? $this->purchaseInput = true : $this->purchaseInput = false;
    //         $this->return_type = $this->stockReceive->return_type;
    //         $this->return_type ? $this->receiveInput = true : $this->receiveInput = false;
    //         $this->date = $this->stockReceive->date;
    //         $this->warehouse_id = $this->stockReceive->warehouse_id;

    //         $this->inputs = $this->stockReceive->details->toArray();

    //         foreach ($this->stockReceive->details as $key => $detail) {
    //             $this->product_id[$key] = $detail->product_id;
    //             $this->qty[$key] = $detail->qty;
    //             $this->exp_date[$key] = $detail->exp_date;
    //             $this->received[$key] = $detail->received;
    //             $this->return[$key] = $detail->return;
    //             $this->receivable[$key] = $detail->receivable;
    //             $this->stock_receive_qty[$key] = $detail->stock_receive_qty;
    //             $this->serial[$key] = $detail->serial;
    //         }
    //     }
    // }

    protected array $rules = [
        'collected_for' => 'required',
        'date' => 'required',
        'warehouser_id' => 'required',
    ];

    public function update()
    {
        $this->service->update($this->stockReceive, $this->validate());
        $this->dispatchBrowserEvent('notify');
        // $this->redirect('stock-receive');
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
        ];

        return view('livewire.material-collect-create', $data);
    }
}
