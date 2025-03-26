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

/* Mail/order.twig */
class __TwigTemplate_171ca561c1bdf9773a2d92563832a3e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/order.twig"));

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

この度はご注文いただき誠にありがとうございます。下記ご注文内容にお間違えがないかご確認下さい。

************************************************
　ご請求金額
************************************************

ご注文日時：";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, true, 20), 20, $this->source)), "safe_textmail", null, true);
        echo "
ご注文番号：";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, true, 21), 21, $this->source), "safe_textmail", null, true);
        echo "
お支払い合計：";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 22), 22, $this->source)), "safe_textmail", null, true);
        echo "
お支払い方法：";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_method", [], "any", false, false, true, 23), 23, $this->source), "safe_textmail", null, true);
        echo "
";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 24)))) {
            // line 25
            echo "ご利用ポイント：";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", [], "any", false, false, true, 25), 25, $this->source)), "safe_textmail", null, true);
            echo " pt
加算ポイント：";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addPoint", [], "any", false, false, true, 26), 26, $this->source)), "safe_textmail", null, true);
            echo " pt
";
        }
        // line 28
        echo "お問い合わせ：";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, true, 28), 28, $this->source), "safe_textmail", null, true);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 35
        $context["isShowReducedTaxMess"] = false;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MergedProductOrderItems", [], "any", false, false, true, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 37
            echo "商品コード：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 37), 37, $this->source), "safe_textmail", null, true);
            echo "
商品名：";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 38), 38, $this->source), "safe_textmail", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 38), 38, $this->source), "safe_textmail", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 38), 38, $this->source), "safe_textmail", null, true);
            echo " ";
            if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["OrderItem"])) {
                echo "※";
                $context["isShowReducedTaxMess"] = true;
            }
            // line 39
            echo "
単価：";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inctax", [], "any", false, false, true, 40), 40, $this->source)), "safe_textmail", null, true);
            echo "
数量：";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 41), 41, $this->source)), "safe_textmail", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        if (($context["isShowReducedTaxMess"] ?? null)) {
            echo "※は軽減税率対象商品です。
";
        }
        // line 46
        echo "-------------------------------------------------
小　計：";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, true, 47), 47, $this->source)), "safe_textmail", null, true);
        echo "
手数料：";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, true, 48), 48, $this->source)), "safe_textmail", null, true);
        echo "
送　料：";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, true, 49), 49, $this->source)), "safe_textmail", null, true);
        echo "
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 50) < 0)) {
            // line 51
            echo "値引き：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 51), 51, $this->source)), "safe_textmail", null, true);
            echo "
";
        }
        // line 53
        echo "-------------------------------------------------
合　計：";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, true, 54), 54, $this->source)), "safe_textmail", null, true);
        echo "
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, true, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 56), 56, $this->source), "safe_textmail", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 56), 56, $this->source)), "safe_textmail", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "============================================
お支払い合計：";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 59), 59, $this->source)), "safe_textmail", null, true);
        echo "
  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "total_by_tax_rate", [], "any", false, false, true, 60));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 61
            echo "  (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["rate"], 61, $this->source), "safe_textmail", null, true);
            echo " %対象：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 61, $this->source)), "safe_textmail", null, true);
            echo " 内消費税：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_by_tax_rate", [], "any", false, false, true, 61)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["rate"]] ?? null) : null), 61, $this->source)), "safe_textmail", null, true);
            echo ")
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
************************************************
　ご注文者情報
************************************************
お名前：";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 67), 67, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 67), 67, $this->source), "safe_textmail", null, true);
        echo " 様
お名前(カナ)：";
        // line 68
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 68), 68, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 68), 68, $this->source), "safe_textmail", null, true);
        echo " 様
";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, true, 69)) {
            // line 70
            echo "会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, true, 70), 70, $this->source), "safe_textmail", null, true);
            echo "
";
        }
        // line 72
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 72), 72, $this->source), "safe_textmail", null, true);
        echo "
住所：";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, true, 73), "name", [], "any", false, false, true, 73), 73, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 73), 73, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 73), 73, $this->source), "safe_textmail", null, true);
        echo "
