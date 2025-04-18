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

/* Recommend42/README.md */
class __TwigTemplate_661ed327d46891599469deb49f5dde29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recommend42/README.md"));

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
        echo "# おすすめ商品管理プラグイン

[![CI for Recommend4](https://github.com/EC-CUBE/Recommend-plugin/actions/workflows/main.yml/badge.svg)](https://github.com/EC-CUBE/Recommend-plugin/actions/workflows/main.yml)

## 概要
サイトにおすすめ商品の一覧を追加することのできるプラグイン。  
[http://www.ec-cube.net/products/detail.php?product_id=1067](http://www.ec-cube.net/products/detail.php?product_id=1067)  


----------------------------------------------------------------------
## フロント画面
### F1:おすすめ商品一覧から、商品詳細ページにアクセスすることができる。
- F1-1:おすすめ商品一覧を表示する。
\t- おすすめ商品ブロックを配置した場所に表示する。
\t- 写真/商品名/価格/説明文を表示する。
\t- 非公開商品は、おすすめ商品リストに表示されないように制御する。

- F1-2:おすすめ商品一覧の商品をクリックすると、その商品の詳細ページに移動することができる。
\t- 商品詳細ページにリンクを張る。

----------------------------------------------------------------------
## 管理画面
### A1:おすすめ商品管理ページで、おすすめ商品を登録/解除することができる。
- A1-1:おすすめ商品の一覧を確認することができる。
\t- メニューバーのカテゴリ管理から、おすすめ商品管理ページにアクセスできる。
\t- おすすめ商品として登録されている商品の一覧を表示する。

- A1-2:おすすめ商品の一覧に、商品を登録することができる。
\t- [おすすめ商品を新規登録]ボタンを押すと、おすすめ商品情報の編集ページにアクセスできる。
\t- 商品の選択には、商品検索ダイアログを利用する。

- A1-3:おすすめ商品ごとに、説明文を書くことができる。
\t- 商品の選択と同時に、説明文の入力ができるフォームを表示する。
\t- 説明文は必ず入力しなければならない。
\t- HTMLタグを利用することができる。

- A1-4:おすすめ商品情報を編集することができる。
\t- おすすめ商品一覧ページに、[編集]ボタンを用意する。
\t- [編集]ボタンを押すと、おすすめ商品の情報入力ページにを遷移し、情報を更新することができる。

- A1-5:おすすめ商品の一覧から、商品の登録を解除することができる。
\t- おすすめ商品一覧ページに、[削除]ボタンを用意する。
\t- [削除]ボタンを押すと、確認の後に、おすすめ商品の登録を削除することができる。

- A1-6:おすすめ商品の並び順を変更することができる。
\t- おすすめ商品一覧ページの各行を、ドラッグ＆ドロップで移動できるようにする。
\t- この並び順が、フロントに表示するときの並び順になる。

- A1-7:非公開の商品も、おすすめ商品として登録しておくことができる。
\t- おすすめ商品登録時の商品検索ダイアログで、非公開の商品も検索の対象にする。

### A2:おすすめ商品一覧の表示を、ブロックとしてカスタマイズすることができる。
- A2-1:レイアウト編集画面で、おすすめ商品ブロックの表示位置を変更することができる。
\t- 既存ブロックと同じように、レイアウト編集画面で[おすすめ商品ブロック]を利用することができる。
\t- 全ページ適用もすることができる。
\t- プラグインインストール時に、[おすすめ商品]ブロックを#main_buttomに配置しておく。

- A2-2:ブロック編集画面で、おすすめ商品ブロックの内容を変更することができる。
\t- 既存ブロックと同じように、ブロック編集画面でブロック内容(twig)を編集することがでる。
\t- おすすめ商品ブロックを削除することはできない。

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Recommend42/README.md";
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
        return new Source("", "Recommend42/README.md", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Recommend42/README.md");
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
