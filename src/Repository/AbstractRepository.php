<?php

namespace App\Repository;

use App\Entity\EntityInterface;
use PDO;

class AbstractRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=OPC_P5;charset=utf8',
            'root',
            'magpie');
    }

    public function query(string $query, ?string $mappingEntity): ?array
    {
        if ($query = $this->connection->prepare($query)) {
            $query->execute();
            if ($mappingEntity) {//instanceof EntifyINterface Check{
                $result = $query->fetchAll(PDO::FETCH_CLASS, $mappingEntity);//@todo ICI debug
                echo '<pre>';
                var_dump($result);
                echo '<pre>';
                echo ($result[0]->getTitre());
                die;
            }
            else
                $result = $query->fetchAll();
            return $result;
        }
        return null;
    }
}