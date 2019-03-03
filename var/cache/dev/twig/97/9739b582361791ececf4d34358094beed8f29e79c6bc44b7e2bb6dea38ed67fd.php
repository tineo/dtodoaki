<?php

/* AdminBundle:Amenity:row.html.twig */
class __TwigTemplate_945444bc21523af1ce33397b1211161eebd545e160fef6185ae664ef156e7e6e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Amenity:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Amenity:row.html.twig"));

        // line 1
        echo "<tr>
    <td class=\"table-min-width table-center\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["amenity"]) || array_key_exists("amenity", $context) ? $context["amenity"] : (function () { throw new Twig_Error_Runtime('Variable "amenity" does not exist.', 3, $this->source); })()), "getFontIcon", [], "method")) {
            // line 4
            echo "            <i class=\"fa ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amenity"]) || array_key_exists("amenity", $context) ? $context["amenity"] : (function () { throw new Twig_Error_Runtime('Variable "amenity" does not exist.', 4, $this->source); })()), "getFontIcon", [], "method"), "html", null, true);
            echo "\"></i>
        ";
        } else {
            // line 6
            echo "            -
        ";
        }
        // line 8
        echo "    </td>

    <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amenity"]) || array_key_exists("amenity", $context) ? $context["amenity"] : (function () { throw new Twig_Error_Runtime('Variable "amenity" does not exist.', 10, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "</td>

    <td class=\"table-min-width table-center\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amenity", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["amenity"]) || array_key_exists("amenity", $context) ? $context["amenity"] : (function () { throw new Twig_Error_Runtime('Variable "amenity" does not exist.', 13, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" target=\"_blank\">
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amenity"]) || array_key_exists("amenity", $context) ? $context["amenity"] : (function () { throw new Twig_Error_Runtime('Variable "amenity" does not exist.', 14, $this->source); })()), "getSlug", [], "method"), "html", null, true);
        echo "
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_amenity_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["amenity"]) || array_key_exists("amenity", $context) ? $context["amenity"] : (function () { throw new Twig_Error_Runtime('Variable "amenity" does not exist.', 20, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 21
        echo "Update";
        echo "
            </a>

            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_amenity_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["amenity"]) || array_key_exists("amenity", $context) ? $context["amenity"] : (function () { throw new Twig_Error_Runtime('Variable "amenity" does not exist.', 24, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 25
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
        return "AdminBundle:Amenity:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  78 => 24,  72 => 21,  68 => 20,  59 => 14,  55 => 13,  49 => 10,  45 => 8,  41 => 6,  35 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td class=\"table-min-width table-center\">
        {% if amenity.getFontIcon() %}
            <i class=\"fa {{ amenity.getFontIcon() }}\"></i>
        {% else %}
            -
        {% endif %}
    </td>

    <td>{{ amenity.getName() }}</td>

    <td class=\"table-min-width table-center\">
        <a href=\"{{ path('amenity', {'slug': amenity.getSlug()}) }}\" target=\"_blank\">
            {{ amenity.getSlug() }}
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"{{ path('admin_amenity_update', {'id': amenity.getId()}) }}\" class=\"btn\">
                {{ 'Update' }}
            </a>

            <a href=\"{{ path('admin_amenity_delete', {'id': amenity.getId()}) }}\" class=\"btn\">
                {{ 'Delete' }}
            </a>
        </div>
    </td>
</tr>", "AdminBundle:Amenity:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Amenity/row.html.twig");
    }
}
