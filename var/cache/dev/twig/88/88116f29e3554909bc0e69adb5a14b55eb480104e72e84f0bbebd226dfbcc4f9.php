<?php

/* FrontBundle:Location:index.html.twig */
class __TwigTemplate_a63bce564de91a2ec1a6251a4e091c329e0c035c1a3a10508baafe4c3fbcd1ae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Location:index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Location:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Location:index.html.twig"));

        // line 3
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Locations");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "\t<div class=\"container\">
\t\t";
        // line 11
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle:Location:index.html.twig", 11)->display($context);
        echo "\t\t

\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 15
        if (twig_length_filter($this->env, (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 17
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["location"], "getSlug", [], "method")]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "getName", [], "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div><!-- /.col-* -->
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
\t\t            <div class=\"navigation\">
\t\t                ";
            // line 25
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 25, $this->source); })()));
            echo "
\t\t            </div><!-- /.navigation -->\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle:Location:index.html.twig", 28)->display($context);
            // line 29
            echo "\t\t\t\t";
        }
        // line 30
        echo "\t\t\t</div><!-- /.row -->
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Location:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 30,  126 => 29,  123 => 28,  117 => 25,  113 => 23,  103 => 19,  99 => 18,  96 => 17,  91 => 16,  89 => 15,  82 => 11,  79 => 10,  70 => 9,  57 => 6,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set title = 'Locations'|trans %}
\t
{% block title %}
\t{{ title }}
{% endblock %}

{% block content %}
\t<div class=\"container\">
\t\t{% include 'FrontBundle::Helper/content_title.html.twig' %}\t\t

\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t{% if locations|length %}
\t\t\t\t\t{% for location in locations %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"{{ path('location_detail', {'slug': location.getSlug()})}}\">
\t\t\t\t\t\t\t\t{{ location.getName() }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div><!-- /.col-* -->
\t\t\t\t\t{% endfor %}

\t\t            <div class=\"navigation\">
\t\t                {{ knp_pagination_render(locations) }}
\t\t            </div><!-- /.navigation -->\t\t\t\t\t
\t\t\t\t{% else %}
\t\t\t\t\t{% include 'AppBundle::Helper/empty.html.twig' %}
\t\t\t\t{% endif %}
\t\t\t</div><!-- /.row -->
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
{% endblock %}", "FrontBundle:Location:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Location/index.html.twig");
    }
}
