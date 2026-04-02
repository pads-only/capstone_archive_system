<?php

use Config\Database;
use Core\Validator;
use Core\App;
use Http\Form\CapstoneForm;
use Http\Form\HandleFile;

$connection = App::resolve(Database::class);
$validator = App::resolve(Validator::class);

$current_user = $_SESSION['id'];

$errors = [];

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$adviser = $_POST['adviser'];
$year_published = $_POST['year_published'];
$category = $_POST['category'];
$abstract = $_POST['abstract'];

$validateCapstone = new CapstoneForm();

if (! $validateCapstone->handleCapstoneForm($title, $author, $adviser, $year_published, $category, $abstract)) {
    return view('capstone/edit.view.php', [
        'heading' => 'Capstone',
        'errors' => $validateCapstone->getError(),
    ]);
}

$fileHandler = new HandleFile();

if (! $fileHandler->validateFile($_FILES['document'])) {
    return view(
        'capstone/edit.view.php',
        [
            'heading' => "Capstone",
            'errors' => $fileHandler->getError()
        ]
    );
}

//move the file to /uploads
$target_dir = "uploads/";

if (! move_uploaded_file($_FILES['document']['tmp_name'], $target_dir . $_FILES['document']['name'])) {
    return view(
        'capstone/edit.view.php',
        [
            'heading' => "Capstone",
            'errors' => 'Something went wrong'
        ]
    );
}

//store to database
$update = $connection->query("update projects set title = :title, author=:author, adviser = :adviser, abstract = :abstract, year_published = :year_published, category = :category, document_path = :document_path, uploaded_by = :uploaded_by where id = :id", [$title, $author, $adviser, $abstract, $year_published, $category, 'uploads/' . $_FILES['document']['name'], $current_user, $id]);

header('location: /capstone/my_projects');
exit();
