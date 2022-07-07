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
        Schema::create('care_need_part_ones', function (Blueprint $table) {
            $table->id();
             $table->string('collection_date')->nullable();
             $table->string('teacher_id')->nullable();
             $table->string('student_id')->nullable();
             $table->string('from_where_you_learned_about_us')->nullable();
             $table->string('Doctor_physician_under_medical_treatment_name')->nullable();
             $table->string('contact_umber')->nullable();
             $table->string('govt_disability_registration')->nullable();
             $table->string('If_yes_enter_registration_number')->nullable();
             $table->string('suggestion_on_obtaining_registration')->nullable();
             $table->string('referred_to_parents_forum')->nullable();
             $table->string('iss_she_has_utism')->nullable();
             $table->string('is_she_has_down_syndrome')->nullable();
             $table->string('is_she_has_cerebral_palsy')->nullable();
             $table->string('is_she_has_intellectual_disability')->nullable();
             $table->string('is_she_has_dyslexia')->nullable();
             $table->string('is_she_has_learning_disability')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
             $table->string('')->nullable();
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
        Schema::dropIfExists('care_need_part_ones');
    }
};
