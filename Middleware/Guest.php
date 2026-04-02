<?php

namespace Middleware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['id'] ?? false) {
            header('location: /');
            exit();
        }
    }
}
