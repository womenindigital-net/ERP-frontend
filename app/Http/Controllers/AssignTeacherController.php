<?php

namespace App\Http\Controllers;

use App\Models\AssignTeacher;
use App\Http\Requests\StoreAssignTeacherRequest;
use App\Http\Requests\UpdateAssignTeacherRequest;

class AssignTeacherController extends Controller
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
        return view('program.assign-teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(AssignTeacher $assignTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignTeacher $assignTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignTeacherRequest  $request
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignTeacherRequest $request, AssignTeacher $assignTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignTeacher $assignTeacher)
    {
        //
    }
}
