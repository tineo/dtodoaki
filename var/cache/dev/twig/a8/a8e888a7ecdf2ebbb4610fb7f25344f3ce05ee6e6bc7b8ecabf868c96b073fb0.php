<?php

/* FrontBundle:Order:invoice.html.twig */
class __TwigTemplate_8d68d20a8a73616b0a7bc6c5759a15b53b7b1a4434805228693d6865538a566f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base_simple.html.twig", "FrontBundle:Order:invoice.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_header' => [$this, 'block_page_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Order:invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Order:invoice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"invoice\">
            <div class=\"invoice-header\">
                <div class=\"invoice-number\">
                    <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice Number"), "html", null, true);
        echo "</span> <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderRepository"]) || array_key_exists("orderRepository", $context) ? $context["orderRepository"] : (function () { throw new Twig_Error_Runtime('Variable "orderRepository" does not exist.', 12, $this->source); })()), "getInvoiceId", [0 => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 12, $this->source); })())], "method"), "html", null, true);
        echo "</strong>
                </div><!-- /.invoice-number -->
            </div><!-- /.invoice-header -->

            <div class=\"row\">
                <div class=\"col-sm-6\">

                    <div class=\"invoice-provider\">
                        <h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provider"), "html", null, true);
        echo "</h3>

                        <ul>
                            <li><strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 23, $this->source); })()), "full_name", []), "html", null, true);
        echo "</strong></li>
                            <li>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 24, $this->source); })()), "street", []), "html", null, true);
        echo "</li>
                            <li>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 25, $this->source); })()), "postal_code", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 25, $this->source); })()), "city", []), "html", null, true);
        echo "</li>
                            <li>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 26, $this->source); })()), "country", []), "html", null, true);
        echo "</li>
                        </ul>

                        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["invoicing"] ?? null), "notice", [], "any", true, true)) {
            // line 30
            echo "                            <p class=\"invoice-note\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 30, $this->source); })()), "notice", []), "html", null, true);
            echo "</p>
                        ";
        }
        // line 32
        echo "
                        <ul>
                            <li><strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID No."), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 34, $this->source); })()), "reg_no", []), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("VAT No."), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 35, $this->source); })()), "vat_no", []), "html", null, true);
        echo "</li>
                        </ul>

                        <ul>
                            <li><strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bank Name"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 39, $this->source); })()), "bank_name", []), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account No."), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 40, $this->source); })()), "bank_account", []), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IBAN."), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 41, $this->source); })()), "bank_iban", []), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Code"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 42, $this->source); })()), "bank_code", []), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SWIFT/BIC"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 43, $this->source); })()), "bank_swift", []), "html", null, true);
        echo "</li>
                        </ul>
                    </div><!-- /.invoice-provider -->
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"invoice-receiver\">
                        <h3>";
        // line 50
        echo "Receiver";
        echo "</h3>

                        <ul>
                            <li><strong>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 53, $this->source); })()), "getName", [], "method"), "html", null, true);
        echo "</strong></li>
                            <li>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 54, $this->source); })()), "getStreet", [], "method"), "html", null, true);
        echo "</li>
                            <li>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->source); })()), "getPostalCode", [], "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->source); })()), "getCity", [], "method"), "html", null, true);
        echo "</li>
                            <li>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 56, $this->source); })()), "getCountryName", [], "method"), "html", null, true);
        echo "</li>
                        </ul>

                        <ul>
                            <li><strong>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID No."), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 60, $this->source); })()), "getRegNo", [], "method"), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("VAT No."), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 61, $this->source); })()), "getVatNo", [], "method"), "html", null, true);
        echo "</li>
                        </ul>

                        <ul>
                            <li><strong>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 65, $this->source); })()), "getCreated", [], "method"), "d.m.Y"), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Due Date"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 66, $this->source); })()), "getDueDate", [], "method"), "d.m.Y"), "html", null, true);
        echo "</li>
                        </ul>

                        <ul>
                            <li><strong>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Variable Symbol"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderRepository"]) || array_key_exists("orderRepository", $context) ? $context["orderRepository"] : (function () { throw new Twig_Error_Runtime('Variable "orderRepository" does not exist.', 70, $this->source); })()), "getInvoiceId", [0 => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 70, $this->source); })())], "method"), "html", null, true);
        echo "</li>
                            <li><strong>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Constant Symbol"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoicing"]) || array_key_exists("invoicing", $context) ? $context["invoicing"] : (function () { throw new Twig_Error_Runtime('Variable "invoicing" does not exist.', 71, $this->source); })()), "constant_symbol", []), "html", null, true);
        echo "</li>
                        </ul>
                    </div><!-- /.invoice-receiver -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3>";
        // line 77
        echo "Order Items";
        echo "</h3>

            <div class=\"invoice-items\">
                <div class=\"invoice-item heading\">
                    <div class=\"invoice-item-cell\">
                        ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Item"), "html", null, true);
        echo "
                    </div><!-- /.invoice-item-cell -->

                    <div class=\"invoice-item-cell\">
                        ";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
        echo "
                    </div><!-- /.invoice-item-cell -->
                </div><!-- /.invoice-item -->

                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 90, $this->source); })()), "getItems", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 91
            echo "                    <div class=\"invoice-item\">
                        <div class=\"invoice-item-cell\">
                            ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "getType", [], "method") == "pay_for_featured")) {
                // line 94
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featuring listing"), "html", null, true);
                echo "
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 95
$context["item"], "getType", [], "method") == "pay_for_publish")) {
                // line 96
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publishing listing"), "html", null, true);
                echo "
                            ";
            }
            // line 98
            echo "                        </div>

                        <div class=\"invoice-item-cell\">
                            ";
            // line 101
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, $context["item"], "getPrice", [], "method"), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 101, $this->source); })()), "getCurrency", [], "method")), "html", null, true);
            echo "
                        </div><!-- /.invoice-item-cell -->
                    </div><!-- /.invoice-item -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div><!-- /.invoice-items -->

            <div class=\"invoice-total\">
                ";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 108, $this->source); })()), "price", []), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 108, $this->source); })()), "currency", [])), "html", null, true);
        echo "
            </div><!-- /.invoice-total -->
        </div>
    </div><!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Order:invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 108,  333 => 105,  323 => 101,  318 => 98,  312 => 96,  310 => 95,  305 => 94,  303 => 93,  299 => 91,  295 => 90,  288 => 86,  281 => 82,  273 => 77,  262 => 71,  256 => 70,  247 => 66,  241 => 65,  232 => 61,  226 => 60,  219 => 56,  213 => 55,  209 => 54,  205 => 53,  199 => 50,  187 => 43,  181 => 42,  175 => 41,  169 => 40,  163 => 39,  154 => 35,  148 => 34,  144 => 32,  138 => 30,  136 => 29,  130 => 26,  124 => 25,  120 => 24,  116 => 23,  110 => 20,  97 => 12,  91 => 8,  82 => 7,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::Layout/base_simple.html.twig' %}

