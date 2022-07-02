<?php

namespace App\Http\Controllers;

use App\Models\SupplierPayment;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CustomerRepository;
use App\Repositories\SupplierRepository;
use App\Services\SupplierPaymentService;
use App\Repositories\PurchaseOrderRepository;
use App\Repositories\SupplierPaymentRepository;
use App\Http\Requests\StoreSupplierPaymentRequest;
use App\Http\Requests\UpdateSupplierPaymentRequest;

class SupplierPaymentController extends Controller
{

    private ProjectRepository $projectRepo;
    private SupplierRepository $supplierRepo;
    private PurchaseOrderRepository $purchaseOrderRepo;
    private SupplierPaymentService $service;
    private SupplierPaymentRepository $repo;

    public function __construct(
        ProjectRepository $projectRepository,
        SupplierRepository $supplierRepository,
        PurchaseOrderRepository $purchaseOrderRepository,
        SupplierPaymentService $service,
        SupplierPaymentRepository $repository,
    ) {
        $this->projectRepo = $projectRepository;
        $this->supplierRepo = $supplierRepository;
        $this->purchaseOrderRepo = $purchaseOrderRepository;
        $this->service = $service;
        $this->repo = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'purchaseOrder' => $this->purchaseOrderRepo->getData(),
            'invoices' => [
                '1' => 'SDT-1211',
                '2' => 'SDT-1212',
                '3' => 'SDT-1213',
            ],
        ];

        return view('accounting.purchase.supplier_payment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierPaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierPaymentRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierPayment $supplierPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierPayment $supplierPayment)
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'purchaseOrder' => $this->purchaseOrderRepo->getData(),
            'invoices' => [
                '1' => 'SDT-1211',
                '2' => 'SDT-1212',
                '3' => 'SDT-1213',
            ],
            'record' => $this->repo->getRelatedData($supplierPayment, ['payment.supplierPayment', 'payment.history']),
        ];
        dd($data['record']);
        return view('accounting.purchase.supplier_payment.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierPaymentRequest  $request
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierPaymentRequest $request, SupplierPayment $supplierPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierPayment  $supplierPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierPayment $supplierPayment)
    {
        //
    }
}
