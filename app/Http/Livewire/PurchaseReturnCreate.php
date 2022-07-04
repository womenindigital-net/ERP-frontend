<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\PurchaseOrderService;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Repositories\PurchaseOrderRepository;

class PurchaseReturnCreate extends Component
{

    protected ProjectRepository $projectRepo;
    private WarehouseRepository $warehouseRepository;

    public function boot(
        ProjectRepository $projectRepositoy,
        WarehouseRepository $warehouseRepository,
    ) 
    {
        $this->projectRepo = $projectRepositoy;
        $this->warehouseRepository = $warehouseRepository;
    }

    public $project_id;
    public $collection_date;
    public $warehouse_id;


    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
        ];
        return view('livewire.purchase-return-create', $data);
    }
}
