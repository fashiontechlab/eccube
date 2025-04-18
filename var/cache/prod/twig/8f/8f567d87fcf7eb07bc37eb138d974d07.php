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

/* Api42/docs/_pages/quickstart.md */
class __TwigTemplate_524a0774571099e6a6c3b23f4f21e552 extends Template
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
permalink: /quickstart
---

## GitHubからインストール（開発者向け）

1. EC-CUBE（4.0.5以降）をcloneします。
    ```sh
    git clone https://github.com/EC-CUBE/ec-cube.git
    cd ec-cube
    composer install
    ```

1. DATABASE_URL と DATABASE_SERVER_VERSION を適宜変更。*(実際の環境に合わせること)*
    ```sh
    ## for PostgreSQL
    sed -i.bak -e 's/DATABASE_URL=sqlite:\\/\\/\\/var\\/eccube.db/DATABASE_URL=postgres:\\/\\/postgres:password@127.0.0.1\\/eccubedb/g' ./.env
    sed -i.bak -e 's/DATABASE_SERVER_VERSION=3/DATABASE_SERVER_VERSION=9/g' ./.env
    ```

    ```sh
    ## for MySQL
    sed -i.bak -e 's/DATABASE_URL=sqlite:\\/\\/\\/var\\/eccube.db/DATABASE_URL=mysql:\\/\\/root:password@127.0.0.1\\/eccubedb/g' ./.env
    sed -i.bak -e 's/DATABASE_SERVER_VERSION=3/DATABASE_SERVER_VERSION=5.7/g' ./.env
    ```

1. EC-CUBE4 をインストールします。
    ```sh
    bin/console eccube:install --no-interaction
    ```

1. EC-CUBEオーナーズストアのモックサーバーをセットアップします。
    ``` sh
    # プラグインの保管ディレクトリを作成
    mkdir \${PWD}/repos
    # mockサーバを起動。ここでは9999をポート番号に設定していますが、必要に応じて変更してください
    docker run -d --rm -v \${PWD}/repos:/repos -e MOCK_REPO_DIR=/repos -p 9999:8080 eccube/mock-package-api
    # mockサーバを参照するように環境変数を定義
    echo ECCUBE_PACKAGE_API_URL=http://127.0.0.1:9999 >> .env
    ```

1. 認証キーを設定します。
    ```sh
    bin/console doctrine:query:sql \"update dtb_base_info set authentication_key='dummy'\"
    ```

1. プラグインのパッケージを配置します。
    ``` sh
    cd repos
    git clone https://github.com/EC-CUBE/eccube-api4.git
    cd eccube-api4
    tar cvzf ../Api-1.0.0.tgz *
    cd ../../
    ```

1. プラグインをインストールします。
    ```sh
    bin/console eccube:composer:require ec-cube/Api42
    bin/console eccube:plugin:enable --code=Api42
    ```
    - 管理画面→オーナーズストア→プラグイン→ **プラグインを探す** からでもプラグインをインストールできます。

1. ビルトインウェブサーバーを起動
    ```sh
    bin/console server:run
    ```

API プラグインの開発のため Git リポジトリで置き換える場合は以下のとおり。
*プラグインをアンインストールすると、 Git リポジトリごと削除されてしまうため注意すること*

```sh
cd app/Plugin/

rm -rf Api
git clone https://github.com/EC-CUBE/eccube-api4.git
mv eccube-api4 Api
```

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/_pages/quickstart.md";
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
        return new Source("", "Api42/docs/_pages/quickstart.md", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/docs/_pages/quickstart.md");
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
