<?php

namespace App\Rules;

use App\Exam\Models\Question;
use Illuminate\Contracts\Validation\Rule;

class AllQuestionsMustBeAnswered implements Rule
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
        return count(request()->input($attribute)) == Question::count();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Each question must have an answer.';
    }
}
