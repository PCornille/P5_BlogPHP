<?php

namespace App\Service;

class PostService
{
    public static function index(): void
    {
        //getAll Post, render all posts
    }

    public static function detail(array $request): void
    {
        //get 1 post et ses commentaires
    }

    public static function newPost(array $request): void
    {
        //new post, return detail (post->id)
    }

    public static function editPost(array $request): void
    {
        //get post by request->id, edit post with request->args
    }
}