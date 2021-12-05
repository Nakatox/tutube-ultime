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

/* video/tendance.html.twig */
class __TwigTemplate_af4df810745e2e4807fad8624d26a7da60b07ef6139dd4b0371a127ab590c9ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/tendance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/tendance.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video/tendance.html.twig", 1);
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
        echo "<script type=\"text/javascript\">
    function youtube_parser(url){
        var regExp = /^.*((youtu.be\\/)|(v\\/)|(\\/u\\/\\w\\/)|(embed\\/)|(watch\\?))\\??v?=?([^#&?]*).*/;
        var match = url.match(regExp);
        return (match&&match[7].length==11)? match[7] : false;
    }
</script>
<div class=\"subscription_videos\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 13
            echo "            <div class=\"video_profile video_subscription\" style=\"cursor: pointer;\" onclick=\"window.location.href = '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch_video", ["param" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 13), "uuid", [], "any", false, false, false, 13)]), "html", null, true);
            echo "'\">
                <iframe class=\"video_thumb";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"  width=\"340\" height=\"180\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 14), "link", [], "any", false, false, false, 14), "html", null, true);
            echo "?showinfo=0&controls=0&autohide=1\"></iframe>
                <div>
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>   
                    <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "views", [], "array", false, false, false, 17), "html", null, true);
            echo " views - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date_interval"]) || array_key_exists("date_interval", $context) ? $context["date_interval"] : (function () { throw new RuntimeError('Variable "date_interval" does not exist.', 17, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 17), "id", [], "any", false, false, false, 17), [], "array", false, false, false, 17), "html", null, true);
            echo "</p> 
                    <p class=\"description\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 18), "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                    <div style=\"cursor: pointer; display:flex; align-items:center;\" onclick=\"window.location.href = '";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["param" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 19), "iduser", [], "any", false, false, false, 19), "pseudo", [], "any", false, false, false, 19)]), "html", null, true);
            echo "'\">
                        <div class=\"thumbnail thumbnail2\">
                            <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 21), "iduser", [], "any", false, false, false, 21), "profilepicture", [], "any", false, false, false, 21))), "html", null, true);
            echo "\">
                        </div>
                        <p style=\"opacity: 0.9; margin-left:10px\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 23), "iduser", [], "any", false, false, false, 23), "pseudo", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <script>
                document.querySelector('.video_thumb";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "').src =`https://img.youtube.com/vi/\${youtube_parser('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 28), "link", [], "any", false, false, false, 28), "html", null, true);
            echo "')}/mqdefault.jpg` 
            </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "video/tendance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 31,  126 => 28,  118 => 23,  113 => 21,  108 => 19,  104 => 18,  98 => 17,  94 => 16,  87 => 14,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
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
    {% for video in videos %}
            <div class=\"video_profile video_subscription\" style=\"cursor: pointer;\" onclick=\"window.location.href = '{{ path('watch_video',{param:video[0].uuid}) }}'\">
                <iframe class=\"video_thumb{{video[0].id}}\"  width=\"340\" height=\"180\" src=\"{{ video[0].link }}?showinfo=0&controls=0&autohide=1\"></iframe>
                <div>
                    <p>{{ video[0].name }}</p>   
                    <p>{{ video[\"views\"] }} views - {{ date_interval[video[0].id] }}</p> 
                    <p class=\"description\">{{video[0].description}}</p>
                    <div style=\"cursor: pointer; display:flex; align-items:center;\" onclick=\"window.location.href = '{{ path('user',{param:video[0].iduser.pseudo}) }}'\">
                        <div class=\"thumbnail thumbnail2\">
                            <img src=\"{{ asset('images/profile_pictures/'~video[0].iduser.profilepicture)}}\">
                        </div>
                        <p style=\"opacity: 0.9; margin-left:10px\">{{video[0].iduser.pseudo}}</p>
                    </div>
                </div>
            </div>
            <script>
                document.querySelector('.video_thumb{{video[0].id}}').src =`https://img.youtube.com/vi/\${youtube_parser('{{video[0].link}}')}/mqdefault.jpg` 
            </script>
    {% endfor %}

</div>

{% endblock %}
", "video/tendance.html.twig", "/Applications/MAMP/htdocs/2eme/php/tutube_v2/templates/video/tendance.html.twig");
    }
}
