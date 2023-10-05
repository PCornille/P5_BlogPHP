<?php

namespace App;

use App\Controller\UserController;
use App\Controller\PostController;

class RequestHandler
{
    public static function handle(array $request): void
    {
        if (array_key_exists('PATH_INFO', $request["_SERVER"]))
            switch ($request["_SERVER"]['PATH_INFO']) {
                case '/Post':
                case '/post':
                    PostController::class::PostRequestHandler($request);
                break;
                case '/User':
                case '/user':
                    UserController::class::UserRequestHandler($request);
                break;
            }
        self::notFound();
    }

    public static function ok(): void
    {
        header('HTTP/1.1 200 OK');
    }

    public static function created(): void
    {
        header('HTTP/1.1 201 Created');
    }

    public static function forbidden(): void
    {
        header('HTTP/1.1 403 Forbidden');
    }

    public static function notFound(): void
    {
        header('HTTP/1.1 404 Not Found');
    }
}