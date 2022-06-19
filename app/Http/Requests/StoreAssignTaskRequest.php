<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssignTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
        return [
            "student_id"                     => 'nullable',
            "assignment_name"                => 'nullable',
            "start_date"                     => 'nullable',
            "end_date"                       => 'nullable',
            "instruction"                    => 'nullable',
            "teacher_id"                     => 'nullable',
            "comment"                           => 'nullable',
            "organized_play"                 => 'nullable',
            "jumping_jacks"                  => 'nullable',
            "fitness_physical_activity"      => 'nullable',
            "adaptations"                    => 'nullable',
            "fundamental_movement_exercisel" => 'nullable',
            "yoga"                           => 'nullable',
            "craft_activities"               => 'nullable',
            "assertiveness"                  => 'nullable',
            "functional_reading_skills"      => 'nullable',
            "money_management_skills"        => 'nullable',
            "shaving_routing"                => 'nullable',
            "basic_first_aid_knowledge"      => 'nullable',
            "meal_preparation_skills"        => 'nullable',
            "serving_food"                   => 'nullable',
            "self_awareness_intrapersonal"              => 'nullable',
            "self_esteem_intrapersonal"              => 'nullable',
            "self_regulation_intrapersonal"              => 'nullable',
            "managing_death_of_family_members"              => 'nullable',
            "managing_death_of_relative_friends"              => 'nullable',
            "interpersonal_skills"              => 'nullable',
            "handle_accept_different_situation"              => 'nullable',
            "understand_social_deviation"              => 'nullable',
            "how_to_play_with_others"              => 'nullable',
            "me_and_you"              => 'nullable',
            "ethical_values"              => 'nullable',
            "work_readiness_ethical_values"              => 'nullable',
            "home_maintenance_self_development"              => 'nullable',
            "cleaning_washing_chores_self_development"              => 'nullable',
            "telephone_skills_self_development"              => 'nullable',
        ];
    }
}
