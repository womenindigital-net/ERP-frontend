<?php

use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'candidate_id')->constrained('students')->cascadeOnDelete();
            $table->string('medication_treatment')->nullable();
            $table->string('any_present_medicines')->nullable();
            $table->string('separate_home_equipment')->nullable();
            $table->string('communication')->nullable();
            $table->string('left')->nullable();
            $table->string('right')->nullable();
            $table->string('lower_limbs')->nullable();
            $table->string('trunk_or_neck')->nullable();
            $table->string('trunk_or_neck_left')->nullable();
            $table->string('trunk_or_neck_right')->nullable();
            $table->string('upper_limbs')->nullable();
            $table->string('designation_name')->nullable();
            $table->string('memory')->nullable();
            $table->string('problem_list')->nullable();
            $table->string('treatment_plan')->nullable();
            $table->string('progress')->nullable();
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
