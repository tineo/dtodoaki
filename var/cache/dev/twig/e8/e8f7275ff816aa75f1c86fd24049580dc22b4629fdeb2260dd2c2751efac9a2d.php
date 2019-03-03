<?php

/* FrontBundle:Listing:my.html.twig */
class __TwigTemplate_69cd811b09db30e969d1a10f1a107f5e126da5a61eb567a5dda5ebc2ae488742 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Listing:my.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:my.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:my.html.twig"));

        // line 4
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Listings");
        // line 6
        $context["actions"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_create"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create")]];
        // line 13
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings")], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Listings")]];
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 26, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
    <div class=\"container\">        
        ";
        // line 30
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle:Listing:my.html.twig", 30)->display($context);
        // line 31
        echo "
        ";
        // line 32
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "            <div class=\"table-wrapper\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured"), "html", null, true);
            echo "</th>
                            <th class=\"table-center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Verified"), "html", null, true);
            echo "</th>
                            <th class=\"table-min-width\"></th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 48
                echo "                            <tr>
                                <td>
                                    <div class=\"table-card\">
                                        <div class=\"table-card-image\"
                                            ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getFeaturedImage", [], "method")) {
                    // line 53
                    echo "                                                style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["listing"], "getFeaturedImage", [], "method"), "image"), "html", null, true);
                    echo "');\"
                                            ";
                }
                // line 54
                echo ">
                                        </div><!-- /.table-card-image -->

                                        <div class=\"table-card-content\">
                                            <div class=\"table-card-content-inner\">
                                                <div class=\"table-card-title\">
                                                    <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["listing"], "getSlug", [], "method")]), "html", null, true);
                echo "\" target=\"_blank\">
                                                        ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getName", [], "method"), "html", null, true);
                echo "
                                                    </a>
                                                </div><!-- /.table-card-title -->

                                                ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getPrice", [], "method")) {
                    // line 66
                    echo "                                                    <div class=\"table-card-subtitle\">
                                                        ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, $context["listing"], "getPrice", [], "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 67, $this->source); })())), "html", null, true);
                    echo "
                                                    </div><!-- /.table-card-subtitle -->
                                                ";
                }
                // line 70
                echo "                                            </div><!-- /.table-card-content-inner -->
                                        </div><!-- /.table-card-content -->
                                    </div><!-- /.table-card -->
                                </td>

                                <td class=\"table-min-width table-center\">
                                    ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getCategory", [], "method")) {
                    // line 77
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listing"], "getCategory", [], "method"), "getSlug", [], "method")]), "html", null, true);
                    echo "\" target=\"_blank\">
                                            ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listing"], "getCategory", [], "method"), "getName", [], "method"), "html", null, true);
                    echo "
                                        </a>
                                    ";
                } else {
                    // line 81
                    echo "                                        -
                                    ";
                }
                // line 83
                echo "                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsPublished", [], "method")) {
                    // line 87
                    echo "                                        <i class=\"fa fa-check\"></i>
                                    ";
                } else {
                    // line 89
                    echo "                                        <i class=\"fa fa-close\"></i>
                                    ";
                }
                // line 91
                echo "                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    ";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsFeatured", [], "method")) {
                    // line 95
                    echo "                                        <i class=\"fa fa-check\"></i>
                                    ";
                } else {
                    // line 97
                    echo "                                        <i class=\"fa fa-close\"></i>
                                    ";
                }
                // line 99
                echo "                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsVerified", [], "method")) {
                    // line 103
                    echo "                                        <i class=\"fa fa-check\"></i>
                                    ";
                } else {
                    // line 105
                    echo "                                        <i class=\"fa fa-close\"></i>
                                    ";
                }
                // line 107
                echo "                                </td>

                                <td class=\"table-min-width\">
                                    <div class=\"btn-group\">                                        

                                        ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsPublished", [], "method")) {
                    // line 113
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_unpublish", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                    echo "\">
                                                ";
                    // line 114
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unpublish"), "html", null, true);
                    echo "
                                            </a>
                                        ";
                } else {
                    // line 117
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_publish", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                    echo "\">
                                                ";
                    // line 118
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publish"), "html", null, true);
                    echo "

                                                ";
                    // line 120
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new Twig_Error_Runtime('Variable "payments" does not exist.', 120, $this->source); })()), "pay_for_publish", []), "enabled", [])) {
                        // line 121
                        echo "                                                    (";
                        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new Twig_Error_Runtime('Variable "payments" does not exist.', 121, $this->source); })()), "pay_for_publish", []), "price", []), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 121, $this->source); })())), "html", null, true);
                        echo ")
                                                ";
                    }
                    // line 123
                    echo "                                            </a>
                                        ";
                }
                // line 125
                echo "
                                        ";
                // line 126
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsFeatured", [], "method")) {
                    // line 127
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_unfeature", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                    echo "\">
                                                ";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unfeature"), "html", null, true);
                    echo "
                                            </a>
                                        ";
                } else {
                    // line 131
                    echo "                                            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_feature", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                    echo "\">
                                                ";
                    // line 132
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature"), "html", null, true);
                    echo "
                                                ";
                    // line 133
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new Twig_Error_Runtime('Variable "payments" does not exist.', 133, $this->source); })()), "pay_for_featured", []), "enabled", [])) {
                        // line 134
                        echo "                                                    (";
                        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new Twig_Error_Runtime('Variable "payments" does not exist.', 134, $this->source); })()), "pay_for_featured", []), "price", []), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 134, $this->source); })())), "html", null, true);
                        echo ")
                                                ";
                    }
                    // line 136
                    echo "                                            </a>
                                        ";
                }
                // line 138
                echo "                                        
                                        <a class=\"btn\" href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_update", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
                echo "</a>
                                        <a class=\"btn\" href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                echo "</a>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                    </tbody>
                </table>
            </div><!-- /.table-wrapper -->

            <div class=\"navigation\">
                ";
            // line 150
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 150, $this->source); })()));
            echo "
            </div><!-- /.navigation -->                     
        ";
        } else {
            // line 153
            echo "            ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
        ";
        }
        // line 155
        echo "    </div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing:my.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 155,  354 => 153,  348 => 150,  341 => 145,  328 => 140,  322 => 139,  319 => 138,  315 => 136,  309 => 134,  307 => 133,  303 => 132,  298 => 131,  292 => 128,  287 => 127,  285 => 126,  282 => 125,  278 => 123,  272 => 121,  270 => 120,  265 => 118,  260 => 117,  254 => 114,  249 => 113,  247 => 112,  240 => 107,  236 => 105,  232 => 103,  230 => 102,  225 => 99,  221 => 97,  217 => 95,  215 => 94,  210 => 91,  206 => 89,  202 => 87,  200 => 86,  195 => 83,  191 => 81,  185 => 78,  180 => 77,  178 => 76,  170 => 70,  162 => 67,  159 => 66,  157 => 65,  150 => 61,  146 => 60,  138 => 54,  132 => 53,  130 => 52,  124 => 48,  120 => 47,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  89 => 33,  87 => 32,  84 => 31,  82 => 30,  70 => 28,  52 => 26,  42 => 1,  40 => 13,  38 => 6,  36 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}


