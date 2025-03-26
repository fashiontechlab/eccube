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

/* Api42/docs/_pages/customize/query.md */
class __TwigTemplate_26a403267d6e2c427f48d62f98966741 extends Template
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
permalink: /customize/query
---

## Query/Mutationの追加

Query は `Plugin\\Api42\\GraphQL\\Query` インタフェースを、 Mutation は `Plugin\\Api42\\GraphQL\\Mutation` インタフェースを実装したクラスを作成することで Query/Mutation の追加が可能です。

`Hello Query!` の文字列を返す最小のQueryの実装例は以下です。

```php
<?php

namespace Customize\\GraphQL\\Query;

use GraphQL\\Type\\Definition\\Type;
use Plugin\\Api42\\GraphQL\\Query;

class HelloQuery implements Query
{
    public function getName()
    {
        return 'hello';
    }

    public function getQuery()
    {
        return [
            'type' => Type::string(),
            'resolve' => function (\$root) {
                return 'Hello Query!';
            },
        ];
    }
}
```

リクエスト

```graphql
query {
  hello
}
```

レスポンス

```json
{
  \"data\": {
    \"hello\": \"Hello Query!\"
  }
}
```

同様に `Mutation` を実装し、 `resolve` 内で更新処理を記載すると Mutation を追加できます。

### 参考

プラグインのデフォルトの Query および Mutation の実装は `Api42/GraphQL/Query` および `Api42/GraphQL/Mutation` にあります。
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/_pages/customize/query.md";
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
        return new Source("", "Api42/docs/_pages/customize/query.md", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/docs/_pages/customize/query.md");
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
