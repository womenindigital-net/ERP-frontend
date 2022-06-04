<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCaseHistoryRequest;
use App\Http\Requests\UpdateCaseHistoryRequest;
use App\Models\CaseHistory;

class CaseHistoryController extends Controller
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
     * @param  \App\Http\Requests\StoreCaseHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaseHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaseHistory  $caseHistory
     * @return \Illuminate\Http\Response
     */
    public function show(CaseHistory $caseHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaseHistory  $caseHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseHistory $caseHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCaseHistoryRequest  $request
     * @param  \App\Models\CaseHistory  $caseHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaseHistoryRequest $request, CaseHistory $caseHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseHistory  $caseHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseHistory $caseHistory)
    {
        //
    }
}
