<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplyForJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'           => 'nullable',
            'last_name'            => 'nullable',
            'mobile_number'        => 'nullable',
            'email_add'            => 'nullable',
            'applying_for'         => 'nullable',
            'date_of_birth'        => 'nullable',
            'cv_upload'            => 'nullable',
        ];
    }
}
