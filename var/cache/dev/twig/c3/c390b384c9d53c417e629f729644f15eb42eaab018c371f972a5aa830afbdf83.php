<?php

/* FrontBundle:Cart:index.html.twig */
class __TwigTemplate_ca8d36fd707690066e8ad2f08393ce36ddf8b78b0c991295f87e7e8d79304bd6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Cart:index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Cart:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Cart:index.html.twig"));

        // line 3
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shopping Cart");
        // line 7
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shopping Cart")]];
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
    <div class=\"container\">
        ";
        // line 18
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle:Cart:index.html.twig", 18)->display($context);
        // line 19
        echo "
        ";
        // line 20
        if (twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "            <div class=\"cart-content\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 23
                echo "                    <div class=\"cart-content-item\">
                            ";
                // line 24
                ob_start();
                // line 25
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "type", []) == "pay_for_publish")) {
                    // line 26
                    echo "                                    <div class=\"cart-content-item-cell min-width remove\">
                                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["type" => "pay_for_publish", "listing_id" => twig_get_attribute($this->env, $this->source, $context["product"], "listing_id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i></a>
                                    </div><!-- /.cart-content-item-cell -->

                                    <div class=\"cart-content-item-cell\">
                                        <h3>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publish listing"), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "listing", []), "getSlug", [], "method")]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "listing", []), "getName", [], "method"), "html", null, true);
                    echo "</a></h3>

                                        <p>
                                            ";
                    // line 34
                    $context["count"] = twig_get_attribute($this->env, $this->source, $context["product"], "duration", []);
                    // line 35
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("{0} Will be published for %count% days|{1} Will be published for %count% day|]1,Inf[ Will be published for %count% days", (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 35, $this->source); })()), ["%count%" => (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 35, $this->source); })())], "messages");
                    // line 38
                    echo "                                        </p>
                                    </div><!-- /.cart-content-item-cell -->
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 40
$context["product"], "type", []) == "pay_for_featured")) {
                    // line 41
                    echo "                                    <div class=\"cart-content-item-cell min-width remove\">
                                        <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["type" => "pay_for_featured", "listing_id" => twig_get_attribute($this->env, $this->source, $context["product"], "listing_id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i></a>
                                    </div><!-- /.cart-content-item-cell -->

                                    <div class=\"cart-content-item-cell\">
                                        <h3>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature listing"), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "listing", []), "getSlug", [], "method")]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "listing", []), "getName", [], "method"), "html", null, true);
                    echo "</a></h3>

                                        ";
                    // line 48
                    ob_start();
                    echo "                                                                        
                                            <p>
                                                ";
                    // line 50
                    $context["count"] = twig_get_attribute($this->env, $this->source, $context["product"], "duration", []);
                    // line 51
                    echo "                                                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("{0} Will be featured for %count% days|{1} Will be featured for %count% day|]1,Inf[ Will be featured for %count% days", (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 51, $this->source); })()), ["%count%" => (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 51, $this->source); })())], "messages");
                    // line 54
                    echo "                                            </p>
                                        ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 56
                    echo "                                    </div><!-- /.cart-content-item-cell -->
                                ";
                }
                // line 58
                echo "                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 59
                echo "
                        <div class=\"cart-content-item-cell right min-width price\">
                            ";
                // line 61
                echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, $context["product"], "price", []), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 61, $this->source); })())), "html", null, true);
                echo "
                        </div>
                    </div><!-- /.cart-content-item -->
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </div><!-- /.cart-content -->

            <div class=\"cart-content-total\">
                <span>";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Price"), "html", null, true);
            echo "</span>
                <strong>";
            // line 69
            echo twig_escape_filter($this->env, twig_localized_currency_filter((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 69, $this->source); })()), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 69, $this->source); })())), "html", null, true);
            echo "</strong>
            </div>


            <div class=\"cart-actions\">
                <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_empty");
            echo "\" class=\"btn\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Empty cart"), "html", null, true);
            echo "</a>

                <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Proceed to checkout"), "html", null, true);
            echo "</a>
            </div><!-- /.cart-actions -->
        ";
        } else {
            // line 79
            echo "            <div class=\"empty\">
                <div class=\"empty-icon-wrapper\">
                    <div class=\"empty-icon\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </div><!-- /.empty-icon -->
                </div><!-- /.empty-icon-wrapper -->

                <div class=\"empty-content\">
                    <h4>";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No products found"), "html", null, true);
            echo "</h4>
                    <p>";
            // line 88
            echo "It looks like that you don't have any product in your cart.";
            echo "</p>
                </div><!-- /.empty-content -->

                <a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to homepage"), "html", null, true);
            echo "</a>
            </div><!-- /.empty -->
        ";
        }
        // line 94
        echo "    </div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Cart:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 94,  239 => 91,  233 => 88,  229 => 87,  219 => 79,  211 => 76,  204 => 74,  196 => 69,  192 => 68,  187 => 65,  177 => 61,  173 => 59,  170 => 58,  166 => 56,  162 => 54,  159 => 51,  157 => 50,  152 => 48,  143 => 46,  136 => 42,  133 => 41,  131 => 40,  127 => 38,  124 => 35,  122 => 34,  112 => 31,  105 => 27,  102 => 26,  99 => 25,  97 => 24,  94 => 23,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  68 => 16,  50 => 5,  40 => 1,  38 => 7,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set title = 'Shopping Cart'|trans %}

