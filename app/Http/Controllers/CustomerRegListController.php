<?php

namespace App\Http\Controllers;

use App\Models\CustomerRegList;
use App\Http\Requests\StoreCustomerRegListRequest;
use App\Http\Requests\UpdateCustomerRegListRequest;

class CustomerRegListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('setup.customers-list.customer-reg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRegListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRegListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerRegList $customerRegList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerRegList $customerRegList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRegListRequest  $request
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRegListRequest $request, CustomerRegList $customerRegList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerRegList $customerRegList)
    {
        //
    }
}
