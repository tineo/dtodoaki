<?php

/* FrontBundle:Helper:hero.html.twig */
class __TwigTemplate_e8bc36bcc28e006d4d61014a7237d8b6f396fda80837e0968d097adb009afa71 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:hero.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:hero.html.twig"));

        // line 1
        echo "<div class=\"hero-wrapper\">
    <div class=\"hero\">
        <div class=\"container\">
            <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search City Gems"), "html", null, true);
        echo "</h1>
            <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Find the best spots or places in your city by using our directory theme. Start listing anything today."), "html", null, true);
        echo "</p>

            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 7, $this->source); })()), 'form_start', ["name" => "filter-hero-form"]);
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 8, $this->source); })()), 'widget');
        echo "
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 9, $this->source); })()), 'form_end');
        echo "

            ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["categories_popular"]) || array_key_exists("categories_popular", $context) ? $context["categories_popular"] : (function () { throw new Twig_Error_Runtime('Variable "categories_popular" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "                <div class=\"hero-categories\">
                    <strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popular categories"), "html", null, true);
            echo "</strong>

                    <ul>
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_popular"]) || array_key_exists("categories_popular", $context) ? $context["categories_popular"] : (function () { throw new Twig_Error_Runtime('Variable "categories_popular" does not exist.', 16, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "                            <li>
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "getSlug", [], "method")]), "html", null, true);
                echo "\">
                                    ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "method"), "html", null, true);
                echo " <span>(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getListings", [], "method")), "html", null, true);
                echo ")</span>
                                </a>";
                // line 20
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                    echo ",";
                }
                echo "</li>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </ul>
                </div><!-- /.hero-categories -->
            ";
        }
        // line 25
        echo "        </div><!-- /.container -->
    </div><!-- /.hero -->
</div><!-- /.hero-wrapper -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Helper:hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  115 => 22,  97 => 20,  91 => 19,  87 => 18,  84 => 17,  67 => 16,  61 => 13,  58 => 12,  56 => 11,  51 => 9,  47 => 8,  43 => 7,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"hero-wrapper\">
    <div class=\"hero\">
        <div class=\"container\">
            <h1>{{ 'Search City Gems'|trans }}</h1>
            <p>{{ 'Find the best spots or places in your city by using our directory theme. Start listing anything today.'|trans }}</p>

            {{ form_start(filter, {'name': 'filter-hero-form'}) }}
            {{ form_widget(filter) }}
            {{ form_end(filter) }}

            {% if categories_popular|length %}
                <div class=\"hero-categories\">
                    <strong>{{ 'Popular categories'|trans }}</strong>

                    <ul>
                        {% for category in categories_popular %}
                            <li>
                                <a href=\"{{ path('category_detail', {'slug': category.getSlug()})}}\">
                                    {{ category.getName() }} <span>({{ category.getListings()|length }})</span>
                                </a>{% if not loop.last %},{% endif %}</li>
                        {% endfor %}
                    </ul>
                </div><!-- /.hero-categories -->
            {% endif %}
        </div><!-- /.container -->
    </div><!-- /.hero -->
</div><!-- /.hero-wrapper -->", "FrontBundle:Helper:hero.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/hero.html.twig");
    }
}
