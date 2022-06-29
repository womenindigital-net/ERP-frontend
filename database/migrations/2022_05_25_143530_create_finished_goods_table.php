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
        Schema::create('finished_goods', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(\App\Models\MaterialCollection::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Warehouse::class)->constrained()->cascadeOnDelete();
            $table->string('date')->nullable();
            $table->string('note')->nullable();
            $table->string('total_qty')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'created_by')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('finished_goods');
    }
};
