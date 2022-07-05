<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\PaymentRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CashPaymentList extends Component
{
    use WithPagination, CommonListElements;

    protected string $destroyRoute = 'direct-payment.destroy';

    private PaymentRepository $repo;

    public function boot(PaymentRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {

        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];

        return view('livewire.cash-payment-list', $data);
    }
}
