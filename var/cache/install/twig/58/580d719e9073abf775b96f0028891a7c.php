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

/* Mypage/change.twig */
class __TwigTemplate_3ec92f4ae3dd1d7e2c8d258b2f93728c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/change.twig"));

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
        $context["body_class"] = "mypage";
        // line 15
        $context["mypageno"] = "change";
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/change.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 24
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員情報編集"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 29
        $this->loadTemplate("Mypage/navi.twig", "Mypage/change.twig", 29)->display($context);
        // line 30
        echo "        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-editRole\">
                <div class=\"ec-off1Grid\">
                    <div class=\"ec-off1Grid__cell\">
                        <form method=\"post\" action=\"";
        // line 35
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_change");
        echo "\" novalidate class=\"h-adr\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 37), 37, $this->source), 'widget');
        echo "
                            <div class=\"ec-borderedDefs\">
                                <dl>
                                    <dt>
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 41), 41, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 44
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 44), "name01", [], "any", false, false, true, 44), 44, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 44), "name02", [], "any", false, false, true, 44), 44, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 45), "name01", [], "any", false, false, true, 45), 45, $this->source), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 46), "name02", [], "any", false, false, true, 46), 46, $this->source), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 47), "name01", [], "any", false, false, true, 47), 47, $this->source), 'errors');
        echo "
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 48), "name02", [], "any", false, false, true, 48), 48, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 54), 54, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 57
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 57), "kana01", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 57), "kana02", [], "any", false, false, true, 57), 57, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 58), "kana01", [], "any", false, false, true, 58), 58, $this->source), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 59), "kana02", [], "any", false, false, true, 59), 59, $this->source), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 60), "kana01", [], "any", false, false, true, 60), 60, $this->source), 'errors');
        echo "
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, true, 61), "kana02", [], "any", false, false, true, 61), 61, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 67), 67, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 70
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 70), 70, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 71), 71, $this->source), 'widget');
        echo "
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, true, 72), 72, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 78), 78, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-zipInput";
        // line 81
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 81), 81, $this->source))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 82), 82, $this->source), 'widget');
        echo "
                                            <div class=\"ec-zipInputHelp\">
                                                <div class=\"ec-zipInputHelp__icon\">
                                                    <div class=\"ec-icon\"><img
                                                                src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                            </div>
                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, true, 90), 90, $this->source), 'errors');
        echo "
                                        </div>

                                        <div class=\"ec-select";
        // line 93
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 93), "pref", [], "any", false, false, true, 93), 93, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 94), "pref", [], "any", false, false, true, 94), 94, $this->source), 'widget');
        echo "
                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 95), "pref", [], "any", false, false, true, 95), 95, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 97
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 97), "addr01", [], "any", false, false, true, 97), 97, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 98), "addr01", [], "any", false, false, true, 98), 98, $this->source), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 99), "addr01", [], "any", false, false, true, 99), 99, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 101
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 101), "addr02", [], "any", false, false, true, 101), 101, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 102), "addr02", [], "any", false, false, true, 102), 102, $this->source), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, true, 103), "addr02", [], "any", false, false, true, 103), 103, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 109), 109, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-telInput";
        // line 112
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 112), 112, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 113), 113, $this->source), 'widget');
        echo "
                                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, true, 114), 114, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 120), 120, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-input";
        // line 123
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 123), "first", [], "any", false, false, true, 123), 123, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 124), "first", [], "any", false, false, true, 124), 124, $this->source), 'widget', ["attr" => ["placeholder" => "例：ec-cube@example.com"]]);
        echo "
                                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 125), "first", [], "any", false, false, true, 125), 125, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 127
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 127), "second", [], "any", false, false, true, 127), 127, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 128), "second", [], "any", false, false, true, 128), 128, $this->source), 'widget', ["attr" => ["placeholder" => "確認のためもう一度入力してください"]]);
        echo "
                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 129), "second", [], "any", false, false, true, 129), 129, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 135), 135, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "パスワード"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-input";
        // line 138
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 138), "first", [], "any", false, false, true, 138), 138, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 139), "first", [], "any", false, false, true, 139), 139, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("半角英数記号%min%〜%max%文字", ["%min%" => twig_get_attribute($this->env, $this->source,         // line 140
($context["eccube_config"] ?? null), "eccube_password_min_len", [], "any", false, false, true, 140), "%max%" => twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_password_max_len", [], "any", false, false, true, 140)])], "type" => "password"]);
        // line 142
        echo "
                                            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 143), "first", [], "any", false, false, true, 143), 143, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"ec-input";
        // line 145
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 145), "second", [], "any", false, false, true, 145), 145, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 146), "second", [], "any", false, false, true, 146), 146, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認のためもう一度入力してください")], "type" => "password"]);
        // line 149
        echo "
                                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plain_password", [], "any", false, false, true, 150), "second", [], "any", false, false, true, 150), 150, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 156), 156, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "生年月日"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-birth";
        // line 159
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 159), 159, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 160), "year", [], "any", false, false, true, 160), 160, $this->source), 'widget');
        echo "<span>/</span>
                                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 161), "month", [], "any", false, false, true, 161), 161, $this->source), 'widget');
        echo "<span>/</span>
                                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 162), "day", [], "any", false, false, true, 162), 162, $this->source), 'widget');
        echo "
                                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birth", [], "any", false, false, true, 163), 163, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 169), 169, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "性別"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-radio";
        // line 172
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 172), 172, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 173), 173, $this->source), 'widget');
        echo "
                                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sex", [], "any", false, false, true, 174), 174, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 180), 180, $this->source), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "職業"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-select";
        // line 183
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 183), 183, $this->source))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 184), 184, $this->source), 'widget');
        echo "
                                            ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "job", [], "any", false, false, true, 185), 185, $this->source), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                ";
        // line 190
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 190), "eccube_form_options", [], "any", false, false, true, 190), "auto_render", [], "any", false, false, true, 190); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 191
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 191), "eccube_form_options", [], "any", false, false, true, 191), "form_theme", [], "any", false, false, true, 191)) {
                // line 192
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 192), "eccube_form_options", [], "any", false, false, true, 192), "form_theme", [], "any", false, false, true, 192)], true);
                // line 193
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 193, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 195
                echo "                                        <dl>
                                            <dt>
                                                ";
                // line 197
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, true, 197), "label_attr", [], "any", false, true, true, 197), "class", [], "any", true, true, true, 197)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 197), "label_attr", [], "any", false, false, true, 197), "class", [], "any", false, false, true, 197)) : (""));
                // line 198
                echo "                                                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 198, $this->source), 'label', ["label_attr" => ["class" => ($this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 198, $this->source) . " ec-label")]] + (twig_test_empty($_label_ = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 198), "label", [], "any", false, false, true, 198), 198, $this->source)) ? [] : ["label" => $_label_]));
                echo "
                                            </dt>
                                            <dd>
                                                <div class=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 201), "eccube_form_options", [], "any", false, false, true, 201), "style_class", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed($context["f"], 201, $this->source))) ? (" error") : (""));
                echo "\">
                                                    ";
                // line 202
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 202, $this->source), 'widget');
                echo "
                                                    ";
                // line 203
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 203, $this->source), 'errors');
                echo "
                                                </div>
                                            </dd>
                                        </dl>
                                    ";
            }
            // line 208
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                            </div>

                            <div class=\"ec-RegisterRole__actions\">
                                <div class=\"ec-off4Grid\">
                                    <div class=\"ec-off4Grid__cell\">
                                        <button type=\"submit\"
                                                class=\"ec-blockBtn--cancel\">";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("登録する"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
        return "Mypage/change.twig";
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
        return array (  526 => 215,  518 => 209,  512 => 208,  504 => 203,  500 => 202,  495 => 201,  488 => 198,  486 => 197,  482 => 195,  476 => 193,  473 => 192,  470 => 191,  465 => 190,  458 => 185,  454 => 184,  450 => 183,  444 => 180,  435 => 174,  431 => 173,  427 => 172,  421 => 169,  412 => 163,  408 => 162,  404 => 161,  400 => 160,  396 => 159,  390 => 156,  381 => 150,  378 => 149,  376 => 146,  372 => 145,  367 => 143,  364 => 142,  362 => 140,  361 => 139,  357 => 138,  351 => 135,  342 => 129,  338 => 128,  334 => 127,  329 => 125,  325 => 124,  321 => 123,  315 => 120,  306 => 114,  302 => 113,  298 => 112,  292 => 109,  283 => 103,  279 => 102,  275 => 101,  270 => 99,  266 => 98,  262 => 97,  257 => 95,  253 => 94,  249 => 93,  243 => 90,  238 => 88,  233 => 86,  226 => 82,  220 => 81,  214 => 78,  205 => 72,  201 => 71,  197 => 70,  191 => 67,  182 => 61,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  160 => 54,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  129 => 41,  122 => 37,  117 => 35,  110 => 30,  108 => 29,  101 => 27,  96 => 24,  89 => 23,  81 => 20,  74 => 19,  66 => 11,  64 => 17,  62 => 15,  60 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/change.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Mypage/change.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 17, "include" => 29, "for" => 190, "if" => 191);
        static $filters = array("escape" => 27, "trans" => 27, "filter" => 190);
        static $functions = array("url" => 35, "form_widget" => 37, "form_label" => 41, "has_errors" => 44, "form_errors" => 47, "asset" => 86, "form_row" => 193);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'include', 'for', 'if'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_label', 'has_errors', 'form_errors', 'asset', 'form_row']
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
