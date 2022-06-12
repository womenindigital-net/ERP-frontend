<?php

namespace App\Http\Controllers;

use App\Models\IndividualRisk;
use App\Http\Requests\StoreIndividualRiskRequest;
use App\Http\Requests\UpdateIndividualRiskRequest;

class IndividualRiskController extends Controller
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

        return view('assessment.individual-risk.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIndividualRiskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIndividualRiskRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function show(IndividualRisk $individualRisk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function edit(IndividualRisk $individualRisk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIndividualRiskRequest  $request
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndividualRiskRequest $request, IndividualRisk $individualRisk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndividualRisk $individualRisk)
    {
        //
    }
}
