<?php

namespace App\Http\Controllers;

use App\Models\OtAssessment;
use App\Http\Requests\StoreOtAssessmentRequest;
use App\Http\Requests\UpdateOtAssessmentRequest;

class OtAssessmentController extends Controller
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
     * @param  \App\Http\Requests\StoreOtAssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOtAssessmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(OtAssessment $otAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(OtAssessment $otAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOtAssessmentRequest  $request
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOtAssessmentRequest $request, OtAssessment $otAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtAssessment $otAssessment)
    {
        //
    }
}
