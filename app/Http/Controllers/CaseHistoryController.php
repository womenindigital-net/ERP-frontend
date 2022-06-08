<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaseHistoryRequest;
use App\Http\Requests\UpdateCaseHistoryRequest;
use App\Models\CaseHistory;
use App\Services\CaseHistoryService;

class CaseHistoryController extends Controller
{
    private CaseHistoryService $service;

    public function __construct(CaseHistoryService $service)
    {
        $this->service = $service;
    }

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
     * @param  \App\Http\Requests\CaseHistoryRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CaseHistoryRequest $request)
    {
        $this->service->store($request->validated());
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
