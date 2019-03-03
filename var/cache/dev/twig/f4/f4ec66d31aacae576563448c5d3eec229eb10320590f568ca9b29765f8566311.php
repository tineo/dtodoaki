<?php

/* AdminBundle:Review:index.html.twig */
class __TwigTemplate_905cd243071cdcaaf03fdfd9c77ac87d18e25ff1f34a45d59764b4dfa39b87e8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle:Review:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Review:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Review:index.html.twig"));

        // line 3
        $context["active"] = "reviews";
        // line 5
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews");
        // line 7
        $context["actions"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_create"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create")]];
        // line 14
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard")], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews")]];
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
        if (twig_length_filter($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
            echo "</th>
                    <th class=\"table-min-width\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Author"), "html", null, true);
            echo "</th>
                    <th class=\"table-min-width\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
            echo "</th>
                    <th class=\"table-center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
            echo "</th>
                    <th class=\"table-min-width\"></th>
                </tr>
                </thead>

                <tbody>
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 45
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "getListing", [], "method"), "getSlug", [], "method")]), "html", null, true);
                echo "\" target=\"_blank\">
                                ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "getTitle", [], "method"), "html", null, true);
                echo "
                            </a>
                        </td>


                        <td class=\"table-min-width\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "getAuthor", [], "method"), "html", null, true);
                echo "</td>

                        <td class=\"table-min-width\">";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "getCreated", [], "method")), "html", null, true);
                echo "</td>

                        <td class=\"table-min-width table-center table-status\">
                            ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["review"], "getIsPublished", [], "method")) {
                    // line 59
                    echo "                                <i class=\"fa fa-check\"></i>
                            ";
                } else {
                    // line 61
                    echo "                                <i class=\"fa fa-close\"></i>
                            ";
                }
                // line 63
                echo "                        </td>

                        <td class=\"table-min-width\">
                            <div class=\"btn-group\">
                                ";
                // line 67
                if ( !twig_get_attribute($this->env, $this->source, $context["review"], "getIsPublished", [], "method")) {
                    // line 68
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_publish", ["id" => twig_get_attribute($this->env, $this->source, $context["review"], "getId", [], "method")]), "html", null, true);
                    echo "\" class=\"btn\">
                                        ";
                    // line 69
                    echo "Publish";
                    echo "
                                    </a>
                                ";
                }
                // line 72
                echo "
                                <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_update", ["id" => twig_get_attribute($this->env, $this->source, $context["review"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                    ";
                // line 74
                echo "Update";
                echo "
                                </a>

                                <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["review"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                    ";
                // line 78
                echo "Delete";
                echo "
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 88
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 88, $this->source); })()));
            echo "
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 92
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
        return "AdminBundle:Review:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 92,  206 => 88,  200 => 84,  188 => 78,  184 => 77,  178 => 74,  174 => 73,  171 => 72,  165 => 69,  160 => 68,  158 => 67,  152 => 63,  148 => 61,  144 => 59,  142 => 58,  136 => 55,  131 => 53,  123 => 48,  119 => 47,  115 => 45,  111 => 44,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  84 => 31,  81 => 30,  72 => 29,  54 => 27,  44 => 1,  42 => 14,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set active = 'reviews' %}

{% set title = 'Reviews'|trans %}

{% set actions = [
    {
        'link': path('admin_review_create'),
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
        'title': 'Reviews'|trans
    }
] %}


{% block title %}{{ title }}{% endblock %}

{% block content %}
    {% if reviews|length %}
        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>{{ 'Title'|trans }}</th>
                    <th class=\"table-min-width\">{{ 'Author'|trans }}</th>
                    <th class=\"table-min-width\">{{ 'Date'|trans }}</th>
                    <th class=\"table-center\">{{ 'Published'|trans }}</th>
                    <th class=\"table-min-width\"></th>
                </tr>
                </thead>

                <tbody>
                {% for review in reviews %}
                    <tr>
                        <td>
                            <a href=\"{{ path('listing_detail', {'slug': review.getListing().getSlug()}) }}\" target=\"_blank\">
                                {{ review.getTitle() }}
                            </a>
                        </td>


                        <td class=\"table-min-width\">{{ review.getAuthor() }}</td>

                        <td class=\"table-min-width\">{{ review.getCreated()|date }}</td>

                        <td class=\"table-min-width table-center table-status\">
                            {% if review.getIsPublished() %}
                                <i class=\"fa fa-check\"></i>
                            {% else %}
                                <i class=\"fa fa-close\"></i>
                            {% endif %}
                        </td>

                        <td class=\"table-min-width\">
                            <div class=\"btn-group\">
                                {% if not review.getIsPublished() %}
                                    <a href=\"{{ path('admin_review_publish', {'id': review.getId()}) }}\" class=\"btn\">
                                        {{ 'Publish' }}
                                    </a>
                                {% endif %}

                                <a href=\"{{ path('admin_review_update', {'id': review.getId()}) }}\" class=\"btn\">
                                    {{ 'Update' }}
                                </a>

                                <a href=\"{{ path('admin_review_delete', {'id': review.getId()}) }}\" class=\"btn\">
                                    {{ 'Delete' }}
                                </a>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(reviews) }}
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    {% else %}
        {{ include('AppBundle::Helper/empty.html.twig') }}
    {% endif %}
{% endblock %}", "AdminBundle:Review:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Review/index.html.twig");
    }
}
