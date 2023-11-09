<?php

namespace App\Entity;
class Comment extends BasePost
{
    public function __construct($titre, $contenu, $auteur)
    {
        parent::__construct($titre, $contenu, $auteur);
    }

}