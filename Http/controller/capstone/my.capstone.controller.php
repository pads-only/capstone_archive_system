<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$current_user = $_SESSION['id'];

$capstones = $connection->query("select * from projects where uploaded_by = :current_user", [$current_user])->fetchAll();


view('capstone/my.capstone.view.php', [
    'heading' => 'Capstone',
    'capstones' => $capstones,
    'breadcrumbs' => 'My Projects'
]);
