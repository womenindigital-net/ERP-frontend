<?php

namespace App\Utility;

final class SensoryCheckList
{
    public static array $columnCollections = [

        'speech'            => [
            'talk_too_loud_for_the_context',
            'talk_too_loud_for_the_context_secondary',
            'speech_is_hard_to_understand',
            'speech_is_hard_to_understand_secondary',
            'speech_calls_attention_of_itself',
            'speech_calls_attention_of_itself_secondary',
            'voice_is_too_hard',
            'voice_is_too_hard_secondary',
            'voice_is_too_low',
            'voice_is_too_low_secondary',
            'repeats_words_of_parts_of_word_when_talking',
            'repeats_words_of_parts_of_word_when_talking_secondary',
            'talks_fast_causing_speech_to_be_unclear',
            'talks_fast_causing_speech_to_be_unclear_secondary',
            'speech_sounds_monotone',
            'speech_sounds_monotone_secondary',
            'speech_sounds_sign_song',
            'speech_sounds_sign_song_secondary',
        ],
        'body_language'            => [
            'talk_too_quietly_for_the_context',
            'talk_too_quietly_for_the_context_secondary',
            'body_posture_is_too_rigid',
            'body_posture_is_too_rigid_secondary',
            'body_posture_is_too_relaxed',
            'body_posture_is_too_relaxed_secondary',
            'has_noticed_nervous_mannerisms',
            'has_noticed_nervous_mannerisms_secondary',
            'has_limited_use_if_gestures',
            'has_limited_use_if_gestures_secondary',
            'demonstrates_unusual_facial_expressions',
            'demonstrates_unusual_facial_expressions_secondary',
            'shows_little_variation_in_facial_expressions',
            'shows_little_variation_in_facial_expressions_secondary',
            'expressions_or_body_language',
            'expressions_or_body_language_secondary',
            'orientation_or_proximity_in_interaction',
            'orientation_or_proximity_in_interaction_secondary',
            'eye_contact_is_fleeting',
            'eye_contact_is_fleeting_secondary',
            'does_not_use_eye_contact',
            'does_not_use_eye_contact_secondary',
        ],
        'words_usages_vocabulary'            => [
            'repeats_words_or_phrases_or_sentences',
            'repeats_words_or_phrases_or_sentences_secondary',
            'Has_difficulties_using',
            'Has_difficulties_using_secondary',
            'or_using_humor_appropriately',
            'or_using_humor_appropriately_secondary',
            'demonstrate_literal_use_and_understanding_of_language',
            'demonstrate_literal_use_and_understanding_of_language_secondary',
            'has_difficulty_with_multiple_meaning_words',
            'has_difficulty_with_multiple_meaning_words_secondary',
            'uses_rote_or_recital_language',
            'uses_rote_or_recital_language_secondary',
            'demonstrate_idiosyncratic_word_use',
            'demonstrate_idiosyncratic_word_use_secondary',
            'has_a_large_vocabulary_with_little_comprehension',
            'has_a_large_vocabulary_with_little_comprehension_secondary',
            'reverses_personal_pronouns',
            'reverses_personal_pronouns_secondary',
        ],
        'sentence_structure'            => [
            'lacks_variety_in_use_of_sentence_structure',
            'lacks_variety_in_use_of_sentence_structure_secondary',
        ],

        'relaying_information'            => [
            'leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message',
            'leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message_secondary',
            'has_difficulties_relaying_information_in_a_sequential_way',
            'has_difficulties_relaying_information_in_a_sequential_way_secondary',
            'says_too_much_or_too_little',
            'says_too_much_or_too_little_secondary',
            'is_slow_in_answering_questions_in_class_or_work',
            'is_slow_in_answering_questions_in_class_or_work_secondary',
        ],
        'following_directions'            => [
            'has_difficulty_understanding_what_to_do',
            'has_difficulty_understanding_what_to_do_secondary',
            'often_asks_for_repeats_or_explanations_of_a_direction_or_assignment',
            'often_asks_for_repeats_or_explanations_of_a_direction_or_assignment_secondary',
            'does_the_wrong_thing_after_clear_directions_have_been_given',
            'does_the_wrong_thing_after_clear_directions_have_been_given_secondary',
            'doesnt_appear_to_watch_what_other_students_are_doing_for_information',
            'doesnt_appear_to_watch_what_other_students_are_doing_for_information_secondary',
            'doesnt_seek_help_in_following_directions_when_it_is_needed',
            'doesnt_seek_help_in_following_directions_when_it_is_needed_secondary',
            'appears_to_have_difficulty_understanding_tone_of_voice',
            'appears_to_have_difficulty_understanding_tone_of_voice_secondary',
            'has_difficulty_comprehending_questions',
            'has_difficulty_comprehending_questions_secondary',
        ],
        'attention_and_memory'            => [
            'has_an_excellent_rote_memory_with_poor_comprehension',
            'has_an_excellent_rote_memory_with_poor_comprehension_secondary',
            'often_looks_away_or_',
            'often_looks_away_or_secondary',
            'has_difficulty_remembering_orally_presented_information',
            'has_difficulty_remembering_orally_presented_information_secondary',
            'has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story',
            'has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story_secondary',
            'demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members',
            'demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members_secondary',
            'has_difficulty_shifting_attention',
            'has_difficulty_shifting_attention_secondary',
            'has_difficulty_with_joint_attention',
            'has_difficulty_with_joint_attention_secondary',
            'focuses_on_apparently_irrelevant_information_or_details',
            'focuses_on_apparently_irrelevant_information_or_details_secondary',
            'uses_delayed_r_immediate_echolalia',
            'uses_delayed_r_immediate_echolalia_secondary',
            'repeats_passages_from_movie_songs_commercials_cartoons_etc',
            'repeats_passages_from_movie_songs_commercials_cartoons_etc_secondary',
            'does_not_responds_to_his_name',
            'does_not_responds_to_his_name_secondary',
            'responds_to_his_name_inconsistently',
            'responds_to_his_name_inconsistently_secondary',
            'inconsistently_attends_to_verbal_stimuli',
            'inconsistently_attends_to_verbal_stimuli_secondary',
            'response_to_speech_is_delayed',
            'response_to_speech_is_delayed_secondary',
        ],
        'conversation_social_communication'            => [
            'protective_reactions',
            'equilibrium_reaction',
            'demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests',
            'demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests_secondary',
            'looks_down_or_away_when_talking',
            'looks_down_or_away_when_talking_secondary',
            'makes_off_topic_comments',
            'makes_off_topic_comments_secondary',
            'has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics',
            'has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics_secondary',
            'has_difficulty_initiating_conversations',
            'has_difficulty_initiating_conversations_secondary',
            'has_difficulty_initiating_pay',
            'has_difficulty_initiating_pay_secondary',
            'has_hard_time_sustaining_topic_of_conversation',
            'has_hard_time_sustaining_topic_of_conversation_secondary',
            'has_difficulty_initiating_play',
            'has_difficulty_initiating_play_secondary',
            'has_a_hard_time_sustaining_topic_of_conversation',
            'has_a_hard_time_sustaining_topic_of_conversation_secondary',
            'has_a_hard_time_sustaining_play_with_others',
            'has_a_hard_time_sustaining_play_with_others_secondary',
            'demonstrate_problems_terminating_a_conversation',
            'demonstrate_problems_terminating_a_conversation_secondary',
            'has_difficulty_understanding_the_perspective_of_others',
            'has_difficulty_understanding_the_perspective_of_others_secondary',
            'has_trouble_responding_in_an_empathetic_manner',
            'has_trouble_responding_in_an_empathetic_manner_secondary',
            'interrupts_the_conversation_of_others',
            'interrupts_the_conversation_of_others_secondary',
            'has_difficulty_adapting_language_of_others',
            'has_difficulty_adapting_language_of_others_secondary',
            'has_difficulty_adapting_language_to_audience_or_setting',
            'has_difficulty_adapting_language_to_audience_or_setting_secondary',
            'talks_too_much_in_a_conversation_with_peers_or_adults',
            'talks_too_much_in_a_conversation_with_peers_or_adults_secondary',
            'talks_too_little_in_a_conversation_with_peers_adults',
            'talks_too_little_in_a_conversation_with_peers_adults_secondary',
            'bringing_up_the_same_topic_repeatedly',
            'bringing_up_the_same_topic_repeatedly_secondary',
            'gives_recitative_or_redundant_information',
            'gives_recitative_or_redundant_information_secondary',
            'demonstrates_difficulty_taking_turns',
            'demonstrates_difficulty_taking_turns_secondary',
            'does_not_use_language_to_regulate_others_action',
            'does_not_use_language_to_regulate_others_action_secondary',
            'has_difficulty_with_greetings_or_departures',
            'has_difficulty_with_greetings_or_departures_secondary',
            'has_difficulty_clarifying',
            'has_difficulty_clarifying_secondary',
            'has_difficulty_asking_for_clarification',
            'has_difficulty_asking_for_clarification_secondary',
            'has_difficulty_asking_question',
            'has_difficulty_asking_question_secondary',
            'use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction',
            'use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction_secondary',
            'significant_differences_between_interaction_skills_with_peers_vs_adults',
            'significant_differences_between_interaction_skills_with_peers_vs_adults_secondary',
            'does_not_evoke_attention_appropriately',
            'does_not_evoke_attention_appropriately_secondary',
            'difficulty_comprehending_social_rules',
            'difficulty_comprehending_social_rules_secondary',
            'difficulty_asking_for_and_accepting_help',
            'difficulty_asking_for_and_accepting_help_secondary',
            'protest_in_inappropriate_or_atypical_ways',
            'protest_in_inappropriate_or_atypical_ways_secondary',
            'does_not_ask_permission_when_appropriate_to_do_so',
            'does_not_ask_permission_when_appropriate_to_do_so_secondary',
            'is_unaware_of_his_impact_on_others',
            'is_unaware_of_his_impact_on_others_secondary',
            'demonstrates_limited_range_of_communicative_functions',
            'demonstrates_limited_range_of_communicative_functions_secondary',
            'pre_suppositional_skills_are_weak',
            'pre_suppositional_skills_are_weak_secondary',
            'appear_to_have_difficulty_judging_listener_interest',
            'appear_to_have_difficulty_judging_listener_interest_secondary',
        ],
        'play_skill'            => [
            'appears_more_interested_in_objectives_than_people',
            'appears_more_interested_in_objectives_than_people_secondary',
            'does_not_establish_joint_focus',
            'does_not_establish_joint_focus_secondary',
            'does_not_anticipate_social_approach_of_other',
            'does_not_anticipate_social_approach_of_other_secondary',
            'shows_little_awareness_of_peers_of_have_atypical_interactions',
            'shows_little_awareness_of_peers_of_have_atypical_interactions_secondary',
            'does_not_observe_peers_with_curiosity',
            'does_not_observe_peers_with_curiosity_secondary',
            'has_difficulty_with_parallel_play',
            'has_difficulty_with_parallel_play_secondary',
            'has_difficulty_with_associative_play',
            'has_difficulty_with_associative_play_secondary',
            'has_difficulty_with_cooperative_play',
            'has_difficulty_with_cooperative_play_secondary',
            'laughs_for_no_apparent_reason',
            'laughs_for_no_apparent_reason_secondary',
            'cries_for_no_apparent_reason',
            'cries_for_no_apparent_reason_secondary',
            'has_difficulty_sharing',
            'has_difficulty_sharing_secondary',
            'does_thing_s_for_himself_without_interacting_with_others',
            'does_thing_s_for_himself_without_interacting_with_others_secondary',
            'has_limited_imaginative_or_pretending_play',
            'has_limited_imaginative_or_pretending_play_secondary',
            'demonstrate_difficulty_with_cause_and_effect',
            'demonstrate_difficulty_with_cause_and_effect_secondary',
            'play_appears_ritualistic_or_recitation_or_rote',
            'play_appears_ritualistic_or_recitation_or_rote_secondary',
            'does_not_response_appropriately_to_others_distress',
            'does_not_response_appropriately_to_others_distress_secondary',
            'lack_of_joint_attention_such_as_showing_and_pointing',
            'lack_of_joint_attention_such_as_showing_and_pointing_secondary',
        ],
    ];
}
