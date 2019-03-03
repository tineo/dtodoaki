<?php

/* FrontBundle:Listing:row.html.twig */
class __TwigTemplate_197ca0761cd74ab27b8133a0ae5ceb640422aefb54214a2c8d76fd5a1e825f7b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:row.html.twig"));

        // line 1
        echo "<div class=\"listing-row\">
    <div class=\"listing-row-inner\">
        <div
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 4, $this->source); })()), "getFeaturedImage", [], "method")) {
            // line 5
            echo "                style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->source); })()), "getFeaturedImage", [], "method"), "image"), "html", null, true);
            echo "');\"
            ";
        }
        // line 7
        echo "           class=\"listing-row-image\">

           <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 9, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" class=\"listing-row-image-link\"></a>

            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 11, $this->source); })()), "getPrice", [], "method")) {
            // line 12
            echo "                <div class=\"listing-row-image-price\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 13, $this->source); })()), "getPrice", [], "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 13, $this->source); })())), "html", null, true);
            echo "
                </div><!-- /.listing-row-image-price -->
            ";
        }
        // line 16
        echo "
            <div class=\"listing-row-image-favorites\">
                <i class=\"fa fa-heart\"></i> <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 18, $this->source); })()), "getFavorites", [], "method")), "html", null, true);
        echo "</span>
            </div><!-- /.listing-row-image-favorites -->
        </div>

        <div class=\"listing-row-content\">
            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 23, $this->source); })()), "getIsFeatured", [], "method")) {
            // line 24
            echo "                <div class=\"listing-row-featured\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured"), "html", null, true);
            echo "
                </div><!-- /.listing-row-image-featured -->
            ";
        }
        // line 28
        echo "
            <h3>
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 30, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 31, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "
                </a>

                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 34, $this->source); })()), "getIsVerified", [], "method")) {
            // line 35
            echo "                    <i class=\"fa fa-check\"></i>
                ";
        }
        // line 37
        echo "            </h3>

            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 39, $this->source); })()), "getDescription", [], "method")) {
            // line 40
            echo "                <p>";
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 40, $this->source); })()), "getDescription", [], "method")), 0, 240) . " ..."), "html", null, true);
            echo "</p>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 43, $this->source); })()), "getRating", [], "method")) {
            // line 44
            echo "                <div class=\"listing-row-rating no\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No ratings, yet."), "html", null, true);
            echo "
                </div>
            ";
        } else {
            // line 48
            echo "                <div class=\"listing-row-rating\">
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                        ";
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 50, $this->source); })()), "getRating", [], "method"))) {
                    // line 51
                    echo "                            <i class=\"fa fa-star\"></i>
                        ";
                } else {
                    // line 53
                    echo "                            <i class=\"fa fa-star-o\"></i>
                        ";
                }
                // line 55
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </div><!-- /.listing-row-rating -->
            ";
        }
        // line 58
        echo "        </div><!-- /.listing-row-content -->
    </div><!-- /.listing-row-inner -->
</div><!-- /.listing-row -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  155 => 56,  149 => 55,  145 => 53,  141 => 51,  138 => 50,  134 => 49,  131 => 48,  125 => 45,  122 => 44,  120 => 43,  117 => 42,  111 => 40,  109 => 39,  105 => 37,  101 => 35,  99 => 34,  93 => 31,  89 => 30,  85 => 28,  79 => 25,  76 => 24,  74 => 23,  66 => 18,  62 => 16,  56 => 13,  53 => 12,  51 => 11,  46 => 9,  42 => 7,  36 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing-row\">
    <div class=\"listing-row-inner\">
        <div
            {% if listing.getFeaturedImage() %}
                style=\"background-image: url('{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}');\"
            {% endif %}
           class=\"listing-row-image\">

           <a href=\"{{ path('listing_detail', {'slug': listing.getSlug()}) }}\" class=\"listing-row-image-link\"></a>

            {% if listing.getPrice() %}
                <div class=\"listing-row-image-price\">
                    {{ listing.getPrice()|localizedcurrency(currency) }}
                </div><!-- /.listing-row-image-price -->
            {% endif %}

            <div class=\"listing-row-image-favorites\">
                <i class=\"fa fa-heart\"></i> <span>{{ listing.getFavorites()|length }}</span>
            </div><!-- /.listing-row-image-favorites -->
        </div>

        <div class=\"listing-row-content\">
            {% if listing.getIsFeatured() %}
                <div class=\"listing-row-featured\">
                    {{ 'Featured'|trans }}
                </div><!-- /.listing-row-image-featured -->
            {% endif %}

            <h3>
                <a href=\"{{ path('listing_detail', {slug: listing.getSlug()}) }}\">
                    {{ listing.getName() }}
                </a>

                {% if listing.getIsVerified() %}
                    <i class=\"fa fa-check\"></i>
                {% endif %}
            </h3>

            {% if listing.getDescription() %}
                <p>{{ listing.getDescription()|striptags[:240] ~ ' ...' }}</p>
            {% endif %}

            {% if not listing.getRating() %}
                <div class=\"listing-row-rating no\">
                    {{ 'No ratings, yet.'|trans }}
                </div>
            {% else %}
                <div class=\"listing-row-rating\">
                    {% for i in range(1, 5) %}
                        {% if i <= listing.getRating() %}
                            <i class=\"fa fa-star\"></i>
                        {% else %}
                            <i class=\"fa fa-star-o\"></i>
                        {% endif %}
                    {% endfor %}
                </div><!-- /.listing-row-rating -->
            {% endif %}
        </div><!-- /.listing-row-content -->
    </div><!-- /.listing-row-inner -->
</div><!-- /.listing-row -->", "FrontBundle:Listing:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/row.html.twig");
    }
}
