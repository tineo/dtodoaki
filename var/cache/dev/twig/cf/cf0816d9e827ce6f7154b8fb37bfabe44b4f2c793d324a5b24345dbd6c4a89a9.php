<?php

/* AdminBundle:Category:row.html.twig */
class __TwigTemplate_a904763e39c95b3ac52970287adb284b8a1b8e2cd6d25bb990f06aefd898717a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:row.html.twig"));

        // line 1
        echo "
<tr>
    <td class=\"table-min-width table-center\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 4, $this->source); })()), "getFontIcon", [], "method")) {
            // line 5
            echo "            <i class=\"fa ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 5, $this->source); })()), "getFontIcon", [], "method"), "html", null, true);
            echo "\"></i>
        ";
        } else {
            // line 7
            echo "            -
        ";
        }
        // line 9
        echo "    </td>

    <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hierarchy"]) || array_key_exists("hierarchy", $context) ? $context["hierarchy"] : (function () { throw new Twig_Error_Runtime('Variable "hierarchy" does not exist.', 11, $this->source); })()), "getName", [0 => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 11, $this->source); })())], "method"), "html", null, true);
        echo "</td>

    <td class=\"table-min-width table-center\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 14, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" target=\"_blank\">
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 15, $this->source); })()), "getSlug", [], "method"), "html", null, true);
        echo "
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 21, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 22
        echo "Update";
        echo "
            </a>

            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 25, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">
                ";
        // line 26
        echo "Delete";
        echo "
            </a>
        </div>
    </td>
</tr>

";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 32, $this->source); })()), "getCategories", [], "method")) {
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 33, $this->source); })()), "getCategories", [], "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 34
                echo "        ";
                $this->loadTemplate("AdminBundle::Category/row.html.twig", "AdminBundle:Category:row.html.twig", 34)->display(array_merge($context, ["category" => $context["subCategory"]]));
                // line 35
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  112 => 34,  94 => 33,  92 => 32,  83 => 26,  79 => 25,  73 => 22,  69 => 21,  60 => 15,  56 => 14,  50 => 11,  46 => 9,  42 => 7,  36 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<tr>
    <td class=\"table-min-width table-center\">
        {% if category.getFontIcon() %}
            <i class=\"fa {{ category.getFontIcon() }}\"></i>
        {% else %}
            -
        {% endif %}
    </td>

    <td>{{ hierarchy.getName(category) }}</td>

    <td class=\"table-min-width table-center\">
        <a href=\"{{ path('category_detail', {'slug': category.getSlug()})}}\" target=\"_blank\">
            {{ category.getSlug() }}
        </a>
    </td>

    <td class=\"table-min-width\">
        <div class=\"btn-group\">
            <a href=\"{{ path('admin_category_update', {'id': category.getId()}) }}\" class=\"btn\">
                {{ 'Update' }}
            </a>

            <a href=\"{{ path('admin_category_delete', {'id': category.getId()}) }}\" class=\"btn\">
                {{ 'Delete' }}
            </a>
        </div>
    </td>
</tr>

{% if category.getCategories() %}
    {% for subCategory in category.getCategories() %}
        {% include 'AdminBundle::Category/row.html.twig' with {category: subCategory}%}
    {% endfor %}
{% endif %}", "AdminBundle:Category:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Category/row.html.twig");
    }
}
