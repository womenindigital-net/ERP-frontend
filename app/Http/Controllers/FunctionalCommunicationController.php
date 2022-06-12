<?php

namespace App\Http\Controllers;

use App\Models\FunctionalCommunication;
use App\Http\Requests\StoreFunctionalCommunicationRequest;
use App\Http\Requests\UpdateFunctionalCommunicationRequest;

class FunctionalCommunicationController extends Controller
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

        return view('assessment.functional-communication.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFunctionalCommunicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFunctionalCommunicationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionalCommunication $functionalCommunication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function edit(FunctionalCommunication $functionalCommunication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunctionalCommunicationRequest  $request
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFunctionalCommunicationRequest $request, FunctionalCommunication $functionalCommunication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunctionalCommunication  $functionalCommunication
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunctionalCommunication $functionalCommunication)
    {
        //
    }
}
