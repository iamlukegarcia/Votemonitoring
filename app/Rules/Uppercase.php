<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
 
class Uppercase implements Rule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        
        if ( $value) {
            $fail('The :attribute must be uppercase.');
        }
    }
}
