<?php

namespace App\Http\Controllers;

use App\Models\ProjectSetup;
use App\Http\Requests\StoreProjectSetupRequest;
use App\Http\Requests\UpdateProjectSetupRequest;

class ProjectSetupController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectSetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectSetup  $projectSetup
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectSetup $projectSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectSetup  $projectSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectSetup $projectSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectSetupRequest  $request
     * @param  \App\Models\ProjectSetup  $projectSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectSetupRequest $request, ProjectSetup $projectSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectSetup  $projectSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectSetup $projectSetup)
    {
        //
    }
}