電話番号：";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, true, 74), 74, $this->source), "safe_textmail", null, true);
        echo "
メールアドレス：";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, true, 75), 75, $this->source), "safe_textmail", null, true);
        echo "

************************************************
　配送情報
************************************************

";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 81));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 82
            echo "◎お届け先";
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, true, 82)) {
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 82), 82, $this->source), "safe_textmail", null, true);
            }
            // line 83
            echo "
お名前：";
            // line 84
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, true, 84), 84, $this->source), "safe_textmail", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, true, 84), 84, $this->source), "safe_textmail", null, true);
            echo " 様
お名前(カナ)：";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, true, 85), 85, $this->source), "safe_textmail", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, true, 85), 85, $this->source), "safe_textmail", null, true);
            echo " 様
";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, true, 86)) {
                // line 87
                echo "会社名：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, true, 87), 87, $this->source), "safe_textmail", null, true);
                echo "
";
            }
            // line 89
            echo "郵便番号：〒";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, true, 89), 89, $this->source), "safe_textmail", null, true);
            echo "
住所：";
            // line 90
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, true, 90), "name", [], "any", false, false, true, 90), 90, $this->source), "safe_textmail", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, true, 90), 90, $this->source), "safe_textmail", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, true, 90), 90, $this->source), "safe_textmail", null, true);
            echo "
電話番号：";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, true, 91), 91, $this->source), "safe_textmail", null, true);
            echo "

配送方法：";
            // line 93
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, true, 93), 93, $this->source), "safe_textmail", null, true);
            echo "
お届け日：";
            // line 94
            ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, true, 94))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, true, 94)), "safe_textmail", null, true))));
            echo "
お届け時間：";
            // line 95
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, true, 95)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, true, 95), 95, $this->source), "指定なし")) : ("指定なし")), "safe_textmail", null, true);
            echo "

";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, true, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 98
                echo "商品コード：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 98), 98, $this->source), "safe_textmail", null, true);
                echo "
商品名：";
                // line 99
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 99), 99, $this->source), "safe_textmail", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 99), 99, $this->source), "safe_textmail", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 99), 99, $this->source), "safe_textmail", null, true);
                echo "
数量：";
                // line 100
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 100), 100, $this->source)), "safe_textmail", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
";
        // line 105
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, true, 105))) {
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, true, 106), 106, $this->source), "safe_textmail", null, true);
            echo "
";
        }
        // line 108
        echo "
============================================

このメッセージはお客様へのお知らせ専用ですので、
このメッセージへの返信としてご質問をお送りいただいても回答できません。
ご了承ください。
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Mail/order.twig";
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
        return array (  389 => 108,  384 => 106,  382 => 105,  379 => 104,  358 => 100,  350 => 99,  345 => 98,  341 => 97,  336 => 95,  332 => 94,  328 => 93,  323 => 91,  317 => 90,  312 => 89,  306 => 87,  304 => 86,  298 => 85,  292 => 84,  289 => 83,  284 => 82,  267 => 81,  258 => 75,  254 => 74,  248 => 73,  243 => 72,  237 => 70,  235 => 69,  229 => 68,  223 => 67,  217 => 63,  204 => 61,  200 => 60,  196 => 59,  193 => 58,  183 => 56,  179 => 55,  175 => 54,  172 => 53,  166 => 51,  164 => 50,  160 => 49,  156 => 48,  152 => 47,  149 => 46,  144 => 44,  135 => 41,  131 => 40,  128 => 39,  117 => 38,  112 => 37,  108 => 36,  106 => 35,  95 => 28,  90 => 26,  85 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  54 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/order.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Mail/order.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 11, "if" => 24, "set" => 35, "for" => 36);
        static $filters = array("escape" => 12, "date_sec" => 20, "price" => 22, "number_format" => 25, "date_day" => 94, "default" => 95);
        static $functions = array("is_reduced_tax_rate" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['autoescape', 'if', 'set', 'for'],
                ['escape', 'date_sec', 'price', 'number_format', 'date_day', 'default'],
                ['is_reduced_tax_rate']
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
