<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Utility\ProductConstant;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\MeasureUnitRepository;
use App\Repositories\ProductCategoryRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ProductCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private ProductService $service;
    private ProductRepository $repo;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private MeasureUnitRepository $measureUnitRepo;
    private WarehouseRepository $warehouseRepository;
    private ProductCategoryRepository $productCategoryRepo;
     protected array $addMoreItems = ['p_category', 'product', 'measure', 'quantity', 'price', 'cost'];

    public function boot(
        ProductCategoryRepository $productCategoryRepo,
        ProductRepository $repository,
        ProductService $service,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        MeasureUnitRepository $measureUnitRepo,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->repo = $repository;
        $this->service = $service;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->measureUnitRepo = $measureUnitRepo;
        $this->productCategoryRepo = $productCategoryRepo;

         $targetKey = count($this->inputs) - 1;
         foreach ($this->addMoreItems as $each) {
             $this->{$each}[$targetKey] = null;
      }
    }


    public $product;
    public $name;
    public $code;
    public $type;
    public $description;
    public $category_id;
    public $unit_id;
    public $reorder_quantity;
    public $image;
    public $selling_price;
    public $cost_price;
    public $making_cost;
    public $current_price;
    public $expiry_alert;
    public $p_category;
    public $measure;
    public $quantity;
    public $price;
    public $cost;



    protected array $rules = [
        'name' => 'nullable',
        'code' => 'nullable',
        'type' => 'nullable',
        'description' => 'nullable',
        'category_id' => 'nullable',
        'unit_id' => 'nullable',
        'reorder_quantity' => 'nullable',
        'image' => 'nullable',
        'selling_price' => 'nullable',
        'cost_price'  => 'nullable',
        'making_cost' => 'nullable',
        'expiry_alert' => 'nullable',
        'current_price' => 'nullable',
        'p_category' => 'nullable',
        'measure' => 'nullable',
        'quantity' => 'nullable',
        'price' => 'nullable',
        'cost' => 'nullable',

    ];




    // public function mount()
    // {
    //     if ($this->records) {
    //         $this->records = $this->repo->getRelatedData($this->records, ['details']);

    //         $this->code = $this->records->code;
    //         $this->name = $this->records->name;
    //         $this->type = $this->records->type;
    //         $this->category = $this->records->category;
    //         $this->measurement = $this->records->measurement;
    //         $this->reorder_quantity = $this->records->reorder_quantity;
    //         $this->sell_price = $this->records->sell_price;
    //         $this->cost_price = $this->records->cost_price;
    //         $this->number = $this->records->number;
    //         $this->expiry_alert = $this->records->expiry_alert;

    //         $this->inputs = $this->records->details->toArray();

    //         foreach ($this->records->details as $key => $detail) {
    //             $this->product_id[$key] = $detail->product_id;
    //             $this->stock_out[$key] = $detail->stock_out;
    //         }
    //     }
    // }

    // public function updated($name, $value)
    // {
    //     if (str_starts_with($name, 'product_id.')) {
    //         $targetKey = $this->getTargetKey($name);

    //         if (!$value || !$this->project_id || !$this->warehouse_id) {
    //             $this->dispatchBrowserEvent('notify', ['type' => '', 'message' => 'Sorry no related product found']);
    //             $this->total_stock[$targetKey] = 00;
    //             return;
    //         }

    //         $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
    //         if (!$productInfo) {
    //             $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
    //             $this->total_stock[$targetKey] = 0;
    //             return;
    //         }

    //         $this->total_stock[$targetKey] = $productInfo->qty;
    //         // $this->price[$targetKey]         = $productInfo->product->selling_price;
    //     }
    // }

    // public function update()
    // {
    //     $this->service->update($this->records, $this->validate());
    //     $this->dispatchBrowserEvent('notify');
    //     $this->redirectRoute('project.create');
    // }


    public function render()
    {
        $data = [
            'products' => $this->repo->getData(),
            'types' => ProductConstant::$Type,
            'categorys' => $this->productCategoryRepo->getData(),
            'unit' => $this->measureUnitRepo->getData(),
        ];
        return view('livewire.product-create', $data);
    }
}
