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

/* Api42/GraphQL/Mutation/UpdateProductStockMutation.php */
class __TwigTemplate_bbf914707d7b4c63dbf1c159cf3709aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/GraphQL/Mutation/UpdateProductStockMutation.php"));

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
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Api42\\GraphQL\\Mutation;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\ProductClass;
use Eccube\\Repository\\ProductClassRepository;
use GraphQL\\Type\\Definition\\Type;
use Plugin\\Api42\\GraphQL\\Error\\InvalidArgumentException;
use Plugin\\Api42\\GraphQL\\Mutation;
use Plugin\\Api42\\GraphQL\\Types;

class UpdateProductStockMutation implements Mutation
{
    /**
     * @var Types
     */
    private \$types;

    /**
     * @var ProductClassRepository
     */
    private \$productClassRepository;

    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    public function __construct(
        Types \$types,
        ProductClassRepository \$productClassRepository,
        EntityManagerInterface \$entityManager
    ) {
        \$this->types = \$types;
        \$this->productClassRepository = \$productClassRepository;
        \$this->entityManager = \$entityManager;
    }

    public function getName()
    {
        return 'updateProductStock';
    }

    public function getMutation()
    {
        return  [
            'type' => \$this->types->get(ProductClass::class),
            'args' => [
                'code' => [
                    'type' => Type::nonNull(Type::string()),
                    'description' => trans('api.update_product_stock.args.description.product_code'),
                ],
                'stock' => [
                    'type' => Type::int(),
                    'description' => trans('api.update_product_stock.args.description.stock'),
                ],
                'stock_unlimited' => [
                    'type' => Type::nonNull(Type::boolean()),
                    'description' => trans('api.update_product_stock.args.description.stock_unlimited'),
                ],
            ],
            'resolve' => [\$this, 'updateProductStock'],
        ];
    }

    public function updateProductStock(\$root, \$args)
    {
        \$ProductClasses = \$this->productClassRepository->findBy(['code' => \$args['code']]);

        // 更新対象の商品規格をチェック
        if (count(\$ProductClasses) < 1) {
            throw new InvalidArgumentException('code: No ProductClass found;');
        }
        if (count(\$ProductClasses) > 1) {
            throw new InvalidArgumentException('code: Multiple ProductClass found;');
        }

        /** @var ProductClass \$ProductClass */
        \$ProductClass = current(\$ProductClasses);
        \$productStock = \$ProductClass->getProductStock();

        if (\$args['stock_unlimited']) {
            // 在庫無制限の場合、在庫数の指定があればエラー
            if (array_key_exists('stock', \$args)) {
                throw new InvalidArgumentException('stock: Cannot update stock with stock unlimited;');
            }

            // 更新
            \$ProductClass->setStockUnlimited(true);
            \$ProductClass->setStock(null);
            \$productStock->setStock(null);
        } else {
            // 在庫制限がある場合、在庫数の指定がなければエラー
            if (!array_key_exists('stock', \$args)) {
                throw new InvalidArgumentException('stock: stock is required when stock limited;');
            }
            if (\$args['stock'] < 0) {
                throw new InvalidArgumentException('stock: stock must be a positive integer;');
            }

            // 更新
            \$ProductClass->setStockUnlimited(false);
            \$ProductClass->setStock(\$args['stock']);
            \$productStock->setStock(\$args['stock']);
        }

        \$this->productClassRepository->save(\$ProductClass);
        \$this->entityManager->flush();

        return \$ProductClass;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Api42/GraphQL/Mutation/UpdateProductStockMutation.php";
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
        return new Source("", "Api42/GraphQL/Mutation/UpdateProductStockMutation.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/GraphQL/Mutation/UpdateProductStockMutation.php");
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
