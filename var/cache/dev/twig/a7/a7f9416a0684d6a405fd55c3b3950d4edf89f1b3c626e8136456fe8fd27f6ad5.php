<?php

/* AdminBundle:Helper:sidebar.html.twig */
class __TwigTemplate_5601db84972750cb54af5b268be6384bff49045bcb2bd4c548a61c3bf52b1f14 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar\">
    <div class=\"sidebar-title\">
        <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "user", []), "getDisplayName", [], "method"), "html", null, true);
        echo "</strong>
        <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin Area"), "html", null, true);
        echo "</h2>
    </div><!-- /.sidebar-title -->

    <div class=\"sidebar-content\">
        ";
        // line 8
        $this->loadTemplate("AdminBundle::Helper/sidebar_navigation.html.twig", "AdminBundle:Helper:sidebar.html.twig", 8)->display($context);
        // line 9
        echo "    </div><!-- /.sidebar-content -->
</div><!-- /.sidebar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Helper:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  39 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar\">
    <div class=\"sidebar-title\">
        <strong>{{ 'Hello'|trans }} {{ app.user.getDisplayName() }}</strong>
        <h2>{{ 'Admin Area'|trans }}</h2>
    </div><!-- /.sidebar-title -->

    <div class=\"sidebar-content\">
        {% include 'AdminBundle::Helper/sidebar_navigation.html.twig' %}
    </div><!-- /.sidebar-content -->
</div><!-- /.sidebar -->", "AdminBundle:Helper:sidebar.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/sidebar.html.twig");
    }
}
