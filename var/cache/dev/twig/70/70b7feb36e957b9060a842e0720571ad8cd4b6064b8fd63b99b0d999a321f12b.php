<?php

/* AdminBundle:Helper:sidebar_navigation.html.twig */
class __TwigTemplate_d79598ef1b44b0e98b861cecae4a03b5cc87226eecab5c41cb817bc366b38230 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:sidebar_navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:sidebar_navigation.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 3, $this->source); })()) == "dashboard"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-tachometer\"></i><span>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_listing");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 9, $this->source); })()) == "listings"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-map-marker\"></i><span>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_claim");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 15, $this->source); })()) == "claims"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-hand-paper-o\"></i><span>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Claims"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_report");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 21, $this->source); })()) == "reports"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-flag\"></i><span>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reports"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 27, $this->source); })()) == "posts"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-book\"></i><span>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Blog Posts"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 33, $this->source); })()) == "reviews"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-star\"></i><span>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 39, $this->source); })()) == "orders"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-shopping-cart\"></i><span>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 45, $this->source); })()) == "users"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-users\"></i><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inquire");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 51, $this->source); })()) == "inquires"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-comment\"></i><span>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inquires"), "html", null, true);
        echo "</span>
        </a>
    </li>            

    <li class=\"nav-item\">
        <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscriber");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 57, $this->source); })()) == "subscribers"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-envelope\"></i><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subscribers"), "html", null, true);
        echo "</span>
        </a>
    </li>                        
</ul>

<strong class=\"nav-primary-title\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Taxonomies"), "html", null, true);
        echo "</strong>

<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 67, $this->source); })()) == "categories"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-tags\"></i><span>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_location");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 73, $this->source); })()) == "locations"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-map-o\"></i><span>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Locations"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_amenity");
        echo "\" class=\"nav-link ";
        if (((isset($context["active"]) || array_key_exists("active", $context)) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 79, $this->source); })()) == "amenities"))) {
            echo "active";
        }
        echo "\">
            <i class=\"fa fa-check\"></i><span>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amenities"), "html", null, true);
        echo "</span>
        </a>
    </li>
</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Helper:sidebar_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 80,  232 => 79,  224 => 74,  216 => 73,  208 => 68,  200 => 67,  193 => 63,  185 => 58,  177 => 57,  169 => 52,  161 => 51,  153 => 46,  145 => 45,  137 => 40,  129 => 39,  121 => 34,  113 => 33,  105 => 28,  97 => 27,  89 => 22,  81 => 21,  73 => 16,  65 => 15,  57 => 10,  49 => 9,  41 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"{{ path('admin_dashboard') }}\" class=\"nav-link {% if active is defined and active == 'dashboard' %}active{% endif %}\">
            <i class=\"fa fa-tachometer\"></i><span>{{ 'Dashboard'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_listing') }}\" class=\"nav-link {% if active is defined and active == 'listings' %}active{% endif %}\">
            <i class=\"fa fa-map-marker\"></i><span>{{ 'Listings'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_claim') }}\" class=\"nav-link {% if active is defined and active == 'claims' %}active{% endif %}\">
            <i class=\"fa fa-hand-paper-o\"></i><span>{{ 'Claims'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_report') }}\" class=\"nav-link {% if active is defined and active == 'reports' %}active{% endif %}\">
            <i class=\"fa fa-flag\"></i><span>{{ 'Reports'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_post') }}\" class=\"nav-link {% if active is defined and active == 'posts' %}active{% endif %}\">
            <i class=\"fa fa-book\"></i><span>{{ 'Blog Posts'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_review') }}\" class=\"nav-link {% if active is defined and active == 'reviews' %}active{% endif %}\">
            <i class=\"fa fa-star\"></i><span>{{ 'Reviews'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_order') }}\" class=\"nav-link {% if active is defined and active == 'orders' %}active{% endif %}\">
            <i class=\"fa fa-shopping-cart\"></i><span>{{ 'Orders'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_user') }}\" class=\"nav-link {% if active is defined and active == 'users' %}active{% endif %}\">
            <i class=\"fa fa-users\"></i><span>{{ 'Users'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_inquire') }}\" class=\"nav-link {% if active is defined and active == 'inquires' %}active{% endif %}\">
            <i class=\"fa fa-comment\"></i><span>{{ 'Inquires'|trans }}</span>
        </a>
    </li>            

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_subscriber') }}\" class=\"nav-link {% if active is defined and active == 'subscribers' %}active{% endif %}\">
            <i class=\"fa fa-envelope\"></i><span>{{ 'Subscribers'|trans }}</span>
        </a>
    </li>                        
</ul>

<strong class=\"nav-primary-title\">{{ 'Taxonomies'|trans }}</strong>

<ul class=\"nav nav-primary flex-column\">
    <li class=\"nav-item\">
        <a href=\"{{ path('admin_category') }}\" class=\"nav-link {% if active is defined and active == 'categories' %}active{% endif %}\">
            <i class=\"fa fa-tags\"></i><span>{{ 'Categories'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_location') }}\" class=\"nav-link {% if active is defined and active == 'locations' %}active{% endif %}\">
            <i class=\"fa fa-map-o\"></i><span>{{ 'Locations'|trans }}</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"{{ path('admin_amenity') }}\" class=\"nav-link {% if active is defined and active == 'amenities' %}active{% endif %}\">
            <i class=\"fa fa-check\"></i><span>{{ 'Amenities'|trans }}</span>
        </a>
    </li>
</ul>", "AdminBundle:Helper:sidebar_navigation.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/sidebar_navigation.html.twig");
    }
}
