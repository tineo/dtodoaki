<?php

/* FrontBundle:Listing:box.html.twig */
class __TwigTemplate_3fd254ebc0f47f7f87f9225e8e74d0123e77d56bfd451333ca0b64a9c2f62994 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:box.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:box.html.twig"));

        // line 1
        echo "<div class=\"listing\">
    <div class=\"listing-inner\">
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
        echo "           class=\"listing-image\">

           <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 9, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" class=\"listing-image-link\"></a>
            ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 10, $this->source); })()), "getIsFeatured", [], "method") || twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 10, $this->source); })()), "getAddress", [], "method"))) {
            // line 11
            echo "                <div class=\"listing-image-content\">
                    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 12, $this->source); })()), "getIsFeatured", [], "method")) {
                // line 13
                echo "                        <div class=\"listing-image-featured\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured"), "html", null, true);
                echo "
                        </div><!-- /.listing-image-featured -->
                    ";
            }
            // line 17
            echo "
                    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 18, $this->source); })()), "getAddress", [], "method")) {
                // line 19
                echo "                        <address>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 19, $this->source); })()), "getAddress", [], "method"), "html", null, true));
                echo "</address>
                    ";
            }
            // line 21
            echo "                </div><!-- /.listing-image-content -->
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 24, $this->source); })()), "getPrice", [], "method")) {
            // line 25
            echo "                <div class=\"listing-image-price\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 26, $this->source); })()), "getPrice", [], "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 26, $this->source); })())), "html", null, true);
            echo "
                </div><!-- /.listing-image-price -->
            ";
        }
        // line 29
        echo "
            <a class=\"listing-image-favorites\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorite_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 30, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\">
                <i class=\"fa fa-heart\"></i> <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 31, $this->source); })()), "getFavorites", [], "method")), "html", null, true);
        echo "</span>
            </a><!-- /.listing-image-favorites -->
        </div>

        <div class=\"listing-content\">
            <h3>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 37, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\">
                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 38, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "
                </a>

                ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 41, $this->source); })()), "getIsVerified", [], "method")) {
            // line 42
            echo "                    <i class=\"fa fa-check\"></i>
                ";
        }
        // line 44
        echo "            </h3>

            ";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 46, $this->source); })()), "getRating", [], "method")) {
            // line 47
            echo "                <div class=\"listing-rating-no\">
                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No ratings, yet."), "html", null, true);
            echo "
                </div>
            ";
        } else {
            // line 51
            echo "                <div class=\"listing-rating\">
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                echo "                        ";
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 53, $this->source); })()), "getRating", [], "method"))) {
                    // line 54
                    echo "                            <i class=\"fa fa-star\"></i>
                        ";
                } else {
                    // line 56
                    echo "                            <i class=\"fa fa-star-o\"></i>
                        ";
                }
                // line 58
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div><!-- /.listing-rating -->
            ";
        }
        // line 61
        echo "        </div><!-- /.listing-content -->
    </div><!-- /.listing-inner -->
</div><!-- /.listing -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing:box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 61,  166 => 59,  160 => 58,  156 => 56,  152 => 54,  149 => 53,  145 => 52,  142 => 51,  136 => 48,  133 => 47,  131 => 46,  127 => 44,  123 => 42,  121 => 41,  115 => 38,  111 => 37,  102 => 31,  98 => 30,  95 => 29,  89 => 26,  86 => 25,  84 => 24,  81 => 23,  77 => 21,  71 => 19,  69 => 18,  66 => 17,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  50 => 10,  46 => 9,  42 => 7,  36 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"listing\">
    <div class=\"listing-inner\">
        <div
            {% if listing.getFeaturedImage() %}
                style=\"background-image: url('{{ vich_uploader_asset(listing.getFeaturedImage(), 'image') }}');\"
            {% endif %}
           class=\"listing-image\">

           <a href=\"{{ path('listing_detail', {'slug': listing.getSlug()}) }}\" class=\"listing-image-link\"></a>
            {% if listing.getIsFeatured() or listing.getAddress() %}
                <div class=\"listing-image-content\">
                    {% if listing.getIsFeatured() %}
                        <div class=\"listing-image-featured\">
                            {{ 'Featured'|trans }}
                        </div><!-- /.listing-image-featured -->
                    {% endif %}

                    {% if listing.getAddress() %}
                        <address>{{ listing.getAddress()|nl2br }}</address>
                    {% endif %}
                </div><!-- /.listing-image-content -->
            {% endif %}

            {% if listing.getPrice() %}
                <div class=\"listing-image-price\">
                    {{ listing.getPrice()|localizedcurrency(currency) }}
                </div><!-- /.listing-image-price -->
            {% endif %}

            <a class=\"listing-image-favorites\" href=\"{{ path('favorite_add', {'id': listing.getId()})}}\">
                <i class=\"fa fa-heart\"></i> <span>{{ listing.getFavorites()|length }}</span>
            </a><!-- /.listing-image-favorites -->
        </div>

        <div class=\"listing-content\">
            <h3>
                <a href=\"{{ path('listing_detail', {slug: listing.getSlug()}) }}\">
                    {{ listing.getName() }}
                </a>

                {% if listing.getIsVerified() %}
                    <i class=\"fa fa-check\"></i>
                {% endif %}
            </h3>

            {% if not listing.getRating() %}
                <div class=\"listing-rating-no\">
                    {{ 'No ratings, yet.'|trans }}
                </div>
            {% else %}
                <div class=\"listing-rating\">
                    {% for i in range(1, 5) %}
                        {% if i <= listing.getRating() %}
                            <i class=\"fa fa-star\"></i>
                        {% else %}
                            <i class=\"fa fa-star-o\"></i>
                        {% endif %}
                    {% endfor %}
                </div><!-- /.listing-rating -->
            {% endif %}
        </div><!-- /.listing-content -->
    </div><!-- /.listing-inner -->
</div><!-- /.listing -->", "FrontBundle:Listing:box.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/box.html.twig");
    }
}
