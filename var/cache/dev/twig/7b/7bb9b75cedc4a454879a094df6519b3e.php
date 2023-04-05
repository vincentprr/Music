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

/* addAlbum.html.twig */
class __TwigTemplate_ba65d8871308ebdc318dff92a51c5425 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addAlbum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "addAlbum.html.twig", 1);
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
        echo "<h1 class=\"text-center text-xl\">";
        echo (((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 4, $this->source); })())) ? ("Modifier") : ("Ajouter"));
        echo " un album</h1>
<br>
";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "<p class=\"text-red-600 text-center\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "</p>
";
        }
        // line 9
        echo "<br>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "field", "placeholder" => "Nom de l'image", "value" => (((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 11, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11)) : (""))]]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "releaseYear", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "field", "placeholder" => "Année", "value" => (((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 12, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 12, $this->source); })()), "releaseYear", [], "any", false, false, false, 12)) : (""))]]);
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "field", "placeholder" => "Titre", "value" => (((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 13, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13)) : (""))]]);
        echo "
        <select id=\"author\" class=\"field\" name=\"author\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 16
            echo "            <option ";
            ((((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 16, $this->source); })()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 16, $this->source); })()), "author", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) != twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, ((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 16, $this->source); })()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 16, $this->source); })()), "author", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) != twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 16))), "html", null, true))) : (print ("selected")));
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </select>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 20
            echo "            <div class=\"text-center\">
                <input ";
            // line 21
            ((((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 21, $this->source); })()) && !twig_in_filter($context["genre"], twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 21, $this->source); })()), "genre", [], "any", false, false, false, 21)))) ? (print (twig_escape_filter($this->env, ((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 21, $this->source); })()) && !twig_in_filter($context["genre"], twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 21, $this->source); })()), "genre", [], "any", false, false, false, 21))), "html", null, true))) : (print ("checked=\"true\"")));
            echo " type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" name=\"genres[]\">
                <label for=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</label><br>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        <button type=\"submit\">";
        echo (((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 25, $this->source); })())) ? ("Modifier") : ("Ajouter"));
        echo "</button>
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "addAlbum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 26,  139 => 25,  128 => 22,  120 => 21,  117 => 20,  113 => 19,  110 => 18,  97 => 16,  93 => 15,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  73 => 9,  67 => 7,  65 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1 class=\"text-center text-xl\">{{(album ? \"Modifier\" : \"Ajouter\")}} un album</h1>
<br>
{% if error %}
<p class=\"text-red-600 text-center\">{{error}}</p>
{% endif %}
<br>
    {{form_start(form)}}
        {{ form_widget(form.image, {'attr': {'class': 'field', 'placeholder': \"Nom de l'image\", 'value': (album ? album.image : \"\")}}) }}
        {{ form_widget(form.releaseYear, {'attr': {'class': 'field', 'placeholder': \"Année\", 'value': (album ? album.releaseYear : \"\")}}) }}
        {{ form_widget(form.title, {'attr': {'class': 'field', 'placeholder': \"Titre\", 'value': (album ? album.title : \"\")}}) }}
        <select id=\"author\" class=\"field\" name=\"author\">
            {% for artist in artists %}
            <option {{ album and album.author.id != artist.id ?: \"selected\" }} value=\"{{artist.id}}\">{{artist.name}}</option>
            {% endfor %}
        </select>
        {% for genre in genres %}
            <div class=\"text-center\">
                <input {{ album and genre not in album.genre ?: 'checked=\"true\"' }} type=\"checkbox\" id=\"{{genre.id}}\" value=\"{{genre.id}}\" name=\"genres[]\">
                <label for=\"{{genre.id}}\">{{genre.name}}</label><br>
            </div>
        {% endfor %}
        <button type=\"submit\">{{(album ? \"Modifier\" : \"Ajouter\")}}</button>
    {{form_end(form)}}
{% endblock %}", "addAlbum.html.twig", "C:\\laragon\\www\\Music\\templates\\addAlbum.html.twig");
    }
}
