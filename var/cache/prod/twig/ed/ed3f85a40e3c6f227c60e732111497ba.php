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

/* Coupon42/Resource/locale/messages.ja.yml */
class __TwigTemplate_dc0b14027f81e654fccee7c8dd3b7639 extends Template
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
        echo "# the coupon index page
plugin_coupon.admin.index.title: クーポン管理
plugin_coupon.admin.index.subtitle: クーポン内容設定
plugin_coupon.admin.index.number: <strong>%number% 件</strong> が該当しました
plugin_coupon.admin.index.col01: クーポンID
plugin_coupon.admin.index.col02: クーポンコード
plugin_coupon.admin.index.col03: クーポン名
plugin_coupon.admin.index.col04: 種別
plugin_coupon.admin.index.col05: 会員のみ
plugin_coupon.admin.index.col06: 値引き
plugin_coupon.admin.index.col07: 残発行枚数
plugin_coupon.admin.index.col08: 下限金額
plugin_coupon.admin.index.col09: 有効期間
plugin_coupon.admin.index.col10: 編集
plugin_coupon.admin.index.col11: 状態
plugin_coupon.admin.index.col12: 削除
plugin_coupon.admin.index.delete__confirm_title: クーポンを削除します
plugin_coupon.admin.index.delete__confirm_message: クーポンを削除してよろしいですか？
plugin_coupon.admin.coupon_member.yes: 会員のみ
plugin_coupon.admin.coupon_member.no: なし
plugin_coupon.admin.coupon_type.product: 商品
plugin_coupon.admin.coupon_type.category: カテゴリ
plugin_coupon.admin.coupon_type.all: 全商品
plugin_coupon.admin.index.create_button: クーポンを新規登録
# register page
plugin_coupon.admin.regist.title: クーポン管理
plugin_coupon.admin.regist.subtitle: クーポン内容設定
plugin_coupon.admin.regist.header: クーポン情報
plugin_coupon.admin.regist.discount_price.note: 合計金額から設定金額を値引きします。
plugin_coupon.admin.regist.discount_rate.note: 対象商品の合計金額から設定した率を値引きします。
plugin_coupon.admin.regist.coupon_lower_limit.note: 対象商品の合計金額が、下限金額以上の場合にクーポンを利用できます。
plugin_coupon.admin.regist.header.product: 商品情報
plugin_coupon.admin.regist.header.category: カテゴリ情報
plugin_coupon.admin.regist.modal.product: 商品検索
plugin_coupon.admin.regist.modal.category: カテゴリ検索
plugin_coupon.admin.regist.modal.search: 検索
plugin_coupon.admin.regist.remove_product_confirm: 登録済みの商品があります。削除してよろしいですか。
plugin_coupon.admin.regist.remove_category_confirm: 登録済みのカテゴリがあります。削除してよろしいですか。
plugin_coupon.admin.regist.remove_both_confirm: 登録済みの商品・カテゴリがあります。削除してよろしいですか。
plugin_coupon.admin.label.coupon_cd: クーポンコード
plugin_coupon.admin.label.coupon_name: クーポン名
plugin_coupon.admin.label.coupon_type: 対象商品
plugin_coupon.admin.label.coupon_member: 利用制限
plugin_coupon.admin.label.discount_type: 値引き種別
plugin_coupon.admin.label.discount_type.price: 値引き額
plugin_coupon.admin.label.discount_type.rate: 値引率
plugin_coupon.admin.label.discount_price: 値引き額(円)
plugin_coupon.admin.label.discount_rate: 値引率(％)
plugin_coupon.admin.label.coupon_release: 発行枚数
plugin_coupon.admin.label.coupon_lower_limit: 下限金額(円)
plugin_coupon.admin.label.available_from_date: 有効期間
plugin_coupon.admin.label.available_to_date: 有効期間日(TO)
plugin_coupon.admin.notfound: クーポンが存在しません。
plugin_coupon.admin.coupon_id.notexists: クーポンIDがありません。
plugin_coupon.admin.duplicate: 既に利用されているクーポンコードです。
plugin_coupon.admin.avaiabledate: 有効期間に誤りがあります。
plugin_coupon.admin.coupontype: クーポン有効対象となる商品情報またはカテゴリ情報を設定してください。
plugin_coupon.admin.regist.success: クーポンを登録しました。
plugin_coupon.admin.delete.success: クーポンを削除しました。
plugin_coupon.admin.enable.success: クーポンの状態を変更しました。
plugin_coupon.admin.delete.error: クーポンの削除に失敗しました。
plugin_coupon.admin.pager.failed: ページング担当者が失敗しました。
# Order edit
plugin_coupon.admin.order_edit.header: ご利用クーポンコード
plugin_coupon.admin.order_edit.body: クーポンコード
# front
plugin_coupon.front.shopping.notexists: クーポン対象商品はございません。クーポンコードをご確認ください。
plugin_coupon.front.shopping.sameuser: このクーポンは既にご利用いただいています。
plugin_coupon.front.shopping.couponusetime: このクーポンはご利用いただくことができません。
plugin_coupon.front.shopping.minus: 合計金額を超えるため、このクーポンをご利用いただくことはできません。
plugin_coupon.front.shopping.use.minus: クーポン適用後の合計金額がマイナスになったため、クーポンの利用をキャンセルしました。
plugin_coupon.front.shopping.member: このクーポンは会員のみ利用できるクーポンです。
plugin_coupon.front.shopping.lowerlimit: このクーポンを利用するためには、対象商品をlowerLimit円以上購入してください。
plugin_coupon.front.shopping.changeorder: 注文内容が変更になりました。クーポンをご利用の場合は再度設定をお願いいたします。
plugin_coupon.front.shopping.notfound: このクーポンコードは利用できません。
plugin_coupon.front.shopping.header: クーポン
plugin_coupon.front.shopping.message.use_code: クーポンコード %code% を利用しています。
plugin_coupon.front.shopping.message.empty: クーポンをお持ちの方はクーポンコードを入力してください。
plugin_coupon.front.shopping.button.add_coupon: クーポンを変更する
plugin_coupon.front.shopping_coupon.header: クーポンコードの入力
plugin_coupon.front.shopping_coupon.body: 利用するクーポンコードを入力してください。
plugin_coupon.front.shopping_coupon.use: クーポンを利用する
plugin_coupon.front.shopping_coupon.remove: クーポンを利用しない
plugin_coupon.front.shopping.conflictpoint: クーポンとポイントの併用はできません。
plugin_coupon.front.mypage.header: ご利用クーポンコード
plugin_coupon.front.mypage.body: クーポンコード
plugin_coupon.front.code: クーポンコード

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Resource/locale/messages.ja.yml";
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
        return new Source("", "Coupon42/Resource/locale/messages.ja.yml", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Coupon42/Resource/locale/messages.ja.yml");
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
