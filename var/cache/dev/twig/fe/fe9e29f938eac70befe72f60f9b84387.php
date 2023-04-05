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

/* index.html.twig */
class __TwigTemplate_f42cedd7e6d3d34cbda7e578d92156f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <a class=\"!inline button float-right\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addAlbum");
            echo "\">Ajouter</a><br><br><br>
    ";
            // line 6
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "favorites", [], "any", false, false, false, 6)) > 0)) {
                // line 7
                echo "    <h1 class=\"text-2xl text-center mt-4\">Mes favoris</h1>
    <div class=\"flex flex-wrap justify-center gap-14 mt-6\">
        ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "favorites", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                    // line 10
                    echo "            <a class=\"block\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("album", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 10)]), "html", null, true);
                    echo "\">
                <img class=\"w-[250px] h-[250px] rounded-md\" src=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("fixtures/images/" . (((twig_get_attribute($this->env, $this->source, $context["album"], "image", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, $context["album"], "image", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, $context["album"], "image", [], "any", false, false, false, 11)) : ("unknown.jpg")))), "html", null, true);
                    echo "\" alt=\"\">
                <h2 class=\"text-center font-bold\">";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "title", [], "any", false, false, false, 12), "html", null, true);
                    echo "</h2>
                <p class=\"italic text-center\">";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["album"], "author", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
                    echo "</p>
            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "    </div>
    <h1 class=\"text-2xl text-center mt-6\">Les albums</h1>
    <br><br>
    ";
            }
        }
        // line 21
        echo "
<div class=\"flex flex-wrap justify-center gap-14\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 24
            echo "        <a class=\"block\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("album", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
            <img class=\"w-[250px] h-[250px] rounded-md\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("fixtures/images/" . (((twig_get_attribute($this->env, $this->source, $context["album"], "image", [], "any", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, $context["album"], "image", [], "any", false, false, false, 25)))) ? (twig_get_attribute($this->env, $this->source, $context["album"], "image", [], "any", false, false, false, 25)) : ("unknown.jpg")))), "html", null, true);
            echo "\" alt=\"\">
            <h2 class=\"text-center font-bold\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</h2>
            <p class=\"italic text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["album"], "author", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  126 => 27,  122 => 26,  118 => 25,  113 => 24,  109 => 23,  105 => 21,  98 => 16,  89 => 13,  85 => 12,  81 => 11,  76 => 10,  72 => 9,  68 => 7,  66 => 6,  61 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{% if app.user %}
    <a class=\"!inline button float-right\" href=\"{{path('addAlbum')}}\">Ajouter</a><br><br><br>
    {% if app.user.favorites|length > 0 %}
    <h1 class=\"text-2xl text-center mt-4\">Mes favoris</h1>
    <div class=\"flex flex-wrap justify-center gap-14 mt-6\">
        {% for album in app.user.favorites %}
            <a class=\"block\" href=\"{{path('album', {id: album.id})}}\">
                <img class=\"w-[250px] h-[250px] rounded-md\" src=\"{{asset('fixtures/images/'~(album.image ?? 'unknown.jpg'))}}\" alt=\"\">
                <h2 class=\"text-center font-bold\">{{album.title}}</h2>
                <p class=\"italic text-center\">{{album.author.name}}</p>
            </a>
        {% endfor %}
    </div>
    <h1 class=\"text-2xl text-center mt-6\">Les albums</h1>
    <br><br>
    {% endif %}
{% endif %}

<div class=\"flex flex-wrap justify-center gap-14\">
    {% for album in albums %}
        <a class=\"block\" href=\"{{path('album', {id: album.id})}}\">
            <img class=\"w-[250px] h-[250px] rounded-md\" src=\"{{asset('fixtures/images/'~(album.image ?? 'unknown.jpg'))}}\" alt=\"\">
            <h2 class=\"text-center font-bold\">{{album.title}}</h2>
            <p class=\"italic text-center\">{{album.author.name}}</p>
        </a>
    {% endfor %}
</div>
{% endblock %}", "index.html.twig", "C:\\laragon\\www\\Music\\templates\\index.html.twig");
    }
}
