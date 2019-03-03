<?php

/* FrontBundle:Amenity:index.html.twig */
class __TwigTemplate_553b82c784a46603b79458a6e5045c7f09bebdeacbb5bfa6b6b8bbfcf7f0f32c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Amenity:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Amenity:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Amenity:index.html.twig"));

        // line 3
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amenities");
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

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"container\">
\t\t";
        // line 9
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle:Amenity:index.html.twig", 9)->display($context);
        echo "\t\t

\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 13
        if (twig_length_filter($this->env, (isset($context["amenities"]) || array_key_exists("amenities", $context) ? $context["amenities"] : (function () { throw new Twig_Error_Runtime('Variable "amenities" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["amenities"]) || array_key_exists("amenities", $context) ? $context["amenities"] : (function () { throw new Twig_Error_Runtime('Variable "amenities" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 15
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amenity_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["amenity"], "getSlug", [], "method")]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amenity"], "getName", [], "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div><!-- /.col-* -->
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
\t\t            <div class=\"navigation\">
\t\t                ";
            // line 23
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["amenities"]) || array_key_exists("amenities", $context) ? $context["amenities"] : (function () { throw new Twig_Error_Runtime('Variable "amenities" does not exist.', 23, $this->source); })()));
            echo "
\t\t            </div><!-- /.navigation -->\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle:Amenity:index.html.twig", 26)->display($context);
            // line 27
            echo "\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</div><!-- /.row -->
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Amenity:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 28,  122 => 27,  119 => 26,  113 => 23,  109 => 21,  99 => 17,  95 => 16,  92 => 15,  87 => 14,  85 => 13,  78 => 9,  75 => 8,  66 => 7,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set title = 'Amenities'|trans %}
\t
{% block title %}{{ title }}{% endblock %}

{% block content %}
\t<div class=\"container\">
\t\t{% include 'FrontBundle::Helper/content_title.html.twig' %}\t\t

\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t{% if amenities|length %}
\t\t\t\t\t{% for amenity in amenities %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"{{ path('amenity_detail', {'slug': amenity.getSlug()})}}\">
\t\t\t\t\t\t\t\t{{ amenity.getName() }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div><!-- /.col-* -->
\t\t\t\t\t{% endfor %}

\t\t            <div class=\"navigation\">
\t\t                {{ knp_pagination_render(amenities) }}
\t\t            </div><!-- /.navigation -->\t\t\t\t\t
\t\t\t\t{% else %}
\t\t\t\t\t{% include 'AppBundle::Helper/empty.html.twig' %}
\t\t\t\t{% endif %}
\t\t\t</div><!-- /.row -->
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
{% endblock %}", "FrontBundle:Amenity:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Amenity/index.html.twig");
    }
}
