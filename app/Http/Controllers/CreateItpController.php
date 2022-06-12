<?php

namespace App\Http\Controllers;

use App\Models\CreateItp;
use App\Http\Requests\StoreCreateItpRequest;
use App\Http\Requests\UpdateCreateItpRequest;

class CreateItpController extends Controller
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
            // 'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => []
        ];

        return view('program.create-itp.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateItpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreateItpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function show(CreateItp $createItp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateItp $createItp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreateItpRequest  $request
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreateItpRequest $request, CreateItp $createItp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateItp $createItp)
    {
        //
    }
}
