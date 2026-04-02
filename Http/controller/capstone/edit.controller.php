<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$id = $_GET['id'];

$capstone = $connection->query("SELECT * FROM projects WHERE id= :id", [$id])->fetch();

if (! $capstone) {
    abort(404);
}

if ($capstone['uploaded_by'] !== $_SESSION['id']) {
    abort(403);
}

view('capstone/edit.view.php', [
    'heading' => 'Capstone',
    'capstone' => $capstone,
    'breadcrumbs' => "Edit Project"
]);
