<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class StoreAutisumBhehaviourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
//        dd($this->request->all());

        return [
            "date"                                                             => 'nullable',
            "teacher_id"                                                       => 'nullable',
            "student_id"                                                       => 'nullable',
            "poor_use_of_visual_discrimination_when_learning"                  => 'nullable',
            "seems_not_to_hear"                                                => 'nullable',
            "sometimes_shows_no_startle_response"                              => 'nullable',
            "sometimes_painful_stimuli_such_as_bruises"                        => 'nullable',
            "covers_ears_at_many_sounds"                                       => 'nullable',
            "squints_frowns_covers_eyes_when_in_the_presence_of_natural_light" => 'nullable',
            "frequently_has_no_visual_reaction"                                => 'nullable',
            "stares_into_space_for_long_periods_of_time"                       => 'nullable',
            "whirls_self_for_long_periods_of_time"                             => 'nullable',
            "does_not_use_toys_appropriately"                                  => 'nullable',
            "insists_on_keeping_certain_objects"                               => 'nullable',
            "rocks_self_for_long_periods_of_time"                              => 'nullable',
            "does_a_lot_of_lunging_and_darting"                                => 'nullable',
            "flaps_hands"                                                      => 'nullable',
            "walks_on_toes"                                                    => 'nullable',
            "hurts_self_by_banging_head"                                       => 'nullable',
            "twirls_spins_and_bangs_objects_lot"                               => 'nullable',
            "will_feel_smell"                                                  => 'nullable',
            "gets_involved_in_complicated_rituals"                             => 'nullable',
            "is_very_destructive"                                              => 'nullable',
            "often_frightened_or_very_anxious"                                 => 'nullable',
            "looks_through_people"                                             => 'nullable',
            "whirls_self_for_long_periods_time"                                => 'nullable',
            "sometimes_shows_no_startle_response_to_loud_noise"                => 'nullable',
            "rocks_self_for_long_periods_time"                                 => 'nullable',
            "does_lot_lunging_and_darting"                                     => 'nullable',
            "hurts_self_banging_head"                                          => 'nullable',
            "twirls_spins_bangs_objects_lot"                                   => 'nullable',
            "will_feel_smell_taste_objects_environment"                        => 'nullable',
            "gets_involved_complicated"                                        => 'nullable',
            "does_not_follow_simple_commands_given_once"                       => 'nullable',
            "has_pronoun_reversal"                                             => 'nullable',
            "atonalspeech_pattern"                                             => 'nullable',
            "does_not_respond_to_own_name_when_called_out_among_two_others"    => 'nullable',
            "seldom_says_yes_or_I"                                             => 'nullable',
            "does_not_follow_simple_commands_involving_prepositions"           => 'nullable',
            "gets_desired_objects_by_gesturing"                                => 'nullable',
            "repeats_phrases_over_and_over"                                    => 'nullable',
            "cannot_point_to_more_than_five_named_objects"                     => 'nullable',
            "uses_5_spontaneous_words_per_day"                                 => 'nullable',
            "repeats_sounds_or_words"                                          => 'nullable',
            "echoes_questions_or_statements"                                   => 'nullable',
            "uses_at_least_15_but_less_than_30"                                => 'nullable',
            "learns_a_simple_task"                                             => 'nullable',
            "strong_reactions_changes_in_routine_environment"                  => 'nullable',
            "has_special_abilities_in_one_area_of_development"                 => 'nullable',
            "severe_temper_tantrums"                                           => 'nullable',
            "hurts_others_by_biting_hitting_kicking"                           => 'nullable',
            "does_not_wait_for_needs_to_be_met"                                => 'nullable',
            "difficulties_with_toileting"                                      => 'nullable',
            "does_not_dress_self_without_frequent_help"                        => 'nullable',
            "frequently_unaware_surroundings"                                  => 'nullable',
            "prefers_to_manipulate_and_be_occupied_with_inanimate_things"      => 'nullable',
            "a_developmental_delay_was_identified"                             => 'nullable',
        ];
    }
}
