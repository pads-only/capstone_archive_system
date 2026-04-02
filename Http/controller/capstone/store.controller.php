<?php

// dd($_POST);

use Config\Database;
use Core\Validator;
use Core\App;
use Http\Form\CapstoneForm;
use Http\Form\HandleFile;

$connection = App::resolve(Database::class);
$validator = App::resolve(Validator::class);

$current_user = $_SESSION['id'];

$errors = [];

$title = $_POST['title'];
$author = $_POST['author'];
$adviser = $_POST['adviser'];
$year_published = $_POST['year_published'];
$category = $_POST['category'];
$abstract = $_POST['abstract'];

$validateCapstone = new CapstoneForm();

$categories = $connection->query("SELECT * FROM categories")->fetchAll();

if (! $validateCapstone->handleCapstoneForm($title, $author, $adviser, $year_published, $category, $abstract)) {
    return view('capstone/create.view.php', [
        'heading' => 'Capstone',
        'errors' => $validateCapstone->getError(),
        'categories' => $categories
    ]);
}

$fileHandler = new HandleFile();

if (! $fileHandler->validateFile($_FILES['document'])) {
    return view(
        'capstone/create.view.php',
        [
            'heading' => "Capstone",
            'errors' => $fileHandler->getError(),
            'categories' => $categories
        ]
    );
}

//move the file to /uploads
$target_dir = "uploads/";

if (! move_uploaded_file($_FILES['document']['tmp_name'], $target_dir . $_FILES['document']['name'])) {
    return view(
        'capstone/create.view.php',
        [
            'heading' => "Capstone",
            'errors' => 'Something went wrong',
            'categories' => $categories
        ]
    );
}

//store to database
$store = $connection->query("insert into projects (title, author, adviser, abstract, year_published, category, document_path, uploaded_by) values (:title, :author, :adviser, :abstract, :year_published, :category, :document_path, :uploaded_by)", [$title, $author, $adviser, $abstract, $year_published, $category, 'uploads/' . $_FILES['document']['name'], $current_user]);

header('location: /capstone');
exit();
