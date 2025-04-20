<?php

namespace Loader\Core;

class Validator
{
    /**
     * @param $value
     * @return mixed
     */
    public function email($value)
    {
        $result = filter_var($value, FILTER_VALIDATE_EMAIL);
        if ($result === false) {
            $errors['email'] = 'Invalid email.';
        }
    }

    /**
     * @param $value
     * @param $minLength
     * @param $maxLength
     * @return bool
     */
    public function password($value, $minLength = 8, $maxLength = 20)
    {
        $value = trim($value);
        $length = strlen($value);
        $result = !(($length < $minLength || $length > $maxLength));
        if ($result === false) {
            $errors['password'] = 'Invalid Password, make sure its minimum 8 characters and maximum 20 characters.';
        }
    }

    /**
     * @param $value
     * @param $valueToCheck
     * @return bool
     */
    public function confirmedPassword($value, $valueToCheck){
        $value = trim($value);
        $result =  ($value == $valueToCheck);
        if ($result === false) {
            $errors['repassword'] = 'Passwords do not match.';
        }
    }
}