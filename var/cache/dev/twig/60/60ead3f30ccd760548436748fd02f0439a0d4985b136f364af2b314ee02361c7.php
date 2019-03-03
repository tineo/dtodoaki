<?php

/* FrontBundle:Post:row.html.twig */
class __TwigTemplate_85c2b6df50a41c9421284e8a2d90ff7913b9500cfc41fcc37c3afedb2045e906 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Post:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Post:row.html.twig"));

        // line 1
        echo "<div class=\"post\">
    <div class=\"post-inner\">
        ";
        // line 3
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 3, $this->source); })()), "getImageName", [], "method"))) {
            // line 4
            echo "            <a class=\"post-image\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 4, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 4, $this->source); })()), "image"), "html", null, true);
            echo "');\">
            </a><!-- /.post-image -->
        ";
        }
        // line 7
        echo "
        <div class=\"post-content\">
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->source); })()), "getCategory", [], "method")) {
            // line 10
            echo "                <span class=\"post-category\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 10, $this->source); })()), "getCategory", [], "method"), "getName", [], "method"), "html", null, true);
            echo "</span>
            ";
        }
        // line 12
        echo "
            <h3>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 14, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\">
                    ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "
                </a>
            </h3>

            <div class=\"post-excerpt\">
                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 20, $this->source); })()), "getDescription", [], "method")) {
            // line 21
            echo "                    <p>";
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 21, $this->source); })()), "getDescription", [], "method")), 0, 240) . " ..."), "html", null, true);
            echo "</p>
                ";
        }
        // line 23
        echo "            </div><!-- /.post-excerpt -->

            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 25, $this->source); })()), "getSlug", [], "method")]), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read More"), "html", null, true);
        echo "</a>
        </div><!-- /.post-content -->
    </div><!-- /.post-inner -->
</div><!-- /.post -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Post:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 23,  74 => 21,  72 => 20,  64 => 15,  60 => 14,  56 => 12,  50 => 10,  48 => 9,  44 => 7,  35 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"post\">
    <div class=\"post-inner\">
        {% if post.getImageName() is not empty %}
            <a class=\"post-image\" href=\"{{ path('post_detail', {'slug': post.getSlug()})}}\" style=\"background-image: url('{{ vich_uploader_asset(post, 'image') }}');\">
            </a><!-- /.post-image -->
        {% endif %}

        <div class=\"post-content\">
            {% if post.getCategory() %}
                <span class=\"post-category\">{{ post.getCategory().getName() }}</span>
            {% endif %}

            <h3>
                <a href=\"{{ path('post_detail', {'slug': post.getSlug()})}}\">
                    {{ post.getName() }}
                </a>
            </h3>

            <div class=\"post-excerpt\">
                {% if post.getDescription() %}
                    <p>{{ post.getDescription()|striptags[:240] ~ ' ...' }}</p>
                {% endif %}
            </div><!-- /.post-excerpt -->

            <a href=\"{{ path('post_detail', {'slug': post.getSlug() })}}\" class=\"btn\">{{ 'Read More'|trans }}</a>
        </div><!-- /.post-content -->
    </div><!-- /.post-inner -->
</div><!-- /.post -->", "FrontBundle:Post:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Post/row.html.twig");
    }
}
