<?php

/* AdminBundle:Helper:page_title.html.twig */
class __TwigTemplate_0c316070943bc466b23e1196c27fd3f8464e62b986b583f7f53da67a630236ed extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:page_title.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:page_title.html.twig"));

        // line 1
        echo "<div class=\"page-title ";
        if ((isset($context["class"]) || array_key_exists("class", $context))) {
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 1, $this->source); })()), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        if ((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context))) {
            // line 3
            echo "        <ol class=\"breadcrumb\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", [], "any", true, true)) {
                    // line 6
                    echo "                    <li class=\"breadcrumb-item\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", []), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 8
                    echo "                    <li class=\"breadcrumb-item active\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", []), "html", null, true);
                    echo "</li>
                ";
                }
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ol>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ((isset($context["title"]) || array_key_exists("title", $context))) {
            // line 15
            echo "        <h2>";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "</h2>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if ((isset($context["actions"]) || array_key_exists("actions", $context))) {
            // line 19
            echo "        <div class=\"page-title-actions\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 21
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", []), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", []), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div><!-- /.page-title-actions -->
    ";
        }
        // line 27
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Helper:page_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  109 => 25,  100 => 22,  95 => 21,  91 => 20,  88 => 19,  86 => 18,  83 => 17,  77 => 15,  75 => 14,  72 => 13,  68 => 11,  62 => 10,  56 => 8,  48 => 6,  45 => 5,  41 => 4,  38 => 3,  36 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-title {% if class is defined %}{{ class }}{% endif %}\">
    {% if breadcrumbs is defined %}
        <ol class=\"breadcrumb\">
            {% for breadcrumb in breadcrumbs %}
                {% if breadcrumb.link is defined %}
                    <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.link }}\">{{ breadcrumb.title }}</a></li>
                {% else %}
                    <li class=\"breadcrumb-item active\">{{ breadcrumb.title }}</li>
                {% endif %}
            {% endfor  %}
        </ol>
    {% endif %}

    {% if title is defined %}
        <h2>{{ title }}</h2>
    {% endif %}

    {% if actions is defined %}
        <div class=\"page-title-actions\">
            {% for action in actions %}
                <a href=\"{{ action.link }}\" class=\"btn btn-primary\">
                    {{ action.title }}
                </a>
            {% endfor %}
        </div><!-- /.page-title-actions -->
    {% endif %}
</div>", "AdminBundle:Helper:page_title.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/page_title.html.twig");
    }
}
