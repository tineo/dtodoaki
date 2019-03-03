<?php

/* FrontBundle:Widget:position.html.twig */
class __TwigTemplate_3bdbaf7d4c654f3c87e8add60201795693d4eb41c402386f364fdd9ff2e5ce91 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:position.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:position.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->source); })()), "getLatitude", [], "method") && twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->source); })()), "getLongitude", [], "method"))) {
            // line 2
            echo "    <div class=\"post-block\">
        ";
            // line 3
            ob_start();
            // line 4
            echo "            <div id=\"google-map-object\"
                 ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->source); })()), "getFeaturedImage", [], "method")) {
                echo "data-image=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->source); })()), "getFeaturedImage", [], "method"), "image"), "html", null, true);
                echo "\"";
            }
            // line 6
            echo "                 ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->source); })()), "getLatitude", [], "method")) {
                echo "data-latitude=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->source); })()), "getLatitude", [], "method"), "html", null, true);
                echo "\"";
            }
            // line 7
            echo "                 ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 7, $this->source); })()), "getLongitude", [], "method")) {
                echo "data-longitude=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 7, $this->source); })()), "getLongitude", [], "method"), "html", null, true);
                echo "\"";
            }
            // line 8
            echo "                 class=\"google-map-position\"></div>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 10
            echo "
        <div class=\"google-map-content\">
            <div class=\"google-map-address\">
                ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 13, $this->source); })()), "getAddress", [], "method")) {
                // line 14
                echo "                    <address>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 14, $this->source); })()), "getAddress", [], "method"), "html", null, true));
                echo "</address>
                ";
            }
            // line 16
            echo "            </div><!-- /.google-map-address -->

            <div class=\"google-map-direction\">
                <a href=\"https://maps.google.com?daddr=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 19, $this->source); })()), "getLatitude", [], "method"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 19, $this->source); })()), "getLongitude", [], "method"), "html", null, true);
            echo "\" target=\"_blank\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Get Direction"), "html", null, true);
            echo " <i class=\"fa fa-long-arrow-right\"></i>
                </a>
            </div><!-- /.google-map-direction -->
        </div><!-- /.google-map-content -->
    </div><!-- /.post-block -->
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Widget:position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  81 => 19,  76 => 16,  70 => 14,  68 => 13,  63 => 10,  59 => 8,  52 => 7,  45 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getLatitude() and listing.getLongitude() %}
    <div class=\"post-block\">
        {% spaceless %}
            <div id=\"google-map-object\"
                 {% if listing.getFeaturedImage() %}data-image=\"{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}\"{% endif %}
                 {% if listing.getLatitude() %}data-latitude=\"{{ listing.getLatitude() }}\"{% endif %}
                 {% if listing.getLongitude() %}data-longitude=\"{{ listing.getLongitude() }}\"{% endif %}
                 class=\"google-map-position\"></div>
        {% endspaceless %}

        <div class=\"google-map-content\">
            <div class=\"google-map-address\">
                {% if listing.getAddress() %}
                    <address>{{ listing.getAddress()|nl2br }}</address>
                {% endif %}
            </div><!-- /.google-map-address -->

            <div class=\"google-map-direction\">
                <a href=\"https://maps.google.com?daddr={{ listing.getLatitude() }},{{ listing.getLongitude() }}\" target=\"_blank\">
                    {{ 'Get Direction'|trans }} <i class=\"fa fa-long-arrow-right\"></i>
                </a>
            </div><!-- /.google-map-direction -->
        </div><!-- /.google-map-content -->
    </div><!-- /.post-block -->
{% endif %}", "FrontBundle:Widget:position.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/position.html.twig");
    }
}
