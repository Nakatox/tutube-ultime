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

/* video/show_video.html.twig */
class __TwigTemplate_83ae87c71d17e9c55596582e59f897530541a4645dfb8442c06306053ba3e319 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/show_video.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/show_video.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video/show_video.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"show_video\">
    <div>
        <iframe class=\"video_thumb\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 6, $this->source); })()), "link", [], "any", false, false, false, 6), "html", null, true);
        echo "?autoplay=1\"></iframe>
    </div>
    
    <div class=\"about_video\">
        <div class=\"title_container\">
            <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " views</p>
        </div>
        <div>
            <div class=\"about_video_user\">
                <div class=\"thumbnail thumbnail2\" style=\"cursor: pointer;\" onclick=\"window.location.href = '";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["param" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 16, $this->source); })()), "pseudo", [], "any", false, false, false, 16)]), "html", null, true);
        echo "'\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 17, $this->source); })()), "profilepicture", [], "any", false, false, false, 17))), "html", null, true);
        echo "\">
                </div>
                <div>
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 20, $this->source); })()), "pseudo", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                    <p>nb subs</p>
                </div>
            </div>
            <div>
                ";
        // line 25
        if ((isset($context["is_subscribed"]) || array_key_exists("is_subscribed", $context) ? $context["is_subscribed"] : (function () { throw new RuntimeError('Variable "is_subscribed" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unsubscribe", ["param" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "location" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 26, $this->source); })()), "uuid", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" method=\"get\" class=\"unsubscribe\">
                    <button type=\"submit\">UNSUBSCRIBE</button>
                </form>
            ";
        } else {
            // line 30
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscribe", ["param" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "location" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 30, $this->source); })()), "uuid", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" method=\"get\" class=\"subscribe\">
                    <button type=\"submit\">SUBSCRIBE</button>
                </form>
            ";
        }
        // line 34
        echo "            </div>
        </div>
        <div class=\"description_video\">
            <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
        </div>
    </div>
    
    <div class=\"video_comments\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CommentController::addComment", ["param" => twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]));
        // line 44
        echo "
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 45, $this->source); })()), "comments", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 46
            echo "        <div class=\"comment\">
            <div class=\"thumbnail thumbnail3\">
                <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "iduser", [], "any", false, false, false, 48), "profilepicture", [], "any", false, false, false, 48))), "html", null, true);
            echo "\">
            </div>
            <div>
                <p>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "iduser", [], "any", false, false, false, 51), "pseudo", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
                <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "video/show_video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 56,  164 => 52,  160 => 51,  154 => 48,  150 => 46,  146 => 45,  143 => 44,  141 => 43,  140 => 42,  132 => 37,  127 => 34,  119 => 30,  111 => 26,  109 => 25,  101 => 20,  95 => 17,  91 => 16,  84 => 12,  80 => 11,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"show_video\">
    <div>
        <iframe class=\"video_thumb\" src=\"{{ video.link }}?autoplay=1\"></iframe>
    </div>
    
    <div class=\"about_video\">
        <div class=\"title_container\">
            <p>{{video.name}}</p>
            <p>{{views}} views</p>
        </div>
        <div>
            <div class=\"about_video_user\">
                <div class=\"thumbnail thumbnail2\" style=\"cursor: pointer;\" onclick=\"window.location.href = '{{ path('user',{param:author.pseudo}) }}'\">
                    <img src=\"{{ asset('images/profile_pictures/'~author.profilepicture)}}\">
                </div>
                <div>
                    <p>{{author.pseudo}}</p>
                    <p>nb subs</p>
                </div>
            </div>
            <div>
                {% if is_subscribed %}
                <form action=\"{{path('unsubscribe',{param:author.id, location:video.uuid})}}\" method=\"get\" class=\"unsubscribe\">
                    <button type=\"submit\">UNSUBSCRIBE</button>
                </form>
            {% else %}
                <form action=\"{{path('subscribe',{param:author.id, location:video.uuid})}}\" method=\"get\" class=\"subscribe\">
                    <button type=\"submit\">SUBSCRIBE</button>
                </form>
            {% endif %}
            </div>
        </div>
        <div class=\"description_video\">
            <p>{{video.description}}</p>
        </div>
    </div>
    
    <div class=\"video_comments\">
        {{ render(controller(
            'App\\\\Controller\\\\CommentController::addComment', {param: video.id}
        )) }}
        {% for comment in video.comments %}
        <div class=\"comment\">
            <div class=\"thumbnail thumbnail3\">
                <img src=\"{{ asset('images/profile_pictures/'~comment.iduser.profilepicture)}}\">
            </div>
            <div>
                <p>{{comment.iduser.pseudo}}</p>
                <p>{{comment.content}}</p>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "video/show_video.html.twig", "/Applications/MAMP/htdocs/2eme/php/tutube_v2/templates/video/show_video.html.twig");
    }
}
