<?php

namespace App\Rules;

use App\Models\Journal;
use Illuminate\Contracts\Validation\Rule;

class JournalRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        dd(Journal::where('transaction_amount', '==', $value));
        return Journal::where('transaction_amount', '==', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Not Match with Transaction Amount.';
    }
}