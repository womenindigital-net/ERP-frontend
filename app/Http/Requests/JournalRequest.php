<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JournalRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'project_id' => 'required|exists:projects,id',
            'transaction_amount' => 'required',
            'voucher_date' => 'required',
            'particulars' => 'nullable',
            'reference' => 'nullable',
            'account_no.*' => 'required',
            'account_particulars.*' => 'required',
            'debit.*' => 'nullable',
            'credit.*' => 'nullable',
        ];
    }
}