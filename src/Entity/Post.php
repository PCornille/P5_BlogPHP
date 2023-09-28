<?php

class Post extends Comm
{
    public function __construct($titre, $contenu, $auteur)
    {
        parent::__construct($titre, $contenu, $auteur);
    }

    private $imagePath;
    private $commentaires=Array();

    /**
     * @return string
     */
    public function getImagePath()
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
     * @param Commentaire $commentaire
     */
    public function addCommentaire(Commentaire $commentaire):void
    {
        $this->commentaires=array_push($this->commentaires,$commentaire);
    }

    /**
     * @return array
     */
    public function getCommentaires(): array
    {
        return $this->commentaires;
    }

}