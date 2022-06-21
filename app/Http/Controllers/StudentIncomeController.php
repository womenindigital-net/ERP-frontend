<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Traits\CommonListElements;
use App\Http\Requests\StudentIncomeRequest;
use App\Models\StudentIncome;
use App\Repositories\CaseHistoryRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentIncomeRepository;
use App\Repositories\StudentRepository;
use App\Repositories\UserRepository;
use App\Services\CourseService;
use App\Services\StudentIncomeService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class StudentIncomeController extends Controller
{
    use WithPagination, CommonListElements;

    private UserRepository $userRepo;
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    private CourseService $courseService;
    private StudentIncomeRepository $repo;
    private StudentIncomeService $service;

    public function __construct(
        StudentIncomeService $service,
        UserRepository $userRepository,
        ProjectRepository $projectRepository,
        StudentRepository $studentRepository,
        CaseHistoryRepository $caseHistoryRepository,
        StudentIncomeRepository $studentIncomeRepository,
        CourseService $courseService,
    ) {
        $this->userRepo = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
        $this->courseService = $courseService;
        $this->repo = $studentIncomeRepository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
            'courses' => $this->courseService->getFormattedDataAsOptGroup(),
        ];

        return view('accounting.income.student_income', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StudentIncomeRequest $request
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(StudentIncomeRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->back();
        //        dd($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param StudentIncome $studentIncome
     *
     * @return Response
     */
    public function show(StudentIncome $studentIncome): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StudentIncome  $studentIncome
     *
     * @return Application|Factory|View
     */
    public function edit(StudentIncome $studentIncome): View|Factory|Application
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
            'courses' => $this->courseService->getFormattedDataAsOptGroup(),
            'record' => $this->repo->getRelatedData($studentIncome, ['income.project', 'incomeDetails']),
        ];

        return view('accounting.income.student_income_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StudentIncomeRequest $request
     * @param StudentIncome $studentIncome
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function update(StudentIncomeRequest $request, StudentIncome $studentIncome): RedirectResponse
    {
        $this->service->update($studentIncome, $request->validated());

        Session::flash('success');

        return redirect()->route('student-income.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StudentIncome $studentIncome
     *
     * @return Response
     */
    public function destroy(StudentIncome $studentIncome): Response
    {
        $studentIncome->delete();
    }
}
