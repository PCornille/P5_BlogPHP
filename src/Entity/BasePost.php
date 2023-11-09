<?php

namespace App\Entity;

use DateTimeImmutable;

class BasePost implements EntityInterface
{
    public function __construct($titre, $contenu, $auteur)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
        $this->date = new DateTimeImmutable('now');
    }

    private $id;//autoincrement, primary, not nullable
    private $titre;

    protected $contenu;
    private $auteur;
    private $date;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getAuteur(): int
    {
        return $this->auteur;
    }

    /**
     * @return string
     */
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return void
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getContenu(): string
    {
        return $this->contenu;
    }

    /**
     * @param string $contenu
     * @return void
     */
    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }
}