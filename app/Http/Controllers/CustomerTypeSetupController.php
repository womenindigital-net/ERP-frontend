<?php

namespace App\Http\Controllers;

use App\Models\CustomerTypeSetup;
use App\Http\Requests\StoreCustomerTypeSetupRequest;
use App\Http\Requests\UpdateCustomerTypeSetupRequest;

class CustomerTypeSetupController extends Controller
{
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
        // $data = [
        //     // 'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        //     // 'students' => $this->studentRepo->getData(),
        //     // 'doctors' => $this->doctorRepo->getData(),
        // ];
        return view('setup.customers-list.customer-Type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerTypeSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerTypeSetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerTypeSetup  $customerTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerTypeSetup $customerTypeSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerTypeSetup  $customerTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerTypeSetup $customerTypeSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerTypeSetupRequest  $request
     * @param  \App\Models\CustomerTypeSetup  $customerTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerTypeSetupRequest $request, CustomerTypeSetup $customerTypeSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerTypeSetup  $customerTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerTypeSetup $customerTypeSetup)
    {
        //
    }
}
