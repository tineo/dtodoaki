<?php

/* AdminBundle:Subscriber:row.html.twig */
class __TwigTemplate_fa3842e21a6b284804dd2bd4353f5c8725a45bc3a1f2d5b8a3d7b53d7c61eea0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Subscriber:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Subscriber:row.html.twig"));

        // line 1
        echo "<tr>
    <td>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subscriber"]) || array_key_exists("subscriber", $context) ? $context["subscriber"] : (function () { throw new Twig_Error_Runtime('Variable "subscriber" does not exist.', 2, $this->source); })()), "getEmail", [], "method"), "html", null, true);
        echo "</td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscriber_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subscriber"]) || array_key_exists("subscriber", $context) ? $context["subscriber"] : (function () { throw new Twig_Error_Runtime('Variable "subscriber" does not exist.', 6, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 7
        echo "Update";
        echo "
            </a>

            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subscriber_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subscriber"]) || array_key_exists("subscriber", $context) ? $context["subscriber"] : (function () { throw new Twig_Error_Runtime('Variable "subscriber" does not exist.', 10, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 11
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
        return "AdminBundle:Subscriber:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  49 => 10,  43 => 7,  39 => 6,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>{{ subscriber.getEmail() }}</td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"{{ path('admin_subscriber_update', {'id': subscriber.getId()}) }}\" class=\"btn\">
                {{ 'Update' }}
            </a>

            <a href=\"{{ path('admin_subscriber_delete', {'id': subscriber.getId()}) }}\" class=\"btn\">
                {{ 'Delete' }}
            </a>
        </div>
    </td>
</tr>", "AdminBundle:Subscriber:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Subscriber/row.html.twig");
    }
}
