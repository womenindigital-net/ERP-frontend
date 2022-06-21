<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Services\CourseService;
use Livewire\WithPagination;
use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\Factory;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Repositories\CaseHistoryRepository;
use App\Http\Livewire\Traits\CommonListElements;
use Illuminate\Contracts\Foundation\Application;

class StudentController extends Controller
{
    use WithPagination, CommonListElements;

    public $record;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    private CourseService $courseService;
    private ProjectRepository $projectRepo;

    public function __construct(
        UserRepository $userRepository,
        ProjectRepository $projectRepository,
        StudentRepository $studentRepository,
        CaseHistoryRepository $caseHistoryRepository,
        CourseService $courseService,
    )
    {
        $this->userRepo = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
        $this->courseService = $courseService;
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
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        return view('student.students.create', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $this->studentRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $data = [
            'record' => $this->record = $student,
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.students.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $data = [
            'record' => $this->record = $student,
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $this->studentRepo->update($student, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

















    public function appointment()
    {
        return view('pre_admission.appointment');
    }

    public function studentIncome()
    {

    }

    /*public function caseHistory(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'records' => $this->caseRepo->getListData($this->perPage, $this->search),
        ];

        return view('case-history', $data);
    }*/

    // public function referralForm(): Factory|View|Application
    // {

    //     return view('referral-form');
    // }

    public function admissionAddStudent(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('admission.add_student', $data);
    }

    public function individualrisk(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.individual_risk_assessment_form', $data);
    }

    public function sensoryChecklistForChild(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.sensory-checklist-for-child', $data);
    }

    public function occupationalTherapy(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.occupational-therapy', $data);
    }

    public function physioTherapy(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.physiotherapy', $data);
    }

    public function executiveFunctionTest(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.executive_function_test', $data);
    }

    public function autismBehaviorChecklist(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.autism_behavior_checklist', $data);
    }

    public function functionalCommunicationAssessment(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.functional_communication_assessment', $data);
    }

    public function sensoryChecklistForYoungAdult(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.sensory_checklist_for_young_adult', $data);
    }

    public function individualRiskAssessmentForm(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.individual_risk_assessment_form', $data);
    }
    // public function staffAndWorkplaceInspecationTool(): Factory|View|Application
    public function incidentRecord(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('student.dairy.incident-record', $data);
    }

    public function medicineAdmin(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.medicine-admin', $data);
    }

    public function functionalMovementskill(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.functional_movement_skills', $data);
    }

    public function studentList(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.student_list', $data);
    }

    public function tripReportForm(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.trip-report-form', $data);
    }

    public function gymOutingEvaluation(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.gym-outing-evalution', $data);
    }

    public function otAssessment(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.ot-assessment', $data);
    }

    public function dramaDiary(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.co-curricular.drama-diary-evaluation', $data);
    }

    public function staffWorkplace(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('student.employment.staff_and_workplace_inspecation_tool', $data);
    }
    // public function studentIncome(): Factory|View|Application
    // {
    //     $data = [
    //         'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
    //     ];
    //     return view('accounting.income.student_income', $data);
    // }
    public function studentSaleVoucher(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('accounting.income.sale_voucher', $data);
    }

    public function studentReceivedPayment(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('accounting.income.received_payment', $data);
    }

    public function assignTask(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('program.assign-task', $data);
    }

    public function createItp(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('program.create-itp', $data);
    }

    public function stockReceive(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.stock_receive', $data);
    }

    public function finishedGoods(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.finished_goods', $data);
    }

    public function materialCallects(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.material_callects', $data);
    }

    public function stockTransfer(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.stock_transfer', $data);
    }

    public function taskCreate(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('setup.program-setup.tesk-create', $data);
    }
}
