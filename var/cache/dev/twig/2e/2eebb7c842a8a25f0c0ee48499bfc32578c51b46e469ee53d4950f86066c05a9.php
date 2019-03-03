<?php

/* AdminBundle:Helper:stat.html.twig */
class __TwigTemplate_393922ea22f092f6b6ece48c804dae2325d1fdb9178a223c5db1d5f3d51fc994 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:stat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:stat.html.twig"));

        // line 1
        echo "<div class=\"stat ";
        if ((isset($context["class"]) || array_key_exists("class", $context))) {
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 1, $this->source); })()), "html", null, true);
        }
        echo "\">
    <div class=\"stat-key\">Active Users</div><!-- /.stat-key -->
    <div class=\"stat-value\">8645</div><!-- /.stat-value -->
    <div class=\"stat-icon\"><i class=\"fa fa-users\"></i></div>
</div><!-- /.stat -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Helper:stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"stat {% if class is defined %}{{ class }}{% endif %}\">
    <div class=\"stat-key\">Active Users</div><!-- /.stat-key -->
    <div class=\"stat-value\">8645</div><!-- /.stat-value -->
    <div class=\"stat-icon\"><i class=\"fa fa-users\"></i></div>
</div><!-- /.stat -->", "AdminBundle:Helper:stat.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/stat.html.twig");
    }
}
