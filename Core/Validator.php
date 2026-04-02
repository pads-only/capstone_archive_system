<?php

namespace Core;

class Validator
{
    /**
     * @param string $input
     * @return string trimmed string values 
     */

    public static function sanitizeInput($input)
    {
        return trim($input ?? "");
    }

    /**
     * @param array $inputs
     * @param string $error 
     * @return bool checks if input is empty and return true or false
     */
    public static function isEmpty($input)
    {
        return $input !== "";
    }

    /**
     * @param string $input
     * @param int $min-> minimum lenght allowed
     * @param int $max -> max lenght allowed
     * @return bool return false if at least one conditon is false
     * will return true if both condition are true
     */

    public static function checkLenght($input, $min = 3, $max = INF)
    {
        return strlen($input) >= $min && strlen($input) <= $max;
    }

    /**
     * @param string $email
     * @return bool returns true if email is valid, false otherwise
     */

    public static function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validateString($string, $min = 3, $max = INF)
    {
        //sanitize 
        $string = static::sanitizeInput($string);

        //check if empty
        if (! static::isEmpty($string)) {
            return;
        }

        //check lenght
        if (! static::checkLenght($string, $min, $max)) {
            return;
        }

        //return
        return $string;
    }
    public static function validateName($name)
    {
        //sanitize 
        $name = static::sanitizeInput($name);

        //check if empty
        if (! static::isEmpty($name)) {
            return;
        }

        //check lenght
        if (! static::checkLenght($name, 3, 50)) {
            return;
        }

        //return
        return $name;
    }


    public static function validatePassword($password)
    {
        //sanitize password
        $password = static::sanitizeInput($password);

        // check if empty
        if (! static::isEmpty($password)) {
            return false;
        }

        //check for lenght
        if (! static::checkLenght($password, 6, 50)) {
            return;
        }

        //hash the password
        // $password = static::hashedPassword($password);

        //return the password
        return $password;
    }

    public static function validateEmail($email)
    {
        //sanitize
        $email = static::sanitizeInput($email);

        //check if empty
        if (! static::isEmpty($email)) {
            return;
        }

        //check if valid email
        if (! static::isValidEmail($email)) {
            return;
        }

        //return email
        return $email;
    }

    /**
     * @param string $password
     * @return string hashed value of the password
     */

    public static function hashedPassword($password)
    {
        return password_hash($password, PASSWORD_ARGON2ID);
    }
}
