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
        Schema::create('bonus_packages', function (Blueprint $table) {
            $table->id();
            $table->string('employeetype_name')->nullable();
            $table->string('type_desc')->nullable();
            $table->string('ammount')->nullable();
            $table->string('sal_id')->nullable();
            $table->string('total_ammount')->nullable();
            $table->string('curnc_id')->nullable();
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
        Schema::dropIfExists('bonus_packages');
    }
};
