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

            "collection_date"         => 'nullable',
            "teacher_id"              => 'nullable',
            "candidate_id"            => 'nullable',
            "separate_home_equipment" => 'nullable',
            "communication"           => 'nullable',
            "left"                    => 'nullable',
            "right"                   => 'nullable',
            "lower_limbs"             => 'nullable',
            "trunk_or_neck"           => 'nullable',
            "upper_limbs"             => 'nullable',
            "designation_name"        => 'nullable',
            "memory"                  => 'nullable',
            "problem_list"            => 'nullable',
            "treatment_plan"          => 'nullable',
            "progress"                => 'nullable',
            "previous"                => 'nullable',
            "next"                    => 'nullable',
            

        ];
    }
}
