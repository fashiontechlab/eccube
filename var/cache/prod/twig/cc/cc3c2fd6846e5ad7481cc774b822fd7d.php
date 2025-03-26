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

/* Help/tradelaw.twig */
class __TwigTemplate_52a3dddc4951ba3207f036adbb176140 extends Template
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

        $this->parent = $this->loadTemplate("default_frame.twig", "Help/tradelaw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特定商取引法に基づく表記"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売業者名</label>
                        </dt>
                        <dd>プチプラタウン　田中 学</dd>
                    </dl>
                   <dl>
                        <dt>
                            <label class=\"ec-label\">販売責任者</label>
                        </dt>
                        <dd>
                            田中 学
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">所在地</label>
                        </dt>
                        <dd>
                            島根県松江市東津田町2168-230

                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">電話番号</label>
                        </dt>
                        <dd>0852256689</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">メールアドレス</label>
                        </dt>
                        <dd><a href=\"mailto:\">info@putipuratown.jpn.org</a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">URL</label>
                        </dt>
                            <dd><a href=\"https://putipuratown.jpn.org/\">プチプラタウン</a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">商品代金以外の必要料金</label>
                        </dt>
                        <dd>販売価格とは別に送料、代引き払いの場合は手数料がかかります。<br>送料は地域によって異なります。ご注文手続きのページに記載してあります。<br>送料：167円（下限）〜2750円（上限）<br>代引き手数料：300円</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">引き渡し時期</label>
                        </dt>
                        <dd>ご入金確認またはご注文から１週間以内に発送</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">お支払方法</label>
                        </dt>
                        <dd>・クレジットカード決済(VISA/MasterCard/JCB/AMEX/Diners)<br>
                        <img src=\"/html/user_data/assets/img/common/card_5brand.png\" alt=\"\" >
                        ・代金引換<br>
                        ・銀行振込決済(住信SBIネット銀行・楽天銀行・PayPay銀行)<br>
                        　銀行振込決済の詳細は下記をご確認下さい。<br>
                        　<a href=\"https://www.cardservice.co.jp/info/bank/pc/\" class=\"btn btn--red btn--radius btn--cubic\">PCはこちら</a><br>
                        　<a href=\"https://www.cardservice.co.jp/info/bank/m/\" class=\"btn btn--red btn--radius btn--cubic\">スマホはこちら</a><br>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">返品・交換について</label>
                        </dt>
                        <dd>商品到着後速やかにご連絡ください。商品に欠陥がある場合を除き、返品には応じかねますのでご了承ください。品違いや不良品だった場合は弊社送料負担にて対応いたします。</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">返品期限</label>
                        </dt>
                        <dd>商品到着後７日以内とさせていただきます。</dd>
                    </dl>
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
        return "Help/tradelaw.twig";
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
        return array (  68 => 16,  64 => 14,  60 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help/tradelaw.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Help/tradelaw.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 16, "trans" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
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
