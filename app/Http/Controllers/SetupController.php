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
}
