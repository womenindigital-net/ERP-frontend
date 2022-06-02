<?php

use App\Http\Controllers\StudentController;
use App\Http\Livewire\AppointmentList;
use App\Http\Livewire\CaseHistory;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student', 'middleware' => ['auth']], function () {
    Route::resources([
        '' => StudentController::class,
        //        'another' => \App\Http\Controllers\StudentController::class,
    ]);

//    Route::get('appointment', [StudentController::class, 'appointment'])->name('student.appointment');
    Route::get('student-income', [StudentController::class, 'studentIncome'])->name('student.income');
    Route::get('appointment', AppointmentList::class)->name('student.appointment');
    Route::get('case-history', CaseHistory::class)->name('student.case-history');
    Route::get('referral-form', [StudentController::class, 'referralForm'])->name('student.referral-form');
    Route::get('care-needs-form', [StudentController::class, 'careNeedForm'])->name('student.care-need-form');
    Route::get('employment/staff_and_workplace_inspecation_tool', [StudentController::class, 'staffAndWorkplaceInspecationTool'])->name('employment.staff_and_workplace_inspecation_tool');

    Route::get('assessment/sensory-checklist-for-child', [StudentController::class, 'sensoryChecklistForChild'])->name('sensory.checklist.for.child');
    Route::get('assessment/social-communication', [StudentController::class, 'socialCommunication'])->name('social.communication');
    Route::get('assessment/occupational-therapy', [StudentController::class, 'occupationalTherapy'])->name('occupational.therapy');
    Route::get('assessment/physiotherapy', [StudentController::class, 'physioTherapy'])->name('physio.therapy');
    Route::get('assessment/executive-function-test', [StudentController::class, 'executiveFunctionTest'])->name('executive.function.test');
    Route::get('assessment/autism-behavior-checklist', [StudentController::class, 'autismBehaviorChecklist'])->name('autism.behavior.checklist');
    Route::get('assessment/functional-communication-assessment', [StudentController::class, 'functionalCommunicationAssessment'])->name('functional.communication.assessment');
    Route::get('assessment/ndividual-risk-assessment-form', [StudentController::class, 'ndividualRiskAssessmentForm'])->name('ndividual.risk.assessment.form');
});
