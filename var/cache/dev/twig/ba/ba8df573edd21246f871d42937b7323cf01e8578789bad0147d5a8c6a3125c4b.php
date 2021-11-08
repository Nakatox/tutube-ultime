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

/* user/index.html.twig */
class __TwigTemplate_80d41065a880c7090b791512443c6424577f05c3953e9cc13fcc675014d40da5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello UserController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"user_profile\">
    <div class=\"user_profile_top\">
        <div class=\"user_banniere\">

        </div>
        <div>
            <div class=\"thumbnail\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "profilepicture", [], "any", false, false, false, 14))), "html", null, true);
        echo "\">
            </div>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "pseudo", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
            ";
        // line 17
        if ((isset($context["is_subscibed"]) || array_key_exists("is_subscibed", $context) ? $context["is_subscibed"] : (function () { throw new RuntimeError('Variable "is_subscibed" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unsubscribe", ["param" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" method=\"get\" class=\"unsubscribe\">
                    <button type=\"submit\">UNSUBSCRIBE</button>
                </form>
            ";
        } else {
            // line 22
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscribe", ["param" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" method=\"get\" class=\"subscribe\">
                    <button type=\"submit\">SUBSCRIBE</button>
                </form>
            ";
        }
        // line 26
        echo "        </div>
    </div>

    <div>
        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_video");
        echo "\">Add video</a>
        <div class=\"video_profile_container\" >
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "videos", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 33
            echo "                <div class=\"video_profile\" style=\"cursor: pointer;\" onclick=\"window.location.href = '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch_video", ["param" => twig_get_attribute($this->env, $this->source, $context["e"], "uuid", [], "any", false, false, false, 33)]), "html", null, true);
            echo "'\">
                    <iframe  width=\"355\" height=\"200\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "link", [], "any", false, false, false, 34), "html", null, true);
            echo "?showinfo=0&controls=0&autohide=1\" allowfullscreen frameborder=\"0\"></iframe>
                    <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>   

                        <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "views", [], "any", false, false, false, 37), "html", null, true);
            echo " views - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date_interval"]) || array_key_exists("date_interval", $context) ? $context["date_interval"] : (function () { throw new RuntimeError('Variable "date_interval" does not exist.', 37, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 37), [], "array", false, false, false, 37), "html", null, true);
            echo "</p> 

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 41,  154 => 37,  149 => 35,  145 => 34,  140 => 33,  136 => 32,  131 => 30,  125 => 26,  117 => 22,  109 => 18,  107 => 17,  103 => 16,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UserController!{% endblock %}

{% block body %}

<div class=\"user_profile\">
    <div class=\"user_profile_top\">
        <div class=\"user_banniere\">

        </div>
        <div>
            <div class=\"thumbnail\">
                <img src=\"{{ asset('images/profile_pictures/'~user.profilepicture)}}\">
            </div>
            <p>{{user.pseudo}}</p>
            {% if is_subscibed %}
                <form action=\"{{path('unsubscribe',{param:user.id})}}\" method=\"get\" class=\"unsubscribe\">
                    <button type=\"submit\">UNSUBSCRIBE</button>
                </form>
            {% else %}
                <form action=\"{{path('subscribe',{param:user.id})}}\" method=\"get\" class=\"subscribe\">
                    <button type=\"submit\">SUBSCRIBE</button>
                </form>
            {% endif %}
        </div>
    </div>

    <div>
        <a href=\"{{ path('upload_video') }}\">Add video</a>
        <div class=\"video_profile_container\" >
            {% for e in user.videos %}
                <div class=\"video_profile\" style=\"cursor: pointer;\" onclick=\"window.location.href = '{{ path('watch_video',{param:e.uuid}) }}'\">
                    <iframe  width=\"355\" height=\"200\" src=\"{{ e.link }}?showinfo=0&controls=0&autohide=1\" allowfullscreen frameborder=\"0\"></iframe>
                    <p>{{ e.name }}</p>   

                        <p>{{ e.views }} views - {{ date_interval[e.id] }}</p> 

                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}

", "user/index.html.twig", "/Applications/MAMP/htdocs/2eme/php/tutube_v2/templates/user/index.html.twig");
    }
}
