<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/Customer/edit.twig */
class __TwigTemplate_dd75112d4e94ad9c39c74a48046c6f96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/edit.twig"));

        $__eccube__gblobal = $this->env->getGlobals();
        $__eccube__eventDispatcher = $__eccube__gblobal['event_dispatcher'];
        $__eccube__source = $this->env->getLoader()->getSourceContext($this->getTemplateName())->getCode();
        $__eccube__event = new \Eccube\Event\TemplateEvent($this->getTemplateName(), $__eccube__source, $context);
        $__eccube__eventDispatcher->dispatch($__eccube__event, $this->getTemplateName());
        $context = $__eccube__event->getParameters();
        if ($__eccube__event->getSource() !== $__eccube__source) {
            $__eccube__newTemplate = $this->env->createTemplate($__eccube__event->getSource());
            $__eccube__newTemplate->display($__eccube__event->getParameters());
            return;
        }

        // line 14
        $context["menus"] = ["customer", "customer_edit"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer/edit.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_registration"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "    <form name=\"customer_form\" role=\"form\" id=\"customer_form\" method=\"post\" class=\"h-adr\"
          action=\"";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 27)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 27)]), "html", null, true);
        } else {
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_new");
        }
        echo "\"
          novalidate>
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 30), 30, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_info"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 49)) {
            // line 50
            echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.customer_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 63
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 71), "name01", [], "any", false, false, true, 71), 71, $this->source), 'widget');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 74), "name02", [], "any", false, false, true, 74), 74, $this->source), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 79), "name01", [], "any", false, false, true, 79), 79, $this->source), 'errors');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 82), "name02", [], "any", false, false, true, 82), 82, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 95), "kana01", [], "any", false, false, true, 95), 95, $this->source), 'widget');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 98), "kana02", [], "any", false, false, true, 98), 98, $this->source), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 103), "kana01", [], "any", false, false, true, 103), 103, $this->source), 'errors');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 106), "kana02", [], "any", false, false, true, 106), 106, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 116), 116, $this->source), 'widget');
        echo "
                                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 117), 117, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\"><span>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "</span><span
                                                class=\"badge bg-primary ms-1\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto pe-0 align-self-center\"><span>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span></div>
                                                <div class=\"col-2\">
                                                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 129), 129, $this->source), 'widget');
        echo "

                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 135), 135, $this->source), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto\">
                                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 142), "pref", [], "any", false, false, true, 142), 142, $this->source), 'widget');
        echo "
                                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 143), "pref", [], "any", false, false, true, 143), 143, $this->source), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 148), "addr01", [], "any", false, false, true, 148), 148, $this->source), 'widget', ["attr" => ["placeholder" => "admin.common.address_sample_01"]]);
        echo "
                                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 149), "addr01", [], "any", false, false, true, 149), 149, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"mb-3\">
                                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 152), "addr02", [], "any", false, false, true, 152), 152, $this->source), 'widget', ["attr" => ["placeholder" => "admin.common.address_sample_02"]]);
        echo "
                                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 153), "addr02", [], "any", false, false, true, 153), 153, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 163), 163, $this->source), 'widget');
        echo "
                                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 164), 164, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 173), 173, $this->source), 'widget');
        echo "
                                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 174), 174, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.password"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 183), "first", [], "any", false, false, true, 183), 183, $this->source), 'widget', ["type" => "password"]);
        echo "
                                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 184), "first", [], "any", false, false, true, 184), 184, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.password_for_confirmation"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 193), "second", [], "any", false, false, true, 193), 193, $this->source), 'widget', ["type" => "password"]);
        echo "
                                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 194), "second", [], "any", false, false, true, 194), 194, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 202), 202, $this->source), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 203), 203, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.job"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 211), 211, $this->source), 'widget');
        echo "
                                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 212), 212, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 220), 220, $this->source), 'widget');
        echo "
                                        ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 221), 221, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.point"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "point", [], "any", false, false, true, 229), 229, $this->source), 'widget');
        echo "
                                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "point", [], "any", false, false, true, 230), 230, $this->source), 'errors');
        echo "
                                    </div>
                                </div>

                                ";
        // line 235
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 235), "eccube_form_options", [], "any", false, false, true, 235), "auto_render", [], "any", false, false, true, 235); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 236
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 236), "eccube_form_options", [], "any", false, false, true, 236), "form_theme", [], "any", false, false, true, 236)) {
                // line 237
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 237), "eccube_form_options", [], "any", false, false, true, 237), "form_theme", [], "any", false, false, true, 237)], true);
                // line 238
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 238, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 240
                echo "                                        <div class=\"row mb-2\">
                                            <div class=\"col-3\">
                                                <span>";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 242), "label", [], "any", false, false, true, 242), 242, $this->source)), "html", null, true);
                echo "</span>
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 245
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 245, $this->source), 'widget');
                echo "
                                                ";
                // line 246
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 246, $this->source), 'errors');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            // line 250
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "
                            </div>
                        </div>
                    </div>

                    ";
        // line 256
        if (twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 256)) {
            // line 257
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.customer_address"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#delivery\" aria-expanded=\"false\"
                                           aria-controls=\"delivery\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"delivery\">
                                ";
            // line 278
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 278)) > 0)) {
                // line 279
                echo "                                    <div class=\"card-body\">
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 282
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 283
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\">";
                // line 284
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\"></th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 288
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 288));
                foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                    // line 289
                    echo "                                                <tr>
                                                    <td class=\"align-middle\">
                                                        ";
                    // line 291
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
                    echo "&nbsp;";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
                    echo "
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"";
                    // line 294
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 294), "did" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 294)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 295
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                    echo "
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        ";
                    // line 299
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
                    echo "
                                                    </td>
                                                    <td>
                                                        <div class=\"text-center\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 302
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\"
                                                               data-bs-target=\"#discontinuance-";
                    // line 304
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-close text-secondary\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance-";
                    // line 309
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">
                                                                            ";
                    // line 314
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                    echo "</h5>
                                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">
                                                                            ";
                    // line 321
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, true, 321), 321, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, true, 321), 321, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, true, 321), 321, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, true, 321), 321, $this->source))]), "html", null, true);
                    echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                            ";
                    // line 325
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "
                                                                        </button>
                                                                        <a href=\"";
                    // line 327
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 327), "did" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 327)]), "html", null, true);
                    echo "\" class=\"btn btn-ec-delete\"";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\" data-confirm=\"false\">
                                                                            ";
                    // line 328
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 337
                echo "                                            </tbody>
                                        </table>

                                        ";
                // line 341
                echo "                                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, true, 341)) < twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 341))) {
                    // line 342
                    echo "                                            <div class=\"d-block text-center\">
                                                <a href=\"";
                    // line 343
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 343)]), "html", null, true);
                    echo "\"
                                                   class=\"btn btn-ec-regular\">";
                    // line 344
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address__add"), "html", null, true);
                    echo "</a>
                                            </div>
                                        ";
                } else {
                    // line 347
                    echo "                                            <span class=\"ec-errorMessage\">
                                                ";
                    // line 348
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_count_is_over", ["%eccube_deliv_addr_max%" => twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, true, 348)]), "html", null, true);
                    echo "
                                            </span>
                                        ";
                }
                // line 351
                echo "                                    </div>
                                ";
            } else {
                // line 353
                echo "                                    <div class=\"card-body\">
                                        <div id=\"address_box\" class=\"data-empty\">
                                            <span>";
                // line 355
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.no_customer_address"), "html", null, true);
                echo "</span>
                                        </div>

                                        <div class=\"d-block text-center\">
                                            <a href=\"";
                // line 359
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 359)]), "html", null, true);
                echo "\"
                                               class=\"btn btn-ec-regular\">";
                // line 360
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address__add"), "html", null, true);
                echo "</a>
                                        </div>

                                    </div>
                                ";
            }
            // line 365
            echo "                            </div>
                        </div>
                    ";
        }
        // line 368
        echo "
                    ";
        // line 369
        if (twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 369)) {
            // line 370
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
            // line 375
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.purchase_history"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 377
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.purchase_history"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#orderHistory\" aria-expanded=\"false\"
                                           aria-controls=\"orderHistory\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"orderHistory\">
                                ";
            // line 391
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "Orders", [], "any", false, false, true, 391)) > 0)) {
                // line 392
                echo "                                    <div class=\"card-body\">
                                        <div class=\"row justify-content-between mb-2\">
                                            <div class=\"col-6\">
                                            </div>
                                            <div class=\"col-5 text-end\">
                                                <div class=\"d-inline-block me-2 align-bottom\">
                                                    <div>
                                                        <select class=\"form-select\" onchange=\"location = this.value;\">
                                                            ";
                // line 400
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    // line 401
                    echo "                                                                <option ";
                    if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 401) == ($context["page_count"] ?? null))) {
                        echo "selected=\"\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 401), "page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 401)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 401)]), "html", null, true);
                    echo "</option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 403
                echo "                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2 ps-3\">";
                // line 410
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 411
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 412
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\">";
                // line 413
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 416
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                    // line 417
                    echo "                                                <tr>
                                                    <td class=\"align-middle ps-3\">";
                    // line 418
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, true, 418), 418, $this->source)), "html", null, true);
                    echo "</td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"";
                    // line 420
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 420)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 421
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 421), 421, $this->source), "html", null, true);
                    echo "
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">";
                    // line 424
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "total", [], "any", false, false, true, 424), 424, $this->source)), "html", null, true);
                    echo "</td>
                                                    <td class=\"align-middle pe-3\">
                                                        <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
                    // line 426
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 426), 426, $this->source), "html", null, true);
                    echo "; border-color: ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 426), 426, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, true, 426), 426, $this->source), "html", null, true);
                    echo "</span>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 430
                echo "                                            </tbody>
                                        </table>
                                        ";
                // line 432
                if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 432) > 0)) {
                    // line 433
                    echo "                                                <div class=\"row justify-content-md-center pb-4\">
                                                    ";
                    // line 434
                    $this->loadTemplate("@admin/pager.twig", "@admin/Customer/edit.twig", 434)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, true, 434), "pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 434), "routes" => "admin_customer_edit"]));
                    // line 435
                    echo "                                                </div>
                                            ";
                }
                // line 437
                echo "                                    </div>
                                ";
            } else {
                // line 439
                echo "                                    <div class=\"card-body\">
                                        <div id=\"history_box\" class=\"data-empty\">
                                        <span>
                                            ";
                // line 442
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.no_purchase_history"), "html", null, true);
                echo "
                                        </span>
                                        </div>
                                    </div>
                                ";
            }
            // line 447
            echo "                            </div>
                        </div>
                    ";
        }
        // line 450
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                ";
        // line 471
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, true, 471), 471, $this->source), 'widget', ["attr" => ["row" => 8]]);
        echo "
                                ";
        // line 472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, true, 472), 472, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\"
                               href=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 486), "get", ["eccube.admin.customer.search.page_no"], "method", true, true, true, 486)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 486), "get", ["eccube.admin.customer.search.page_no"], "method", false, false, true, 486), 486, $this->source), "1")) : ("1"))]), "html", null, true);
        echo "?resume=1\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, true, 495), 495, $this->source), 'widget');
        echo "
                                ";
        // line 496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, true, 496), 496, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Customer/edit.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1035 => 500,  1028 => 496,  1024 => 495,  1014 => 488,  1009 => 486,  992 => 472,  988 => 471,  971 => 457,  967 => 456,  959 => 450,  954 => 447,  946 => 442,  941 => 439,  937 => 437,  933 => 435,  931 => 434,  928 => 433,  926 => 432,  922 => 430,  908 => 426,  903 => 424,  897 => 421,  893 => 420,  888 => 418,  885 => 417,  881 => 416,  875 => 413,  871 => 412,  867 => 411,  863 => 410,  854 => 403,  839 => 401,  835 => 400,  825 => 392,  823 => 391,  806 => 377,  801 => 375,  794 => 370,  792 => 369,  789 => 368,  784 => 365,  776 => 360,  772 => 359,  765 => 355,  761 => 353,  757 => 351,  751 => 348,  748 => 347,  742 => 344,  738 => 343,  735 => 342,  732 => 341,  727 => 337,  712 => 328,  706 => 327,  701 => 325,  694 => 321,  684 => 314,  676 => 309,  668 => 304,  663 => 302,  657 => 299,  645 => 295,  641 => 294,  633 => 291,  629 => 289,  625 => 288,  618 => 284,  614 => 283,  610 => 282,  605 => 279,  603 => 278,  586 => 264,  581 => 262,  574 => 257,  572 => 256,  565 => 251,  559 => 250,  552 => 246,  548 => 245,  542 => 242,  538 => 240,  532 => 238,  529 => 237,  526 => 236,  521 => 235,  514 => 230,  510 => 229,  504 => 226,  496 => 221,  492 => 220,  486 => 217,  478 => 212,  474 => 211,  468 => 208,  460 => 203,  456 => 202,  450 => 199,  442 => 194,  438 => 193,  432 => 190,  428 => 189,  420 => 184,  416 => 183,  410 => 180,  406 => 179,  398 => 174,  394 => 173,  388 => 170,  384 => 169,  376 => 164,  372 => 163,  366 => 160,  362 => 159,  353 => 153,  349 => 152,  343 => 149,  339 => 148,  331 => 143,  327 => 142,  317 => 135,  308 => 129,  303 => 127,  295 => 122,  291 => 121,  284 => 117,  280 => 116,  274 => 113,  264 => 106,  258 => 103,  250 => 98,  244 => 95,  236 => 90,  232 => 89,  222 => 82,  216 => 79,  208 => 74,  202 => 71,  194 => 66,  190 => 65,  186 => 63,  179 => 59,  171 => 54,  167 => 53,  162 => 50,  160 => 49,  145 => 37,  135 => 30,  125 => 27,  122 => 26,  115 => 25,  107 => 22,  100 => 21,  87 => 17,  74 => 16,  66 => 12,  64 => 19,  62 => 14,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Customer/edit.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Customer/edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 19, "if" => 27, "for" => 235, "include" => 434);
        static $filters = array("escape" => 16, "trans" => 16, "filter" => 235, "length" => 278, "date_min" => 418, "price" => 424, "default" => 486);
        static $functions = array("url" => 27, "form_widget" => 30, "form_errors" => 79, "form_row" => 238, "csrf_token_for_anchor" => 327, "path" => 401);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'include'],
                ['escape', 'trans', 'filter', 'length', 'date_min', 'price', 'default'],
                ['url', 'form_widget', 'form_errors', 'form_row', 'csrf_token_for_anchor', 'path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
