<?php

namespace App\Service;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TemplateLoader
{
    public $loader;
    public $twig;

    /**
     * //@FIXME Penser à retirer la configuration de debug
     */
    public function __construct()
    {
        $this->loader = new FilesystemLoader('src/public/templates');
        $this->twig = new Environment($this->loader, [
            'cache' => 'src/var/templateCache',
            'debug' => true,
        ]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
    }
}