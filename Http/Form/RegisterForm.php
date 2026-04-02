<?php


namespace Http\Form;


class RegisterForm
{

    protected $errors = [];


    public function validateForm($name, $email, $password, $confirm_password)
    {
        if (! $name) {
            $this->errors['name'] = "Name should be at least 3 character and not greater than 50";
        }

        if (! $email) {
            $this->errors['email'] = "A valid email address is required!";
        }

        if (! $password && ! $confirm_password) {
            $this->errors['password'] = "Password should be at least 6 character and not greater than 50";
        }

        if ($password !== $confirm_password) {
            $this->errors["password"] = "Password doesn't match!";
        }

        return empty($this->errors);
    }

    public function getError()
    {
        return $this->errors;
    }
}
