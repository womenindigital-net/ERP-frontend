<?php

namespace App\Http\Controllers;

use App\Models\SensoryAdult;
use App\Http\Requests\StoreSensoryAdultRequest;
use App\Http\Requests\UpdateSensoryAdultRequest;

class SensoryAdultController extends Controller
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
        $data = [
            'students' => []
        ];

        return view('assessment.sensory-checklist-adult.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSensoryAdultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSensoryAdultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function show(SensoryAdult $sensoryAdult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function edit(SensoryAdult $sensoryAdult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSensoryAdultRequest  $request
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSensoryAdultRequest $request, SensoryAdult $sensoryAdult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensoryAdult $sensoryAdult)
    {
        //
    }
}