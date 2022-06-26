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
        Schema::create('socials', function(Blueprint $table)
        {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('users')->cascadeOnDelete();


            $table->json('pragmatic_objective')->nullable();
            $table->json('personal')->nullable();
            $table->json('topic_maintenance')->nullable();
            $table->json('conversational_structure')->nullable();
            $table->json('word_structure')->nullable();
            $table->json('manner_effectiveness')->nullable();
            $table->json('repair_structures')->nullable();
            $table->json('responsiveness')->nullable();
            $table->json('instrumental_states_needs')->nullable();
            $table->json('requesting')->nullable();
            $table->json('prosody')->nullable();
            $table->json('protests')->nullable();
            // $table->json('')->nullable();
            $table->json('humor')->nullable();
            $table->json('greetingsacknowledgements')->nullable();
            $table->json('problem_solving')->nullable();
            $table->json('deceit')->nullable();
            $table->json('academi_communication')->nullable();
            $table->json('nonverbal_communication')->nullable();
            $table->json('perspective_taking')->nullable();
            $table->json('regulatory_gives_commands')->nullable();
            $table->json('social_emotional')->nullable();
   


            // $table->string('interaction_with_adults')->nullable();
            // $table->string('one')->nullable();
            // $table->string('interaction_with_younger_children')->nullable();
            // $table->string('waiting_for_a_response_from_peers')->nullable();
            // $table->string('negotiating_deals')->nullable();
            // $table->string('taking_turns')->nullable();
            // $table->string('ability_to_interact_with_many_individuals_simultaneously')->nullable();
            // $table->string('ability_to_establish_multiple_friendships')->nullable();
            // $table->string('knowing_when_to_persist_or_let_go_of_an_idea')->nullable();
            // $table->string('interpreting_facial_expressions_and_voices')->nullable();
            // $table->string('understanding_the_rules_of_the_game')->nullable();
            // $table->string('expressing_various_appropriate_expressions')->nullable();
            // $table->string('receiving_and_giving_gifts')->nullable();
            // $table->string('understanding_sharing_and_the_concept_of_give_and_take')->nullable();
            // $table->string('participation_in_group_activities')->nullable();
            // $table->string('passive_tendencies')->nullable();
            // $table->string('aggressive_tendencies')->nullable();
            // $table->string('responsiveness')->nullable();
            // $table->string('ability_to_handle_being_left_out')->nullable();

            // $table->string('expresses_feelings')->nullable();
            // $table->string('identifies_feelings')->nullable();
            // $table->string('explains_feelings')->nullable();
            // $table->string('provides_excuses_or_reasons')->nullable();
            // $table->string('offers_an_opinion_with_support')->nullable();
            // $table->string('complains')->nullable();
            // $table->string('blames_others')->nullable();
            // $table->string('provides_pertinent_information_on_request')->nullable();

            // $table->string('ability_to_establish_a_topic')->nullable();
            // $table->string('ability_to_maintain_topic_relevancy')->nullable();
            // $table->string('ability_to_change_a_topic_using_signals')->nullable();
            // $table->string('ability_to_change_a_topic_using_verbal_means')->nullable();
            // $table->string('relevancy_of_information')->nullable();
            // $table->string('ability_to_interrupt_appropriately')->nullable();
            // $table->string('ability_to_terminate_the_conversation')->nullable();

            // $table->string('ability_to_initiate_a_conversation')->nullable();
            // $table->string('ability_to_establish_a_conversation_outside_of_the_interest_area')->nullable();
            // $table->string('ability_to_acknowledge_others_in_conversation')->nullable();
            // $table->string('ability_to_delete_redundant_information_appropriately')->nullable();
            // $table->string('ability_to_order_information_appropriately')->nullable();
            // $table->string('use_of_pedantic_speech')->nullable();
            
            // $table->string('ability_to_use_generals_or_specifics')->nullable();
            // $table->string('pronoun_use')->nullable();
            // $table->string('use_of_word_referents')->nullable();
            // $table->string('ability_to_employee')->nullable();

            // $table->string('lie_ambiguous_confusing_information_share')->nullable();
            // $table->string('provides_relevant_information')->nullable();
            // $table->string('truthfulness_of_information')->nullable();
            // $table->string('ability_to_establish_joint_activity')->nullable();
            // $table->string('tendency_to_present_personal_opinions_as_factual')->nullable();

            // $table->string('requests_clarification_as_needed')->nullable();
            // $table->string('spontaneously_provides_additional_information')->nullable();
            // $table->string('requests_repetition_of_information_for_clarification_purposes')->nullable();

            // $table->string('looks_at_speaker_when_called')->nullable();
            // $table->string('delay_of_response')->nullable();
            // $table->string('ability_to_label_information_appropriately')->nullable();
            // $table->string('ability_to_describe_objects_appropriately')->nullable();
            // $table->string('ability_to_describe_events_appropriately')->nullable();
            // $table->string('ability_to_state_facts_appropriately')->nullable();
            // $table->string('ability_to_provide_clarification_appropriately')->nullable();
            
            // $table->string('makes_polite_requests')->nullable();
            // $table->string('makes_choices')->nullable();
            // $table->string('gives_description_of_an_object_wanted')->nullable();
            // $table->string('expresses_a_specific_personal_need')->nullable();
            // $table->string('requests_help')->nullable();

            // $table->string('ability_to_request_information_appropriately')->nullable();
            // $table->string('ability_to_request_permission_appropriately')->nullable();
            // $table->string('ability_to_request_yes_no_responses_appropriately')->nullable();
            // $table->string('ability_to_use_wh_questions_appropriately')->nullable();
            // $table->string('ability_to_request_an_action_of_another_appropriately')->nullable();
            // $table->string('ability_to_request_clarification_appropriately')->nullable();
            // $table->string('ability_to_request_attention_appropriately')->nullable();
            // $table->string('ability_to_request_help_appropriately')->nullable();

            // $table->string('ability_to_use_appropriate_rate_of_speech')->nullable();
            // $table->string('ability_to_use_appropriate_tone_of_voice')->nullable();
            // $table->string('ability_to_use_appropriate_pitch')->nullable();
            // $table->string('ability_to_use_appropriate_loudness')->nullable();
            // $table->string('ability_to_comprehend_implied_meanings_via_tone_of_voice')->nullable();
            // $table->string('ability_to_comprehend_implied_meanings_via_inflectional_cues')->nullable();

            // $table->string('ability_to_state_his_opinion_using_appropriate_means')->nullable();
            // $table->string('ability_to_disagree')->nullable();

           

            // $table->string('ability_to_shift_the_style_of_conversation_according_to_person')->nullable();
            // $table->string('ability_to_shift_the_style_of_conversation_according_to_the_setting')->nullable();
            // $table->string('ability_to_shift_the_style_of_conversation_according_to_humor')->nullable();
            // $table->string('ability_to_engage_a_listener_appropriately')->nullable();
            // $table->string('ability_to_use_politeness')->nullable();
            // $table->string('appropriateness_to_the_situation')->nullable();
            // $table->string('ability_to_recognize_others_moods')->nullable();
            // $table->string('ability_to_differentiate_requests_from_demands')->nullable();

            // $table->string('comprehends_humor')->nullable();
            // $table->string('uses_humor_appropriately')->nullable();

            // $table->string('provides_greetings')->nullable();
            // $table->string('uses_greetings')->nullable();
            // $table->string('ability_to_acknowledge_the_presence_of_another_individual')->nullable();

            // $table->string('ability_to_solve_problems_affecting_himself')->nullable();
            // $table->string('ability_to_solve_problems_affecting_others')->nullable();
            // $table->string('ability_to_recognize_problems_affecting_others')->nullable();
            // $table->string('ability_to_recognize_problems_affecting_himself')->nullable();
            // $table->string('ability_to_establish_cause_effect')->nullable();
            // $table->string('ability_to_use_conflict_resolution')->nullable();

            // $table->string('uses_language_to_deceive')->nullable();
            // $table->string('lies')->nullable();

            // $table->string('ability_to_respond_appropriately_to_teacher_requests')->nullable();
            // $table->string('ability_to_reorient_to_academic_agenda_appropriately')->nullable();
            // $table->string('ability_to_obtain_teachers_attention_appropriately')->nullable();
            // $table->string('ability_to_request_clarification_from_teacher')->nullable();
            // $table->string('ability_to_participate_in_classroom_discussions')->nullable();
            // $table->string('ability_to_interact_with_classroom_peers')->nullable();
            // $table->string('ability_to_paraphrase_text')->nullable();
            // $table->string('ability_to_summarize_a_story_providing_key_information')->nullable();
            // $table->string('ability_to_respond_to_questions_requiring_inferential_reasoning')->nullable();

            // $table->string('ability_to_recognize_personal_space_boundaries')->nullable();
            // $table->string('ability_to_touch_appropriatel')->nullable();
            // $table->string('comprehends_facial_expression')->nullable();
            // $table->string('comprehends_eye_gaze')->nullable();
            // $table->string('comprehends_gestures')->nullable();
            // $table->string('comprehends_body_language')->nullable();
            // $table->string('ability_to_use_facial_expression')->nullable();
            // $table->string('ability_to_use_eye_gaze')->nullable();
            // $table->string('ability_to_use_gestures')->nullable();
            // $table->string('ability_to_use_body_language')->nullable();
            // $table->string('ability_to_use_eye_contact')->nullable();
            
            // $table->string('ability_to_recognize_anothers_viewpoints')->nullable();
            // $table->string('ability_to_recognize_anothers_interests')->nullable();
            // $table->string('ability_to_recognize_anothers_feelings')->nullable();
            // $table->string('ability_to_demonstrate_concern_for_anothers_problems')->nullable();

            // $table->string('gives_directions_to_play_a_game')->nullable();
            // $table->string('gives_directions_to_make_something')->nullable();
            // $table->string('changes_the_style_of_commands_or_requests_depending_on_who_the_child_is_speaking_to_and_what_the_child_wants')->nullable();

            // $table->string('ability_to_recognize_personal_emotional_states')->nullable();
            // $table->string('ability_to_recognize_emotional_states_in_others')->nullable();
            // $table->string('ability_to_express_personal_emotional_state')->nullable();
            // $table->string('perfectionist_quality')->nullable();
            // $table->string('ability_to_use_appropriate_self_control')->nullable();
            // $table->string('ability_to_lose_a_game_graciously')->nullable();
            // $table->string('degree_of_anxiety_in_social_settings')->nullable();
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
        Schema::dropIfExists('socials');
    }
};
