<?php

/* FrontBundle:Widget:agent.html.twig */
class __TwigTemplate_240e123db138cff8a32915812ab21df6532eb2bc59cd791be6c10de2e54a1bb7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:agent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Widget:agent.html.twig"));

        // line 1
        echo "<div class=\"post-block\">
    <div ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->source); })()), "getProfile", [], "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->source); })()), "getProfile", [], "method"), "avatarImage"), "html", null, true);
            echo "');\"";
        }
        // line 3
        echo "         class=\"post-user-avatar\">
    </div><!-- /.post-user-avatar -->

    <div class=\"post-user-name\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->source); })()), "getDisplayName", [], "method"), "html", null, true);
        echo "</a>
    </div><!-- /.post-user-name -->

    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "getProfile", [], "method")) {
            // line 11
            echo "        <div class=\"post-user-meta\">
            ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "getProfile", [], "method"), "getPhone", [], "method")) {
                // line 13
                echo "                <div class=\"post-user-meta-item\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "getProfile", [], "method"), "getPhone", [], "method"), "html", null, true);
                echo "
                </div><!-- /.post-user-meta-item -->
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "getProfile", [], "method"), "getWebsite", [], "method")) {
                // line 19
                echo "                <div class=\"post-user-meta-item\">
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->source); })()), "getProfile", [], "method"), "getWebsite", [], "method"), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_trim_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "getProfile", [], "method"), "getWebsite", [], "method"), "https://"), "http://"), "html", null, true);
                echo "
                    </a>
                </div><!-- /.post-user-meta-item -->
            ";
            }
            // line 25
            echo "        </div><!-- /.post-user-meta -->

        ";
            // line 27
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "getProfile", [], "method"), "getFacebook", [], "method") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "getProfile", [], "method"), "getTwitter", [], "method")) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "getProfile", [], "method"), "getLinkedin", [], "method"))) {
                // line 28
                echo "            <div class=\"post-user-social\">
                ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->source); })()), "getProfile", [], "method"), "getFacebook", [], "method")) {
                    // line 30
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->source); })()), "getProfile", [], "method"), "getFacebook", [], "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>
                ";
                }
                // line 34
                echo "
                ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->source); })()), "getProfile", [], "method"), "getTwitter", [], "method")) {
                    // line 36
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 36, $this->source); })()), "getProfile", [], "method"), "getTwitter", [], "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>
                ";
                }
                // line 40
                echo "
                ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->source); })()), "getProfile", [], "method"), "getLinkedin", [], "method")) {
                    // line 42
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->source); })()), "getProfile", [], "method"), "getLinkedin", [], "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-linkedin\"></i>
                    </a>
                ";
                }
                // line 46
                echo "            </div><!-- /.post-user-social -->
        ";
            }
            // line 48
            echo "    ";
        }
        // line 49
        echo "</div><!-- /.post-block -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Widget:agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 49,  136 => 48,  132 => 46,  124 => 42,  122 => 41,  119 => 40,  111 => 36,  109 => 35,  106 => 34,  98 => 30,  96 => 29,  93 => 28,  91 => 27,  87 => 25,  80 => 21,  76 => 20,  73 => 19,  71 => 18,  68 => 17,  62 => 14,  59 => 13,  57 => 12,  54 => 11,  52 => 10,  44 => 7,  38 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"post-block\">
    <div {% if user.getProfile() %}style=\"background-image: url('{{ vich_uploader_asset(user.getProfile(), 'avatarImage') }}');\"{% endif %}
         class=\"post-user-avatar\">
    </div><!-- /.post-user-avatar -->

    <div class=\"post-user-name\">
        <a href=\"{{ path('agent', {'id': user.getId()}) }}\">{{ user.getDisplayName() }}</a>
    </div><!-- /.post-user-name -->

    {% if user.getProfile() %}
        <div class=\"post-user-meta\">
            {% if user.getProfile().getPhone() %}
                <div class=\"post-user-meta-item\">
                    {{ user.getProfile().getPhone() }}
                </div><!-- /.post-user-meta-item -->
            {% endif %}

            {% if user.getProfile().getWebsite() %}
                <div class=\"post-user-meta-item\">
                    <a href=\"{{ user.getProfile().getWebsite() }}\" target=\"_blank\">
                        {{ user.getProfile().getWebsite()|trim('https://')|trim('http://') }}
                    </a>
                </div><!-- /.post-user-meta-item -->
            {% endif %}
        </div><!-- /.post-user-meta -->

        {% if user.getProfile().getFacebook() or user.getProfile().getTwitter() or user.getProfile().getLinkedin()%}
            <div class=\"post-user-social\">
                {% if user.getProfile().getFacebook() %}
                    <a href=\"{{ user.getProfile().getFacebook() }}\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>
                {% endif %}

                {% if user.getProfile().getTwitter() %}
                    <a href=\"{{ user.getProfile().getTwitter() }}\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>
                {% endif %}

                {% if user.getProfile().getLinkedin() %}
                    <a href=\"{{ user.getProfile().getLinkedin() }}\">
                        <i class=\"fa fa-linkedin\"></i>
                    </a>
                {% endif %}
            </div><!-- /.post-user-social -->
        {% endif %}
    {% endif %}
</div><!-- /.post-block -->", "FrontBundle:Widget:agent.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/agent.html.twig");
    }
}
