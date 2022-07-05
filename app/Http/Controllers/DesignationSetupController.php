<?php

namespace App\Http\Controllers;

use App\Models\DesignationSetup;
use App\Http\Requests\StoreDesignationSetupRequest;
use App\Http\Requests\UpdateDesignationSetupRequest;

class DesignationSetupController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDesignationSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesignationSetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function show(DesignationSetup $designationSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(DesignationSetup $designationSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDesignationSetupRequest  $request
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesignationSetupRequest $request, DesignationSetup $designationSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(DesignationSetup $designationSetup)
    {
        //
    }
}
