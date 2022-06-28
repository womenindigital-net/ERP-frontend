<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Purchase::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Supplier::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\RequisitionDetail::class)->constrained()->cascadeOnDelete();
            $table->integer('stock_qty')->nullable();
            $table->integer('from_stock_qty')->nullable();
            $table->integer('purchase_qty')->nullable();
            $table->double('vat', 4, 2)->nullable();
            $table->double('sub_total', 4, 2)->nullable();
            $table->boolean('is_paid', 4, 2)->nullable();
            $table->string('exp_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_details');
    }
};
