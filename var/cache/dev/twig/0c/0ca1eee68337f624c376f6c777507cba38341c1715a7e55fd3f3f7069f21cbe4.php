<?php

/* FrontBundle:Search:index.html.twig */
class __TwigTemplate_b85bb1f51a6e0cdfc690196a65c2d8386ef36a157e261a16e41b349d9689a355 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Search:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Search:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Search:index.html.twig"));

        // line 3
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Searches");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container\">
        ";
        // line 9
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle:Search:index.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["searches"]) || array_key_exists("searches", $context) ? $context["searches"] : (function () { throw new Twig_Error_Runtime('Variable "searches" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "            <div class=\"table-wrapper\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Query"), "html", null, true);
            echo "</td>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
            echo "</td>
                            <td></td>
                        </tr>
                    </thead><!-- /.system-head -->

                    <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["searches"]) || array_key_exists("searches", $context) ? $context["searches"] : (function () { throw new Twig_Error_Runtime('Variable "searches" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
                // line 24
                echo "                            <tr>
                                <td>
                                    <a href=\"";
                // line 26
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing");
                echo "?";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "getQuery", [], "method"), "html", null, true);
                echo "\">
                                        ";
                // line 27
                echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["search"], "getQuery", [], "method")), 0, 50) . " ..."), "html", null, true);
                echo "
                                    </a>
                                </td>

                                <td>
                                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "getCreated", [], "method"), "F jS \\a\\t g:ia"), "html", null, true);
                echo "
                                </td>

                                <td>
                                    <div class=\"btn-group\">
                                        <a class=\"btn\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["search"], "getId", [], "method")]), "html", null, true);
                echo "\">
                                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </tbody>
                </table><!-- /.system-table -->
            </div><!-- /.table-wrapper -->
            
            <div class=\"navigation text-center\">
                ";
            // line 49
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["searches"]) || array_key_exists("searches", $context) ? $context["searches"] : (function () { throw new Twig_Error_Runtime('Variable "searches" does not exist.', 49, $this->source); })()));
            echo "
            </div>
        ";
        } else {
            // line 52
            echo "            ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
        ";
        }
        // line 54
        echo "    </div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 54,  163 => 52,  157 => 49,  150 => 44,  138 => 38,  134 => 37,  126 => 32,  118 => 27,  112 => 26,  108 => 24,  104 => 23,  95 => 17,  91 => 16,  85 => 12,  83 => 11,  80 => 10,  78 => 9,  75 => 8,  66 => 7,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set title = 'Saved Searches'|trans %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <div class=\"container\">
        {% include 'FrontBundle::Helper/content_title.html.twig' %}

        {% if searches|length %}
            <div class=\"table-wrapper\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <td>{{ 'Query'|trans }}</td>
                            <td>{{ 'Created'|trans }}</td>
                            <td></td>
                        </tr>
                    </thead><!-- /.system-head -->

                    <tbody>
                        {% for search in searches %}
                            <tr>
                                <td>
                                    <a href=\"{{ path('listing') }}?{{ search.getQuery() }}\">
                                        {{ search.getQuery()|striptags[:50] ~ ' ...' }}
                                    </a>
                                </td>

                                <td>
                                    {{ search.getCreated()|date(\"F jS \\\\a\\\\t g:ia\") }}
                                </td>

                                <td>
                                    <div class=\"btn-group\">
                                        <a class=\"btn\" href=\"{{ path('search_delete', {'id': search.getId()}) }}\">
                                            {{ 'Delete'|trans }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table><!-- /.system-table -->
            </div><!-- /.table-wrapper -->
            
            <div class=\"navigation text-center\">
                {{ knp_pagination_render(searches) }}
            </div>
        {% else %}
            {{ include('AppBundle::Helper/empty.html.twig') }}
        {% endif %}
    </div><!-- /.container -->
{% endblock %}", "FrontBundle:Search:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Search/index.html.twig");
    }
}
