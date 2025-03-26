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

/* Api42/docs/_pages/mutation/product_stock.md */
class __TwigTemplate_6b118ff01932d489f16223c2a11fa94f extends Template
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
permalink: /mutation/product_stock
---

## 商品在庫の更新

updateProductStock で商品在庫の更新ができます。
`stock_unlimited: false` の場合は `stock` が必須、`stock_unlimited: true` の場合は `stock` を指定できません。

### スキーマ

```graphql
type Mutation {
  updateProductStock(
    \"\"\"商品コード\"\"\"
    code: String!

    \"\"\"在庫数（在庫無制限の場合、0以上の数値を指定）\"\"\"
    stock: Int

    \"\"\"在庫無制限（無制限は true 、制限は false を指定）\"\"\"
    stock_unlimited: Boolean!
  ): ProductClass
}
```

### 実行例

#### リクエスト（在庫有限）

```graphql
mutation {
  updateProductStock (
    code: \"sand-01\",
    stock: 10,
    stock_unlimited: false
  ) {
    code
    stock
    stock_unlimited
  }
}
```

#### レスポンス（在庫有限）

```json
{
  \"data\": {
    \"updateProductStock\": {
      \"code\": \"sand-01\",
      \"stock\": 10,
      \"stock_unlimited\": false,
    }
  }
}
```

#### リクエスト（在庫無限）

```graphql
mutation {
  updateProductStock (
    code: \"sand-01\",
    stock_unlimited: true
  ) {
    code
    stock
    stock_unlimited
  }
}
```

#### レスポンス（在庫無限）

```json
{
  \"data\": {
    \"updateProductStock\": {
      \"code\": \"sand-01\",
      \"stock\": null,
      \"stock_unlimited\": true,
    }
  }
}
```

#### Variables を利用したリクエスト例

```graphql
mutation UpdateProductStock(
    \$code: String!,
    \$stock: Int,
    \$unlimited: Boolean!
  ){
  updateProductStock (
    code: \$code,
    stock: \$stock,
    stock_unlimited: \$unlimited
  ) {
    code
    stock
    stock_unlimited
  }
}
```

```json
{
\t\"code\": \"sand-01\",
\t\"stock\": 10,
\t\"unlimited\": false
}
```
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/_pages/mutation/product_stock.md";
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
        return new Source("", "Api42/docs/_pages/mutation/product_stock.md", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/docs/_pages/mutation/product_stock.md");
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
