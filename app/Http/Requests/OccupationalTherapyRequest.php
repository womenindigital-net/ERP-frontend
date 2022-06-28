<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OccupationalTherapyRequest extends FormRequest
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

            "date"                                          => 'nullable',
            "teacher_id"                                    => 'nullable',
            "candidate_id"                                  => 'nullable',
            "general"                                       => 'nullable',
            "muscle_tone"                                   => 'nullable',
            "range_of_movement"                             => 'nullable',
            "functional_gross_motor"                        => 'nullable',
            "transitional_movements"                        => 'nullable',
            "fine_motor_skill"                              => 'nullable',
            "automatic_reaction"                            => 'nullable',
            "sensory_skill"                                 => 'nullable',
            "visual_perception"                             => 'nullable',
            "activities_of_daily_living"                    => 'nullable',
            "strength"                                      => 'nullable',
            "signature"                                     => 'nullable',
            "cognitive_skills"                              => 'nullable',
            "treatment_Plan"                                => 'nullable',
        ];
    }
}
