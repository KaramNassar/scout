<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Translation\PotentiallyTranslatedString;

class UniqueTranslation implements ValidationRule
{
    public ?int $exceptId;

    public function __construct(
        public string $table,
        public string $column,
        public ?array $otherLocaleData,
        int $exceptId = null
    ) {
        $this->exceptId = $exceptId;
    }

    /**
     * Run the validation rule.
     *
     * @param  Closure(string): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $enFlag = false;

        if (array_key_exists('en', $this->otherLocaleData)) {
            if ($enValue = trim($this->otherLocaleData['en'][$this->column])) {
                $value = $enValue;
                $enFlag = true;

            }
        } else {
            $value = trim($value);
        }

        $query = DB::table($this->table)
            ->where($this->column, 'like', "%\"$value\"%");

        if ($this->exceptId) {
            $query->where('id', '!=', $this->exceptId);
        }

        if ($query->exists()) {
            $fail('The :attribute has already been taken ' . ($enFlag ? 'in English language' : ''));
        }
    }
}
