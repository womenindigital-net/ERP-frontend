<?php

use App\Http\Controllers\HrAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'hr-admin', 'middleware' => ['auth']], function () {
    Route::resources(['/' => HrAdminController::class]);
    // warning notice 
    Route::get('warning-notice.create', [HrAdminController::class, 'warningNotice'])->name('HR.warning-notice.create');
    Route::get('show-case-notice.create', [HrAdminController::class, 'showcaseNotice'])->name('HR.show-case-notice.create');
    Route::get('advice-letter.create', [HrAdminController::class, 'adviceLetter'])->name('HR.advice-letter.create');
    Route::get('employee-leave-status.create', [HrAdminController::class, 'employeeLeave'])->name('HR.employee-leave-status.create');
    Route::get('certificate-setup.create', [HrAdminController::class, 'certificateSetup'])->name('HR.certificate-setup.create');



});


