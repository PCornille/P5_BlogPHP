<?php

namespace App\Service;

class UserService
{

    public static function index()
    {
        //render la page avec formulaire de connexion
    }

    public static function login(array $request)
    {
        //reçoit le formulaire de connexion
    }

    public static function register(array $request)
    {
        //vérifié si l'utilisateur éxiste déjà, sinon crée l'utilisateur
    }

    public static function logout()
    {
        //tue la session
    }
}