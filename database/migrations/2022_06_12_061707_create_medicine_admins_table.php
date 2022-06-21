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
        Schema::create('medicine_admins', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->string('name')->nullable();
            $table->string('prescription_id')->nullable();
            $table->string('given_id')->nullable();
            $table->string('given_date')->nullable();
            $table->string('given_time')->nullable();
            $table->string('medicine')->nullable();
            $table->string('amountGiven')->nullable();
            $table->string('amountgivenunit')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('medicine_admins');
    }
};
