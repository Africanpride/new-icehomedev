<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AllowedEmailsRule implements ValidationRule
{
    private $emails = [
        'info@icehomedev.com',
        'kwame@icehomedev.com',
        'webmaster@icehomedev.com',
    ];
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        if (!in_array($value, $this->emails)) {
            $fail('Only certain people are allowed to register. Check with Admin first.');
        };
    }
}
