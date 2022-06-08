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
});
