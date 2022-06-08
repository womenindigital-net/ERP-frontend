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
    
}
