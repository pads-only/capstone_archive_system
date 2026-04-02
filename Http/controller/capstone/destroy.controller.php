<?php

use Config\Database;
use Core\App;

$connection = App::resolve(Database::class);

$connection->query("DELETE FROM projects WHERE id =:id AND uploaded_by = :uploaded_by", [$_POST['id'], $_SESSION['id']]);

header("location: /capstone/my_projects");
exit();
