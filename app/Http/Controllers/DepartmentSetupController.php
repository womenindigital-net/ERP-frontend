<?php

namespace App\Http\Controllers;

use App\Models\DepartmentSetup;
use App\Http\Requests\StoreDepartmentSetupRequest;
use App\Http\Requests\UpdateDepartmentSetupRequest;

class DepartmentSetupController extends Controller
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
     * @param  \App\Http\Requests\StoreDepartmentSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentSetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function show(DepartmentSetup $departmentSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(DepartmentSetup $departmentSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartmentSetupRequest  $request
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentSetupRequest $request, DepartmentSetup $departmentSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepartmentSetup $departmentSetup)
    {
        //
    }
}
