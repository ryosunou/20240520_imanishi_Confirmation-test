<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class TinyintGender implements Rule
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

        // gender の値が 0, 1, 2 のいずれかであることを確認
        return in_array($value, [0, 1, 2], true);
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid gender value (0, 1, or 2).';
    }
}
