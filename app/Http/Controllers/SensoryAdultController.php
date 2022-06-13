<?php

namespace App\Http\Controllers;

use App\Models\SensoryAdult;
use App\Http\Requests\SensoryAdultRequest;
use App\Http\Requests\UpdateSensoryAdultRequest;
use App\Repositories\SensoryChecklistAdultRepository;

class SensoryAdultController extends Controller
{

    private SensoryChecklistAdultRepository $sensoryAdultRepo;

    public function __construct(SensoryChecklistAdultRepository $sensoryAdultRepo)
    {
        $this->sensoryAdultRepo = $sensoryAdultRepo;
    }

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
     * @param  \App\Http\Requests\SensoryAdultRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SensoryAdultRequest $request)
    {
        $this->sensoryAdultRepo->store($request->validated());
        return redirect()->back();
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
