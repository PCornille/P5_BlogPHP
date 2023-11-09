<?php

namespace App\Controller;

use App\Service\TemplateLoader;

class AbstractController
{
    private $templateLoader;

    public function __construct()
    {
        $this->templateLoader = new TemplateLoader();
    }

    public function render(string $route, array $params): void
    {
        echo $this->templateLoader->twig->render($route,$params);
    }

    public function notFound(string $message): void//@todo implémenter 404 ici
    {
        $this->render('404.html.twig', ['message'=>$message]);
    }
}