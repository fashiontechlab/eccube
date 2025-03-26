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

/* @admin/Store/unregisterd_plugin_table.twig */
class __TwigTemplate_baeaa1cda7993b4fee1f3c255a57c4a1 extends Template
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
        echo "<div class=\"card-body p-0\">
    <table class=\"table table-sm\">
        <thead>
        <tr>
            <th class=\"border-top-0 ps-3 pt-2 pb-2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.941"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.944"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.945"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
            // line 24
            echo "            <form id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\" method=\"post\" action=\"\">
                <tr class=\"";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, true, 25) == false)) {
                echo "active";
            }
            echo "\">
                    ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", true, true, true, 26)) {
                // line 27
                echo "                        <td class=\"align-middle ps-3\">
                            <strong>";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            } else {
                // line 31
                echo "                        <td class=\"align-middle ps-3\">
                            <strong>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.946"), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            }
            // line 35
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", true, true, true, 35)) {
                // line 36
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 38
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.947"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 40
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", true, true, true, 40)) {
                // line 41
                echo "                        <td class=\"align-middle\"><p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</p>
                            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, true, true, 42), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 42), [], "array", false, true, true, 42), "const", [], "any", false, true, true, 42), "readme", [], "any", true, true, true, 42)) {
                    // line 43
                    echo "                                <a href=\"#\" class=\"view_readme\" data-bs-toggle=\"modal\" data-bs-target=\"#readmeModal\" data-name=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\" data-readme=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, false, true, 43)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 43)] ?? null) : null), "const", [], "any", false, false, true, 43), "readme", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.897"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 45
                echo "                        </td>
                    ";
            } else {
                // line 47
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.949"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 49
            echo "                    <td class=\"align-middle\">
                        &nbsp;-&nbsp;
                    </td>
                    <td class=\"align-middle\">
                        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["unregisteredPluginsConfigPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 53), [], "array", true, true, true, 53)) {
                // line 54
                echo "                            <a href='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["unregisteredPluginsConfigPages"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, true, 54)] ?? null) : null), 54, $this->source), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.950"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 56
                echo "                            &nbsp;-&nbsp;
                        ";
            }
            // line 58
            echo "                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Store/unregisterd_plugin_table.twig";
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
        return array (  191 => 62,  182 => 58,  178 => 56,  170 => 54,  168 => 53,  162 => 49,  156 => 47,  152 => 45,  142 => 43,  140 => 42,  135 => 41,  132 => 40,  126 => 38,  120 => 36,  117 => 35,  111 => 32,  108 => 31,  102 => 28,  99 => 27,  97 => 26,  91 => 25,  84 => 24,  80 => 23,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  51 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/unregisterd_plugin_table.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Store/unregisterd_plugin_table.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 23, "if" => 25);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans'],
                []
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
