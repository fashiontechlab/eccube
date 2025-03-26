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

/* @admin/Store/plugin_table.twig */
class __TwigTemplate_199c0138db90987838d8fe7b026df75f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
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

        // line 11
        echo "<script>
\$(function() {
    \$('#localPluginDeleteModal').on('show.bs.modal', function(e) {
        var deleteUrl = \$(e.relatedTarget).data('delete-url');
        \$('div.modal-footer a', this).attr('href', deleteUrl);
    });
});
</script>
";
        // line 19
        if ((twig_length_filter($this->env, ($context["Plugins"] ?? null)) > 0)) {
            // line 20
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 ps-3 pt-2 pb-2\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.887"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.888"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.889"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.890"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
                // line 34
                echo "                ";
                $context["form"] = (($__internal_compile_0 = ($context["plugin_forms"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 34)] ?? null) : null);
                // line 35
                echo "                ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
                // line 36
                echo "                <form id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 36), "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 36), "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" method=\"post\" action=\"\"
                      enctype=\"multipart/form-data\">
                    <tr class=\"";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 38) == false)) {
                    echo "active";
                }
                echo "\">
                        <td class=\"align-middle ps-3\">
                            ";
                // line 40
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
                        </td>
                        <td class=\"align-middle\">";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</td>
                        <td class=\"align-middle\">";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "
                            ";
                // line 45
                echo "                            ";
                // line 51
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 53)) {
                    // line 54
                    echo "                                <span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 56
                    echo "                                <span class=\"text-secondary\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 58
                echo "                        </td>
                        <td class=\"align-middle\">
                            ";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, true, 60) == 0)) {
                    // line 61
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 61), 61, $this->source), 'widget');
                    echo "
                                ";
                    // line 62
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plugin_id", [], "any", false, false, true, 62), 62, $this->source), 'widget');
                    echo "
                                ";
                    // line 63
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plugin_archive", [], "any", false, false, true, 63), 63, $this->source), 'widget', ["attr" => ["accept" => "application/zip,application/x-tar,application/x-gzip"]]);
                    echo "
                                ";
                    // line 64
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plugin_archive", [], "any", false, false, true, 64), 64, $this->source), 'errors');
                    echo "

                                <button class=\"btn btn-primary btn-xs mt-2\"
                                        onclick=\"changeActionSubmit('";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_update", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 67)]), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 67), "name", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                    echo "');\">
                                    ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.898"), "html", null, true);
                    echo "
                                </button>
                            ";
                }
                // line 71
                echo "                        </td>
                        <td class=\"align-middle\">
                            <div class=\"col-12 col-xs-11 col-md-12 col-lg-12 float-end text-center\">
                                <div class=\"row\">
                                        ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 75) == false)) {
                    // line 76
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                               data-bs-toggle=\"modal\"
                                               data-bs-target=\"#localPluginDeleteModal\"
                                               data-delete-url=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 80)]), "html", null, true);
                    echo "\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"削除\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 85
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 85)) {
                    // line 86
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 87)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-pause fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.903"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                } else {
                    // line 94
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, true, 95)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo "
                                               class=\"btn btn-ec-actionIcon\"
                                               data-method=\"post\" data-confirm=\"false\">
                                                <i class=\"fa fa-play fa-lg text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.902"), "html", null, true);
                    echo "\"></i>
                                            </a>
                                        </div>
                                        ";
                }
                // line 102
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 102), [], "array", true, true, true, 102)) {
                    // line 103
                    echo "                                        <div class=\"col-6 px-0\">
                                            <a href='";
                    // line 104
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["configPages"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 104)] ?? null) : null), 104, $this->source), "html", null, true);
                    echo "'
                                               class=\"btn btn-ec-actionIcon\">
                                                <i class=\"fa fa-cog fa-lg text-secondary\" data-bs-toggle=\"tooltip\"
                                                   data-bs-placement=\"top\" title=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.891"), "html", null, true);
                    echo "\"></i></a>
                                        </div>
                                        ";
                }
                // line 110
                echo "                                </div>
                            </div>
                        </td>
                    </tr>
                </form>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </tbody>
        </table>
    </div>
";
        } else {
            // line 120
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.900"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 126
        echo "
<div class=\"modal fade\" id=\"localPluginDeleteModal\" tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"localPluginDeleteModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fw-bold\">
                    ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
                <button class=\"btn-close\" type=\"button\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"Close\">
                </button>
            </div>
            <div class=\"modal-body text-start\">
                <p class=\"text-start\">
                    ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\"
                        data-bs-dismiss=\"modal\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                </button>
                <a href=\"#\" ";
        // line 148
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                   class=\"btn btn-ec-delete\"
                   data-confirm=\"false\"
                   data-method=\"delete\">
                    ";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                </a>
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
        return "@admin/Store/plugin_table.twig";
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
        return array (  335 => 152,  328 => 148,  323 => 146,  316 => 142,  305 => 134,  295 => 126,  288 => 122,  284 => 120,  278 => 116,  267 => 110,  261 => 107,  255 => 104,  252 => 103,  249 => 102,  242 => 98,  234 => 95,  231 => 94,  224 => 90,  216 => 87,  213 => 86,  210 => 85,  202 => 80,  196 => 76,  194 => 75,  188 => 71,  182 => 68,  176 => 67,  170 => 64,  166 => 63,  162 => 62,  157 => 61,  155 => 60,  151 => 58,  145 => 56,  139 => 54,  137 => 53,  133 => 51,  131 => 45,  127 => 43,  123 => 42,  118 => 40,  111 => 38,  103 => 36,  100 => 35,  97 => 34,  93 => 33,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  63 => 20,  61 => 19,  51 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_table.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Store/plugin_table.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 33, "set" => 34, "form_theme" => 35);
        static $filters = array("length" => 19, "escape" => 24, "trans" => 24);
        static $functions = array("form_widget" => 61, "form_errors" => 64, "url" => 67, "csrf_token_for_anchor" => 87);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'form_theme'],
                ['length', 'escape', 'trans'],
                ['form_widget', 'form_errors', 'url', 'csrf_token_for_anchor']
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
