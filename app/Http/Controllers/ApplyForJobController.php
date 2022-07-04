<?php

namespace App\Http\Controllers;

use App\Models\ApplyForJob;
use App\Http\Requests\StoreApplyForJobRequest;
use App\Http\Requests\UpdateApplyForJobRequest;

class ApplyForJobController extends Controller
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
     * @param  \App\Http\Requests\StoreApplyForJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplyForJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function show(ApplyForJob $applyForJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplyForJob $applyForJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplyForJobRequest  $request
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplyForJobRequest $request, ApplyForJob $applyForJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplyForJob $applyForJob)
    {
        //
    }
}
