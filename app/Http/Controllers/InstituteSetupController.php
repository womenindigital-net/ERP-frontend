<?php

namespace App\Http\Controllers;

use App\Models\InstituteSetup;
use App\Http\Requests\StoreInstituteSetupRequest;
use App\Http\Requests\UpdateInstituteSetupRequest;

class InstituteSetupController extends Controller
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
     * @param  \App\Http\Requests\StoreInstituteSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstituteSetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstituteSetup  $instituteSetup
     * @return \Illuminate\Http\Response
     */
    public function show(InstituteSetup $instituteSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstituteSetup  $instituteSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(InstituteSetup $instituteSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstituteSetupRequest  $request
     * @param  \App\Models\InstituteSetup  $instituteSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstituteSetupRequest $request, InstituteSetup $instituteSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstituteSetup  $instituteSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstituteSetup $instituteSetup)
    {
        //
    }
}
