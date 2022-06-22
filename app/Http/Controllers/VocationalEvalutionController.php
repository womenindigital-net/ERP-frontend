<?php

namespace App\Http\Controllers;

use Livewire\WithPagination;
use App\Models\VocationalEvalution;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Services\VocationalEvaluationService;
use App\Http\Livewire\Traits\CommonListElements;
use App\Http\Requests\StoreVocationalEvalutionRequest;
use App\Http\Requests\UpdateVocationalEvalutionRequest;
use App\Repositories\VocationalEvalutionRepository;
use App\Services\CategoryService;

class VocationalEvalutionController extends Controller
{
    use WithPagination, CommonListElements;

    private StudentRepository $studentRepo;
    private VocationalEvalutionRepository $vocRepo;
    private VocationalEvaluationService $vocService;
    private CategoryService $categoryService;
    public $records;



    public function __construct(StudentRepository $studentRepo, VocationalEvaluationService $vocService, CategoryService $categoryService)
    {
        $this->studentRepo = $studentRepo;
        $this->vocService = $vocService;
        $this->categoryService = $categoryService;
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
            'categories' => $this->categoryService->getFormattedDataAsOptGroup(),
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
    public function show(VocationalEvalution $vocational_evaluation)
    {
        $data = [
            'students' => $this->studentRepo->getData(),
            'categories' => $this->categoryService->getFormattedDataAsOptGroup(),
            'records' => $this->records = $vocational_evaluation,
        ];
        dd($data);
        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
            'courses' => $this->courseService->getFormattedDataAsOptGroup(),
            'record' => $this->vocService->vocRepo->getRelatedData($studentIncome, ['income.project', 'incomeDetails']),
        ];
        return view('student.vocational_evaluation.view', $data);
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
