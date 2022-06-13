<?php

namespace App\Http\Controllers;

use App\Models\OccupationalTherapy;
use App\Http\Requests\OccupationalTherapyRequest;
use App\Http\Requests\UpdateOccupationalTherapyRequest;
use App\Repositories\OccupationalTherapyRepository;

class OccupationalTherapyController extends Controller
{

    private OccupationalTherapyRepository $occupationalRepo;

    public function __construct(OccupationalTherapyRepository $occupationalRepo)
    {
        $this->occupationalRepo = $occupationalRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(OccupationalTherapyRequest $request)
    {
        $this->occupationalRepo->store($request->validated());
        return redirect()->back();
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
