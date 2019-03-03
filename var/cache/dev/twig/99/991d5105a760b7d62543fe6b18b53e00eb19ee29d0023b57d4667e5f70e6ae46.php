<?php

/* FrontBundle:Helper:page_title.html.twig */
class __TwigTemplate_25f029300ac5690fddb03b7308320b5d127e0fa4146dee48285db80569f06cac extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:page_title.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:page_title.html.twig"));

        // line 1
        echo "<div class=\"page-title ";
        if ((isset($context["class"]) || array_key_exists("class", $context))) {
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 1, $this->source); })()), "html", null, true);
        }
        echo "\">    
    ";
        // line 2
        if ((isset($context["title"]) || array_key_exists("title", $context))) {
            // line 3
            echo "        <h2>";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</h2>
    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["description"]) || array_key_exists("description", $context))) {
            // line 7
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "</div><!-- /.page-title -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Helper:page_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 7,  47 => 6,  44 => 5,  38 => 3,  36 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-title {% if class is defined %}{{ class }}{% endif %}\">    
    {% if title is defined %}
        <h2>{{ title }}</h2>
    {% endif %}

    {% if description is defined %}
        <p>{{ description }}</p>
    {% endif %}
</div><!-- /.page-title -->", "FrontBundle:Helper:page_title.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/page_title.html.twig");
    }
}
