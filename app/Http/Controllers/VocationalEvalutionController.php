<?php

namespace App\Http\Controllers;

use App\Models\VocationalEvalution;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreVocationalEvalutionRequest;
use App\Http\Requests\UpdateVocationalEvalutionRequest;
use App\Services\VocationalEvaluationService;

class VocationalEvalutionController extends Controller
{
    private StudentRepository $studentRepo;
    private VocationalEvaluationService $vocService;

    public function __construct(StudentRepository $studentRepo, VocationalEvaluationService $vocService)
    {
        $this->studentRepo = $studentRepo;
        $this->vocService = $vocService;
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
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.vocational_evaluation.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVocationalEvalutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVocationalEvalutionRequest $request)
    {
        $this->vocService->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VocationalEvalution  $vocationalEvalution
     * @return \Illuminate\Http\Response
     */
    public function show(VocationalEvalution $vocationalEvalution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VocationalEvalution  $vocationalEvalution
     * @return \Illuminate\Http\Response
     */
    public function edit(VocationalEvalution $vocationalEvalution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVocationalEvalutionRequest  $request
     * @param  \App\Models\VocationalEvalution  $vocationalEvalution
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVocationalEvalutionRequest $request, VocationalEvalution $vocationalEvalution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VocationalEvalution  $vocationalEvalution
     * @return \Illuminate\Http\Response
     */
    public function destroy(VocationalEvalution $vocationalEvalution)
    {
        //
    }
}
