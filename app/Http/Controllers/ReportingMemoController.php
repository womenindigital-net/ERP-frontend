<?php

namespace App\Http\Controllers;

use App\Models\ReportingMemo;
use App\Http\Requests\StoreReportingMemoRequest;
use App\Http\Requests\UpdateReportingMemoRequest;

class ReportingMemoController extends Controller
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
     * @param  \App\Http\Requests\StoreReportingMemoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportingMemoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function show(ReportingMemo $reportingMemo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportingMemo $reportingMemo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportingMemoRequest  $request
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportingMemoRequest $request, ReportingMemo $reportingMemo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportingMemo $reportingMemo)
    {
        //
    }
}
