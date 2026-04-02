<?php

use Config\Database;
use Core\App;
use Core\Container;
use Core\Validator;
use Middleware\Middleware;

$container = new Container();

$container->bind('Config\Database', function () {
    $config = require(base_path('Config/db_config.php'));

    return new Database($config['database']);
});

$container->bind('Core\Validator', function () {
    return new Validator();
});

App::setContainer($container);
