<?php

/* FrontBundle:Listing/Header:image.html.twig */
class __TwigTemplate_646e39df1dfd3002fffaf04cb7d6980b751f5f305fe0788e38fb267293b1b4f3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:image.html.twig"));

        // line 1
        echo "<div class=\"listing-single-image-wrapper\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->source); })()), "getFeaturedImage", [], "method"), "image"), "html", null, true);
        echo "');\">
\t<div class=\"listing-single-image\">
\t\t";
        // line 3
        $this->loadTemplate("FrontBundle::Listing/Header/content.html.twig", "FrontBundle:Listing/Header:image.html.twig", 3)->display($context);
        // line 4
        echo "\t</div><!-- /.listing-single-image -->
</div><!-- /.listing-single-mage-wrapper -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing/Header:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  35 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing-single-image-wrapper\" style=\"background-image: url('{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}');\">
\t<div class=\"listing-single-image\">
\t\t{% include 'FrontBundle::Listing/Header/content.html.twig' %}
\t</div><!-- /.listing-single-image -->
</div><!-- /.listing-single-mage-wrapper -->", "FrontBundle:Listing/Header:image.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/image.html.twig");
    }
}
