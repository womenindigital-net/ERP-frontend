<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SupplierPaymentRepository;
use App\Services\SupplierPaymentService;

class SupplierPaymentList extends Component
{

    use WithPagination, CommonListElements;

    protected string $destroyRoute = 'donation-and-other.destroy';

    private SupplierPaymentService $service;
    private SupplierPaymentRepository $repo;

    public function boot(SupplierPaymentService $service, SupplierPaymentRepository $repository)
    {
        $this->service = $service;
        $this->repo = $repository;
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.supplier-payment-list', $data);
    }
}
