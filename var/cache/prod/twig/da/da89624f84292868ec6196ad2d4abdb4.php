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

/* Shopping/nonmember.twig */
class __TwigTemplate_06566b96bcf8f118b36af2dd581ec7e3 extends Template
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
        $context["body_class"] = "cart_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/nonmember.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
<div class=\"ec-customerRole\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報の入力"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 30
        $context["step"] = 1;
        // line 31
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 32, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 33
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 38
            echo "                    <li class=\"ec-progress__item is-complete\">
                        <div class=\"ec-progress__number\">";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 39, $this->source), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 40
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 45
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 46, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 47
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 52, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 53
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 58, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 59
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <form method=\"post\" action=\"";
        // line 69
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_nonmember");
        echo "\" class=\"h-adr\">
            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 71), 71, $this->source), 'widget');
        echo "
            <div class=\"ec-borderedDefs\">
                <dl>
                    <dt>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 75), 75, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 78
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 78), "name01", [], "any", false, false, true, 78), 78, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 78), "name02", [], "any", false, false, true, 78), 78, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 79), "name01", [], "any", false, false, true, 79), 79, $this->source), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 80), "name02", [], "any", false, false, true, 80), 80, $this->source), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 81), "name01", [], "any", false, false, true, 81), 81, $this->source), 'errors');
        echo "
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 82), "name02", [], "any", false, false, true, 82), 82, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 88), 88, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 91
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 91), "kana01", [], "any", false, false, true, 91), 91, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 91), "kana02", [], "any", false, false, true, 91), 91, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 92), "kana01", [], "any", false, false, true, 92), 92, $this->source), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 93), "kana02", [], "any", false, false, true, 93), 93, $this->source), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 94), "kana01", [], "any", false, false, true, 94), 94, $this->source), 'errors');
        echo "
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 95), "kana02", [], "any", false, false, true, 95), 95, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 101), 101, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 104
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 104), 104, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 105), 105, $this->source), 'widget');
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 106), 106, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 112), 112, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-zipInput";
        // line 115
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 115), 115, $this->source))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 116), 116, $this->source), 'widget');
        echo "
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img
                                                src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                            </div>
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 124), 124, $this->source), 'errors');
        echo "
                        </div>

                        <div class=\"ec-select";
        // line 127
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 127), "pref", [], "any", false, false, true, 127), 127, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 128), "pref", [], "any", false, false, true, 128), 128, $this->source), 'widget');
        echo "
                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 129), "pref", [], "any", false, false, true, 129), 129, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 131
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 131), "addr01", [], "any", false, false, true, 131), 131, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 132), "addr01", [], "any", false, false, true, 132), 132, $this->source), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 133), "addr01", [], "any", false, false, true, 133), 133, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 135
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 135), "addr02", [], "any", false, false, true, 135), 135, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 136), "addr02", [], "any", false, false, true, 136), 136, $this->source), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 137), "addr02", [], "any", false, false, true, 137), 137, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 143), 143, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-telInput";
        // line 146
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 146), 146, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 147), 147, $this->source), 'widget');
        echo "
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 148), 148, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 154), 154, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-input";
        // line 157
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 157), "first", [], "any", false, false, true, 157), 157, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 158), "first", [], "any", false, false, true, 158), 158, $this->source), 'widget', ["attr" => ["placeholder" => "例：ec-cube@example.com"]]);
        echo "
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 159), "first", [], "any", false, false, true, 159), 159, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 161
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 161), "second", [], "any", false, false, true, 161), 161, $this->source))) ? (" error") : (""));
        echo "\">
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 162), "second", [], "any", false, false, true, 162), 162, $this->source), 'widget', ["attr" => ["placeholder" => "確認のためもう一度入力してください"]]);
        echo "
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 163), "second", [], "any", false, false, true, 163), 163, $this->source), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
            </div>
            <div class=\"ec-RegisterRole__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ"), "html", null, true);
        echo "</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 172
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </form>
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
        return "Shopping/nonmember.twig";
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
        return array (  414 => 172,  410 => 171,  399 => 163,  395 => 162,  391 => 161,  386 => 159,  382 => 158,  378 => 157,  372 => 154,  363 => 148,  359 => 147,  355 => 146,  349 => 143,  340 => 137,  336 => 136,  332 => 135,  327 => 133,  323 => 132,  319 => 131,  314 => 129,  310 => 128,  306 => 127,  300 => 124,  295 => 122,  290 => 120,  283 => 116,  277 => 115,  271 => 112,  262 => 106,  258 => 105,  254 => 104,  248 => 101,  239 => 95,  235 => 94,  231 => 93,  227 => 92,  223 => 91,  217 => 88,  208 => 82,  204 => 81,  200 => 80,  196 => 79,  192 => 78,  186 => 75,  179 => 71,  174 => 69,  162 => 60,  159 => 59,  156 => 58,  149 => 54,  146 => 53,  143 => 52,  136 => 48,  133 => 47,  130 => 46,  127 => 45,  120 => 41,  117 => 40,  114 => 39,  111 => 38,  109 => 37,  103 => 34,  100 => 33,  97 => 32,  94 => 31,  92 => 30,  84 => 25,  79 => 22,  75 => 21,  70 => 18,  66 => 17,  61 => 11,  59 => 15,  57 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/nonmember.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Shopping/nonmember.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 15, "if" => 37);
        static $filters = array("escape" => 25, "trans" => 25);
        static $functions = array("is_granted" => 37, "url" => 69, "form_widget" => 71, "form_label" => 75, "has_errors" => 78, "form_errors" => 81, "asset" => 120);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans'],
                ['is_granted', 'url', 'form_widget', 'form_label', 'has_errors', 'form_errors', 'asset']
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
