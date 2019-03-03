<?php

/* AdminBundle:Dashboard:index.html.twig */
class __TwigTemplate_ef33411036a4d43d7a832fb43901f318afe08b8f2ff32a51f1a6a8052e3d638a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::Layout/base.html.twig", "AdminBundle:Dashboard:index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dashboard:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dashboard:index.html.twig"));

        // line 3
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard");
        // line 5
        $context["active"] = "dashboard";
        // line 7
        $context["breadcrumbs"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard")]];
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 16, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-green\">
                <div class=\"stat-key\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Listings"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["listings_count"]) || array_key_exists("listings_count", $context) ? $context["listings_count"] : (function () { throw new Twig_Error_Runtime('Variable "listings_count" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-map-marker\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-red\">
                <div class=\"stat-key\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Users"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["users_count"]) || array_key_exists("users_count", $context) ? $context["users_count"] : (function () { throw new Twig_Error_Runtime('Variable "users_count" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-users\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-orange\">
                <div class=\"stat-key\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Reviews"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["reviews_count"]) || array_key_exists("reviews_count", $context) ? $context["reviews_count"] : (function () { throw new Twig_Error_Runtime('Variable "reviews_count" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-comments\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-blue\">
                <div class=\"stat-key\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Posts"), "html", null, true);
        echo "</div><!-- /.stat-key -->
                <div class=\"stat-value\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["posts_count"]) || array_key_exists("posts_count", $context) ? $context["posts_count"] : (function () { throw new Twig_Error_Runtime('Variable "posts_count" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-file\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        
    </div><!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recent Listings"), "html", null, true);
        echo "</h3>

            ";
        // line 57
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 57, $this->source); })()))) {
            // line 58
            echo "                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width table-center\">";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 70
                echo "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_listing_update", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                echo "\">
                                            ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listing"], "getName", [], "method"), "html", null, true);
                echo "
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["listing"], "getIsPublished", [], "method")) {
                    // line 79
                    echo "                                            <i class=\"fa fa-check\"></i>
                                        ";
                } else {
                    // line 81
                    echo "                                            <i class=\"fa fa-close\"></i>
                                        ";
                }
                // line 83
                echo "                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_listing_update", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
                echo "</a>
                                            <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_listing_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["listing"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                echo "</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            ";
        } else {
            // line 97
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No listings found."), "html", null, true);
            echo "
            ";
        }
        // line 99
        echo "        </div><!-- /.col-* -->

        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recent Posts"), "html", null, true);
        echo "</h3>

            ";
        // line 104
        if (twig_length_filter($this->env, (isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 104, $this->source); })()))) {
            // line 105
            echo "                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width table-center\">";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
            echo "</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 116, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 117
                echo "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_update", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method")]), "html", null, true);
                echo "\">
                                            ";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getName", [], "method"), "html", null, true);
                echo "
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["post"], "getIsPublished", [], "method")) {
                    // line 126
                    echo "                                            <i class=\"fa fa-check\"></i>
                                        ";
                } else {
                    // line 128
                    echo "                                            <i class=\"fa fa-close\"></i>
                                        ";
                }
                // line 130
                echo "                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_update", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
                echo "</a>
                                            <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method")]), "html", null, true);
                echo "\" class=\"btn\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                echo "</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            ";
        } else {
            // line 144
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No posts found."), "html", null, true);
            echo "
            ";
        }
        // line 146
        echo "        </div><!-- /.col-* -->        
    </div><!-- /.row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 146,  328 => 144,  321 => 139,  308 => 135,  302 => 134,  296 => 130,  292 => 128,  288 => 126,  286 => 125,  278 => 120,  274 => 119,  270 => 117,  266 => 116,  257 => 110,  253 => 109,  247 => 105,  245 => 104,  240 => 102,  235 => 99,  229 => 97,  222 => 92,  209 => 88,  203 => 87,  197 => 83,  193 => 81,  189 => 79,  187 => 78,  179 => 73,  175 => 72,  171 => 70,  167 => 69,  158 => 63,  154 => 62,  148 => 58,  146 => 57,  141 => 55,  130 => 47,  126 => 46,  116 => 39,  112 => 38,  102 => 31,  98 => 30,  88 => 23,  84 => 22,  79 => 19,  70 => 18,  52 => 16,  42 => 1,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminBundle::Layout/base.html.twig' %}

