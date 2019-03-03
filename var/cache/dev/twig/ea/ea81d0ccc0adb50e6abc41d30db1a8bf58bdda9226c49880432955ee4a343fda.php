<?php

/* FrontBundle:Helper:footer.html.twig */
class __TwigTemplate_38bff4102333b7373d820a92b5d9470f89760d126e048cb022a4779066aff34a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Helper:footer.html.twig"));

        // line 1
        echo "<div class=\"footer-wrapper\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-left\">
                <p>
                    &copy; ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All rights reserved."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created by"), "html", null, true);
        echo " <a href=\"http://tineo.mobi\">@itsudatte</a>.
                </p>
            </div><!-- /.footer-left-->

            <div class=\"footer-right\">
                <ul>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>

                    <li>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>

                    <li>
                        <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                    </li>
                </ul>
            </div><!-- /.footer-right -->
        </div><!-- /.container -->
    </div><!-- /.footer -->
</div><!-- /.footer-wrapper -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Helper:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-wrapper\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-left\">
                <p>
                    &copy; {{ 'now'|date('Y') }} {{ 'All rights reserved.'|trans }} {{ 'Created by'|trans }} <a href=\"http://tineo.mobi\">@itsudatte</a>.
                </p>
            </div><!-- /.footer-left-->

            <div class=\"footer-right\">
                <ul>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>

                    <li>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>

                    <li>
                        <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                    </li>
                </ul>
            </div><!-- /.footer-right -->
        </div><!-- /.container -->
    </div><!-- /.footer -->
</div><!-- /.footer-wrapper -->", "FrontBundle:Helper:footer.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/footer.html.twig");
    }
}
