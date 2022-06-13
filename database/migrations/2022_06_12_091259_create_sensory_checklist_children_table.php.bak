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
        Schema::create('sensory_checklist_children', function(Blueprint $table)
        {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'candidate_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->string('hypersensitivity_to_touch')->nullable();
            $table->string('becomes_fearful')->nullable();
            $table->string('as_an_infant')->nullable();
            $table->string('distressed_when_diaper_is_being')->nullable();
            $table->string('appears_fearful_of')->nullable();
            $table->string('becomes_frightened_when_touched_from_behind_or_by_someone')->nullable();
            $table->string('complains_about_having_hair_brushed')->nullable();
            $table->string('bothered_by_rough_bed_sheets')->nullable();
            $table->string('avoids_group_situations')->nullable();
            $table->string('complains_about_having_hair_brushed')->nullable();
            $table->string('resists_friendly')->nullable();
            $table->string('dislikes_kisses')->nullable();
            $table->string('appears_fearful_of')->nullable();
            $table->string('avoids_group_situations_for_fear_of_the_unexpected_')->nullable();
            $table->string('prefers_hugs')->nullable();
            $table->string('a_raindrop')->nullable();
            $table->string('may_overreact_to_minor_cuts')->nullable();
            $table->string('avoids_touching_certain_textures')->nullable();
            $table->string('refuses_to_wear_new_or_stiff_clothes')->nullable();
            $table->string('a_raindrop_water_from_the_shower')->nullable();
            $table->string('avoids_using_hands_for_play')->nullable();
            $table->string('yes_no_avoids')->nullable();
            $table->string('will_be_distressed_by_dirty_hands')->nullable();
            $table->string('excessively_ticklish')->nullable();
            $table->string('distressed_by_seams_in_socks')->nullable();
            $table->string('distressed_by_clothes_rubbing_on_skin')->nullable();
            $table->string('may_want_to_wear_long_sleeve_shirts')->nullable();
            $table->string('distressed_about_having_face_washed')->nullable();
            $table->string('distressed_about_having_hair')->nullable();
            $table->string('resists_brushing_teeth')->nullable();
            $table->string('is_a_picky_eater')->nullable();
            $table->string('may_refuse_to_walk_barefoot_on_grass_or_sand')->nullable();
            $table->string('may_walk_on_toes_only')->nullable();
            $table->string('may_crave_touch')->nullable();
            $table->string('is_not_aware_of_being_touched')->nullable();
            $table->string('is_not_bothered_by_injuries')->nullable();
            $table->string('may_not_be_aware_that_hands')->nullable();
            $table->string('may_be_self')->nullable();
            $table->string('mouths_objects_excessively')->nullable();
            $table->string('frequently_hurts')->nullable();
            $table->string('repeatedly_touches_surfaces')->nullable();
            $table->string('seeks_out_surfaces')->nullable();
            $table->string('thoroughly_enjoys_and_seeks_out_messy_play')->nullable();
            $table->string('craves_vibrating_or_strong_sensory_input')->nullable();
            $table->string('has_difficulty_with_fine_motor')->nullable();
            $table->string('may_not_be_able_to_identify')->nullable();
            $table->string('maybe_afraid_of_the_dark')->nullable();
            $table->string('may_be_a_messy_dresser')->nullable();
            $table->string('looks_disheveled')->nullable();
            $table->string('does_not_notice_pants_are_twisted')->nullable();
            $table->string('shirt_is_half_un_tucked')->nullable();
            $table->string('shoes_are_untied')->nullable();
            $table->string('one_pant_leg_is_up_and_one_is_down')->nullable();
            $table->string('has_difficulty_using_scissors')->nullable();
            $table->string('crayons_or_silverware')->nullable();
            $table->string('continues_to_mouth_objects')->nullable();
            $table->string('has_difficulty_figuring_out')->nullable();
            $table->string('avoids_dislikes_playground_equipment')->nullable();
            $table->string('prefers_sedentary_tasks')->nullable();
            $table->string('avoids_dislikes_elevators')->nullable();
            $table->string('may_physically_cling_to_an_adult_they_trust')->nullable();
            $table->string('may_appear_terrified_offalling_even')->nullable();
            $table->string('afraid_of_heights_even_the_height_of_a_curb_or_step')->nullable();
            $table->string('fearful_of_feet_leaving_the_ground')->nullable();
            $table->string('fearful_of_going_up_or_down_stairs_or_walking_on_uneven_surfaces')->nullable();
            $table->string('afraid_of_being_tipped_upside_down')->nullable();
            $table->string('startles_if_someone_else_moves_them')->nullable();
            $table->string('as_an_infant')->nullable();
            $table->string('may_be_fearful_of')->nullable();
            $table->string('may_have_disliked_being_placed_')->nullable();
            $table->string('loses_balance_easily_and_may_appear_clumsy')->nullable();
            $table->string('fearful_of_activities_which_require_good_balance')->nullable();
            $table->string('avoids_rapid_or_rotating_movements')->nullable();
            $table->string('in_constant_motion_cant_seem_to_sit_still')->nullable();
            $table->string('craves_fast')->nullable();
            $table->string('loves_being_tossed_in_the_air')->nullable();
            $table->string('could_spin_for_hours_and_never_appear_to_be_dizzy')->nullable();
            $table->string('loves_the_fast_intense_and_or_or_scary_rides_at_amusement_parks')->nullable();
            $table->string('always_jumping_on_furniture')->nullable();
            $table->string('loves_to_swing_as_high_as_possible')->nullable();
            $table->string('is_a_thrill_seeker_dangerous_at_times')->nullable();
            $table->string('always_running_jumping_hopping_etc_instead_of_walking')->nullable();
            $table->string('rocks_body_shakes_leg_or_head_while_sitting')->nullable();
            $table->string('likes_sudden')->nullable();
            $table->string('in_constant_motion')->nullable();
            $table->string('craves_fast')->nullable();
            $table->string('loves_being_tossed_')->nullable();
            $table->string('could_spin_for_hours')->nullable();
            $table->string('loves_the_fast')->nullable();
            $table->string('always_jumping_on_furniture')->nullable();
            $table->string('loves_to_swing_as_high')->nullable();
            $table->string('is_a_thrill')->nullable();
            $table->string('always_running')->nullable();
            $table->string('rocks_body')->nullable();
            $table->string('likes_sudden_or_quick_movements')->nullable();
            $table->string('loves_being_tossed')->nullable();
            $table->string('loves_to_swing_as_high_as_possibl')->nullable();
            $table->string('likes_sudden_or_quick_movements')->nullable();
            $table->string('has_a_limp')->nullable();
            $table->string('frequently_slumps')->nullable();
            $table->string('difficulty_simultaneously_lifting_head')->nullable();
            $table->string('often_sits_in_a')->nullable();
            $table->string('fatigues_easily')->nullable();
            $table->string('difficulty_turning_doorknobs')->nullable();
            $table->string('difficulty_catching_him')->nullable();
            $table->string('difficulty_getting_dressed_and_doing_fasteners')->nullable();
            $table->string('may_have_never_crawled_as_an_baby')->nullable();
            $table->string('has_poor_body_awareness')->nullable();
            $table->string('poor_gross_motor_skills')->nullable();
            $table->string('poor_fine_motor_skills')->nullable();
            $table->string('may_appear_ambidextrous')->nullable();
            $table->string('has_difficulty_licking')->nullable();
            $table->string('seems_to_be_unsure_about')->nullable();
            $table->string('difficulty_learning_exercise_')->nullable();
            $table->string('seeks_out_jumping_bumping_and_crashing_activities')->nullable();
            $table->string('stomps_feet_when_walking')->nullable();
            $table->string('kicks_his_her_feet_on_floor_or_chair_while_sitting_at_desk_table')->nullable();
            $table->string('bites_or_sucks_on_fingers_and')->nullable();
            $table->string('loves_to_be_tightly_wrapped')->nullable();
            $table->string('prefrs_clothees')->nullable();
            $table->string('may_not_understand_the_idea_')->nullable();
            $table->string('loves_or_seeks_out_squishing_activities')->nullable();
            $table->string('enjoys_bear_hugs')->nullable();
            $table->string('excessive_banging')->nullable();
            $table->string('loves_roughhousing_and_tackling_or_wrestling_games')->nullable();
            $table->string('frequently_falls_on_floor_intentionally')->nullable();
            $table->string('would_jump_on_a_trampoline')->nullable();
            $table->string('grinds_his_her_teeth_throughout_the_day')->nullable();
            $table->string('loves_pushing_pulling')->nullable();
            $table->string('loves_jumping_off_furniture')->nullable();
            $table->string('frequently_hits_bumps_or_pushes_other_children')->nullable();
            $table->string('chews_on_pens_straws_shirt_sleeves_etc')->nullable();
            $table->string('misjudges_how_much_to_flex')->nullable();
            $table->string('difficulty_regulating_pressure')->nullable();
            $table->string('kicks_his_her_feet_on_floor')->nullable();
            $table->string('written_work_is_messy')->nullable();
            $table->string('always_seems_to_be_breaking')->nullable();
            $table->string('misjudges_the_weight_of_an_object')->nullable();
            $table->string('may_not_understand_the_idea_of')->nullable();
            $table->string('seems_to_do_everything_with')->nullable();
            $table->string('plays_with_animals')->nullable();
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
