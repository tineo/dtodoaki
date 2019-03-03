<?php

/* AdminBundle:Inquire:row.html.twig */
class __TwigTemplate_702d8d5cd2ddcbcb7b6c8d780d7ffd09dab01419d6a46ad978cabac203cb7633 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Inquire:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Inquire:row.html.twig"));

        // line 1
        echo "<tr>
    <td>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 2, $this->source); })()), "getAuthorName", [], "method"), "html", null, true);
        echo "</td>

    <td>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 5, $this->source); })()), "getListing", [], "method"), "getSlug", [], "method")]), "html", null, true);
        echo "\" target=\"_blank\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 6, $this->source); })()), "getListing", [], "method"), "getName", [], "method"), "html", null, true);
        echo "
        </a>
    </td>

    <td class=\"table-min-width\">
        ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 11, $this->source); })()), "getCreated", [], "method")), "html", null, true);
        echo "
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inquire_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 16, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 17
        echo "Update";
        echo "
            </a>

            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inquire_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 20, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 21
        echo "Delete";
        echo "
            </a>
        </div>
    </td>
</tr>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Inquire:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  68 => 20,  62 => 17,  58 => 16,  50 => 11,  42 => 6,  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>{{ inquire.getAuthorName() }}</td>

    <td>
        <a href=\"{{ path('listing_detail', {'slug': inquire.getListing().getSlug() }) }}\" target=\"_blank\">
            {{ inquire.getListing().getName() }}
        </a>
    </td>

    <td class=\"table-min-width\">
        {{ inquire.getCreated()|date }}
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"{{ path('admin_inquire_update', {'id': inquire.getId()}) }}\" class=\"btn\">
                {{ 'Update' }}
            </a>

            <a href=\"{{ path('admin_inquire_delete', {'id': inquire.getId()}) }}\" class=\"btn\">
                {{ 'Delete' }}
            </a>
        </div>
    </td>
</tr>", "AdminBundle:Inquire:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Inquire/row.html.twig");
    }
}
