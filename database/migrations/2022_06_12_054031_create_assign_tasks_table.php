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
        Schema::create('assign_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('assignment_name')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('instruction')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('name')->nullable();
            $table->string('organized_play')->nullable();
            $table->string('jumping_jacks')->nullable();
            $table->string('fitness_physical_activity')->nullable();
            $table->string('adaptations')->nullable();
            $table->string('fundamental_movement_exercisel')->nullable();
            $table->string('yoga')->nullable();
            $table->string('craft_activities')->nullable();
            $table->string('assertiveness')->nullable();
            $table->string('functional_reading_skills')->nullable();
            $table->string('money_management_skills')->nullable();
            $table->string('shaving_routing')->nullable();
            $table->string('basic_first_aid_knowledge')->nullable();
            $table->string('meal_preparation_skills')->nullable();
            $table->string('serving_food')->nullable();
            $table->string('self_awareness_intrapersonal')->nullable();
            $table->string('self_esteem_intrapersonal')->nullable();
            $table->string('self_regulation_intrapersonal')->nullable();
            $table->string('managing_death_of_family_members')->nullable();
            $table->string('managing_death_of_relative_friends')->nullable();
            $table->string('interpersonal_skills')->nullable();
            $table->string('handle_accept_different_situation')->nullable();
            $table->string('understand_social_deviation')->nullable();
            $table->string('how_to_play_with_others')->nullable();
            $table->string('me_and_you')->nullable();
            $table->string('ethical_values')->nullable();
            $table->string('work_readiness_ethical_values')->nullable();
            $table->string('home_maintenance_self_development')->nullable();
            $table->string('cleaning_washing_chores_self_development')->nullable();
            $table->string('telephone_skills_self_development')->nullable();
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
        Schema::dropIfExists('assign_tasks');
    }
};
