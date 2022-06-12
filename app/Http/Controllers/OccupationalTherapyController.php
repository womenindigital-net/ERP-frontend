<?php

namespace App\Http\Controllers;

use App\Models\OccupationalTherapy;
use App\Http\Requests\StoreOccupationalTherapyRequest;
use App\Http\Requests\UpdateOccupationalTherapyRequest;

class OccupationalTherapyController extends Controller
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

        return view('assessment.occupational-therapy.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOccupationalTherapyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOccupationalTherapyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function show(OccupationalTherapy $occupationalTherapy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function edit(OccupationalTherapy $occupationalTherapy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationalTherapyRequest  $request
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOccupationalTherapyRequest $request, OccupationalTherapy $occupationalTherapy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function destroy(OccupationalTherapy $occupationalTherapy)
    {
        //
    }
}
