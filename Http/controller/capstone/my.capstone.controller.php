<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$current_user = $_SESSION['id'];

$capstones = $connection->query("SELECT * FROM projects WHERE uploaded_by = :current_user", [$current_user])->fetchAll();

$categories  = $connection->query("SELECT * FROM categories")->fetchAll();

view('capstone/my.capstone.view.php', [
    'heading' => 'Capstone',
    'capstones' => $capstones,
    'categories' => $categories,
    'breadcrumbs' => 'My Projects'
]);
