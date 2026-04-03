<?php

namespace Middleware;

class Both
{
    public function handle()
    {
        if (($_SESSION['user_role'] ?? false) === 1) {
            header("location: /admin");
            exit();
        }
    }
}
