<?php

namespace App\Http\Controllers;

use App\Models\HrAdmin;
use App\Http\Requests\StoreHrAdminRequest;
use App\Http\Requests\UpdateHrAdminRequest;

class HrAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'ok';
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
     * @param  \App\Http\Requests\StoreHrAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHrAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HrAdmin  $hrAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(HrAdmin $hrAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HrAdmin  $hrAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(HrAdmin $hrAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHrAdminRequest  $request
     * @param  \App\Models\HrAdmin  $hrAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHrAdminRequest $request, HrAdmin $hrAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HrAdmin  $hrAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(HrAdmin $hrAdmin)
    {
        //
    }
}