{% block title %}{{ 'Invoice'|trans }}{% endblock %}

{% block page_header %}{{ 'Invoice'|trans }}{% endblock %}

{% block content %}
    <div class=\"container\">
        <div class=\"invoice\">
            <div class=\"invoice-header\">
                <div class=\"invoice-number\">
                    <span>{{ 'Invoice Number'|trans}}</span> <strong>{{ orderRepository.getInvoiceId(order) }}</strong>
                </div><!-- /.invoice-number -->
            </div><!-- /.invoice-header -->

            <div class=\"row\">
                <div class=\"col-sm-6\">

                    <div class=\"invoice-provider\">
                        <h3>{{ 'Provider'|trans }}</h3>

                        <ul>
                            <li><strong>{{ invoicing.full_name }}</strong></li>
                            <li>{{ invoicing.street }}</li>
                            <li>{{ invoicing.postal_code }}, {{ invoicing.city }}</li>
                            <li>{{ invoicing.country }}</li>
                        </ul>

                        {% if invoicing.notice is defined %}
                            <p class=\"invoice-note\">{{ invoicing.notice }}</p>
                        {% endif %}

                        <ul>
                            <li><strong>{{ 'ID No.'|trans }}:</strong> {{ invoicing.reg_no }}</li>
                            <li><strong>{{ 'VAT No.'|trans }}:</strong> {{ invoicing.vat_no }}</li>
                        </ul>

                        <ul>
                            <li><strong>{{ 'Bank Name'|trans }}:</strong> {{ invoicing.bank_name }}</li>
                            <li><strong>{{ 'Account No.'|trans }}:</strong> {{ invoicing.bank_account }}</li>
                            <li><strong>{{ 'IBAN.'|trans }}:</strong> {{ invoicing.bank_iban }}</li>
                            <li><strong>{{ 'Code'|trans }}:</strong> {{ invoicing.bank_code }}</li>
                            <li><strong>{{ 'SWIFT/BIC'|trans }}:</strong> {{ invoicing.bank_swift }}</li>
                        </ul>
                    </div><!-- /.invoice-provider -->
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"invoice-receiver\">
                        <h3>{{ 'Receiver' }}</h3>

                        <ul>
                            <li><strong>{{ order.getName() }}</strong></li>
                            <li>{{ order.getStreet() }}</li>
                            <li>{{ order.getPostalCode() }}, {{ order.getCity() }}</li>
                            <li>{{ order.getCountryName() }}</li>
                        </ul>

                        <ul>
                            <li><strong>{{ 'ID No.'|trans }}:</strong> {{ order.getRegNo() }}</li>
                            <li><strong>{{ 'VAT No.'|trans }}:</strong> {{ order.getVatNo() }}</li>
                        </ul>

                        <ul>
                            <li><strong>{{ 'Created'|trans }}:</strong> {{ order.getCreated()|date(\"d.m.Y\") }}</li>
                            <li><strong>{{ 'Due Date'|trans }}:</strong> {{ order.getDueDate()|date(\"d.m.Y\") }}</li>
                        </ul>

                        <ul>
                            <li><strong>{{ 'Variable Symbol'|trans }}</strong>: {{ orderRepository.getInvoiceId(order) }}</li>
                            <li><strong>{{ 'Constant Symbol'|trans }}</strong>: {{ invoicing.constant_symbol }}</li>
                        </ul>
                    </div><!-- /.invoice-receiver -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3>{{ 'Order Items' }}</h3>

            <div class=\"invoice-items\">
                <div class=\"invoice-item heading\">
                    <div class=\"invoice-item-cell\">
                        {{ 'Item'|trans }}
                    </div><!-- /.invoice-item-cell -->

                    <div class=\"invoice-item-cell\">
                        {{ 'Price'|trans }}
                    </div><!-- /.invoice-item-cell -->
                </div><!-- /.invoice-item -->

                {% for item in order.getItems() %}
                    <div class=\"invoice-item\">
                        <div class=\"invoice-item-cell\">
                            {% if item.getType() == 'pay_for_featured' %}
                                {{ 'Featuring listing'|trans }}
                            {% elseif item.getType() == 'pay_for_publish' %}
                                {{ 'Publishing listing'|trans }}
                            {% endif %}
                        </div>

                        <div class=\"invoice-item-cell\">
                            {{ item.getPrice()|localizedcurrency(order.getCurrency()) }}
                        </div><!-- /.invoice-item-cell -->
                    </div><!-- /.invoice-item -->
                {% endfor %}
            </div><!-- /.invoice-items -->

            <div class=\"invoice-total\">
                {{ 'Total'|trans }} {{ order.price|localizedcurrency(order.currency) }}
            </div><!-- /.invoice-total -->
        </div>
    </div><!-- /.container -->
{% endblock %}", "FrontBundle:Order:invoice.html.twig", "/home/tineo/directory-platform/src/DirectoryPlatform/FrontBundle/Resources/views/Order/invoice.html.twig");
    }
}
