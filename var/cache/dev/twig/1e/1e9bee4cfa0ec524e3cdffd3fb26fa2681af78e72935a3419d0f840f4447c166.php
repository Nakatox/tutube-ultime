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

/* video/subscription.html.twig */
class __TwigTemplate_d7e0790bcd307d8966f31c3d2d2f959af8e502933c2ed1f3765b4c58f4c36e22 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/subscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/subscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video/subscription.html.twig", 1);
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
        echo "
<script type=\"text/javascript\">
    function youtube_parser(url){
        var regExp = /^.*((youtu.be\\/)|(v\\/)|(\\/u\\/\\w\\/)|(embed\\/)|(watch\\?))\\??v?=?([^#&?]*).*/;
        var match = url.match(regExp);
        return (match&&match[7].length==11)? match[7] : false;
    }
</script>
<div class=\"subscription_videos\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "users", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["subs"]) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subs"], "videos", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 15
                echo "                <div class=\"video_profile video_subscription\" style=\"cursor: pointer;\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch_video", ["param" => twig_get_attribute($this->env, $this->source, $context["video"], "uuid", [], "any", false, false, false, 15)]), "html", null, true);
                echo "'\">
                    <iframe class=\"video_thumb";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\"  width=\"340\" height=\"180\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "link", [], "any", false, false, false, 16), "html", null, true);
                echo "?showinfo=0&controls=0&autohide=1\"></iframe>
                    <div>
                        <p>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>   
                        <p>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 19), [], "array", false, false, false, 19), "html", null, true);
                echo " views - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date_interval"]) || array_key_exists("date_interval", $context) ? $context["date_interval"] : (function () { throw new RuntimeError('Variable "date_interval" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 19), [], "array", false, false, false, 19), "html", null, true);
                echo "</p> 
                        <p class=\"description\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
                        <div style=\"cursor: pointer; display:flex; align-items:center;\" onclick=\"window.location.href = '";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["param" => twig_get_attribute($this->env, $this->source, $context["subs"], "pseudo", [], "any", false, false, false, 21)]), "html", null, true);
                echo "'\">
                            <div class=\"thumbnail thumbnail2\">
                                <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, $context["subs"], "profilepicture", [], "any", false, false, false, 23))), "html", null, true);
                echo "\">
                            </div>
                            <p style=\"opacity: 0.9; margin-left:10px\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subs"], "pseudo", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                </div>
                <script>
                   document.querySelector('.video_thumb";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "').src =`https://img.youtube.com/vi/\${youtube_parser('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "link", [], "any", false, false, false, 30), "html", null, true);
                echo "')}/mqdefault.jpg` 
                </script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "video/subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  143 => 33,  132 => 30,  124 => 25,  119 => 23,  114 => 21,  110 => 20,  104 => 19,  100 => 18,  93 => 16,  88 => 15,  83 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<script type=\"text/javascript\">
    function youtube_parser(url){
        var regExp = /^.*((youtu.be\\/)|(v\\/)|(\\/u\\/\\w\\/)|(embed\\/)|(watch\\?))\\??v?=?([^#&?]*).*/;
        var match = url.match(regExp);
        return (match&&match[7].length==11)? match[7] : false;
    }
</script>
<div class=\"subscription_videos\">
    {% for subs in user.users %}
        {% for video in subs.videos %}
                <div class=\"video_profile video_subscription\" style=\"cursor: pointer;\" onclick=\"window.location.href = '{{ path('watch_video',{param:video.uuid}) }}'\">
                    <iframe class=\"video_thumb{{video.id}}\"  width=\"340\" height=\"180\" src=\"{{ video.link }}?showinfo=0&controls=0&autohide=1\"></iframe>
                    <div>
                        <p>{{ video.name }}</p>   
                        <p>{{ views[video.id] }} views - {{ date_interval[video.id] }}</p> 
                        <p class=\"description\">{{video.description}}</p>
                        <div style=\"cursor: pointer; display:flex; align-items:center;\" onclick=\"window.location.href = '{{ path('user',{param:subs.pseudo}) }}'\">
                            <div class=\"thumbnail thumbnail2\">
                                <img src=\"{{ asset('images/profile_pictures/'~subs.profilepicture)}}\">
                            </div>
                            <p style=\"opacity: 0.9; margin-left:10px\">{{subs.pseudo}}</p>
                        </div>
                    </div>
                </div>
                <script>
                   document.querySelector('.video_thumb{{video.id}}').src =`https://img.youtube.com/vi/\${youtube_parser('{{video.link}}')}/mqdefault.jpg` 
                </script>
        {% endfor %}
    {% endfor %}
</div>

{% endblock %}
", "video/subscription.html.twig", "/Applications/MAMP/htdocs/2eme/php/tutube_v2/templates/video/subscription.html.twig");
    }
}
