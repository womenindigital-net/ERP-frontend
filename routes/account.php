<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleVoucherController;
use App\Http\Controllers\StockAssignController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'account', 'middleware' => ['auth']], function () {
    Route::resources([
        'journal' => JournalController::class,
        'sale-voucher' => SaleVoucherController::class,
        'donation-and-other' => DonationController::class,
        'requisition' => RequisitionController::class,
        'stock-assign' => StockAssignController::class,
    ]);

    Route::get('journal-toggle/{journal}', [JournalController::class, 'toggleApprove'])->name('journal.toggleApprove');

    //    Route::get('journal', [JournalController::class, 'index'])->name('journal');
    //    Route::get('sale-voucher', [SaleController::class, 'index'])->name('sale-voucher');
    //    Route::get('donation-and-other', [\App\Http\Controllers\DonationController::class, 'create'])->name('donation-and-other');

    //    Route::get('requisition', [PaymentController::class, 'requisition'])->name('requisition');
    Route::get('purchase-order', [PurchaseController::class, 'purchaseOrder'])->name('purchase-order');
    Route::get('purchase-return', [PurchaseController::class, 'purchaseReturn'])->name('purchase-return');

    Route::get('payment-supplier', [PaymentController::class, 'supplier'])->name('payment-supplier');
    Route::get('direct-payment-add', [PaymentController::class, 'directPaymentAdd'])->name('direct-payment-add');
    Route::get('cash-payment-list', [PaymentController::class, 'casePaymentList'])->name('cash-payment-list');
    Route::get('advance-payment-list', [PaymentController::class, 'advancePaymentList'])->name('advance.payment.list');
    Route::get('bank-to-bank-list', [PaymentController::class, 'bankToBankList'])->name('bank.to.bank.list');

    Route::get('stock-receive', [StockController::class, 'stockReceive'])->name('stock-receive');
    Route::get('finished-goods', [StockController::class, 'finishedGoods'])->name('finished-goods');
    Route::get('material-collect', [StockController::class, 'materialCollect'])->name('material-collect');
    Route::get('stock-transfer', [StockController::class, 'stockTransfer'])->name('stock-transfer');
    Route::get('stock-count', [StockController::class, 'stockCount'])->name('stock-count');

    Route::get('stock-out', [StockController::class, 'stockOut'])->name('stock-out');
    Route::get('stock-hand-report', [StockController::class, 'stockHandReport'])->name('stock-hand-report');
    Route::get('stock-product-report', [StockController::class, 'stockProductReport'])->name('stock-product-report');
    Route::get('stock-reorder-report', [StockController::class, 'stockReorderReport'])->name('stock-reorder-report');
    Route::get('product-analysis-report', [StockController::class, 'stockProductAnalysisReport'])->name('product-analysis-report');

    //    Route::get('stock-assign', [StockController::class, 'stockAssign'])->name('stock-assign');
});
