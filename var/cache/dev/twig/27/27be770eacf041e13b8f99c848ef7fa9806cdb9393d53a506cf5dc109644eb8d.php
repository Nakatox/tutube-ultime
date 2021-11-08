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
        echo "
<div class=\"nav_profile\">
    ";
        // line 3
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()) != null)) {
            // line 4
            echo "        <div class=\"thumbnail\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "profilepicture", [], "any", false, false, false, 5))), "html", null, true);
            echo "\">
        </div>
        <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "pseudo", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "</div>
<div class=\"nav_link\">
    ";
        // line 11
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()) != null)) {
            // line 12
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscription");
            echo "\">Subscription</a>
        <a href=\"\" >Trend</a>
        <a href=\"\" >Discover</a>
        <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
    ";
        }
        // line 17
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a>
    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a>
</div>
<div class=\"nav_subscribe\">
    <p>Subscriptions</p>
    ";
        // line 22
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()) != null)) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 24
                echo "        <div style=\"cursor: pointer; \" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["param" => twig_get_attribute($this->env, $this->source, $context["e"], "pseudo", [], "any", false, false, false, 24)]), "html", null, true);
                echo "'\">
            <div class=\"thumbnail thumbnail2\">
                <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profile_pictures/" . twig_get_attribute($this->env, $this->source, $context["e"], "profilepicture", [], "any", false, false, false, 26))), "html", null, true);
                echo "\">
            </div>
            <p>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "pseudo", [], "any", false, false, false, 28), "html", null, true);
                echo "</p>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        }
        // line 32
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
        return array (  122 => 32,  119 => 31,  110 => 28,  105 => 26,  99 => 24,  94 => 23,  92 => 22,  85 => 18,  80 => 17,  75 => 15,  68 => 12,  66 => 11,  62 => 9,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"nav_profile\">
    {% if user != null %}
        <div class=\"thumbnail\">
            <img src=\"{{ asset('images/profile_pictures/'~user.profilepicture)}}\">
        </div>
        <p>{{user.pseudo}}</p>
    {% endif %}
</div>
<div class=\"nav_link\">
    {% if user != null %}
        <a href=\"{{path('subscription')}}\">Subscription</a>
        <a href=\"\" >Trend</a>
        <a href=\"\" >Discover</a>
        <a href=\"{{path('app_logout')}}\">Logout</a>
    {% endif %}
    <a href=\"{{path('app_login')}}\">Login</a>
    <a href=\"{{path('app_register')}}\">Register</a>
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
