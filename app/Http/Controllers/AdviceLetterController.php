<?php

namespace App\Http\Controllers;

use App\Models\AdviceLetter;
use App\Http\Requests\StoreAdviceLetterRequest;
use App\Http\Requests\UpdateAdviceLetterRequest;

class AdviceLetterController extends Controller
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
     * @param  \App\Http\Requests\StoreAdviceLetterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdviceLetterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function show(AdviceLetter $adviceLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(AdviceLetter $adviceLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdviceLetterRequest  $request
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdviceLetterRequest $request, AdviceLetter $adviceLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdviceLetter  $adviceLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdviceLetter $adviceLetter)
    {
        //
    }
}
