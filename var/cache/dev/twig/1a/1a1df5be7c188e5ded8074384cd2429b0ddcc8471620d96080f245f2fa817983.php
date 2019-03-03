<?php

/* FrontBundle:Front:index.html.twig */
class __TwigTemplate_f1689c441028bea85902283ccbb4a19dffdde34e80c842a3bf956f3039a3a7e0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Front:index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_class' => [$this, 'block_body_class'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Front:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Front:index.html.twig"));

        // line 3
        $context["menu_active"] = "home";
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listing & Directory Application for Symfony"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "header-transparent";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $this->loadTemplate("FrontBundle::Helper/hero.html.twig", "FrontBundle:Front:index.html.twig", 10)->display($context);
        // line 11
        echo "
    <div class=\"container\">
        <div class=\"content mb-70\">
            ";
        // line 14
        if (twig_length_filter($this->env, (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "                ";
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle:Front:index.html.twig", 15)->display(array_merge($context, ["title" => "Discover Popular Locations", "description" => "Most visited locations in the directory platform. Missing your city? Feel free to let us know."]));
            // line 16
            echo "
                <div class=\"locations-wrapper\">
                    <div class=\"row\">
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 19, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 20
                echo "                            <div class=\"col-md-4\">
                                ";
                // line 21
                $this->loadTemplate("FrontBundle::Location/box.html.twig", "FrontBundle:Front:index.html.twig", 21)->display($context);
                // line 22
                echo "                            </div><!-- /.col-* -->
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                    </div><!-- /.row -->
                </div><!-- /.locations-wrapper -->
            ";
        }
        // line 27
        echo "
            ";
        // line 28
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "                ";
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle:Front:index.html.twig", 29)->display(array_merge($context, ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Most Recent Listings"), "description" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Find out most recent listings & classifieds added into our directory catalogue by our users.")]));
            // line 30
            echo "
                <div class=\"listings-wrapper\">
                    <div class=\"row\">
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 33, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 34
                echo "                            <div class=\"col-md-4\">
                                ";
                // line 35
                $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle:Front:index.html.twig", 35)->display($context);
                // line 36
                echo "                            </div><!-- /.col-* -->
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    </div><!-- /.row -->
                </div><!-- /.listings-wrapper -->
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "                ";
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle:Front:index.html.twig", 43)->display(array_merge($context, ["title" => "Categories & Interests", "description" => "Most popular categories in system ordered by highest number of assigned listings."]));
            // line 44
            echo "
                <div class=\"categories-wrapper\">
                    <div class=\"row\">
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 47, $this->source); })()));
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
                // line 48
                echo "                            <div class=\"col-md-3\">
                                ";
                // line 49
                $this->loadTemplate("FrontBundle::Category/box.html.twig", "FrontBundle:Front:index.html.twig", 49)->display($context);
                // line 50
                echo "                            </div><!-- /.col-* -->
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
            // line 52
            echo "                    </div><!-- /.row -->
                </div><!-- /.categories-wrapper -->

                <div class=\"btn-center\">
                    <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show All Categories"), "html", null, true);
            echo "</a>
                </div><!-- /.btn-center -->
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if (twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 60, $this->source); })()))) {
            // line 61
            echo "                ";
            $this->loadTemplate("FrontBundle::Helper/page_title.html.twig", "FrontBundle:Front:index.html.twig", 61)->display(array_merge($context, ["title" => "Browse Articles & Tips", "description" => "Read blog posts about our recommendations and experiences.", "class" => "border-top"]));
            // line 66
            echo "
                <div class=\"posts-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-10 push-md-1\">                    
                            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 70, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                echo "                    
                                ";
                // line 71
                $this->loadTemplate("FrontBundle::Post/row.html.twig", "FrontBundle:Front:index.html.twig", 71)->display($context);
                // line 72
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                        </div><!-- /.col-* -->
                    </div><!-- /.row -->                    
                </div><!-- /.posts-wrapper -->

                <div class=\"btn-center\">
                    <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\" class=\"btn btn-primary\">
                        ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show All Blog Posts"), "html", null, true);
            echo "
                    </a>
                </div><!-- /.btn-center -->
            ";
        }
        // line 83
        echo "        </div><!-- /.content -->
    </div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 83,  333 => 79,  329 => 78,  322 => 73,  308 => 72,  306 => 71,  287 => 70,  281 => 66,  278 => 61,  276 => 60,  273 => 59,  265 => 56,  259 => 52,  244 => 50,  242 => 49,  239 => 48,  222 => 47,  217 => 44,  214 => 43,  212 => 42,  209 => 41,  204 => 38,  189 => 36,  187 => 35,  184 => 34,  167 => 33,  162 => 30,  159 => 29,  157 => 28,  154 => 27,  149 => 24,  134 => 22,  132 => 21,  129 => 20,  112 => 19,  107 => 16,  104 => 15,  102 => 14,  97 => 11,  94 => 10,  85 => 9,  67 => 7,  49 => 5,  39 => 1,  37 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set menu_active = 'home' %}
    
