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

/* @admin/Content/page_edit.twig */
class __TwigTemplate_540803fc7c42c7cccb7e58e9afe3db61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/page_edit.twig"));

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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 14), "query", [], "any", false, false, true, 14), "get", ["return"], "method", false, false, true, 14) == "tradelaw")) {
            // line 15
            $context["menus"] = ["setting", "shop", "shop_tradelaw"];
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["app"] ?? null), "request", [], "any", false, false, true, 16), "query", [], "any", false, false, true, 16), "get", ["return"], "method", false, false, true, 16) == "agreement")) {
            // line 17
            $context["menus"] = ["setting", "shop", "shop_agreement"];
        } else {
            // line 19
            $context["menus"] = ["content", "page"];
        }
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/page_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 28
        echo "    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 37
        echo "    <script>
        ace.require('ace/ext/language_tools');
        var editor = ace.edit('editor');
        editor.session.setMode('ace/mode/twig');
        editor.setTheme('ace/theme/tomorrow');
        editor.setValue('";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 42), "vars", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source), "js"), "html", null, true);
        echo "');
        editor.setOptions({
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

        \$('#content_page_form').on('submit', function(elem) {
            \$('#main_edit_tpl_data').val(editor.getValue());
        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 63
        echo "    <form id=\"content_page_form\" method=\"post\"
          action=\"";
        // line 64
        if ( !(null === ($context["page_id"] ?? null))) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_edit", ["id" => ($context["page_id"] ?? null)]), "html", null, true);
        } else {
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_new");
        }
        echo "\">
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 65), 65, $this->source), 'widget');
        echo "

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <!-- ページ設定 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page__card_title"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#pageDetail\" aria-expanded=\"false\" aria-controls=\"pageDetail\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"pageDetail\">
                            <div class=\"card-body\">
                                <!-- ページ名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 91), 91, $this->source), 'widget');
        echo "
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 92), 92, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- URL -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_url"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"row\">
                                            ";
        // line 103
        if (($context["is_user_data_page"] ?? null)) {
            // line 104
            echo "                                                <div class=\"col-3 pe-0\"><span class=\"align-middle\">";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_user_data_route", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "/</span></div>
                                                <div class=\"col-9 ps-0\">";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, true, 105), 105, $this->source), 'widget');
            echo "</div>
                                            ";
        } else {
            // line 107
            echo "                                                <div class=\"col pe-0\"><span class=\"align-middle\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 107), "schemeAndHttpHost", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 107), "basePath", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 107, $this->source), "html", null, true);
            echo "</span></div>
                                                <div>";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, true, 108), 108, $this->source), 'widget', ["type" => "hidden"]);
            echo "</div>
                                            ";
        }
        // line 110
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, true, 110), 110, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <!-- ファイル名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_file_name"), "html", null, true);
        echo "\">
                                            <span>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_file_name"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"row\">
                                            ";
        // line 124
        if (($context["is_user_data_page"] ?? null)) {
            // line 125
            echo "                                                <div class=\"col-3 pe-0 align-middle\"><span class=\"align-middle\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_path"] ?? null), 125, $this->source), "html", null, true);
            echo "/</span></div>
                                                <div class=\"col-7 ps-0\">
                                                    ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, true, 127), 127, $this->source), 'widget');
            echo "
                                                </div>
                                                <div class=\"col-2 ps-0\">.twig</div>
                                            ";
        } else {
            // line 131
            echo "                                                <div class=\"col pe-0 align-middle\">
                                                    <span class=\"align-middle\">";
            // line 132
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_path"] ?? null), 132, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, true, 132), "vars", [], "any", false, false, true, 132), "value", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo ".twig</span>
                                                    <div>";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, true, 133), 133, $this->source), 'widget', ["type" => "hidden"]);
            echo "</div>
                                                </div>
                                            ";
        }
        // line 136
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, true, 136), 136, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <!-- コード -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_source_code"), "html", null, true);
        echo "\">
                                            <span>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_source_code"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 149
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 149), 149, $this->source))) ? (" is-invalid") : (""));
        echo "\"></div>
                                        <div style=\"display: none\">";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 150), 150, $this->source), 'widget');
        echo "</div>
                                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, true, 151), 151, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 155
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 155), "eccube_form_options", [], "any", false, false, true, 155), "auto_render", [], "any", false, false, true, 155); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 156
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 156), "eccube_form_options", [], "any", false, false, true, 156), "form_theme", [], "any", false, false, true, 156)) {
                // line 157
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 157), "eccube_form_options", [], "any", false, false, true, 157), "form_theme", [], "any", false, false, true, 157)], true);
                // line 158
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 158, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 160
                echo "                                        <div class=\"row\">
                                            <div class=\"col-2\"><span>";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 161), "label", [], "any", false, false, true, 161), 161, $this->source)), "html", null, true);
                echo "</span></div>
                                            <div class=\"col-10\">
                                                ";
                // line 163
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 163, $this->source), 'widget');
                echo "
                                                ";
                // line 164
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 164, $this->source), 'errors');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            // line 168
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                            </div>
                        </div>
                    </div>";
        // line 172
        if ( !($context["is_confirm_page"] ?? null)) {
            // line 173
            echo "                        <!-- レイアウト設定 -->
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_layout"), "html", null, true);
            echo "\">
                                            <span class=\"card-title\">
                                                ";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_layout__card_title"), "html", null, true);
            echo "
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#pageLayout\" aria-expanded=\"false\" aria-controls=\"pageLayout\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"pageLayout\">
                                <div class=\"card-body\">
                                    <!-- PC -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_pc"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 199
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "PcLayout", [], "any", false, false, true, 199), 199, $this->source), 'widget');
            echo "
                                            ";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "PcLayout", [], "any", false, false, true, 200), 200, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- モバイル -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_mobile"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 207
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "SpLayout", [], "any", false, false, true, 207), 207, $this->source), 'widget');
            echo "
                                            ";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "SpLayout", [], "any", false, false, true, 208), 208, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- メタ設定 -->
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_meta"), "html", null, true);
            echo "\">
                                            <span class=\"card-title\">";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta__card_title"), "html", null, true);
            echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#pageMeta\" aria-expanded=\"false\" aria-controls=\"pageMeta\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"pageMeta\">
                                <div class=\"card-body\">
                                    <!-- author -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_author"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 237
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "author", [], "any", false, false, true, 237), 237, $this->source), 'widget');
            echo "
                                            ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "author", [], "any", false, false, true, 238), 238, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- description -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_description"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 245
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 245), 245, $this->source), 'widget');
            echo "
                                            ";
            // line 246
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 246), 246, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- keyword -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_keyword"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 253
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "keyword", [], "any", false, false, true, 253), 253, $this->source), 'widget');
            echo "
                                            ";
            // line 254
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "keyword", [], "any", false, false, true, 254), 254, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- robot -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_robot"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 261
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_robots", [], "any", false, false, true, 261), 261, $this->source), 'widget');
            echo "
                                            ";
            // line 262
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_robots", [], "any", false, false, true, 262), 262, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- metatag -->
                                    <div class=\"row\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_meta_tags"), "html", null, true);
            echo "\">
                                                <span>";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_metatag"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col-10\">
                                            ";
            // line 274
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_tags", [], "any", false, false, true, 274), 274, $this->source), 'widget');
            echo "
                                            ";
            // line 275
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "meta_tags", [], "any", false, false, true, 275), 275, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 282
        echo "</div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 290
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 299
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
        return "@admin/Content/page_edit.twig";
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
        return array (  635 => 299,  625 => 292,  620 => 290,  610 => 282,  600 => 275,  596 => 274,  588 => 269,  584 => 268,  575 => 262,  571 => 261,  566 => 259,  558 => 254,  554 => 253,  549 => 251,  541 => 246,  537 => 245,  532 => 243,  524 => 238,  520 => 237,  515 => 235,  497 => 220,  493 => 219,  479 => 208,  475 => 207,  470 => 205,  462 => 200,  458 => 199,  453 => 197,  434 => 181,  429 => 179,  421 => 173,  419 => 172,  415 => 169,  409 => 168,  402 => 164,  398 => 163,  393 => 161,  390 => 160,  384 => 158,  381 => 157,  378 => 156,  373 => 155,  367 => 151,  363 => 150,  359 => 149,  353 => 146,  348 => 144,  344 => 143,  333 => 136,  327 => 133,  321 => 132,  318 => 131,  311 => 127,  305 => 125,  303 => 124,  296 => 120,  291 => 118,  287 => 117,  276 => 110,  271 => 108,  264 => 107,  259 => 105,  253 => 104,  251 => 103,  244 => 99,  240 => 98,  231 => 92,  227 => 91,  221 => 88,  217 => 87,  201 => 74,  189 => 65,  181 => 64,  178 => 63,  171 => 62,  145 => 42,  138 => 37,  131 => 36,  118 => 28,  111 => 27,  98 => 23,  85 => 22,  77 => 11,  75 => 25,  72 => 19,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/page_edit.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Content/page_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "set" => 15, "form_theme" => 25, "for" => 155);
        static $filters = array("escape" => 22, "trans" => 22, "filter" => 155);
        static $functions = array("url" => 64, "form_widget" => 65, "form_errors" => 92, "has_errors" => 149, "form_row" => 158);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'form_theme', 'for'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'has_errors', 'form_row']
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
