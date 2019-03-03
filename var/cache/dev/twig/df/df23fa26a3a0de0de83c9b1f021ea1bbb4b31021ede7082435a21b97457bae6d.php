<?php

/* AdminBundle:Claim:index.html.twig */
class __TwigTemplate_7f42988cbed76dcb6811269096121bf9d2a1328ba45fa616c49f577512e9ccaa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle:Claim:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Claim:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Claim:index.html.twig"));

        // line 3
        $context["active"] = "claims";
        // line 5
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Claims");
        // line 7
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard")], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Claims")]];
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
        if (twig_length_filter($this->env, (isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new Twig_Error_Runtime('Variable "claims" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th class=\"table-min-width\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listing"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User"), "html", null, true);
            echo "</th>
                        <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width table-center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Approved"), "html", null, true);
            echo "</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new Twig_Error_Runtime('Variable "claims" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
                // line 37
                echo "                        <tr>
                            <td class=\"table-min-width\">
                                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "listing", []), "getSlug", [], "method")]), "html", null, true);
                echo "\" target=\"_blank\">
                                    ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "listing", []), "getName", [], "method"), "html", null, true);
                echo "
                                </a>
                            </td>

                            <td class=\"table-min-width\">                                
                                ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["claim"], "getUser", [], "method"), "getDisplayName", [], "method"), "html", null, true);
                echo "
                            </td>                            

                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["claim"], "getMessage", [], "method"), "html", null, true);
                echo "</td>

                            <td class=\"table-min-width table-center table-status\">
                                ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["claim"], "getIsApproved", [], "method")) {
                    // line 52
                    echo "                                    <i class=\"fa fa-check\"></i>
                                ";
                } else {
                    // line 54
                    echo "                                    <i class=\"fa fa-close\"></i>
                                ";
                }
                // line 56
                echo "                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    ";
                // line 60
                if ( !twig_get_attribute($this->env, $this->source, $context["claim"], "getIsApproved", [], "method")) {
                    // line 61
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_claim_approve", ["id" => twig_get_attribute($this->env, $this->source, $context["claim"], "getId", [], "method")]), "html", null, true);
                    echo "\" class=\"btn\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Approve"), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 63
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nothing to do"), "html", null, true);
                    echo "
                                    ";
                }
                // line 65
                echo "                                </div><!-- /.btn-group -->
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['claim'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                </tbody>
            </table>

            <div class=\"navigation\">
                ";
            // line 73
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new Twig_Error_Runtime('Variable "claims" does not exist.', 73, $this->source); })()));
            echo "
            </div>
        </div><!-- /.table-wrapper -->
    ";
        } else {
            // line 77
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
        return "AdminBundle:Claim:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 77,  188 => 73,  182 => 69,  173 => 65,  167 => 63,  159 => 61,  157 => 60,  151 => 56,  147 => 54,  143 => 52,  141 => 51,  135 => 48,  129 => 45,  121 => 40,  117 => 39,  113 => 37,  109 => 36,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  82 => 23,  79 => 22,  70 => 21,  52 => 19,  42 => 1,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set active = 'claims' %}

{% set title = 'Claims'|trans %}

{% set breadcrumbs = [
\t{
\t\t'link': path('homepage'), 'title': 'Home'|trans,
\t},
\t{
\t\t'link': path('admin_dashboard'), 'title': 'Dashboard'|trans,
\t},
\t{
\t\t'title': 'Claims'|trans
\t}
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    {% if claims|length %}
        <div class=\"table-wrapper\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th class=\"table-min-width\">{{ 'Listing'|trans }}</th>
                        <th class=\"table-min-width\">{{ 'User'|trans }}</th>
                        <th>{{ 'Message'|trans }}</th>
                        <th class=\"table-min-width table-center\">{{ 'Approved'|trans }}</th>
                        <th class=\"table-min-width\"></th>
                    </tr>
                </thead>

                <tbody>
                    {% for claim in claims %}
                        <tr>
                            <td class=\"table-min-width\">
                                <a href=\"{{ path('listing_detail', {'slug': claim.listing.getSlug()}) }}\" target=\"_blank\">
                                    {{ claim.listing.getName() }}
                                </a>
                            </td>

                            <td class=\"table-min-width\">                                
                                {{ claim.getUser().getDisplayName() }}
                            </td>                            

                            <td>{{ claim.getMessage() }}</td>

                            <td class=\"table-min-width table-center table-status\">
                                {% if claim.getIsApproved() %}
                                    <i class=\"fa fa-check\"></i>
                                {% else %}
                                    <i class=\"fa fa-close\"></i>
                                {% endif %}
                            </td>

                            <td class=\"table-min-width\">
                                <div class=\"btn-group\">
                                    {% if not claim.getIsApproved() %}
                                        <a href=\"{{ path('admin_claim_approve', {'id': claim.getId() })}}\" class=\"btn\">{{ 'Approve'|trans }}</a>
                                    {% else %}
                                        {{ 'Nothing to do'|trans }}
                                    {% endif %}
                                </div><!-- /.btn-group -->
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <div class=\"navigation\">
                {{ knp_pagination_render(claims) }}
            </div>
        </div><!-- /.table-wrapper -->
    {% else %}
        {{ include('AppBundle::Helper/empty.html.twig') }}
    {% endif %}
{% endblock %}", "AdminBundle:Claim:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Claim/index.html.twig");
    }
}