{% block title %}{{ 'Listing & Directory Application for Symfony'|trans }}{% endblock %}

{% block body_class %}header-transparent{% endblock %}

{% block content %}
    {% include 'FrontBundle::Helper/hero.html.twig' %}

    <div class=\"container\">
        <div class=\"content mb-70\">
            {% if locations|length %}
                {% include 'FrontBundle::Helper/page_title.html.twig' with {title: \"Discover Popular Locations\", description: \"Most visited locations in the directory platform. Missing your city? Feel free to let us know.\"} %}

                <div class=\"locations-wrapper\">
                    <div class=\"row\">
                        {% for location in locations %}
                            <div class=\"col-md-4\">
                                {% include 'FrontBundle::Location/box.html.twig' %}
                            </div><!-- /.col-* -->
                        {% endfor %}
                    </div><!-- /.row -->
                </div><!-- /.locations-wrapper -->
            {% endif %}

            {% if listings|length %}
                {% include 'FrontBundle::Helper/page_title.html.twig' with {title: \"Most Recent Listings\"|trans, description: \"Find out most recent listings & classifieds added into our directory catalogue by our users.\"|trans} %}

                <div class=\"listings-wrapper\">
                    <div class=\"row\">
                        {% for listing in listings %}
                            <div class=\"col-md-4\">
                                {% include 'FrontBundle::Listing/box.html.twig' %}
                            </div><!-- /.col-* -->
                        {% endfor %}
                    </div><!-- /.row -->
                </div><!-- /.listings-wrapper -->
            {% endif %}

            {% if categories|length %}
                {% include 'FrontBundle::Helper/page_title.html.twig' with {title: \"Categories & Interests\", description: \"Most popular categories in system ordered by highest number of assigned listings.\"} %}

                <div class=\"categories-wrapper\">
                    <div class=\"row\">
                        {% for category in categories %}
                            <div class=\"col-md-3\">
                                {% include 'FrontBundle::Category/box.html.twig' %}
                            </div><!-- /.col-* -->
                        {% endfor %}
                    </div><!-- /.row -->
                </div><!-- /.categories-wrapper -->

                <div class=\"btn-center\">
                    <a href=\"{{ path('category') }}\" class=\"btn btn-primary\">{{ 'Show All Categories'|trans }}</a>
                </div><!-- /.btn-center -->
            {% endif %}

            {% if posts|length %}
                {% include 'FrontBundle::Helper/page_title.html.twig' with {
                    title: \"Browse Articles & Tips\",
                    description: \"Read blog posts about our recommendations and experiences.\",
                    class: \"border-top\"
                } %}

                <div class=\"posts-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-10 push-md-1\">                    
                            {% for post in posts %}                    
                                {% include 'FrontBundle::Post/row.html.twig' %}
                            {% endfor %}
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->                    
                </div><!-- /.posts-wrapper -->

                <div class=\"btn-center\">
                    <a href=\"{{ path('post')}}\" class=\"btn btn-primary\">
                        {{ 'Show All Blog Posts'|trans }}
                    </a>
                </div><!-- /.btn-center -->
            {% endif %}
        </div><!-- /.content -->
    </div><!-- /.container -->
{% endblock %}", "FrontBundle:Front:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Front/index.html.twig");
    }
}
