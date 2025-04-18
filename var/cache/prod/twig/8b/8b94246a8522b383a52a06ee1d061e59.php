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

/* ProductReview42/Resource/locale/messages.ja.yaml */
class __TwigTemplate_9ed53cd157c15421e25f72fd3ffe7bf9 extends Template
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
        echo "# flash messages
product_review.admin.save.complete: 登録しました。
product_review.admin.save.error: 登録に失敗しました。
product_review.admin.not_found: 商品レビューは見つかりませんでした。
product_review.admin.delete.complete: 商品レビューを削除しました。
product_review.admin.product.not_found: 商品が見つかりません。

# 共通
product_review.common.required: 必須

# 設定画面
product_review.admin.config.title: レビュー設定
product_review.admin.config.sub_title: プラグイン一覧
product_review.admin.config.config_title: 設定
product_review.admin.config.review_max: 'レビューの表示件数(%min%〜%max%)'
product_review.admin.config.conversion.save: 登録
product_review.admin.config.conversion.back: プラグイン一覧

# レビュー一覧画面
product_review.admin.product_review.title: レビュー管理
product_review.admin.product_review.sub_title: 商品管理
product_review.admin.product_review.search_detail: 詳細検索
product_review.admin.product_review.search_button: 検索
product_review.admin.product_review.search_clear: 検索条件をクリア
product_review.admin.product_review.search_result_count: '検索結果：%count%件が該当しました。'
product_review.admin.product_review.search_multi: 投稿者名・投稿者URL
product_review.admin.product_review.search_product_name: 商品名
product_review.admin.product_review.search_product_code: 商品コード
product_review.admin.product_review.search_posted_date: 投稿日
product_review.admin.product_review.search_posted_date_start: 投稿日(開始)
product_review.admin.product_review.search_posted_date_end: 投稿日(終了)
product_review.admin.product_review.search_sex: 性別
product_review.admin.product_review.search_recommend_level: おすすめレベル
product_review.admin.product_review.search_review_status: 公開・非公開
product_review.admin.product_review.search_no_result: 検索条件に合致するデータが見つかりませんでした
product_review.admin.product_review.search_invalid_condition: 検索条件に誤りがあります
product_review.admin.product_review.search_change_condition_and_retry: 検索条件を変えて、再度検索をお試しください。
product_review.admin.product_review.search_try_detail_condition: '[詳細検索]も試してみましょう。'
product_review.admin.product_review.diaply_count: '%count%件'
product_review.admin.product_review.csv_download: CSVダウンロード
product_review.admin.product_review.csv_download_setting: CSV出力項目設定
product_review.admin.product_review.th_posted_date: 投稿日
product_review.admin.product_review.th_contributor: 投稿者名
product_review.admin.product_review.th_product_name: 商品名
product_review.admin.product_review.th_title: タイトル
product_review.admin.product_review.th_level: おすすめレベル
product_review.admin.product_review.th_status: 公開・非公開
product_review.admin.product_review.delete: 削除
product_review.admin.product_review.delete_cancel: キャンセル
product_review.admin.product_review.delete_confirm_title: レビューを削除します
product_review.admin.product_review.delete_confirm_message: 削除してよろしいですか？

# レビュー編集画面
product_review.admin.product_review_edit.title: レビュー登録・編集
product_review.admin.product_review_edit.sub_title: 商品管理
product_review.admin.product_review_edit.review_detail: レビュー詳細
product_review.admin.product_review_edit.product_name: 商品名
product_review.admin.product_review_edit.posted_date: 投稿日時
product_review.admin.product_review_edit.conversion.save: 登録
product_review.admin.product_review_edit.conversion.back: レビュー管理

# レビュー投稿画面
product_review.front.review.title: レビューを投稿
product_review.front.review.description: 商品について、お客様のご感想をお待ちしております。
product_review.front.review.product_name: 商品名
product_review.front.review.back: 戻る
product_review.front.review.confirm: 確認ページへ

# レビュー確認画面
product_review.front.review.confirm.description: |
  下記の内容で送信してもよろしいでしょうか？
  よろしければ、一番下の「投稿する」ボタンをクリックしてください。
product_review.front.review.comfirm.post: 投稿する

# レビュー完了画面
product_review.front.review.complete.thanks: ご投稿ありがとうございます。
product_review.front.review.complete.thanks_detail: |
  内容を確認後、反映させていただきます。
  今しばらくお待ちくださいませ。
product_review.front.review.complete.back: 商品ページへ戻る

# レビューフォーム
product_review.form.product_review.reviewer_name: 投稿者名
product_review.form.product_review.reviewer_url: URL
product_review.form.product_review.title: タイトル
product_review.form.product_review.comment: コメント
product_review.form.product_review.recommend_level: おすすめレベル

# 商品詳細画面への差し込みブロック
product_review.front.product_detail.title: この商品のレビュー
product_review.front.product_detail.no_review: レビューはありません。
product_review.front.product_detail.post_review: レビューを投稿
product_review.front.product_detail.name: '%name% さん'
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ProductReview42/Resource/locale/messages.ja.yaml";
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
        return new Source("", "ProductReview42/Resource/locale/messages.ja.yaml", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/ProductReview42/Resource/locale/messages.ja.yaml");
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
