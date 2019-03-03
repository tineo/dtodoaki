<?php

/* FrontBundle:Helper:cta.html.twig */
class __TwigTemplate_9913f8b98a990f79a63eee27945ef09801160d488612100742e4f750e59a77ba extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:cta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:cta.html.twig"));

        // line 1
        echo "<div class=\"cta\">
    <div class=\"container\">
        <div class=\"cta-inner\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"cta-content\">
                        <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Get best listing notifications happening near you."), "html", null, true);
        echo "</h3>

                        <p>
                            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Once per month we will post you e-mail informing you about nearby events. We promise that we will not share your e-mail address. You can always have an option to unsubscribe."), "html", null, true);
        echo "
                        </p>
                    </div><!-- /.cta-content -->
                </div><!-- /.col-* -->

                <div class=\"col-md-4\">
                    <div class=\"cta-form\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrontBundle:Subscriber:form", ["request" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "request", [])]));
        echo "
                    </div><!-- /.cta-form -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.cta-inner -->
    </div><!-- /.container -->
</div><!-- /.cta -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Helper:cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  43 => 10,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"cta\">
    <div class=\"container\">
        <div class=\"cta-inner\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"cta-content\">
                        <h3>{{ 'Get best listing notifications happening near you.'|trans }}</h3>

                        <p>
                            {{ 'Once per month we will post you e-mail informing you about nearby events. We promise that we will not share your e-mail address. You can always have an option to unsubscribe.'|trans }}
                        </p>
                    </div><!-- /.cta-content -->
                </div><!-- /.col-* -->

                <div class=\"col-md-4\">
                    <div class=\"cta-form\">
                        {{ render(controller('FrontBundle:Subscriber:form', {request: app.request})) }}
                    </div><!-- /.cta-form -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.cta-inner -->
    </div><!-- /.container -->
</div><!-- /.cta -->", "FrontBundle:Helper:cta.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/cta.html.twig");
    }
}
