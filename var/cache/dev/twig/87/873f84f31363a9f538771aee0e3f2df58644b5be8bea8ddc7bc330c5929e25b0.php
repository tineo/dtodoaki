<?php

/* AdminBundle:User:index.html.twig */
class __TwigTemplate_5a897ad80160e6b0cca0036ec2df2e08c01edd8c2475cc2858d2355ba69976c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle:User:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:User:index.html.twig"));

        // line 3
        $context["active"] = "users";
        // line 5
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users");
        // line 7
        $context["actions"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_create"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create")]];
        // line 14
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard")], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users")]];
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
        if (twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 42
                echo "                        <tr>
                            <td>
                                ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getDisplayName", [], "method"), "html", null, true);
                echo "
                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_update", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 50
                echo "Update";
                echo "
                                    </a>

                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">
                                        ";
                // line 54
                echo "Delete";
                echo "
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 64
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 64, $this->source); })()));
            echo "
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 68
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
        return "AdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 68,  147 => 64,  141 => 60,  129 => 54,  125 => 53,  119 => 50,  115 => 49,  107 => 44,  103 => 42,  99 => 41,  90 => 35,  84 => 31,  81 => 30,  72 => 29,  54 => 27,  44 => 1,  42 => 14,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set active = 'users' %}

{% set title = 'Users'|trans %}

{% set actions = [
    {
        'link': path('admin_user_create'),
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
        'title': 'Users'|trans
    }
] %}


{% block title %}{{ title }}{% endblock %}

{% block content %}
    {% if users|length %}
        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>{{ 'Title'|trans }}</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    {% for user in users %}
                        <tr>
                            <td>
                                {{ user.getDisplayName() }}
                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('admin_user_update', {'id': user.getId()}) }}\" class=\"btn\">
                                        {{ 'Update' }}
                                    </a>

                                    <a href=\"{{ path('admin_user_delete', {'id': user.getId()}) }}\" class=\"btn\">
                                        {{ 'Delete' }}
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(users) }}
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    {% else %}
        {{ include('AppBundle::Helper/empty.html.twig') }}
    {% endif %}
{% endblock %}", "AdminBundle:User:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/User/index.html.twig");
    }
}
