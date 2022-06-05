<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'account', 'middleware' => []], function () {
    Route::get('journal', [JournalController::class, 'index'])->name('journal');
    Route::get('sale-voucher', [SaleController::class, 'index'])->name('sale-voucher');
    Route::get('donation-and-other', [IncomeController::class, 'donationAndOther'])->name('donation-and-other');

    Route::get('requisition', [PaymentController::class, 'requisition'])->name('requisition');
    Route::get('purchase-order', [\App\Http\Controllers\PurchaseController::class, 'purchaseOrder'])->name('purchase-order');
    Route::get('purchase-return', [\App\Http\Controllers\PurchaseController::class, 'purchaseReturn'])->name('purchase-return');

    Route::get('payment-supplier', [\App\Http\Controllers\PaymentController::class, 'supplier'])->name('payment-supplier');
    Route::get('direct-payment-add', [\App\Http\Controllers\PaymentController::class, 'directPaymentAdd'])->name('direct-payment-add');
    Route::get('cash-payment-list', [\App\Http\Controllers\PaymentController::class, 'casePaymentList'])->name('cash-payment-list');
    Route::get('advance-payment-list', [\App\Http\Controllers\PaymentController::class, 'advancePaymentList'])->name('advance.payment.list');
    Route::get('bank-to-bank-list', [\App\Http\Controllers\PaymentController::class, 'bankToBankList'])->name('bank.to.bank.list');

    Route::get('stock-receive', [\App\Http\Controllers\StockController::class, 'stockReceive'])->name('stock-receive');
    Route::get('finished-goods', [\App\Http\Controllers\StockController::class, 'finishedGoods'])->name('finished-goods');
    Route::get('material-collect', [\App\Http\Controllers\StockController::class, 'materialCollect'])->name('material-collect');
    Route::get('stock-transfer', [\App\Http\Controllers\StockController::class, 'stockTransfer'])->name('stock-transfer');
    Route::get('stock-count', [\App\Http\Controllers\StockController::class, 'stockCount'])->name('stock-count');

    Route::get('stock-out', [\App\Http\Controllers\StockController::class, 'stockOut'])->name('stock-out');
    Route::get('stock-hand-report', [\App\Http\Controllers\StockController::class, 'stockHandReport'])->name('stock-hand-report');
    Route::get('stock-product-report', [\App\Http\Controllers\StockController::class, 'stockProductReport'])->name('stock-product-report');
    Route::get('stock-reorder-report', [\App\Http\Controllers\StockController::class, 'stockReorderReport'])->name('stock-reorder-report');
    Route::get('product-analysis-report', [\App\Http\Controllers\StockController::class, 'stockProductAnalysisReport'])->name('product-analysis-report');

    Route::get('stock-assign', [\App\Http\Controllers\StockController::class, 'stockAssign'])->name('stock-assign');
});
