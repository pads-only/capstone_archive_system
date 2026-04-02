<?php

/**
 * Formatted var_dump
 * 
 * @param string $value
 * 
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

/**
 * @param string $path
 * @return string full path absolute path to the file
 */
function base_path($path)
{
    return BASE_PATH . $path;
}

/**
 * @param string path
 * @param array $attributes
 * @return string full path of the views folder path
 */

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path("views/{$path}");
}


function abort($status)
{
    http_response_code($status);

    view("http_codes/{$status}.php");

    die();
}
