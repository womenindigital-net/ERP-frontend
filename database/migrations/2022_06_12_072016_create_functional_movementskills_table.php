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
        Schema::create('functional_movementskills', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'candidate_id')->constrained('students')->cascadeOnDelete();
            $table->string('functional_movement_general_1')->nullable();
            $table->string('functional_movement_general_2')->nullable();
            $table->string('functional_movement_general_3')->nullable();
            $table->string('functional_movement_foot_1')->nullable();
            $table->string('functional_movement_ankle_1')->nullable();
            $table->string('functional_movement_knee_1')->nullable();
            $table->string('functional_movement_knee_2')->nullable();
            $table->string('functional_movement_knee_3')->nullable();
            $table->string('functional_movement_hip_1')->nullable();
            $table->string('functional_movement_hip_2')->nullable();
            $table->string('functional_movement_low_back_1')->nullable();
            $table->string('functional_movement_low_back_2')->nullable();
            $table->string('functional_movement_mid_back_1')->nullable();
            $table->string('functional_movement_shoulder_1')->nullable();
            $table->string('functional_movement_shoulder_2')->nullable();
            $table->string('functional_movement_shoulder_3')->nullable();
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
        Schema::dropIfExists('functional_movementskills');
    }
};
