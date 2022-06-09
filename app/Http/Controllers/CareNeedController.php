<?php

namespace App\Http\Controllers;

use App\Models\CareNeed;
use App\Http\Requests\StoreCareNeedRequest;
use App\Http\Requests\UpdateCareNeedRequest;

class CareNeedController extends Controller
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
     * @param  \App\Http\Requests\StoreCareNeedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareNeedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function show(CareNeed $careNeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function edit(CareNeed $careNeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareNeedRequest  $request
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareNeedRequest $request, CareNeed $careNeed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareNeed  $careNeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareNeed $careNeed)
    {
        //
    }
}
