<?php

namespace App\Http\Controllers;

use App\Models\DramaDiaryEvaluation;
use App\Http\Requests\StoreDramaDiaryEvaluationRequest;
use App\Http\Requests\UpdateDramaDiaryEvaluationRequest;

class DramaDiaryEvaluationController extends Controller
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
        return view('student.co-curricular.Drama-diary-evaluation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDramaDiaryEvaluationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDramaDiaryEvaluationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDramaDiaryEvaluationRequest  $request
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDramaDiaryEvaluationRequest $request, DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }
}
