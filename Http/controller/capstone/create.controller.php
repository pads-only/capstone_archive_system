<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$categories = $connection->query("SELECT * FROM categories")->fetchAll();

view('capstone/create.view.php', [
    'heading' => 'Capstone',
    'breadcrumbs' => 'Upload Project',
    'categories' => $categories,
]);
