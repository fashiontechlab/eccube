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

/* Api42/docs/_pages/query/orders.md */
class __TwigTemplate_963db751d624d4c35ed47583a9352066 extends Template
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
permalink: /query/orders
---
## 受注一覧の取得

### Query

```graphql
query {
  orders (page: 2, limit: 4) {
    nodes {
      id
      payment_total
    }
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
    }
  }
}
```

### 取得結果

``` json
{
  \"data\": {
    \"orders\": {
      \"nodes\": [
        {
          \"id\": \"1600\",
          \"payment_total\": 17132066
        },
        {
          \"id\": \"1599\",
          \"payment_total\": 7374435
        },
        {
          \"id\": \"1598\",
          \"payment_total\": 3277763
        },
        {
          \"id\": \"1597\",
          \"payment_total\": 1854663
        }
      ],
      \"totalCount\": 1222,
      \"pageInfo\": {
        \"hasNextPage\": true,
        \"hasPreviousPage\": true
      }
    }
  }
}
```

## 注文IDを指定して注文を取得する

### Query

``` graphql
query {
  order(id:2) {
    id,
    payment_total
  }
}
```

### 取得結果

```json
{
  \"data\": {
    \"order\": {
      \"id\": \"2\",
      \"payment_total\": 1854663
    }
  }
}
```

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/_pages/query/orders.md";
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
        return new Source("", "Api42/docs/_pages/query/orders.md", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/docs/_pages/query/orders.md");
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
