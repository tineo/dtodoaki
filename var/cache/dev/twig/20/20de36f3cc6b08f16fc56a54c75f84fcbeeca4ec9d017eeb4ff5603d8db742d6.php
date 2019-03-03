<?php

/* FrontBundle:Location:box.html.twig */
class __TwigTemplate_01704ee2068bdcd73e132f32f0d1c0bd7ceb09f15f0a94dee42ec2c3e0feea40 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Location:box.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Location:box.html.twig"));

        // line 1
        echo "<div class=\"location\" ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 1, $this->source); })()), "getImageName", [], "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 1, $this->source); })()), "image"), "html", null, true);
            echo "');\"";
        }
        echo ">
    <div class=\"location-inner\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 3, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" class=\"location-link\"></a>

        <div class=\"location-content\">
            <div class=\"location-title\">
                <h3>
                    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\">
                        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 9, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "
                    </a>
                </h3>

                <p>                
\t                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("{0} No available listings|{1} %count% available listing|]1,Inf[%count% available listings", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 14, $this->source); })()), "getListings", [], "method")), ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 14, $this->source); })()), "getListings", [], "method"))], "messages");
        // line 16
        echo "                \t
                </p>
            </div><!-- /.location-title -->

            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 20, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show all"), "html", null, true);
        echo "</a>
        </div>
    </div><!-- /.location-inner -->
</div><!-- /.location-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Location:box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 16,  59 => 14,  51 => 9,  47 => 8,  39 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"location\" {% if location.getImageName() %}style=\"background-image: url('{{ vich_uploader_asset(location, 'image') }}');\"{% endif %}>
    <div class=\"location-inner\">
        <a href=\"{{ path('location_detail', {'slug': location.getSlug()}) }}\" class=\"location-link\"></a>

        <div class=\"location-content\">
            <div class=\"location-title\">
                <h3>
                    <a href=\"{{ path('location_detail', {'slug': location.getSlug()}) }}\">
                        {{ location.getName() }}
                    </a>
                </h3>

                <p>                
\t                {% transchoice location.getListings()|length %}
\t                    {0} No available listings|{1} %count% available listing|]1,Inf[%count% available listings
\t                {% endtranschoice %}                \t
                </p>
            </div><!-- /.location-title -->

            <a href=\"{{ path('location_detail', {'slug': location.getSlug()})}}\" class=\"btn btn-primary\">{{ 'Show all'|trans }}</a>
        </div>
    </div><!-- /.location-inner -->
</div><!-- /.location-->", "FrontBundle:Location:box.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Location/box.html.twig");
    }
}
