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

/* Recommend42/Resource/locale/messages.ja.yml */
class __TwigTemplate_a4be827d78f26ab5f525945ba1f2d3b1 extends Template
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

        // line 1
        echo "plugin_recommend.admin.navi: おすすめ管理
plugin_recommend.admin.not_found: おすすめ商品が存在しません。
plugin_recommend.admin.register.success: おすすめ商品を登録しました。
plugin_recommend.admin.update.success: おすすめ商品を修正しました。
plugin_recommend.admin.delete.success: おすすめ商品を削除しました。
plugin_recommend.admin.delete.confirm: おすすめ情報を削除してもよろしいですか？
plugin_recommend.admin.type.product.not_found: 商品を追加してください。
plugin_recommend.admin.type.comment.placeholder: 説明文を入力してください(HTMLタグ使用可)。

plugin_recommend.admin.index.title: おすすめ商品管理
plugin_recommend.admin.index.subtitle: おすすめ商品内容設定
plugin_recommend.admin.index.total_num: <strong>%number% 件</strong> が該当しました
plugin_recommend.admin.index.col2: 商品画像
plugin_recommend.admin.index.col3: 商品名
plugin_recommend.admin.index.col4: 説明文
plugin_recommend.admin.index.delete.confirm: このおすすめ商品を削除しても宜しいですか？
plugin_recommend.admin.notice: 項目の順番はドラッグ＆ドロップでも変更可能です。
plugin_recommend.admin.new: おすすめ商品を新規登録

plugin_recommend.admin.edit.title: おすすめ商品管理
plugin_recommend.admin.edit.subtitle: おすすめ商品内容設定
plugin_recommend.admin.edit.header: おすすめ商品情報
plugin_recommend.admin.edit.product: 商品
plugin_recommend.admin.edit.comment: 説明文
plugin_recommend.admin.edit.comment.help: （最大%number%文字）
plugin_recommend.admin.edit.existed: この商品はすでにおすすめ商品として登録されています。
plugin_recommend.admin.edit.search: 商品の追加
plugin_recommend.admin.edit.product_search.header: 商品検索
plugin_recommend.admin.edit.product_search.button: 検索
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Recommend42/Resource/locale/messages.ja.yml";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Recommend42/Resource/locale/messages.ja.yml", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Recommend42/Resource/locale/messages.ja.yml");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
