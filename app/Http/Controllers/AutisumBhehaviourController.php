<?php

namespace App\Http\Controllers;

use App\Models\AutisumBhehaviour;
use App\Http\Requests\StoreAutisumBhehaviourRequest;
use Carbon\Factory;
use Illuminate\Console\Application;

class AutisumBhehaviourController extends Controller
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

        return view('assessment.autism-behaviour.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutisumBhehaviourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutisumBhehaviourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function show(AutisumBhehaviour $autisumBhehaviour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function edit(AutisumBhehaviour $autisumBhehaviour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutisumBhehaviourRequest  $request
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutisumBhehaviourRequest $request, AutisumBhehaviour $autisumBhehaviour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutisumBhehaviour $autisumBhehaviour)
    {
        //
    }
}
