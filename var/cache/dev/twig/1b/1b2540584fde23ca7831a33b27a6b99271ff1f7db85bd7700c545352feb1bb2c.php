<?php

/* AdminBundle:Location:row.html.twig */
class __TwigTemplate_df11a26766470ee17fa897419f3ca19c066418b52b35b7614d1f567ea09b144b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Location:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Location:row.html.twig"));

        // line 1
        echo "<tr>
    <td class=\"table-min-width table-image table-center\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 3, $this->source); })()), "getImageName", [], "method")) {
            // line 4
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 4, $this->source); })()), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 4, $this->source); })()), "getName", [], "method"), "html", null, true);
            echo "\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hierarchy"]) || array_key_exists("hierarchy", $context) ? $context["hierarchy"] : (function () { throw new Twig_Error_Runtime('Variable "hierarchy" does not exist.', 10, $this->source); })()), "getName", [0 => (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 10, $this->source); })())], "method"), "html", null, true);
        echo "</td>

    <td class=\"table-min-width table-center\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 13, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" target=\"_blank\">
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 14, $this->source); })()), "getSlug", [], "method"), "html", null, true);
        echo "
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_location_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 20, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 21
        echo "Update";
        echo "
            </a>

            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_location_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 24, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 25
        echo "Delete";
        echo "
            </a>
        </div>
    </td>
</tr>

";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 31, $this->source); })()), "getLocations", [], "method")) {
            // line 32
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 32, $this->source); })()), "getLocations", [], "method"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["subLocation"]) {
                // line 33
                echo "        ";
                $this->loadTemplate("AdminBundle::Location/row.html.twig", "AdminBundle:Location:row.html.twig", 33)->display(array_merge($context, ["location" => $context["subLocation"]]));
                // line 34
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subLocation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Location:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  113 => 33,  95 => 32,  93 => 31,  84 => 25,  80 => 24,  74 => 21,  70 => 20,  61 => 14,  57 => 13,  51 => 10,  47 => 8,  43 => 6,  35 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td class=\"table-min-width table-image table-center\">
        {% if location.getImageName() %}
            <img src=\"{{ vich_uploader_asset(location, 'image') }}\" alt=\"{{ location.getName() }}\">
        {% else %}
            -
        {% endif %}
    </td>

    <td>{{ hierarchy.getName(location) }}</td>

    <td class=\"table-min-width table-center\">
        <a href=\"{{ path('location', {'slug': location.getSlug()}) }}\" target=\"_blank\">
            {{ location.getSlug() }}
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"{{ path('admin_location_update', {'id': location.getId()}) }}\" class=\"btn\">
                {{ 'Update' }}
            </a>

            <a href=\"{{ path('admin_location_delete', {'id': location.getId()}) }}\" class=\"btn\">
                {{ 'Delete' }}
            </a>
        </div>
    </td>
</tr>

{% if location.getLocations() %}
    {% for subLocation in location.getLocations() %}
        {% include 'AdminBundle::Location/row.html.twig' with {location: subLocation}%}
    {% endfor %}
{% endif %}", "AdminBundle:Location:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Location/row.html.twig");
    }
}
