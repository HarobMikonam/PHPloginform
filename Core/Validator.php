<?php

namespace Loader\Core;

class Validator
{
    public function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public function password($value, $minLength = 8, $maxLength = 20)
    {
        $value = trim($value);
        $length = strlen($value);
        return ($length >= $minLength && $length <= $maxLength);
    }

    public function confirmedPassword($value, $valueToCheck)
    {
        return $value === $valueToCheck;
    }

}