<?php

namespace Http\Form;

class LoginForm
{
    protected $errors = [];
    public function validateForm($email, $password)
    {
        if (! $password) {
            $this->errors['password'] = "Password should be at least 6 character and not greater than 50";
        }

        if (! $email) {
            $this->errors['email'] = "A valid email address is required!";
        }

        return empty($this->errors);
    }

    public function getError()
    {
        return $this->errors;
    }
}
