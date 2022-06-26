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
        Schema::create('functional_communications', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'candidate_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->string('talk_too_loud_for_the_context')->nullable();

            $table->json('speech')->nullable();
            $table->json('body_language')->nullable();
            $table->json('words_usages_vocabulary')->nullable();
            $table->json('sentence_structure')->nullable();
            $table->json('relaying_information')->nullable();
            $table->json('following_directions')->nullable();
            $table->json('attention_and_memory')->nullable();
            $table->json('conversation_social_communication')->nullable();
            $table->json('play_skill')->nullable();


            // $table->string('talk_too_loud_for_the_context_secondary')->nullable();
            // $table->string('speech_is_hard_to_understand')->nullable();
            // $table->string('speech_is_hard_to_understand_secondary')->nullable();
            // $table->string('speech_calls_attention_of_itself')->nullable();
            // $table->string('speech_calls_attention_of_itself_secondary')->nullable();
            // $table->string('voice_is_too_hard')->nullable();
            // $table->string('voice_is_too_hard_secondary')->nullable();
            // $table->string('voice_is_too_low')->nullable();
            // $table->string('voice_is_too_low_secondary')->nullable();
            // $table->string('repeats_words_of_parts_of_word_when_talking')->nullable();
            // $table->string('repeats_words_of_parts_of_word_when_talking_secondary')->nullable();
            // $table->string('talks_fast_causing_speech_to_be_unclear')->nullable();
            // $table->string('talks_fast_causing_speech_to_be_unclear_secondary')->nullable();
            // $table->string('speech_sounds_monotone')->nullable();
            // $table->string('speech_sounds_monotone_secondary')->nullable();
            // $table->string('speech_sounds_sign_song')->nullable();
            // $table->string('speech_sounds_sign_song_secondary')->nullable();

            // $table->string('talk_too_quietly_for_the_context')->nullable();
            // $table->string('talk_too_quietly_for_the_context_secondary')->nullable();
            // $table->string('body_posture_is_too_rigid')->nullable();
            // $table->string('body_posture_is_too_rigid_secondary')->nullable();
            // $table->string('body_posture_is_too_relaxed')->nullable();
            // $table->string('body_posture_is_too_relaxed_secondary')->nullable();
            // $table->string('has_noticed_nervous_mannerisms')->nullable();
            // $table->string('has_noticed_nervous_mannerisms_secondary')->nullable();
            // $table->string('has_limited_use_if_gestures')->nullable();
            // $table->string('has_limited_use_if_gestures_secondary')->nullable();
            // $table->string('demonstrates_unusual_facial_expressions')->nullable();
            // $table->string('demonstrates_unusual_facial_expressions_secondary')->nullable();
            // $table->string('shows_little_variation_in_facial_expressions')->nullable();
            // $table->string('shows_little_variation_in_facial_expressions_secondary')->nullable();
            // $table->string('expressions_or_body_language')->nullable();
            // $table->string('expressions_or_body_language_secondary')->nullable();
            // $table->string('orientation_or_proximity_in_interaction')->nullable();
            // $table->string('orientation_or_proximity_in_interaction_secondary')->nullable();
            // $table->string('eye_contact_is_fleeting')->nullable();
            // $table->string('eye_contact_is_fleeting_secondary')->nullable();
            // $table->string('does_not_use_eye_contact')->nullable();
            // $table->string('does_not_use_eye_contact_secondary')->nullable();

            // $table->string('repeats_words_or_phrases_or_sentences')->nullable();
            // $table->string('repeats_words_or_phrases_or_sentences_secondary')->nullable();
            // $table->string('Has_difficulties_using')->nullable();
            // $table->string('Has_difficulties_using_secondary')->nullable();
            // $table->string('or_using_humor_appropriately')->nullable();
            // $table->string('or_using_humor_appropriately_secondary')->nullable();
            // $table->string('demonstrate_literal_use_and_understanding_of_language')->nullable();
            // $table->string('demonstrate_literal_use_and_understanding_of_language_secondary')->nullable();
            // $table->string('has_difficulty_with_multiple_meaning_words')->nullable();
            // $table->string('has_difficulty_with_multiple_meaning_words_secondary')->nullable();
            // $table->string('uses_rote_or_recital_language')->nullable();
            // $table->string('uses_rote_or_recital_language_secondary')->nullable();
            // $table->string('demonstrate_idiosyncratic_word_use')->nullable();
            // $table->string('demonstrate_idiosyncratic_word_use_secondary')->nullable();
            // $table->string('has_a_large_vocabulary_with_little_comprehension')->nullable();
            // $table->string('has_a_large_vocabulary_with_little_comprehension_secondary')->nullable();
            // $table->string('reverses_personal_pronouns')->nullable();
            // $table->string('reverses_personal_pronouns_secondary')->nullable();

            // $table->string('lacks_variety_in_use_of_sentence_structure')->nullable();
            // $table->string('lacks_variety_in_use_of_sentence_structure_secondary')->nullable();
            
            // $table->string('leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message')->nullable();
            // $table->string('leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message_secondary')->nullable();
            // $table->string('has_difficulties_relaying_information_in_a_sequential_way')->nullable();
            // $table->string('has_difficulties_relaying_information_in_a_sequential_way_secondary')->nullable();
            // $table->string('says_too_much_or_too_little')->nullable();
            // $table->string('says_too_much_or_too_little_secondary')->nullable();
            // $table->string('is_slow_in_answering_questions_in_class_or_work')->nullable();
            // $table->string('is_slow_in_answering_questions_in_class_or_work_secondary')->nullable();

            // $table->string('has_difficulty_understanding_what_to_do')->nullable();
            // $table->string('has_difficulty_understanding_what_to_do_secondary')->nullable();
            // $table->string('often_asks_for_repeats_or_explanations_of_a_direction_or_assignment')->nullable();
            // $table->string('often_asks_for_repeats_or_explanations_of_a_direction_or_assignment_secondary')->nullable();
            // $table->string('does_the_wrong_thing_after_clear_directions_have_been_given')->nullable();
            // $table->string('does_the_wrong_thing_after_clear_directions_have_been_given_secondary')->nullable();
            // $table->string('doesnt_appear_to_watch_what_other_students_are_doing_for_information')->nullable();
            // $table->string('doesnt_appear_to_watch_what_other_students_are_doing_for_information_secondary')->nullable();
            // $table->string('doesnt_seek_help_in_following_directions_when_it_is_needed')->nullable();
            // $table->string('doesnt_seek_help_in_following_directions_when_it_is_needed_secondary')->nullable();
            // $table->string('appears_to_have_difficulty_understanding_tone_of_voice')->nullable();
            // $table->string('appears_to_have_difficulty_understanding_tone_of_voice_secondary')->nullable();
            // $table->string('has_difficulty_comprehending_questions')->nullable();
            // $table->string('has_difficulty_comprehending_questions_secondary')->nullable();

            // $table->string('has_an_excellent_rote_memory_with_poor_comprehension')->nullable();
            // $table->string('has_an_excellent_rote_memory_with_poor_comprehension_secondary')->nullable();
            // $table->string('often_looks_away_or_')->nullable();
            // $table->string('often_looks_away_or_')->nullable();
            // $table->string('has_difficulty_remembering_orally_presented_information')->nullable();
            // $table->string('has_difficulty_remembering_orally_presented_information_secondary')->nullable();
            // $table->string('has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story')->nullable();
            // $table->string('has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story_secondary')->nullable();
            // $table->string('demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members')->nullable();
            // $table->string('demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members_secondary')->nullable();
            // $table->string('has_difficulty_shifting_attention')->nullable();
            // $table->string('has_difficulty_shifting_attention_secondary')->nullable();
            // $table->string('has_difficulty_with_joint_attention')->nullable();
            // $table->string('has_difficulty_with_joint_attention_secondary')->nullable();
            // $table->string('focuses_on_apparently_irrelevant_information_or_details')->nullable();
            // $table->string('focuses_on_apparently_irrelevant_information_or_details_secondary')->nullable();
            // $table->string('uses_delayed_r_immediate_echolalia')->nullable();
            // $table->string('uses_delayed_r_immediate_echolalia_secondary')->nullable();
            // $table->string('repeats_passages_from_movie_songs_commercials_cartoons_etc')->nullable();
            // $table->string('repeats_passages_from_movie_songs_commercials_cartoons_etc_secondary')->nullable();
            // $table->string('does_not_responds_to_his_name')->nullable();
            // $table->string('does_not_responds_to_his_name_secondary')->nullable();
            // $table->string('responds_to_his_name_inconsistently')->nullable();
            // $table->string('responds_to_his_name_inconsistently_secondary')->nullable();
            // $table->string('inconsistently_attends_to_verbal_stimuli')->nullable();
            // $table->string('inconsistently_attends_to_verbal_stimuli_secondary')->nullable();
            // $table->string('response_to_speech_is_delayed')->nullable();
            // $table->string('response_to_speech_is_delayed_secondary')->nullable();

            // $table->string('protective_reactions')->nullable();
            // $table->string('equilibrium_reaction')->nullable();
            // $table->string('demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests')->nullable();
            // $table->string('demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests_secondary')->nullable();
            // $table->string('looks_down_or_away_when_talking')->nullable();
            // $table->string('looks_down_or_away_when_talking_secondary')->nullable();
            // $table->string('makes_off_topic_comments')->nullable();
            // $table->string('makes_off_topic_comments_secondary')->nullable();
            // $table->string('has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics')->nullable();
            // $table->string('has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics_secondary')->nullable();
            // $table->string('has_difficulty_initiating_conversations')->nullable();
            // $table->string('has_difficulty_initiating_conversations_secondary')->nullable();
            // $table->string('has_difficulty_initiating_pay')->nullable();
            // $table->string('has_difficulty_initiating_pay_secondary')->nullable();
            // $table->string('has_hard_time_sustaining_topic_of_conversation')->nullable();
            // $table->string('has_hard_time_sustaining_topic_of_conversation_secondary')->nullable();
            // $table->string('has_difficulty_initiating_play')->nullable();
            // $table->string('has_difficulty_initiating_play_secondary')->nullable();
            // $table->string('has_a_hard_time_sustaining_topic_of_conversation')->nullable();
            // $table->string('has_a_hard_time_sustaining_topic_of_conversation_secondary')->nullable();
            // $table->string('has_a_hard_time_sustaining_play_with_others')->nullable();
            // $table->string('has_a_hard_time_sustaining_play_with_others_secondary')->nullable();
            // $table->string('demonstrate_problems_terminating_a_conversation')->nullable();
            // $table->string('demonstrate_problems_terminating_a_conversation_secondary')->nullable();
            // $table->string('has_difficulty_understanding_the_perspective_of_others')->nullable();
            // $table->string('has_difficulty_understanding_the_perspective_of_others_secondary')->nullable();
            // $table->string('has_trouble_responding_in_an_empathetic_manner')->nullable();
            // $table->string('has_trouble_responding_in_an_empathetic_manner_secondary')->nullable();
            // $table->string('interrupts_the_conversation_of_others')->nullable();
            // $table->string('interrupts_the_conversation_of_others_secondary')->nullable();
            // $table->string('has_difficulty_adapting_language_of_others')->nullable();
            // $table->string('has_difficulty_adapting_language_of_others_secondary')->nullable();
            // $table->string('has_difficulty_adapting_language_to_audience_or_setting')->nullable();
            // $table->string('has_difficulty_adapting_language_to_audience_or_setting_secondary')->nullable();
            // $table->string('talks_too_much_in_a_conversation_with_peers_or_adults')->nullable();
            // $table->string('talks_too_much_in_a_conversation_with_peers_or_adults_secondary')->nullable();
            // $table->string('bringing_up_the_same_topic_repeatedly')->nullable();
            // $table->string('bringing_up_the_same_topic_repeatedly_secondary')->nullable();
            // $table->string('gives_recitative_or_redundant_information')->nullable();
            // $table->string('gives_recitative_or_redundant_information_secondary')->nullable();
            // $table->string('demonstrates_difficulty_taking_turns')->nullable();
            // $table->string('demonstrates_difficulty_taking_turns_secondary')->nullable();
            // $table->string('does_not_use_language_to_regulate_others_action')->nullable();
            // $table->string('does_not_use_language_to_regulate_others_action_secondary')->nullable();
            // $table->string('has_difficulty_with_greetings_or_departures')->nullable();
            // $table->string('has_difficulty_with_greetings_or_departures_secondary')->nullable();
            // $table->string('has_difficulty_clarifying')->nullable();
            // $table->string('has_difficulty_clarifying_secondary')->nullable();
            // $table->string('has_difficulty_asking_for_clarification')->nullable();
            // $table->string('has_difficulty_asking_for_clarification_secondary')->nullable();
            // $table->string('has_difficulty_asking_question')->nullable();
            // $table->string('has_difficulty_asking_question_secondary')->nullable();
            // $table->string('use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction')->nullable();
            // $table->string('use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction_secondary')->nullable();
            // $table->string('significant_differences_between_interaction_skills_with_peers_vs_adults')->nullable();
            // $table->string('significant_differences_between_interaction_skills_with_peers_vs_adults_secondary')->nullable();
            // $table->string('does_not_evoke_attention_appropriately')->nullable();
            // $table->string('does_not_evoke_attention_appropriately_secondary')->nullable();
            // $table->string('difficulty_comprehending_social_rules')->nullable();
            // $table->string('difficulty_comprehending_social_rules_secondary')->nullable();
            // $table->string('difficulty_asking_for_and_accepting_help')->nullable();
            // $table->string('difficulty_asking_for_and_accepting_help_secondary')->nullable();
            // $table->string('protest_in_inappropriate_or_atypical_ways')->nullable();
            // $table->string('protest_in_inappropriate_or_atypical_ways_secondary')->nullable();
            // $table->string('does_not_ask_permission_when_appropriate_to_do_so')->nullable();
            // $table->string('does_not_ask_permission_when_appropriate_to_do_so_secondary')->nullable();
            // $table->string('is_unaware_of_his_impact_on_others')->nullable();
            // $table->string('is_unaware_of_his_impact_on_others_secondary')->nullable();
            // $table->string('demonstrates_limited_range_of_communicative_functions')->nullable();
            // $table->string('demonstrates_limited_range_of_communicative_functions_secondary')->nullable();
            // $table->string('pre_suppositional_skills_are_weak')->nullable();
            // $table->string('pre_suppositional_skills_are_weak_secondary')->nullable();
            // $table->string('appear_to_have_difficulty_judging_listener_interest')->nullable();
            // $table->string('appear_to_have_difficulty_judging_listener_interest_secondary')->nullable();
            
            // $table->string('appears_more_interested_in_objectives_than_people')->nullable();
            // $table->string('appears_more_interested_in_objectives_than_people_secondary')->nullable();
            // $table->string('does_not_establish_joint_focus')->nullable();
            // $table->string('does_not_establish_joint_focus_secondary')->nullable();
            // $table->string('does_not_anticipate_social_approach_of_other')->nullable();
            // $table->string('does_not_anticipate_social_approach_of_other_secondary')->nullable();
            // $table->string('shows_little_awareness_of_peers_of_have_atypical_interactions')->nullable();
            // $table->string('shows_little_awareness_of_peers_of_have_atypical_interactions_secondary')->nullable();
            // $table->string('does_not_observe_peers_with_curiosity')->nullable();
            // $table->string('does_not_observe_peers_with_curiosity_secondary')->nullable();
            // $table->string('has_difficulty_with_parallel_play')->nullable();
            // $table->string('has_difficulty_with_parallel_play_secondary')->nullable();
            // $table->string('has_difficulty_with_associative_play')->nullable();
            // $table->string('has_difficulty_with_associative_play_secondary')->nullable();
            // $table->string('has_difficulty_with_cooperative_play')->nullable();
            // $table->string('has_difficulty_with_cooperative_play_secondary')->nullable();
            // $table->string('laughs_for_no_apparent_reason')->nullable();
            // $table->string('laughs_for_no_apparent_reason_secondary')->nullable();
            // $table->string('cries_for_no_apparent_reason')->nullable();
            // $table->string('cries_for_no_apparent_reason_secondary')->nullable();
            // $table->string('has_difficulty_sharing')->nullable();
            // $table->string('has_difficulty_sharing_secondary')->nullable();
            // $table->string('does_thing_s_for_himself_without_interacting_with_others')->nullable();
            // $table->string('does_thing_s_for_himself_without_interacting_with_others_secondary')->nullable();
            // $table->string('has_limited_imaginative_or_pretending_play')->nullable();
            // $table->string('has_limited_imaginative_or_pretending_play_secondary')->nullable();
            // $table->string('demonstrate_difficulty_with_cause_and_effect')->nullable();
            // $table->string('demonstrate_difficulty_with_cause_and_effect_secondary')->nullable();
            // $table->string('play_appears_ritualistic_or_recitation_or_rote')->nullable();
            // $table->string('play_appears_ritualistic_or_recitation_or_rote_secondary')->nullable();
            // $table->string('does_not_response_appropriately_to_others_distress')->nullable();
            // $table->string('does_not_response_appropriately_to_others_distress_secondary')->nullable();
            // $table->string('lack_of_joint_attention_such_as_showing_and_pointing')->nullable();
            // $table->string('lack_of_joint_attention_such_as_showing_and_pointing_secondary')->nullable();
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
        Schema::dropIfExists('functional_communications');
    }
};