<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Requisition;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\Repositories\ProjectRepository;
use App\Repositories\SupplierRepository;
use App\Http\Requests\StorePurchaseRequest;
use App\Repositories\RequisitionRepository;
use App\Http\Requests\UpdatePurchaseRequest;
use Illuminate\Contracts\Foundation\Application;

class PurchaseController extends Controller
{

    private ProjectRepository $projectRepo;
    private SupplierRepository $supplierRepo;
    private ProductService $productService;
    private RequisitionRepository $requisitionRepo;

    public function __construct(
        ProjectRepository $projectRepository,
        SupplierRepository $supplierRepository,
        ProductService $productService,
        RequisitionRepository $requisitionRepository,
    )
    {
        $this->projectRepo = $projectRepository;
        $this->supplierRepo = $supplierRepository;
        $this->productService = $productService;
        $this->requisitionRepo = $requisitionRepository;
        
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
     * @param Requisition $requisition
     *
     * @return Application|Factory|View
     */
    public function create(Requisition $requisition): View|Factory|Application
    {
        $data = [
            'requisition' => Requisition::with('details')->find($requisition->id),
        ];
        return view('accounting.purchase.purchase_order', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'requisitions' => $this->requisitionRepo->getApprovedList(),
            'purchases' => Purchase::with('details','requisition')->find($id),
        ];
        return view('accounting.purchase.purchase_order_show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchaseRequest  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return purchase::find($id)->delete();
    }

    public function purchaseOrder()
    {
    }

    public function purchaseReturn()
    {
        return view('accounting.purchase.purchase_return');
    }
}
