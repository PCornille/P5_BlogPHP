<?php

class Comm
{
    public function __construct($titre,$contenu,$auteur)
    {
        $this->titre=$titre;
        $this->contenu=$contenu;
        $this->auteur=$auteur;
        $this->date=new DateTimeImmutable('now');
    }

    private $titre;
    protected  $contenu;
    private   $auteur;
    private   $date;

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return integer
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }
}