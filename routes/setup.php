<?php

use App\Http\Controllers\SetupController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'setup', 'middleware' => ['auth']], function () {
    // Setup ->> Store Management Route
    Route::get('warehouse-setup', [SetupController::class, 'warehouseSetup'])->name('warehouse.setup');
    Route::get('measure-unit-setup', [SetupController::class, 'measureUnitSetup'])->name('measure.unit.setup');
    Route::get('product-category-setup', [SetupController::class, 'productCategorySetup'])->name('product.category.setup');
    Route::get('product-create', [SetupController::class, 'productCreate'])->name('product.create');
    // Setup ->> Store Management Route
    // Setup->> Program Setup 
    Route::get('program-setup/tesk-create', [SetupController::class, 'teskCreate'])->name('setup.program-setup.tesk-create');
    Route::get('program-setup/prescription', [SetupController::class, 'presCription'])->name('setup.program-setup.prescription');
    Route::get('program-setup/tesk-weight-setup', [SetupController::class, 'taskWeightSetup'])->name('setup.program-setup.tesk-weight-setup');
    Route::get('program-setup/activity-create', [SetupController::class, 'activityCreate'])->name('setup.program-setup.activity-create');
    Route::get('program-setup/course-setup', [SetupController::class, 'courseSetup'])->name('setup.program-setup.course-setup');
    Route::get('program-setup/vocational-category-subcategory-setup', [SetupController::class, 'vocationalSetup'])->name('setup.program-setup.vocational-category-subcategory-setup');
    Route::get('program-setup/academic-calender-create', [SetupController::class, 'academicCalender'])->name('setup.program-setup.academic-calender-create');
    Route::get('program-setup/attendence-card-setup', [SetupController::class, 'attendenceCardSetup'])->name('setup.program-setup.attendence-card-setup');
    // Setup->> Program Setup
    // setup ->> Company Setup
    Route::get('company-setup/company-setup', [SetupController::class, 'companySetup'])->name('setup.company-setup.company-setup');
    //setup ->> project setup 
    Route::get('project-setup/project-setup', [SetupController::class, 'projectSetup'])->name('setup.project-setup.project-setup');
    //setup ->> Doctor setup
    Route::get('doctor-setup', [SetupController::class, 'doctorSetup'])->name('setup.doctor-setup');
    // account setup 
    Route::get('chart-of-accounts', [SetupController::class, 'chartAccountSetup'])->name('setup.chart-of-accounts');
    // bank details setup 
    Route::get('account-details', [SetupController::class, 'accountDetailsSetup'])->name('setup.account-details');
    Route::get('manage-chequebook', [SetupController::class, 'manageChequebook'])->name('setup.manage-chequebook');
    // bank reconcilation 
    Route::get('bank-reconcilation-new', [SetupController::class, 'bankReconcilationNew'])->name('setup.bank-reconcilation-new');
    Route::get('bank-reconcilation', [SetupController::class, 'bankReconcilation'])->name('setup.bank-reconcilation');
    // Payroll Management setup 
    Route::get('payroll-management/salary_grade_setup', [SetupController::class, 'salaryGradeSetup'])->name('setup.payroll-management.salary_grade_setup');
    Route::get('payroll-management/salary_step_setup', [SetupController::class, 'salaryStepSetup'])->name('setup.payroll-management.salary_step_setup');
    Route::get('payroll-management/salary_head_setup', [SetupController::class, 'salaryHeadSetup'])->name('setup.payroll-management.salary_head_setup');
    Route::get('payroll-management/salary_package_setup', [SetupController::class, 'salaryPackageSetup'])->name('setup.payroll-management.salary_package_setup');
    Route::get('payroll-management/salary_budget_setup', [SetupController::class, 'salaryBudgetSetup'])->name('setup.payroll-management.salary_budget_setup');


    
});
