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

/* Help/guide.twig */
class __TwigTemplate_f30c5a5cac6bc9ec962aa60dca577894 extends Template
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

        $this->parent = $this->loadTemplate("default_frame.twig", "Help/guide.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.guide.title"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    <dl>
                        <dt>
                            <label class=\"ec-label\">[1] ネットでご注文</label>
                        </dt>
                        <dd>「商品を選ぶ」よりご希望のアイテムを選んでください。
ご希望のレンタル期間にその商品が空いているかは、商品個別ページのカレンダー表示からご確認ください。
2泊3日から6泊7日まで、同一料金でのレンタルが可能です。

※お届け希望日の80日前からご予約が可能となります。
※16時までのご注文で「最短 翌日の午前お届け」（詳細）が可能です。
※クリーニングしたての商品をレンタルして頂くために、試着サービスは行っていません。
                        </dd>
                    </dl>
                   <dl>
                        <dt>
                            <label class=\"ec-label\">[2] ご希望日時にお届け</label>
                        </dt>
                        <dd>ヤマト運輸にて、お届け希望日時に、ご希望のお届け先に商品をお届けします。（時間指定も可能です。）
お届け先はご自宅以外にも、会場やご友人宅等、ご希望のご住所へのお届けが可能です。

※配送について詳しくはこちら
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">[3] ご利用</label>
                        </dt>
                        <dd>「サイズが合わない」「思っていた商品と違う」といった場合でも、代わりの商品を、即日発送（最短翌日お届け）します。
また、ベーシックな保証料金はレンタル料金に含まれています。
通常のご使用による若干の汚れ、微細な傷等は、当社にて商品状態を改善できるため、お客様の費用負担はありません。

※特殊クリーニングが必要な汚れや、特別な修繕が必要な傷が付いた場合でも補償金が発生しない「あんしんパック」（レンタル料金の+10%）に、ご希望の方はご加入いただけます。
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">[4] ラクラク返却</label>
                        </dt>
                        <dd>お客様側でのクリーニングは不要です。（クリーニング代は当社にて負担します。）
ご注文時にご希望頂いたご返却手続き日の14時までに、ヤマト運輸にてレンタルアイテムの発送手続きをお願いします。
コンビニで返却することができます。
また、ご自宅に荷物を取りに来てもらうこと（集荷）もできます。

※ご返却手続きについて詳しくはこちら
                        </dd>
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
        return "Help/guide.twig";
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
        return new Source("", "Help/guide.twig", "/home/manabu/work/2025/02/28/ec-cube/src/Eccube/Resource/template/default/Help/guide.twig");
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
