<?php

namespace App\Http\Controllers;

use App\Models\Physiotherapy;
use App\Http\Requests\PhysiotherapyRequest;
use App\Http\Requests\UpdatePhysiotherapyRequest;
use App\Repositories\PhysiotherapyRepository;

class PhysiotherapyController extends Controller
{
    private PhysiotherapyRepository $phyRepo;

    public function __construct(PhysiotherapyRepository $phyRepo)
    {
        $this->phyRepo = $phyRepo;
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
        $data = [
            'students' => []
        ];

        return view('assessment.physiotherapy.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PhysiotherapyRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PhysiotherapyRequest $request)
    {
        $this->phyRepo->store($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function show(Physiotherapy $physiotherapy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function edit(Physiotherapy $physiotherapy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhysiotherapyRequest  $request
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function update(PhysiotherapyRequest $request, Physiotherapy $physiotherapy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physiotherapy $physiotherapy)
    {
        //
    }
}
