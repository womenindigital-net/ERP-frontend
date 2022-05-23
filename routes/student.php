<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student', 'middleware' => []], function()
{
    Route::resources([
        '' => StudentController::class,
//        'another' => \App\Http\Controllers\StudentController::class,
    ]);

    Route::get('appointment', [StudentController::class, 'appointment'])->name('student.appointment');
    Route::get('case-history', [StudentController::class, 'caseHistory'])->name('student.case-history');
    Route::get('referral-form', [StudentController::class, 'referralForm'])->name('student.referral-form');
});

