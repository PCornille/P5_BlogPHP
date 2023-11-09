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

/* Post/edit.html.twig */
class __TwigTemplate_f8dfdbd144d9fa9fd27d1a81826d3d2e extends Template
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
<h1>Editer Post</h1>
<form action=\"/post/edit?id=";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" method=\"post\">
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "titre", [], "any", false, false, false, 5), "html", null, true);
        echo "</h2>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "contenu", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
    <label for=\"contenu\">Nouveau contenu</label>
    <textarea id=\"contenu\" name=\"contenu\"></textarea>
    <input type=\"submit\" value=\"modifier\"/>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
<body>
<h1>Editer Post</h1>
<form action=\"/post/edit?id={{ post.id }}\" method=\"post\">
    <h2>{{ post.titre }}</h2>
    <p>{{ post.contenu }}</p>
    <label for=\"contenu\">Nouveau contenu</label>
    <textarea id=\"contenu\" name=\"contenu\"></textarea>
    <input type=\"submit\" value=\"modifier\"/>
</form>
</body>
</html>", "Post/edit.html.twig", "/home/att/Desktop/opc/Projet 5/src/public/templates/Post/edit.html.twig");
    }
}
