<?php

namespace App\Service;

use App\Entity\Post;
use App\Repository\PostRepository;

class PostService
{

    private $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function getAllPosts(): ?array
    {
        return $this->postRepository->getAllPosts();
    }

    public function getPost(?int $id): ?Post
    {
        return $this->postRepository->getPost($id)[0];
    }

    public function newPost(): ?array
    {
        return $this->postRepository->newPost($_POST['titre'], $_POST['contenu'], 0, (new \DateTimeImmutable())->format('Y-m-d H:i:s'));
    }

    public function editPost(?int $id): ?Post
    {
        $post = $this->postRepository->getPost($id)[0];
//        if ($_POST['titre'])
//            $post->setTitre($_POST['titre']);
        if ($_POST['contenu'])
            $post->setContenu($_POST['contenu']);
        $this->postRepository->updatePost($post);
        return $post;
    }

    public function removePost(int $id): void
    {
        //@todo vérifier si le post éxiste, si l'utilisateur a le droit de le supprimer et ensuite appeler repo pour delete
    }
}