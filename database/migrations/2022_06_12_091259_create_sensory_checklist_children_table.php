<?php

use App\Models\Student;
use App\Models\User;
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
        Schema::create('sensory_checklist_children', function (Blueprint $table)
        {
            $table->id();
            $table->json('sensory_checklist')->nullable();
            $table->json('signs_of_tactile_dysfunction')->nullable();
            $table->json('hyposensitivity_to_touch')->nullable();
            $table->json('poor_tactile_perception_and_discrimination')->nullable();
            $table->json('signs_of_vestibular_dysfunction')->nullable();
            $table->json('signs_of_vestibular_dysfunction_under')->nullable();
            $table->json('signs_of_vestibular_dysfunction_coordination')->nullable();
            $table->json('signs_of_vestibular_dysfunction_behaviors')->nullable();
            $table->json('signs_of_vestibular_dysfunction_movement')->nullable();
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
        Schema::dropIfExists('sensory_checklist_children');
    }
};
