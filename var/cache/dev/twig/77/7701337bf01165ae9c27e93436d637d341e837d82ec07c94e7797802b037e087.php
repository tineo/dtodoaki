<?php

/* FrontBundle:Listing/Header:content.html.twig */
class __TwigTemplate_33aa431205405a80ab88e074bb3859b3dab60c028bdcdaad278ade4f98690632 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing/Header:content.html.twig"));

        // line 1
        echo "<div class=\"listing-header-content\">
    <div class=\"container\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 3, $this->source); })()), "getIsVerified", [], "method")) {
            // line 4
            echo "            <div class=\"listing-header-label\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Verified Listing"), "html", null, true);
            echo "
            </div><!-- /.listing-header-label-->
        ";
        }
        // line 8
        echo "
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 9, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "</h1>

        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 11, $this->source); })()), "getAddress", [], "method")) {
            // line 12
            echo "            <address>";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 12, $this->source); })()), "getAddress", [], "method"), "html", null, true));
            echo "</address>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ((isset($context["actions"]) || array_key_exists("actions", $context))) {
            // line 16
            echo "            <div class=\"actions\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 18
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", []), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", []), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div><!-- /.actions -->
        ";
        }
        // line 22
        echo "    </div><!-- /.container -->
</div><!-- /.listing-header-content -->   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing/Header:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  83 => 20,  72 => 18,  68 => 17,  65 => 16,  63 => 15,  60 => 14,  54 => 12,  52 => 11,  47 => 9,  44 => 8,  38 => 5,  35 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing-header-content\">
    <div class=\"container\">
        {% if listing.getIsVerified() %}
            <div class=\"listing-header-label\">
                {{ 'Verified Listing'|trans }}
            </div><!-- /.listing-header-label-->
        {% endif %}

        <h1>{{ listing.getName() }}</h1>

        {% if listing.getAddress() %}
            <address>{{ listing.getAddress()|nl2br }}</address>
        {% endif %}

        {% if actions is defined %}
            <div class=\"actions\">
                {% for action in actions %}
                    <a href=\"{{ action.link }}\" class=\"btn btn-primary\">{{ action.title }}</a>
                {% endfor %}
            </div><!-- /.actions -->
        {% endif %}
    </div><!-- /.container -->
</div><!-- /.listing-header-content -->   ", "FrontBundle:Listing/Header:content.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/Header/content.html.twig");
    }
}
