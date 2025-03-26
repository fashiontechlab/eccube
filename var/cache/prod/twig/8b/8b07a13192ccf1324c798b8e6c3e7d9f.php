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

/* Api42/docs/_pages/query/products.md */
class __TwigTemplate_9db0600a70b1e2ec1d91045d49fe6544 extends Template
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
permalink: /query/products
---
## 商品一覧の取得

### Query

```graphql
query {
  products (page: 1, limit: 2) {
    edges {
      node {
        id
        name
        create_date
      }
    }
    nodes {
      id
      name
      create_date
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

```json
{
  \"data\": {
    \"products\": {
      \"edges\": [
        {
          \"node\": {
            \"id\": \"532\",
            \"name\": \"はばのしるのです。そして。\",
            \"create_date\": \"2020-07-16T09:49:07+09:00\"
          }
        },
        {
          \"node\": {
            \"id\": \"530\",
            \"name\": \"てってまっ赤にして。\",
            \"create_date\": \"2020-07-16T09:49:06+09:00\"
          }
        }
      ],
      \"nodes\": [
        {
          \"id\": \"532\",
          \"name\": \"はばのしるのです。そして。\",
          \"create_date\": \"2020-07-16T09:49:07+09:00\"
        },
        {
          \"id\": \"530\",
          \"name\": \"てってまっ赤にして。\",
          \"create_date\": \"2020-07-16T09:49:06+09:00\"
        }
      ],
      \"totalCount\": 532,
      \"pageInfo\": {
        \"hasNextPage\": true,
        \"hasPreviousPage\": false
      }
    }
  }
}
```


## 商品IDを指定して商品を取得する

### Query

``` graphql
query {
  product(id:2) {
    id,
    name
  }
}
```

### 取得結果

```json
{
  \"data\": {
    \"product\": {
      \"id\": \"2\",
      \"name\": \"彩のジェラート\"
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
        return "Api42/docs/_pages/query/products.md";
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
        return new Source("", "Api42/docs/_pages/query/products.md", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/docs/_pages/query/products.md");
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
