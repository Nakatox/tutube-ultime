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

<div class=\"user_profile\">
    <div class=\"user_profile_top\">
        <div class=\"user_banniere\">

        </div>
        <div>
            <div class=\"thumbnail\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "profilepicture", [], "any", false, false, false, 19))), "html", null, true);
        echo "\">
            </div>
            <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "pseudo", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
            <div>
                <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "views", [], "array", false, false, false, 23), "html", null, true);
        echo " total views</p>
                <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 24, $this->source); })()), "videos", [], "array", false, false, false, 24), "html", null, true);
        echo " total videos</p>
            </div>
            ";
        // line 26
        if (((isset($context["is_user"]) || array_key_exists("is_user", $context) ? $context["is_user"] : (function () { throw new RuntimeError('Variable "is_user" does not exist.', 26, $this->source); })()) == false)) {
            // line 27
            echo "
                ";
            // line 28
            if ((isset($context["is_subscibed"]) || array_key_exists("is_subscibed", $context) ? $context["is_subscibed"] : (function () { throw new RuntimeError('Variable "is_subscibed" does not exist.', 28, $this->source); })())) {
                // line 29
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unsubscribe", ["param" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "location" => "user"]), "html", null, true);
                echo "\" method=\"get\" class=\"unsubscribe\">
                        <button type=\"submit\">UNSUBSCRIBE</button>
                    </form>
                ";
            } else {
                // line 33
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscribe", ["param" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "location" => "user"]), "html", null, true);
                echo "\" method=\"get\" class=\"subscribe\">
                        <button type=\"submit\">SUBSCRIBE</button>
                    </form>
                ";
            }
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </div>
    </div>

    <div>
        ";
        // line 42
        if ((isset($context["is_user"]) || array_key_exists("is_user", $context) ? $context["is_user"] : (function () { throw new RuntimeError('Variable "is_user" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_video");
            echo "\" class=\"add_video_user\">Add video</a>
        ";
        }
        // line 45
        echo "        <div class=\"video_profile_container\" >
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "videos", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 47
            echo "                
                <div class=\"video_profile\" style=\"cursor: pointer;\" onclick=\"window.location.href = '";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch_video", ["param" => twig_get_attribute($this->env, $this->source, $context["e"], "uuid", [], "any", false, false, false, 48)]), "html", null, true);
            echo "'\">
                    <iframe class=\"video_thumb";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\"  width=\"340\" height=\"180\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "link", [], "any", false, false, false, 49), "html", null, true);
            echo "?showinfo=0&controls=0&autohide=1\"></iframe>
                    <p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>   
                    <p>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "html", null, true);
            echo " views - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date_interval"]) || array_key_exists("date_interval", $context) ? $context["date_interval"] : (function () { throw new RuntimeError('Variable "date_interval" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "html", null, true);
            echo "</p> 
                    ";
            // line 52
            if ((isset($context["is_user"]) || array_key_exists("is_user", $context) ? $context["is_user"] : (function () { throw new RuntimeError('Variable "is_user" does not exist.', 52, $this->source); })())) {
                // line 53
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_video", ["param" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 53), "location" => "user"]), "html", null, true);
                echo "\" class=\"delete_video\">Delete</a>
                    ";
            }
            // line 55
            echo "                </div>
                <script>
                   document.querySelector('.video_thumb";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "').src =`https://img.youtube.com/vi/\${youtube_parser('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "link", [], "any", false, false, false, 57), "html", null, true);
            echo "')}/mqdefault.jpg` 
                </script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return array (  197 => 60,  186 => 57,  182 => 55,  176 => 53,  174 => 52,  168 => 51,  164 => 50,  158 => 49,  154 => 48,  151 => 47,  147 => 46,  144 => 45,  138 => 43,  136 => 42,  130 => 38,  127 => 37,  119 => 33,  111 => 29,  109 => 28,  106 => 27,  104 => 26,  99 => 24,  95 => 23,  90 => 21,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
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

<div class=\"user_profile\">
    <div class=\"user_profile_top\">
        <div class=\"user_banniere\">

        </div>
        <div>
            <div class=\"thumbnail\">
                <img src=\"{{ asset('images/profile_pictures/'~user.profilepicture)}}\">
            </div>
            <p>{{user.pseudo}}</p>
            <div>
                <p>{{stats[\"views\"]}} total views</p>
                <p>{{stats[\"videos\"]}} total videos</p>
            </div>
            {% if is_user == false %}

                {% if is_subscibed %}
                    <form action=\"{{path('unsubscribe',{param:user.id, location:\"user\"})}}\" method=\"get\" class=\"unsubscribe\">
                        <button type=\"submit\">UNSUBSCRIBE</button>
                    </form>
                {% else %}
                    <form action=\"{{path('subscribe',{param:user.id, location:\"user\"})}}\" method=\"get\" class=\"subscribe\">
                        <button type=\"submit\">SUBSCRIBE</button>
                    </form>
                {% endif %}
            {% endif %}
        </div>
    </div>

    <div>
        {% if is_user %}
            <a href=\"{{ path('upload_video') }}\" class=\"add_video_user\">Add video</a>
        {% endif %}
        <div class=\"video_profile_container\" >
            {% for e in user.videos %}
                
                <div class=\"video_profile\" style=\"cursor: pointer;\" onclick=\"window.location.href = '{{ path('watch_video',{param:e.uuid}) }}'\">
                    <iframe class=\"video_thumb{{e.id}}\"  width=\"340\" height=\"180\" src=\"{{ e.link }}?showinfo=0&controls=0&autohide=1\"></iframe>
                    <p>{{ e.name }}</p>   
                    <p>{{ views[e.id] }} views - {{ date_interval[e.id] }}</p> 
                    {% if is_user %}
                        <a href=\"{{ path('delete_video',{param:e.id, location:\"user\"}) }}\" class=\"delete_video\">Delete</a>
                    {% endif %}
                </div>
                <script>
                   document.querySelector('.video_thumb{{e.id}}').src =`https://img.youtube.com/vi/\${youtube_parser('{{e.link}}')}/mqdefault.jpg` 
                </script>
            {% endfor %}
        </div>
    </div>
</div>

{% endblock %}

", "user/index.html.twig", "/Applications/MAMP/htdocs/2eme/php/tutube_v2/templates/user/index.html.twig");
    }
}
