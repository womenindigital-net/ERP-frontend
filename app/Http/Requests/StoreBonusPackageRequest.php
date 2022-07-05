<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBonusPackageRequest extends FormRequest
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
            'ammount'        => 'nullable',
            'sal_id'            => 'nullable',
            'total_ammount'         => 'nullable',
            'curnc_id'        => 'nullable',
        ];
    }
}
