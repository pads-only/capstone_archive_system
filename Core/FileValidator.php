<?php

namespace Core;

class FileValidator
{
    public $errors = [];
    //chekc if there's a file
    public static function isEmpty($fileName)
    {
        return $fileName !== "";
    }

    //check if upload is success
    public static function uploadError($file)
    {
        return $file !== "";
    }

    //check for size limit
    public static function fileSize($file, $allowed_size)
    {
        return $file < $allowed_size;
    }

    public static function checkFileExtention($file)
    {
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        return $extension === 'pdf';
    }
}
