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

/* @admin/Store/plugin_confirm_panel.twig */
class __TwigTemplate_4eadfbb145acd0fe6a51ad9a8efbb763 extends Template
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
        echo "<div class=\"col-4\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "store_url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" alt=\"\"></a>
</div>
<div class=\"col\">
    <div class=\"info\">
        <h5 class=\"fw-bold mb-4\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
        </h5>
        <div>";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "short_description", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</div>
        ";
        // line 21
        if ((($context["is_update"] ?? null) == false)) {
            // line 22
            echo "            <p class=\"text-danger mb-4 mt-3\"><span class=\"fw-bold text-body\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, true, 22), 22, $this->source)), "html", null, true);
            echo "<small> (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
            echo ")</small></p>
        ";
        }
        // line 24
        echo "        <div class=\"row\">
            <div class=\"col-7 ps-4\">
                ";
        // line 26
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_detail_info.twig");
        echo "
            </div>
        </div>
    </div>
    ";
        // line 30
        $context["version_check"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version_check", [], "any", false, false, true, 30);
        // line 31
        echo "    ";
        if ((($context["version_check"] ?? null) == false)) {
            // line 32
            echo "        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"alert alert-danger border border-danger\">
                    <p class=\"text-danger mb-0\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.note", ["%version%" => twig_constant("Eccube\\Common\\Constant::VERSION")]), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 42
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Store/plugin_confirm_panel.twig";
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
        return array (  118 => 42,  109 => 36,  103 => 32,  100 => 31,  98 => 30,  91 => 26,  87 => 24,  77 => 22,  75 => 21,  71 => 20,  66 => 18,  58 => 13,  54 => 12,  51 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store/plugin_confirm_panel.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/admin/Store/plugin_confirm_panel.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "set" => 30);
        static $filters = array("escape" => 12, "trans" => 22, "price" => 22);
        static $functions = array("include" => 26, "constant" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'trans', 'price'],
                ['include', 'constant']
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
