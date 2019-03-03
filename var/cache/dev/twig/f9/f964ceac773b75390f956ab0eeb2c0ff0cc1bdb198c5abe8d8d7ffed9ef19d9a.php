<?php

/* FrontBundle:Listing:options.html.twig */
class __TwigTemplate_1cf362eede134ee1f7e89d851f90554ea904b5345ebc764e991c1169540e6fee extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:options.html.twig"));

        // line 1
        echo "<div class=\"listing-options-wrapper\">
\t<div class=\"listing-options\">
\t\t<div class=\"listing-options-group\">
\t\t\t<a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_create", ["entity" => "listing"]);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save search query"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-bookmark-o\"></i>
\t\t\t</a>

\t\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing", ["display" => "grid"]);
        echo "\" ";
        if (((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 8, $this->source); })()) == "grid")) {
            echo "class=\"active\"";
        }
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show listings in grid"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t</a>

\t\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing", ["display" => "row"]);
        echo "\" ";
        if (((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 12, $this->source); })()) == "row")) {
            echo "class=\"active\"";
        }
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show listings in rows"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-navicon\"></i>
\t\t\t</a>
\t\t</div><!-- /.listing-options-group -->
\t</div><!-- /.listing-options -->
</div><!-- /.listing-options-wrapper  -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 8,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing-options-wrapper\">
\t<div class=\"listing-options\">
\t\t<div class=\"listing-options-group\">
\t\t\t<a href=\"{{ path('search_create', {'entity': 'listing'}) }}\" title=\"{{ 'Save search query'|trans }}\">
\t\t\t\t<i class=\"fa fa-bookmark-o\"></i>
\t\t\t</a>

\t\t\t<a href=\"{{ path('listing', {'display': 'grid'}) }}\" {% if display == 'grid' %}class=\"active\"{% endif %} title=\"{{ 'Show listings in grid'|trans }}\">
\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t</a>

\t\t\t<a href=\"{{ path('listing', {'display': 'row'}) }}\" {% if display == 'row' %}class=\"active\"{% endif %} title=\"{{ 'Show listings in rows'|trans }}\">
\t\t\t\t<i class=\"fa fa-navicon\"></i>
\t\t\t</a>
\t\t</div><!-- /.listing-options-group -->
\t</div><!-- /.listing-options -->
</div><!-- /.listing-options-wrapper  -->", "FrontBundle:Listing:options.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/options.html.twig");
    }
}
