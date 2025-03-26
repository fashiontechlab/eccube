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

/* @admin/Setting/System/security.twig */
class __TwigTemplate_020691e75a197379fdf69248d9324b39 extends Template
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
        $context["menus"] = ["setting", "system", "security"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/security.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style type=\"text/css\">
        .col-sm-2 {
            max-width: none;
        }

        label {
            display: inline;
        }
    </style>
";
    }

    // line 32
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_security");
        echo "\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 34), 34, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security_admin_url__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#urlConfig\" aria-expanded=\"false\" aria-controls=\"basicConfig\"><i class=\"fa fa-angle-up fa-lg\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"urlConfig\">
                            <div class=\"card-body\">
                                <!-- ディレクトリ名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.admin_url"), "html", null, true);
        echo "\">
                                            <span>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.admin_url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_route_dir", [], "any", false, false, true, 61), 61, $this->source), 'widget');
        echo "
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_route_dir", [], "any", false, false, true, 62), 62, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security_admin_ip_limit__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#adminIpConfig\" aria-expanded=\"false\" aria-controls=\"basicConfig\"><i class=\"fa fa-angle-up fa-lg\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"adminIpConfig\">
                            <div class=\"card-body\">
                                <!-- 管理画面側 IP制限 許可リスト -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.ip_limit"), "html", null, true);
        echo "\">
                                            <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_allow_hosts", [], "any", false, false, true, 90), 90, $this->source), 'widget', ["attr" => ["rows" => "8", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_sample")]]);
        echo "
                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_allow_hosts", [], "any", false, false, true, 91), 91, $this->source), 'errors');
        echo "
                                        <p>";
        // line 92
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_description"), "html", null, true));
        echo "</p>
                                    </div>
                                </div>
                                <!-- 管理画面側 IP制限 拒否リスト -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.ip_limit_deny"), "html", null, true);
        echo "\">
                                            <span>";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_deny"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_deny_hosts", [], "any", false, false, true, 103), 103, $this->source), 'widget', ["attr" => ["rows" => "8", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_sample")]]);
        echo "
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_deny_hosts", [], "any", false, false, true, 104), 104, $this->source), 'errors');
        echo "
                                        <p>";
        // line 105
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_description_deny"), "html", null, true));
        echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security_front_ip_limit__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#frontIpConfig\" aria-expanded=\"false\" aria-controls=\"basicConfig\"><i class=\"fa fa-angle-up fa-lg\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"frontIpConfig\">
                            <div class=\"card-body\">
                                <!-- フロント側 IP制限 許可リスト -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.front_ip_limit"), "html", null, true);
        echo "\">
                                            <span>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "front_allow_hosts", [], "any", false, false, true, 136), 136, $this->source), 'widget', ["attr" => ["rows" => "8", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_sample")]]);
        echo "
                                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "front_allow_hosts", [], "any", false, false, true, 137), 137, $this->source), 'errors');
        echo "
                                        <p>";
        // line 138
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.front_ip_limit_description"), "html", null, true));
        echo "</p>
                                    </div>
                                </div>
                                <!-- フロント側 IP制限 禁止リスト -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.front_ip_limit_deny"), "html", null, true);
        echo "\">
                                            <span>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_deny"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "front_deny_hosts", [], "any", false, false, true, 149), 149, $this->source), 'widget', ["attr" => ["rows" => "8", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_sample")]]);
        echo "
                                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "front_deny_hosts", [], "any", false, false, true, 150), 150, $this->source), 'errors');
        echo "
                                        <p>";
        // line 151
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.front_ip_limit_description_deny"), "html", null, true));
        echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card -->


                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security_connect_card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#networkConfig\" aria-expanded=\"false\" aria-controls=\"basicConfig\"><i class=\"fa fa-angle-up fa-lg\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"networkConfig\">
                            <div class=\"card-body\">
                                <!-- 強制SSL -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.force_ssl"), "html", null, true);
        echo "\">
                                            <span>";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.force_ssl"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 180
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, true, 180), "secure", [], "any", false, false, true, 180)) {
            // line 181
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, true, 181), 181, $this->source), 'widget');
            echo "
                                            ";
            // line 182
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, true, 182), 182, $this->source), 'errors');
            echo "
                                        ";
        } else {
            // line 184
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, true, 184), 184, $this->source), 'widget', ["attr" => ["disabled" => "disabled"]]);
            echo "
                                            ";
            // line 185
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, true, 185), 185, $this->source), 'errors');
            echo "
                                            <p class=\"text-danger\">";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.force_ssl_description"), "html", null, true);
            echo "</p>
                                        ";
        }
        // line 188
        echo "                                    </div>
                                </div>
                                <!-- TRUSTED_HOSTS -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.trusted_hosts"), "html", null, true);
        echo "\">
                                            <span>";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.trusted_hosts"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "trusted_hosts", [], "any", false, false, true, 199), 199, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.trusted_hosts_sample")]]);
        echo "
                                        ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "trusted_hosts", [], "any", false, false, true, 200), 200, $this->source), 'errors');
        echo "
                                        <p>";
        // line 201
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.trusted_hosts_description"), "html", null, true));
        echo "</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- /.card -->


                </div>
            </div>

            <div class=\"c-conversionArea\">
                <div class=\"c-conversionArea__container\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-6\">
                            <div class=\"c-conversionArea__leftBlockItem\"></div>
                        </div>
                        <div class=\"col-6\">
                            <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                <div class=\"col-auto\">
                                    <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        return "@admin/Setting/System/security.twig";
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
        return array (  430 => 222,  406 => 201,  402 => 200,  398 => 199,  392 => 196,  387 => 194,  383 => 193,  376 => 188,  371 => 186,  367 => 185,  362 => 184,  357 => 182,  352 => 181,  350 => 180,  343 => 176,  339 => 175,  324 => 163,  309 => 151,  305 => 150,  301 => 149,  294 => 145,  290 => 144,  281 => 138,  277 => 137,  273 => 136,  266 => 132,  262 => 131,  247 => 119,  230 => 105,  226 => 104,  222 => 103,  215 => 99,  211 => 98,  202 => 92,  198 => 91,  194 => 90,  187 => 86,  183 => 85,  168 => 73,  154 => 62,  150 => 61,  144 => 58,  139 => 56,  135 => 55,  120 => 43,  108 => 34,  103 => 33,  99 => 32,  86 => 21,  82 => 20,  75 => 16,  68 => 15,  63 => 11,  61 => 18,  59 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/security.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Setting/System/security.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 180);
        static $filters = array("escape" => 15, "trans" => 15, "nl2br" => 92);
        static $functions = array("url" => 33, "form_widget" => 34, "form_errors" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans', 'nl2br'],
                ['url', 'form_widget', 'form_errors']
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
