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

/* detail.html.twig */
class __TwigTemplate_8079e6a8bdee9edb57f21d1d8e1abd04 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detail.html.twig", 1);
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
        echo "<img class=\"w-[500px] h-[500px] rounded-md m-auto block\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("fixtures/images/" . (((twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "image", [], "any", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "image", [], "any", false, false, false, 4)))) ? (twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "image", [], "any", false, false, false, 4)) : ("unknown.jpg")))), "html", null, true);
        echo "\" alt=\"\">
<div class=\"text-center\">
    <h2 class=\"text-3xl font-bold\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
    <p class=\"italic\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 7, $this->source); })()), "author", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 8, $this->source); })()), "releaseYear", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
    <br>
    <p>Genre(s) : ";
        // line 10
        $context["genreNames"] = [];
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 11, $this->source); })()), "genre", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 12
            echo "            ";
            $context["genreNames"] = twig_array_merge((isset($context["genreNames"]) || array_key_exists("genreNames", $context) ? $context["genreNames"] : (function () { throw new RuntimeError('Variable "genreNames" does not exist.', 12, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["genre"], "name", [], "any", false, false, false, 12)]);
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        ";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["genreNames"]) || array_key_exists("genreNames", $context) ? $context["genreNames"] : (function () { throw new RuntimeError('Variable "genreNames" does not exist.', 14, $this->source); })()), ", "), "html", null, true);
        echo "
    </p>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 14,  88 => 13,  85 => 12,  80 => 11,  78 => 10,  73 => 8,  69 => 7,  65 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<img class=\"w-[500px] h-[500px] rounded-md m-auto block\" src=\"{{asset('fixtures/images/'~(album.image ?? 'unknown.jpg'))}}\" alt=\"\">
<div class=\"text-center\">
    <h2 class=\"text-3xl font-bold\">{{album.title}}</h2>
    <p class=\"italic\">{{ album.author.name }}</p>
    <p>{{ album.releaseYear }}</p>
    <br>
    <p>Genre(s) : {% set genreNames = [] %}
        {% for genre in album.genre %}
            {% set genreNames = genreNames|merge([genre.name]) %}
        {% endfor %}
        {{ genreNames|join(', ') }}
    </p>
</div>
{% endblock %}", "detail.html.twig", "C:\\laragon\\www\\Music\\templates\\detail.html.twig");
    }
}
