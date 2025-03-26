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

/* Help/about.twig */
class __TwigTemplate_7cf7247d036da00ec431fc5a99b1ebe1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Help/about.twig"));

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

        $this->parent = $this->loadTemplate("default_frame.twig", "Help/about.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("当サイトについて"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-borderedDefs\">
                ";
        // line 22
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", true, true, true, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 22))) : ("")))) {
            // line 23
            echo "                    <dl id=\"help_about_box__shop_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 30
        echo "                ";
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", true, true, true, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", false, false, true, 30))) : ("")))) {
            // line 31
            echo "                    <dl id=\"help_about_box__company_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 38
        echo "
                ";
        // line 39
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", true, true, true, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", false, false, true, 39))) : ("")))) {
            // line 40
            echo "                    <dl id=\"help_about_box__address\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "<br />
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "pref", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "addr01", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "addr02", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
                        </dd>
                    </dl>
                ";
        }
        // line 49
        echo "
                ";
        // line 50
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", true, true, true, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", false, false, true, 50))) : ("")))) {
            // line 51
            echo "                    <dl id=\"help_about_box__phone_number\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 58
        echo "
                ";
        // line 59
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", true, true, true, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", false, false, true, 59))) : ("")))) {
            // line 60
            echo "                    <dl id=\"help_about_box__business_hour\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店舗営業時間"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", true, true, true, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", false, false, true, 68))) : ("")))) {
            // line 69
            echo "                    <dl id=\"help_about_box__good_traded\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("取り扱い商品"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 73
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", false, false, true, 73), 73, $this->source), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 76
        echo "
                ";
        // line 77
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", true, true, true, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", false, false, true, 77))) : ("")))) {
            // line 78
            echo "                    <dl id=\"help_about_box__message\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メッセージ"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 82
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", false, false, true, 82), 82, $this->source), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 85
        echo "            </div>

        </div>
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
        return "Help/about.twig";
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
        return array (  229 => 85,  223 => 82,  218 => 80,  214 => 78,  212 => 77,  209 => 76,  203 => 73,  198 => 71,  194 => 69,  192 => 68,  189 => 67,  183 => 64,  178 => 62,  174 => 60,  172 => 59,  169 => 58,  163 => 55,  158 => 53,  154 => 51,  152 => 50,  149 => 49,  140 => 45,  135 => 44,  130 => 42,  126 => 40,  124 => 39,  121 => 38,  115 => 35,  110 => 33,  106 => 31,  103 => 30,  97 => 27,  92 => 25,  88 => 23,  86 => 22,  78 => 17,  73 => 14,  66 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help/about.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Help/about.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array("escape" => 17, "trans" => 17, "default" => 22, "nl2br" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans', 'default', 'nl2br'],
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
