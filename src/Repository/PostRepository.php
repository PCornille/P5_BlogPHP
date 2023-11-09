<?php

namespace App\Repository;

use App\Entity\Post;

class PostRepository extends AbstractRepository
{
    /**
     * @var string
     */
    private $mappingEntity;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->mappingEntity = Post::class;//@todo instance ici peut etre abstractRepository
    }

    /**
     * @return Post[]
     */
    public function getAllPosts(): array//@todo retour de tableaux de Post fais comme ça
    {
        $posts = $this->query('SELECT * FROM Post;', $this->mappingEntity);
        return $posts;
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function getPost(int $id): ?array
    {
        return $this->query('SELECT * FROM Post WHERE id=' . $id . ';', $this->mappingEntity);
    }

    /**
     * @param $titre
     * @param $contenu
     * @param $auteur
     * @param $date
     * @return array|null
     */
    public function newPost($titre, $contenu, $auteur, $date): ?array
    {
        return $this->query('INSERT INTO Post (titre,contenu,auteur,date) VALUES ("' . $titre . '","' . $contenu . '",' . $auteur . ',"' . $date . '");', $this->mappingEntity);
    }

    /**
     * @param Post $post
     * @return void
     */
    public function updatePost(Post $post)
    {
        echo '<pre>';
        echo print_r($post);
        echo '<pre>';
        echo $post->getTitre();//@todo ici question accés getTitre()
//        echo $post->getTitre();
//        echo 'UPDATE User SET titre='.$post->getTitre().', contenu='.$post->getContenu().', date='.new \DateTimeImmutable('now').' WHERE id='.$post->getId().';
//        return $this->query('UPDATE User SET titre='.$post->getTitre().', contenu='.$post->getContenu().', date='.new \DateTimeImmutable('now').' WHERE id='.$post->getId().';');
    }
}