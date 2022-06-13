<?php

namespace App\Http\Controllers;

use App\Models\GymAndOuting;
use App\Http\Requests\StoreGymAndOutingRequest;
use App\Http\Requests\UpdateGymAndOutingRequest;

class GymAndOutingController extends Controller
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
       return view('student.dairy.Gym-Outing-Evalution.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGymAndOutingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGymAndOutingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function show(GymAndOuting $gymAndOuting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function edit(GymAndOuting $gymAndOuting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGymAndOutingRequest  $request
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGymAndOutingRequest $request, GymAndOuting $gymAndOuting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GymAndOuting $gymAndOuting)
    {
        //
    }
}