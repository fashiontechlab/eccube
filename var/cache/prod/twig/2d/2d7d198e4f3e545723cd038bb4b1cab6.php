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

/* MailMagazine42/Resource/template/admin/index.twig */
class __TwigTemplate_8f919af1b005c8596e9f7da50b8fb6a4 extends Template
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
        // line 14
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
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

        // line 16
        $context["menus"] = ["mailmagazine", "mailmagazine"];
        // line 21
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 14
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/index.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.index.title"), "html", null, true);
    }

    // line 19
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.title"), "html", null, true);
    }

    // line 23
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<script>
\$(function() {

    var inputDate = document.createElement('input');
    inputDate.setAttribute('type', 'date');
    if (inputDate.type !== 'date') {
        \$('input[id\$=_date_start]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

        \$('input[id\$=_date_end]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_birth_start').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_birth_end').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_last_buy_start').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_last_buy_end').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });
    }
});

function fnChangeActionSubmit(action) {
    document.search_form.action = action;
    document.search_form.submit();
}
</script>
";
    }

    // line 81
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, true, 83), 83, $this->source), 'widget');
        echo "
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents\">
            <div class=\"row justify-content-start\">
                <div class=\"col-6\">
                    <div class=\"mb-2\">
                        <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 90), 90, $this->source), 'widget');
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 91), 91, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a></div>
                </div>
            </div>
        </div>
        <div class=\"c-subContents ec-collapse collapse";
        // line 97
        echo ((($context["has_errors"] ?? null)) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"col-form-label\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</p>
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "customer_status", [], "any", false, false, true, 103), 103, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "customer_status", [], "any", false, false, true, 104), 104, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, true, 111), 111, $this->source), 'widget');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, true, 112), 112, $this->source), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"col-form-label\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</p>
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sex", [], "any", false, false, true, 121), 121, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sex", [], "any", false, false, true, 122), 122, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_total_start", [], "any", false, false, true, 131), 131, $this->source), 'widget');
        echo "
                                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_total_start", [], "any", false, false, true, 132), 132, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_total_end", [], "any", false, false, true, 136), 136, $this->source), 'widget');
        echo "
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_total_end", [], "any", false, false, true, 137), 137, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.birth_month"), "html", null, true);
        echo "</label>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "birth_month", [], "any", false, false, true, 149), 149, $this->source), 'widget');
        echo "
                                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "birth_month", [], "any", false, false, true, 150), 150, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-7\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_times_start", [], "any", false, false, true, 161), 161, $this->source), 'widget');
        echo "
                                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_times_start", [], "any", false, false, true, 162), 162, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_times_end", [], "any", false, false, true, 166), 166, $this->source), 'widget');
        echo "
                                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_times_end", [], "any", false, false, true, 167), 167, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "birth_start", [], "any", false, false, true, 179), 179, $this->source), 'widget');
        echo "
                                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "birth_start", [], "any", false, false, true, 180), 180, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "birth_end", [], "any", false, false, true, 184), 184, $this->source), 'widget');
        echo "
                                ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "birth_end", [], "any", false, false, true, 185), 185, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_date_start", [], "any", false, false, true, 195), 195, $this->source), 'widget');
        echo "
                                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_date_start", [], "any", false, false, true, 196), 196, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_date_end", [], "any", false, false, true, 200), 200, $this->source), 'widget');
        echo "
                                ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_date_end", [], "any", false, false, true, 201), 201, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</label>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "pref", [], "any", false, false, true, 213), 213, $this->source), 'widget');
        echo "
                                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "pref", [], "any", false, false, true, 214), 214, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-7\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_date_start", [], "any", false, false, true, 225), 225, $this->source), 'widget');
        echo "
                                ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_date_start", [], "any", false, false, true, 226), 226, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_date_end", [], "any", false, false, true, 230), 230, $this->source), 'widget');
        echo "
                                ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_date_end", [], "any", false, false, true, 231), 231, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"mb-3\">
                        <label class=\"col-form-label\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, true, 241), 241, $this->source), 'widget');
        echo "
                        ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, true, 242), 242, $this->source), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.last_buy_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "last_buy_start", [], "any", false, false, true, 250), 250, $this->source), 'widget');
        echo "
                                ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "last_buy_start", [], "any", false, false, true, 251), 251, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "last_buy_end", [], "any", false, false, true, 255), 255, $this->source), 'widget');
        echo "
                                ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "last_buy_end", [], "any", false, false, true, 256), 256, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 264
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["searchForm"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 264), "eccube_form_options", [], "any", false, false, true, 264), "auto_render", [], "any", false, false, true, 264); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 265
            echo "                ";
            // line 266
            echo "                <div class=\"row mb-2\">
                    ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 267), "eccube_form_options", [], "any", false, false, true, 267), "form_theme", [], "any", false, false, true, 267)) {
                // line 268
                echo "                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 268), "eccube_form_options", [], "any", false, false, true, 268), "form_theme", [], "any", false, false, true, 268)], true);
                // line 269
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 269, $this->source), 'row');
                echo "
                    ";
            } else {
                // line 271
                echo "                        <div class=\"col\">
                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
                // line 273
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 273), "label", [], "any", false, false, true, 273), 273, $this->source)), "html", null, true);
                echo "</label>
                                ";
                // line 274
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 274, $this->source), 'widget');
                echo "
                                ";
                // line 275
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 275, $this->source), 'errors');
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 279
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "        </div>
    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
        ";
        // line 285
        if (($context["pagination"] ?? null)) {
            // line 286
            echo "            <span class=\"fw-bold ms-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 286)]), "html", null, true);
            echo "</span>
        ";
        }
        // line 288
        echo "    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        ";
        // line 290
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => ($context["searchForm"] ?? null)], true, true);
        echo "
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 295
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 295))) {
            // line 296
            echo "                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            ";
            // line 301
            echo "                            <div class=\"d-inline-block mr-2 align-bottom\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 304
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 304) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 305
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("plugin_mail_magazine_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 305)]), "html", null, true);
                echo "\">
                                            ";
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 306)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "                                </select>
                            </div>
                            <div class=\"d-inline-block\">
                                <div class=\"btn-group\" role=\"group\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-3 pl-3\">";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 322
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 323
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Customer"]) {
                // line 328
                echo "                                    <tr>
                                        <td class=\"align-middle pl-3\">";
                // line 329
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle\"><a href=\"";
                // line 330
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 330)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "name01", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "name02", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
                echo "</a></td>
                                        <td class=\"align-middle\">";
                // line 331
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "phone_number", [], "any", false, false, true, 331), 331, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle\">";
                // line 332
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 338
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 338) > 0)) {
                // line 339
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "MailMagazine42/Resource/template/admin/index.twig", 339)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 339), "routes" => "plugin_mail_magazine_page"]));
                // line 340
                echo "                                ";
            }
            // line 341
            echo "                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-md-center mb-4 \">
                        <div class=\"col-auto\">
                            <button class=\"btn btn-ec-regular ps-4 pe-4\" onclick=\"fnChangeActionSubmit('";
            // line 346
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_mail_magazine_select");
            echo "'); return false;\">
                                ";
            // line 347
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.index.btn_select_template"), "html", null, true);
            echo "
                            </button>
                        </div>
                    </div>
                ";
        } elseif (        // line 351
($context["has_errors"] ?? null)) {
            // line 352
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 354
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 355
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 359
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 362
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 367
        echo "            </div>
        </div>
    </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/admin/index.twig";
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
        return array (  756 => 367,  749 => 363,  745 => 362,  741 => 361,  737 => 359,  730 => 355,  726 => 354,  722 => 352,  720 => 351,  713 => 347,  709 => 346,  702 => 341,  699 => 340,  696 => 339,  694 => 338,  689 => 335,  680 => 332,  676 => 331,  668 => 330,  664 => 329,  661 => 328,  657 => 327,  650 => 323,  646 => 322,  642 => 321,  638 => 320,  624 => 308,  616 => 306,  611 => 305,  606 => 304,  602 => 303,  598 => 301,  592 => 296,  590 => 295,  582 => 290,  578 => 288,  572 => 286,  570 => 285,  566 => 284,  561 => 281,  554 => 279,  547 => 275,  543 => 274,  539 => 273,  535 => 271,  529 => 269,  526 => 268,  524 => 267,  521 => 266,  519 => 265,  514 => 264,  504 => 256,  500 => 255,  495 => 253,  490 => 251,  486 => 250,  480 => 247,  472 => 242,  468 => 241,  464 => 240,  452 => 231,  448 => 230,  443 => 228,  438 => 226,  434 => 225,  428 => 222,  417 => 214,  413 => 213,  407 => 210,  395 => 201,  391 => 200,  386 => 198,  381 => 196,  377 => 195,  371 => 192,  361 => 185,  357 => 184,  352 => 182,  347 => 180,  343 => 179,  337 => 176,  325 => 167,  321 => 166,  316 => 164,  311 => 162,  307 => 161,  301 => 158,  290 => 150,  286 => 149,  280 => 146,  268 => 137,  264 => 136,  259 => 134,  254 => 132,  250 => 131,  244 => 128,  235 => 122,  231 => 121,  227 => 120,  216 => 112,  212 => 111,  208 => 110,  199 => 104,  195 => 103,  191 => 102,  183 => 97,  176 => 93,  171 => 91,  167 => 90,  161 => 89,  152 => 83,  149 => 82,  145 => 81,  86 => 24,  82 => 23,  75 => 19,  68 => 18,  63 => 14,  61 => 21,  59 => 16,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/index.twig", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/MailMagazine42/Resource/template/admin/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "form_theme" => 21, "for" => 264, "if" => 267, "include" => 339);
        static $filters = array("escape" => 18, "trans" => 18, "filter" => 264);
        static $functions = array("form_widget" => 83, "form_errors" => 91, "form_row" => 269, "include" => 290, "path" => 305, "url" => 330);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter'],
                ['form_widget', 'form_errors', 'form_row', 'include', 'path', 'url']
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
