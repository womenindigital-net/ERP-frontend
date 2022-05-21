<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student', 'middleware' => []], function()
{
    Route::resources([
        '' => \App\Http\Controllers\StudentController::class,
//        'another' => \App\Http\Controllers\StudentController::class,
    ]);

    /*Route::get('', function ()
    {
        dd(2);
    })->name('abc');*/
});

