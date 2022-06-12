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
        Schema::create('ot_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('bath')->nullable();
            $table->string('bath_secondary')->nullable();
            $table->string('wearing_cloth')->nullable();
            $table->string('wearing_cloth_secondary')->nullable();
            $table->string('wrooming')->nullable();
            $table->string('wrooming_secondary')->nullable();
            $table->string('do_toilet')->nullable();
            $table->string('do_toilet_secondary')->nullable();
            $table->string('eating_healthy_food')->nullable();
            $table->string('eating_healthy_food_secondary')->nullable();
            $table->string('wakeup_from_bed')->nullable();
            $table->string('wakeup_from_bed_secondary')->nullable();
            $table->string('get_up_from_the_chair')->nullable();
            $table->string('get_up_from_the_chair_secondary')->nullable();
            $table->string('walk')->nullable();
            $table->string('walk_secondary')->nullable();
            $table->string('taking_trip_materials_and_preparation')->nullable();
            $table->string('taking_trip_materials_and_preparation_secondary')->nullable();
            $table->string('whether_the_trainee_has_been_contacted')->nullable();
            $table->string('whether_the_trainee_has_been_contacted_secondary')->nullable();
            $table->string('communicate_with_other_members_of_the_team')->nullable();
            $table->string('communicate_with_other_members_of_the_team_secondary')->nullable();
            $table->string('where_visits')->nullable();
            $table->string('where_visits_secondary')->nullable();
            $table->string('who_were_driving_cars_or_other_assistants')->nullable();
            $table->string('who_were_driving_cars_or_other_assistants_secondary')->nullable();
            $table->string('this_trip')->nullable();
            $table->string('this_trip_secondary')->nullable();
            $table->string('was_the_trip_or_tour_presented')->nullable();
            $table->string('was_the_trip_or_tour_presented_secondary')->nullable();
            $table->string('teacher_went_alone_or_in_the_team')->nullable();
            $table->string('teacher_went_alone_or_in_the_team_secondary')->nullable();
            $table->string('trip_description')->nullable();
            $table->string('trip_description_secondary')->nullable();
            $table->string('home_environment')->nullable();
            $table->string('home_environment_secondary')->nullable();
            $table->string('do_need_separate_room')->nullable();
            $table->string('do_need_separate_room_secondary')->nullable();
            $table->string('separate_bed')->nullable();
            $table->string('separate_bed_secondary')->nullable();
            $table->string('for_cloth_separate_elmira')->nullable();
            $table->string('for_cloth_separate_elmira_secondary')->nullable();
            $table->string('separate_place_for_change_cloth')->nullable();
            $table->string('separate_place_for_change_cloth_secondary')->nullable();
            $table->string('attach_bathroom')->nullable();
            $table->string('attach_bathroom_secondary')->nullable();
            $table->string('attach_balcony')->nullable();
            $table->string('attach_balcony_secondary')->nullable();
            $table->string('separate_reading_environment')->nullable();
            $table->string('separate_reading_environment_secondary')->nullable();
            $table->string('large_lock_on_the_outer_door')->nullable();
            $table->string('large_lock_on_the_outer_door_secondary')->nullable();
            $table->string('front_door_leaks')->nullable();
            $table->string('front_door_leaks_secondary')->nullable();
            $table->string('lock_windows')->nullable();
            $table->string('lock_windows_secondary')->nullable();
            $table->string('alarm_system')->nullable();
            $table->string('alarm_system_secondary')->nullable();
            $table->string('walk_or_other_obstacles')->nullable();
            $table->string('walk_or_other_obstacles_secondary')->nullable();
            $table->string('for_room_alternative_solution')->nullable();
            $table->string('for_room_alternative_solution_secondary')->nullable();
            $table->string('using_bed_or_chair_are_easy')->nullable();
            $table->string('using_bed_or_chair_are_easy_secondary')->nullable();

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
        Schema::dropIfExists('ot_assessments');
    }
};
