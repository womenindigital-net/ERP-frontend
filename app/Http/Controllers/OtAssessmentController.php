<?php

namespace App\Http\Controllers;

use App\Models\OtAssessment;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\Repositories\OtAssessmentRepository;
use App\Http\Requests\StoreOtAssessmentRequest;
use App\Http\Requests\UpdateOtAssessmentRequest;
use Illuminate\Contracts\Foundation\Application;

class OtAssessmentController extends Controller
{
    private OtAssessmentRepository $otAssessmentRepo;

    public function __construct(OtAssessmentRepository $otAssessmentRepo)
    {
        $this->otAssessmentRepo = $otAssessmentRepo;
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
     * @return Application|Factory|View
     */
    public function create()
    {
       return view('student.dairy.OT-Assessment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOtAssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOtAssessmentRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(OtAssessment $otAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(OtAssessment $otAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOtAssessmentRequest  $request
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOtAssessmentRequest $request, OtAssessment $otAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtAssessment $otAssessment)
    {
        //
    }
}
