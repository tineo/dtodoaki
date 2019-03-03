<?php

/* FrontBundle:Listing/Header:map.html.twig */
class __TwigTemplate_9a88cf5c66970ad7514c345b0a8a547a0e6136b7a65124692efa7ac73dfb06b7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:map.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:map.html.twig"));

        // line 1
        echo "<div class=\"listing-map-wrapper\">
\t<div class=\"listing-map\">
\t\t<div id=\"listing-header-map\" 
\t\t\t data-latitude=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 4, $this->source); })()), "getLatitude", [], "method"), "html", null, true);
        echo "\"
\t\t\t data-longitude=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->source); })()), "getLongitude", [], "method"), "html", null, true);
        echo "\"
\t\t\t ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->source); })()), "getFeaturedImage", [], "method")) {
            echo "data-image=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->source); })()), "getFeaturedImage", [], "method"), "image"), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "\t\t\t class=\"listing-header-map\"></div><!-- /.listing-header-map -->

\t\t";
        // line 9
        $this->loadTemplate("FrontBundle::Listing/Header/content.html.twig", "FrontBundle:Listing/Header:map.html.twig", 9)->display($context);
        // line 10
        echo "\t</div><!-- /.listing-map -->
</div><!-- /.listing-map-wrapper -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing/Header:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  52 => 9,  48 => 7,  42 => 6,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing-map-wrapper\">
\t<div class=\"listing-map\">
\t\t<div id=\"listing-header-map\" 
\t\t\t data-latitude=\"{{ listing.getLatitude() }}\"
\t\t\t data-longitude=\"{{ listing.getLongitude() }}\"
\t\t\t {% if listing.getFeaturedImage() %}data-image=\"{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}\"{% endif %}
\t\t\t class=\"listing-header-map\"></div><!-- /.listing-header-map -->

\t\t{% include 'FrontBundle::Listing/Header/content.html.twig' %}
\t</div><!-- /.listing-map -->
</div><!-- /.listing-map-wrapper -->", "FrontBundle:Listing/Header:map.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/map.html.twig");
    }
}
