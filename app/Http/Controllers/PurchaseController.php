<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Purchase;
use App\Models\Requisition;
use App\Repositories\PurchaseRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PurchaseController extends Controller
{
    private PurchaseRepository $repo;

    public function __construct(PurchaseRepository $repository)
    {
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
     * @param Purchase $purchase
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Purchase $purchase
     *
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
     * @param Purchase  $purchase
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Purchase  $purchase
     *
     * @return bool
     */
    public function destroy(Purchase $purchase): bool
    {
        return $purchase->delete();
    }

    public function purchaseOrder()
    {

    }

    public function purchaseReturn(Purchase $purchase): Factory|View|Application
    {
        $data = [
            'record' => $this->repo->getRelatedData($purchase, ['details', 'requisition']),
        ];
        return view('accounting.purchase.purchase_return', $data);
    }
}
