<?php

/* FrontBundle:Order:index.html.twig */
class __TwigTemplate_9cae91fd90da5cd10029115b8f49f403d72d09f315ed6083b32ff9c0bcb0bcc3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Order:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Order:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Order:index.html.twig"));

        // line 3
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders");
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
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle:Order:index.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "            <div class=\"table-wrapper\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
            echo "</th>
                            <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
            echo "</th>
                            <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                            <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</th>
                            <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
            echo "</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 27
                echo "                            <tr>
                                <td>#";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method"), "html", null, true);
                echo "</td>

                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, $context["order"], "getPrice", [], "method"), twig_get_attribute($this->env, $this->source, $context["order"], "getCurrency", [])), "html", null, true);
                echo "</td>

                                <td>
                                    ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getName", [], "method"), "html", null, true);
                echo "
                                </td>

                                <td>
                                    ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "getStatus", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_COMPLETED"))) {
                    // line 38
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Completed"), "html", null, true);
                    echo "
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 39
$context["order"], "getStatus", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_CANCELED"))) {
                    // line 40
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Canceled"), "html", null, true);
                    echo "
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 41
$context["order"], "getStatus", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_NEW"))) {
                    // line 42
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
                    echo "
                                    ";
                }
                // line 44
                echo "                                </td>

                                <td>
                                    ";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getCreated", [], "method"), "F jS \\a\\t g:ia"), "html", null, true);
                echo "
                                </td>

                                <td>
                                    ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "getStatus", []) == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_COMPLETED"))) {
                    // line 52
                    echo "                                        <div class=\"btn-group\">
                                            <a class=\"btn\" href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method")]), "html", null, true);
                    echo "\">
                                                ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View Invoice"), "html", null, true);
                    echo "
                                            </a>
                                        </div>
                                    ";
                } else {
                    // line 58
                    echo "                                        <div>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No actions available"), "html", null, true);
                    echo "</div>
                                    ";
                }
                // line 60
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    </tbody>
                </table><!-- /.table -->
            </div><!-- /.table-wrapper -->
            <div class=\"navigation text-center\">
                ";
            // line 67
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 67, $this->source); })()));
            echo "
            </div>
        ";
        } else {
            // line 70
            echo "            ";
            echo twig_include($this->env, $context, "AppBundle::Helper/empty.html.twig");
            echo "
        ";
        }
        // line 72
        echo "    </div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Order:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 72,  217 => 70,  211 => 67,  205 => 63,  197 => 60,  191 => 58,  184 => 54,  180 => 53,  177 => 52,  175 => 51,  168 => 47,  163 => 44,  157 => 42,  155 => 41,  150 => 40,  148 => 39,  143 => 38,  141 => 37,  134 => 33,  128 => 30,  123 => 28,  120 => 27,  116 => 26,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  85 => 12,  83 => 11,  80 => 10,  78 => 9,  75 => 8,  66 => 7,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set title = 'Orders'|trans %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <div class=\"container\">
        {% include 'FrontBundle::Helper/content_title.html.twig' %}

        {% if orders|length %}
            <div class=\"table-wrapper\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>{{ 'ID'|trans }}</th>
                            <th>{{ 'Total'|trans }}</th>
                            <th>{{ 'Name'|trans }}</th>
                            <th>{{ 'Status'|trans }}</th>
                            <th>{{ 'Created'|trans }}</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for order in orders %}
                            <tr>
                                <td>#{{ order.getId() }}</td>

                                <td>{{ order.getPrice()|localizedcurrency(order.getCurrency) }}</td>

                                <td>
                                    {{ order.getName() }}
                                </td>

                                <td>
                                    {% if order.getStatus() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_COMPLETED') %}
                                        {{ 'Completed'|trans }}
                                    {% elseif order.getStatus() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_CANCELED') %}
                                        {{ 'Canceled'|trans }}
                                    {% elseif order.getStatus() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_NEW') %}
                                        {{ 'New'|trans }}
                                    {% endif %}
                                </td>

                                <td>
                                    {{ order.getCreated()|date(\"F jS \\\\a\\\\t g:ia\") }}
                                </td>

                                <td>
                                    {% if order.getStatus == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_COMPLETED') %}
                                        <div class=\"btn-group\">
                                            <a class=\"btn\" href=\"{{ path('invoice', {'id': order.getId()}) }}\">
                                                {{ 'View Invoice'|trans }}
                                            </a>
                                        </div>
                                    {% else %}
                                        <div>{{ 'No actions available'|trans }}</div>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table><!-- /.table -->
            </div><!-- /.table-wrapper -->
            <div class=\"navigation text-center\">
                {{ knp_pagination_render(orders) }}
            </div>
        {% else %}
            {{ include('AppBundle::Helper/empty.html.twig') }}
        {% endif %}
    </div><!-- /.container -->
{% endblock %}", "FrontBundle:Order:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Order/index.html.twig");
    }
}
