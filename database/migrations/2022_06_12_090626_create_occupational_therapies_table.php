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
            $table->json('general')->nullable();
            $table->json('muscle_tone')->nullable();
            $table->json('range_of_movement')->nullable();
            $table->json('functional_gross_motor')->nullable();
            $table->json('transitional_movements')->nullable();
            $table->json('fine_motor_skill')->nullable();
            $table->json('automatic_reaction')->nullable();
            $table->json('sensory_skill')->nullable();
            $table->json('visual_perception')->nullable();
            $table->json('activities_of_daily_living')->nullable();
            $table->json('strength')->nullable();
            $table->json('signature')->nullable();
            $table->json('cognitive_skills')->nullable();
            $table->json('treatment_Plan')->nullable();
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
