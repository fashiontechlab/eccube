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

/* Shopping/index.twig */
class __TwigTemplate_c257f1a1b74aa833a40e0a26b250ce16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/index.twig"));

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
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script>
        \$(function() {
            var \$redirectCallback = function() {
                loadingOverlay();
                \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
                \$('#shopping-form').attr('action', '";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_redirect_to");
        echo "').submit();
                setTimeout(function () {
                    loadingOverlay(\"hide\");
                }, 2000);
            };
            \$('[data-trigger]').each(function() {
                \$(this).on(\$(this).attr('data-trigger'), \$redirectCallback);
            });

            ";
        // line 30
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 31
            echo "            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');
            var form = \$('.customer-form');

            \$('#customer').click(function() {
                \$(edit).each(function(index) {
                    var name = \$(this).text();
                    var input = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name);
                    \$(form[index]).empty().append(input);
                });

                \$('.non-customer-display').hide();
                \$('.non-customer-edit').show();
                \$('.mod-button').show();
            });

            \$('#customer-ok').click(function() {
                \$(form).each(function(index) {
                    \$(hidden[index]).val(\$(form[index]).children('input').val());
                });

                var postData = {};
                \$(hidden).each(function() {
                    postData[\$(this).attr('name')] = \$(this).val();
                });

                loadingOverlay();

                \$.ajax({
                    url: \"";
            // line 60
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_customer");
            echo "\",
                    type: 'POST',
                    data: postData,
                    dataType: 'json'
                }).done(function(data) {
                    if (data.status == 'OK') {
                        \$(form).each(function(index) {
                            \$(edit[index]).empty().text(\$(form[index]).children('input').val());
                            \$(form[index]).empty();
                        });

                        // kana field
                        \$(edit[2]).empty().text(data.kana01);
                        \$(edit[3]).empty().text(data.kana02);
                        \$('#customer-kana01').val(data.kana01);
                        \$('#customer-kana02').val(data.kana02);
                    }
                }).fail(function() {
                    alert('更新に失敗しました。入力内容を確認してください。');
                }).always(function(data) {
                    // overlayを無効
                    loadingOverlay('hide');
                });

                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });

            \$('#customer-cancel').click(function() {
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });
            ";
        }
        // line 95
        echo "        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 100
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 110
        $context["step"] = 1;
        // line 111
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 112
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 112, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 113
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 117
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 118
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 119
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 119, $this->source), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 120
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 125
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 126
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 126, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 127
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 132
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 132, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 133
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 138
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 138, $this->source), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 139
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>

        <!-- アラートメッセージ -->
        ";
        // line 147
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Shopping/alert.twig");
        echo "
    </div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 150
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_confirm");
        echo "\">
        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 151), 151, $this->source), 'widget');
        echo "
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "redirect_to", [], "any", false, false, true, 152), 152, $this->source), 'widget');
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderAccount\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 159
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 160
            echo "                        <div class=\"ec-orderAccount__change non-customer-display\">
                            <button id=\"customer\" class=\"ec-inlineBtn\" type=\"button\">";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
            echo "</button>
                        </div>
                    ";
        }
        // line 164
        echo "                    <div class=\"ec-orderAccount__account non-customer-display\">
                        <p class=\"ec-halfInput\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
        echo "<span class=\"customer-edit customer-name01\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                        <p class=\"ec-halfInput\"><span class=\"customer-edit customer-kana01\">";
        // line 166
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-kana02\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-company_name\">";
        // line 167
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "companyName", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-zipInput\">〒<span class=\"customer-edit customer-postal_code\">";
        // line 168
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-pref\">";
        // line 169
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr01\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr02\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-telInput\"><span class=\"customer-edit customer-phone_number\">";
        // line 170
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-email\">";
        // line 171
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
        echo "</span></p>
                    </div>
                    ";
        // line 173
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 174
            echo "                        <div class=\"ec-borderedDefs  non-customer-edit\" style=\"display:none;\">
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-name01\"></span>
                                        <span class=\"customer-form customer-name02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前(カナ)"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-kana01\"></span>
                                        <span class=\"customer-form customer-kana02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_company_name\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-company_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                                        <span class=\"customer-form customer-postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form customer-address_pref\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr01\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\" for=\"nonmember_phone_number\">";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput\">
                                        <span class=\"customer-form customer-phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メールアドレス"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-email\"></span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class=\"mod-button\" style=\"display:none;\">
                            <span id=\"customer-ok\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK"), "html", null, true);
            echo "</button></span>
                            <span id=\"customer-cancel\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("キャンセル"), "html", null, true);
            echo "</button></span>
                        </div>
                        <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana01\" class=\"customer-in\" name=\"customer_kana01\" value=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana02\" class=\"customer-in\" name=\"customer_kana02\" value=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 270), 270, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "companyName", [], "any", false, false, true, 271), 271, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-postal_code\" class=\"customer-in\" name=\"customer_postal_code\" value=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-phone_number\" class=\"customer-in\" name=\"customer_phone_number\" value=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
            echo "\">
                    ";
        }
        // line 279
        echo "                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shippings", [], "any", false, false, true, 284));
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
            // line 285
            echo "                        ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 285);
            // line 286
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 287
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, true, 287)) {
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
                echo ")";
            }
            // line 288
            echo "                            <div class=\"ec-orderDelivery__change\">
                                ";
            // line 289
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 290
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, true, 290)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            } else {
                // line 292
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, true, 292)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            }
            // line 294
            echo "                            </div>
                        </div>
                        <div class=\"ec-orderDelivery__item\">
                            <ul class=\"ec-borderedList\">
                                ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 298));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 299
                echo "                                    <li>
                                        <div class=\"ec-imageGrid\">
                                            <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 301))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 301), "MainListImage", [], "any", false, false, true, 301)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "\"></div>
                                            <div class=\"ec-imageGrid__content\">
                                                <p>";
                // line 303
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                                ";
                // line 304
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 304)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 304), "classCategory1", [], "any", false, false, true, 304))) {
                    // line 305
                    echo "                                                    <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 305), "classCategory1", [], "any", false, false, true, 305), "className", [], "any", false, false, true, 305), "name", [], "any", false, false, true, 305), 305, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 305), "classCategory1", [], "any", false, false, true, 305), 305, $this->source), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 307
                echo "                                                ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 307)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 307), "classCategory2", [], "any", false, false, true, 307))) {
                    // line 308
                    echo "                                                    <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 308), "classCategory2", [], "any", false, false, true, 308), "className", [], "any", false, false, true, 308), "name", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 308), "classCategory2", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 310
                echo "                                                <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 310), 310, $this->source)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 310), 310, $this->source)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 310), 310, $this->source)), "html", null, true);
                echo "</span></p>
                                            </div>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "                            </ul>
                            <p>";
            // line 316
            ((($context["isShowReducedTaxMess"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                        </div>
                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                            <p>";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
            echo "</p>
                            <p>";
            // line 321
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-orderDelivery__actions\">
                            <div class=\"ec-selects\">
                                <div class=\"ec-select\">
                                    <label>";
            // line 326
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                    ";
            // line 327
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, true, 327)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["idx"] ?? null)] ?? null) : null), "Delivery", [], "any", false, false, true, 327), 327, $this->source), 'widget', ["attr" => ["class" => "form-control", "data-trigger" => "change"]]);
            echo "
                                    ";
            // line 328
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, true, 328)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["idx"] ?? null)] ?? null) : null), "Delivery", [], "any", false, false, true, 328), 328, $this->source), 'errors');
            echo "
                                </div>
                                <div class=\"ec-select ec-select__delivery\">
                                    <label>";
            // line 331
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo "</label>
                                    ";
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, true, 332)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, true, 332), 332, $this->source), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 333
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, true, 333)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, true, 333), 333, $this->source), 'errors');
            echo "
                                </div>
                                <div class=\"ec-select ec-select__time\">
                                    <label>";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo "</label>
                                    ";
            // line 337
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, true, 337)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["idx"] ?? null)] ?? null) : null), "DeliveryTime", [], "any", false, false, true, 337), 337, $this->source), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 338
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, true, 338)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["idx"] ?? null)] ?? null) : null), "DeliveryTime", [], "any", false, false, true, 338), 338, $this->source), 'errors');
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
        // line 343
        echo "                    <div class=\"ec-orderDelivery__edit\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"";
        // line 344
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping_multiple");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先を追加する"), "html", null, true);
        echo "</button>
                    </div>
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-radio\">
                        ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, true, 352));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 353
            echo "                            <div style=\"display: block;\">
                                ";
            // line 354
            $context["Payment"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, true, 354), "vars", [], "any", false, false, true, 354), "choices", [], "any", false, false, true, 354)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null), "data", [], "any", false, false, true, 354);
            // line 355
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 355, $this->source), 'widget', ["attr" => ["data-trigger" => "change"]]);
            echo "
                                ";
            // line 356
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["Payment"] ?? null), "payment_image", [], "any", false, false, true, 356))) {
                // line 357
                echo "                                    <p><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Payment"] ?? null), "payment_image", [], "any", false, false, true, 357), 357, $this->source), "save_image"), "html", null, true);
                echo "\"></p>
                                ";
            }
            // line 359
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                    </div>
                    <div class=\"ec-input ";
        // line 362
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, true, 362), 362, $this->source))) ? (" error") : (""));
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, true, 362), 362, $this->source), 'errors');
        echo "</div>
                </div>
                ";
        // line 364
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 364) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 364)))) {
            // line 365
            echo "                    <div class=\"ec-orderPayment\">
                        <div class=\"ec-rectHeading\">
                            <h2>";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"ec-input ";
            // line 369
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, true, 369), 369, $this->source))) ? (" error") : (""));
            echo "\">
                            <p>";
            // line 370
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%point% pt が利用可能です。", ["%point%" => twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 370), "Point", [], "any", false, false, true, 370), 370, $this->source))]), "html", null, true);
            echo "</p>
                            ";
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, true, 371), 371, $this->source), 'widget', ["attr" => ["type" => "text", "class" => "form-control", "data-trigger" => "change"]]);
            echo "
                            ";
            // line 372
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, true, 372), 372, $this->source), 'errors');
            echo "
                        </div>
                    </div>
                ";
        }
        // line 376
        echo "                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-input\">
                        ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, true, 381), 381, $this->source), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)"), "rows" => "6"]]);
        echo "
                        ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, true, 382), 382, $this->source), 'errors');
        echo "
                    </div>
                </div>
                ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["activeTradeLaws"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (twig_get_attribute($this->env, $this->source, ($context["t"] ?? null), "name", [], "any", false, false, true, 385) && twig_get_attribute($this->env, $this->source, ($context["t"] ?? null), "description", [], "any", false, false, true, 385)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["activeTradeLaw"]) {
            // line 386
            echo "                    <div class=\"ec-orderConfirm\">
                        <div class=\"ec-rectHeading\">
                            <h2>";
            // line 388
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "name", [], "any", false, false, true, 388), 388, $this->source), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"ec-input\">
                            ";
            // line 391
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "description", [], "any", false, false, true, 391), 391, $this->source);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activeTradeLaw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        echo "            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, true, 400), 400, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, true, 404), 404, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "deliveryFeeTotal", [], "any", false, false, true, 408), 408, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 410
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 410) < 0)) {
            // line 411
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 412
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 413
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, true, 413), 413, $this->source)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 416
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, true, 416), 416, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, true, 417));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 418
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 419
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 419), 419, $this->source), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 420
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 420), 420, $this->source)), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, true, 423), 423, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "total_by_tax_rate", [], "any", false, false, true, 424));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 425
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 426
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 427
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 427, $this->source)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内消費税"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_by_tax_rate", [], "any", false, false, true, 427)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["rate"]] ?? null) : null), 427, $this->source)), "html", null, true);
            echo ")</dd>
                    </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, true, 430) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, true, 430)))) {
            // line 431
            echo "                    <div class=\"ec-totalBox__pointBlock\">
                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 433
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 434
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "UsePoint", [], "any", false, false, true, 434), 434, $this->source)), "html", null, true);
            echo " pt</dd>
                        </dl>
                        <dl class=\"ec-totalBox__spec\">
                            <dt><span class=\"ec-font-bold\">";
            // line 437
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                            <dd><span class=\"ec-font-bold\">";
            // line 438
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "AddPoint", [], "any", false, false, true, 438), 438, $this->source)), "html", null, true);
            echo " pt</span></dd>
                        </dl>
                    </div>
                    ";
        }
        // line 442
        echo "                    <div class=\"ec-totalBox__btn\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認する"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 444
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Shopping/index.twig";
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
        return array (  1056 => 444,  1052 => 443,  1049 => 442,  1042 => 438,  1038 => 437,  1032 => 434,  1028 => 433,  1024 => 431,  1021 => 430,  1008 => 427,  1004 => 426,  1001 => 425,  997 => 424,  988 => 423,  979 => 420,  975 => 419,  972 => 418,  968 => 417,  959 => 416,  953 => 413,  949 => 412,  946 => 411,  944 => 410,  939 => 408,  935 => 407,  929 => 404,  925 => 403,  919 => 400,  915 => 399,  909 => 395,  899 => 391,  893 => 388,  889 => 386,  885 => 385,  879 => 382,  875 => 381,  869 => 378,  865 => 376,  858 => 372,  854 => 371,  850 => 370,  846 => 369,  841 => 367,  837 => 365,  835 => 364,  828 => 362,  825 => 361,  818 => 359,  812 => 357,  810 => 356,  805 => 355,  803 => 354,  800 => 353,  796 => 352,  790 => 349,  780 => 344,  777 => 343,  758 => 338,  754 => 337,  750 => 336,  744 => 333,  740 => 332,  736 => 331,  730 => 328,  726 => 327,  722 => 326,  714 => 321,  705 => 320,  692 => 319,  686 => 316,  683 => 315,  666 => 310,  658 => 308,  655 => 307,  647 => 305,  645 => 304,  637 => 303,  630 => 301,  626 => 299,  622 => 298,  616 => 294,  606 => 292,  596 => 290,  594 => 289,  591 => 288,  583 => 287,  580 => 286,  577 => 285,  560 => 284,  555 => 282,  550 => 279,  545 => 277,  541 => 276,  537 => 275,  533 => 274,  529 => 273,  525 => 272,  521 => 271,  517 => 270,  513 => 269,  509 => 268,  505 => 267,  500 => 265,  496 => 264,  483 => 254,  479 => 253,  466 => 243,  462 => 242,  442 => 225,  435 => 221,  427 => 216,  420 => 212,  416 => 211,  403 => 201,  389 => 190,  385 => 189,  371 => 178,  367 => 177,  362 => 174,  360 => 173,  355 => 171,  351 => 170,  343 => 169,  339 => 168,  335 => 167,  329 => 166,  319 => 165,  316 => 164,  310 => 161,  307 => 160,  305 => 159,  300 => 157,  292 => 152,  288 => 151,  284 => 150,  278 => 147,  268 => 140,  265 => 139,  262 => 138,  255 => 134,  252 => 133,  249 => 132,  242 => 128,  239 => 127,  236 => 126,  233 => 125,  226 => 121,  223 => 120,  220 => 119,  217 => 118,  215 => 117,  209 => 114,  206 => 113,  203 => 112,  200 => 111,  198 => 110,  188 => 103,  183 => 100,  176 => 99,  167 => 95,  129 => 60,  98 => 31,  96 => 30,  84 => 21,  77 => 16,  70 => 15,  62 => 11,  60 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/index.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/src/Eccube/Resource/template/default/Shopping/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "if" => 30, "set" => 110, "for" => 284);
        static $filters = array("escape" => 103, "trans" => 103, "no_image_product" => 301, "price" => 310, "number_format" => 310, "filter" => 385, "raw" => 391);
        static $functions = array("url" => 21, "is_granted" => 30, "include" => 147, "form_widget" => 151, "asset" => 221, "path" => 290, "is_reduced_tax_rate" => 303, "form_errors" => 328, "has_errors" => 362);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'if', 'set', 'for'],
                ['escape', 'trans', 'no_image_product', 'price', 'number_format', 'filter', 'raw'],
                ['url', 'is_granted', 'include', 'form_widget', 'asset', 'path', 'is_reduced_tax_rate', 'form_errors', 'has_errors']
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
