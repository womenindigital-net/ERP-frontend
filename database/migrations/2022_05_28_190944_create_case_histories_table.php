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
        Schema::create('case_histories', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->foreignIdFor(User::class, 'created_by')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'teacher_id')->constrained('users')->cascadeOnDelete();
            $table->string('date');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->tinyText('address')->nullable();
            $table->string('has_adjustment_capability')->nullable();
            $table->string('has_move_ability')->nullable();
            $table->string('has_fine_equipment_use_ability')->nullable();
            $table->json('has_write_ability')->nullable();
            $table->string('has_interest_in_education')->nullable();
            $table->string('has_self_work_capability')->nullable();
            $table->string('has_social_communication_ability')->nullable();
            $table->string('is_able_to_play_with_others')->nullable();
            $table->json('has_any_learning_obstacle')->nullable();
            $table->string('has_control_over_body')->nullable();
            $table->string('has_speaking_problem')->nullable();
            $table->string('has_speaking_problem_secondary')->nullable();
            $table->string('is_able_to_understand_tense')->nullable();
            $table->string('is_able_to_use_correct_word_in_sentence')->nullable();
            $table->string('is_able_to_use_correct_word_in_sentence_secondary')->nullable();
            $table->string('has_past_assessment_by_specialist')->nullable();
            $table->string('has_past_assessment_by_specialist_secondary')->nullable();
            $table->string('has_family_learning_disability')->nullable();
            $table->string('has_instability')->nullable();
            $table->json('child_description')->nullable();
            $table->string('child_description_secondary')->nullable();
            $table->json('has_sleep_patten_problem')->nullable();
            $table->string('has_sleep_patten_problem_secondary')->nullable();
            $table->string('is_able_to_lick')->nullable();
            $table->string('is_able_to_eat_hard_thing')->nullable();
            $table->string('is_able_to_control_breathing')->nullable();
            $table->string('does_swallow_food_at_once')->nullable();
            $table->string('does_take_longer_time_while_eating')->nullable();
            $table->string('is_any_problem_in_chewing_food')->nullable();
            $table->string('is_any_problem_in_chewing_food_secondary')->nullable();
            $table->json('sat_alone_in')->nullable();
            $table->string('learned_to_chewing_in')->nullable();
            $table->string('learned_to_scrolling_in')->nullable();
            $table->string('learned_to_walk_alone_in')->nullable();
            $table->string('is_able_to_chewing')->nullable();
            $table->string('is_able_to_swimming')->nullable();
            $table->string('dose_like_play_outside')->nullable();
            $table->string('dose_get_tired_soon')->nullable();
            $table->string('dose_get_tired_soon_secondary')->nullable();
            $table->json('dose_have_balancing_problem')->nullable();
            $table->string('dose_have_muscle_pain')->nullable();
            $table->string('first_voice_lang')->nullable();
            $table->string('first_voice_lang_secondary')->nullable();
            $table->string('in_which_age_spoke_the_first_word')->nullable();
            $table->string('in_which_age_spoke_the_first_word_secondary')->nullable();
            $table->json('is_able_spake_simple_sentence')->nullable();
            $table->string('how_many_word_use_in_a_sentence_max')->nullable();
            $table->string('dose_spake_in_other_lang')->nullable();
            $table->string('dose_spake_in_other_lang_secondary')->nullable();
            $table->string('from_which_year_learning_other_lang')->nullable();
            $table->string('from_which_year_learning_other_lang_secondary')->nullable();
            $table->json('from_where_learn_other_lang')->nullable();
            $table->json('does_he_response_if_call_by_his_name')->nullable();
            $table->json('can_give_simple_instruction_and_follow_direction')->nullable();
            $table->json('dose_use_wrong_word_while_speaking')->nullable();
            $table->json('in_which_sound_child_react')->nullable();
            $table->json('does_follow_verbal_commend')->nullable();
            $table->string('is_able_to_use_right_word_for_right_sentence')->nullable();
            $table->string('can_use_spoon')->nullable();
            $table->string('can_wear_cloth_alone')->nullable();
            $table->string('can_wear_cloth_alone_secondary')->nullable();
            $table->json('can_arrange_own_things')->nullable();
            $table->json('in_which_age_got_toilet_training')->nullable();
            $table->json('does_go_to_toilet_himself')->nullable();
            $table->json('does_go_to_toilet_in_unknown_place')->nullable();
            $table->json('does_like_drawing_and_writing_in_home')->nullable();
            $table->json('does_like_play')->nullable();
            $table->json('can_play_independently')->nullable();
            $table->json('favorite_games')->nullable();
            $table->json('can_obey_elder_commends')->nullable();
            $table->json('do_you_things_obey_elder_elder_is_heard')->nullable();
            $table->json('can_clean_himself_after_properly')->nullable();
            $table->json('can_wear_cloth_himself_after_properly')->nullable();
            $table->json('does_play_with_siblings')->nullable();
            $table->json('does_friend_come_to_play_in_home')->nullable();
            $table->json('does_share_toys')->nullable();
            $table->json('does_wait_for_his_turn')->nullable();
            $table->json('does_careless_for_others')->nullable();
            $table->string('are_you_tense_for_specific_behaviour')->nullable();
            $table->string('are_you_tense_for_specific_behaviour_secondary')->nullable();
            $table->json('concerning_points_of_child_school_work')->nullable();
            $table->json('is_curious_to_learn_new_things')->nullable();
            $table->json('can_understand_simple_things_right_way')->nullable();
            $table->json('can_learn_word_spelling')->nullable();
            $table->string('can_write_himself')->nullable();
            $table->json('working_speed')->nullable();
            $table->json('how_long_child_can_remember_after_teaching')->nullable();
            $table->json('is_home_work_a_simple_things')->nullable();
            $table->json('does_change_behaviour_during_homework')->nullable();
            $table->json('is_he_angry')->nullable();
            $table->json('does_feel_messy_about_paper_and_books')->nullable();
            $table->json('does_lose_different_things_from_bags_regularly')->nullable();
            $table->json('does_irrelevant_work_during_meal')->nullable();
            $table->string('does_scream_during_wearing_cloth')->nullable();
            $table->string('how_you_will_describe_you_child')->nullable();
            $table->json('bath')->nullable();
            $table->string('bath_secondary')->nullable();
            $table->json('necessary_things')->nullable();
            $table->string('necessary_things_secondary')->nullable();
            $table->json('does_have_the_navigation_capability')->nullable();
            $table->string('play')->nullable();
            $table->json('mobility')->nullable();
            $table->json('does_like_routine')->nullable();
            $table->string('does_accept_routing_change')->nullable();
            $table->string('does_like_new_situation')->nullable();
            $table->string('can_not_obey_regularity')->nullable();
            $table->string('does_get_angry_quickly')->nullable();
            $table->string('does_get_disappointed_quickly')->nullable();
            $table->string('does_stop_working')->nullable();
            $table->string('can_stay_longer_if_needed')->nullable();
            $table->string('does_have_tremendous_behaviors_at_home')->nullable();
            $table->string('seems_like_not_interested_in_playing')->nullable();
            $table->string('does_have_time_sense')->nullable();
            $table->string('doest_have_knowledge_problem_about_day_monty_and_time')->nullable();
            $table->string('response')->nullable();
            $table->string('day_dreamer')->nullable();
            $table->string('does_move_in_one_place')->nullable();
            $table->string('does_move')->nullable();
            $table->string('does_move_all_time')->nullable();
            $table->string('does_like_to_sit_straight')->nullable();
            $table->string('is_expert_play_with_ball')->nullable();
            $table->string('does_ignore_playing_with_ball')->nullable();
            $table->string('does_like_to_destroy')->nullable();
            $table->string('does_run_in_wrong_way')->nullable();
            $table->string('does_height_movement_be_careful_when_going_down_stairs')->nullable();
            $table->string('try_to_ignore_task')->nullable();
            $table->string('which_kind_of_task_he_try_to_skip')->nullable();
            $table->string('lost_again_and_again')->nullable();
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
