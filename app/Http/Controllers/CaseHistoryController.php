<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaseHistoryRequest;
use App\Http\Requests\UpdateCaseHistoryRequest;
use App\Models\CaseHistory;
use App\Repositories\CaseHistoryRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Repositories\UserRepository;
use App\Services\CaseHistoryService;
use App\Utility\ProjectConstants;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class CaseHistoryController extends Controller
{
    private CaseHistoryService $service;
    private UserRepository $userRepo;
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    public $caseHistory;

    public function __construct(CaseHistoryService $service, UserRepository $userRepository, ProjectRepository $projectRepository, StudentRepository $studentRepository, CaseHistoryRepository $caseHistoryRepository)
    {
        $this->service     = $service;
        $this->userRepo    = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo    = $caseHistoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'records' => $this->caseRepo->getListData($perPage = ProjectConstants::DATA_PER_PAGE, $search = ''),
        ];
        // dd($data['caseList']);

        return view('case-history', $data);
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
     * @param \App\Http\Requests\CaseHistoryRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CaseHistoryRequest $request)
    {

        // dd($request->validated()['child_description']);
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->route('case-history.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function show(CaseHistory $caseHistory)
    {
        $data = [
            'caseHistory' => $this->caseHistory = $caseHistory,
        ];
        // dd($data['caseHistory']);
        return view('case-history-view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseHistory $caseHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCaseHistoryRequest $request
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaseHistoryRequest $request, CaseHistory $caseHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseHistory $caseHistory)
    {
        //
    }
}
