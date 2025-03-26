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

/* Shopping/shipping_edit.twig */
class __TwigTemplate_b1f086f0a373fb7155b58cb3ece75a6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        // line 15
        $context["body_class"] = "cart_page";
        // line 17
        if (twig_test_empty($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 18
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品購入/お届け先の変更");
        }
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の追加"), "html", null, true);
            echo "</h1>
            ";
        } else {
            // line 32
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の変更"), "html", null, true);
            echo "</h1>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-registerRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <form method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_edit", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
        echo "\" class=\"h-adr\">
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 43), 43, $this->source), 'widget');
        echo "
                        <div class=\"ec-borderedDefs\">
                            <dl>
                                <dt>
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 47), 47, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 50
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 50), "name01", [], "any", false, false, true, 50), 50, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 50), "name02", [], "any", false, false, true, 50), 50, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 51), "name01", [], "any", false, false, true, 51), 51, $this->source), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 52), "name02", [], "any", false, false, true, 52), 52, $this->source), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 53), "name01", [], "any", false, false, true, 53), 53, $this->source), 'errors');
        echo "
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 54), "name02", [], "any", false, false, true, 54), 54, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 60), 60, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 63
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 63), "kana01", [], "any", false, false, true, 63), 63, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 63), "kana02", [], "any", false, false, true, 63), 63, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 64), "kana01", [], "any", false, false, true, 64), 64, $this->source), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 65), "kana02", [], "any", false, false, true, 65), 65, $this->source), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 66), "kana01", [], "any", false, false, true, 66), 66, $this->source), 'errors');
        echo "
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 67), "kana02", [], "any", false, false, true, 67), 67, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 73), 73, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 76
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 76), 76, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 77), 77, $this->source), 'widget');
        echo "
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 78), 78, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 84), 84, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput";
        // line 87
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 87), 87, $this->source))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 88), 88, $this->source), 'widget');
        echo "
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\"><img
                                                            src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                            </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                        </div>
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 96), 96, $this->source), 'errors');
        echo "
                                    </div>

                                    <div class=\"ec-select";
        // line 99
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 99), "pref", [], "any", false, false, true, 99), 99, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 100), "pref", [], "any", false, false, true, 100), 100, $this->source), 'widget');
        echo "
                                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 101), "pref", [], "any", false, false, true, 101), 101, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 103
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 103), "addr01", [], "any", false, false, true, 103), 103, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 104), "addr01", [], "any", false, false, true, 104), 104, $this->source), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 105), "addr01", [], "any", false, false, true, 105), 105, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 107
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 107), "addr02", [], "any", false, false, true, 107), 107, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 108), "addr02", [], "any", false, false, true, 108), 108, $this->source), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 109), "addr02", [], "any", false, false, true, 109), 109, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 115), 115, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput";
        // line 118
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 118), 118, $this->source))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 119), 119, $this->source), 'widget');
        echo "
                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 120), 120, $this->source), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            ";
        // line 125
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 125), "eccube_form_options", [], "any", false, false, true, 125), "auto_render", [], "any", false, false, true, 125); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 126
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 126), "eccube_form_options", [], "any", false, false, true, 126), "form_theme", [], "any", false, false, true, 126)) {
                // line 127
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 127), "eccube_form_options", [], "any", false, false, true, 127), "form_theme", [], "any", false, false, true, 127)], true);
                // line 128
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 128, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 130
                echo "                                    <dl>
                                        <dt>
                                            ";
                // line 132
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, true, 132), "label_attr", [], "any", false, true, true, 132), "class", [], "any", true, true, true, 132)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 132), "label_attr", [], "any", false, false, true, 132), "class", [], "any", false, false, true, 132)) : (""));
                // line 133
                echo "                                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 133, $this->source), 'label', ["label_attr" => ["class" => ($this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 133, $this->source) . " ec-label")]] + (twig_test_empty($_label_ = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 133), "label", [], "any", false, false, true, 133), 133, $this->source)) ? [] : ["label" => $_label_]));
                echo "
                                        </dt>
                                        <dd>
                                            <div class=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 136), "eccube_form_options", [], "any", false, false, true, 136), "style_class", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed($context["f"], 136, $this->source))) ? (" error") : (""));
                echo "\">
                                                ";
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 137, $this->source), 'widget');
                echo "
                                                ";
                // line 138
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 138, $this->source), 'errors');
                echo "
                                            </div>
                                        </dd>
                                    </dl>
                                ";
            }
            // line 143
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("登録する"), "html", null, true);
        echo "</button>
                                    ";
        // line 149
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 150
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
            echo "</a>
                                    ";
        } else {
            // line 152
            echo "                                        <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 154
        echo "                                </div>
                            </div>
                        </div>
                    </form>
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
        return "Shopping/shipping_edit.twig";
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
        return array (  389 => 154,  381 => 152,  373 => 150,  371 => 149,  367 => 148,  361 => 144,  355 => 143,  347 => 138,  343 => 137,  338 => 136,  331 => 133,  329 => 132,  325 => 130,  319 => 128,  316 => 127,  313 => 126,  308 => 125,  301 => 120,  297 => 119,  293 => 118,  287 => 115,  278 => 109,  274 => 108,  270 => 107,  265 => 105,  261 => 104,  257 => 103,  252 => 101,  248 => 100,  244 => 99,  238 => 96,  233 => 94,  228 => 92,  221 => 88,  215 => 87,  209 => 84,  200 => 78,  196 => 77,  192 => 76,  186 => 73,  177 => 67,  173 => 66,  169 => 65,  165 => 64,  161 => 63,  155 => 60,  146 => 54,  142 => 53,  138 => 52,  134 => 51,  130 => 50,  124 => 47,  117 => 43,  112 => 41,  103 => 34,  97 => 32,  91 => 30,  89 => 29,  84 => 26,  80 => 25,  75 => 22,  71 => 21,  66 => 11,  63 => 18,  61 => 17,  59 => 15,  57 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/shipping_edit.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Shopping/shipping_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "set" => 15, "if" => 17, "for" => 125);
        static $filters = array("trans" => 18, "escape" => 30, "filter" => 125);
        static $functions = array("is_granted" => 17, "url" => 41, "form_widget" => 43, "form_label" => 47, "has_errors" => 50, "form_errors" => 53, "asset" => 92, "form_row" => 128);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'set', 'if', 'for'],
                ['trans', 'escape', 'filter'],
                ['is_granted', 'url', 'form_widget', 'form_label', 'has_errors', 'form_errors', 'asset', 'form_row']
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
