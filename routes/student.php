<?php

use App\Http\Controllers\StudentController;
use App\Http\Livewire\AppointmentList;
use App\Http\Livewire\StudentIncome\StudentIncome;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student', 'middleware' => []], function () {
    Route::resources([
        '' => StudentController::class,
        //        'another' => \App\Http\Controllers\StudentController::class,
    ]);

    // Route::get('appointment', [StudentController::class, 'appointment'])->name('student.appointment');
    // Route::get('student-income', [StudentController::class, 'studentIncome'])->name('student.income');
    Route::get('appointment', AppointmentList::class)->name('student.appointment');
    Route::get('student-income', StudentIncome::class)->name('student.income');
    Route::get('case-history', [StudentController::class, 'caseHistory'])->name('student.case-history');
    Route::get('referral-form', [StudentController::class, 'referralForm'])->name('student.referral-form');
    Route::get('care-needs-form', [StudentController::class, 'careNeedForm'])->name('student.care-need-form');
});
