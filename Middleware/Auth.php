<?php

namespace Middleware;

class Auth
{
    public function handle()
    {
        if (! $_SESSION['id'] ?? false) {
            header('location: /login');
            exit();
        }
    }
}
