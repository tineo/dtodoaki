<?php

/* FrontBundle:Widget:gallery.html.twig */
class __TwigTemplate_325a769003b85b220833fbfdcb029d2eed3cc5d28edf629e06222be13a6a9665 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:gallery.html.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->source); })()), "getImages", [], "method"))) {
            // line 2
            echo "    <div class=\"post-block\">
        <h3>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Photo Gallery"), "html", null, true);
            echo "
        </h3>

        <div class=\"post-gallery\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 8, $this->source); })()), "getImages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["image"], "getImageName", [], "method"))) {
                    // line 10
                    echo "                    <a class=\"post-gallery-item\"
                       href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["image"], "image"), "html", null, true);
                    echo "\"
                       style=\"background-image: url('";
                    // line 12
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["image"], "image"), "html", null, true);
                    echo "');\"></a>
                ";
                }
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div><!-- /.listing-gallery -->
    </div><!-- /.post-block -->
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Widget:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  61 => 14,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  42 => 8,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getImages()|length %}
    <div class=\"post-block\">
        <h3>
            {{ 'Photo Gallery'|trans }}
        </h3>

        <div class=\"post-gallery\">
            {% for image in listing.getImages() %}
                {% if image.getImageName() is not empty %}
                    <a class=\"post-gallery-item\"
                       href=\"{{ vich_uploader_asset(image, 'image') }}\"
                       style=\"background-image: url('{{ vich_uploader_asset(image, 'image') }}');\"></a>
                {% endif %}
            {% endfor %}
        </div><!-- /.listing-gallery -->
    </div><!-- /.post-block -->
{% endif %}", "FrontBundle:Widget:gallery.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/gallery.html.twig");
    }
}
