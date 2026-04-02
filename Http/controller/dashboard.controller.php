<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$current_user = $_SESSION['id'];

$capstones = $connection->query("SELECT * FROM projects ORDER BY id DESC LIMIT 3 ")->fetchAll();

$categories  = $connection->query("SELECT * FROM categories")->fetchAll();


view('dashboard.view.php', [
    'heading' => 'Dashoard',
    'capstones' => $capstones,
    'breadcrumbs' => 'Dashboard',
    'categories' => $categories
]);
