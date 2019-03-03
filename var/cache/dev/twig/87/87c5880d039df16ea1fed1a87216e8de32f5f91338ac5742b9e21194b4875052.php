<?php

/* AdamQuaileFieldsetBundle:Types:fieldset.html.twig */
class __TwigTemplate_7da00e5fedadfce22a1547f0f93dd09e2b4f156bba6b654a090b5ade8d576c92 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'fieldset_widget' => [$this, 'block_fieldset_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdamQuaileFieldsetBundle:Types:fieldset.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdamQuaileFieldsetBundle:Types:fieldset.html.twig"));

        // line 1
        $this->displayBlock('fieldset_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_fieldset_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        // line 2
        echo "        <fieldset ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">

            ";
        // line 4
        if (((isset($context["legend"]) || array_key_exists("legend", $context)) &&  !twig_test_empty((isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new Twig_Error_Runtime('Variable "legend" does not exist.', 4, $this->source); })())))) {
            // line 5
            echo "                <legend>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new Twig_Error_Runtime('Variable "legend" does not exist.', 5, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 5, $this->source); })())), "html", null, true);
            echo "</legend>
            ";
        }
        // line 7
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'widget');
        echo "

        </fieldset>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdamQuaileFieldsetBundle:Types:fieldset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  56 => 5,  54 => 4,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block fieldset_widget %}
        <fieldset {{ block('widget_container_attributes') }}>

            {% if legend is defined and legend is not empty %}
                <legend>{{ legend | trans({}, translation_domain) }}</legend>
            {% endif %}
            {{ form_widget(form) }}

        </fieldset>
{% endblock %}", "AdamQuaileFieldsetBundle:Types:fieldset.html.twig", "/home/tineo/directory-platform/vendor/adamquaile/symfony-fieldset-bundle/Resources/views/Types/fieldset.html.twig");
    }
}
