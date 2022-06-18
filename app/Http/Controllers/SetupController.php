<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function warehouseSetup()
    {
        return view('setup.store-management.warehouse_setup');
    }
    public function measureUnitSetup()
    {
        return view('setup.store-management.measure-unit');
    }
    public function productCategorySetup()
    {
        return view('setup.store-management.product-category');
    }
    public function productCreate()
    {
        return view('setup.store-management.product_setup');
    }
    public function academicCalender()
    {
        return view('setup.program-setup.academic-calender-create');
    }
    public function attendenceCardSetup()
    {
        return view('setup.program-setup.attendence-card-setup');
    }
    public function teskCreate()
    {
        return view('setup.program-setup.tesk-create');
    }
    public function vocationalSetup()
    {
        return view('setup.program-setup.vocational-category-subcategory-setup');
    }
    public function presCription()
    {
        return view('setup.program-setup.prescription');
    }
    public function activityCreate()
    {
        return view('setup.program-setup.activity-create');
    }
    public function taskWeightSetup()
    {
        return view('setup.program-setup.tesk-weight-setup');
    }
    public function courseSetup()
    {
        return view('setup.program-setup.course-setup');
    }
    public function companySetup()
    {
        $data = [
            // 'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => []
        ];
        return view('setup.company-setup.create', $data);
    }
    public function projectSetup()
    {
        return view('setup.project-setup.project-setup');
    }
    public function doctorSetup()
    {
        return view('setup.doctor-setup');
    }
    public function chartAccountSetup()
    {
        return view('setup.chart-of-accounts');
    }
    public function accountDetailsSetup()
    {
        return view('setup.account-details');
    }
    public function manageChequebook()
    {
        return view('setup.manage-chequebook');
    }
    public function bankReconcilationNew()
    {
        return view('setup.bank-reconcilation-new');
    }
    public function bankReconcilation()
    {
        return view('setup.bank-reconcilation');
    }
    public function salaryGradeSetup()
    {
        return view('setup.payroll-management.salary_grade_setup');
    }
    public function salaryStepSetup()
    {
        return view('setup.payroll-management.salary_step_setup');
    }
    public function salaryHeadSetup()
    {
        return view('setup.payroll-management.salary_head_setup');
    }
    public function salaryPackageSetup()
    {
        return view('setup.payroll-management.salary_package_setup');
    }
    public function salaryBudgetSetup()
    {
        return view('setup.payroll-management.salary_budget_setup');
    }
    public function supplierSetup()
    {
        return view('setup.vendor-list.supplier-setup');
    }
    public function supplierTypeSetup()
    {
        return view('setup.vendor-list.supplier-type-setup');
    }
    public function customerReg()
    {
        return view('setup.customers-list.customer-reg');
    }
    public function courseAdmission()
    {
        return view('setup.course-and-admission');
    }
    public function markingCategory()
    {
        return view('setup.vocational-marking-category');
    }
    public function markingSubcategory()
    {
        return view('setup.vocational-marking-subcategory');
    }
    public function studentEvolution()
    {
        return view('setup.vocational-student-evolution');
    }
    public function employeeInformation()
    {
        return view('setup.employee-information');
    }
    public function attendeanceSetup()
    {
        return view('setup.attendance-policy-setup');
    }
    public function leaveTypeSetup()
    {
        return view('setup.leave-type');
    }
    public function leavePackageSetup()
    {
        return view('setup.leave-package');
    }
    public function createProduct()
    {
        return view('setup.create-product');
    }
    public function accountMappingSetup()
    {
        return view('setup.accounting-mapping.account_mapping');
    }
    public function accountingYearSetup()
    {
        return view('setup.accounting-mapping.accounting_year_setup');
    }
    public function clossingAccountSetup()
    {
        return view('setup.accounting-mapping.closing_account_setup');
    }
    public function budgetYearSetup()
    {
        return view('setup.budget-year-setup');
    }
    public function budgetHeadSetup()
    {
        return view('setup.budget-head-setup');
    }
    public function budgetTemplateSetup()
    {
        return view('setup.Budget-Template-setup');
    }
    public function budgetReviewSetup()
    {
        return view('setup.budget-review');
    }
    public function yearEnd()
    {
        return view('setup.year-end-close.year_end_stock_count');
    }
    public function otherUser()
    {
        return view('setup.other-settings.user');
    }
    public function academicCalendar()
    {
        return view('setup.other-settings.academic_calendar');
    }
    public function taskWeight()
    {
        return view('setup.other-settings.task_weight_setting');
    }
    public function userPermission()
    {
        return view('setup.other-settings.user_permission_setup');
    }

}            

