<?php

/* AdminBundle:Order:index.html.twig */
class __TwigTemplate_31d6ada78daef6e62fd94b1d093cc1573fa64d6788b5fe5ee134dd9a9513b391 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle:Order:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Order:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Order:index.html.twig"));

        // line 3
        $context["active"] = "orders";
        // line 5
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders");
        // line 7
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard")], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders")]];
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 19, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th class=\"table-min-width table-center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
            echo "</th>                        
                        <th class=\"table-min-width\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
            echo "</th>                        
                        <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            echo "</th>   
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 36
                echo "                        <tr>
                            <td class=\"table-min-width table-center\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method"), "html", null, true);
                echo "</td>
                            <td class=\"table-min-width\">";
                // line 38
                echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, $context["order"], "getPrice", [], "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 38, $this->source); })())), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 40
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "getStatus", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_NEW"))) {
                    // line 41
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
                    echo "
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 42
$context["order"], "getStatus", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_COMPLETED"))) {
                    // line 43
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Completed"), "html", null, true);
                    echo "
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 44
$context["order"], "getStatus", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_CANCELED"))) {
                    // line 45
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancelled"), "html", null, true);
                    echo "                                    
                                ";
                }
                // line 47
                echo "                            </td>
                            <td class=\"table-min-width\">
                                ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "getStatus", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Order::STATUS_NEW"))) {
                    // line 50
                    echo "                                    <div class=\"btn-group\">
                                        <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_complete", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method")]), "html", null, true);
                    echo "\" class=\"btn\">
                                            ";
                    // line 52
                    echo "Complete";
                    echo "
                                        </a>

                                        <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_cancel", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method")]), "html", null, true);
                    echo "\" class=\"btn\">
                                            ";
                    // line 56
                    echo "Cancel";
                    echo "
                                        </a>
                                    </div><!-- /.btn-group -->
                                ";
                } else {
                    // line 60
                    echo "                                    <div class=\"btn-group\">
                                        ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nothing to do"), "html", null, true);
                    echo "
                                    </div><!-- /.btn-group -->
                                ";
                }
                // line 64
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 71
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 71, $this->source); })()));
            echo "
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 75
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
        return "AdminBundle:Order:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 75,  196 => 71,  190 => 67,  182 => 64,  176 => 61,  173 => 60,  166 => 56,  162 => 55,  156 => 52,  152 => 51,  149 => 50,  147 => 49,  143 => 47,  137 => 45,  135 => 44,  130 => 43,  128 => 42,  123 => 41,  121 => 40,  116 => 38,  112 => 37,  109 => 36,  105 => 35,  96 => 29,  92 => 28,  88 => 27,  82 => 23,  79 => 22,  70 => 21,  52 => 19,  42 => 1,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set active = 'orders' %}

{% set title = 'Orders'|trans %}

{% set breadcrumbs = [
\t{
\t\t'link': path('homepage'), 'title': 'Home'|trans,
\t},
\t{
\t\t'link': path('admin_dashboard'), 'title': 'Dashboard'|trans,
\t},
\t{
\t\t'title': 'Orders'|trans
\t}
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    {% if orders|length %}
        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th class=\"table-min-width table-center\">{{ 'ID'|trans }}</th>                        
                        <th class=\"table-min-width\">{{ 'Price'|trans }}</th>                        
                        <th>{{ 'Type'|trans }}</th>   
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    {% for order in orders %}
                        <tr>
                            <td class=\"table-min-width table-center\">{{ order.getId() }}</td>
                            <td class=\"table-min-width\">{{ order.getPrice()|localizedcurrency(currency) }}</td>
                            <td>
                                {% if order.getStatus() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_NEW') %}
                                    {{ 'New'|trans }}
                                {% elseif order.getStatus() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_COMPLETED') %}
                                    {{ 'Completed'|trans }}
                                {% elseif order.getStatus() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_CANCELED') %}
                                    {{ 'Cancelled'|trans }}                                    
                                {% endif %}
                            </td>
                            <td class=\"table-min-width\">
                                {% if order.getStatus() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Order::STATUS_NEW') %}
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('admin_order_complete', {'id': order.getId()}) }}\" class=\"btn\">
                                            {{ 'Complete'}}
                                        </a>

                                        <a href=\"{{ path('admin_order_cancel', {'id': order.getId()}) }}\" class=\"btn\">
                                            {{ 'Cancel'}}
                                        </a>
                                    </div><!-- /.btn-group -->
                                {% else %}
                                    <div class=\"btn-group\">
                                        {{ 'Nothing to do'|trans }}
                                    </div><!-- /.btn-group -->
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(orders) }}
            </div><!-- /.navigation -->
        </div><!-- /.table-wrapper -->
    {% else %}
        {{ include('AppBundle::Helper/empty.html.twig') }}
    {% endif %}
{% endblock %}", "AdminBundle:Order:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Order/index.html.twig");
    }
}
