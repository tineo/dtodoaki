<?php

/* FrontBundle:Widget:opening_hours.html.twig */
class __TwigTemplate_cb5031173a1fa582474236c3a5e2113c0c5cb23b9ba48b9a35279a1ffbc48d8b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:opening_hours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:opening_hours.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 1, $this->source); })()), "getOpeningHours", [], "method")) {
            // line 2
            echo "    <div class=\"post-block\">
        <h3>";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Opening Hours"), "html", null, true);
            echo "</h3>

        <div class=\"opening-hours\">
            ";
            // line 6
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->source); })()), "getOpeningHours", [], "method"), "html", null, true));
            echo "
        </div><!-- /.opening-hours -->
    </div><!-- /.post-block -->
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Widget:opening_hours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listing.getOpeningHours() %}
    <div class=\"post-block\">
        <h3>{{ 'Opening Hours'|trans }}</h3>

        <div class=\"opening-hours\">
            {{ listing.getOpeningHours()|nl2br }}
        </div><!-- /.opening-hours -->
    </div><!-- /.post-block -->
{% endif %}", "FrontBundle:Widget:opening_hours.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/opening_hours.html.twig");
    }
}
