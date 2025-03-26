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

/* @admin/Order/mail.twig */
class __TwigTemplate_9cf13cfc94751f50be464ca5d69b8cb4 extends Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/mail.twig"));

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

        // line 13
        $context["menus"] = ["order", "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/mail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "<script>
\$(function() {
    \$('#template-change').on('change', function() {
        \$('#mode').val('change');
        \$('#order-mail-form').submit();
        return false;
    });

    ace.require('ace/ext/language_tools');
    var editor = ace.edit('editor');
    editor.session.setMode('ace/mode/twig');
    editor.setTheme('ace/theme/tomorrow');
    editor.setValue(\"";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 33), "vars", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source), "js"), "html", null, true);
        echo "\");
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true,
        showInvisibles: true
    });

    \$('#order-mail-form').on('submit', function() {
        \$('#admin_order_mail_tpl_data').val(editor.getValue());
    });
});
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 49
        echo "<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_destination_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_destination_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                        </div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailTo\" aria-expanded=\"false\" aria-controls=\"mailTo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailTo\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 65
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "</span></div>
                            <div class=\"col-2\"><span>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 67), 67, $this->source)), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "（";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "）</span><br>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "</div>
                            <div class=\"col-2\"><span>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>
                            ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 74)) {
            // line 75
            echo "                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 75)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "productName", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
                                ";
            // line 76
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 76)) > 2)) {
                // line 77
                echo "                                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_purchase_product_count", ["%count%" => (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, true, 77), 77, $this->source)) - 1)]);
                echo "
                                ";
            }
            // line 79
            echo "                            ";
        }
        // line 80
        echo "                            </span></div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-2\"><span>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-10\"><span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
        // line 84
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatusColor", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "; border-color: ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatusColor", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <form id=\"order-mail-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 90)]), "html", null, true);
        echo "\">
                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 91), 91, $this->source), 'widget');
        echo "
                <input id=\"mode\" type=\"hidden\" name=\"mode\">

                <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\"><span class=\"card-title\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_mail_info"), "html", null, true);
        echo "</span></div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailCreate\" aria-expanded=\"false\" aria-controls=\"mailCreate\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailCreate\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_template"), "html", null, true);
        echo "\">
                                    <span>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_template"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                </div>
                            </div>
                            <div class=\"col\">
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 110), 110, $this->source), 'widget', ["id" => "template-change"]);
        echo "
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 111), 111, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_subject"), "html", null, true);
        echo "\">
                                    <span>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                </div>
                                <span class=\"badge bg-primary ms-1\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col\">
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 122), 122, $this->source), 'widget');
        echo "
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 123), 123, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_body"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <div id=\"detail_box__tpl_data\" class=\"mb-3 tab-pane active\">
                                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 130), 130, $this->source), 'label');
        echo "
                                    <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 131
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 131), 131, $this->source))) ? (" is-invalid") : (""));
        echo "\"></div>
                                    <div style=\"display: none\">";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 132), 132, $this->source), 'widget');
        echo "</div>
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 133), 133, $this->source), 'errors');
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
                                <div class=\"c-conversionArea__leftBlockItem\"><a class=\"c-baseLink\" href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, true, 145)]), "html", null, true);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
        echo "</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\">
                                        <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"confirm\">";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_confirm"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Order/mail.twig";
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
        return array (  372 => 151,  361 => 145,  346 => 133,  342 => 132,  338 => 131,  334 => 130,  328 => 127,  321 => 123,  317 => 122,  311 => 119,  306 => 117,  302 => 116,  294 => 111,  290 => 110,  283 => 106,  279 => 105,  268 => 97,  259 => 91,  255 => 90,  242 => 84,  238 => 83,  233 => 80,  230 => 79,  224 => 77,  222 => 76,  217 => 75,  215 => 74,  210 => 72,  193 => 71,  189 => 70,  183 => 67,  179 => 66,  175 => 65,  171 => 64,  158 => 56,  149 => 49,  142 => 48,  121 => 33,  107 => 21,  100 => 20,  87 => 16,  74 => 15,  66 => 11,  64 => 18,  62 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/mail.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Order/mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 74);
        static $filters = array("escape" => 15, "trans" => 15, "price" => 67, "length" => 76, "raw" => 77);
        static $functions = array("url" => 90, "form_widget" => 91, "form_errors" => 111, "form_label" => 130, "has_errors" => 131);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans', 'price', 'length', 'raw'],
                ['url', 'form_widget', 'form_errors', 'form_label', 'has_errors']
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
