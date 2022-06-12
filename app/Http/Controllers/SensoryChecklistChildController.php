<?php

namespace App\Http\Controllers;

use App\Models\SensoryChecklistChild;
use App\Http\Requests\StoreSensoryChecklistChildRequest;
use App\Http\Requests\UpdateSensoryChecklistChildRequest;

class SensoryChecklistChildController extends Controller
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

        return view('assessment.sensory-checklist-child.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSensoryChecklistChildRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSensoryChecklistChildRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function show(SensoryChecklistChild $sensoryChecklistChild)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function edit(SensoryChecklistChild $sensoryChecklistChild)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSensoryChecklistChildRequest  $request
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSensoryChecklistChildRequest $request, SensoryChecklistChild $sensoryChecklistChild)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensoryChecklistChild $sensoryChecklistChild)
    {
        //
    }
}
