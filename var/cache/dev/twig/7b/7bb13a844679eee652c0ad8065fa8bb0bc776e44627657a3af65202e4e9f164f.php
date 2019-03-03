<?php

/* AdminBundle:Listing:index.html.twig */
class __TwigTemplate_a5d1bf16fef7daec781b1bdf2acc9d332eab55ec457472bdeae4277439f01465 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle:Listing:index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Listing:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Listing:index.html.twig"));

        // line 3
        $context["active"] = "listings";
        // line 5
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings");
        // line 7
        $context["actions"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_listing_create"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create")]];
        // line 14
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard")], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings")]];
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 27, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
            echo "</th>
                        <th class=\"table-center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
            echo "</th>
                        <th class=\"table-center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
            echo "</th>
                        <th class=\"table-center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured"), "html", null, true);
            echo "</th>
                        <th class=\"table-center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Verified"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 46
                echo "                        <tr>
                            <td>
                                <div class=\"table-card\">
                                    <div class=\"table-card-image\"
                                        ";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getFeaturedImage", [], "method")) {
                    // line 51
                    echo "                                            style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["listing"], "getFeaturedImage", [], "method"), "image"), "html", null, true);
                    echo "');\"
                                        ";
                }
                // line 52
                echo ">
                                    </div><!-- /.table-card-image -->

                                    <div class=\"table-card-content\">
                                        <div class=\"table-card-content-inner\">
                                            <div class=\"table-card-title\">
                                                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["listing"], "getSlug", [], "method")]), "html", null, true);
                echo "\" target=\"_blank\">
                                                    ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getName", [], "method"), "html", null, true);
                echo "
                                                </a>
                                            </div><!-- /.table-card-title -->

                                            ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getPrice", [], "method")) {
                    // line 64
                    echo "                                                <div class=\"table-card-subtitle\">
                                                    ";
                    // line 65
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, $context["listing"], "getPrice", [], "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 65, $this->source); })())), "html", null, true);
                    echo "
                                                </div><!-- /.table-card-subtitle -->
                                            ";
                }
                // line 68
                echo "                                        </div><!-- /.table-card-content-inner -->
                                    </div><!-- /.table-card-content -->
                                </div><!-- /.table-card -->
                            </td>

                            <td class=\"table-min-width table-center\">
                                ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getCategory", [], "method")) {
                    // line 75
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listing"], "getCategory", [], "method"), "getSlug", [], "method")]), "html", null, true);
                    echo "\" target=\"_blank\">
                                        ";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listing"], "getCategory", [], "method"), "getName", [], "method"), "html", null, true);
                    echo "
                                    </a>
                                ";
                } else {
                    // line 79
                    echo "                                    -
                                ";
                }
                // line 81
                echo "                            </td>

                            <td class=\"table-min-width table-center table-status\">
                                ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsPublished", [], "method")) {
                    // line 85
                    echo "                                    <i class=\"fa fa-check\"></i>
                                ";
                } else {
                    // line 87
                    echo "                                    <i class=\"fa fa-close\"></i>
                                ";
                }
                // line 89
                echo "                            </td>

                            <td class=\"table-min-width table-center table-status\">
                                ";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsFeatured", [], "method")) {
                    // line 93
                    echo "                                    <i class=\"fa fa-check\"></i>
                                ";
                } else {
                    // line 95
                    echo "                                    <i class=\"fa fa-close\"></i>
                                ";
                }
                // line 97
                echo "                            </td>

                            <td class=\"table-min-width table-center table-status\">
                                ";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsVerified", [], "method")) {
                    // line 101
                    echo "                                    <i class=\"fa fa-check\"></i>
                                ";
                } else {
                    // line 103
                    echo "                                    <i class=\"fa fa-close\"></i>
                                ";
                }
                // line 105
                echo "                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_listing_update", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 110
                echo "Update";
                echo "
                                    </a>

                                    <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_listing_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 114
                echo "Delete";
                echo "
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 124
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 124, $this->source); })()));
            echo "
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 128
            echo "        ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Listing:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 128,  273 => 124,  267 => 120,  255 => 114,  251 => 113,  245 => 110,  241 => 109,  235 => 105,  231 => 103,  227 => 101,  225 => 100,  220 => 97,  216 => 95,  212 => 93,  210 => 92,  205 => 89,  201 => 87,  197 => 85,  195 => 84,  190 => 81,  186 => 79,  180 => 76,  175 => 75,  173 => 74,  165 => 68,  157 => 65,  154 => 64,  152 => 63,  145 => 59,  141 => 58,  133 => 52,  127 => 51,  125 => 50,  119 => 46,  115 => 45,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  84 => 31,  81 => 30,  72 => 29,  54 => 27,  44 => 1,  42 => 14,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set active = 'listings' %}

{% set title = 'Listings'|trans %}

{% set actions = [
    {
        'link': path('admin_listing_create'),
        'title': 'Create'|trans,
    }
] %}

{% set breadcrumbs = [
    {
        'link': path('homepage'), 'title': 'Home'|trans,
    },
    {
        'link': path('admin_dashboard'), 'title': 'Dashboard'|trans,
    },
    {
        'title': 'Listings'|trans
    }
] %}


{% block title %}{{ title }}{% endblock %}

{% block content %}
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
                                    <a href=\"{{ path('admin_listing_update', {'id': listing.getId()}) }}\" class=\"btn\">
                                        {{ 'Update' }}
                                    </a>

                                    <a href=\"{{ path('admin_listing_delete', {'id': listing.getId()}) }}\" class=\"btn\">
                                        {{ 'Delete' }}
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(listings) }}
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    {% else %}
        {{ include('AppBundle::Helper/empty.html.twig') }}
    {% endif %}
{% endblock %}", "AdminBundle:Listing:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Listing/index.html.twig");
    }
}
