<?php

$router->get('/', 'index.controller.php')->only('user&guest');

$router->get('/about', 'about.controller.php')->only('user&guest');
$router->get('/contact', 'contact.controller.php')->only('user&guest');
$router->get('/dashboard', 'dashboard.controller.php')->only('user');

$router->get('/login', 'users/session/create.controller.php')->only('guest');
$router->post('/login', 'users/session/store.controller.php')->only('guest');

$router->delete('/logout', 'users/session/destroy.controller.php')->only('user');

$router->get('/register', 'users/register/create.controller.php')->only('guest');
$router->post('/register', 'users/register/store.controller.php')->only('guest');

$router->get('/capstone', 'capstone/index.controller.php')->only('user&guest');
$router->get('/capstone/view', 'capstone/readpdf.controller.php')->only('user&guest');
$router->get('/capstone/show', 'capstone/show.controller.php')->only('user&guest');
$router->get('/capstone/create', 'capstone/create.controller.php')->only('user');
$router->post('/capstone/create', 'capstone/store.controller.php')->only('user');

$router->get('/capstone/search', 'capstone/search.controller.php')->only('user&guest');

$router->get('/capstone/my_projects', 'capstone/my.capstone.controller.php')->only('user');

$router->get('/capstone/edit', 'capstone/edit.controller.php')->only('user');
$router->patch('/capstone/edit', 'capstone/update.controller.php')->only('user');
$router->delete('/capstone/destroy', 'capstone/destroy.controller.php')->only('user');

//admin
$router->get('/admin', 'admin/index.controller.php')->only('admin');
