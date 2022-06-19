<?php

namespace App\Http\Controllers;

use App\Models\AssignTask;
use App\Http\Requests\StoreAssignTaskRequest;
use App\Http\Requests\UpdateAssignTaskRequest;

class AssignTaskController extends Controller
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
        

        return view('program.assign-task.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function show(AssignTask $assignTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignTask $assignTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignTaskRequest  $request
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAssignTaskRequest $request, AssignTask $assignTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignTask $assignTask)
    {
        //
    }
}
