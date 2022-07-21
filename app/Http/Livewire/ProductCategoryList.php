<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ProductCategoryRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ProductCategoryList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'product-category.destroy';
    private ProductCategoryRepository $productCategoryRepo;
    public $reportList;

    public function boot(ProductCategoryRepository $productCategoryRepo)
    {
        $this->productCategoryRepo = $productCategoryRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->productCategoryRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->productCategoryRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.product-category-list',$data);
    }
}
