<?php

use Config\Database;
use Core\Validator;
use Core\App;
use Http\Form\LoginForm;

$connection = App::resolve(Database::class);
$validate = App::resolve(Validator::class);
$validateForm = new LoginForm();

$errors = [];

$email = $validate->validateEmail($_POST['email']);
$password = $validate->validatePassword($_POST['password']);

if (! $validateForm->validateForm($email, $password)) {
    return view('login.view.php', [
        'errors' => $validateForm->getError()
    ]);
}

//check if email exist in the db
$user = $connection->query('select * from users where email = :email', [$email])->fetch();

if ($user) {

    if (password_verify($password, $user["password"])) {

        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['user_role'] = $user['role_id'];
        $_SESSION['email'] = $user['email'];

        if ($user['role_id'] === 1) {
            header("location: /admin");
            exit();
        } else if ($user['role_id'] === 2) {
            header("location: /dashboard");
            exit();
        }
    }
}

return view('login.view.php', [
    "errors" => [
        "general" => "Invalid credentials"
    ]
]);
