<?php

/* FrontBundle:Listing:detail.html.twig */
class __TwigTemplate_1488a6052ae7e404d90de43c5896144c48aee622fb5f0b2b43a335caa4080b41 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle:Listing:detail.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Listing:detail.html.twig"));

        // line 3
        $context["menu_active"] = "listings";
        // line 5
        $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 5, $this->source); })()), "getName", [], "method");
        // line 7
        $context["actions"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Claim"), "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("claim_create", ["id" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 10, $this->source); })()), "getId", [], "method")])], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favorite"), "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorite_add", ["id" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 14, $this->source); })()), "getId", [], "method")])]];
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 18, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 21, $this->source); })()), "getHeader", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_GALLERY"))) {
            // line 22
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/gallery.html.twig", "FrontBundle:Listing:detail.html.twig", 22)->display($context);
            // line 23
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 23, $this->source); })()), "getHeader", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_SINGLE_IMAGE"))) {
            // line 24
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/image.html.twig", "FrontBundle:Listing:detail.html.twig", 24)->display($context);
            // line 25
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 25, $this->source); })()), "getHeader", [], "method") == twig_constant("DirectoryPlatform\\AppBundle\\Entity\\Listing::HEADER_MAP"))) {
            // line 26
            echo "        ";
            $this->loadTemplate("FrontBundle::Listing/Header/map.html.twig", "FrontBundle:Listing:detail.html.twig", 26)->display($context);
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        <div class=\"container\">
            ";
            // line 29
            $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle:Listing:detail.html.twig", 29)->display($context);
            // line 30
            echo "        </div><!-- /.container -->
    ";
        }
        // line 32
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 col-lg-8\">
                <div class=\"content\">
                    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 37, $this->source); })()), "getDescription", [], "method")) {
            // line 38
            echo "                        <div class=\"post-block post-block-description\">
                            <h3>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
            echo "</h3>

                            ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 41, $this->source); })()), "getDescription", []);
            echo "
                        </div><!-- /.post-block -->
                    ";
        }
        // line 44
        echo "
                    ";
        // line 45
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 45, $this->source); })()), "getAmenities", [], "method"))) {
            // line 46
            echo "                        <div class=\"post-block post-block-amenities\">
                            <h3>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amenities"), "html", null, true);
            echo "</h3>

                            <ul>
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 50, $this->source); })()), "getAmenities", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 51
                echo "                                    <li>
                                        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amenity_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["amenity"], "getSlug", [], "method")]), "html", null, true);
                echo "\">
                                            ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["amenity"], "getFontIcon", [], "method")) {
                    // line 54
                    echo "                                                <i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amenity"], "getFontIcon", [], "method"), "html", null, true);
                    echo "\"></i>
                                            ";
                }
                // line 56
                echo "                                            
                                            ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amenity"], "getName", [], "method"), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </ul>
                        </div><!-- /.post-block -->
                    ";
        }
        // line 64
        echo "
                    ";
        // line 65
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 65, $this->source); })()), "getFields", [], "method"))) {
            // line 66
            echo "                        <div class=\"post-block post-block-fields\">
                            <h3>";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Custom Fields"), "html", null, true);
            echo "</h3>

                            <ul>
                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 70, $this->source); })()), "getFields", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 71
                echo "                                    <li>
                                        <span>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "getDataKey", [], "method"), "html", null, true);
                echo "</span>
                                        <strong>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "getDataValue", [], "method"), "html", null, true);
                echo "</strong>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </ul>
                        </div><!-- /.post-block -->
                    ";
        }
        // line 79
        echo "
                    ";
        // line 80
        if (twig_length_filter($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 80, $this->source); })()))) {
            // line 81
            echo "                        <div class=\"post-block\">
                            <div class=\"review-stat\">
                                <div class=\"review-icon\">
                                </div><!-- /.review-icon -->

                                <div class=\"review-total\">
                                    <strong>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 87, $this->source); })()), "getRatingPercent", [], "method"), "html", null, true);
            echo "%</strong>
                                    <span>
                                        ";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Rated by <b>%count%</b> users", ["%count%" => twig_length_filter($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 89, $this->source); })()))], "messages");
            // line 91
            echo "                                 
                                    </span>
                                </div><!-- /.review-total -->

                                <div class=\"review-overview\">
                                    <ul>
                                        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 97, $this->source); })()), "getRatingOverview", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 98
                echo "                                            <li>
                                                <span class=\"key\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "label", []), "html", null, true);
                echo "</span>                                            
                                                <span class=\"divide\"></span>
                                                <span class=\"value\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "percent", []), "html", null, true);
                echo "%</span>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                                    </ul>
                                </div><!-- /.review-overview -->
                            </div><!-- /.review-stat --> 
                        </div><!-- /.post-block -->

                        <div class=\"post-block post-block-reviews\">
                            <h3>";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews"), "html", null, true);
            echo "</h3>

                            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 112, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 113
                echo "                                ";
                $this->loadTemplate("FrontBundle::Review/row.html.twig", "FrontBundle:Listing:detail.html.twig", 113)->display($context);
                // line 114
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                        </div><!-- /.post-block-->
                    ";
        }
        // line 117
        echo "
                    <div class=\"post-block post-block-review-form\">
                        <h3>";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Post New Review"), "html", null, true);
        echo "</h3>

                        <div class=\"review-form\">
                            ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_review"]) || array_key_exists("form_review", $context) ? $context["form_review"] : (function () { throw new Twig_Error_Runtime('Variable "form_review" does not exist.', 122, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_review"]) || array_key_exists("form_review", $context) ? $context["form_review"] : (function () { throw new Twig_Error_Runtime('Variable "form_review" does not exist.', 123, $this->source); })()), 'widget');
        echo "
                            ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_review"]) || array_key_exists("form_review", $context) ? $context["form_review"] : (function () { throw new Twig_Error_Runtime('Variable "form_review" does not exist.', 124, $this->source); })()), 'form_end');
        echo "
                        </div><!-- /.review-form -->
                    </div><!-- /.post-block -->

                    <div class=\"report\">
                        <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_create", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 129, $this->source); })()), "getId", [], "method")]), "html", null, true);
        echo "\">
                            ";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Report listing"), "html", null, true);
        echo "
                        </a>
                    </div><!-- /.report -->
                </div><!-- /.content -->
            </div><!-- /.col-* -->

            <div class=\"col-md-5 col-lg-4\">
                <div class=\"sidebar\">
                    ";
        // line 138
        $this->loadTemplate("FrontBundle::Widget/agent.html.twig", "FrontBundle:Listing:detail.html.twig", 138)->display(array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 138, $this->source); })()), "getUser", [], "method")]));
        // line 139
        echo "
                    ";
        // line 140
        $this->loadTemplate("FrontBundle::Widget/position.html.twig", "FrontBundle:Listing:detail.html.twig", 140)->display($context);
        // line 141
        echo "
                    ";
        // line 142
        $this->loadTemplate("FrontBundle::Widget/share.html.twig", "FrontBundle:Listing:detail.html.twig", 142)->display($context);
        // line 143
        echo "
                    ";
        // line 144
        $this->loadTemplate("FrontBundle::Widget/gallery.html.twig", "FrontBundle:Listing:detail.html.twig", 144)->display($context);
        // line 145
        echo "
                    ";
        // line 146
        $this->loadTemplate("FrontBundle::Widget/opening_hours.html.twig", "FrontBundle:Listing:detail.html.twig", 146)->display($context);
        // line 147
        echo "
                    ";
        // line 148
        $this->loadTemplate("FrontBundle::Widget/inquire.html.twig", "FrontBundle:Listing:detail.html.twig", 148)->display(array_merge($context, ["form" => (isset($context["form_inquire"]) || array_key_exists("form_inquire", $context) ? $context["form_inquire"] : (function () { throw new Twig_Error_Runtime('Variable "form_inquire" does not exist.', 148, $this->source); })())]));
        // line 149
        echo "                </div><!-- /.sidebar -->
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Listing:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 149,  390 => 148,  387 => 147,  385 => 146,  382 => 145,  380 => 144,  377 => 143,  375 => 142,  372 => 141,  370 => 140,  367 => 139,  365 => 138,  354 => 130,  350 => 129,  342 => 124,  338 => 123,  334 => 122,  328 => 119,  324 => 117,  320 => 115,  306 => 114,  303 => 113,  286 => 112,  281 => 110,  273 => 104,  264 => 101,  259 => 99,  256 => 98,  252 => 97,  244 => 91,  242 => 89,  237 => 87,  229 => 81,  227 => 80,  224 => 79,  219 => 76,  210 => 73,  206 => 72,  203 => 71,  199 => 70,  193 => 67,  190 => 66,  188 => 65,  185 => 64,  180 => 61,  170 => 57,  167 => 56,  161 => 54,  159 => 53,  155 => 52,  152 => 51,  148 => 50,  142 => 47,  139 => 46,  137 => 45,  134 => 44,  128 => 41,  123 => 39,  120 => 38,  118 => 37,  111 => 32,  107 => 30,  105 => 29,  102 => 28,  99 => 27,  96 => 26,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  72 => 20,  54 => 18,  44 => 1,  42 => 14,  41 => 10,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base.html.twig' %}

