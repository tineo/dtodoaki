<?php

/* FrontBundle:Listing:index.html.twig */
class __TwigTemplate_4b85146eba0a1ea39ccbc9dfd04d1975f3c2b0669137ef193f9cbff7acc023f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base_fullwidth.html.twig", "FrontBundle:Listing:index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base_fullwidth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:index.html.twig"));

        // line 3
        $context["menu_active"] = "listings";
        // line 5
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings & Classifieds");
        // line 7
        $context["actions"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_create", ["entity" => "listing"]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Search Query")]];
        // line 14
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings")]];
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 23, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "\t    
\t<div class=\"content content-map-results\">
\t\t<div class=\"container-fluid\"> 
\t\t\t<div class=\"filter-wrapper\">
\t\t\t\t<div class=\"filter\">
\t\t\t        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
\t\t\t        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 31, $this->source); })()), 'widget');
        echo "
\t\t\t        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
\t\t    \t</div><!-- /.filter -->
\t    \t</div><!-- /.filter-wrapper -->
\t            
\t        ";
        // line 36
        $this->loadTemplate("FrontBundle::Listing/options.html.twig", "FrontBundle:Listing:index.html.twig", 36)->display($context);
        echo " 

\t\t\t";
        // line 38
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 38, $this->source); })()))) {
            echo "\t\t\t\t
\t\t\t\t";
            // line 39
            if (((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 39, $this->source); })()) == "grid")) {
                // line 40
                echo "\t\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t\t";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 41, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t";
                    // line 43
                    $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle:Listing:index.html.twig", 43)->display($context);
                    // line 44
                    echo "\t\t\t\t\t\t\t</div><!-- /.col-* -->\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t";
            } elseif ((            // line 47
(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 47, $this->source); })()) == "row")) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 48, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    $this->loadTemplate("FrontBundle::Listing/row.html.twig", "FrontBundle:Listing:index.html.twig", 49)->display($context);
                    echo "\t\t\t\t\t\t
\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t";
            }
            // line 52
            echo "\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle:Listing:index.html.twig", 53)->display($context);
            // line 54
            echo "\t\t\t";
        }
        // line 55
        echo "\t\t</div><!-- /.container -->
\t</div><!-- /.content -->\t

\t<div class=\"content-map\">
\t\t<div class=\"content-map-inner\">
\t\t\t<div id=\"google-map-markers\" 
\t\t\t\t";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->source); })()), "request", []), "get", [0 => "place_latitude"], "method") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->source); })()), "request", []), "get", [0 => "place_longitude"], "method"))) {
            // line 62
            echo "\t\t\t\t\tdata-latitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->source); })()), "request", []), "get", [0 => "place_latitude"], "method"), "html", null, true);
            echo "\"
\t\t\t\t\tdata-longitude=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->source); })()), "request", []), "get", [0 => "place_longitude"], "method"), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t class=\"google-map-markers\">
\t\t\t\t \t";
        // line 66
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 66, $this->source); })()))) {
            // line 67
            echo "\t\t\t\t \t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 68
                echo "\t\t\t\t \t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["listing"], "getLatitude", [], "method") && twig_get_attribute($this->env, $this->source, $context["listing"], "getLongitude", [], "method"))) {
                    // line 69
                    echo "\t\t\t\t \t\t\t\t";
                    ob_start();
                    echo "<div data-latitude=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getLatitude", [], "method"), "html", null, true);
                    echo "\" 
\t\t\t\t \t\t\t\t\t data-longitude=\"";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getLongitude", [], "method"), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t data-link=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["listing"], "getSlug", [], "method")]), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t data-id=\"";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method"), "html", null, true);
                    echo "\"
\t\t\t\t \t\t\t\t\t ";
                    // line 73
                    if (twig_get_attribute($this->env, $this->source, $context["listing"], "getPrice", [], "method")) {
                        echo "data-price=\"";
                        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, $context["listing"], "getPrice", [], "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 73, $this->source); })())), "html", null, true);
                        echo "\"";
                    }
                    // line 74
                    echo "\t\t\t\t \t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->source, $context["listing"], "getName", [], "method")) {
                        echo "data-name=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getName", [], "method"), "html", null, true);
                        echo "\"";
                    }
                    // line 75
                    echo "\t\t\t\t \t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->source, $context["listing"], "getAddress", [], "method")) {
                        echo "data-address=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getAddress", [], "method"), "html", null, true);
                        echo "\"";
                    }
                    // line 76
                    echo "\t\t\t\t \t\t\t\t     ";
                    if (twig_get_attribute($this->env, $this->source, $context["listing"], "getFeaturedImage", [], "method")) {
                        echo "data-image=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["listing"], "getFeaturedImage", [], "method"), "image"), "html", null, true);
                        echo "\"";
                    }
                    echo "></div>";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 77
                    echo "\t\t\t\t \t\t\t";
                }
                // line 78
                echo "\t\t\t\t \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t \t";
        }
        // line 80
        echo "\t\t\t</div><!-- /.google-map-markers -->
\t\t</div><!-- /.content-map-inner -->

\t\t<div class=\"content-map-actions\">
\t\t\t<div id=\"google-map-action-zoom-in\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t</div><!-- /.content-map-action -->

