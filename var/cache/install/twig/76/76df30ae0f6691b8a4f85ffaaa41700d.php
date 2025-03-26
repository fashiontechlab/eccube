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

/* @admin/Setting/System/masterdata.twig */
class __TwigTemplate_89da7af5330e3fcb30b45a3db0c9d77b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/System/masterdata.twig"));

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
        $context["menus"] = ["setting", "system", "masterdata"];
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/masterdata.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data_management"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <form id=\"form1\" name=\"form1\" method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_masterdata");
        echo "\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 24), 24, $this->source), 'widget');
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.master_data_management"), "html", null, true);
        echo "\">
                                <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data_management"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "masterdata", [], "any", false, false, true, 34), 34, $this->source), 'widget');
        echo "
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "masterdata", [], "any", false, false, true, 35), 35, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col mb-2\">
                                    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.select"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                ";
        // line 45
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "data", [], "any", false, false, true, 45))) {
            // line 46
            echo "                    <form id=\"form2\" name=\"form2\" method=\"post\" action=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_masterdata_edit");
            echo "\">
                        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "masterdata_name", [], "any", false, false, true, 47), 47, $this->source), 'widget');
            echo "
                        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "_token", [], "any", false, false, true, 48), 48, $this->source), 'widget');
            echo "
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"read\">
                                    ";
            // line 52
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.description"), "html", null, true));
            echo "
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\" style=\"width: 20%\">
                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.id"), "html", null, true);
            echo "
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.name"), "html", null, true);
            echo "
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "data", [], "any", false, false, true, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 69
                echo "                                        <tr id=\"ex-masterdata-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "vars", [], "any", false, false, true, 69), "name", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "\">
                                            <td class=\"align-middle text-center ps-3\">
                                                ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, true, 71), 71, $this->source), 'widget');
                echo "
                                                ";
                // line 72
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, true, 72), 72, $this->source), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, true, 75), 75, $this->source), 'widget');
                echo "
                                                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, true, 76), 76, $this->source), 'errors');
                echo "
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class=\"c-conversionArea\">
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
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.save"), "html", null, true);
            echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                ";
        }
        // line 104
        echo "            </div>
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
        return "@admin/Setting/System/masterdata.twig";
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
        return array (  260 => 104,  248 => 95,  231 => 80,  221 => 76,  217 => 75,  211 => 72,  207 => 71,  201 => 69,  197 => 68,  189 => 63,  183 => 60,  172 => 52,  165 => 48,  161 => 47,  156 => 46,  154 => 45,  144 => 38,  138 => 35,  134 => 34,  125 => 28,  121 => 27,  115 => 24,  111 => 23,  106 => 20,  99 => 19,  86 => 17,  73 => 16,  65 => 12,  63 => 15,  61 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/masterdata.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/admin/Setting/System/masterdata.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 15, "if" => 45, "for" => 68);
        static $filters = array("escape" => 16, "trans" => 16, "nl2br" => 52);
        static $functions = array("url" => 23, "form_widget" => 24, "form_errors" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
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
