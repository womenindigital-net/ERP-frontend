<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndividualRiskRequest extends FormRequest
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
            "collection_date"             => 'nullable',
            "student_id"                  => 'nullable',
            "causeof_hazzard"             => 'nullable',
            "possible_concerns"           => 'nullable',
            "risk_rating"                 => 'nullable',
            "action_to_reduce_hazard"     => 'nullable',
            "level_of_risk"               => 'nullable',
            "likelihood"                  => 'nullable',
            "consequences"                => 'nullable',
            "staff_signature"             => 'nullable',
            "staff_name"                  => 'nullable',
            "signature_of_support_worker" => 'nullable',
            "support_worker_name"         => 'nullable',
        ];
    }
}
