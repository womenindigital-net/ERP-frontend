<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareNeedPartOneRequest extends FormRequest
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
    public function rules()
    {
        return [
            "collection_date"    => 'nullable',
            "teacher_id"    => 'nullable',
            "student_id"    => 'nullable',
            "from_where_you_learned_about_us"    => 'nullable',
            "Doctor_physician_under_medical_treatment_name"    => 'nullable',
            "contact_umber"    => 'nullable',
            "govt_disability_registration"    => 'nullable',
            "If_yes_enter_registration_number"    => 'nullable',
            "suggestion_on_obtaining_registration"    => 'nullable',
            "referred_to_parents_forum"    => 'nullable',
            "iss_she_has_utism"    => 'nullable',
            "is_she_has_down_syndrome"    => 'nullable',
            "is_she_has_cerebral_palsy"    => 'nullable',
            "is_she_has_intellectual_disability"    => 'nullable',
            "is_she_has_dyslexia"    => 'nullable',
        ];
    }
}
