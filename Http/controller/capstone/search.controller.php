<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$keywords = $_GET['keywords'];

$capstones = $connection->query("SELECT * FROM projects WHERE title LIKE '%$keywords%'")->fetchAll();

$categories = $connection->query("SELECT * FROM categories")->fetchAll();

view('capstone/index.view.php', [
    'heading' => 'Capstone',
    'breadcrumbs' => 'Search',
    'categories' => $categories,
    'capstones' => $capstones,
]);
