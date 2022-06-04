<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class StudentController extends Controller
{
    private UserRepository $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pre_admission.appointment');
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
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
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
        //
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

    public function caseHistory(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('case-histroy', $data);
    }
    public function referralForm(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('referral-form', $data);
    }
    public function careNeedForm(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('pre_admission.care-needs-form', $data);
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
    public function socialCommunication(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.Social-Communication', $data);
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
    public function individualRiskAssessmentForm(): Factory|View|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('assessment.individual_risk_assessment_form', $data);
    }
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
    public function stockCount(): Factory|View|Application
    {   
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];
        return view('stock-management.stock_count', $data);
    }
}

