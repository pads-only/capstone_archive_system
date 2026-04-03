<?php

namespace Middleware;

class User
{
    public function handle()
    {
        if (($_SESSION['user_role'] ?? false) !== 2) {
            header('location: /login');
            exit();
        }
    }
}
