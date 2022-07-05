<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BankAccount;
use Livewire\WithPagination;
use App\Repositories\ChequeRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\SupplierRepository;
use App\Services\SupplierPaymentService;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\BankAccountRepository;
use App\Repositories\PurchaseOrderRepository;
use App\Repositories\SupplierPaymentRepository;
use App\Http\Livewire\Traits\CommonListElements;

class SupplierPaymentCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'sale-voucher.destroy';

    private ProjectRepository $projectRepo;
    private SupplierRepository $supplierRepo;
    private PurchaseOrderRepository $purchaseOrderRepo;
    private ChequeRepository $cheque;
    private BankAccountRepository $bankAccRepo;
    private SupplierPaymentService $service;
    private SupplierPaymentRepository $repo;
    private BankAccount $bankAccount;

    public function boot(
        ProjectRepository $projectRepository,
        SupplierRepository $supplierRepository,
        PurchaseOrderRepository $purchaseOrderRepository,
        BankAccountRepository $bankAccRepository,
        SupplierPaymentService $service,
        SupplierPaymentRepository $repository,
        BankAccount $bankAccount,
        ChequeRepository $cheque,
    ) {
        $this->projectRepo = $projectRepository;
        $this->supplierRepo = $supplierRepository;
        $this->purchaseOrderRepo = $purchaseOrderRepository;
        $this->bankAccRepo = $bankAccRepository;
        $this->service = $service;
        $this->repo = $repository;
        $this->bankAccount = $bankAccount;
        $this->cheque = $cheque;
    }

    public $record;
    public $project_id;
    public $supplier_id;
    public $date;
    public $purchase_id;
    public $remark;
    public $note;
    public $cash;
    public $bank_account_id;
    public $cheque_id;
    public $cheque_amount;


    protected array $rules = [
        'project_id'          => 'required',
        'supplier_id'         => 'required',
        'date'                => 'required',
        'purchase_id'     => 'required',
        'remark'        => 'nullable',
        'note'                => 'nullable',
        'cash'                => 'nullable',
        'bank_account_id'                => 'nullable',
        'cheque_id'                => 'nullable',
        'cheque_amount'                => 'nullable',
    ];

    public function mount()
    {
        if ($this->record) {
            // dd($this->record);
            // $this->mode = 'edit';
            $this->record = $this->repo->getRelatedData($this->record, ['payment.history']);

            $this->project_id   = $this->record->project_id;
            $this->supplier_id = $this->record->supplier_id;
            $this->date = $this->record->date;
            $this->purchase_id         = $this->record->purchase_id;
            $this->remark = $this->record->remark;
            $this->note = $this->record->note;

            $history = $this->record->payment->history->info;

            $this->cash = $history->cash;
            $this->bank_account_id = $history->bank_account_id;
            $this->cheque_id = $history->cheque_id;
            $this->cheque_amount = $history->cheque_amount;
        }
    }

    // public function updated($name, $value)
    // {
    //     if (str_starts_with($name, 'product_id.')) {
    //         if (!$value || !$this->project_id || !$this->warehouse_id)
    //             return;

    //         $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
    //         if (!$productInfo)
    //             return;

    //         $targetKey = $this->getTargetKey($name);

    //         $this->available_qty[$targetKey] = $productInfo->qty;
    //         $this->price[$targetKey]         = $productInfo->product->selling_price;
    //     }

    //     if (str_starts_with($name, 'qty.') || str_starts_with($name, 'discount.')) {
    //         $targetKey = $this->getTargetKey($name);

    //         if (!isset($this->available_qty[$targetKey]) or !$this->available_qty[$targetKey])
    //             return;

    //         if (isset($this->price[$targetKey]) && $this->price[$targetKey] && isset($this->qty[$targetKey]) && $this->qty[$targetKey]) {
    //             $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - (int)($this->discount[$targetKey] ?? 0);
    //         }
    //     }
    // }


    public function update()
    {
        $this->service->update($this->record, $this->validate());
        Session::flash('success');
        return $this->redirectRoute('supplier-payment.create');
    }

    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'purchaseOrder' => $this->purchaseOrderRepo->getData(),
            'bankAccount' => $this->bankAccRepo->getData(),
            'cheque' => $this->cheque->getData(),
        ];
        return view('livewire.supplier-payment-create', $data);
    }
}
