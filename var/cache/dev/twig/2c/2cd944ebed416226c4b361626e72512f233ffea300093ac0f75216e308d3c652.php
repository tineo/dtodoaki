<?php

/* FrontBundle::Helper/header.html.twig */
class __TwigTemplate_07cae3d6991b776af53331c1e827275da470aacddf9b4488888f53901f2efdd3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/header.html.twig"));

        // line 1
        echo "<div class=\"header-wrapper\">
    <div class=\"header\">
        <div class=\"container";
        // line 3
        if ((isset($context["fullwidth"]) || array_key_exists("fullwidth", $context))) {
            echo "-fluid";
        }
        echo "\">
            <div class=\"header-brand\">
                <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                    <span class=\"header-brand-image\">                        
                        <svg width=\"40px\" height=\"50px\" viewBox=\"0 0 40 50\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <defs></defs>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"logo\" transform=\"translate(-20.000000, -15.000000)\" stroke=\"#FF1D47\" stroke-width=\"3\">
                                    <g id=\"Marker\" transform=\"translate(22.000000, 17.000000)\">
                                        <path d=\"M18,45.2332275 C30,33.8305966 36,24.7932582 36,18.1212121 C36,8.11314302 27.9411255,0 18,0 C8.0588745,0 0,8.11314302 0,18.1212121 C0,24.7932582 6,33.8305966 18,45.2332275 Z\" id=\"Oval\"></path>
                                        <ellipse id=\"Oval-2\" cx=\"18\" cy=\"16.7272727\" rx=\"5.53846154\" ry=\"5.57575758\"></ellipse>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        ";
        // line 23
        echo "                    </span><!-- /.header-brand-image -->

                    <span class=\"header-brand-title\">
                        <!--<strong>Dtodoaqui</strong><span>App</span>-->
                        <strong>Dtodoaqui</strong>
                    </span><!-- /.header-brand-title -->
                </a>
            </div><!-- /.header-brand -->

            <div class=\"header-nav-primary\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"nav-link ";
        if (((isset($context["menu_active"]) || array_key_exists("menu_active", $context)) && ((isset($context["menu_active"]) || array_key_exists("menu_active", $context) ? $context["menu_active"] : (function () { throw new Twig_Error_Runtime('Variable "menu_active" does not exist.', 35, $this->source); })()) == "home"))) {
            echo "active";
        }
        echo "\">
                            ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        echo "
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing");
        echo "\" class=\"nav-link ";
        if (((isset($context["menu_active"]) || array_key_exists("menu_active", $context)) && ((isset($context["menu_active"]) || array_key_exists("menu_active", $context) ? $context["menu_active"] : (function () { throw new Twig_Error_Runtime('Variable "menu_active" does not exist.', 41, $this->source); })()) == "listings"))) {
            echo "active";
        }
        echo "\">
                            ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings"), "html", null, true);
        echo "
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
        echo "\" class=\"nav-link ";
        if (((isset($context["menu_active"]) || array_key_exists("menu_active", $context)) && ((isset($context["menu_active"]) || array_key_exists("menu_active", $context) ? $context["menu_active"] : (function () { throw new Twig_Error_Runtime('Variable "menu_active" does not exist.', 47, $this->source); })()) == "posts"))) {
            echo "active";
        }
        echo "\">
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Blog"), "html", null, true);
        echo "
                        </a> 
                    </li><!-- /.nav-item -->                    
                    
                    ";
        // line 67
        echo "                </ul><!-- /.nav -->
            </div><!-- /.header-nav-primary -->

            <div class=\"header-nav-secondary\">
                <ul class=\"nav\">
                    ";
        // line 72
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->source); })()), "user", [])) {
            // line 73
            echo "                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-login\">
                                ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
            echo "
                            </a>
                        </li>

                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-register\">
                                ";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register"), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 85
        echo "
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_create");
        echo "\" class=\"nav-link nav-btn\">
                            <i class=\"fa fa-plus\"></i> ";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Listing"), "html", null, true);
        echo "
                        </a>
                    </li>
                </ul>
            </div><!-- /.header-nav-secondary -->

            ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->source); })()), "user", [])) {
            // line 95
            echo "                <div class=\"header-nav-user\">
                    <ul class=\"nav\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                ";
            // line 99
            ob_start();
            // line 100
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "user", []), "profile", []) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "user", []), "profile", []), "getAvatarName", [], "method"))) {
                // line 101
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 101, $this->source); })()), "user", []), "profile", []), "avatarImage"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 101, $this->source); })()), "user", []), "getProfile", [], "method"), "getDisplayName", [], "method"), "html", null, true);
                echo "\">
                                    ";
            } else {
                // line 103
                echo "                                        <div class=\"dropdown-avatar\">
                                            ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "user", []), "profile", [])) {
                    // line 105
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 105, $this->source); })()), "user", []), "profile", []), "getInitials", [], "method"), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 107
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 107, $this->source); })()), "user", []), "getUsername", [], "method")), "html", null, true);
                    echo "
                                            ";
                }
                // line 109
                echo "                                        </div><!-- /.dropdown-avatar -->
                                    ";
            }
            // line 111
            echo "
                                    ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 112, $this->source); })()), "user", []), "getProfile", [], "method")) {
                // line 113
                echo "                                        <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 113, $this->source); })()), "user", []), "getProfile", [], "method"), "getDisplayName", [], "method"), "html", null, true);
                echo "</span>
                                    ";
            } else {
                // line 115
                echo "                                        <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 115, $this->source); })()), "user", []), "getUsername", [], "method"), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 117
            echo "                                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 118
            echo "                            </a>

                            <div class=\"dropdown-menu\" aria-labelledby=\"header-dropdown\">
                                ";
            // line 121
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->source); })()), "user", []), "hasRole", [0 => "ROLE_SUPER_ADMIN"], "method")) {
                // line 122
                echo "                                    <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin Dashboard"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 124
            echo "
                                <a class=\"dropdown-item\" href=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listings"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorite");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favorites"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 127
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searches"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders"), "html", null, true);
            echo "</a>                                
                                <a class=\"dropdown-item\" href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_update");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your Profile"), "html", null, true);
            echo "</a>                                
                                <a class=\"dropdown-item\" href=\"";
            // line 130
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change Password"), "html", null, true);
            echo "</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 131
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
            echo "</a>
                            </div>
                        </li>

                        <li class=\"nav-item shopping-cart\">
                            <a href=\"";
            // line 136
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\" class=\"nav-link\">
                                <i class=\"fa fa-shopping-cart\"></i>

                                <span class=\"shopping-cart-title\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shopping cart"), "html", null, true);
            echo "</span>

                                <span class=\"badge\">";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['DirectoryPlatform\AppBundle\Twig\CartExtension']->getCount($this->env), "html", null, true);
            echo "</span><!-- /.badge -->
                            </a><!-- /.nav-link -->
                        </li><!-- /.shopping-cart -->
                    </ul><!-- /.nav -->
                </div><!-- /.header-nav-user -->
            ";
        }
        // line 147
        echo "        </div><!-- /.container -->
    </div><!-- /.header -->

    <div class=\"header-toggle\">
        <span>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle Navigation"), "html", null, true);
        echo "</span>
    </div><!-- /.header-toggle -->
