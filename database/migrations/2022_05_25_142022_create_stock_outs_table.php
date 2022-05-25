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
        Schema::create('stock_outs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Warehouse::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Project::class)->constrained()->cascadeOnDelete();
            $table->string('issue_type')->nullable();
            $table->foreignIdFor(\App\Models\Warehouse::class, 'warehouse_to')->nullable()->constrained('warehouses')->nullOnDelete();
            $table->foreignIdFor(\App\Models\Warehouse::class, 'warehouse_from')->nullable()->constrained('warehouses')->nullOnDelete();
            $table->string('note')->nullable();
            $table->string('date');
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
        Schema::dropIfExists('stock_outs');
    }
};
