<?php

namespace App\Rules;

use App\Models\Token;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Rule;

class ValidJeton implements Rule
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

        $token = new Token();
        $jeton = $token->getTokenById($value);

        if($jeton && $jeton[0]->etat === 1) {
            return true;
        } else {
            return false;
        }
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Le token est invalide.';
    }
}
