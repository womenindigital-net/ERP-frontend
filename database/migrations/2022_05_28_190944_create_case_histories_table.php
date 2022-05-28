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
        Schema::create('case_histories', function(Blueprint $table)
        {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Student::class)->constrained()->cascadeOnDelete();
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->boolean('has_adjustment_capability');
            $table->boolean('has_move_ability');
            $table->boolean('has_fine_equipment_use_ability');
            $table->json('has_write_ability');
            $table->boolean('has_interest_in_education');
            $table->boolean('has_self_work_capability');
            $table->boolean('has_social_communication_ability');
            $table->boolean('is_able_to_play_with_others');
            $table->json('has_any_learning_obstacle');
            $table->boolean('has_control_over_body');
            $table->json('has_speaking_problem');
            $table->boolean('is_able_to_understand_tense');
            $table->boolean('is_able_to_use_correct_word_in_sentence');
            $table->boolean('has_past_assessment_by_specialist');
            $table->boolean('has_family_learning_disability');
            $table->boolean('has_instability');
            $table->boolean('child_description');
            $table->json('has_sleep_patten_problem');
            $table->boolean('is_able_to_lick');
            $table->boolean('is_able_to_eat_hard_thing');
            $table->boolean('is_able_to_control_breathing');
            $table->boolean('does_swallow_food_at_once');
            $table->boolean('does_take_longer_time_while_eating');
            $table->boolean('is_any_problem_in_chewing_food');
            $table->json('sat_alone_in');
            $table->string('learned_to_chewing_in');
            $table->string('learned_to_scrolling_in');
            $table->string('learned_to_walk_alone_in');
            $table->string('is_able_to_chewing');
            $table->boolean('is_able_to_swimming');
            $table->boolean('dose_like_play_outside');
            $table->boolean('dose_get_tired_soon');
            $table->json('dose_have_balancing_problem');
            $table->boolean('dose_have_muscle_pain');
            $table->boolean('first_voice_lang');
            $table->json('in_which_age_spoke_the_first_word');
            $table->json('is_able_spake_simple_sentence');
            $table->boolean('how_many_word_use_in_a_sentence_max');
            $table->boolean('dose_spake_in_other_lang');
            $table->json('from_which_year_learning_other_lang');
            $table->json('from_where_learn_other_lang');
            $table->json('does_he_response_if_call_by_his_name');
            $table->json('can_give_simple_instruction_and_follow_direction');
            $table->json('dose_use_wrong_word_while_speaking');
            $table->json('in_which_sound_child_react');
            $table->json('does_follow_verbal_commend');
            $table->boolean('is_able_to_use_right_word_for_right_sentence');
            $table->boolean('can_use_spoon');
            $table->json('can_wear_cloth_alone');
            $table->json('can_arrange_own_things');
            $table->json('in_which_age_got_toilet_training');
            $table->json('does_go_to_toilet_himself');
            $table->json('does_go_to_toilet_in_unknown_place');
            $table->json('does_like_drawing_and_writing_in_home');
            $table->json('does_like_play');
            $table->json('can_play_independently');
            $table->json('favorite_games');
            $table->json('can_obey_elder_commends');
            $table->json('do_you_things_obey_elder_elder_is_heard');
            $table->json('can_clean_himself_after_properly');
            $table->json('can_wear_cloth_himself_after_properly');
            $table->json('does_play_with_siblings');
            $table->json('does_friend_come_to_play_in_home');
            $table->json('does_share_toys');
            $table->json('does_wait_for_his_turn');
            $table->json('does_careless_for_others');
            $table->json('are_you_tense_for_specific_behaviour');
            $table->json('concerning_points_of_child_school_work');
            $table->json('is_curious_to_learn_new_things');
            $table->json('can_understand_simple_things_right_way');
            $table->json('can_learn_word_spelling');
            $table->json('can_write_himself');
            $table->json('working_speed');
            $table->json('how_long_child_can_remember_after_teaching');
            $table->json('is_home_work_a_simple_things');
            $table->json('does_change_behaviour_during_homework');
            $table->json('is_he_angry');
            $table->json('does_feel_messy_about_paper_and_books');
            $table->json('does_lose_different_things_from_bags_regularly');
            $table->json('does_irrelevant_work_during_meal');
            $table->boolean('does_scream_during_wearing_cloth');
            $table->boolean('how_you_will_describe_you_child');
            $table->json('bath');
            $table->json('necessary_things');
            $table->json('does_have_the_navigation_capability');
            $table->boolean('play');
            $table->json('mobility');
            $table->json('does_like_routine');
            $table->boolean('does_accept_routing_change');
            $table->boolean('does_like_new_situation');
            $table->boolean('can_not_obey_regularity');
            $table->boolean('does_get_angry_quickly');
            $table->boolean('does_get_disappointed_quickly');
            $table->boolean('does_stop_working');
            $table->boolean('can_stay_longer_if_needed');
            $table->boolean('does_have_tremendous_behaviors_at_home');
            $table->boolean('seems_like_not_interested_in_playing');
            $table->boolean('does_have_time_sense');
            $table->boolean('doest_have_knowledge_problem_about_day_monty_and_time');
            $table->boolean('response');
            $table->boolean('day_dreamer');
            $table->boolean('does_move_in_one_place');
            $table->boolean('does_move');
            $table->boolean('does_move_all_time');
            $table->boolean('does_like_to_sit_straight');
            $table->boolean('is_expert_play_with_ball');
            $table->boolean('does_ignore_playing_with_ball');
            $table->boolean('does_like_to_destroy');
            $table->boolean('does_run_in_wrong_way');
            $table->boolean('does_height_movement_be_careful_when_going_down_stairs');
            $table->boolean('try_to_ignore_task');
            $table->boolean('which_kind_of_task_he_try_to_skip');
            $table->boolean('lost_again_and_again');

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
        Schema::dropIfExists('case_histories');
    }
};
