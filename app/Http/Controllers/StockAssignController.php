<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockAssignRequest;
use App\Repositories\ProductRepository;
use App\Repositories\WarehouseRepository;
use App\Services\StockAssignService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StockAssignController extends Controller
{
    private WarehouseRepository $warehouseRepo;
    private ProductRepository $productRepo;
    private StockAssignService $service;

    public function __construct(WarehouseRepository $warehouseRepository, ProductRepository $productRepository, StockAssignService $service)
    {
        $this->warehouseRepo = $warehouseRepository;
        $this->productRepo = $productRepository;
        $this->service = $service;
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
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $data = [
            'warehouses' => $this->warehouseRepo->getData(),
            'products' => $this->productRepo->getData(),
        ];

        return view('inventory-management.stock_assign', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StockAssignRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
