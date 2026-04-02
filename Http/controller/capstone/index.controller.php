<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$capstones = $connection->query('SELECT * from projects ORDER BY id DESC')->fetchAll();

view('capstone/index.view.php', [
    'heading' => 'Capstone',
    'capstones' => $capstones,
]);
