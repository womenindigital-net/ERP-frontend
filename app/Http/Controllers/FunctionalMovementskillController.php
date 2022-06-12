<?php

namespace App\Http\Controllers;

use App\Models\FunctionalMovementskill;
use App\Http\Requests\StoreFunctionalMovementskillRequest;
use App\Http\Requests\UpdateFunctionalMovementskillRequest;

class FunctionalMovementskillController extends Controller
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

        return view('assessment.functional-movement-skill.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFunctionalMovementskillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFunctionalMovementskillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionalMovementskill $functionalMovementskill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function edit(FunctionalMovementskill $functionalMovementskill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunctionalMovementskillRequest  $request
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFunctionalMovementskillRequest $request, FunctionalMovementskill $functionalMovementskill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunctionalMovementskill $functionalMovementskill)
    {
        //
    }
}
