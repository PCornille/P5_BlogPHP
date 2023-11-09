<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function login(string $name, string $password): ?User
    {
        $user = $this->userRepository->getUser($name)[0];
        if (password_verify($password, $user->getPassword()))
            return $user;
        return null;//ou retourner une page / un flash ?
    }

    public function register(): ?User
    {
        $user = $this->userRepository->getUser($_POST['nom']);
        if (!$user)
            $user = $this->userRepository->newUser($_POST['nom'], $_POST['prenom'], $_POST['imagePath'], $_POST['slogan'], $_POST['email'], $_POST['password']);
        var_dump($user);
        die;
        return $user;
    }

    public function logout()
    {
        //tue la session
    }
}