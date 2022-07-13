<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ChequeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockOutController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\SaleVoucherController;
use App\Http\Controllers\StockAssignController;
use App\Http\Controllers\FinishedGoodController;
use App\Http\Controllers\StockReceiveController;
use App\Http\Controllers\DirectPaymentController;
use App\Http\Controllers\StockTransferController;
use App\Http\Controllers\StudentIncomeController;
use App\Http\Controllers\SupplierPaymentController;
use App\Http\Controllers\MaterialCollectionController;
use App\Http\Controllers\PurchaseReturnController;

Route::group(['prefix' => 'account', 'middleware' => ['auth']], function () {
    Route::resources([
        'journal' => JournalController::class,
        'student-income' => StudentIncomeController::class,
        'sale-voucher' => SaleVoucherController::class,
        'donation-and-other' => DonationController::class,

        'requisition' => RequisitionController::class,
        'supplier-payment' => SupplierPaymentController::class,
        'direct-payment' => DirectPaymentController::class,

        'stock-receive' => StockReceiveController::class,
        'finished-goods' => FinishedGoodController::class,
        'material-collect' => MaterialCollectionController::class,
        'stock-transfer' => StockTransferController::class,

        'stock-assign' => StockAssignController::class,
        'stock-out' => StockOutController::class,

        'cheque' => ChequeController::class,
        'bank-account' => BankAccountController::class,

        'purchase-return' => PurchaseReturnController::class,

    ]);



    // direct Payment route Start
    Route::get('account/direct-payment/cash-payment-list', [DirectPaymentController::class, 'cashPaymentList'])->name('cash-payment.list');
    // direct Payment route End


    Route::get('journal-toggle/{journal}', [JournalController::class, 'toggleApprove'])->name('journal.toggleApprove');

    //    Route::get('journal', [JournalController::class, 'index'])->name('journal');
    //    Route::get('sale-voucher', [SaleController::class, 'index'])->name('sale-voucher');
    //    Route::get('donation-and-other', [\App\Http\Controllers\DonationController::class, 'create'])->name('donation-and-other');

    //    Route::get('requisition', [PaymentController::class, 'requisition'])->name('requisition');
    //    Route::get('purchase-order', [PurchaseController::class, 'purchaseOrder'])->name('purchase-order');

    Route::get('purchase-order/requisition/{requisition?}', [PurchaseController::class, 'create'])->name('purchase-order.create');
    Route::get('purchase-order/{requisition}', [PurchaseController::class, 'show'])->name('purchase-order.show');
    Route::post('purchase-order/requisition/{requisition}/store', [PurchaseController::class, 'store'])->name('purchase-order.store');
    Route::get('purchase-order/{purchase_order}/requisition/{requisition}/edit', [PurchaseController::class, 'edit'])->name('purchase-order.edit');
    Route::put('purchase-order/{purchase_order}/requisition/{requisition}/update', [PurchaseController::class, 'update'])->name('purchase-order.update');
    Route::delete('purchase-order/{purchase}/delete', [PurchaseController::class, 'destroy'])->name('purchase-order.delete');
    Route::get('purchase-order-return/{purchase}', [PurchaseController::class, 'purchaseReturn'])->name('purchase-order.return');
    Route::get('purchase-order-return', [PurchaseController::class, 'purchaseReturnShow'])->name('purchase-order.return.show');



    // Route::get('purchase-return', [PurchaseController::class, 'purchaseReturn'])->name('purchase-return');

    // Route::get('payment-supplier', [PaymentController::class, 'supplier'])->name('payment-supplier');
    // Route::get('direct-payment-add', [PaymentController::class, 'directPaymentAdd'])->name('direct-payment-add');
    Route::get('cash-payment-list', [PaymentController::class, 'casePaymentList'])->name('cash-payment-list');
    Route::get('advance-payment-list', [PaymentController::class, 'advancePaymentList'])->name('advance.payment.list');
    Route::get('bank-to-bank-list', [PaymentController::class, 'bankToBankList'])->name('bank.to.bank.list');

    // Route::get('stock-receive', [StockController::class, 'stockReceive'])->name('stock-receive');
    // Route::get('finished-goods', [StockController::class, 'finishedGoods'])->name('finished-goods');
    // Route::get('material-collect', [StockController::class, 'materialCollect'])->name('material-collect');
    // Route::get('stock-transfer', [StockController::class, 'stockTransfer'])->name('stock-transfer');
    Route::get('stock-count', [StockController::class, 'stockCount'])->name('stock-count');

    // Route::get('stock-out', [StockController::class, 'stockOut'])->name('stock-out');
    Route::get('stock-hand-report', [StockController::class, 'stockHandReport'])->name('stock-hand-report');
    Route::get('stock-product-report', [StockController::class, 'stockProductReport'])->name('stock-product-report');
    Route::get('stock-reorder-report', [StockController::class, 'stockReorderReport'])->name('stock-reorder-report');
    Route::get('product-analysis-report', [StockController::class, 'stockProductAnalysisReport'])->name('product-analysis-report');
    //    Route::get('stock-assign', [StockController::class, 'stockAssign'])->name('stock-assign');

    // Reporting
    Route::get('accounting.reporting.trail-balance.create', [PaymentController::class, 'trailBalance'])->name('accounting.reporting.trail-balance.create');
    Route::get('accounting.reporting.p&l-statement.create',[PaymentController::class, 'plStatement'])->name('accounting.reporting.p&l-statement.create');
    Route::get('accounting.reporting.balance-sheet.create',[PaymentController::class,'balanceSheet'])->name('accounting.reporting.balance-sheet.create');

});
