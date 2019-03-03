<?php

/* AppBundle:Helper:empty.html.twig */
class __TwigTemplate_c55bb1d6fcdb3e7de2578e07a0429396acf0be1a8895d538f5789ce48cdfc6de extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Helper:empty.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Helper:empty.html.twig"));

        // line 1
        echo "<div class=\"empty\">
    <div class=\"empty-icon-wrapper\">
        <div class=\"empty-icon\">
            <i class=\"fa fa-question\"></i>
        </div><!-- /.empty-icon -->
    </div><!-- /.empty-icon-wrapper -->

    <div class=\"empty-content\">
\t    <h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found"), "html", null, true);
        echo "</h4>
\t    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sorry about that, but there there are no results for your query."), "html", null, true);
        echo "</p>
\t</div><!-- /.empty-content -->
</div><!-- /.empty -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Helper:empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"empty\">
    <div class=\"empty-icon-wrapper\">
        <div class=\"empty-icon\">
            <i class=\"fa fa-question\"></i>
        </div><!-- /.empty-icon -->
    </div><!-- /.empty-icon-wrapper -->

    <div class=\"empty-content\">
\t    <h4>{{ 'No results found'|trans }}</h4>
\t    <p>{{ 'Sorry about that, but there there are no results for your query.'|trans }}</p>
\t</div><!-- /.empty-content -->
</div><!-- /.empty -->", "AppBundle:Helper:empty.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AppBundle/Resources/views/Helper/empty.html.twig");
    }
}
