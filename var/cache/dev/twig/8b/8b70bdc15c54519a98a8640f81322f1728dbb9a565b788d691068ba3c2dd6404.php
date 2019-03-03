<?php

/* FrontBundle:Review:row.html.twig */
class __TwigTemplate_4d2a419b2bbaf8099bbe6a846b8a316bfdbe8aaf0368be06842288ec92c7a34a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Review:row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Review:row.html.twig"));

        // line 1
        echo "<div class=\"review\">
    <div class=\"review-author\">
        <div class=\"review-author-avatar\" 
             ";
        // line 4
        if (((twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 4, $this->source); })()), "getUser", [], "method") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 4, $this->source); })()), "getUser", [], "method"), "getProfile", [], "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 4, $this->source); })()), "getUser", [], "method"), "getProfile", [], "method"), "getAvatarImage", [], "method"))) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 4, $this->source); })()), "getUser", [], "method"), "getProfile", [], "method"), "avatarImage"), "html", null, true);
            echo "');\"";
        }
        echo ">
        </div><!-- /.review-author-avatar -->
    </div><!-- /.review-author -->

    <div class=\"review-content\">
        <div class=\"review-meta\">
            <div class=\"review-meta-author-name\">
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 11, $this->source); })()), "getUser", [], "method")) {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 12, $this->source); })()), "getUser", [], "method"), "getDisplayName", [], "method"), "html", null, true);
            echo "
                ";
        } else {
            // line 14
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 14, $this->source); })()), "getName", [], "method"), "html", null, true);
            echo "
                ";
        }
        // line 16
        echo "            </div><!-- /.review-meta-author-name -->

            <div class=\"review-meta-date\">
                ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 19, $this->source); })()), "getCreated", [], "method")), "html", null, true);
        echo "
            </div><!-- /.review-meta-date -->
        </div><!-- /.review-meta -->

        <div class=\"review-description\">
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 24, $this->source); })()), "getDescription", [], "method"), "html", null, true);
        echo "
        </div><!-- /.review-description -->
    </div><!-- /.review-content -->

    ";
        // line 28
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 28, $this->source); })()), "getRatings", [], "method"))) {
            // line 29
            echo "        <div class=\"review-ratings\">
            <div class=\"row\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 31, $this->source); })()), "getRatings", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 32
                echo "                    <div class=\"col-sm-4\">
                        <div class=\"rating-wrapper\">
                            <strong>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "getLabel", [], "method"), "html", null, true);
                echo "</strong>

                            <select class=\"rating\" data-value=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "getValue", [], "method"), "html", null, true);
                echo "\" data-max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "getMax", [], "method"), "html", null, true);
                echo "\">
                                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["rating"], "getMax", [], "method")));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 38
                    echo "                                    <option ";
                    if ((abs(twig_get_attribute($this->env, $this->source, $context["rating"], "getValue", [], "method")) == $context["i"])) {
                        echo "selected";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                            </select>
                        </div><!-- /.rating-wrapper -->
                    </div><!-- /.col-* -->
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div><!-- /.row -->
        </div><!-- /.ratings -->
    ";
        }
        // line 47
        echo "</div><!-- /.review -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Review:row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  135 => 44,  126 => 40,  111 => 38,  107 => 37,  101 => 36,  96 => 34,  92 => 32,  88 => 31,  84 => 29,  82 => 28,  75 => 24,  67 => 19,  62 => 16,  56 => 14,  50 => 12,  48 => 11,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"review\">
    <div class=\"review-author\">
        <div class=\"review-author-avatar\" 
             {% if review.getUser() and review.getUser().getProfile() and review.getUser().getProfile().getAvatarImage() %}style=\"background-image: url('{{ vich_uploader_asset(review.getUser().getProfile(), 'avatarImage') }}');\"{% endif %}>
        </div><!-- /.review-author-avatar -->
    </div><!-- /.review-author -->

    <div class=\"review-content\">
        <div class=\"review-meta\">
            <div class=\"review-meta-author-name\">
                {% if review.getUser() %}
                    {{ review.getUser().getDisplayName() }}
                {% else %}
                    {{ review.getName() }}
                {% endif %}
            </div><!-- /.review-meta-author-name -->

            <div class=\"review-meta-date\">
                {{ review.getCreated()|date }}
            </div><!-- /.review-meta-date -->
        </div><!-- /.review-meta -->

        <div class=\"review-description\">
            {{ review.getDescription() }}
        </div><!-- /.review-description -->
    </div><!-- /.review-content -->

    {% if review.getRatings()|length %}
        <div class=\"review-ratings\">
            <div class=\"row\">
                {% for rating in review.getRatings() %}
                    <div class=\"col-sm-4\">
                        <div class=\"rating-wrapper\">
                            <strong>{{ rating.getLabel() }}</strong>

                            <select class=\"rating\" data-value=\"{{ rating.getValue() }}\" data-max=\"{{ rating.getMax() }}\">
                                {% for i in range(1, rating.getMax()) %}
                                    <option {% if rating.getValue()|abs == i %}selected{% endif %} value=\"{{ i }}\">{{ i }}</option>
                                {% endfor %}
                            </select>
                        </div><!-- /.rating-wrapper -->
                    </div><!-- /.col-* -->
                {% endfor %}
            </div><!-- /.row -->
        </div><!-- /.ratings -->
    {% endif %}
</div><!-- /.review -->", "FrontBundle:Review:row.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Review/row.html.twig");
    }
}
