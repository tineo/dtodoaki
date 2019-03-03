<?php

/* AdminBundle:Post:index.html.twig */
class __TwigTemplate_7f920c221d73755f5a77e9778dfd3db74c15455b4a834b25668c2d396866c5bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle:Post:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Post:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Post:index.html.twig"));

        // line 3
        $context["active"] = "posts";
        // line 5
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Posts");
        // line 7
        $context["actions"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_create"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create")]];
        // line 14
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard")], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Posts")]];
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
        if (twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 30, $this->source); })()))) {
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
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 44
                echo "                        <tr>
                            <td>
                                <div class=\"table-card\">
                                    ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getImage", [], "method"), "html", null, true);
                echo "
                                    <div class=\"table-card-image\"
                                            ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, $context["post"], "getImageName", [], "method")) {
                    // line 50
                    echo "                                        style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "image"), "html", null, true);
                    echo "');\"
                                            ";
                }
                // line 51
                echo ">
                                    </div><!-- /.table-card-image -->

                                    <div class=\"table-card-content\">
                                        <div class=\"table-card-content-inner\">
                                            <div class=\"table-card-title\">
                                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "getSlug", [], "method")]), "html", null, true);
                echo "\" target=\"_blank\">
                                                    ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getName", [], "method"), "html", null, true);
                echo "
                                                </a>
                                            </div><!-- /.table-card-title -->
                                        </div><!-- /.table-card-content-inner -->
                                    </div><!-- /.table-card-content -->
                                </div><!-- /.table-card -->
                            </td>

                            <td class=\"table-min-width table-center\">
                                ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["post"], "getCategory", [], "method")) {
                    // line 68
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getCategory", [], "method"), "getSlug", [], "method")]), "html", null, true);
                    echo "\" target=\"_blank\">
                                        ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCategory", [], "method"), "html", null, true);
                    echo "
                                    </a>
                                ";
                } else {
                    // line 72
                    echo "                                    -
                                ";
                }
                // line 74
                echo "                            </td>

                            <td class=\"table-min-width table-center table-status\">
                                ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["post"], "getIsPublished", [], "method")) {
                    // line 78
                    echo "                                    <i class=\"fa fa-check\"></i>
                                ";
                } else {
                    // line 80
                    echo "                                    <i class=\"fa fa-close\"></i>
                                ";
                }
                // line 82
                echo "                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_update", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 87
                echo "Update";
                echo "
                                    </a>

                                    <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 91
                echo "Delete";
                echo "
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 101
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 101, $this->source); })()));
            echo "
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 105
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
        return "AdminBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 105,  223 => 101,  217 => 97,  205 => 91,  201 => 90,  195 => 87,  191 => 86,  185 => 82,  181 => 80,  177 => 78,  175 => 77,  170 => 74,  166 => 72,  160 => 69,  155 => 68,  153 => 67,  141 => 58,  137 => 57,  129 => 51,  123 => 50,  121 => 49,  116 => 47,  111 => 44,  107 => 43,  98 => 37,  94 => 36,  90 => 35,  84 => 31,  81 => 30,  72 => 29,  54 => 27,  44 => 1,  42 => 14,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set active = 'posts' %}

{% set title = 'Posts'|trans %}

{% set actions = [
    {
        'link': path('admin_post_create'),
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
        'title': 'Posts'|trans
    }
] %}


{% block title %}{{ title }}{% endblock %}

{% block content %}
    {% if posts|length %}
        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>{{ 'Title'|trans }}</th>
                        <th class=\"table-center\">{{ 'Category'|trans }}</th>
                        <th class=\"table-center\">{{ 'Published'|trans }}</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    {% for post in posts %}
                        <tr>
                            <td>
                                <div class=\"table-card\">
                                    {{ post.getImage() }}
                                    <div class=\"table-card-image\"
                                            {% if post.getImageName() %}
                                        style=\"background-image: url('{{ vich_uploader_asset(post, 'image') }}');\"
                                            {% endif %}>
                                    </div><!-- /.table-card-image -->

                                    <div class=\"table-card-content\">
                                        <div class=\"table-card-content-inner\">
                                            <div class=\"table-card-title\">
                                                <a href=\"{{ path('post_detail', {'slug': post.getSlug()}) }}\" target=\"_blank\">
                                                    {{ post.getName() }}
                                                </a>
                                            </div><!-- /.table-card-title -->
                                        </div><!-- /.table-card-content-inner -->
                                    </div><!-- /.table-card-content -->
                                </div><!-- /.table-card -->
                            </td>

                            <td class=\"table-min-width table-center\">
                                {% if post.getCategory() %}
                                    <a href=\"{{ path('category_detail', {'slug': post.getCategory().getSlug()}) }}\" target=\"_blank\">
                                        {{ post.getCategory() }}
                                    </a>
                                {% else %}
                                    -
                                {% endif %}
                            </td>

                            <td class=\"table-min-width table-center table-status\">
                                {% if post.getIsPublished() %}
                                    <i class=\"fa fa-check\"></i>
                                {% else %}
                                    <i class=\"fa fa-close\"></i>
                                {% endif %}
                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('admin_post_update', {'id': post.getId()}) }}\" class=\"btn\">
                                        {{ 'Update' }}
                                    </a>

                                    <a href=\"{{ path('admin_post_delete', {'id': post.getId()}) }}\" class=\"btn\">
                                        {{ 'Delete' }}
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(posts) }}
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    {% else %}
        {{ include('AppBundle::Helper/empty.html.twig') }}
    {% endif %}
{% endblock %}", "AdminBundle:Post:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Post/index.html.twig");
    }
}
