<?php

namespace App\Http\Controllers;

use App\Models\IncidentRecord;
use App\Http\Requests\StoreIncidentRecordRequest;
use App\Http\Requests\UpdateIncidentRecordRequest;

class IncidentRecordController extends Controller
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
        return view('student.dairy.Incident-Record.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIncidentRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncidentRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function show(IncidentRecord $incidentRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(IncidentRecord $incidentRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncidentRecordRequest  $request
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncidentRecordRequest $request, IncidentRecord $incidentRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncidentRecord $incidentRecord)
    {
        //
    }
}
