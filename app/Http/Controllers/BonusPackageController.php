<?php

namespace App\Http\Controllers;

use App\Models\BonusPackage;
use App\Http\Requests\StoreBonusPackageRequest;
use App\Http\Requests\UpdateBonusPackageRequest;

class BonusPackageController extends Controller
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
     * @param  \App\Http\Requests\StoreBonusPackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBonusPackageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function show(BonusPackage $bonusPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(BonusPackage $bonusPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBonusPackageRequest  $request
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBonusPackageRequest $request, BonusPackage $bonusPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BonusPackage $bonusPackage)
    {
        //
    }
}
