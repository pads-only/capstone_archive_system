<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$id = $_GET['id'];

$capstone = $connection->query("SELECT * FROM projects WHERE id=?", [$id])->fetch();

$category = $connection->query("SELECT name FROM categories WHERE id =:id", [$capstone['category_id']])->fetch();


if (! $capstone) {
    abort(404);
}

view('capstone/show.view.php', [
    'heading' => 'Capstone',
    'capstone' => $capstone,
    'category_name' => $category['name'],
    'breadcrumbs' => $capstone['title']
]);
