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

/* @admin/Setting/Shop/tradelaw.twig */
class __TwigTemplate_d0b6f6d80c0350466f01aa01a8dfb163 extends Template
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
        $context["menus"] = ["setting", "shop", "shop_tradelaw"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/tradelaw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tradelaw_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 20
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 21, $this->source), 'form_start');
        echo "
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\">
                            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tradelaw_setting"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table tabel-sm\">
                            <thead>
                            <tr>
                                <th class=\"align-middle text-center\" width=\"600\">
                                    <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.trade_law.header.name"), "html", null, true);
        echo "</span></th>
                                <th class=\"align-middle text-center\">
                                    <span>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.trade_law.header.description"), "html", null, true);
        echo "</span></th>
                                <th class=\"align-middle text-center\" width=\"300\">
                                    <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.trade_law.header.confirm_page_show"), "html", null, true);
        echo "</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "TradeLaws", [], "any", false, false, true, 45));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["TradeLaw"]) {
            // line 46
            echo "                                <tr id=\"tradeLawRow_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\">
                                    <td class=\"align-middle\" width=\"600\">
                                        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TradeLaw"], "name", [], "any", false, false, true, 48), 48, $this->source), 'widget');
            echo "
                                        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TradeLaw"], "name", [], "any", false, false, true, 49), 49, $this->source), 'errors');
            echo "
                                    </td>
                                    <td class=\"align-middle\">
                                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TradeLaw"], "description", [], "any", false, false, true, 52), 52, $this->source), 'widget');
            echo "
                                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TradeLaw"], "description", [], "any", false, false, true, 53), 53, $this->source), 'errors');
            echo "
                                    </td>
                                    <td class=\"align-middle text-center\" width=\"300\">
                                        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TradeLaw"], "displayOrderScreen", [], "any", false, false, true, 56), 56, $this->source), 'widget');
            echo "
                                        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TradeLaw"], "displayOrderScreen", [], "any", false, false, true, 57), 57, $this->source), 'errors');
            echo "
                                    </td>
                                </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TradeLaw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </tbody>
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
                                        <button class=\"btn btn-ec-conversion px-5\"
                                                type=\"submit\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.save"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 86, $this->source), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Setting/Shop/tradelaw.twig";
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
        return array (  220 => 86,  207 => 76,  190 => 61,  172 => 57,  168 => 56,  162 => 53,  158 => 52,  152 => 49,  148 => 48,  142 => 46,  125 => 45,  117 => 40,  112 => 38,  107 => 36,  96 => 28,  85 => 21,  81 => 20,  74 => 16,  67 => 15,  62 => 11,  60 => 18,  58 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/tradelaw.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Setting/Shop/tradelaw.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 45);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("form_start" => 21, "form_widget" => 48, "form_errors" => 49, "form_end" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for'],
                ['escape', 'trans'],
                ['form_start', 'form_widget', 'form_errors', 'form_end']
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
