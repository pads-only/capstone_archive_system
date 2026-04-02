<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$id = $_GET['id'];

$capstone = $connection->query("SELECT * FROM projects WHERE id=?", [$id])->fetch();


view('capstone/show.view.php', [
    'heading' => 'Capstone',
    'capstone' => $capstone,
    'breadcrumbs' => $capstone['title']
]);
