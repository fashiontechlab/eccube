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

/* MailMagazine42/Resource/locale/messages.ja.yaml */
class __TwigTemplate_93b0da5bf0f7d15ac28f9a4587e20113 extends Template
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
        echo "mailmagazine.title: メルマガ管理
mailmagazine.index.title: 配信
mailmagazine.index.btn_select_template: 配信内容を作成する
mailmagazine.select.card_title: 配信内容の設定
mailmagazine.select.btn_back: 検索画面に戻る
mailmagazine.select.btn_confirm: 確認画面へ
mailmagazine.select.note_name: ※ 名前差し込み時は {name} といれてください
mailmagazine.select.label_template: テンプレート
mailmagazine.select.label_subject: 件名
mailmagazine.select.label_body: 本文 (テキスト形式)
mailmagazine.select.label_body_html: 本文 (HTML形式)
mailmagazine.confirm.html: 配信内容の確認
mailmagazine.confirm.btn_back: 配信内容の設定に戻る
mailmagazine.confirm.btn_send_test: テスト送信する
mailmagazine.confirm.btn_send: 配信する
mailmagazine.confirm.modal.title: テスト送信
mailmagazine.confirm.modal.label_from: 送信先
mailmagazine.confirm.modal.placeholder_from: メールアドレス
mailmagazine.confirm.modal.btn_send: 送信
mailmagazine.confirm.modal.btn_cancel: 閉じる
mailmagazine.confirm.modal.confirm_prepare_message: メールマガジンを配信します。\\nよろしいですか？
mailmagazine.confirm.modal.confirm_test_message: テストメールを送信します。\\nよろしいですか？
mailmagazine.confirm.modal.confirm_test_success_message: テストメールを送信しました。
mailmagazine.confirm.modal.confirm_test_fail_message: テストメールの送信に失敗しました。
mailmagazine.template.title: テンプレート設定
mailmagazine.template.btn_new: テンプレートを新規登録
mailmagazine.template.btn_save: 登録
mailmagazine.template.btn_review: プレビュー
mailmagazine.template.modal_del_message: このテンプレートを削除しても宜しいですか？
mailmagazine.template.btn_del: 削除
mailmagazine.template.btn_edit: 編集
mailmagazine.template.th_created_date: 作成日
mailmagazine.template.th_subject: 件名
mailmagazine.template.th_edit: 編集
mailmagazine.template.th_del: 削除
mailmagazine.template.th_preview: プレビュー
mailmagazine.template.card_title: テンプレート一覧
mailmagazine.template.preview.btn_back: 戻る
mailmagazine.history.title: 配信履歴
mailmagazine.history.btn_preview: プレビュー
mailmagazine.history.btn_condition: 配信条件
mailmagazine.history.btn_result: 配信結果
mailmagazine.history.btn_delete: 削除
mailmagazine.history.btn_resend: 再試行
mailmagazine.history.modal_del_message: この履歴を削除してもよろしいですか？
mailmagazine.history.preview.btn_back: 戻る
mailmagazine.history.condition.label_null: 未指定
mailmagazine.history.result.no_record: 該当するデータがありませんでした。
mailmagazine.history.result.number_record: 総件数
mailmagazine.history.result.th_status: ステータス
mailmagazine.history.result.th_id: 会員ID
mailmagazine.history.result.th_from: 送信先
mailmagazine.history.result.th_name: 名前
mailmagazine.history.result.status_unsend: 未送信
mailmagazine.history.result.status_sent: 送信済み
mailmagazine.history.result.status_fail: 送信失敗
admin.mailmagazine.template.save.complete: メールテンプレート情報を保存しました。
admin.mailmagazine.template.save.failure: メールテンプレート情報の保存に失敗しました。
admin.mailmagazine.template.delete.complete: メールテンプレート情報を削除しました。
admin.mailmagazine.template.delete.failure: メールテンプレート情報の削除に失敗しました。
admin.mailmagazine.template.data.notfound: メールテンプレートが存在しません。
admin.mailmagazine.template.data.illegalaccess: 正常なアクセスではありません。
admin.mailmagazine.send.register.failure: 配信履歴の登録に失敗しました。
admin.mailmagazine.history.datanotfound: 配信履歴が存在しません。
admin.mailmagazine.history.delete.sucesss: 配信履歴を削除しました。
admin.mailmagazine.history.delete.failure: 配信履歴の削除に失敗しました。
admin.mailmagazine.history.search_count: 検索結果：%count%件が該当しました
admin.mailmagazine.history.th_send_start_time: 配信開始時刻
admin.mailmagazine.history.th_send_end_time: 配信終了時刻
admin.mailmagazine.history.th_subject: 件名
admin.mailmagazine.history.th_send_total: 配信総数
admin.mailmagazine.history.th_send_complete: 配信済数
admin.mailmagazine.history.th_send_fail: 配信失敗数
admin.mailmagazine.history.th_unsend: 未配信数
admin.mailmagazine.history.notice_search_no_data: 検索条件に該当するデータがありませんでした。
admin.mailmagazine.history.notice_no_data: 該当するデータがありませんでした。
admin.mailmagazine.customer.label_mailmagazine: メールマガジン送付について
admin.mailmagazine.customer.label_mailmagazine_yes: 受け取る
admin.mailmagazine.customer.label_mailmagazine_no: 受け取らない
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/Resource/locale/messages.ja.yaml";
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
        return new Source("", "MailMagazine42/Resource/locale/messages.ja.yaml", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/MailMagazine42/Resource/locale/messages.ja.yaml");
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
