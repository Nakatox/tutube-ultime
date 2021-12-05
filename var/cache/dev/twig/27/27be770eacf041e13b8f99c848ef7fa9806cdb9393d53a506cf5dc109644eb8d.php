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

/* naviguation/naviguation.html.twig */
class __TwigTemplate_a799b906fe4ab42ff539e81ef5593f4446e3cc84fb006967c3d3bb58130f008e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "naviguation/naviguation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "naviguation/naviguation.html.twig"));

        // line 1
        echo "<div class=\"nav_profile\">
    <div class=\"logo_tutube\" style=\"cursor: pointer;\" onclick=\"window.location.href = '";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "'\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"nav_link\">
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trend");
        echo "\" >Trend</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discover");
        echo "\" >Discover</a>   
    ";
        // line 9
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()) != null)) {
            // line 10
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscription");
            echo "\">Subscription</a>
        ";
            // line 11
            if ((isset($context["is_admin"]) || array_key_exists("is_admin", $context) ? $context["is_admin"] : (function () { throw new RuntimeError('Variable "is_admin" does not exist.', 11, $this->source); })())) {
                // line 12
                echo "            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user");
                echo "\">Admin User</a>
            <a href=\"";
                // line 13
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_video");
                echo "\"> Admin Video</a>
        ";
            }
            // line 15
            echo "    ";
        }
        // line 16
        echo "</div>
<div class=\"nav_subscribe\">
    <p>Subscriptions</p>
    ";
        // line 19
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()) != null)) {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 21
                echo "        <div style=\"cursor: pointer; \" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["param" => twig_get_attribute($this->env, $this->source, $context["e"], "pseudo", [], "any", false, false, false, 21)]), "html", null, true);
                echo "'\">
            <div class=\"thumbnail thumbnail2\">
                <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, $context["e"], "profilepicture", [], "any", false, false, false, 23))), "html", null, true);
                echo "\">
            </div>
            <p>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "pseudo", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "naviguation/naviguation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 29,  119 => 28,  110 => 25,  105 => 23,  99 => 21,  94 => 20,  92 => 19,  87 => 16,  84 => 15,  79 => 13,  74 => 12,  72 => 11,  67 => 10,  65 => 9,  61 => 8,  57 => 7,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav_profile\">
    <div class=\"logo_tutube\" style=\"cursor: pointer;\" onclick=\"window.location.href = '{{ path('home') }}'\">
        <img src=\"{{ asset('images/logo/logo.png')}}\">
    </div>
</div>
<div class=\"nav_link\">
    <a href=\"{{path('trend')}}\" >Trend</a>
    <a href=\"{{path('discover')}}\" >Discover</a>   
    {% if user != null %}
        <a href=\"{{path('subscription')}}\">Subscription</a>
        {% if is_admin %}
            <a href=\"{{path('admin_user')}}\">Admin User</a>
            <a href=\"{{path('admin_video')}}\"> Admin Video</a>
        {% endif %}
    {% endif %}
</div>
<div class=\"nav_subscribe\">
    <p>Subscriptions</p>
    {% if user != null %}
        {% for e in subscription %}
        <div style=\"cursor: pointer; \" onclick=\"window.location.href = '{{ path('user',{param:e.pseudo}) }}'\">
            <div class=\"thumbnail thumbnail2\">
                <img src=\"{{ asset('images/profile_pictures/'~e.profilepicture)}}\">
            </div>
            <p>{{e.pseudo}}</p>
        </div>
        {% endfor %}
    {% endif %}

</div>

", "naviguation/naviguation.html.twig", "/Applications/MAMP/htdocs/2eme/php/tutube_v2/templates/naviguation/naviguation.html.twig");
    }
}
