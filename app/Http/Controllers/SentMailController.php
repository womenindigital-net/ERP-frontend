<?php

namespace App\Http\Controllers;

use App\Models\SentMail;
use App\Http\Requests\StoreSentMailRequest;
use App\Http\Requests\UpdateSentMailRequest;

class SentMailController extends Controller
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
     * @param  \App\Http\Requests\StoreSentMailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSentMailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SentMail  $sentMail
     * @return \Illuminate\Http\Response
     */
    public function show(SentMail $sentMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SentMail  $sentMail
     * @return \Illuminate\Http\Response
     */
    public function edit(SentMail $sentMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSentMailRequest  $request
     * @param  \App\Models\SentMail  $sentMail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSentMailRequest $request, SentMail $sentMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SentMail  $sentMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SentMail $sentMail)
    {
        //
    }
}
