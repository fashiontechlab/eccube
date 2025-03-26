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

/* @admin/Setting/Shop/mail.twig */
class __TwigTemplate_928aaaf641b50d2dcb53a46c6d09ec8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/mail.twig"));

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
        $context["menus"] = ["setting", "shop", "shop_mail"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/mail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail_setting"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 30
        echo "    <script>
        \$(function() {

            \$(window).on('pageshow', function() {
                var tmp_select =  \$('#mail_template[name=\"mail[template]\"] option[selected]').val();
                \$('#mail_template[name=\"mail[template]\"]').val(tmp_select);
            });

            \$('#mail_template').on('change', function() {
                var id = \$(this).val()
                if (id) {
                    location.href = '";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_mail");
        echo "/' + id;
                } else {
                    location.href = '";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_mail");
        echo "';
                }
            });

            ace.require('ace/ext/language_tools');
            var editor = ace.edit('editor');
            editor.session.setMode('ace/mode/twig');
            editor.setTheme('ace/theme/tomorrow');
            editor.setValue(\"";
        // line 51
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 51), "vars", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source), "js"), "html", null, true);
        echo "\");
            editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                showInvisibles: true
            });

            var html_editor = ace.edit('html_editor');
            html_editor.session.setMode('ace/mode/twig');
            html_editor.setTheme('ace/theme/tomorrow');
            html_editor.setValue(\"";
        // line 62
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 62), "vars", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62), 62, $this->source), "js"), "html", null, true);
        echo "\");
            html_editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                showInvisibles: true
            });

            \$(\"#editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$(\"#html_editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$('#form1').on('submit', function() {
                \$('#mail_tpl_data').val(editor.getValue());
                \$('#mail_html_tpl_data').val(html_editor.getValue());
            });

            // HTMLメールモーダル表示
            \$('#htmlPreviewModal').on('show.bs.modal', function (event) {
                var html = \$('#viewEmail');
                html.children().remove();

                // HTMLを読み込んでモーダルに表示
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'html_body' : html_editor.getValue(),
                    },
                    url: '";
        // line 99
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_mail_preview");
        echo "',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#viewEmail').html(data);
                    },
                    error: function() {
                        alert('preview html mail failed.');
                    }
                });
            });

            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                var activated_tab = e.target;
                var id = \$(activated_tab).attr('id');
                if (id == 'menu__";
        // line 113
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 113), "vars", [], "any", false, false, true, 113), "id", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "') {
                    \$('#preview_button').attr('style', 'display:blocked;');
                } else {
                    \$('#preview_button').attr('style', 'display:none;');
                }
            });
        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 124
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 125), 125, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template_edit"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.mail.mail_template"), "html", null, true);
        echo "\">
                                        <span>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["Mail"] ?? null), "isDeletable", [], "any", false, false, true, 138)) {
            // line 139
            echo "                                    <div class=\"col-8\">
                                        ";
            // line 140
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 140), 140, $this->source), 'widget');
            echo "
                                        ";
            // line 141
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 141), 141, $this->source), 'errors');
            echo "
                                    </div>
                                    <div class=\"col-2\">
                                        <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\" class=\"btn btn-ec-delete\">";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "</button>
                                    </div>
                                ";
        } else {
            // line 147
            echo "                                    <div class=\"col-10\">
                                        ";
            // line 148
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 148), 148, $this->source), 'widget');
            echo "
                                        ";
            // line 149
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, true, 149), 149, $this->source), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 152
        echo "                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 156), 156, $this->source), 'widget');
        echo "
                                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 157), 157, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_file_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, ($context["Mail"] ?? null), "id", [], "any", false, false, true, 163)) {
            // line 164
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Mail"] ?? null), "file_name", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
                                    ";
        } else {
            // line 166
            echo "                                        <div class=\"row\">
                                            <div class=\"col-1 pe-0 align-middle\"><span class=\"align-middle\">Mail/</span></div>
                                            <div class=\"col-7 ps-0\">
                                                ";
            // line 169
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, true, 169), 169, $this->source), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-4 ps-0\">.twig</div>
                                        </div>
                                        ";
            // line 173
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, true, 173), 173, $this->source), 'errors');
            echo "
                                    ";
        }
        // line 175
        echo "                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_subject"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 180), 180, $this->source), 'widget');
        echo "
                                    ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, true, 181), 181, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_text"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 187), 187, $this->source), 'label');
        echo "
                                    <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 188
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 188), 188, $this->source))) ? (" is-invalid") : (""));
        echo "\"></div>
                                    <div style=\"display: none\">";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 189), 189, $this->source), 'widget');
        echo "</div>
                                    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 190), 190, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <span>";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_html"), "html", null, true);
        echo "</span>
                                    <div class=\"btn-group\" role=\"group\">
                                        <button type=\"button\" id=\"preview_button\" class=\"btn w-100 text-nowrap btn-ec-regular\" data-bs-toggle=\"modal\" data-bs-target=\"#htmlPreviewModal\">
                                            ";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                                <div class=\"col-10\">
                                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 203), 203, $this->source), 'label');
        echo "
                                    <div id=\"html_editor\" style=\"height: 480px\" class=\"form-control";
        // line 204
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 204), 204, $this->source))) ? (" is-invalid") : (""));
        echo "\"></div>
                                    <div style=\"display: none\">";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 205), 205, $this->source), 'widget');
        echo "</div>
                                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "html_tpl_data", [], "any", false, false, true, 206), 206, $this->source), 'errors');
        echo "
                                </div>
                            </div>

                            ";
        // line 211
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 211), "eccube_form_options", [], "any", false, false, true, 211), "auto_render", [], "any", false, false, true, 211); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 212
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 212), "eccube_form_options", [], "any", false, false, true, 212), "form_theme", [], "any", false, false, true, 212)) {
                // line 213
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 213), "eccube_form_options", [], "any", false, false, true, 213), "form_theme", [], "any", false, false, true, 213)], true);
                // line 214
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 214, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 216
                echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
                // line 217
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 217), "label", [], "any", false, false, true, 217), 217, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
                // line 219
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 219, $this->source), 'widget');
                echo "
                                            ";
                // line 220
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 220, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 224
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\" id=\"aside_column\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- HTMLメールを確認するモーダル -->
    <div class=\"modal fade\" id=\"htmlPreviewModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"htmlPreviewModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"bg-light p-4 bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 削除モーダル -->
    ";
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["Mail"] ?? null), "isDeletable", [], "any", false, false, true, 269)) {
            // line 270
            echo "    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\"
         role=\"dialog\"
         aria-labelledby=\"deleteModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">
                        ";
            // line 277
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.delete__confirm_title"), "html", null, true);
            echo "</h5>
                    <button class=\"btn-close\" type=\"button\"
                            data-bs-dismiss=\"modal\"
                            aria-label=\"Close\">
                    </button>
                </div>
                <div class=\"modal-body text-start\">
                    <p class=\"text-start\">
                        ";
            // line 285
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.delete__confirm_message"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
            // line 288
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "
                    </button>
                    <a class=\"btn btn-ec-delete\"
                       href=\"";
            // line 291
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_mail_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["Mail"] ?? null), "id", [], "any", false, false, true, 291)]), "html", null, true);
            echo "\"
                        ";
            // line 292
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo "
                       data-method=\"delete\" data-confirm=\"false\">
                        ";
            // line 294
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Setting/Shop/mail.twig";
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
        return array (  590 => 294,  585 => 292,  581 => 291,  575 => 288,  569 => 285,  558 => 277,  549 => 270,  547 => 269,  538 => 263,  526 => 254,  509 => 240,  492 => 225,  486 => 224,  479 => 220,  475 => 219,  470 => 217,  467 => 216,  461 => 214,  458 => 213,  455 => 212,  450 => 211,  443 => 206,  439 => 205,  435 => 204,  431 => 203,  423 => 198,  417 => 195,  409 => 190,  405 => 189,  401 => 188,  397 => 187,  390 => 185,  383 => 181,  379 => 180,  372 => 178,  367 => 175,  362 => 173,  355 => 169,  350 => 166,  344 => 164,  342 => 163,  335 => 161,  328 => 157,  324 => 156,  317 => 154,  313 => 152,  307 => 149,  303 => 148,  300 => 147,  294 => 144,  288 => 141,  284 => 140,  281 => 139,  279 => 138,  273 => 135,  269 => 134,  262 => 130,  254 => 125,  251 => 124,  244 => 123,  228 => 113,  211 => 99,  171 => 62,  157 => 51,  146 => 43,  141 => 41,  128 => 30,  121 => 29,  108 => 21,  101 => 20,  88 => 16,  75 => 15,  67 => 11,  65 => 18,  63 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/mail.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Setting/Shop/mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 138, "for" => 211);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 211);
        static $functions = array("url" => 41, "form_widget" => 125, "form_errors" => 141, "form_label" => 187, "has_errors" => 188, "form_row" => 214, "csrf_token_for_anchor" => 292);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'form_label', 'has_errors', 'form_row', 'csrf_token_for_anchor']
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
