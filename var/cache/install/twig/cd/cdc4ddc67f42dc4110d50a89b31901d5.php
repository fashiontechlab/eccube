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

/* MailMagazine42/README.md */
class __TwigTemplate_73731a61b5ec4c17e185aca4494cf929 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/README.md"));

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
        echo "# メルマガ管理プラグイン

[![CI for MailMagazine42](https://github.com/EC-CUBE/mail-magazine-plugin/actions/workflows/main.yml/badge.svg)](https://github.com/EC-CUBE/mail-magazine-plugin/actions/workflows/main.yml)

## 概要
会員に向けメルマガの配信を行うためのプラグインです。  
テンプレート機能、配信履歴の管理を行えます。   
HTML形式のメルマガ配信も可能です。

## フロント画面

### F1:メールマガジン受信設定
会員登録時にメールマガジンの受信有無を選択可能。  
Myページの会員登録内容変更で設定の変更が可能。

- 受け取る
- 希望しない

----

## 管理画面

### A1:会員管理画面でのメールマガジン受信設定
- 受け取る
- 希望しない

### A2:メルマガ配信

#### A2-1:配信先設定
検索条件に一致した会員を配信先に設定する

|検索条件|備考|
|---|---|
|会員ID||
|会員種別|仮会員/本会員|
|都道府県||
|お名前||
|お名前(フリガナ)||
|性別||
|誕生月||
|誕生日|開始日〜終了日|
|メールアドレス||
|携帯メールアドレス||
|電話番号||
|職業|複数選択可能|
|合計購入金額|最低金額〜最高金額|
|合計購入回数|最低購入回数〜最高購入回数|
|登録日・更新日|開始日〜終了日|
|最終購入日|開始日〜終了日|
|購入商品名||
|購入商品コード||
|カテゴリ||
|配信形式|・HTML+TEXT<br>・HTML<br>・TEXT<br>・全員(メルマガ拒否会員含む)|
|配信メールアドレス種別|・PCメールアドレス<br>・携帯メールアドレス<br>・PCメールアドレス(携帯メールアドレスを登録している会員は除外)<br>・携帯メールアドレス(PCメールアドレスを登録している会員は除外)|

##### A2-2:配信内容設定
テンプレートを選択し、配信内容を編集する。  
multipart/alternative形式のメールマガジン配信が可能。  
`{name}`と入力した場合は、配信時に会員の名前に置き換わる。  

- タイトル
- TEXT形式
- HTML形式


##### A2-3:メルマガ配信
設定した配信内容を配信先に配信する。  
すべての配信先へメール送信完了後、管理者宛に送信完了メールを送信する。  
配信前に、任意のアドレス宛へのテスト配信が可能。  

### A3:テンプレート管理
メールマガジンのテンプレートを登録/更新/削除/プレビューできる。

テンプレート内容

|項目名|必須|備考|
|---|:---:|---|
|メール形式|○|HTML/テキスト|
|タイトル|○|{name}を名前に変換する|
|本文(TEXT形式)|○|{name}を名前に変換する|
|本文(HTML形式)|-|{name}を名前に変換する|

### A4:メルマガ配信履歴管理
配信したメールマガジンの履歴を確認/再試行/削除できる。

配信履歴内容

- 配信開始時刻
- 配信終了時刻
- タイトル
- 本文
- 配信条件
- 配信総数
- 配信済数
- 配信失敗数
- 未配信数

#### A4-1:配信条件の確認
メルマガ送信時に使用した検索条件を確認できる。

#### A4-2:失敗した場合の再送信ができる
失敗した送信先に再度配信を実行する。

#### A4-3:配信結果の確認
送信したあて先のリストを閲覧できる。  
あて先ごとに、送信成功/失敗を確認することができる。

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MailMagazine42/README.md";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/README.md", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/MailMagazine42/README.md");
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
