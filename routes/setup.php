<?php

use App\Http\Controllers\SetupController;
use Illuminate\Support\Facades\Route;

// Setup ->> Store Management Route
Route::get('setup/warehouse-setup', [SetupController::class, 'warehouseSetup'])->name('warehouse.setup');
Route::get('setup/measure-unit-setup', [SetupController::class, 'measureUnitSetup'])->name('measure.unit.setup');
Route::get('setup/product-category-setup', [SetupController::class, 'productCategorySetup'])->name('product.category.setup');
Route::get('setup/product-create', [SetupController::class, 'productCreate'])->name('product.create');
// Setup ->> Store Management Route
