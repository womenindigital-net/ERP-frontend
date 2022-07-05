<?php

namespace App\Http\Controllers;

use App\Models\CurrencySetup;
use App\Http\Requests\StoreCurrencySetupRequest;
use App\Http\Requests\UpdateCurrencySetupRequest;

class CurrencySetupController extends Controller
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
     * @param  \App\Http\Requests\StoreCurrencySetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencySetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function show(CurrencySetup $currencySetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrencySetup $currencySetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurrencySetupRequest  $request
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurrencySetupRequest $request, CurrencySetup $currencySetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrencySetup $currencySetup)
    {
        //
    }
}
