<?php

use App\Http\Controllers\CaseHistoryController;
use App\Http\Controllers\StudentController;
use App\Http\Livewire\AppointmentList;
use App\Http\Livewire\CaseHistory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use App\Http\Livewire\StudentIncome\StudentIncome;

Route::group(['prefix' => 'student', 'middleware' => ['auth']], function () {
    Route::resources([
        '' => StudentController::class,
        'case-history' => CaseHistoryController::class,
        //        'another' => \App\Http\Controllers\StudentController::class,
    ]);

    //    Route::get('appointment', [StudentController::class, 'appointment'])->name('student.appointment');
    Route::get('student-income', StudentIncome::class)->name('student.income');
    Route::get('appointment', AppointmentList::class)->name('student.appointment');
//    Route::get('case-history', [StudentController::class, 'caseHistory'])->name('student.case-history');
    Route::get('referral-form', [StudentController::class, 'referralForm'])->name('student.referral-form');
    Route::get('care-needs-form', [StudentController::class, 'careNeedForm'])->name('student.care-need-form');

    Route::get('admission/add-student', [StudentController::class, 'admissionAddStudent'])->name('admission.addStudent');



    Route::get('employment/staff_and_workplace_inspecation_tool', [StudentController::class, 'staffAndWorkplaceInspecationTool'])->name('employment.staff_and_workplace_inspecation_tool');
    Route::get('student/employment/-staff-and_workplace-inspecation-tool', [StudentController::class, 'staffWorkplace'])->name('student.employment.staff_and_workplace_inspecation_tool');

    Route::get('assessment/sensory-checklist-for-child', [StudentController::class, 'sensoryChecklistForChild'])->name('sensory.checklist.for.child');
    Route::get('assessment/social-communication', [StudentController::class, 'socialCommunication'])->name('social.communication');
    Route::get('assessment/occupational-therapy', [StudentController::class, 'occupationalTherapy'])->name('occupational.therapy');
    Route::get('assessment/physiotherapy', [StudentController::class, 'physioTherapy'])->name('physio.therapy');
    Route::get('assessment/executive-function-test', [StudentController::class, 'executiveFunctionTest'])->name('executive.function.test');
    Route::get('assessment/autism-behavior-checklist', [StudentController::class, 'autismBehaviorChecklist'])->name('autism.behavior.checklist');
    Route::get('assessment/functional-communication-assessment', [StudentController::class, 'functionalCommunicationAssessment'])->name('functional.communication.assessment');
    Route::get('assessment/functional_movement_skills', [StudentController::class, 'functionalMovementskill'])->name('assessment.functional_movement_skills');
    Route::get('assessment/sensory-checklist-for-young-adult', [StudentController::class, 'sensoryChecklistForYoungAdult'])->name('sensory.checklist.for.young.adult');
    Route::get('assessment/individual-risk-assessment-form', [StudentController::class, 'individualRiskAssessmentForm'])->name('individual.risk.assessment.form');

    // Route::get('', [StudentController::class, ''])->name('');
    Route::get('student-list', [StudentController::class, 'studentList'])->name('student.list');
    Route::get('dairy/trip-report-form', [StudentController::class, 'tripReportForm'])->name('trip.report.form');
    Route::get('dairy/gym-outing-evaluation', [StudentController::class, 'gymOutingEvaluation'])->name('gym.outing.evaluation');
    Route::get('dairy/ot-assessment', [StudentController::class, 'otAssessment'])->name('ot.assessment');
    Route::get('dairy/incident-record', [StudentController::class, 'incidentRecord'])->name('student.dairy.incident-record');
    Route::get('dairy/medicine-admin', [StudentController::class, 'medicineAdmin'])->name('student.dairy.medicine-admin');

    // Route::get('student-attendence', [StudentController::class, 'studentAttendence'])->name('student.attendence');
    // Route::get('', [StudentController::class, ''])->name('');
    Route::get('assessment/functional_movement_skills', [StudentController::class, 'functionalMovementskill'])->name('assessment.functional_movement_skills');
    Route::get('co-curricular/drama-diary-evaluation', [StudentController::class, 'dramaDiary'])->name('student.co-curricular.drama-diary-evaluation');
    Route::get('accounting/income/student_income', [StudentController::class, 'studentIncome'])->name('accounting.income.student_income');
    Route::get('accounting/income/sale_voucher', [StudentController::class, 'studentSaleVoucher'])->name('accounting.income.sale_voucher');
    Route::get('accounting/income/received_payment', [StudentController::class, 'studentReceivedPayment'])->name('accounting.income.received_payment');
    Route::get('student/co-curricular/drama-diary-evaluation', [StudentController::class, 'dramaDiary'])->name('student.co-curricular.drama-diary-evaluation');
    Route::get('program/assign-task', [StudentController::class, 'assignTask'])->name('program.assign-task');
    Route::get('program/create-itp', [StudentController::class, 'createItp'])->name('program.create-itp');
    Route::get('stock-management/stock_receive', [StudentController::class, 'stockReceive'])->name('stock-management.stock_receive');
    Route::get('stock-management/finished_goods', [StudentController::class, 'finishedGoods'])->name('stock-management.finished_goods');
    Route::get('stock-management/material_callects', [StudentController::class, 'materialCallects'])->name('stock-management.material_callects');
    Route::get('stock-management/stock_transfer', [StudentController::class, 'stockTransfer'])->name('stock-management.stock_transfer');
    Route::get('stock-management/stock_count', [StudentController::class, 'stockCount'])->name('stock-management.stock_count');
    

    
});
