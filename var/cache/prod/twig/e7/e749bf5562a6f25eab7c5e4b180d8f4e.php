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

/* @admin/Setting/System/login_history.twig */
class __TwigTemplate_164b69bcddb0ac8b51deb40e76cbf6fc extends Template
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
        $context["menus"] = ["setting", "system", "login_history"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/login_history.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, true, 23), 23, $this->source), 'widget');
        echo "
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents\">
            <div class=\"row justify-content-start\">
                <div class=\"col-6\">
                    <div class=\"mb-2\">
                        <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.login_history.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 30), 30, $this->source), 'widget');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, true, 31), 31, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a></div>
                </div>
            </div>
        </div>
        <div class=\"c-subContents ec-collapse collapse";
        // line 37
        echo ((($context["has_errors"] ?? null)) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.user_name"), "html", null, true);
        echo "</label>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "user_name", [], "any", false, false, true, 42), 42, $this->source), 'widget');
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "user_name", [], "any", false, false, true, 43), 43, $this->source), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.client_ip"), "html", null, true);
        echo "</label>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "client_ip", [], "any", false, false, true, 49), 49, $this->source), 'widget');
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "client_ip", [], "any", false, false, true, 50), 50, $this->source), 'errors');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.create_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_start", [], "any", false, false, true, 61), 61, $this->source), 'widget');
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_start", [], "any", false, false, true, 62), 62, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_end", [], "any", false, false, true, 66), 66, $this->source), 'widget');
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "create_datetime_end", [], "any", false, false, true, 67), 67, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.status"), "html", null, true);
        echo "</label>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "Status", [], "any", false, false, true, 75), 75, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "Status", [], "any", false, false, true, 76), 76, $this->source), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 82
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["searchForm"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 82), "eccube_form_options", [], "any", false, false, true, 82), "auto_render", [], "any", false, false, true, 82); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 83
            echo "                <div class=\"row mb-2\">
                    ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 84), "eccube_form_options", [], "any", false, false, true, 84), "form_theme", [], "any", false, false, true, 84)) {
                // line 85
                echo "                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 85), "eccube_form_options", [], "any", false, false, true, 85), "form_theme", [], "any", false, false, true, 85)], true);
                // line 86
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 86, $this->source), 'row');
                echo "
                    ";
            } else {
                // line 88
                echo "                        <div class=\"col\">
                            <div class=\"mb-3\">
                                <label>";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 90), "label", [], "any", false, false, true, 90), 90, $this->source)), "html", null, true);
                echo "</label>
                                ";
                // line 91
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 91, $this->source), 'widget');
                echo "
                                ";
                // line 92
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 92, $this->source), 'errors');
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 96
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </div>
    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
        ";
        // line 102
        if (($context["pagination"] ?? null)) {
            // line 103
            echo "            <span class=\"fw-bold ms-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 103)]), "html", null, true);
            echo "</span>
        ";
        }
        // line 105
        echo "    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        ";
        // line 107
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => ($context["searchForm"] ?? null)], true, true);
        echo "
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 112
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 112))) {
            // line 113
            echo "                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            ";
            // line 118
            echo "                            <div class=\"d-inline-block me-2\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 121
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 121) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 122
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_setting_system_login_history_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 122)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 122)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
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
                                        <th class=\"border-top-0 pt-2 pb-3 ps-3\">";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.user_name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3 ps-3\">";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.client_ip"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.create_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.status"), "html", null, true);
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["LoginHistory"]) {
                // line 145
                echo "                                    <tr>
                                        <td class=\"align-middle ps-3\">
                                            ";
                // line 147
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "id", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
                // line 150
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "user_name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
                // line 153
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "client_ip", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "create_date", [], "any", false, false, true, 156), 156, $this->source), "", "Y/m/d H:i:s"), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            <span class=\"badge ";
                // line 159
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "Status", [], "any", false, false, true, 159), "id", [], "any", false, false, true, 159) == twig_constant("Eccube\\Entity\\Master\\LoginHistoryStatus::SUCCESS"))) {
                    echo "badge-ec-blue";
                } else {
                    echo "badge-ec-red";
                }
                echo "\">
                                                ";
                // line 160
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "Status", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "
                                            </span>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['LoginHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, true, 168) > 0)) {
                // line 169
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Setting/System/login_history.twig", 169)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 169), "routes" => "admin_setting_system_login_history_page"]));
                // line 170
                echo "                                ";
            }
            // line 171
            echo "                            </div>
                        </div>
                    </div>
                ";
        } elseif (        // line 174
($context["has_errors"] ?? null)) {
            // line 175
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 182
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 190
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
        return "@admin/Setting/System/login_history.twig";
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
        return array (  459 => 190,  452 => 186,  448 => 185,  444 => 184,  440 => 182,  433 => 178,  429 => 177,  425 => 175,  423 => 174,  418 => 171,  415 => 170,  412 => 169,  410 => 168,  405 => 165,  394 => 160,  386 => 159,  380 => 156,  374 => 153,  368 => 150,  362 => 147,  358 => 145,  354 => 144,  347 => 140,  343 => 139,  339 => 138,  335 => 137,  331 => 136,  317 => 124,  306 => 122,  301 => 121,  297 => 120,  293 => 118,  287 => 113,  285 => 112,  277 => 107,  273 => 105,  267 => 103,  265 => 102,  261 => 101,  256 => 98,  249 => 96,  242 => 92,  238 => 91,  234 => 90,  230 => 88,  224 => 86,  221 => 85,  219 => 84,  216 => 83,  211 => 82,  203 => 76,  199 => 75,  195 => 74,  185 => 67,  181 => 66,  176 => 64,  171 => 62,  167 => 61,  161 => 58,  150 => 50,  146 => 49,  142 => 48,  134 => 43,  130 => 42,  126 => 41,  119 => 37,  112 => 33,  107 => 31,  103 => 30,  97 => 29,  88 => 23,  85 => 22,  81 => 21,  74 => 17,  67 => 16,  62 => 12,  60 => 19,  58 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/login_history.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Setting/System/login_history.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 19, "for" => 82, "if" => 84, "include" => 169);
        static $filters = array("escape" => 16, "trans" => 16, "filter" => 82, "date_format" => 156);
        static $functions = array("form_widget" => 23, "form_errors" => 31, "form_row" => 86, "include" => 107, "path" => 122, "constant" => 159);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter', 'date_format'],
                ['form_widget', 'form_errors', 'form_row', 'include', 'path', 'constant']
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
