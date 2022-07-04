<?php

namespace App\Http\Controllers;

use App\Models\JobConfirmation;
use App\Http\Requests\StoreJobConfirmationRequest;
use App\Http\Requests\UpdateJobConfirmationRequest;

class JobConfirmationController extends Controller
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
     * @param  \App\Http\Requests\StoreJobConfirmationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobConfirmationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function show(JobConfirmation $jobConfirmation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function edit(JobConfirmation $jobConfirmation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobConfirmationRequest  $request
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobConfirmationRequest $request, JobConfirmation $jobConfirmation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobConfirmation $jobConfirmation)
    {
        //
    }
}
