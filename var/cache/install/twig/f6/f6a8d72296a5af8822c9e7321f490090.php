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

/* Cart/index.twig */
class __TwigTemplate_82ac159506cf89967303d373ca194f65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Cart/index.twig"));

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
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Cart/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ショッピングカート"), "html", null, true);
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
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 28, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 29
        echo "                    </div>
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
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 35, $this->source), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 36
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 41
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 42, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 43
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 48, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 49
        echo "                    </div>
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
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
        ";
        // line 61
        $context["productStr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 61), "flashbag", [], "any", false, false, true, 61), "get", ["eccube.front.request.product"], "method", false, false, true, 61);
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 62), "flashbag", [], "any", false, false, true, 62), "get", ["eccube.front.request.error"], "method", false, false, true, 62));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 63
            echo "            ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 63);
            // line 64
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__inner\">
                        <div class=\"ec-alert-warning__inner__item\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                            <div class=\"ec-alert-warning__text\">
                                ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, ($context["productStr"] ?? null), ($context["idx"] ?? null), [], "array", true, true, true, 70)) {
                // line 71
                echo "                                    ";
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 71, $this->source), ["%product%" => (($__internal_compile_0 = ($context["productStr"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["idx"] ?? null)] ?? null) : null)]), "html", null, true));
                echo "
                                ";
            } else {
                // line 73
                echo "                                    ";
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 73, $this->source)), "html", null, true));
                echo "
                                ";
            }
            // line 75
            echo "                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 81), "flashbag", [], "any", false, false, true, 81), "get", ["eccube.front.cart.error"], "method", false, false, true, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 82
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__inner\">
                        <div class=\"ec-alert-warning__inner__item\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                            <div class=\"ec-alert-warning__text\">
                                ";
            // line 88
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 88, $this->source)), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        ";
        if ((($context["totalQuantity"] ?? null) > 0)) {
            // line 96
            echo "            <div class=\"ec-cartRole__totalText\">
                <p>
                    ";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品の合計金額は「<strong>%price%</strong>」です。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(($context["totalPrice"] ?? null), 98, $this->source))]);
            echo "
                </p>
            </div>
            ";
            // line 101
            if ((twig_length_filter($this->env, ($context["Carts"] ?? null)) > 1)) {
                // line 102
                echo "                <div class=\"ec-cartRole__error\">
                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__inner\">
                            <div class=\"ec-alert-warning__inner__item\">
                                <div class=\"ec-alert-warning__text\">
                                    ";
                // line 107
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("同時購入できない商品がカートに含まれています。"), "html", null, true));
                echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 114
            echo "
            <form name=\"form\" id=\"form_cart\" class=\"ec-cartRole\" method=\"post\" action=\"";
            // line 115
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">

                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Carts"] ?? null));
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
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 118
                echo "                    ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, true, 118);
                // line 119
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 119), "flashbag", [], "any", false, false, true, 119), "get", [(("eccube.front.cart." . ($context["cartKey"] ?? null)) . ".request.error")], "method", false, false, true, 119));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 120
                    echo "                        <div class=\"ec-cartRole__error\">
                            <div class=\"ec-alert-warning\">
                                <div class=\"ec-alert-warning__inner\">
                                    <div class=\"ec-alert-warning__inner__item\">
                                        <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                                        <div class=\"ec-alert-warning__text\">
                                            ";
                    // line 126
                    echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 126, $this->source)), "html", null, true));
                    echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "
                    <div class=\"ec-cartRole__cart\">
                        <div class=\"ec-cartTable\">
                            <ol class=\"ec-cartHeader\">
                                <li class=\"ec-cartHeader__label\">";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("削除"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品内容"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 139
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
                echo "</li>
                            </ol>
                            ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, true, 142));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 143
                    echo "                                ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", [], "any", false, false, true, 143);
                    // line 144
                    echo "                                ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "Product", [], "any", false, false, true, 144);
                    // line 145
                    echo "                                <ul class=\"ec-cartRow\">
                                    <li class=\"ec-cartRow__delColumn\">
                                        <a href=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart_handle_item", ["operation" => "remove", "productClassId" => twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "id", [], "any", false, false, true, 147)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-icon\" data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <img src=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                    echo "\" alt=\"delete\">
                                        </a>
                                    </li>
                                    <li class=\"ec-cartRow__contentColumn\">
                                        <div class=\"ec-cartRow__img\">
                                            <a target=\"_blank\" href=\"";
                    // line 153
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 153)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "MainListImage", [], "any", false, false, true, 154), 154, $this->source)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                    echo "\"/>
                                            </a>
                                        </div>
                                        <div class=\"ec-cartRow__summary\">
                                            <div class=\"ec-cartRow__name\">
                                                <a target=\"_blank\" href=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 159)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                    echo "</a>
                                                ";
                    // line 160
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, true, 160) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, true, 160), "id", [], "any", false, false, true, 160))) {
                        // line 161
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, true, 161), "ClassName", [], "any", false, false, true, 161), "name", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 163
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, true, 163) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, true, 163), "id", [], "any", false, false, true, 163))) {
                        // line 164
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, true, 164), "ClassName", [], "any", false, false, true, 164), "name", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 166
                    echo "                                            </div>
                                            <div class=\"ec-cartRow__unitPrice\">";
                    // line 167
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", [], "any", false, false, true, 167), 167, $this->source)), "html", null, true);
                    echo "</div>
                                            <div class=\"ec-cartRow__sutbtotalSP\">";
                    // line 168
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, true, 168), 168, $this->source)), "html", null, true);
                    echo "</div>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__amountColumn\">
                                        <div class=\"ec-cartRow__amount\">";
                    // line 172
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, true, 172), 172, $this->source)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountSP\">";
                    // line 173
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量："), "html", null, true);
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, true, 173), 173, $this->source)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountUpDown\">
                                            ";
                    // line 175
                    if ((twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, true, 175) > 1)) {
                        // line 176
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart_handle_item", ["operation" => "down", "productClassId" => twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "id", [], "any", false, false, true, 176)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo " class=\"ec-cartRow__amountDownButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus-dark.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </a>
                                            ";
                    } else {
                        // line 180
                        echo "                                                <div class=\"ec-cartRow__amountDownButtonDisabled\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 181
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </div>
                                            ";
                    }
                    // line 184
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart_handle_item", ["operation" => "up", "productClassId" => twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "id", [], "any", false, false, true, 184)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-cartRow__amountUpButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                <span class=\"ec-cartRow__amountUpButton__icon\"><img src=\"";
                    // line 185
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/plus-dark.svg"), "html", null, true);
                    echo "\" alt=\"increase\"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__subtotalColumn\">
                                        <div class=\"ec-cartRow__sutbtotal\">";
                    // line 190
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, true, 190), 190, $this->source)), "html", null, true);
                    echo "</div>
                                    </li>
                                </ul>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                        </div>
                    </div>
                    <div class=\"ec-cartRole__progress\">
                        ";
                // line 197
                if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_amount", [], "any", false, false, true, 197) && twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_quantity", [], "any", false, false, true, 197))) {
                    // line 198
                    echo "                            <br/>
                            ";
                    // line 199
                    if ((($__internal_compile_1 = ($context["is_delivery_free"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["cartKey"] ?? null)] ?? null) : null)) {
                        // line 200
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 202
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」または「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["least"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["cartKey"] ?? null)] ?? null) : null), 202, $this->source)), "%quantity%" => twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["quantity"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["cartKey"] ?? null)] ?? null) : null), 202, $this->source))]);
                        echo "
                            ";
                    }
                    // line 204
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_amount", [], "any", false, false, true, 204)) {
                    // line 205
                    echo "                            <br/>
                            ";
                    // line 206
                    if ((($__internal_compile_4 = ($context["is_delivery_free"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["cartKey"] ?? null)] ?? null) : null)) {
                        // line 207
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 209
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_5 = ($context["least"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["cartKey"] ?? null)] ?? null) : null), 209, $this->source))]);
                        echo "
                            ";
                    }
                    // line 211
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "delivery_free_quantity", [], "any", false, false, true, 211)) {
                    // line 212
                    echo "                            <br/>
                            ";
                    // line 213
                    if ((($__internal_compile_6 = ($context["is_delivery_free"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["cartKey"] ?? null)] ?? null) : null)) {
                        // line 214
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 216
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%quantity%" => twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["quantity"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["cartKey"] ?? null)] ?? null) : null), 216, $this->source))]);
                        echo "
                            ";
                    }
                    // line 218
                    echo "                        ";
                }
                // line 219
                echo "                    </div>
                    <div class=\"ec-cartRole__actions\">
                        <div class=\"ec-cartRole__total\">";
                // line 221
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計："), "html", null, true);
                echo "<span class=\"ec-cartRole__totalAmount\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Cart"], "totalPrice", [], "any", false, false, true, 221), 221, $this->source)), "html", null, true);
                echo "</span>
                        </div>
                        <a class=\"ec-blockBtn--action\" href=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("cart_buystep", ["cart_key" => ($context["cartKey"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("レジに進む"), "html", null, true);
                echo "</a>
                        ";
                // line 224
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 224)) {
                    // line 225
                    echo "                            <a class=\"ec-blockBtn--cancel\" href=\"";
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 227
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "            </form>
        ";
        } else {
            // line 231
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Carts"] ?? null));
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 232
                echo "                ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, true, 232);
                // line 233
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 233), "flashbag", [], "any", false, false, true, 233), "get", [(("eccube.front.cart." . ($context["cartKey"] ?? null)) . ".request.error")], "method", false, false, true, 233));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 234
                    echo "                    <div class=\"ec-cartRole__error\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                                    <div class=\"ec-alert-warning__text\">
                                        ";
                    // line 240
                    echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 240, $this->source)), "html", null, true));
                    echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "            <div class=\"ec-role\">
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                                    <div class=\"ec-alert-warning__text\">";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在カート内に商品はございません。"), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 263
        echo "    </div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Cart/index.twig";
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
        return array (  699 => 263,  688 => 255,  684 => 254,  676 => 248,  670 => 247,  657 => 240,  652 => 238,  646 => 234,  641 => 233,  638 => 232,  633 => 231,  629 => 229,  614 => 227,  606 => 225,  604 => 224,  598 => 223,  591 => 221,  587 => 219,  584 => 218,  578 => 216,  572 => 214,  570 => 213,  567 => 212,  564 => 211,  558 => 209,  552 => 207,  550 => 206,  547 => 205,  544 => 204,  538 => 202,  532 => 200,  530 => 199,  527 => 198,  525 => 197,  520 => 194,  510 => 190,  502 => 185,  495 => 184,  489 => 181,  486 => 180,  480 => 177,  473 => 176,  471 => 175,  465 => 173,  461 => 172,  453 => 168,  449 => 167,  446 => 166,  438 => 164,  435 => 163,  427 => 161,  425 => 160,  419 => 159,  409 => 154,  405 => 153,  397 => 148,  391 => 147,  387 => 145,  384 => 144,  381 => 143,  377 => 142,  372 => 140,  368 => 139,  364 => 138,  360 => 137,  354 => 133,  341 => 126,  336 => 124,  330 => 120,  325 => 119,  322 => 118,  305 => 117,  300 => 115,  297 => 114,  287 => 107,  280 => 102,  278 => 101,  272 => 98,  268 => 96,  265 => 95,  252 => 88,  247 => 86,  241 => 82,  236 => 81,  217 => 75,  211 => 73,  205 => 71,  203 => 70,  198 => 68,  192 => 64,  189 => 63,  171 => 62,  169 => 61,  161 => 56,  158 => 55,  155 => 54,  148 => 50,  145 => 49,  142 => 48,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  108 => 33,  102 => 30,  99 => 29,  96 => 28,  93 => 27,  91 => 26,  81 => 19,  76 => 16,  69 => 15,  61 => 11,  59 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Cart/index.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Cart/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 33, "for" => 62);
        static $filters = array("escape" => 19, "trans" => 19, "nl2br" => 71, "raw" => 98, "price" => 98, "length" => 101, "no_image_product" => 154, "number_format" => 172);
        static $functions = array("is_granted" => 33, "asset" => 68, "url" => 115, "csrf_token_for_anchor" => 147, "path" => 223);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'nl2br', 'raw', 'price', 'length', 'no_image_product', 'number_format'],
                ['is_granted', 'asset', 'url', 'csrf_token_for_anchor', 'path']
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
