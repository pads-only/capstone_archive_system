<?php

session_start();

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/helper_functions.php";

spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);

    require BASE_PATH . $class . '.php';
});

require BASE_PATH . "Core/bootstrap.php";

//routes
$router = new Http\Routes\Router();

require base_path("Http/Routes/routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
