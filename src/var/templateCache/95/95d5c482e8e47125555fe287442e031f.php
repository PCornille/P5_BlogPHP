<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Post/new.html.twig */
class __TwigTemplate_dfd9a55f1da4340ab65434cbe0b9bb2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"fr\">
<body>
<h1>Nouveau Post</h1>
<form action=\"/post/new\" method=\"post\">
    <label for=\"titre\">Titre</label>
    <input id=\"titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\"/>
    <label for=\"contenu\">Contenu</label>
    <textarea id=\"contenu\" name=\"contenu\"></textarea>
    <input type=\"submit\" value=\"créer\"/>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Post/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
<body>
<h1>Nouveau Post</h1>
<form action=\"/post/new\" method=\"post\">
    <label for=\"titre\">Titre</label>
    <input id=\"titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\"/>
    <label for=\"contenu\">Contenu</label>
    <textarea id=\"contenu\" name=\"contenu\"></textarea>
    <input type=\"submit\" value=\"créer\"/>
</form>
</body>
</html>", "Post/new.html.twig", "/home/att/Desktop/opc/Projet 5/src/public/templates/Post/new.html.twig");
    }
}
