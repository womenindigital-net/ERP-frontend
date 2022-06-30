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
    // Recruitment
    Route::get('HR.employee-requisition.create', [HrAdminController::class, 'employeeRequisition'])->name('HR.employee-requisition.create');
    Route::get('HR.apply-for-job.create', [HrAdminController::class, 'applyForJon'])->name('HR.apply-for-job.create');
    // warning notice 
    Route::get('warning-notice.create', [HrAdminController::class, 'warningNotice'])->name('HR.warning-notice.create');
    Route::get('show-case-notice.create', [HrAdminController::class, 'showcaseNotice'])->name('HR.show-case-notice.create');
    Route::get('advice-letter.create', [HrAdminController::class, 'adviceLetter'])->name('HR.advice-letter.create');
    Route::get('employee-leave-status.create', [HrAdminController::class, 'employeeLeave'])->name('HR.employee-leave-status.create');
    Route::get('certificate-setup.create', [HrAdminController::class, 'certificateSetup'])->name('HR.certificate-setup.create');
    Route::get('employee-type.create', [HrAdminController::class, 'employeetypeSetup'])->name('HR.employee-type.create');
    Route::get('department.create', [HrAdminController::class, 'departmentSetup'])->name('HR.department.create');
    Route::get('weekend-package.create', [HrAdminController::class, 'weekendSetup'])->name('HR.weekend-package.create');
    Route::get('facility-package.create', [HrAdminController::class, 'facilityPackage'])->name('HR.facility-package.create');
    Route::get('bonous-package.create', [HrAdminController::class, 'bonousPackage'])->name('HR.bonous-package.create');
    Route::get('currency-setup.create', [HrAdminController::class, 'currencySetup'])->name('HR.currency-setup.create');
    Route::get('result-setup.create', [HrAdminController::class, 'resultSetup'])->name('HR.result-setup.create');
    Route::get('Institute-setup.create', [HrAdminController::class, 'instituteSetup'])->name('HR.Institute-setup.create');
    Route::get('organization-setup.create', [HrAdminController::class, 'organizationSetup'])->name('HR.organization-setup.create');
    Route::get('section-setup.create', [HrAdminController::class, 'sectionSetup'])->name('HR.section-setup.create');
    Route::get('attendence.create', [HrAdminController::class, 'attendenceCreate'])->name('HR.attendence.create');
    Route::get('designation-setup.create', [HrAdminController::class, 'designationSetup'])->name('HR.designation-setup.create');
    Route::get('leave-application.create', [HrAdminController::class, 'leaveApplication'])->name('HR.leave-application.create');
    Route::get('notice-template-setup.create', [HrAdminController::class, 'noticeTemplate'])->name('HR.notice-template-setup.create');
    Route::get('notice-board.create', [HrAdminController::class, 'noticeBoard'])->name('HR.notice-board.create');






});


