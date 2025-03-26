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

/* Api42/Tests/GraphQL/Mutation/UpdateProductStockMutationTest.php */
class __TwigTemplate_bd1ef99c65dcacfe8077253fadf94961 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Api42/Tests/GraphQL/Mutation/UpdateProductStockMutationTest.php"));

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

namespace Plugin\\Api42\\Tests\\GraphQL\\Mutation;

use Eccube\\Entity\\ProductClass;
use Eccube\\Repository\\ProductClassRepository;
use Eccube\\Tests\\EccubeTestCase;
use Plugin\\Api42\\GraphQL\\Error\\InvalidArgumentException;
use Plugin\\Api42\\GraphQL\\Mutation\\UpdateProductStockMutation;
use Plugin\\Api42\\GraphQL\\Types;

class UpdateProductStockMutationTest extends EccubeTestCase
{
    /** @var ProductClassRepository */
    private \$productClassRepository;

    /** @var UpdateProductStockMutation */
    private \$updateProductStockMutation;

    public function setUp(): void
    {
        parent::setUp();
        \$types = self::getContainer()->get(Types::class);
        \$this->productClassRepository = self::getContainer()->get(ProductClassRepository::class);
        \$this->updateProductStockMutation = new UpdateProductStockMutation(\$types, \$this->productClassRepository, \$this->entityManager);

        // テスト用の商品を作成
        \$Product = \$this->createProduct();
        /** @var ProductClass[] \$ProductClasses */
        \$ProductClasses = \$Product->getProductClasses();

        // 在庫100個
        \$ProductClasses[0]->setCode('code-limited');
        \$ProductClasses[0]->setStock(100);
        \$ProductClasses[0]->setStockUnlimited(false);
        \$ProductClasses[0]->getProductStock()->setStock(100);

        // 在庫無制限
        \$ProductClasses[1]->setCode('code-unlimited');
        \$ProductClasses[1]->setStock(null);
        \$ProductClasses[1]->setStockUnlimited(true);
        \$ProductClasses[1]->getProductStock()->setStock(null);

        \$this->entityManager->persist(\$Product);
        \$this->entityManager->flush();
    }

    /**
     * @dataProvider updateProductStockProvider
     *
     * @param \$args
     * @param \$expectStockUnlimited
     * @param \$expectStock
     * @param \$expectExeption
     */
    public function testUpdateProductStock(\$args, \$expectStockUnlimited, \$expectStock, \$expectExeption)
    {
        try {
            \$ProductClass = \$this->updateProductStockMutation->updateProductStock(null, \$args);

            // レスポンスの確認
            self::assertEquals(\$expectStockUnlimited, \$ProductClass->isStockUnlimited());
            self::assertEquals(\$expectStock, \$ProductClass->getStock());
            self::assertEquals(\$expectStock, \$ProductClass->getProductStock()->getStock());
        } catch (InvalidArgumentException \$e) {
            // エラーの確認
            self::assertMatchesRegularExpression(\$expectExeption, \$e->getMessage());
        }

        // DBの確認
        \$ProductClasses = \$this->productClassRepository->findBy(['code' => \$args['code']]);
        self::assertEquals(\$expectStockUnlimited, \$ProductClasses[0]->isStockUnlimited());
        self::assertEquals(\$expectStock, \$ProductClasses[0]->getStock());
        self::assertEquals(\$expectStock, \$ProductClasses[0]->getProductStock()->getStock());
    }

    public function updateProductStockProvider()
    {
        return [
            [['code' => 'code-limited', 'stock_unlimited' => false, 'stock' => 50], false, 50, null],
            [['code' => 'code-limited', 'stock_unlimited' => false, 'stock' => 0], false, 0, null],
            [['code' => 'code-limited', 'stock_unlimited' => false, 'stock' => -1], false, 100, '/stock must be a positive integer/'],
            [['code' => 'code-limited', 'stock_unlimited' => false], false, 100, '/stock is required when stock limited/'],
            [['code' => 'code-limited', 'stock_unlimited' => true], true, null, null],
            [['code' => 'code-limited', 'stock_unlimited' => true, 'stock' => 50], false, 100, '/Cannot update stock with stock unlimited/'],
            [['code' => 'code-unlimited', 'stock_unlimited' => false, 'stock' => 50], false, 50, null],
            [['code' => 'code-unlimited', 'stock_unlimited' => false, 'stock' => 0], false, 0, null],
            [['code' => 'code-unlimited', 'stock_unlimited' => false, 'stock' => -1], true, null, '/stock must be a positive integer/'],
            [['code' => 'code-unlimited', 'stock_unlimited' => false], true, null, '/stock is required when stock limited/'],
            [['code' => 'code-unlimited', 'stock_unlimited' => true], true, null, null],
            [['code' => 'code-unlimited', 'stock_unlimited' => true, 'stock' => 50], true, null, '/Cannot update stock with stock unlimited/'],
        ];
    }

    /**
     * 重複するcodeを指定して更新
     */
    public function testUpdateProductStockMultiple()
    {
        // プロダクトコードを重複させる
        \$ProductClasses = \$this->productClassRepository->findBy(['code' => 'code-limited']);
        \$ProductClasses[0]->setCode('code-multiple');
        \$ProductClasses = \$this->productClassRepository->findBy(['code' => 'code-unlimited']);
        \$ProductClasses[0]->setCode('code-multiple');
        \$this->entityManager->flush();

        try {
            \$this->updateProductStockMutation->updateProductStock(null, ['code' => 'code-multiple']);
            // 通らない
            self::assertTrue(false);
        } catch (InvalidArgumentException \$e) {
            self::assertMatchesRegularExpression('/Multiple ProductClass found/', \$e->getMessage());
        }
    }

    /**
     * 存在しないcodeを指定して更新
     */
    public function testUpdateProductStockNoData()
    {
        try {
            \$this->updateProductStockMutation->updateProductStock(null, ['code' => 'code-multiple']);
            // 通らない
            self::assertTrue(false);
        } catch (InvalidArgumentException \$e) {
            self::assertMatchesRegularExpression('/No ProductClass found/', \$e->getMessage());
        }
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
        return "Api42/Tests/GraphQL/Mutation/UpdateProductStockMutationTest.php";
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
        return new Source("", "Api42/Tests/GraphQL/Mutation/UpdateProductStockMutationTest.php", "/home/manabu/work/2025/02/20/docker-compose起動/ec-cube/app/Plugin/Api42/Tests/GraphQL/Mutation/UpdateProductStockMutationTest.php");
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
