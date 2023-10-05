<?php

namespace App\Controller;
use App\RequestHandler;
use App\Service\UserService;

class UserController
{

    public static function userRequestHandler(array $request){
        switch ($request["_SERVER"]['REQUEST_METHOD']) {
            case 'GET':
                switch ($request["_SERVER"]['PATH_INFO']) {
                    case '':
                        UserService::index();
                        break;
                    case '/logout':
                        //kill session puis render UserService::index()
                }
                break;
            case 'POST':
                switch ($request["_SERVER"]['PATH_INFO']) {
                    case '/login':
                        UserService::login($request);
                        break;
                    case '/register':
                        PostService::editPost($request);
                        break;
                    default:
                        RequestHandler::notFound();
                }
                break;
        }
    }
}