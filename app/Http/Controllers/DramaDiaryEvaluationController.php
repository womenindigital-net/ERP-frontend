<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\DramaDiaryEvaluation;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\DramaDiaryEvaluationRequest;
use App\Repositories\DramaDiaryEvaluationRepository;
use App\Http\Requests\UpdateDramaDiaryEvaluationRequest;

class DramaDiaryEvaluationController extends Controller
{
    private DramaDiaryEvaluationRepository $dramaDiaryRepo;

    public function __construct(DramaDiaryEvaluationRepository $dramaDiaryRepo)
    {
        $this->dramaDiaryRepo = $dramaDiaryRepo;
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
        return view('student.co-curricular.Drama-diary-evaluation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DramaDiaryEvaluationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(DramaDiaryEvaluationRequest $request)
    {
        // $this->dramaDiaryRepo->store($request->validated());
        // return redirect()->back();
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDramaDiaryEvaluationRequest  $request
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDramaDiaryEvaluationRequest $request, DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        //
    }
}
