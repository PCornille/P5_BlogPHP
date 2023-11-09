<?php

namespace App\Repository;

use App\Entity\User;

class UserRepository extends AbstractRepository
{
    private $mappingEntity;
    public function __construct(private $options = ['cost' => 8])
    {
        parent::__construct();
        $this->mappingEntity = User::class;
    }

    public function getUser(string $name): ?array
    {
        return $this->query('SELECT * FROM User WHERE nom="' . $name . '";', $this->mappingEntity);
    }

    public function newUser(string $nom, string $prenom, string $imagePath, string $slogan, string $email, string $password)
    {
        $password = $this->hashPassword($password);
        return $this->query('INSERT INTO User (nom,prenom,image_path,slogan,email,password) 
            VALUES ("' . $nom . '","' . $prenom . '","' . $imagePath . '","' . $slogan . '","'.$email.'","'.$password.'";',$this->mappingEntity);
    }

    private function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_BCRYPT, $this->options);
    }

}