{% set title = 'My Listings'|trans %}

{% set actions = [
    {
        'link': path('listing_create'),
        'title': 'Create'|trans,
    }
] %}

{% set breadcrumbs = [
    {
        'link': path('homepage'), 'title': 'Home'|trans,
    },
    {
        'link': path('listing'), 'title': 'Listings'|trans,
    },
    {
        'title': 'My Listings'|trans
    }
] %}


{% block title %}{{ title }}{% endblock %}

{% block content %}    
    <div class=\"container\">        
        {% include 'FrontBundle::Helper/content_title.html.twig' %}

        {% if listings|length %}
            <div class=\"table-wrapper\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>{{ 'Title'|trans }}</th>
                            <th class=\"table-center\">{{ 'Category'|trans }}</th>
                            <th class=\"table-center\">{{ 'Published'|trans }}</th>
                            <th class=\"table-center\">{{ 'Featured'|trans }}</th>
                            <th class=\"table-center\">{{ 'Verified'|trans }}</th>
                            <th class=\"table-min-width\"></th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for listing in listings %}
                            <tr>
                                <td>
                                    <div class=\"table-card\">
                                        <div class=\"table-card-image\"
                                            {% if listing.getFeaturedImage() %}
                                                style=\"background-image: url('{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}');\"
                                            {% endif %}>
                                        </div><!-- /.table-card-image -->

                                        <div class=\"table-card-content\">
                                            <div class=\"table-card-content-inner\">
                                                <div class=\"table-card-title\">
                                                    <a href=\"{{ path('listing_detail', {'slug': listing.getSlug()}) }}\" target=\"_blank\">
                                                        {{ listing.getName() }}
                                                    </a>
                                                </div><!-- /.table-card-title -->

                                                {% if listing.getPrice() %}
                                                    <div class=\"table-card-subtitle\">
                                                        {{ 'Price'|trans }}: {{ listing.getPrice()|localizedcurrency(currency) }}
                                                    </div><!-- /.table-card-subtitle -->
                                                {% endif %}
                                            </div><!-- /.table-card-content-inner -->
                                        </div><!-- /.table-card-content -->
                                    </div><!-- /.table-card -->
                                </td>

                                <td class=\"table-min-width table-center\">
                                    {% if listing.getCategory() %}
                                        <a href=\"{{ path('category_detail', {'slug': listing.getCategory().getSlug()})}}\" target=\"_blank\">
                                            {{ listing.getCategory().getName() }}
                                        </a>
                                    {% else %}
                                        -
                                    {% endif %}
                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    {% if listing.getIsPublished() %}
                                        <i class=\"fa fa-check\"></i>
                                    {% else %}
                                        <i class=\"fa fa-close\"></i>
                                    {% endif %}
                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    {% if listing.getIsFeatured() %}
                                        <i class=\"fa fa-check\"></i>
                                    {% else %}
                                        <i class=\"fa fa-close\"></i>
                                    {% endif %}
                                </td>

                                <td class=\"table-min-width table-center table-status\">
                                    {% if listing.getIsVerified() %}
                                        <i class=\"fa fa-check\"></i>
                                    {% else %}
                                        <i class=\"fa fa-close\"></i>
                                    {% endif %}
                                </td>

                                <td class=\"table-min-width\">
                                    <div class=\"btn-group\">                                        

                                        {% if listing.getIsPublished() %}
                                            <a class=\"btn\" href=\"{{ path('listing_unpublish', {'id': listing.getId()}) }}\">
                                                {{ 'Unpublish'|trans }}
                                            </a>
                                        {% else %}
                                            <a class=\"btn\" href=\"{{ path('listing_publish', {'id': listing.getId()}) }}\">
                                                {{ 'Publish'|trans }}

                                                {% if payments.pay_for_publish.enabled %}
                                                    ({{ payments.pay_for_publish.price|localizedcurrency(currency) }})
                                                {% endif %}
                                            </a>
                                        {% endif %}

                                        {% if listing.getIsFeatured() %}
                                            <a class=\"btn\" href=\"{{ path('listing_unfeature', {'id': listing.getId()}) }}\">
                                                {{ 'Unfeature'|trans }}
                                            </a>
                                        {% else %}
                                            <a class=\"btn\" href=\"{{ path('listing_feature', {'id': listing.getId()}) }}\">
                                                {{ 'Feature'|trans }}
                                                {% if payments.pay_for_featured.enabled %}
                                                    ({{ payments.pay_for_featured.price|localizedcurrency(currency) }})
                                                {% endif %}
                                            </a>
                                        {% endif %}
                                        
                                        <a class=\"btn\" href=\"{{ path('listing_update', {'id': listing.getId()}) }}\">{{ 'Update'|trans }}</a>
                                        <a class=\"btn\" href=\"{{ path('listing_delete', {'id': listing.getId()}) }}\">{{ 'Delete'|trans }}</a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div><!-- /.table-wrapper -->

            <div class=\"navigation\">
                {{ knp_pagination_render(listings) }}
            </div><!-- /.navigation -->                     
        {% else %}
            {{ include('AppBundle::Helper/empty.html.twig') }}
        {% endif %}
    </div><!-- /.container -->
{% endblock %}", "FrontBundle:Listing:my.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/my.html.twig");
    }
}
