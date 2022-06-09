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
        return view('setup.company-setup.company-setup');
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
    
    
}
