<?php

$router->get('/', 'index.controller.php');

$router->get('/about', 'about.controller.php');
$router->get('/contact', 'contact.controller.php');
$router->get('/dashboard', 'dashboard.controller.php')->only('auth');

$router->get('/login', 'users/session/create.controller.php')->only('guest');
$router->post('/login', 'users/session/store.controller.php')->only('guest');

$router->delete('/logout', 'users/session/destroy.controller.php')->only('auth');

$router->get('/register', 'users/register/create.controller.php')->only('guest');
$router->post('/register', 'users/register/store.controller.php')->only('guest');

$router->get('/capstone', 'capstone/index.controller.php');
$router->get('/capstone/view', 'capstone/readpdf.controller.php');
$router->get('/capstone/show', 'capstone/show.controller.php');
$router->get('/capstone/create', 'capstone/create.controller.php')->only('auth');
$router->post('/capstone/create', 'capstone/store.controller.php')->only('auth');
