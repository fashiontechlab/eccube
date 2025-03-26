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

/* Mail/shipping_notify.twig */
class __TwigTemplate_b1c7c07eb062bf67e8924b86904b6ab2 extends Template
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

        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 12), 12, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 12), 12, $this->source), "safe_textmail", null, true);
        echo " 様

お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。

";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, true, 16)) {
            // line 17
            echo "お問い合わせ番号：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, true, 17), 17, $this->source), "safe_textmail", null, true);
            echo "
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, true, 18), "confirm_url", [], "any", false, false, true, 18)) {
                // line 19
                echo "お問い合わせURL：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, true, 19), "confirm_url", [], "any", false, false, true, 19), 19, $this->source), "safe_textmail", null, true);
                echo "
";
            }
        }
        // line 22
        echo "
************************************************
　ご注文商品明細
************************************************

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "productOrderItems", [], "any", false, false, true, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 28
            echo "商品コード：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 28), 28, $this->source), "safe_textmail", null, true);
            echo "
商品名：";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 29), 29, $this->source), "safe_textmail", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 29), 29, $this->source), "safe_textmail", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 29), 29, $this->source), "safe_textmail", null, true);
            echo "
数量：";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 30), 30, $this->source)), "safe_textmail", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
============================================

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 39), 39, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 39), 39, $this->source), "safe_textmail", null, true);
        echo " 様
お名前(カナ)：";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 40), 40, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 40), 40, $this->source), "safe_textmail", null, true);
        echo " 様
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, true, 41)) {
            // line 42
            echo "会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, true, 42), 42, $this->source), "safe_textmail", null, true);
            echo "
";
        }
        // line 44
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 44), 44, $this->source), "safe_textmail", null, true);
        echo "
住所：";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, true, 45), "name", [], "any", false, false, true, 45), 45, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 45), 45, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 45), 45, $this->source), "safe_textmail", null, true);
        echo "
電話番号：";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, true, 46), 46, $this->source), "safe_textmail", null, true);
        echo "

************************************************
　配送情報
************************************************

お名前：";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name01", [], "any", false, false, true, 52), 52, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name02", [], "any", false, false, true, 52), 52, $this->source), "safe_textmail", null, true);
        echo " 様
お名前(カナ)：";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana01", [], "any", false, false, true, 53), 53, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana02", [], "any", false, false, true, 53), 53, $this->source), "safe_textmail", null, true);
        echo " 様
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, true, 54)) {
            // line 55
            echo "会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, true, 55), 55, $this->source), "safe_textmail", null, true);
            echo "
";
        }
        // line 57
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "postal_code", [], "any", false, false, true, 57), 57, $this->source), "safe_textmail", null, true);
        echo "
住所：";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Pref", [], "any", false, false, true, 58), "name", [], "any", false, false, true, 58), 58, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr01", [], "any", false, false, true, 58), 58, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr02", [], "any", false, false, true, 58), 58, $this->source), "safe_textmail", null, true);
        echo "
電話番号：";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "phone_number", [], "any", false, false, true, 59), 59, $this->source), "safe_textmail", null, true);
        echo "

配送方法：";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_name", [], "any", false, false, true, 61), 61, $this->source), "safe_textmail", null, true);
        echo "
お届け日：";
        // line 62
        ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, true, 62))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, true, 62)), "safe_textmail", null, true))));
        echo "
お届け時間：";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, true, 63)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, true, 63), 63, $this->source), "指定なし")) : ("指定なし")), "safe_textmail", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Mail/shipping_notify.twig";
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
        return array (  201 => 63,  197 => 62,  193 => 61,  188 => 59,  182 => 58,  177 => 57,  171 => 55,  169 => 54,  163 => 53,  157 => 52,  148 => 46,  142 => 45,  137 => 44,  131 => 42,  129 => 41,  123 => 40,  117 => 39,  109 => 33,  100 => 30,  92 => 29,  87 => 28,  83 => 27,  76 => 22,  69 => 19,  67 => 18,  62 => 17,  60 => 16,  51 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/shipping_notify.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Mail/shipping_notify.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 11, "if" => 16, "for" => 27);
        static $filters = array("escape" => 12, "number_format" => 30, "date_day" => 62, "default" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['autoescape', 'if', 'for'],
                ['escape', 'number_format', 'date_day', 'default'],
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
