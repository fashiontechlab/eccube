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

/* Api42/docs/_pages/index.md */
class __TwigTemplate_ff65f9741b0bfb1ba5980676c5a49387 extends Template
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
        echo "---
permalink: /
---
EC-CUBE4 対応の Web API プラグイン

外部サービスと連携するため、[GraphQL](https://graphql.org) による Web API 機能を実現します。

## システム要件

- EC-CUBE 4.0.5 or higher
- PHP 7.2 or higher
- PostgreSQL or MySQL
- SSLサーバー証明書(TLS) は必須

- *テスト環境の作成には Docker が必要です*

### 現在のバージョンでの制限事項

- *Windows 環境での動作は未確認です*
- *SQLite3 には未対応です*
- *システム間連携を想定したAPIを前提としています。 ネイティブアプリケーションや、 SPA(Single Page Application)、シングルサインオン(SSO)などの用途は想定されていません*
- *Authorization code Grant 以外の Grant には未対応です*
- *OAuth2.0(RFC6749) や OpenID Connect には完全に準拠していません。今後のバージョンアップで準拠を目指していく予定です*



## プラグインのインストール

他のプラグインと同様にEC-CUBE4の管理画面からインストールできます。

[オーナーズストアのEC-CUBE 4.0 Web API プラグインページへ](https://www.ec-cube.net/products/detail.php?product_id=2121)

Web API プラグイン自体の開発をされる場合は[GitHubからインストール（開発者向け）](quickstart)をご覧ください。

1. [OAuth2.0 による認可](#oauth20-%E3%81%AB%E3%82%88%E3%82%8B%E8%AA%8D%E5%8F%AF) より API クライアントの認可をしてください。
1. [機能仕様](#%E6%A9%9F%E8%83%BD%E4%BB%95%E6%A7%98) より API をコールしてみましょう！

## OAuth2.0 による認可

EC-CUBE で Web API を実行する際、顧客情報を参照したり、受注情報を更新する場合などは API クライアントの認可が必要です。

このプラグインでは、 [OAuth2.0](http://openid-foundation-japan.github.io/rfc6749.ja.html) プロトコルをサポートしています。

### 対応するフロー

Authorization Code Flow のみに対応しています。

- [Authorization Code Flow](authZ_code_grant) の設定方法

### エンドポイント

```
Authorization endpoint: https://<ec-cubeのホスト名>/<管理画面URL>/authorize
Token endpoint: https://<ec-cubeのホスト名>/token
```

## 機能仕様

**この記事は GraphQL についての説明はしていませんので、GraphQL 自体の仕様について[GraphQL公式サイト](https://graphql.org/)等でご確認ください。**

エンドポイントはQuery/Mutationで共通です。

```
API endpoint: https://<ec-cubeのホスト名>/api
```

GraphQLの[スキーマ](schema)は `bin/console eccube:api:dump-schema` コマンドで出力できます。

GraphQL の Query で以下のデータの取得が可能です。

- [商品情報の取得](query/products)
- [受注情報の取得](query/orders)
- [顧客情報の取得](query/customers)

GraphQL の Mutation で以下のデータを更新可能です。

- [商品在庫の更新](mutation/product_stock)
- [出荷ステータスの更新](mutation/update_shipped)

商品/受注/会員情報の変更時(登録/更新/削除)に登録されたWebHookに対して変更を通知します。

- [WebHook による通知](webhook)

## 拡張機構

CustomizeディレクトリやプラグインでAPIを拡張できます。

- [取得可能なデータの追加](customize/allow_list)
- [Query/Mutationの追加](customize/query)
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/_pages/index.md";
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
        return new Source("", "Api42/docs/_pages/index.md", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/docs/_pages/index.md");
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
