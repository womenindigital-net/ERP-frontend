<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentIncomeRequest;
use App\Http\Requests\UpdateStudentIncomeRequest;
use App\Models\StudentIncome;

class StudentIncomeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentIncomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentIncomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentIncome  $studentIncome
     * @return \Illuminate\Http\Response
     */
    public function show(StudentIncome $studentIncome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentIncome  $studentIncome
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentIncome $studentIncome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentIncomeRequest  $request
     * @param  \App\Models\StudentIncome  $studentIncome
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentIncomeRequest $request, StudentIncome $studentIncome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentIncome  $studentIncome
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentIncome $studentIncome)
    {
        //
    }
}
