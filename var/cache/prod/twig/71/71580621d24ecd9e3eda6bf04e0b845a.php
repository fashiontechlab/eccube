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

/* Shopping/confirm.twig */
class __TwigTemplate_6f1ace66a2c1068d41d330b519c9938e extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容のご確認"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 26
        $context["step"] = 1;
        // line 27
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 28, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 29
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 34
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 35, $this->source), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 36
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 41
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 42, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 43
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 48, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 49
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 54, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 55
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 63
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_checkout");
        echo "\">
    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 64), 64, $this->source), 'widget');
        echo "
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                    <p class=\"ec-halfInput\">";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "companyName", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-zipInput\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-telInput\">";
        // line 77
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shippings", [], "any", false, false, true, 85));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 86
            echo "                    ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 86);
            // line 87
            echo "                    ";
            $context["isShowReducedTaxMess"] = false;
            // line 88
            echo "                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 91
                echo "                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 93))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 93), "MainListImage", [], "any", false, false, true, 93)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>";
                // line 95
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                        ";
                // line 96
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 96)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 96), "classCategory1", [], "any", false, false, true, 96))) {
                    // line 97
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 97), "classCategory1", [], "any", false, false, true, 97), "className", [], "any", false, false, true, 97), "name", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 97), "classCategory1", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 99
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 99)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 99), "classCategory2", [], "any", false, false, true, 99))) {
                    // line 100
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 100), "classCategory2", [], "any", false, false, true, 100), "className", [], "any", false, false, true, 100), "name", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 100), "classCategory2", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 102
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
                echo "</span></p>
                                    </div>
                                </div>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                        </ul>
                        <p>";
            // line 108
            ((($context["isShowReducedTaxMess"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__address\">
                        <p>";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                        <p>";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</p>
                        <p>";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select\">
                                <label>";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                ";
            // line 119
            $context["delivery_fee"] = 0;
            // line 120
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "order_items", [], "any", false, false, true, 120), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, $context["item"], "isDeliveryFee", [], "any", false, false, true, 120); }));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 121
                echo "                                    ";
                $context["delivery_fee"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 121);
                // line 122
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 123)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["idx"] ?? null)] ?? null) : null), "Delivery", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(($context["delivery_fee"] ?? null), 123, $this->source)), "html", null, true);
            echo ")
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo "</label>
                                ";
            // line 127
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 127)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, true, 127)) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 127)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, true, 127), 127, $this->source))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo "</label>
                                ";
            // line 131
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, true, 131)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_time", [], "any", false, false, true, 131)) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
        // line 142
        $context["charge"] = 0;
        // line 143
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_items", [], "any", false, false, true, 143), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, $context["item"], "isCharge", [], "any", false, false, true, 143); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 144
            echo "                        ";
            $context["charge"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 144);
            // line 145
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                    ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Payment", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(($context["charge"] ?? null), 146, $this->source)), "html", null, true);
        echo ")
                </div>
            </div>
            ";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 149) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 149)))) {
            // line 150
            echo "            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
            // line 155
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "use_point", [], "any", false, false, true, 155), 155, $this->source)), "html", null, true);
            echo " pt
                </div>
            </div>
            ";
        }
        // line 159
        echo "            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-input\">
                    ";
        // line 164
        echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, true, 164), 164, $this->source), "html", null, true));
        echo "
                </div>
            </div>
            ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["activeTradeLaws"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (twig_get_attribute($this->env, $this->source, ($context["t"] ?? null), "name", [], "any", false, false, true, 167) && twig_get_attribute($this->env, $this->source, ($context["t"] ?? null), "description", [], "any", false, false, true, 167)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["activeTradeLaw"]) {
            // line 168
            echo "                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
            // line 170
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "name", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "</h2>
                    </div>
                    <div class=\"ec-input\">
                        ";
            // line 173
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "description", [], "any", false, false, true, 173), 173, $this->source);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activeTradeLaw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                    <dd class=\"ec-totalBox__specTotal\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, true, 182), 182, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, true, 186), 186, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "deliveryFeeTotal", [], "any", false, false, true, 190), 190, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 192) < 0)) {
            // line 193
            echo "                <dl class=\"ec-totalBox__spec\">
                    <dt>";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                    <dd>";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 195), 195, $this->source)), "html", null, true);
            echo "</dd>
                </dl>
                ";
        }
        // line 198
        echo "                <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, true, 198), 198, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, true, 199));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 200
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 201
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 202), 202, $this->source)), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 205), 205, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "total_by_tax_rate", [], "any", false, false, true, 206));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 207
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 209, $this->source)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内消費税"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_by_tax_rate", [], "any", false, false, true, 209)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["rate"]] ?? null) : null), 209, $this->source)), "html", null, true);
            echo ")</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 212) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 212)))) {
            // line 213
            echo "                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 216
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "UsePoint", [], "any", false, false, true, 216), 216, $this->source)), "html", null, true);
            echo " pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt><span class=\"ec-font-bold\">";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                        <dd><span class=\"ec-font-bold\">";
            // line 220
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "AddPoint", [], "any", false, false, true, 220), 220, $this->source)), "html", null, true);
            echo " pt</span></dd>
                    </dl>
                </div>
                ";
        }
        // line 224
        echo "                <div class=\"ec-totalBox__btn\">
                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("注文する"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 226
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続きに戻る"), "html", null, true);
        echo "</a>
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
        return "Shopping/confirm.twig";
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
        return array (  657 => 226,  653 => 225,  650 => 224,  643 => 220,  639 => 219,  633 => 216,  629 => 215,  625 => 213,  622 => 212,  609 => 209,  605 => 208,  602 => 207,  598 => 206,  589 => 205,  580 => 202,  576 => 201,  573 => 200,  569 => 199,  560 => 198,  554 => 195,  550 => 194,  547 => 193,  545 => 192,  540 => 190,  536 => 189,  530 => 186,  526 => 185,  520 => 182,  516 => 181,  510 => 177,  500 => 173,  494 => 170,  490 => 168,  486 => 167,  480 => 164,  474 => 161,  470 => 159,  463 => 155,  457 => 152,  453 => 150,  451 => 149,  442 => 146,  436 => 145,  433 => 144,  428 => 143,  426 => 142,  420 => 139,  415 => 136,  396 => 131,  392 => 130,  386 => 127,  382 => 126,  373 => 123,  367 => 122,  364 => 121,  359 => 120,  357 => 119,  353 => 118,  345 => 113,  336 => 112,  323 => 111,  317 => 108,  314 => 107,  297 => 102,  289 => 100,  286 => 99,  278 => 97,  276 => 96,  268 => 95,  261 => 93,  257 => 91,  253 => 90,  249 => 88,  246 => 87,  243 => 86,  226 => 85,  221 => 83,  213 => 78,  209 => 77,  203 => 76,  198 => 75,  194 => 74,  188 => 73,  180 => 72,  174 => 69,  166 => 64,  162 => 63,  152 => 56,  149 => 55,  146 => 54,  139 => 50,  136 => 49,  133 => 48,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  110 => 37,  107 => 36,  104 => 35,  101 => 34,  99 => 33,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  72 => 19,  67 => 16,  63 => 15,  58 => 11,  56 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/confirm.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Shopping/confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "set" => 26, "if" => 33, "for" => 85);
        static $filters = array("escape" => 19, "trans" => 19, "no_image_product" => 93, "price" => 102, "number_format" => 102, "filter" => 120, "date_day_with_weekday" => 127, "nl2br" => 164, "raw" => 173);
        static $functions = array("is_granted" => 33, "url" => 63, "form_widget" => 64, "asset" => 93, "is_reduced_tax_rate" => 95);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'set', 'if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price', 'number_format', 'filter', 'date_day_with_weekday', 'nl2br', 'raw'],
                ['is_granted', 'url', 'form_widget', 'asset', 'is_reduced_tax_rate']
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
