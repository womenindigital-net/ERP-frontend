<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeTypeSetupRequest extends FormRequest
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
            'employeetype_name'           => 'nullable',
            'type_desc'            => 'nullable',
            'btnradio1'        => 'nullable',
            'btnradio2'            => 'nullable',
            'btnradio3'         => 'nullable',
            'btnradio4'        => 'nullable',
            'note'            => 'nullable',
            'search'            => 'nullable',
        ];
    }
}
