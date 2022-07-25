<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FunctionalMovementskillRequest extends FormRequest
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
            "collection_date"                => 'required',
            "teacher_id"                     => 'required',
            "candidate_id"                   => 'required',
            "functional_movement_general_1"  => 'nullable',
            "functional_movement_general_2"  => 'nullable',
            "functional_movement_general_3"  => 'nullable',
            "functional_movement_foot_1"     => 'nullable',
            "functional_movement_ankle_1"    => 'nullable',
            "functional_movement_knee_1"     => 'nullable',
            "functional_movement_knee_2"     => 'nullable',
            "functional_movement_knee_3"     => 'nullable',
            "functional_movement_hip_1"      => 'nullable',
            "functional_movement_hip_2"      => 'nullable',
            "functional_movement_low_back_1" => 'nullable',
            "functional_movement_low_back_2" => 'nullable',
            "functional_movement_mid_back_1" => 'nullable',
            "functional_movement_shoulder_1" => 'nullable',
            "functional_movement_shoulder_2" => 'nullable',
            "functional_movement_shoulder_3" => 'nullable',
        ];
    }
}
