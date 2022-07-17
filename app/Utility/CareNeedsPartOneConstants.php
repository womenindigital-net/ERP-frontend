<?php

namespace App\Utility;

final class CareNeedsPartOneConstants
{
    public static array $columnCollections = [
        'common' => [
            'from_where_you_learned_about_us',
            'Doctor_physician_under_medical_treatment_name',
            'contact_umber',
            'govt_disability_registration',
            'If_yes_enter_registration_number',
            'suggestion_on_obtaining_registration',
            'referred_to_parents_forum',
        ],
        'types_of_specialty_disability_impairments' => [
            'is_she_has_utism',
            'is_she_has_down_syndrome',
            'is_she_has_cerebral_palsy',
            'is_she_has_intellectual_disability',
            'is_she_has_dyslexia',
            'is_she_has_learning_disability',
            'is_she_has_anxiety_disorder',
            'is_she_has_adhd',
            'is_she_has_bipolar_disorder',
            'is_he_has_speech_disorder',
            'is_she_has_language_disorder',
            'is_she_has_eating_disorder',
            'is_she_has_chizophrenia',
            'is_she_has_multiple_personality_disorder',
            'is_she_has_tic_disorder',
            'is_she_has_sluttering',
            'is_she_has_depression',
            'is_she_has_writing_disorder',
            'is_she_has_reading_disorder',
            'is_she_has_match_disorder',
            'is_she_has_attachment_disorder',
            'is_she_has_separation_anxiety_disorder',
            'is_she_has_sleep_disorder',
        ],
        'assessment' => [
            'is_social_communication_checklist_has_completed?',
            'is_sensory_checklist_has_completed?',
            'is_occupational_assessment_has_completed?',
            'is_speech_and_language_assessment_has_completed',
            'is_physiotherapy_assessment_has_ompleted',
            'is_fundamental_movement_skills_has_completed',
            'is_functional_evaluation_has_completed',
            'is_psychological_assessment_has_completed',
            'is_cademic_assessment_has_completed',
        ],
        'educational_information' => [
            'schooling',
            'is_she_has_speaking_capacity',
            'is_she_has_listening_capacity',
            'is_she_has_reading_capacity',
            'is_she_has_writing_capacity',
            'is_she_has',
            'is_she_has_counting_capacity',
            'is_she_has_money_concept',
        ],
        'childs_condition_at_his_family' => [
            'is_she_happy_at_home',
            'is_she_lonely',
            'is_she_protective',
            'is_she_well_protective',
            'is_she_withdrawal',
            'is_she_confident',
            'is_she_Communicate',
            'knowledge_on_aily_life_requirement',
            'is_she_follow_instructions',
            'is_she_has_sitting_habit_and_how_long',
            'is_she_has_hyperness',
            'specify_the_cooling_process',
            'is_she_do_self_injury',
            'follow_any_specific_life_style',
            'what_is_the_way_of_communication',
            'how_he_she_can_follow_instructions',
            'is_she_do_temper_how_long_it_remain',
            'specify_the_cooling_process',
        ],
        'number_of_children_in_the_family' => [
            'is_she_hit_others',
            'age',
            'is_your_other_child_support_towards_sibling',
            'marriage_within_family_relative',
            'is_any_other_relative_have_disabilities',
            'family_economical_condition',
            'any_other_family_information_that_may_relevant_to_share',
        ],
        'schooling' => [
            'going_to_school',
            'name_of_the_school',
            'studied_till_which_class',
            'why_not_attending_school',
            'any_exam_degree_achieved',
        ],
        'home' => [
            'separate_room',
            'separate_bed',
            'sleep_alone',
            'separate_cupboard',
            'separate_toilet',
            'own_equipment',
            'anything_else',
            'teachers_signature',
            'date',
            'teachers_signature',
            'teachers_signature_one',
            'teacher_name_and_designation',
        ],
    ];
}
