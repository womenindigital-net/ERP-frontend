<?php

namespace App\Http\Controllers;

use App\Models\JobContact;
use App\Http\Requests\StoreJobContactRequest;
use App\Http\Requests\UpdateJobContactRequest;

class JobContactController extends Controller
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
     * @param  \App\Http\Requests\StoreJobContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function show(JobContact $jobContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function edit(JobContact $jobContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobContactRequest  $request
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobContactRequest $request, JobContact $jobContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobContact $jobContact)
    {
        //
    }
}
