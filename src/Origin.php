<?php
namespace App;

use App\Controller\UserController;
use App\Controller\PostController;

class Origin//RouteHandler/RouteManager
{
    public static function receive(Array $server): void//managerequest/manageRequestQuery
    {
        if(array_key_exists('PATH_INFO',$server))
            switch ($server['PATH_INFO']){
                case 'Post':
                case 'post':
//                    PostController::class::
                    return;
                case 'User':
                case 'user':
//                    UserController::class::
                    return;
            }
        echo '404';
        header('HTTP/1.1 404 Not Found');
    }
}