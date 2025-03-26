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

/* ProductReview42/README.md */
class __TwigTemplate_604ae6a73a4514ab31a87e2f2f846c90 extends Template
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
        echo "# 商品レビュー EC-CUBE 4系

[![Build Status](https://travis-ci.org/EC-CUBE/ProductReview-plugin.svg?branch=feature%2F1.0.0)](https://travis-ci.org/EC-CUBE/ProductReview-plugin)
[![Build status](https://ci.appveyor.com/api/projects/status/oni9ptnqfs37uqdb?svg=true)](https://ci.appveyor.com/project/ECCUBE/ProductReview-plugin-9n48w)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5c61b4f6-edad-4908-9a9a-6b4f38574a93/mini.png)](https://insight.sensiolabs.com/projects/5c61b4f6-edad-4908-9a9a-6b4f38574a93)
[![Coverage Status](https://coveralls.io/repos/github/EC-CUBE/ProductReview-plugin/badge.svg)](https://coveralls.io/github/EC-CUBE/ProductReview-plugin)

## 機能概要
- フロントページへの表示の追加
- 入力フォームのあるページの追加
- データベースへのテーブルの追加と保存

## インストール方法

EC-CUBE4系でのプラグインのインストール方法については、EC-CUBE4系開発ドキュメントのプラグインのインストールの項を参考にしてください。

## カスタマイズの詳細

### プラグイン全般

- データベースへのテーブル(plg_product_review)の追加
- ルーティングの追加
- メッセージの追加
- ログの出力

### フロント画面

- 商品詳細ページに投稿されたレビューを表示
  - フロントページへの表示の追加
  - データベースからの読み出し
- 「レビューを書く」ボタンを押すとレビュー入力画面を表示
  - ページの追加
  - フォームの追加)
- レビューの投稿
  - POST処理
  - データベースへの保存

### 管理画面

- 機能なし
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ProductReview42/README.md";
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
        return new Source("", "ProductReview42/README.md", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/ProductReview42/README.md");
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
