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
class __TwigTemplate_a4cce277f05e0937466b3f60eb669523 extends Template
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
        echo "
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <svg id=\"favStar\" onclick=\"addFav(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            echo ")\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\"
        class=\"w-6 h-6 cursor-pointer ";
            // line 10
            (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10) && !twig_in_filter((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 10, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "favorites", [], "any", false, false, false, 10)))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10) && !twig_in_filter((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 10, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "favorites", [], "any", false, false, false, 10))), "html", null, true))) : (print ("fav")));
            echo "\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\" />
          </svg>          
        ";
        }
        // line 14
        echo "    </p>
    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 15, $this->source); })()), "releaseYear", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
    <br>
    <p>Genre(s) : ";
        // line 17
        $context["genreNames"] = [];
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 18, $this->source); })()), "genre", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 19
            echo "            ";
            $context["genreNames"] = twig_array_merge((isset($context["genreNames"]) || array_key_exists("genreNames", $context) ? $context["genreNames"] : (function () { throw new RuntimeError('Variable "genreNames" does not exist.', 19, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["genre"], "name", [], "any", false, false, false, 19)]);
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        ";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["genreNames"]) || array_key_exists("genreNames", $context) ? $context["genreNames"] : (function () { throw new RuntimeError('Variable "genreNames" does not exist.', 21, $this->source); })()), ", "), "html", null, true);
        echo "
    </p>
    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "    <br>
    <a class=\"button !inline\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editAlbum", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Modifier</a>
    <a class=\"button !inline\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delAlbum", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Supprimer</a>
    ";
        }
        // line 28
        echo "</div>

<script>
const favStar = document.getElementById(\"favStar\");
function addFav(id){
    fetch(\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fav", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\")
    .then(r =>{
        if(favStar != null && r.status == 200){
            if(favStar.classList.contains(\"fav\"))
                favStar.classList.remove(\"fav\")
            else
                favStar.classList.add(\"fav\");
        }
    });
}

</script>
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
        return array (  138 => 33,  131 => 28,  126 => 26,  122 => 25,  119 => 24,  117 => 23,  111 => 21,  105 => 20,  102 => 19,  97 => 18,  95 => 17,  90 => 15,  87 => 14,  80 => 10,  75 => 9,  73 => 8,  69 => 7,  65 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<img class=\"w-[500px] h-[500px] rounded-md m-auto block\" src=\"{{asset('fixtures/images/'~(album.image ?? 'unknown.jpg'))}}\" alt=\"\">
<div class=\"text-center\">
    <h2 class=\"text-3xl font-bold\">{{album.title}}</h2>
    <p class=\"italic\">{{ album.author.name }}
        {% if app.user %}
        <svg id=\"favStar\" onclick=\"addFav({{album.id}})\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\"
        class=\"w-6 h-6 cursor-pointer {{app.user and album not in app.user.favorites ?: \"fav\"}}\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\" />
          </svg>          
        {% endif %}
    </p>
    <p>{{ album.releaseYear }}</p>
    <br>
    <p>Genre(s) : {% set genreNames = [] %}
        {% for genre in album.genre %}
            {% set genreNames = genreNames|merge([genre.name]) %}
        {% endfor %}
        {{ genreNames|join(', ') }}
    </p>
    {% if app.user %}
    <br>
    <a class=\"button !inline\" href=\"{{path('editAlbum', {id: album.id})}}\">Modifier</a>
    <a class=\"button !inline\" href=\"{{path('delAlbum', {id: album.id})}}\">Supprimer</a>
    {% endif %}
</div>

<script>
const favStar = document.getElementById(\"favStar\");
function addFav(id){
    fetch(\"{{path('fav', {id: album.id})}}\")
    .then(r =>{
        if(favStar != null && r.status == 200){
            if(favStar.classList.contains(\"fav\"))
                favStar.classList.remove(\"fav\")
            else
                favStar.classList.add(\"fav\");
        }
    });
}

</script>
{% endblock %}", "detail.html.twig", "C:\\laragon\\www\\Music\\templates\\detail.html.twig");
    }
}
