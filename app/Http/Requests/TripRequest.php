<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripRequest extends FormRequest
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
        return [
            'bath' => 'nullable',
            'bath_secondary' => 'nullable',
            'wearing_cloth' => 'nullable',
            'wearing_cloth_secondary' => 'nullable',
            'wrooming' => 'nullable',
            'wrooming_secondary' => 'nullable',
            'do_toilet' => 'nullable',
            'do_toilet_secondary' => 'nullable',
            'eating_healthy_food' => 'nullable',
            'eating_healthy_food_secondary' => 'nullable',
            'wakeup_from_bed' => 'nullable',
            'wakeup_from_bed_secondary' => 'nullable',
            'get_up_from_the_chair' => 'nullable',
            'get_up_from_the_chair_secondary' => 'nullable',
            'walk' => 'nullable',
            'walk_secondary' => 'nullable',

            'taking_trip_materials_and_preparation' => 'nullable',
            'taking_trip_materials_and_preparation_secondary' => 'nullable',
            'whether_the_trainee_has_been_contacted' => 'nullable',
            'whether_the_trainee_has_been_contacted_secondary' => 'nullable',
            'communicate_with_other_members_of_the_team' => 'nullable',
            'communicate_with_other_members_of_the_team_secondary' => 'nullable',
            'where_visits' => 'nullable',
            'where_visits_secondary' => 'nullable',
            'who_were_driving_cars_or_other_assistants' => 'nullable',
            'who_were_driving_cars_or_other_assistants_secondary' => 'nullable',
            'overall_tour_like' => 'nullable',
            'overall_tour_like_secondary' => 'nullable',
            'this_trip' => 'nullable',
            'this_trip_secondary' => 'nullable',
            'tour_presented_and_managed_professionally' => 'nullable',
            'tour_presented_and_managed_professionally_secondary' => 'nullable',
            'teacher_went_alone_or_in_the_team' => 'nullable',
            'teacher_went_alone_or_in_the_team_secondary' => 'nullable',
            'trip_description' => 'nullable',
        ];
    }
}
