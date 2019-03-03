<?php

/* FrontBundle:Email:inquire.html.twig */
class __TwigTemplate_172e05ef8a61e326ff894431dc4186c67749690450f4050d384b6e3bd8b3a9fa extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Email:inquire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Email:inquire.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hi,

new inquire message has been sent from <a href=\"%link%\">%listing_name%</a>.

---

<b>Name</b>

%name%

<b>Email</b>

%email%

<b>Message</b>

%message%", ["%listing_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
(isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 2, $this->source); })()), "getListing", [], "method"), "getName", [], "method"), "%link%" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", []), "getSchemeAndHttpHost", [], "method") . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listing_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 3, $this->source); })()), "getListing", [], "method"), "getSlug", [], "method")])), "%name%" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 4, $this->source); })()), "getName", [], "method"), "%email%" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 5, $this->source); })()), "getEmail", [], "method"), "%message%" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["inquire"]) || array_key_exists("inquire", $context) ? $context["inquire"] : (function () { throw new Twig_Error_Runtime('Variable "inquire" does not exist.', 6, $this->source); })()), "getMessage", [], "method")], "messages");
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Email:inquire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  49 => 5,  48 => 4,  47 => 3,  46 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans with {
\t'%listing_name%': inquire.getListing().getName(), 
\t'%link%': app.request.getSchemeAndHttpHost()~path('listing_detail', {'slug': inquire.getListing().getSlug()}),
\t'%name%': inquire.getName(),
\t'%email%': inquire.getEmail(),
\t'%message%': inquire.getMessage()
} %}
Hi,

new inquire message has been sent from <a href=\"%link%\">%listing_name%</a>.

---

<b>Name</b>

%name%

<b>Email</b>

%email%

<b>Message</b>

%message%
{% endtrans %}", "FrontBundle:Email:inquire.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Email/inquire.html.twig");
    }
}