</div><!-- /.header-wrapper -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 151,  315 => 147,  306 => 141,  301 => 139,  295 => 136,  285 => 131,  279 => 130,  273 => 129,  267 => 128,  261 => 127,  255 => 126,  249 => 125,  246 => 124,  238 => 122,  236 => 121,  231 => 118,  228 => 117,  222 => 115,  216 => 113,  214 => 112,  211 => 111,  207 => 109,  201 => 107,  195 => 105,  193 => 104,  190 => 103,  182 => 101,  179 => 100,  177 => 99,  171 => 95,  169 => 94,  160 => 88,  156 => 87,  152 => 85,  145 => 81,  141 => 80,  133 => 75,  129 => 74,  126 => 73,  124 => 72,  117 => 67,  110 => 48,  102 => 47,  94 => 42,  86 => 41,  78 => 36,  70 => 35,  56 => 23,  40 => 5,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header-wrapper\">
    <div class=\"header\">
        <div class=\"container{% if fullwidth is defined %}-fluid{% endif %}\">
            <div class=\"header-brand\">
                <a href=\"{{ path('homepage') }}\">
                    <span class=\"header-brand-image\">                        
                        <svg width=\"40px\" height=\"50px\" viewBox=\"0 0 40 50\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <defs></defs>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"logo\" transform=\"translate(-20.000000, -15.000000)\" stroke=\"#FF1D47\" stroke-width=\"3\">
                                    <g id=\"Marker\" transform=\"translate(22.000000, 17.000000)\">
                                        <path d=\"M18,45.2332275 C30,33.8305966 36,24.7932582 36,18.1212121 C36,8.11314302 27.9411255,0 18,0 C8.0588745,0 0,8.11314302 0,18.1212121 C0,24.7932582 6,33.8305966 18,45.2332275 Z\" id=\"Oval\"></path>
                                        <ellipse id=\"Oval-2\" cx=\"18\" cy=\"16.7272727\" rx=\"5.53846154\" ry=\"5.57575758\"></ellipse>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        {#
                        The logo

                        <img src=\"{{ asset('bundles/front/img/logo.svg') }}\" alt=\"{{ 'Home'|trans }}\" class=\"image-svg\">
                        #}
                    </span><!-- /.header-brand-image -->

                    <span class=\"header-brand-title\">
                        <!--<strong>Dtodoaqui</strong><span>App</span>-->
                        <strong>Dtodoaqui</strong>
                    </span><!-- /.header-brand-title -->
                </a>
            </div><!-- /.header-brand -->

            <div class=\"header-nav-primary\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('homepage') }}\" class=\"nav-link {% if menu_active is defined and menu_active == 'home' %}active{% endif %}\">
                            {{ 'Home'|trans }}
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"{{ path('listing') }}\" class=\"nav-link {% if menu_active is defined and menu_active == 'listings' %}active{% endif %}\">
                            {{ 'Listings'|trans }}
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class=\"nav-item\">
                        <a href=\"{{ path('post') }}\" class=\"nav-link {% if menu_active is defined and menu_active == 'posts' %}active{% endif %}\">
                            {{ 'Blog'|trans }}
                        </a> 
                    </li><!-- /.nav-item -->                    
                    
                    {#
                    <li class=\"nav-item dropdown\">
                        <a href=\"{{ path('listing') }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            {{ 'Locations'|trans }}
                        </a> 

                        <div class=\"dropdown-menu\">
                            <a href=\"#\" class=\"dropdown-item\">Item 1</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 2</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 3</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 4</a>
                            <a href=\"#\" class=\"dropdown-item\">Item 5</a>
                        </div><!-- /.sub-menu -->
                    </li><!-- /.nav-item -->                    
                    #}
                </ul><!-- /.nav -->
            </div><!-- /.header-nav-primary -->

            <div class=\"header-nav-secondary\">
                <ul class=\"nav\">
                    {% if not app.user %}
                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"{{ path('fos_user_security_login') }}\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-login\">
                                {{ 'Login'|trans }}
                            </a>
                        </li>

                        <li class=\"nav-item hidden-sm-down\">
                            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#modal-register\">
                                {{ 'Register'|trans }}
                            </a>
                        </li>
                    {% endif %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('listing_create')}}\" class=\"nav-link nav-btn\">
                            <i class=\"fa fa-plus\"></i> {{ 'Add Listing'|trans }}
                        </a>
                    </li>
                </ul>
            </div><!-- /.header-nav-secondary -->

            {% if app.user %}
                <div class=\"header-nav-user\">
                    <ul class=\"nav\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                {% spaceless %}
                                    {% if app.user.profile and app.user.profile.getAvatarName() %}
                                        <img src=\"{{ vich_uploader_asset(app.user.profile, 'avatarImage') }}\" alt=\"{{ app.user.getProfile().getDisplayName() }}\">
                                    {% else %}
                                        <div class=\"dropdown-avatar\">
                                            {% if app.user.profile %}
                                                {{ app.user.profile.getInitials() }}
                                            {% else %}
                                                {{ app.user.getUsername()|first }}
                                            {% endif %}
                                        </div><!-- /.dropdown-avatar -->
                                    {% endif %}

                                    {% if app.user.getProfile() %}
                                        <span>{{ app.user.getProfile().getDisplayName() }}</span>
                                    {% else %}
                                        <span>{{ app.user.getUsername() }}</span>
                                    {% endif %}
                                {% endspaceless %}
                            </a>

                            <div class=\"dropdown-menu\" aria-labelledby=\"header-dropdown\">
                                {% if app.user.hasRole('ROLE_SUPER_ADMIN') %}
                                    <a class=\"dropdown-item\" href=\"{{ path('admin_dashboard') }}\">{{ 'Admin Dashboard'|trans }}</a>
                                {% endif %}

                                <a class=\"dropdown-item\" href=\"{{ path('listing_my') }}\">{{ 'Listings'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('favorite') }}\">{{ 'Favorites'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('search') }}\">{{ 'Searches'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('order') }}\">{{ 'Orders'|trans }}</a>                                
                                <a class=\"dropdown-item\" href=\"{{ path('profile_update') }}\">{{ 'Your Profile'|trans }}</a>                                
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">{{ 'Change Password'|trans }}</a>
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'Logout'|trans }}</a>
                            </div>
                        </li>

                        <li class=\"nav-item shopping-cart\">
                            <a href=\"{{ path('cart') }}\" class=\"nav-link\">
                                <i class=\"fa fa-shopping-cart\"></i>

                                <span class=\"shopping-cart-title\">{{ 'Shopping cart'|trans }}</span>

                                <span class=\"badge\">{{ cart_get_count() }}</span><!-- /.badge -->
                            </a><!-- /.nav-link -->
                        </li><!-- /.shopping-cart -->
                    </ul><!-- /.nav -->
                </div><!-- /.header-nav-user -->
            {% endif %}
        </div><!-- /.container -->
    </div><!-- /.header -->

    <div class=\"header-toggle\">
        <span>{{ 'Toggle Navigation'|trans }}</span>
    </div><!-- /.header-toggle -->
</div><!-- /.header-wrapper -->", "FrontBundle::Helper/header.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/header.html.twig");
    }
}
