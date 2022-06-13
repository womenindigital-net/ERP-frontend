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
        Schema::create('occupational_therapies', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('candidate_id')->nullable();
            $table->string('separate_home_equipment')->nullable();
            $table->string('communication')->nullable();
            $table->string('left')->nullable();
            $table->string('right')->nullable();
            $table->string('lower_limbs')->nullable();
            $table->string('trunk_or_neck')->nullable();
            $table->string('upper_limbs')->nullable();
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
        Schema::dropIfExists('occupational_therapies');
    }
};
