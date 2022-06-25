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
        Schema::create('trips', function (Blueprint $table) {

            $table->id();
            $table->json('activities_of_daily_living')->nullable();
            $table->json('only_for_staff')->nullable();
            $table->json('activities')->nullable();
            $table->json('security_safety')->nullable();
            $table->json('equipment')->nullable();
            $table->json('light')->nullable();
            $table->json('kitchen')->nullable();
            $table->json('bathroom')->nullable();
            $table->json('floor')->nullable();
            $table->json('instrumental_activities_of_daily')->nullable();
            $table->json('environmental_safety_relative')->nullable();
            $table->json('environmental_safety_step')->nullable();
            $table->json('woke_up_in_the_morning')->nullable();
            $table->json('reading_writing')->nullable();
            $table->json('daily_work')->nullable();
            $table->json('won_work')->nullable();
            $table->json('lunch_time')->nullable();
            $table->json('rest_time')->nullable();
            $table->json('afternoon')->nullable();
            $table->json('evening')->nullable();



            /*
            $table->tinyText('reading_book_and_hand_writing')->nullable();
            $table->tinyText('reading_book_and_hand_writing_secondary')->nullable();
            $table->tinyText('reading_book_and_hand_writing_time')->nullable();
            $table->tinyText('reading_book_and_hand_writing_time_secondary')->nullable();
            $table->tinyText('constructive_game')->nullable();
            $table->tinyText('constructive_game_secondary')->nullable();
            $table->tinyText('constructive_game_time')->nullable();
            $table->tinyText('constructive_game_time_secondary')->nullable();
            $table->tinyText('home_work')->nullable();
            $table->tinyText('home_work_secondary')->nullable();
            $table->tinyText('home_work_time')->nullable();
            $table->tinyText('home_work_time_secondary')->nullable();
            $table->tinyText('packing_the_bag_for_the_next_day')->nullable();
            $table->tinyText('packing_the_bag_for_the_next_day_secondary')->nullable();
            $table->tinyText('packing_the_bag_for_the_next_day_time')->nullable();
            $table->tinyText('packing_the_bag_for_the_next_day_time_secondary')->nullable();
            $table->tinyText('watching_tv')->nullable();
            $table->tinyText('watching_tv_secondary')->nullable();
            $table->tinyText('watching_tv_time')->nullable();
            $table->tinyText('watching_tv_time_secondary')->nullable();
            $table->tinyText('dairy_writing')->nullable();
            $table->tinyText('dairy_writing_secondary')->nullable();
            $table->tinyText('dairy_writing_time')->nullable();
            $table->tinyText('dairy_writing_time_secondary')->nullable();
            $table->tinyText('night_give_plate_glass_on_the_table_will_help')->nullable();
            $table->tinyText('night_give_plate_glass_on_the_table_will_help_secondary')->nullable();
            $table->tinyText('night_give_plate_glass_on_the_table_will_help_time')->nullable();
            $table->tinyText('night_give_plate_glass_on_the_table_will_help_time_secondary')->nullable();
            $table->tinyText('night_Give_water_in_glass')->nullable();
            $table->tinyText('night_Give_water_in_glass_secondary')->nullable();
            $table->tinyText('night_Give_water_in_glass_time')->nullable();
            $table->tinyText('night_Give_water_in_glass_time_secondary')->nullable();
            $table->tinyText('night_bring_food_from_the_kitchen_to_the_table')->nullable();
            $table->tinyText('night_bring_food_from_the_kitchen_to_the_table_secondary')->nullable();
            $table->tinyText('night_bring_food_from_the_kitchen_to_the_table_time')->nullable();
            $table->tinyText('night_bring_food_from_the_kitchen_to_the_table_time_secondary')->nullable();
            $table->tinyText('night_wash_hands_with_soap_before_and_after_eating')->nullable();
            $table->tinyText('night_sit_on_table_or_mat_and_eat_with_everyone')->nullable();
            $table->tinyText('night_sit_on_table_or_mat_and_eat_with_everyone_secondary')->nullable();
            $table->tinyText('night_sit_on_table_or_mat_and_eat_with_everyone_time')->nullable();
            $table->tinyText('night_sit_on_table_or_mat_and_eat_with_everyone_time_secondary')->nullable();
            $table->tinyText('night_eat_with_your_own_hands_or_spoon')->nullable();
            $table->tinyText('night_eat_with_your_own_hands_or_spoon_secondary')->nullable();
            $table->tinyText('night_eat_with_your_own_hands_or_spoon_time')->nullable();
            $table->tinyText('night_eat_with_your_own_hands_or_spoon_time_secondary')->nullable();
            $table->tinyText('night_eating_medicine')->nullable();
            $table->tinyText('night_eating_medicine_secondary')->nullable();
            $table->tinyText('night_eating_medicine_time')->nullable();
            $table->tinyText('night_eating_medicine_time_secondary')->nullable();
            $table->tinyText('night_teeth_brash')->nullable();
            $table->tinyText('night_teeth_brash_secondary')->nullable();
            $table->tinyText('night_teeth_brash_time')->nullable();
            $table->tinyText('night_teeth_brash_time_secondary')->nullable();
            $table->tinyText('night_changing_cloth')->nullable();
            $table->tinyText('night_changing_cloth_secondary')->nullable();
            $table->tinyText('night_changing_cloth_time')->nullable();
            $table->tinyText('night_changing_cloth_time_secondary')->nullable();
            $table->tinyText('put_to_bed')->nullable();
            $table->tinyText('put_to_bed_secondary')->nullable();
            $table->tinyText('put_to_bed_time')->nullable();
            $table->tinyText('put_to_bed_time_secondary')->nullable();
            $table->tinyText('hanging_mosquito_nets')->nullable();
            $table->tinyText('hanging_mosquito_nets_secondary')->nullable();
            $table->tinyText('hanging_mosquito_nets_time')->nullable();
            $table->tinyText('hanging_mosquito_nets_time_secondary')->nullable();
            $table->tinyText('turn_off_the_lights_and_go_to_bed')->nullable();
            $table->tinyText('turn_off_the_lights_and_go_to_bed_secondary')->nullable();
            $table->tinyText('turn_off_the_lights_and_go_to_bed_time')->nullable();
            $table->tinyText('turn_off_the_lights_and_go_to_bed_time_secondary')->nullable();
            $table->tinyText('special_educator_team')->nullable();
            $table->tinyText('special_educator_team_name')->nullable();
            $table->tinyText('guardian')->nullable();
            $table->tinyText('guardian_name')->nullable();
            $table->tinyText('note_if_any')->nullable();
            $table->tinyText('signature_teacher')->nullable();
            $table->tinyText('signature_teacher_name_or_designation')->nullable();
            $table->tinyText('supervisor_signature')->nullable();
            $table->tinyText('supervisor_signature_name_or_designation')->nullable();*/
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
        Schema::dropIfExists('trips');
    }
};
