<?php

/* FrontBundle:Category:box.html.twig */
class __TwigTemplate_7cf8396357740b78a06fb0fee30c686a202bff2e84dea1f4aec4248aee778a93 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Category:box.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Category:box.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 1, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" class=\"category\">
    <span class=\"category-count\">
        ";
        // line 3
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 3, $this->source); })()), "getListings", [], "method")), "html", null, true);
        echo "

        ";
        // line 5
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 5, $this->source); })()), "getListings", [], "method")) == 1)) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing"), "html", null, true);
            echo "
        ";
        } else {
            // line 8
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listings"), "html", null, true);
            echo "
        ";
        }
        // line 10
        echo "    </span>

    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 12, $this->source); })()), "getFontIcon", [], "method")) {
            // line 13
            echo "        <span class=\"category-icon\">
            <i class=\"fa ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 14, $this->source); })()), "getFontIcon", [], "method"), "html", null, true);
            echo "\"></i>
        </span><!-- /.category-icon -->
    ";
        }
        // line 17
        echo "
    <span class=\"category-title\">
        ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 19, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "
    </span><!-- /.category-title -->
</a><!-- /.category -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Category:box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  69 => 17,  63 => 14,  60 => 13,  58 => 12,  54 => 10,  48 => 8,  42 => 6,  40 => 5,  35 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('category_detail', {'slug': category.getSlug()})}}\" class=\"category\">
    <span class=\"category-count\">
        {{ category.getListings()|length }}

        {% if category.getListings()|length == 1 %}
            {{ 'listing'|trans }}
        {% else %}
            {{ 'listings'|trans }}
        {% endif %}
    </span>

    {% if category.getFontIcon() %}
        <span class=\"category-icon\">
            <i class=\"fa {{ category.getFontIcon() }}\"></i>
        </span><!-- /.category-icon -->
    {% endif %}

    <span class=\"category-title\">
        {{ category.getName() }}
    </span><!-- /.category-title -->
</a><!-- /.category -->", "FrontBundle:Category:box.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Category/box.html.twig");
    }
}
