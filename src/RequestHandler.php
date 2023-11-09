<?php

namespace App;

use App\Controller\UserController;
use App\Controller\PostController;

class RequestHandler
{
    // localhost:/post
    // localhost:/user
    /**
     * @param array $request == $_SERVER
     * @return void
     */
    public static function handle(array $request): void
    {
        session_start();
        //@todo systeme de session commence ici (classe dédiée ?) (la classe qui gère serait un service)
        if (array_key_exists('PATH_INFO', $request)) {
            $pathArgs = explode('/', $request['PATH_INFO'], PHP_INT_MAX);
            switch ($pathArgs[1]) {
                case 'post':
                    self::postRequestHandler($request, $pathArgs);
                    break;
                case 'user':
                    self::UserRequestHandler($request, $pathArgs);
                    break;
                default:
                    self::notFound();
            }
        }
        else {
            self::notFound();
        }
    }

    private static function postRequestHandler(array $request, array $pathArgs)
    {
        // localhost GET: /post/
        // localhost GET: /post/detail?id=xxx
        // localhost GET: /post/new
        // localhost GET: /post/edit?id=xxx
        // localhost GET: /post/remove?id=xxx
        // localhost POST: /post/
        // localhost POST: /post/edit
        if (!isset($pathArgs[2])) {
            (new PostController())->index();
        } else
            switch ($pathArgs[2]) {
                case '':
                    (new PostController())->index();
                    break;
                case 'detail':
                    (new PostController())->detail();
                    break;
                case 'new':
                    (new PostController())->new();
                    break;
                case 'edit':
                    (new PostController())->edit();
                    break;
                case 'remove':
                    (new PostController())->remove();
                    break;
                default:
                    (new PostController())->notFound("Cette page n'existe pas.");
            }

    }

    public static function userRequestHandler(array $request, array $pathArgs): void
    {
        if(isset($pathArgs[2]))
            switch($pathArgs[2]){
                case 'logout':
                    (new UserController())->logout();
                    break;
                case 'login':
                    (new UserController())->login();
                    break;
                case 'register':
                    (new UserController())->register();
                    break;
                default:
                    (new UserController())->notFound("Cette page n'existe pas.");
            }
        else{
            (new UserController())->notFound("Cette page n'existe pas.");
        }
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
        echo '404';
    }
}