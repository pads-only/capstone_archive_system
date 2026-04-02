<?php

use Config\Database;
use Core\Validator;
use Core\App;
use Http\Form\RegisterForm;

$connection = App::resolve(Database::class);
$validator = App::resolve(Validator::class);
$validateForm = new RegisterForm;

$errors = [];

$name = $validator::validateName($_POST['name']);
$email = $validator::validateEmail($_POST['email']);
$password = $validator::validatePassword($_POST['password']);
$confirm_password = $validator::validatePassword($_POST['confirm_password']);

if (! $validateForm->validateForm($name, $email, $password, $confirm_password)) {
    return view('register.view.php', [
        'errors' => $validateForm->getError(),
    ]);
}

//check if email already exist
$user = $connection->query("select email from users where email = :email", [$email])->fetch();

if ($user) {
    return view('register.view.php', [
        'errors' => [
            'email' => "There's a user with this email address!",
        ],
    ]);
}

// hash password
$hashed_password = Validator::hashedPassword($password);

//store  new user to database
$connection->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)", [$name, $email, $hashed_password]);

$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['id'] = $connection->lastInsertedId();

header('location: /dashboard');
exit();
