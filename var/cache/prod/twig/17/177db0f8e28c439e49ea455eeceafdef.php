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

/* @admin/Setting/Shop/tax_rule.twig */
class __TwigTemplate_f217e18764c9e83438a0755df9b25bbe extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $context["menus"] = ["setting", "shop", "shop_tax"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/tax_rule.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style type=\"text/css\">
        .edit {
            display: none;
        }

        .has-error .list {
            display: none;
        }

        .has-error .edit {
            display: block;
        }
    </style>
";
    }

    // line 36
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$('.tax_rule_list_item td.action a.edit-button').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-tax_rule-' + id);
                \$(tr).find('.list').hide();
                \$(tr).find('.edit').show();
            });

            \$('.tax_rule_list_item .cancel').click(function() {
                location.href = '";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_tax");
        echo "';
            });
        });
    </script>
";
    }

    // line 53
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.tax_setting"), "html", null, true);
        echo "\">
                            <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax_setting"), "html", null, true);
        echo "</span>
                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table tabel-sm\">
                            <colgroup>
                                <col width=\"5%\">
                                <col width=\"\">
                                <col width=\"15%\">
                                <col width=\"35%\">
                                <col width=\"5%\">
                                <col width=\"\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.tax_rate"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.rounding_type"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.apply_date"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\"></th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3 pe-5\"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr id=\"tax_rule_item_new\">
                                <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"";
        // line 87
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_tax_new");
        echo "\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 88), 88, $this->source), 'widget');
        echo "
                                    <td class=\"align-middle ps-3\"></td>
                                    <td class=\"align-middle\" style=\"width:230px;\">
                                        <div class=\"input-group\">
                                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tax_rate", [], "any", false, false, true, 92), 92, $this->source), 'widget', ["attr" => ["class" => "col-auto text-end"]]);
        echo "
                                            <div class=\"input-group-text\">%</div>
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tax_rate", [], "any", false, false, true, 94), 94, $this->source), 'errors');
        echo "
                                        </div>
                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rounding_type", [], "any", false, false, true, 98), 98, $this->source), 'widget');
        echo "
                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rounding_type", [], "any", false, false, true, 99), 99, $this->source), 'errors');
        echo "
                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apply_date", [], "any", false, false, true, 102), 102, $this->source), 'widget');
        echo "
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apply_date", [], "any", false, false, true, 103), 103, $this->source), 'errors');
        echo "
                                    </td>
                                    <td class=\"align-middle\"></td>
                                    <td class=\"align-middle pe-5\">
                                        <div class=\"row justify-content-end\">
                                            <button class=\"btn btn-ec-regular px-4\" type=\"submit\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                        </div>
                                    </td>
                                </form>
                            </tr>

                            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TaxRules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TaxRule"]) {
            // line 115
            echo "                                <tr id=\"ex-tax_rule-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "\" class=\"tax_rule_list_item ";
            if ((($__internal_compile_0 = ($context["errors"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 115)] ?? null) : null)) {
                echo "has-error";
            }
            echo "\">
                                    <form name=\"edit-form\" id=\"edit-form_";
            // line 116
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_tax");
            echo "\">
                                        ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["forms"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 117)] ?? null) : null), "_token", [], "any", false, false, true, 117), 117, $this->source), 'widget');
            echo "
                                        <input type=\"hidden\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "\" name=\"tax_rule_id\">
                                        <input type=\"hidden\" value=\"edit_inline\" name=\"mode\"/>
                                        <td class=\"align-middle ps-3\"><span>";
            // line 120
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "</span></td>
                                        <td class=\"align-middle text-end\" style=\"width:230px;\">
                                            <div class=\"edit justify-content-end\">
                                                <div class=\"input-group\">
                                                    ";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["forms"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 124)] ?? null) : null), "tax_rate", [], "any", false, false, true, 124), 124, $this->source), 'widget', ["attr" => ["class" => "col-auto text-end"]]);
            echo "
                                                    <div class=\"input-group-text\">%</div>
                                                    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["forms"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 126)] ?? null) : null), "tax_rate", [], "any", false, false, true, 126), 126, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"list\">
                                                <span class=\"col-6 text-end pe-0\">";
            // line 130
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "tax_rate", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "</span><span class=\"col-6 ps-1\">%</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                ";
            // line 135
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["forms"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 135)] ?? null) : null), "rounding_type", [], "any", false, false, true, 135), 135, $this->source), 'widget');
            echo "
                                            </div>
                                            <div class=\"list\">
                                                <span>";
            // line 138
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "rounding_type", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, true, 143)) {
                // line 144
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.base_rate_setting"), "html", null, true);
                echo "
                                                ";
            } else {
                // line 146
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["forms"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 146)] ?? null) : null), "apply_date", [], "any", false, false, true, 146), 146, $this->source), 'widget');
                echo "
                                                    ";
                // line 147
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["forms"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 147)] ?? null) : null), "apply_date", [], "any", false, false, true, 147), 147, $this->source), 'errors');
                echo "
                                                ";
            }
            // line 149
            echo "                                            </div>
                                            <div class=\"list\">
                                                <span>";
            // line 151
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, true, 151)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.base_rate_setting")) : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "apply_date", [], "any", false, false, true, 151), 151, $this->source)))), "html", null, true);
            echo "</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                <button type=\"submit\" class=\"btn text-nowrap btn-ec-conversion\">";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                                <button type=\"button\" class=\"btn text-nowrap btn-ec-sub cancel\" data-id=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                            </div>
                                        </td>
                                        <td class=\"align-middle action\">
                                            <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 float-end\">
                                                <div class=\"row pe-2\">
                                                    <div class=\"col-6 text-center pe-0\"><a class=\"btn btn-ec-actionIcon edit-button\" data-bs-toggle=\"tooltip\" data-id=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i></a></div>

                                                    <div class=\"col-6 text-center\">
                                                        ";
            // line 166
            if ( !twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, true, 166)) {
                // line 167
                echo "                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                                 title=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal_";
                // line 169
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 削除モーダル -->
                                                            <div class=\"modal fade\" id=\"DeleteModal_";
                // line 174
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                                 aria-labelledby=\"DeleteModal_";
                // line 175
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">
                                                                                ";
                // line 180
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "
                                                                            </h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start modal-message\">";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 185)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                                ";
                // line 189
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                            </button>
                                                                            <a class=\"btn btn-ec-delete\" href=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_tax_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 191)]), "html", null, true);
                echo "\"
                                                                                ";
                // line 192
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">
                                                                                ";
                // line 193
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            // line 200
            echo "                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TaxRule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Setting/Shop/tax_rule.twig";
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
        return array (  441 => 207,  429 => 200,  419 => 193,  415 => 192,  411 => 191,  406 => 189,  399 => 185,  391 => 180,  383 => 175,  379 => 174,  371 => 169,  367 => 168,  364 => 167,  362 => 166,  354 => 163,  343 => 157,  339 => 156,  331 => 151,  327 => 149,  322 => 147,  317 => 146,  311 => 144,  309 => 143,  301 => 138,  295 => 135,  287 => 130,  280 => 126,  275 => 124,  268 => 120,  263 => 118,  259 => 117,  253 => 116,  244 => 115,  240 => 114,  231 => 108,  223 => 103,  219 => 102,  213 => 99,  209 => 98,  202 => 94,  197 => 92,  190 => 88,  186 => 87,  175 => 79,  171 => 78,  167 => 77,  163 => 76,  144 => 60,  140 => 59,  133 => 54,  129 => 53,  120 => 47,  108 => 37,  104 => 36,  87 => 21,  83 => 20,  76 => 16,  69 => 15,  64 => 11,  62 => 18,  60 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/tax_rule.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Setting/Shop/tax_rule.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 114, "if" => 115);
        static $filters = array("escape" => 15, "trans" => 15, "date_min" => 151);
        static $functions = array("url" => 47, "form_widget" => 88, "form_errors" => 94, "csrf_token_for_anchor" => 192);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'date_min'],
                ['url', 'form_widget', 'form_errors', 'csrf_token_for_anchor']
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
