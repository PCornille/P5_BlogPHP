<?php

namespace App\Controller;

use App\Service\UserService;

class UserController extends AbstractController
{
    private $userService;

    public function __construct()
    {
        parent::__construct();
        $this->userService = new UserService();
    }

    public function login()
    {
        if (empty($_POST))
            $this->render('User/login.html.twig', []);
        else {
            $user = $this->userService->login();
            //session start
            (new PostController())->index();
        }
    }

    public function register()
    {
        if(empty($_POST))
            $this->render('User/register.html.twig',[]);
        else{
            $user=$this->userService->register();
            if($user) {
                $_SESSION['user']=$user->getId();
                (new PostController())->index();
            }
        }
    }

    public function logout(){
        //kill session
        (new PostController())->index();
    }
}