{% set title = 'Dashboard'|trans %}

{% set active = 'dashboard' %}

{% set breadcrumbs = [
    {
        'link': path('homepage'), 'title': 'Home'|trans,
    },
    {
        'link': path('admin_dashboard'), 'title': 'Dashboard'|trans,
    }
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-green\">
                <div class=\"stat-key\">{{ 'Total Listings'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ listings_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-map-marker\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-red\">
                <div class=\"stat-key\">{{ 'Total Users'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ users_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-users\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-orange\">
                <div class=\"stat-key\">{{ 'Total Reviews'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ reviews_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-comments\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        

        <div class=\"col-md-6 col-lg-3\">
            <div class=\"stat stat-blue\">
                <div class=\"stat-key\">{{ 'Total Posts'|trans }}</div><!-- /.stat-key -->
                <div class=\"stat-value\">{{ posts_count }}</div><!-- /.stat-value -->
                <div class=\"stat-icon\"><i class=\"fa fa-file\"></i></div>
            </div><!-- /.stat -->
        </div><!-- /.col-* -->        
    </div><!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">{{ 'Recent Listings'|trans }}</h3>

            {% if listings|length %}
                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>{{ 'Name'|trans }}</th>
                                <th class=\"table-min-width table-center\">{{ 'Published'|trans }}</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            {% for listing in listings %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('admin_listing_update', {'id': listing.getId()} )}}\">
                                            {{ listing.getName() }}
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        {% if listing.getIsPublished() %}
                                            <i class=\"fa fa-check\"></i>
                                        {% else %}
                                            <i class=\"fa fa-close\"></i>
                                        {% endif %}
                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('admin_listing_update', {'id': listing.getId()}) }}\" class=\"btn\">{{ 'Update'|trans }}</a>
                                            <a href=\"{{ path('admin_listing_delete', {'id': listing.getId()}) }}\" class=\"btn\">{{ 'Delete'|trans }}</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            {% endfor %}      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            {% else %}
                {{ 'No listings found.'|trans }}
            {% endif %}
        </div><!-- /.col-* -->

        <div class=\"col-lg-6\">
            <h3 class=\"page-header\">{{ 'Recent Posts'|trans }}</h3>

            {% if listings|length %}
                <div class=\"table-wrapper\">
                    <table class=\"table\">     
                        <thead>
                            <tr>
                                <th>{{ 'Name'|trans }}</th>
                                <th class=\"table-min-width table-center\">{{ 'Published'|trans }}</th>
                                <th class=\"table-min-width\"></th>
                            </tr>
                        </thead>    

                        <tbody>
                            {% for post in posts %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('admin_post_update', {'id': post.getId()} )}}\">
                                            {{ post.getName() }}
                                        </a>
                                    </td>

                                    <td class=\"table-min-width table-center table-status\">
                                        {% if post.getIsPublished() %}
                                            <i class=\"fa fa-check\"></i>
                                        {% else %}
                                            <i class=\"fa fa-close\"></i>
                                        {% endif %}
                                    </td>

                                    <td class=\"table-min-width\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('admin_post_update', {'id': post.getId()}) }}\" class=\"btn\">{{ 'Update'|trans }}</a>
                                            <a href=\"{{ path('admin_post_delete', {'id': post.getId()}) }}\" class=\"btn\">{{ 'Delete'|trans }}</a>
                                        </div><!-- /.btn-group -->
                                    </td>
                                </tr>
                            {% endfor %}      
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-wrapper -->
            {% else %}
                {{ 'No posts found.'|trans }}
            {% endif %}
        </div><!-- /.col-* -->        
    </div><!-- /.row -->
{% endblock %}", "AdminBundle:Dashboard:index.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Dashboard/index.html.twig");
    }
}