\t\t\t<div id=\"google-map-action-zoom-out\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t</div><!-- /.content-map-action -->\t\t\t\t
\t\t</div><!-- /.content-map-actions -->\t\t
\t</div><!-- /.content-map -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 80,  297 => 79,  291 => 78,  288 => 77,  279 => 76,  272 => 75,  265 => 74,  259 => 73,  255 => 72,  251 => 71,  247 => 70,  240 => 69,  237 => 68,  232 => 67,  230 => 66,  227 => 65,  222 => 63,  217 => 62,  215 => 61,  207 => 55,  204 => 54,  201 => 53,  198 => 52,  195 => 51,  178 => 49,  161 => 48,  157 => 47,  153 => 45,  138 => 44,  136 => 43,  116 => 41,  113 => 40,  111 => 39,  107 => 38,  102 => 36,  95 => 32,  91 => 31,  87 => 30,  72 => 25,  54 => 23,  44 => 1,  42 => 14,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base_fullwidth.html.twig' %}

{% set menu_active = 'listings' %}

{% set title = 'Listings & Classifieds'|trans %}
\t
{% set actions = [
\t{\t\t
\t\t'link': path('search_create', {'entity': 'listing'}),
\t\t'title': 'Save Search Query'|trans
\t}
] %}

{% set breadcrumbs = [
    {
        'link': path('homepage'), 'title': 'Home'|trans,
    },
    {
        'title': 'Listings'|trans
    }
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}\t    
\t<div class=\"content content-map-results\">
\t\t<div class=\"container-fluid\"> 
\t\t\t<div class=\"filter-wrapper\">
\t\t\t\t<div class=\"filter\">
\t\t\t        {{ form_start(filter) }}
\t\t\t        {{ form_widget(filter) }}
\t\t\t        {{ form_end(filter) }}
\t\t    \t</div><!-- /.filter -->
\t    \t</div><!-- /.filter-wrapper -->
\t            
\t        {% include 'FrontBundle::Listing/options.html.twig' %} 

\t\t\t{% if listings|length %}\t\t\t\t
\t\t\t\t{% if display == 'grid' %}
\t\t\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t\t{% for listing in listings %}\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t{% include 'FrontBundle::Listing/box.html.twig' %}
\t\t\t\t\t\t\t</div><!-- /.col-* -->\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}\t\t\t\t\t
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t{% elseif display == 'row' %}\t\t\t\t\t\t
\t\t\t\t\t{% for listing in listings %}
\t\t\t\t\t\t{% include 'FrontBundle::Listing/row.html.twig' %}\t\t\t\t\t\t
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t{% include 'AppBundle::Helper/empty.html.twig' %}
\t\t\t{% endif %}
\t\t</div><!-- /.container -->
\t</div><!-- /.content -->\t

\t<div class=\"content-map\">
\t\t<div class=\"content-map-inner\">
\t\t\t<div id=\"google-map-markers\" 
\t\t\t\t{% if app.request.get('place_latitude') and app.request.get('place_longitude') %}
\t\t\t\t\tdata-latitude=\"{{ app.request.get('place_latitude')}}\"
\t\t\t\t\tdata-longitude=\"{{ app.request.get('place_longitude')}}\"
\t\t\t\t{% endif %}
\t\t\t\t class=\"google-map-markers\">
\t\t\t\t \t{% if listings|length %}
\t\t\t\t \t\t{% for listing in listings %}
\t\t\t\t \t\t\t{% if listing.getLatitude() and listing.getLongitude() %}
\t\t\t\t \t\t\t\t{% spaceless %}<div data-latitude=\"{{ listing.getLatitude() }}\" 
\t\t\t\t \t\t\t\t\t data-longitude=\"{{ listing.getLongitude() }}\"
\t\t\t\t \t\t\t\t\t data-link=\"{{ path('listing_detail', {'slug': listing.getSlug()}) }}\"
\t\t\t\t \t\t\t\t\t data-id=\"{{ listing.getId() }}\"
\t\t\t\t \t\t\t\t\t {% if listing.getPrice() %}data-price=\"{{ listing.getPrice()|localizedcurrency(currency) }}\"{% endif %}
\t\t\t\t \t\t\t\t\t {% if listing.getName() %}data-name=\"{{ listing.getName() }}\"{% endif %}
\t\t\t\t \t\t\t\t\t {% if listing.getAddress() %}data-address=\"{{ listing.getAddress() }}\"{% endif %}
\t\t\t\t \t\t\t\t     {% if listing.getFeaturedImage() %}data-image=\"{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}\"{% endif %}></div>{% endspaceless %}
\t\t\t\t \t\t\t{% endif %}
\t\t\t\t \t\t{% endfor %}
\t\t\t\t \t{% endif %}
\t\t\t</div><!-- /.google-map-markers -->
\t\t</div><!-- /.content-map-inner -->

\t\t<div class=\"content-map-actions\">
\t\t\t<div id=\"google-map-action-zoom-in\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t</div><!-- /.content-map-action -->

\t\t\t<div id=\"google-map-action-zoom-out\" class=\"content-map-action\">
\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t</div><!-- /.content-map-action -->\t\t\t\t
\t\t</div><!-- /.content-map-actions -->\t\t
\t</div><!-- /.content-map -->
{% endblock %}", "FrontBundle:Listing:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/index.html.twig");
    }
}
