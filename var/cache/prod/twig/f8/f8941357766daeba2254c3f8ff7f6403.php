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

/* Api42/Resource/template/admin/OAuth/graphiql.twig */
class __TwigTemplate_39840dbe879902f07568c8c0692274d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@admin/default_frame.twig";
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

        // line 3
        $context["menus"] = ["setting", "api", "graphiql"];
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Api42/Resource/template/admin/OAuth/graphiql.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <link href=\"https://unpkg.com/graphiql/graphiql.min.css\" rel=\"stylesheet\" />
    <style type=\"text/css\" media=\"screen\">
      .c-pageTitle {
          display: none;
      }
    </style>
";
    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <script
      crossorigin
      src=\"https://unpkg.com/react/umd/react.production.min.js\"
    ></script>
    <script
      crossorigin
      src=\"https://unpkg.com/react-dom/umd/react-dom.production.min.js\"
    ></script>
    <script
      crossorigin
      src=\"https://unpkg.com/graphiql/graphiql.min.js\"
    ></script>

    <script>
      const defaultQuery =`query {
  # 商品一覧を取得
  products(limit: 5, page: 1) {
    edges {
      node {
        id
        name
        ProductClasses {
          id
          code
          price02
          stock
        }
        Status {
          id
          name
        }
        Creator {
          id
        }
        ProductTag {
          id
        }
      }
    }
    nodes {
      id
      name
      ProductClasses {
        id
        code
        price02
        stock
      }
      Status {
        id
        name
      }
      Creator {
        id
      }
      ProductTag {
        id
      }
    }
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
    }
  }

  # ID指定で商品情報を取得
  product(id: 1) {
    id
    name
  }

  # 受注一覧を取得
  orders(limit: 5, page: 1) {
    edges {
      node {
        id
        pre_order_id
        name01
        name02
        message
        OrderItems {
          id
          product_name
          price
        }
        Shippings {
          id
        }
      }
    }
    nodes {
      id
      pre_order_id
      name01
      name02
      message
      OrderItems {
        id
        product_name
        price
      }
      Shippings {
        id
      }
    }
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
    }
  }

  # ID指定で受注情報を取得
  order(id: 1) {
    id
    order_no
  }

  # 会員一覧を取得
  customers(limit: 5, page: 1) {
    edges {
      node {
        name01
        name02
        email
        point
      }
    }
    nodes {
      name01
      name02
      email
      point
    }
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
    }
  }

  # ID指定で会員情報を取得
  customer(id:1) {
    id
    name01
    name02
  }
}
`;
      const graphQLFetcher = graphQLParams =>
        fetch('";
        // line 169
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_graphiql_api");
        echo "', {
          method: 'post',
          headers: {
            'Content-Type': 'application/json',
            'ECCUBE-CSRF-TOKEN': '";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "'
          },
          body: JSON.stringify(graphQLParams),
        })
          .then(response => response.json())
          .catch(() => response.text());
      ReactDOM.render(
        React.createElement(GraphiQL, { fetcher: graphQLFetcher, defaultQuery: defaultQuery }),
        document.getElementById('graphiql'),
      );
    </script>
";
    }

    // line 186
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "    <div id=\"graphiql\" style=\"height: calc(100vh - 65px);\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/Resource/template/admin/OAuth/graphiql.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  277 => 187,  273 => 186,  257 => 173,  250 => 169,  97 => 18,  93 => 17,  83 => 9,  79 => 8,  73 => 6,  67 => 5,  62 => 1,  60 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/template/admin/OAuth/graphiql.twig", "/home/manabu/work/2025/02/28/ec-cube/app/Plugin/Api42/Resource/template/admin/OAuth/graphiql.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3);
        static $filters = array("escape" => 173);
        static $functions = array("url" => 169, "csrf_token" => 173, "constant" => 173);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['url', 'csrf_token', 'constant']
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
