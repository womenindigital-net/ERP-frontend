<?php

namespace App\Utility;

final class SensoryCheckListChildConstants
{

    const AVOIDS = "AVOIDS";
    const SEEKS = "SEEKS";
    const MIXE = "MIXED";
    const DNEUTRAL = "DNEUTRAL";

    public static array $young = [
        self::AVOIDS => 'AVOIDS',
        self::SEEKS => 'SEEKS',
        self::MIXE => 'MIXED',
        self::DNEUTRAL => 'DNEUTRAL',
    ];

    public static array $columnCollections = [
        'signs_of_tactile_dysfunction' => [
            'hypersensitivity_to_touch',
            'becomes_fearful',
            'as_an_infant',
            'distressed_when_diaper_is_being',
            'appears_fearful_of',
            'becomes_frightened_when_touched_from_behind_or_by_someone',
            'complains_about_having_hair_brushed',
            'bothered_by_rough_bed_sheets',
            'avoids_group_situations',
            'resists_friendly',
            'dislikes_kisses',
            'appears_fearful_of',
            'avoids_group_situations_for_fear_of_the_unexpected_touch',
            'prefers_hugs',
            'a_raindrop',
            'may_overreact_to_minor_cuts',
            'avoids_touching_certain_textures',
            'refuses_to_wear_new_or_stiff_clothes',
            'a_raindrop_water_from_the_shower',
            'avoids_using_hands_for_play',
            'yes_no_avoids',
            'will_be_distressed_by_dirty_hands',
            'excessively_ticklish',
            'distressed_by_seams_in_socks',
            'distressed_by_clothes_rubbing_on_skin',
            'may_want_to_wear_long_sleeve_shirts',
            'distressed_about_having_face_washed',
            'distressed_about_having_hair',
            'resists_brushing_teeth',
            'is_a_picky_eater',
            'may_refuse_to_walk_barefoot_on_grass_or_sand',
            'may_walk_on_toes_only',
        ],
        'hyposensitivity_to_touch'   => [
            'may_crave_touch',
            'is_not_aware_of_being_touched',
            'is_not_bothered_by_injuries',
            'may_not_be_aware_that_hands',
            'may_be_self_abusive',
            'mouths_objects_excessively',
            'frequently_hurts',
            'repeatedly_touches_surfaces',
            'seeks_out_surfaces',
            'thoroughly_enjoys_and_seeks_out_messy_play',
            'craves_vibrating_or_strong_sensory_input',
        ],


        'poor_tactile_perception_and_discrimination'            => [
            'has_difficulty_with_fine_motor',
            ' maybe_afraid_of_the_dark',
            'may_be_a_messy_dresser',
            ' looks_disheveled',
            'does_not_notice_pants_are_twisted',
            'shirt_is_half_un_tucked',
            'shoes_are_untied',
            'one_pant_leg_is_up_and_one_is_down',
            'has_difficulty_using_scissors',
            ' crayons_or_silverware',
            ' continues_to_mouth_objects',
            'has_difficulty_figuring_out',
            'may_not_be_able_to_identify',
        ],
        'signs_of_vestibular_dysfunction'            => [
            'avoids_dislikes_playground_equipment',
            'prefers_sedentary_tasks',
            'avoids_dislikes_elevators',
            'may_physically_cling_to_an_adult_they_trust',
            'may_appear_terrified_offalling_even',
            'afraid_of_heights',
            'fearful_of_feet',
            'fearful_of_going_up',
            'afraid_of_being_tipped_upside_down',
            'startles_if_someone_else_moves_them',
            'as_an_infant',
            'may_be_fearful_of',
            'may_have_disliked_being_placed',
            'loses_balance_easily',
            'Fearful_of_activities',
            'Avoids_rapid_or_rotating_movements',
        ],
        'signs_of_vestibular_dysfunction_under'            => [
            'in_constant_motion_cant_seem_to_sit_still',
            'craves_fast',
            'loves_being_tossed_in_the_air',
            'could_spin_for_hours',
            'loves_the_fast',
            'always_jumping_on_furniture',
            'loves_to_swing_as_high_as_possible',
            'is_a_thrill_seeker',
            'always_running',
            'rocks_body',
            'likes_sudden',
        ],
        'signs_of_vestibular_dysfunction_coordination'            => [
            'has_a_limp',
            'frequently_slumps',
            'difficulty_simultaneously_lifting_head',
            'often_sits_in_a',
            'fatigues_easily',
            'difficulty_turning_doorknobs',
            'difficulty_catching_him',
            'difficulty_getting_dressed_and_doing_fasteners',
            'may_have_never_crawled_as_an_baby',
            'has_poor_body_awareness',
            'poor_gross_motor_skills',
            'poor_fine_motor_skills',
            'may_appear_ambidextrous',
            'has_difficulty_licking',
            'seems_to_be_unsure_about',
            'difficulty_learning_exercise',
        ],
        'signs_of_vestibular_dysfunction_behaviors'            => [
            'seeks_out_jumping_bumping',
            'stomps_feet_when_walking',
            'kicks_his_her_feet_on_floor_or_chair_while_sitting_at_desk_table',
            'bites_or_sucks_on_fingers_and',
            'loves_to_be_tightly_wrapped',
            'prefrs_clothees',
            'may_not_understand_the_idea',
            'loves_or_seeks_out',
            'enjoys_bear_hugs',
            'excessive_banging',
            'loves_roughhousing_and_tackling',
            'frequently_falls_on_floor_intentionally',
            'would_jump_on_a_trampoline',
            'grinds_his_her_teeth_throughout_the_day',
            'loves_pushing_pulling',
            'loves_jumping_off_furniture',
            'frequently_hits',
            'chews_on_pens',
        ],
        'signs_of_vestibular_dysfunction_movement'            => [
            'misjudges_how_much_to_flex',
            'difficulty_regulating_pressure',
            'kicks_his_her_feet_on_floor',
            'written_work_is_messy',
            'always_seems_to_be_breaking',
            'misjudges_the_weight_of_an_object',
            'may_not_understand_the_idea_of',
            'seems_to_do_everything_with',
            'plays_with_animals',
        ],
    ];
}
