<?php

namespace App\Http\Controllers;

use App\Models\CareNeedPart1;
use App\Http\Requests\StoreCareNeedPart1Request;
use App\Http\Requests\UpdateCareNeedPart1Request;

class CareNeedPart1Controller extends Controller
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
        ];
        return view('pre_admission.care-need-part1.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareNeedPart1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareNeedPart1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareNeedPart1  $careNeedPart1
     * @return \Illuminate\Http\Response
     */
    public function show(CareNeedPart1 $careNeedPart1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareNeedPart1  $careNeedPart1
     * @return \Illuminate\Http\Response
     */
    public function edit(CareNeedPart1 $careNeedPart1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareNeedPart1Request  $request
     * @param  \App\Models\CareNeedPart1  $careNeedPart1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareNeedPart1Request $request, CareNeedPart1 $careNeedPart1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareNeedPart1  $careNeedPart1
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareNeedPart1 $careNeedPart1)
    {
        //
    }
}
