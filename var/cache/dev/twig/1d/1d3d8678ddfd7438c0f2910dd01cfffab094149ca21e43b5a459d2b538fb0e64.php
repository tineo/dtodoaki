<?php

/* AdminBundle::Layout/base.html.twig */
class __TwigTemplate_8640612d6e05fb4da13c68f495c4be19d14a09c44b505c060db67e2642bffd49 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Layout/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::Layout/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin - Directory Platform"), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Raleway:400,500,600,700\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Playfair+Display:400\" type=\"text/css\">

    ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "24e12ff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_24e12ff_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/24e12ff_summernote_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "24e12ff_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_24e12ff_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/24e12ff_styles_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "24e12ff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_24e12ff") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/24e12ff.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "</head>

<body class=\"admin ";
        // line 20
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">

<div class=\"page-wrapper\">
    ";
        // line 23
        $this->loadTemplate("AdminBundle::Helper/toolbar.html.twig", "AdminBundle::Layout/base.html.twig", 23)->display($context);
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("AdminBundle::Helper/sidebar.html.twig", "AdminBundle::Layout/base.html.twig", 25)->display($context);
        // line 26
        echo "
    <div class=\"main\">
        <div class=\"content\">
            <div class=\"container-fluid\">
                ";
        // line 30
        $this->loadTemplate("AdminBundle::Helper/page_title.html.twig", "AdminBundle::Layout/base.html.twig", 30)->display($context);
        // line 31
        echo "
                ";
        // line 32
        $this->loadTemplate("AppBundle::Helper/messages.html.twig", "AdminBundle::Layout/base.html.twig", 32)->display($context);
        // line 33
        echo "
                ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "            </div>
        </div><!-- /.content -->
    </div><!-- /.main -->
</div><!-- /.page-wrapper -->

";
        // line 40
        if ((isset($context["google_maps_api_key"]) || array_key_exists("google_maps_api_key", $context) ? $context["google_maps_api_key"] : (function () { throw new Twig_Error_Runtime('Variable "google_maps_api_key" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "    <script src=\"//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&key=";
            echo twig_escape_filter($this->env, (isset($context["google_maps_api_key"]) || array_key_exists("google_maps_api_key", $context) ? $context["google_maps_api_key"] : (function () { throw new Twig_Error_Runtime('Variable "google_maps_api_key" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 43
        echo "
";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1d254ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1d254ac_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/1d254ac_jquery.min_1.js");
            // line 52
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1d254ac_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/1d254ac_tether.min_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1d254ac_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/1d254ac_bootstrap.min_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1d254ac_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/1d254ac_summernote.min_4.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1d254ac_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/1d254ac_jquery.collection_5.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
            // asset "1d254ac_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1d254ac_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/1d254ac_scripts_6.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        } else {
            // asset "1d254ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1d254ac") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/1d254ac.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        unset($context["asset_url"]);
        // line 54
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::Layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 34,  204 => 20,  187 => 8,  176 => 54,  132 => 52,  128 => 44,  125 => 43,  119 => 41,  117 => 40,  110 => 35,  108 => 34,  105 => 33,  103 => 32,  100 => 31,  98 => 30,  92 => 26,  90 => 25,  87 => 24,  85 => 23,  79 => 20,  75 => 18,  55 => 16,  51 => 13,  41 => 8,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">

    <title>{% block title %}{% endblock %} | {{ 'Admin - Directory Platform'|trans }}</title>
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Raleway:400,500,600,700\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Playfair+Display:400\" type=\"text/css\">

    {% stylesheets
    '@AppBundle/Resources/public/libraries/summernote/summernote.css'
    '@AdminBundle/Resources/public/css/styles.css' filter='cssrewrite' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
    {% endstylesheets %}
</head>

<body class=\"admin {% block body_class %}{% endblock %}\">

<div class=\"page-wrapper\">
    {% include 'AdminBundle::Helper/toolbar.html.twig' %}

    {% include 'AdminBundle::Helper/sidebar.html.twig' %}

    <div class=\"main\">
        <div class=\"content\">
            <div class=\"container-fluid\">
                {% include 'AdminBundle::Helper/page_title.html.twig' %}

                {% include 'AppBundle::Helper/messages.html.twig' %}

                {% block content %}{% endblock %}
            </div>
        </div><!-- /.content -->
    </div><!-- /.main -->
</div><!-- /.page-wrapper -->

{% if google_maps_api_key %}
    <script src=\"//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&key={{ google_maps_api_key }}\" type=\"text/javascript\"></script>
{% endif %}

{% javascripts
'@AppBundle/Resources/public/js/jquery.min.js'
'@AppBundle/Resources/public/js/tether.min.js'
'@AppBundle/Resources/public/js/bootstrap.min.js'
'@AppBundle/Resources/public/libraries/summernote/summernote.min.js'    
'@AppBundle/Resources/public/js/jquery.collection.js'
'@AdminBundle/Resources/public/js/scripts.js'
%}
<script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
{% endjavascripts %}
</body>
</html>", "AdminBundle::Layout/base.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Layout/base.html.twig");
    }
}
