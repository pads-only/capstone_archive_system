<?php

namespace Middleware;

class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class
    ];

    public static function handleMiddleware($key)
    {
        if (!$key) {
            return;
        }
        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found with key: {$key}");
        }

        (new $middleware)->handle();
    }
}
