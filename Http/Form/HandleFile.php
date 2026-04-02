<?php

namespace Http\Form;

use Core\FileValidator;

class HandleFile
{
    protected $errors = [];

    public function validateFile($file)
    {
        if (! FileValidator::isEmpty($file['name'])) {
            $this->errors['file'] = "File is required!";
        }

        if (! FileValidator::uploadError($file['error'])) {
            $this->errors['file'] = "Something went wrong!";
        }

        if (! FileValidator::fileSize($file['size'], 5000000)) {
            $this->errors['file'] = "File is too big!";
        }

        if (! FileValidator::checkFileExtention($file['name'])) {
            $this->errors['file'] = "Invalid file type!";
        }


        return empty($this->errors);
    }

    public function getError()
    {
        return $this->errors;
    }
}
