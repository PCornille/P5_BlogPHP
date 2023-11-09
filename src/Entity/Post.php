<?php

namespace App\Entity;
class Post extends BasePost
{
    public function __construct($titre, $contenu, $auteur)
    {
        parent::__construct($titre, $contenu, $auteur);
    }

    private $imagePath;
    private $commentaires = array();

    /**
     * @return string
     */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * @param string $imagePath
     */
    public function setImagePath($imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    /**
     * @param Comment $commentaire
     */
    public function addCommentaire(Comment $commentaire): void
    {
        $this->commentaires = array_push($this->commentaires, $commentaire);
    }

    /**
     * @return array
     */
    public function getCommentaires(): array
    {
        return $this->commentaires;
    }

}