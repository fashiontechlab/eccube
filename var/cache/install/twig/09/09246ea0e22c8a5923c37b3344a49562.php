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

/* Api42/docs/_pages/customize/allow_list.md */
class __TwigTemplate_26da84588d22f5a01f2343cde48ad512 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/docs/_pages/customize/allow_list.md"));

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
permalink: /customize/allow_list
---

## 取得可能なデータの追加

取得可能なデータは許可リスト方式で設定されています。

デフォルトの許可リストは `Resource/config/services.yaml` に定義されています。

```yaml

# 省略

services:

    # 省略

    core.api.allow_list:
        class: ArrayObject
        tags: ['eccube.api.allow_list']
        arguments:
            - #
                Eccube\\Entity\\AuthorityRole: ['id', 'deny_url', 'create_date', 'update_date', 'Authority', 'Creator']
                Eccube\\Entity\\BaseInfo: ['id', 'company_name', 'company_kana', 'postal_code', 'addr01', 'addr02', ... ]
                # 以降省略
```

許可リスト方式のため、カスタマイズで追加された Entity はデフォルトで取得できません。
カスタマイズで追加された Entity の取得を許可する場合は `eccube.api.allow_list` タグを付けたコンポーネントを定義します。
サービスIDは `[プラグインコード].api.allow_list` の形を推奨します。

例えばメーカー管理プラグインで利用する場合は以下のような `ArrayObject` の定義をプラグイン内の `services.yaml` に追加します。

```yaml
services:

    maker4.api.allow_list:
        class: ArrayObject
        tags: ['eccube.api.allow_list']
        arguments:
            - #
                Eccube\\Entity\\Product: ['maker_url', 'Maker']
                Plugin\\Maker4\\Entity\\Maker: ['id', 'name', 'sort_no', 'create_date', 'update_date']
```

プラグインに許可リストが含まれない場合は、 `Customize` ディレクトリ以下の `services.yaml` でも定義できます。
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/docs/_pages/customize/allow_list.md";
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
        return new Source("", "Api42/docs/_pages/customize/allow_list.md", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/docs/_pages/customize/allow_list.md");
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
