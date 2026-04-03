<?php

namespace Middleware;

class Admin
{
    public function handle()
    {
        if (($_SESSION['user_role'] ?? false) !== 1) {
            abort(403);
        }
    }
}
