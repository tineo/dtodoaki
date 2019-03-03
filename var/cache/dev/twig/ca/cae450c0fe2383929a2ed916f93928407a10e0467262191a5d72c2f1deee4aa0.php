<?php

/* AdminBundle:Helper:toolbar.html.twig */
class __TwigTemplate_f703eaee061e8b023a6cd9457b9af68aa5149356691211f8df3b863c947407ad extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:toolbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Helper:toolbar.html.twig"));

        // line 1
        echo "<div class=\"toolbar\">
    <div class=\"toolbar-inner\">
        <div class=\"toolbar-title\">
            <a class=\"toolbar-avatar\"
               ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", []), "getProfile", [], "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", []), "getProfile", [], "method"), "avatarImage"), "html", null, true);
            echo "');\"";
        }
        // line 6
        echo "               href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_update");
        echo "\"></a>
        </div><!-- /.toolbar-title -->

        ";
        // line 9
        $this->loadTemplate("AdminBundle::Helper/sidebar_navigation.html.twig", "AdminBundle:Helper:toolbar.html.twig", 9)->display($context);
        // line 10
        echo "
        <ul class=\"nav nav-bottom flex-column\">
            <li class=\"nav-item\">
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\" class=\"nav-link\"><i class=\"fa fa-lock\"></i></a>
            </li>

            <li class=\"nav-item\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\" class=\"nav-link\"><i class=\"fa fa-arrow-right\"></i></a>
            </li>
        </ul>
    </div><!-- /.toolbar-inner -->
</div><!-- /.toolbar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Helper:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  55 => 13,  50 => 10,  48 => 9,  41 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"toolbar\">
    <div class=\"toolbar-inner\">
        <div class=\"toolbar-title\">
            <a class=\"toolbar-avatar\"
               {% if app.user.getProfile() %}style=\"background-image: url('{{ vich_uploader_asset(app.user.getProfile(), 'avatarImage') }}');\"{% endif %}
               href=\"{{ path('profile_update') }}\"></a>
        </div><!-- /.toolbar-title -->

        {% include 'AdminBundle::Helper/sidebar_navigation.html.twig' %}

        <ul class=\"nav nav-bottom flex-column\">
            <li class=\"nav-item\">
                <a href=\"{{ path('fos_user_change_password') }}\" class=\"nav-link\"><i class=\"fa fa-lock\"></i></a>
            </li>

            <li class=\"nav-item\">
                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"nav-link\"><i class=\"fa fa-arrow-right\"></i></a>
            </li>
        </ul>
    </div><!-- /.toolbar-inner -->
</div><!-- /.toolbar -->", "AdminBundle:Helper:toolbar.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/toolbar.html.twig");
    }
}
