<?php

/* AppBundle:Helper:pagination.html.twig */
class __TwigTemplate_ec57bf03b706de579c818364d88aa4da7fb5f2766a0cfe07d33daa20341768b5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Helper:pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Helper:pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination\">

            ";
            // line 5
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 6
                echo "                <li class=\"page-item\">
                    <a rel=\"prev\" class=\"page-link\" href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 7, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 7, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 7, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 7, $this->source); })())])), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 10
                echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"><span><i class=\"fa fa-chevron-left\"></i>&nbsp;";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous"), "html", null, true);
                echo "</span></a>
                </li>
            ";
            }
            // line 14
            echo "
            ";
            // line 15
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new Twig_Error_Runtime('Variable "startPage" does not exist.', 15, $this->source); })()) > 1)) {
                // line 16
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 17, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 17, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 17, $this->source); })()) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 19
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new Twig_Error_Runtime('Variable "startPage" does not exist.', 19, $this->source); })()) == 3)) {
                    // line 20
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 21, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 21, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 21, $this->source); })()) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 23
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new Twig_Error_Runtime('Variable "startPage" does not exist.', 23, $this->source); })()) != 2)) {
                    // line 24
                    echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"><span>&hellip;</span></a>
                    </li>
                ";
                }
                // line 28
                echo "            ";
            }
            // line 29
            echo "
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 31, $this->source); })()))) {
                    // line 32
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 33, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 33, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 33, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 36
                    echo "                    <li class=\"page-item active\">
                        <a class=\"page-link\"><span>";
                    // line 37
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></a>
                    </li>
                ";
                }
                // line 40
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
            ";
            // line 43
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 43, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new Twig_Error_Runtime('Variable "endPage" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "                ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 44, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new Twig_Error_Runtime('Variable "endPage" does not exist.', 44, $this->source); })()) + 1))) {
                    // line 45
                    echo "                    ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 45, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new Twig_Error_Runtime('Variable "endPage" does not exist.', 45, $this->source); })()) + 2))) {
                        // line 46
                        echo "                        <li class=\"page-item disabled\">
                            <a class=\"page-link\"><span>&hellip;</span></a>
                        </li>
                    ";
                    } else {
                        // line 50
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 51, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 51, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 51, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 51, $this->source); })()) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 51, $this->source); })()) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "                <li>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 56, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 56, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 56, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 56, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 61
                echo "                <li class=\"page-item\">
                    <a rel=\"next\" class=\"page-link\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 62, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 62, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 62, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 62, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
                echo "&nbsp;<i class=\"fa fa-chevron-right\"></i></a>
                </li>
            ";
            } else {
                // line 65
                echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\"><span>";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
                echo "&nbsp;<i class=\"fa fa-chevron-right\"></i></span></a>
                </li>
            ";
            }
            // line 69
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Helper:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 69,  190 => 66,  187 => 65,  179 => 62,  176 => 61,  174 => 60,  171 => 59,  163 => 56,  160 => 55,  157 => 54,  149 => 51,  146 => 50,  140 => 46,  137 => 45,  134 => 44,  132 => 43,  129 => 42,  122 => 40,  116 => 37,  113 => 36,  105 => 33,  102 => 32,  99 => 31,  95 => 30,  92 => 29,  89 => 28,  83 => 24,  81 => 23,  76 => 21,  73 => 20,  71 => 19,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  52 => 11,  49 => 10,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pageCount > 1 %}
    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination\">

            {% if previous is defined %}
                <li class=\"page-item\">
                    <a rel=\"prev\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\"><i class=\"fa fa-chevron-left\"></i>&nbsp;{{ 'Previous'|trans }}</a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\"><span><i class=\"fa fa-chevron-left\"></i>&nbsp;{{ 'Previous'|trans }}</span></a>
                </li>
            {% endif %}

            {% if startPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
                </li>
                {% if startPage == 3 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                    </li>
                {% elseif startPage != 2 %}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\"><span>&hellip;</span></a>
                    </li>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"page-item active\">
                        <a class=\"page-link\"><span>{{ page }}</span></a>
                    </li>
                {% endif %}

            {% endfor %}

            {% if pageCount > endPage %}
                {% if pageCount > (endPage + 1) %}
                    {% if pageCount > (endPage + 2) %}
                        <li class=\"page-item disabled\">
                            <a class=\"page-link\"><span>&hellip;</span></a>
                        </li>
                    {% else %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
                        </li>
                    {% endif %}
                {% endif %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
                </li>
            {% endif %}

            {% if next is defined %}
                <li class=\"page-item\">
                    <a rel=\"next\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'Next'|trans }}&nbsp;<i class=\"fa fa-chevron-right\"></i></a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\"><span>{{ 'Next'|trans }}&nbsp;<i class=\"fa fa-chevron-right\"></i></span></a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}", "AppBundle:Helper:pagination.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AppBundle/Resources/views/Helper/pagination.html.twig");
    }
}
