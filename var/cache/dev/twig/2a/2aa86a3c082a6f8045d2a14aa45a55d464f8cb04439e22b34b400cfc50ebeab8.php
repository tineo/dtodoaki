<?php

/* FrontBundle:Listing/Header:gallery.html.twig */
class __TwigTemplate_6a84249f7ecb7a0c0d3c0dc9802dd0f9f3ff6de6b39a22293eec899706dfcd2c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:gallery.html.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->source); })()), "getImages", [], "method"))) {
            // line 2
            echo "    <div class=\"listing-gallery-wrapper\">
        <div class=\"listing-gallery\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 4, $this->source); })()), "getImages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["image"], "getImageName", [], "method"))) {
                    // line 6
                    echo "                    <div class=\"listing-gallery-item\" style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["image"], "image"), "html", null, true);
                    echo "');\"></div>
                ";
                }
                // line 8
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div><!-- /.listing-gallery -->

        ";
            // line 11
            $this->loadTemplate("FrontBundle::Listing/Header/content.html.twig", "FrontBundle:Listing/Header:gallery.html.twig", 11)->display($context);
            // line 12
            echo "    </div><!-- /.listing-gallery-wrapper -->
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing/Header:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 11,  54 => 9,  48 => 8,  42 => 6,  39 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getImages()|length %}
    <div class=\"listing-gallery-wrapper\">
        <div class=\"listing-gallery\">
            {% for image in listing.getImages() %}
                {% if image.getImageName() is not empty %}
                    <div class=\"listing-gallery-item\" style=\"background-image: url('{{ vich_uploader_asset(image, 'image') }}');\"></div>
                {% endif %}
            {% endfor %}
        </div><!-- /.listing-gallery -->

        {% include 'FrontBundle::Listing/Header/content.html.twig' %}
    </div><!-- /.listing-gallery-wrapper -->
{% endif %}", "FrontBundle:Listing/Header:gallery.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/gallery.html.twig");
    }
}
