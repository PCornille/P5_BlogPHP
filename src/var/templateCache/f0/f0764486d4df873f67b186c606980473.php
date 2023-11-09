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

/* User/register.html.twig */
class __TwigTemplate_a25a5960ff1eaf381d9dc0ebc84987ba extends Template
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
<form action=\"/user/register\" method=\"post\">
    <label for=\"nom\">Nom</label>
    <input id=\"nom\" type=\"text\" name=\"nom\" placeholder=\"...\"/>
    <label for=\"prenom\">Prénom</label>
    <input id=\"prenom\" type=\"text\" name=\"prenom\" placeholder=\"...\"/>
    <label for=\"slogan\">Slogan</label>
    <textarea id=\"slogan\" name=\"slogan\" placeholder=\"...\"></textarea>
    <label for=\"email\">Email</label>
    <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"xxxx@yyy.zz\"/>
";
        // line 14
        echo "    <label for=\"password\">Mot de passe</label>
    <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"******\"/>
    <input type=\"submit\" value=\"créer\"/>
    <input type=\"text\" name=\"imagePath\" value=\"test\"/>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "User/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
<body>
<h1>Nouveau Post</h1>
<form action=\"/user/register\" method=\"post\">
    <label for=\"nom\">Nom</label>
    <input id=\"nom\" type=\"text\" name=\"nom\" placeholder=\"...\"/>
    <label for=\"prenom\">Prénom</label>
    <input id=\"prenom\" type=\"text\" name=\"prenom\" placeholder=\"...\"/>
    <label for=\"slogan\">Slogan</label>
    <textarea id=\"slogan\" name=\"slogan\" placeholder=\"...\"></textarea>
    <label for=\"email\">Email</label>
    <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"xxxx@yyy.zz\"/>
{#    @todo passer en type email#}
    <label for=\"password\">Mot de passe</label>
    <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"******\"/>
    <input type=\"submit\" value=\"créer\"/>
    <input type=\"text\" name=\"imagePath\" value=\"test\"/>
</form>
</body>
</html>", "User/register.html.twig", "/home/att/Desktop/opc/Projet 5/src/public/templates/User/register.html.twig");
    }
}
