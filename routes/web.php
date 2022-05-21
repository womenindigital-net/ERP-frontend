<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('user-type/{type}', [UserController::class, 'specificUserType'])->name('users.index');
/*Route::get('/journal', [App\Http\Controllers\HomeController::class, 'journal'])->name('journal');
Route::get('/approved_journals_list', [App\Http\Controllers\HomeController::class, 'approvedJournal'])->name('approved.journal');
Route::get('/student_income', [App\Http\Controllers\HomeController::class, 'studentIncome'])->name('student.income');
Route::get('/student_receivable', [App\Http\Controllers\HomeController::class, 'studentReceivable'])->name('student.receivable');
Route::get('/received_payment', [App\Http\Controllers\HomeController::class, 'receivedPayment'])->name('received.payment');
Route::get('/sale_voucher', [App\Http\Controllers\HomeController::class, 'saleVoucher'])->name('sale.voucher');
Route::get('/requisition', [App\Http\Controllers\HomeController::class, 'requisition'])->name('requisition');
Route::get('/purchase_order', [App\Http\Controllers\HomeController::class, 'purchaseOrder'])->name('purchase.order');
Route::get('/purchase_return', [App\Http\Controllers\HomeController::class, 'purchaseReturn'])->name('purchase.return');
Route::get('/supplier_payment', [App\Http\Controllers\HomeController::class, 'supplierPayment'])->name('supplier.payment');
Route::get('/direct_payment', [App\Http\Controllers\HomeController::class, 'directPayment'])->name('direct.payment');

// Inventory management
Route::get('/stock_assign', [App\Http\Controllers\HomeController::class, 'stockAssign'])->name('stock.assign');
Route::get('/stock_out', [App\Http\Controllers\HomeController::class, 'stockOut'])->name('stock.out');
Route::get('/stock_hand_report', [App\Http\Controllers\HomeController::class, 'stockHandReport'])->name('stock.hand.report');
Route::get('/location_wise_product_report', [App\Http\Controllers\HomeController::class, 'locationWiseProductReport'])->name('location.wise.product.report');
Route::get('/stock_reorder_report', [App\Http\Controllers\HomeController::class, 'stockReorderReport'])->name('stock.reorder.report');
Route::get('/product_analysis_report', [App\Http\Controllers\HomeController::class, 'stockAnalysisReport'])->name('product.analysis.report');

// Stock management Route
Route::get('/stock_recive', [App\Http\Controllers\HomeController::class, 'stockRecive'])->name('stock.recive');
Route::get('/finished_goods', [App\Http\Controllers\HomeController::class, 'finishedGoods'])->name('finished.goods');
Route::get('/material_callects', [App\Http\Controllers\HomeController::class, 'materialCallects'])->name('material.Callects');
Route::get('/stock_transfer', [App\Http\Controllers\HomeController::class, 'stockTransfer'])->name('stock.transfer');
Route::get('/stock_count', [App\Http\Controllers\HomeController::class, 'stockCount'])->name('stock.count');


// Settings Setup
// Route::get('settings/company-setup', [App\Http\Controllers\HomeController::class, 'companySetup']);

// program modual

Route::get('/my_students', [App\Http\Controllers\HomeController::class, 'myStudents'])->name('my.students');





//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);*/

