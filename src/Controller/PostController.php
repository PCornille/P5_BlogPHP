<?php

namespace App\Controller;

use App\Service\PostService;

class PostController extends AbstractController
{

    private $postService;

    public function __construct()
    {
        parent::__construct();
        $this->postService = new PostService();
    }

    private function checkId(): bool
    {
        return isset($_GET['id']);
    }

    public function index(): void
    {
        $posts = $this->postService->getAllPosts();
        $this->render('Post/index.html.twig', ['posts' => $posts]);
    }

    public function detail(): void
    {
        if ($this->checkId()) {
            $post = $this->postService->getPost($_GET['id']);
            if ($post)
                $this->render('Post/detail.html.twig', ['post' => $post]);
            else
                $this->notFound('Aucun post avec cet identifiant.');
        } else {
            $this->notFound('Identifiant de post manquant.');
        }
    }

    public function edit(): void
    {
        if ($this->checkId()) {
            if (empty($_POST)) {
                $post = $this->postService->getPost($_GET['id']);
                $this->render('Post/edit.html.twig', ['post' => $post]);
            } else {
                $post = $this->postService->editPost($_GET['id']);
                $this->render('Post/detail.html.twig', ['post' => $post]);
            }
        } else {
            $this->notFound('Identifiant de post manquant.');
        }
    }

    public function new(): void
    {
        if (empty($_POST))
            $this->render('Post/new.html.twig', []);
        else {
            $post = $this->postService->newPost();
            $this->render('Post/detail.html.twig', ['post' => $post]);
        }
    }

    public function remove(): void
    {
        if ($this->checkId()) {
            $this->postService->removePost($_GET['id']);
            $posts = $this->postService->getAllPosts();
            $this->render('Post/index.html.twig', ['posts' => $posts]);
        } else {
            $this->notFound('Identifiant de post manquant.');
        }
    }
}