{% set menu_active = 'listings' %}

{% set title = listing.getName() %}

{% set actions = [
    {
        'title': 'Claim'|trans,
        'link': path('claim_create', {'id': listing.getId()}),
    },
    {
        'title': 'Favorite'|trans,
        'link': path('favorite_add', {'id': listing.getId()}),
    },    
] %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    {% if listing.getHeader() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Listing::HEADER_GALLERY') %}
        {% include 'FrontBundle::Listing/Header/gallery.html.twig' %}
    {% elseif listing.getHeader() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Listing::HEADER_SINGLE_IMAGE') %}
        {% include 'FrontBundle::Listing/Header/image.html.twig' %}
    {% elseif listing.getHeader() == constant('DirectoryPlatform\\\\AppBundle\\\\Entity\\\\Listing::HEADER_MAP') %}
        {% include 'FrontBundle::Listing/Header/map.html.twig' %}
    {% else %}
        <div class=\"container\">
            {% include 'FrontBundle::Helper/content_title.html.twig' %}
        </div><!-- /.container -->
    {% endif %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 col-lg-8\">
                <div class=\"content\">
                    {% if listing.getDescription() %}
                        <div class=\"post-block post-block-description\">
                            <h3>{{ 'Description'|trans }}</h3>

                            {{ listing.getDescription|raw }}
                        </div><!-- /.post-block -->
                    {% endif %}

                    {% if listing.getAmenities()|length %}
                        <div class=\"post-block post-block-amenities\">
                            <h3>{{ 'Amenities'|trans }}</h3>

                            <ul>
                                {% for amenity in listing.getAmenities() %}
                                    <li>
                                        <a href=\"{{ path('amenity_detail', {'slug': amenity.getSlug()})}}\">
                                            {% if amenity.getFontIcon() %}
                                                <i class=\"fa {{ amenity.getFontIcon() }}\"></i>
                                            {% endif %}
                                            
                                            {{ amenity.getName() }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div><!-- /.post-block -->
                    {% endif %}

                    {% if listing.getFields()|length %}
                        <div class=\"post-block post-block-fields\">
                            <h3>{{ 'Custom Fields'|trans }}</h3>

                            <ul>
                                {% for field in listing.getFields() %}
                                    <li>
                                        <span>{{ field.getDataKey() }}</span>
                                        <strong>{{ field.getDataValue() }}</strong>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div><!-- /.post-block -->
                    {% endif %}

                    {% if reviews|length %}
                        <div class=\"post-block\">
                            <div class=\"review-stat\">
                                <div class=\"review-icon\">
                                </div><!-- /.review-icon -->

                                <div class=\"review-total\">
                                    <strong>{{ listing.getRatingPercent() }}%</strong>
                                    <span>
                                        {% trans with {'%count%': reviews|length} %}
                                            Rated by <b>%count%</b> users
                                        {% endtrans %}                                 
                                    </span>
                                </div><!-- /.review-total -->

                                <div class=\"review-overview\">
                                    <ul>
                                        {% for rating in listing.getRatingOverview() %}
                                            <li>
                                                <span class=\"key\">{{ rating.label }}</span>                                            
                                                <span class=\"divide\"></span>
                                                <span class=\"value\">{{ rating.percent }}%</span>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div><!-- /.review-overview -->
                            </div><!-- /.review-stat --> 
                        </div><!-- /.post-block -->

                        <div class=\"post-block post-block-reviews\">
                            <h3>{{ 'Reviews'|trans }}</h3>

                            {% for review in reviews %}
                                {% include 'FrontBundle::Review/row.html.twig' %}
                            {% endfor %}
                        </div><!-- /.post-block-->
                    {% endif %}

                    <div class=\"post-block post-block-review-form\">
                        <h3>{{ 'Post New Review'|trans }}</h3>

                        <div class=\"review-form\">
                            {{ form_start(form_review) }}
                            {{ form_widget(form_review) }}
                            {{ form_end(form_review) }}
                        </div><!-- /.review-form -->
                    </div><!-- /.post-block -->

                    <div class=\"report\">
                        <a href=\"{{ path('report_create', {'id': listing.getId() }) }}\">
                            {{ 'Report listing'|trans }}
                        </a>
                    </div><!-- /.report -->
                </div><!-- /.content -->
            </div><!-- /.col-* -->

            <div class=\"col-md-5 col-lg-4\">
                <div class=\"sidebar\">
                    {% include 'FrontBundle::Widget/agent.html.twig' with {'user': listing.getUser()} %}

                    {% include 'FrontBundle::Widget/position.html.twig' %}

                    {% include 'FrontBundle::Widget/share.html.twig' %}

                    {% include 'FrontBundle::Widget/gallery.html.twig' %}

                    {% include 'FrontBundle::Widget/opening_hours.html.twig' %}

                    {% include 'FrontBundle::Widget/inquire.html.twig' with {'form': form_inquire}%}
                </div><!-- /.sidebar -->
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->
{% endblock %}", "FrontBundle:Listing:detail.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Listing/detail.html.twig");
    }
}
