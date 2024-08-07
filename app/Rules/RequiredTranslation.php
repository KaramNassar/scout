<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class RequiredTranslation implements ValidationRule
{

    public function __construct(public ?array $otherLocaleData)
    {
    }

    /**
     * Run the validation rule.
     *
     * @param  Closure(string): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (array_key_exists('en', $this->otherLocaleData)) {
            foreach ($this->otherLocaleData['en'] as $key => $otherLocaleDatum) {
                if (!trim($otherLocaleDatum)) {
                    $fail("The $key is required in English language.");
                }
            }
        }
    }
}