{% block title %}{{ title }}{% endblock %}

{% set breadcrumbs = [
    {
        'link': path('homepage'), 'title': 'Home'|trans,
    },
    {
        'title': 'Shopping Cart'|trans
    }
] %}

{% block content %}    
    <div class=\"container\">
        {% include 'FrontBundle::Helper/content_title.html.twig' %}

        {% if products|length %}
            <div class=\"cart-content\">
                {% for product in products %}
                    <div class=\"cart-content-item\">
                            {% spaceless %}
                                {% if product.type == 'pay_for_publish' %}
                                    <div class=\"cart-content-item-cell min-width remove\">
                                        <a href=\"{{ path('cart_delete', {'type': 'pay_for_publish', 'listing_id': product.listing_id}) }}\"><i class=\"fa fa-close\"></i></a>
                                    </div><!-- /.cart-content-item-cell -->

                                    <div class=\"cart-content-item-cell\">
                                        <h3>{{ 'Publish listing'|trans }} <a href=\"{{ path('listing_detail', {'slug': product.listing.getSlug()}) }}\">{{ product.listing.getName() }}</a></h3>

                                        <p>
                                            {% set count = product.duration %}
                                            {% transchoice count %}
                                                {0} Will be published for %count% days|{1} Will be published for %count% day|]1,Inf[ Will be published for %count% days
                                            {% endtranschoice %}
                                        </p>
                                    </div><!-- /.cart-content-item-cell -->
                                {% elseif product.type == 'pay_for_featured' %}
                                    <div class=\"cart-content-item-cell min-width remove\">
                                        <a href=\"{{ path('cart_delete', {'type': 'pay_for_featured', 'listing_id': product.listing_id}) }}\"><i class=\"fa fa-close\"></i></a>
                                    </div><!-- /.cart-content-item-cell -->

                                    <div class=\"cart-content-item-cell\">
                                        <h3>{{ 'Feature listing'|trans }} <a href=\"{{ path('listing_detail', {'slug': product.listing.getSlug()}) }}\">{{ product.listing.getName() }}</a></h3>

                                        {% spaceless %}                                                                        
                                            <p>
                                                {% set count = product.duration %}
                                                {% transchoice count %}
                                                    {0} Will be featured for %count% days|{1} Will be featured for %count% day|]1,Inf[ Will be featured for %count% days
                                                {% endtranschoice %}
                                            </p>
                                        {% endspaceless %}
                                    </div><!-- /.cart-content-item-cell -->
                                {% endif %}
                            {% endspaceless %}

                        <div class=\"cart-content-item-cell right min-width price\">
                            {{ product.price|localizedcurrency(currency) }}
                        </div>
                    </div><!-- /.cart-content-item -->
                {% endfor %}
            </div><!-- /.cart-content -->

            <div class=\"cart-content-total\">
                <span>{{ 'Total Price'|trans }}</span>
                <strong>{{ total|localizedcurrency(currency) }}</strong>
            </div>


            <div class=\"cart-actions\">
                <a href=\"{{ path('cart_empty') }}\" class=\"btn\">{{ 'Empty cart'|trans }}</a>

                <a href=\"{{ path('checkout') }}\" class=\"btn btn-primary\">{{ 'Proceed to checkout'|trans }}</a>
            </div><!-- /.cart-actions -->
        {% else %}
            <div class=\"empty\">
                <div class=\"empty-icon-wrapper\">
                    <div class=\"empty-icon\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </div><!-- /.empty-icon -->
                </div><!-- /.empty-icon-wrapper -->

                <div class=\"empty-content\">
                    <h4>{{ 'No products found'|trans }}</h4>
                    <p>{{ 'It looks like that you don\\'t have any product in your cart.' }}</p>
                </div><!-- /.empty-content -->

                <a href=\"{{ path('homepage') }}\" class=\"btn btn-primary\">{{ 'Back to homepage'|trans }}</a>
            </div><!-- /.empty -->
        {% endif %}
    </div><!-- /.container -->
{% endblock %}", "FrontBundle:Cart:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Cart/index.html.twig");
    }
}
