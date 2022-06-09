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
    // Vendor List   
    Route::get('vendor-list/supplier-setup', [SetupController::class, 'supplierSetup'])->name('setup.vendor-list.supplier-setup');
    Route::get('vendor-list/supplier-type-setup', [SetupController::class, 'supplierTypeSetup'])->name('setup.vendor-list.supplier-type-setup');
    // Customer List 
    Route::get('customers-list/customer-reg', [SetupController::class, 'customerReg'])->name('setup.customers-list.customer-reg');
    // Course and Admission
    Route::get('course-and-admission', [SetupController::class, 'courseAdmission'])->name('setup.course-and-admission');

    // Vocational Marking 
    Route::get('vocational-marking-category', [SetupController::class, 'markingCategory'])->name('setup.vocational-marking-category');
    Route::get('vocational-marking-subcategory', [SetupController::class, 'markingSubcategory'])->name('setup.vocational-marking-subcategory');
    Route::get('vocational-student-evolution', [SetupController::class, 'studentEvolution'])->name('setup.vocational-student-evolution');
    // HR & Admin Links 
    Route::get('employee-information', [SetupController::class, 'employeeInformation'])->name('setup.employee-information');
    Route::get('attendance-policy-setupy', [SetupController::class, 'attendeanceSetup'])->name('setup.attendance-policy-setup');
    Route::get('leave-type', [SetupController::class, 'leaveTypeSetup'])->name('setup.leave-type');
    Route::get('leave-package', [SetupController::class, 'leavePackageSetup'])->name('setup.leave-package');
    Route::get('create-product', [SetupController::class, 'createProduct'])->name('setup.create-product');
    // Accounting Mapping 
    Route::get('accounting-mapping.account_mapping', [SetupController::class, 'accountMappingSetup'])->name('setup.accounting-mapping.account_mapping');
    Route::get('accounting-mapping.accounting_year_setup', [SetupController::class, 'accountingYearSetup'])->name('setup.accounting-mapping.accounting_year_setup');
    Route::get('accounting-mapping.closing_account_setup', [SetupController::class, 'clossingAccountSetup'])->name('setup.accounting-mapping.closing_account_setup');
 




    
});
