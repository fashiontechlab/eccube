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

/* Securitychecker42/Resource/template/admin/config.twig */
class __TwigTemplate_ced54ccd16238a93bc1dedea75b8df08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Securitychecker42/Resource/template/admin/config.twig"));

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

        // line 3
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 7
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Securitychecker42/Resource/template/admin/config.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "セキュリティチェックプラグイン";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "    <form role=\"form\" method=\"post\" action=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("securitychecker42_admin_config_check");
        echo "\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 14), 14, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <p>EC-CUBEのセキュリティチェックリストに基づいた、セキュリティチェックをします。</p>
                            <p>前回確認日時: ";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "check_date", [], "any", true, true, true, 21)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "check_date", [], "any", false, false, true, 21), 21, $this->source), "未確認")) : ("未確認")), "html", null, true);
        echo "</p>
                        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, true, 22), "flashBag", [], "any", false, false, true, 22), "has", ["eccube.admin.securitychecker3.warning"], "method", false, false, true, 22)) {
            // line 23
            echo "                            <div class=\"alert alert-warning\">
                                <p>本モジュールでは、EC-CUBE旧バージョンの脆弱性や、カスタマイズやプラグインにより生じた脆弱性はチェックできません。</p>
                                <p><a href=\"https://www.ec-cube.net/info/weakness/index.php?version=";
            // line 25
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
            echo "\" target=\"_blank\">こちらのEC-CUBE脆弱性情報も必ずご確認ください。</a></p>
                        </div>
                        ";
        }
        // line 28
        echo "                    </div><!-- /.box-header -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-5\"><span>var 以下のファイル、フォルダが公開されていないか</span></div>
                            <div class=\"col mb-2\">
                                ";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "var", [], "any", true, true, true, 33)) {
            // line 34
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 35
($context["target"] ?? null), "var", [], "any", false, false, true, 35) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "var", [], "any", false, false, true, 35)))) {
            // line 36
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 38
            echo "                                    <p class=\"alert alert-danger\">
                                        var フォルダが外部から存在確認出来ます。
                                    </p>
                                    <p class=\"remark\">.htaccess というファイル名で、以下の内容のファイルを作成し、 var フォルダにアップロードしてください。アップロード後、再度セキュリティチェックを実行してください。</p>
                                    <pre>
order allow,deny
deny from all
                                    </pre>
                                ";
        }
        // line 47
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\"><span>vendor 以下のファイル、フォルダが公開されていないか</span></div>
                            <div class=\"col mb-2\">
                                ";
        // line 52
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "vendor", [], "any", true, true, true, 52)) {
            // line 53
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 54
($context["target"] ?? null), "vendor", [], "any", false, false, true, 54) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "vendor", [], "any", false, false, true, 54)))) {
            // line 55
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 57
            echo "                                    <p class=\"alert alert-danger\">
                                        vendor フォルダが外部から存在確認出来ます。
                                    </p>
                                    <p class=\"remark\">.htaccess というファイル名で、以下の内容のファイルを作成し、 vendor フォルダにアップロードしてください。アップロード後、再度セキュリティチェックを実行してください。</p>
                                    <pre>
order allow,deny
deny from all
                                    </pre>
                                ";
        }
        // line 66
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">codeception が公開されていないか</div>
                            <div class=\"col mb-2\">
                                ";
        // line 71
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeception", [], "any", true, true, true, 71)) {
            // line 72
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 73
($context["target"] ?? null), "codeception", [], "any", false, false, true, 73) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeception", [], "any", false, false, true, 73)))) {
            // line 74
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 76
            echo "                                    <p class=\"alert alert-danger\">
                                        codeception フォルダが外部から存在確認出来ます
                                    </p>
                                    <p class=\"remark\">
                                        通常の運用では使用しないプログラムが含まれています。
                                        codeception フォルダを削除してください。
                                    </p>

                                ";
        }
        // line 85
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">.env が公開されていないか</div>
                            <div class=\"col mb-2\">
                                ";
        // line 90
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "dotenv", [], "any", true, true, true, 90)) {
            // line 91
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 92
($context["target"] ?? null), "dotenv", [], "any", false, false, true, 92) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "dotenv", [], "any", false, false, true, 92)))) {
            // line 93
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 95
            echo "                                    <p class=\"alert alert-danger\">
                                        .env ファイルが外部から存在確認出来ます
                                    </p>
                                    <p class=\"remark\">
                                    EC-CUBE をインストールしたフォルダの .htaccess ファイルに以下の内容を追加し、保存してください。
                                    </p>
<textarea class=\"form-control\" style=\"height: 150px\" disabled=\"disabled\">
&lt;FilesMatch &quot;^composer|^COPYING|^\\.env|^\\.maintenance|^Procfile|^app\\.json|^gulpfile\\.js|^package\\.json|^package-lock\\.json|web\\.config|^Dockerfile|\\.(ini|lock|dist|git|sh|bak|swp|env|twig|yml|yaml|dockerignore)\$&quot;&gt;
    order allow,deny
    deny from all
&lt;/FilesMatch&gt;
</textarea>
                                ";
        }
        // line 108
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">デバッグモードが有効になっていないか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 113
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "debug_mode", [], "any", true, true, true, 113)) {
            // line 114
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 115
($context["target"] ?? null), "debug_mode", [], "any", false, false, true, 115) == false)) {
            // line 116
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 118
            echo "                                    <p class=\"alert alert-danger\">
                                        デバッグモードが有効になっているようです
                                    </p>
                                    <p class=\"remark\">
                                        .env ファイルを確認し、 APP_ENV=prod に設定してください
                                    </p>

                                ";
        }
        // line 126
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">SSLが導入されているか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 131
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "ssl", [], "any", true, true, true, 131)) {
            // line 132
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 133
($context["target"] ?? null), "ssl", [], "any", false, false, true, 133) == false)) {
            // line 134
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 136
            echo "                                    <p class=\"alert alert-danger\">
                                        SSLが強制されておらず、平文で情報がやり取りされておりますので情報が漏洩する可能性があります。
                                    </p>
                                    <p class=\"remark\">
                                        常時SSLの利用をご検討ください。
                                    </p>

                                ";
        }
        // line 144
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">管理画面へのアクセスには常に SSL を利用しているか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 149
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "force_ssl", [], "any", true, true, true, 149)) {
            // line 150
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 151
($context["target"] ?? null), "force_ssl", [], "any", false, false, true, 151) == false)) {
            // line 152
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 154
            echo "                                    <p class=\"alert alert-danger\">
                                        管理画面へのアクセスでSSLが強制されておらず、平文で情報がやり取りされておりますので情報が漏洩する可能性があります。
                                    </p>
                                    <p class=\"remark\">
                                        SSLの導入後に、システム設定＞セキュリティ設定より、SSLを強制するを設定してください。
                                    </p>

                                ";
        }
        // line 162
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">TRUSTED_HOSTSを設定しているか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 167
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "trusted_hosts_is_checked", [], "any", true, true, true, 167)) {
            // line 168
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 169
($context["target"] ?? null), "trusted_hosts_is_empty", [], "any", true, true, true, 169) && twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "trusted_hosts_is_empty", [], "any", false, false, true, 169))) {
            // line 170
            echo "                                    <p class=\"alert alert-danger\">
                                        信頼できるホスト名が設定されていません。
                                    </p>
                                    <p class=\"remark\">
                                        システム設定＞セキュリティ設定より、信頼できるホスト名を設定してください。
                                    </p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 176
($context["target"] ?? null), "trusted_hosts_is_not_exact_match", [], "any", true, true, true, 176) && twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "trusted_hosts_is_not_exact_match", [], "any", false, false, true, 176))) {
            // line 177
            echo "                                    <p class=\"alert alert-danger\">
                                        信頼できるホスト名が完全一致で設定されていません。
                                    </p>
                                    <p class=\"remark\">
                                        システム設定＞セキュリティ設定より、信頼できるホスト名を設定してください。
                                        正規表現で完全一致となるよう設定することを推奨します。
                                    </p>
                                ";
        } else {
            // line 185
            echo "                                    <p>問題ありません</p>
                                ";
        }
        // line 187
        echo "                            </div>
                        </div>
                        <h4>不正が疑われるデータのチェック</h4>
                        <div class=\"row\">
                            <div class=\"col\">
                                <p>
                                    不正なコードに利用される「&lt;」や「&gt;」の記号を含むデータをチェック対象としています。<br>
                                    実際には不正でないデータも抽出される可能性がありますので、対象のデータが検出された場合はダウンロードして内容を確認してください。<br>
                                    ご自身で判断がつかない場合は<a href=\"https://www.ec-cube.net/info/security/\" target=\"_blank\">公式サイトで紹介されている専門企業</a>へご相談ください。
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">会員情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 202
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_customers", [], "any", true, true, true, 202)) {
            // line 203
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 204
($context["target"] ?? null), "unsafe_customers", [], "any", false, false, true, 204) == 0)) {
            // line 205
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 207
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 208
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "customer"]);
            echo "\" class=\"link\">対象の会員情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 211
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">お届け先情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 216
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_customers_address", [], "any", true, true, true, 216)) {
            // line 217
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 218
($context["target"] ?? null), "unsafe_customers_address", [], "any", false, false, true, 218) == 0)) {
            // line 219
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 221
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 222
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "customer_address"]);
            echo "\" class=\"link\">対象のお届け先情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 225
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">受注情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 230
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_orders", [], "any", true, true, true, 230)) {
            // line 231
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 232
($context["target"] ?? null), "unsafe_orders", [], "any", false, false, true, 232) == 0)) {
            // line 233
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 235
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 236
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "order"]);
            echo "\" class=\"link\">対象の受注情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 239
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">配送情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 244
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_shippings", [], "any", true, true, true, 244)) {
            // line 245
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 246
($context["target"] ?? null), "unsafe_shippings", [], "any", false, false, true, 246) == 0)) {
            // line 247
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 249
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 250
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "shipping"]);
            echo "\" class=\"link\">対象の配送情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 253
        echo "                            </div>
                        </div>
                        <h4>環境情報</h4>
                        <div class=\"row\">
                            <label class=\"col-5\">PHPバージョン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 259
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "php_version", [], "any", true, true, true, 259)) {
            // line 260
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 262
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "php_version", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 264
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">データーベースバージョン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 269
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "db_version", [], "any", true, true, true, 269)) {
            // line 270
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 272
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "db_version", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 274
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">サイトURL</label>
                            <div class=\"col mb-2\">
                                ";
        // line 279
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "site_url", [], "any", true, true, true, 279)) {
            // line 280
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 282
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "site_url", [], "any", false, false, true, 282));
            foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                // line 283
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["url"], 283, $this->source), "html", null, true);
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                                ";
        }
        // line 286
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">EC-CUBEバージョン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 291
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "eccube_version", [], "any", true, true, true, 291)) {
            // line 292
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 294
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "eccube_version", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 296
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">利用しているプラグイン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 301
        if (twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "plugins", [], "any", true, true, true, 301)) {
            // line 302
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "plugins", [], "any", false, false, true, 302));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 303
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "plugin_name", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "plugin_code", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo ") version";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "plugin_version", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                                ";
        }
        // line 306
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "public_key", [], "any", true, true, true, 306)) {
            // line 307
            echo "                                    <p><small>認証キー: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "public_key", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
            echo "</small></p>
                                ";
        }
        // line 309
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">株式会社イーシーキューブと共有</label>
                            <div class=\"col mb-2\">
                                ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "eccube_share", [], "any", false, false, true, 314), 314, $this->source), 'widget');
        echo "
                                ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "eccube_share", [], "any", false, false, true, 315), 315, $this->source), 'errors');
        echo "
                                <small>共有したチェック結果は、セキュリティリスクの分析・伝達等を目的としてのみ利用されます。</small>
                            </div>
                        </div>

                        <div class=\"row ";
        // line 320
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tools_agreement", [], "any", false, false, true, 320), "vars", [], "any", false, false, true, 320), "errors", [], "any", false, false, true, 320))) {
            echo " has-error ";
        }
        echo "\">
                            <div class=\"col-sm-12\">
                                <a href=\"https://www.ec-cube.net/info/security/tools_agreement.php\" target=\"_blank\">EC-CUBEセキュリティチェックモジュール・プラグイン利用約款</a>に同意いただける場合は「同意する」にチェックを入れ、「セキュリティチェック実行」ボタンをクリックしてください。
                                ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tools_agreement", [], "any", false, false, true, 323), 323, $this->source), 'widget');
        echo "
                                ";
        // line 324
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tools_agreement", [], "any", false, false, true, 324), "vars", [], "any", false, false, true, 324), "errors", [], "any", false, false, true, 324))) {
            echo "<p class=\"alert alert-danger\">セキュリティチェックを実行する場合は、必ず利用約款への同意をお願い致します。</p>";
        }
        // line 325
        echo "                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div><!-- /.col -->
                <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\"
                               href=\"";
        // line 336
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>戻る</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">セキュリティチェックを実行</button>
                            </div>
                        </div>
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
        return "Securitychecker42/Resource/template/admin/config.twig";
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
        return array (  673 => 336,  660 => 325,  656 => 324,  652 => 323,  644 => 320,  636 => 315,  632 => 314,  625 => 309,  619 => 307,  616 => 306,  613 => 305,  600 => 303,  595 => 302,  593 => 301,  586 => 296,  580 => 294,  576 => 292,  574 => 291,  567 => 286,  564 => 285,  555 => 283,  550 => 282,  546 => 280,  544 => 279,  537 => 274,  531 => 272,  527 => 270,  525 => 269,  518 => 264,  512 => 262,  508 => 260,  506 => 259,  498 => 253,  492 => 250,  489 => 249,  485 => 247,  483 => 246,  480 => 245,  478 => 244,  471 => 239,  465 => 236,  462 => 235,  458 => 233,  456 => 232,  453 => 231,  451 => 230,  444 => 225,  438 => 222,  435 => 221,  431 => 219,  429 => 218,  426 => 217,  424 => 216,  417 => 211,  411 => 208,  408 => 207,  404 => 205,  402 => 204,  399 => 203,  397 => 202,  380 => 187,  376 => 185,  366 => 177,  364 => 176,  356 => 170,  354 => 169,  351 => 168,  349 => 167,  342 => 162,  332 => 154,  328 => 152,  326 => 151,  323 => 150,  321 => 149,  314 => 144,  304 => 136,  300 => 134,  298 => 133,  295 => 132,  293 => 131,  286 => 126,  276 => 118,  272 => 116,  270 => 115,  267 => 114,  265 => 113,  258 => 108,  243 => 95,  239 => 93,  237 => 92,  234 => 91,  232 => 90,  225 => 85,  214 => 76,  210 => 74,  208 => 73,  205 => 72,  203 => 71,  196 => 66,  185 => 57,  181 => 55,  179 => 54,  176 => 53,  174 => 52,  167 => 47,  156 => 38,  152 => 36,  150 => 35,  147 => 34,  145 => 33,  138 => 28,  132 => 25,  128 => 23,  126 => 22,  122 => 21,  112 => 14,  107 => 13,  100 => 12,  88 => 10,  75 => 9,  67 => 1,  65 => 7,  63 => 5,  61 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Securitychecker42/Resource/template/admin/config.twig", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Securitychecker42/Resource/template/admin/config.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "form_theme" => 5, "if" => 22, "for" => 282);
        static $filters = array("escape" => 21, "default" => 21, "length" => 320);
        static $functions = array("url" => 13, "form_widget" => 14, "constant" => 25, "form_errors" => 315);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'default', 'length'],
                ['url', 'form_widget', 'constant', 'form_errors']
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
