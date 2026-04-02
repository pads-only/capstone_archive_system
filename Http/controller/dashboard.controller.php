<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$current_user = $_SESSION['id'];

$capstones = $connection->query("select * from projects order by id desc limit 3 ")->fetchAll();

view('dashboard.view.php', [
    'heading' => 'Dashoard',
    'capstones' => $capstones
]);
