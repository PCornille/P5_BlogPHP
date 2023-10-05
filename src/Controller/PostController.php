<?php

namespace App\Controller;

use App\RequestHandler;
use App\Service\PostService;

class PostController
{

    public static function postRequestHandler(array $request)
    {
        switch ($request["_SERVER"]['REQUEST_METHOD']) {
            case 'GET':
                switch ($request['_GET']) {
                    case '':
                        PostService::index();
                        break;
                    default:
                        if ($request['_GET']['id']??0)
                            PostService::detail($request);
                        else
                            RequestHandler::notFound();
                }
                break;
            case 'POST':
                switch ($request["_SERVER"]['PATH_INFO']) {
                    case '':
                        PostService::newPost($request);
                        break;
                    case 'Edit':
                    case 'edit':
                        PostService::editPost($request);
                    break;
                    default:
                        RequestHandler::notFound();
                }
                break;
        }
    }
}